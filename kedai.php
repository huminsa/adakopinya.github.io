<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADA KOPINYA</title>
    <!-- fonts-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,400;1,100;1,
700&display=swap" rel="stylesheet">

<!-- feather icons-->
<script src="https://unpkg.com/feather-icons"></script>
<!-- my style-->
<link rel="stylesheet" href="css/style.css">

</head>

<body>
<nav class="navbar">
        <a href ="#" class="navbar-logo">Ada <span> Kopinya</span></a>

        <div class="navbar-nav">
            <a href="#home">Home</a>
            <a href="#about">Tentang Kami</a>
            <a href="#menu">Menu</a>
            <a href="#contact">Kontak</a>
        </div>
        <div class="navbar-extra">
            <a href="#" id="search">
                <i data-feather="search"></i></a>
            <a href="#" id="shopping-cart">
                <i data-feather="shopping-cart"></i></a>
            <a href="#" id="hamburger-menu">
                <i data-feather="menu"></i></a>
            
        </div>

    </nav>
</body>
</html>
<script>
    :root{
    --primary: #b6895b;

    --bg: #010101;

}

* {
    
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    outline: none;
    border: none;
    text-decoration: none;
}

body{
    font-family:'Popins', sans-serif;
    background-color: var(--bg);
    color: #fff;
   min-height: 2000px;
}
 /* navbar  biar flex */
 .navbar {
    display: flex ;
    justify-content: space-between;
    align-items: center;
    padding: 1.4rem 7%;
    background-color: rgba(1, 1, 1,0.8);
    border-bottom: 1px solid #b6895b;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 9999;

 }
 .navbar .navbar-logo{
    font-size: 2rem;
    font-weight: 700;
    color: #fff;
    font-style: italic;
 }
.navbar .navbar-logo span {
    color: var(--primary);
 }

 .navbar .navbar-nav a{
    color: #fff;
    display: inline-block;
    font-size: 1.3rem;
    margin: 0 1rem;

 }
.navbar .navbar-nav a:hover{
    color: var(--primary);
}

.navbar .navbar-nav a::after{
    content: '';
    display: block;
    padding-bottom: 0.5rem;
    border-bottom: 0.1rem solid var(--primary);
    transform: scaleX(0);
    transition: 0.2s linear;
}
.navbar .navbar-nav a:hover::after{
    transform:  scaleX(0.5);
}
.navbar .navbar-extra a {
    color: #fff;
    margin: 0 0.5rem;
}
.navbar .navbar-extra a:hover{
    color: var(--primary);
}
#hamburger-menu{
    display: none;

}
</script>