CREATE TABLE student(
	student_id INTEGER NOT NULL,
	name VARCHAR(10) NOT NULL,
	year int NOT NULL DEFAULT 1,
	dept_no INTEGER NOT NULL,
	major VARCHAR(20),
	PRIMARY KEY(student_id)
)
DEFAULT CHARSET=utf8
ENGINE=InnoDB;

CREATE TABLE department(
	dept_no INTEGER NOT NULL,
	dept_name VARCHAR(20) NOT NULL,
	office VARCHAR(20) NOT NULL,
	office_tel VARCHAR(13),
	UNIQUE(dept_name),
	PRIMARY KEY(dept_no)
)

ALTER TABLE student
ALTER COLUMN major VARCHAR(30);

ALTER TABLE student
ADD COLUMN gender VARCHAR(10);

ALTER TABLE student
MODIFY COLUMN name VARCHAR(50); // if I give name datatype of VARCHAR(10), it throws an error that some of the students name are longer than VARCHAR(10). So I modified the datatype to VARCHAR(50).

INSERT INTO student(student_id, name, year, dept_no, major) values (20070002, 'Jane Smith', 3, 4, 'Business Administration')
INSERT INTO student(student_id, name, year, dept_no, major) values (20060001, 'Ashley Jackson', 4, 4, 'Business Administration');
INSERT INTO student(student_id, name, year, dept_no, major) values (20030001, 'Liam Johnson', 4, 2, 'Electrical Engineering');
INSERT INTO student(student_id, name, year, dept_no, major) values (20040003, 'Jacob Lee', 3, 2, 'Electrical Engineering');
INSERT INTO student(student_id, name, year, dept_no, major) values (20060002, 'Noah Kim', 3, 1, 'Computer Science');
INSERT INTO student(student_id, name, year, dept_no, major) values (20100002, 'Ava Lim', 3, 4, 'Business Administration');
INSERT INTO student(student_id, name, year, dept_no, major) values (20110001, 'Emma Watson', 2, 1, 'Computer Science');
INSERT INTO student(student_id, name, year, dept_no, major) values (20080003, 'Lisa Maria', 4, 3, 'Law');
INSERT INTO student(student_id, name, year, dept_no, major) values (20040002, 'Jacob William', 4, 5, 'Law');
INSERT INTO student(student_id, name, year, dept_no, major) values (20070001, 'Emily Rose', 4, 4, 'Business Administration');
INSERT INTO student(student_id, name, year, dept_no, major) values (20100001, 'Ethan Hunt', 3, 4, 'Business Administration');
INSERT INTO student(student_id, name, year, dept_no, major) values (20110002, 'Jason Mraz' 2, 1, 'Electrical Engineering');
INSERT INTO student(student_id, name, year, dept_no, major) values (20030002, 'John Smith', 5, 1, 'Computer Science');
INSERT INTO student(student_id, name, year, dept_no, major) values (20070003, 'Sophia Park', 4, 3, 'Law');
INSERT INTO student(student_id, name, year, dept_no, major) values (20070007, 'James Michael', 2, 4, 'Business Administration');
INSERT INTO student(student_id, name, year, dept_no, major) values (20100003, 'James Bond', 3, 1, 'Computer Science');
INSERT INTO student(student_id, name, year, dept_no, major) values (20070005, 'Olivia Madison', 2, 5, 'English Language and Literature');


ALTER TABLE department
MODIFY COLUMN dept_name VARCHAR(50);
ALTER TABLE department
MODIFY COLUMN major VARCHAR(40); 

INSERT INTO department(dept_no, dept_name, office, office_tel) values (1, 'Computer Science', 'Science Building 101', '02-3290-0123');
INSERT INTO department(dept_no, dept_name, office, office_tel) values (2, 'Electrical Engineering', 'Engineering Building 401', '02-3290-2345');
INSERT INTO department(dept_no, dept_name, office, office_tel) values (3, 'Law', 'Law Building 201', '02-3290-7896');
INSERT INTO department(dept_no, dept_name, office, office_tel) values (4, 'Business Administration', 'Business Building 104', '02-3290-1112');
INSERT INTO department(dept_no, dept_name, office, office_tel) values (5, 'English Language and Literature', 'Language Building 303', '02-3290-4412');

ALTER TABLE department RENAME `Electrical Engineering` `Electrical and Electronics Engineering`;


