# Public Salaries
A database of faculty salaries at Binghamton University. All information is public and obtained with a Freedom of Information Act request.

## Getting Started
To run this website locally, do the following: 

1. Clone the Git repository by running `git clone git@github.com:bupipedream/Public-Salaries.git`. 
2. Create a copy of `index-sample.php` and rename the copy to `index.php`. Modify if needed. Please do not delete or change `index-sample.php`.
3. Create a folder called `development` in `application/config/`. Create a copy of `application/config/database.php` and move it to the new development folder.

## Setting up the Database
Read through the wiki page to [learn about database migrations](https://github.com/bupipedream/Pipe-Dream/wiki/Projects). Once the database is created, you'll have to tell CodeIgniter how to connect.

1. Make sure you went through the "Getting Started" instructions.
2. Open up `application/config/development/database.php` and use the following settings for MAMP:

	$db['default']['hostname'] = 'localhost';
	$db['default']['username'] = 'root';
	$db['default']['password'] = 'root';
	$db['default']['database'] = 'public-salaries';

On WAMP, the settings may be different. I believe the `username` is root and the `password` is an empty string.