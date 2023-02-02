<?php
include("connection.php");
error_reporting(0);

$query = "SELECT * FROM newform";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);


// echo $total;

if($total != 0)
{
    ?>

    <table border="3">
        <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Gender</th>
        <th>Email</th>
        <th>Phone No</th>
        <th>Address</th>
        </tr>
    

    <?php
    while ($result = mysqli_fetch_assoc($data)) 
    {
        echo "<tr>
                    <td>$result[first_name]</td>
                    <td>$result[last_name]</td>
                    <td>$result[gender]</td>
                    <td>$result[email]</td>
                    <td>$result[phone_no]</td>
                    <td>$result[address]</td>
              </tr>
              ";
    }
    // echo "Tabale Has Record";
}
else
{
    echo "No Records Found";
}

?>
</table>