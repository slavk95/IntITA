<div class="modal fade" id="deleteDialog" tabindex="-1" role="dialog" aria-labelledby="Видалити діалог"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Видалити діалог</h4>
            </div>
            <div class="modal-body">
                Ви впевнені, що хочете видалити цей діалог?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Відмінити</button>
                <button type="button" class="btn btn-primary"
                        onclick="<?= Yii::app()->createUrl('/_teacher/messages/delete'); ?>">
                    Так
                </button>
            </div>
        </div>
    </div>
</div>