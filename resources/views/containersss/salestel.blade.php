@extends('template1')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NUDEL MAG</title>
    <link rel="stylesheet" href="/containersss/salestel.css">
    
    <link href="https://fonts.cdnfonts.com/css/nirmala" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@500;600;700&display=swap" rel="stylesheet">
<link rel="shortcut icon" href="/FOTO/Nudel-ііііpng.png" type="image/x-icon">
<style>
    body{
    margin: 0;

}
.telephone{
    position: relative;
    display: flex;
    
    width: 100%;
    height: 1593px;
    flex-flow: column;
    margin: 0;
    
}

.telhead{
    display: flex;
    
    margin-left: 37px;
    margin-right: 37px;
    margin-top: 0;
    margin-bottom: 0;
    height: 140px;
    
    align-items: center;
    justify-content: space-between;
    
    
}

.imghead{
    width: 100px;
}

.mapbody{
    width: 100%;
    height: 1900px;
    display: flex;
    flex-direction: column;
    align-items: center;
}
.mapp2{
    width: 350px;
height: 400px;
margin-top: 45px;
}
.mapp1{
    position: absolute;
width: 350px;

height: 400px;


background: rgba(255, 255, 255, 0.5);

box-shadow: inset 5px 5px 4px rgba(83, 145, 171, 0.25), inset -5px -5px 4px rgba(83, 145, 171, 0.25);
border-radius: 50px;
}
.mapp{
    position: absolute;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 400px;
}

.mapptitel{
    margin: 0px;
font-family: 'Montserrat Alternates';
font-style: normal;
font-weight: 700;
font-size: 48px;
line-height: 64px;


text-align: center;

color: #000000;
}
.mapptitel1{
    margin: 0;
    font-family: 'Montserrat Alternates';
    font-style: normal;
    font-weight: 700;
    font-size: 48px;
    line-height: 64px;
    
    
    text-align: center;
    
    color: #000000;
}


.mappimg{
    margin-top: -40px;
    margin-bottom: -50px;
    width: 356px;
    height: 356px;
}

.vecsale1{
    position: absolute;
    right: 0;
    top: 120px;
}

.vecsale2{
    position: absolute;
    top: 40%;

}
.vecsale3{
    position: absolute;
    right: 0;
    bottom: 0;
}
</style>
</head>
<body>
    <div class="telephone">
        @section('content1')
        <img src="/FOTO/vecsale1.png" alt="" class="vecsale1">
        <img src="/FOTO/vecsale2.png" alt="" class="vecsale2">
        <img src="/FOTO/vecsale3.png" alt="" class="vecsale3">
        <div class="mapbody">
            <div class="mapp2">
                <div class="mapp1">
                    <a href="telsale1">
                        <div class="mapp">
                            <h1 class="mapptitel">СКАЖЕНА</h1>
                            <img src="/FOTO/3 акция.png" alt="" class="mappimg">
                            <h1 class="mapptitel1">КУРКА</h1>
                        </div>
                    </a>
                </div>
            </div>
            <div class="mapp2">
                <div class="mapp1">
                    <a href="telsale2">
                        <div class="mapp">
                            <h1 class="mapptitel">ШАЛЕНИЙ</h1>
                            <img src="/FOTO/ГЛАВНАЯ АКЦИЯ.png" alt="" class="mappimg">
                            <h1 class="mapptitel1">ЧЕТВЕР</h1>
                        </div>
                    </a>
                </div>
            </div>
            <div class="mapp2">
                <div class="mapp1">
                    <a href="telsale3">
                        <div class="mapp">
                            <h1 class="mapptitel">ПОДВІЙНА</h1>
                            <img src="/FOTO/АКЦИЯ ПРОБКА.png" alt="" class="mappimg">
                            <h1 class="mapptitel1">СПРАГА</h1>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    @endsection
</body>
</html>