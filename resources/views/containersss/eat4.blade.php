@extends('template')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NUDEL MAG</title>
    <link rel="stylesheet" href="/containersss/eat4.css">
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
    
    justify-content: space-around;
    width: 100%;
    height: 700px;
    margin: 0;
    
}
.cocontblock{
    width: 434px;
}
.contblock{
    position: absolute;
    
    display: flex;
    flex-wrap:wrap;
    justify-content: space-between;
    border-radius: 60px;
    margin-top: 20px;
    width: 440px;
height: 278px;

background: rgba(255, 255, 255, 0.5);
box-shadow: inset 5px 5px 4px rgba(83, 145, 171, 0.25), inset -5px -5px 4px rgba(83, 145, 171, 0.25);
    
}
.contfoto{
    height: 607px;
    width: 607px;
}
.cocontblock1{
    width: 362px;
}
.contblock1{
    position: absolute;
    display: flex;
    flex-flow: column;
    align-items: center;
    border-radius: 60px;
    margin-top: 20px;
    width: 362px;
height: 421px;
border-radius: 60px;
background: rgba(255, 255, 255, 0.5);
box-shadow: inset 5px 5px 4px rgba(83, 145, 171, 0.25), inset -5px -5px 4px rgba(83, 145, 171, 0.25);
    
}

.infoinfo{
    display: flex;
    flex-flow: column;
    align-items: center;
    justify-content: center;
    width: 200px;
    height: 135px;
}
.infotxt{
margin: 0 0 5px 0;
font-family: 'Montserrat Alternates';
font-style: normal;
font-weight: 300;
font-size: 24px;
line-height: 29px;
letter-spacing: 0.405em;

color: #000000;

}

.infoprice{
margin: 0;
font-family: 'Montserrat Alternates';
font-style: normal;
font-weight: 500;
font-size: 64px;
line-height: 78px;
/* identical to box height */

letter-spacing: 0.15em;

color: #000000;
}
.imginfo{
    width: 100px;
}
.maintxt{
    margin-bottom: 40px;
    font-family: 'Montserrat Alternates';
font-style: normal;
font-weight: 700;
font-size: 32px;
line-height: 39px;
text-align: center;
letter-spacing: 0.1em;

color: #000000;

}
.coninftxt{
    margin: 0;
    text-align: center;
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

.vekt1{
    position: absolute;
    right: 0;
}
.vekt2{
    position: absolute;
    left: 0;
    bottom: 0;
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

        <div class="conteiner">
            <img src="/FOTO/reright.png" alt="" class="vekt1">
            <img src="/FOTO/releft.png" alt=""class="vekt2">
            <div class="cocontblock">
                    <div class="contblock">
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
            </div>
            <img src="/FOTO/КУРКА ГРИБИ.png" alt="" class="contfoto">
            <div class="cocontblock1">
                <div class="contblock1">
                    <h1 class="maintxt">ЛІСОВА <br> КУРКА</h1>
                    <p class="coninftxt">АЗІАТСЬКА РИСОВА ЛОКШИНА З КУРКОЮ ТА ГРИБАМИ. <br> 
                        СКЛАД: РИСОВА ЛОКШИНА,ШМАТОЧКИ ОМЛЕТУ, ЧАСНИК, ГРИБИ, ІМБИР, КУРЯЧА ГРУДКА, СПЕЦІЇ.</p>  
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