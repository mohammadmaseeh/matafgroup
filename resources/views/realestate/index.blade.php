@extends('realestate.layout')
@section('content')
        <!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W3B7D89"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<div class="vtPopup" style="position:absolute; top:0px; left:0px; width:100%; height:100%; z-index:1000000000000000000000000000; display:none;">
    <div class="vtBg" style="position:absolute; top:0px; left:0px; background:url('{{url('front/realestate/front/realestate/svg/popVirtualBg.png')}}'); width:100%; height:100%;"></div>
    <div style="position:absolute; top:0px; left:0px; margin:0px 0px 0px 0px; width:100%; height:100%;">
        <div style="position:absolute; top:0px; left:0px; width:100%; height:99.5%;"><iframe id="vtFrame" src='#' width='100%' height='100%' frameborder='no'></iframe></div>
        <a href="javascript:;" style="position:absolute; top:30px; right:30px;" class="vtClose"><img src="{{url('front/realestate/svg/closevt.png')}}" border="0"></a>
    </div>
</div>
<div id="galleryContainer"></div>
<div id="scrollBut">
    <div id="butUp"></div>
    <div id="butDown"></div>
</div>
<div id="scrollBar">
    <div class="track">
        <div class="thumb"></div>
    </div>
</div>
<div class="content_toppart">
    <div class="inlogo">
        <a href="">
            <img src="{{url('images/logo.png')}}')}}" border="0" style="width: 150px; margin-top: 25px;">
        </a>
    </div>
    <div class="links" style="display:none;"><a href="http://www.air90suk.info/">Cheap Nike Air Max 90 UK</a><a href="http://www.fireshoestore.com/">Official Adidas NMD R1 Online</a> <a href="http://www.jerseyfanstore.com/">New Nike NBA jersey</a></div>
</div>
<div class="content_homepage">
    <div class="mobilebanners"><div class="myban" id="myban25918"><a href="montana-view/index.html" target="_blank"><img src="{{url('front/realestate/svg/jadetowers1.jpg')}}" border="0" /></a></div>
        <div class="myban"><a href="festive-offers/index.html" target="_blank"><img src="{{url('front/realestate/svg/popup-supertech.jpg')}}" alt="Doon Square" border="0" /></a></div>
        <div class="myban"><a href="supernova-noida/index.html" target="_blank"><img src="{{url('front/realestate/svg/dd0f45de.jpg')}}" alt="Doon Square" border="0" /></a></div>
        <div class="myban"><a href="supertech-doon-square-commercial-property/index.html" target="_blank"><img src="{{url('front/realestate/svg/doonsquare25219.jpg')}}" alt="Doon Square" border="0" /></a></div>
        <div class="myban"><a href="property/Supertech-Capeluxe-Noida/index.html" target="_blank"><img src="{{url('front/realestate/svg/capeluxe25219.jpg')}}" alt="Supertech Capeluxe Noida" border="0" /></a></div>
        <div class="myban"><a href="http://www.northeye.in/luxury-apartments-noida.php" target="_blank"><img src="{{url('front/realestate/svg/northeye25219.jpg')}}" alt="North Eye" border="0" /></a></div>
        <div class="myban"><a href="montana-view/index.html" target="_blank"><img src="{{url('front/realestate/svg/jadetowers1.jpg')}}" alt="Jade Towers" border="0" /></a></div>
        <div class="myban"><a href="javascript:;" target="_blank"><img src="{{url('front/realestate/svg/Golf-Mansion-Ad-01.jpg')}}" alt="Golf Mansion" border="0" /></a></div>
        <div class="myban"><a href="http://supertech-sportsvillage.in/"><img src="{{url('front/realestate/svg/sports-village.jpg')}}" alt="supertech sports village" border="0"></a></div>
        <div class="myban"><a href="http://www.supertech-yay.in/" target="_blank"><img src="{{url('front/realestate/svg/7th-feb-2018.jpg')}}" alt="supertech yay" border="0"></a></div>
        <div class="clear"></div></div>
</div>

<div class="content_residential">
    <div class="res_noida logocontainer">
        <div class="loclabel">Indore</div>
        <a class="hp_sub_logo" href="#">
            <div class="hp_sub_logo_div">
                <img src="{{url('front/realestate/svg/hplogos/logo_northeye.png')}}" border="0">
            </div>
        </a>
        <a class="hp_sub_logo" href="#">
            <div class="hp_sub_logo_div">
                <img src="{{url('front/realestate/svg/hplogos/logo_orb.png')}}" border="0">
            </div>
        </a>
        <a class="hp_sub_logo" href="#">
            <div class="hp_sub_logo_div">
                <img src="{{url('front/realestate/svg/hplogos/logo_supernova.png')}}" border="0">
            </div>
        </a>
        <div class="clear"></div>
    </div>
    <div class="res_gurgaon logocontainer">
        <div class="loclabel" style="margin-top:0px;">Lucknow</div>
        <a class="hp_sub_logo" href="residential/araville-gurgaon/index.html">
            <div class="hp_sub_logo_div">
                <img src="{{url('front/realestate/svg/hplogos/logo_araville.png')}}" border="0">
            </div>
        </a>
        <a class="hp_sub_logo" href="residential/48canvas/index.html">
            <div class="hp_sub_logo_div">
                <img src="{{url('front/realestate/svg/hplogos/logo_48canvas.png')}}" border="0">
            </div>
        </a>
        <a class="hp_sub_logo" href="residential/hues/index.html">
            <div class="hp_sub_logo_div">
                <img src="{{url('front/realestate/svg/hplogos/logo_hues.png')}}" border="0">
            </div>
        </a>
        <div class="clear"></div>
    </div>
