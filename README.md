<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

Rest API implementation on Laravel 7.0.

# Requirements
PHP 7.2.5+

# Installation
    1. cd /path/to/the/laravel-rest/
    2. cp .env.example .env
    3. *edit the .env file*
    4. composer install
    5. php artisan migrate:refresh
    6. php artisan db:seed

# Launch
    php artisan serve

# API

## Endpoints:
    GET    /api/users
    GET    /api/users/{id}
    GET    /api/reviews
    GET    /api/reviews/{review}
    POST   /api/reviews
    PUT    /api/reviews/{review}
    DELETE /api/reviews/{review}

## Samples

### GET /api/users

#### Request
    curl http://127.0.0.1:8000/api/users

#### Response
    [
      {
        "id": 1,
        "name": "Mathew Christiansen",
        "email": "matilde52@hotmail.com",
        "email_verified_at": null,
        "created_at": "2020-05-23T16:29:32.000000Z",
        "updated_at": "2020-05-23T16:29:32.000000Z"
      },
      {
        "id": 2,
        "name": "Ms. Dakota Pfannerstill I",
        "email": "xhaag@wiegand.com",
        "email_verified_at": null,
        "created_at": "2020-05-23T16:29:32.000000Z",
        "updated_at": "2020-05-23T16:29:32.000000Z"
      },
      {
        "id": 3,
        "name": "Neal Champlin",
        "email": "dariana48@gmail.com",
        "email_verified_at": null,
        "created_at": "2020-05-23T16:29:32.000000Z",
        "updated_at": "2020-05-23T16:29:32.000000Z"
      },
      
      ...
    
    
### GET /api/users/{id}

#### Request
    curl http://127.0.0.1:8000/api/users/1

#### Response
    {
      "id": 1,
      "name": "Mathew Christiansen",
      "email": "matilde52@hotmail.com",
      "email_verified_at": null,
      "created_at": "2020-05-23T16:29:32.000000Z",
      "updated_at": "2020-05-23T16:29:32.000000Z"
    }


### POST /api/reviews

#### Request
    curl -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id_employee": 1, "user_id_reviewer": 2, "comment": "test", "rating": 5}' \
    -X POST http://127.0.0.1:8000/api/reviews/

#### Response
    {
      "user_id_employee": 1,
      "user_id_reviewer": 2,
      "comment": "test",
      "rating": 5,
      "updated_at": "2020-05-24T04:24:51.000000Z",
      "created_at": "2020-05-24T04:24:51.000000Z",
      "id": 52
    }


### DELETE /api/reviews/{review}

#### Request
    curl -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -X DELETE http://127.0.0.1:8000/api/reviews/1
#### Response
HTTP code 204.


## License

[MIT license](https://opensource.org/licenses/MIT).
