<?php
/* @var $this AboutusSliderController */
/* @var $model AboutusSlider */
?>
<link rel="stylesheet" type="text/css" href="<?php echo StaticFilesHelper::fullPathTo('css', 'adminSlider.css'); ?>"/>
<div ng-controller="aboutUsSliderCtrl">
    <ul class="list-inline">
        <li>
            <a ng-href="#/aboutusSlider" type="button" class="btn btn-primary">Список фото</a>
        </li>
        <li>
            <a type="button" class="btn btn-primary" ng-href="#/aboutusSlider/update/id/<?php echo $model->image_order ?>">Редагувати</a>
        </li>
        <li>
            <button type="button" class="btn btn-primary" ng-click="deleteSlideAboutUs('<?php echo $model->image_order;?>')">Видалити</button>
        </li>
    </ul>

    <div class="page-header">
        <h4>Зображення #<?php echo $model->image_order; ?></small></h4>
    </div>
    <button type="button" class="btn btn-primary" ng-click="saveSliderTextPosition('<?php echo $model->image_order ?>')">
        Зберегти координати тексту
    </button>
    <br>
    <label>Колір тексту HEX(#******):
        <input id="textColor" type="text" class="form-control" value="<?php echo $model->text_color; ?>">
    </label>
    <a ng-click="sliderColorPreview()" style="cursor: pointer">Переглянути колір</a>
    <div id="sliderContainer" class="page-header">
        <img src="<?php echo StaticFilesHelper::createPath("image", "aboutus", $model->pictureUrl); ?>" id="pictureLarge"/>
        <hr class="gLine">
        <hr class="vLine">
        <div id="textPosition" style="
            top:<?php echo $model->top; ?>%;
            color:<?php echo $model->text_color; ?>">
            <?php echo $model->text_ua; ?>
            <div></div>
        </div>
    </div>
</div>

<script>
    var text = document.getElementById('textPosition');
    var sliderBox=document.getElementById('sliderContainer');

    text.onmousedown = function(e) {
        function moveAt(e) {
            text.style.left = e.pageX-sliderBox.offsetLeft-text.offsetWidth / 2 + 'px';
            text.style.top = e.pageY-sliderBox.offsetTop-text.offsetHeight / 2 + 'px';
            if(text.offsetLeft<0){
                text.style.left=0+'px';
            }
            if(text.offsetLeft+text.offsetWidth>sliderBox.offsetWidth){
                text.style.left=sliderBox.offsetWidth-text.offsetWidth+ 'px';
            }
            if(text.offsetTop<0)
                text.style.top=0+'px';
            if(text.offsetTop+text.offsetHeight>sliderBox.offsetHeight){
                text.style.top=sliderBox.offsetHeight-text.offsetHeight+ 'px';
            }
        }
        document.onmousemove = function(e) {
            moveAt(e);
        };
        text.onmouseup = function() {
            document.onmousemove = null;
            text.onmouseup = null;
        }
    }
    $jq(document).ready(function () {
        text.style.left=<?php echo $model->left; ?>-text.offsetWidth/sliderBox.offsetWidth*50+'%';
    });
</script>
