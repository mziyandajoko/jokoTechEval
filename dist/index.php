<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Read data</title>
	<link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
    <style>
        td:first-of-type {
  font-size: 20px;
  font-weight:bold;
}

.margin_top{
    margin-top: 40px;
}
    </style>
<body>
    <div class="container">

        <?php
	$rows = array(
        array( 'Colour','Red', 'Green', 'Blue', 'Orange'),
	    array('Number',13, 16, 18, 19),
	    array('Name', 'Sarah', 'Adam', 'Ben', 'John'),
	    array('Animal', 'Dog', 'Cat', 'Mouse', 'Tiger')
	);
	shuffle($rows);
	?>
	<div class="container">
        <table class="table text-left margin_top">
            <?php 
                    for($rowIndex = 0; $rowIndex < count($rows); $rowIndex++) {
                        $currentRow = $rows[$rowIndex];
                        ?>
                <tr class="text-left">
                    <?php
                        for($columnIndex = 0; $columnIndex < count($currentRow); $columnIndex++) {
                            ?>
                    <td id="shuffleElements"><?= $currentRow[$columnIndex] ?>
                </td><?php } ?>
            </tr>
            <?php  }?>
        </table>
        <button class="btn btn-outline-success" onclick="shuffleArray();" type="button">Random Sort</button>
	</div>
    </div>
	<script>
        
	 
	// Access the array elements  
    var passArray = <?php echo json_encode($rows); ?>;
    
    // const array = passArray.toString().length;
    
    // const elements = document.getElementById('shuffleElements');

function shuffleArray() {

	   for (let i = elements.length - 1; i > 0; i--) {
	       const j = Math.floor(Math.random() * (i + 1));
	       const tempArray = elements[i];
	       elements[i] = elements[j];
	       elements[j] = tempArray;
	   }
    //    return elements;
       console.log(elements);
	}
	   
	</script>
</body>
</html>


