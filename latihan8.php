<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Math Operations</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 2em;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f7f7f7;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>PHP Math Operations</h1>
        <?php
            $a = 10;
            $b = 5;

            $addition = $a + $b;
            $subtraction = $a - $b;
            $multiplication = $a * $b;
            $division = $a / $b;
            $modulus = $a % $b;
        ?>
        <table>
            <thead>
                <tr>
                    <th>Operation</th>
                    <th>Result</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo "$a + $b"; ?></td>
                    <td><?php echo $addition; ?></td>
                </tr>
                <tr>
                    <td><?php echo "$a - $b"; ?></td>
                    <td><?php echo $subtraction; ?></td>
                </tr>
                <tr>
                    <td><?php echo "$a * $b"; ?></td>
                    <td><?php echo $multiplication; ?></td>
                </tr>
                <tr>
                    <td><?php echo "$a / $b"; ?></td>
                    <td><?php echo $division; ?></td>
                </tr>
                <tr>
                    <td><?php echo "$a % $b"; ?></td>
                    <td><?php echo $modulus; ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>