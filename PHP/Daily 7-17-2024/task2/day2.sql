////Task 1
-- Objective: Retrieve data from a table.
-- Exercise: Write a query to select all columns from a table named employees.
SELECT * FROM employees;

////Task 2
-- Objective: Retrieve specific columns.
-- Exercise: Write a query to select the name and salary columns from the employees table.
SELECT name, salary FROM employees;

////Task 3
-- Objective: Filter results using the WHERE clause.
-- Exercise: Write a query to select employees with a salary greater than 50,000.
SELECT * FROM employees WHERE salary > 50000;

////Task 4
-- Objective: Use the LIKE operator for pattern matching.
-- Exercise: Write a query to select employees whose names start with 'J'.
SELECT * FROM employees WHERE name LIKE 'J%';

////Task 5
-- Objective: Use the IN operator to filter data.
-- Exercise: Write a query to select employees who belong to departments 1, 2, or 3.
SELECT * FROM employees WHERE department_id IN (1, 2, 3);

////Task 6
-- Objective: Sort query results.
-- Exercise: Write a query to select all employees and order them by their hire date in descending order.
SELECT * FROM employees ORDER BY hire_date DESC;

////Task 7
-- Objective: Count the number of rows.
-- Exercise: Write a query to count the number of employees.
SELECT COUNT(*) AS number_of_employees FROM employees;

////Task 8
-- Objective: Calculate the sum of a column.
-- Exercise: Write a query to calculate the total salary of all employees.
SELECT SUM(salary) AS total_salary FROM employees;

////Task 9
-- Objective: Calculate the average of a column.
-- Exercise: Write a query to find the average salary of employees.
SELECT AVG(salary) AS average_salary FROM employees;

////Task 10
-- Objective: Find the minimum and maximum values.
-- Exercise: Write queries to find the minimum and maximum salary of employees.
SELECT MIN(salary) AS minimum_salary FROM employees;
SELECT MAX(salary) AS maximum_salary FROM employees;

////Task 11
-- Objective: Differentiate between WHERE and HAVING.
-- Exercises:
-- Use WHERE to filter employees with a salary greater than 50,000.
SELECT * FROM employees WHERE salary > 50000;

-- Use HAVING to filter departments with an average salary greater than 50,000 after grouping.
SELECT department_id, AVG(salary) AS average_salary
FROM employees
GROUP BY department_id
HAVING AVG(salary) > 50000;

////Task 12
-- Objective: Understand and create one-to-one relationships.
-- Exercise: Write SQL queries to create tables employees and employee_details with a one-to-one relationship using a foreign key.
CREATE TABLE employees (
    employee_id INT PRIMARY KEY,
    name VARCHAR(100),
    salary DECIMAL(10, 2),
    hire_date DATE
);

CREATE TABLE employee_details (
    detail_id INT PRIMARY KEY,
    employee_id INT,
    address VARCHAR(255),
    phone VARCHAR(20),
    FOREIGN KEY (employee_id) REFERENCES employees(employee_id) UNIQUE
);

////Task 13
-- Objective: Understand and create one-to-many relationships.
-- Exercise: Write SQL queries to create tables departments and employees with a one-to-many relationship where one department has many employees.
CREATE TABLE departments (
    department_id INT PRIMARY KEY,
    department_name VARCHAR(100)
);

ALTER TABLE employees
ADD department_id INT,
ADD FOREIGN KEY (department_id) REFERENCES departments(department_id);

////Task 14
-- Objective: Understand and create many-to-many relationships.
-- Exercise: Write SQL queries to create tables students, courses, and student_courses to represent students enrolled in multiple courses and courses having multiple students.
CREATE TABLE students (
    student_id INT PRIMARY KEY,
    student_name VARCHAR(100)
);

CREATE TABLE courses (
    course_id INT PRIMARY KEY,
    course_name VARCHAR(100)
);

CREATE TABLE student_courses (
    student_id INT,
    course_id INT,
    PRIMARY KEY (student_id, course_id),
    FOREIGN KEY (student_id) REFERENCES students(student_id),
    FOREIGN KEY (course_id) REFERENCES courses(course_id)
);

