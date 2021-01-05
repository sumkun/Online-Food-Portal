<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Delicious</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- =======================================================
    Theme Name: Delicious
    Theme URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
     

<section id="banner">
    <div class="bg-color">
      <header id="header">
        <div class="container">
          <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#about">About</a>
            <a href="#event">Event</a>
            <a href="#menu-list">Menu</a>
            <a href="#contact">Place Order</a>
          </div>
          <!-- Use any element to open the sidenav -->
          <span onclick="openNav()" class="pull-right menu-icon">☰</span>
        </div>
      </header>
      <div class="container">
        <div class="row">
          <div class="inner text-center">
            <h1 class="logo-name">Delicious</h1>
            <h2>Food To fit your lifestyle & health.</h2>
            <p>Specialized in Indian Cuisine!!</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / banner -->
  <!--about-->
  <section id="about" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center marb-35">
          <h1 class="header-h">Delicious Journey</h1>
          <p class="header-p">YOU NEVER TRIED SOMETHING SO DELICIOUS.
           </p>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <div class="col-md-6 col-sm-6">
            <div class="about-info">
              <h2 class="heading">Don't eat less.
                Just eat real.</h2>
              <p>Delicious Journey is a progression of rare and beautiful ingredients where texture, flavour and harmony is paramount.
                Delicious Journey brings a personal, interactive passage for diners through Peter Gilmore’s culinary evolution.  </p>
              <div class="details-list">
                <ul>
                  <li><i class="fa fa-check"></i>Continually inspired by nature</li>
                  <li><i class="fa fa-check"></i> The creative process for chef Peter Gilmore begins in working closely with the farmers, fishermen, producers.</li>
                  <li><i class="fa fa-check"></i>Artisans who cultivate bespoke produce exclusively for Delicious Journey. </li>
                  <li><i class="fa fa-check"></i>For each dish, the growth of every element and the selection of every ceramic piece is carefully considered and crafted for its role in the dining experience.
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <img src="img/res01.jpg" alt="" class="img-responsive">
          </div>
        </div>
        <div class="col-md-1"></div>
      </div>
    </div>
  </section>
  <!--/about-->
  <!-- event -->
  <section id="event">
    <div class="bg-color" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 text-center" style="padding:60px;">
            <h1 class="header-h">Up Coming events</h1>
            <p class="header-p">Decorations 100% complete here</p>
          </div>
          <div class="col-md-12" style="padding-bottom:60px;">
            <div class="item active left">
              <div class="col-md-6 col-sm-6 left-images">
                <img src="img/res02.jpg" class="img-responsive">
              </div>
              <div class="col-md-6 col-sm-6 details-text">
                <div class="content-holder">
                  <h2>Joyful party</h2>
                  <p>Celebrate in the heart of Pune at one of India's most awarded restaurants, with panoramic views encompassing the Pune city.

                    From intimate dinner parties in the Private Dining Room, to large cocktail events in The Green Room.</p>
                  <address>
                              <strong>Place: </strong>
                              1612 Koregaon Park, Pune 4
                              <br>
                              <strong>Time: </strong>
                              07:30pm
                            </address>
                  <a class="btn btn-imfo btn-read-more" href="events-details.html">Read more</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ event -->
  <!-- menu -->
  <section id="menu-list" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center marb-35">
          <h1 class="header-h">Menu List</h1>
          <p class="header-p">The choice is easy
            when it's Real Food. </p>
        </div>

        <div class="col-md-12  text-center" id="menu-flters">
          <ul>
            <li><a class="filter active" data-filter=".menu-restaurant">Show All</a></li>
            <li><a class="filter" data-filter=".breakfast">Breakfast</a></li>
            <li><a class="filter" data-filter=".lunch">Lunch</a></li>
            <li><a class="filter" data-filter=".dinner">Dinner</a></li>
          </ul>
        </div>
        <form name="f1">
        <div id="menu-wrapper">

          <div class="breakfast menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" data-meal-img="assets/img/restaurant/rib.jpg">
              <input type="checkbox"  value="30" id="c1" name="Pancake">Pancake</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <select name="qty1" id="select_c1"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select>
              <span class="menu-price">Rs.30.00</span>
            </span>
            <span class="menu-subtitle">Always take good breakfast to kickout your day:)</span>
          </div>

          <div class="breakfast menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" data-meal-img="assets/img/restaurant/rib.jpg">
              <input type="checkbox" value="30" id="c2" name="Idely-Sambar">Idely-Sambar</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <select name="qty2" id="select_c2"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select>
              <span class="menu-price">Rs.30.00</span>
            </span>
            <span class="menu-subtitle">Always take good breakfast to kickout your day:)</span>
          </div>

          <div class="breakfast menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" data-meal-img="assets/img/restaurant/rib.jpg">
              <input type="checkbox"  value="30" id="c3" name="Medu-Vada">Medu-Vada</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <select name="qty1" id="select_c3"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select>
              <span class="menu-price">Rs.30.00</span>
            </span>
            <span class="menu-subtitle">Always take good breakfast to kickout your day:)</span>
          </div>

          <div class="breakfast menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" data-meal-img="assets/img/restaurant/rib.jpg">
              <input type="checkbox"  value="15" id="c4" name="Pohe">Pohe</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <select name="qty1" id="select_c4"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select>
              <span class="menu-price">Rs.15.00</span>
            </span>
            <span class="menu-subtitle">Always take good breakfast to kickout your day:)</span>
          </div>

          <div class="breakfast menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" data-meal-img="assets/img/restaurant/rib.jpg">
              <input type="checkbox" value="60" id="c5" name="VegThali">Veg Thali</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <select name="qty1" id="select_c5"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select>
              <span class="menu-price">Rs.60.00</span>
            </span>
            <span class="menu-subtitle">Always take good breakfast to kickout your day:)</span>
          </div>

          <div class="breakfast menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" data-meal-img="assets/img/restaurant/rib.jpg">
              <input type="checkbox"  value="70" id="c6" name="VegSalad">Veg Salad</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <select name="qty1" id="select_c6"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select>
              <span class="menu-price">Rs.70.00</span>
            </span>
            <span class="menu-subtitle">Always take good breakfast to kickout your day:)</span>
          </div>

          <div class="breakfast menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" data-meal-img="assets/img/restaurant/rib.jpg">
              <input type="checkbox"value="50" id="c7" name="MasalaDosa">Masala Dosa</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <select name="qty1" id="select_c7"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select>
              <span class="menu-price">Rs.50.00</span>
            </span>
            <span class="menu-subtitle">Always take good breakfast to kickout your day:)</span>
          </div>

          <div class="breakfast menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" data-meal-img="assets/img/restaurant/rib.jpg">
              <input type="checkbox " value="100" id="c8" name="ChickenBiryani">Chicken Biryani</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <select name="qty1" id="select_c8"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select>
              <span class="menu-price">Rs.100.00</span>
            </span>
            <span class="menu-subtitle">Always take good breakfast to kickout your day:)</span>
          </div>

          <div class="breakfast menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" data-meal-img="assets/img/restaurant/rib.jpg">
              <input type="checkbox" value="150" id="c9" name="ChickenMasala">Chicken Masala</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <select name="qty1" id="select_c9"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select>
              <span class="menu-price">Rs.150.00</span>
            </span>
            <span class="menu-subtitle">Always take good breakfast to kickout your day:)</span>
          </div>

          <div class="breakfast menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" data-meal-img="assets/img/restaurant/rib.jpg">
              <input type="checkbox" value="120" id="c10" name="Kajukari">Kaju kari</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <select name="qty1" id="select_c10"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select>
              <span class="menu-price">Rs.120.00</span>
            </span>
            <span class="menu-subtitle">Always take good breakfast to kickout your day:)</span>
          </div>

          <div class="breakfast menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" data-meal-img="assets/img/restaurant/rib.jpg">
              <input type="checkbox"  value="100" id="c11" name="MalaiKofta">Malai Kofta</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <select name="qty1" id="select_c11"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select>
              <span class="menu-price">Rs.100.00</span>
            </span>
            <span class="menu-subtitle">Always take good breakfast to kickout your day:)</span>
          </div>

          <div class="breakfast menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" data-meal-img="assets/img/restaurant/rib.jpg">
              <input type="checkbox" value="100" id="c12" name="PanirMasala">Panir Masala</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <select name="qty1" id="select_c12"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select>
              <span class="menu-price">Rs.100.00</span>
            </span>
            <span class="menu-subtitle">Always take good breakfast to kickout your day:)</span>
          </div>

        </div>
      </div>
    </div>
    </form>
  </section>

  <section id="contact" class="section-padding">
     <div class="container">
      <div class="row">
        <div class="col-md-3"></div>
          <div class="col-md-6 text-center">
              <h1 class="header-h">Place your order</h1>
              <p class="header-p">Please mention your email address. </p>
              <!-- Email & Table No -->
                <form class="p-5" action="#!" style="margin-bottom:20px">
                  <div class="form-inline">          
                    <input type="email" id="email" class="form-control mb-4 " placeholder="E-mail" style="border:2px solid #ffcd38; border-radius:5px; margin-bottom:5px;">
                    <input type="number" class="form-control" name="table" id="table" placeholder="table no"  min="0" max="10"  style="border:2px solid #ffcd38; border-radius:5px; margin-bottom:5px;">
                  </div>
                </form>
          </div>
        </div>
            <!-- Place Order-->
           
            <div class="col-md-4"></div>
            <div class="col-md-4">
              <button class="btn btn-success btn-block mt-4" type="submit"  id="b2" style="border-radius:8px ;">Place Order</button>
            </div>

          <div class="row msg-row">
            <div class="col-md-4 col-sm-4 mr-15">
              <div class="media-2">
                <div class="media-left">
                  <div class="contact-phone bg-1 text-center"><span class="phone-in-talk fa fa-phone"></span></div>
                </div>
                <div class="media-body">
                  <h4 class="dark-blue regular">Phone Numbers</h4>
                  <p class="light-blue regular alt-p">+91 9021499929 <span class="contacts-sp">Phone Booking</span></p>
                </div>
              </div>
              <div class="media-2">
                <div class="media-left">
                  <div class="contact-email bg-14 text-center"><span class="hour-icon fa fa-clock-o"></span></div>
                </div>
                <div class="media-body">
                  <h4 class="dark-blue regular">Opening Hours</h4>
                  <p class="light-blue regular alt-p"> Monday to Friday 09.00 - 24:00</p>
                  <p class="light-blue regular alt-p">
                    Friday and Sunday 08:00 - 03.00
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-8 col-sm-8">
              <form action="" method="post" role="form" class="contactForm">
                <div id="sendmessage">Thank you!</div>
                <div id="errormessage"></div>
                <div class="col-md-6 col-sm-6 contact-form pad-form">
                <!-- <div class="form-group label-floating is-empty">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>

                </div>
                <div class="col-md-6 col-sm-6 contact-form">
                  <div class="form-group">
                    <input type="date" class="form-control label-floating is-empty" name="date" id="date" placeholder="Date" data-rule="required" data-msg="This field is required" />
                    <div class="validation"></div>
                  </div>
                </div>-->
                <!--<div class="col-md-6 col-sm-6 contact-form">
                  <div class="form-group">
                    <input type="time" class="form-control label-floating is-empty" name="time" id="time" placeholder="Time" data-rule="required" data-msg="This field is required" />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6 contact-form">
                  <div class="form-group">
                    <input type="text" class="form-control label-floating is-empty" name="phone" id="phone" placeholder="Phone" data-rule="required" data-msg="This field is required" />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6 contact-form">
                  <div class="form-group">
                    <input type="text" class="form-control label-floating is-empty" name="people" id="people" placeholder="People" data-rule="required" data-msg="This field is required" />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="col-md-12 contact-form">
                  <div class="form-group label-floating is-empty">
                    <textarea class="form-control" name="message" rows="5" rows="3" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                    <div class="validation"></div>
                  </div>

                </div>-->
                <div class="col-md-12 btnpad">
                  <div class="contacts-btn-pad">
                          
                  </div>
                </div>
              </form>
            </div>
          </div>
     </div>
  </section>



  <footer class="footer text-center">
    <div class="footer-top">
      <div class="row">
        <div class="col-md-offset-3 col-md-6 text-center">
          <div class="widget">
            <h4 class="widget-title">Delicious</h4>
            <address>Near Pavillion mall, <br>S.B.Road, Pune - 411 013.</address>
            <div class="social-list">
              <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            </div>
            <!--<p class="copyright clear-float">
              © Delicious Theme. All Rights Reserved-->
              <div class="credits">
                <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Delicious
                -->
                <p><font color="white">Designed by</font><br>
                Shivam Parve <br>
                Suyog Salpure <br>
                Yash Kolhe <br>
                Sumit Dube<br>
                              </div>
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
 
 
<script type="text/javascript">




