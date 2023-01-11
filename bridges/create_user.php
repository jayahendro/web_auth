<?php
require("connection.php");
require("crud.php");

$crud = new Crud($connection);

$results = $crud->select_where("users", );