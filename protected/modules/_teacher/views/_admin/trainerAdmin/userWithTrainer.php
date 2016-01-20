<?php
/* @var $user StudentReg */
?>

    <div class="col-md-8">
    <ul class="list-inline">
        <li>
            <button type="button" class="btn btn-primary"
                    onclick="load('<?php echo Yii::app()->createUrl('/_teacher/_admin/trainerAdmin/index'); ?>')">
                Список користувачів без тренера</button>
        </li>
    </ul>
    <br>
    <h4>Список користувачів з консультантом</h4>
<?php

if (!empty($users)) { ?>
    <table class="table table-striped">
        <tr>
            <td><b>email</b></td>
            <td>Ім'я</td>
            <td>Тренер</td>
            <td>Змінити консультанта</td>
        </tr>
        <?php
        foreach ($users as $user) {
            ?>
            <tr>
                <td><?php echo $user->email ?></td>
                <td><?php echo $user->userName(); ?></td>
                <td><?php $name = $user->getTrainer();
                    $name = Teacher::getTeacherName($name);
                    echo $name;?></td>
                <td>
                    <a href="#" onclick="load('<?php echo Yii::app()->createUrl("/_teacher/_admin/trainerAdmin/changeTrainer",
                        array("id" => $user->id, 'oldTrainerId' => $user->getTrainer()))?>')">
                        <img src="<?php echo StaticFilesHelper::createPath('image', 'editor', 'restore.png')?>"
                             align="bottom">
                    </a>
                    <a href="#" onclick="showConfirm('Ви впевнені що хочете видалити тренера?',
                        '<?php echo Yii::app()->createUrl("/_teacher/_admin/trainerAdmin/removeUserTrainer",array("id" => $user->id))?>')">
                        <img src="<?php echo StaticFilesHelper::createPath('image', 'editor', 'delete.png')?>"
                             align="bottom">
                    </a>
                </td>
            </tr>
        <?php } ?>
    </table>
    </div>
<?php
} else {
    echo "Користувачів з тренерами на данний час немає";
}
?>