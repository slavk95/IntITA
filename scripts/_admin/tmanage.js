/**
 * Created by Quicks on 23.12.2015.
 */
function ShowTeacher(url, id) {
    $jq.ajax({
        url: url,
        type: 'post',
        data: {'id': id},
        success: function (data) {
            fillContainer(data);
        },
        error: function () {
            showDialog();
        }
    });
}

function addTeacherAttr(url, attr, id, role,header,redirect) {
    user = $jq('#user').val();
    if (!role) {
        role = $jq('#role').val();
    }
    var value = $jq(id).val();

    if (value == 0) {
        showDialog('Введіть дані форми.');
    }
    if (parseInt(user && value)) {
        $jq.ajax({
            url: url,
            type: "POST",
            async: true,
            data: {user: user, role: role, attribute: attr, attributeValue: value},
            success: function (response) {
                if (response == "success") {
                    bootbox.alert("Операцію успішно виконано.", function () {
                        switch (role) {
                            case "trainer":
                                loadTrainerStudentList(user);
                                break;
                            case "author":
                                if(redirect=='teacherAccess')
                                    loadAddTeacherAccess(header,'0');
                                else if (id == '#moduleId')
                                    loadAddModuleAuthor();
                                else if (id == '#module')
                                    loadModuleEdit(value,header,'5');
                                else loadTeacherModulesList(user);
                                break;
                            case "consultant":
                                if(redirect=='teacherAccess')
                                    loadAddTeacherAccess(header,'2');
                                else loadAddModuleConsultant(user);
                                break;
                        }
                    });
                } else {
                    switch (role) {
                        case "trainer":
                            showDialog("Для даного студента вже призначено тренера");
                            break;
                        case "author":
                            showDialog("Обраний модуль вже присутній у списку модулів даного викладача");
                            break;
                        case "consultant":
                            showDialog("Консультанту вже призначений даний модуль для консультацій");
                            break;
                        default:
                            showDialog("Операцію не вдалося виконати");
                            break;
                    }
                }
            },
            error: function () {
                showDialog("Операцію не вдалося виконати.");
            }
        });
    }
}

function cancelModuleAttr(url, id, attr, role, user, successUrl,tab,header) {
    if (!user) {
        user = $jq('#user').val();
    }
    if (!role) {
        role = $jq('#role').val();
    }
    if (user && role) {
        $jq.ajax({
            url: url,
            type: "POST",
            async: true,
            data: {user: user, role: role, attribute: attr, attributeValue: id},
            success: function (response) {
                if (response == "success") {
                    bootbox.alert("Операцію успішно виконано.", function () {
                        if (successUrl) {
                            load(successUrl,header,'',tab);
                        } else {
                            switch (role) {
                                case "trainer":
                                    loadTrainerStudentList(user);
                                    break;
                                case "author":
                                    if (id == '#moduleId')
                                        loadAddModuleAuthor();
                                    else loadTeacherModulesList(user);
                                    break;
                                case "consultant":
                                    loadAddModuleConsultant(user);
                                    break;
                            }
                        }
                    });
                } else {
                    showDialog("Операцію не вдалося виконати.");
                }
            },
            error: function () {
                showDialog("Операцію не вдалося виконати.");
            }
        });
    }
}

function selectRole(url) {
    clearAllAttrFields();

    var role = $jq('select[name="role"]').val();
    var user = $jq('#teacher').val();
    if (!role) {
        $jq('div[name="selectRole"]').html('');
        $jq('div[name="selectAttribute"]').html('');
    } else {
        $jq.ajax({
            type: "POST",
            url: url,
            data: {role: role, user: user},
            cache: false,
            success: function (response) {
                $jq('div[name="selectAttribute"]').html(response);
            }
        });
    }
}

function selectAttribute(url) {
    var attribute = $jq('select[name="attribute"]').val();
    if (!attribute) {
        $jq('div[name="inputValue"]').html('');
    } else {
        $jq.ajax({
            type: "POST",
            url: url,
            data: {attribute: attribute},
            cache: false,
            success: function (response) {
                $jq('div[name="inputValue"]').html(response);
            }
        });
    }
}

