<?php
include ("connect.php");
function getIslandData($conn, $islandID)
{
    $islandData = [];
    $query = "SELECT name, color FROM islandsofpersonality WHERE islandOfPersonalityID = $islandID";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $islandData = $result->fetch_assoc();
    }
    return $islandData;
}

function getIslandContents($conn, $islandID)
{
    $contents = [];
    $query = "SELECT content FROM islandcontents WHERE islandOfPersonalityID = $islandID";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $contents[] = $row['content'];
        }
    }
    return $contents;
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Island of Personality</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body class="w3-content" style="max-width:1300px">

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
    
    <class="w3-row">
        <div class="w3-half w3-center" id="family" style="min-height:800px; background-color:#9597bd;">
            <?php
            $familyData = getIslandData($conn, 1);
            $familyContents = getIslandContents($conn, 1);
            ?>
            <div class="w3-padding-64">
                <h2><?php echo $familyData['name']; ?></h2>
                <div class="w3-container">
                    <?php foreach ($familyContents as $content): ?>
                        <p><?php echo htmlspecialchars($content); ?></p>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

        <div class="w3-half w3-center" id="work" style="min-height:800px; background-color:#85b8ed;">
            <?php
            $workData = getIslandData($conn, 2);
            $workContents = getIslandContents($conn, 2);
            ?>
            <div class="w3-padding-64">
                <h2><?php echo $workData['name']; ?></h2>
                <div class="w3-container">
                    <?php foreach ($workContents as $content): ?>
                        <p><?php echo htmlspecialchars($content); ?></p>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <div class="w3-half w3-center" id="hobby" style="min-height:800px; background-color:#7ad5ce;">
            <?php
            $hobbyData = getIslandData($conn, 3);
            $hobbyContents = getIslandContents($conn, 3);
            ?>
            <div class="w3-padding-64">
                <h2><?php echo $hobbyData['name']; ?></h2>
                <div class="w3-container">
                    <?php foreach ($hobbyContents as $content): ?>
                        <p><?php echo htmlspecialchars($content); ?></p>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <div class="w3-half w3-center" id="place" style="min-height:800px; background-color:#8ac664;">
            <?php
            $placeData = getIslandData($conn, 4);
            $placeContents = getIslandContents($conn, 4);
            ?>
            <div class="w3-padding-64">
                <h2><?php echo $placeData['name']; ?></h2>
                <div class="w3-container">
                    <?php foreach ($placeContents as $content): ?>
                        <p><?php echo htmlspecialchars($content); ?></p>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

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
                <button type="submit" class="w3-button w3-teal w3-right" style="background-color:#de7e2a;">Send</button>
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
