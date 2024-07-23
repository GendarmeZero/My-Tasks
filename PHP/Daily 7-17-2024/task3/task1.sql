-- Task 1: Inner Join: Join employees and departments to find the department name of each employee.
SELECT e.employee_id, e.first_name, e.last_name, d.department_name
FROM employees e
INNER JOIN departments d ON e.department_id = d.department_id;

-- Task 2: Left Join: Join employees and projects to find all employees and the projects they are working on, if any.
SELECT e.employee_id, e.first_name, e.last_name, p.project_name
FROM employees e
LEFT JOIN projects p ON e.employee_id = p.client_id;

-- Task 3: Right Join: Join departments and employees to find all departments and the employees in each department, including departments with no employees.
SELECT d.department_id, d.department_name, e.employee_id, e.first_name, e.last_name
FROM departments d
RIGHT JOIN employees e ON d.department_id = e.department_id;

-- Task 4: Full Outer Join: Join employees and projects to list all employees and their projects, including employees without projects and projects without employees.
SELECT e.employee_id, e.first_name, e.last_name, p.project_name
FROM employees e
FULL OUTER JOIN projects p ON e.employee_id = p.client_id;

-- Task 5: Self Join: Join employees with itself to find the manager of each employee.
SELECT e1.employee_id, e1.first_name, e1.last_name, e2.employee_id AS manager_id, e2.first_name AS manager_first_name, e2.last_name AS manager_last_name
FROM employees e1
LEFT JOIN employees e2 ON e1.manager_id = e2.employee_id;

-- Task 6: Cross Join: Perform a cross join on employees and departments to get a Cartesian product of the two tables.
SELECT e.employee_id, e.first_name, e.last_name, d.department_id, d.department_name
FROM employees e
CROSS JOIN departments d;

-- Task 7: Join with Alias: Join employees and departments using aliases to simplify query readability.
SELECT e.employee_id, e.first_name, e.last_name, d.department_name
FROM employees AS e
INNER JOIN departments AS d ON e.department_id = d.department_id;

-- Task 8: Join with Aggregate Function: Join employees and salaries to find the average salary of each department.
SELECT d.department_name, AVG(s.amount) AS average_salary
FROM employees e
INNER JOIN departments d ON e.department_id = d.department_id
INNER JOIN salaries s ON e.employee_id = s.employee_id
GROUP BY d.department_name;

-- Task 9: Join with Conditional Filtering: Join employees and projects to find employees working on projects started after a specific date.
SELECT e.employee_id, e.first_name, e.last_name, p.project_name
FROM employees e
INNER JOIN projects p ON e.employee_id = p.client_id
WHERE p.start_date > '2023-01-01';

-- Task 10: Join with WHERE Clause: Join employees and departments to find employees in a specific department.
SELECT e.employee_id, e.first_name, e.last_name, d.department_name
FROM employees e
INNER JOIN departments d ON e.department_id = d.department_id
WHERE d.department_name = 'Engineering';

-- Task 11: Join with ON Clause: Join orders and customers on customer ID to get order details along with customer information.
SELECT o.order_id, o.order_date, c.customer_name
FROM orders o
INNER JOIN customers c ON o.customer_id = c.customer_id;

-- Task 12: Join with USING Clause: Join employees and departments using the department ID.
SELECT e.employee_id, e.first_name, e.last_name, d.department_name
FROM employees e
INNER JOIN departments d USING(department_id);

-- Task 13: Join with Group By: Join orders and customers to find the total number of orders placed by each customer.
SELECT c.customer_name, COUNT(o.order_id) AS total_orders
FROM customers c
INNER JOIN orders o ON c.customer_id = o.customer_id
GROUP BY c.customer_name;

-- Task 14: Join with HAVING Clause: Join orders and customers to find customers who have placed more than 5 orders.
SELECT c.customer_name, COUNT(o.order_id) AS total_orders
FROM customers c
INNER JOIN orders o ON c.customer_id = o.customer_id
GROUP BY c.customer_name
HAVING COUNT(o.order_id) > 5;

-- Task 15: Join with CASE Statement: Join employees and departments and use a CASE statement to classify employees based on department.
SELECT e.employee_id, e.first_name, e.last_name, d.department_name,
CASE 
    WHEN d.department_name = 'HR' THEN 'Human Resources'
    WHEN d.department_name = 'Engineering' THEN 'Engineering Team'
    WHEN d.department_name = 'Sales' THEN 'Sales Team'
    WHEN d.department_name = 'Marketing' THEN 'Marketing Team'
    ELSE 'Other'
END AS department_classification
FROM employees e
INNER JOIN departments d ON e.department_id = d.department_id;

-- Task 16: Join with ORDER BY: Join employees and departments and order the result by department name and employee name.
SELECT e.employee_id, e.first_name, e.last_name, d.department_name
FROM employees e
INNER JOIN departments d ON e.department_id = d.department_id
ORDER BY d.department_name, e.first_name, e.last_name;

-- Task 17: Inner Join: Join employees, departments, and projects to find the project names for employees in each department.
SELECT e.employee_id, e.first_name, e.last_name, d.department_name, p.project_name
FROM employees e
INNER JOIN departments d ON e.department_id = d.department_id
INNER JOIN projects p ON e.employee_id = p.client_id;

-- Task 18: Left Join: Join employees, projects, and clients to list all employees and their projects, including projects without clients.
SELECT e.employee_id, e.first_name, e.last_name, p.project_name, c.client_name
FROM employees e
LEFT JOIN projects p ON e.employee_id = p.client_id
LEFT JOIN clients c ON p.client_id = c.client_id;