</div>
<div class="content_commercial">
    <div class="res_noida logocontainer">
        <div class="loclabel">Indore</div>
        <a class="hp_sub_logo" href="#">
            <div class="hp_sub_logo_div">
                <img src="{{url('front/realestate/svg/hplogos/logo_northeye.png')}}" border="0">
            </div>
        </a>
        <a class="hp_sub_logo" href="#">
            <div class="hp_sub_logo_div">
                <img src="{{url('front/realestate/svg/hplogos/logo_orb.png')}}" border="0">
            </div>
        </a>
        <a class="hp_sub_logo" href="#">
            <div class="hp_sub_logo_div">
                <img src="{{url('front/realestate/svg/hplogos/logo_supernova.png')}}" border="0">
            </div>
        </a>
        <div class="clear"></div>
    </div>
    <div class="res_gurgaon logocontainer">
        <div class="loclabel" style="margin-top:0px;">Lucknow</div>
        <a class="hp_sub_logo" href="residential/araville-gurgaon/index.html">
            <div class="hp_sub_logo_div">
                <img src="{{url('front/realestate/svg/hplogos/logo_araville.png')}}" border="0">
            </div>
        </a>
        <a class="hp_sub_logo" href="residential/48canvas/index.html">
            <div class="hp_sub_logo_div">
                <img src="{{url('front/realestate/svg/hplogos/logo_48canvas.png')}}" border="0">
            </div>
        </a>
        <a class="hp_sub_logo" href="residential/hues/index.html">
            <div class="hp_sub_logo_div">
                <img src="{{url('front/realestate/svg/hplogos/logo_hues.png')}}" border="0">
            </div>
        </a>
        <div class="clear"></div>
    </div>
</div>
<div class="content_completed">
    <div class="comp_res_noida logocontainer">
        <div class="loclabel" style="margin-top:0px;">Residential - Indore</div><div class="links" style="display:none;"> <a href="http://www.fireshoestore.com/">Official Adidas NMD R1 Online</a> <a href="http://www.air90suk.info/">Cheap Nike Air Max 90 UK</a> <a href="http://www.jerseyfanstore.com/">New Nike NBA jersey</a></div>
        <a class="hp_sub_logo" href="residential/34pavilion-noida/index.html">
            <div class="hp_sub_logo_div">
                <img src="{{url('front/realestate/svg/hplogos/logo_34pavilion.png')}}" alt="supertech 34pavilion" border="0">
            </div>
        </a>
        <a class="hp_sub_logo" href="residential/emerald-court-expressway-noida/index.html">
            <div class="hp_sub_logo_div">
                <img src="{{url('front/realestate/svg/hplogos/logo_emerald.png')}}" alt="supertech emerald" border="0">
            </div>
        </a>
        <div class="clear"></div>
    </div>
    <div class="comp_res_noidaextn logocontainer">
        <div class="loclabel" style="margin-top:0px;">Residential - Lucknow</div>
        <a class="hp_sub_logo" href="residential/albaria/index.html">
            <div class="hp_sub_logo_div">
                <img src="{{url('front/realestate/svg/hplogos/logo_albaria.png')}}" alt="supertech albaria" border="0">
            </div>
        </a>
        <div class="clear"></div>
    </div>
    <div class="comp_com_ghaziabad logocontainer">
        <div class="clear"></div>
        <div class="loclabel">Commercial - Indore</div>
        <a class="hp_sub_logo" href="completed-projects/shopprix-mall-vaishali-ghaziabad/index.html">
            <div class="hp_sub_logo_div">
                <img src="{{url('front/realestate/svg/hplogos/logo-shopprix-vaishali.png')}}" alt="shopprix vaishali" border="0">
            </div>
        </a>
        <a class="hp_sub_logo" href="completed-projects/shopprix-mall-kaushambi-ghaziabad/index.html">
            <div class="hp_sub_logo_div">
                <img src="{{url('front/realestate/svg/hplogos/logo-shopprix-kaushambi.png')}}" alt="shopprix kaushambi" border="0">
            </div>
        </a>
        <div class="clear"></div>
    </div>
    <div class="comp_com_noida logocontainer">
        <div class="clear"></div>
        <div class="loclabel">Commercial - Lucknow</div>
        <a class="hp_sub_logo" href="completed-projects/shopprix-mall-noida/index.html">
            <div class="hp_sub_logo_div">
                <img src="{{url('front/realestate/svg/hplogos/logo-shopprix-noida.png')}}" alt="shopprix noida" border="0">
            </div>
        </a>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
