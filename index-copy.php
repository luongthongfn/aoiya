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
    <header>
        <section id="menu">
            <div class="navbar sticky-header fixed clearfix">
                <a class="logo-sp show-sp" href=""><img src="img/logo.png" alt=""></a>
                <!--mobi button-->
                <button class="nav-toggle">
                    <div class="icon-menu">
                        <span class="line line-1"></span>
                        <span class="line line-2"></span>
                        <span class="line line-3"></span>
                    </div>
                </button>
                <!--/mobi button-->
                <nav class="nav-container">
                    <ul>
                        <li><a href="#info">夜明け前</a></li>
                        <li><a href="#bussiness">ヒストリー</a></li>
                        <li><a href="#recruit" class="logo-pc show-pc"><img class="" src="img/logo.png" alt=""></a></li>
                        <li><a href="#outline">取扱店舗</a></li>
                        <li><a href="#access">日々のこと。</a></li>
                    </ul>
                </nav>
                <a href="" class="contact-header show-pc"><i class="fa fa-envelope"></i> 夜明け前</a>
            </div>
        </section>
        <section class="sc-slide">
            <div class="js-slider-main owl-carousel owl-theme">
                <div class="item">
                    <img src="img/slider1.png" alt="">
                </div>
                <div class="item">
                    <img src="img/slider1.png" alt="">
                </div>
            </div>
            <div class="box-name">
                <img src="img/box-name.png" alt="">
            </div>
        </section>
        <script>
            (function($) {
            $(function() {
                $(".js-slider-main").owlCarousel({
                    items: 1,
                    responsive: {
                        // breakpoint from 1200 up
                        1200: {
                            item: 1
                        },
                        768: {
                            items: 1
                        },
                        0: {
                            dots: false,
                            nav: false
                        }
                    },
                    slideBy: 1,
                    loop: true,
                    rewind: false,
                    autoplay: true,
                    autoplayTimeout: 4000,
                    autoplayHoverPause: true,
                    smartSpeed: 500, //slide speed smooth

                    dots: true,
                    dotsEach: true,
                    nav: false,
                    // navText: ['‹', '›'],
                    // dotsContainer: '#main-custom-dots',
                    // navText: ['<img src="img/but-p.png"/>', '<img src="img/but-n.png"/>'],
                    // navText: ['<i class="fa fa-chevron-left"><i/>', '<i class="fa fa-chevron-right"><i/>'],
                    margin: 0,
                });
            })
        })(jQuery)
        </script>
    </header>
    <div id="content">
        <section class="sc-info" id="info">
            <div class="title-bg text-center">
                <h2 class="sc-info--title">infomation</h2>
                <p class="sc-info--sub-title">Lorem, ipsum dolor.</p>
            </div>
            <article class="info">
                <div class="info-time">2018.00.00</div>
                <div class="desc">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim qui ipsa, architecto quibusdam
                        velit esse numquam rem laudantium vero provident!
                    </p>
                </div>
            </article>
            <article class="info">
                <div class="info-time">2018.00.00</div>
                <div class="desc">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim qui ipsa, architecto quibusdam
                        velit esse numquam rem laudantium vero provident!
                    </p>
                </div>
            </article>
            <article class="info">
                <div class="info-time">2018.00.00</div>
                <div class="desc">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim qui ipsa, architecto quibusdam
                        velit esse numquam rem laudantium vero provident!
                    </p>
                </div>
            </article>
        </section>

        <section class="sc-buss" id="bussiness">
            <div class="title-bg text-center">
                <h2 class="sc-buss--title">bussiness</h2>
                <p class="sc-buss--sub-title">Lorem, ipsum dolor.</p>
            </div>
            <div class="top">
                <div class="sc-buss--wrapper">
                    <div class="desc">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis beatae enim excepturi impedit
                        earum sequi! Dolore ratione exercitationem culpa alias natus, architecto iusto eum obcaecati.
                        Omnis sed placeat sit reprehenderit velit. Dignissimos beatae ad sed iste neque. Magnam,
                        aliquam aliquid?
                    </div>
                    <img src="img/diagram.png" alt="" class="diagram">
                </div>
            </div>
            <div class="bot">
                <div class="department">
                    <div class="label">
                        <img src="img/label1-bg.png" alt="">
                        <div class="dp-mid-center">
                            <img src="img/i-agent.png" alt="">
                            <h3>agent</h3>
                        </div>
                    </div>
                    <div class="summary">
                        <h4 class="heading">Lorem ipsum dolor sit.</h4>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore cumque beatae
                            necessitatibus fuga tempora! Fugiat, in? Quisquam, ipsum? Soluta, corporis!
                        </p>
                        <a href="#agent1" class="arrow-down"><img src="img/i-arrow-down.png" alt=""></a>
                    </div>
                </div>
                <div class="department">
                    <div class="label">
                        <img src="img/label1-bg.png" alt="">
                        <div class="dp-mid-center">
                            <img src="img/i-agent.png" alt="">
                            <h3>agent</h3>
                        </div>
                    </div>
                    <div class="summary">
                        <h4 class="heading">Lorem ipsum dolor sit.</h4>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore cumque beatae
                            necessitatibus fuga tempora! Fugiat, in? Quisquam, ipsum? Soluta, corporis!
                        </p>
                        <a href="#agent2" class="arrow-down"><img src="img/i-arrow-down.png" alt=""></a>
                    </div>
                </div>
                <div class="department">
                    <div class="label">
                        <img src="img/label1-bg.png" alt="">
                        <div class="dp-mid-center">
                            <img src="img/i-agent.png" alt="">
                            <h3>agent</h3>
                        </div>
                    </div>
                    <div class="summary">
                        <h4 class="heading">Lorem ipsum dolor sit.</h4>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore cumque beatae
                            necessitatibus fuga tempora! Fugiat, in? Quisquam, ipsum? Soluta, corporis!
                        </p>
                        <a href="#agent3" class="arrow-down"><img src="img/i-arrow-down.png" alt=""></a>
                    </div>
                </div>
                <div class="department">
                    <div class="label">
                        <img src="img/label1-bg.png" alt="">
                        <div class="dp-mid-center">
                            <img src="img/i-agent.png" alt="">
                            <h3>agent</h3>
                        </div>
                    </div>
                    <div class="summary">
                        <h4 class="heading">Lorem ipsum dolor sit.</h4>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore cumque beatae
                            necessitatibus fuga tempora! Fugiat, in? Quisquam, ipsum? Soluta, corporis!
                        </p>
                        <a href="#agent4" class="arrow-down"><img src="img/i-arrow-down.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="depart-content">
                <div class="card" id="agent1">
                    <h3 class="card--heading">
                        <div class="icon"><img src="img/i-agent.png" alt=""></div>
                        <span>Lorem, ipsum dolor.</span>
                    </h3>
                    <p class="txt">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed ad recusandae officia cum
                        laboriosam fugit repellat delectus sequi eveniet. Doloribus!
                    </p>
                </div>
                <div class="card" id="agent2">
                    <h3 class="card--heading">
                        <div class="icon"><img src="img/i-agent.png" alt=""></div>
                        <span>Lorem, ipsum dolor.</span>
                    </h3>
                    <p class="txt">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed ad recusandae officia cum
                        laboriosam fugit repellat delectus sequi eveniet. Doloribus!
                    </p>
                </div>
                <div class="card" id="agent3">
                    <h3 class="card--heading">
                        <div class="icon"><img src="img/i-agent.png" alt=""></div>
                        <span>Lorem, ipsum dolor.</span>
                    </h3>
                    <p class="txt">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed ad recusandae officia cum
                        laboriosam fugit repellat delectus sequi eveniet. Doloribus!
                    </p>
                </div>
                <div class="card" id="agent4">
                    <h3 class="card--heading">
                        <div class="icon"><img src="img/i-agent.png" alt=""></div>
                        <span>Lorem, ipsum dolor.</span>
                    </h3>
                    <p class="txt">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed ad recusandae officia cum
                        laboriosam fugit repellat delectus sequi eveniet. Doloribus!
                    </p>
                </div>
            </div>
        </section>

        <section class="sc-recruit" id="recruit">
            <div class="title-bg text-center">
                <h2 class="sc-recruit--title">recruit</h2>
                <p class="sc-recruit--sub-title">Lorem, ipsum dolor.</p>
            </div>
            <div class="recruit-box">
                <img class="show-sp w1" src="img/recruit-bg-sp.png" alt="">
                <img class="show-pc w1" src="img/recruit-bg-pc.png" alt="">
                <div class="link1">
                    <div class="icon">
                        <img src="img/i-hr.png" alt="">
                    </div>
                    <a href="">Lorem, ipsum dolor. <i class="fa fa-angle-right"></i></a>
                </div>
                <div class="link2">
                    recruitment
                </div>
            </div>
        </section>

        <section class="sc-outline" id="outline">
            <div class="title-bg text-center">
                <h2 class="sc-outline--title">outline</h2>
                <p class="sc-outline--sub-title">Lorem, ipsum dolor.</p>
            </div>
            <div class="outline-bg">
                <div class="outline-table">
                    <div class="row">
                        <div class="left">
                            Lorem, ipsum.
                        </div>
                        <div class="right">
                            Lorem ipsum dolor sit amet.
                        </div>
                    </div>
                    <div class="row">
                        <div class="left">
                            Lorem, ipsum.
                        </div>
                        <div class="right">
                            Lorem ipsum dolor sit amet.
                        </div>
                    </div>
                    <div class="row">
                        <div class="left">
                            Lorem, ipsum.
                        </div>
                        <div class="right">
                            Lorem ipsum dolor sit amet.
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="access" id="access">
            <div class="title-bg text-center">
                <h2 class="access--title">access</h2>
                <p class="access--subtitle">Lorem, ipsum dolor.</p>
            </div>
            <div class="access--box">
                <div class="access--heading">
                    <h3 class="heading-top">Lorem, ipsum dolor.</h3>
                    <p class="heading-bot">AOIYA</p>
                </div>
                <div class="access--map">
                    <img src="img/map-area.png" alt="" class="w1">
                </div>
            </div>
        </section>

        <section class="contact" id="contact">
            <div class="title-bg text-center">
                <h2 class="contact--title">contact</h2>
                <p class="contact--subtitle">Lorem, ipsum dolor.</p>
            </div>
            <div class="contact--bg">
                <div class="contact--wrapper">
                    <h3 class="form-name">Lorem, ipsum dolor.</h3>
                    <form class="contact--form" action="">
                        <label for="">
                            <span>Lorem ipsum dolor sit.</span>
                            <select name="" id="">
                                <option value="">Lorem ipsum dolor sit.</option>
                                <option value="">Lorem ipsum dolor sit.</option>
                                <option value="">Lorem ipsum dolor sit.</option>
                            </select>
                        </label>
                        <label for="">
                            <span>Lorem, ipsum dolor.</span>
                            <input type="text">
                        </label>
                        <label for="">
                            <span>Lorem ipsum dolor sit.</span>
                            <input type="text">
                        </label>
                        <label for="">
                            <span>Lorem ipsum dolor sit.</span>
                            <input type="text">
                        </label>
                        <label for="">
                            <span>Lorem ipsum dolor sit.</span>
                            <textarea name="" id="" cols="30" rows="10"></textarea>
                        </label>
                        <button type="submit" class="submit"><i class="fa fa-paper-plane"></i></button>
                    </form>
                </div>
            </div>
        </section>
        <?php
            $to = "xyz@somedomain.com";
            $subject = "Đây là subject";

            $message = "<b>Đây là HTML Message.</b>";
            $message .= "<h1>Đây là headline.</h1>";

            $header = "From:abc@somedomain.com \r\n";
            $header = "Cc:afgh@somedomain.com \r\n";
            $header .= "MIME-Version: 1.0\r\n";
            $header .= "Content-type: text/html\r\n";

            $retval = mail($to, $subject, $message, $header);

            if ($retval == true) {
                echo "Gửi email thành công ...";
            } else {
                echo "Không thể gửi email ...";
            }
        ?>

    </div>
    <footer>

        <div class="view-map">
            <a href=""><img src="img/gg-view.png" class="w1"></a>
            <a href=""><img src="img/map-view.png" class="w1"></a>
        </div>

        <div class="ft-bg">
            <div class="ft-bg--wrapper">
                <section class="ft-top">
                    <div class="ft-brand">
                        <img src="img/logo.png">
                        <span>Lorem ipsum dolor.</span>
                    </div>
                    <a class="go-top show-sp">
                        <img src="img/i-arrow-up.png">
                        <p>PAGE TOP</p>
                    </a>
                </section>

                <section class="ft-mid">
                    <ul class="ft-menu">
                        <li><a href="">Lorem ipsum</a></li>
                        <li><a href="">Lorem ipsum</a></li>
                        <li><a href="">Lorem ipsum</a></li>
                        <li><a href="">Lorem ipsum</a></li>
                    </ul>
                    <div class="ft-logo">
                        <img src="img/ft-logo.png">
                    </div>
                </section>

                <section class="ft-bot">
                    <div class="copy-r">Copyright @ 2018 <a href="">AOIYA</a>. All Rights Reserved.</div>
                </section>
            </div>
        </div>

    </footer>
    <a href="" id="go-top" class="show-pc"><i class="fa fa-angle-up"></i></a>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</body>

</html>