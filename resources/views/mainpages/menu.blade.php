@extends('template')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NUDEL MAG</title>
    <link rel="stylesheet" href="\mainpages\menu.css">
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
    height: 1226px;

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
    flex-flow: column;
    align-items: center;
    width: 100%;
    height: 1000px;
    margin: 0;
    
}

.vector{
    position: absolute;
    left: 0px;
    width: 600px;
    bottom: 0px;
}
.vector1{
    position: absolute;
    right: 0px;
    width: 600px;
}
.comenublock{
    width: 1407px;
height: 457px;
}
.menublock{
    position: absolute;
    display: flex;
    flex-flow: column;
margin-top: 30px;
align-items: center;
width: 1407px;
height: 457px;

}
.menutxt{
margin: 0;

font-family: 'Montserrat Alternates';
font-style: normal;
font-weight: 300;
font-size: 48px;
line-height: 59px;
/* identical to box height */


color: #000000;
}
.bordermenu{
    display: flex;
    justify-content: space-around;
    align-items: center;
    width: 1400px;
height: 360px;
border-radius: 50px;
background: rgba(255, 255, 255, 0.5);
box-shadow: inset -5px -5px 20px rgba(83, 145, 171, 0.25), inset 5px 5px 20px rgba(83, 145, 171, 0.25);
}
.menucard{
    position: relative;
    display: flex;
    flex-flow: column;
    align-items: center;
    width: 250px;
height: 320px;
border-radius: 60px;
background: rgb(255,255,255);
background: linear-gradient(180deg, rgba(255,255,255,1) 0%, rgba(0,0,0,0.38139005602240894) 100%);
}
.backfoto{
    position: absolute;
    bottom: 0;
    border-radius: 0 0 50px 50px ;
    overflow: hide;
}
.cardinfo{
    display: flex;
    flex-wrap:wrap;
    margin-top: 15px;
    justify-content: space-between;
    width: 215px;
height: 115px;
}
.cardfoto{
    position: absolute;
    
    width: 186px;
height: 186px;
bottom: 11px;
}
.infoinfo{
    display: flex;
    flex-flow: column;
    align-items: center;
    width: 100px;
    height: 57.5px;
}
.infotxt{
margin: 0 0 5px 0;
font-family: 'Montserrat Alternates';
font-style: normal;
font-weight: 300;
font-size: 12px;
line-height: 15px;
/* identical to box height */

letter-spacing: 0.405em;

color: #000000;
}

