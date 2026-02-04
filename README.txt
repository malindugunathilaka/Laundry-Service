# WashApp Clone

This is a clone of the WashApp laundry service website, implemented with PHP, HTML, CSS, and JS (vanilla).

## Features Implemented (from Use Case Diagram)
### Guest
- **View Product Prices**: Visible on the homepage (`index.php#pricing`).
- **View Policy**: Links in footer.
- **Create New Account**: `register.php`.

### Customer
- **Login**: `login.php` (Mock credentials: user@example.com / 1234).
- **Make Request**: `make_request.php` (Select service, date, address, attach image).
- **View Submit Details**: Dashboard lists requests with status (`dashboard.php`).
- **View Account**: `profile.php` (Edit details, View info).
- **Make Payment**: `payment.php` (UI for Card/Bank Transfer).
- **Contact Admin**: `contact_admin.php`.

## Setup
1. Ensure this folder is in your XAMPP `htdocs` directory (e.g., `C:/xampp/htdocs/new`).
2. Start Apache in XAMPP.
3. Open browser to `http://localhost/new`.

## Note
This project uses **PHP Sessions** to simulate a database. 
- You do NOT need to import any SQL file.
- Data will reset if you clear your browser cookies/session.
- Default User: `user@example.com`
- Password: `1234`
