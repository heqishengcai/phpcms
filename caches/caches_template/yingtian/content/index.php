<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<section class="LayoutMiddle pagewidth">
    <div class="Control Slideshow Control_178">
        <div style="width: 918px; height: 268px; overflow: hidden;" class="Slider Slider_178">
            <ul style="width: 4590px; margin-left: -1836px;" class="SlideList SlideList_178">
                <li style="width: 918px; height: 268px; margin-left: -918px; float: left;" class="ControlItem Slide ControlItem_178"><a href="#" class="ControlLink ControlLink_178" target="_blank"><img src="<?php echo IMG_PATH;?>yingtian/banner_4.jpg" alt="" title="" border="0" height="268" width="918"></a></li>
                <li style="width: 918px; height: 268px; float: left;" class="ControlItem Slide ControlItem_178"><a href="#" class="ControlLink ControlLink_178" target="_blank"><img src="<?php echo IMG_PATH;?>yingtian/banner_1.jpg" alt="" title="" border="0" height="268" width="918"></a></li>
                <li style="width: 918px; height: 268px; float: left;" class="ControlItem Slide ControlItem_178"><a href="#" class="ControlLink ControlLink_178" target="_blank"><img src="<?php echo IMG_PATH;?>yingtian/banner_2.jpg" alt="" title="" border="0" height="268" width="918"></a></li>
                <li style="width: 918px; height: 268px; float: left;" class="ControlItem Slide ControlItem_178 CurrentSlide"><a href="#" class="ControlLink ControlLink_178" target="_blank"><img src="<?php echo IMG_PATH;?>yingtian/banner_3.jpg" alt="" title="" border="0" height="268" width="918"></a></li>
                <li style="width: 918px; height: 268px; float: left;" class="ControlItem Slide ControlItem_178"><a href="#" class="ControlLink ControlLink_178" target="_blank"><img src="<?php echo IMG_PATH;?>yingtian/banner_4.jpg" alt="" title="" border="0" height="268" width="918"></a></li>
                <li style="width: 918px; height: 268px; float: left;" class="ControlItem Slide ControlItem_178"><a href="#" class="ControlLink ControlLink_178" target="_blank"><img src="<?php echo IMG_PATH;?>yingtian/banner_1.jpg" alt="" title="" border="0" height="268" width="918"></a></li>
            </ul>
        </div>
        <!--                    <ol id="SlideshowButtons" class="SlideshowButtons SlideshowButtons_178">
                                <li class="SlideshowButton SlideshowButton_178" id="SlideshowButton_178_1">
                                    <a rel="0" href="javascript:void(0);" class="SlideshowButtonLink SlideshowButtonLink_178">1</a>
                                </li>
                                <li class="SlideshowButton SlideshowButton_178" id="SlideshowButton_178_2">
                                    <a rel="1" href="javascript:void(0);" class="SlideshowButtonLink SlideshowButtonLink_178">2</a>
                                </li>
                                <li class="SlideshowButton SlideshowButton_178" id="SlideshowButton_178_3">
                                    <a rel="2" href="javascript:void(0);" class="SlideshowButtonLink SlideshowButtonLink_178 SlideshowButtonLinkCurrent SlideshowButtonLinkCurrent_178">3</a>
                                </li>
                                <li class="SlideshowButton SlideshowButton_178" id="SlideshowButton_178_4">
                                    <a rel="3" href="javascript:void(0);" class="SlideshowButtonLink SlideshowButtonLink_178">4</a>
                                </li>
                            </ol>-->
    </div>
    <div style="clear:both;"></div>
    <script type="text/javascript">
        $(document).ready(function () {
            $("div.slideshow").after("<div style='clear: both;'></div>");
            $('.Slider_178').easySlider({auto: true, continuous: true, vertical: false, numeric: true, responsive: false, arrowsandnumbers: false, themeLayoutControlID: 178, slideWidth: '918px', slideHeight: '268px', speed: 1000, pause: 6000});
        });</script>
    <style>
        .LayoutMiddle { top:-50px }
    </style>

    <section class="LayoutContent">
        <div itemscope="" itemtype="http://schema.org/Product" class="LayoutContentInner">
            <div id="ctl28_dvControl" class="Control ProductDisplay Control_181">
                <div id="ctl28_dvControlHeader" class="ControlHeader ControlHeader_181">Recommended</div>

                <table id="ctl28_dlItems" style="width:100%;border-collapse:collapse;" border="0" cellspacing="0">
                    <tbody>
                        <tr>
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=7ef7dac58eb4e7875e94b9be2bf8720b&action=position&posid=20&order=listorder+DESC&num=3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'20','order'=>'listorder DESC','limit'=>'3',));}?>
                            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                            <td class="ControlItem" style="border-width:0px;height:0px;width:33.33333%;">
                                <div id="ctl28_dlItems_ctl00_dvControlItem" class="ControlItem ControlItem_181">      
                                    <div class="FeaturedItemsItem">
                                        <div class="FeaturedItemsThumbNail FeaturedItemsThumbNail_181">
                                            <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><img id="ctl28_dlItems_ctl00_iThumbnail" class="FeaturedItemsThumbNail FeaturedItemsThumbNail_181" src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>" style="border-width:0px;" height="122" width="178"></a>
                                        </div>
                                        <div class="FeaturedItemsPriceTab">
                                            <div class="FeaturedItemsName">
                                                <a id="ctl28_dlItems_ctl00_hlProductName" class="ControlLink ControlLink_181" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo $r['title'];?></a></div>
                                            <div class="FeaturedItemsPrice">
                                                <span id="ctl28_dlItems_ctl00_ltrPrice">
                                                    <span id="lblSalePriceArea_181_8218" class="lblSalePriceArea">
                                                        <span id="lblSalePrice_181_8218" class="lblSalePrice"><?php echo $r['Price'];?></span>                                                           
                                                    </span>      
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <?php $n++;}unset($n); ?>
                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                        </tr>
                    </tbody>
                </table>
            </div>


            <div id="ctl29_dvControl" class="Control Carousel Control_750 Carousel_750">
                <div id="ctl29_dvControlHeader" class="ControlHeader ControlHeader_750">Featured Items:</div>

                <table class="CarouselContainer" style="margin-top:10px;" align="center" cellpadding="0" cellspacing="0">
                    <tbody>
                        <tr>
                            <td valign="middle">
                                <div id="ctl29_lvCarousel_dvCarouselPrevButton" class="CarouselPrevButton CarouselPrevButton_750">
                                    <img id="ctl29_lvCarousel_imgPrev" class="CarouselPrevButtonImage Hidden" src="<?php echo IMG_PATH;?>yingtian/carousel-prev-horizontal.png" style="border-width:0px;"/>
                                    <img id="ctl29_lvCarousel_imgPrevDisabled" class="CarouselPrevButtonDisabledImage" src="<?php echo IMG_PATH;?>yingtian/carousel-prev-disabled-horizontal.png" style="border-width:0px;"/>
                                </div>
                            </td>
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=530ba187416676b2594f7f89b4042da9&action=position&posid=21&order=listorder+DESC&num=10\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'21','order'=>'listorder DESC','limit'=>'10',));}?>
                            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                            <td class="CarouselItem">
                                <div id="ctl29_lvCarousel_ctrl0_dvControlItem" class="ControlItem ControlItem_750">
                                    <table style="border:0; width: 100%;" cellpadding="0" cellspacing="0">
                                        <tbody>
                                            <tr>
                                                <td style="text-align: center; height: 100px; width: 140px;" valign="center"><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><img id="ctl29_lvCarousel_ctrl0_iThumbnail" class="FeaturedItemsThumbnail" src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>" style="border-width:0px;" height="100" width="135"></a></td>
                                            </tr>
                                            <tr>

                                                <td style="text-align: center;">
                                                    <div id="ctl29_lvCarousel_ctrl0_pnlProductName" class="ControlLink ControlLink_750">
                                                        <a id="ctl29_lvCarousel_ctrl0_lnkProductName" href=<?php echo $r['url'];?>"><?php echo $r['title'];?></a>
                                                    </div>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td style="text-align: center;">
                                                    <div class="FeaturedItemsRating"></div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </td>
                            <?php $n++;}unset($n); ?>
                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                            <td valign="middle">
                                <div id="ctl29_lvCarousel_dvCarouselNextButton" class="CarouselNextButton CarouselNextButton_750">
                                    <img id="ctl29_lvCarousel_imgNext" class="CarouselNextButtonImage" src="<?php echo IMG_PATH;?>yingtian/carousel-next-horizontal.png" style="border-width:0px;"/>
                                    <img id="ctl29_lvCarousel_imgNextDisabled" class="CarouselNextButtonDisabledImage Hidden" src="<?php echo IMG_PATH;?>yingtian/carousel-next-disabled-horizontal.png" style="border-width:0px;"/>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>




            <div class="Control Control_2464">
                <table class="centerTable" style="text-align: center;" width="820;">
                    <tbody>
                        <tr>
                            <td>
                                <div id="header2" style="text-align: left;">&nbsp; Events</div>
                            </td>
                            <td style="text-align: center;">&nbsp;</td>
                            <td>
                                <div id="header2" style="text-align: left;">&nbsp; News</div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="Control Control_2459"><br>
                <table class="centerTable"><tbody><tr><td style="background-color: rgb(242, 242, 242);"> 
                                <div style="width: 395px; height: 250px; overflow: auto; padding: 5px; border: 1px;">
                                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=8d10340c673a6791b47f3ef8bbdd58ee&sql=SELECT+%2A+from+v9_news+where+status%3D99+and+catid+in%2823%2C24%2C25%2C26%2C27%29+order+by+id+DESC&num=7&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * from v9_news where status=99 and catid in(23,24,25,26,27) order by id DESC LIMIT 7");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
                                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                                    <p><b style="line-height: 2em;"><?php echo date('Y-m-d',$r[inputtime]);?></b> - <a href="<?php echo $r['url'];?>" title="$r['title']"><?php echo str_cut($r['title'],100);?></a></p>
                                    <?php $n++;}unset($n); ?>
                                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                                </div>
                            </td><td style="width: 10px;"><font color="#ffffff">df</font></td>
                            <td style="width: 410px;">
                                <a href="http://demo.cmsyou.com/blacken/contact/"><img src="<?php echo IMG_PATH;?>yingtian/service.jpg" width="410px;"></a><br>
                                <p>Unique services for our users: We provide pro-sale, on-sale and 
                                    post-sale integrated services.And foreign cooperators will enjoy the 
                                    service of "integral process" and "all-arrangement" supplied by our 
                                    professional and dedicated members.</p><br>            <hr>
                                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=19fd0f9ebafc3c0fc1f02ca0a6fc97de&sql=SELECT+%2A+from+v9_news+where+status%3D99+and+catid+in%2823%2C24%2C25%2C26%2C27%29+order+by+id+DESC&num=5&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * from v9_news where status=99 and catid in(23,24,25,26,27) order by id DESC LIMIT 5");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
                                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                                <p><a href="<?php echo $r['url'];?>" title="$r['title']"><?php echo str_cut($r['title'],100);?></a></p>
                                <?php $n++;}unset($n); ?>
                                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                            </td></tr></tbody></table></div>
        </div>
        <div style="clear:both"></div>
    </section>
</section>
<?php include template("content","footer"); ?>