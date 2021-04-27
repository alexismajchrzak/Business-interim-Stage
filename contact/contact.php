<!DOCTYPE html>
<html >

<head>
    <meta charset="UTF-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="contact.css" rel="stylesheet" />
    <link href="../header/header.css" rel="stylesheet" />
    <link href="../footer/footer.css" rel="stylesheet" />
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>


    <!-- header link -->
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
    <!-- fin header link -->

    <!-- footer link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
    <!-- fin footer link -->

    <title>Prenium Interim</title>


</head>

<body>






    <?php
        include "../header/header2.php"
    ?>


<div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
    <div class="card card0 border-0">
        <div class="row d-flex">

            <div class="col-lg-6">
                <div class="card1 pb-5">
                    <div class="row"> <img src="../logo.jpg"   class="logo"> </div>
                    <div class="row px-3 justify-content-center mt-4 mb-5 border-line"> <img src="https://i.imgur.com/uNGdWHi.png" class="image"> </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="card2 card border-0 px-4 py-5">

                    <div class="row mb-4 px-3">
                        <h6 class="mb-0 mr-4 mt-2">Nos réseaux </h6>

                        <div class="facebook text-center mr-3">
                            <div class="fa fa-facebook"></div>
                        </div>

                        <div class="twitter text-center mr-3">
                            <div class="fa fa-twitter"></div>
                        </div>

                        <div class="linkedin text-center mr-3">
                            <div class="fa fa-linkedin"></div>
                        </div>

                        <div class="google text-center mr-3">
                            <div class="fa fa-google-plus"></div>
                        </div>

                    </div>

                    <div class="row px-3 mb-4">
                        <div class="line"></div> <small class="or text-center">Ou</small>
                        <div class="line"></div>
                    </div>


                        <div class="row px-3"> <label class="mb-1">
                            <h6 class="mb-0 text-sm">Prénom </h6>
                        </label> <input class="mb-4" type="text" name="firstname" placeholder="Entrer votre Prénom"> </div>


                        <div class="row px-3"> <label class="mb-1">
                            <h6 class="mb-0 text-sm">Nom </h6>
                        </label> <input class="mb-4" type="text" name="lastname" placeholder="Entrer votre Nom "> </div>

                        <div class="row px-3"> <label class="mb-1">
                            <h6 class="mb-0 text-sm">Email Address</h6>
                        </label> <input class="mb-4" type="text" name="email" placeholder="Entrer votre adress mail "> </div>

                        <div class="row px-3"> <label class="mb-1">
                            <h6 class="mb-0 text-sm">Numéro de télephone </h6>
                        </label> <input type="mb-4" name="phone" placeholder="Entrer votre numéro de télephone "> </div>

                        <div class="row px-3"> <label class="mb-1 mt-3">
                            <h6 class="mb-0  text-sm">Message  </h6>
                        </label> <input class="mb-4" type="text" name="text" placeholder="Entrer votre message ou votre demande  "> </div>

                   

                    <div class="row mb-3 px-3"> <button type="submit" class="btn btn-blue text-center">Validez </button> </div>
                    
                </div>
            </div>
        </div>

        <div class="bg-blue py-4">
            <div class="row px-3"> <small class="ml-4 ml-sm-5 mb-2">  Remplir ce formulaire si vous avez des questions ou des demandes, votre candidature seras retransmise par mail </small>
            </div>
        </div>

    </div>
</div>
















<?php
        include "../footer/footer.php"
    ?>




    <!-- Javascript Script -->
    <script src="contact.js"></script>
    <script src="../header/header.js"></script>
    <script src="../footer/footer.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!--footer scipt -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <!-- fin footer scipt -->


    <!--header  scipt -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
    <!--fin header  scipt -->

    

</body>

</html>