</div>
<div class="samresh1" style="display:none;"><div class="app_link1"><a href="https://itunes.apple.com/us/app/supertechlimited/id1056104698?mt=8" target="_blank"><img src="{{url('front/realestate/svg/mobile-icon-white.png')}}" /></a></div></div>
<!--end samresh1-->
<div class="abj1" style="display:none;"><div class="app_link1"><a href="https://play.google.com/store/apps/details?id=com.supertechapp&amp;hl=en" target="_blank"><img src="{{url('front/realestate/svg/mobile-icon-white.png')}}" /></a></div></div>
<!--end abj1-->
<div class="samresh" style=" position:relative; top:0; left:0; z-index:999999; width:100%; padding:20px 10px; box-sizing:border-box; background:#000; display:none; ">
    <div class="close_app"><img src="{{url('front/realestate/svg/app-close.png')}}"/></div>
    <div class="app_logo"><a href=""><img src="{{url('front/realestate/svg/app_logo_new.png')}}" /></a></div>
    <div class="app_logo_content"><h4>MatafGroup</h4>
        <p>Get the MatafGroup App</p><div class="links" style="display:none;"> <a href="http://www.fireshoestore.com/">Official Adidas NMD R1 Online</a> <a href="http://www.jerseyfanstore.com/">New Nike NBA jersey</a> <a href="http://www.air90suk.info/">Cheap Nike Air Max 90 UK</a></div></div>
    <div class="app_link"><a href="https://itunes.apple.com/us/app/supertechlimited/id1056104698?mt=8" target="_blank">Download</a></div>
    <div class="clr"></div>
</div>
<div class="abj" style=" position:relative; top:0; left:0; z-index:999999; width:100%; padding:20px 10px; box-sizing:border-box; background:#000; display:none;">
    <div class="close_app"><img src="{{url('front/realestate/svg/app-close.png')}}"/></div>
    <div class="app_logo"><a href=""><img src="{{url('front/realestate/svg/app_logo_new.png')}}" /></a></div>
    <div class="app_logo_content"><h4>Supertech</h4>
        <p>Get the MatafGroup App</p></div>
    <div class="app_link"><a href="https://play.google.com/store/apps/details?id=com.supertechapp&amp;hl=en" target="_blank">Download</a></div>
    <div class="clr"></div>
</div>
<!--end samresh-->
<div class="content_home">

    <div class="hpbanner">
        <div class="hpbannerpic">
            <div class="hpbannerslider"><div class="myban" id="myban25918"><a href="montana-view/index.html" target="_blank"><img src="{{url('front/realestate/svg/jadetowers1.jpg')}}" border="0" /></a></div>
                <div class="myban"><a href="festive-offers/index.html" target="_blank"><img src="{{url('front/realestate/svg/popup-supertech.jpg')}}" alt="Doon Square" border="0" /></a></div>
                <div class="myban"><a href="supernova-noida/index.html" target="_blank"><img src="{{url('front/realestate/svg/dd0f45de.jpg')}}" alt="Doon Square" border="0" /></a></div>
                <div class="myban"><a href="supertech-doon-square-commercial-property/index.html" target="_blank"><img src="{{url('front/realestate/svg/doonsquare25219.jpg')}}" alt="Doon Square" border="0" /></a></div>
                <div class="myban"><a href="property/Supertech-Capeluxe-Noida/index.html" target="_blank"><img src="{{url('front/realestate/svg/capeluxe25219.jpg')}}" alt="Supertech Capeluxe Noida" border="0" /></a></div>
                <div class="myban"><a href="http://www.northeye.in/luxury-apartments-noida.php" target="_blank"><img src="{{url('front/realestate/svg/northeye25219.jpg')}}" alt="North Eye" border="0" /></a></div>
                <div class="myban"><a href="montana-view/index.html" target="_blank"><img src="{{url('front/realestate/svg/jadetowers1.jpg')}}" alt="Jade Towers" border="0" /></a></div>
                <div class="myban"><a href="javascript:;" target="_blank"><img src="{{url('front/realestate/svg/Golf-Mansion-Ad-01.jpg')}}" alt="Golf Mansion" border="0" /></a></div>
                <div class="myban"><a href="http://supertech-sportsvillage.in/"><img src="{{url('front/realestate/svg/sports-village.jpg')}}" alt="supertech sports village" border="0"></a></div>
                <div class="myban"><a href="http://www.supertech-yay.in/" target="_blank"><img src="{{url('front/realestate/svg/7th-feb-2018.jpg')}}" alt="supertech yay" border="0"></a></div>
                <div class="clear"></div></div>
        </div>
        <div class="hpbannerbut"></div>
        <div class="clear"></div>
        <a href="javascript:;" class="btnBanNext" style="float:right; margin:0px 40px 0px 1px;" ><img src="{{url('front/realestate/svg/hp_ban_next.gif')}}" alt="next" border="0"></a>
        <a href="javascript:;" class="btnBanPre" style="float:right;" ><img src="{{url('front/realestate/svg/hp_ban_pre.gif')}}'" alt="pre" alt="banner"border="0"></a>
    </div>

    <div class="hpboxes">
        <a href="javascript:;" class="hpbxlink" rel="residential">
            <div class="hplk_bg" style="background: darkcyan"></div>
            <div class="hplk_txt">Residential</div>
        </a>
        <a href="javascript:;" class="hpbxlink">
            <div class="hplk_bg" style="background:white"></div>
            <div class="hplk_txt">
                <img src="{{url('images/logo.png')}}" alt="text" border="0" style="width: 100px;">
            </div>
        </a>
        <a href="javascript:;" class="hpbxlink" rel="commercial">
            <div class="hplk_bg" style="background: darkorchid"></div>
            <div class="hplk_txt">Commercial</div>
        </a>
        <a href="javascript:;" class="hpbxlink">
        </a>
        <a href="javascript:;" class="hpbxlink" rel="completed"">
        <div class="hplk_bg" style="background: deeppink"></div>
        <div class="hplk_txt" style="top:50px;">Completed<br>Projects</div>
        </a>
    </div>

