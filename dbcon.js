var mysql = require('mysql');

var con = mysql.createConnection({
  host: "localhost",
  user: "admin",
  password: "admin"
  database:'hotel2'
});

con.connect(function(err) {
  if (err) throw err;
  console.log("Connected!");
  con.query("CREATE DATABASE mydb", function (err, result) {
    if (err) throw err;
    console.log("Database created");
  });
});

app.get('/',function(res, resp){
	//about mysql
	connection.query("SELECT * FROM     ")
})
app.listen(1337)
