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
})