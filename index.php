<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link type="text/css" rel="stylesheet" href="style.css">
  <script src="script.js" defer></script>
  <link rel="icon" type="image/x-icon" href="slike/favicon.ico">
  <title>EuroLiveViewer</title>
</head>

<body class="bg-light">
  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="instagram" viewBox="0 0 16 16">
      <path
        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
    </symbol>
    <symbol id="twitter" viewBox="0 0 16 16">
      <path
        d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
    </symbol>
    <symbol id="github" viewBox="0 0 16 16">
      <path
        d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
    </symbol>
  </svg>

  <div class="container">

    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid p-0">
        <a class="navbar-brand fs-2 p-0" href="#">EuroLiveViewer</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active fs-5" aria-current="page" href="#">Trenutni tečaj</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-5" href="pretvarac.php">Pretvarač valuta</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section class="kontent mt-5"><br>
      <h1>Trenutno stanje tečaja eura</h1><br>

      <form method="post" action="">
        <label for="datum">Odaberite datum:</label>
        <input type="date" value="<?php echo date('Y-m-d'); ?>" min="2023-01-01" max="<?php echo date('Y-m-d'); ?>"
          id="datum" name="datum" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <button class="btn btn-primary mt-4" type="submit">Filtriraj</button>
        </div>
      </form>

      <h4 class="mt-5">Tečaj eura na dan
        <?php datum(); ?> je:
      </h4>
      <table class="table table-light table-striped table-hover  mt-4">
        <thead>
          <tr>
            <th scope="col">Valuta</th>
            <th scope="col">Država</th>
            <th scope="col">Datum primjene</th>
            <th scope="col">Kupovni tečaj</th>
            <th scope="col">Srednji tečaj</th>
            <th scope="col">Prodajni tečaj</th>
          </tr>
        </thead>
        <tbody>
          <?php
          if (isset($_POST['datum'])) {
            $datum = $_POST['datum'];
            tablica($datum);
          } else {
            tablica(date('Y-m-d'));
          }
          ?>
      </table>
      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
          <li class="page-item">
            <a class="page-link" href="#a" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
            </a>
          </li>
          <li class="page-item"><a class="page-link bg-primary text-light" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#a" data-bs-toggle="popover" data-bs-trigger="focus"
              data-bs-content="Stranica ne postoji!">2</a></li>
          <li class="page-item"><a class="page-link" href="#a" data-bs-toggle="popover" data-bs-trigger="focus"
              data-bs-content="Stranica ne postoji!">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#a" aria-label="Next" data-bs-toggle="popover" data-bs-trigger="focus"
              data-bs-content="Ne postoji sljedeća stranica!">
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
        </ul>
      </nav>
    </section>


    <div class="containere">
      <footer class="d-flex bg-light flex-wrap justify-content-between align-items-center py-3 mt-4 ">
        <div class="col-md-4 d-flex align-items-center">
          <span class="mb-3 mb-md-0 text-body-secondary">&copy; 2023 Marko Faletar</span>
        </div>

        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
          <li class="ms-3"><a class="text-body-secondary" href="https://github.com/FaletarMarko1"><svg class="bi"
                width="24" height="24">
                <use xlink:href="#github" />
              </svg></a></li>
          <li class="ms-3"><a class="text-body-secondary" href="https://twitter.com/exchangeratesuk"><svg class="bi"
                width="24" height="24">
                <use xlink:href="#twitter" />
              </svg></a></li>
          <li class="ms-3"><a class="text-body-secondary" href="https://www.instagram.com/exchange.rates/?hl=hr"><svg
                class="bi" width="24" height="24">
                <use xlink:href="#instagram" />
              </svg></a></li>
        </ul>
      </footer>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>

  <div class="loader"></div>
</body>

</html>


<?php
//echo "<script type='text/javascript'>alert('$datum');</script>";
function tablica($datum)
{
  $url = "https://api.hnb.hr/tecajn-eur/v3?format=xml&datum-primjene=" . $datum;
  $xml = simplexml_load_file($url) or die("Ne postoje podaci za taj datum");

  foreach ($xml->item as $item):
    echo '<tr>';
    echo '<td>' . $item->valuta . '</td>';
    echo '<td>' . $item->drzava . '</td>';
    echo '<td>' . $item->datum_primjene . '</td>';
    echo '<td>' . $item->kupovni_tecaj . '</td>';
    echo '<td>' . $item->srednji_tecaj . '</td>';
    echo '<td>' . $item->prodajni_tecaj . '</td>';
    echo '</tr>';
  endforeach;
}

function datum()
{
  if (isset($_POST['datum'])) {
    $datum = $_POST['datum'];
    if ($datum == null) {
      $datum = date('d-m-Y');
      echo $datum;
    } else {
      echo $datum;
    }
  } else {
    $datum = date('d-m-Y');
    echo $datum;
  }
}
?>