function clearAllAttrFields() {
    $jq('div[name="selectAttribute"]').html('');
    $jq('div[name="inputValue"]').html('');

}


function addExistModule(url) {
    var moduleId = $jq("select[name=module] option:selected").val();
    var courseId = $jq("select[name=course] option:selected").val();
    if (moduleId && courseId) {
        $jq.ajax({
            url: url,
            type: 'post',
            data: {'moduleId': moduleId, 'courseId': courseId},
            success: function (data) {
                showDialog('Ви додали модуль до курсу');
                fillContainer(data);
            },
            error: function () {
                showDialog();
            }
        });
    }
    else
        showDialog('Виберіть вірні дані!');
    return false;
}

function saveSchema(url, id) {
    $jq.ajax({
        url: url,
        success: function (response) {
            if (response == "success")
                bootbox.alert("Схема курсу збережена.", function () {
                    load(basePath + '/_teacher/_admin/coursemanage/view/id/' + id);
                });
            else bootbox.alert("Схему курса не вдалося зберегти.");
        },
        error: function () {
            bootbox.alert("Схему курса не вдалося зберегти.");
        }
    });
}

function addCoursePrice(url,header) {
    var moduleId = $jq('#module').val();
    var price = $jq('#price').val();
    var courseId = $jq("#course").val();
    if (moduleId && price && courseId) {
        $jq.ajax({
            url: url,
            type: 'post',
            data: {'module': moduleId, 'course': courseId, 'price': price},
            success: function (response) {
                if (response == "success")
                    bootbox.alert("Нова ціна збережена.", function () {
                        loadModuleEdit(moduleId,header,'7');
                    });
                else bootbox.alert("Операцію не вдалося виконати.");
            },
            error: function () {
                bootbox.alert("Операцію не вдалося виконати.");
            }
        });
    }
    else {
        bootbox.alert('Неправильно введені дані.');
    }
}

function addMandatory(url) {
    var mandatory = $jq("select[name=mandatory] option:selected").val();
    var courseId = $jq("input[name=course]").val();
    var moduleId = $jq("input[name=module]").val();
    if (mandatory && courseId && moduleId) {
        $jq.ajax({
            url: url,
            type: 'post',
            data: {'module': moduleId, 'course': courseId, 'mandatory': mandatory},
            success: function (response) {
                bootbox.confirm(response, function () {
                    load(basePath + '/_teacher/_admin/module/view/id/' + moduleId);
                });
            },
            error: function () {
                showDialog('Операцію не вдалося виконати.');
            }
        });
    }
}

