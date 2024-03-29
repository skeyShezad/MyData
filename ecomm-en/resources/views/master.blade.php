<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Comm project</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
</head>
<body>
    {{ View::make('header') }}
    @yield('content')
    {{ View::make('footer') }}



</body>

<style>
    .custom-login{
        height: 500px;
        padding-top: 100px;
    }
    img.slider-img{
        height: 300px !important;
        /* background-color: black; */
    }
    .custom-product{
        height: 600px
    }
    .slider-text{
        color: #24465454 !important;
    }
    .trending-img{
        height: 100px
    }
    .trending-items{
        float: left;
        width: 25%
    }
    .trending-wrapper{
        margin: 20px;
        
    }

</style>
</html>
