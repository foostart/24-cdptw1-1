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
                        <img src="images/2.jpg" alt="Beat Spill 2.0 Wireless Speaker - White"/>
                     </div>
                     <div class="product-btn row">
                        <div class="product-list">
                           <div class="col-md-3 col-sm-3 col-xs-3">
                              <a href="#"><i class="fas fa-cart-plus"></i></a>
                           </div>
                           <div class="col-md-3 col-sm-3 col-xs-3">
                              <a href="#"><i class="far fa-eye"></i></a>
                           </div>
                           <div class="col-md-3 col-sm-3 col-xs-3">
                              <a href="#"><i class="far fa-heart"></i></a>
                           </div>
                           <div class="col-md-3 col-sm-3 col-xs-3">
                              <a href="#"><i class="far fa-chart-bar"></i></a>
                           </div>
                        </div>
                     </div>
                     <h3 class="product-item1">
                        <a href="#" alt="Beat Spill 2.0 Wireless Speaker - White">Beat Spill 2.0 Wireless Speaker - White</a>
                     </h3>
                     <div class="far-item">
                        <div style="display: -webkit-inline-flex; align-items: center;">
                           <span class="my-rating-9"></span>
                           <span class="live-rating"></span>
                       </div>
                     </div>
                     <div class="price">
                        <span>$150.00</span>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="block">
                     <div class="image">
                        <img src="images/4.jpg" alt="Samsung Gear VR Virtual Reality Headset"/>
                        <span class="discount-percent">-11%</span>
                     </div>
                     <div class="product-btn row">
                        <div class="product-list">
                           <div class="col-md-3 col-sm-3 col-xs-3">
                              <a href="#"><i class="fas fa-cart-plus"></i></a>
                           </div>
                           <div class="col-md-3 col-sm-3 col-xs-3">
                              <a href="#"><i class="far fa-eye"></i></a>
                           </div>
                           <div class="col-md-3 col-sm-3 col-xs-3">
                              <a href="#"><i class="far fa-heart"></i></a>
                           </div>
                           <div class="col-md-3 col-sm-3 col-xs-3">
                              <a href="#"><i class="far fa-chart-bar"></i></a>
                           </div>
                        </div>
                     </div>
                     <h3 class="product-item1">
                        <a href="#" alt="Samsung Gear VR Virtual Reality Headset">Samsung Gear VR Virtual Reality Headset</a>
                     </h3>
                     <div class="far-item">
                        <div style="display: -webkit-inline-flex; align-items: center;">
                           <span class="my-rating-9"></span>
                           <span class="live-rating"></span>
                       </div>
                     </div>
                     <div class="price">
                        <span>$150.00</span>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="block">
                     <div class="image">
                        <img src="images/3.jpg" alt="ASUS Chromebook Flip - 10.2 Inch"/>
                     </div>
                     <div class="product-btn row">
                        <div class="product-list">
                           <div class="col-md-3 col-sm-3 col-xs-3">
                              <a href="#"><i class="fas fa-cart-plus"></i></a>
                           </div>
                           <div class="col-md-3 col-sm-3 col-xs-3">
                              <a href="#"><i class="far fa-eye"></i></a>
                           </div>
                           <div class="col-md-3 col-sm-3 col-xs-3">
                              <a href="#"><i class="far fa-heart"></i></a>
                           </div>
                           <div class="col-md-3 col-sm-3 col-xs-3">
                              <a href="#"><i class="far fa-chart-bar"></i></a>
                           </div>
                        </div>
                     </div>
                     <h3 class="product-item1">
                        <a href="#" alt="ASUS Chromebook Flip - 10.2 Inch">ASUS Chromebook Flip - 10.2 Inch</a>
                     </h3>
                     <div class="far-item">
                        <div style="display: -webkit-inline-flex; align-items: center;">
                           <span class="my-rating-9"></span>
                           <span class="live-rating"></span>
                       </div>
                     </div>
                     <div class="price">
                        <span>$150.00</span>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="block">
                     <div class="image">
                        <img src="images/44a.jpg" alt="Apple iPhone Retina 6s Plus 64GB"/>
                        <span class="discount-percent">-20%</span>
                     </div>
                     <div class="product-btn row">
                        <div class="product-list">
                           <div class="col-md-3 col-sm-3 col-xs-3">
                              <a href="#"><i class="fas fa-cart-plus"></i></a>
                           </div>
                           <div class="col-md-3 col-sm-3 col-xs-3">
                              <a href="#"><i class="far fa-eye"></i></a>
                           </div>
                           <div class="col-md-3 col-sm-3 col-xs-3">
                              <a href="#"><i class="far fa-heart"></i></a>
                           </div>
                           <div class="col-md-3 col-sm-3 col-xs-3">
                              <a href="#"><i class="far fa-chart-bar"></i></a>
                           </div>
                        </div>
                     </div>
                     <h3 class="product-item1">
                        <a href="#" alt="Apple iPhone Retina 6s Plus 64GB">Apple iPhone Retina 6s Plus 64GB</a>
                     </h3>
                     <div class="far-item">
                        <div style="display: -webkit-inline-flex; align-items: center;">
                           <span class="my-rating-9"></span>
                           <span class="live-rating"></span>
                       </div>
                     </div>
                     <div class="price">
                        <span>$150.00</span>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="block">
                     <div class="image">
                        <img src="images/5.jpg" alt="Apple Macbook Display 12 Inch"/>
                     </div>
                     <div class="product-btn row">
                        <div class="product-list">
                           <div class="col-md-3 col-sm-3 col-xs-3">
                              <a href="#"><i class="fas fa-cart-plus"></i></a>
                           </div>
                           <div class="col-md-3 col-sm-3 col-xs-3">
                              <a href="#"><i class="far fa-eye"></i></a>
                           </div>
                           <div class="col-md-3 col-sm-3 col-xs-3">
                              <a href="#"><i class="far fa-heart"></i></a>
                           </div>
                           <div class="col-md-3 col-sm-3 col-xs-3">
                              <a href="#"><i class="far fa-chart-bar"></i></a>
                           </div>
                        </div>
                     </div>
                     <h3 class="product-item1">
                        <a href="#" alt="Apple Macbook Display 12 Inch">Apple Macbook Display 12 Inch</a>
                     </h3>
                     <div class="far-item">
                        <div style="display: -webkit-inline-flex; align-items: center;">
                           <span class="my-rating-9"></span>
                           <span class="live-rating"></span>
                       </div>
                     </div>
                     <div class="price">
                        <span>$150.00</span>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="block">
                     <div class="image">
                        <img src="images/6.jpg" alt="Xbox One Wireless Controller"/>
                     </div>
                     <div class="product-btn row">
                        <div class="product-list">
                           <div class="col-md-3 col-sm-3 col-xs-3">
                              <a href="#"><i class="fas fa-cart-plus"></i></a>
                           </div>
                           <div class="col-md-3 col-sm-3 col-xs-3">
                              <a href="#"><i class="far fa-eye"></i></a>
                           </div>
                           <div class="col-md-3 col-sm-3 col-xs-3">
                              <a href="#"><i class="far fa-heart"></i></a>
                           </div>
                           <div class="col-md-3 col-sm-3 col-xs-3">
                              <a href="#"><i class="far fa-chart-bar"></i></a>
                           </div>
                        </div>
                     </div>
                     <h3 class="product-item1">
                        <a href="#" attr="Xbox One Wireless Controller">Xbox One Wireless Controller</a>
                     </h3>
                     <div class="far-item">
                        <div style="display: -webkit-inline-flex; align-items: center;">
                           <span class="my-rating-9"></span>
                           <span class="live-rating"></span>
                       </div>
                     </div>
                     <div class="price">
                        <span>$150.00</span>
                     </div>
                  </div>
               </div>
            </div>
            <div class="swiper-pagination"></div>
         </div>
         <div class="swipper-btn">
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
         </div>
      </div>
   </div>
</div>