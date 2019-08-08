<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>247 HRIS</title>

	<!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Override CSS -->
    <link rel="stylesheet" type="text/css" href="/css/styles.css">

</head>
<body>

	<!-- Main -->
	<div class="row">
		<div class="col-lg-2 sidebar">
			<div class="row">
				<div class="col-lg-12">
					<h1>LOGO</h1>
					<p>Some text</p>
				</div>
			</div>

			<!-- Navigation-->
			<div class="row navigation">
				<div class="col-lg-12">
					<ul>
						<li>
							<a style="font-size: 25px;" href="#employeeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Employee</a>
							<ul class="collapse" id="employeeSubmenu">
								<li>
									<a style="font-size: 20px;" href="/add_employee">- Add Employee</a>
								</li>
								<li>
									<a style="font-size: 20px;" href="/employee_list">- Employee List</a>
								</li>
							</ul>
						</li>
						<li><a style="font-size: 25px;" href="/attendance">Attendance</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-lg-10 main">
			<!-- Pages -->
			
				<div class="dashboard_banner">
					<h2>ADMIN DASHBOARD</h2>
				</div>
				@yield('content')
			
		</div>
	</div>

</body>
</html>