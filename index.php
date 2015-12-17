<html>
<meta charset="utf-8">
<head>
	<title>ANA SAYFA</title>
	<script type="text/javascript">
		function loginMethod(){
		
			getElementById("loginName").innerHtml(document.write("HALİL BARIM"));

		
		}

	</script>

</head>
<body>

<div id="contanier">
	<div id="upperContent">
		<tr>
            <td><label>Hoşgeldiniz...</label></td><td><div id="loginName"></div></td>

		</tr>
	</div>
	<div id="middleContent">
			<form id="loginForm" name="login" method="post"> 
				<table>
					<tr>
						<td><label>Kullanıcı Adı:</label></td><td><input type="text" id="userName"></td>
					</tr>
					<tr>
						<td><label>Şifre:</label></td><td><input type="text" id="userPass"></td>

					</tr>
					<tr>
						<td></td><td><input type="button" id="userSentButton" value="Gönder" onClick="loginMethod();"></td>

					</tr>
					<tr>
						<td><a href="register.php">Kayıt Ol</a></td><td><a href="remember.php">Şifremi Unuttum</a></td>

					</tr>
				</table>


			</form>		

<a href="messageSent.php">yazı gonder</a>


	</div>






</div>



</body>
</html>







