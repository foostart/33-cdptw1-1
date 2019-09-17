  <?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
        <div class="type-i-22">
            <div class="container">
            	<div class="row">
            		<div class="col-md-6">
            			<h2>
            				DBPOWER T20 1500 Lumens LCD Projector
            			</h2>
            			<div class="info-af-title">
            				<div class="star">
            					<i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
            				</div>
            				<div class="rv">
            					<a href="#">1 Review</a>
            				</div>
            				<div class="sku">
            					SKU: <span>MB017</span>
            				</div>
            			</div>
            		</div>
            		<div class="col-md-6">
                        <div id="owl-demo" class="owl-carousel">
                			<div class="logo">
                				<div class="fb">
                					<a href="#"><i class="fab fa-facebook-f"></i></a>
                				</div>
                				<div class="twitter">
                					<a href="#"><i class="fab fa-twitter"></i></a>
                				</div>
                				<div class="gplus">
                					<a href="#"><i class="fab fa-google-plus-g"></i></a>
                				</div>
                				<div class="rss">
                					<a href="#"><i class="fas fa-rss"></i></a>
                				</div>
                			</div>
                        </div>
            		</div>
            	</div>
            </div>
        </div>
    
