<?php
include("connection.php");

$query = "SELECT * FROM form";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

if ($total != 0) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crime Shield</title>
    <style>
        /* General Styles */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: url('images/police.jpg') no-repeat center center fixed;
            background-size: cover;
        }

        /* Table styling with semi-transparent background */
        table {
            width: 90%;
            margin: 50px auto;
            border-collapse: collapse;
            font-size: 18px;
            text-align: left;
            background: rgba(0, 0, 0, 0.8); /* Semi-transparent black background */
            color: white;
            border-radius: 10px;
            overflow: hidden;
        }
        th, td {
            padding: 15px;
            border: 1px solid #ddd;
        }
        th {
            background-color: rgba(255, 255, 255, 0.1); /* Slightly transparent headers */
        }
        tr:hover {
            background-color: rgba(255, 255, 255, 0.1); /* Row hover effect */
        }

        /* Button styling */
        .btn {
            padding: 10px;
            margin: 5px;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        .btn:hover {
            opacity: 0.9;
        }
        .btn-assign {
            background-color: #28a745;
        }
        .btn-update {
            background-color: #ffc107;
        }
        .btn-delete {
            background-color: #dc3545;
        }
    </style>
</head>

<body>

<table border="3">
    <tr>
        <th>FIR ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Age</th>
        <th>Address</th>
        <th>Contact No</th>
        <th>Incident Date Time</th>
        <th>Location</th>
        <th>Incident Type</th>
        <th>Description</th>
        <th>Injuries</th>
        <th>Perpetrator</th>
        <th>Actions</th>
    </tr>

<?php
    while ($result = mysqli_fetch_assoc($data)) {
        echo "
        <tr>
            <td>" . $result['fir_id'] . "</td>
            <td>" . $result['first_name'] . "</td>
            <td>" . $result['last_name'] . "</td>
            <td>" . $result['age'] . "</td>
            <td>" . $result['address'] . "</td>
            <td>" . $result['contact_number'] . "</td>
            <td>" . $result['incident_datetime'] . "</td>
            <td>" . $result['location'] . "</td>
            <td>" . $result['incident_type'] . "</td>
            <td>" . $result['description'] . "</td>
            <td>" . $result['injuries'] . "</td>
            <td>" . $result['perpetrator'] . "</td>
            <td>
                <button class='btn btn-assign' onclick=\"assignCase(" . $result['fir_id'] . ")\">Assign</button>
                <button class='btn btn-update' onclick=\"updateCase(" . $result['fir_id'] . ")\">Update</button>
                <button class='btn btn-delete' onclick=\"deleteCase(" . $result['fir_id'] . ")\">Delete</button>
            </td>
        </tr>
        ";
    }
} else {
    echo "No records found";
}
?>

</table>

<script>
    function assignCase(firId) {
        window.location.href = "assign.php?fir_id=" + firId;
    }

    function updateCase(firId) {
        window.location.href = "update.php?fir_id=" + firId;
    }

    function deleteCase(firId) {
        if (confirm("Are you sure you want to delete this case?")) {
            window.location.href = "delete.php?fir_id=" + firId;
        }
    }
</script>

</body>
</html>

<?php
?>
