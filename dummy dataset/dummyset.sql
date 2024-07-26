create database student;
use student;

CREATE TABLE `student`.`admin` (
  `username` VARCHAR(100) NOT NULL,
  `password` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`username`));
  
CREATE TABLE performance (
    `student_id` INT AUTO_INCREMENT PRIMARY KEY,
    `student_name` VARCHAR(100) NOT NULL,
    `remarks` TEXT
);

CREATE TABLE marks (
    `student_id` INT AUTO_INCREMENT PRIMARY KEY,
    `student_name` VARCHAR(100) NOT NULL,
    `ct1_math` INT,
    `ct2_math` INT,
    `ct3_math` INT,
    `ct1_ds` INT,
    `ct2_ds` INT,
    `ct3_ds` INT,
    `ct1_dstl` INT,
    `ct2_dstl` INT,
    `ct3_dstl` INT,
    `ct1_coa` INT,
    `ct2_coa` INT,
    `ct3_coa` INT
);

CREATE TABLE attendance (
    student_id INT AUTO_INCREMENT PRIMARY KEY,
    student_name VARCHAR(100) NOT NULL,
    attendance_math INT  ,
    attendance_ds INT  ,
    attendance_dstl INT  ,
    attendance_coa INT  
);


INSERT INTO performance (`student_name`, `remarks`)
VALUES
    ('John Doe', 'Excellent performance in all subjects.'),
    ('Jane Smith', 'Needs improvement in mathematics.'),
    ('Alice Johnson', 'Good progress in data structures.'),
    ('Bob Brown', 'Struggling with recent assignments.'),
    ('Chris Evans', 'Shows great interest in all subjects.');


INSERT INTO marks (`student_name`, `ct1_math`, `ct2_math`, `ct3_math`, `ct1_ds`, `ct2_ds`, `ct3_ds`, `ct1_dstl`, `ct2_dstl`, `ct3_dstl`, `ct1_coa`, `ct2_coa`, `ct3_coa`)
VALUES
    ('John Doe', 85, 78, 92, 88, 79, 85, 90, 85, 80, 88, 90, 85),
    ('Jane Smith', 90, 85, 87, 82, 80, 85, 78, 82, 85, 90, 88, 84),
    ('Alice Johnson', 80, 75, 78, 85, 82, 80, 88, 80, 82, 85, 87, 90),
    ('Bob Brown', 82, 78, 85, 90, 88, 82, 85, 88, 90, 80, 82, 85),
    ('Chris Evans', 75, 82, 80, 78, 85, 82, 82, 80, 78, 85, 87, 82);
    
INSERT INTO attendance (student_name, attendance_math, attendance_ds, attendance_dstl, attendance_coa)
VALUES ('John Doe', 90, 85, 95, 88),
('Jane Smith', 92, 88, 90, 85),
 ('Alice Johnson', 80, 75, 78, 85),
 ('Bob Brown', 82, 78, 85, 90),
('Chris Evans', 75, 82, 80, 78);

INSERT INTO admin (username,password) VALUES('shrish','1234');





