<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- external css bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    
    <!-- <link href="./css/style.css" rel="text/stylesheet"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to The Sparks Bank</title>
    <style>
            #ABC {
                display: flex;
                justify-content: center;
                align-items: center;
                /*height: 100vh;*/
                margin: 0;
            }
            .dropdown {
  display: inline-block;
  position: relative;
}
.dropdown-content {
  display: none;
  position: absolute;
  width: 100%;
  overflow: auto;
  box-shadow: 0px 10px 10px 0px rgba(0,0,0,0.4);
}
.dropdown:hover .dropdown-content {
  display: block;
}
.dropdown-content a {
  display: block;
  color: #000000;
  padding: 5px;
  text-decoration: none;
}
.dropdown-content a:hover {
  color: #FFFFFF;
  background-color: #00A4BD;
}


        </style>
</head>
<body>

  <!-- header with connection and sql code -->
  <?php require_once './include/header.php' ?>


      <!-- Carosoul part start -->
      <section id="top" class="top">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://images.unsplash.com/photo-1501167786227-4cba60f6d58f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=750&q=80" class="d-block w-100 img-fluid"  alt="...">
            <div class="carousel-caption d-none d-md-block external-img">
              <h5>The Sparks Bank</h5>
              <p>A Safe place for your money.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://images.unsplash.com/photo-1601597111158-2fceff292cdc?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" class="d-block w-100 img-fluid" alt="...">
            <div class="carousel-caption d-none d-md-block external-img">
              <h5>Transfers Money flawlessly</h5>
              <p>Transfering Money is just easy as Dialing a Phone.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://images.unsplash.com/photo-1620714223084-8fcacc6dfd8d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" class="d-block w-100 img-fluid" alt="...">
            <div class="carousel-caption d-none d-md-block external-img">
              <h5>Banking is Even Easier</h5>
              <p>Visit Our New official Website.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>
      <!-- Carosoul part end -->

        <!-- middle container start-->
        <section id="services" class="services">
        <div class="container my-5">
            <h1 class="text-dark text-center my-5">Our Services</h1>
            <div class="container">
            <div class="row row-cols-2">       
              <div class="col ">
              <h3>Manage Everything at one place</h3>   
                <div class="container col my-5">
                   <p class="lead"> To see all Customers</p>
                   <a href="customer.php"><button class="btn btn-primary" type="button" >Get Started</button></a>
                </div>
                <div class="container col my-5">
                   <p class="lead"> To see all Transaction</p>
                   <a href="transaction.php"><button class="btn btn-primary" type="button" >Get Started</button></a>
                </div>
                

                <div class="container col my-5">
                   <p class="lead"> To see all Transactions from a particular person</p>
                   <a href="transfrom.php"><button class="btn btn-primary" type="button" >Get Started</button></a>
                </div>
                <div class="container col my-5">
                   <p class="lead"> To see all Transactions to a particular person</p>
                   <a href="transto.php"><button class="btn btn-primary" type="button" >Get Started</button></a>
                </div>
                <div class="container col my-5">
                   <p class="lead"> To see top transactions</p>
                   <a href="transtop.php"><button class="btn btn-primary" type="button" >Get Started</button></a>
                </div>
               
              </div>

              <div class="col">
              <img src="https://images.unsplash.com/photo-1616514197671-15d99ce7a6f8?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" class="rounded img-fluid float-right" alt="...">
              </div>
            </div>
            </section>
             
            </div>
          </div>
        <!-- middle container end -->

         <!-- footer  -->
        <?php require_once './include/footer.php' ?>  
</body>

      <!-- bootstrap js script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</html>