$("#b2").click(function()
{
    var r=$('input[type="checkbox"]:checked');
alert('in b2')

var obj={}
var arr=[]
  r.each(function()
  {
      var id=$(this).attr("id");
      var name_p=$(this).attr("name");
      var value_s=$(this).val();

      var m=$('#select_'+id+' option:selected');

      var count_q= m.text();

      var int_count=parseInt(count_q,10)
      var int_vale=parseInt(value_s,10); 
      var cost=int_count*int_vale;

    
  // obj.id=id;
      obj.name=name_p;
     // obj.value=value_s;
      obj.count=count_q;
      obj.cost=cost;
arr.push(obj);
obj={}
  })

  var email=$('#email').val();
   var table_no=$('#table').val();

   var d=new Date();
h = (d.getHours()<10?'0':'') + d.getHours(),
 m = (d.getMinutes()<10?'0':'') + d.getMinutes();
t = h + ':' + m;

                    $.ajax({  
                             url:"table.php",  
                             method:"POST",  
                             data:{'data':JSON.stringify(arr),'email':email,'table_no':table_no,'time':t}, 
                            error:function(e){
                              console.log('error message ',e);  
                            },
                             success:function(data){  
 
                              var sendjson=JSON.stringify(data);
                              $('#div1').text(sendjson);

                              $.ajax({  
                             url:"mailsend.php",  
                             method:"POST",  
                             data:{'data':JSON.stringify(data),'email':email}, 
                            error:function(e){
                              console.log(e);  
                            },
                             success:function(data){  

                              window.location.href="second.php";
                           //  $('#div1').html(data);
                                 
                             }  
                        }); 
                                 
                       }  
                        }); 
 // console.log('arrr',arr)

})

    </script>
</body>
</html>