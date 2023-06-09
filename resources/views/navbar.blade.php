<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/welcome.css">
  @vite('resources/css/app.css')
</head>
<body class="overflow-x-hidden">
    <div class="fixed w-full h-[4vw] bg-[#356F97] text-[2vw] flex items-center z-50">
        <div class="w-[50%] ml-[2vw] font-bold hover:text-white">
            <a href="/">
                STEAM STORE GAMES
            </a>
        </div>
        <div class="w-[60%] flex justify-around">
            <a href="home#database">
                <div class="w-[20vw] flex justify-center">
                    <div class="w-[16vw] flex justify-center h-[3.5vw] hover:text-white hover:rounded-[1vw] hover:bg-[#1A2737]">
                        <p>Dataset</p>
                    </div>
                </div>
            </a>
            {{-- <a href="">
                <div class="w-[20vw] flex justify-center border-x-[0.2vw] border-x-[#1A2737]">
                    <div class="w-[16vw] flex justify-center h-[3.5vw] hover:text-white hover:rounded-[1vw] hover:bg-[#1A2737]">
                        <p>Contents</p>
                    </div>
                </div>
            </a> --}}
            <div class="flex flex-col w-[20vw] border-x-[0.2vw] border-x-[#1A2737] items-center">
                <div class="peer w-[16vw] h-[3.5vw] hover:text-white hover:rounded-[1vw] hover:bg-[#1A2737] flex justify-center">Content</div>
                <!-- the menu here -->
                <div class="peer1 hidden peer-hover:flex peer-hover:flex-col fixed mt-[3.5vw] hover:flex hover:flex-col">
                    <div class="h-[0.2vw]"></div>
                    <a class="peer2 w-[20vw] text-[1.5vw] flex justify-center items-center bg-[#1A2737] text-white border-[0.1vw] hover:bg-red-500" href="home#language">Language</a>
                    <a class="w-[20vw] text-[1.5vw] flex justify-center items-center bg-[#1A2737] text-white border-[0.1vw] hover:bg-red-500" href="home#date">Release Date</a>
                    <a class="w-[20vw] text-[1.5vw] flex justify-center items-center bg-[#1A2737] text-white border-[0.1vw] hover:bg-red-500" href="home#developer">Developer</a>
                    <a class="w-[20vw] text-[1.5vw] flex justify-center items-center bg-[#1A2737] text-white border-[0.1vw] hover:bg-red-500" href="home#publisher">Publiser</a>
                    <a class="w-[20vw] text-[1.5vw] flex justify-center items-center bg-[#1A2737] text-white border-[0.1vw] hover:bg-red-500" href="home#platform">Platform</a>
                    <a class="w-[20vw] text-[1.5vw] flex justify-center items-center bg-[#1A2737] text-white border-[0.1vw] hover:bg-red-500" href="home#age">Required Age</a>
                    <a class="w-[20vw] text-[1.5vw] flex justify-center items-center bg-[#1A2737] text-white border-[0.1vw] hover:bg-red-500" href="home#category">Category</a>
                    <a class="w-[20vw] text-[1.5vw] flex justify-center items-center bg-[#1A2737] text-white border-[0.1vw] hover:bg-red-500" href="home#genre">Genre</a>
                    <a class="w-[20vw] text-[1.5vw] flex justify-center items-center bg-[#1A2737] text-white border-[0.1vw] hover:bg-red-500" href="home#tag">Tag</a>
                    <a class="w-[20vw] text-[1.5vw] flex justify-center items-center bg-[#1A2737] text-white border-[0.1vw] hover:bg-red-500" href="home#price">Price</a>
                </div>
            </div>
            <script>
                const peer1 = document.querySelector('.peer1');
                const peer = document.querySelector('.peer');

                peer1.addEventListener('mouseover', () => {
                    peer.style.backgroundColor = '#1A2737';
                    peer.style.borderRadius = '1vw';
                    peer.style.color = 'white';
                });

                peer1.addEventListener('mouseout', () => {
                    peer.style.backgroundColor = '#356F97';
                    peer.style.color = 'black';
                });
            </script>
            </div>
            <a href="home#overview">
                <div class="w-[20vw] flex justify-center">
                    <div class="w-[16vw] flex justify-center h-[3.5vw] hover:text-white hover:rounded-[1vw] hover:bg-[#1A2737]">
                        <p>Overview</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</body>
</html>
