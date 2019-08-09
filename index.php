<!DOCTYPE html>
<html lang="en">
<head>
  <title>my wbst</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

 <style>
        
        *{
            margin: 0; padding: 0; font-family: 'Merriweather', serif;

        }
        .carousel-inner img {
      width: 100%;
    
  }
  .carousel-caption>h3
  {
    font-size: 100px;
    font-weight: 500;
    font-family: "Arial Black", sans-serif;
    padding-bottom: 10px;
  }
.navbar-expand-lg .navbar-nav>.active>a, 
.navbar-expand-lg .navbar-nav>.active>a:hover, 
.navbar-expand-lg .navbar-nav>.active>a:focus 
{
    color: #ffffff;
    background: #8BC34A;
    border-radius: 0;
}
.navbar .nav > li > a {
    color: #676767;
    text-shadow: none;
    border: 1px solid rgba(255, 255, 255, 0) !important;
    }
    header ul.nav li a {
    font-size: 13px;
    border: none;
    font-weight: 600;
    text-transform: uppercase;
}
 </style>
</head>
<body>
    <!--navbar start-->
    <header>
        <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light  text-white">
                <a class="navbar-brand" href="index.php"><img src="map.png" width="30px; height=30px;">
SPICE</a>
 
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">


                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="index.php"><button type="button" class="btn btn-outline-success">HOME</button></a>
                    
                    </li>

                    <li class="nav-item">
                      <a class="nav-link" href="about.php"><button type="button" class="btn btn-outline-success">ABOUT US</button></a>

                    </li>

                    
                       <li class="nav-item">
                      <a class="nav-link" href="gallery.php"><button type="button" class="btn btn-outline-success">GALLERY</button></a>
                    </li>
                     <li class="nav-item">
                      <a class="nav-link" href="service.php"><button type="button" class="btn btn-outline-success">SERVICES</button></a>
                    </li>
                     <li class="nav-item">
                      <a class="nav-link" href="pricing.php"><button type="button" class="btn btn-outline-success">PRICING</button></a>
                    </li>
                     <li class="nav-item">
                      <a class="nav-link" href=""><button type="button" class="btn btn-outline-success">CONTACT</button></a>
                    </li>
                     </ul>
                  </div>
              </nav>
          </header>
      </div>
    <!--navbar end-->
     <!--carousel start-->
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="sld.jpg" alt="Los Angeles" height="500">
      <div class="carousel-caption">
          <h3>TASTY FOOD</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img src="rt.jpg" alt="Chicago" height="500px">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>               

              <!--carousal end-->

              <!--signature start-->

<section style="background: #8bc34a">

<div class="container">
    

        <h2 class="text-center text-capitalize pt-5">SIGNATURE DISHES</h2><br> 
        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt
            doloribus omnis minus ovident, doloribus omnis minus temporibus perferendis nesciunt.
        </p>
        <br>



        <div class="row">  
          <div class="col-lg-4 col-md-2 col-12  mb-4">  
              <img src="service1.jpg" class="img-fluid"><hr>
              <div class="card" style="margin-top: -30px;">
                 <div class="card-body">
                    <h4 class="card-title">Cobb Salad</h4>
           <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt</p>
           
                 </div>
              </div>
          </div>
          
          <div class="col-lg-4 col-md-2 col-12  mb-4">  
            <img src="service2.jpg" class="img-fluid">
        
            <hr>
            <div class="card" style="margin-top: -30px;">
                 <div class="card-body">
                    <h4 class="card-title">Twinkies</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt</p>
                 </div>   
            </div>
           
          </div> 

           <div class="col-lg-4 col-md-2 col-12  mb-4">  
            <img src="service3.jpg" class="img-fluid"><hr>
            <div class="card" style="margin-top: -30px;">
                 <div class="card-body">
                    <h4 class="card-title">Pot roas</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt</p>
                 </div>

            </div>          
           </div> 

       </div>
       <br>
       <br>

  
                
 </div>
</section>


<!--sgntrend-->

<!--offer strt-->

<section>
<div class="container-fluid" style="background-color: #F5F5F5">
    

        <h2 class="text-center text-capitalize pt-5">WE OFFER</h2><br> 
        <h6 class="text-center" style="font-family: 'Open Sans', Arial, sans-serif; color: #656565; padding: 5px; font-size: 5; padding-left: 200px; padding-right: 200px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident, 
