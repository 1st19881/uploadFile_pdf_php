<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

<?php include('condb.php');

$id=$_GET['ID'];

$sql="SELECT * FROM upload WHERE id=$id";
$rs=mysqli_query($conn,$sql);
$row = mysqli_fetch_array($rs);

?>

    <h1 class="text-center">edit upload file</h1>
    <div class="container">
        <form action="upload_edit_db.php" method="post" enctype="multipart/form-data">
            <label for="">file</label>
            <input type="file" name="fileupload" id="" class="form-control">
            <br>
            <input type="text" name="fileupload2" id="" value="<?php echo $row['fileupload'] ;  ?>">
            <input type="text" name="id" id="" value="<?php echo $row['id'] ;  ?>">
            <button type="submit" class="btn  btn-sm btn-success col-2">save</button>
        </form>
    </div>
    


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>