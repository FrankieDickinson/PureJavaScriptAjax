CREATE TABLE UserStocks (
usid int auto_increment,
username varchar(30), 
 id int,
PRIMARY KEY (usid),
 
FOREIGN KEY (id) REFERENCES Stocks(id)
	 ON DELETE SET NULL
	 ON UPDATE CASCADE
);



