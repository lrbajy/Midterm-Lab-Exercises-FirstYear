<?php
    require('database_open.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Week 16 - Laboratory Exercise</title>
    <style>
        .card-body {
            padding: 0.5rem;
        }
    </style>
</head>
<body>
    <div class="container my-3">
        <div class="row g-2"> <!-- Close card spacing -->
            <?php
            $ctr = 1;
            $sql = "SELECT * FROM products";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <div class="col-6 col-md-3 my-3 p-0">
                    <div class="card h-100 position-relative m-0">
                        <a href="page2.php?id=<?php echo $row['id']; ?>" style="text-decoration: none;">
                            <img src="<?php echo htmlspecialchars($row['img_thumb']); ?>" class="card-img-top" alt="Product image">
                            <div class="card-body bg-dark bg-opacity-75 text-white position-absolute top-0 bottom-0 w-100" style="display: none;">
                                <h5 class="card-title mb-1"><?php echo $row['title'] . " " . $ctr ; ?></h5>
                                <p class="card-text small"><?php echo htmlspecialchars($row['short_description']); ?></p>
                            </div>
                        </a>
                    </div>
                </div>
            <?php
                $ctr++;
                }
            } else {
                echo "No result";
            }
            ?>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            $('.card').hover(
                function () {
                    $(this).find('.card-body').fadeIn();
                },
                function () {
                    $(this).find('.card-body').fadeOut();
                }
            );
        });
    </script>
</body>
</html>

<?php
    require('database_close.php');
?>
