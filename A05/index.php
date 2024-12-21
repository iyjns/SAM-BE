<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "corememories";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>A05 SAM-BE</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body class="w3-content" style="max-width:1300px">

    <!-- First Grid: Logo & About -->
    <div class="w3-row">
        <div class="w3-half w3-black w3-container w3-center" style="height:700px">
            <div class="w3-padding-64">
                <h1>Island of Personality</h1>
            </div>
            <div class="w3-padding-64">
                <a href="#" class="w3-button w3-black w3-block w3-padding-16">Home</a>
                <a href="#family" class="w3-button w3-black w3-block w3-padding-16">Family</a>
                <a href="#work" class="w3-button w3-black w3-block w3-padding-16">Work</a>
                <a href="#hobby" class="w3-button w3-black w3-block w3-padding-16">Hobby</a>
                <a href="#place" class="w3-button w3-black w3-block w3-padding-16">Dream Place</a>
                <a href="#contact" class="w3-button w3-black w3-block w3-padding-16">Contact</a>
            </div>
        </div>
        <div class="w3-half w3-container" style="height:700px; background-color:#b99be5">
            <div class="w3-padding-64 w3-center">
                <h1>About Me</h1>
                <img src="https://raw.githubusercontent.com/iyjns/amethyst-valley/refs/heads/main/Amethyst_Pictures/IMG_0256.JPG"
                    class="w3-margin w3-circle" alt="Person" style="width:30%">
                <div class="w3-left-align w3-padding-large">
                    <p style="text-align: center; font-weight: bold;">Priya Jeanelle Espedido</p>
                    <p>I am a University student taking Bachelor of Science in Information Technology.</p>
                    <p>Currently the President of ISKOnnnovator Student Community at Polytechnic University of the
                        Philippines Sto Tomas Campus.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Second Grid: My Family -->
    <div class="w3-row">
        <div class="w3-half w3-center" style="min-height:800px; background-color:#9597bd;" id="family">
            <div class="w3-padding-64">
                <h2>My Family</h2>
                <p>My family is my quiet sanctuary, a treasure I rarely share with others. They are my source of
                    strength and joy, whose stories I hold close to my heart.</p>
            </div>
        </div>

        <!-- Third Grid: Work -->
        <div class="w3-half w3-center" style="min-height:800px; background-color:#85b8ed;" id="work">
            <div class="w3-padding-64 w3-center">
                <h2>Work</h2>
                <p>A draft from my CV</p>
                <div class="w3-container w3-responsive">
                    <table class="w3-table">
                        <tr>
                            <th>Year</th>
                            <th>Role</th>
                            <th>Location</th>
                        </tr>
                        <tr>
                            <td>2021</td>
                            <td>SEO Specialist</td>
                            <td>Australia</td>
                        </tr>
                        <tr>
                            <td>2012-2016</td>
                            <td>The rest is history..</td>
                            <td>Lorem ipsum</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Fourth Grid: Hobby -->
    <div class="w3-half w3-center" style="min-height:800px; background-color:#7ad5ce;" id="hobby">
        <div class="w3-padding-64 w3-center">
            <h2>Hobby</h2>
            <p>I enjoy diving into the world of anime, with a special love for iconic characters like Gojo, while also
                exploring creative outlets such as Violin, and Reading. My hobbies keep me inspired, offering a mix of
                imagination, excitement, and self-expression.</p>
        </div>
    </div>

    <!-- Fourth Grid: Dream Place -->
    <div class="w3-half w3-center" style="min-height:800px; background-color:#8ac664;" id="place">
        <div class="w3-padding-64">
            <h2>Dream Place</h2>
            <p>I dream of visiting places that inspire creativity and serenity, where I can explore my love for anime,
                music, and art while connecting with nature and culture.</p>
        </div>
    </div>

    <!-- Fourth Grid: Contact -->
    <div class="w3-half w3-dark-grey w3-container w3-center" style="height:700px; background-color:#d03826 !important;">
        <div class="w3-padding-64">
                <h1>Creation By</h1>
            </div>
            <div class="w3-padding-64">
                <p>Priya Jeanelle Espedido</p>
                <p>Sampaloc, Manila</p>
                <p>+09 171570572</p>
                <p>priyajeanelle@test.com</p>
            </div>
        </div>
        <div id="contact" class="w3-half w3-container" style="height:700px; background-color:#de7e2a;">
            <div class="w3-padding-64 w3-padding-large">
                <h1>Contact</h1>
                <p class="w3-opacity">GET IN TOUCH</p>
                <form class="w3-container w3-card w3-padding-32 w3-white" action="/action_page.php" target="_blank">
                    <div class="w3-section">
                        <label>Name</label>
                        <input class="w3-input" style="width:100%;" type="text" required name="Name">
                    </div>
                    <div class="w3-section">
                        <label>Email</label>
                        <input class="w3-input" style="width:100%;" type="text" required name="Email">
                    </div>
                    <div class="w3-section">
                        <label>Message</label>
                        <input class="w3-input" style="width:100%;" type="text" required name="Message">
                    </div>
                    <button type="submit" class="w3-button w3-teal w3-right"
                        style="background-color:#de7e2a;">Send</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="w3-container w3-black w3-padding-16">
        <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">Priya@w3.css</a></p>
    </footer>

</body>

</html>
