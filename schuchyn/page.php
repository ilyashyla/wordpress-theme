<?php get_header(); ?>
    <div class="block block-news block-category">
        <div class="content">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', 'page' ); ?>
		<?php endwhile; // end of the loop. ?>
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