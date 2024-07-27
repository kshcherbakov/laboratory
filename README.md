# laboratory
Тестовый репозиторий для компании "Лаборатория Интернет".
Реализован простейший веб-интерфейс для взаимодействия некоего приложения с неким бекендом.

Методы REST API:

## Добавление пользователя:
URL: POST /users/add/

**Передаваемые данные:** 
  name: имя пользвателя,
  login: логин

**Получаемые данные:**
  id - идентификатор пользователя
  success - Флаг успешности запроса  



## Получение информации о пользователе:
URL: POST /users/getinfo/

**Передаваемые данные:**
  id - идентификатор пользователя

**Получаемые данные:**
  name: имя пользвателя,
  login: логин
  success - Флаг успешности запроса  

  
## Обновление информации о пользователе:
URL: POST /users/getinfo/

**Передаваемые данные:**
  id - идентификатор пользователя
  login: новый логин

**Получаемые данные:**
  id - идентификатор пользователя
  success - Флаг успешности запроса
  
  
## Удаление пользователя:
URL: POST /users/delete/

**Передаваемые данные:**
  id - идентификатор пользователя

**Получаемые данные:**
  id - идентификатор пользователя
  success - Флаг успешности запроса

  
## Авторизация пользователя:
URL: POST /users/auth/

**Передаваемые данные:**
  login - логин пользователя
  token - токен пользователя

**Получаемые данные:**
  id - идентификатор пользователя
  success - Флаг успешности запроса
