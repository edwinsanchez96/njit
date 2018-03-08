<?php

	$username = 'es269';
	$password = '40CVKznX';
	$hostname = 'sql.njit.edu';

	$dsn = "mysql:host=$hostname;dbname=$username";

	try {
		$db = new PDO($dsn, $username, $password);
		echo 'Connected successfully<br>';
	} catch (PDOException $error) {
		$error_msg = $error->getMessage();
		echo 'Not Connected to Database<br>';
	}

	$query = 'SELECT id, email, fname, lname, phone, birthday, gender, password FROM accounts WHERE id < :id';
	$statement = $db->prepare($query);
	$statement->bindValue(':id',6);
	$statement->execute();
	$accounts = $statement->fetchAll();
	$statement->closeCursor();
	print_r($accounts);

?>
<br>
<br>
<?php foreach ($accounts as $account) { ?>
<tr>
	<td><?php echo $account['id']; ?></td>
	<td><?php echo $account['email']; ?></td>
	<td><?php echo $account['fname']; ?></td>
	<td><?php echo $account['lname']; ?></td>
	<td><?php echo $account['phone']; ?></td>
	<td><?php echo $account['birthday']; ?></td>
	<td><?php echo $account['gender']; ?></td>
	<td><?php echo $account['password']; ?></td>
</tr><br>
<?php } ?>