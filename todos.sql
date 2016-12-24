CREATE TABLE todos (
  id INT(3) unsigned auto_increment PRIMARY KEY,
  task VARCHAR(150),
  date DATETIME DEFAULT CURRENT_TIMESTAMP
  );