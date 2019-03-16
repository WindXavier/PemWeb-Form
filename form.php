<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
        body, html{
            height:100%;
        }
        .bg{
            background-image: url("https://images.unsplash.com/photo-1450941479514-52628a29fcb8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1490&q=80");
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }


        

    </style>
</head>

<body>
    <div class="bg">
    <div class="row">
        <div class="col -sm-4"></div>
        <div class="col -sm-4" style="background-color:rgba(255,255,255,0.3); margin-top:150px;">
        <h1 style="text-align:center">Informasi Data Diri Mahasiswa</h1>
        <form class="form-horizontal" method="POST" action="" name="form">

            <div class="form-group">
                  <label class="control-label" for="pwd">Nama :</label>
                  <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama">
              <span id="error_nama"></span>
            </div>
            <div class="form-group">
              <label class="control-label" for="pwd">NIM:</label>
              <input type="text" class="form-control" id="nim" placeholder="Masukkan NIM" name="nim">
              <span id="error_nim"></span>
            </div>
                <input type="button" onclick="kirim()" value="kirim" style="margin-bottom:10px">
        </form>
    

        <?php
		if(isset($_POST["nama"]) && $_POST["nim"]) {
			echo "<br>Nama : ".$_POST["nama"];
			echo "<br>NIM : ".$_POST["nim"];
		}
	    ?>
        </div>
        <div class="col -sm-4"></div>
    </div>

    <script>
        function kirim(){
            var form = document.getElementsByName("form");
            var nama = document.getElementById("nama").value;
            var nim = document.getElementById("nim").value;
            
            if(nama !="" && nim !=""){
                form[0].submit();
            }
            else{
                if (nama==""){
                    document.getElementById("error_nama").innerHTML = "nama tidak boleh kosong";
                }
                if (nim==""){
                    document.getElementById("error_nim").innerHTML = "nim tidak boleh kosong";
                }
            }
        }
    </script>
    </div>
</body>
</html>