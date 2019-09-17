 <?php
 $url_host = 'http://'.$_SERVER['HTTP_HOST'];
 $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
 $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

 preg_match_all($pattern_uri, __DIR__, $matches);
 $url_path = $url_host . $matches[1][0];
 $url_path = str_replace('\\', '/', $url_path);
 ?>

 <div class="type-739">
   <div class="container">
      <div class="block-main-product">
         <div class="title">
            <a href="#">Home Electronics</a>
         </div>
         <div class="block-product"> 
            <a href="#"> Smart TV </a>
            <a href="#"> LED TVs </a>
            <a href="#"> Air Conditions </a>
            <a href="#"> LG Washing Machines</a>
         </div>
      </div>
   </div>
   <div class="banner">
      <div class="container">
         <div class="swiper-container">
            <div class="swiper-wrapper">
               <div class="swiper-slide">
                  <div class="block">
                     <div class="image">
                        <img src="images/2.jpg" alt=""/>
                     </div>
                     <div class="product-btn row">
                        <div class="product-list">
                           <div class="col-md-3">
                              <a href="#"><i class="fas fa-cart-plus"></i></a>
                           </div>
                           <div class="col-md-3">
                              <a href="#"><i class="far fa-eye"></i></a>
                           </div>
                           <div class="col-md-3">
                              <a href="#"><i class="far fa-heart"></i></a>
                           </div>
                           <div class="col-md-3">
                              <a href="#"><i class="far fa-chart-bar"></i></a>
                           </div>
                        </div>
                     </div>
                     <h3 class="product-item1">
                        <a href="#">Beat Spill 2.0 Wireless Speaker - White</a>
                     </h3>
                     <div class="far-item">
                        <p>
                           <i class="fa fa-star" aria-hidden="true"></i>
                           <i class="fa fa-star" aria-hidden="true"></i>
                           <i class="fa fa-star" aria-hidden="true"></i>
                           <i class="fa fa-star" aria-hidden="true"></i>
                           <i class="far fa-star"></i>
                           <span>5</span>
                        </p>
                     </div>
                     <div class="price">
                        <span>$150.00</span>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="block">
                     <div class="image">
                        <img src="images/4.jpg" alt=""/>
                        <span class="discount-percent">-11%</span>
                     </div>
                     <div class="product-btn row">
                        <div class="product-list">
                           <div class="col-md-3">
                              <a href="#"><i class="fas fa-cart-plus"></i></a>
                           </div>
                           <div class="col-md-3">
                              <a href="#"><i class="far fa-eye"></i></a>
                           </div>
                           <div class="col-md-3">
                              <a href="#"><i class="far fa-heart"></i></a>
                           </div>
                           <div class="col-md-3">
                              <a href="#"><i class="far fa-chart-bar"></i></a>
                           </div>
                        </div>
                     </div>
                     <h3 class="product-item1">
                        <a href="#">Samsung Gear VR Virtual Reality Headset</a>
                     </h3>
                     <div class="far-item">
                        <p>
                           <i class="fa fa-star" aria-hidden="true"></i>
                           <i class="fa fa-star" aria-hidden="true"></i>
                           <i class="fa fa-star" aria-hidden="true"></i>
                           <i class="far fa-star"></i>
                           <i class="far fa-star"></i>
                           <span>3</span>
                        </p>
                     </div>
                     <div class="price">
                        <span>$150.00</span>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="block">
                     <div class="image">
                        <img src="images/3.jpg" alt=""/>
                     </div>
                     <div class="product-btn row">
                        <div class="product-list">
                           <div class="col-md-3">
                              <a href="#"><i class="fas fa-cart-plus"></i></a>
                           </div>
                           <div class="col-md-3">
                              <a href="#"><i class="far fa-eye"></i></a>
                           </div>
                           <div class="col-md-3">
                              <a href="#"><i class="far fa-heart"></i></a>
                           </div>
                           <div class="col-md-3">
                              <a href="#"><i class="far fa-chart-bar"></i></a>
                           </div>
                        </div>
                     </div>
                     <h3 class="product-item1">
                        <a href="#">ASUS Chromebook Flip - 10.2 Inch</a>
                     </h3>
                     <div class="far-item">
                        <p>
                           <i class="fa fa-star" aria-hidden="true"></i>
                           <i class="fa fa-star" aria-hidden="true"></i>
                           <i class="fa fa-star" aria-hidden="true"></i>
                           <i class="fa fa-star" aria-hidden="true"></i>
                           <i class="fa fa-star" aria-hidden="true"></i>
                           <span> 1 </span>
                        </p>
                     </div>
                     <div class="price">
                        <span>$150.00</span>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="block">
                     <div class="image">
                        <img src="images/44a.jpg" alt=""/>
                        <span class="discount-percent">-20%</span>
                     </div>
                     <div class="product-btn row">
                        <div class="product-list">
                           <div class="col-md-3">
                              <a href="#"><i class="fas fa-cart-plus"></i></a>
                           </div>
                           <div class="col-md-3">
                              <a href="#"><i class="far fa-eye"></i></a>
                           </div>
                           <div class="col-md-3">
                              <a href="#"><i class="far fa-heart"></i></a>
                           </div>
                           <div class="col-md-3">
                              <a href="#"><i class="far fa-chart-bar"></i></a>
                           </div>
                        </div>
                     </div>
                     <h3 class="product-item1">
                        <a href="#">Apple iPhone Retina 6s Plus 64GB</a>
                     </h3>
                     <div class="far-item">
                        <p>
                           <i class="fa fa-star" aria-hidden="true"></i>
                           <i class="fa fa-star" aria-hidden="true"></i>
                           <i class="fa fa-star" aria-hidden="true"></i>
                           <i class="fa fa-star" aria-hidden="true"></i>
                           <i class="fa fa-star" aria-hidden="true"></i>
                           <span> 1 </span>
                        </p>
                     </div>
                     <div class="price">
                        <span>$150.00</span>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="block">
                     <div class="image">
                        <img src="images/5.jpg" alt=""/>
                     </div>
                     <div class="product-btn row">
                        <div class="product-list">
                           <div class="col-md-3">
                              <a href="#"><i class="fas fa-cart-plus"></i></a>
                           </div>
                           <div class="col-md-3">
                              <a href="#"><i class="far fa-eye"></i></a>
                           </div>
                           <div class="col-md-3">
                              <a href="#"><i class="far fa-heart"></i></a>
                           </div>
                           <div class="col-md-3">
                              <a href="#"><i class="far fa-chart-bar"></i></a>
                           </div>
                        </div>
                     </div>
                     <h3 class="product-item1">
                        <a href="#">Apple Macbook Display 12 Inch</a>
                     </h3>
                     <div class="far-item">
                        <p>
                           <i class="fa fa-star" aria-hidden="true"></i>
                           <i class="fa fa-star" aria-hidden="true"></i>
                           <i class="fa fa-star" aria-hidden="true"></i>
                           <i class="fa fa-star" aria-hidden="true"></i>
                           <i class="fa fa-star" aria-hidden="true"></i>
                           <span> 1 </span>
                        </p>
                     </div>
                     <div class="price">
                        <span>$150.00</span>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="block">
                     <div class="image">
                        <img src="images/6.jpg" alt=""/>
                     </div>
                     <div class="product-btn row">
                        <div class="product-list">
                           <div class="col-md-3">
                              <a href="#"><i class="fas fa-cart-plus"></i></a>
                           </div>
                           <div class="col-md-3">
                              <a href="#"><i class="far fa-eye"></i></a>
                           </div>
                           <div class="col-md-3">
                              <a href="#"><i class="far fa-heart"></i></a>
                           </div>
                           <div class="col-md-3">
                              <a href="#"><i class="far fa-chart-bar"></i></a>
                           </div>
                        </div>
                     </div>
                     <h3 class="product-item1">
                        <a href="#">Xbox One Wireless Controller</a>
                     </h3>
                     <div class="far-item">
                        <p>
                           <i class="fa fa-star" aria-hidden="true"></i>
                           <i class="fa fa-star" aria-hidden="true"></i>
                           <i class="fa fa-star" aria-hidden="true"></i>
                           <i class="fa fa-star" aria-hidden="true"></i>
                           <i class="fa fa-star" aria-hidden="true"></i>
                           <span> 1 </span>
                        </p>
                     </div>
                     <div class="price">
                        <span>$150.00</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="swipper-btn">
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
         </div>
      </div>
   </div>
</div>