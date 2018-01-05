<?php 
	include_once 'connect.php';
	$str = $_POST['str'];

	$stmt = $con -> prepare("select * from users where UserName like '%". $str ."%'");

	$stmt -> execute();

	while ($row = $stmt -> fetch()) {
 ?>
				<tr>
				  <td class="table-active"><?php echo $row[0]; ?></td>
				  <td class="table-primary"><?php echo $row[1]; ?></td>
				  <td class="table-secondary"><?php echo $row[2]; ?></td>
				  <td class="table-success"><?php echo $row[3]; ?></td>
				  <td class="table-danger"><?php echo $row[4]; ?></td>
				  <td class="table-warning"><?php echo $row[5]; ?></td>
				  <td class="table-info"><?php echo $row[6]; ?></td>
				</tr>

<?php } ?> 