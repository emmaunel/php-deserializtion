stuff=$(php solver.php)
echo $stuff
curl -XPOST -d user=$stuff localhost:5000
