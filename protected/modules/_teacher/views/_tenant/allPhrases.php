
<div class="panel panel-default">
    <div class="panel-body">
        <ul id="accessTabs" class="nav nav-tabs">
            <li class="active"><a href="#all" data-toggle="tab">Список фраз</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade in active" id="all">
                <?php $this->renderPartial('/_tenant/_allPhrases');?>
            </div>
        </div>
    </div>
</div>