<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Report</title>
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
        <h1>Weather Report</h1>

        <form method="post" action="weather_report.php">
            <label for="temperature">Enter temperature (in Celsius):</label>
            <input type="number" name="temperature" required><br>

            <button type="submit">Calculate</button>
        </form>

        <div id="result">
            <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $temperature = floatval($_POST["temperature"]);

                if ($temperature <= 15) {
                    echo "<p>It's freezing!</p>";
                } elseif ($temperature <= 25) {
                    echo "<p>It's cool.</p>";
                } else {
                    echo "<P>It's Warm</P>";
                }
            }
            ?>
        </div>
    </div>

</body>

</html>