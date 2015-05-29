<?php get_header(); ?>
<div class="block block-news block-category">
	<header class="page-header">
		<h1 class="page-title"><?php echo get_cat_name($cat); ?></h1>
	</header>
    <div class="content">
		<?php $_aNews = GetPostFromCategory($cat,10); ?>
		<?php for($_iCount=1;$_iCount<=10;$_iCount++):?>
			<?php if(isset($_aNews[$_iCount])):?>
				<div class="item<?php if(strlen($_aNews[$_iCount]['imageUrl']) == 0){ echo ' item-without-image'; } ?>">
					<h1><a href="<?php echo $_aNews[$_iCount]['link']; ?>"><?php echo $_aNews[$_iCount]['title']; ?></a></h1>
					<div class="info"><?php echo $_aNews[$_iCount]['date']; ?>, аўтар: <strong><?php echo $_aNews[$_iCount]['author']; ?></strong></div>
					<?php if(strlen($_aNews[$_iCount]['imageUrl']) > 0):?><div class="image"><img src="<?php echo $_aNews[$_iCount]['imageUrl']; ?>" alt="<?php echo $_aNews[$_iCount]['title']; ?>"></div><?php endif; ?>
					<div class="text">
						<?php echo $_aNews[$_iCount]['excerpt']; ?>
					</div>
					<div class="tags">
						<?php foreach($_aNews[$_iCount]['tags'] as $_aTag):?>
						<a href="<?php echo get_tag_link($_aTag->term_id); ?>"><?php echo $_aTag->name; ?></a>
						<?php endforeach; ?>
					</div>
				</div>
			<?php endif; ?>
		<?php endfor; ?>
		<?php $_iTotal = getTotalPostFromCategory($cat); ?>
		<?php if($_iTotal == 0):?>
		<div class="item">
			<div class="item-empty-category">
				Выбачайце, пакуль у катэгорыі няма артыкулаў
			</div>
		</div>
		<?php endif; ?>
		<?php if($_iTotal > 10): ?>
		<div id="show-more-container"></div>
		<div class="item item-show-more" id="show-more">
			<a href="#">Больш навінаў</a>
		</div>
		<div class="item item-show-more" id="ajax-loader">
			<img src="<?php echo get_template_directory_uri(); ?>/images/ajax-loader.gif" alt="">
		</div>
		<script type="text/javascript">
			$(document).ready(function(){
				var nextPage = 1;
				$('.item-show-more a').click(function(event){
					event.preventDefault();
					$('#show-more').hide();
					$('#ajax-loader').show();
					var perPage = 5;  
					var totalPosts = <?php echo $_iTotal; ?>;
					var url = '<?php echo get_template_directory_uri(); ?>/ajax.php';
					$.ajax({
					   type: "POST",
					   url: url,
					   data: "action=showmore&perpage="+perPage+"&cat=<?php echo $cat; ?>&next="+nextPage,
					   success: function(msg){
							$('#ajax-loader').hide();
							var oldHtml = $('#show-more-container').html();
							$('#show-more-container').html(oldHtml + msg);
							nextPage++;	
							if(nextPage * perPage + 5 < totalPosts){
								$('#show-more').show();
							}
					   }
					 });
				});
			});
		</script>
		<?php endif; ?>
	</div>
	 <div class="sidebar">
            <div class="weather top-of-month">
                <div class="title"><label>Топ за месяц</label></div>
                <div class="informer">
					<?php get_sidebar(); ?>
                </div>
            </div>
            <div class="sidebar-menu">
                <a href="<?php get_site_url();?>/news/history/">Гісторыя</a>
                <a href="<?php get_site_url();?>/news/culture/">Культура</a>
                <a href="<?php get_site_url();?>/news/sport/">Спорт</a>
            </div>
            <div class="weather">
                <div class="title"><label>Надвор’е</label></div>
                <div class="informer">
					<!-- Gismeteo informer START -->
					<link rel="stylesheet" type="text/css" href="http://www.gismeteo.by/static/css/informer2/gs_informerClient.min.css">
					<div id="gsInformerID-sjPjib71kR6n45" class="gsInformer" style="width:280px;height:225px">
					  <div class="gsIContent">
					   <div id="cityLink">
						 <a href="http://www.gismeteo.by/weather-schuchin-4245/" target="_blank">Погода в Щучине</a>
					   </div>
					   <div class="gsLinks">
						 <table>
						   <tr>
							 <td>
							   <div class="leftCol">
								 <a href="http://www.gismeteo.by" target="_blank">
								   <img alt="Gismeteo" title="Gismeteo" src="http://www.gismeteo.by/static/images/informer2/logo-mini2.png" align="absmiddle" border="0" />
								   <span>Gismeteo</span>
								 </a>
							   </div>
							   <div class="rightCol">
								 <a href="http://www.gismeteo.by/weather-schuchin-4245/14-days/" target="_blank">Прогноз на 2 недели</a>
							   </div>
							   </td>
							</tr>
						  </table>
						</div>
					  </div>
					</div>
					<script src="http://www.gismeteo.by/ajax/getInformer/?hash=sjPjib71kR6n45" type="text/javascript"></script>
					<!-- Gismeteo informer END -->
				</div>
            </div>
            <div class="weather exchange">
                <div class="title"><label>Курсы валют</label></div>
                <div class="informer">
				<a href="http://www.obmennik.by" target=_blank title="Курс валют в обменниках Беларуси"> <img src="http://www.obmennik.by/images/kurs/bestkurs300x1551.png" width="300" height="155" border="0" alt="Лучший курс обмена в банках Беларуси"></a>
				</div>
			</div>
            <div class="sidebar-block">
                [ месца пад банэры і плагіны з facebook/vk.com ]
            </div>
        </div>
    </div>

<?php get_footer(); ?>