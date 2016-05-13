<html>
<head>
	<title>List</title>
	<style type="text/css">
		td {
			width: 200px;
			margin-top: 10px;
		}

		th {
			text-align: left;
		}
	</style>
</head>
<body>
	@if(count($data) > 0)
		<table>
			<tr>
				<th>name</th>
				<th>age</th>
				<th>email</th>
			</tr>
			
				@foreach($data as  $key)
				<tr><td>{{$key -> name}}</td><td>{{$key -> age}}</td><td>{{$key -> email}}</td> <td><a href='del?id={{$key -> id}}'> del</a></td></tr>
				@endforeach



		</table>
	@elseif(count($data) == 0)
			<h3>No data</h3>
	@endif
	<a href="/" >add</a>
</body>
</html>