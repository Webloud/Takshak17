<?php



// To avoid typing again , when backend found any mistake in input data.
$nameofproject = "";
$college = "";

$member1name = "";
$member1school = "";
$member1age = "";

$member2name = "";
$member2school = "";
$member2age = "";

$member3name = "";
$member3school = "";
$member3age = "";

$member4name = "";
$member4school = "";
$member4age = "";

$member5name = "";
$member5school = "";
$member5age = "";

$member6name = "";
$member6school = "";
$member6age = "";

$cost = "";

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wearable Technology 2017 | Registeration</title>

    <!-- CSS -->

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="http://takshak.in/2017/public/assets/css/form-elements.css">
    <link rel="stylesheet" href="http://takshak.in/2017/public/assets/css/style.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="http://takshak.in/2017/public/assets/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://takshak.in/2017/public/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://takshak.in/2017/public/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://takshak.in/2017/public/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="http://takshak.in/2017/public/assets/ico/apple-touch-icon-57-precomposed.png">
    <style>
        body{
            background: black;
        }
        #overlay{
            position:fixed;
            z-index:99999;
            top:0;
            left:0;
            bottom:0;
            right:0;
            background:rgba(0,0,0,0.9);
            transition: 1s 0.4s;
        }
        #progress{
            height:1px;
            background:#fff;
            position:absolute;
            width:0;
            top:50%;
            transition: 1s;
        }
        #progstat{
            font-size:0.7em;
            letter-spacing: 3px;
            position:absolute;
            top:50%;
            margin-top:-40px;
            width:100%;
            text-align:center;
            color:#fff;
        }
        /* #AboutMACE{ */
        /* z-index:10; */
        /* position: absolute; */
        /* top: -10%; */
        /* -webkit-transition: 10s; */
        /* -moz-transition: 10s; */
        /* -o-transition: 10s; */
        /* transition: 10s; */
        /* margin-top: -100px; */
        /* margin-left: 120px; */
        /* height: 500px; */
        /* width: 100%; */
        /* } */
        #AboutMACE{
            height : 100vh;
        }
        .trigg1{
            max-width:25%;
        }
        .trigg2{
            max-width:45%;
        }
        .trigg3{
            max-width:30%;
        }
        .trigg4{
            max-width:25%;
        }
    </style>
    <script>
        var PAGE = "wearableTech.jpg";
        ;(function(){
            function id(v){ return document.getElementById(v); }
            function loadbar() {
                var ovrl = id("overlay"),
                    prog = id("progress"),
                    stat = id("progstat"),
                    img = document.images,
                    c = 0,
                    tot = img.length;
                if(tot == 0) return doneLoading();

                function imgLoaded(){
                    c += 1;
                    var perc = ((100/tot*c) << 0) +"%";
                    prog.style.width = perc;
                    stat.innerHTML = "Loading "+ perc;
                    if(c===tot) return doneLoading();
                }
                function doneLoading(){
                    ovrl.style.opacity = 0;
                    setTimeout(function(){
                        ovrl.style.display = "none";
                    }, 1200);
                }
                for(var i=0; i<tot; i++) {
                    var tImg     = new Image();
                    tImg.onload  = imgLoaded;
                    tImg.onerror = imgLoaded;
                    tImg.src     = img[i].src;
                }
            }
            document.addEventListener('DOMContentLoaded', loadbar, false);
        }());
    </script>
</head>

<body>


<div id="overlay">
    <div id="progstat"></div>
    <div id="progress"></div>
</div>
<div class="cloudbase" style="opacity: 0.6">
    <img class="cloudLayer bimg3 bimg31 lightning flashit" name="bimg3" style="opacity:1;transform:perspective(1000px) translateZ( 845px ) translateX(50px)" src="http://www.takshak.in/2017/public/images/cloud.png" />
    <img class="cloudLayer bimg3 lightning bimg4 flashit2" name="bimg4" style="opacity:1;transform: perspective(1000px) translateX(-350px) translateY(160px) translateZ( 500px )" src="http://www.takshak.in/2017/public/images/cloud.png"/>
