/**
 * Created by Quicks on 10.12.2015.
 */

function chooseTrainer(id,url)
{
    container = $('#pageContainer');

    $.ajax({
        url: url,
        data : {id: id},
            success: function (data) {
            container.html('');
            container.html(data);
        }
    })
}

function sendForm (url)
{
    var input   = $('#assignedConsult').serialize();
    var arr = getData(input);

    $.ajax({
        url: url,
        type : 'POST',
        data : {arr: arr },
        success: function (data) {
            container.html('');
            container.html(data);
            location.reload();
        }
    })
}

function getData(data)
{
    var arr = data.split('&');
    var id =  arr[0].split('=')[1];
    var consult = arr[1].split('=')[1];

    var result = [];
    result.push(id);
    result.push(consult);

    return result;
}