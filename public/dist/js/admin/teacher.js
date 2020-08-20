$(document).ready(function () {
    $('#teacher_phone_btn').click(function () {
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
    $('#teacher_office_btn').click(function () {
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
    $('#teacher_email_btn').click(function () {
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

    // 新增專長進入table
    $('#add_teacher_skill_item_btn').click(function () {
        var item = '<tr class="teacher_skill_item"><td><input class="form-control teacher_skill_item_input" type="text" /></td>'
            + '<td><button class="btn btn-danger delete_teacher_skill"><i class="fa fa-trash"></i></button></td>';
        $('#table_teacher_skill').append(item);
    })

    //新增學歷進入table
    $('#add_teacher_education_item_btn').click(function () {
        var item = '<tr class="teacher_education_item"><td><input class="form-control education_university" type="text" /></td>'
            + '<td><input class="form-control education_department" type="text" /></td>'
            + '<td><input class="form-control education_degree" type="text" /></td>'
            + '<td><button class="btn btn-danger delete_teacher_education"><i class="fa fa-trash"></i></button></td>';
        $('#table_teacher_education').append(item);
    })

    //更新專長
    $('#update_teacher_skill_btn').click(function () {
        var skills_array = [];
        $('.teacher_skill_item').each(function () {
            var skill = $(this).find('.teacher_skill_item_input').val()
            skills_array.push({
                'skill': skill
            })
        });

        // console.log(skills_array)
        $.ajax({
            url: '/admin/teacher/updateskills',
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                'skills': skills_array,
            },
            dataType: "json",
            success: function (data) {
                console.log(data)
                if (data['code' == 200]) {
                    alert('更新成功')
                } else {
                    alert(data['message'])
                }
                // alert('更新成功')
                // location.reload()
            },
            error: function (msg) {
                alert(msg)
            }
        })
    })

    //更新學歷
    $('#update_teacher_education_btn').click(function () {
        var educations_array = [];
        $('.teacher_education_item').each(function () {
            var university = $(this).find('.education_university').val()
            var department = $(this).find('.education_department').val()
            var degree = $(this).find('.education_degree').val()

            educations_array.push({
                'university': university,
                'department':department,
                'degree':degree
            })
        });

        console.log(educations_array)
        $.ajax({
            url: '/admin/teacher/updateeducations',
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                'educations': educations_array,
            },
            dataType: "json",
            success: function (data) {
                console.log(data)
                if (data['code' == 200]) {
                    alert('更新成功')
                } else {
                    alert(data['message'])
                }
                // alert('更新成功')
                // location.reload()
            },
            error: function (msg) {
                alert(msg)
            }
        })
    })
})