</div>
<!-- Content -->
<div class="top-content">

    <div class="inner-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text">
                    <a href="#"><img style="height:150px;" src="http://takshak.in/2017/public/images/wearable.png"></a>
                    <h1><strong>Wearable Technology Workshop 2017</strong> Registration</h1>
                    <div class="description">
                        <p>
                            <b>Wearable Technology Workshop,</b> is a two day workshop which will give you the know how on wearable electronics, it's applications and product development considerations with a session on wearable body temperature monitor, women's safety applications and wearable pedometers. The workshop will be conducted by Neo Green Labs Pvt Ltd.
                        </p>
                    </div>
                    <div class="top-big-link">
                        <a class="btn launch-modal trigg1" href="#" data-modal-id="modal-register"><img src="http://takshak.in/2017/public/images/Register.png"/></a>
                        <a class="btn launch-modal trigg2" data-modal-id="aboutWT" href="#"><img src="http://takshak.in/2017/public/images/aboutwearabletrig.png"/></a>
                        <a class="btn launch-modal trigg3" data-modal-id="aboutTakshak" href="#"><img src="http://takshak.in/2017/public/images/aboutTriggers1.png"/></a>
                        <a class="btn launch-modal trigg4" data-modal-id="aboutMACE" href="#"><img src="http://takshak.in/2017/public/images/aboutTriggers2.png"/></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- MODAL -->
