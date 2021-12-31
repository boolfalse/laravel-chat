
## About The Project

This is the final codebase for our [Pusher tutorial](https://pusher.com/tutorials/how-to-build-a-chat-app-with-vue-js-and-laravel/).

### About us

Pusher does Websocket infrastructure so you don't need to. [Check us out](https://pusher.com/).

<!-- GETTING STARTED -->
## Getting Started

If you don't want to follow the tutorial, and just want to get a local copy up and running, follow these steps.

### Prerequisites

You will need PHP, Composer and Node.js. For MacOS I recommend installing them with [Homebrew](https://brew.sh/). For Windows see instructions for [PHP](https://windows.php.net/download/), [Composer](https://getcomposer.org/doc/00-intro.md#installation-windows) and [Node](https://nodejs.org/en/download/).

### Installation and Usage

1. Get your free Pusher API Keys at [https://pusher.com](https://pusher.com)
2. Clone this repo
3. Install Composer|NPM packages
    ```sh
    composer install
    npm install
    ```
4. Create a sqlite database file in the database folder
    ```sh
    touch db.sqlite
   
5. [OPTIONAL] For UNIX-based systems run these commands below:
    ```sh
    # make sure you've driver installed for SQLite
    sudo apt update
    sudo apt install php-sqlite3
    sudo apt install php7.4-sqlite3 # [optional] or just install for specific PHP version
    sudo systemctl restart apache2
    
    # one-time command for entire machine
    sudo usermod -a -G www-data $USER
    # setup ownerships/permissions
    sudo chown -R $USER:www-data storage/ bootstrap/cache/
    sudo chgrp -R www-data storage bootstrap/cache/
    sudo chmod -R ug+rwx storage bootstrap/cache/
    
    # setup SQLite file write permissions for avoiding this error:
    # SQLSTATE[HY000] General Error: 8 attempt to write a readonly database
    # NOTE: this will affect not only on "db.sqlite", but on "database" folder recursively
    sudo chgrp -R www-data database/
    chown -R $USER database/
    
    # now you can check appropriate permissions/ownerships
    # for "database" folder and "database/db.sqlite" file
    stat -c "%a %n" database/*
    ls -la database/
    ```
6. Enter your Pusher credentials in `.env`
    ```
    PUSHER_APP_ID=******
    PUSHER_APP_KEY=********************
    PUSHER_APP_SECRET=********************
    PUSHER_APP_CLUSTER=***
    ```
7. Enter the path to your database file
    ```
    DB_DATABASE=<Full path to the sqlite file>
    ```
8. Initialize the database
    ```sh
    php artisan migrate:fresh --seed
    ```
9. Compile the webpages and run the server
    ```sh
    npm run dev
    php artisan serve
    ```
10. Login in different browsers (or in incognito) with these credentials:
    ```
    # browser 1
    Username: user1@pusher.com
    Password: password
    # browser 2
    Username: user2@pusher.com
    Password: password
    ```
11. Go to "/chat" for real-time chat

<!-- CONTACT -->
## Contact

- Want so ask a Pusher a question? [Contact support here](https://support.pusher.com/hc/).
- If you want to raise an issue with our PHP SDK, [do it here](https://github.com/pusher/pusher-http-php).
 
## Credits

Owned by [Pusher](https://pusher.com).

## License

PusherSwift is released under the MIT license. See [LICENSE](https://github.com/pusher/laravel-chat/blob/master/LICENSE.md) for details.
