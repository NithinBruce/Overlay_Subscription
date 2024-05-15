# Overlay Subscription and Settings

This project involves creating a subscription overlay and settings page, utilizing a database named "overlay" in XAMPP. It consists of two tables: "subscribers" to store email addresses and "settings" to store overlay settings.

## Table Structure:

### Table: subscribers

| Field     | Type         | Description          |
|-----------|--------------|----------------------|
| id        | INT          | Primary Key, Auto-increment |
| email     | VARCHAR(255) | Email address        |
|timestamp  |                                     |

### Table: settings

| Field           | Type         | Description                       |
|-----------------|--------------|-----------------------------------|
| id              | INT          | Primary Key, Auto-increment       |
| title           | VARCHAR(255) | Title of the overlay              |
| targeting_rule  | VARCHAR(50)  | Targeting rule for the overlay    |
| overlay_type    | VARCHAR(50)  | Type of overlay                   |
| display_rules   | VARCHAR(50)  | Rules for overlay display         |

## Files Included:

1. **subscribe.html**: HTML file for the subscription overlay.
2. **save_settings.php**: PHP script to save overlay settings to the database.
3. **settingpage.php**: HTML file for the settings page.
4. **email.php**: PHP script to handle email subscription.
5. **subscribe.js**: JavaScript file for frontend functionality.

## Usage:

1. **File Placement**: Place all project files in a directory within the `htdocs` folder of your XAMPP installation. For example, `C:\xampp\htdocs\overlay_project`.

2. **Access via Browser**: Open your web browser and type `localhost/path` in the address bar, where `path` is the directory name where your project is located within the `htdocs` folder. For example, `localhost/overlay_project`.

3. **Ensure XAMPP is Running**: Before accessing your project, ensure that your XAMPP server is running. Start Apache and MySQL from the XAMPP Control Panel if they are not already running.

4. **Database Configuration**: Make sure your MySQL server is running and that you've set up your database and tables correctly as per your PHP scripts.

5. **Interact with the Project**: You should now be able to access your project via `localhost/path` and interact with it as intended.

## Notes:

- Ensure proper configuration of XAMPP and MySQL for database connection.
- Customize the styling and functionality of the overlay and settings page as needed.
