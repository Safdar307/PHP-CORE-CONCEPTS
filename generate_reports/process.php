<?php

header("Content-type: application/vnd-ms-excel");  //for ms excel
// Defines the name of the export file "export.xls"
header("Content-Disposition: attachment; filename=export.CSV");
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Excel Reports</h1>

    <table border="1" colspan="10" cellpading="10">
        <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Gender</th>
        <th>phone Number</th>
        <th>City</th>
        </tr>
        <tr>
            <td>Safdar Ali</td>
            <td>24</td>
            <td>Male</td>
            <td>03063214556</td>
            <td>HYDERABD</td>
        </tr>
        <tr>
            <td>Ahmed Ali</td>
            <td>25</td>
            <td>Male</td>
            <td>03053314656</td>
            <td>Jamshoro</td>
        </tr>
        <tr>
            <td>Sehar Khan</td>
            <td>30</td>
            <td>Female</td>
            <td>0336321456</td>
            <td>Digri</td>
        </tr>
        <tr>
            <td>Shahabaz Ali</td>
            <td>31</td>
            <td>Male</td>
            <td>03063214556</td>
            <td>HYDERABD</td>
        </tr>
    </table>
</body>
</html>