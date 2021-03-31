<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="shortcut icon" href="images/star.png" type="favicon/ico" /> -->

    <title>News +</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/flexslider.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/pricing.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/techcss.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    

    <script src="{{ asset('frontend/js/jquery-1.11.2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.flexslider.min.js') }}"></script>
    <script type="text/javascript">
        $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "slide",
                controlsContainer: ".flexslider-container"
            });
        });
    </script>



</head>
<body data-spy="scroll">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
<!--== 4. Navigation ==-->
<nav class="navbar bg-dark navbar-expand-lg navbar-default custom-navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#about">
                <img src="{{ asset('frontend/images/logo_main.png') }}" class="logo img-responsive">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse bg-dark navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a href="#about">News</a></li>
                <li class="nav-item"><a href="#entertainment">Entertainment</a></li>
                <li class="nav-item"><a href="#reserve">Suscribe</a></li>
                <li class="nav-item"><a href="#contact">Contact Us</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.row -->
</nav>



<!--== 6. About us ==-->
<section id="about">
    <div class="wrapper">
        <div class="container-fluid">
            <br><br><br><br><br>
            <!-- column 1   -->
            <div class="row">
            <div class="col-1">
                <div class="follow-us">
                <br><br><br>              
                <div class="follow-para">
                    <p>F</p>
                    <p>O</p>
                    <p>L</p>
                    <p>L</p>
                    <p>O</p>
                    <p>W</p>
                </div>              
                <br>
                    <div class="follow-para">
                    <p>U</p>
                    <p>S</p>              
                    </div>
                </div>
                <br>
                <div class="followus-logo">
                    <!--Facebook-->
                    <a class="fb-ic mr-3" role="button" style="color: #3b5998;"><i class="fab fa-lg fa-facebook-f"></i></a><br><br>
                    <!--Twitter-->
                    <a class="tw-ic mr-3" role="button"><i class="fab fa-lg fa-twitter"></i></a><br><br>
                    <!--Google +-->
                    <a class="gplus-ic mr-3" role="button" style="color: #db4a39;"><i class="fab fa-lg fa-google-plus-g"></i></a><br><br>
                    <!--Linkedin-->
                    <a class="li-ic mr-3" role="button" style="color:  #0e76a8;"><i class="fab fa-lg fa-linkedin-in"></i></a><br><br>
                    <!--Instagram-->
                    <a class="ins-ic mr-3" role="button" style="color: #3f729b;"><i class="fab fa-lg fa-instagram"></i></a><br><br>
                    <!--Pinterest-->
                    <a class="pin-ic mr-3" role="button" style="color: #E60023;"><i class="fab fa-lg fa-pinterest"></i></a><br><br>
                </div>                    
            </div>
            <!-- column 2 -->
            <div class="col-6.5" style="padding-right: 5%;">
                <h3>Latest Updates</h3><hr>
                <!-- news cards -->
                <div class="card mb-3" style="max-width: 700px; background: transparent; border: none; ">
                <div class="row no-gutters">
                    <div class="col-md-4">
                    <img src="{{ asset('frontend/images/card/apple.jpg') }}" class="card-img" height="150px" alt="..." style="border-radius: 20px 20px 0px 20px ;">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <a href="#"><h5 class="card-title">Apple launches its subscription-based Apple One services today</h5></a>
                        <p class="card-text">US based Apple is gearing up to launch its all new Apple One which would compile most of the subscription-based applications on one platform.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                    </div>
                </div>
                </div> 
                <hr>
                <div class="card mb-3" style="max-width: 700px; background: transparent; border: none; ">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="{{ asset('frontend/images/card/google.jpg') }}" class="card-img" height="150px" alt="..." style="border-radius: 20px 20px 0px 20px ;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <a href="#"><h5 class="card-title">Google CFO expects Fitbit acquisition to clear by end of year </h5></a>
                                <p class="card-text">“We do still expect we are going to receive the necessary regulatory approvals to hopefully complete the transaction before the end of this year,” Porat said in an interview with Bloomberg Television.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>       
                <div class="card mb-3" style="max-width: 700px; background: transparent; border: none; ">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="{{ asset('frontend/images/card/nokia.jpg') }}" class="card-img" height="150px" alt="..." style="border-radius: 20px 20px 0px 20px ;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <a href="#"><h5 class="card-title">Nokia’s new CEO will do ‘Whatever It Takes’ on 5G, shares fall</h5></a>
                                <p class="card-text">Nokia will now have “a more focused approach,” the company said, and will target even more investment in the next generation of wireless technology.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="card mb-3" style="max-width: 700px; background: transparent; border: none; ">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="{{ asset('frontend/images/card/pubg.jpg') }}" class="card-img" height="150px" alt="..." style="border-radius: 20px 20px 0px 20px ;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <a href="#"><h5 class="card-title">PUBG creator Krafton hires bankers for possible record IPO</h5></a>
                                <p class="card-text">Krafton could be valued at about $26 billion, based on the multiples for fellow Korean game makers Netmarble Corp and NCSoft Corp, according to local media reports. That would make Krafton one of South Korea’s largest companies.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div> 
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item active"><a class="page-link" href="Main2.html">1</a></li>
                    <li class="page-item"><a class="page-link" href="Main3.html">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="Main3.html">Next</a></li>
                    </ul>
                </nav>
            
        
            </div>

            <!-- column 3 -->
            
                <br><br>              
                <!-- col 3 part 2 -->
                <div class="headline img-thumbnail">
                <div class="heading_headline">
                    <h3>HEADLINES</h3>
                    <hr>
                </div>
                <div class="headline_content">              
                <ul class="list_item">
                    <div class="overflow-auto p-3 mb-3 mb-md-0 mr-md-3 bg-light" style="max-width: 400px; max-height: 300px;">                 
                    <li>
                    <blockquote class="blockquote" style="font-size: medium;">
                        <a href="#"><p class="mb-0" style="color: #393939;">These are the most anticipated smartphones coming to India in November.</p></a>
                        
                    </blockquote>
                    </li>
                    <li>
                    <blockquote class="blockquote" style="font-size: medium;">
                        <a href="#"><p class="mb-0" style="color: #393939;">You shouldn’t use these 21 apps as they have adware, delete them from phone now.</p></a>
                    </blockquote>
                    </li>
                    <li>
                    <blockquote class="blockquote" style="font-size: medium;">
                        <a href="#"><p class="mb-0" style="color: #393939;">You shouldn’t use these 21 apps as they have adware, delete them from phone now</p></a>
                    </blockquote>
                    </li>
                    <li>
                    <blockquote class="blockquote" style="font-size: medium;">
                        <a href="#"><p class="mb-0" style="color: #393939;">You shouldn’t use these 21 apps as they have adware, delete them from phone now.</p></a>
                    </blockquote>
                    </li>
                    <li>
                    <blockquote class="blockquote" style="font-size: medium;">
                        <a href="#"><p class="mb-0" style="color: #393939;">You shouldn’t use these 21 apps as they have adware, delete them from phone now</p></a>
                    </blockquote>
                    </li>
                    </div>
                </ul>
                </div>
                </div>              
            
            </div>
            <!-- end of col3 -->
            </div>
        </div> <!-- /.container-fluid -->
    </div> <!-- /.wrapper -->
