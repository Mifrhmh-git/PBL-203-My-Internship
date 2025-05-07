<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>{{ $title }}</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="icon" href="../../assets/img/logomyinternship.png" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="../../assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
      WebFont.load({
        google: { families: ["Lato:300,400,700,900"] },
        custom: { families: ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ["../../assets/css/fonts.min.css"] },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../../assets/css/atlantis.min.css" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="../../assets/css/demo.css" />
    <style>
      .divider:after,
      .divider:before {
        content: "";
        flex: 1;
        height: 1px;
        background: #eee;
      }
      .h-custom {
        /* Remove fixed height and add flex-grow */
        flex-grow: 1;
        height: auto;
      }
      @media (max-width: 450px) {
        .h-custom {
          height: 100%;
        }
      }
      /* Make section vh-100 a flex container with column direction and space-between */
      section.vh-100 {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        min-height: 100vh;
      }
    </style>
  </head>
  <body>

    <section class="vh-100">
      <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-md-9 col-lg-6 col-xl-5">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp" class="img-fluid" alt="Sample image" />
          </div>
          <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
            <form>
              <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                <p class="lead fw-normal mb-1 mt-5 me-3">Masuk sebagai CDC (Career Development Center)</p>
              </div>

              <div class="divider d-flex align-items-center my-4">
              </div>

              <!-- Email input -->
              <div data-mdb-input-init class="form-outline mb-4">
                <input type="email" id="form3Example3" class="form-control form-control-lg" placeholder="Masukkan e-mail" required/>
                <label class="form-label" for="form3Example3" >E-mail</label>
              </div>

              <!-- Password input -->
              <div data-mdb-input-init class="form-outline mb-3">
                <input type="password" id="form3Example4" class="form-control form-control-lg" placeholder="Masukkan Password" required/>
                <label class="form-label" for="form3Example4">Password</label>
              </div>

              <div class="text-left text-lg-start mt-3 pt-2">
                <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary form-control btn-lg" style="padding-left: 12rem; padding-right: 12rem">Masuk</button>
                <p class="small fw-bold mt-4 pt-3 mb-0">Masuk sebagai Dosen? <a href="login-dosen.html" class="link-danger">Dosen</a></p>
                <p class="small fw-bold mt-2 pt-1 mb-0">Masuk sebagai Mahasiswa? <a href="login-mahasiswa.html" class="link-danger">Mahasiswa</a></p>
                <p class="small fw-bold mt-2 pt-1 mb-0">Masuk sebagai Perusahaan? <a href="login-perusahaan.html" class="link-danger">Perusahaan</a></p>
                <p class="small fw-bold mt-2 pt-1 mb-0"> <a href="/" class="link-danger">Kembali?</a></p> <!-- untuk landing page -->
              </div>
            </form>
          </div>
        </div>
      </div>

      {{-- Footer --}}
      <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between mt-5 py-4 px-4 px-xl-5 bg-primary">
        <!-- Copyright -->
        <div class="text-white copyright ml-auto">made with <i class="fa fa-heart heart text-danger"></i> by PBL-TRPL 203</div>
        <!-- Copyright -->
      </div>
    </section>

  </body>
</html>