function addTranslate(url) {
    var form = document.forms["translate"];
    var id = form['id'].value;
    var category = form['category'].value;
    var comment = form['comment'].value;
    var translateUa = form['translateUa'].value;
    var translateRu = form['translateRu'].value;
    var translateEn = form['translateEn'].value;
    var reg = '^[a-zA-Z ]+$';

    if (category.match(reg)) {
        $jq.ajax({
            url: url,
            type: 'post',
            data: {
                'id': id,
                'category': category,
                'comment': comment,
                'translateUa': translateUa,
                'translateRu': translateRu,
                'translateEn': translateEn
            },
            success: function (data) {
                fillContainer(data);
            },
            error: function (data) {
                showDialog(data.responseText);
            }
        });
    }
    else {
        showDialog('Категорія має бути вказана латинськими літерами');
    }

}
function sendError(form, data, hasError) {
    if (hasError) {
        for (var prop in data) {
            var err = document.getElementById(prop);
            err.focus();
            break;
        }
    }
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Validations
function validateSliderForm(scenario) {
    var valid = [];
    valid.push(numberValidate($jq('#text_ua')));
    valid.push(numberValidate($jq('#text_ru')));
    valid.push(numberValidate($jq('#text_en')));
    if (scenario == 'insert')
        valid.push(filePicValidate($jq('#picture')));
    return checkValid(valid);
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//input validation function
function filePicValidate(picture) {
    var message = '';
    var pattern = /^.*\.(?:jpg|png|gif)\s*$/ig;
    var error = false;

    if (!picture.val()) {
        message = 'Виберіть файл';
        error = true;
    }
    else if (!pattern.test(picture.val())) {
        message = 'Файл має бути у форматі jpg,gif або png';
        error = true;
    }

    processResult(error, message, picture);
    return !error;
}

function numberValidate(number) {
    var message = '';
    var error = false;

    if (!number.val()) {
        error = true;
        message = 'Поле для вводу коду текста має бути заповнене';
    }

    processResult(error, message, number);

    return !error;

}
//show or hide validation message
function processResult(error, message, element) {
    if (error) {
        showErrorMessage(message, element);
    }
    else {
        hideErrorMessage(element);
    }
}
function checkValid(arr) {
    var hasError = false;
    for (var i = 0; i < arr.length; i++) {
        if (arr[i] == false) {
            return hasError;
        }
    }
    return !hasError;
}
function showErrorMessage(message, element) {
    var errorBlock = element.parent().find('.errorMessage');
    errorBlock.html(message);
    errorBlock.show();
    element.focus();
}


function hideErrorMessage(element) {
    var errorBlock = element.parent().find('.errorMessage');
    errorBlock.hide();
}
//Modal windows
function showDialog(str) {
    if (str) {
        $jq('#modalText').html(str);
    }
    $jq('#myModal').modal('show');
}

function showConfirm(str, url) {
    bootbox.confirm(str, function (result) {
        if (result) {
            var grid = getGridName();

            $jq.ajax({
                url: url,
                type: 'post',
                async: true,
                success: function (data) {
                    if (grid)
                        $.fn.yiiGridView.update(grid);
                    else
                        fillContainer(data);
                },
                error: function () {
                    showDialog();
                }
            });
        }
    })
}
function moduleCancelled(str, url) {
    bootbox.confirm(str, function (result) {
        if (result) {
            var grid = getGridName();

            $jq.ajax({
                url: url,
                type: 'post',
                async: true,
                success: function (data) {
                    if (data == false) {
                        if (grid)
                            $.fn.yiiGridView.update(grid);
                        else
                            fillContainer(data);
                    } else {
                        bootbox.alert("Ти не можеш видалити модуль. Спочатку видали його з таких курсів: " + "<b>" + data + "</b>");
                        return false;
                    }
                },
                error: function () {
                    showDialog();
                }
            });
        }
    })
}

function getGridName() {
    return $jq('.grid-view').attr('id');
}

function refreshCache(url) {
    $jq.ajax({
        url: url,
        type: 'post',
        async: true,
        success: function (data) {
            if (data == "success") {
                showDialog("Кеш сайта успішно оновлено!");
            } else {
                showDialog();
            }
        },
        error: function () {
            showDialog();
        }
    });
}
function deleteSlideAboutUs(url) {
    bootbox.confirm('Видалити слайд?', function (result) {
        if (result) {
            $jq.ajax({
                url: url,
                type: "POST",
                async: true,
                success: function (response) {
                    bootbox.alert("Слайд видалено.", function () {
                        loadSliderAboutUsList();
                    });
                },
                error: function () {
                    showDialog("Операцію не вдалося виконати.");
                }
            });
        }
    });
}
function deleteMainSlide(url) {
    bootbox.confirm('Видалити слайд?', function (result) {
        if (result) {
            $jq.ajax({
                url: url,
                type: "POST",
                async: true,
                success: function (response) {
                    bootbox.alert("Слайд видалено.", function () {
                        loadMainSliderList();
                    });
                },
                error: function () {
                    showDialog("Операцію не вдалося виконати.");
                }
            });
        }
    });
}
function moduleCreate(errField,hasError,action, data) {
    if(hasError) {
        if(errField['Module_title_ua'] !== undefined)
            $jq('#createModuleTabs li:eq(1) a').tab('show');
        else $jq('#createModuleTabs li:eq(0) a').tab('show');
    }else{
        $.ajax({
            type: "POST",
            url: action,
            data: data,
            success: function (ret) {
                bootbox.alert("Модуль успішно додано", function () {
                    loadModulesList();
                });
            },
            error: function () {
                bootbox.alert("Модуль не вдалося створити. Перевірте вхідні дані або зверніться до адміністратора.");
            }
        });
    }
}
function moduleEdit(errField,hasError,action, data) {
    if(hasError) {
        if(errField['Module_title_ua'] !== undefined)
            $jq('#editModuleTabs li:eq(1) a').tab('show');
        else $jq('#editModuleTabs li:eq(0) a').tab('show');
    }else{
        $.ajax({
            type: "POST",
            url: action,
            data: data,
            success: function (ret) {
                bootbox.alert("Модуль успішно відредаговано", function () {
                    loadModulesList();
                });
            },
            error: function () {
                bootbox.alert("Модуль не вдалося відредагувати. Перевірте вхідні дані або зверніться до адміністратора.");
            }
        });
    }
}
function courseValidation(data,hasError,action) {
    if(hasError) {
        if(data['Course_title_ua'] !== undefined)
            $jq('#createCourseTabs li:eq(1) a').tab('show');
        else if(data['Course_title_ru'] !== undefined)
            $jq('#createCourseTabs li:eq(2) a').tab('show');
        else if(data['Course_title_en'] !== undefined)
            $jq('#createCourseTabs li:eq(3) a').tab('show');
        else $jq('#createCourseTabs li:eq(0) a').tab('show');
        return false;
    }else return true;
}
function courseCreate(url) {
    var formData = new FormData($("#course-form")[0]);
    $.ajax({
        url: url,
        type: 'POST',
        data: formData,
        datatype:'json',
        success: function () {
            bootbox.alert("Курс успішно додано", function () {
                loadCourseList();
            });
        },
        error: function () {
            bootbox.alert("Курс не вдалося створити. Перевірте вхідні дані або зверніться до адміністратора.");
        },
        cache: false,
        contentType: false,
        processData: false
    });

    return false;
}
function courseUpdate(url) {
    var formData = new FormData($("#course-form")[0]);
    $.ajax({
        url: url,
        type: 'POST',
        data: formData,
        datatype:'json',
        success: function () {
            bootbox.alert("Курс успішно відредаговано", function () {
                loadCourseList();
            });
        },
        error: function () {
            bootbox.alert("Курс не вдалося відредагувати. Перевірте вхідні дані або зверніться до адміністратора.");
        },
        cache: false,
        contentType: false,
        processData: false
    });

    return false;
}

function loadMainSliderList() {
    load(basePath + '/_teacher/_admin/carousel/index/', 'Слайдер на головній сторінці');
}
function loadSliderAboutUsList() {
    load(basePath + '/_teacher/_admin/aboutusSlider/index/', 'Слайдер на сторінці Про нас');
}
function loadTeacherModulesList(id) {
    load(basePath + '/_teacher/_admin/teachers/addModule/id/' + id, 'Додати модуль');
}
function loadTrainerStudentList(id) {
    load(basePath + '/_teacher/_admin/teachers/editRole/id/' + id + '/role/trainer/', 'Редагувати роль');
}
function loadAddModuleAuthor() {
    load(basePath + '/_teacher/_admin/permissions/showAddTeacherAccess/');
}
function loadAddModuleConsultant(id) {
    load(basePath + '/_teacher/_admin/teachers/editRole/id/'+id+'/role/consultant/','Редагувати роль');
}
function loadModulesList() {
    load(basePath + "/_teacher/_admin/module/index/","Модулі");
}
function loadCourseList() {
    load(basePath + "/_teacher/_admin/coursemanage/index/","Курси");
}
function loadModuleEdit(id,header,tab) {
    load(basePath + "/_teacher/_admin/module/update/id/"+id,header,'',tab);
}
function loadAddTeacherAccess(header,tab) {
    load(basePath + "/_teacher/_admin/permissions/index/",header,'',tab);
}


