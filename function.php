<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Function</title>
</head>
<body>
    <h1>Berlatih Function PHP</h1>
    <?php
    echo "<h3>Soal No 1 Greetings</h3>";
    function greetings($name) {
        echo "Halo $name, Selamat Datang di Garuda Cyber Institute!<br>";
    }
    greetings("Bagas");
    greetings("Wahyu");
    greetings("namapeserta");
    echo "<br>";

    echo "<h3>Soal No 2 Reverse String</h3>";
    function reverseString($string) {
        $length = strlen($string);
        $reversed = '';
        for ($i = $length - 1; $i >= 0; $i--) {
            $reversed .= $string[$i];
        }
        echo "$reversed<br>";
    }
    reverseString("namapeserta");
    reverseString("GarudaCyberInstitute");
    reverseString("WeAreGC-InsDeveloper");
    echo "<br>";

    echo "<h3>Soal No 3 Palindrome</h3>";
    function isPalindrome($string) {
        $length = strlen($string);
        for ($i = 0; $i < $length / 2; $i++) {
            if ($string[$i] !== $string[$length - $i - 1]) {
                return false;
            }
        }
        return true;
    }
    echo isPalindrome("civic") ? "true" : "false"; // true
    echo "<br>";
    echo isPalindrome("nababan") ? "true" : "false"; // true
    echo "<br>";
    echo isPalindrome("jambaban") ? "true" : "false"; // false
    echo "<br>";
    echo isPalindrome("racecar") ? "true" : "false"; // true
    echo "<br>";

    echo "<h3>Soal No 4 Tentukan Nilai</h3>";
    function tentukan_nilai($nilai) {
        if ($nilai >= 85 && $nilai <= 100) {
            return "Sangat Baik";
        } elseif ($nilai >= 70 && $nilai < 85) {
            return "Baik";
        } elseif ($nilai >= 60 && $nilai < 70) {
            return "Cukup";
        } else {
            return "Kurang";
        }
    }
    echo tentukan_nilai(98); // Output: Sangat Baik
    echo "<br>";
    echo tentukan_nilai(76); // Output: Baik
    echo "<br>";
    echo tentukan_nilai(67); // Output: Cukup
    echo "<br>";
    echo tentukan_nilai(43); // Output: Kurang
    ?>
</body>
</html>
