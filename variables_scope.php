

<?php
echo "<h2>PART A: PHP Variables & Scope</h2>";

// -------- Datatypes --------
$stringVar = "Hello PHP";
$intVar = 10;
$floatVar = 10.5;
$boolVar = true;
$arrayVar = array("HTML", "CSS", "PHP");

echo "<h3>Datatypes</h3>";
echo "String: $stringVar <br>";
echo "Integer: $intVar <br>";
echo "Float: $floatVar <br>";
echo "Boolean: $boolVar <br>";
echo "Array: ";
print_r($arrayVar);
echo "<br><br>";

// -------- Local Scope --------
function localScopeExample() {
    $localVar = "I am Local Variable";
    echo "Local Scope: $localVar <br>";
}
localScopeExample();

// -------- Global Scope --------
$globalVar = "I am Global Variable";

function globalScopeExample() {
    global $globalVar;
    echo "Global Scope: $globalVar <br>";
}
globalScopeExample();

// -------- Static Scope --------
function staticScopeExample() {
    static $count = 0;
    $count++;
    echo "Static Scope Count: $count <br>";
}

echo "<h3>Static Variable Demo</h3>";
staticScopeExample();
staticScopeExample();
staticScopeExample();
?>