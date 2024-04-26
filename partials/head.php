<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="css/app.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/se-2.2.13/jszip-2.5.0/dt-1.10.23/b-1.6.5/b-colvis-1.6.5/b-flash-1.6.5/b-html5-1.6.5/b-print-1.6.5/fc-3.3.2/fh-3.1.7/r-2.2.7/sc-2.0.3/datatables.min.css"/>
<style>
	.loader {
		position: fixed;
		height: 100vh;
		width: 100vw;
		background: rgba(255, 255, 255, 0.5);
		display: none;
		z-index: 9999;
	}
	.loader.active {
		display: block;
	}
	.loader > div {
		display: flex;
	    align-items: center;
	    justify-content: center;
	    position: absolute;
	    top: 40%;
	    left: 50%;
	    transform: translateX(-50%);
	    background: #fff;
	    box-shadow: 0 0 10px 3px #cccccc;
	    border-radius: 20px;
	    padding: 10px 20px;
	}
	.interactable {
		cursor: pointer;
		color: #dddfeb!important;
	}
	.interactable:hover {
		color: #666666 !important;
	}
	.enable-animation {
		-moz-transition: all 0.6s ease 0s;
		-webkit-transition: all 0.6s ease 0s;
		transition: all 0.6s ease 0s;
	}
	.member-options i {
		display: inline-block;
		margin-left: 15px;
	}
	.toggle-control {
		display: none;
	}
	input.toggle-control + label {
		position: relative;
		display: block;
		width: 40px;
		height: 20px;
		background: #ddd;
		border-radius: 60px;

		cursor: pointer;
		outline: none;
		user-select: none;
	}

	input.toggle-control + label::before, input.toggle-control + label::after {
		display: block;
		position: absolute;
		top: 1px;
		left: 1px;
		bottom: 1px;
		right: 1px;

		content: '';
		transition: all 0.4s;
	}		

	input.toggle-control + label::before {
		background: #f1f1f1;
		border-radius: 60px;
	}

	input.toggle-control + label::after {
		width: 18px;
		background: #fff;
		border-radius: 100%;
		box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
	}

	input.toggle-control:checked + label::before {
		background: #8ce196;
	}

	input.toggle-control:checked + label::after {
		margin-left: 20px;
	}

	.ui.pagination.menu, .dataTables_filter {
		float: right;
	}

	.ui.grid {
		margin: 0 !important;
	}

	.notification {
		position: fixed;
		top: 30px;
		left: 50%;
		transform: translateX(-50%);
		z-index: 999999;
		padding: 5px 10px;
	}

	.enable-animation {
		-moz-transition: all 0.6s ease 0s;
		-webkit-transition: all 0.6s ease 0s;
		transition: all 0.6s ease 0s;
	}

	.fade-out {
		opacity: 0;
	}

	@media print {
		.sidebar, .navbar {
			display: none;
		}
	}
</style>