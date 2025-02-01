<!doctype html>
<html lang="en">
    <head>
        <!-- Metadata -->
        <meta charset="utf-8" />
        <title>The Trendsetting Tiki-Taks' Sign up Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="noindex, nofollow">
        <meta name="description" content="A sign up website for a Tiki-themed baseball team, where users can apply and add content to the database">
        <link rel="shortcut icon" href="./img/TikiLogo.webp" type="image/x-icon">
        <!-- Css -->
        <link rel="stylesheet" href="./css/style.css">
        <!-- Custom font links -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Atma:wght@300;400;500;600;700&family=Barriecito&display=swap" rel="stylesheet">
    </head>
    <body>
        <!-- Header -->
        <header>
            <div>
                <img src="./img/TikiLogo.webp" alt="Tiki Team Logo">
                <h1>The Trendsetting Tiki-Taks Sign up Page</h1>
            </div>
            <!-- Navigation -->
            <nav>
                <menu>
                    <li><a href="#form">locations</a></li>
                    <li><a href="#form">Register</a></li>
                    <li><a href="#form">Seasons</a></li>
                </menu>
            </nav>
        </header>
        <section class="teamWelcome">
            <div>
                <h2>Welcome to the Tribe!</h2>
            </div>
        </section>
        <!-- Main -->
        <main>
            <!-- About section -->
            <section class="about">
                <h3>About us</h3>
                <p>The Trendsetting Tiki-Taks are a Muskoka-based baseball team that's been around for a little over a decade. We've strived on the message that no matter your skill level, you can be an amazing player! It's all in the practice!</p>
                <p>Despite us being locally run, we've got plenty of players ready to prove their strength! <span id="sneak">And considering that you're on our page right now,</span> you must be interested in joining us! If you're up for it, feel free to fill out the form below, and become apart of the Tribe!</p>
            </section>
            <!-- First name -->
            <section id="forms">
                <form method="post" action="accountSubmitted.php"> 
                    <h2>Sign up Here!</h2>
                    <div>
                        <label for="fname">First Name</label>
                        <div>
                            <input type="text" name="fname" id="fname">
                        </div>
                    </div>
                    <!-- Last Name -->
                    <div>
                        <label for="lname">Last Name</label>
                        <div>
                            <input type="text" name="lname" id="lname">                        
                        </div>
                    </div>
                    <!-- Email -->
                    <div>
                        <label  for="email">Your Email</label>
                        <div>
                            <input type="email" name="email" id="email">                        
                        </div>
                    </div>
                    <!-- Age -->
                    <div>
                        <label for="age">Age</label>
                        <div>
                            <input type="number" name="age" id="age">
                        </div>
                    </div>
                    <!-- Phone Number -->
                    <div>
                        <label for="phone">Phone Number</label>
                        <div>
                            <input type="tele" name="phone" id="phone">
                        </div>
                    </div>
                    <!-- Submit button -->
                    <div>
                        <button type="submit">Submit</button>
                    </div>
                </form>
            </section>
        </main>
        <!-- Footer -->
        <footer>
            <p>©DeHaans & Co., 2004</p>
        </footer>
    </body>
</html>