


## Installation Steps

Follow these steps to set up the application:

### 1. Clone the Repository

git clone  https://github.com/akhinkj/lead-managment
cd lead-managment


### 2. Install Dependencies

Run the following commands to install PHP and JavaScript dependencies:

composer install
npm install && npm run dev


### 3. Configure the Environment

I have pushed the .env file give corresponding db connection

### 4. Generate Application Key

Run the following command to generate the application key:

php artisan key:generate


### 5. Run Migrations

Set up the database tables by running:

php artisan migrate


### 6. Set Up Queues

To process uploads in the background, set up Laravel's queue system:

1. Run the following command to create the jobs table:

   php artisan queue:table
   php artisan migrate


2. Start the queue worker:

   php artisan queue:work


---

## Running the Application


Run the following command to start the application:


php artisan serve


The application will be available at `http://127.0.0.1:8000`.

