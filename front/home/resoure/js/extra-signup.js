
$(function()
{
    // Validation
    $("#signup-form").validate(
        {
            // Rules for form validation
            rules:
            {
                username:
                {
                    required: true
                },
                email:
                {
                    required: true,
                    email: true
                },
                password:
                {
                    required: true,
                    minlength: 3,
                    maxlength: 20
                },
                passwordConfirm:
                {
                    required: true,
                    minlength: 3,
                    maxlength: 20,
                    equalTo: '#password'
                },
                firstname:
                {
                    required: true
                },
                lastname:
                {
                    required: true
                },
                gender:
                {
                    required: true
                }
            },

            // Messages for form validation
            messages:
            {
                login:
                {
                    required: '请输入您的登录名'
                },
                email:
                {
                    required: '请输入您的电子邮件地址',
                    email: '请输入有效的电子邮件地址'
                },
                password:
                {
                    required: '请输入您的密码'
                },
                passwordConfirm:
                {
                    required: '请再次输入您的密码',
                    equalTo: '请输入与上面相同的密码'
                },
                firstname:
                {
                    required: '请选择您的名字'
                },
                lastname:
                {
                    required: '请选择您的姓氏'
                },
                gender:
                {
                    required: '请选择性别'
                }
            },

            // Do not change code below
            errorPlacement: function(error, element)
            {
                error.insertAfter(element.parent());
            }
        });
});
		