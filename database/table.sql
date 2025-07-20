CREATE TABLE farmers (
    id INT PRIMARY KEY AUTO_INCREMENT,
    full_name VARCHAR(255) NOT NULL,
    email_address VARCHAR(255) DEFAULT NULL,
    phone VARCHAR(20) NOT NULL UNIQUE,
    location VARCHAR(100),
    farm_type VARCHAR(150),
    farm_size DECIMAL(10,1),
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE buyers (
    id INT PRIMARY KEY AUTO_INCREMENT,
    full_name VARCHAR(255) NOT NULL,
    email_address VARCHAR(255) DEFAULT NULL,
    phone VARCHAR(20) NOT NULL UNIQUE,
    company VARCHAR(150),
    buyer_type VARCHAR(150),
    business_location VARCHAR(150),
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE halal_investment (
    id INT PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) NOT NULL,
    email_address VARCHAR(255) DEFAULT NULL,
    phone VARCHAR(20) NOT NULL UNIQUE,
    address TEXT,
    city VARCHAR(100),
    country VARCHAR(100),
    investment_model VARCHAR(150),
    investment_amount INT,
    investment_duration VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);