# Todo Application

A full-stack todo application built with React (TypeScript) and Laravel.

## Project Structure

```
todo/
├── frontend/          # React TypeScript application
│   ├── src/          # Source files
│   └── package.json  # Frontend dependencies
│
└── backend/          # Laravel API
    ├── app/         # Application core code
    ├── database/    # Migrations and seeders
    └── routes/      # API routes
```

## Setup Instructions

### Frontend
```bash
cd frontend
npm install
npm run dev
```

### Backend
```bash
cd backend
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```

## Development

- Frontend runs on: http://localhost:5173
- Backend API runs on: http://localhost:8000

## Technologies

- Frontend: React, TypeScript, Vite
- Backend: Laravel, MySQL
