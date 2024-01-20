<!DOCTYPE html>
<html>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Box Array</title>
<body>
<h4>Jennifer Reisinger CS316</h4>
    <h4>Assignment 6-2</h4>
    <h1>Song Organizer</h1><hr />

    <?php
        //create a multidimensional associative array
        $SmallBox = array("length" => 12,"width" => 10,"depth" => 2.5);
        $MediumBox = array("length" => 30,"width" => 20,"depth" => 4);
        $LargeBox = array("length" => 60,"width" => 40,"depth" => 11.5);
        $Boxes = array("small" => $SmallBox, "medium" => $MediumBox, "large" => $LargeBox);
     
        //calculate the volume of each box size
        foreach ($Boxes as $BoxSize => $Box){
            $volume = $Box['length'] * $Box['width'] * $Box['depth'];
            $Volume[$BoxSize] = $volume;
        }

        //display the results
        foreach ($Volume as $BoxSize => $volume)
            echo "Volume of $BoxSize box: $volume<br>";
          
    ?>

</body>
</html>
