<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">

<!-- Bootstrap Icon -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<!-- CSS -->
<style>
  <?php include "style.css" ?>
</style>

  </head>

 

  <body>
    <!-- BUNG ABHQORI -->

    <?Php 
            if(isset( $_GET["id"])){
                $id = $_GET["id"];
                include("connect.php");
                $sql = "SELECT * FROM book WHERE id=$id";
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_array($result);
                ?>

    <div class="flex bg-[#8B5DFF] rounded-md py-5 px-7">
                <img src="img/<?php echo $row["image"]; ?>" alt="" class="w-48">
                <div class="px-10">
                <p class="text-4xl font-semibold mb-4"><?php echo $row["title"]; ?></p>
                
                <p class="text-xl underline text-slate-200 underline-offset-4 font-medium"><?php echo $row["author"]; ?></p>
                <h2 class="flex text-xl mt-8 text-slate-200 font-medium"> <p class="text-yellow-300"> <?php echo $row["type"]; ?></p></h2>
                
                
                <p class="text-md font-normal mt-3"><?php echo $row["description"]; ?></p>
                
                </div>
                </div>
                
               

                <?php
            }
             ?>









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>