//// Fields values
//var email = '';
//var username = '';
//var password = '';
//var passwordConf = '';
//var result = {
//        errors:[]
//    }
//
//
//function registerValidation(){
//    email = $('#email').val();
//    username = $('#username').val();
//    password = $('#password').val();
//    passwordConf = $('#passwordConf').val();
//    result.errors = [];
//    if(email ==''){
//        result.errors.push ('E-mail field is required');
//    }
//    if(username ==''){
//        result.errors.push ('Username field is required');
//    }
//    if(password ==''){
//        result.errors.push ('Password field is required');
//    }
//    if(password !==passwordConf){
//        result.errors.push ('Passwords doesn\'t match');
//    }
//
//    return result;
//}
//
//function loginValidation(){
//    email = $('#email').val();
//    password = $('#password').val();
//    result.errors = [];
//    if(email ==''){
//        result.errors.push ('E-mail field is required');
//    }
//    if(password ==''){
//        result.errors.push ('Password field is required');
//    }
//
//    return result;
//}
//$(function(){
//
//    $('#register_form').submit(function(){
//        var validation = registerValidation();
//        if(validation.errors.length > 0){
//            $('#errors').slideUp(200).html('');
//            for(var i=0;i<validation.errors.length;i++){
//                $('#errors').append('<p class="error-item">'+validation.errors[i]+'</p>');
//            }
//            $('#errors').slideDown(400);
//            return false;
//        }else{
//            $.ajax({
//                url:'/site/registration',
//                type:"post",
//                data:{
//                    ajaxRegistration:1,
//                    email:$('#email').val(),
//                    username: $('#username').val(),
//                    password: $('#password').val()
//                    },
//                success:function(data){
//                    if(data == '1'){
//                        location.href = '?r=site/login'
//                    }
//
//                }
//            });
//            return false;
//        }
//
//    })
//
//        $('#login_form').submit(function(){
//        var validation = loginValidation();
//        if(validation.errors.length > 0){
//            $('#errors').slideUp(200).html('');
//            for(var i=0;i<validation.errors.length;i++){
//                $('#errors').append('<p class="error-item">'+validation.errors[i]+'</p>');
//            }
//            $('#errors').slideDown(400);
//            return false;
//        }else{
//            $.ajax({
//                url:'?r=site/login',
//                type:"post",
//                data:{
//                    ajax:'login-form',
//                    email:$('#email').val(),
//                    password: $('#password').val()
//                    },
//                success:function(data){
//                    if(data == '1'){
//                        location.href = '?r=site/index'
//                    }
//
//                }
//            });
//            return false;
//        }
//
//    })
//})