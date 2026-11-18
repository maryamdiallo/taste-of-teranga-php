# A Taste of Teranga

A simple PHP and MySQL website featuring West African food. It includes three pages: **Home, Menu, and Contact**. The contact form saves messages to a MySQL database.

## Requirements
- MAMP (Apache, MySQL, PHP)
- Web browser

## Setup
1. Download the project into `/Applications/MAMP/htdocs/`.
2. Start MAMP.
3. Open phpMyAdmin and import `restaurant.sql`.
4. Check the database settings in `db.php`.
5. Visit `http://localhost:8888/taste-of-teranga/index.php`.

## Pages
- **Home:** Restaurant introduction.
- **Menu:** West African dishes and prices.
- **Contact:** Form to send messages.

## Database
The contact form collects names, emails, subjects, and messages. PHP validates the information and saves it to MySQL using PDO.

To view saved messages, run:

```sql
SELECT * FROM contact_messages;
```

## Security
- Uses prepared statements to prevent SQL injection.
- Validates form information.
- Hides database errors from visitors.

## Unique Features
- West African restaurant theme.
- Mobile-friendly design.
- Separate navigation pages.
- Contact form connected to MySQL.

