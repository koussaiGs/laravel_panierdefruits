<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css">
	<meta charset="UTF-8">
	<title>Fruits</title>
</head>
<body>
	<div class="ui grid">
		<div class="six wide colum">
		</div>

		<h1>Table des Fruits</h1>

	</div>
	<div class="ui grid">
		<div class="four wide colum"></div>
		<table class="ui striped table">
			<thead>
				<tr>
					<th>Id</th>
					<th>Name</th>
					<th>Description</th>
					<th>Prix</th>
					<th>Stock</th>
					<th>Origine</th>
					<th>Option</th>
				</tr>
			</thead>
			<tbody>
				@foreach($fruits as $key)
				<tr>
					<td><a href="/show/{{$key->id}}">{{$key->id}}</a></td>
					<td>{{$key->name}}</td>
					<td>{{$key->description}}</td>
					<td>{{$key->prix /100}} €</td>
					<td>{{$key->stock}}</td>
					<td>{{$key->origine}}</td>
					<td>	
						<form action="/{{$key->id}}" method="post">
							{{csrf_field()}} 
							<button class='ui red button' type="submit">Supprimer</button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<div class="ui container">
			<a href="/addfruit">
				<input type="submit" value="Ajouter" class="ui orange button">
			</a>
		</div>
	</div>
</div>
</body>
</html>