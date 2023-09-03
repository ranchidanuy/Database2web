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
    <!--  jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!--  JavaScript -->
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<!--  CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />

</head>

<body>
<div class="container p-5 my-5 bg-dark text-white">
        <h1>Database show data on Web</h1>
        <p>lesson 4</p>
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
        <p>Show section data and internal line phone</p>
        <table class="table table-hover" id="myTable">
        <div class="btn-group btn-group-lg">
  <button type="button" class="btn btn-warning" onclick="window.location.href ='lesson1.php'">Lesson 1 : แสดงข้อมูลทั้งหมดโดยเรียงจาก SECT_ID จากมากไปหาน้อย

</button>
  <button type="button" class="btn btn-warning"onclick="window.location.href ='lesson1.php'">Lesson 2 : แสดงข้อมูลเฉพาะ SECT_TELEPHONE และ SECT_NAME โดยเรียงจาก SECT_NAME จาก A-Z
</button>
  <button type="button" class="btn btn-warning"onclick="window.location.href ='lesson1.php'">Lesson 3 : แสดงข้อมูลทั้งหมด โดยเลือกเฉพาะที่ SECT_TELEPHONE มีเลข 12 และเรียงข้อมูลจาก SECT_NAME จาก Z-A
</button>
</div>
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
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
</script>

</body>

</html>