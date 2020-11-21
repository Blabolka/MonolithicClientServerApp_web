<table class="table">
    <thead>
        <th scope="col">ID</th>
        <th scope="col">First Name</th> 
        <th scope="col">Last Name</th>
        <th scope="col">Role</th>
    </thead>
    <tbody>
        <?php
            $db = require_once('../database/db.php');

            $query = "SELECT id, firstName, lastName, id_role FROM users";
            $result = mysqli_query($conn, $query);
            if($result){
                while($row = mysqli_fetch_array($result)){
                    echo "<tr>";
                    for($j=0 ; $j<4 ; $j++){
                        echo "<td>$row[$j]</td>";
                    }
                    echo "</tr>";
                    break;
                }
            }
        ?>
    </tbody> 
</table>