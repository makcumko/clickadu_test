﻿###SQL dummy test
#### Вопрос 1
Выбрать всех людей, которые хоть раз путешествовали и отобразить около каждого список мест, где он бывал через запятую.
Колонки: name, distinations

SELECT h.name, GROUP_CONCAT(d.name) AS distinations
FROM human h
JOIN human_vacation_dist hd ON hd.human_id = h.id
JOIN vacation_dist AS d ON d.id = hd.distination_id
GROUP BY h.id
-- раз в тз dIstination, то так и быть


#### Вопрос 2
Выбрать всех людей, которые были и на Кубе и в Сочи.
Колонки: name

SELECT h.name
FROM human h 
JOIN human_vacation_dist hd ON hd.human_id = h.id
JOIN vacation_dist d ON d.id = hd.distination_id AND d.name IN ('Sochi', 'Cuba')
GROUP BY h.id
HAVING COUNT(DISTINCT d.id) = 2
-- нет индекса на названии места


#### Вопрос 3
Выбрать всех людей, которые были только и на Кубе и в Сочи.
Колонки: name

SELECT h.name
FROM human h
JOIN human_vacation_dist hd ON hd.human_id = h.id
JOIN vacation_dist d ON d.id = hd.distination_id
GROUP BY h.id
HAVING SUM(CASE WHEN d.name IN ('Sochi', 'Cuba') THEN 1 ELSE 10 END) = 2
-- аналогично, индекса нет, по скорости не просядет



###PHP dummy test
#### Вопрос 1

Написать простой CLI скрипт, который принимает *на ввод* строку, переворачивает ее и удаляет все гласные и выводит на экран.

Пример:
input: Hello world!
output: !dlrw llH

#### Вопрос 2
Покройте класс/функцию, написанную для предыдущего задания тестами, используя phpunit framework.




см. проект https://github.com/makcumko/clickadu_test

запуск консольной версии *php cmd_test.php*

запуск теста *vendor\bin\phpunit src\Foo\FooTest*