</section> <!-- /#about -->


<!--==  7. Afordable Pricing  ==-->
<section id="entertainment" class="menu-list">
    <div id="w">
        <div class="pricing-filter">
            <div class="pricing-filter-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="section-header">
                                <h2 class="pricing-title">Entertainment </h2>
                                <ul id="filter-list" class="clearfix">
                                    <li class="filter" data-filter="all">All</li>
                                    @foreach($categories as $category)
                                        <li class="filter" data-filter="#{{ $category->slug }}">{{ $category->name }} <span class="badge">{{ $category->items->count() }}</span></li>
                                    @endforeach
                                </ul><!-- @end #filter-list -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <ul id="menu-pricing" class="menu-price">

                        @foreach($items as $item)
                            <li class="item" id="{{ $item->category->slug }}">
                                <a href="#">
                                    <img src="{{ asset('uploads/item/'.$item->image) }}" class="img-responsive" alt="Item" style="height: 300px; width: 369px;" >
                                    <div class="menu-desc text-center">
                                            <span>
                                                <h3>{{ $item->name }}</h3>
                                                {{ $item->description }}
                                            </span>
                                    </div>
                                </a>
                                <h2 class="white">${{ $item->price }}</h2>
                            </li>
                        @endforeach
                    </ul>

                    <!-- <div class="text-center">
                            <a id="loadPricingContent" class="btn btn-middle hidden-sm hidden-xs">Load More <span class="caret"></span></a>
                    </div> -->

                </div>
                <div class="row" style="padding-left: 60px;">
                    <div class="card bg-light font-weight-bold text-white" style="margin: 10px;">
                        <img src="{{ asset('frontend/images/card/nokia.jpg') }}" class="card-img" style="width: 400px;" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text">Last updated 3 mins ago</p>
                        </div>
                    </div>
                    <div class="card bg-light font-weight-bold text-white" style="margin: 10px;">
                        <img src="{{ asset('frontend/images/card/google.jpg') }}" class="card-img" style="width: 400px;" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text">Last updated 3 mins ago</p>
                        </div>
                    </div>
                    <div class="card bg-light font-weight-bold text-white" style="margin: 10px;">
                        <img src="{{ asset('frontend/images/card/pubg.jpg') }}" class="card-img" style="width: 400px;" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text">Last updated 3 mins ago</p>
                        </div>
                    </div>
                    <br><br><br><br>
                    <div class="card bg-light font-weight-bold text-white" style="margin: 10px;">
                        <img src="{{ asset('frontend/images/card/Realme.jpg') }}" class="card-img" style="width: 400px;" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text">Last updated 3 mins ago</p>
                        </div>
                    </div>
                    <div class="card bg-light font-weight-bold text-white" style="margin: 10px;">
                        <img src="{{ asset('frontend/images/card/ransomware.jpg') }}" class="card-img" style="width: 400px;" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text">Last updated 3 mins ago</p>
                        </div>
                    </div>
                    <div class="card bg-light font-weight-bold text-white" style="margin: 10px;">
                        <img src="{{ asset('frontend/images/card/telegram.jpg') }}" class="card-img" style="width: 400px;" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text">Last updated 3 mins ago</p>
                        </div>
                    </div>
                    
                </div>


            </div>
        </div>

    </div>
