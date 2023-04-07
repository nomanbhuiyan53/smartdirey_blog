<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>smart dairy 360 </title>    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cardView.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://kit.fontawesome.com/2a7bedc40f.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<header class="header-bg">
    <nav class="navbar navbar-expand-lg ">
        <div class="container">
            <a class="navbar-brand text-dark" href="#">                
                <img src="{{ asset('image/Smart-Dairy-360-Logo.png') }}" alt="" class="logo ">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navBTN navbar-collapse" id="navbarText">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Overview">Overview</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#workflow">Work Flow</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#advantage">Advantage</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-warning" href="">demo </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="hero">
        <div class="container">
            <a id="button"></a>
            <div class="row ">
                <div class="col-md-6 mt-5">
                    <h1 class="text-light" style="border-bottom: 4px solid yellow">Smart Dairy <strong class="text-warning">360</strong></h1> <br>
                    <h3 class="text-light" style="text-align: justify;">Developing a web based solution for dairy farm management which goal is to record all animals data, track health, breeding, production and view multipurpose reports and analytics.</h3>
                </div>
                <div class="col-md-6 hero_img">
                    <img src="{{ asset('image/deskMobi.png') }}" class="img-fluid" alt="" style="height: auto;margin-top: 50px">
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container ">
    <div class="row mt-3">
        <h4 class="border-bottom border-dark">App DashBoard UI</h4>
        <div class="col-md-6 section_one">
            <img src="{{ asset('image/dash-1.png') }}" class="img-fluid" alt="">
        </div>
        <div class="col-md-6 section_two">
            <img src="{{ asset('image/dash-2.png') }}" class="img-fluid" alt="">
        </div>
    </div>
    <div class="row  full_card mt-3" id="Overview" style="background: linear-gradient(17deg, rgba(238,238,238,1) 0%, rgba(255,255,255,1) 100%);">
        <div class="col-md-4 position-relative">
            <img src="{{ asset('image/calf_side1.png') }}" class=" position-absolute bottom-0 start-0" alt="sideImage" style="border-radius: 0px 0px 0px 20px">
        </div>
        <div class="col-md-8 mt-4">
            <h2 class="border-bottom border-dark">Software Overview</h2>
            <h5 style="text-align: justify;"> <strong>Smart Dairy 360</strong> is a web based solution for dairy farm management which goal is to record all animal's data, track breeding, manage health, record production and view multipurpose reports and analytics. Also, system will show daily tasks and show alert to improve performance.</h5>
            <h5 style="text-align: justify;"> <strong> Major Features:</strong> <br>
                Master entries, Breeding, production, health lifetime records, reports and herd performance analysis.</h5>
        </div>
    </div>
    <div class="row full_card mb-4 mt-3" style="background-color: #E3FFF8">
        <div class="col-md-8 mt-4 p-3">
            <h2 class="border-bottom border-dark">Importance of Performance Recording in Dairy Animals</h2>
            <h5>
                <ul>
                    <li>Support farm managers and other workers in eliminating
                        management errors, consequence losses</li>
                    <li>Implement concept of precision farming-Actions on the day required</li>
                    <li>Implement disease prevention and production enhancement programs in the farm</li>
                    <li>Plan breed improvement and enhance fertility to reduce culling of good animals</li>
                    <li>To Monitor centrally management, services, production at each farm by networking the data with HQ</li>
                </ul>
            </h5>

        </div>
        <div class="col-md-4 position-relative">
            <img src="{{ asset('image/calf-2.png') }}" class="img-fluid position-absolute bottom-0 end-0" alt="sideImage" style="border-radius: 0px 0px 20px 0px">
        </div>
    </div>
    <div class="row full_card mt-3" style="background-color: #FFF7CA">
        <div class="col-md-4 position-relative">
            <img src="{{ asset('image/Calf3.png') }}" class="img-fluid position-absolute bottom-0 start-0" alt="sideImage" style="border-radius: 0px 0px 0px 20px">
        </div>
        <div class="col-md-8 mt-4">
            <h2 class="border-bottom border-dark">Farm-to-Fork Traceability and Social Impact</h2>
            <h5>
                <ul >
                    <li>Consumer confidence can be enhanced by providing access to information on farm practices, quality and safety of the farm produce.</li>
                    <li>Social and moral objective to protecting consumer health can be achieved since milk will be free from drug and chemical residues.</li>
                    <li>For Government organization the achievements of targets, profit and social impacts can be demonstrated with hard data</li>
                    <li>Public and political confidence would bring more investment and projects to expand activities.</li>
                </ul>
            </h5>
        </div>
    </div>


    <!--work flow start-->
    <div class="row" id="workflow">
        <div class="col-md-12 mt-4 pt-2" style="background-color: #0277BD; height: 60px; " >
            <h2 class="text-light " style="width: 50%; border-bottom: 3px solid #FFB300;"><i class="fa-solid fa-arrows-spin text-warning "></i> Work Flow <i class="fa-solid fa-square"></i> <i class="fa-solid fa-square" style="opacity: 0.6"></i> <i class="fa-solid fa-square" style="opacity: 0.3"></i></h2>
        </div>
    </div>
    <div class="work_grid pt-5 pb-3" >
        <div class=" work_flow_card" style="background-color: #E8F5E9;border: 4px solid #0277BD;">
            <div class="title_work" style="background-color: #009688 ;">
                <h5>System Setup</h5>
            </div>
            <br>
            <ul>
                <li>Setup Farm, Herd, Lot, Breeding, Health, production, parameters</li>
                <li>Create Roles and assign role to different users</li>
            </ul>
            <div class="arrow_right">
                <i class="fa-solid fa-right-long" style="color:#00E676 ;"></i>
            </div>
        </div>
        <div class=" work_flow_card" style="background-color: #F9FBE7;border: 4px solid #F9A825;">
            <div class="title_work" style="background-color: #43A047">
                <h5>Cow Registration</h5>
            </div>
            <br>
            <ul>
                <li>Register cow by entering all required general information</li>
                <li>Update Cow with parent, breeding, production history</li>
            </ul>
            <div class="arrow_right">
                <i class="fa-solid fa-right-long" style="color: #F57F17"></i>
            </div>
        </div>

        <div class=" work_flow_card" style="background-color: #E0F2F1;border: 4px solid #00BFA5;">
            <div class="title_work" style="background-color: #0097A7 ;">
                <h5>Core Services</h5>
            </div>
            <br>
            <ul>
                <li>Manage all breeding, health and production Modules to get better outcome</li>
                <li>Enter required data by assigned users and show list data & details of each cow</li>
            </ul>
            <div class="arrow_right">
                <i class="fa-solid fa-right-long" style="color:#0277BD ;"></i>
            </div>
        </div>
        <div class=" work_flow_card" style="background-color: #FFEBEE;border: 4px solid #F44336;">
            <div class="title_work" style="background-color: #7B1FA2 ;">
                <h5>Action/Alert</h5>
            </div>
            <br>
            <ul>
                <li>Authorized users will get daily action list</li>
                <li>Different alert message will be shown to diff. users</li>
            </ul>
            <div class="arrow_right">
                <i class="fa-solid fa-right-long" style="color:#AA00FF ;"></i>
            </div>
        </div>
        <div class=" work_flow_card" style="background-color: #ECEFF1;border: 4px solid #607D8B;">
            <div class="title_work" style="background-color: #795548 ;">
                <h5>Summary& Reports</h5>
            </div>
            <br>
            <ul>
                <li>All users will have a dashboard with authorized summary</li>
                <li>Diff. general & custom reports can be generated</li>
            </ul>

        </div>

    </div>
    <!--work flow end-->
    <div class="row mt-3" id="advantages">

        <div class="col-md-10">
            <h2 style="border-bottom: 2px solid #00E676;">Advantages of Comprehensive Networking Software</h2>
            <ul style="list-style-type: none">
                <li><i class="fa-solid fa-square-check"></i> Most of the software available in the market are for single farm but a better option is networking so that all farms data can be linked to the H.Q</li>
                <li><i class="fa-solid fa-square-check"></i> The App and the web software when linked, data can be updated directly from animal side – no need to record on paper</li>
                <li><i class="fa-solid fa-square-check"></i> The web software post-analysis would share decision support to all the stakeholders</li>
                <li><i class="fa-solid fa-square-check"></i> The Admin function will be able to authorize data access mandate to different categories of farm functionaries
                <li><i class="fa-solid fa-square-check"></i> Browser based dashboard will help in monitoring of daily farm operation and management functions.</li>
            </ul>
        </div>
        <div class="col-md-2"></div>
    </div>