////Task 15
-- Objective: Implement foreign keys to enforce referential integrity.
-- Exercise: Write SQL queries to add a foreign key to the employees table referencing the departments table.
ALTER TABLE employees
ADD department_id INT,
ADD FOREIGN KEY (department_id) REFERENCES departments(department_id);

////Task 16
-- Objective: Ensure certain columns cannot have NULL values.
-- Exercise: Write SQL queries to modify the employees table to ensure the name column cannot be NULL.
ALTER TABLE employees
MODIFY COLUMN name VARCHAR(100) NOT NULL;

////Task 17
-- Objective: Ensure all values in a column are unique.
-- Exercise: Write SQL queries to modify the employees table to ensure the email column has unique values.
ALTER TABLE employees
ADD email VARCHAR(100) UNIQUE;

////Task 18
-- Objective: Enforce specific rules for column values.
-- Exercise: Write SQL queries to add a CHECK constraint to the employees table to ensure the salary is greater than 0.
ALTER TABLE employees
ADD CONSTRAINT chk_salary CHECK (salary > 0);

////Task 19
-- Objective: Set default values for columns.
-- Exercise: Write SQL queries to modify the employees table to set a default value of 'Active' for the status column.
ALTER TABLE employees
ADD status VARCHAR(20) DEFAULT 'Active';

////Task 20
-- Objective: Apply all learned concepts in a complete database system.
-- Task: Write SQL queries to design and create a database for a company with the following requirements:
-- Tables: departments, employees, projects, employee_projects.
-- Relationships: One-to-many between departments and employees, many-to-many between employees and projects.
-- Constraints: Appropriate use of NOT NULL, UNIQUE, CHECK, DEFAULT, and foreign keys.
-- Queries: Write queries to demonstrate use of SELECT, WHERE, LIKE, IN, ORDER BY, aggregation functions, WHERE vs. HAVING.

-- Create departments table
CREATE TABLE departments (
    department_id INT PRIMARY KEY,
    department_name VARCHAR(100) NOT NULL
);

-- Create employees table
CREATE TABLE employees (
    employee_id INT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE,
    salary DECIMAL(10, 2) CHECK (salary > 0),
    hire_date DATE,
    status VARCHAR(20) DEFAULT 'Active',
    department_id INT,
    FOREIGN KEY (department_id) REFERENCES departments(department_id)
);

-- Create projects table
CREATE TABLE projects (
    project_id INT PRIMARY KEY,
    project_name VARCHAR(100) NOT NULL
);

-- Create employee_projects table
CREATE TABLE employee_projects (
    employee_id INT,
    project_id INT,
    PRIMARY KEY (employee_id, project_id),
    FOREIGN KEY (employee_id) REFERENCES employees(employee_id),
    FOREIGN KEY (project_id) REFERENCES projects(project_id)
);

-- Queries to demonstrate use of SELECT, WHERE, LIKE, IN, ORDER BY, aggregation functions, WHERE vs. HAVING

-- Select all employees
SELECT * FROM employees;

-- Select employees with salary greater than 50,000
SELECT * FROM employees WHERE salary > 50000;

-- Select employees whose names start with 'J'
SELECT * FROM employees WHERE name LIKE 'J%';

-- Select employees who belong to departments 1, 2, or 3
SELECT * FROM employees WHERE department_id IN (1, 2, 3);

-- Select all employees ordered by hire date in descending order
SELECT * FROM employees ORDER BY hire_date DESC;

-- Count number of employees
SELECT COUNT(*) AS number_of_employees FROM employees;

-- Calculate total salary of all employees
SELECT SUM(salary) AS total_salary FROM employees;

-- Find average salary of employees
SELECT AVG(salary) AS average_salary FROM employees;

-- Find minimum and maximum salary of employees
SELECT MIN(salary) AS minimum_salary FROM employees;
SELECT MAX(salary) AS maximum_salary FROM employees;

-- Use WHERE to filter employees with salary greater than 50,000
SELECT * FROM employees WHERE salary > 50000;

-- Use HAVING to filter departments with average salary greater than 50,000 after grouping
SELECT department_id, AVG(salary) AS average_salary
FROM employees
GROUP BY department_id
HAVING AVG(salary) > 50000;
