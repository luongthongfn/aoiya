<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>aoiya</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/custom.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.theme2.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
   

    <div id="content">
        
        <section class="contact" id="contact">
            <div class="title-bg text-center">
                <h2 class="title">contact</h2>
                <p class="subtitle">Lorem, ipsum dolor.</p>
            </div>

            <div class="contact--bg">
                <div class="contact--wrapper container">
                    <h3 class="form-name">Lorem, ipsum dolor.</h3>
                    <form class="contact--form" action="" method="POST">
                        <label>
                            <span>お問い合わせ項目</span>
                            <select name="request" id="request" value="" required >
                                <option value="0">項目を選択してください</option>
                                <option value="select2">Lorem ipsum dolor sit.</option>
                                <option value="select3">Lorem ipsum dolor sit.</option>
                            </select>
                        </label>
                        <label>
                            <span>お名前</span>
                            <input type="text" name="name" id="name" required>
                        </label>
                        <label>
                            <span>貴社名/部署名</span>
                            <input type="text" name="company" id="company" required>
                        </label>
                        <label>
                            <span>メールアドレス</span>
                            <input type="text" name="email" id="email" required>
                        </label>
                        <label>
                            <span>お問い合わせ内容</span>
                            <textarea  name="question" id="question" cols="30" rows="10" required></textarea>
                        </label>
                        <button type="submit" class="contact-submit" id="contact-submit"><i class="fa fa-paper-plane"></i></button>
                        <div id="js_mail_result show">
                            <div class="pending"></div>
                        </div>
                    </form>
                    <script>
                        
                        $('#contact-submit').click(function (e) {
                            e.preventDefault();
                            var required = $('.contact--form input, .contact--form select, .contact--form textarea').filter('[required]:visible');
                            var checkRequired = true;
                            var requiredText = '<span class="required-notice">required!</span>'
                            required.each( (i, elem) => {
                                if (!$(elem).val()) {
                                    checkRequired = false;
                                    $(elem).before(requiredText);
                                }
                                
                            });
                            return;
                            _this.prop('disabled');
                            _this.addClass('test');
                            $('#js_mail_result').addClass('show');
                            
                            $(this.add)
                            $.ajax({
                                url: 'gmail.php',
                                type: 'POST',
                                data: {
                                    send_mail: true,
                                    select: $('#request').val(),
                                    input1: $('#name').val(),
                                    input2: $('#company').val(),
                                    input3: $('#email').val(),
                                    input4: $('#question').val(),
                                },
                                success: function (res) {
                                    $("#js_mail_result").html(res);
                                }
                                
                            })

                        })
                    </script>
                </div>
            </div>
        </section> <!-- end #contact -->

    </div><!-- End #content-->

  

    <a href="" id="go-top" class="show-pc"><i class="fa fa-angle-up"></i></a>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</body>

</html>
