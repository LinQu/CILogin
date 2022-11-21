<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
  <!-- bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" crossorigin="anonymous"></script>
  <title>Document</title>
</head>

<body>
  <div class="content-wrapper">
    <div>
      <div class="d-flex justify-content-center align-items-center mt-5">
        <div class="card">

          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item text-center">
              <a class="nav-link active btl" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Login</a>
            </li>
            <li class="nav-item text-center">
              <a class="nav-link btr" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Signup</a>
            </li>

          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

              <div class="form px-4 pt-5">
                <form action="<?php echo site_url('Login/login'); ?>" method="POST" autocomplete="off">

                  <input type="text" name="username" class="form-control" placeholder="Email or Phone">

                  <input type="password" name="password" class="form-control" placeholder="Password">
                  <button type="submit" class="btn btn-dark btn-block">Login</button>
                </form>
              </div>



            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">


              <div class="form px-4">

                <input type="text" name="" class="form-control" placeholder="Name">

                <input type="text" name="" class="form-control" placeholder="Email">

                <input type="text" name="" class="form-control" placeholder="Phone">

                <input type="text" name="" class="form-control" placeholder="Password">

                <button class="btn btn-dark btn-block">Signup</button>


              </div>



            </div>

          </div>




        </div>


      </div>
    </div>
  </div>

  <script>
    //button register click tab-pane fade show active
    $('.btr').click(function() {
      $('.btl').removeClass('active');
      $('.btr').addClass('active');
    });
    //button login click tab-pane fade show active
    $('.btl').click(function() {
      $('.btr').removeClass('active');
      $('.btl').addClass('active');
    });

    //button login click tab-pane fade show active
    $('.btl').click(function() {
      $('#pills-home').addClass('show active');
      $('#pills-profile').removeClass('show active');
    });

    //button login click tab-pane fade show active
    $('.btr').click(function() {
      $('#pills-home').removeClass('show active');
      $('#pills-profile').addClass('show active');
    });
  </script>
</body>

</html>