<?php 
	require "db.php";

	$data = $_POST;
	if (isset($data['dosignup'])) {
		$errors = array();
		if (trim($data['login']) == "") {
			$errors[] = 'Введите логин!';
		}

		if (trim($data['email']) == "") {
			$errors[] = 'Введите email!';
		}
		if ($data['password'] == "") {
			$errors[] = 'Введите пароль!';
		}
		if (R::count('users', "login = ?", array($data['login'])) > 0) {
			$errors[] = 'Пользователь с таким логином уже сушествует!';
		}
		if (R::count('users', "email = ?", array($data['email'])) > 0) {
			$errors[] = 'Пользователь с таким email уже сушествует!';
		}
		if (empty($errors)) {
			$users = R::dispense('users');
			$users->login = $data['login'];
			$users->email = $data['email'];
			$users->password = $data['password']; //password_hash($data['password'], PASSWORD_DEFAULT);
			R::store($users);
			echo '<div style = "color:green; font-size:30px;"> Вы успешно зарегистрировались</div><p>Можете перейти на <a href="login.php">вход</a></p>';
		}else{
			echo '<div style = "color:red;"> '.array_shift($errors).'</div><hr style = "color:red;">';
		}

	}

 ?>

 <form action="/singup.php" method="POST">
 	<p>
 		<p><b><em>Ваш логин</em></b></p>
 		<input type="text" name="login" value="<?php echo@$data['login'];?>">
 	</p>

 	<p>
 		<p><b><em>Ваш Email</em></b></p>
 		<input type="email" name="email" value="<?php echo@$data['email'];?>">
 	</p>

 	<p>
 		<p><b><em>Ваш пароль</em></b></p>
 		<input type="password" name="password" value="<?php echo@$data['password'];?>">
 	</p>


 	<p>
 		<button type="submit" name="dosignup">Зарегистрироватся</button>
 	</p>


 </form>