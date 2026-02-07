CREATE DATABASE drop_water_db;

USE drop_water_db;

CREATE TABLE orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    customer_name VARCHAR(100),
    phone VARCHAR(20),
    email VARCHAR(100),
    quantity INT,
    item_type VARCHAR(50),
    add_ons TEXT,
    order_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
