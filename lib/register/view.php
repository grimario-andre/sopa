<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>My Login Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/my-login.css">
</head>

<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<br>	
		<div class="card fat">
				<div class="card-body">
					<h4 class="card-title">Cadastre-se</h4>
					<form method="" class="my-login-validation" novalidate="">
						<div class="form-group">
							<label for="email">Nome</label>
							<input id="nome" type="text" maxlength="25" class="form-control" name="nome" placeholder="digite seu nome completo" value="" required autofocus>
							<div class="invalid-feedback">
								Name is invalid
							</div>
						</div>
						<div class="form-group">
							<label for="email">Apelido</label>
							<input id="apelido" type="text" maxlength="25" class="form-control" name="apelido" placeholder="insira seu nickname" value="" required autofocus>
							<div class="invalid-feedback">
								Apelido is invalid
							</div>
						</div>
						<div class="form-group">
							<label for="email">E-mail</label>
							<input id="email" type="email" class="form-control" name="email" placeholder="seu.email@provedor.com.br" value="" required autofocus>
							<div class="invalid-feedback">
								Email is invalid
							</div>
						</div>

						<div class="form-group">
							<label for="senha">Senha
								<input id="senha" type="password" class="form-control" name="senha" placeholder="*********" required data-eye>
							</label>
							<div class="invalid-feedback">
								Senha is required
							</div>
						</div>

						<div class="form-group m-0">
							<button type="submit" class="btn btn-primary btn-block">
								Cadastrar
							</button>
						</div>
					</form>
				</div>
			</div>
			<div class="footer">
			</div>
		</div>
		</div>
		</div>
	</section>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="js/my-login.js"></script>
</body>

</html>