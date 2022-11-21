<?php
// membuat Array berindeks otomatis
$programmer_php = array( "Andi", "Budi", "Wati", "Gunawan", "Baco", "Becce", "Fatma");
$programmer_python = array ("Andi", "Fatma", "Fadli", "Haris", "Baco");

sort($programmer_php);
print_r($programmer_php);
echo "<br/>";
echo "<br/>";

rsort($programmer_python);
print_r($programmer_python);
?>