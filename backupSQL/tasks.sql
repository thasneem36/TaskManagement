-- Create the tasks table
CREATE TABLE IF NOT EXISTS tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    task VARCHAR(255) NOT NULL, -- Task description
    importance ENUM('low', 'medium', 'high') NOT NULL, -- Importance level
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP -- Task creation timestamp
);
