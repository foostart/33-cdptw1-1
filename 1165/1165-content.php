<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1165">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<h2>
					DBPOWER T20 1500 Lumens LCD Projector
				</h2>
				<div class="info-af-title">
					<div class="star">
					<i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>
					</div>
					<div class="rv">
						<a href="#">1 Review</a>
					</div>
					<div class="sku">
						SKU: <span>MB017</span>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="logo">
					<div class="fb">
						<a href="#"><i class="fa fa-facebook"></i></a>
					</div>
					<div class="twitter">
						<a href="#"><i class="fa fa-twitter"></i></a>
					</div>
					<div class="gplus">
						<a href="#"><i class="fa fa-google-plus"></i></a>
					</div>
					<div class="rss">
						<a href="#"><i class="fa fa-rss"></i></a>
					</div>	
				</div>
			</div>
		</div>
	</div>
</div>