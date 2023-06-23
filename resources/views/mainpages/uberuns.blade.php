@extends('template')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NUDEL MAG</title>
    <link rel="stylesheet" href="/mainpages/uber.css">
    <link href="https://fonts.cdnfonts.com/css/nirmala" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@500;600;700&display=swap" rel="stylesheet">
<link rel="shortcut icon" href="/FOTO/Nudel-ііііpng.png" type="image/x-icon">
<style>
a{
    text-decoration: none;
    margin: 0;
    padding: 0;
}
body{
    margin: 0;
    padding: 0;

}
.main1{
    position: relative;
    display: flex;
    flex-flow: column;
    width: 100%;
    height: 100vh;
    margin: 0;

}
.kopf1 {
    position: relative;
    display: inline;
    width: 100%;
    height: 150px;
    margin: 0;

}
#kopfmenu{
    margin: auto;
    display: flex;
    align-items: center;
    
}
#menutxt{
    position: absolute;
    display: flex;
    align-items: center;
    height: 90px;
    right: 0px;
}
.menutt{
    padding-right: 35px;

    font-family: 'Montserrat Alternates';
font-style: normal;
font-weight: medium;
font-size: 20px;
line-height: 29px;
letter-spacing: 0.15em;

color: #000000;
}
#foto{
    padding: 0;
    margin: 0;
    height: 159px;
    left: 15px;
}
#fotobox{
    margin-left: 35px;
}

.conteiner{
    position: relative;
    display: inline;
    width: 100%;
    height: 690px;
    margin: 0;
    
}
.continfo{
    position: absolute;
    display: flex;
    justify-content: center;
    width: 50%;
    left: 0;
    height: 700px;
    
}
.contfoto{
    position: absolute;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 50%;
    right: 0;
    height: 700px;
}
.fotouber{
    position: absolute;
    height: 700px;
    top: 5px;
}
.backk{
    position: absolute;
    margin: auto;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    height: 615px;
    width: 578px;
    border-radius: 60px;
    background: rgba(255, 255, 255, 0.5);
    box-shadow: inset -5px -5px 20px rgba(83, 145, 171, 0.25), inset 5px 5px 20px rgba(83, 145, 171, 0.25);
}

.txtuber{
    position: absolute;
    margin: auto;
    top: 61px;
    left: 58px;
    width: 462px;

    font-family: 'Montserrat Alternates';
font-style: normal;
font-weight: 300;
font-size: 24px;
line-height: 29px;
letter-spacing: 0.15em;

color: #000000;

}

.vector{
    width: 500px;
    position: absolute;
    left: 0;
}
.vector1{
    bottom: 0;
    width: 500px;
    position: absolute;
    right: 0;
}

.blocktxt{
    position: absolute;
    display: flex;
    justify-content: center;
    bottom: 0px;
    width: 100%;
    height: 85px;
    margin: 0;
}
#txtm{
    margin: 0;

}

#txt{
    position: absolute;
    text-align: center;
    padding: 0;
    margin: auto;
    bottom: 0;
    left: 0px;
    right: 0px;
    top: 0px;
    
    user-select: none;

    width: 400px;
    height: 64px;


font-family: 'Nirmala UI';
font-style: normal;
font-weight: 700;
font-size: 64px;
line-height: 64px;
/* identical to box height */


color: #000000;

}
#txt1{
    position: absolute;
    text-align: center;
    padding: 0;
    margin: auto;
    bottom: 0;
    left: 0px;
    right: 9px;
    top: 0px;

    user-select: none;

width: 400px;
height: 64px;


font-family: 'Nirmala UI';
font-style: normal;
font-weight: 700;
font-size: 64px;
line-height: 64px;
/* identical to box height */


color: #224D81;

}
#txt2{
    position: absolute;
    text-align: center;
    padding: 0;
    margin: auto;
    bottom: 0;
    left: 9px;
    right: 0px;
    top: 0px;

    user-select: none;

width: 400px;
height: 64px;


font-family: 'Nirmala UI';
font-style: normal;
font-weight: 700;
font-size: 64px;
line-height: 64px;
/* identical to box height */


color: #5391AB;

}
</style>
</head>
<body>
    <div class="main1">
    @section('content')
        <div class="conteiner">
            <img src="/FOTO/uberleftvector.png" alt="" class="vector">
            <img src="/FOTO/uberrightvect.png" alt="" class="vector1">
            <div class="continfo">
                <div class="backk">
                    <p class="txtuber">
                        МЕРЕЖА РЕСТОРАНІВ NUDEL MAG БУЛА ЗАСНОВАНА У 2015 РОЦІ У КИЄВІ.
З ТОГО ЧАСУ БУЛО ВІДКРИТО ЩЕ ДВА ЗАКЛАДИ У ХАРКОВІ ТА ДНІПРІ. МИ ОРІЄНТУЄМОСЬ НА ПРИХИЛЬНИКІВ АЗІАТСЬКОЇ ЛОКШИНИ У КОРОБОЧКАХ.
ДОСТУПНІ ЧОТИРИ УЛЮБЛЕНІ СМАКИ НАШИХ КЛІЄНТІВ. КОЖЕН БАЖАЮЧИЙ МОЖЕ ЗВ’ЯЗАТИСЯ З НАМИ ДЛЯ ПОРАД ПО ПОШТІ.<br>

EMAIL: NUDELMAG@GMAIL.COM
                    </p>
                </div>
            </div>
            <div class="contfoto">
                <img src="/FOTO/Frame 35.png" alt="" class="fotouber">
            </div>
        </div>
        <div class="blocktxt">
            <div id="txtm">
                <h1 id="txt2">NUDEL MAG</h1>
                <h1 id="txt1">NUDEL MAG</h1>
                <h1 id="txt">NUDEL MAG</h1>
            </div>
        </div>
    </div>
    @endsection

</body>
</html>