<?php

require_once("include/koneksi_db.php"); //fungsi untuk konek ke database //include dicoba dihapus :v auto error cok karena itu tempat script koneksi_db, mohon jangan dihapus itu tempat script koneksi databasenya

if(isset($_POST['register'])){

    // Data Input ID & Username
    $idvar = ($_POST["id"]);
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    // enkripsi password
    $password = sha1($_POST["password"]);
    //Hak Akses column
	$hakaksesvar = ($_POST["hak_akses"]);


    // menyiapkan query
    $sql = "INSERT INTO users (id, username, password, hak_akses) 
            VALUES (:ID, :user, :pass, :HakAkses)";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":ID" => $idvar,
        ":user" => $username,
        ":password" => $password,
        ":HakAkses" => $hakaksesvar
    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if($saved) header("Location: login.php");
}

?>
<html>
	<head>
	</head>
	
	<body>
		<title>Register Form</title>
		<form id='register' action='index.php' method='post'> <script>javascript: alert('Register Complete')</script>";
	
		<fieldset >
		<legend><font color="#00BFFF">Register</legend>
		
		<label for='username' ><font color="#00BFFF">ID :</label>
		<input type='text' name='ID' id='username' maxlength="50" />
		
		<label for='username' ><font color="#00BFFF">Username :</label>
		<input type='text' name='user' id='username' maxlength="50" />
		
		<label for='password' ><font color="#00BFFF">Password :</label>
		<input type='password' name='pass' id='password' maxlength="50" />
		
		<label for='username' ><font color="#00BFFF">Hak Akses :</label>
		<input type='text' name='HakAkses' id='username' maxlength="50" />
		
		<input type='submit' name='Submit' value='Register' />
		<link rel="stylesheet" href="cssbackgroundregister.css" type="text/css">
		</fieldset>
		
		</form>
	</body>
</html>
