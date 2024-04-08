<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>About Us</title>
	
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">


	<style>
		@import url('https://fonts.googleapis.com/css2?family=Play:wght@700&display=swap');

        * {
            padding: 0px;
            margin: 0px;
            box-sizing: border-box;
        }
        body {
            font-family: sans-serif;
            background-image: url(bew.webp);
            background-size: cover;
            background-repeat: no-repeat;
            width: 100%;
        }
        .container {
/*            padding: 18px;*/
            width: 100%;
/*            background-color: rgba(0, 0, 0, 0.2);*/
            height: 100px;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            position: relative;
            z-index: 1; /* Ensure navigation bar stays above other elements */
        }
        .container ul {
            list-style: none;
            display: inline;
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
        }
        .container li {
            display: inline-block;
/*            margin-right: 10px;*/
        }
        .container li a {
            text-decoration: none;
            padding: 14px 20px;
            font-size: 16px;
            border-radius: 4px;
            color: #f2f2f2;
            text-align: center;
            letter-spacing: 1px;
            transition: all .3s ease-in;
            font-family: "Play", sans-serif;
        }
        .container li a:hover {
            background-color: #F0C5AD;
            color: black;
        }
        .container h1 {
            color: white;
            position: relative;
            left: 0em;
            z-index: 1; /* Ensure h1 stays above other elements */
        }
        
        .carousel-container img {
            margin: 5px;
            width: 200px;
            height: auto;
            transition: 0.3s;
            position: absolute; 
            top: 0; 
            left: 0; 
        }
        .carousel-container img:hover {
            transform: translateY(-10px);
        }

        .card{
        	justify-content: center;
        	text-align: center;
        	align-self: center;
        	width: 60%;
        	margin: auto;
        	opacity: 0.8;
        	margin-top: 3em;
        	margin-bottom: 3em;
        }

        footer{
            text-align: center;
            background-color: darkcyan;
            width: 100%;
            height: 5vh;
            color: white;
            justify-content: center;
        }
	</style>
</head>
<body>

	<div class="container">
        <ul>
            <li><a href="home2.php">HOME</a></li>
            <li><a href="https://www.goibibo.com/hotels/find-hotels-in-Goa/8717279093827200968/8717279093827200968/%7B%22d%22:%7B%22k%22:10%7D%7D/?sec=dom&cmp=SEM|Google|CPC|DH|D|Brand||Hotel_Brand_City_Name_EM|Goibibo%20Goa%20Hotel|&campaign=Hotel_Brand_City_Name_EM&gad_source=1&gclid=Cj0KCQjwiMmwBhDmARIsABeQ7xRLfZ2_Sxkzn_wuVkEpjMt7MFVfRQ7-In7bdxcrH1RTVFv26hlxYWoaAqc1EALw_wcB" target="_blank">BOOK HOTEL</a></li>
            <li><a href="#">ABOUT US</a></li>
            
            <li><a href="https://www.makemytrip.com/tripideas/places-to-visit-in-goa" target="_blank">KNOW MORE</a></li>

            <li><a href="#">CONTACT US</a></li>
        </ul>
        <h1>Goa Insider</h1>
    </div>

    <div class="carousel-container">
        <img src="ww1.gif">
        <img src="ww1.gif">
        
    </div>

<div class="card">
  <div class="card-header"><strong>
    About Us - Discover the Essence of Goa with Goa Insider
  </strong>
  </div>
  <div class="card-body">
    <p class="card-text">Welcome to Goa Insider, your ultimate guide to unlocking the hidden treasures of this enchanting paradise on the western coast of India. Whether you're a seasoned traveler seeking new adventures or a first-time visitor eager to explore the vibrant culture and stunning landscapes of Goa, we're here to be your trusted companion on this unforgettable journey.</p>
   
  </div>
</div>

<div class="card">
  <div class="card-header"><strong>
    Who We Are:
  </strong>
  </div>
  <div class="card-body">
    <p class="card-text">At Goa Insider, we are passionate advocates for authentic travel experiences. Our team comprises locals and seasoned explorers who have an intimate understanding of Goa's rich heritage, diverse traditions, and breathtaking locales. With our deep-rooted connections and insider knowledge, we curate personalized itineraries and insightful recommendations to ensure that every traveler discovers the true essence of Goa.</p>
   
  </div>
</div>

<div class="card">
  <div class="card-header"><strong>
    What We Offer:
  </strong>
  </div>
  <div class="card-body">
    <p class="card-text">Our platform is designed to empower travelers with comprehensive insights and practical guidance to navigate Goa's myriad attractions with confidence and ease. From pristine beaches and lush hinterlands to historic landmarks and cultural festivals, we cover every aspect of Goa's kaleidoscopic tapestry. Whether you're seeking adrenaline-pumping adventures, soul-soothing retreats, or immersive cultural experiences, Goa Insider is your gateway to unparalleled discoveries.</p>
   
  </div>
</div>

<div class="card">
  <div class="card-header"><strong>
    Our Mission:
  </strong>
  </div>
  <div class="card-body">
    <p class="card-text">At Goa Insider, our mission is to inspire, inform, and empower travelers to embark on transformative journeys that enrich their lives and create lasting memories. By fostering a deeper connection between travelers and Goa's vibrant tapestry of experiences, we aim to cultivate a sense of appreciation, respect, and awe for this captivating destination.</p>
   
  </div>
</div>

<div class="card">
  <div class="card-header"><strong>
    Join Us:
  </strong>
  </div>
  <div class="card-body">
    <p class="card-text">Embark on a journey of discovery with Goa Insider and unlock the secrets of Goa's allure. Whether you're planning your next getaway or simply seeking inspiration for future adventures, let us be your trusted companion in uncovering the magic of Goa, one experience at a time. Welcome to the Goa Insider family, where every journey is a story waiting to be told.</p>
   
  </div>
</div>




<div>
    <footer>
        <p>All Rights Reserved &#169 Goa Insider</p>
    </footer>
</div>
</body>
</html>