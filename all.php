<?php
include("includes/Header.php");

$query = "SELECT * FROM form";
$data = $conn->prepare($query);
$data->execute();
$data->setFetchMode(PDO::FETCH_OBJ);
$result = $data->fetchAll();

if ($result) {
    foreach ($result as $row) {
        ?>
        <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
            <?php if ($row->status == 0) {
                ?>
                <div class="card-header"> NEPERSKAITYTAS <?= $row->name . ' ' . $row->surname ?> </div>
            <?php } elseif ($row->status == 1) {
                ?>
                <div class="card-header"> PERSKAITYTAS <?= $row->name . ' ' . $row->surname ?> </div>

            <?php } else {
                ?>
                <div class="card-header"> ATSAKYTAS <?= $row->name . ' ' . $row->surname ?> </div>
                <?php
            }
            ?>
            <div class="card-body">
                <h5 class="card-title"><?= $row->subject ?></h5>
                <p class="card-text"><?= $row->message ?></p>
            </div>
        </div>
        <?php
    }
}
?>