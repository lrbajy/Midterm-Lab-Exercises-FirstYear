<?php
    require('database_open.php');
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <title>Week 16 - Description</title>
</head>
<body>
    <!-- <?php
        //$title="Card title";
        //$desc="Some quick example text to build on the card title and make up the bulk of the card's content.";
        //$img="https://placehold.co/400";
    ?> -->

    <div class="card mx-5 my-5" style="width: 30rem;">

    <?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM products WHERE id =" . $id;
    $result = mysqli_query($conn, $sql);
    
        if (mysqli_num_rows($result) > 0) {               
            while($row = mysqli_fetch_assoc($result)) {
    ?>
            <img class="card-img-top" src="<?php echo $row['img_banner']; ?>">
            <div class="card-body">
                <h5 class="card-title"><?php echo $row['title'] . " " .$row['id']; ?></h5>
                <p class="card-text"><?php echo $row['long_description']; ?></p>
                <a href="index.php" class="btn btn-primary">Back</a>
            </div>
    <?php
            break;
            }
        } else {
                echo "No product found";
            }
    ?>

   
        
    
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
            crossorigin="anonymous"></script>
</body>
</html>

<?php
    require('database_close.php');
?>
