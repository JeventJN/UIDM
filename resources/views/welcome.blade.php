<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/welcome.css">
  @vite('resources/css/app.css')
</head>
<body>
    <div class="h-screen w-screen flex flex-col justify-center items-center bg-gradient-to-b from-[#163E58] to-[#1A2737]">
        <div class="w-auto h-[15vw] flex items-center">
            <div class="w-[15vw] h-[15vw]">
                <img src="Assets/SteamLogo.png" alt="">
            </div>
            <div class="text-[10vw] text-white ml-[2vw]">
                STEAM
            </div>
        </div>
        <a href="dataset">
            <div class="container w-[48vw] h-[4vw] flex justify-center items-center text-[#05142D] rounded-[2vw] mt-[2vw] bg-slate-500 hover:animate-pulse hover:cursor-pointer">
                <div class="text-[2vw]">
                    DATA MINING : STEAM'S GAMES DATA ANALYSIS
                </div>
                <div id="load" class="ml-[0.5vw] w-[2vw] h-[2vw]">
                    <img src="Assets/Loading.png" alt="">
                </div>
            </div>
        </a>
    </div>
</body>
</html>
