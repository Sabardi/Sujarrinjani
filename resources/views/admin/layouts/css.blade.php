<link rel="icon" href="{{ asset('assets') }}/img/logo/logo.png" type="image/x-icon" />

<!-- Fonts and icons -->
<script src="{{ asset('assets') }}/js/plugin/webfont/webfont.min.js"></script>
<script>
    WebFont.load({
        google: {
            families: ["Public Sans:300,400,500,600,700"]
        },
        custom: {
            families: [
                "Font Awesome 5 Solid",
                "Font Awesome 5 Regular",
                "Font Awesome 5 Brands",
                "simple-line-icons",
            ],
            urls: ["{{ asset('assets') }}/css/fonts.min.css"],
        },
        active: function() {
            sessionStorage.fonts = true;
        },
    });
</script>

<!-- CSS Files -->
<link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.min.css" />
<link rel="stylesheet" href="{{ asset('assets') }}/css/plugins.min.css" />
<link rel="stylesheet" href="{{ asset('assets') }}/css/kaiadmin.min.css" />

<!-- CSS Just for demo purpose, don't include it in your project -->
<link rel="stylesheet" href="{{ asset('assets') }}/css/demo.css" />
