-- Create the database if it doesn't exist
CREATE DATABASE IF NOT EXISTS task_management;
USE task_management;

-- Create a table for storing user information (for signup)
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) UNIQUE NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


INSERT INTO users (username, email, password) VALUES
('admin', 'admin@admin.com', '123');