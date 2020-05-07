<?php
include "config.php";
?>
<!-- Introduction -->
<div class="row">
  <article class="col-xs-12 col-lg-10 col-lg-offset-1">
    <p>
      <h2>اسکرام پوکر آنلاین</h2>
      به ابزار رایگان اسکرام پوکر آنلاین خوش آمدید. این برنامه رایگان بوده و تا ابد رایگان خواهد ماند.
      این برنامه متن باز، از نسخه اصلی آن در گیت‌هاب فورک شده و با اعمال تغییراتی به منظور سهولت دسترسی کاربران در این سرور بارگذاری شده است. 
      به عنوان اسکرام مستر تیم، می‌توانید یک جلسه برنامه‌ریزی اسپرینت را با نام دلخواه ایجاد کرده و از اعضای تیم خود بخواهید که به آن بپیوندند.
      اگر جلسات برنامه‌ریزی خود را به صورت حضوری برگزار می‌کنید، پیشنهاد می‌کنم تا جلسه ساخته شده خود را از طریق پروژکتور یا یک صفحه نمایشگر بزرگ در اتاق به نمایش گذاشته و از اعضای تیم خود بخواهید تا با اسکن بارکد درج شده در صفحه به جلسه شما ملحق شوند. 
    </p>
  </article>
</div>
            
<div class="row">
  <h2 class="col-xs-12 col-lg-10 col-lg-offset-1">ساخت یا پیوستن به یک جلسه برنامه‌ریزی</h2>
      
  <!-- Create session panel -->
  <div class="col-xs-12 col-sm-6 col-lg-5 col-lg-offset-1" ng-controller="CreateController as create">
    <div class="panel panel-default">
      <div class="panel-heading">ساخت یک جلسه</div>
      <div class="panel-body">  
        <form role="form">
          <div class="form-group" ng-class="{'has-error': create.nameError}">
            <label for="sessionName">نام جلسه:</label>
            <div class="has-feedback">
              <input type="text" class="form-control" ng-model="create.name" placeholder="نام جلسه">
              <span ng-if="create.nameError" class="glyphicon glyphicon-remove form-control-feedback"></span>
            </div>
          </div>
          <div class="form-group">
            <label>نوع کارت: <a target="_blank" href="<?= $src ?>/src/sample-config.php#L17">؟</a></label>
            <div class="dropdown">
              <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                <span ng-bind-html="create.selectedSet.value"></span>
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu">
                <li ng-repeat="set in create.cardSets" ng-class="{'active': set == create.selectedSet}">
                  <a class="selectable" ng-click="create.selectedSet = set" ng-bind-html="set.value"></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="form-group">
            <label><input type="checkbox" ng-model="create.isPrivate"> جلسه خصوصی</label> 
          </div>
          <div class="form-group" ng-if="create.isPrivate" ng-class="{'has-error': create.pwdError}">
            <label for="password">کلمه عبور:</label>
            <div class="has-feedback">
              <input type="password" class="form-control" ng-model="create.password">
              <span ng-if="create.pwdError" class="glyphicon glyphicon-remove form-control-feedback"></span>
            </div>
          </div>
          <input type="button" class="btn btn-default" value="ساخت" ng-click="create.createSession()">
        </form>
      </div>
    </div>        
  </div>
            
  <!-- Join session panel -->
  <div class="col-xs-12 col-sm-6 col-lg-5" ng-controller="JoinController as join">
    <div class="panel panel-default">
      <div class="panel-heading">پیوستن به یک جلسه</div>
      <div class="panel-body">
        <form role="form">
          <div class="form-group" ng-class="{'has-error': join.idError}">
            <label>شناسه جلسه:</label>
            <div class="has-feedback">
              <input type="text" class="form-control" ng-model="join.id" ng-change="join.passwordCheck()" placeholder="4711">
              <span ng-if="join.idError" class="glyphicon glyphicon-remove form-control-feedback"></span>
            </div>
          </div>
          <div class="form-group" ng-class="{'has-error': join.nameError}">
            <label>نام شما:</label>
            <div class="has-feedback" ng-init="join.name = '<?= isset($_COOKIE['scrum_member_name']) ? $_COOKIE['scrum_member_name'] : "" ?>'">
              <input type="text" class="form-control"  ng-model="join.name" placeholder="محسن احمدی">
              <span ng-if="join.nameError" class="glyphicon glyphicon-remove form-control-feedback"></span>
            </div>
          </div>
          <div class="form-group" ng-if="join.requiresPassword">
            <label>کلمه عبور:</label>
            <div class="has-feedback">
              <input type="password" class="form-control"  ng-model="join.password">
              <span ng-if="join.passwordError" class="glyphicon glyphicon-remove form-control-feedback"></span>
            </div>
          </div>
          <input type="button" class="btn btn-default" value="پیوستن" ng-click="join.joinSession()">
       </form>
      </div>
    </div>        
  </div>
  
</div>
