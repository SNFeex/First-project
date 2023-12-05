<?php
    require __DIR__ . '/../KerniusB/Src/app.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ford</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/sansation" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <script src="index.js" defer></script>
    <script src="style.css" defer></script>
    
    <script>
        function myFunction() {
            let x = document.getElementById("mMenu");
            if (x.style.display === "block") {
                x.style.display = "none"
            } else {
                x.style.display = "block"
            }
        }
    </script>
</head>
<body> 

<?php include './View/Header.php'?>       
<?php include './View/Hero.php'?>
<?php include './View/Service.php'?>
<?php include './View/Power.php'?>
<?php include './View/Prefooter.php'?>
<?php include './View/Footer.php'?>
    
</body>
</html>

 