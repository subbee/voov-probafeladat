# Voov Próbafeladat – Laravel Projekt

Ez egy Laravel alapú demo alkalmazás, amely ügyfelek (customers) kezelésére szolgál. A projekt célja egy gyakorlati feladat bemutatása.

---

## Telepítés

### 1. Repository klónozása

```bash
git clone https://github.com/subbee/voov-probafeladat.git
cd voov-probafeladat
```

### 2. Csomagok telepítése

```bash
composer install
```

### 3. .env fájl létrehozása

```bash
cp .env.example .env
```

Majd állítsd be az adatbázis kapcsolati adatokat:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=voov
DB_USERNAME=root
DB_PASSWORD=secret
```

### 4. App kulcs generálása

```bash
php artisan key:generate
```

---

## Adatbázis

### 1. Migrációk futtatása

```bash
php artisan migrate
```

### 2. Seedelés

#### Figma alapján rögzített adatokkal:

```bash
php artisan db:seed --class=CustomerSeeder
```

#### Random adatokkal (factory):

```bash
php artisan db:seed
```

---

## Fejlesztői szerver indítása

```bash
php artisan serve
```

Majd látogasd meg:

[http://localhost:8000](http://localhost:8000)

---

## Projekt felépítése

- `app/Models/Customer.php` – Ügyfél modell
- `database/seeders/CustomerSeeder.php` – Fix ügyféladatok
- `resources/views/` – Blade nézetek

---

## Követelmények

- PHP 8.1+
- Composer
- MySQL

---

## Fejlesztői megjegyzés

Ha több idő állt volna rendelkezésre, a következő fejlesztéseket valósítanám meg:

- Adatok módosításának lehetősége (edit/update funkció a customer adatokhoz)
- Avatarok dinamikus kezelése: külön `Avatar` modell és adminfelület hozzá
- Teljes authentikáció és jogosultságkezelés
- Felhasználói élmény növelése: AJAX műveletek, modális ablakos törlés
- Datatables integrálása az ügyfelek index oldalra adatok kereséséhez, táblázat rendezéséhez

Ezekkel a bővítésekkel egy robusztusabb, könnyen karbantartható, és produkcióra is kész rendszert lehetne kialakítani.


