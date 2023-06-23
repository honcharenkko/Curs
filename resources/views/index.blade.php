<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NUDEL MAG</title>
    <link rel="stylesheet" href="\css\app.css">
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
    position: relative;
    margin: auto;
    display: flex;
    align-items: center;
    
}
#menutxt{
    right: 0;
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

#txtm{
    padding: 0;
    margin: auto;
    position: absolute;
    
    height: 100px;
    bottom: 0;
    left: 0px;
    right: 0px;
    top: 0px;
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

    width: 1308px;
    height: 293px;


font-family: 'Nirmala UI';
font-style: normal;
font-weight: 700;
font-size: 220px;
line-height: 293px;
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
    right: 25px;
    top: 0px;

    user-select: none;

width: 1308px;
height: 293px;


font-family: 'Nirmala UI';
font-style: normal;
font-weight: 700;
font-size: 220px;
line-height: 293px;
/* identical to box height */


color: #224D81;

}
#txt2{
    position: absolute;
    text-align: center;
    padding: 0;
    margin: auto;
    bottom: 0;
    left: 25px;
    right: 0px;
    top: 0px;

    user-select: none;

width: 1308px;
height: 293px;


font-family: 'Nirmala UI';
font-style: normal;
font-weight: 700;
font-size: 220px;
line-height: 293px;
/* identical to box height */


color: #5391AB;

}

#line{
    position: absolute;
    padding: 0;
    margin: auto;
    bottom: 0;
    left: 100px;
    right: 0px;
    top: 0px;
}

@media screen and (max-width: 1335px) {
    #txt{
        font-size: 120px;
    }
    #txt1{
        font-size: 120px;
    }
    #txt2{
        font-size: 120px;
    }
}

</style>
</head>
<body>
    <div class="main1">
    
    <div class="kopf1"> 
            <div id="kopfmenu">
                <div id="fotobox">
                    <a href="telmein"><img src="/FOTO/Nudel-ііііpng.png" id="foto" alt=""></a>
                </div>
                <div id="menutxt">
                    <a href="menu" class="menutt">МЕНЮ</a>
                    <a href="{{ route('location') }}" class="menutt">ЛОКАЦІЇ</a>
                    <a href="action" class="menutt">АКЦІЇ</a>
                    <a href="about" class="menutt">ПРО НАС</a>
                </div>
            </div>
        </div>
        <div id="txtm">
            <img src="/FOTO/Vector 1.png" alt="" id="line">
            <h1 id="txt2">NUDEL MAG</h1>
            <h1 id="txt1">NUDEL MAG</h1>
            <h1 id="txt">NUDEL MAG</h1>
        </div>
    </div>
</body>
</html>