<?php 
	require "db.php";//password_verify($data['password'], $users->password)

	$data = $_POST;
	if (isset($data['dologin'])) {
		$errors =array();
		$users = R::findOne('users', 'login = ?',array($data['login']));
		if ($users) {
			if ($users = R::findOne('users', 'login = ?',array($data['login']))) {
				$_SESSION['logged_user'] = $users;
				echo '<div style = "color:green; font-size:30px;"> Вы успешно вошли!<br>
				Можете перейти на <a href="index.php">главную</a></div>';
			}else{
				$errors[] = "Неверно введен пароль!";
			}

		}else{
			$errors[] = "Пользователь с таким логином не найден!";
		}

		if ( !empty($errors)) {
			echo '<div style = "color:red;"> '.array_shift($errors).'</div><hr>';
		}


	}
?>

	<form action="login.php" method="POST">
	<p>
 		<p><b><em>Ваш логин</em></b></p>
 		<input type="text" name="login" value="<?php echo$data['login'];?>">
 		</p>

	 	<p>
	 		<p><b><em>Ваш пароль</em></b></p>
	 		<input type="password" name="password" value="<?php echo$data['password'];?>">
	 	</p>
 		<button type="submit" name="dologin">Войти</button>
 	</p>


	</form>


