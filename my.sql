-- create
CREATE TABLE groupmates (
  id INTEGER PRIMARY KEY,
  name TEXT NOT NULL,
  age TEXT NOT NULL,
  adress TEXT NOT NULL
);

-- insert
INSERT INTO groupmates VALUES (1, 'Пьянзин Дмитрий', 35, 'Новомосковск');
INSERT INTO groupmates VALUES (2, 'Надежда Лысенкова', 18, 'Москва');
INSERT INTO groupmates VALUES (3, 'Савкин Иван', 30, 'Москва');
INSERT INTO groupmates VALUES (4, 'Обжерин Данил', 24, 'Волжск');
INSERT INTO groupmates VALUES (5, 'Муратиков Никита', 29, 'Мерсин');
INSERT INTO groupmates VALUES (6, 'Шевчук Валерия', 25, 'Санкт-Петербург');
INSERT INTO groupmates VALUES (7, 'Шарахамедов Азиз', 32, 'Ташкент');

-- fetch 
SELECT name FROM groupmates WHERE adress = 'Москва' AND age > 18 AND age <= 30;
-- Либо можно BETWEEN между 19 и 30
-- SELECT name FROM groupmates WHERE adress = 'Москва' AND age BETWEEN 19 AND 30;