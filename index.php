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
    <h1 class="text-center">upload file PDF PHP MYSQL</h1>
    <div class="container">
        <form action="upload_db.php" method="post" enctype="multipart/form-data">
            <label for="">file</label>
            <input type="file" name="fileupload" id="" class="form-control">
            <br>
            <button type="submit" class="btn  btn-sm btn-success col-2">save</button>
        </form>
    </div>
    <br>
    <br>
    <?php  include('condb.php') ;
  $sql="SELECT * FROM upload";
  $result= mysqli_query($conn,$sql);
  $i=1;
  ?>
    <div class="container">
        <h4>file</h4>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">id</th>
                    <th scope="col">file</th>
                    <th scope="col">date</th>
                    <th scope="col">edit</th>
                </tr>
            </thead>
            <tbody>
        <?php foreach($result as $row){ ?>
                <tr>
                    <td><?php echo $i++;  ?></td>
                    <td><?php echo $row['id'];  ?></td>
                    <td><a href="pdf/<?php echo $row['fileupload'];  ?>"><?php echo $row['fileupload'];  ?></a></td>
                    <td><?php echo $row['date'];  ?></td>
                    <td><a class="btn btn-warning btn-sm" href="upload_edit.php?ID=<?php echo $row['id']; ?>">แก้ไข</a></td>
                </tr>
        <?php } ?>
            </tbody>
            <tbody>
        </table>

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