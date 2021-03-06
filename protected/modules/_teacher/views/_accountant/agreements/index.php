<div class="col-lg-12" ng-controller="agreementsCtrl">
    <div class="panel panel-default">
        <div class="panel-body">
            <table ng-table="agreementsTableParams" class="table table-bordered table-striped table-condensed">
                <colgroup>
                    <col width="10%"/>
                    <col />
                    <col width="10%"/>
                    <col/>
                    <col width="10%"/>
                    <col width="10%"/>
                    <col width="10%"/>
                    <col width="10%"/>
                    <col/>
                    <?php if($organization) {?>
                    <col/>
                    <?php } ?>
                </colgroup>
                <tr ng-repeat="row in $data track by row.id"
                    ng-class="{'bg-warning': (currentDate>=(row.payment_date  | shortDate:'yyyy-MM-dd') && currentDate<=(row.expiration_date  | shortDate:'yyyy-MM-dd')),
                    'bg-danger': (currentDate>(row.expiration_date  | shortDate:'yyyy-MM-dd') || row.cancel_date),
                    'bg-success': (row.summa==row.paidAmount)}">
                    <td data-title="'Сервіс'" filter="{'service.description': 'text'}" sortable="'service.description'"><a
                                href="#/accountant/agreement/{{row.id}}">{{row.service.description}}</a></td>
                    <td data-title="'Номер'" filter="{number: 'text'}" sortable="'number'"><a
                            href="#/accountant/agreement/{{row.id}}">{{row.number}}</a></td>
                    <td data-title="'Користувач'" filter="{'user.fullName': 'text'}" sortable="'user.fullName'">
                        <a ng-href="#/users/profile/{{row.user_id}}">{{row.user.fullName}}</a>
                    </td>
                    <td data-title="'Дата створення'" filter="{create_date: 'text'}" sortable="'create_date'">
                        {{row.create_date | shortDate:'dd.MM.yyyy'}}
                    </td>
<!--                    <td data-title="'Дата підтвердження'" filter="{approval_date: 'text'}" sortable="'approval_date'">-->
<!--                        {{row.approval_date | shortDate:'dd.MM.yyyy'}}-->
<!--                    </td>-->
<!--                    <td data-title="'Підтверджено користувачем'" filter="{'approvalUser.fullName': 'text'}"-->
<!--                        sortable="'approvalUser.fullName'">{{row.approvalUser.fullName}} {{row.approvalUser.email}}-->
<!--                    </td>-->
                    <td data-title="'Схема оплати'" filter="{payment_schema: 'select'}" filter-data="getSchemas" sortable="'payment_schema'">
                        {{row.paymentSchema.title_ua}}
                    </td>
                    <td style="word-break: break-all" data-title="'Сума до сплати'" filter="{summa: 'text'}" sortable="'summa'">
                        {{row.summa}}
                    </td>
                    <td style="word-break: break-all" data-title="'Сплачено'">
                        {{row.paidAmount}}
                    </td>
                    <td data-title="'Наступна проплата до'">
                        {{row.payment_date  | shortDate:'dd.MM.yyyy'}}
                    </td>
                    <td data-title="'Крайній термін сплати'">
                        {{row.expiration_date  | shortDate:'dd.MM.yyyy'}}
                    </td>
                    <td data-title="'Скасовано'" filter="{cancel_date: 'text'}" sortable="'cancel_date'">
                        {{row.cancel_date | shortDate:'dd.MM.yyyy'}}
                    </td>
                    <?php if($organization) {?>
                    <td data-title="'Управління'" style="text-align: center">
<!--                        <button ng-if="!row.approval_date" class="btn btn-success"-->
<!--                                ng-click="confirm(row.id)">-->
<!--                            Підтвердити-->
<!--                        </button>-->
                        <a href="" ng-if="!row.cancel_date && row.paidAmount=='0.00'" ng-click="cancel(row.id)">
                            <i class="fa fa-trash fa-fw"></i>
                        </a>
                        <a href="#/accountant/studentagreement/id/{{row.id}}"><i class="fa fa-eye fa-fw"></i></a>
                    </td>
                    <?php } ?>
                </tr>
            </table>
        </div>
    </div>
    <em style="color:red">*</em>Скасувати можна договір, по якому ще не було жодної проплати та, який ще не скасований<br>
    <span style="background-color: rgba(92,184,92,.6);">Проплачений повністю</span><br>
    <span style="background-color: #f0b370">Збігає термін проплати</span><br>
    <span style="background-color: rgba(217,82,82,.6)">Термін проплати збіг або не оплачений жодний рахунок по договору</span><br>
</div>