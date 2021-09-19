<!-- start including header  -->
<?php 
include('./header.php');
?>
<!-- end including header  -->
   

    <!-- start video background -->
    <div class="container-fluid remove-video-margin">
        <div class="video-parent">
            <video playsinline autoplay  muted loop >
                <source src="./video/background.mp4">
            </video>
            <div class="video-overlay"></div>
        </div> 
        <div class="video-content">
            <h1 class="vid-inner-content">Welcome To E-School</h1>
            <small class="vid-inner-content">First Learn Then Remove 'L' From Learn</small><br>
            <?php 
            if(!isset($_SESSION['is_login'])){

              echo  '<a href="#" class="btn btn-danger my-3" data-bs-toggle="modal" data-bs-target="#registrationmodal" >Get IN</a>';
            }else{
              echo '<a href="#" class="btn btn-danger my-3"  >My Profile</a>';

            }

            ?>
            
        </div> 
    </div>

    <!-- end video background -->
    <!-- start text banner -->
     <div class="container-fluid bg-success txt-banner">
         <div class="row bottom-banner">
             <div class="col-sm">
                 <h5><i class="fas fa-book-open mr-3"></i>&nbsp;100+ Online Courses</h5>
             </div>
             <div class="col-sm">
                 <h5><i class="fas fa-users mr-3"></i>&nbsp;Expert Instructor</h5>
             </div>
             <div class="col-sm">
                 <h5><i class="fas fa-keyboard mr-3"></i>&nbsp;Life Time Access</h5>
             </div>
             <div class="col-sm">
                 <h5><i class="fas fa-rupee-sign mr-3"></i>&nbsp;Money Back Guarantee*</h5>
             </div>
             
         </div>
     </div>



    <!-- end text banner -->
    <!-- start Most popular course -->
    <div class="container mt-5">
        <h1 class="text-center">Popular Courses</h1>
        <!-- Start Most POP CARD decks -->
        <div class="row row-cols-1 row-cols-md-3 my-3 g-4">

          <div class="col">
           <div class="card">
                <img src="" class="card-img-top" alt="Guitar" srcset="">
                <div class="card-body">
                    <h5 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet c onsectetur adipisicing elit. Sapiente aut repellendus soluta molestias ad doloremque repudiandae aliquid reprehenderit earum quae!</p></div>
                <div class="card-footer">
                        <p class="card-text-d-inline">Price: <small><del>&#8377 2000</del></small><span class="font-weight-bolder">&#8377 200</span></p>
                        <a href="#" class="btn btn-danger text-white font-weight-bolder float-right">Enroll</a>
                  </div>
                
            </div>
          </div>
          <div class="col">
           <div class="card">
                <img src="" class="card-img-top" alt="Guitar" srcset="">
                <div class="card-body">
                    <h5 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet c onsectetur adipisicing elit. Sapiente aut repellendus soluta molestias ad doloremque repudiandae aliquid reprehenderit earum quae!</p></div>
                <div class="card-footer">
                        <p class="card-text-d-inline">Price: <small><del>&#8377 2000</del></small><span class="font-weight-bolder">&#8377 200</span></p>
                        <a href="#" class="btn btn-danger text-white font-weight-bolder float-right">Enroll</a>
                  </div>
                
            </div>
          </div>
          <div class="col">
           <div class="card">
                <img src="" class="card-img-top" alt="Guitar" srcset="">
                <div class="card-body">
                    <h5 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet c onsectetur adipisicing elit. Sapiente aut repellendus soluta molestias ad doloremque repudiandae aliquid reprehenderit earum quae!</p></div>
                <div class="card-footer">
                        <p class="card-text-d-inline">Price: <small><del>&#8377 2000</del></small><span class="font-weight-bolder">&#8377 200</span></p>
                        <a href="#" class="btn btn-danger text-white font-weight-bolder float-right">Enroll</a>
                  </div>
                
            </div>
          </div>

        </div>
        <!-- end Most POP CARD decks -->
        <!-- card deck 2 -->
        <div class="row row-cols-1 row-cols-md-3 my-3 g-4">

          <div class="col">
           <div class="card">
                <img src="" class="card-img-top" alt="Guitar" srcset="">
                <div class="card-body">
                    <h5 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet c onsectetur adipisicing elit. Sapiente aut repellendus soluta molestias ad doloremque repudiandae aliquid reprehenderit earum quae!</p></div>
                <div class="card-footer">
                        <p class="card-text-d-inline">Price: <small><del>&#8377 2000</del></small><span class="font-weight-bolder">&#8377 200</span></p>
                        <a href="#" class="btn btn-danger text-white font-weight-bolder float-right">Enroll</a>
                  </div>
                
            </div>
          </div>
          <div class="col">
           <div class="card">
                <img src="" class="card-img-top" alt="Guitar" srcset="">
                <div class="card-body">
                    <h5 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet c onsectetur adipisicing elit. Sapiente aut repellendus soluta molestias ad doloremque repudiandae aliquid reprehenderit earum quae!</p></div>
                <div class="card-footer">
                        <p class="card-text-d-inline">Price: <small><del>&#8377 2000</del></small><span class="font-weight-bolder">&#8377 200</span></p>
                        <a href="#" class="btn btn-danger text-white font-weight-bolder float-right">Enroll</a>
                  </div>
                
            </div>
          </div>
          <div class="col">
           <div class="card">
                <img src="" class="card-img-top" alt="Guitar" srcset="">
                <div class="card-body">
                    <h5 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet c onsectetur adipisicing elit. Sapiente aut repellendus soluta molestias ad doloremque repudiandae aliquid reprehenderit earum quae!</p></div>
                <div class="card-footer">
                        <p class="card-text-d-inline">Price: <small><del>&#8377 2000</del></small><span class="font-weight-bolder">&#8377 200</span></p>
                        <a href="#" class="btn btn-danger text-white font-weight-bolder float-right">Enroll</a>
                  </div>
                
            </div>
          </div>

        </div>
        
        
        <!-- card deck 2 ends -->
        <div class="text-center m-2">
            <a href="" class="btn btn-success btn-sm">View ALL COURSES</a>
        </div>
    </div>
    <!-- end Most popular course -->

    <!-- ContactUS Start -->
    <?php 
    
    include('./contact.php');
    
    ?>
    

    <!-- COntact US End -->
    <!-- Social Site Starts -->

     <div class="container-fluid bg-success ">
         <div class="row text-white text-center p-1">
             <div class="col-sm">
                 <a href="" class="text-white social-hover"><i class="fab fa-facebook"></i>&nbsp;&nbsp;Facebook</a>
             </div>
             <div class="col-sm">
                 <a href="" class="text-white social-hover"><i class="fab fa-twitter"></i>&nbsp;&nbsp;Twitter</a>
             </div>
             <div class="col-sm">
                 <a href="" class="text-white social-hover"><i class="fab fa-whatsapp"></i>&nbsp;&nbsp;Whatsapp</a>
             </div>
             <div class="col-sm">
                 <a href="" class="text-white social-hover"><i class="fab fa-instagram"></i>&nbsp;&nbsp;Instagram</a>
             </div>
             
             
         </div>
     </div>
    <!-- Social site end -->
    <!-- about section start -->
    <div class="container-fluid p-4" style="background-color: #E9ECEF;">
    <div class="container" style="background-color: #E9ECEF;">
    <div class="row text-center">
      <div class="col-sm">
        <h5>About US</h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat quis id sunt veritatis? Quibusdam sint nihil aspernatur ducimus ratione cupiditate totam quia id qui esse?</p>
      </div>
      <div class="col-sm">
        <h5>Category</h5>
        <a href="" class="text-dark">Web Development</a><br>
        <a href="" class="text-dark">Web Designing</a><br>
        <a href="" class="text-dark">Android App Development</a><br>
        <a href="" class="text-dark">iOS Development</a><br>
        <a href="" class="text-dark">Data Analysis</a>
      </div>
      <div class="col-sm">
        <h5>Contact US</h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel temporibus numquam beatae nam amet assumenda?</p>
      </div>
    </div>

  
  
  </div>
  
  
  
  </div>
    <!-- about section end -->
    <!-- including footer starts  -->
    <?php 
  include('./footer.php')
  ?>  
  <!-- including footer ends  -->