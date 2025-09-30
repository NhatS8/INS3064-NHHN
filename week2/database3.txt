-- Cơ sở dữ liệu: CuaHangLaptop
-- Bảng: laptop

-- Tạo cơ sở dữ liệu
CREATE DATABASE IF NOT EXISTS `CuaHangLaptop` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `CuaHangLaptop`;

-- Tạo bảng laptop
CREATE TABLE IF NOT EXISTS `laptop` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `ten_hang` VARCHAR(100) NOT NULL,     -- Hãng sản xuất (Dell, Asus, Apple...)
  `ten_may` VARCHAR(150) NOT NULL,      -- Tên dòng máy
  `cpu` VARCHAR(150) NOT NULL,          -- Vi xử lý
  `ram` VARCHAR(50) NOT NULL,           -- RAM
  `ocung` VARCHAR(100) NOT NULL,        -- Ổ cứng
  `gia` DECIMAL(15,2) NOT NULL,         -- Giá tiền (VNĐ)
  `soluong` INT(11) NOT NULL DEFAULT 0, -- Số lượng tồn kho
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Thêm dữ liệu mẫu
INSERT INTO `laptop` (`ten_hang`, `ten_may`, `cpu`, `ram`, `ocung`, `gia`, `soluong`) VALUES
('Dell', 'Inspiron 15 3511', 'Intel Core i5-1135G7', '8GB', '512GB SSD', 15990000, 12),
('Asus', 'VivoBook 14 A415', 'Intel Core i3-1115G4', '8GB', '256GB SSD', 11990000, 20),
('Apple', 'MacBook Air M1 2020', 'Apple M1', '8GB', '256GB SSD', 21990000, 7),
('Acer', 'Aspire 7 A715', 'AMD Ryzen 5 5500U', '8GB', '512GB SSD', 17990000, 10),
('MSI', 'GF63 Thin 11SC', 'Intel Core i7-11800H', '16GB', '512GB SSD', 23990000, 5);
