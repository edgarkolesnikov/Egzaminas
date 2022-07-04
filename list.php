<?php
include("includes/Header.php");

$query = "SELECT * FROM form";
$data = $conn->prepare($query);
$data->execute();
$data->setFetchMode(PDO::FETCH_OBJ);
$result = $data->fetchAll();

?>
<table>
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Surname</td>
        <td>Email</td>
        <td>Phone</td>
        <td>Subject</td>
        <td>Message</td>
        <td>Delete</td>
    </tr>
    <?php
    if ($result) {
        foreach ($result as $row) {
            ?>
            <tr>
                <td><?= $row->id; ?> </td>
                <td><?= $row->name; ?> </td>
                <td><?= $row->surname; ?> </td>
                <td><?= $row->email; ?> </td>
                <td><?= $row->phone; ?> </td>
                <td><?= $row->subject; ?> </td>
                <td><?= $row->message; ?> </td>
                <td>
                    <form action="delete.php" method="POST">
                        <input type="hidden" name="id" value="<?= $row->id; ?>">
                        <input type="submit" name="delete">
                    </form>
                </td>
                <td><form action="update.php" method="POST">
                        <input type="hidden" name="id" value="<?= $row->id; ?>">
                        <select name="status">
                            <option value="0"> Neperskaitytas</option>
                            <option value="1"> Perskaitytas</option>
                            <option value="2"> Atsakytas</option>

                        </select>
                        <input type="submit" name="submit" value="Atnaujinti">
                    </form>
                </td>
            </tr>
            <?php
        }
    }
    ?>

</table>
