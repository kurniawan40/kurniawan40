<?php
/*
| -------------------------------------------------------------------------------
| Author            : G-silvers
| Template Name     : G-silver V13
| -------------------------------------------------------------------------------
*/
$owl = true;
include('header.php');?>
	<div id="main">
		<div id="player">
			<span class="player-cover"></span>
			<div class="container">
				<div id="video">
					<div id="video-player" class="embed-responsive embed-responsive-16by9 video pointer nocontext">
						<video id="videoPlayer" class="embed-responsive-item" preload="none" poster="<?php echo $images;?>">
							<p>Your browser doesn't support HTML5 video</p>
						</video>

								<div id="progressContainer">
									<span id="progress-bar" class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></span>
								</div>
								<div id="rightControls" class="pull-right">
									<div id="sliderContainer">
<div id="slider" class="ui-slider ui-slider-vertical ui-widget ui-widget-content ui-corner-all">
	<div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="height: 50%;"></div>
	<span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="bottom: 50%;"></span>
</div>
									</div>
									<div id="setting_btn" class="btn-group dropup">
<button name="Setting" class="btn icon-settings dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	<span class="glyphicon glyphicon-hd-video"></span>
</button>
<ul class="dropdown-menu dropdown-menu-right">
	<li class="hq active">HD 1080p</li>
	<li class="hq">HD 720p</li>
</ul>
									</div>
									<button id="fullscreen_btn" name="Fullscreen" class="btn icon-size-fullscreen pull-right"></button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

						</a>
					</div>
				</div>
			</div>
			<div class="container" itemscope itemtype="https://schema.org/Movie">
				<div class="row">
                  <article id="post-400710" class="post col-md-8">
						<ol class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
							<li class="home" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
								<span itemprop="name">
									<a itemprop="item" href="<?php echo site_uri() ?>">
<span class="icon-home"></span>
									</a>
								</span>
							</li>
							<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
								<span itemprop="name">
									<a itemprop="item" href="<?php echo site_uri() ?>/movie/">Movie</a>
								</span>
							</li>
							<li class="active"><?php echo $title;?></li>
						</ol>
						<header class="entry-header">
							<h1 class="entry-title">
								<span itemprop="name"><?php echo $title;?> (<?php echo $year;?>) </span>
							</h1>
							<meta itemprop="datePublished" content="<?php echo $release_date;?>">
								<div itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">
									<meta itemprop="worstRating" content="1">
<meta itemprop="bestRating" content="10">
	<meta itemprop="ratingValue" content="4.7">
		<meta itemprop="ratingCount" content="9">
		</div>
		<meta property="og:image" itemprop="image" content="<?php echo $images;?>">
		</header>
		<div class="entry-content">
			<div class="row">
				<div class="col-md-3 text-center">
					<img src="<?php echo $images_small;?>" alt="<?php echo $title;?>" width="500" height="750" class="img-responsive inblock main-poster">
					<div class="rating-star" title="<?php echo $get_rating;?> out of 10 stars" itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating"><?php for($k=1;$k<=$get_rating;$k++){?><i class="fa fa-star"></i><?php }?><?php for($i=$emp_rating;$i>=1;$i--){?><i class="fa fa-star-o"></i><?php $k++; } ?><div class="movie-rating"><span itemprop="ratingValue"><?php echo $get_rating;?></span>/<span itemprop="bestRating">10</span> by <span itemprop="ratingCount"><?php echo $vote_count;?></span> users</div>
                            </div>
					</div>
					<div class="col-md-9">
						<p class="lead" itemprop="description"><?php echo $row['overview'];?></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<ul class="nav nav-tabs" role="tablist">
							<li class="active">
								<a data-toggle="tab" href="#details">Details</a>
							</li>
							<li>
								<a data-toggle="tab" href="#casts">Casts</a>
							</li>
							<li class="nomobile">
								<a data-toggle="tab" href="#posters">Posters</a>
							</li>
							<li class="nomobile">
								<a data-toggle="tab" href="#images">Images</a>
							</li>
						</ul>
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane fade active in" id="details">
								<table class="table table-condensed table-bordered table-hover">
									<tr>
<th>Title</th>
<td>
	<strong><?php echo $title;?></strong>
</td>
									</tr>
<tr>
<th>Subtitle Available</th>
<td>
    <img src="https://vignette.wikia.nocookie.net/clubpenguin/images/4/41/South_Korea_flag_clothing_icon_ID_513.png" width="27" alt="south-korea.png">
    <img src="<?php style_theme();?>/flags/france.png" width="27" alt="france.png">
    <img src="<?php style_theme();?>/flags/Germany.png" width="29" alt="Germany.png">
    <img src="<?php style_theme();?>/flags/italy.png" width="27" alt="italy.png">
    <img src="<?php style_theme();?>/flags/espain.png" width="29" alt="espain.png">
    <img src="<?php style_theme();?>/flags/belanda.png" width="27" alt="belanda.png">
    <img src="<?php style_theme();?>/flags/portugal.png" width="27" alt="portugal.png">
    <img src="<?php style_theme();?>/flags/hungaria.png" width="27" alt="hungaria.png">  ETC.
