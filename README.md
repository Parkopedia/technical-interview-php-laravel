# PHP/Laravel Test

## Introduction

This repository is a starting point for conducting a technical interview with a potential candidate around Laravel.

It provides a single `GET /locations` endpoint, a simple factory, model and seeder.

## Setup

First, we need to copy over our `.env.example` to `.env`:

```bash
cp .env.example .env
```

Then pull in our composer dependencies:

```bash
composer install
```

And finally, build our DB and seed it with some data:

```bash
touch database/database.sqlite
php artisan migrate --seed
```

## Tests

```bash
php artisan test
```
