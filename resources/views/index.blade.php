<html>
<head>
	<title>test</title>
	<style type="text/css">
		#sub {
			width: 500px;
			position: absolute;
			left: 50%;
			top: 50%;
			margin-left: -250px;
			margin-top: -200px;
			background-color: #eee;
		}

		#submit {
			box-shadow: none;
			border: 0px;
			margin: 0px;
			padding: 0px;
			width: 60px;
			line-height: 30px;
			height: 30px;
			color: white;
			background-color: #333;
			text-align: center;
			border-radius: 4px;
			font-size: 16px;
			font-family: consolas;
		}

		a {
			display: inline-block;
			vertical-align: top;
			width: 60px;
			line-height: 30px;
			height: 30px;
			color: white;
			text-decoration: none;
			text-align: center;
			background-color: #333;
			border-radius: 4px;
		}

		table {
			padding: 20px;
			width: 500px;
		}

		tr {
			margin-top: 10px;
		}

		.label {
			width: 200px;
			text-align: right;
			padding-right: 20px;
		}

		.input {
			width: 300px;
			text-align: left;
		}

		#subbtn {
			height: 30px;
			padding-top: 20px;
		}
	</style>
</head>
<body>
	<div id="sub">
		<form action="/add" method="get">
			<table>
				<tr>
					<td class='label' >name</td>
					<td class='input'><input type='text' name='name' /></td>
				</tr>
				<tr>
					<td class='label' >age</td>
					<td class='input'><input type='text' name='age' /></td>
				</tr>
				<tr>
					<td class='label' >email</td>
					<td class='input'><input type='text' name='email' /></td>
				</tr>
				<tr>
					<td></td>
					<td id='subbtn'>
						<button type='submit' id="submit">submit</button>
						<a href="/list">list</a>
					</td>
				</tr>
			</table>
		</form>
	</div>

</body>
</html>