</td>
</tr>
									<tr>
<th>Release Date</th>
<td>
<?php echo date('M d, Y', strtotime($release_date));?>
</td>
									</tr>
									<tr>
<th>Genres</th>
<td>
	<span itemprop="genre"><?php echo $genre;?></span>, 
</td>
									</tr>
									<tr>
<th>Production Company</th>
<td>
	<span itemprop="creator" itemscope itemtype="https://schema.org/Person">
		<span itemprop="name"><?php echo $companies;?></span>
	</span>
</td>
									</tr>
									<tr>
<th>Production Countries</th>
<td>
	<span itemprop="creator" itemscope itemtype="https://schema.org/Person">
		<span itemprop="name"><?php echo $country;?></span>
	</span>
</td>
									</tr>
									<tr>
<th>Casts</th>
<td>
	<span itemprop="creator" itemscope itemtype="https://schema.org/Person">
		<span itemprop="name"><?php echo $cast;?></span>
	</span>
</td>
									</tr>
									<tr <?php echo $keywords == '' ? 'hidden' : '' ?>>
<th>Plot Keywords</th>
<td>
	<span itemprop="keywords"><?php echo $keywords;?></span>, 
</td>
									</tr>
								</table>
							</div>
							
										<div role="tabpanel" class="tab-pane fade" id="casts">
				<div class="row">
				<?php 
                                if (is_array($row['credits'][cast])) {
                                foreach($row['credits'][cast] as $castrow) :
     	     	                        if ($castrow['profile_path']!=null)
     	     	                        {
             	     	                        $profile_path = 'https://image.tmdb.org/t/p/w45' . $castrow['profile_path'];
     	     	                        } else {
             	     	                        $profile_path = site_theme().'/images/no-cover.png';
     	     	                        }
                                        ?>
					<div class="col-md-6 col-sm-6 cast-list" itemprop="actors" itemscope itemtype="https://schema.org/Person">
						<div class="media">
							<div class="media-left">
								<img src="<?php echo $profile_path;?>" width="45" height="68" alt="<?php echo $castrow['character'];?>" />
							</div>
							<div class="media-body">
								<div class="media-heading">
									<strong>
										<span itemprop="name"><?php echo $castrow['character'];?></span>
									</strong>
								</div>
								<i><?php echo $castrow['name'];?></i>
							</div>
						</div>
					</div>
					<?php 
                                        endforeach;
                                }
                                ?>
					
				</div>
			</div>

							<div role="tabpanel" class="tab-pane fade" id="posters">
				<div class="row">
				<?php 
                                if (is_array($row['images'][posters])) {
                                        foreach($row['images'][posters] as $poster_row) :
     	     	                        if ($poster_row['file_path']!=null)
     	     	                        {
             	     	                        $file_path = 'https://image.tmdb.org/t/p/w300' . $poster_row['file_path'];
     	     	                        } else {
             	     	                        $file_path = site_theme().'/images/no-cover.png';
     	     	                        }
                                        ?>
					<div class="col-md-6 col-sm-6 cast-list" itemprop="actors" itemscope itemtype="https://schema.org/Person">
						<div class="media">
							<div class="media-left">
								<img src="<?php echo $file_path;?>" width="300" height="450" alt="<Images posters" />
							</div>
						</div>
					</div>
					<?php 
                                        endforeach;
                                }
                                ?>
					
				</div>
			</div>
			
			<div role="tabpanel" class="tab-pane fade" id="images">
				<div class="row">
				<?php 
                                if (is_array($row['images'][backdrops])) {
                                        foreach($row['images'][backdrops] as $backdrops_row) :
     	     	                        if ($backdrops_row['file_path']!=null)
     	     	                        {
             	     	                        $file_path = 'https://image.tmdb.org/t/p/w300' . $backdrops_row['file_path'];
     	     	                        } else {
             	     	                        $file_path = site_theme().'/images/no-backdrop.png';
     	     	                        }
                                        ?>
					<div class="col-md-6 col-sm-6 col-xs-6 col-img-height" itemprop="actors" itemscope itemtype="https://schema.org/Person">
						<div class="media">
							<div class="media-left">
								<img src="<?php echo $file_path;?>" width="300" height="169" alt="Images posters">
							</div>
						</div>
					</div>
					<?php 
                                        endforeach;
                                }
                                ?>
					
				</div>
			</div>
			<div id="button-offer">
				<div class="container">
					<div class="text-center">
                       </span> Promoted Content
			<div id="button-offer">
				<div class="container">
					<div class="text-center">
						<a class="btn btn-offer btn-lg btn-watch" href="<?php echo site_url() ?>/?action=register&sub_id=<?php echo '' . htmlspecialchars($_GET["sub_id"]) . ''; ?>">
							<span class="btn-bg">
								<span class="icon icon-control-play"></span>
							</span> Access to your favorite movies!
        </a>
			<footer class="entry-footer">
				<button class="btn btn-xs btn-default" data-toggle="modal" data-target="#dmca-modal">
					<span class="icon-flag"></span> Report this page
				</button>
			</footer>
		</article>

					</div>
				</aside>
			</div>
	</div>
