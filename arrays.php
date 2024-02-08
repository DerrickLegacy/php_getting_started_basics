<?php 
print("ARRAYS <br>");
$languages = array("JS", "PHP", "ASP", "Java");
// Array elements are accessed like this: $arrayName[positionIndex].
print($languages[1]);
echo "<br>";

// 1.   INDEXED ARRAYS
$names = array("Fabio", "Klevi", "John");
// this is a rather manual way of doing it
$names[0] = "Fabio";
$names[1] = "Klevi";
$names[2] = "John";
echo "My friends are " . $names[0] . ", " . $names[1] . " and " . $names[2]."<br>";
echo "My friends are ".$names[0].", ".$names[1]." and ".$names[2]. "<br>";
// Looping through an indexed array is done like so:
$arrayLength = count($names);
for ($i=0; $i < $arrayLength; $i++) { 
    print("$names[$i] <br>");
}

// 2. ASSOCIATIVE ARRAYS
$namesAge=array("Fabio"=>"20", "Klevi"=>"59", "Derrick"=>"100");
// Or
// this is a rather manual way of doing it
$namesAge['Fabio'] = "203";
$namesAge['Klevi'] = "188";
$namesAge['John'] = "430";
echo "Fabio's age is ".$namesAge["Fabio"]." year";
// looping throuh this array
echo "<br>Name              :Age <br>";
foreach ($namesAge as $key => $value) {
    echo "$key          :$value <br>";
}

// 3. MULTIDIMENSIONAL ARRAYS
$socialNetworks = array(
    array("facebook", "february", 12),
    array("twitter", "February", 20),
    array("WhatsApp", "March", 30)
);

$arrayLength = count($socialNetworks);

echo "
<table border='1px'>
    <tr>
        <td>Social Network </td>
        <td>founded on</td>
    </tr>";
    
// Start the PHP context for the loop
for ($i = 0; $i < $arrayLength; $i++) {
    // Accessing individual elements within each sub-array
    $networkName = $socialNetworks[$i][0];
    $monthFounded = $socialNetworks[$i][1];
    $dayFounded = $socialNetworks[$i][2];
    
    // Concatenate the HTML markup and PHP variables
    echo "
    <tr>
        <td>$networkName </td>
        <td>$monthFounded, $dayFounded</td>
    </tr>";
}

echo "
</table>";


?>