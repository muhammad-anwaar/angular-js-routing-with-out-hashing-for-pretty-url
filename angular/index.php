<!DOCTYPE html>
<html>
	<head>
		<title>Angular routing</title>
		<script src="js/angular-1.5.8/angular.min.js"></script>
		<script src="js/angular-1.5.8/angular-resource.min.js"></script>
		<script src="js/angular-1.5.8/angular-route.min.js"></script>
		<script src="js/angular-1.5.8/angular-touch.min.js"></script>
		<script src="js/angular-1.5.8/angular-animate.min.js"></script>
		<script type="text/javascript" src="app.js"></script>
		<style>
		ul {
		list-style-type: none;
		margin: 0;
		padding: 0;
		overflow: hidden;
		background-color: #333;
		}
		li {
		float: left;
		}
		li a {
		display: inline-block;
		color: white;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
		}
		li a:hover {
		background-color: #111;
		}
		</style>
		<base href="<?php echo "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>" />
		
	</head>
	<body ng-app="routApp">
	<div ng-include="'template/header.php'"></div>
    <div ng-view></div>
	</body>
</html>