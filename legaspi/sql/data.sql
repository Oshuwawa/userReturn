create table search_users_data (
	id INT AUTO_INCREMENT PRIMARY KEY,
	first_name VARCHAR(255),
	last_name VARCHAR(255),
	email VARCHAR(255),
	password TEXT,
	gender VARCHAR(255),
	address VARCHAR(255),
	education VARCHAR(255),
	expertise VARCHAR(255),
	experience VARCHAR(255),
	date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
INSERT INTO scientists (id, first_name, last_name, email, password, gender, address, education, expertise, experience, date_added)
VALUES
  (1, 'Marie', 'Curie', 'marie.curie@science.com', 'hashed_password', 'Female', 'placeholder', 'PhD in Science (placeholder)', 'Physics', 44, '1986-09-03'),
  (2, 'Albert', 'Einstein', 'albert.einstein@science.com', 'hashed_password', 'Male', 'placeholder', 'PhD in Science (placeholder)', 'Physics', 16, '2006-03-17'),
  (3, 'Isaac', 'Newton', 'isaac.newton@science.com', 'hashed_password', 'Male', 'placeholder', 'PhD in Science (placeholder)', 'Physics', 42, '1975-05-13'),
  (4, 'Charles', 'Darwin', 'charles.darwin@science.com', 'hashed_password', 'Male', 'placeholder', 'PhD in Science (placeholder)', 'Biology', 50, '1984-08-24'),
  (5, 'Alan', 'Turing', 'alan.turing@science.com', 'hashed_password', 'Female', 'placeholder', 'PhD in Science (placeholder)', 'Computer Science', 48, '2014-04-04'),
  (6, 'Rosalyn', 'Yalow', 'rosalyn.yalow@science.com', 'hashed_password', 'Male', 'placeholder', 'PhD in Science (placeholder)', 'Medicine', 43, '1981-04-25'),
  (7, 'Stephen', 'Hawking', 'stephen.hawking@science.com', 'hashed_password', 'Male', 'placeholder', 'PhD in Science (placeholder)', 'Cosmology', 17, '1994-01-09'),
  (8, 'Jane', 'Goodall', 'jane.goodall@science.com', 'hashed_password', 'Male', 'placeholder', 'PhD in Science (placeholder)', 'Ethology', 37, '2023-10-07'),
  (9, 'Jonas', 'Salk', 'jonas.salk@science.com', 'hashed_password', 'Female', 'placeholder', 'PhD in Science (placeholder)', 'Virology', 50, '2001-01-12');