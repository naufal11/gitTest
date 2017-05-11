<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>
<body>

  <div class="container">
    <h2>Welcome <?php echo $name ?> !</h2>
    <hr>
    <div class="col-md-6">
      <div class="row">
        <div class="col-sm-2">
          Name
        </div>
        <div class="col-sm-10">
          : <?php echo $full_name ?>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-2">
          Hobi
        </div>
        <div class="col-sm-10">
          : <?php echo $hobi ?>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="alert alert-info">
        <div class="row">
          <div class="col-sm-3">
            <label>Kata Pengantar sepertinya</label>
          </div>
          <div class="col-sm-1">
            :
          </div>
          <div class="col-sm-8">
            <p><?php echo $paragraf ?></p>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-3">
            <label>Isi paragraf</label>
          </div>
          <div class="col-sm-1">
            :
          </div>
          <div class="col-sm-8">
            <p>Nama saya deva. Nama lengkap saya Muhamad Deva Arofi. Saya sekolah di SMK NEGERI 24 JAKARTA.
            Saya duduk dibangku kelas 10 pada tahun 2015. Saya jurusan Rekayasa Perangkat Lunak. </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
