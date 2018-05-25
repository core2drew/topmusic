<!DOCTYPE html>
<html lang="en" class="has-navbar-fixed-top">
<head>
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
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-117972084-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-117972084-1');
    </script>

</head>
<body>
    
    @yield('content')
    @yield('scripts')
    <script src='js/main.js'></script>
</body>
</html>
