<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us Data</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap');

        body {
            font-family: Arial, sans-serif;
            background: rgb(43, 83, 132);
            background: radial-gradient(circle, rgba(43, 83, 132, 1) 7%, rgba(7, 7, 7, 1) 91%);
            margin: 0;
            padding: 0;
            color: white
        }


        .container {
            max-width: 100%;
            margin: 20px;
            overflow-x: auto;
            padding: 10px;
        }

        table {
            border-radius: 15px;
            width: auto;
            border-collapse: collapse;
            animation: fadeIn 1s ease;
            /* Add animation to fade in */
            overflow-x: auto;
            /* Enable horizontal scrolling on small screens */
            /* background-color: #2b2b2b; */
            background: transparent;
            backdrop-filter: blur(100px);
            /* Darker background color */
            color: #ffffff;
            background-color: rgb(36, 36, 36);

            /* Text color */
        }

        th,
        td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            padding: 20px;
        }

        th {
            /* background-color: #2b2b2b; */
            /* Darker background color for header */
            padding: 20px;
        }

        tr:hover {
            background-color: rgba(161, 0, 0, 0.584);
            /* Darker background color on hover */
            transition: background-color 0.3s ease;
            /* Add smooth transition effect */
        }

        .delete-btn {
            background: linear-gradient(145deg, #8b0000, #660000);
            /* Dark glow gradient */
            border: none;
            color: #ffffff;
            padding: 8px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            border-radius: 4px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .delete-btn:hover {
            background: linear-gradient(145deg, #262626, #393939);
            /* Darker glow on hover */
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @media only screen and (max-width: 600px) {

            table,
            thead,
            tbody,
            th,
            td,
            tr {
                display: block;

            }

            thead tr {
                position: absolute;
                top: -9999px;
                left: -9999px;
            }

            tr {
                border: 3px solid #ccc;
            }

            td {
                /* border: 0.5px solid; */
                border-bottom: 1px solid #eee;
                position: relative;
                padding-left: 50%;
                animation: slideIn 0.5s ease;

                /* Add animation to slide in */
            }

            td:before {
                position: absolute;
                top: 6px;
                left: 6px;
                width: 45%;
                padding-right: 10px;
                white-space: nowrap;
            }

            td:nth-of-type(1):before {
                content: "Name";
            }

            td:nth-of-type(2):before {
                content: "Email";
            }

            td:nth-of-type(3):before {
                content: "Phone Number";
            }

            td:nth-of-type(4):before {
                content: "Message";
            }

            td:nth-of-type(5):before {
                content: "Date";
            }

            td:nth-of-type(6):before {
                content: "Delete";
            }

        }

        @keyframes slideIn {
            from {
                left: -50%;
                opacity: 0;
            }

            to {
                left: 0;
                opacity: 1;
            }
        }
    </style>
</head>

<body class="container">
    <center>
        <h1>Contact Us Data</h1>
    </center>
    <table align="center">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Message</th>
                <th>Date</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Database connection parameters
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "bhgvat_contact";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM contactus where status='active'";

            $data = mysqli_query($conn, $sql);
            $total = mysqli_num_rows($data);

            if ($total != 0) {
                while ($result = mysqli_fetch_assoc($data)) {
                    echo "
                        <tr>
                            <td>" . $result['name'] . "</td>
                            <td>" . $result['email'] . " </td>
                            <td>" . $result['phoneNumber'] . " </td>
                            <td>" . $result['message'] . "</td>
                            <td>" . $result['date'] . "</td> 
                            <td><a href=' delete.php?rn=$result[id]' class='delete-btn' onclick='return confirm(\"delete this product?\");'>Delete</a></td>
                        </tr>         
                    ";
                }
            } else {
                echo "<tr><td colspan='4'>No records found</td></tr>";
            }
            $conn->close();
            ?>
        </tbody>
    </table>
</body>

</html>