</div>
<div class="content_subpage">
    <div class="hpSubPage">
        <div id="subPageRes">
            <div class="hpSubBg"><img src="{{url('front/realestate/svg/screen_hp2.jpg')}}" alt="screen hp" border="0"></div>
            <div class="sub_container">
                <div class="sub_pic">
                    <div class="sub_pic_image"><img src="{{url('front/realestate/svg/pic_res.jpg')}}" alt="residential" border="0"></div>
                </div>
                <div class="sub_content">
                    <div class="sub_title">Residential</div>

                    <div class="sub_links sub_res">
                        <ul>
                            <li><a href="javascript:;" rel="res_indore" class="firstlink">Indore</a></li>
                            <li><a href="javascript:;" rel="res_lucknow">Lucknow</a></li>
                        </ul>
                    </div>

                    <div class="sub_logos">
                        <div class="scroll-pane-home">

                            <div class="res_indore logocontainer">
                                <div class="clear"></div><div class="links" style="display:none;"> <a href="http://www.jerseyfanstore.com/">New Nike NBA jersey</a> <a href="http://www.air90suk.info/">Cheap Nike Air Max 90 UK</a> <a href="http://www.fireshoestore.com/">Official Adidas NMD R1 Online</a></div>
                                <div class="loclabel">Indore</div>
                                <a class="hp_sub_logo" href="residential/northeye-noida/index.html">
                                    <div class="hp_sub_logo_div">
                                        <img src="{{url('front/realestate/svg/hplogos/logo_northeye.png')}}" border="0">
                                    </div>
                                </a>
                                <a class="hp_sub_logo" href="residential/orbhomes-noida/index.html">
                                    <div class="hp_sub_logo_div">
                                        <img src="{{url('front/realestate/svg/hplogos/logo_orb.png')}}" border="0">
                                    </div>
                                </a>
                                <a class="hp_sub_logo" href="residential/supernova-noida/index.html">
                                    <div class="hp_sub_logo_div">
                                        <img src="{{url('front/realestate/svg/hplogos/logo_supernova.png')}}" border="0">
                                    </div>
                                </a>
                                <a class="hp_sub_logo" href="residential/cape-town-noida/index.html">
                                    <div class="hp_sub_logo_div">
                                        <img src="{{url('front/realestate/svg/hplogos/logo_capetown.png')}}" border="0">
                                    </div>
                                </a>
                                <a class="hp_sub_logo" href="residential/ecociti-expressway-noida/index.html">
                                    <div class="hp_sub_logo_div">
                                        <img src="{{url('front/realestate/svg/hplogos/logo_ecociti.png')}}" border="0">
                                    </div>
                                </a>
                                <a class="hp_sub_logo" href="residential/the-romano/index.html">
                                    <div class="hp_sub_logo_div">
                                        <img src="{{url('front/realestate/svg/hplogos/logo_theromano.png')}}" border="0">
                                    </div>
                                </a>
                                <a class="hp_sub_logo" href="residential/emerald-court-expressway-noida/index.html">
                                    <div class="hp_sub_logo_div">
                                        <img src="{{url('front/realestate/svg/hplogos/logo_emerald.png')}}" border="0">
                                    </div>
                                </a>
                                <a class="hp_sub_logo" href="residential/apex-tower-expressway-noida/index.html">
                                    <div class="hp_sub_logo_div">
                                        <img src="{{url('front/realestate/svg/hplogos/logo_apex.png')}}" border="0">
                                    </div>
                                </a>
                                <a class="hp_sub_logo" href="residential/ceyane-tower-tajexpressway-noida/index.html">
                                    <div class="hp_sub_logo_div">
                                        <img src="{{url('front/realestate/svg/hplogos/logo_ceyan.png')}}" border="0">
                                    </div>
                                </a>
                                <a class="hp_sub_logo" href="residential/34pavilion-noida/index.html">
                                    <div class="hp_sub_logo_div">
                                        <img src="{{url('front/realestate/svg/hplogos/logo_34pavilion.png')}}" border="0">
                                    </div>
                                </a>
                                <!--<a class="hp_sub_logo" href="residential/ritz-chateaux-noida/index.php">
                                    <div class="hp_sub_logo_div">
                                        <img src="https://www.supertechlimited.com/front/realestate/svg/hplogos/logo_ritz.png')}}" border="0">
                                    </div>
                                </a>-->







                                <div class="clear"></div>
                            </div>
                            <div class="res_lucknow logocontainer">
                                <div class="loclabel" style="margin-top:0px;">Lucknow</div>
                                <a class="hp_sub_logo" href="residential/araville-gurgaon/index.html">
                                    <div class="hp_sub_logo_div">
                                        <img src="{{url('front/realestate/svg/hplogos/logo_araville.png')}}" border="0">
                                    </div>
                                </a>
                                <a class="hp_sub_logo" href="residential/48canvas/index.html">
                                    <div class="hp_sub_logo_div">
                                        <img src="{{url('front/realestate/svg/hplogos/logo_48canvas.png')}}" border="0">
                                    </div>
                                </a>
                                <a class="hp_sub_logo" href="residential/hues/index.html">
                                    <div class="hp_sub_logo_div">
                                        <img src="{{url('front/realestate/svg/hplogos/logo_hues.png')}}" border="0">
                                    </div>
                                </a>
                                <a class="hp_sub_logo" href="residential/basera/index.html">
                                    <div class="hp_sub_logo_div">
                                        <img src="{{url('front/realestate/svg/hplogos/logo_basera.png')}}" border="0">
                                    </div>
                                </a>
                                <a class="hp_sub_logo" href="residential/aadri/index.html">
                                    <div class="hp_sub_logo_div">
                                        <img src="{{url('front/realestate/svg/hplogos/logo_aadri.png')}}" border="0">
                                    </div>
                                </a>
                                <a class="hp_sub_logo" href="residential/hilltown-gurgaon/index.html">
                                    <div class="hp_sub_logo_div">
                                        <img src="{{url('front/realestate/svg/hplogos/logo-hilltown.png')}}" border="0">
                                    </div>
                                </a>

                                <a class="hp_sub_logo" href="residential/hill-crest-gurgaon/index.html">
                                    <div class="hp_sub_logo_div">
                                        <img src="{{url('front/realestate/svg/hplogos/logo-hillcrest.png')}}" border="0">
                                    </div>
                                </a>
                                <a class="hp_sub_logo" href="residential/officers-enclave-gurgaon/index.html">
                                    <div class="hp_sub_logo_div">
                                        <img src="{{url('front/realestate/svg/hplogos/logo_officers-enclve.png')}}" border="0">
                                    </div>
                                </a>
                                <a class="hp_sub_logo" href="residential/azalia-gurgaon/index.html">
                                    <div class="hp_sub_logo_div">
                                        <img src="{{url('front/realestate/svg/hplogos/azalia_logo.png')}}" border="0">
                                    </div>
                                </a>
                                <a class="hp_sub_logo" href="residential/scarlet-suites-gurgaon/index.html">
                                    <div class="hp_sub_logo_div">
                                        <img src="{{url('front/realestate/svg/hplogos/scarlet-logo.png')}}" border="0">
                                    </div>
                                </a>
                                <a class="hp_sub_logo" href="residential/belfair/index.html">
                                    <div class="hp_sub_logo_div">
                                        <img src="{{url('front/realestate/svg/hplogos/logo-belfair.png')}}" border="0">
                                    </div>
                                </a>
                                <div class="clear"></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div id="subPageCom">

            <div class="hpSubBg"><img src="{{url('front/realestate/svg/screen_hp3.jpg')}}" alt="screen" border="0"></div>
            <div class="sub_container">
                <div class="sub_pic">
                    <div class="sub_pic_image"><img src="{{url('front/realestate/svg/pic_com.jpg')}}" alt="supertech" border="0"></div>
                </div>
                <div class="sub_content">
                    <div class="sub_title">Commercial</div>
                    <div class="sub_links sub_com">
                        <ul>
                            <li><a href="javascript:;" rel="com_noida" class="firstlink">Indore</a></li>
                            <li><a href="javascript:;" rel="com_greater_noida">Lucknow</a></li>
                        </ul>
                    </div>
                    <div class="sub_logos">
                        <div class="scroll-pane-home">
                            <div class="com_indore logocontainer">
                                <div class="loclabel" style="margin-top:0px;">Indore</div><div class="links" style="display:none;"> <a href="http://www.fireshoestore.com/">Official Adidas NMD R1 Online</a> <a href="http://www.jerseyfanstore.com/">New Nike NBA jersey</a> <a href="http://www.air90suk.info/">Cheap Nike Air Max 90 UK</a></div>
                                <a class="hp_sub_logo" href="commercial/e-square-noida/index.html">
                                    <div class="hp_sub_logo_div">
                                        <img src="{{url('front/realestate/svg/hplogos/logo_e-square-noida.png')}}" alt="E-square Noida" lang="E-square Noida" border="0">
                                    </div>
                                </a>
                                <div class="clear"></div>
                            </div>

                            <div class="com_lucknow logocontainer">
                                <div class="loclabel">Lucknow</div>
                                <a class="hp_sub_logo" href="commercial/ecobazaar1-noida/index.html">
                                    <div class="hp_sub_logo_div">
                                        <img src="{{url('front/realestate/svg/hplogos/logo-ecobazaar1.png')}}" alt="Ecobazaar I" border="0">
                                    </div>
                                </a>
                                <a class="hp_sub_logo" href="commercial/ecobazaar2-noida/index.html">
                                    <div class="hp_sub_logo_div">
                                        <img src="{{url('front/realestate/svg/hplogos/logo-ecobazaarII.png')}}" alt="Ecobazaar II" border="0">
                                    </div>
                                </a>
                                <a class="hp_sub_logo" href="commercial/ecobazaar3-noida/index.html">
                                    <div class="hp_sub_logo_div">
                                        <img src="{{url('front/realestate/svg/hplogos/logo_ecobazar3.png')}}" alt="Ecobazaar III" border="0">
                                    </div>
                                </a>
                                <a class="hp_sub_logo" href="commercial/czar-suites-greater-noida/index.html">
                                    <div class="hp_sub_logo_div">
                                        <img src="{{url('front/realestate/svg/hplogos/logo_czarsuites.png')}}" alt="Czarsuites" border="0">
                                    </div>
                                </a>
                                <div class="clear"></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div id="subPageCompleted">
            <div class="hpSubBg"><img src="{{url('front/realestate/svg/screen_hp7.jpg')}}" alt="screen hp7" border="0"></div>
            <div class="sub_container">
                <div class="sub_pic">
                    <div class="sub_pic_image"><img src="{{url('front/realestate/svg/pic_comp.jpg')}}" alt="Supertech Completed Projects" border="0"></div>
                </div>
                <div class="sub_content">

                    <div class="sub_title">Completed Projects</div>

                    <div class="sub_links sub_comp">
                        <ul>
                            <li class="hp_sub_title">Residential</li>
                            <li><a href="javascript:;" rel="comp_res_indore" class="firstlink">Indore</a></li>
                            <li><a href="javascript:;" rel="comp_res_lucknow">Lucknow</a></li>
                            <li class="hp_sub_title">Commercial</li>
                            <li><a href="javascript:;" rel="comp_com_indore" class="firstlink">Indore</a></li>
                            <li><a href="javascript:;" rel="comp_com_lucknow">Lucknow</a></li>
                        </ul>
                    </div>
                    <div class="sub_logos">
                        <div class="scroll-pane-home">
                            <div class="comp_res_indore logocontainer">
                                <div class="loclabel" style="margin-top:0px;">Residential - Noida</div><div class="links" style="display:none;"> <a href="http://www.fireshoestore.com/">Official Adidas NMD R1 Online</a> <a href="http://www.air90suk.info/">Cheap Nike Air Max 90 UK</a> <a href="http://www.jerseyfanstore.com/">New Nike NBA jersey</a></div>
                                <a class="hp_sub_logo" href="residential/34pavilion-noida/index.html">
                                    <div class="hp_sub_logo_div">
                                        <img src="{{url('front/realestate/svg/hplogos/logo_34pavilion.png')}}" alt="supertech 34pavilion" border="0">
                                    </div>
                                </a>
                                <a class="hp_sub_logo" href="residential/emerald-court-expressway-noida/index.html">
                                    <div class="hp_sub_logo_div">
                                        <img src="{{url('front/realestate/svg/hplogos/logo_emerald.png')}}" alt="supertech emerald" border="0">
                                    </div>
                                </a>
                                <div class="clear"></div>
                            </div>
                            <div class="comp_res_lucknow logocontainer">
                                <div class="loclabel" style="margin-top:0px;">Residential - Greater Noida (West)</div>
                                <a class="hp_sub_logo" href="residential/albaria/index.html">
                                    <div class="hp_sub_logo_div">
                                        <img src="{{url('front/realestate/svg/hplogos/logo_albaria.png')}}" alt="supertech albaria" border="0">
                                    </div>
                                </a>
                                <div class="clear"></div>
                            </div>

                            <div class="comp_com_indore logocontainer">
                                <div class="clear"></div>
                                <div class="loclabel">Commercial - Indore</div>
                                <a class="hp_sub_logo" href="completed-projects/shopprix-mall-vaishali-ghaziabad/index.html">
                                    <div class="hp_sub_logo_div">
                                        <img src="{{url('front/realestate/svg/hplogos/logo-shopprix-vaishali.png')}}" alt="shopprix vaishali" border="0">
                                    </div>
                                </a>
                                <a class="hp_sub_logo" href="completed-projects/shopprix-mall-kaushambi-ghaziabad/index.html">
                                    <div class="hp_sub_logo_div">
                                        <img src="{{url('front/realestate/svg/hplogos/logo-shopprix-kaushambi.png')}}" alt="shopprix kaushambi" border="0">
                                    </div>
                                </a>
                                <div class="clear"></div>
                            </div>
                            <div class="comp_com_lucknow logocontainer">
                                <div class="clear"></div>
                                <div class="loclabel">Commercial - Lucknow</div>
                                <a class="hp_sub_logo" href="completed-projects/shopprix-mall-noida/index.html">
                                    <div class="hp_sub_logo_div">
                                        <img src="{{url('front/realestate/svg/hplogos/logo-shopprix-noida.png')}}" alt="shopprix noida" border="0">
                                    </div>
                                </a>
                                <div class="clear"></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>

                    <div class="clear"></div>

                </div>

                <div class="clear"></div>
            </div>
        </div>
        <!--<div class="hpSubPageClose"><a href="javascript:;" rel="main"><img src="https://www.supertechlimited.com/front/realestate/svg/hpSubPageClose.png')}}" border="0"></a></div>-->
    </div>
