<?php
include './db.php';
if(isset($_POST['submit'])){
    $url = $_POST['url'];
    $date = $_POST['date'];
    $dns = $_POST['dns'];
    if($url == '' || $date == ''|| $dns == ''){
        echo '<script> alert("Fields Required"); </script>'; 
    }else{
        $query = "INSERT INTO pagi(Title,Date,DNS_Key)values('$url','$date','$dns')";
        $stm = $connnect->prepare($query);
        if($stm->execute()){
            header("location: ./index.php");
        }else{
            echo '<script> alert("Error Inserting Data"); </script>'; 
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>


    <div class="container mt-5">
        <p><a href="./index.php" class="btn btn-dark">Go Back</a></p>




        <form action="" method="POST">
            <div class="row">
                <div class="col-md-4">
                    <label for="">URL</label>
                    <input type="text" class="form-control" value="<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>" name="url">
                </div>
                <div class="col-md-4">
                    <label for="">Date & Time</label>
                    <input type="text" class="form-control" value="<?php echo Date('d-m-Y h:m:s A'); ?>" name="date" readonly>
                </div>
                <div class="col-md-4">
                    <label for="">DNS Key</label>
                    <input type="text" class="form-control" value="<?php echo md5(rand()); ?>" name="dns">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-12 text-center">
                    <button type="submit" name="submit" class="btn btn-dark"> Add Now </button>
                </div>
            </div>
        </form>


    </div>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>