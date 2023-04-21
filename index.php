<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Lebaran!</title>
    <meta name="description" content="Selamat Hari Raya Idul Fitri 1442 H">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/roboto-fontface@0.10.0/css/roboto/roboto-fontface.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style>
    @font-face {
        font-family: 'Stavok';
        src:
            url('fonts/stavok.ttf') format('truetype'),
            url('fonts/stavok.otf') format('opentype');
        font-weight: normal;
        font-style: normal;
    }

    @font-face {
        font-family: 'Calgary';
        src:
            url('fonts/Calgary.ttf') format('truetype'),
            url('fonts/Calgary.otf') format('opentype');
        font-weight: normal;
        font-style: normal;
    }

    html,
    body {
        height: 100vh;
        overflow: hidden;
        position: relative;
    }

    body {
        background-color: #131747;
        height: 100%;
        overflow: hidden;
        color: #fff;
        font-family: 'Stavok';
    }

    .main-container {
        max-width: 414px;
        margin: 0 auto;
        background: linear-gradient(169.45deg, #131747 13.82%, #000000 97.34%);
        width: 100%;
        height: 100vh;
        position: relative;
        overflow: hidden;
    }

    img.bg {
        position: absolute;
    }

    .header {
        width: 100%;
    }

    .content {
        text-align: center;
        margin-top: 28px;
        padding: 0 20px;
    }

    .content .fitri {
        margin-bottom: 32px;
        width: 80%;
        margin-top: 8px;
    }

    .content .name {
        font-size: 14px;
        font-family: 'Stavok';
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 1;
        /* number of lines to show */
        -webkit-box-orient: vertical;
        margin-bottom: 32px;
        margin-top: 50px
    }

    .content .name span span {
        border-right: .05em solid;
        animation: caret 1s steps(1) infinite;
        padding: 0px
    }

    @keyframes caret {
        50% {
            border-color: transparent;
        }
    }

    .content .name span {
        font-family: 'Stavok';
        text-transform: capitalize;
        background: #8FA1D3;
        padding: 8px;
        line-height: 32px;
        color: #000000
    }

    .content .line {
        height: 2px;
        width: 56px;
        border-radius: 35px;
        background: #fff;
        margin: 18px auto;
    }

    .content .greeting {
        font-size: 12px;
        font-family: 'Stavok';
        line-height: 22px;
        margin-top: 16px
    }

    .content .greeting span {
        font-size: 10px;
    }

    .footer {
        position: fixed;
        bottom: -10px;
        text-align: center;
    }

    .footer img {
        width: 100%;
        max-width: 414px;
    }

    .footer p {
        position: absolute;
        bottom: 45px;
        color: #2A234D;
        font-size: 12px;
        font-weight: 300;
        margin-bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 100%;
    }

    @keyframes fadeOut {
        0% {
            opacity: 1;
        }

        100% {
            opacity: 0;
        }
    }

    @-moz-keyframes fadeOut {
        0% {
            opacity: 1;
        }

        100% {
            opacity: 0;
        }
    }

    @-webkit-keyframes fadeOut {
        0% {
            opacity: 1;
        }

        100% {
            opacity: 0;
        }
    }

    @-webkit-keyframes slideIn {
        from {
            bottom: -300px;
            opacity: 0
        }

        to {
            bottom: -30;
            opacity: 1
        }
    }

    @keyframes slideIn {
        from {
            bottom: -300px;
            opacity: 0
        }

        to {
            bottom: -30;
            opacity: 1
        }
    }

    .popup {
        position: absolute;
        z-index: 99;
        background: #Fff;
        height: 100vh;
        width: 100%;
        max-width: 414px;
        left: 50%;
        transform: translateX(-50%);
        padding: 20px;
        text-align: center;
    }

    .popup.hide {
        display: none;
    }

    .popup .eid {
        margin-top: 30px;
        -webkit-animation-name: logo-fade;
        animation-name: logo-fade;
        -webkit-animation-duration: 0.3s;
        animation-duration: 0.3s;
        -webkit-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out;
    }

    .popup .brand {
        position: fixed;
        bottom: 70px;
        left: 50%;
        transform: translateX(-50%);
    }

    .popup input {
        margin-top: 8rem;
    }

    .popup .help-text {
        font-size: 10px;
        color: #000000;
        margin-top: 16px
    }

    @-webkit-keyframes fadeIn {
        from {
            opacity: 0
        }

        to {
            opacity: 1
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0
        }

        to {
            opacity: 1
        }
    }

    .slideIn {
        -webkit-animation-name: slideIn;
        -webkit-animation-duration: 0.4s;
        animation-name: slideIn;
        animation-duration: 0.4s;
    }

    .fadeIn {
        -webkit-animation-name: fadeIn;
        -webkit-animation-duration: 0.2s;
        animation-name: fadeIn;
        animation-duration: 0.2s;
    }

    .fadeIn2 {
        -webkit-animation-name: fadeIn;
        -webkit-animation-duration: 1s;
        animation-name: fadeIn;
        animation-duration: 1s;
    }

    .form-control {
        border: none;
        border-radius: 0;
        border-bottom: 1px solid #2A234D;
        text-align: center;
        color: #c4a2fc;
        font-weight: 500;
    }

    .form-control:focus {
        color: #c4a2fc;
        outline: none;
        border: none;
        border-bottom: 1px solid #c4a2fc;
        box-shadow: none;
    }

    .form-control::placeholder {
        font-style: italic;
        color: #2A234D;
        font-weight: 400;
    }

    .form-control:-moz-placeholder {
        font-style: italic;
        color: #2A234D;
        font-weight: 400;
    }

    .form-control::-moz-placeholder {
        font-style: italic;
        color: #2A234D;
        font-weight: 400;
    }

    .logos {
        margin-top: 24px;
        /* margin-bottom: 12px; */
        text-align: center;
    }

    @-webkit-keyframes logo-fade {
        from {
            opacity: 0;
            -webkit-transform: scale3d(0.3, 0.3, 0.3) rotate(-180deg) translateX(50px);
            transform: scale3d(0.3, 0.3, 0.3) rotate(-180deg) translateX(50px);
        }

        50% {
            opacity: 1;
        }

        100% {
            transform: rotate(0deg) translateX(0);
            -webkit-transform: rotate(0deg) translateX(0);
        }
    }

    @keyframes logo-fade {
        from {
            opacity: 0;
            -webkit-transform: scale3d(0.3, 0.3, 0.3) rotate(-180deg) translateX(50px);
            transform: scale3d(0.3, 0.3, 0.3) rotate(-180deg) translateX(50px);
        }

        50% {
            opacity: 1;
        }

        100% {
            transform: rotate(0deg) translateX(0);
            -webkit-transform: rotate(0deg) translateX(0);
        }
    }

    .logos img {
        width: 60%;
        margin-top: 20px
    }

    .logo-btm img {
        width: 90px;
        margin-top: 8px
    }

    .txt1 {
        font-family: 'Stavok';
        font-size: 12px;
        letter-spacing: 1px;
    }

    .txt2 {
        font-family: 'Calgary';
        font-size: 55px;
    }

    @media (min-width: 768px) {
        .footer {
            position: fixed;
            bottom: -10px;
        }

        @-webkit-keyframes slideIn {
            from {
                bottom: -300px;
                opacity: 0
            }

            to {
                bottom: -90;
                opacity: 1
            }
        }

        @keyframes slideIn {
            from {
                bottom: -300px;
                opacity: 0
            }

            to {
                bottom: -90;
                opacity: 1
            }
        }
    }
</style>

<body>
    <?php
    $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
    ?>
    <div class="popup">
        <img src="img/eid.svg" class="eid">
        <input type="text" class="form-control" placeholder="Tulis nama kamu ...">
        <div class="help-text">Tulis nama, kemudian tekan enter di keyboard kamu</div>
        <!-- <img src="img/kopiu.svg" class="brand"> -->
    </div>

    <div class="main-container">
        <img src="img/pattern.png" class="bg">
        <div class="logos">
            <img src="img/img-1.png">
        </div>
        <div class="content">
            <div class="name">Hai, <span><?php echo $_GET['to'] ?></span></div>
            <div class="txt1">SELAMAT HARI RAYA</div>
            <div class="txt2">Idul Fitri</div>
            <div class="greeting">
                Minal Aidin Wal Faidzin,<br>
                Mohon Maaf Lahir dan Batin.<br><br><br>
                <span>with Love</span> <br>
                <?php echo $_GET['from'] ?><br>
            </div>
            <!-- <div class="logo-btm">
                <img src="img/kopiu.png">
            </div> -->
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function(event) {

            $("input[type='text']").change(function() {
                $('.popup').addClass('hide');
                $('.main-container').addClass('fadeIn');
                $('.main-container .header').addClass('fadeIn2');
                $('.logos').addClass('slideIn');
                var str = "";
                str = $(this).val() + " ";
                $(".name span").text(str);


                // array with texts to type in typewriter
                var dataText = [str];

                // type one text in the typwriter
                // keeps calling itself until the text is finished
                function typeWriter(text, i, fnCallback) {
                    // chekc if text isn't finished yet
                    if (i < (text.length)) {
                        // add next character to h1
                        document.querySelector(".name span").innerHTML = text.substring(0, i + 1) +
                            '<span aria-hidden="true"></span>';

                        // wait for a while and call this function again for next character
                        setTimeout(function() {
                            typeWriter(text, i + 1, fnCallback)
                        }, 100);
                    }
                    // text finished, call callback if there is a callback function
                    else if (typeof fnCallback == 'function') {
                        // call callback after timeout
                        setTimeout(fnCallback, 700);
                    }
                }
                // start a typewriter animation for a text in the dataText array
                function StartTextAnimation(i) {
                    if (typeof dataText[i] == 'undefined') {
                        setTimeout(function() {
                            StartTextAnimation(0);
                        }, 4000);
                    }
                    // check if dataText[i] exists
                    if (i < 1) {
                        // text exists! start typewriter animation
                        typeWriter(dataText[i], 0, function() {
                            // after callback (and whole text has been animated), start next text
                            StartTextAnimation(i + 1);
                        });
                    }
                }
                // start the text animation
                StartTextAnimation(0);
            });
        });
    </script>
</body>

</html>