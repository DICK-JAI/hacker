CREATE DATABASE xuesheng;
USE xuesheng;

CREATE TABLE Result1 (
    u_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(10),
    age INT,
    sex INT,
    address VARCHAR(10),
    b_name VARCHAR(10)
);

INSERT INTO Result1 (name, age, sex, address, b_name) VALUES
('张三', 25, 1, '香港', '信息'),
('李四', 30, 1, '北京', '人事'),
('王五', 22, 1, '上海', '市场'),
('赵六', 28, 1, '广州', '信息'),
('孙七', 35, 0, '深圳', '人事'),
('周八', 27, 1, '成都', '市场'),
('吴九', 24, 0, '重庆', '信息'),
('郑十', 31, 1, '南京', '人事'),
('冯十一', 29, 0, '杭州', '市场'),
('朱十二', 26, 1, '武汉', '信息');