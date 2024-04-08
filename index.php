<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Goa Insider</title>

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
            width: 100%;
            height: 100px;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            position: relative;
            z-index: 1; 
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
            z-index: 1; 
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
            margin: 60px;
            padding: 10px;
            opacity: 0.8;
            display: inline-block;
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
            <li><a href="about.php">ABOUT US</a></li>
            
            <li><a href="https://www.makemytrip.com/tripideas/places-to-visit-in-goa" target="_blank">KNOW MORE</a></li>

            <li><a href="contact.php">CONTACT US</a></li>
        </ul>
        <h1>Goa Insider</h1>
    </div>

    <div class="carousel-container">
        <img src="ww1.gif">
        <img src="ww1.gif">
        
    </div>

    <div class="card" style="width: 18rem;">
        <img src="cal.jpeg" class="card-img-top" alt="calangute beach">
         <div class="card-body">
            <h5 class="card-title">calangute beach</h5>
            <small class="card-text">Calangute Beach is the perfect destination for a fun-filled holiday. Calangute Beach offers a plethora of activities for visitors, including water sports, sunbathing, and beachside dining.</small><br>
            <a href="https://www.tripadvisor.in/Attraction_Review-g306995-d1208998-Reviews-Calangute_Beach-Calangute_North_Goa_District_Goa.html" class="btn btn-primary">Let's Visit</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
        <img src="baga.jpeg" class="card-img-top" alt="calangute beach">
         <div class="card-body">
            <h5 class="card-title">Baga beach</h5>
            <small class="card-text">Baga Beach in North Goa is popular for Saturday flea market and a wax museum nearby. Baga Beach is also renowned for some adventurous water sports that delight its visitors. One of the most popular Baga Beach water sports is scuba diving.</small>
            <a href="#" class="btn btn-primary">Let's Visit</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
        <img src="fort.jpeg" class="card-img-top" alt="calangute beach">
         <div class="card-body">
            <h5 class="card-title">Aguada fort</h5>
            <small class="card-text">Fort Aguada was the most prized and crucial fort of Portuguese. The fort is so large that it envelops the entire peninsula at the southwestern tip of Bardez </small><br>
            <a href="#" class="btn btn-primary">Let's Visit</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
        <img src="cru.jpeg" class="card-img-top" alt="calangute beach">
         <div class="card-body">
            <h5 class="card-title">cruise</h5>
            <small class="card-text">Goa is famous for many types of cruises. Most famous amongst them is Mandovi cruise, Casino Cruises, Sunset Leisure cruise and Bird Watching cruise. </small><br>
            <a href="#" class="btn btn-primary">Let's Visit</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
        <img src="fall.jpeg" class="card-img-top" alt="calangute beach">
         <div class="card-body">
            <h5 class="card-title">dudhsagar waterfalls</h5>
            <small class="card-text">Dudhsagar Falls also known as the Sea of Milk is referred to as India's highest waterfalls which is approximately 310 meters high and 30 meters wide.It is located on the Mandovi River in the state of Goa</small><br>
            <a href="#" class="btn btn-primary">Let's Visit</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
        <img src="chap.jpg" class="card-img-top" alt="calangute beach">
         <div class="card-body">
            <h5 class="card-title">chapora fort</h5>
            <small class="card-text">Once a site of many battles, the Chapora Fort is a prime tourist spot in Goa. Standing tall on the banks of River Chapora, it features mesmerizing views.</small><br>
            <a href="#" class="btn btn-primary">Let's Visit</a>
  </div>
</div>

<div>
    <footer>
        <p>All Rights Reserved &#169 Goa Insider</p>
    </footer>
</div>


 
</body>
</html>
