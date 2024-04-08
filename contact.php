<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        .container {
            display: flex;
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .left-section {
            flex: 1;
            padding-right: 20px;
        }
        .right-section {
            flex: 1;
            text-align: center;
            padding-left: 20px;
        }
        .partition {
            height: 100%;
            border-right: 1px solid #ccc;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        input[type="text"],
        input[type="number"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }
        textarea {
            height: 100px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }

        img{
        	margin-top: 66px;
        	width: 100%;
        }



    </style>
</head>
<body>

    <div class="container">
        <div class="left-section">
            <h1>Contact Us</h1>
            <form method="post" action="#">
                <input type="text" name="name" placeholder="Enter your name" required><br>
                <input type="number" name="number" placeholder="Enter your mobile no" required><br>
                <input type="email" name="email" placeholder="Enter your email" required><br>
                <textarea placeholder="Enter Your Comment" name="comment"></textarea><br>
                <input type="submit" value="Submit" name="submit">
            </form>
        </div>
        <div class="partition"></div>
        <div class="right-section">
            <img src="rel.jpg">
        </div>
    </div>

</body>
</html>


<?php 

	include 'db_conn.php';

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $name = $_POST['name'];
        $number = $_POST['number'];
        $email = $_POST['email'];
        $comment = $_POST['comment'];

        $query = "INSERT INTO `contact`(`name`,`number`,`email`,`comment`) VALUES('$name','$number','$email','$comment')";

   $result = mysqli_query($conn, $query);

   $row = mysqli_fetch_assoc($result);

   // $userid = $row['id'];

   $location = 'index.php';

   if ($result) {
       
       // header("Location: http://www.example.com");
       header("Location: $location");
   }

   else{

       header('Location: contact.php');
       
      }
    }

 ?>
