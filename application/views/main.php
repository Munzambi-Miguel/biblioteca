<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="origin" name="referrer">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Biblioteca</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('public/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url('public/vendor/metisMenu/metisMenu.min.css') ?>" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="<?php echo base_url("public/vendor/datatables-plugins/dataTables.bootstrap.css") ?>" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?php echo base_url('public/vendor/datatables-responsive/dataTables.responsive.css') ?>"
          rel="stylesheet">

    <link rel="icon" href="<?php echo base_url('public/') ?>/academy-icon-13.jpg" type="image/x-icon">
    <!-- Custom CSS -->
    <link href="<?php echo base_url('public/dist/css/sb-admin-2.css') ?>" rel="stylesheet">

    <link href="<?php echo base_url('public/vendor/morrisjs/morris.css') ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url('public/vendor/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet"
          type="text/css">
    <link href="<?php echo base_url('public/dist/css/style_main.css') ?>" rel="stylesheet">

    <!-- Data Piker style -->
    <!--link rel="stylesheet" href="" -->
    <link rel="stylesheet"
          href="<?php echo base_url('public/vendor/bootstrap-datetimepicker/css/bootstrap-datepicker.min.css') ?>">

    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo base_url('public/vendor/select2/dist/css/select2.min.css') ?>">

    <link rel="stylesheet" href="<?php echo base_url('public/dist/css/swiper.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('public/dist/css/croppie.css') ?>">

    <link rel="stylesheet" href="<?php echo base_url('public/print/css/buttons.dataTables.min.css') ?>">


</head>


<body style="zoom: 95%; background-color: #e8e8e8 ">


<style>

    .cssload-thecube {
        width: 73px;
        height: 73px;
        margin: 0 auto;
        margin-top: 49px;
        position: relative;
        transform: rotateZ(45deg);
        -o-transform: rotateZ(45deg);
        -ms-transform: rotateZ(45deg);
        -webkit-transform: rotateZ(45deg);
        -moz-transform: rotateZ(45deg);
    }

    .cssload-thecube .cssload-cube {
        position: relative;
        transform: rotateZ(45deg);
        -o-transform: rotateZ(45deg);
        -ms-transform: rotateZ(45deg);
        -webkit-transform: rotateZ(45deg);
        -moz-transform: rotateZ(45deg);
    }

    .cssload-thecube .cssload-cube {
        float: left;
        width: 50%;
        height: 50%;
        position: relative;
        transform: scale(1.1);
        -o-transform: scale(1.1);
        -ms-transform: scale(1.1);
        -webkit-transform: scale(1.1);
        -moz-transform: scale(1.1);
    }

    .cssload-thecube .cssload-cube:before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgb(43, 160, 199);
        animation: cssload-fold-thecube 2.76s infinite linear both;
        -o-animation: cssload-fold-thecube 2.76s infinite linear both;
        -ms-animation: cssload-fold-thecube 2.76s infinite linear both;
        -webkit-animation: cssload-fold-thecube 2.76s infinite linear both;
        -moz-animation: cssload-fold-thecube 2.76s infinite linear both;
        transform-origin: 100% 100%;
        -o-transform-origin: 100% 100%;
        -ms-transform-origin: 100% 100%;
        -webkit-transform-origin: 100% 100%;
        -moz-transform-origin: 100% 100%;
    }

    .cssload-thecube .cssload-c2 {
        transform: scale(1.1) rotateZ(90deg);
        -o-transform: scale(1.1) rotateZ(90deg);
        -ms-transform: scale(1.1) rotateZ(90deg);
        -webkit-transform: scale(1.1) rotateZ(90deg);
        -moz-transform: scale(1.1) rotateZ(90deg);
    }

    .cssload-thecube .cssload-c3 {
        transform: scale(1.1) rotateZ(180deg);
        -o-transform: scale(1.1) rotateZ(180deg);
        -ms-transform: scale(1.1) rotateZ(180deg);
        -webkit-transform: scale(1.1) rotateZ(180deg);
        -moz-transform: scale(1.1) rotateZ(180deg);
    }

    .cssload-thecube .cssload-c4 {
        transform: scale(1.1) rotateZ(270deg);
        -o-transform: scale(1.1) rotateZ(270deg);
        -ms-transform: scale(1.1) rotateZ(270deg);
        -webkit-transform: scale(1.1) rotateZ(270deg);
        -moz-transform: scale(1.1) rotateZ(270deg);
    }

    .cssload-thecube .cssload-c2:before {
        animation-delay: 0.35s;
        -o-animation-delay: 0.35s;
        -ms-animation-delay: 0.35s;
        -webkit-animation-delay: 0.35s;
        -moz-animation-delay: 0.35s;
    }

    .cssload-thecube .cssload-c3:before {
        animation-delay: 0.69s;
        -o-animation-delay: 0.69s;
        -ms-animation-delay: 0.69s;
        -webkit-animation-delay: 0.69s;
        -moz-animation-delay: 0.69s;
    }

    .cssload-thecube .cssload-c4:before {
        animation-delay: 1.04s;
        -o-animation-delay: 1.04s;
        -ms-animation-delay: 1.04s;
        -webkit-animation-delay: 1.04s;
        -moz-animation-delay: 1.04s;
    }

    .windows8 {
        position: relative;
        width: 78px;
        height: 78px;
        margin: auto;
    }

    .windows8 .wBall {
        position: absolute;
        width: 74px;
        height: 74px;
        opacity: 0;
        transform: rotate(225deg);
        -o-transform: rotate(225deg);
        -ms-transform: rotate(225deg);
        -webkit-transform: rotate(225deg);
        -moz-transform: rotate(225deg);
        animation: orbit 2.1125s infinite;
        -o-animation: orbit 2.1125s infinite;
        -ms-animation: orbit 2.1125s infinite;
        -webkit-animation: orbit 2.1125s infinite;
        -moz-animation: orbit 2.1125s infinite;
    }

    .windows8 .wBall .wInnerBall {
        position: absolute;
        width: 10px;
        height: 10px;
        background: rgb(58, 72, 128);
        left: 0px;
        top: 0px;
        border-radius: 10px;
    }

    .windows8 #wBall_1 {
        animation-delay: 0.466s;
        -o-animation-delay: 0.466s;
        -ms-animation-delay: 0.466s;
        -webkit-animation-delay: 0.466s;
        -moz-animation-delay: 0.466s;
    }

    .windows8 #wBall_2 {
        animation-delay: 0.093s;
        -o-animation-delay: 0.093s;
        -ms-animation-delay: 0.093s;
        -webkit-animation-delay: 0.093s;
        -moz-animation-delay: 0.093s;
    }

    .windows8 #wBall_3 {
        animation-delay: 0.1865s;
        -o-animation-delay: 0.1865s;
        -ms-animation-delay: 0.1865s;
        -webkit-animation-delay: 0.1865s;
        -moz-animation-delay: 0.1865s;
    }

    .windows8 #wBall_4 {
        animation-delay: 0.2795s;
        -o-animation-delay: 0.2795s;
        -ms-animation-delay: 0.2795s;
        -webkit-animation-delay: 0.2795s;
        -moz-animation-delay: 0.2795s;
    }

    .windows8 #wBall_5 {
        animation-delay: 0.373s;
        -o-animation-delay: 0.373s;
        -ms-animation-delay: 0.373s;
        -webkit-animation-delay: 0.373s;
        -moz-animation-delay: 0.373s;
    }

    @keyframes orbit {
        0% {
            opacity: 1;
            z-index: 99;
            transform: rotate(180deg);
            animation-timing-function: ease-out;
        }

        7% {
            opacity: 1;
            transform: rotate(300deg);
            animation-timing-function: linear;
            origin: 0%;
        }

        30% {
            opacity: 1;
            transform: rotate(410deg);
            animation-timing-function: ease-in-out;
            origin: 7%;
        }

        39% {
            opacity: 1;
            transform: rotate(645deg);
            animation-timing-function: linear;
            origin: 30%;
        }

        70% {
            opacity: 1;
            transform: rotate(770deg);
            animation-timing-function: ease-out;
            origin: 39%;
        }

        75% {
            opacity: 1;
            transform: rotate(900deg);
            animation-timing-function: ease-out;
            origin: 70%;
        }

        76% {
            opacity: 0;
            transform: rotate(900deg);
        }

        100% {
            opacity: 0;
            transform: rotate(900deg);
        }
    }

    @-o-keyframes orbit {
        0% {
            opacity: 1;
            z-index: 99;
            -o-transform: rotate(180deg);
            -o-animation-timing-function: ease-out;
        }

        7% {
            opacity: 1;
            -o-transform: rotate(300deg);
            -o-animation-timing-function: linear;
            -o-origin: 0%;
        }

        30% {
            opacity: 1;
            -o-transform: rotate(410deg);
            -o-animation-timing-function: ease-in-out;
            -o-origin: 7%;
        }

        39% {
            opacity: 1;
            -o-transform: rotate(645deg);
            -o-animation-timing-function: linear;
            -o-origin: 30%;
        }

        70% {
            opacity: 1;
            -o-transform: rotate(770deg);
            -o-animation-timing-function: ease-out;
            -o-origin: 39%;
        }

        75% {
            opacity: 1;
            -o-transform: rotate(900deg);
            -o-animation-timing-function: ease-out;
            -o-origin: 70%;
        }

        76% {
            opacity: 0;
            -o-transform: rotate(900deg);
        }

        100% {
            opacity: 0;
            -o-transform: rotate(900deg);
        }
    }

    @-ms-keyframes orbit {
        0% {
            opacity: 1;
            z-index: 99;
            -ms-transform: rotate(180deg);
            -ms-animation-timing-function: ease-out;
        }

        7% {
            opacity: 1;
            -ms-transform: rotate(300deg);
            -ms-animation-timing-function: linear;
            -ms-origin: 0%;
        }

        30% {
            opacity: 1;
            -ms-transform: rotate(410deg);
            -ms-animation-timing-function: ease-in-out;
            -ms-origin: 7%;
        }

        39% {
            opacity: 1;
            -ms-transform: rotate(645deg);
            -ms-animation-timing-function: linear;
            -ms-origin: 30%;
        }

        70% {
            opacity: 1;
            -ms-transform: rotate(770deg);
            -ms-animation-timing-function: ease-out;
            -ms-origin: 39%;
        }

        75% {
            opacity: 1;
            -ms-transform: rotate(900deg);
            -ms-animation-timing-function: ease-out;
            -ms-origin: 70%;
        }

        76% {
            opacity: 0;
            -ms-transform: rotate(900deg);
        }

        100% {
            opacity: 0;
            -ms-transform: rotate(900deg);
        }
    }

    @-webkit-keyframes orbit {
        0% {
            opacity: 1;
            z-index: 99;
            -webkit-transform: rotate(180deg);
            -webkit-animation-timing-function: ease-out;
        }

        7% {
            opacity: 1;
            -webkit-transform: rotate(300deg);
            -webkit-animation-timing-function: linear;
            -webkit-origin: 0%;
        }

        30% {
            opacity: 1;
            -webkit-transform: rotate(410deg);
            -webkit-animation-timing-function: ease-in-out;
            -webkit-origin: 7%;
        }

        39% {
            opacity: 1;
            -webkit-transform: rotate(645deg);
            -webkit-animation-timing-function: linear;
            -webkit-origin: 30%;
        }

        70% {
            opacity: 1;
            -webkit-transform: rotate(770deg);
            -webkit-animation-timing-function: ease-out;
            -webkit-origin: 39%;
        }

        75% {
            opacity: 1;
            -webkit-transform: rotate(900deg);
            -webkit-animation-timing-function: ease-out;
            -webkit-origin: 70%;
        }

        76% {
            opacity: 0;
            -webkit-transform: rotate(900deg);
        }

        100% {
            opacity: 0;
            -webkit-transform: rotate(900deg);
        }
    }

    @-moz-keyframes orbit {
        0% {
            opacity: 1;
            z-index: 99;
            -moz-transform: rotate(180deg);
            -moz-animation-timing-function: ease-out;
        }

        7% {
            opacity: 1;
            -moz-transform: rotate(300deg);
            -moz-animation-timing-function: linear;
            -moz-origin: 0%;
        }

        30% {
            opacity: 1;
            -moz-transform: rotate(410deg);
            -moz-animation-timing-function: ease-in-out;
            -moz-origin: 7%;
        }

        39% {
            opacity: 1;
            -moz-transform: rotate(645deg);
            -moz-animation-timing-function: linear;
            -moz-origin: 30%;
        }

        70% {
            opacity: 1;
            -moz-transform: rotate(770deg);
            -moz-animation-timing-function: ease-out;
            -moz-origin: 39%;
        }

        75% {
            opacity: 1;
            -moz-transform: rotate(900deg);
            -moz-animation-timing-function: ease-out;
            -moz-origin: 70%;
        }

        76% {
            opacity: 0;
            -moz-transform: rotate(900deg);
        }

        100% {
            opacity: 0;
            -moz-transform: rotate(900deg);
        }
    }


