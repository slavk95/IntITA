<?php
$optionsNum = TestsAnswers::getOptionsNum($data['id_block']);
$options = TestsAnswers::getOptions($data['id_block']);
$testType = Tests::getTestType($data['id_block']);
?>
<div>
    <div class="lessonTest">
        <div class="instrTestImg">
            <img src="<?php echo LectureHelper::getTestIcon($user, $data['id_block'], $editMode); ?>">
        </div>
        <div class="contentTest">
            <div class="instrTestText" id="<?php echo "t" . $data['block_order']; ?>">
                <?php echo $data['html_block']; ?>
            </div>
            <br>

            <table class='answerTable' id="<?php echo "answers" . $data['block_order']; ?>">
                <?php if ($testType == 1) {
                    for ($i = 1; $i <= $optionsNum; $i++) {
                        ?>
                        <tr>
                            <td>
                                <input id="<?php echo TestsHelper::getAnswerKey($data['id_block'])[$i - 1]; ?>"
                                       type="radio"
                                       name="radioanswer" class="answer"
                                       value='<?php echo $options[$i - 1]["answer"]; ?>'>
                            </td>
                            <td>
                                <?php echo $options[$i - 1]["answer"]; ?>
                            </td>
                        </tr>
                    <?php }
                } elseif ($testType == 2) {
                    for ($j = 1; $j <= $optionsNum; $j++) {
                        ?>
                        <tr>
                            <td>
                                <input id="<?php echo TestsHelper::getAnswerKey($data['id_block'])[$j - 1]; ?>"
                                       type="checkbox"
                                       name="checkboxanswer" class="answer"
                                       value='<?php echo $options[$j - 1]["answer"]; ?>'>
                            </td>
                            <td>
                                <?php echo $options[$j - 1]["answer"]; ?>
                            </td>
                        </tr>
                    <?php }
                }
                ?>
            </table>
            <button class="testSubmit" onclick='sendTestAnswer(
                $("<?php echo "#answers" . $data['block_order'] . ' '; ?> <?php echo Tests::getTypeButton($testType); ?>"),
            <?php echo $user; ?>,
            <?php echo Tests::getTestId($data['id_block']) ?>,
            <?php echo $testType; ?>,
            <?php echo ($editMode) ? 1 : 0; ?>
                );' <?php if ($editMode) {
                echo "disabled";
            } ?> >
                <?php echo Yii::t('lecture', '0089'); ?>
            </button>
        </div>
    </div>
</div>

