<div class="item item-node">
    <h1><?php the_title(); ?></h1>
    <div class="info"><?php the_date(); ?>, аўтар: <strong><?php the_author(); ?></strong></div>
	<?php $_aTags = wp_get_post_tags(get_the_ID()); ?>
	<div class="tags">
		<?php foreach($_aTags as $_aTag):?>
			<a href="<?php echo get_tag_link($_aTag->term_id); ?>"><?php echo $_aTag->name; ?></a>
		<?php endforeach; ?>
	</div>
	<?php $_sImage = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>
    <?php if(strlen($_sImage) > 0):?><div class="image"><img src="<?php echo $_sImage; ?>" alt="<?php the_title(); ?>"></div><?php endif; ?>
    <div class="text">
		<?php the_content(); ?>
    </div>
    <div class="share-with-friends">
        <div class="title">РАСПАВЕСЬЦІ СЯБРАМ</div>
        <div class="content">
			<div class="vk-like">
				<div id="vk_like"></div>
				<script type="text/javascript">
				VK.Widgets.Like("vk_like", {type: "mini", height: 20});
				</script>
			</div>
			<div class="fb-like">
				<div class="fb-like" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
			</div>
			<div class="tw-like">
				<a href="https://twitter.com/share" class="twitter-share-button" data-lang="ru" data-hashtags="salihorsk">Твитнуть</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			</div>
			<div class="ok-like">
				<div id="ok_shareWidget"></div>
				<script>
				!function (d, id, did, st) {
				  var js = d.createElement("script");
				  js.src = "http://connect.ok.ru/connect.js";
				  js.onload = js.onreadystatechange = function () {
				  if (!this.readyState || this.readyState == "loaded" || this.readyState == "complete") {
					if (!this.executed) {
					  this.executed = true;
					  setTimeout(function () {
						OK.CONNECT.insertShareWidget(id,did,st);
					  }, 0);
					}
				  }};
				  d.documentElement.appendChild(js);
				}(document,"ok_shareWidget",document.URL,"{width:170,height:30,st:'oval',sz:20,ck:3}");
				</script>
			</div>
		</div>
    </div>
    <div class="comments">
        <div class="title">КАМЕНТАВАЦЬ</div>
        <div class="content">
			<div id="disqus_thread"></div>
			<script type="text/javascript">
				/* * * CONFIGURATION VARIABLES * * */
				var disqus_shortname = 'schuchynschuchyn';
				
				/* * * DON'T EDIT BELOW THIS LINE * * */
				(function() {
					var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
					dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
					(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
				})();
			</script>
			<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
		</div>
    </div>
</div>