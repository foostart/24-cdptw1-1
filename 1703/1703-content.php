 <?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1673-introduce" id="type-1673-show-popup">
   <div class="type-1673-popup-introduce">
      <div class="row">
         <div class="col-md-7 col-sm-12 col-xs-12">
            <div class="type-1673-title-popup">
               <h3 class="type-1673-popup-sale">Get <span>25%</span> Discount</h3>
            </div>
            <div class="type-1673-popup-info">
               <p class="type-1673-popup-content">Subscribe to the Martfury mailing list to receive updates on new arrivals, special offers and our promotions.</p>
               <form action="#" method="post" class="type-1673-popup-contact">
                  <input type="email" name="email" id="email" class="type-1673-popup-email" placeholder="Enter your email address">
                  <br>
                  <button type="submit" class="type-1673-popup-btn">Subscribe</button>
               </form>
               <div class="type-1673-select-not-show-popup">
                  <input type="checkbox" id="notcheck">
                  <label class="type-1673-label-not-show" for="notcheck">Don’t show this popup</label>
               </div>
            </div>
         </div>
         <div class="col-md-5 col-sm-12 col-xs-12">
            
         </div>
      </div>
      <div class="type-1673-close-popup">
         <i id="close-popup" class="fa fa-times" aria-hidden="true"></i>
      </div>
   </div>
</div>