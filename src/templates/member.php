<?php 
include __DIR__ . "/../config.php";

?>

<div class="panel panel-default">
  <div class="panel-heading">
    <div class="row">
      <a ng-href="{{member.topicUrl}}" target="_blank"><h2 class="col-xs-10" ng-bind="member.topic"></h2></a>
      <div class="col-xs-2">
        <div class="leave remove selectable" ng-click="member.leave()">
          <span class="glyphicon glyphicon-remove"></span>
        </div>
      </div>
    </div>
  </div>
  <div class="panel-body" style="white-space: pre-line">
    <div ng-bind-html="member.description"></div>
  </div>
</div>

<div class="row">
  <div class="col-lg-2 col-md-3 col-xs-4" ng-repeat="card in member.cards">
    <div class="card-container">
      <div class="card selectable" ng-class="{active: card.active, confirmed: card.confirmed}" ng-click="member.selectCard(card)">
        <div class="inner">
          <span class="card-label" ng-bind-html="card.value"></span>
	      </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <h2 class="col-xs-12">چگونه:</h2>
  <p class="col-xs-12">
    فقط در یک جلسه می‌توان رای داد. این بدان معناست که تا زمانی که اسکرام مستر جلسه را شروع نکرده باشد یا یا تمامی اعضا به آن رای داده باشند، شما نمی‌توانید رای خود را ثبت کنید. 
    وقتی که کارتی را انتخاب می‌کنید، رنگ آن به قرمز تغییر می‌کند و این یعنی رای شما توسط سرور در حال پردازش است. 
    زمانی که پردازش سرور خاتمه پیدا کرده و رای شما ثبت شود، رنگ آن به سبز تغییر خواهد کرد. 
    تا زمانی که تمامی اعضای جلسه رای خود را ثبت نکرده باشند، شما می‌توانید رای خود را تغییر دهید و زمانی که تمامی اعضا رای خود را ثبت کنند، رای‌گیری به پایان می‌رسد.
    
  </p>
</div>
