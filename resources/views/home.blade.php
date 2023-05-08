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
        <a id="database">
            <div class="database w-screen flex flex-col">
                <div class="flex w-screen justify-start items-center ml-[1vw]">
                    <img class="rounded-[50%] w-[10vw] h-[5vw]" src="Assets/Kaggle_Logo.png" alt="">
                    <div class="text-[2vw] text-white font-bold font-nunito italic">
                        &nbsp: Steam Store Game (Clean dataset)
                    </div>
                </div>
                <div class="ml-[1vw] text-[2vw] text-white font-bold font-nunito leading-loose">
                    <div class="flex">
                        <div>
                            Author &nbsp&nbsp&nbsp&nbsp&nbsp: <mark class="bg-[#FFFFFF] rounded-[1vw]"> &nbsp Nik Davis &nbsp</mark> <br/>
                            Published : <mark class="bg-[#FFFFFF] rounded-[1vw]"> &nbsp 05/02/2019 &nbsp</mark> <br/>
                        </div>
                        <div class="ml-[4vw]">
                            Row &nbsp&nbsp&nbsp&nbsp&nbsp: <mark class="bg-[#FFFFFF] rounded-[1vw]"> &nbsp 27.075 &nbsp</mark> <br/>
                            column : <mark class="bg-[#FFFFFF] rounded-[1vw]"> &nbsp 18 &nbsp</mark> <br/>
                        </div>
                    </div>
                    Link : <mark class="bg-[#FFFFFF] rounded-[1vw]"> &nbsp https://www.kaggle.com/datasets/nikdavis/steam-store-games &nbsp</mark>
                </div>
                <img  class="p-[2vw] mr-[1vw]" src="Assets/KaggleInfo.png" alt="">
            </div>
        </a>
        <a id="language">
            <div class="h-[4.5vw] w-screen"></div>
            <div class="segment text-white font-nunito font-black flex text-[1.75vw] h-auto items-start justify-start flex flex-col">
                <div class="segmentTitle flex justify-center items-center rounded-l-lg rounded-[2vw] h-5vw bg-red-500">
                    Language
                </div>
                <div class="w-screen h-auto flex justify-center">
                    {!! file_get_contents(public_path('HTML/language.html')) !!}
                </div>
            </div>
        </a>
        <a id="date">
            <div class="h-[4.5vw] w-screen"></div>
            <div class="segment text-white font-nunito font-black flex text-[1.75vw] h-auto items-start justify-start flex flex-col">
                <div class="segmentTitle flex justify-center items-center rounded-l-lg rounded-[2vw] bg-red-500">
                    Release Date
                </div>
                <div class="w-screen h-auto flex justify-center">
                    {!! file_get_contents(public_path('HTML/rdpie.html')) !!}
                </div>
            </div>
        </a>
        <a id="developer">
            <div class="h-[4.5vw] w-screen"></div>
            <div class="segment text-white font-nunito font-black flex text-[1.75vw] h-auto items-start justify-start flex flex-col">
                <div class="segmentTitle flex justify-center items-center rounded-l-lg rounded-[2vw] bg-red-500">
                    Developer
                </div>
                <div class="w-screen h-auto flex justify-center">
                    {!! file_get_contents(public_path('HTML/devpie.html')) !!}
                </div>
                <div class="w-screen h-auto flex justify-center">
                    {!! file_get_contents(public_path('HTML/devbar.html')) !!}
                </div>
            </div>
        </a>
        <a id="publisher">
            <div class="h-[4.5vw] w-screen"></div>
            <div class="segment text-white font-nunito font-black flex text-[1.75vw] h-auto items-start justify-start flex flex-col">
                <div class="segmentTitle flex justify-center items-center rounded-l-lg rounded-[2vw] bg-red-500">
                    Publisher
                </div>
                <div class="w-screen h-auto flex justify-center">
                    {!! file_get_contents(public_path('HTML/pubpie.html')) !!}
                </div>
                <div class="w-screen h-auto flex justify-center">
                    {!! file_get_contents(public_path('HTML/pubbar.html')) !!}
                </div>
            </div>
        </a>
        <a id="platform">
            <div class="h-[4.5vw] w-screen"></div>
            <div class="segment text-white font-nunito font-black flex text-[1.75vw] h-auto items-start justify-start flex flex-col">
                <div class="segmentTitle flex justify-center items-center rounded-l-lg rounded-[2vw] bg-red-500">
                    Platform
                </div>
                <div class="w-screen h-auto flex justify-center">
                    {!! file_get_contents(public_path('HTML/platpie.html')) !!}
                </div>
                <div class="w-screen h-auto flex justify-center">
                    {!! file_get_contents(public_path('HTML/platbar.html')) !!}
                </div>
            </div>
        </a>
        <a id="age">
            <div class="h-[4.5vw] w-screen"></div>
            <div class="segment text-white font-nunito font-black flex text-[1.75vw] h-auto items-start justify-start flex flex-col">
                <div class="segmentTitle flex justify-center items-center rounded-l-lg rounded-[2vw] bg-red-500">
                    Age
                </div>
                <div class="w-screen h-auto flex justify-center">
                    {!! file_get_contents(public_path('HTML/agepie.html')) !!}
                </div>
                <div class="w-screen h-auto flex justify-center">
                    {!! file_get_contents(public_path('HTML/agebar.html')) !!}
                </div>
                <div class="w-screen h-auto flex justify-center">
                    {!! file_get_contents(public_path('HTML/agepie2.html')) !!}
                </div>
            </div>
        </a>
        <a id="category">
            <div class="h-[4.5vw] w-screen"></div>
            <div class="segment text-white font-nunito font-black flex text-[1.75vw] h-auto items-start justify-start flex flex-col">
                <div class="segmentTitle flex justify-center items-center rounded-l-lg rounded-[2vw] bg-red-500">
                    Category
                </div>
                <div class="w-screen h-auto flex justify-center">
                    {!! file_get_contents(public_path('HTML/catpie.html')) !!}
                </div>
                <div class="w-screen h-auto flex justify-center">
                    {!! file_get_contents(public_path('HTML/catbar.html')) !!}
                </div>
            </div>
        </a>
        <a id="gender">
            <div class="h-[4.5vw] w-screen"></div>
            <div class="segment text-white font-nunito font-black flex text-[1.75vw] h-auto items-start justify-start flex flex-col">
                <div class="segmentTitle flex justify-center items-center rounded-l-lg rounded-[2vw] bg-red-500">
                    Genre
                </div>
                <div class="w-screen h-auto flex justify-center">
                    {!! file_get_contents(public_path('HTML/genpie.html')) !!}
                </div>
                <div class="w-screen h-auto flex justify-center">
                    {!! file_get_contents(public_path('HTML/genbar.html')) !!}
                </div>
            </div>
        </a>
        <a id="tag">
            <div class="h-[4.5vw] w-screen"></div>
            <div class="segment text-white font-nunito font-black flex text-[1.75vw] h-auto items-start justify-start flex flex-col">
                <div class="segmentTitle flex justify-center items-center rounded-l-lg rounded-[2vw] bg-red-500">
                    Tag
                </div>
                <div class="w-screen h-auto flex justify-center">
                    {!! file_get_contents(public_path('HTML/tagpie.html')) !!}
                </div>
                <div class="w-screen h-auto flex justify-center">
                    {!! file_get_contents(public_path('HTML/tagbar.html')) !!}
                </div>
            </div>
        </a>
        <a id="price">
            <div class="h-[4.5vw] w-screen"></div>
            <div class="segment text-white font-nunito font-black flex text-[1.75vw] h-auto items-start justify-start flex flex-col">
                <div class="segmentTitle flex justify-center items-center rounded-l-lg rounded-[2vw] bg-red-500">
                    Price
                </div>
                <div class="w-screen h-auto flex justify-center">
                    {!! file_get_contents(public_path('HTML/prcpie.html')) !!}
                </div>
                <div class="w-screen h-auto flex justify-center">
                    {!! file_get_contents(public_path('HTML/prcpieseg.html')) !!}
                </div>
            </div>
        </a>
        <a id="overview" href="">
            <div class="overview">
                Yes berhasil
            </div>
        </a>
    </div>
</body>
</html>
