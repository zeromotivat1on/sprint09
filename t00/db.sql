CREATE TABLE IF NOT EXISTS users (

    id INT AUTO_INCREMENT PRIMARY KEY,
    login VARCHAR(30) UNIQUE NOT NULL,
    password VARCHAR(100) NOT NULL,
    full_name TEXT NOT NULL,
    mail VARCHAR(50) NOT NULL,
    status ENUM('User', 'Admin') DEFAULT 'User' NOT NULL

);
