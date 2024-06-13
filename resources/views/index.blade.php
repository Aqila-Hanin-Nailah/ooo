<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portofolio</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="asset/css/app.css">
</head>
<body>
    <header>
        <!-- <div class="title">Kils'</div> -->
        <nav>
            <div class="navcontent">
            <div class="logo"><a href="#">Kils'</a></div>
            <label for="check"><div class="checkbox"></div>
                <i class="ri-menu-line"></i>
            </label>
            <input type="checkbox" name="check" id="check">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            </div>
        </nav>
        <section class="section">
            <div class="section_container">
                <div class="content">
                    <p class="samar">Hello!</p>
                    <h1 class="title">I'm <span>Aqila Hanin Nailah</span><br>Student of Wikrama Vocational High School</h1>
                    <p class="deskripsi">
                        Hello I am Aqila Hanin Nailah,<br> a student at a vocational high school. <br> Majoring in Software and Game Development. Welcome to my web
                    </p>
                    <div class="actionbutton">
                        <button class="git"><a href="https://github.com/Aqila-Hanin-Nailah">Git hub</a></button>
                        <button class="vercel"><a href="https://vercel.com/aqila-hanin-s-projects">Vercel</a></button>
                    </div>
                </div>
                <div class="image">
                    <img src="{{ 'asset/foto.jpg' }}" alt="Aqila Hanin Nailah">
                </div>
            </div>
        </section>
    </header>
</body>
</html>