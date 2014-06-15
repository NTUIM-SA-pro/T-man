<meta charset="utf-8">
<title>T-MAN</title>
<link rel="stylesheet" type="text/css" href="/css/semantic/packaged/css/semantic.css">
<link rel="stylesheet" type="text/css" href="/jqueryui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
<link rel="stylesheet" type="text/css" href="/css/style.css">
<script src="/js/jquery.js"></script>
<script src="/js/jquery.form.min.js"></script>
<script src="/jqueryui/js/jquery-ui-1.10.4.custom.min.js"></script>
<script src="/css/semantic/packaged/javascript/semantic.js"></script>
<script src="/js/jquery_coverflow/jquery.coverflow.js"></script>
<!-- Optionals -->
<script src="/js/jquery_coverflow/jquery.interpolate.js"></script>
<script src="/js/jquery_coverflow/jquery.mousewheel.js"></script>
<script src="/js/jquery_coverflow/jquery.touchSwipe.min.js"></script>
<script src="/js/jquery_coverflow/reflection.js"></script>
<script>
    $(document).ready(function () {
        $('.ui.dropdown').dropdown();

        $('.ui.dimmer').dimmer({
            on: 'hover'
        });

        if ($('.test').length != 0) 
        {
            $('.login.modal').modal('setting', {
                onHidden: function () {
                    window.location.href = '/home';
                }
            }).modal('show');
            $('#login_form .ui.error.message').show();
        }

        var settings = {
            inline: true,
            on: 'submit',
            onSuccess: function () {
                $.ajax({
                url: 'register',
                type: 'POST',
                data: $('#register_form').serialize(),
                success: function (message) {
                    if (message != 'inject') 
                    {
                        window.location.href = "/profile/" + message;
                    }
                    else
                    {
                        $('#register_form .error.message').html('綽號請不要使用特殊字元(不用inject我們...)').show();
                    }
                },
                error: function () {
                    alert('wrong');
                }
            });


            }
        };

        var rules = {
            nickname: {
                identifier: 'nickname',
                rules: [{
                    type: 'empty',
                    prompt: '還沒輸入綽號唷!!'
                }]
            },
            account: {
                identifier: 'account',
                rules: [{
                    type: 'empty',
                    prompt: '還沒輸入Email唷!!'
                }, {
                    type: 'email',
                    prompt: '請使用有效的Email!!'
                }]
            },
            password: {
                identifier: 'password',
                rules: [{
                    type: 'empty',
                    prompt: '還沒輸入密碼唷!!'
                }, {
                    type: 'length[4]',
                    prompt: '至少需要4位密碼!!'
                }]
            },
            password_again: {
                identifier: 'password-again',
                rules: [{
                    type: 'empty',
                    prompt: '請再輸入一次密碼!!'
                }, {
                    type: 'match[password]',
                    prompt: '兩次密碼不一致，請再輸入一次!!'
                }]
            }
        }

        $('.userList img').popup({
            on: 'click',
            inline: true
        });

        $('.ui.checkbox').checkbox();

        $('a.item.register').click(function () {
            $('.register.modal').modal('show');
        });

        $('a.item.login').click(function() {
            $('.login.modal').modal('setting',{
                onHidden:function() {
                    $('#login_form .error.message').hide();
                }
            }).modal('show');
        });

        $('#login_form .button.ok').click(function () {
            $.ajax({
                url: 'login',
                type: 'POST',
                data: $('#login_form').serialize(),
                success: function (message) {
                    if (message != '帳號or密碼輸入錯誤') 
                    {
                        window.location.href = "/user/" + message;
                    }
                    else
                    {
                        $('#login_form .error.message').html(message).show();
                    }
                },
                error: function () {
                    alert('wrong');
                }
            });
        });

        function readURL(input) {

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.error.message.photo').hide();
                    $('.photo_upload').addClass('load');
                    $('.photo_upload').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $(".upload").change(function(){
            readURL(this);
        });


        $('#modify_form .button.ok').click(function () {

    

            var user =  $('#modify_form').attr('user');
            $.ajax({
                url: '/profile/'+user,
                type: 'put',
                data: $('#modify_form').serialize(),
                enctype: 'multipart/form-data',
                success: function (message) {
                    if (message == 'inject') 
                    {
                        $('#modify_form .error.message').html('綽號請不要使用特殊字元(不用inject我們...)').show();
                    }
                    // else if(message=='format_error')
                    // {
                    //     $('#modify_form .error.message').html('請上傳正確圖片格式!').show();
                    // }
                    // else if(message=='upload_error')
                    // {
                    //     $('#modify_form .error.message').html('上傳圖片發生未知錯誤!').show();
                    // }
                    else if(message=='upload_ok')
                    {
                        window.location.href = "/profile/" + user;
                    }
                    else
                    {   
                        console.log(message);
                    }
                },
                error: function () {
                    alert('wrong');
                }
            });
        });

        $('#register_form .ui.form').form(rules, settings);

        //顯示發案視窗
        $('.profie-btn.post').click(function () {
            $('.creatework.modal').modal('show');
        });

        $('#register_form .ui.form').form(rules, settings);

        $('.profile-btn.post').click(function () {
            $('.creatework.modal').modal('show');
        });

        $("#datepick").datepicker();

        $("#datepick").datepicker("option", "dateFormat", "yy-mm-dd");

        $('#task_form .black.submit.button').click(function () {
            if($('#task_form input[name="workName"').val()=='')
            {
                $('#task_form .error.message').html('請輸入工作名稱').show();
                return false;
            }
            else if($('#task_form input[name="description"').val()=='')
            {
                $('#task_form .error.message').html('請輸入工作敘述').show();
                return false;
            }
            else if($('#task_form input[name="reward"').val()=='')
            {
                $('#task_form .error.message').html('請輸入工作獎賞').show();
                return false;
            }
            else if($('#task_form input[name="date"').val()=='')
            {
                $('#task_form .error.message').html('請輸入工作時間').show();
                return false;
            }
            var formData = new FormData($('#task_form')[0]);
            console.log('ok');
            // $('#task_form .error.message').css('display','none');

            $.ajax({
                url: '/work',
                type: 'POST',
                data: formData,
                async: false,
                success: function (msg) {
                    if(msg=='inject')
                    {
                        $('#task_form .error.message').html('工作名稱或獎賞請不要使用特殊字元(不用inject我們...)').show();
                    }
                    else if(msg=='img_format')
                    {
                        $('#task_form .error.message').html('請使用正確的圖片格式！').show();   
                    }
                    else if(msg=='img_empty')
                    {
                        $('#task_form .error.message').html('請上傳圖片！').show();     
                    }
                    else
                    {
                        window.location.href = "/user/" + msg;
                    }
                },
                error: function(){
                    alert('wrong');
                },
                cache: false,
                contentType: false,
                processData: false
            });

            // return false;
        });

        $('.userList img').click(function () {
            $('.userList').children('img').each(function () {
                $(this).removeClass('active');
            });
            $(this).addClass('active');
        });

        $('.ui.green.button.choose-user').click(function () {
            var chosen_user;
            var work_id;

            $('.userList').children('img').each(function () {
                if ($(this).hasClass('active')) {
                    chosen_user = $(this).attr('name');
                    work_id = $(this).attr('work-id');
                }
            });
            if (typeof chosen_user == 'undefined') {
                alert('至少選一個！！');
            } 
            else {
                $.ajax({
                    url: 'confirmtask',
                    type: 'POST',
                    data: {
                        user: chosen_user,
                        work: work_id
                    },
                    success: function (msg) {
                        window.location.href = "/user/" + msg;
                    },
                    error: function () {
                        alert('wrong');
                    }
                });
            }
        });
        $('.ui.animated.black.button.go').click(function(){
            $('#filter_form').submit();
        })
    });

    $(function () {
        function tabsToSpaces(line, tabsize) {
            var out = '',
                tabsize = tabsize || 4,
                c;
            for (c in line) {
                var ch = line.charAt(c);
                if (ch === '\t') {
                    do {
                        out += ' ';
                    } while (out.length % tabsize);
                } else {
                    out += ch;
                }
            }
            return out;
        }

        function visualizeElement(element, type) {
            var code = $(element).html().split('\n'),
                tabsize = 4,
                minlength = 2E53,
                l;

            // Convert tabs to spaces
            for (l in code) {
                code[l] = tabsToSpaces(code[l], tabsize);
            }

            // determine minimum length
            var minlength = 2E53;
            var first = 2E53;
            var last = 0;
            for (l in code) 
            {
                if (/\S/.test(code[l])) 
                {
                    minlength = Math.min(minlength, /^\s*/.exec(code[l])[0].length);
                    first = Math.min(first, l);
                    last = Math.max(last, l);
                }
            }

            code = code.slice(first, last + 1);

            // strip tabs at start
            for (l in code) 
            {
                code[l] = code[l].slice(minlength);
            }

            // recombine
            code = code.join('\n');

            var fragment = $('<pre class="prettyprint"><code/></pre>').text(code).insertAfter(element);
            $('<h3 class="clickable">' + type + '&hellip;</h3>').insertBefore(fragment).click(function () {
                fragment.slideToggle();
            });
        }

        // Include the readme

    });

    $(function () {
        $('#preview-coverflow').coverflow({
            index: 4,
            density: 2,
            innerOffset: 30,
            innerScale: 0.8,
            innerAngle: -30,
            outerAngle: -30,
            duration: 1000,
            animateStep: function (event, cover, offset, isVisible, isMiddle, sin, cos) {
                if (isVisible) 
                {
                    if (isMiddle) 
                    {
                        $(cover).css({
                            'filter': 'none',
                            '-webkit-filter': 'none'
                        });
                    }
                    else
                    {
                        var brightness = 1 + Math.abs(sin),
                            contrast = 1 - Math.abs(sin),
                            filter = 'contrast(' + contrast + ') brightness(' + brightness + ')';
                        $(cover).css({
                            'filter': filter,
                            '-webkit-filter': filter
                        });
                    }
                }
            }
        });
    });
</script>