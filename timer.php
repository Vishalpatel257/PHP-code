<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
    <style>
    p{
        font-size:100px;
        color:rgba(0,0,0,.5);
        font-family:Calibri;
        position:relative;
        top:50%;
        left:50%;
    }
    </style>
    <p></p>
    <script>
        $(document).ready(function(){
            var a =10;
        
            setInterval(timer,1000)

            function timer(){
                if(!(a==0) ){
                    a--
                }
                $("p").text(a)
            }
        })
    </script>
</body>
</html>