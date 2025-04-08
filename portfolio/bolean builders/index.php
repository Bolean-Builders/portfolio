!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ghana Web Designs</title>
    
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
        }

        header {
    background-image: url('im.jpg'); /* Add your image path */
    background-size: cover;
    height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    color: white;
    position: relative;
}

/* Dark overlay */
header::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.6); /* Adjust darkness */
}

/* Ensure content stays on top */
header * {
    position: relative;
    z-index: 1;
}


        .hero h1 {
            font-size: 2.5rem;
            margin: 0;
            font-weight: 900;
        }

        .hero p {
            font-size: 1.2rem;
        }

        .quote-btn {
            background-color: #0A1F44;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 1rem;
            cursor: pointer;
            font-weight: 800;
        }

        .intro {
            padding: 20px;
            background-color: #f4f4f4;
            text-align: center;
        }

        . {
    font-weight: 900; /* Maximum boldness */
}

        /* Color changing animation */
        .highlight {
    animation: colorChange 5s infinite alternate ease-in-out;
    font-weight: 900;
}

@keyframes colorChange {
    0% { color: red; }
    25% { color: blue; }
    50% { color: green; }
    75% { color: purple; }
    100% { color: orange; }
}

.contact {
    position: fixed;
    right: 20px; /* Adjust as needed */
    bottom: 20px; /* Keeps it at the bottom */
    z-index: 1000; /* Ensures it's above other elements */
}

.whatsapp img {
    width: 50px; /* Adjust size */
    height: 50px;
    border-radius: 50%; /* Makes it round */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    transition: transform 0.3s ease-in-out;
}

.whatsapp img:hover {
    transform: scale(1.1);
}

    </style>
</head>
<body>

    <header>
        <div class="hero">
            <h1 id="hero-text"></h1>  <!-- The text will be typed here -->
            <p>Empowering Your Business with Cutting-Edge Software, Web & Digital Solutions. Let's Build the Future Together!</p>
            
            <button class="quote-btn">REQUEST FREE QUOTE</button>
        </div>
    </header>
    
    <main>
        <section class="intro">
            <h2>Welcome to <span class="highlight">BOLEAN BUILDERS</span></h2>
            <p>We are the best Website design and development company in Accra, Kumasi and all over Ghana...</p>
        </section>
    </main>
    
    <div class="contact">
    <a href="https://wa.me/233543973755" class="whatsapp">
        <img src="wat.webp" alt="WhatsApp" />
    </a>
</div>


    <!-- JavaScript for Typing Effect -->
    <script>
        const text = "Innovate, Code And Transform";
        let index = 0;
        let heroText = document.getElementById("hero-text");

        function typeText() {
            if (index < text.length) {
                heroText.innerHTML += text.charAt(index);
                index++;
                setTimeout(typeText, 100); // Adjust typing speed here
            } else {
                setTimeout(resetTyping, 3000); // Wait 3 seconds before resetting
            }
        }

        function resetTyping() {
            heroText.innerHTML = ""; // Clear the text
            index = 0;
            typeText(); // Restart typing
        }

        document.addEventListener("DOMContentLoaded", typeText);

        // Button Click Event
        document.querySelector('.quote-btn').addEventListener('click', function() {
            alert('Requesting a free quote...');
        });
    </script>

</body>
</html>