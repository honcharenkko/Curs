@extends('template')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NUDEL MAG</title>
    <link rel="stylesheet" href="/mainpages/action.css">
    <link href="https://fonts.cdnfonts.com/css/nirmala" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@500;600;700&display=swap" rel="stylesheet">
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
.vector{
    width: 600px;
    position: absolute;
    left: 0px;
}
.vector1{
    width: 600px;
    position: absolute;
    right: 0px;
}

.contloc{
    position: absolute;
    display: flex;
    flex-flow: column;
    align-items: center;
    justify-content: center;
    width: 450px;
    height: 500px;

    border-radius: 60px;
    background: rgba(255, 255, 255, 0.5);
    box-shadow: inset -5px -5px 20px rgba(83, 145, 171, 0.25), inset 5px 5px 20px rgba(83, 145, 171, 0.25);

}
.cocontloc{
    width: 450px;
    height: 500px;
}

.actfoto{
    width: 390px;
    margin: -20px;
}
.actxt{
    margin: 0;


font-family: 'Montserrat Alternates';
font-style: normal;
font-weight: 700;
font-size: 48px;
line-height: 59px;
/* identical to box height */

letter-spacing: 0.15em;

color: #000000;
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
                <img src="/FOTO/actvectleft.png" alt="" class="vector">
                <img src="/FOTO/actvectright.png" alt="" class="vector1">
                <div class="cocontloc">
                    <a href="sale3">
                        <div class="contloc">
                            <h1 class="actxt">СКАЖЕНА</h1>
                            <img src="/FOTO/3 акция.png" alt="" class="actfoto">
                            <h1 class="actxt">КУРКА</h1>
                        </div>
                    </a>
                </div>
                <div class="cocontloc">
                    <a href="sale1">
                        <div class="contloc">
                            <h1 class="actxt">ШАЛЕНИЙ</h1>
                            <img src="/FOTO/ГЛАВНАЯ АКЦИЯ.png" alt="" class="actfoto">
                            <h1 class="actxt">ЧЕТВЕР</h1>
                        </div>
                    </a>
                </div>
                <div class="cocontloc">
                    <a href="sale2">
                        <div class="contloc">
                            <h1 class="actxt">ПОДВІЙНА</h1>
                            <img src="/FOTO/АКЦИЯ ПРОБКА.png" alt="" class="actfoto">
                            <h1 class="actxt">СПРАГА</h1>
                        </div>
                    </a>
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