<?php include "../asset/header.html"; ?>
<?php include '../config/connection.php'; ?>
<?php
global $conn;
//get id from url
$sid = $_GET['id'];

//get data from db where id = $sid
$query = "SELECT * FROM surveys WHERE id = $sid";

//execute query
$results = $conn->query($query);

//check if query is valid
if (!$results) {
    die("Could not query the database: <br>" . $conn->error . "<br>Query: " . $query);
}

//fetch associative array
$result = $results->fetch_assoc();
?>

<section>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1 class="card-title text-center"><?php echo $result['title'] ?></h1>
            </div>
            <div class="card-body text-center">
                <h5 class="card-text"><?php echo $result['description'] ?></h5>
                <div class="embed-responsive embed-responsive-1by1">
                    <iframe src="<?= $result['pdfFile'];?>" width="640" height="480" allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "../asset/footer.html"; ?>
