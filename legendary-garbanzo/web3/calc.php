<html>
<head><title>Calculation Result</title></head>
<body>
    <?php

    if(isset($_POST['val1']) && isset($_POST['val2'])){
        if(is_numeric($_POST['val1']) && is_numeric($_POST['val2'])){

                $calculate = $_POST['calc'];
                switch ($calculate) {
                case 'add':
                    $result = $_POST['val1'] + $_POST['val2'];
                    break;
                case 'sub':
                    $result = $_POST['val1'] - $_POST['val2'];
                    break;
                case 'mul':
                    $result = $_POST['val1'] * $_POST['val2'];
                    break;
                case 'div':
                    $result = $_POST['val1'] / $_POST['val2'];
                    break;
                default:
                    echo "Please input number and try again.";
                    break;
                }
                    
            echo "Calculation result: $result";

        } else { 

            echo "Invalid entry - please retry!";
            echo "<br><a href = \"index.php\">Go Back</a>";

        }
    }
    ?>
</body>
</html>