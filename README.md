Задание №2. Выполнение CRUD операций

Настройка Open Server:

Установим следующие параметры сервера:

![image](https://user-images.githubusercontent.com/102148024/215026141-7a3dfa1f-67af-4cb0-a266-0a26f0e9c542.png)

В модулях подключим нужные версии PHP MySQL и Apache

![image](https://user-images.githubusercontent.com/102148024/215026261-dc31e1db-7afe-4306-bf1d-3c97c9c56ff7.png)

Добавил в наш сайт во вкладке домены:

![image](https://user-images.githubusercontent.com/102148024/215026413-101d8baf-b05e-4902-b661-b76544dc4886.png)

В phpMyAdmin поставим логин root и пароль оставим пустым.

Диаграмма базы данных:

![Диаграмма базы данных](https://user-images.githubusercontent.com/102148024/214978825-9c08c67b-3032-42b7-868f-04077bf4217a.png)

Интернет магазин "No Ozone"

В папке OSPanel откроем папку domains и создамим папку с проектом.

Команды для установки:

В консоле пишем код для установки yii:

![image](https://user-images.githubusercontent.com/102148024/214978546-8e4f8e48-b1b7-49e5-870b-f3029e6692bb.png)

После установки yii пропишем код для подключения базы данных

![image](https://user-images.githubusercontent.com/102148024/214978671-0c06f0d0-609e-4067-b315-64d5eb187da7.png)

Удаляем комментарии с URL Manager:

![image](https://user-images.githubusercontent.com/102148024/214979179-535d3c6f-de7d-40e6-bdf9-dd172d8b0886.png)

Генерация Модулей

Для создания моделей в строке поиска введём следующее:

![image](https://user-images.githubusercontent.com/102148024/214979434-c7e0816c-8a3e-4ffb-a3fc-0e8526f9ee38.png)

И выберем блок создания модулей

![image](https://user-images.githubusercontent.com/102148024/214980706-eacd9273-f8af-49d6-8331-772b6066bcb1.png)


Создадим модуль с названием admin.


![image](https://user-images.githubusercontent.com/102148024/214980561-cfaa6a3d-e39f-4ed3-86c7-f69edccdce7c.png)


Генерация Моделей


На этой странице открываем Генератор Моделей:

![image](https://user-images.githubusercontent.com/102148024/214979618-b6418adf-476f-46fd-8ba7-bd3ee22d4b89.png)

Создаём модели для всех таблиц:

![image](https://user-images.githubusercontent.com/102148024/214979707-a82ece7a-af63-41c3-a7eb-97b49b8dcb61.png)

В результате получается так:

![image](https://user-images.githubusercontent.com/102148024/214979786-7ad8a48b-699a-4e29-81cc-9bc9358578b6.png)

Генерация CRUD

![image](https://user-images.githubusercontent.com/102148024/214979896-12aa0dd0-8c33-4b34-bfd2-e7f51614bdd1.png)

Получается так:

![image](https://user-images.githubusercontent.com/102148024/214979981-e61417e8-f977-483c-b903-0160479f962e.png)

Добавление ссылок в меню

![image](https://user-images.githubusercontent.com/102148024/214980151-7901a150-dcf2-4fa2-8336-26f8c8b09547.png)

И сейчас она выглядит так:

![image](https://user-images.githubusercontent.com/102148024/214980221-ffdd9fa2-5bb0-4fd1-9329-681c11ad36d9.png)

						Перевод моделей

Для примера возьмём модель address:

![image](https://user-images.githubusercontent.com/102148024/214980348-e7dc5727-9944-4ba7-8492-01550a542162.png)


