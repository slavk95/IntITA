/**
 * Created by Quicks on 10.12.2015.
 */

function showPlainTaskWithoutTrainer(url)
{
    $.ajax({
        url: url,
        success: function(data) {
            fillContainer(data);
        }
    })
}


function chooseTrainer(id,url)
{
    $.ajax({
        url: url,
        data : {id: id},
            success: function (data) {
                fillContainer(data);
            }
    });
}

function sendForm(url)
{
    var consult = $('#consult').val();
    var idPlainTask = $('#idPlainTask').val();

    $.ajax({
        url: url,
        type: "POST",
        data : { 'consult': consult,'idPlainTask' : idPlainTask},
        success: function (data) {
            fillContainer(data);
            location.reload();
        }
    })
}

function showPlainTaskAnswer(url,idTeacher)
{
    $.ajax({
        url: url,
        type: "POST",
        data : { 'idTeacher': idTeacher},
        success: function (data) {
            fillContainer(data);
        }
    })
}

function showPlainTask(url,plainTaskId)
{
    $.ajax({
        url: url,
        type: "POST",
        data : { 'idPlainTask': plainTaskId},
        success: function (data) {
            fillContainer(data);
        }
    });
}

function markPlainTask(url)
{
    var id = $('#plainTaskId').val();
    var mark = $('#mark').val();
    var comment = $('[name = comment]').val();
    var userId = $('#userId').val();
    $.ajax({
        url: url,
        type: "POST",
        data : { 'idPlainTask': id,'mark' : mark,'comment' : comment,'userId' : userId},
        success : function (data) {
            alert('Ваша оцінка записана в базу');
            location.reload();
        },
        error : function()
        {
            alert('Щось пышло не так!' +
            'Зв\'яжіться будь-ласка з адміністратором сайту');
        }
    });

}

function manageConsult(url)
{

}



function fillContainer(data)
{
    container = $('#pageContainer');

    container.html('');
    container.html(data);
}