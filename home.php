<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <title>Company Dashboard</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f4f6f9;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            max-width: 800px;
            width: 90%;
            background: white;
            padding: 40px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
            border-radius: 15px;
            text-align: center;
        }

        h1 {
            color: #2c3e50;
            margin-bottom: 30px;
        }

        .nav-links {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 20px;
        }

        .nav-links a {
            display: block;
            padding: 15px 10px;
            background: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 10px;
            font-size: 16px;
            transition: 0.3s ease;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        .nav-links a:hover {
            background: #2980b9;
            transform: translateY(-3px);
        }

        @media (max-width: 500px) {
            .container {
                padding: 20px;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Company Dashboard</h1>
        <div class="nav-links">
            <a href="employee.php">Employees</a>
            <a href="branch.php">Branches</a>
            <a href="client.php">Clients</a>
            <a href="branch_supplier.php">Suppliers</a>
            <a href="works_with.php">Partnerships</a>
        </div>
    </div>

</body>
</html>
