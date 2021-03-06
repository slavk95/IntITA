<?php
/**
 * @var $model Module
 */
?>
<div class="row">
    <div class="col-md-2">
        <a href="<?=Yii::app()->createUrl("module/index", array("idModule" => $model->module_ID));?>" target="_blank">
        <img src="<?php echo StaticFilesHelper::createPath('image', 'module', $model->module_img); ?>"
             class="img-thumbnail">
        </a>
    </div>
    <div class="col-md-10">
        <table class="table table-hover">
            <tbody>
            <tr>
                <td width="30%">Назва (укр.) *:</td>
                <td><?= CHtml::encode($model->title_ua); ?></td>
            </tr>
            <tr>
                <td width="30%">Назва (рос.):</td>
                <td><?= CHtml::encode($model->title_ru); ?></td>
            </tr>
            <tr>
                <td width="30%">Назва (англ.):</td>
                <td><?= CHtml::encode($model->title_en); ?></td>
            </tr>
            <tr>
                <td width="35%">Мова: </td>
                <td><?=$model->language;?></td>
            </tr>
            <tr>
                <td>Псевдонім: </td>
                <td><?=CHtml::encode($model->alias);?></td>
            </tr>
            <tr>
                <td><div data-toggle="tooltip" data-placement="top" title="Ціна використовується при розрахунку ціни курсу
                (якщо не вказана ціна модуля в конкретному курсі - вкладка <У курсах>)
                і при розрахунку вартості самостійного модуля.">
                        Ціна модуля базова, USD:
                    </div>
                </td>
                <td>
                    <?php if(Yii::app()->user->model->isAdmin() && Yii::app()->user->model->getCurrentOrganization()->id==$model->id_organization){ ?>
                    <div ng-controller="modulePriceCtrl">
                        <input class="col-md-2" style="border-radius: 5px; margin-right: 5px" ng-model="modulePrice" type="number" min="0"
                               ng-init="modulePrice=+'<?php echo $model->module_price; ?>'">
                        <button ng-click="updateModulePrice('<?php echo $model->module_ID; ?>',modulePrice)" class="btn btn-outline btn-primary btn-xs" >Зберегти</button>
                    </div>
                    <?php } else {
                        echo ($model->module_price == 0)?"безкоштовно":$model->module_price;
                    }?>
                </td>
            </tr>
            <tr>
                <td>
                    <div data-toggle="tooltip" data-placement="top" title="Ціна модуля в курсі однакова в будь-якому курсі.
                Визначається за допомогою коефіцієнта ціни модуля в курсі.">
                        Ціна модуля в курсі:
                    </div>
                </td>
                <td>
                    <?php
                    $priceInCourse=round($model->module_price*Config::getCoeffDependentModule(),2);
                    echo ($priceInCourse == 0) ? "безкоштовно" : $priceInCourse;
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <div data-toggle="tooltip" data-placement="top" title="Унікальний ідентифікатор, використовується
                    при генерації номера договора про оплату модуля.">
                    Номер модуля:
                    </div>
                </td>
                <td><?=$model->module_number;?></td>
            </tr>
            <tr>
                <td>Рівень: </td>
                <td><?=$model->level();?></td>
            </tr>
            <tr>
                <td>Статус онлайн:</td>
                <td><?= $model->onlineStatusLabel(); ?></td>
            </tr>
            <tr>
                <td>Статус офлайн:</td>
                <td><?= $model->offlineStatusLabel(); ?></td>
            </tr>
            <tr>
                <td>Видалений: </td>
                <td><?=$model->cancelledLabel();?></td>
            </tr>
            <tr>
                <td>Категорії:</td>
                <td>
                    <div class="tags">
                        <ul>
                            <li ng-repeat="moduleTag in moduleTags track by $index">
                                <span>{{moduleTag.tag}}</span>
                            </li>
                        </ul>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Організація:</td>
                <td><?= $model->organization->name; ?></td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
<script>
    $jq(document).ready(function(){
        $jq('[data-toggle="tooltip"]').tooltip();
    });
</script>