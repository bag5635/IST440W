var mysql = require('mysql');

// Port: 3306

var con = mysql.createConnection({
  host: "blue-moon-whippets.cgcqol9kl31f.us-east-1.rds.amazonaws.com",
  port: "3306",
  user: "root",
  password: "watashi65",
  database: "BlueMoonDB"
});

con.connect(function(err) {
  if (err) throw err;
  console.log("Connected!");
  var sql = "INSERT INTO admin (FirstName, LastName, Position, password) VALUES ?";
  var values = [
    ['John', 'Doe', 'Owner', 'cat'],
    ['Peter', 'Wheater', 'Co-Owner', 'panda']
  ];
  con.query(sql, [values], function (err, result) {
    if (err) throw err;
    console.log("Number of records inserted: " + result.affectedRows);
  });
});