<html>
<body>
<table>
	<tr>
		<td>name</td>
		<td>price</td>
	</tr>
	@foreach($data as $item)
		<tr>
			<td>{{$item->name}}</td>
			<td>{{$item->price}}</td>

		</tr>
	@endforeach
</table>
</body>
</html>