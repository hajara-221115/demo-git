

<?php
echo "<h2>PART B: PHP String Functions</h2>";

$str = "  Welcome to PHP Programming  ";

// Basic String Functions
echo "Length: " . strlen($str) . "<br>";
echo "Word Count: " . str_word_count($str) . "<br>";
echo "Reverse: " . strrev($str) . "<br><br>";

// Case Conversion
echo "Uppercase: " . strtoupper($str) . "<br>";
echo "Lowercase: " . strtolower($str) . "<br>";
echo "Ucfirst: " . ucfirst(trim($str)) . "<br>";
echo "Ucwords: " . ucwords(trim($str)) . "<br><br>";

// Search & Replace
echo "Position of 'PHP': " . strpos($str, "PHP") . "<br>";
echo "Replace PHP with MySQL: " . str_replace("PHP", "MySQL", $str) . "<br><br>";

// Substring & Trimming
echo "Substring: " . substr($str, 0, 10) . "<br>";
echo "Trim: '" . trim($str) . "'<br>";
echo "Left Trim: '" . ltrim($str) . "'<br>";
echo "Right Trim: '" . rtrim($str) . "'<br><br>";

// String Comparison
echo "strcmp: " . strcmp("PHP", "php") . "<br>";
echo "strcasecmp: " . strcasecmp("PHP", "php") . "<br><br>";

// Special Characters & Security
$specialStr = "<script>alert('hack')</script>";
echo "htmlspecialchars: " . htmlspecialchars($specialStr) . "<br>";
echo "addslashes: " . addslashes("O'Reilly") . "<br>";
?>