<!--    tag section -->

<!--    tag section end -->
    <div class="row mt-3">
        <div class="col-md-12">
            <img src="{{ asset('image/Group_cow.png') }}" class="img-fluid" alt="" style="height: 150px; object-fit: contain">
        </div>
    </div>
</div> <!--- end main container -->

<!--    features section start  -->
<div class="card_view " id="features">
    <div class="container">
        <div class="row mt-1  g-3 features">
            <h2 class="p-2 pb-2" ><img src="{{ asset('image/feature-selection.png') }}" alt="" style="max-width: 50px"> FEATURES OF THE APP</h2>
                <h5 class="text-center">Digitization of Record Keeping in Dairy Farm
                    By-<strong>Smart Dairy 360.</strong> </h5>
            <h5 class="text-center">Productivity in animals improve rapidly once data recording programs are implemented</h5>
            <div class="col-md-4 f_details">
                <div class="container_card">
                    <div class="card_cm">
                        <div class="line"></div>
                        <div class="imgbox">
                            <img src="{{ asset('image/icon-1.png') }}" >
                        </div>
                        <div class="contain">
                            <div class="detail">
                                <h4>CATTLE REGISTRATION</h4>
                                <p>This is the first step where you can register your cattle in the app.</p>
                                <p>Update Cow with parent, breeding, production history</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 f_details">
                <div class="container_card">
                    <div class="card_cm">
                        <div class="line"></div>
                        <div class="imgbox">
                            <img src="{{ asset('image/icon-2.png') }}" >
                        </div>
                        <div class="contain">
                            <div class="detail">
                                <h4>INSEMINATION INFORMATION</h4>
                                <p>You can keep a pregnancy record through this section.</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 f_details">
                <div class="container_card">
                    <div class="card_cm">
                        <div class="line"></div>
                        <div class="imgbox">
                            <img src="{{ asset('image/milkproduction.png') }}">
                        </div>
                        <div class="contain">
                            <div class="detail">
                                <h4>MILK PRODUCTION</h4>
                                <p>Forecasting of milk production, calving, drying-off, semen requirements improve farm efficiency with better planning </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 f_details">
                <div class="container_card">
                    <div class="card_cm">
                        <div class="line"></div>
                        <div class="imgbox">
                            <img src="{{ asset('image/tag.png') }}">
                        </div>
                        <div class="contain">
                            <div class="detail">
                                <h4>Tag Scanning</h4>
                                <p>Scanning leads to opening of
                                    animal file</p>
                                <p>Various reports can be generated</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 f_details">
                <div class="container_card">
                    <div class="card_cm">
                        <div class="line"></div>
                        <div class="imgbox">
                            <img src="{{ asset('image/clipboard.png') }}">
                        </div>
                        <div class="contain">
                            <div class="detail">
                                <h4>DETAILED REPORT</h4>
                                <p>Here you will find detailed reports of each section related to your cattle.</p>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 f_details">
                <div class="container_card">
                    <div class="card_cm">
                        <div class="line"></div>
                        <div class="imgbox">
                            <img src="{{ asset('image/INCOME.png') }}">
                        </div>
                        <div class="contain">
                            <div class="detail">
                                <h4>INCOME AND EXPENSES</h4>
                                <p>Here you can keep track of your farm's income and expenses.</p>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!--    features section end  -->
        </div> <!--- end card row -->

    </div>
