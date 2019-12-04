<!DOCTYPE html>
<html>
<head>
	<title><?php echo $message; ?></title>
</head>
<body>

<p><?php echo $message; ?></p>
<p>日本語</p>
<?php echo validation_errors(); ?>
<?php echo form_open(''); ?>
<label for="username">ユーザ名 : </label>
<input type="text" name="username" id="username"/>
<br>

<label for="email">メールアドレス : </label>
<input type="text" name="email" id="email"/>
<br>

<label for="age">年齢 : </label>
<input type="number" name="age" id="age">
<br>

<label for="locale">地域</label>
<input type="radio" name="locale" value="2" checked>東
<input type="radio" name="locale" value="1">西
<br>

<label for="gender">性別</label>
<input type="radio" name="gender" value="1" checked>男
<input type="radio" name="gender" value="2">女
<br>

<label for="media1">メディア１</label>
<input type="radio" name="media1" value="1" checked>WEB
<input type="radio" name="media1" value="2">TV
<br>

<label for="media2">メディア２</label>
<input type="radio" name="media2" value="1">WEB
<input type="radio" name="media2" value="2">TV
<br>
<button type="button" onclick="radioDeselection()">メディア２チェック解除</button>
<!-- https://qiita.com/KenAra/items/0743197b8c78b2b885df -->
<br>

<label for="opinion">ご意見</label><br>
<textarea name="opinion" id="opinion" cols="30" rows="10"></textarea>
<br>

<label for="image">画像</label>
<input type="file" name="image_path" id="image">
<br>


<div><input type="submit" value="送信" /></div>

</form>
</body>
<script>
	function radioDeselection() {
		for (const element of document.getElementsByName('media2')) {
			element.checked = false;
		}
	}
</script>
</html>
