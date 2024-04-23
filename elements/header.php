<?php
// Check if the user is logged in
$userLoggedIn = isset($_SESSION['email']);
?>
<!-- Header code -->
<div class="logo-container">
    <img src="images/fashion-finder.png" alt="Fashion Finder Logo" class="logo">
    <img src="images/fashion-finder-small.png" alt="Fashion Finder Logo Small" class="logo-small">
</div>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fashion finder</title>
    <link rel="icon" href="https://fashion-finder.store/images/favicon.png">
    <!--<link rel="stylesheet" href="styles.css"> -->
	<link rel="stylesheet" type= "text/css" href="styles.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
	<style>
	</style>
</head>
<header>
    <div class="container">
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li>
                    <?php
                    // Check if the user is logged in
                    if ($userLoggedIn) {
                        echo '<a href="logout.php">Sign out? ' . $_SESSION['displayName'] . '</a>';
                    } else {
                        // If not logged in, show the login link
                        echo '<a href="login.php">LOGIN</a> / <a href="signUp.php">SIGN UP</a>';
                    }
                    ?>
                </li>
            </ul>
        </nav>
        
    </div>
</header>

    <main>
	<!-- SEARCH BAR -->
		<script async src="https://cse.google.com/cse.js?cx=e42db96d918aa4f45">
		</script>
		<div class="gcse-searchbox"></div>
		<div class="gcse-searchresults" data-mobileLayout="enabled" data-disableWebSearch="true">
	<!---------------->
    </main>