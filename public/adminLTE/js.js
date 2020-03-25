$('.delete').click(function () {
    var res = confirm('Подтвердите действие');
    if (!res) return false;
})

$(document).ready(function () {
    var i = 1;
    $('#add_place').click(function () {
        console.log(1);
        i++;
        $('#dynamic_field').append('<div class="row mw-100 m-0 mt-3" id="row' + i + '"><div class="col-md-6 pl-0"><input type="text" name="titleDesc[]" placeholder="Наименование характеристики" class="form-control name_list" /><br><textarea class="w-100" name="descriptionDesc[]"   placeholder="Описание характеристики" rows="5"></textarea></div><div class="col-md-2 pl-0"><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove ">X</button></div></div>');
    });

    $(document).on('click', '.btn_remove', function () {
        var button_id = $(this).attr("id");
        $('#row' + button_id + '').remove();
    });

    // $('#submit').click(function(){
    //     $.ajax({
    //         url:"name.php",
    //         method:"POST",
    //         data:$('#add_name').serialize(),
    //         success:function(data)
    //         {
    //             alert(data);
    //             $('#add_name')[0].reset();
    //         }
    //     });
    // });

});


$('.del-item').on('click', function () {
    var res = confirm('Подтвердите действие');
    if (!res) return false;
    var $this = $(this),
        id = $this.data('id'),
        src = $this.data('src');
    $.ajax({
        url: adminpath + "/product/delete-gallery",
        data: {id: id, src: src},
        method: "POST",
        beforeSend: function () {
            $this.closest('.file-upload').find('.overlay').css('display', 'block');
        },
        success: function (res) {
            setTimeout(function () {
                $this.closest('.file-upload').find('.overlay').css({'display': 'none'});
                if (res == 1) {
                    $this.fadeOut();
                }
            })
        },
        error: function () {
            setTimeout(function () {
                $this.closest('.file-upload').find('.overlay').css({'display': 'none'});
                alert('Ошибка')
            })
        }
    })
})
$('.sidebar-menu a').each(function () {
    var location = window.location.protocol + '//' + window.location.host + window.location.pathname;
    console.log(location);
    var link = $(this).attr('href');
    if (link == location) {
        $(this).parent().addClass('active');
        $(this).closest('.treeview').addClass('active')
    }
});

if ($('#editor1').length > 0) {
    CKEDITOR.replace('editor1');
}
$('#reset-filter').click(function (e) {
    e.preventDefault();
    $('#filter input[type=radio]').prop('checked', false);
});


$(".select2").select2({
    placeholder: "Начните вводить наименование товара",
    //minimumInputLength: 2,
    cache: true,
    ajax: {
        url: adminpath + "/product/related-product",
        delay: 250,
        dataType: 'json',
        data: function (params) {
            return {
                q: params.term,
                page: params.page
            };
        },
        processResults: function (data, params) {
            return {
                results: data.items
            };
        }
    }
});

if ($('div').is('#home')) {
    buttonMulti = $("#multi"),
        file
}
if ($('div').is('#single')) {
    var buttonSingle = $("#single"),
        buttonSingleMin = $("#single-min"),
        buttonMulti = $("#multi"),
        file;
}

if ($(buttonSingle).length > 0) {
    new AjaxUpload(buttonSingle, {
        action: adminpath + buttonSingle.data('url') + "?upload=1",
        data: {name: buttonSingle.data('name')},
        name: buttonSingle.data('name'),
        onSubmit: function (file, ext) {
            if (!(ext && /^(jpg|png|jpeg|gif)$/i.test(ext))) {
                alert('Ошибка! Разрешены только картинки');
                return false;
            }
            buttonSingle.closest('.file-upload').find('.overlay').css({'display': 'block'});

        },
        onComplete: function (file, response) {
            setTimeout(function () {
                buttonSingle.closest('.file-upload').find('.overlay').css({'display': 'none'});

                response = JSON.parse(response);
                $('.' + buttonSingle.data('name')).html('<img src="/images/' + response.file + '" style="max-height: 150px;">');
            }, 1000);
        }
    });
}

if ($(buttonSingleMin).length > 0) {
    new AjaxUpload(buttonSingleMin, {
        action: adminpath + buttonSingleMin.data('url') + "?upload=1",
        data: {name: buttonSingleMin.data('name')},
        name: buttonSingleMin.data('name'),
        onSubmit: function (file, ext) {
            if (!(ext && /^(jpg|png|jpeg|gif|svg)$/i.test(ext))) {
                alert('Ошибка! Разрешены только картинки');
                return false;
            }
            buttonSingleMin.closest('.file-upload').find('.overlay').css({'display': 'block'});

        },
        onComplete: function (file, response) {
            setTimeout(function () {
                buttonSingleMin.closest('.file-upload').find('.overlay').css({'display': 'none'});

                response = JSON.parse(response);
                $('.' + buttonSingleMin.data('name')).html('<img src="/images/' + response.file + '" style="max-height: 150px;">');
            }, 1000);
        }
    });
}

if ($(buttonMulti).length > 0) {
    new AjaxUpload(buttonMulti, {
        action: adminpath + buttonMulti.data('url') + "?upload=1",
        data: {name: buttonMulti.data('name')},
        name: buttonMulti.data('name'),
        onSubmit: function (file, ext) {
            if (!(ext && /^(jpg|png|jpeg|gif)$/i.test(ext))) {
                alert('Ошибка! Разрешены только картинки');
                return false;
            }
            buttonMulti.closest('.file-upload').find('.overlay').css({'display': 'block'});
        },
        onComplete: function (file, response) {
            setTimeout(function () {
                buttonMulti.closest('.file-upload').find('.overlay').css({'display': 'none'});

                response = JSON.parse(response);
                $('.' + buttonMulti.data('name')).append('<img src="/images/' + response.file + '" style="max-height: 150px;">');
            }, 1000);
        }
    });
}


$('#add').on('submit', function () {
    if (!isNumeric($('#category_id').val())) {
        alert('Выберите категорию');
        return false;
    }
});

function isNumeric(n) {
    return !isNaN(parseFloat(n)) && isFinite(n);
}


$('#category_id').change(function () {
    $.ajax({
        url: adminpath + "/filter/cat-product",
        data: {id: $('option:selected').val()},
        type: 'POST',

    })
})

$(document).ready(function () {
    if ($('#old_price').val() !== '' || $('#old_price').val() !== '') {
        $('#sale').val((100 - (+$('#price').val()) * 100 / (+$('#old_price').val()) > 0) ? (100 - (+$('#price').val()) * 100 / (+$('#old_price').val())).toFixed(0) : '0');
    }
});
$(document).on('keyup', '#old_price,#price', function () {
    if ($('#old_price').val() !== '' || $('#old_price').val() !== '') {
        $('#sale').val((100 - (+$('#price').val()) * 100 / (+$('#old_price').val()) > 0) ? (100 - (+$('#price').val()) * 100 / (+$('#old_price').val())).toFixed(0) : '0');
    }
});

