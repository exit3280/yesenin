(function(){

  'use strict';

  angular.module('app.dashboard').config(['$routeProvider',
      function($routeProvider) {
        $routeProvider.
          when('/', {
            templateUrl: 'partials/dashboard/poems',
            controller: 'Dashboard',
            controllerAs: 'vm'
          });
      }]);

})();
