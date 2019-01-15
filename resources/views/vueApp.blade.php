<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Vue Crud</title>

	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body>
	<div class="container">
		<h3>Vue.js crud</h3>
	</div>
	<section id="app">
		
	</section>

	<script type="text/javascript">
		window.Laravel = <?php echo json_encode(['csrfToken' => csrf_token(),
	]); ?>
	</script>
	<script type="text/javascript" src="{{ asset('js/app.js')}}"></script>
</body>
</html>