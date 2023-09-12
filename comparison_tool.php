<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison Tool</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        .container {
            margin: 50px auto;
            width: 300px;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        input[type="number"],
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        button {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }

        #result {
            margin-top: 20px;
            font-size: 18px;
        }
    </style>
</head>


<body>
    <div class="container">
        <h1>Comparison Tool</h1>

        <form method="post" action="comparison_tool.php">
            <label for="num1">Enter first number:</label>
            <input type="number" name="num1" required><br>

            <label for="num2">Enter second number:</label>
            <input type="number" name="num2" required><br>

            <button type="submit">Calculate</button>
        </form>

        <div id="result">
            <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $num1 = ($_POST["num1"]);
                $num2 = ($_POST["num2"]);

                $larger = ($num1 > $num2) ? $num1 : $num2;

                echo "<p>The larger number is: $larger</p>";
            }
            ?>
        </div>
    </div>

</body>

</html>