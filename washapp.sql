-- Database Creation
CREATE DATABASE IF NOT EXISTS washapp;
USE washapp;

-- Users Table
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    phone VARCHAR(20) NOT NULL,
    password VARCHAR(255) NOT NULL, -- In production, use password_hash()
    address TEXT,
    role ENUM('customer', 'admin') DEFAULT 'customer',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Requests Table
CREATE TABLE IF NOT EXISTS requests (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    service_type VARCHAR(50) NOT NULL,
    pickup_date DATE NOT NULL,
    pickup_address TEXT NOT NULL,
    notes TEXT,
    status ENUM('Pending', 'Processing', 'Completed', 'Cancelled') DEFAULT 'Pending',
    payment_status ENUM('Unpaid', 'Paid') DEFAULT 'Unpaid',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

-- Contact/Messages Table
CREATE TABLE IF NOT EXISTS messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    subject VARCHAR(200),
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Dump Payload (Demo Data)

-- Default Password is '1234'
INSERT INTO users (name, email, phone, password, address, role) VALUES 
('Demo User', 'user@example.com', '0771234567', '1234', '123 Main St, Colombo', 'customer');

INSERT INTO requests (user_id, service_type, pickup_date, pickup_address, notes, status, payment_status) VALUES
(1, 'Wash & Fold', CURDATE() + INTERVAL 2 DAY, '123 Main St, Colombo', 'Please separate whites', 'Pending', 'Unpaid'),
(1, 'Dry Cleaning', CURDATE() - INTERVAL 5 DAY, '123 Main St, Colombo', 'Suit jacket', 'Completed', 'Paid');
