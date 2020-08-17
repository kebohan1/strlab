$(document).ready(function () {
    $('#btn_add_material').click(function () {
        $('#material_table').append('<tr><td><input type="text" class="material-name form-control"></td>' +
            '<td><button class="btn btn-outline-danger material-delete"><i class="fas fa-trash"></i></button></td></tr>');
    });

    $(document).on('click', '.material-delete', function () {
        $(this).parents('tr').remove();
    })

    $('.select-type').change(function () {
        if ($(this).children('option:selected').val() == 1) {
            var data = {
                'material_id': $(this).children('option:selected').val()
            }
            $.ajax({
                url: "/admin/materials/get_name",
                type: "get",
                dataType: "json",
                success: function (data) {
                    $('#material-options').children('.material-options-item').remove();
                    for (var i = 0; i < data.length; i++) {
                        $('#material-options').append('<option class="material-options-item" value="' + data[i]['id'] + '">' + data[i]['name'] + '</option>')
                    }
                },
                error: function (msg) {
                    console.log(msg)
                }

            });
        } else {
            $('#material-options').children('.material-options-item').remove();

        }
    })

    $('#add_material_btn').click(function () {
        var select_type = $('.select-type').children('option:selected').val();
        var option = $('.select-material-option').children('option:selected').val();
        var option_name = $('.select-material-option').children('option:selected').text();
        console.log(select_type, option)
        if (select_type != null && option != null) {
            $('#material_table').append(
                '<tr><td class="input_tr"><input type="hidden" value="' + select_type + '" class="select_type_input">' +
                '<input type="hidden" value="' + option + '" class="option_input">' +
                option_name + '</td><td><input type="text" class="unit_input form-control"/></td><td>' +
                '<button class="btn btn-outline-danger material-delete"><i class="fas fa-trash"></i></button>' +
                '</td></tr>'
            );
            $('#modal-default').modal('toggle');
        } else {
            // console.log('no')
        }
    })

    $('#btn_product_submit').click(function () {
        var sugar = new Array();
        var temperature = new Array();
        var capacity = new Array();
        var materials_array = new Array();
        var flag = 1;
        $('.available-sugar:checked').each(function () {
            // console.log($(this).val())
            sugar.push($(this).val())
        });
        $('.available-temperature:checked').each(function () {
            temperature.push($(this).val());
        });
        $('.available-capacity:checked').each(function () {
            capacity.push($(this).val());
        });
        $('#material_table').children('tr').children('.input_tr').each(function () {
            var type = $(this).children('.select_type_input').val();
            var material_id = $(this).children('.option_input').val();
            var unit = $(this).parent('tr').children('td').children('.unit_input').val();
            var material = {
                'type':type,
                'material_id':material_id,
                'unit':unit,
            }
            materials_array.push(material);
        })
        if (sugar.length == 0) {
            flag = 0;
            $('#available-sugar-form').css('color', 'red');
        } else {
            $('#available-sugar-form').css('color', 'black');
        }

        if(temperature.length==0){
            $('#available-temperature-form').css('color','red');
            flag=0;
        } else {
            $('#available-temperature-form').css('color','black');
        }

        if(flag!=0){
            $.ajax({
                url:'/admin/menu/product/add',
                type:'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data:{
                    'name':$('#inputName').val(),
                    'category_id':$('#category-select').children('option:selected').val(),
                    'active':$('#status-select').children('option:selected').val(),
                    'sugars':sugar,
                    'ices':temperature,
                    'sizes':capacity,
                    'materials':materials_array
                },
                dataType:"json",
                success:function(data){
                    window.location.replace("/admin/menu/item/"+data)
                },
                error:function(msg){
                    console.log(msg)
                }
            });
        }
    });

    $('#sugar_all').click(function(){
        if(this.checked) {
            // Iterate each checkbox
            $('.available-sugar').each(function() {
                this.checked = true;                        
            });
        } else {
            $('.available-sugar').each(function() {
                this.checked = false;                       
            });
        }
        // $('.available-sugar').attr('checked',true);
    })

    $('.available-sugar').click(function(){
        if(!this.checked){
        console.log("in")

            $('#sugar_all').prop('checked',false);

        }
    })
    $('#ice_all').click(function(){
        if(this.checked) {
            // Iterate each checkbox
            $('.available-temperature').each(function() {
                this.checked = true;                        
            });
        } else {
            $('.available-temperature').each(function() {
                this.checked = false;                       
            });
        }
        // $('.available-sugar').attr('checked',true);
    })

    $('.available-temperature').click(function(){
        if(!this.checked){
        console.log("in")

            $('#ice_all').prop('checked',false);

        }
    })

    $('#capacity_all').click(function(){
        if(this.checked) {
            // Iterate each checkbox
            $('.available-capacity').each(function() {
                this.checked = true;                        
            });
        } else {
            $('.available-capacity').each(function() {
                this.checked = false;                       
            });
        }
        // $('.available-sugar').attr('checked',true);
    })

    $('.available-capacity').click(function(){
        if(!this.checked){
        console.log("in")

            $('#capacity_all').prop('checked',false);

        }
    })
});