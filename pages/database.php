<?php include "../asset/header.html"; ?>
<?php include '../config/connection.php'; ?>
<?php
//connect to dbs
global $conn;
$query = "SELECT * FROM dbs";
$result = $conn->query($query);
if (!$result) {
    die("Could not query the database: <br>" . $conn->error . "<br>Query: " . $query);
}

?>

<section>
    <div class="container text-center" style="padding-top: 3rem;">
        <h1>
            DATABASE
        </h1>
    </div>
    <div class="container text-center" style="padding-bottom: 6rem">
        <?php foreach ($result as $db): ?>
            <div class="card" style="margin-top: 3rem;">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-title"><?php echo $db['title'] ?></h3>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-text"><?php echo $db['description'] ?></h5>
                    <a href="detaildbs.php?id=<?php echo $db['dbid'] ?>" class="btn btn-info">Lihat Rincian</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<?php include "../asset/footer.html"; ?>
