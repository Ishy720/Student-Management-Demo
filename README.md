## Overview:

Author: Mohammed Ali

This is a small DEMO project which showcases a simple MVC implementation of a PHP application, designed to designate and retrieve basic members with schools.

This project was built using XAMPP (htdocs) and its Apache and MySQL modules. 

[XAMPP Download Link](https://www.apachefriends.org/download.html)

## RUNNING THE PROJECT USING XAMPP

1. I used XAMPP to host this application locally. Put this directory "member-management-demo" under the "htdocs" folder in your XAMPP installation folder.

2. Turn on the Apache and MySQL modules on XAMPP. Set up the MySQL database at [http://localhost/phpmyadmin/index.php](http://localhost/phpmyadmin/index.php).

2. To run and use this project, navigate to this link: [http://localhost/member-management-demo/views/index.php](http://localhost/member-management-demo/views/index.php).

## SETTING UP THE DATABASE

1. To set up the project database, you must first create and connect your own SQL database using this premade script with the phpmyadmin link provided above:

```-- Create 'members' table
CREATE TABLE members (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL
);

-- Create 'schools' table
CREATE TABLE schools (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);

-- Create 'member_schools' table
CREATE TABLE member_schools (
    id INT AUTO_INCREMENT PRIMARY KEY,
    member_id INT,
    school_id INT,
    FOREIGN KEY (member_id) REFERENCES members(id),
    FOREIGN KEY (school_id) REFERENCES schools(id)
);
```

2. Add two demo schools using these SQL commands:

```
INSERT INTO schools (name) VALUES ('School A');
INSERT INTO schools (name) VALUES ('School B');
```

3. And finally go over to the config.php file in this directory and replace the connection details with your own that you set up.