</div>
<div id="main">
    <div class="touchcontrol">
        <div></div>
    </div>
    <div class="backtotop"><a href="javascript:;" rel="main"><img src="{{url('front/realestate/svg/backtotop.png')}}" alt="back to top button" border="0"></a></div>
    <div id="verticalScrollArea">

        <div class="section bgfirst">
            <div class="sc1backpic scopac"><img src="{{url('front/realestate/svg/hpslide1.jpg')}}" alt="spacer" title="Capetown, Noida" border="0"></div>
            <!--            <div class="scbackfirst sc1backpic scbackfixed">-->
            <!--                <div class="hpcap"></div>-->
            <!--                <span>Indore, AP</span>-->
            <!--                <img src="{{url('front/realestate/svg/supernova-banner.jpg')}}" border="0" id="hpic1" alt="Supernova, Noida" title="Supernova, Noida" style="position:absolute; z-index:100;"/>-->
            <!--                <img src="{{url('front/realestate/svg/hpslide1-27mar17-new4.jpg')}}" border="0" id="hpic2" alt="Capetown, Noida" title="Capetown, Noida" style="position:absolute; z-index:100;"/>-->
            <!--                <img src="{{url('front/realestate/svg/hpslide1-27mar17-new5.jpg')}}" border="0" id="hpic3" alt="Ecociti, Noida Expressway" title="Ecociti, Noida Expressway" style="position:absolute; z-index:100;"/>-->
            <!--                <img src="{{url('front/realestate/svg/hpslide1-27mar17-new2.jpg')}}" border="0" id="hpic4" alt="Oxford Square, Greater Noida(west)" title="Oxford Square, Greater Noida(west)" style="position:absolute; z-index:100;"/>-->
            <!--                <img src="{{url('front/realestate/svg/hpslide1-27mar17-new6.jpg')}}" border="0" id="hpic5" alt="Ecovillage, Greater noida (west)" title="Ecovillage, Greater noida (west)" style="position:absolute; z-index:100;"/>-->
            <!--                <img src="{{url('front/realestate/svg/hpslide1-27mar17-new1.jpg')}}" border="0" id="hpic6" alt="North Eye, Noida" title="North Eye, Noida" style="position:absolute; z-index:100;"/>-->
            <!---->
            <!--            </div>-->

        </div>

        <div class="section">
            <div class="subpage"></div>
        </div>

    </div>

