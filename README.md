#Laravel API Task Management Introduction This Laravel project is a simple task management system with CRUD operations on tasks. The project includes two versions, V1 without validation and V2 with validation. Additionally, there is a single Blade view for a user-friendly interface.

Getting Started To run this project, follow the steps below:

Create a new Laravel project:

bash Copy code composer create-project --prefer-dist laravel/laravel your-project-name cd your-project-name Install Docker container:

Follow the instructions on Docker's official website to install Docker for your specific operating system. Install Docker Compose:

Follow the instructions on Docker Compose's official website to install Docker Compose. Run Docker Compose:

bash Copy code docker-compose up -d This command will start the Docker containers. The SQL server will be hosted on port 8081.

Serve the Laravel project:

bash Copy code php artisan serve The Laravel project will be accessible at http://127.0.0.1:8000.

Install Postman:

Download and install Postman to interact with the API. API Usage API routes can be found in the web.php file (routes/web.php). Use Postman to call the API and perform CRUD operations on tasks. Database Setup To set up the database, run the following command:

bash Copy code php artisan migrate:refresh --seed This command will create the necessary tables and seed the database with sample data using Laravel factories.

Versions V1: Basic CRUD operations without validation. V2: CRUD operations with validation. Blade View There is a single Blade view to visualize and interact with the tasks. Access it through the following route:

arduino Copy code http://127.0.0.1:8000/tasks Feel free to explore and enhance this Laravel task management project!
