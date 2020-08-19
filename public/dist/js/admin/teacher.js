$(document).ready(function(){
    $('#teacher_phone_btn').click(function(){
        $.ajax({
            url: '/admin/teacher/updatephone',
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                'phone': $('#teacher_phone').val(),
            },
            dataType: "json",
            success: function (data) {
                alert('更新成功')
                location.reload()
            },
            error: function (msg) {
                alert(msg)
            }
        });
    })
    $('#teacher_office_btn').click(function(){
        $.ajax({
            url: '/admin/teacher/updatephone',
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                'office': $('#teacher_office').val(),
            },
            dataType: "json",
            success: function (data) {
                alert('更新成功')
                location.reload()
            },
            error: function (msg) {
                alert(msg)
            }
        });
    })
    $('#teacher_email_btn').click(function(){
        $.ajax({
            url: '/admin/teacher/updatephone',
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                'email': $('#teacher_email').val(),
            },
            dataType: "json",
            success: function (data) {
                alert('更新成功')
                location.reload()
            },
            error: function (msg) {
                alert(msg)
            }
        });
    })

    // 新增專長
    $('#add_teacher_skill_item_btn').click(function(){
        var item = '<tr><td><input class="form-control teacher_skill_item" type="text" /></td>'
                    +'<td><button class="btn btn-danger delete_teacher_skill"><i class="fa fa-trash"></i></button></td>';
        $('#table_teacher_skill').append(item);
    })
    $('#add_teacher_education_item_btn').click(function(){
        var item = '<tr><td><input class="form-control education_university" type="text" /></td>'
                    +'<td><input class="form-control education_department" type="text" /></td>'
                    +'<td><input class="form-control education_degree" type="text" /></td>'
                    +'<td><button class="btn btn-danger delete_teacher_education"><i class="fa fa-trash"></i></button></td>';
        $('#table_teacher_education').append(item);
    })
})