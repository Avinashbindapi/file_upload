<pre>
    <?php
        if(isset($_POST['submit']))
        {
            print_r($_FILES);
            move_uploaded_file($_FILES['profile_image']['tmp_name'],'save_upload_files/' . time() . '_' . $_FILES['profile_image']['name']);
        }
    ?>
</pre>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="profile_image" id="profile_image">
        <button type="submit" name="submit">submit</button>
    </form>
</body>
</html>