@extends('template1')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NUDEL MAG</title>
    <link rel="stylesheet" href="/containersss/locationtel.css">
    
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
    height: 2044px;
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
}
.mapp1{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 615px;
}
.mapp{
    position: absolute;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 615px;
}

.mapptitel{
    margin: 0;
font-family: 'Montserrat Alternates';
font-style: normal;
font-weight: 700;
font-size: 48px;
line-height: 64px;


text-align: center;

color: #000000;
}
.mapptxt{

margin: 0;
font-family: 'Montserrat Alternates';
font-style: normal;
font-weight: 300;
font-size: 20px;
line-height: 24px;
text-align: center;
letter-spacing: 0.05em;

color: #000000;
}

.mappimg{
    width: 340px;
    height: 430px;
}

.vector1{
    position: absolute;
    right: 0%;
    top: 120px;
}

.vector2{
    position: absolute;
    left: 0%;
    top:800px;
}
.vector3{
    position: absolute;
    right: 0%;
    top: 1600px;
}
</style>
</head>
<body>
    <div class="telephone">
        @section('content1')
        <img src="/FOTO/vectorlocation1.png" alt="" class="vector1">
        <img src="/FOTO/vectorlocztion2.png" alt="" class="vector2">
        <img src="/FOTO/vectorlocztion3.png" alt="" class="vector3">
        <div class="mapbody">
            <div class="mapp1">
                <div class="mapp">
                    <h1 class="mapptitel">Київ</h1>
                    <p class="mapptxt">Голосіївський проспект, 30А </p>
                    <img src="/FOTO/Mapsicle Map.png" alt="" class="mappimg">
                </div>
            </div>
            <div class="mapp1">
                <div class="mapp">
                    <h1 class="mapptitel">Харків</h1>
                    <p class="mapptxt">вулиця Пушкінська, 2а </p>
                    <img src="/FOTO/Mapsicle Map2.png" alt="" class="mappimg">
                </div>
            </div>
            <div class="mapp1">
                <div class="mapp">
                    <h1 class="mapptitel">Дніпро</h1>
                    <p class="mapptxt">вулиця Марії Кюрі, 5</p>
                    <img src="/FOTO/Mapsicle Map3.png" alt="" class="mappimg">
                </div>
            </div>
        </div>
    </div>
    @endsection
</body>
</html>