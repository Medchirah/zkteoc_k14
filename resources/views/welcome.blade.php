<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Gestion de pointage</title>
	<style>
		body {
			background-color: #f5f5f5;
			font-family: Arial, sans-serif;
		}

		.container {
			max-width: 960px;
			margin: 0 auto;
			padding: 20px;
		}

		h1 {
			text-align: center;
			font-size: 48px;
			margin-bottom: 30px;
		}

		.btn {
			display: inline-block;
			padding: 10px 20px;
			background-color: #007bff;
			color: #fff;
			text-decoration: none;
			border-radius: 5px;
			transition: background-color 0.2s ease;
		}

		.btn:hover {
			background-color: #0062cc;
		}

		.features {
			display: flex;
			flex-wrap: wrap;
			justify-content: space-between;
			margin-top: 50px;
		}

		.feature {
			width: calc(33.33% - 20px);
			padding: 20px;
			background-color: #fff;
			border-radius: 5px;
			box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
			text-align: center;
			margin-bottom: 30px;
		}

		.feature h2 {
			font-size: 24px;
			margin-bottom: 20px;
		}

		.feature p {
			font-size: 18px;
			line-height: 1.5;
			margin-bottom: 30px;
		}

		.feature img {
			max-width: 100%;
			margin-bottom: 20px;
		}

		@media (max-width: 768px) {
			.feature {
				width: 100%;
			}
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Gestion de pointage</h1>
		<div class="features">
			<div class="feature">
				<img src="https://via.placeholder.com/200x200" alt="Feature 1">
				<h2>Pointage facile</h2>
				<p>Enregistrez rapidement les arrivées et départs des employés grâce à notre interface intuitive.</p>
			</div>
			<div class="feature">
				<img src="https://via.placeholder.com/200x200" alt="Feature 2">
				<h2>Rapports complets</h2>
				<p>Obtenez des rapports détaillés sur les horaires de travail des employés, les heures supplémentaires, etc.</p>
			</div>
			<div class="feature">
				<img src="https://via.placeholder.com/200x200" alt="Feature 3">
				<h2>Gestion des congés</h2>
				<p>Gérez facilement les demandes de congés et suivez les jours de congé restants pour chaque employé.</p>
			</div>
		</div>
		<div class="text-center">
			<a href="#" class="btn">Inscription gratuite</a>
		</div>
	</div>
</body>
</html>
