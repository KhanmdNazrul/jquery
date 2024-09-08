<?php require_once("db_config.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php
// $serializedData = $_GET['mydata'];
// parse_str($serializedData,$datas);

$sql = $connect->query("SELECT * FROM students");
?>

<table border="1" style="border-collapse: collapse">
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>GENDER</th>
        <th>DATE OF BIRTH</th>
        <th>EMAIL</th>
        <th>PHONE</th>
        <th>ADDRESS</th>
        <th>ACTION</th>
    </tr>
    <?PHP 
    while($row = $sql->fetch_assoc()){?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['gender'] ?></td>
            <td><?php echo $row['dob'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['phone'] ?></td>
            <td><?php echo $row['address'] ?></td>
            <td><a href="#" class="stid" value="<?php echo $row['id'] ?>">Delete</a></td>
        </tr>
    <?php } ?>
</table>

<script>
    $(document).ready(function(){
        $(".stid").on('click',function(event){
            event.preventDefault();

            let sid= $(this).attr('value');
            //alert(sid);

            $.post("delete.php",{id:sid},function(data, status){
                alert(data + " From Database");
            })

        })

    })
</script>
</body>
</html>