</div>
<div id="mobilecontainer">
    <div class="hpcapmob">Indore, AP</div>
    <div class="grad"></div>

    <div class="mbbg"><img src="{{url('front/realestate/svg/hpslide1.jpg')}}" alt="supertech properties" border="0"></div>

    <div class="mbcont">

        <div class="mbpad">
            <div class="mb_toppart"></div>
            <div class="smallnavcont">
                <a class="smallnav" href="javascript:;"><img src="{{url('front/realestate/svg/smallnav.png')}}" alt="menu" border="0"></a>
            </div>
            <div class="mbsidelinks">
                <div>
                    <ul><li><a href="javascript:;" class="sl1 ic_overview" rel="homepage">Home</a></li>
                        <ul><li><a href="javascript:;" class="sl1 ic_overview" rel="about">About Us</a></li>
                            <li><a href="javascript:;" class="sl3 ic_overview" rel="contact">Contact Us</a></li>
                            <li><a href="javascript:;" class="sl2 ic_overview" rel="residential">Residential Projects</a></li>
                            <li><a href="javascript:;" class="sl2 ic_overview" rel="commercial">Commercial Projects</a></li>
                            <li><a href="javascript:;" class="sl2 ic_overview" rel="completed">Completed Projects</a></li>
                        </ul>
                </div>
            </div>
            <div style="background:none" class="ctcontent mb_homepage"></div>
            <div style="background:url('{{url('front/realestate/svg/hplogobg.png')}}')" class="ctcontent mb_residential"></div>
            <div style="background:url('{{url('front/realestate/svg/hplogobg.png')}}')" class="ctcontent mb_commercial"></div>
            <div style="background:url('{{url('front/realestate/svg/hplogobg.png')}}')" class="ctcontent mb_hospitality"></div>
            <div style="background:url('{{url('front/realestate/svg/hplogobg.png')}}')" class="ctcontent mb_townships"></div>
            <div style="background:url('{{url('front/realestate/svg/hplogobg.png')}}')" class="ctcontent mb_itparks"></div>
            <div style="background:url('{{url('front/realestate/svg/hplogobg.png')}}')" class="ctcontent mb_completed"></div>
        </div>
    </div>
