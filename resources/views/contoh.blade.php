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
    @include('navbar')
    <div class="w-screen h-auto bg-gradient-to-b from-[#163E58] to-[#1A2737]">
        <div class="h-[6vw] w-screen"></div>
        <a id="overview">
            <div class="overview">
                <div class="h-[4.5vw] w-screen"></div>
                <div class="segment text-white font-nunito font-black flex text-[1.75vw] h-auto items-start justify-start flex flex-col">
                    <div class="segmentTitle flex justify-center items-center rounded-l-lg rounded-[2vw] bg-red-500">
                        Overview
                    </div>
                    <div class="flex flex-wrap mt-[1vw] w-screen">
                        <div class="w-[49vw] flex m-[0.5vw] border-white items-center border-[0.2vw]">
                            <img class="w-[6vw] h-[6vw]" src="Assets/EnglishLogo.png" alt="">
                            <div class="flex flex-col">
                                <div class="text-[2vw]">
                                    Around 98.11% games are English based
                                </div>
                                <div class="text-[1vw] font-thin">
                                    If you want to game with high understanding you should learn english
                                </div>
                            </div>
                        </div>
                        <div class="w-[49vw] flex m-[0.5vw] border-white items-center border-[0.2vw]">
                            <img class="w-[6vw] h-[6vw]" src="Assets/Published.png" alt="">
                            <div class="flex flex-col">
                                <div class="text-[1.9vw]">
                                    87.5% games published on Steam since 2015
                                </div>
                                <div class="text-[1vw] font-thin">
                                    It could be assumed that game industry has growing rapidly since 2015
                                </div>
                            </div>
                        </div>
                        <div class="w-[49vw] flex m-[0.5vw] h-[5vw] border-white items-center border-[0.2vw]">
                            <img class="ml-[0.5vw] w-[5vw] h-[4.5vw]" src="Assets/COG.png" alt="">
                            <div class="ml-[0.5vw] flex flex-col">
                                <div class="text-[2vw]">
                                    Developer Most Game : Choice of Game
                                </div>
                                <div class="text-[1vw] font-thin">
                                    Choice of Game : 94 games in total
                                </div>
                            </div>
                        </div>
                        <div class="w-[49vw] flex m-[0.5vw] border-white items-center border-[0.2vw]">
                            <img class="ml-[0.5vw] w-[5vw] h-[4vw]" src="Assets/KoeiTecmo1.png" alt="">
                            <div class="ml-[0.5vw] flex flex-col">
                                <div class="text-[2vw]">
                                    Developer Most Game 2: Koei Tecmo
                                </div>
                                <div class="text-[1vw] font-thin">
                                    Koei Tecmo Game CO., LTD. : 72 games in total
                                </div>
                            </div>
                        </div>
                        <div class="w-[49vw] flex m-[0.5vw] border-white items-center border-[0.2vw]">
                            <img class="ml-[0.5vw] w-[5vw] h-[4vw]" src="Assets/BigFish.png" alt="">
                            <div class="ml-[0.5vw] flex flex-col">
                                <div class="text-[2vw]">
                                    Publisher Most Game 1: Big Fish Games
                                </div>
                                <div class="text-[1vw] font-thin">
                                    Big Fish Games : 212 games in total
                                </div>
                            </div>
                        </div>
                        <div class="w-[49vw] flex m-[0.5vw] border-white items-center border-[0.2vw]">
                            <img class="ml-[0.5vw] w-[5vw] h-[4vw]" src="Assets/StrategyFirst.png" alt="">
                            <div class="ml-[0.5vw] flex flex-col">
                                <div class="text-[2vw]">
                                    Publisher Most Game 2: Strategy First
                                </div>
                                <div class="text-[1vw] font-thin">
                                    Strategy First : 136 games in total
                                </div>
                            </div>
                        </div>
                        <div class="w-[49vw] flex m-[0.5vw] border-white items-center border-[0.2vw]">
                            <img class="ml-[0.5vw] w-[5vw] h-[4vw]" src="Assets/LinuxLogo.png" alt="">
                            <div class="ml-[0.5vw] flex flex-col">
                                <div class="text-[2vw]">
                                    Most Compatible Platform : Linux
                                </div>
                                <div class="text-[1vw] font-thin">
                                    Linux is the most compatible platform for gaming : 27.075k
                                </div>
                            </div>
                        </div>
                        <div class="w-[49vw] flex m-[0.5vw] border-white items-center border-[0.2vw]">
                            <img class="ml-[0.5vw] w-[5vw] h-[5vw]" src="Assets/AgeLogo.png" alt="">
                            <div class="ml-[0.5vw] flex flex-col">
                                <div class="text-[2vw]">
                                    97.8% Games Have No Age-Restriction
                                </div>
                                <div class="text-[1vw] font-thin">
                                    Age-restriction absence could be caused by steam policy that the default age-restriction is 0
                                </div>
                            </div>
                        </div>
                        <div class="w-[49vw] flex m-[0.5vw] h-[5vw] border-white items-center border-[0.2vw]">
                            <img class="ml-[0.75vw] w-[4.5vw] h-[4.5vw] bg-white rounded-[50%]" src="Assets/SinglePlayer.png" alt="">
                            <div class="ml-[0.75vw] flex flex-col">
                                <div class="text-[2vw]">
                                    Category Most Game : Single-Player
                                </div>
                                <div class="text-[1vw] font-thin">
                                    Single-player category overthrow any other categories with total : 25.678
                                </div>
                            </div>
                        </div>
                        <div class="w-[49vw] flex m-[0.5vw] h-[5vw] border-white items-center border-[0.2vw]">
                            <img class="ml-[0.75vw] w-[4.5vw] h-[4.5vw] rounded-[50%]" src="Assets/IndieLogo.png" alt="">
                            <div class="ml-[0.75vw] flex flex-col">
                                <div class="text-[2vw]">
                                    Genre Most Game : Indie
                                </div>
                                <div class="text-[1vw] font-thin">
                                    Indie genre overthrow any other genres with total : 16.232
                                </div>
                            </div>
                        </div>
                        <div class="w-[49vw] flex m-[0.5vw] border-white items-center border-[0.2vw]">
                            <img class="ml-[0.5vw] w-[5vw] h-[5vw]" src="Assets/FreeLogo.png" alt="">
                            <div class="ml-[0.5vw] flex flex-col">
                                <div class="text-[2vw]">
                                    Around 9.45% Games Are Free
                                </div>
                                <div class="text-[1vw] font-thin">
                                    There are 2560 free-games provided in steam
                                </div>
                            </div>
                        </div>
                        <div class="w-[49vw] flex m-[0.5vw] border-white items-center border-[0.2vw]">
                            <img class="ml-[0.5vw] w-[5vw] h-[5vw]" src="Assets/5$.png" alt="">
                            <div class="ml-[0.5vw] flex flex-col">
                                <div class="text-[2vw]">
                                    Price Most Game : 5$ - 10$
                                </div>
                                <div class="text-[1vw] font-thin">
                                    Around 49.1% or 13.293 games are priced below 5$
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
</body>
</html>
