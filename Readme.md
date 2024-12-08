# Product Management System

This is a simple CRUD (Create, Read, Update, Delete) application for managing products. It is built using PHP and MySQL.

## Features

- Add new products
- Edit existing products
- Delete products
- Search for products
- Pagination for product listing


## Setup

1. Clone the repository to your local machine.
2. Import the `product_management.sql` file into your MySQL database to create the necessary tables and insert sample data.
3. Update the database connection details in `includes/db.php` if necessary.

## Usage

- Navigate to `index.php` to view the list of products.
- Use the "Add New Product" button to add a new product.
- Use the edit button next to each product to edit its details.
- Use the delete button next to each product to delete it.

## Database

The database schema is defined in the `product_management.sql` file. The main table used is `products` with the following structure:

```sql
CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `stock_quantity` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
```


## Screenshots


![Pagination for product listing](img/Pagination%20for%20product%20listing.jpg)
![Add new products](img/Add%20new%20products.jpg)
![Delete products](img/Delete%20products.jpg)
![Edit existing products](img/Edit%20existing%20products.jpg)


## License

This project is licensed Khamko

