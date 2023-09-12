<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
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
        <h1>Temperature Converter</h1>

        <form method="post">
            <label for="temperature">Enter temperature:</label>
            <input type="number" name="temperature" required>

            <label for="conversion">Select conversion:</label>
            <select name="conversion" required>
                <option value="celsius_to_fahrenheit">Celsius to Fahrenheit</option>
                <option value="fahrenheit_to_celsius">Fahrenheit to Celsius</option>
            </select>

            <button type="submit">Calculate</button>
        </form>

        <div id="result">
            <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $temperature = $_POST["temperature"];
                $conversion = $_POST["conversion"];

                if ($conversion === "celsius_to_fahrenheit") {
                    $result = ($temperature * 9 / 5) + 32;
                    echo "<p>$temperature &deg;C is $result &deg;F</p>";
                } elseif ($conversion === "fahrenheit_to_celsius") {
                    $result = ($temperature - 32) * 5 / 9;
                    echo "<p>$temperature &deg;F is $result &deg;C</p>";
                }
            }
            ?>
        </div>
    </div>



</body>

</html>