@extends('template')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NUDEL MAG</title>
    <link rel="stylesheet" href="/mainpages/location.css">
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
    position: absolute;
    left: 400px;
}
.contloc{
    position: absolute;
    display: flex;
    flex-flow: column;
    align-items: center;
    width: 431px;
    height: 615px;
}
.cocontloc{
    width: 431px;
    height: 615px;
}
.mlocatxt{
    margin: 0;

font-family: 'Montserrat Alternates';
font-style: normal;
font-weight: 700;
font-size: 48px;
line-height: 64px;
/* identical to box height */

text-align: center;

color: #000000;
}
.plocatxt{
    margin: 0;
    
    font-family: 'Montserrat Alternates';
font-style: normal;
font-weight: 300;
font-size: 24px;
line-height: 29px;
text-align: center;
letter-spacing: 0.05em;
}

.locfot{
    margin-top: 15px;
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
        @foreach ($adress as $el)
            <div class="cocontloc">
                <div class="contloc">
                    <h1 class="mlocatxt">{{ $el->city }}</h1>
                    <p class="plocatxt">{{ $el->street }}</p>
                    <img src="/FOTO/Mapsicle Map.png" alt="" class="locfot">
                </div>
            </div>
            @endforeach
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