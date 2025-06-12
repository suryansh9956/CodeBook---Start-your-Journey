<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>codeBook - Start Your Journey</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: rgb(31, 9, 143);
            color: green;
        }
    </style>
</head>

<body>
    <?php include  'child/_dbconnect.php';   ?>
    <?php include  'child/_header.php';   ?>
    <!-- start search -->
    <div class="container my-3" id="maincontainer" style="min-height: 31rem;">
        <h1 class="py-3">Search results for <em>"<?php echo html_entity_decode($_GET['search']); ?>"</em></h1>
        <?php
        include 'child/_dbconnect.php';
        $noresults = true;
        $query = mysqli_real_escape_string($conn, $_GET["search"]);
        $sql = "SELECT * FROM category WHERE category_name LIKE '%$query%' ";
        $result = mysqli_query($conn, $sql);
        if ($result && mysqli_num_rows($result) > 0) {
            $noresults = false;
            while ($row = mysqli_fetch_assoc($result)) {
                $title = html_entity_decode($row['category_name']);
                $desc = html_entity_decode($row['category_description']);
                echo '<div class="card my-3 bg-light">  <!-- White Box -->
                        <div class="card-body">
                            <h3 class="card-title text-warning">' . $title . '</h3>
                            <p class="card-text text-dark">' . $desc . '</p>
                        </div>
                      </div>';
            }
        }

        if ($noresults) {
            echo '<div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <p class="display-4">No Results Found</p>
                    <p class="lead">Suggestions:
                        <ul>
                            <li>Make sure that all words are spelled correctly.</li>
                            <li>Try different keywords.</li>
                            <li>Try more general keywords.</li>
                        </ul>
                    </p>
                </div>
             </div>';
        }
        ?>
    </div>
    <?php include  'child/_footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
      -->
</body>

</html>