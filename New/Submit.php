<?php
    $passphrase = getenv('SET_PASSPHRASE');
    $compare = $_POST["passphrase"];
    if ($compare != $passphrase){
        echo "Incorrect Passphrase";
        header( 'Location: /Admin.html') ;
    }
    
    // First connect to the database via your connection insert file
    require 'connection.inc.php'; 
    
    // This is a prepared statement, not necessary with this simple query with no variables, but anyway...

    $sqltut = $dbconn->prepare("Select news_id, header, update, image, blank_1 From customertut") ; 
    $sqlnew = $dbconn->prepare("Select news_id, header, update, image, blank_1 From newsupdates") ; 
    // Execute the query, if there were variables, they could be bound within the brackets
    $sqltut->execute() ;
    $sqlnew->execute() ;
?>
<html>
    <body>
   
    <div class="content" >
	<fieldset>
	<form action = "submitTut.php" method = "post">
		<h2>News Header:</h2>
          <input type="text" name="Header">
        <br>
        <h2>Update:</h2>
          <input type="text" name="update">
          <br>
        <h2>Image Url:</h2>
          <input type="text" name="url">
          <br><br>
																
    <input type="submit" value = "Submit News" style = "padding-bottom = 20px">
    </form>
    </fieldset>
</div>

<table>
    <thead>
        <tr>
            <th>News ID</th>
            <th>Header</th>
            <th>Update</th>
            <th>Url</th>
            <th>Date</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <!--Use a while loop to make a table row for every DB row-->
        <?php while( $row1 = $sqltut->fetch()) : ?>
        <tr>
            <!--Each table column is echoed in to a td cell-->
            <td><?php echo $row1['news_id']; ?></td>
            <td><?php echo $row1['header']; ?></td>
            <td><?php echo $row1['update']; ?></td>
            <td><?php echo $row1['image']; ?></td>
            <td><?php echo $row1['blank_1']; ?></td>
            <td><form action="/New/delete.php" method="post">
                    <input type="hidden" name="id" value="news_id">
                    <input type="hidden" name="idnum" value=<?php echo $row1['news_id']; ?>>
                    <input type="hidden" name="table" value="customertut">
                  <button type="submit" value="Submit">Delete</button>
                </form></td>
        </tr>
        <?php endwhile ?>
    </tbody>
</table>

    </body>
    
</html>