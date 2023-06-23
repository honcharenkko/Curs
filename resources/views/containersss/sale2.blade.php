@extends('template')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NUDEL MAG</title>
    <link rel="stylesheet" href="/containersss/sale2.css">
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

}
.kopf1 {
    position: relative;
    display: inline;
    width: 100%;
    height: 150px;

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

.cocontainer{
    height: 100vh;
}
.conteiner{
    position: relative;
    display: flex;
    align-items: center;
    justify-content: space-around;
    width: 100%;
    height: 700px;
    margin: 0;
    
    
}
.left{
    height:100%;
    width: 460px;
}
.leftleft{
    position: absolute;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    align-items: center;
    height:100%;
    width: 460px;
}
.salefoto{
    filter: drop-shadow(0px 10px 22px rgba(0, 0, 0, 0.4));
    width: 607px;
    height: 607px;
}
.right{
    display: flex;
    justify-content: center;
    align-items: center;
    height:100%;
    width: 460px;
    
}
.rightright{
    position: absolute;
    display: flex;
    flex-flow: column;
    align-items: center;
    width: 362px;
height: 601px;
    background: rgba(255, 255, 255, 0.5);
box-shadow: inset 5px 5px 4px rgba(83, 145, 171, 0.25), inset -5px -5px 4px rgba(83, 145, 171, 0.25);
border-radius: 60px;
}
.righttxt{
    font-family: 'Montserrat Alternates';
font-style: normal;
font-weight: 700;
font-size: 32px;
line-height: 39px;
text-align: center;
letter-spacing: 0.1em;

color: #000000;
}
.smalltxt{
    width: 305px;
    font-family: 'Montserrat Alternates';
font-style: normal;
font-weight: 500;
font-size: 20px;
line-height: 24px;
text-align: center;
letter-spacing: 0.1em;

color: #000000;
}
.pricetxt{
    font-family: 'Montserrat Alternates';
font-style: normal;
font-weight: 700;
font-size: 96px;
line-height: 117px;
/* identical to box height */

text-align: center;
letter-spacing: 0.1em;

color: #000000;
}

.saleblock{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 194px;
    width: 210px;
    background: rgba(255, 255, 255, 0.5);
box-shadow: inset 5px 5px 4px rgba(83, 145, 171, 0.25), inset -5px -5px 4px rgba(83, 145, 171, 0.25);
    border-radius: 60px;
}
.saleblockfoto{
    width: 160px;
    height: 160px;
}
.vector{
    width: 474px;
    
    position: absolute;
    left: 0px;
    bottom: 10px;
}
.vector1{
    width: 710px;
    
    position: absolute;
    right: 0;
    top: 5px;
}

.blocktxt{
    position: absolute;
    display: flex;
    justify-content: center;
    bottom: 5px;
    width: 100%;
    height: 85px;
    
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
        <div class="cocontainer">
            <div class="conteiner">
                <img src="/FOTO/3saleleftvect.png" alt="" class="vector">
                <img src="/FOTO/3salerightvect.png" alt="" class="vector1">
                <div class="left">
                    <div class="leftleft">
                        <div class="saleblock">
                            <img src="/FOTO/orange.png" alt="" class="saleblockfoto">
                        </div>
                        <div class="saleblock">
                            <img src="/FOTO/granat.png" alt="" class="saleblockfoto">
                        </div>
                        <div class="saleblock">
                            <img src="/FOTO/grape.png" alt="" class="saleblockfoto">
                        </div>
                        <div class="saleblock">
                            <img src="/FOTO/apple.png" alt="" class="saleblockfoto">
                        </div>
                    </div>
                </div>
                <img src="/FOTO/АКЦИЯ ПРОБКА.png" alt="" class="salefoto">
                <div class="right">
                    <div class="rightright">
                        <h1 class="righttxt">ПОДВІЙНА СПРАГА</h1>
                        <p class="smalltxt">НАСОЛОЖДУЙТЕСЬ ЦИМ НАЙСМАЧНІШИМ МЕНЮ!
                            “ПОДВІЙНА СПРАГА” ВХОДИТЬ:
                            ЛОКШИНА РИСОВА З КУРКОЮ ТА ГРИБАМИ
                            
                            ДВА СОКИ - ЯБЛУЧНИЙ ТА ВИНОГРАДНИЙ
                            
                            ОДИН ТОБІ, А ІНШИЙ ДРУГУ.</p>
                        <h1 class="pricetxt">45₴</h1>
                    </div>
                </div>
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