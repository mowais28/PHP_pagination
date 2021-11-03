<?php
error_reporting(0);
include './db.php';
$startPage = 0;
$perpage = 4;
$currentPage = 1;
$total_records = mysqli_num_rows(mysqli_query($connnect, "SELECT * FROM pagi"));
$pagenumbers = ceil($total_records / $perpage);
if (isset($_GET['page'])) {
    $start = $_GET['page'];
    if ($start <= 0) {
        $start = 0;
        $currentPage = 1;
    }
    else{
        $currentPage = $start;
        $start--;
        $startPage = $start * $perpage;
    }
}
$query = "SELECT * FROM pagi LIMIT $startPage,$perpage";
$stm = mysqli_query($connnect, $query);
$rows = mysqli_num_rows($stm);

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
        <p><a href="./form.php" class="btn btn-dark"> Insert Data </a></p>
        <div class="table-responsive">
            <table class="table table-striped text-center">
                <thead class="bg-dark text-white">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Date</th>
                        <th scope="col">DNS Key</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    if (mysqli_num_rows($stm) > 0) {
                        while ($data = mysqli_fetch_assoc($stm)) {
                            echo '<tr>
                            <td>' . $data['ID'] . '</td>
                            <td>' . $data['Title'] . '</td>
                            <td>' . $data['Date'] . '</td>
                            <td>' . $data['DNS_Key'] . '</td>
                            </tr>';
                        }
                    } else {
                        echo '<tr><td colspan="5">No Record Found</td></tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>


        <div class="pagination">
            <?php for ($i = 1; $i <= $pagenumbers; $i++) {
                $active = '';
                if ($currentPage == $i) {
                    $active = 'active';
                }
                echo '<p class="page-item ' . $active . '"><a href="?page=' . $i . '" class="page-link">' . $i . '</a></p>';
            } ?>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>