.infoprice{
margin: 0;
font-family: 'Montserrat Alternates';
font-style: normal;
font-weight: 500;
font-size: 24px;
line-height: 29px;
letter-spacing: 0.15em;

color: #000000;
}
.imginfo{
    width: 50px;
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
                <img src="/FOTO/menuvectleft.png" alt="" class="vector">
                <img src="/FOTO/menuvectright.png" alt="" class="vector1">
                <div class="comenublock">
                    <div class="menublock">
                        <h1 class="menutxt">ЛОКШИНА</h1>
                        <div class="bordermenu">
                            <a href="eat1">
                                <div class="menucard">
                                    <div class="cardinfo">
                                        <div class="infoinfo">
                                            <h1 class="infotxt">ціна</h1>
                                            <h1 class="infoprice">35₴</h1>
                                        </div>
                                        <div class="infoinfo">
                                            <h1 class="infotxt">калорії</h1>
                                            <h1 class="infoprice">228</h1>
                                        </div>
                                        <div class="infoinfo">
                                            <h1 class="infotxt">овочі</h1>
                                            <img src="/FOTO/free-icon-vegetable-5016784.png" alt="" class="imginfo">
                                        </div>
                                        <div class="infoinfo">
                                            <h1 class="infotxt">курка</h1>
                                            <img src="/FOTO/free-icon-meat-810498.png" alt="" class="imginfo">
                                        </div>
                                    </div>
                                    <img src="/FOTO/3.png" alt="" class="backfoto">
                                    <img src="/FOTO/курка локшина.png" alt="" class="cardfoto">
                                </div>
                            </a>
                            <a href="eat2">
                                <div class="menucard">
                                    <div class="cardinfo">
                                        <div class="infoinfo">
                                            <h1 class="infotxt">ціна</h1>
                                            <h1 class="infoprice">45₴</h1>
                                        </div>
                                        <div class="infoinfo">
                                            <h1 class="infotxt">калорії</h1>
                                            <h1 class="infoprice">324</h1>
                                        </div>
                                        <div class="infoinfo">
                                            <h1 class="infotxt">мор.прод</h1>
                                            <img src="/FOTO/free-icon-seafood-3081974.png" alt="" class="imginfo">
                                        </div>
                                        <div class="infoinfo">
                                            <h1 class="infotxt">яловичина</h1>
                                            <img src="/FOTO/free-icon-meat-933310.png" alt="" class="imginfo">
                                        </div>
                                    </div>
                                    <img src="/FOTO/4.png" alt="" class="backfoto">
                                    <img src="/FOTO/ЯЛОВИЧИНА ЛОКШИНА.png" alt="" class="cardfoto">
                                </div>
                            </a>
                            <a href="eat3">
                            <div class="menucard">
                                <div class="cardinfo">
                                    <div class="infoinfo">
                                        <h1 class="infotxt">ціна</h1>
                                        <h1 class="infoprice">50₴</h1>
                                    </div>
                                    <div class="infoinfo">
                                        <h1 class="infotxt">калорії</h1>
                                        <h1 class="infoprice">280</h1>
                                    </div>
                                    <div class="infoinfo">
                                        <h1 class="infotxt">креветка</h1>
                                        <img src="/FOTO/free-icon-shrimp-2669296.png" alt="" class="imginfo">
                                    </div>
                                    <div class="infoinfo">
                                        <h1 class="infotxt">качка</h1>
                                        <img src="/FOTO/free-icon-peking-duck-3448071.png" alt="" class="imginfo">
                                    </div>
                                </div>
                                <img src="/FOTO/5.png" alt="" class="backfoto">
                                <img src="/FOTO/КАЧКА ГОЧТРА.png" alt="" class="cardfoto">
                            </div>
                            </a>
                            <a href="eat4">
                            <div class="menucard">
                                <div class="cardinfo">
                                    <div class="infoinfo">
                                        <h1 class="infotxt">ціна</h1>
                                        <h1 class="infoprice">35₴</h1>
                                    </div>
                                    <div class="infoinfo">
                                        <h1 class="infotxt">калорії</h1>
                                        <h1 class="infoprice">268</h1>
                                    </div>
                                    <div class="infoinfo">
                                        <h1 class="infotxt">гриби</h1>
                                        <img src="/FOTO/free-icon-mushroom-1790351.png" alt="" class="imginfo">
                                    </div>
                                    <div class="infoinfo">
                                        <h1 class="infotxt">курка</h1>
                                        <img src="/FOTO/free-icon-meat-810498.png" alt="" class="imginfo">
                                    </div>
                                </div>
                                <img src="/FOTO/6.png" alt="" class="backfoto">
                                <img src="/FOTO/КУРКА ГРИБИ.png" alt="" class="cardfoto">
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="comenublock">
                    <div class="menublock">
                        <h1 class="menutxt">НАПОЇ</h1>
                        <div class="bordermenu">
                            <a href="drink1">
                            <div class="menucard">
                                <div class="cardinfo">
                                    <div class="infoinfo">
                                        <h1 class="infotxt">ціна</h1>
                                        <h1 class="infoprice">8₴</h1>
                                    </div>
                                    <div class="infoinfo">
                                        <h1 class="infotxt">калорії</h1>
                                        <h1 class="infoprice">47</h1>
                                    </div>
                                    <div class="infoinfo">
                                        <h1 class="infotxt">сік</h1>
                                        <img src="/FOTO/free-icon-glass-of-water-175801.png" alt="" class="imginfo">
                                    </div>
                                    <div class="infoinfo">
                                        <h1 class="infotxt">апельсин</h1>
                                        <img src="/FOTO/free-icon-orange-slice-5258595.png" alt="" class="imginfo">
                                    </div>
                                </div>
                                <img src="/FOTO/or.png" alt="" class="backfoto">
                                <img src="/FOTO/orange.png" alt="" class="cardfoto">
                            </div>
                            </a>
                            <a href="drink2">
                            <div class="menucard">
                                <div class="cardinfo">
                                    <div class="infoinfo">
                                        <h1 class="infotxt">ціна</h1>
                                        <h1 class="infoprice">8₴</h1>
                                    </div>
                                    <div class="infoinfo">
                                        <h1 class="infotxt">калорії</h1>
                                        <h1 class="infoprice">56</h1>
                                    </div>
                                    <div class="infoinfo">
                                        <h1 class="infotxt">сік</h1>
                                        <img src="/FOTO/free-icon-glass-of-water-175801.png" alt="" class="imginfo">
                                    </div>
                                    <div class="infoinfo">
                                        <h1 class="infotxt">гранат</h1>
                                        <img src="/FOTO/free-icon-pomegranate-5402396.png" alt="" class="imginfo">
                                    </div>
                                </div>
                                <img src="/FOTO/gr.png" alt="" class="backfoto">
                                <img src="/FOTO/granat.png" alt="" class="cardfoto">
                            </div>
                            </a>
                            <a href="drink3">
                            <div class="menucard">
                                <div class="cardinfo">
                                    <div class="infoinfo">
                                        <h1 class="infotxt">ціна</h1>
                                        <h1 class="infoprice">8₴</h1>
                                    </div>
                                    <div class="infoinfo">
                                        <h1 class="infotxt">калорії</h1>
                                        <h1 class="infoprice">76</h1>
                                    </div>
                                    <div class="infoinfo">
                                        <h1 class="infotxt">сік</h1>
                                        <img src="/FOTO/free-icon-glass-of-water-175801.png" alt="" class="imginfo">
                                    </div>
                                    <div class="infoinfo">
                                        <h1 class="infotxt">виноград</h1>
                                        <img src="/FOTO/free-icon-grapes-1140275.png" alt="" class="imginfo">
                                    </div>
                                </div>
                                <img src="/FOTO/grap.png" alt="" class="backfoto">
                                <img src="/FOTO/grape.png" alt="" class="cardfoto">
                            </div>
                            </a>
                            <a href="drink4">
                            <div class="menucard">
                                <div class="cardinfo">
                                    <div class="infoinfo">
                                        <h1 class="infotxt">ціна</h1>
                                        <h1 class="infoprice">8₴</h1>
                                    </div>
                                    <div class="infoinfo">
                                        <h1 class="infotxt">калорії</h1>
                                        <h1 class="infoprice">46</h1>
                                    </div>
                                    <div class="infoinfo">
                                        <h1 class="infotxt">сік</h1>
                                        <img src="/FOTO/free-icon-glass-of-water-175801.png" alt="" class="imginfo">
                                    </div>
                                    <div class="infoinfo">
                                        <h1 class="infotxt">яблуко</h1>
                                        <img src="/FOTO/free-icon-apple-6270935.png" alt="" class="imginfo">
                                    </div>
                                </div>
                                <img src="/FOTO/ap.png" alt="" class="backfoto">
                                <img src="/FOTO/apple.png" alt="" class="cardfoto">
                            </div>
                            </a>
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