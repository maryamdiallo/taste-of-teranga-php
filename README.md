# A Taste of Teranga

A beginner-friendly PHP and MySQL restaurant website for Homework 4. The site has three separate pages: **Home**, **Menu**, and **Contact**. The Contact page saves form messages in a MySQL database using PHP and PDO prepared statements.

## Requirements
- MAMP (Apache + MySQL + PHP)
- A browser

## Setup on a Mac with MAMP
1. Download or clone this repository.
2. Move the `taste-of-teranga` folder into `/Applications/MAMP/htdocs/`.
3. Open MAMP and click **Start Servers**.
4. Open `http://localhost:8888/phpMyAdmin/` (or use the phpMyAdmin link on MAMP's WebStart page).
5. Select the **Import** tab and import `restaurant.sql`. This creates the `taste_of_teranga` database and `contact_messages` table.
6. Check `db.php`: MAMP commonly uses MySQL port `8889`, username `root`, password `root`. Update if your settings are different.
7. Open `http://localhost:8888/taste-of-teranga/index.php`.

## Pages
- `index.php`: Home page and introduction.
- `menu.php`: Menu with four food illustrations, descriptions, and example prices.
- `contact.php`: Contact form for name, email, subject, and message.

## How the form works
1. A visitor fills out the Contact form.
2. The form sends data using POST to `save_contact.php`.
3. PHP checks the required fields and email address.
4. `db.php` connects to MySQL using PDO.
5. A prepared INSERT statement saves the information in `contact_messages`.
6. The visitor sees a success message after the save.

## Verify the database
In phpMyAdmin, open the `taste_of_teranga` database, select `contact_messages`, and click **Browse** to see the saved message. Or run:

```sql
SELECT * FROM contact_messages ORDER BY created_at DESC;
```

## Security and notes
- Uses PDO prepared statements to protect against SQL injection.
- Validates required fields and email format on the server.
- Does not show detailed database errors to visitors.
- Local MAMP `root` credentials are for development only; do not use them for a public website.
- Food pictures are original SVG illustrations included in `images/`, so they work offline.
- This is a school demonstration, not a real restaurant booking or ordering service.

## Unique features
- West African restaurant theme and Senegalese menu.
- Three separate navigation pages.
- Responsive layout for phones and computers.
- Food illustrations and database-backed contact form.
