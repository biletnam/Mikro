 <!DOCTYPE html>
<head>

    <title>Constraint Management</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Arimo" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="one-page-wonder.min.css" rel="stylesheet">

    <!-- Additional CSS -->
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="constraints.css">

</head>

<body>
<div class="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.html"><img src="img/logo.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="Constraints.html">אילוצים</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Schedule.html">שיבוצים</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ניהול
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">ניהול הצגות</a>
                            <a class="dropdown-item" href="#">ניהול עובדים</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">פתח חלון זמנים</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="clear"></div>

    <header class="masthead text-center text-white">
        <div class="masthead-content">
            <div class="container">
                <h2 class="masthead-subheading mb-0">עדכון פרטי החלפה</h2>
                <br><br>
                
<form name="replacement" action="edit.php" method="POST" onsubmit=" updateMessege()">
    <label>שם המחליף:</label>
    <select name="subs">
        <?php include "actors_names.php"; ?>
    </select>
    <label>שם הצגה:</label>
    <select name="play">
        <?php include "active_plays.php";?>
    </select>
    <button name="submit" type="submit" >שמור</button>
   
   
</form>

<?php include "update.php"; ?>

 <p id="messege"></p>


<?php

//need this to pull the key number of constraint num 
    session_start();

    $orNum = (int)$_GET['num'];

    $_SESSION['orNum'] = $orNum;


    ?>
    
<!--its outside the form (importent not to include inside !!)-->  
             
  <button onclick="location.href ='http://sharonsilviajle.mtacloud.co.il/yulia/constraints_management.php';" name="return" >חזור</button> 
 
            </div>
        </div>
    </header>
    
    
</div>

<div class="push">
    
      
</div>


<script>
function updateMessege() {
    document.getElementById("messege").innerHTML = "העדכון בוצע בהצלחה!";
}

 
 
</script>

 


<!-- Footer -->
<footer class="py-5 bg-black">
    <div class="container">
        <p class="m-0 text-center text-white small">Copyright Mikro Theater</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>

 