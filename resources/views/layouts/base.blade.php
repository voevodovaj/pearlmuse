<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pearl Muse Jewelry - Exclusive Baroque Pearl Jewelry</title>
    <meta name="title" content="Pearl Muse Jewelry — Exclusive Baroque Pearl Jewelry">
    <meta name="description"
        content="Discover exclusive baroque pearl jewelry for modern women and brides. Handmade statement necklaces, earrings, and timeless pearl pieces with worldwide shipping.">
    <meta name="theme-color" content="#faf9f6">
            @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" href="favicon.ico">
    <link rel='stylesheet' type="text/css" href="styles/style.css">
    <link rel='stylesheet' type="text/css" href="styles/header.css">
    <link rel='stylesheet' type="text/css" href="styles/footer.css">
    <link rel='stylesheet' type="text/css" href="styles/hero.css">
    <link rel='stylesheet' type="text/css" href="styles/categories.css">
    <link rel='stylesheet' type="text/css" href="styles/about.css">
    <link rel='stylesheet' type="text/css" href="styles/collections.css">
    <link rel="stylesheet" type="text/css" href="styles/product-slider.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet">
</head>
<header class="header">
    <input type="checkbox" id="menu-toggle" class="menu-toggle">
    <label for="menu-toggle" class="burger" aria-label="Open menu">
        <span></span>
        <span></span>
        <span></span>
    </label>
    <a href="/" class="logo">
        <img src="assets/images/logo-horizontal.webp" alt="Pearl Muse Jewelry">
    </a>
    <nav class="navigation">
        <ul>
            <li><a href="#">CATALOG</a></li>
            <li><a href="#">ABOUT</a></li>
            <li><a href="pages/contacts.html">CONTACTS</a></li>
        </ul>
    </nav>
    <div class="header-icons">
        <a href="#" class="icon-link" aria-label="Favorite">

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 28 28" stroke-width="1.5"
                stroke="currentColor" class="icon">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
            </svg>
        </a>
        <a href="#" class="icon-link" aria-label="Log in">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 28 28" stroke-width="1.5"
                stroke="currentColor" class="icon">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
            </svg>
        </a>
        <a href="#" class="icon-link" aria-label="Basket">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 28 28" stroke-width="1.5"
                stroke="currentColor" class="icon">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
            </svg>
        </a>
    </div>
</header>

<main>
   @yield('content')
</main>

<footer class="footer">
    <div class="footer-col">
        <a href="/" class="footer-col-logo">
            <img src="assets/images/logo-horizontal.webp" alt="Pearl Muse Jewelry">
        </a>
    </div>

    <div class="footer-col-accordion">
        <input type="checkbox" id="brand-toggle" class="footer-toggle">
        <label for="brand-toggle" class="footer-col-title">
            OUR BRAND
            <span class="footer-arrow">+</span>
        </label>

        <p class="footer-col-text">
            Timeless baroque pearl jewelry, handcrafted with elegance and love.
        </p>
    </div>

    <div class="footer-col-accordion">
        <input type="checkbox" id="menu-footer-toggle" class="footer-toggle">
        <label for="menu-footer-toggle" class="footer-col-title">
            MENU
            <span class="footer-arrow">+</span>
        </label>

        <nav class="footer-navigation">
            <ul>
                <li><a href="#" class="footer-col-link">Catalog</a></li>
                <li><a href="#" class="footer-col-link">About</a></li>
                <li><a href="pages/contacts.html" class="footer-col-link">Contacts</a></li>
            </ul>
        </nav>
    </div>

    <div class="footer-col-accordion">
        <input type="checkbox" id="contact-toggle" class="footer-toggle">
        <label for="contact-toggle" class="footer-col-title">
            CONTACTS
            <span class="footer-arrow">+</span>
        </label>

        <div class="footer-col-text">
            <a href="tel:+79991234567">+1 305 930 4769 </a>
            <a href="mailto:example@email.com">info@pearlmuse.com</a>
            <p>Florida, USA</p>
        </div>
    </div>

    <div class="footer-col">
        <div class="footer-col-title-last">FOLLOW US</div>

        <div class="footer-icons">
            <a href="#" class="icon-link" aria-label="Search">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="icon">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M6.827 6.175A2.31 2.31 0 0 1 5.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 0 0-1.134-.175 2.31 2.31 0 0 1-1.64-1.055l-.822-1.316a2.192 2.192 0 0 0-1.736-1.039 48.774 48.774 0 0 0-5.232 0 2.192 2.192 0 0 0-1.736 1.039l-.821 1.316Z" />
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M16.5 12.75a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0ZM18.75 10.5h.008v.008h-.008V10.5Z" />
                </svg>
            </a>

            <a href="#" class="icon-link" aria-label="Log in">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="icon">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.53 16.122a3 3 0 0 0-5.78 1.128 2.25 2.25 0 0 1-2.4 2.245 4.5 4.5 0 0 0 8.4-2.245c0-.399-.078-.78-.22-1.128Zm0 0a15.998 15.998 0 0 0 3.388-1.62m-5.043-.025a15.994 15.994 0 0 1 1.622-3.395m3.42 3.42a15.995 15.995 0 0 0 4.764-4.648l3.876-5.814a1.151 1.151 0 0 0-1.597-1.597L14.146 6.32a15.996 15.996 0 0 0-4.649 4.763m3.42 3.42a6.776 6.776 0 0 0-3.42-3.42" />
                </svg>
            </a>
        </div>
    </div>
</footer>

<body>

</body>

</html>