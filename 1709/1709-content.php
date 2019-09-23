<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1782">
    <div class="container">
        <div class="row item">
			<ul class="tabs"> 
				<li class="active col-xs-3 col-md-3 col-sm-3" rel="tab1"> All</li>
				<li class="col-xs-3 col-md-3 col-sm-3" rel="tab3"> Laptops</li>
				<li class="col-xs-3 col-md-3 col-sm-3" rel="tab4"> Phones</li>
				<li class="col-xs-3 col-md-3 col-sm-3" rel="tab5"> Tablets</li>
			</ul>
			<div class="tab_container col-xs-12">
				<div id="tab1" class="tab_content"> 
					<div class="col-md-4 col-sm-12 col-xs-12 collection_img">
						<img class="img-responsive" src="http://<?php echo $url_path ?>/image/coll_desktops_medium.png" alt="Desktops">
					</div>
					<div class="col-md-8 col-sm-12 col-xs-12 collection_desc">
						<div class="rte">
							<p>We’re sure that no one could stay indifferent because everybody wants to get professionally made up product and pay a fair price for that.So, it is natural that this sphere is one of the most popular and it is really hard to offer computer hardware because of great number of competitors. We are providing a great choice of different commodities. We are producing reliable and durable goods.</p>
							<p>That is why we are always in touch with the latest new inventions and improvements. There is no doubt that we are the leaders and you don’t have to worry about our reputation because it is perfect.&nbsp; We’re sure that no one could stay indifferent because everybody wants to get professionally made up product and pay a fair price for that.</p>
						</div>
					</div>
				</div>
				<div id="tab3" class="tab_content">
					<div class="col-md-4 collection_img">
						<img class="img-responsive" src="http://<?php echo $url_path ?>/image/laptop.png" alt="Laptops">
					</div>
					<div class="col-md-8 collection_desc">
						<div class="rte">
							<p>We’re sure that no one could stay indifferent because everybody wants to get professionally made up product and pay a fair price for that.So, it is natural that this sphere is one of the most popular and it is really hard to offer computer hardware because of great number of competitors. We are providing a great choice of different commodities. We are producing reliable and durable goods.</p>
							<p>That is why we are always in touch with the latest new inventions and improvements. There is no doubt that we are the leaders and you don’t have to worry about our reputation because it is perfect.&nbsp; We’re sure that no one could stay indifferent because everybody wants to get professionally made up product and pay a fair price for that.</p>
						</div>
					</div>
				</div>
				<div id="tab4" class="tab_content">
					<div class="col-md-4 collection_img">
						<img class="img-responsive" src="http://<?php echo $url_path ?>/image/phone.png" alt="Phones">
					</div>
					<div class="col-md-8 collection_desc">
						<div class="rte">
							<p>We’re sure that no one could stay indifferent because everybody wants to get professionally made up product and pay a fair price for that.So, it is natural that this sphere is one of the most popular and it is really hard to offer computer hardware because of great number of competitors. We are providing a great choice of different commodities. We are producing reliable and durable goods.</p>
							<p>That is why we are always in touch with the latest new inventions and improvements. There is no doubt that we are the leaders and you don’t have to worry about our reputation because it is perfect.&nbsp; We’re sure that no one could stay indifferent because everybody wants to get professionally made up product and pay a fair price for that.</p>
						</div>
					</div>
				</div>
				<div id="tab5" class="tab_content">
					<div class="col-md-4 collection_img">
						<img class="img-responsive" src="http://<?php echo $url_path ?>/image/table.png" alt="Tablets">
					</div>
					<div class="col-md-8 collection_desc">
						<div class="rte">
						   <p>We’re sure that no one could stay indifferent because everybody wants to get professionally made up product and pay a fair price for that.So, it is natural that this sphere is one of the most popular and it is really hard to offer computer hardware because of great number of competitors. We are providing a great choice of different commodities. We are producing reliable and durable goods.</p>
							<p class="t2">That is why we are always in touch with the latest new inventions and improvements. There is no doubt that we are the leaders and you don’t have to worry about our reputation because it is perfect.&nbsp; We’re sure that no one could stay indifferent because everybody wants to get professionally made up product and pay a fair price for that.</p>
						</div>
					</div>
				</div>
			</div>        
        </div>
    </div>
</div>
