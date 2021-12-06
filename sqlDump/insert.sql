INSERT INTO PUBLISHER(Publisher_ID, BankingAccount, Name, EmailAddress, Address, PhoneNumber)
VALUES(1001, '004-12738-26787182', 'Pearson', 'person111@gmail.com', '1126 Speedvale Court', '613-111-2831'),
(1002, '010-73822-82738292', 'Wolters Kluwer', 'WK222@gmail.com', '228 Bank Street', '613-272-3929'),
(1003, '006-27132-93287331', 'Scholastic (corp.)', 'sch333@gmail.com', '983 Mission Trail Crescent', '613-382-1282'),
(1004, '008-12871-18238312', 'McGraw-Hill Education', 'mg444@gmail.com', '7322 Merivale Road', '613-328-9120'),
(1005, '003-21872-32981312', 'Grupo Planeta', 'gp555@gmail.com', '282 Sweet Pea Street', '613-121-9172'),
(1006, '004-21892-21891214', 'De Agostini Editore', 'dae666@gmail.com', '128 Rideau Street', '613-123-1292'),
(1007, '005-12031-43202312', 'Cengage', 'ce777@gmail.com', '1822 Splinter Street', '613-110-7322');

INSERT INTO book (Book_ID, ISBN, BookName, Author, Category, Price, Book_In_Stock, Publisher_ID)
VALUES (0001, 1984812343, 'Wicked Fox', 'Kat Cho', 'Romance', 29.99, 56, 1001),
(0002, 0062433253, 'Of Fire and Stars', 'Audrey Coulthurst', 'Romance', 34.99, 23, 1002),
(0003, 1335218793, 'Storm and Fury', 'Jennifer L. Armentrout', 'Romance', 25.99, 34, 1003),
(0004, 0062866567, 'A Very Large Expanse of Sea', 'Tahereh Mafi', 'Romance', 26.99, 20, 1004),
(0005, 1681195089, 'A Curse So Dark and Lonely', 'Brigid Kemmerer', 'Romance', 32.99, 23, 1005),
(0006, 1524738263, 'Her Royal Highness', 'Rachel Hawkins', 'Romance', 19.99, 30, 1002),
(0007, 1250299489, 'Tell Me How You Really Feel', 'Aminah Mae Safi', 'Romance', 31.99, 12, 1003),
(0008, 1984812203, 'Frankly in Love', 'David Yoon', 'Romance', 25.99, 13, 1001),
(0009, 0062396609, 'Ruined', 'Amy Tintera', 'Romance', 36.49, 25, 1005),
(0010, 1596431520, 'American Born Chinese', 'Gene Luen Yang', 'Children', 21.99, 33, 1006),
(0011, 0060760885
, 'One Crazy Summer', 'Rita Williams-Garcia', 'Children', 28.99, 21, 1007),
(0012, 0545132053,'Smile', 'Raina Telgemeier', 'Children', 22.99, 27, 1007),
(0013, 1250098645, 'You Know Me Well', 'Nina LaCour', 'Children', 24.49, 25, 1006);


INSERT INTO USERS(UserID, Username, UserPassword, Email, Address, PhoneNumber, BillingInformation, OrderHistory)
VALUES('001', 'Cecilia Chapman', 'psw111', 'ccc111@hotmail.com','711 Nulla St', '257-563-7401','5105XXXXXXXX5100', ''),
('002', 'Iris Watson', 'psw222', 'iw222@hotmail.com','8562 Fusce Rd', '372-587-2335','1839XXXXXXXX2392', ''),
('003', 'Celeste Slater', 'psw333', 'cs333@hotmail.com','3727 Ullamcorper. Street', '786-713-8616','2833XXXXXXXX1823', ''),
('004', 'Theodore Lowe', 'psw444', 'tl444@hotmail.com','867-859 Sit Rd', '793-151-6230','2383XXXXXXXX3404', ''),
('005', 'Kyla Olsen', 'psw555', 'ko555@hotmail.com','711 Nulla St', '257-563-7401','5105XXXXXXXX5100', ''),
('006', 'Forrest Ray', 'psw666', 'fr666@hotmail.com','103 Integer Rd', '404-960-3807','3283XXXXXXXX1032', ''),
('007', 'Hiroko Potter', 'psw777', 'hp777@hotmail.com','2508 Dolor. Av', '314-244-6306','4832XXXXXXXX1923', ''),
('008', 'Lawrence Moreno', 'psw888', 'lm888@hotmail.com','9940 Tortor Street', '684-579-1879','5105XXXXXXXX5100', '');


INSERT INTO ADMIN(Admin_ID, AdminName, AdminPassword)
VALUES(1111, 'Ina Moran', 'im1111'),
(2222, 'Aaron Hawkins', 'ah2222'),
(3333, 'Hedy Greene', 'hg3333');


INSERT INTO REPORT (Report_ID, ReportName)
VALUES(111, 'Sales vs Expeditures'),
(222, 'Sales per Genres'),
(333, 'Sales per Author'),
(444, 'Sales per Order'),
(555, 'User List');


INSERT INTO ORDERS(Order_ID, OrderStatus, OrderPayment, OrderDelivery, OrderDatetime, OrderAmount)
VALUES(237382, 'RECEIVED', '2833XXXXXXXX1823', '3727 Ullamcorper. Street', '2021-12-06 15:34:23', 82.98),
(723822, 'SHIPPED', '4832XXXXXXXX1923', '2508 Dolor. Av', '2021-11-12 01:13:14', 55.28);



