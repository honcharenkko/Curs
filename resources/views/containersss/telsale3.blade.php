@extends('template1')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NUDEL MAG</title>
    <link rel="stylesheet" href="/containersss/telsale3.css">
    
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
    height: 900px;
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
    width: 350px;
    height: 350px;

}
.info{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 450px;
}

.middle{
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    width:390px;
    height: 100%;
}
.infoborder{
    position: relative;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
margin-bottom: 20px;
margin-right: 10px;
width: 100px;
height: 100px;
display: flex;
justify-content: center;
align-items: center;

background: rgba(255, 255, 255, 0.5);
box-shadow: inset 5px 5px 4px rgba(83, 145, 171, 0.25), inset -5px -5px 4px rgba(83, 145, 171, 0.25);
border-radius: 30px;
}
.infoborder1{
    position: relative;
    width: 375px;
    height: 191px;
    display: flex;
    justify-content: center;
    
    flex-direction: column;

    background: rgba(255, 255, 255, 0.5);
    box-shadow: inset 5px 5px 4px rgba(83, 145, 171, 0.25), inset -5px -5px 4px rgba(83, 145, 171, 0.25);
    border-radius: 40px;
}
.infotxt{
    
    
    margin: 0;

    font-family: 'Montserrat Alternates';
    font-style: normal;
    font-weight: 300;
    font-size: 16px;
    line-height: 20px;
    /* identical to box height */
    
    letter-spacing: 0.405em;
    
    color: #000000;
}
.infotxt2{
    
    margin: 0;
    font-family: 'Montserrat Alternates';
    font-style: normal;
    font-weight: 500;
    font-size: 36px;
    line-height: 44px;
    /* identical to box height */
    
    letter-spacing: 0.125em;
    
    color: #000000;
}
.borfoto{
    width: 80px;
    height: 80px;
}

.right{
    display: flex;
    justify-content: center;
    
    width: 240px;
    height: 100%;
}
.righttxt{
    margin: 0;
height: 48px;

font-family: 'Montserrat Alternates';
font-style: normal;
font-weight: 700;
font-size: 20px;
line-height: 24px;
text-align: center;
letter-spacing: 0.1em;

color: #000000;
}
.inforight{
    margin: 0;
    width: 331px;
height: 95px;

font-family: 'Montserrat Alternates';
font-style: normal;
font-weight: 500;
font-size: 14px;
line-height: 17px;
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
    top: 430px;
}
</style>
</head>
<body>
    <div class="telephone">
    @section('content1')
        <img src="/FOTO/vectorsale1.png" alt="" class="vector1">
        <img src="/FOTO/vectorsale2.png" alt="" class="vector2">
        <div class="top">
            <img src="/FOTO/АКЦИЯ ПРОБКА.png" alt="" class="topfoto">
        </div>
        <div class="info">
            <div class="middle">
                <div class="infoborder">
                    <img src="/FOTO/orange.png" alt="" class="borfoto">
                </div>
                <div class="infoborder">
                    <h1 class="infotxt">ціна</h1>
                    <h1 class="infotxt2">45₴</h1>
                </div>
                <div class="infoborder">
                    <img src="/FOTO/granat.png" alt="" class="borfoto">
                </div>
                <div class="infoborder">
                    <img src="/FOTO/grape.png" alt="" class="borfoto">
                </div>
                <div class="infoborder">
                    <img src="/FOTO/apple.png" alt="" class="borfoto">
                </div>
            </div>
            <div class="right">
                <div class="infoborder1">
                    <h1 class="righttxt">ПОДВІЙНА
                        СПРАГА</h1>
                    <p class="inforight">НАСОЛОЖДУЙТЕСЬ ЦИМ НАЙСМАЧНІШИМ МЕНЮ!
                        “ПОДВІЙНА СПРАГА” ВХОДИТЬ:
                        ЛОКШИНА РИСОВА З КУРКОЮ ТА ГРИБАМИ
                        ДВА СОКИ - ЯБЛУЧНИЙ ТА ВИНОГРАДНИЙ
                        
                        ОДИН ТОБІ, А ІНШИЙ ДРУГУ.</p>
                </div>
            </div>
        </div>
    </div>
    @endsection
</body>
</html>