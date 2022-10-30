<?php include "../asset/header.html"; ?>
<?php include '../config/connection.php'; ?>
<?php
//connect to dbs
global $conn;
$query = "SELECT * FROM surveys";
$surveys = $conn->query($query);
if (!$surveys) {
    die("Could not query the database: <br>" . $conn->error . "<br>Query: " . $query);
}

?>
<!--<section style="padding-bottom: 5rem;">-->
<!--    <div class="container" style="padding-top: 5rem">-->
<!--        <div class="row">-->
<!--            <div class="col-md-12 text-center">-->
<!--                <h1><strong>SURVEI TERBARU</strong></h1>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="row">-->
<!--            <div class="col-md-12 text-center">-->
<!--                <div class="card">-->
<!--                    <div class="card-body">-->
<!---->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->

<section style="padding-top: 3rem">
    <div class="container pb-4">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1><strong>SURVEI TERBARU</strong></h1>
            </div>
        </div>
        <div class="row">
            <?php foreach ($surveys as $survey) :?>
            <div class="col-md-4">
                <div class="card">
                    <img src="../src/img/Survei%201.png" alt="">
                    <div class="card-body text-center">
                        <a href="detailSurvei.php?id=<?php echo $survey['id'] ?>" class="btn btn-info">Baca Laporan Survei</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php include "../asset/footer.html"; ?>
