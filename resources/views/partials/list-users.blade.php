@foreach($users as $user)
	<tr>
		<td>{{ $user->id }}</td>
		<td>{{ $user->name }}</td>
		<td>{{ $user->email }}</td>
		<td>{{ $user->gender }}</td>
		<td>{{ $user->biography }}</td>	
		<td>
			<form action="{{ url('delete/'. $user->id) }}">
			<button type="submit" title="Eliminar">
				<i class="glyphicon glyphicon-trash"></i>
			</button>
			</form>
		</td>		
	</tr>
@endforeach