<?php
/**
 * @var $model Course
 * @var $scenario string
 * @var $otherLangs array
 * @var $course CourseLanguages
 */
?>
<div class="panel panel-default">
    <div class="panel-body">
        <?php if ($scenario == "update"){?>
            <ul class="list-inline">
                <li>
                    <a href="#" class="btn btn-outline btn-primary">
                        Редагувати пов'язані курси</a>
                </li>
                <li>
                    <button type="button" class="btn btn-outline btn-primary">
                        Додати курс на іншій мові</button>
                </li>
            </ul>
        <?php }?>

        <div class="col-md-12">
            <div class="row">
                <?php if (!empty($modules)){ ?>
                <div class="dataTable_wrapper">
                    <table class="table table-striped table-bordered table-hover" id="modulesListTable">
                        <thead>
                        <tr>
                            <th>Модуль</th>
                            <th width="10%">Порядок</th>
                            <th width="15%">Ціна у курсі</th>
                            <th width="20%">Попередній модуль</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($modules as $item) { ?>
                        <tr>
                            <td>
                                <a href="<?= Yii::app()->createUrl('module/index', array('idModule' => $item["id_module"])); ?>"
                                   target="_blank">
                                    <?= $item->moduleInCourse->getTitle(); ?>
                                </a>
                            </td>
                            <td>
                                <?= $item["order"]; ?>
                            </td>
                            <td>
                                <?= $item["price_in_course"]; ?>
                            </td>
                            <td>
                                <?= $item["mandatory_modules"]; ?>
                            </td>
                            <?php
                            } ?>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
} else {
    echo "Пов'язаних курсів на інших мовах немає.";
}
?>