doloribus omnis minus ovident, doloribus omnis minus temporibus perferendis nesciunt..
<br><br>
                         </h6>
                     
        <br>
<!--cfstrt-->
        <div class="row">  
            <div class="col-lg-4 col-md-2 col-12  mb-4">
                <h4 style="padding-left: 90px; margin-left: 30px;">Coffee</h4>
                       <div class="row">

               <div class="col-md-2">
    

                    <img src="rd.png" style="height: 40px; margin-left: 60px;">
                </div>
                <div class="col-md-7">
                   <p style="margin-left: 50px;">Lorem ipsum dolor sit amet, consectetur<br> adipisicing elit. Dolores quae porro<br> consequatur aliquam, incidunt</p>
                </div>
       </div>
            </div>
       
<!--cfstrt-->

<!--brkstrt-->
      
           <div class="col-lg-4 col-md-2 col-12  mb-4">
             <h4 style="padding-left: 90px; margin-left: 30px;">Breakfast</h4>
              <div class="row">
                <div class="col-md-2">
                    <img src="google-circles-communities.svg" style="height: 40px; margin-left: 60px;">

                </div>
                <div class="col-md-7">
                   <p style="margin-left: 50px;">Lorem ipsum dolor sit amet, consectetur<br> adipisicing elit. Dolores quae porro<br> consequatur aliquam, incidunt</p> 
                </div>
            </div>
            </div>
<!--brkend-->

<!--lnchstrt-->
<div class="col-lg-4 col-md-2 col-12  mb-4">
                    <h4 style="padding-left: 90px; margin-left: 30px;">Lunch</h4>
                <div class="row">
                    <div class="col-md-2">
                     <img src="mm.png" style="height: 40px; margin-left: 60px;">
                    </div>
                <div class="col-md-7">
                   <p style="margin-left: 50px;">Lorem ipsum dolor sit amet, consectetur<br> adipisicing elit. Dolores quae porro<br>consequatur aliquam, incidunt</p>
                </div>
           </div>
</div> 
</div>
</section>

<!--coff end-->

<section>
<div class="container-fluid" style="background-color: #F5F5F5">
    

        
<!--cfstrt-->
        <div class="row">  
            <div class="col-lg-4 col-md-2 col-12  mb-4">
                <h4 style="padding-left: 90px; margin-left: 30px;">Dinner</h4>
                       <div class="row">

               <div class="col-md-2">
    

                    <img src="dnr.png" style="height: 40px; margin-left: 60px;">
                </div>
                <div class="col-md-7">
                   <p style="margin-left: 50px;">Lorem ipsum dolor sit amet, consectetur<br> adipisicing elit. Dolores quae porro<br> consequatur aliquam, incidunt</p>
                </div>
       </div>
            </div>
       
<!--cfstrt-->

<!--brkstrt-->
      
           <div class="col-lg-4 col-md-2 col-12  mb-4">
             <h4 style="padding-left: 90px; margin-left: 30px;">Parties</h4>
              <div class="row">
                <div class="col-md-2">
                    <img src="arrow.png" style="height: 40px; margin-left: 60px;">

                </div>
                <div class="col-md-7">
                   <p style="margin-left: 50px;">Lorem ipsum dolor sit amet, consectetur<br> adipisicing elit. Dolores quae porro<br> consequatur aliquam, incidunt</p> 
                </div>
            </div>
            </div>
<!--brkend-->

<!--lnchstrt-->
<div class="col-lg-4 col-md-2 col-12  mb-4">
                    <h4 style="padding-left: 90px; margin-left: 30px;">Events</h4>
                <div class="row">
                    <div class="col-md-2">
                     <img src="tab.png" style="height: 40px; margin-left: 60px">
                    </div>
                <div class="col-md-7">
                   <p style="margin-left: 50px;">Lorem ipsum dolor sit amet, consectetur<br> adipisicing elit. Dolores quae porro<br>consequatur aliquam, incidunt</p>
                </div>
           </div>
</div> 
</div>
</section>


