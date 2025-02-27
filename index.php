<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/logo2.jpg" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <title>COM 415 Assignment</title>
</head>
<body>
    <marquee behavior="scroll" direction="left">
        <h4>NACOS MAPOLY CONTACT US PAGE <span>designed by 
            <a href="https://wa.me/+2348123024462" target="_blank">uniqueGbengah</a></span>
        </h4>
    </marquee>
    <header>
        <nav>
            <div class="logo">
                <img src="./assets/logo.png" alt="logo">
            </div>
            <!-- <div class="nav-links">
                <img src="#" alt="">
            </div> -->
        </nav>
    </header>
    <main>
        <h1>Contact Us</h1>
        <section class="assign">
            <div class="first">
                <h3>Don't Hesitate to Contact Us Today!</h3>
                <p>Have any questions, concerns or difficulty? The NACOS MAPOLY Executives are here to help!</p>
                <p>Feel free to reach out to us for assistance with Academic Challenges, Course Registration, IT-related issues, or any other concerns.</p>
            </div>
            <div class="second">
                <form action="process.php" method="post">
                    <label for="name"></label>
                    <input type="text" name="user_name" alt="name" id="name" placeholder="Your Name"><br>

                    <label for="email"></label>
                    <input type="email" name="user_email" id="email" placeholder="Your Email"><br>    
                    <label for="level"><!-- Select Your Level: --></label>
                    <select name="user_level" id="level">
                        <option value="none">--Select your level--</option>
                        <option value="ND1">ND I</option>
                        <option value="ND1">ND II</option>
                        <option value="ND1">HND I</option>
                        <option value="ND1">HND II</option>
                    </select>
                    <br>

                    <label for="message"></label>
                    <textarea name="user_message" id="message" placeholder="Your Message"></textarea><br>
                    <input type="submit" value="Send Message">.
                </form>
            </div>
        </section>
    </main>
    <!-- <footer>
        <a href="#"><img src="" alt=""></a>
        <a href="#"><img src="" alt=""></a>
        <a href="#"><img src="" alt=""></a>
        <a href="#"><img src="" alt=""></a>
    </footer> -->
</body>
</html>