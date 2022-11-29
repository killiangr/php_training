<?php require 'header.php'; ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link href="/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    
<div class="container">
  <main>
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Data Comparator</h1>
            <p class="lead text-muted">Compare data between two or more values</p>
        </div>
        </div>
    </section>

    <div class="row g-5">
      

            <div class="col-md-5">
              <label for="country" class="form-label">Value 1</label>
              <select class="form-select" id="country" required>
                <option value="">Choose...</option>
                <option>CFAO</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>

            <div class="col-md-4">
              <label for="state" class="form-label">Value 2</label>
              <select class="form-select" id="state" required>
                <option value="">Choose...</option>
                <option>FIAT Africa</option>
              </select>
              <div class="invalid-feedback">
                Please provide a valid state.
              </div>
            </div>

            <button class="btn btn-primary" type="submit">Add a Value +</button>

          </div>

          <hr class="my-4">



            

            <nav class="navbar navbar-primary bg-white">
            <div class="container-fluid">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent1" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <label class="form-check-label" for="same-address">Constructor</label>
                <span class="navbar-toggler-icon"></span>
                </button>

            </div>
            </nav>
            <div class="collapse" id="navbarToggleExternalContent1">
                <div class="bg-white p-4">
                    <div class="form-check-muted">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent2" aria-controls="navbarToggleExternalContent2"  aria-label="Toggle navigation">
                            <label class="form-check-label" for="same-address">FIAT</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent3" aria-controls="navbarToggleExternalContent3"  aria-label="Toggle navigation">
                            <label class="form-check-label" for="same-address">Toyota</label>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent4" aria-controls="navbarToggleExternalContent4"  aria-label="Toggle navigation">
                            <label class="form-check-label" for="same-address">Renault</label>
                        </div>
                        <hr class="my-2">
                    </div>
                </div>
            </div>

            <div class="collapse" id="navbarToggleExternalContent2">
                <div class="bg-white p-4">
                    <div class="form-check-muted">
                        <input type="checkbox" class="form-check-input" id="t1">
                        <label class="form-check-label text-dark">Fiat 500</label>
                    </div>
                    <div class="form-check-muted">
                        <input type="checkbox" class="form-check-input" id="t2">
                        <label class="form-check-label text-dark">Fiat Panda</label>
                    </div>
                    <div class="form-check-muted">
                        <input type="checkbox" class="form-check-input" id="t3">
                        <label class="form-check-label text-dark">Fiat Tupo</label>
                        <hr class="my-2">
                    </div>
                </div>
            </div>

            <div class="collapse" id="navbarToggleExternalContent3">
                <div class="bg-white p-4">
                    <div class="form-check-muted">
                        <input type="checkbox" class="form-check-input" id="t4">
                        <label class="form-check-label text-dark">Toyota Yaris</label>
                    </div>
                    <div class="form-check-muted">
                        <input type="checkbox" class="form-check-input" id="t5">
                        <label class="form-check-label text-dark">Toyota Corolla</label>
                    </div>
                    <div class="form-check-muted">
                        <input type="checkbox" class="form-check-input" id="t6">
                        <label class="form-check-label text-dark">Toyota Hylux</label>
                        <hr class="my-2">
                    </div>
                </div>
            </div>

            <div class="collapse" id="navbarToggleExternalContent4">
                <div class="bg-white p-4">
                    <div class="form-check-muted">
                        <input type="checkbox" class="form-check-input" id="t7">
                        <label class="form-check-label text-dark">Renault 500</label>
                    </div>
                    <div class="form-check-muted">
                        <input type="checkbox" class="form-check-input" id="t8">
                        <label class="form-check-label text-dark">Fiat Panda</label>
                    </div>
                    <div class="form-check-muted">
                        <input type="checkbox" class="form-check-input" id="t9">
                        <label class="form-check-label text-dark">Fiat Tupo</label>
                        <hr class="my-2">
                    </div>
                </div>
            </div>
         
        </form>
      </div>

      <hr class="my-4">

      <table class="table table-bordered border-dark">
        <thead>
            <tr>
            <th scope="col">Section 1</th>
            <th scope="col">Constuctor</th>
            <th scope="col">Price</th>
            <th scope="col">Type</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>FIAT Panda</td>
            <td>No Data</td>
            <td>Data Type</td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>FIAT 500</td>
            <td>No Data</td>
            <td>Data Type</td>
            </tr>
            <th scope="row">3</th>
            <td>FIAT TUPO</td>
            <td>No Data</td>
            <td>Data Type</td>
            </tr>

        </tbody>
        </table>

        <hr class="my-2">

      <table class="table table-bordered border-dark">
        <thead>
            <tr>
            <th scope="col">Section 2</th>
            <th scope="col">Constuctor</th>
            <th scope="col">Price</th>
            <th scope="col">Type</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>Toyota Yaris</td>
            <td>No Data</td>
            <td>Data Type</td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>Toyota Corolla</td>
            <td>No Data</td>
            <td>Data Type</td>
            </tr>
            <th scope="row">3</th>
            <td>Toyota Hylux</td>
            <td>No Data</td>
            <td>Data Type</td>
            </tr>

        </tbody>
        </table>

    </div>
    
  </main>

  <!-- FOOTER -->
    <hr class="my-4">
    <footer class="container">
        <p class="float-end"><a href="#">Back to top</a></p>
        <p>Dev By Killian GRAINDORGE</p>
    </footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

  </body>
</html>
