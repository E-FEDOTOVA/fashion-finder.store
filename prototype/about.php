<?php
session_start();
include 'mylib.php';
?>
<!--Filename: about.php
	Purpose: about page for FashionFinder prototype -->
<!DOCTYPE html>
<html lang="en">
<head> 
    <link rel="icon" href="https://fashion-finder.store/images/favicon.ico">
</head> 
<body>

    <?php include 'elements/header.php'; ?>
	
    <div class="about">
		<h1>About Fashion Finder</h1>
		<h3 class="chakra-petch-light">Fashion Finder is a space that allows you to search for clothing from
		multiple different sources all in one place! It is  
		a “one stop shop” tool that will enhance the online shopping experience for  
		shoppers everywhere.  We may also implement a social media aspect, where you 
		will be able to post their newly formed outfits to give 
		inspiration to others and there will be links associated with each article of 
		clothing allowing other Fashion Finder users to purchase those items. Fashion 
		Finder strives to give online clothing shoppers an easy way to access all their 
		favorite stores while building a community between other fashion minded individuals.</h3> <br>

        <div class="row">
            <div class="column" style="color: #E0FF4F;">
                <img src="images/mg.png" alt="mangnifying glass" style="width:300px;height:350px;">
            </div>
            <div class="column" style="color: #E0FF4F;">
                <h2>Competitive Advantage</h2>  
                <h3 class="chakra-petch-light">Fashion Finder is an innovative online shopping tool that will allow 
                users to browse multiple stores at once, creating an easier process that will appeal to online shoppers. 
                The social media aspect allows for interaction and communication blending the features on Pinterest and 
                Instagram.</h3> <br>
            </div>

            <div class="column" style="color: #E0FF4F;">
                <h2>Target market</h2>
                <h3 class="chakra-petch-light">Fashion-minded individuals who want to create a community of sharing
                outfits, social media savvy who are interested in online shopping.</h3> <br>
            </div>
            <div class="column" style="color: #E0FF4F;">
                <img src="images/stars.png" alt="stars" style="width:400px;height:200px;">
            </div>
        </div>

        <h2 styles="text-align:left">Architecture</h2>
        <img src="images/arch.png" alt="Architecture diagram" style="width:1500px;height:500px;">
		<div class="about" id="about-team">
			<h1>About Our Team</h1>
            <div class="row">
                <div class="column" style="color: #E0FF4F;">
                    <h2>Shannen Cawley</h2>
                    <p>Backend Developer - API</p>
                    <!--<img src="images/sc.png" alt="Shannen Pic" width="100%" height="100%">-->
                </div>
                <div class="column" style="color: #E0FF4F;">
                    <h2>Eve Collier</h2>
                    <p>Backend Developer - API</p>
                    <!--<img src="images/ec.png" alt="Eve Pic" width="100%" height="100%">-->
                </div>
                <div class="column" style="color: #E0FF4F;">
                    <h2>Estella Mercado</h2>
                    <p>Database - Social Media</p>
                    <!--<img src="images/em.png" alt="Estella Pic" width="100%" height="100%">-->
                </div>
                <div class="column" style="color: #E0FF4F;">
                    <h2>Kate Fedotova</h2>
                    <p>UI/UX Developer</p>
                    <!--<img src="images/kf.png" alt="Kate Pic" width="100%" height="100%">-->
                </div>
            </div>
		</div>
	</div>
	

	<?php include 'elements/footer.php'; ?>
</body>
</html>
