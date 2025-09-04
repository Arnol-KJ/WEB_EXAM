database ::

CREATE TABLE students(
  student_id varchar(255) primary key ,
  student_name varchar(255),
  gender varchar(255));
  
CREATE TABLE courses(
  course_id varchar(255) primary KEY,
  course_name varchar(255),
  course_credit int );

Create TABLE exam_result(
  id INT PRIMARY KEY AUTO_INCREMENT,
  course_id varchar(255),
  student_id varchar(255),
  exam_point DECIMAL(10,2));
  
INSERT INTO students (student_id, student_name, gender) VALUES
(6740201220, 'Alice Smith', 'F'),
(6740201221, 'Bob Johnson', 'M'),
(6740201222, 'Carol Williams', 'F'),
(6740201223, 'David Brown', 'M'),
(6740201224, 'Emily Davis', 'F'),
(6740201225, 'Frank Miller', 'M'),
(6740201226, 'Grace Wilson', 'F'),
(6740201227, 'Henry Moore', 'M'),
(6740201228, 'Ivy Taylor', 'F'),
(6740201229, 'Jack Anderson', 'M'),
(6740201230, 'Karen Thomas', 'F');

INSERT INTO courses (course_id,course_name,course_credit) VALUES ("01204113","ComPro for CPE",3),
("01204271","Intro to CPE",3);

INSERT INTO exam_result (course_id, student_id, exam_point) VALUES
('01204113', 6740201220, 78.45),
('01204271', 6740201221, 64.12),
('01204113', 6740201222, 89.77),
('01204271', 6740201223, 55.36),
('01204113', 6740201224, 91.20),
('01204271', 6740201225, 72.84),
('01204113', 6740201226, 66.59),
('01204271', 6740201227, 83.14),
('01204113', 6740201228, 47.92),
('01204271', 6740201229, 95.67),
('01204113', 6740201230, 58.33);



ดูวิธีการใช้ xampp และ php myadmin



บอร์ดต้องมี หน้าการทำงานหลักๆก็ต้องมีการแสดงผลว่าอะไรเป็นอะไร มันทำอะไรได้บ้าง

การทำงานคือการสร้างเว็บโดยใช้ภาษา php และการเชื่อมต่อฐานข้อมูลด้วย mysqli จากนั้นก็จะมีการป้องกันระบบของฐานข้อมูล 

การใช้งาน ใช้เพื่อแสดงคะแนนสอบแต่ละรายวิชาที่ตัวเองสอน และง่ายต่อการค้นหาในอนาคต
