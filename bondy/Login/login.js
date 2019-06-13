var mysql = require('mysql');
var conn = mysql.createConnection({
host : 'localhost',
user : 'root',
password :'' ,
database : 'bondy'

});
 conn.connect(function(err){
	 // nếu có lỗi
	 if(err) throw err.stack;
	 // thành công
	 console.log('xong nhé');
 });
 
 var username = get('username');
 var password = get('password');
 