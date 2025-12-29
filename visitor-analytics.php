<?php
// 1️⃣ DB connection (MUST be first)
include './db.connection/db_connection.php';

// 2️⃣ Total website visitors
$totalRes = $conn->query(
    "SELECT SUM(visit_count) AS total FROM visitors"
);

if ($totalRes) {
    $totalRow = $totalRes->fetch_assoc();
    $totalCount = $totalRow['total'] ?? 0;
} else {
    $totalCount = 0;
}

// 3️⃣ Page-wise visitors
$pages = $conn->query(
    "SELECT page_name, visit_count FROM visitors ORDER BY visit_count DESC"
);
?>

<?php include 'navbar.php'; ?>

<!DOCTYPE html>
<html>

<head>
    <title>Visitor Analytics</title>
    <style>
        body {
            font-family: Arial;
            /* padding: 20px; */

        }
        .body_section{
            padding:  0px 10px;
        }

        @media (min-width:768px) {
            body {
                margin: 0px 20px;
            }

        }

        .box {
            border: 1px solid #ccc;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 8px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background: #f5f5f5;
        }
    </style>
</head>

<body>
    <div class="body_section">
        <h2 class="mt-5">📊 Visitor Analytics</h2>

        <div class="box">
            <h3>👥 Total Website Visitors</h3>
            <p><b><?php echo $totalCount; ?></b></p>
        </div>

        <div class="box ">
            <h3>📄 Page-wise Visitors</h3>
            <table>
                <tr>
                    <th>Page</th>
                    <th>Visitors</th>
                </tr>

                <?php if ($pages && $pages->num_rows > 0) { ?>
                    <?php while ($row = $pages->fetch_assoc()) { ?>
                        <tr>
                            <td class="page-name"> <?php echo htmlspecialchars($row['page_name']); ?> </td>

                            <!-- <td><?php echo htmlspecialchars($row['page_name']); ?></td> -->
                            <td><?php echo $row['visit_count']; ?></td>
                        </tr>
                    <?php } ?>
                <?php } else { ?>
                    <tr>
                        <td colspan="2">No visitor data found</td>
                    </tr>
                <?php } ?>

            </table>
        </div>
    </div>
</body>

</html>