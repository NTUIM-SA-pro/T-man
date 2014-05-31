<meta charset="utf-8">
<title>T-MAN</title>
<link rel="stylesheet" type="text/css" href="css/semantic/packaged/css/semantic.css">

<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="js/jquery.js"></script>
<script src="css/semantic/packaged/javascript/semantic.js"></script>

<script>
  $(document).ready(function(){
    $('.ui.dropdown').dropdown();
    $('.ui.dimmer').dimmer({on: 'hover'});
    

 var settings = {
        inline : true,
        on : 'submit'
    };
    var rules = {
        account: {
              identifier  : 'account',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter a gender'
                }
              ]
            },
            name: {
              identifier  : 'password',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your name'
                }
              ]
        }
    }


  $('a.item.register').click(function(){
      $('.register.modal').modal('show');
    });
    $('#register_form .ui.black.button.cancel').click(function(){
      $('.register.modal').modal('hide');
    });
  $('a.item.login').click(function(){
      $('.signin.modal').modal('show');
    });
    $('#signin_form .ui.black.button.cancel').click(function(){
      $('.signin.modal').modal('hide');
    });

  $('#signin_form .button.ok').click(function(){
      $("#signin_form").submit();
  });
  $('#register_form .button.ok').click(function(){
  //   var a1 = $(".ui.form input[name='account']").val();
  //   var a2 = $(".ui.form input[name='password']").val();
  //   var a3 = $(".ui.form input[name='checkPassword']").val();
  //   console.log(a1);
  //     $.ajax({
  //       type:'POST',
  //       url: 'register',
  //       data: {account:a1,password:a2},
  //       success:function(){
  //         $('.test.modal').modal('hide');
  //       }
  //     })
   $("#register_form").submit();
  });

  $('#register_form .ui.form').form(rules,settings);
  

  });
  
</script>