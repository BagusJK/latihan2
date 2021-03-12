<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan umur 2 form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class= "container">
        <div class="form-group">
            <h1>Berapa jam,Menit,dan Detik</h1>
            <form action="<?php echo base_url('jam5/aksi_hitung_jam');?>" method="post">
                <div class="form-group">
                    <label for="">detik</label>
                    <input type="number" class="form-control" name="detik">
</div>
<div class= "form-group">
    <button class= "btn btn-danger">Sumbit</button>
</div>
</form>
</div>
<hr>
   <div class="alert alert-success">
<p><?php echo $hasil?> </p>
   </div>

 </div>   
</body>
</html>