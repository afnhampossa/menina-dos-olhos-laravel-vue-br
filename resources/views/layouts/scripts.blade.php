{{ Html::script("js/front.js") }}
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
<script src="/front/bower_components/less.js/dist/less.min.js"></script>
<script src="/front/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/front/lib/tween/tween.min.js"></script>
<script src="/front/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/front/lib/modernizr-edited.js"></script>
<script src="/front/lib/SmoothScroll-1.4.9/SmoothScroll.js"></script>
<script src="/front/bower_components/jquery-cookie/jquery.cookie.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script src="/front/bower_components/jqBootstrapValidation/dist/jqBootstrapValidation-1.3.7.min.js"></script>
<script src="/front/bower_components/minicolors/jquery.minicolors.min.js"></script>
<script src="/front/bower_components/slick.js/slick/slick.min.js"></script>
<script src="/front/bower_components/shufflejs/dist/jquery.shuffle.min.js"></script>
<script src="/front/bower_components/textillate/assets/jquery.lettering.js"></script>
<script src="/front/bower_components/textillate/assets/jquery.fittext.js"></script>
<script src="/front/bower_components/textillate/jquery.textillate.js"></script>
<script src="/front/lib/prism/prism.js"></script>
<script src="/front/lib/notify.min.js"></script>
<script>
    (function()
    {
        var disableMobileAnimations = true;
        var isWin = navigator.appVersion.indexOf("Win") !== -1;
        if (isWin) $('html').addClass('win');
        var ua = navigator.userAgent.toLowerCase();
        var isChrome = ua.indexOf('chrome') > -1;
        if (isChrome) $('html').addClass('chrome');
        var isAndroidBrowser4_3minus = ((ua.indexOf('mozilla/5.0') > -1 && ua.indexOf('android ') > -1 && ua.indexOf('applewebkit') > -1) && !(ua.indexOf('chrome') > -1));
        if (isAndroidBrowser4_3minus) $('html').addClass('android-browser-4_3minus');
        var isSafari = !isChrome && ua.indexOf('safari') !== -1;
        if (isSafari) $('html').addClass('safari');
        var isMobile = false; //Change false to Modernizr.touch if you want to disable animations on touchscreen devices;
        if (isMobile)
        {
            $('html').addClass('mobile');
            if (disableMobileAnimations) $('html').addClass('poor-browser');
        }
        else
        {
            $('html').addClass('non-mobile');
        }
        if (isWin && isSafari)
        {
            $('html').addClass('flat-animation');
        }
    })();
</script>
<script src="/front/scripts/script-bundle.js"></script>
@yield('js')
