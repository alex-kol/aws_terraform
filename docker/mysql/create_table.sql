CREATE TABLE users (
	id INT AUTO_INCREMENT PRIMARY KEY,
    	username VARCHAR(20),
    	email VARCHAR(40),
	password VARCHAR(50),
   	role VARCHAR(50),
    	created DATE,
    	updated DATE);

