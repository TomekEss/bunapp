# 🐇 Bunapp

**Bunapp** to aplikacja webowa służąca do zarządzania hodowlą królików – idealna dla małych i średnich hodowli. Umożliwia kompleksową kontrolę nad zdrowiem zwierząt, planowaniem rozrodu oraz zarządzaniem infrastrukturą hodowli.

## 🚀 Główne funkcje

- **Zdrowie królików**
    - Ewidencja szczepień
    - Rejestracja podawanych leków
    - Historia zdrowotna każdego królika

- **Rozród**
    - Kalendarz zakotów i wykotów
    - Powiadomienia o zbliżających się wydarzeniach
    - Historia rozrodu

- **Zarządzanie klatkami**
    - Przypisywanie królików do klatek
    - Historia sprzątania i dezynfekcji
    - Organizacja przestrzeni hodowlanej

## 🧰 Technologie

Aplikacja została zbudowana z wykorzystaniem nowoczesnych technologii:

- **PHP 8.3**
- **Laravel 12**
- **Tailwind CSS 3**
- **Filament 3** – panel administracyjny

## 📦 Wymagania systemowe

- PHP >= 8.3
- Composer
- Node.js + npm (dla assetów frontendowych)
- Baza danych: MySQL lub PostgreSQL

## ⚙️ Instalacja

1. Sklonuj repozytorium:

   ```bash
   git clone https://github.com/TomekEss/bunapp.git
   cd bunapp
   
2. Zainstaluj zależności:

    ```bash 
   npm install
   composer install

3. Skonfiguruj środowisko:

   cp .env.example .env
   php artisan key:generate

4. Uruchom migracje i seedy:

    ```bash 
    php artisan migrate --seed
   
5. Zbuduj front i uruchom serwer aplikacji:

    ```bash 
    npm run build
    php artisan serve