</section>
<!--== 15. Reserve A Table! ==-->
<section id="reserve">
    <div class="wrapper">
    <br><br><br>
        <nav>
            <div class="nav nav-tabs" id="nav-tab" style="height: 106px; border-width: 20px; border-color: #b8b8b8;" role="tablist">
                <button class="nav-link active" id="nav-home-tab" style="border-width: 20px;" data-bs-toggle="tab" 
                data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" 
                aria-selected="true"><h3>Suscribe to our news letter and Daily Editorials! </h3></button>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class=" section-content">
                   
                        
                            <form class="reservation-form" method="post" action="{{ route('reservation.reserve') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control reserve-form empty iconified" name="name" id="name"
                                                placeholder="  &#xf007;  Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control reserve-form empty iconified" id="email"  placeholder="  &#xf1d8;  e-mail">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="tel" class="form-control reserve-form empty iconified" name="phone" id="phone"  placeholder="  &#xf095;  Phone">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control reserve-form empty iconified" name="dateandtime" id="datetimepicker1" placeholder="&#xf017;  Time">
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-sm-12">
                                        <textarea type="text" name="message" class="form-control reserve-form empty iconified" id="message" rows="3"  placeholder="  &#xf086;  We're listening"></textarea>
                                    </div>

                                    <div class="col-md-12 col-sm-12">
                                        <button type="submit" id="submit" name="submit" class="btn btn-reservation">
                                            <span><i class="fa fa-check-circle-o"></i></span>
                                            Make a reservation
                                        </button>
                                    </div>

                                </div>
                            </form>
                        

                        <div class="col-md-2 hidden-sm hidden-xs"></div>

                        <!-- <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="opening-time">
                                <h3 class="opening-time-title">Hours</h3>
                                <p>Mon to Fri: 7:30 AM - 11:30 AM</p>
                                <p>Sat & Sun: 8:00 AM - 9:00 AM</p>

                                <div class="launch">
                                    <h4>Lunch</h4>
                                    <p>Mon to Fri: 12:00 PM - 5:00 PM</p>
                                </div>

                                <div class="dinner">
                                    <h4>Dinner</h4>
                                    <p>Mon to Sat: 6:00 PM - 1:00 AM</p>
                                    <p>Sun: 5:30 PM - 12:00 AM</p>
                                </div>
                            </div>
                        </div> -->
                    

                </div>
            </div>
        </div>
    </div> <!-- /.wrapper -->
