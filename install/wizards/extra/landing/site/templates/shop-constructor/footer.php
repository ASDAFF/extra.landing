<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);?>
	</div><!-- .page-box-content -->
</div><!-- .page-box -->

<footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row sidebar">
		<aside class="col-xs-12 col-sm-6 col-md-3 widget social">
			<?$APPLICATION->IncludeFile(SITE_DIR . "include/follow_us_socnet.php", Array(), Array("MODE"=>"html"));?>
		  <div class="clearfix"></div>
        </aside>

		<aside class="col-xs-12 col-sm-6 col-md-3 widget newsletter">
			<?$APPLICATION->IncludeFile(SITE_DIR . "include/newsletter.php", Array(), Array("MODE"=>"html"));?>
		</aside><!-- .newsletter -->
		
		<aside class="col-xs-12 col-sm-6 col-md-3 widget links">
			<?$APPLICATION->IncludeFile(SITE_DIR . "include/information.php", Array(), Array("MODE"=>"html"));?>
        </aside>
		
		<aside class="col-xs-12 col-sm-6 col-md-3 widget links">
			<?$APPLICATION->IncludeFile(SITE_DIR . "include/my_account.php", Array(), Array("MODE"=>"html"));?>
        </aside>
      </div>
    </div>
  </div><!-- .footer-top -->
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="copyright col-xs-12 col-sm-3 col-md-3">
		  <?$APPLICATION->IncludeFile(SITE_DIR . "include/copyright.php", Array(), Array("MODE"=>"html"));?>, <?echo date('Y');?>
		</div>
		
        <div class="phone col-xs-6 col-sm-3 col-md-3">
          <div class="footer-icon">
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve">
			  <path fill="#c6c6c6" d="M11.001,0H5C3.896,0,3,0.896,3,2c0,0.273,0,11.727,0,12c0,1.104,0.896,2,2,2h6c1.104,0,2-0.896,2-2
			   c0-0.273,0-11.727,0-12C13.001,0.896,12.105,0,11.001,0z M8,15c-0.552,0-1-0.447-1-1s0.448-1,1-1s1,0.447,1,1S8.553,15,8,15z
				M11.001,12H5V2h6V12z"></path>
			</svg>
		  </div>
          <strong class="title"><?=GetMessage("CALL_US");?>:</strong> <?$APPLICATION->IncludeFile(SITE_DIR . "include/phone.php", Array(), Array("MODE"=>"html"));?> <br>
          <strong><?=GetMessage("OR");?></strong> <?$APPLICATION->IncludeFile(SITE_DIR . "include/phone2.php", Array(), Array("MODE"=>"html"));?>
        </div>
		
        <div class="address col-xs-6 col-sm-3 col-md-3">
          <div class="footer-icon">
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve">
			  <g>
				<g>
				  <path fill="#c6c6c6" d="M8,16c-0.256,0-0.512-0.098-0.707-0.293C7.077,15.491,2,10.364,2,6c0-3.309,2.691-6,6-6
					c3.309,0,6,2.691,6,6c0,4.364-5.077,9.491-5.293,9.707C8.512,15.902,8.256,16,8,16z M8,2C5.795,2,4,3.794,4,6
					c0,2.496,2.459,5.799,4,7.536c1.541-1.737,4-5.04,4-7.536C12.001,3.794,10.206,2,8,2z"></path>
				</g>
				<g>
				  <circle fill="#c6c6c6" cx="8.001" cy="6" r="2"></circle>
				</g>
			  </g>
			</svg>
		  </div>
		  <?$APPLICATION->IncludeFile(SITE_DIR . "include/address.php", Array(), Array("MODE"=>"html"));?>
        </div>
		
        <div class="col-xs-12 col-sm-3 col-md-3">
          <a href="#" class="up">
			<span class="glyphicon glyphicon-arrow-up"></span>
		  </a>
        </div>
      </div>
    </div>
  </div><!-- .footer-bottom -->
</footer>
<div class="clearfix"></div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/bootstrap.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/price-regulator/jshashtable-2.1_src.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/price-regulator/jquery.numberformatter-1.2.3.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/price-regulator/tmpl.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/price-regulator/jquery.dependClass-0.1.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/price-regulator/draggable-0.1.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/price-regulator/jquery.slider.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.carouFredSel-6.2.1-packed.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.touchSwipe.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.elevateZoom-3.0.8.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.imagesloaded.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.appear.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.sparkline.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.easypiechart.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.easing.1.3.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.fancybox.pack.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/isotope.pkgd.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.knob.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.stellar.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.selectBox.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.royalslider.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.tubular.1.0.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/SmoothScroll.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/country.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/spin.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/ladda.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/masonry.pkgd.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/morris.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/raphael.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/video.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/pixastic.custom.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/livicons-1.3.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/layerslider/greensock.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/layerslider/layerslider.transitions.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/layerslider/layerslider.kreaturamedia.jquery.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/revolution/jquery.themepunch.plugins.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/revolution/jquery.themepunch.revolution.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/bootstrapValidator.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/bootstrap-datepicker.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/jplayer/jquery.jplayer.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/jplayer/jplayer.playlist.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.scrollbar.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/main.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('a[href^="#hash"]').bind('click.smoothscroll',function (e) {
        e.preventDefault();

        var target = this.hash,
        $target = $(target);

        $('html, body').stop().animate({
            'scrollTop': $target.offset().top-($('ul').height()+ 100)  
        }, 900, 'swing', function () {
            window.location.hash = target;
        });
    });

});
</script>
</body>
</html>