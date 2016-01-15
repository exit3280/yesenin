(function(){
  'use strict';
  angular.module('app.dashboard')
    .controller('Dashboard', Dashboard);

  function Dashboard($q, $http, $sce) {
    var vm = this;
    vm.poemNames = [];
    vm.poemNamesPagination = {};
    vm.choosePoem = choosePoem;
    vm.trust = $sce.trustAsHtml;
    vm.changeLanguage = changeLanguage;
    vm.currentLanguage = 'en_US';
    vm.chosenPoem = null;
    vm.searchName = '';
    vm.onSearchName = onSearchName;
    vm.poemNamesPrevPage = poemNamesPrevPage;
    vm.poemNamesNextPage = poemNamesNextPage;
    vm.languages = [];


    activate();

    function activate() {
      var promises = [getPoemNames(), getLanguages()];
      return $q.all(promises).then(function() {
        console.log('Dashboard loaded.');
      });
    }

    function getPoemNames() {
      var params = { language: vm.currentLanguage };
      if(vm.searchName !== '') { params['search_name'] = vm.searchName }
      if(vm.poemNamesPagination.current_page) { params['page'] = vm.poemNamesPagination.current_page; }

      return $http.get('/api/poems/names', { params: params }).then(function(response) {
        vm.poemNames = response.data.data;
        delete response.data.data;
        vm.poemNamesPagination = response.data;
      });
    }

    function getLanguages() {
      return $http.get('/api/languages').then(function(response) {
        vm.languages = response.data;
      });
    }

    function choosePoem(poem) {
      if(poem && poem.id) {
        return $http.get('/api/poems/get_poem', { params: { id: poem.id } }).then(function(response) {
          vm.chosenPoem = response.data;
        });
      }
    }

    function changeLanguage(language) {
      vm.currentLanguage = language.iso_name;
      getPoemNames();
      vm.chosenPoem = null;
    }

    function onSearchName() {
      vm.poemNamesPagination.current_page = 1;
      getPoemNames();
    }

    function poemNamesPrevPage() {
      vm.poemNamesPagination.current_page -= 1;
      getPoemNames();
    }

    function poemNamesNextPage() {
      vm.poemNamesPagination.current_page += 1;
      getPoemNames();
    }
  }
})();
