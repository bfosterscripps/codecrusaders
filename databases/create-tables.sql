CREATE TABLE college(
	id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);

CREATE TABLE degree(
	id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    type VARCHAR(255) NOT NULL
);

CREATE TABLE college_degree_cost(
	id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    college_id int REFERENCES college (id),
    degree_id int REFERENCES degree (id),
    cost INT NOT NULL
)