-- Task 19: Right Join: Join departments, employees, and salaries to list all departments, their employees, and their salaries, including departments with no employees.
SELECT d.department_name, e.employee_id, e.first_name, e.last_name, s.amount AS salary
FROM departments d
RIGHT JOIN employees e ON d.department_id = e.department_id
RIGHT JOIN salaries s ON e.employee_id = s.employee_id;

-- Task 20: Full Outer Join: Join employees, projects, and departments to list all employees, projects, and departments, including those without matches in the other tables.
SELECT e.employee_id, e.first_name, e.last_name, p.project_name, d.department_name
FROM employees e
FULL OUTER JOIN projects p ON e.employee_id = p.client_id
FULL OUTER JOIN departments d ON e.department_id = d.department_id;

-- Task 21: Self Join: Join employees with itself and departments to find employees and their managers within the same department.
SELECT e1.employee_id, e1.first_name, e1.last_name, e2.employee_id AS manager_id, e2.first_name AS manager_first_name, e2.last_name AS manager_last_name, d.department_name
FROM employees e1
LEFT JOIN employees e2 ON e1.manager_id = e2.employee_id
INNER JOIN departments d ON e1.department_id = d.department_id;

-- Task 22: Cross Join: Perform a cross join on employees, departments, and projects to get a Cartesian product of the three tables.
SELECT e.employee_id, e.first_name, e.last_name, d.department_name, p.project_name
FROM employees e
CROSS JOIN departments d
CROSS JOIN projects p;

-- Task 23: Join with Alias: Join employees, departments, and projects using aliases for readability.
SELECT e.employee_id, e.first_name, e.last_name, d.department_name, p.project_name
FROM employees AS e
INNER JOIN departments AS d ON e.department_id = d.department_id
INNER JOIN projects AS p ON e.employee_id = p.client_id;

-- Task 24: Join with Aggregate Function: Join employees, salaries, and departments to find the total salary expenditure for each department.
SELECT d.department_name, SUM(s.amount) AS total_salary_expenditure
FROM employees e
INNER JOIN departments d ON e.department_id = d.department_id
INNER JOIN salaries s ON e.employee_id = s.employee_id
GROUP BY d.department_name;

-- Task 25: Join with Conditional Filtering: Join employees, projects, and clients to find employees working on projects with specific clients.
SELECT e.employee_id, e.first_name, e.last_name, p.project_name, c.client_name
FROM employees e
INNER JOIN projects p ON e.employee_id = p.client_id
INNER JOIN clients c ON p.client_id = c.client_id
WHERE c.client_name = 'Client B';

-- Task 26: Join with WHERE Clause: Join orders, customers, and products to find orders for a specific product by customer.
SELECT o.order_id, o.order_date, c.customer_name, p.product_name
FROM orders o
INNER JOIN customers c ON o.customer_id = c.customer_id
INNER JOIN order_items oi ON o.order_id = oi.order_id
INNER JOIN products p ON oi.product_id = p.product_id
WHERE p.product_name = 'Product X';

-- Task 27: Join with ON Clause: Join employees, departments, and locations on appropriate keys to find the office location of each employee.
SELECT e.employee_id, e.first_name, e.last_name, d.department_name, l.location_name
FROM employees e
INNER JOIN departments d ON e.department_id = d.department_id
INNER JOIN locations l ON d.department_id = l.location_id;

-- Task 28: Join with Group By: Join orders, customers, and order_items to find the total quantity of items ordered by each customer.
SELECT c.customer_name, SUM(oi.quantity) AS total_quantity
FROM customers c
INNER JOIN orders o ON c.customer_id = o.customer_id
INNER JOIN order_items oi ON o.order_id = oi.order_id
GROUP BY c.customer_name;

-- Task 29: Join with HAVING Clause: Join orders, customers, and order_items to find customers who have ordered more than a specified number of items.
SELECT c.customer_name, SUM(oi.quantity) AS total_quantity
FROM customers c
INNER JOIN orders o ON c.customer_id = o.customer_id
INNER JOIN order_items oi ON o.order_id = oi.order_id
GROUP BY c.customer_name
HAVING SUM(oi.quantity) > 10;

-- Task 30: Join with CASE Statement: Join employees, projects, and departments to classify employees based on project participation.
SELECT e.employee_id, e.first_name, e.last_name, d.department_name,
CASE 
    WHEN p.project_name IS NOT NULL THEN 'Active on Project'
    ELSE 'Not Assigned to Project'
END AS project_status
FROM employees e
LEFT JOIN projects p ON e.employee_id = p.client_id
INNER JOIN departments d ON e.department_id = d.department_id;

-- Task 31: Join with DATE Function: Join employees, projects, and departments to find employees assigned to projects starting after a specific date.
SELECT e.employee_id, e.first_name, e.last_name, d.department_name, p.project_name
FROM employees e
INNER JOIN projects p ON e.employee_id = p.client_id
INNER JOIN departments d ON e.department_id = d.department_id
WHERE p.start_date > '2023-01-01';

-- Task 32: Join with ORDER BY: Join employees, departments, and projects and order the result by department name, project name, and employee name.
SELECT e.employee_id, e.first_name, e.last_name, d.department_name, p.project_name
FROM employees e
INNER JOIN departments d ON e.department_id = d.department_id
INNER JOIN projects p ON e.employee_id = p.client_id
ORDER BY d.department_name, p.project_name, e.first_name, e.last_name;