</section> <!-- /#reserve -->






<section id="contact" class="contact">
    <div class="container-fluid bg-dark">
        <div class="row dis-table">
            <div class="hidden-sm col-auto dis-table-cell">
                <h4 class="section-title">Contact With us</h4>
            </div>
            <div class="col-xs-6 col-sm-6 dis-table-cell">
                <div class="section-content">
                    <p>16th Birn street Get Plaza (4th floar) USA</p>
                    <p>+44 12 213584</p>
                    <p>example@mail.com </p>
                </div>
            </div>
        </div>
        <div class="social-media">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <ul class="center-block">
                        <li><a href="#" class="fb"></a></li>
                        <li><a href="#" class="twit"></a></li>
                        <li><a href="#" class="g-plus"></a></li>
                        <li><a href="#" class="link"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="contact-form">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                <div class="row">
                    <form class="contact-form" method="post" action="{{ route('contact.send') }}">
                        @csrf
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <input  name="name" type="text" class="form-control" id="name" required="required" placeholder="  Name">
                            </div>
                            <div class="form-group">
                                <input name="email" type="email" class="form-control" id="email" required="required" placeholder="  Email">
                            </div>
                            <div class="form-group">
                                <input name="subject" type="text" class="form-control" id="subject" required="required" placeholder="  Subject">
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <textarea name="message" type="text" class="form-control" id="message" rows="7" required="required" placeholder="  Message"></textarea>
                        </div>

                        <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
                            <div class="text-center">
                                <button type="submit" id="submit" name="submit" class="btn btn-send">Send </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="copyright text-center">
                    <p>
                        &copy; Copyright, {{ date('Y') }} <a href="#">News + .</a> <strong> Developed &amp; <i class="far fa-heart"></i> by </strong>
                        <a href="">satyam </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>


<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/jquery.mixitup.min.js') }}" ></script>
<script src="{{ asset('frontend/js/wow.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.validate.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/jquery.hoverdir.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/jQuery.scrollSpeed.js') }}"></script>
<script src="{{ asset('frontend/js/script.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap-datetimepicker.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
@if ($errors->any())
    @foreach ($errors->all() as $error)
       <script>
           toastr.error('{{ $error }}');
       </script>
    @endforeach
@endif

<script>
    $(function () {
        $('#datetimepicker1').datetimepicker({
            format: "dd MM yyyy - HH:11 P",
            showMeridian: true,
            autoclose: true,
            todayBtn: true
        });
    })
</script>
{!! Toastr::message() !!}
</body>
</html>