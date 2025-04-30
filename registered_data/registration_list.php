<?php
include '../connection.php';
$result = $conn->query("SELECT * FROM registration");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HackX Registrations</title>

    <!-- jsPDF -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.25/jspdf.plugin.autotable.min.js"></script>
    
    <!-- SheetJS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 20px;
            background: #f2f4f7;
            color: #333;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #2c3e50;
        }

        .button-container {
            text-align: center;
            margin-bottom: 20px;
        }

        .btn {
            background-color: #27ae60;
            color: white;
            padding: 10px 20px;
            margin: 0 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .btn:hover {
            background-color: #219150;
        }

        .table-container {
            overflow-x: auto;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            background-color: white;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        th, td {
            padding: 12px 15px;
            border-bottom: 1px solid #eee;
            text-align: left;
        }

        th {
            background-color: #2c3e50;
            color: white;
        }

        tr:hover {
            background-color: #f9f9f9;
        }

        @media screen and (max-width: 768px) {
            th, td {
                font-size: 14px;
                padding: 10px;
            }

            .btn {
                font-size: 14px;
                padding: 8px 16px;
                margin: 5px 5px;
            }

            h1 {
                font-size: 22px;
            }
        }
    </style>
</head>
<body>

    <h1>HackX Registered Participants</h1>

    <div class="button-container">
        <button class="btn" onclick="exportPDF()">Export as PDF</button>
        <button class="btn" onclick="exportExcel()">Export as Excel</button>
    </div>

    <div class="table-container">
        <table id="registrationTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Team Name</th>
                    <th>College</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Province</th>
                    <th>Queries</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?= htmlspecialchars($row['id']) ?></td>
                        <td><?= htmlspecialchars($row['full_name']) ?></td>
                        <td><?= htmlspecialchars($row['team_name']) ?></td>
                        <td><?= htmlspecialchars($row['college_name']) ?></td>
                        <td><?= htmlspecialchars($row['email']) ?></td>
                        <td><?= htmlspecialchars($row['phone']) ?></td>
                        <td><?= htmlspecialchars($row['province']) ?></td>
                        <td><?= htmlspecialchars($row['queries']) ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

    <script>
        function exportPDF() {
            const { jsPDF } = window.jspdf;
            const doc = new jsPDF();

            doc.autoTable({ html: '#registrationTable', startY: 20 });
            doc.save('HackX_Registrations.pdf');
        }

        function exportExcel() {
            const table = document.getElementById("registrationTable");
            const wb = XLSX.utils.table_to_book(table, { sheet: "HackX Registrations" });
            XLSX.writeFile(wb, 'HackX_Registrations.xlsx');
        }
    </script>
</body>
</html>