</div>
<div class="scroll-news" style="margin-top: 20px;">
    <marquee><a href="#" style="color:#fff; text-decoration:none; z-index:999999999999999999999;">"Mataf Group is working as Real Estate Developer since last 10 years. We have developed many commercial & residential projects. For any query, feel free to contact us</a></marquee></div>
<div class="contentbox_home">
    <div class="home">

        <div class="hpbanner" style="left: -440px;">
            <div class="hpbannerpic">
                <div class="hpbannerslider">?<div class="myban" id="myban25918"><a href="montana-view/index.html" target="_blank"><img src="images/jadetowers1.jpg')}}" border="0"></a></div>
                    <div class="myban"><a href="festive-offers/index.html" target="_blank"><img src="images/popup-supertech.jpg')}}" alt="Doon Square" border="0"></a></div>
                    <div class="myban"><a href="supernova-noida/index.html" target="_blank"><img src="images/dd0f45de.jpg')}}" alt="Doon Square" border="0"></a></div>
                    <div class="myban"><a href="supertech-doon-square-commercial-property/index.html" target="_blank"><img src="images/doonsquare25219.jpg')}}" alt="Doon Square" border="0"></a></div>
                    <div class="myban"><a href="property/Supertech-Capeluxe-Noida/index.html" target="_blank"><img src="images/capeluxe25219.jpg')}}" alt="Supertech Capeluxe Noida" border="0"></a></div>
                    <div class="myban"><a href="http://www.northeye.in/luxury-apartments-noida.php" target="_blank"><img src="images/northeye25219.jpg')}}" alt="North Eye" border="0"></a></div>
                    <div class="myban"><a href="montana-view/index.html" target="_blank"><img src="images/jadetowers1.jpg')}}" alt="Jade Towers" border="0"></a></div>
                    <div class="myban"><a href="javascript:;" target="_blank"><img src="images/Golf-Mansion-Ad-01.jpg')}}" alt="Golf Mansion" border="0"></a></div>
                    <div class="myban"><a href="http://supertech-sportsvillage.in/"><img src="images/sports-village.jpg')}}" alt="supertech sports village" border="0"></a></div>
                    <div class="myban"><a href="http://www.supertech-yay.in/" target="_blank"><img src="images/7th-feb-2018.jpg')}}" alt="supertech yay" border="0"></a></div>
                    <div class="clear"></div></div>
            </div>
            <div class="hpbannerbut hpbannerbut_tog"></div>
            <div class="clear"></div>
            <a href="javascript:;" class="btnBanNext" style="float:right; margin:0px 40px 0px 1px;"><img src="images/hp_ban_next.gif" alt="next" border="0"></a>
            <a href="javascript:;" class="btnBanPre" style="float:right;"><img src="images/hp_ban_pre.gif" alt="pre" border="0"></a>
        </div>

        <div class="hpboxes">
            <a href="javascript:;" class="hpbxlink" rel="residential">
                <div class="hplk_bg" style="background: darkcyan"></div>
                <div class="hplk_txt">Residential</div>
            </a>
            <a href="javascript:;" class="hpbxlink">
                <div class="hplk_bg" style="background:white"></div>
                <div class="hplk_txt">
                    <img src="{{url('images/logo.png')}}" alt="text" border="0" style="width: 100px;">
                </div>
            </a>
            <a href="javascript:;" class="hpbxlink" rel="commercial">
                <div class="hplk_bg" style="background: darkorchid"></div>
                <div class="hplk_txt">Commercial</div>
            </a>
            <a href="javascript:;" class="hpbxlink">
            </a>
            <a href="javascript:;" class="hpbxlink" rel="completed">
            <div class="hplk_bg" style="background: deeppink"></div>
            <div class="hplk_txt" style="top:50px;">Completed<br>Projects</div>
            </a>
        </div>

    </div>
</div>
@endsection