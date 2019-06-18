<aside class="right-side">
	
	<!-- Main content -->
	<section class="content">
    <?php
	if(isset($_GET['submit'])) {
        $id = trim($_GET['id']);
        $sql = $mysqli->query("SELECT * FROM `server` where `id`='{$id}' limit 1");
            if ($sql) {
                $row = $sql->fetch_assoc();
                $ip=$row["ip"];
                $port=$row["port"];
                $user=$row["name"];
                $pass=$row["password"];
        }
    }
        //test connection ssh
        $connection = ssh2_connect($ip,$port); 
        if (ssh2_auth_password($connection,$user, $pass)) {
            echo "Authentication Successful!\n" ."</br>";
        
            //disconnect ssh 
            if (!empty($_GET['disc'])) {
                $shell=ssh2_shell($connection, 'terminal');
                $stream = ssh2_exec($connection, "exit ");
                unset($connection);
            } 
            if (!empty($_GET['submit'])) { 
                $target_dir ='/home/user/testupload/';
                $target_file = $target_dir . basename( $_FILES['uploaded_file']['name']);
                $connection = ssh2_connect($ip,$port);
                ssh2_auth_password($connection, $user, $pass);
                $sftp = ssh2_sftp($connection);
                $stream = fopen("ssh2.sftp://{$sftp}{$remotefile}",'w');
                $file = file_get_contents($localfile);
                fwrite($stream, $file);
                fclose($stream);
            }
        }
    ?>
<h3 style="text-align: center;"> welcome to your server </h3>
<form action="#" method="post" enctype="multipart/form-data">
    Select file to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
<form action="server.php" method="get">
  <input type="hidden" name="disc" value="run">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" value="disconnect">
</form> 
	</section><!-- /.content -->
</aside><!-- /.right-side -->