<!--about us start-->
                <section>

                    <div class="container pt-5">
                        <div class="row mb-5">
                                <div class="col-md-12">
                                    <div class="section-title text-center">
                    <h2>OUR RESTAURANT</h2> 
                    <p style="font-family justify:  'Open Sans', Arial, sans-serif; color: #656565; padding: 5px;">"Curabitur aliquet quam id dui posuere blandit. Donec sollicitudin molestie malesuada Pellentesque"<br>"ipsum id orci porta dapibus. Vivamus suscipit tortor eget felis porttitor volutpa"</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="about-text">
                    <p style="font-family justify:  'Open Sans', Arial, sans-serif; color: #656565; padding: 5px;">"Grids is a responsive Multipurpose Tamplate. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur aliquet quam id dui posuere blandit. Dance sollicitudin molestie melesuada. Pellentesque in ipsum id orci porta dapibus. vavamus suscipit tortor eget files porttitor volutpat."</p>

                    <div class="row">
                        <div class="col-md-2">

                        
                            <p>"Lorem ipsum dolor sit amet"</p></div></div>
                        
                            <button type="button" class="btn btn-outline-success">LEARN MORE</button>
                            </div>
                            </div>
                            <div class="col-md-6 col-sm-6 mb-5"> 
                                <div class="about-image">
                                        <img src="about.jpg" alt="about-image"><
                                    </div>
                             </div>
    </section>
<!--about us end-->
              
             <!--footer start-->

              <div class="container-fluid" style="background-color:#000;padding:20px">
              <div class="row">
                    <div class="col-sm-3">
             <div class="footer" style="bottom: 0; left: 0; width: 100%;">
          <p style="font-size:12px; color:gray; font-family: 'Droid Sans', sans-serif; text-align:justify;font-size:20px;">Our Contact<br>
          <p style="font-size:12px; color:gray; font-family: 'Droid Sans', sans-serif; text-align:justify;">Bootstrap company Inc

          <p style="font-size:12px; color:gray; font-family: 'Droid Sans', sans-serif; text-align:justify;">JC Main Road,NewYork US.


          <p style="font-size:12px; color:gray; font-family: 'Droid Sans', sans-serif; text-align:justify;">9557064837 

          <p style="font-size:12px; color:gray; font-family: 'Droid Sans', sans-serif; text-align:justify;">poonamkaith3030@gmail.com
          </div>
          </div>
          <div class="col-sm-3">   
             <p style="font-size:12px; color:gray; font-family: 'Droid Sans', sans-serif; text-align:justify;font-size:20px">Quick Links<br>
             <p style="font-size:12px; color: gray; font-family: 'Droid Sans', sans-serif; text-align:justify;">Latest Events
             <p style="font-size:12px; color: gray; font-family: 'Droid Sans', sans-serif; text-align:justify;">Terms & Conditions
             <p style="font-size:12px; color: gray; font-family: 'Droid Sans', sans-serif; text-align:justify;">Privacy Policy
             <p style="font-size:12px; color: gray; font-family: 'Droid Sans', sans-serif; text-align:justify;">Career
             <p style="font-size:12px; color: gray; font-family: 'Droid Sans', sans-serif; text-align:justify;">Contact Us
             </div>
             <div class="col-sm-3">
                 <p style="font-size:12px; color: gray; font-family: 'Droid Sans', sans-serif; text-align:justify;font-size:20px;">Latest Post<br>
                 <p style="font-size:12px; color: gray; font-family: 'Droid Sans', sans-serif; text-align:justify;">Lorem ipsum dolor sit amet,consectetur adipiscing elit.
                 <p style="font-size:12px; color: gray; font-family: 'Droid Sans', sans-serif; text-align:justify;">Pellentesque at pulvinar enim. Quisque at tempor ligula
                 <p style="font-size:12px; color: gray; font-family: 'Droid Sans', sans-serif; text-align:justify;">Natus error sit voluptatem accusantium doloremque
                 
                </div>
                <div class="col-sm-3">
                        <p style="font-size:12px; color:gray; font-family: 'Droid Sans', sans-serif; text-align:justify;font-size:20px;">Recent News

                        <p style="font-size:12px; color: gray; font-family: 'Droid Sans', sans-serif; text-align:justify;">Lorem ipsum dolor sit amet,consectetur adipiscing elit.
                        <p style="font-size:12px; color: gray; font-family: 'Droid Sans', sans-serif; text-align:justify;">Pellentesque at pulvinar enim. Quisque at tempor ligula
                        <p style="font-size:12px; color: gray; font-family: 'Droid Sans', sans-serif; text-align:justify;">Natus error sit voluptatem accusantium doloremque

                 </div>
             </p>
                              
        </div>
        </div>

        <!--ftrend-->


                        

<!--footer end-->
 </body>
</html>