<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <style>
        body {
            box-sizing: border-box;
            font-family: "Poppins, Sans-serif";
            text-align: center;
        }

        .container {
            margin: 50px auto;
            width: 300px;
            box-shadow: rgba(0, 0, 0, 0.3) #ccc;
            padding: 20px;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            border-radius: 5px;
        }

        input,
        select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        button {
            color: white;
            background: blue;
            padding: 10px 20px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
        }

        #result {
            margin-top: 20px;
            font-size: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Basice Calculator</h1>
        <form action="" method="post">
            <input type="number" name="input1" placeholder="Enter Your First Number" required>
            <input type="number" name="input2" placeholder="Enter Your Last Number" required>
            <select name="operation" id="">
                <option value="add">Addition</option>
                <option value="subtraction">Substrication</option>
                <option value="muliplication">Multification</option>
                <option value="division">Division</option>
                <option value="binery">Binery</option>
                <option value="ocatal">Octal</option>
                <option value="hexadecimal">Hexadecimal</option>
            </select><br>
            <button type="submit">Calculate</button>
        </form>

        <div id="result">

            <?php

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $num1 = $_POST["input1"];
                $num2 = $_POST["input2"];
                $operation = $_POST["operation"];

                switch ($operation) {
                    case "add":
                        $result = $num1 + $num2;
                        echo "Result:" . $result;
                        break;
                    case "subtraction":
                        $result = $num1 - $num2;
                        echo "Result:" . $result;
                        break;
                    case "muliplication":
                        $result = $num1 * $num2;
                        echo "Result:" . $result;
                        break;
                    case "division":
                        if ($num2 != 0) {
                            $result = $num1 / $num2;
                            echo "Result:" . $result;
                        } else {
                            echo "Can't divide by zero";
                        }
                        break;

                    case "binery":
                        $result = decbin($num1);
                        echo "Result:" . $result;
                        break;

                    case "ocatal":
                        $result = decoct($num1);
                        echo "Result:" . $result;
                        break;
                    case "hexadecimal":
                        $result = dechex($num1);
                        echo "Result:" . $result;
                        break;
                }
            }



            ?>


        </div>
    </div>
</body>

</html>