</div>
<!--Advantage -->
<div class="advantage mt-3" id="advantage">
    <div class="container ">

        <div class="row" style="border-bottom: 4px solid #0277BD; background: #BBDEFB">
            <p class="adv-title w-100"><i class="fa-solid fa-rocket"></i> Advantage from Smart Dairy <strong style="color:#F9A825;">360</strong></p>
            <div class="col-md-4">
                <ul style="list-style-type: disclosure-closed;">
                    <li>Cattle Lifetime History</li>
                    <li>Heat Cycle Notification</li>
                    <li>Notification for Pregnancy Diagnosis Check</li>
                    <li>Expected calving notification</li>
                    <li>Notification for Dry off</li>
                    <li>Gestation days alarm</li>
                    <li>Report of PD check greater than 90 days</li>
                    <li>Report On A.I Done</li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul style="list-style-type: disclosure-closed;">
                    <li>Calving Report</li>
                    <li>Dry off report</li>
                    <li>Milk Production report</li>
                    <li>Vaccination Report</li>
                    <li>Deworming Report</li>
                    <li>Diseases tested</li>
                    <li>Treatment Done Report</li>
                    <li>Report by Gestation days parameter</li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul style="list-style-type: disclosure-closed;">
                    <li>Open Unbred animal report (Which are not inseminated
                        and not pregnant)</li>
                    <li>Open Bred animal report (Which are inseminated but not pregnant)</li>
                    <li>Report by No. of A.I Done</li>
                    <li>Milk production Report</li>
                    <li>Animal Sold</li>
                    <li>Animal Died</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--end Advantage-->