</style>


<div class="page-wrapper" id="loading" style="display: block; position: fixed; z-index: 2000;
    background: transparent; width: 100%; height: 100%; top: 50px;">
    <div class="text-center" style="margin-top: 20%; background: transparent"><b style="margin: 0 auto"><br></b>
    </div>
    <div class="windows8">

        <div class="wBall" id="wBall_1">
            <div class="wInnerBall"></div>
        </div>
        <div class="wBall" id="wBall_2">
            <div class="wInnerBall"></div>
        </div>

        <div class="wBall" id="wBall_3">
            <div class="wInnerBall"></div>
        </div>
        <div class="wBall" id="wBall_4">
            <div class="wInnerBall"></div>
        </div>
        <div class="wBall" id="wBall_5">
            <div class="wInnerBall"></div>
        </div>
        <br>
        <br>
        <b style="margin-left: 10px">Aguarde</b>
    </div>
</div>


<script>

    var i;
    i = setInterval(function () {
        clearInterval(i);
        // O código desejado é apenas isto:
        document.getElementById("loading").style.display = "none";

        jQuery("#loader").delay(2000).fadeOut("slow");

    }, 2000);


</script>


<div id="wrapper" style=" background-color: #fff">

    <!-- Navigation
    	navbar navbar-light light-blue lighten-4
    -->


    <nav class="navbar navbar-default navbar-static-top navbar-dark bg-dark " role="navigation"
         style="margin-bottom: 0; background: #fff;">
        <div class="navbar-header">

            <button type="button" class="navbar-toggle  p-0 border-0" data-toggle="collapse"
                    data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">BIBLIOTECA 2</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">

            <!-- /.dropdown -->
            <li class="dropdown" style="background: #f6f6f6">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                   <span style="background: #286090; padding: 10px; margin-right:10px; border-radius: 5px ">
                       <i style="color: #ffffff" class="fa fa-user fa-fw"></i>
                   </span> <?php echo $user_name_session ?> <i class="fa fa-caret-down"> </i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="<?php echo base_url('perfil_controller/perfil') ?>"><i class="fa fa-user fa-fw"></i>
                            User Profile</a>
                    </li>

                    <li class="divider"></li>
                    <li>
                        <a href="<?php echo base_url('login_controller/logout') ?>">
                            <i class="fa fa-sign-out fa-fw"></i> Logout
                        </a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" id="loading-slider"
             style="background-color: #fff; position: fixed; height: 100%" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <select class="form-control" id="country" required disabled>
                                <option value="" selected disabled>Choose...</option>
                                <option value="AF">Afghanistan</option>
                                <option value="AX">&Aring;land Islands</option>
                                <option value="AL">Albania</option>
                                <option value="DZ">Algeria</option>
                                <option value="AS">American Samoa</option>
                                <option value="AD">Andorra</option>
                                <option value="AO">Angola</option>
                                <option value="AI">Anguilla</option>
                                <option value="AQ">Antarctica</option>
                                <option value="AG">Antigua &amp; Barbuda</option>
                                <option value="AR">Argentina</option>
                                <option value="AM">Armenia</option>
                                <option value="AW">Aruba</option>
                                <option value="AC">Ascension Island</option>
                                <option value="AU">Australia</option>
                                <option value="AT">Austria</option>
                                <option value="AZ">Azerbaijan</option>
                                <option value="BS">Bahamas</option>
                                <option value="BH">Bahrain</option>
                                <option value="BD">Bangladesh</option>
                                <option value="BB">Barbados</option>
                                <option value="BY">Belarus</option>
                                <option value="BE">Belgium</option>
                                <option value="BZ">Belize</option>
                                <option value="BJ">Benin</option>
                                <option value="BM">Bermuda</option>
                                <option value="BT">Bhutan</option>
                                <option value="BO">Bolivia</option>
                                <option value="BA">Bosnia &amp; Herzegovina</option>
                                <option value="BW">Botswana</option>
                                <option value="BR">Brazil</option>
                                <option value="IO">British Indian Ocean Territory</option>
                                <option value="VG">British Virgin Islands</option>
                                <option value="BN">Brunei</option>
                                <option value="BG">Bulgaria</option>
                                <option value="BF">Burkina Faso</option>
                                <option value="BI">Burundi</option>
                                <option value="KH">Cambodia</option>
                                <option value="CM">Cameroon</option>
                                <option value="CA">Canada</option>
                                <option value="IC">Canary Islands</option>
                                <option value="CV">Cape Verde</option>
                                <option value="BQ">Caribbean Netherlands</option>
                                <option value="KY">Cayman Islands</option>
                                <option value="CF">Central African Republic</option>
                                <option value="EA">Ceuta &amp; Melilla</option>
                                <option value="TD">Chad</option>
                                <option value="CL">Chile</option>
                                <option value="CN">China</option>
                                <option value="CX">Christmas Island</option>
                                <option value="CC">Cocos (Keeling) Islands</option>
                                <option value="CO">Colombia</option>
                                <option value="KM">Comoros</option>
                                <option value="CG">Congo - Brazzaville</option>
                                <option value="CD">Congo - Kinshasa</option>
                                <option value="CK">Cook Islands</option>
                                <option value="CR">Costa Rica</option>
                                <option value="CI">C&ocirc;te d&rsquo;Ivoire</option>
                                <option value="HR">Croatia</option>
                                <option value="CU">Cuba</option>
                                <option value="CW">Cura&ccedil;ao</option>
                                <option value="CY">Cyprus</option>
                                <option value="CZ">Czech Republic</option>
                                <option value="DK">Denmark</option>
                                <option value="DG">Diego Garcia</option>
                                <option value="DJ">Djibouti</option>
                                <option value="DM">Dominica</option>
                                <option value="DO">Dominican Republic</option>
                                <option value="EC">Ecuador</option>
                                <option value="EG">Egypt</option>
                                <option value="SV">El Salvador</option>
                                <option value="GQ">Equatorial Guinea</option>
                                <option value="ER">Eritrea</option>
                                <option value="EE">Estonia</option>
                                <option value="ET">Ethiopia</option>
                                <option value="FK">Falkland Islands</option>
                                <option value="FO">Faroe Islands</option>
                                <option value="FJ">Fiji</option>
                                <option value="FI">Finland</option>
                                <option value="FR">France</option>
                                <option value="GF">French Guiana</option>
                                <option value="PF">French Polynesia</option>
                                <option value="TF">French Southern Territories</option>
                                <option value="GA">Gabon</option>
                                <option value="GM">Gambia</option>
                                <option value="GE">Georgia</option>
                                <option value="DE">Germany</option>
                                <option value="GH">Ghana</option>
                                <option value="GI">Gibraltar</option>
                                <option value="GR">Greece</option>
                                <option value="GL">Greenland</option>
                                <option value="GD">Grenada</option>
                                <option value="GP">Guadeloupe</option>
                                <option value="GU">Guam</option>
                                <option value="GT">Guatemala</option>
                                <option value="GG">Guernsey</option>
                                <option value="GN">Guinea</option>
                                <option value="GW">Guinea-Bissau</option>
                                <option value="GY">Guyana</option>
                                <option value="HT">Haiti</option>
                                <option value="HN">Honduras</option>
                                <option value="HK">Hong Kong SAR China</option>
                                <option value="HU">Hungary</option>
                                <option value="IS">Iceland</option>
                                <option value="IN">India</option>
                                <option value="ID">Indonesia</option>
                                <option value="IR">Iran</option>
                                <option value="IQ">Iraq</option>
                                <option value="IE">Ireland</option>
                                <option value="IM">Isle of Man</option>
                                <option value="IL">Israel</option>
                                <option value="IT">Italy</option>
                                <option value="JM">Jamaica</option>
                                <option value="JP">Japan</option>
                                <option value="JE">Jersey</option>
                                <option value="JO">Jordan</option>
                                <option value="KZ">Kazakhstan</option>
                                <option value="KE">Kenya</option>
                                <option value="KI">Kiribati</option>
                                <option value="XK">Kosovo</option>
                                <option value="KW">Kuwait</option>
                                <option value="KG">Kyrgyzstan</option>
                                <option value="LA">Laos</option>
                                <option value="LV">Latvia</option>
                                <option value="LB">Lebanon</option>
                                <option value="LS">Lesotho</option>
                                <option value="LR">Liberia</option>
                                <option value="LY">Libya</option>
                                <option value="LI">Liechtenstein</option>
                                <option value="LT">Lithuania</option>
                                <option value="LU">Luxembourg</option>
                                <option value="MO">Macau SAR China</option>
                                <option value="MK">Macedonia</option>
                                <option value="MG">Madagascar</option>
                                <option value="MW">Malawi</option>
                                <option value="MY">Malaysia</option>
                                <option value="MV">Maldives</option>
                                <option value="ML">Mali</option>
                                <option value="MT">Malta</option>
                                <option value="MH">Marshall Islands</option>
                                <option value="MQ">Martinique</option>
                                <option value="MR">Mauritania</option>
                                <option value="MU">Mauritius</option>
                                <option value="YT">Mayotte</option>
                                <option value="MX">Mexico</option>
                                <option value="FM">Micronesia</option>
                                <option value="MD">Moldova</option>
                                <option value="MC">Monaco</option>
                                <option value="MN">Mongolia</option>
                                <option value="ME">Montenegro</option>
                                <option value="MS">Montserrat</option>
                                <option value="MA">Morocco</option>
                                <option value="MZ">Mozambique</option>
                                <option value="MM">Myanmar (Burma)</option>
                                <option value="NA">Namibia</option>
                                <option value="NR">Nauru</option>
                                <option value="NP">Nepal</option>
                                <option value="NL">Netherlands</option>
                                <option value="NC">New Caledonia</option>
                                <option value="NZ">New Zealand</option>
                                <option value="NI">Nicaragua</option>
                                <option value="NE">Niger</option>
                                <option value="NG">Nigeria</option>
                                <option value="NU">Niue</option>
                                <option value="NF">Norfolk Island</option>
                                <option value="KP">North Korea</option>
                                <option value="MP">Northern Mariana Islands</option>
                                <option value="NO">Norway</option>
                                <option value="OM">Oman</option>
                                <option value="PK">Pakistan</option>
                                <option value="PW">Palau</option>
                                <option value="PS">Palestinian Territories</option>
                                <option value="PA">Panama</option>
                                <option value="PG">Papua New Guinea</option>
                                <option value="PY">Paraguay</option>
                                <option value="PE">Peru</option>
                                <option value="PH">Philippines</option>
                                <option value="PN">Pitcairn Islands</option>
                                <option value="PL">Poland</option>
                                <option value="PT">Portugal</option>
                                <option value="PR">Puerto Rico</option>
                                <option value="QA">Qatar</option>
                                <option value="RE">R&eacute;union</option>
                                <option value="RO">Romania</option>
                                <option value="RU">Russia</option>
                                <option value="RW">Rwanda</option>
                                <option value="WS">Samoa</option>
                                <option value="SM">San Marino</option>
                                <option value="ST">S&atilde;o Tom&eacute; &amp; Pr&iacute;ncipe</option>
                                <option value="SA">Saudi Arabia</option>
                                <option value="SN">Senegal</option>
                                <option value="RS">Serbia</option>
                                <option value="SC">Seychelles</option>
                                <option value="SL">Sierra Leone</option>
                                <option value="SG">Singapore</option>
                                <option value="SX">Sint Maarten</option>
                                <option value="SK">Slovakia</option>
                                <option value="SI">Slovenia</option>
                                <option value="SB">Solomon Islands</option>
                                <option value="SO">Somalia</option>
                                <option value="ZA">South Africa</option>
                                <option value="GS">South Georgia &amp; South Sandwich Islands</option>
                                <option value="KR">South Korea</option>
                                <option value="SS">South Sudan</option>
                                <option value="ES">Spain</option>
                                <option value="LK">Sri Lanka</option>
                                <option value="BL">St. Barth&eacute;lemy</option>
                                <option value="SH">St. Helena</option>
                                <option value="KN">St. Kitts &amp; Nevis</option>
                                <option value="LC">St. Lucia</option>
                                <option value="MF">St. Martin</option>
                                <option value="PM">St. Pierre &amp; Miquelon</option>
                                <option value="VC">St. Vincent &amp; Grenadines</option>
                                <option value="SD">Sudan</option>
                                <option value="SR">Suriname</option>
                                <option value="SJ">Svalbard &amp; Jan Mayen</option>
                                <option value="SZ">Swaziland</option>
                                <option value="SE">Sweden</option>
                                <option value="CH">Switzerland</option>
                                <option value="SY">Syria</option>
                                <option value="TW">Taiwan</option>
                                <option value="TJ">Tajikistan</option>
                                <option value="TZ">Tanzania</option>
                                <option value="TH">Thailand</option>
                                <option value="TL">Timor-Leste</option>
                                <option value="TG">Togo</option>
                                <option value="TK">Tokelau</option>
                                <option value="TO">Tonga</option>
                                <option value="TT">Trinidad &amp; Tobago</option>
                                <option value="TA">Tristan da Cunha</option>
                                <option value="TN">Tunisia</option>
                                <option value="TR">Turkey</option>
                                <option value="TM">Turkmenistan</option>
                                <option value="TC">Turks &amp; Caicos Islands</option>
                                <option value="TV">Tuvalu</option>
                                <option value="UM">U.S. Outlying Islands</option>
                                <option value="VI">U.S. Virgin Islands</option>
                                <option value="UG">Uganda</option>
                                <option value="UA">Ukraine</option>
                                <option value="AE">United Arab Emirates</option>
                                <option value="GB">United Kingdom</option>
                                <option value="US">United States</option>
                                <option value="UY">Uruguay</option>
                                <option value="UZ">Uzbekistan</option>
                                <option value="VU">Vanuatu</option>
                                <option value="VA">Vatican City</option>
                                <option value="VE">Venezuela</option>
                                <option value="VN">Vietnam</option>
                                <option value="WF">Wallis &amp; Futuna</option>
                                <option value="EH">Western Sahara</option>
                                <option value="YE">Yemen</option>
                                <option value="ZM">Zambia</option>
                                <option value="ZW">Zimbabwe</option>
                            </select>
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li>
                        <a href="<?php echo base_url('index_controller/index') ?>">
                            <i class="fa fa-home fa-fw"></i> Início
                        </a>
                    </li>
                    <?php if ($this->session->userdata('tipo') != 0) { ?>
                        <li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i> Registro<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">

                                <?php if ($this->session->userdata('tipo') == 2) { ?>
                                    <li>
                                        <a href="<?php echo base_url('aluno_controller/aluno') ?>">Clientes</a>
                                    </li>

                                    <li>
                                        <a href="<?php echo base_url('livro_controller/livro') ?>">Livro</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('usuario_controller/usuario') ?>">Usuário</a>
                                    </li>
                                <?php } ?>
                                <li>
                                    <a href="<?php echo base_url('categorias_controller/categorias') ?>">Categorias</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i> Movimento<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url('movimento_controller/saida') ?>">Saida livros</a>
                                </li>
                                <?php if ($this->session->userdata('tipo') == 2) { ?>
                                    <li>
                                        <a href="<?php echo base_url('movimento_controller/entrada') ?>">Entrada
                                            livros</a>
                                    </li>
                                <?php } ?>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-info fa-fw"></i> Informação<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">

                                <li>
                                    <a href="<?php echo base_url('perfil_controller/perfil') ?>">Perfil</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('licenca_controller/licenca') ?>">Termos de Licença</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><span style="color: red"><i class="fa fa-trash fa-fw"></i></span> Movimento
                                <span
                                        style="color: #cca2a2">Critico</span><span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url('SaidasPrazo_controller/SaidasP') ?>">Fora do Prazo</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-print fa-fw"></i> Relatorio<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url('Saidas_controller/Saidas') ?>">Emprestimo</a>
                                </li>
                                <?php if ($this->session->userdata('tipo') == 2) { ?>
                                    <li>
                                        <a href="<?php echo base_url('Entradas_controller/Entradas') ?>">Entrada</a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </li>
                    <?php } ?>

                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>


</div>
<!-- /#wrapper -->


<script src="<?php echo base_url('public/vendor/jquery/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('public/vendor/bootstrap/js/bootstrap.min.js') ?>">"></script>
<script src="<?php echo base_url('public/vendor/metisMenu/metisMenu.min.js') ?>"></script>
<script src="<?php echo base_url('public/vendor/datatables/js/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo base_url('public/vendor/datatables-plugins/dataTables.bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('public/vendor/datatables-responsive/dataTables.responsive.js') ?>"></script>


<script src="<?php echo base_url('public/input-mask/jquery.inputmask.js') ?>"></script>
<script src="<?php echo base_url('public/input-mask/jquery.inputmask.date.extensions.js') ?>"></script>
<script src="<?php echo base_url('public/input-mask/jquery.inputmask.extensions.js') ?>"></script>

<script src="<?php echo base_url('public/input-mask/inputmask.min.js') ?>"></script>
<script src="<?php echo base_url('public/input-mask/autoNumeric.js') ?>"></script>
<script src="<?php echo base_url('public/vendor/bootstrap-datetimepicker/js/bootstrap-datepicker.min.js') ?>"></script>

<script src="<?php echo base_url('public/dist/js/jquery.slicknav.min.js') ?>"></script>
<script src="<?php echo base_url('public/dist/js/swiper.min.js') ?>"></script>
<!-- Select2 -->
<script src="<?php echo base_url('public/vendor/select2/dist/js/select2.full.min.js') ?>"></script>

<script src="<?php echo base_url('public/dist/js/sb-admin-2.js') ?>"></script>


<script src="<?php echo base_url('public/print/js/dataTables.buttons.min.js') ?>"></script>
<script src="<?php echo base_url('public/print/js/buttons.print.min.js') ?>"></script>

<script src="<?php echo base_url('public/vendor/img-config/croppie.js') ?>"></script>

<script>


    /// Carrocel de informações da tabela
    jQuery(document).ready(function ($) {

        function getSlide() {
            var wW = $(window).width();
            if (wW < 601) {

                return 1;

            }

            return 3;

        }

        var mySwiper = $('.screen_carousel').swiper({
            mode: 'horizontal',
            loop: true,
            speed: 1000,
            autoplay: 1000,
            effect: 'coverflow',
            slidesPerView: getSlide(),
            grabCursor: true,
            pagination: '.screen-pagination',
            paginationClickable: true,
            nextButton: '.arrow-right',
            prevButton: '.arrow-left',
            keyboardControl: true,
            coverflow: {
                rotate: 0,
                stretch: 90,
                depth: 200,
                modifier: 1,
                slideShadows: true
            }


        });

    });


    $(function () {

        $('[data-mask]').inputmask();
        $('.autonumber').autoNumeric('init');
        $('.select2').select2()

    });

    /// -- Configuração da datapiker --
    $(document).ready(function () {
        $('#d_week').datepicker({
            daysOfWeekDisabled: "2"

        });

        $('#d_highlight').datepicker({
            daysOfWeekHighlighted: "1"
        });


        $('.dataPiquer').datepicker({
            autoclose: true,
            format: "yyyy-mm-dd",
        });
        $('#d_auto_doc').datepicker({
            autoclose: true,
            format: "yyyy-mm-dd",
        });

        $('#d_disable').datepicker({
            datesDisabled: ['15/10/2018', '15/10/2018', '15/10/2018', '15/10/2018']
        });

        $('#d_toggle').datepicker({
            keyboardNavigation: false,
            forceParse: false,
            toggleActive: true
        });

        $('#d_today').datepicker({
            keyboardNavigation: false,
            forceParse: false,
            todayHighlight: true
        });

        $('#disp_week').datepicker({
            calendarWeeks: true
        });

        $('#datepicker_range').datepicker({});
    });


    // Outras tabelas
    $(document).ready(function () {
        $('#dataAluno').DataTable({
            responsive: true,
            'paging': true,
            'info': false,
            "aLengthMenu": [[15, 25, 50, -1], [15, 25, 50, "All"]],
            "iDisplayLength": 15,
            'ordering': false,
            "language": {
                "sProcessing": "Procesando...",
                "sLengthMenu": "_MENU_",
                "sZeroRecords": "No se encontraron resultados",
                "sEmptyTable": "A tabela está vazia, nem um cadastro encontrado",
                "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix": "",
                "sSearch": "Buscar:",
                "sUrl": "",
                "sInfoThousands": ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst": "<i class='fa fa-chevron-right'></i><i class='fa fa-chevron-right'></i>",
                    "sLast": "<i class='fa fa-chevron-left'></i><i class='fa fa-chevron-left'></i>",
                    "sNext": "<i class='fa fa-chevron-right'></i>",
                    "sPrevious": "<i class='fa fa-chevron-left'></i>"
                },
                "oAria": {
                    "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }
            }
        });
    });
    $(document).ready(function () {

        $('#dataLivros').DataTable({
            responsive: true,
            "aLengthMenu": [[15, 25, 50, -1], [15, 25, 50, "All"]],
            "iDisplayLength": 15,
            "processing": true,
            'paging': true,
            'info': false,
            'ordering': false,
            "language": {
                "sProcessing": "Procesando...",
                "sLengthMenu": "_MENU_",
                "sZeroRecords": "No se encontraron resultados",
                "sEmptyTable": "A tabela está vazia, nem um cadastro encontrado",
                "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix": "",
                "sSearch": "Buscar:",
                "sUrl": "",
                "sInfoThousands": ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst": "<i class='fa fa-chevron-right'></i><i class='fa fa-chevron-right'></i>",
                    "sLast": "<i class='fa fa-chevron-left'></i><i class='fa fa-chevron-left'></i>",
                    "sNext": "<i class='fa fa-chevron-right'></i>",
                    "sPrevious": "<i class='fa fa-chevron-left'></i>"
                },
                "oAria": {
                    "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }
            }
        });

    });
    $(document).ready(function () {
        $('#dataUser').DataTable({
            responsive: true,
            'paging': true,
            'info': false,
            'ordering': false,
            "aLengthMenu": [[15, 25, 50, -1], [15, 25, 50, "All"]],
            "iDisplayLength": 15,
            "language": {
                "sProcessing": "Procesando...",
                "sLengthMenu": "_MENU_",
                "sZeroRecords": "No se encontraron resultados",
                "sEmptyTable": "A tabela está vazia, nem um cadastro encontrado",
                "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix": "",
                "sSearch": "Buscar:",
                "sUrl": "",
                "sInfoThousands": ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst": "<i class='fa fa-chevron-right'></i><i class='fa fa-chevron-right'></i>",
                    "sLast": "<i class='fa fa-chevron-left'></i><i class='fa fa-chevron-left'></i>",
                    "sNext": "<i class='fa fa-chevron-right'></i>",
                    "sPrevious": "<i class='fa fa-chevron-left'></i>"
                },
                "oAria": {
                    "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }
            }
        });
    });

    // tabela de item
    $(document).ready(function () {
        $('#data_modal').DataTable({
            responsive: true,
            'paging': true,
            "dom": '<lf<t>ip>',
            'info': false,
            "scrollX": true,
            'ordering': false,
            'searching': false,
            "aLengthMenu": [[15, 25, 50, -1], [15, 25, 50, "All"]],
            "iDisplayLength": 15,
            "language": {
                "sProcessing": "Procesando...",
                "sLengthMenu": "_MENU_",
                "sZeroRecords": "No se encontraron resultados",
                "sEmptyTable": "A tabela está vazia, nem um cadastro encontrado",
                "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix": "",
                "sSearch": "Buscar:",
                "sUrl": "",
                "sInfoThousands": ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst": "<i class='fa fa-chevron-right'></i><i class='fa fa-chevron-right'></i>",
                    "sLast": "<i class='fa fa-chevron-left'></i><i class='fa fa-chevron-left'></i>",
                    "sNext": "<i class='fa fa-chevron-right'></i>",
                    "sPrevious": "<i class='fa fa-chevron-left'></i>"
                },
                "oAria": {
                    "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }
            }
        });
    });


    // tabela de autores
    $(document).ready(function () {
        $('#autores').DataTable({
            responsive: true,
            'paging': true,
            "dom": '<lf<t>ip>',
            'info': false,
            'ordering': false,
            'searching': false,

            "language": {
                "sProcessing": "Procesando...",
                "sLengthMenu": "_MENU_",
                "sZeroRecords": "No se encontraron resultados",
                "sEmptyTable": "A tabela está vazia, nem um cadastro encontrado",
                "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix": "",
                "sSearch": "Buscar:",
                "sUrl": "",
                "sInfoThousands": ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst": "<i class='fa fa-chevron-right'></i><i class='fa fa-chevron-right'></i>",
                    "sLast": "<i class='fa fa-chevron-left'></i><i class='fa fa-chevron-left'></i>",
                    "sNext": "<i class='fa fa-chevron-right'></i>",
                    "sPrevious": "<i class='fa fa-chevron-left'></i>"
                },
                "oAria": {
                    "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }
            }
        });
    });

    // tabela de editora
    $(document).ready(function () {
        $('#editora').DataTable({
            responsive: true,
            'paging': true,
            "dom": '<lf<t>ip>',
            'info': false,
            'ordering': false,
            'searching': false,

            "language": {
                "sProcessing": "Procesando...",
                "sLengthMenu": "_MENU_",
                "sZeroRecords": "No se encontraron resultados",
                "sEmptyTable": "A tabela está vazia, nem um cadastro encontrado",
                "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix": "",
                "sSearch": "Buscar:",
                "sUrl": "",
                "sInfoThousands": ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst": "<i class='fa fa-chevron-right'></i><i class='fa fa-chevron-right'></i>",
                    "sLast": "<i class='fa fa-chevron-left'></i><i class='fa fa-chevron-left'></i>",
                    "sNext": "<i class='fa fa-chevron-right'></i>",
                    "sPrevious": "<i class='fa fa-chevron-left'></i>"
                },
                "oAria": {
                    "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }
            }
        });
    });

    // tabela de categorias
    $(document).ready(function () {
        $('#categorias').DataTable({
            responsive: true,
            'paging': true,
            "dom": '<lf<t>ip>',
            'info': false,
            'ordering': false,
            'searching': false,

            "language": {
                "sProcessing": "Procesando...",
                "sLengthMenu": "_MENU_",
                "sZeroRecords": "No se encontraron resultados",
                "sEmptyTable": "A tabela está vazia, nem um cadastro encontrado",
                "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix": "",
                "sSearch": "Buscar:",
                "sUrl": "",
                "sInfoThousands": ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst": "<i class='fa fa-chevron-right'></i><i class='fa fa-chevron-right'></i>",
                    "sLast": "<i class='fa fa-chevron-left'></i><i class='fa fa-chevron-left'></i>",
                    "sNext": "<i class='fa fa-chevron-right'></i>",
                    "sPrevious": "<i class='fa fa-chevron-left'></i>"
                },
                "oAria": {
                    "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }
            }
        });
    });

    // tabela de categorias
    $(document).ready(function () {
        $('#cidades').DataTable({
            responsive: true,
            'paging': true,
            "dom": '<lf<t>ip>',
            'info': false,
            'ordering': false,
            'searching': false,

            "language": {
                "sProcessing": "Procesando...",
                "sLengthMenu": "_MENU_",
                "sZeroRecords": "No se encontraron resultados",
                "sEmptyTable": "A tabela está vazia, nem um cadastro encontrado",
                "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix": "",
                "sSearch": "Buscar:",
                "sUrl": "",
                "sInfoThousands": ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst": "<i class='fa fa-chevron-right'></i><i class='fa fa-chevron-right'></i>",
                    "sLast": "<i class='fa fa-chevron-left'></i><i class='fa fa-chevron-left'></i>",
                    "sNext": "<i class='fa fa-chevron-right'></i>",
                    "sPrevious": "<i class='fa fa-chevron-left'></i>"
                },
                "oAria": {
                    "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }
            }
        });
    });


    /*
    *
    * 'paging'      : true,
            'lengthChange': false,
            'searching'   : false,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
    *
    * */
    /*
            $.ajax({
                url: "https://geoip-db.com/jsonp",
                jsonpCallback: "callback",
                dataType: "jsonp",
                success: function (location) {
                    $('#country').val(location.country_code).attr('selected', true);
                }
            });


            $(".dt-buttons").each(function () {
                $(this).addClass('btn btn-primary');
            });*/
</script>

</body>
