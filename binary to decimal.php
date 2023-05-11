<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['binary'])) {
        $binary = $_GET['binary'];

        function binaryToDecimal($binary)
        {
            $decimal = 0;
            $length = strlen($binary);

            for ($i = 0; $i < $length; $i++) {
                $digit = $binary[$length - $i - 1];
                $decimal += $digit * pow(2, $i);
            }

            return $decimal;
        }

        $decimal = binaryToDecimal($binary);

        echo "Binary $binary is equal to decimal $decimal";
    } else {
        echo "Please enter a binary number";
    }
}
?>

<form method="get">
    Enter a binary number: <input type="text" name="binary">
    <input type="submit" value="Submit">
</form>
