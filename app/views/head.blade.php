<meta charset="utf-8">
<title>T-MAN</title>
<link rel="stylesheet" type="text/css" href="css/semantic/packaged/css/semantic.css">
<link rel="stylesheet" type="text/css" href="jqueryui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="js/jquery.js"></script>
<script src="jqueryui/js/jquery-ui-1.10.4.custom.min.js"></script>

<script src="css/semantic/packaged/javascript/semantic.js"></script>

<script>
  $(document).ready(function(){
    $('.ui.dropdown').dropdown();
    $('.ui.dimmer').dimmer({on: 'hover'});
    

 var settings = {
        inline : true,
        on : 'submit',
        onSuccess: function(){
            $("#register_form").submit();

        }
    };
    var rules = {
          account: {
              identifier  : 'account',
              rules: [
                {
                  type   : 'empty',
                  prompt : '還沒輸入Email唷!!'
                },
                {
                  type:  'email',
                  prompt:'請使用有效的Email!!'
                }
              ]
            },
          password: {
              identifier  : 'password',
              rules: [
                {
                  type   : 'empty',
                  prompt : '還沒輸入密碼唷!!'
                },
                {
                  type   : 'length[4]',
                  prompt : '至少需要4位密碼!!'
                }
              ]
        },
          password_again: {
              identifier  : 'password-again',
              rules: [
                {
                  type   : 'empty',
                  prompt : '請再輸入一次密碼!!'
                },
                {
                  type   : 'match[password]',
                  prompt : '兩次密碼不一致，請再輸入一次!!'
                }
              ]
        }
    }


  $('a.item.register').click(function(){
      $('.register.modal').modal('show');
      
    });
    // $('#register_form .ui.black.button.cancel').click(function(){
    //   $('.register.modal').modal('hide');
    // });
  $('a.item.login').click(function(){
  
      // $('.login.modal').modal('onShow',function(){

      //     $('.error.message').html('').hide();
      // })
      $('.login.modal').modal('show');
    });
    $('#login_form .ui.black.button.cancel').click(function(){
      // $('.error.message').html('').hide();
      // $('.lognin.modal').modal('hide');
    });

  $('#login_form .button.ok').click(function(){
      $.ajax({
        url:'login',
        type:'POST',
        data:$('#login_form').serialize(),
        success: function(message){
          if(message!='帳號or密碼輸入錯誤') location.reload();
          else $('.error.message').html(message).show();
        },
        error:function(){
          alert('wrong');
        }
      })
  });


  $('#register_form .ui.form').form(rules,settings);
  $('.profile-btn.post').click(function(){
      $('.creatework.modal').modal('show');
  })
  


  $("#datepick").datepicker();
  $("#datepick").datepicker("option","dateFormat","yy-mm-dd");
  
  $('#submit').click(function(){
   
      $('.ui.fluid.form').submit();

  });


});
  
</script>