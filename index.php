<?php

$query = require 'bootstrap.php';

// He rips out the Task class but I'm going to leave it here for now.
 require 'Task.php';

$people = $query->selectAll('personnel');

require 'index.view.php';

