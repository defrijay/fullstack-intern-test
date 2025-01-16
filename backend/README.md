# Fullstack Intern Backend Test - PT Aksamedia Mulia Digital - Backend

This repository contains the implementation for the Backend Developer Intern test at PT Aksamedia Mulia Digital, where the task is to create APIs with Laravel and MySQL/MariaDB.

## Tech Stack

### Backend:
- **Laravel**: PHP framework for building the API.
- **MySQL**: Database system for storing data.
- **PhpMyAdmin**: Database management tools.

### Development Tools:
- **Postman**: Used for testing the API endpoints.
- **Node.js**: JavaScript runtime used for running the frontend development server.
- **npm**: Package manager used to manage frontend dependencies.

## API Features

### Task 1 - API Login
- **Endpoint**: `/login`
- **Method**: `POST`
- **Request Format**:
  ```json
  {
    "username": "admin",
    "password": "pastibisa"
  }
- **Response Format**:
  ```json
  {
    "status": "success / error",
    "message": "pesan sukses / error",
    "data": {
        "token": "token untuk autentikasi",
        "admin": {
            "id": "uuid admin",
            "name": "nama admin",
            "username": "username admin",
            "phone": "no telepon admin",
            "email": "email admin",
            },
        }
    }

### Task 2 - API Division
- **Endpoint**: `/divisions`
- **Method**: `GET`
- **Request Format**:
  ```json
  {
    "name": "pencarian nama",
  }
- **Response Format**:
  ```json
    {
    "status": "success / error",
    "message": "pesan sukses / error",
    "data": {
        "divisions": [
            {
                "id": "uuid divisi",
                "name": "nama divisi",
            },
            {
                "id": "uuid divisi",
                "name": "nama divisi",
            }
        ],
    },
    "pagination": {
        "berisikan attribute pagination laravel":"..."
    },
    }

### Task 3 - API Employees
- **Endpoint**: `/employees`
- **Method**: `GET`
- **Request Format**:
  ```json
  {
    "name": "pencarian nama",
    "division_id": "filter berdasarkan divisi",
  }
- **Response Format**:
  ```json
    {
        "status": "success / error",
        "message": "pesan sukses / error",
        "data": {
            "employees": [
                {
                    "id": "uuid pegawai",
                    "image": "url foto pegawai",
                    "name": "nama pegawai",
                    "phone": "no telepon pegawai",
                    "division": {
                        "id": "uuid divisi",
                        "name": "nama divisi"
                    },
                    "position": "jabatan pegawai",
                },
                {
                    "id": "uuid pegawai",
                    "image": "url foto pegawai",
                    "name": "nama pegawai",
                    "phone": "no telepon pegawai",
                    "division": {
                        "id": "uuid divisi",
                        "name": "nama divisi"
                    },
                    "position": "jabatan pegawai",
                }
            ],
        },
        "pagination": {
            "berisikan attribute pagination laravel":"..."
        },
    }

### Task 4 - API Employees
- **Endpoint**: `/employees`
- **Method**: `POST`
- **Request Format**:
  ```json
  {
    "image": "file foto pegawai",
    "name": "nama pegawai",
    "phone": "no telepon pegawai",
    "division": "uuid divisi",
    "position": "jabatan pegawai",
   }

- **Response Format**:
  ```json
    {
      "status": "success / error",
      "message": "pesan sukses / error",
    }

### Task 5 - API Employees
- **Endpoint**: `/employees`
- **Method**: `PUT`
- **Request Format**:
  ```json
   {
    "image": "file foto pegawai",
    "name": "nama pegawai",
    "phone": "no telepon pegawai",
    "division": "uuid divisi",
    "position": "jabatan pegawai",
   }


- **Response Format**:
  ```json
    {
    "status": "success / error",
    "message": "pesan sukses / error",
    }

### Task 6 - API Employees
- **Endpoint**: `/employees`
- **Method**: `DELETE`
- **Request Format**:
  ```json
   {
    "status": "success / error",
    "message": "pesan sukses / error",
    }

### Task 7 - API Employees
- **Endpoint**: `/employees`
- **Method**: `PUT`
- **Request Format**:
  ```json
   {
    "status": "success / error",
    "message": "pesan sukses / error",
    }
