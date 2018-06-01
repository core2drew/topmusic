<!DOCTYPE html>
<html lang="en" class="has-navbar-fixed-top">
<head>
    <!-- Google Analytics -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-117972084-1', 'auto');
        ga('send', 'pageview');
    </script>
    <!-- End Google Analytics -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Top Music Management</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="css/tmm-font-icons.css" rel="stylesheet"/>
    <link href="css/bulma.css" rel="stylesheet"/>
    <link href="css/app.css" rel="stylesheet"/>
    <meta name="Description" content="Top Music Management
        a young and dynamic Artist Management Company focused on the needs of our artists. And Offers Artist
        Management, Personal Branding, Tour Management, Booking Management, Strategic Career Planning, Marketing and Social Media, 
        A&R Consultancy. We are currently operating in South America, Europe and opening new markets in Asia and the MENA Region. 
        Founder & CEO - Ckatiuscka Ribadeneira">
    <meta name="Keywords" content="artist management, personal branding, strategic career planning, marketing and social media, A&R consultancy, advisory, music industry, musical production, supervisor, marketing, amsterdam,">
</head>
<body>
    
    @yield('content')
    @yield('scripts')
    <script src='js/main.js'></script>
</body>
</html>