<footer>
    <div class="footer mt-5">
        <div class="container">
            <div class="row ">
                <div class="col-md-6">
                    <div class="sun">

                    </div>
                    <h3 style="margin-left: 100px"><img src="{{ asset('image/Smart-Dairy-360-Logo.png') }}" style="max-width: 60px"> SmartDairy <strong style="color: #FF9800">360</strong></h3>
                    <h6 style="margin-left: 160px">Product of <img src="{{ asset('image/uss.png') }}" alt="uss logo" style="max-height: 18px;"></h6>
                </div>
                <div class="col-md-6">
                  <div class="visitor" id="contact">
                        <h4 class="text-center border-bottom text-danger border-dark p-2">Please send Your Opinion or any query  </h4>
                      <div class="row">
                          <div class="col-4 text-end">
                              <h6>Please Enter Your Email :</h6> <br>
                              <h6>Write Your Message :</h6>
                          </div>
                          <div class="col-8">
                              <form  method="post">
                                @csrf
                                  <div class="email_icon">
                                      <i class="fa-solid fa-envelope" aria-hidden="true"></i>
                                      <input class="email" type="email" name="email" placeholder="Enter Email" style="border-radius: 10px; border:1px solid red; margin-bottom: 5px;background-color: rgba(250,250,250,0.58); width: 100%; font-size: 14px"  >
                                  </div>
                                    <p id="invalid_email"style="color:red; font-size: 10px; font-weight: bold;" >"Email-id is invalid" *</p>
                                    <p class="alert_text" style="color:red; font-size: 10px; font-weight: bold;" >"please enter your email address and comment" *</p>
                                  <textarea class="message" name="message" placeholder="Write Your Message ..."  cols="30" rows="4" style="border-radius: 10px; border:1px solid red; padding: 5px; margin-bottom: 5px;background-color: rgba(250,250,250,0.58); width: 100%;font-size: 14px" ></textarea>
                                  <div class="d-grid gap-2 d-md-flex justify-content-md-end" style="padding-bottom: 10px;">
                                      <button  class="btn btn-danger submit-btn"> Submit</button>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="topFooter">
    <div class="container d-flex justify-content-between pt-2">
        <h6>CopyRight SmartDairy360 - 2023.</h6>
        <h6>Develop by: <a href="https://www.ussbd.net/" style="text-decoration: none; color:#FFC400;">United Software Solutions (USS)</a>
            
        </h6>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<script>
    var btn = $("#button");

    $(window).scroll(function () {
        if ($(window).scrollTop() > 300) {
            btn.addClass("show");
        } else {
            btn.removeClass("show");
        }
    });

    btn.on("click", function (e) {
        e.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, "300");
    });
    $('.alert_text').hide();
    $('#invalid_email').hide();
    $('.submit-btn').click(function (e) { 
        e.preventDefault();
        let email = $('.email').val();
        let message = $('.message').val();
        if (IsEmail(email) == false) {
                    $('#invalid_email').show();
                    return false;
                }
        else if (email.length == 0 || message.length == 0) {
             $('.alert_text').show();
        } else {
            getData();
        }
        $('.email, .message').keydown(function (e) { 
            $('.alert_text').hide();
            $('#invalid_email').hide();
        });
         
       
    });
    function IsEmail(email) {
            var regex =/^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if (!regex.test(email)) {
                return false;
            }
            else {
                return true;
            }
        }
    function getData() {
        
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "{{ route('send.mail') }}",
            type: "POST",
            dataType: "JSON",
            data: {
                title: $('.email').val(),
                body: $('.message').val(),
            },
            success: function (response) {
                alert(response.message);
            }
        });
    }



</script>
</body>
</html>
