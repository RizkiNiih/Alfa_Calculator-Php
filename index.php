<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <style>
        form{
            text-align: center;
            padding-top: 9rem;
        }
        p{
            text-align: center;
        }
    </style>
</head>
<body>
    <form method="POST" action="">
         <input type="text" name="num1" placeholder="Harus Diisi" required><br><br> <!-- required untuk pengguna dapat mengisi 2 input -->
        <input type="text" name="num2" placeholder="Harus Diisi" required><br><br>
        <select name="operation">
            <option value="add">+</option>
            <option value="sub">-</option>
            <option value="multi">*</option>
            <option value="div">/</option>
        </select><br><br>
        <input type="submit" name="submit" value="Submit"><br><br>
    </form>
    <p>
        <?php 
        if (isset($_POST['submit'])) {
            $a = isset($_POST['num1']) ? (float) $_POST['num1'] : 0; // float memastikan operasi aritmatika dapat berjalan lancar
            $b = isset($_POST['num2']) ? (float) $_POST['num2'] : 0;
            
            if (is_numeric($a) && is_numeric($b)) {
                switch ($_POST['operation']) {
                    case 'add':
                        $z = $a + $b;
                        echo "Hasilnya adalah $z";
                        break;
                    case 'sub':
                        $z = $a - $b;
                        echo "Hasilnya adalah $z";
                        break;
                    case 'multi':
                        $z = $a * $b;
                        echo "Hasilnya adalah $z";
                        break;
                    case 'div':
                        if ($b != 0) {
                            $z = $a / $b;
                            echo "Hasilnya adalah $z";
                        } else {
                            echo "Cannot divide by zero";
                        }
                        break;
                    default:
                        echo "Error: Invalid operation";
                        break;
                }
            } else {
                echo "Please enter valid numbers.";
            }
        }
        ?>
    </p>
</body>
</html>