<div class="modal fade" id="modal-register" tabindex="-1" role="dialog" aria-labelledby="modal-register-label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                </button>
                <h3 class="modal-title" id="modal-register-label">Fill The Form</h3>
            </div>

            <div class="modal-body">

                <form role="form" action="http://takshak.in/2017/public/wearabletechnology/submit" method="post" class="registration-form" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="sr-only" for="form-name">Name*</label>
                        <input type="text" name="form-name" placeholder="Name*" class="form-project-name form-control" id="form-name" value="<?=$nameofproject?>">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="form-email">E-Mail*</label>
                        <input type="email" name="form-email" placeholder="E-Mail*" class="form-project-email form-control" id="form-email">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="form-contact">Contact Number*</label>
                        <input type="number" name="form-contact" placeholder="Contact Number*" class="form-project-number form-control" id="form-contact-number">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="form-college-name">College*</label>
                        <input type="text" name="form-college-name" placeholder="College*" class="form-college-name form-control" id="form-college-name">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="form-college-semester">Semester*</label>
                        <input type="text" name="form-college-semester" placeholder="Semester*" class="form-college-semester form-control" id="form-college-semester">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="form-as-team-or-not">Do you need accomodation*</label>
                        <span>Do you need an accomodation?..</span><br>
                        <label><input type="radio" name="form-accomodation" value="yes">Yes</label><br>
                        <label><input type="radio" name="form-accomodation" value="no">No</label>
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="form-as-team-or-not">Are you applying as*</label>
                        <span>Are you applying as..</span><br>
                        <label><input type="radio" name="form-as-team-or-not" onclick="addmembers()" value="as-team">As a Team</label><br>
                        <label><input type="radio" name="form-as-team-or-not" value="as-individual">As an individual</label>
                    </div>

                    <div class="form-member hidden-form-member">
                        <h5>Member 1</h5>
                        <input type="hidden" name="member1" value="1"/>
                        <div class="form-group">
                            <label class="sr-only" for="form-member-1-name">Name</label>
                            <input type="text" name="form-member-1-name" placeholder="Name" class="form-member-name form-control" id="form-member-1-name" value="<?=$member1name?>">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="form-member-1-email">E-Mail</label>
                            <input type="email" name="form-member-1-email" placeholder="E-Mail" class="form-member-name form-control" id="form-member-1-email" value="<?=$member1name?>">
                        </div>
                        <div class="col-sm-8" style="padding-left:0;">
                            <div class="form-group">
                                <label class="sr-only" for="form-member-1-school">School</label>
                                <input type="text" name="form-member-1-school" placeholder="Name Of College / School " class="form-member-school form-control" id="form-member-1-school" value="<?=$member1school?>">
                            </div>
                        </div>
                        <div class="col-sm-4"  style="padding-right:0;padding-left:0;">
                            <div class="form-group">
                                <label class="sr-only" for="form-member-1-age">Age</label>
                                <input type="text" name="form-member-1-age" placeholder="Age" class="form-member-age form-control" id="form-member-1-age" value="<?=$member1age?>">
                            </div>
                        </div>
                    </div>

                    <div class="form-member hidden-form-member">
                        <h5>Member 2</h5>
                        <input type="hidden" name="member2" value="0"/>
                        <div class="form-group">
                            <label class="sr-only" for="form-member-2-name">Name</label>
                            <input type="text" name="form-member-2-name" placeholder="Name" class="form-member-name form-control form-optional" id="form-member-2-name" value="<?=$member2name?>">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="form-member-2-email">Name</label>
                            <input type="email" name="form-member-2-email" placeholder="E-Mail" class="form-member-name form-control form-optional" id="form-member-2-email" value="<?=$member2name?>">
                        </div>
                        <div class="col-sm-8" style="padding-left:0;">
                            <div class="form-group">
                                <label class="sr-only" for="form-member-2-school">School</label>
                                <input type="text" name="form-member-2-school" placeholder="Name Of College / School " class="form-member-school form-control form-optional" id="form-member-2-school" value="<?=$member2school?>">
                            </div>
                        </div>
                        <div class="col-sm-4"  style="padding-right:0;padding-left:0;">
                            <div class="form-group">
                                <label class="sr-only" for="form-member-2-age">Age</label>
                                <input type="text" name="form-member-2-age" placeholder="Age" class="form-member-age form-control form-optional" id="form-member-2-age" value="<?=$member2age?>">
                            </div>
                        </div>
                    </div>

                    <div class="form-member hidden-form-member">
                        <h5>Member 3</h5>
                        <input type="hidden" name="member3" value="0"/>
                        <div class="form-group">
                            <label class="sr-only" for="form-member-3-name">Name</label>
                            <input type="text" name="form-member-3-name" placeholder="Name" class="form-member-name form-control form-optional" id="form-member-3-name" value="<?=$member3name?>">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="form-member-3-email">Name</label>
                            <input type="email" name="form-member-3-email" placeholder="E-Mail" class="form-member-name form-control form-optional" id="form-member-3-email" value="<?=$member2name?>">
                        </div>
                        <div class="col-sm-8" style="padding-left:0;">
                            <div class="form-group">
                                <label class="sr-only" for="form-member-3-school">School</label>
                                <input type="text" name="form-member-3-school" placeholder="Name Of College / School " class="form-member-school form-control form-optional" id="form-member-3-school" value="<?=$member3school?>">
                            </div>
                        </div>
                        <div class="col-sm-4"  style="padding-right:0;padding-left:0;">
                            <div class="form-group">
                                <label class="sr-only" for="form-member-3-age">Age</label>
                                <input type="text" name="form-member-3-age" placeholder="Age" class="form-member-age form-control form-optional" id="form-member-3-age" value="<?=$member3age?>">
                            </div>
                        </div>
                    </div>

                    <div class="form-member hidden-form-member">
                        <h5>Member 4</h5>
                        <input type="hidden" name="member4" value="0"/>
                        <div class="form-group">
                            <label class="sr-only" for="form-member-4-name">Name</label>
                            <input type="text" name="form-member-4-name" placeholder="Name" class="form-member-name form-control form-optional" id="form-member-4-name" value="<?=$member4name?>" >
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="form-member-4-email">Name</label>
                            <input type="email" name="form-member-4-email" placeholder="E-Mail" class="form-member-name form-control form-optional" id="form-member-4-email" value="<?=$member2name?>">
                        </div>
                        <div class="col-sm-8" style="padding-left:0;">
                            <div class="form-group">
                                <label class="sr-only" for="form-member-4-school">School</label>
                                <input type="text" name="form-member-4-school" placeholder="Name Of College / School " class="form-member-school form-control form-optional" id="form-member-4-school" value="<?=$member4school?>">
                            </div>
                        </div>
                        <div class="col-sm-4"  style="padding-right:0;padding-left:0;">
                            <div class="form-group">
                                <label class="sr-only" for="form-member-4-age">Age</label>
                                <input type="text" name="form-member-4-age" placeholder="Age" class="form-member-age form-control form-optional" id="form-member-4-age" value="<?=$member4age?>">
                            </div>
                        </div>
                    </div>

                    <div class="form-member hidden-form-member">
                        <h5>Member 5</h5>
                        <input type="hidden" name="member5" value="0"/>
                        <div class="form-group">
                            <label class="sr-only" for="form-member-5-name">Name</label>
                            <input type="text" name="form-member-5-name" placeholder="Name" class="form-member-name form-control form-optional" id="form-member-5-name" value="<?=$member5name?>">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="form-member-5-email">Name</label>
                            <input type="email" name="form-member-5-email" placeholder="E-Mail" class="form-member-name form-control form-optional" id="form-member-5-email" value="<?=$member2name?>">
                        </div>
                        <div class="col-sm-8" style="padding-left:0;">
                            <div class="form-group">
                                <label class="sr-only" for="form-member-5-school">School</label>
                                <input type="text" name="form-member-5-school" placeholder="Name Of College / School " class="form-member-school form-control form-optional" id="form-member-5-school" value="<?=$member5school?>">
                            </div>
                        </div>
                        <div class="col-sm-4"  style="padding-right:0;padding-left:0;">
                            <div class="form-group">
                                <label class="sr-only" for="form-member-5-age">Age</label>
                                <input type="text" name="form-member-5-age" placeholder="Age" class="form-member-age form-control form-optional" id="form-member-5-age" value="<?=$member5age?>">
                            </div>
                        </div>
                    </div>


                    <div id="addbutton" style="display:none" class="form-member">
                        <button class="btn green" id="newmember" onclick="addmember()" type="button">Add Another Member</button>
                    </div>

                    <hr/>
                    <span style="color:red">Payment details will be given later, fee is 1000 Rupees</span>
                    <button type="submit" class="btn">Send The Form &amp; Register</button>
                </form>

            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="aboutMACE" tabindex="-1" role="dialog" aria-labelledby="modal-register-label" aria-hidden="true">
    <img id="AboutMACE" src="http://takshak.in/2017/public/images/AboutMACE.png" data-dismiss="modal">
</div>

<div class="modal fade" id="aboutTakshak" tabindex="-1" role="dialog" aria-labelledby="modal-register-label" aria-hidden="true">
    <img id="AboutMACE" src="http://takshak.in/2017/public/images/AboutTakshak.png" data-dismiss="modal">
</div>

<div class="modal fade" id="aboutWT" tabindex="-1" role="dialog" aria-labelledby="modal-register-label" aria-hidden="true">
    <img id="AboutMACE" src="http://takshak.in/2017/public/images/aboutwearable.png" data-dismiss="modal">
</div>

</body>

<!-- Javascript -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="http://takshak.in/2017/public/assets/js/jquery.backstretch.min.js"></script>
<script src="http://takshak.in/2017/public/assets/js/scripts.js"></script>
<!--<script src="http://localhost/Takshak17/public/assets/js/scripts.js"></script>-->

<!--[if lt IE 10]>
<script src="http://takshak.in/2017/public/assets/js/placeholder.js"></script>
<![endif]-->

</body>

</html>