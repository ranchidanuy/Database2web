<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database show data on Web</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
<div class="container p-5 my-5 bg-dark text-white">
        <h1>Database show data on Web</h1>
        <p>6402202057002 Mrs.Ranchida Chomphungam</p>
    </div>
    <?php
    require 'connect.php';
    // Fetch data from the tb_section table
    $query = "SELECT * FROM tb_section";
    $stmt = $pdo->query($query);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <div class="container mt-3">
        <h2>Section Data</h2>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Section ID</th>
                    <th>Section Name</th>
                    <th>Building Name</th>
                    <th>Telephone</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($results as $row) {
                    echo '<tr>';
                    echo '<td>' . $row['SECT_ID'] . '</td>';
                    echo '<td>' . $row['SECT_NAME'] . '</td>';
                    echo '<td>' . $row['SECT_BUILDING_NAME'] . '</td>';
                    echo '<td>' . $row['SECT_TELEPHONE'] . '</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>