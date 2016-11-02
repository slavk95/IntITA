<div class="panel panel-default">
    <div class="panel-body">
        <a type="button" class="btn btn-primary" ng-href="#/supervisor/editOfflineGroup/{{groupId}}">
            Редагувати групу
        </a>
        <div class="panel-body" style="padding:15px 0 0 0">
            <uib-tabset active="0" >
                <uib-tab index="0" heading="Підгрупи">
                    <?php $this->renderPartial('/_super_visor/tables/_offlineGroupSubgroups', array());?>
                </uib-tab>
                <uib-tab  index="1" heading="Студенти">
                    <?php $this->renderPartial('/_super_visor/tables/_offlineStudents', array());?>
                </uib-tab>
            </uib-tabset>
        </div>
    </div>
</div>
