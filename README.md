# Docker very simple example

## Use:

1. Clone the project
1. cd to the project's folder
1. Run: ```docker-compose up -d```
1. Go to ```localhost:8080```, login with 'root' and 'example'
1. Create a database 'eshop' and a table 'products' with auto-increment 'id' and varchar 'name'
1. Add some products
1. Go to ```localhost```, then ```localhost/products.php```
1. To stop run: ```docker-compose down```