</div>
	</div>
	<div id="dmca-modal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form id="dmca-form" method="POST" action="<?php echo view_page( 'dmca-notice' );?>">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&timtimes;</button>
						<h3 class="text-center">
							<strong>DMCA Notice</strong>
						</h3>
					</div>
					<div class="modal-body">
						<div class="input-group">
							<span class="input-group-addon" id="sizing-addon1">
								<span class="icon-user"></span>
							</span>
							<input type="text" class="form-control required" name="dmca-name" placeholder="Real Name" aria-describedby="sizing-addon1" required>
							</div>
							<div class="input-group">
								<span class="input-group-addon" id="sizing-addon2">
									<span class="icon-envelope"></span>
								</span>
								<input type="text" class="form-control required" name="dmca-email" placeholder="Valid Email Address" aria-describedby="sizing-addon2" required>
								</div>
								<div class="input-group">
									<span class="input-group-addon" id="sizing-addon3">
<span class="icon-link"></span>
									</span>
									<input type="text" class="form-control noselect" name="dmca-url" value="<?php echo seo_movie($row['id'],$row['title']);?>" readonly>
<input type="hidden" name="dmca-type" value="movie">
	<input type="hidden" name="dmca-id" value="400710">
	</div>
	<div class="input-group">
		<textarea class="form-control required" name="dmca-claim" rows="5" placeholder="Claim..." required></textarea>
	</div>
	<div class="input-group">
		<div class="checkbox">
			<label>
				<input class="required" type="checkbox" name="dmca-agree" required> I have read and agree with 
					<strong>Privacy</strong> and 
					<strong>DMCA Policy</strong>
				</label>
			</div>
		</div>
	</div>
	<div class="modal-footer">
		<div class="pull-right">
			<button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Cancel</button>
			<button class="btn btn-primary" name="dmca-submit" type="submit">Submit</button>
		</div>
	</div>
</form>
									</div>
								</div>
							</div>
						</div>
						<footer id="site-footer">
							<div class="container">
								<div class="row">
									<div class="site-links col-md-12 text-center">
<ul>
					<li>
						<a href="<?php echo view_page( 'privacy-policy' );?>">Privacy</a>
					</li>
					<li>
						<a href="<?php echo view_page( 'dmca-notice' );?>">DMCA Policy</a>
					</li>
					<li>
						<a href="<?php echo view_page( 'contact-us' );?>">Contact</a>
					</li>
					<li>
						<a href="<?php echo site_url() ?>/sitemap.xml">Sitemap</a>
					</li>
				</ul>
									</div>
									<div class="site-credit col-md-12 text-center"> &copy;<?php echo date('Y') ?>
				<a href="<?php echo site_url() ?>"><?php echo config('sitename') ?></a> - All rights reserved. 
			</div>
			<div class="site-note col-md-12 text-center">Disclaimer: All of the free movies found on this website are hosted on third-party servers that are freely available to watch online on <?php echo config('sitename') ?> for all internet users. Any legal issues regarding the free online movies on this website should be taken up with the actual file hosts themselves. <?php echo config('sitename') ?> is not responsible for the accuracy, compliance, copyright, legality, decency, or any other aspect of the content of other linked sites. In case of any copyright claims, Please contact the source websites directly file owners or host sites.
By accessing this site you agree to be bound by our Privacy Policy.</div>
			<div id="counter" data-min="12234" data-max="12733">
				<span class="globe">
					<span class="fa fa-globe"></span>
				</span>
				<span class="counter-value"><script type="text/javascript"> document.write(Math.floor(Math.random()*12733)); </script></span> Users Online
			</div>
		</div>
	</div>
						</footer>
						<script type="text/javascript" src="//code.jquery.com/jquery-2.2.0.min.js" defer></script>
						<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" defer></script>
						<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js" defer></script>
						<script type="text/javascript" src="<?php style_theme();?>/js/scripts.min.js" defer></script>
						<?php echo histats_write() ?>
					</body>
				</html>