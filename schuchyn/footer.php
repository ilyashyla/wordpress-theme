	<div class="bg-footer">
        <div class="block block-footer">
            <div class="menu">
                <a href="<?php echo get_site_url(); ?>" class="active">Галоўная</a>
                <a href="<?php echo get_site_url(); ?>/news/">Навіны</a>
                <a href="<?php echo get_site_url(); ?>/news/history/">Гісторыя</a>
                <a href="<?php echo get_site_url(); ?>/news/culture/">Культура</a>
                <a href="<?php echo get_site_url(); ?>/news/sport/">Спорт</a>
                <a href="<?php echo get_site_url(); ?>/contact/">Кантакт</a>
            </div>
            <div class="social-networks">
                <a href="https://vk.com/schuchyn_eu" class="vk" target="_blank"></a>
                <a href="https://www.facebook.com/schuchyn.eu" class="fb" target="_blank"></a>
                <a href="https://twitter.com/schuchyneu" class="tw" target="_blank"></a>
                <a href="http://ok.ru/profile/578521760263" class="ok" target="_blank"></a>
            </div>
            <div class="copyright">
                Перадрукоўка дазваляецца толькі пры выкарыстанні гіперспасылкі на schuchyn.eu
                © 2015<?php if(date('Y') != '2015'){ echo '-'.date('Y'); } ?> «schuchyn.eu»
            </div>
            <div class="ili4">
                Дызайн і распрацоўка: <a href="mailto:ilya.shyla@gmail.com">Ільля Шыла</a>
            </div>
            <div class="logo">
                <a href="<?php get_site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-bottom.png" alt=""></a>
            </div>
        </div>
    </div>
<?php wp_footer(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-61530802-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>