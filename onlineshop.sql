-- 1: Create databASe 
-- Kiểm tra databASe có tồn tại hay không mới xóa
DROP DATABASE IF EXISTS onlineship;
-- Kiểm tra database có tồn tại không mới tạo 
CREATE DATABASE IF NOT EXISTS onlineshop;
-- 2: sử dụng database nemshop 
USE onlineshop; 

CREATE TABLE users (
	users_id			    INT		      AUTO_INCREMENT,
    users_name 		    VARCHAR(255)		NOT NULL,
    users_email		    VARCHAR(255)		NOT NULL UNIQUE,
	users_password	    VARCHAR(255)		NOT NULL,
	repeat_password	    VARCHAR(255)		NOT NULL,
    users_status		    INT,
    PRIMARY KEY (users_id)
);


create table products(
	product_id int auto_increment primary key not null,
	product_image varchar(200) not null,
    product_name varchar(200) not null,
	product_price varchar(200) not null
	
)
;


CREATE TABLE category (
    category_id         INT           AUTO_INCREMENT,
    category_name       VARCHAR(255)		NOT NULL,
    PRIMARY KEY (category_id)
);


INSERT INTO users (users_name, users_email, users_password, repeat_password, users_status)
VALUES ('Bill Gates', 'bill@gmail.com', '123456', '123456', 1);
SELECT * FROM users;


INSERT INTO products (product_name, product_desc, product_price, product_image, product_quanlity, product_status)
VALUES ('ĐẦM THIẾT KẾ D23842', 
'Chất liệu:  vải tổng hợp cao cấp mềm mại, không nhăn, bền màu.',
'925.500', 'https://nemshop.vn/FileUpload/Images/d238421432064120474p18511_1.jpg',
'1000','1');
SELECT * FROM products;      

INSERT INTO category (category_id, category_name)
VALUES ('1', 'Váy');
SELECT * FROM customers;