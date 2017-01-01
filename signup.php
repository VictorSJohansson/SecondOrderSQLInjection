$dir = 'sqlite:/[YOUR-PATH]/combadd.sqlite';
$dbh  = new PDO($dir) or die("cannot open the database");
$query =  "SELECT * FROM combo_calcs WHERE options='easy'";