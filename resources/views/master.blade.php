<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <title>Laravel E-Commerce Project</title>
</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}

    <style>

        .link{
            text-decoration: none;
            text-align: center;
            color: black;
        }
         .custom-login{
            height: 500px;
            padding-top: 100px;
         }

         .right{
           margin-left: auto;
           }
          
          img.slider-img{
            width: 100%;
             height: 400px !important;
          }
          .custom-product {
             height: 600px;  
          }

          .carousel-caption {
                position: absolute;
                right: 15%;
                bottom: 1.25rem;
                left: 15%;
                padding-top: 1.25rem;
                padding-bottom: 1.25rem;
                color: #fff;
                text-align: center;
                background: linear-gradient(45deg, black, transparent);
            }


            .trending-image{

                height: 150px;

            }

            .trending-item{
                float: left;
                width: 20%;
            }

            .trending-wrapper{
                margin: 30px;
            }

            .detail-img{
                width: 100%;
                height: 200px;
            }

            .search-box{
                width: 500px !important;
            }

            .cart-list-devider{
                border-bottom: 1px solid;
                margin-bottom: 20px;
                padding-bottom: 20px;
            }


    </style>
   
</body>


</html>