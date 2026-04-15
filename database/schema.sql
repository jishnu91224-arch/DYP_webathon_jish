CREATE DATABASE marriage_bureau;

USE marriage_bureau;

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  email VARCHAR(100),
  password VARCHAR(255),
  age INT,
  gender VARCHAR(10),
  city VARCHAR(50)
);

INSERT INTO users (name, email, password, age, gender, city)
VALUES ('Test User', 'test@gmail.com', '1234', 25, 'Male', 'Pune');
