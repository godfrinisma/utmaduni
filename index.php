<!doctype html>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<title>UtamaduniWears</title>
	<link rel="stylesheet"  href="css/style.css">
    <script type="text/javascript" src="jquerry.js"></script>
</head>
<body>
    <div class="container">
        <header><h1>Utamaduni Wears Blog</h1></header>
        <nav>
            <ul>
                <a href="#"><li>Home</li></a>
                <a href="about.php"><li>About Us</li></a>
                <a href="services.php"><li>Services</li></a>
                <a href="contact.php"><li>Contact Us</li></a>
                <a href="signup.php"><li>Sign Up</li></a>
                <a href="login.php"><li>Login</li></a>
            </ul>
            <div class="handle">Menu</div>
        </nav>
    </div>





   <!-- <header> 
    	<div class="container">
    		<div id=brand>
    			<h1><span class="highlight">Accidental</span> Genius Blog</h1>
    		</div>
    		<div  id="sideBar" class="navigation">
                <div class="toggle-btn" onclick="toggleSidebar()">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
    			<nav>
    			    <ul>
    				   <li class="current"><a href="#">Home</a></li>
    				   <li><a href="project.html">Projects</a></li>
    				   <li><a href="about.html">About Me</a></li>
    				   <li><a href="contact.html">Contact Me</a></li>
    			    </ul>
    		    </nav>
    		</div>
    		<div id="button-box" class="button-box">
    			<button type="button" id="toggle-nav" class="toggle-nav">MENU<span>&#9776</span></button>
    		</div>
    	</div>
    </header>
-->

     <section id="showcase">
        <div class="container">
            <div id="main-col">
                <h1><u>Welcome to Utamaduni Wears</u></h1>
                <p>This website is all about the East African culture clothes for the children, youths and adults..</p>
            </div>
            
        
        </div>
    </section>
    <section id="newsletter">
        <div class="container">
            <h1>Signup for our newsletter</h1>
            <form>
                <input type="email" placeholder="Enter email...">
                <button type="submit" class="button_1">Register</button>
            </form>
        </div>
    </section>
    <section id="boxes">
        <div class="container">
            <div class="box">
                <img src="./image/mtoto.jpg">
                <h3>Kids have class too!!!</h3>
                <p>Life is too short to put on ugly clothes</p>
            </div>
            <div class="box">
                <img src="./image/couple.jpg">
                <h3>Spoil your lovers!!</h3>
                <p>Win their love by surprising them with utamaduni wears</p>
            </div>
            <div class="box">
                <img src="./image/family.jpg">
                <h3>Those family moments</h3>
                <p>Unite your family with love with utamaduni wears</p>
            </div>
        </div>
    </section>
    <footer>
        <p>Utamaduni Wears&copy; 2019</p>
    </footer>
    <script type="text/javascript">
       /* function toggleSidebar(){
            document.getElementById("sideBar").classList.toggle('active');
        }*/
        $('.handle').on('click', function(){
            $("nav ul").toggleClass('showing');
        });

    </script>

</body>
</html>