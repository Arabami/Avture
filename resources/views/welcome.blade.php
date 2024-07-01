<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AVTURE</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <h1>AVTURE</h1>
            </div>
            <nav>
                <ul>
                <li><a href="#" class="btn home">Home</a></li>
                <li><a href="#" class="btn products">Products</a></li>
                <li><a href="#" class="btn contacts">Contacts</a></li>
                <li><a href="#" class="btn about-us">About Us</a></li>
                </ul>
            </nav>
            <div class="user-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
            </div>
        </div>
    </header>

    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h2>Welcome to Your Dream Home with AVTURE</h2>
                <p>Discover the Art of Fine Living</p>
                <p>At AVTURE, we believe that your home is more than just a place - it's an expression of who you are. Our exclusive collection of high-quality furniture is designed to bring elegance, comfort, and functionality into your living spaces.</p>
                <button class="explore-button">Explore Collection</button>
            </div>
            </div>
        </div>
    </section>

    <script src="script.js"></script>
</body>
<footer class="footer">
        <div class="footer-background">
            <div class="footer-container container">
                <div class="footer-name"> 
                    <p class="footer-title rubik-heavy"> AVTURE</p>
                    <p class="footer-subtitle rubik-light"> Make your home beautiful is easy </p>
                </div>
                <div class="footer-misc">
                    <ul class="footer-menu grid rubik-light">
                        <li class="footer-item">
                        <li class="footer-item">
                            <a href="#" class="footer-link">Customer support</a>
                        </li>
                        <li class="footer-item">
                            <a href="#" class="footer-link">Jobs</a>
                        </li>
                        <li class="footer-item">
                            <a href="#" class="footer-link">Legal</a>
                        </li>
                    </ul>
                </div>
                <div class="footer-mail rubik-light">
                    <p>Get latest news and update:</p>
                    <form id="footer-form" class="footer-form">
                        <input type="text" id="email footer-form-input" class="footer-form-input" name="email" placeholder="you@example.com" required>
                        <button class="footer-submit buttons" onclick="validateForm()">Submit</button>
                    </form>
                </div>
            </div>
            <p class="footer-copyright rubik-light">&copy; Location : Gading Serpong Boulevard </p>
        </div>
    </footer>
</html>