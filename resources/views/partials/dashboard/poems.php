<div class="row">
  <div class="col-sm-4">
    <input type="text" class="form-control" ng-model="vm.searchName" ng-keyup="vm.onSearchName()" placeholder="Search for...">
  </div>
  <div class="col-sm-8">
    <div class="btn-group pull-right" role="group">
      <button type="button" ng-class="{active: vm.currentLanguage == 'en_US'}" class="btn btn-default" ng-click="vm.changeLanguage('en_US')">English</button>
      <button type="button" ng-class="{active: vm.currentLanguage == 'hr_HR'}" class="btn btn-default" ng-click="vm.changeLanguage('hr_HR')">Croatian</button>
    </div>
  </div>
</div>
<hr />
<div class="row">
  <div class="col-sm-4">
    <div class="list-group">
      <button class="list-group-item" ng-repeat="poem in vm.poemNames" ng-click="vm.choosePoem(poem)">{{ poem.name }}</button>
    </div>
    <nav>
      <ul class="pager">
        <li class="previous" ng-hide="vm.poemNamesPagination.prev_page_url == null" ng-click="vm.poemNamesPrevPage()"><a><span aria-hidden="true">&larr;</span> Prev</a></li>
        <li class="next" ng-hide="vm.poemNamesPagination.next_page_url == null" ng-click="vm.poemNamesNextPage()"><a>Next <span aria-hidden="true">&rarr;</span></a></li>
      </ul>
    </nav>
  </div>
  <div class="col-sm-8 poem" ng-bind-html="vm.trust(vm.chosenPoem.text)">
  </div>

</div>

