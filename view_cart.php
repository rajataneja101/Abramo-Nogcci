<h1>View cart</h1> 
<a href="product.php">Go back to products page</a> 
<form method="post" action="index.php?page=cart"> 
      
    <table> 
          
        <tr> 
            <th>Name</th> 
            
        </tr> 
          
        <?php
        mysql_connect("localhost","root","root");
mysql_select_db("abramo"); 
          session_start();
            $sql="SELECT * FROM shoes WHERE id IN ("; 
                      
                    foreach($_SESSION['cart'] as $id => $value) { 
                        $sql.=$value.","; 
                    } 
                      
                    $sql=substr($sql, 0, -1).")"; 
                    
                    $query=mysql_query($sql); 
                    while($row=mysql_fetch_array($query)){ 
        
                    ?> 
                        <tr> 
                            <td><?php echo $row['name'] ?></td> 
                           <td><a href="remove_cart.php?id=<?php echo $row['id']?>">Remove</a>
                        </tr> 
                    <?php 
                          
                    } 
        ?> 
                   
          
    </table> 
    <br /> 
    <button type="submit" name="submit">Update Cart</button> 
</form> 
<br /> 
<p>To remove an item, set it's quantity to 0. </p>