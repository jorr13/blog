<center><a href="{{ route('crear') }}"><h1>CREAR</h1></a></center>
				<table>
					<thead>
						<tr>
							<th>Editar</th>
							<th>Eliminar</th>
							<th>titulo</th>
							<th>contenido</th>
							<th>timestamp</th>
						</tr>
					</thead>
					<tbody>
						@foreach($posts as $post)
							<td><a href="#">EDITAR</a></td>
							<td><a href="#"> ELIMINAR</a> </td>
								<td>{{ $post->titulo }}</td>
								<td>{{ $post->contenido }}</td>
								<td>{{ $post->timestamp }}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
