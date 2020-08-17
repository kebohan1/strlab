$(document).ready(function () {
    $('.show_modal_btn').click(function () {
        var product_size_name = $(this).parents('tr').children('.product_size_name').text();
        var material_name = $(this).parents('.material_tr').children('td').children('.material_name').text();
        $('.modal-title').html(product_size_name + ' ' + material_name);
        var product_id = $(location).attr('href').split('/')[6];
        var product_size_id = $(this).parents('tr').children('td').children('.size_id').val();
        var material_id = $(this).parents('tr').children('td').children('.material_id').val();
        var material_type = $(this).parents('tr').children('th').children('.material_type').val();
        $.ajax({
            url: '/admin/menu/menulist/getAmount',
            type: 'GET',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                'product_id': product_id,
                'material_id': material_id,
                'size': product_size_id,
                'type': 1,
            },
            dataType: "json",
            success: function (data) {
                if(data['new']==0)
                {
                    console.log(data['menuLists'])
                    for(var i=0;i<data['menuLists'].length;i++){
                        // console.log($('#'+data['menuLists'][i].ice+'_'+data['menuLists'][i].sugar))
                        $('#'+data['menuLists'][i].ice+'_'+data['menuLists'][i].sugar).val(data['menuLists'][i].amount);
                    }
                }
                
            },
            error: function (msg) {
                console.log(msg)
            }
        });
        $('#modal_product_size_id').val(product_size_id);
        $('#modal_material_id').val(material_id);
        $('#modal_material_type').val(material_type);
    });
    $('#btn_submit_modal').click(function () {
        var material_id = $('#modal_material_id').val();
        var product_size_id = $('#modal_product_size_id').val();
        var product_id = $(location).attr('href').split('/')[6];
        var material_type = $('#modal_material_type').val();
        var input_array = new Array();
        var flag = 1;
        $('.input_modal_number').each(function () {
            input_array.push({
                'name': $(this).attr('name'),
                'value': $(this).val()
            });

            if ($(this).val() == '') {
                flag = 0;
            }

        })
        console.log(input_array);

        if (flag == 0) {
            alert('請填寫所有空位')
        } else {

            $.ajax({
                url: '/admin/materials/setAmount',
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    'product_id': product_id,
                    'material_id': material_id,
                    'product_size_id': product_size_id,
                    'menu_list_array': input_array,
                    'type': 1,
                },
                dataType: "json",
                success: function (data) {
                    // console.log(data)
                    alert('成功')
                    window.location.replace($(location).attr('href'));
                },
                error: function (msg) {
                    console.log(msg)
                }
            })
        }
        console.log(product_id)
    })
});