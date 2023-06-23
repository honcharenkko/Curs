@extends('template1')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NUDEL MAG</title>
    <link rel="stylesheet" href="/containersss/teleat3.css">
    
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
    display: flex;
    
    width: 100%;
    height: 950px;
    flex-flow: column;
    margin: 0;
    
}

.telhead{
    position: relative;
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
.top{
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 400px;
}
.topfoto{
    width: 300px;
    height: 300px;

}
.info{
    display: flex;
    flex-direction: row;
    justify-content: center;
    width: 100%;
    height: 450px;
}

.left{
    display: flex;
    justify-content: center;
    
    width: 140px;
    height: 100%;
}
.infoborder{
    position: absolute;
width: 131px;
height: 347px;
display: flex;
flex-direction: column;
align-items: center;


background: rgba(255, 255, 255, 0.5);
box-shadow: inset 5px 5px 4px rgba(83, 145, 171, 0.25), inset -5px -5px 4px rgba(83, 145, 171, 0.25);
border-radius: 50px;
}
.infoborder1{
    position: absolute;
width: 230px;
height: 446px;
display: flex;
flex-direction: column;
align-items: center;


background: rgba(255, 255, 255, 0.5);
box-shadow: inset 5px 5px 4px rgba(83, 145, 171, 0.25), inset -5px -5px 4px rgba(83, 145, 171, 0.25);
border-radius: 50px;
}

.right{
    display: flex;
    justify-content: center;
    align-items: center;
    width: 230px;
    height: 100%;
}

.infotxt{
    margin: 5px;
font-family: 'Montserrat Alternates';
font-style: normal;
font-weight: 300;
font-size: 16px;
line-height: 20px;
/* identical to box height */

letter-spacing: 0.35em;

color: #000000;
}

.infotxt1{
margin: 0;

font-family: 'Montserrat Alternates';
font-style: normal;
font-weight: 500;
font-size: 40px;
line-height: 49px;
/* identical to box height */

letter-spacing: 0.15em;

color: #000000;
}

.infoimg{
    width: 60px;
    height: 60px;
}
.righttxt{
    margin: 10px;
    font-family: 'Montserrat Alternates';
font-style: normal;
font-weight: 700;
font-size: 32px;
line-height: 39px;
text-align: center;
letter-spacing: 0.1em;

color: #000000;
}
.inforight{
    width: 210px;
    font-family: 'Montserrat Alternates';
font-style: normal;
font-weight: 500;
font-size: 16px;
line-height: 20px;
text-align: center;
letter-spacing: 0.1em;

color: #000000;
}

.vector1{
    position: absolute;
    left: 0px;
    top: 70px;
}

.vector2{
    position: absolute;
    right: 0px;
    top: 500px;
}
</style>
</head>
<body>
    <div class="telephone">
    @section('content1')
        <img src="/FOTO/food41.png" alt="" class="vector1">
        <img src="/FOTO/food42.png" alt="" class="vector2">
        <div class="top">
            <img src="/FOTO/КАЧКА ГОЧТРА.png" alt="" class="topfoto">
        </div>
        <div class="info">
            <div class="left">
                <div class="infoborder">
                    <h1 class="infotxt">ціна</h1>
                    <h1 class="infotxt1">50₴</h1>
                    <h1 class="infotxt">креветка</h1>
                    <img src="/FOTO/free-icon-shrimp-2669296.png" alt="" class="infoimg">
                    <h1 class="infotxt">калорії</h1>
                    <h1 class="infotxt1">280</h1>
                    <h1 class="infotxt">качка</h1>
                    <img src="/FOTO/free-icon-peking-duck-3448071.png" alt="" class="infoimg">
                </div>
            </div>
            <div class="right">
                <div class="infoborder1">
                    <h1 class="righttxt">ШРІМП КАЧКА</h1>
                    <p class="inforight">АЗІАТСЬКА РИСОВА ЛОКШИНА З КАЧКОЮ ТА КРЕВЕТКАМИ. 

                        СКЛАД: КУРКА ФІЛЕ, РИСОВА ЛОКШИНА,ДАЙКОН, ЦИБУЛЯ РІПЧАСТА, МОРКВА, ЯЙЦЯ, ПЕРЕЦ ЧИЛІ, КОРЕНЬ ІМБИРУ, ПІР’ЇН ЗЕЛЕНОЇ ЦИБУЛІ, ЛИМОН,СІЛЬ, СОНЯШНИКОВА ОЛІЯ.</p>
                </div>
            </div>
        </div>
    </div>
    @endsection
</body>
</html>