<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dota 2 Merchandise</title>
  <link rel="icon" type="image/x-icon" href="/app/images/favicon.png" />
  <!-- bootstrap     -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <!-- fontawesome -->
  <script src="https://kit.fontawesome.com/57da478d57.js" crossorigin="anonymous"></script>
  <!-- <link rel="stylesheet" href="" /> -->
  <script src="/app/js/script.js" type="text/javascript"></script>
</head>

<body onload="setUpCart()">
  <header>
    <div class="container-fluid p-0">
      <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/app/views/Main/index.php">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="lists.html">LISTS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">CONTACT</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="gallery.html">GALLERY</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="tables.html">TABLES</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="form.html">FORM</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="topic.html">TOPIC</a>
              </li>
              <button id="loadPageBtn" class="btn btn-dark" onclick="showListOfItems()">
                Catalog
                <i class="fa-solid fa-house"></i>
              </button>
            </ul>
            <button id="cartBtn" class="btn btn-dark" onclick="viewCart()">
              View Cart:
              <i class="fa-solid fa-cart-shopping"></i>
            </button>
            <div id="searchBox">
              <input type="search" id="textbox" />
              <button id="searchBtn" class="btn btn-dark" onclick="searchByKeyword()">
                Search
                <i class="fa-solid fa-magnifying-glass"></i>
              </button>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>


  <main>
    <div id="alertBox"></div>
    <div id="divMainContainer"></div>
    <div id="itemsCards"></div>
  </main>
  <footer></footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>