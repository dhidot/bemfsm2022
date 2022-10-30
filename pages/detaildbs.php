<?php include "../asset/header.html"; ?>
<?php include "../config/connection.php"; ?>
<?php
global $conn;
$id = $_GET["id"];
$query = "SELECT * FROM dbs WHERE dbid = $id";
$details = $conn->query($query);
if (!$details) {
    die("Could not query the database: <br>" . $conn->error . "<br>Query: " . $query);
}

$detail = $details->fetch_assoc();
?>

<section>
    <div class="container mt-6">
        <div class="team-thumb">
            <div class="team-info d-flex flex-column text-center mb-2" style="padding: 5%">
                <div class="row">
                    <div class="col-lg-12 col-12 text-center">
                        <h1 style="color: #000000"><strong><?= $detail['title'] ?></strong></h1><br>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-12 text-center mb-3">
                        <h5>Database di bawah menunjukkan data dari penerima beasiswa mahasiswa FSM yang dihimpun oleh Biro Statistik BEM FSM</h5><br>
                    </div>
                </div>

                <div class="col-lg-12 col-12">
                    <div class="embed-responsive embed-responsive-1by1">
                        <iframe src="<?php echo $detail['file'] ?>"
                                width="960" height="640" allow="autoplay"></iframe>
                    </div>
                    <br>
                    <h5 class="text-left text-small">Dipublish pada : 2022-03-27</h5>
                </div>
            </div>
    </div>
</section>

<?php include "../asset/footer.html"; ?>
