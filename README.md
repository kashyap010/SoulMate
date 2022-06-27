<img src="public/assets/SoulMate (3).png" alt="logo" width="300" />

# Why search for a date when you can find your SoulMate?

Signup for free and try your luck. You just might find the girl you've always been waiting for!

<br />

## Installation
### Step 1: 
Follow this [link](https://www.c-sharpcorner.com/article/how-to-install-wamp-server-in-windows-10/) to download and setup WAMP server on your system

<img src="https://www.fredericgilles.net/wp-content/uploads/2018/01/WampServer-logo.png" alt="logo" width="150" />

Make sure you have the WAMP server up and running 

### Step 2: 
Clone this repo on your desktop and copy the folder in the following directory: `"C:\wamp64\www\"`

### Step 3: 
Right click on the WAMP Server tray icon and under the tools section, note down the port used by MySQL and Apache server

![mysql port](https://user-images.githubusercontent.com/106474125/175659026-23919992-123d-45bd-9621-e9a66e379224.jpg) ![apache port](https://user-images.githubusercontent.com/106474125/175659033-03b2f865-0efa-4062-8d1f-c6b49b4a69f3.jpg)

In my case it is 3306 and 8081


### Step 4:
Open the SoulMate folder in any code editor of your choice

Open `connection.php` file and replace the port number with the MySQL port number noted in Step 3

![change port number](https://user-images.githubusercontent.com/106474125/175659091-5b40385b-74ff-4e33-955b-31bba9e532c0.jpg)


### Step 5:
Click on the tray icon > MySQL > Open the MySQL console

![image](https://user-images.githubusercontent.com/106474125/175659326-7e3d3968-bb2d-4045-9e70-6676c7ce153c.png)

Continue with the default username `root` and press Enter key as the password

Inside the console, copy paste the following query to create the soulmate database: `CREATE DATABASE soulmate;`



### Step 6:
Open the following link in your browser: `http://localhost:your_apache_port_from_step_3/phpmyadmin/db_export.php?db=soulmate`

Enter `root` as your username, keep the password empty

Go to import tab > Choose file > Select `soulmate.sql` located in `C:\wamp64\www\SoulMate\database\soulmate.sql` and click on Go

![image](https://user-images.githubusercontent.com/106474125/175659407-eb1fb1f7-2caa-4a21-a38d-4666a05c7397.png)

If 8 tables are successfully created in the database, the installation phase is almost complete

### Step 7:
Open the signup page `http://localhost:your_apache_port_from_step_3/dating-website/signup-user.php` 

Register a new account and enter OTP 🔢 received on your email id

![Signup image](https://s8.gifyu.com/images/signup.gif)

Fill in your account details 👨‍💻👩‍💻

![Signup image](https://s8.gifyu.com/images/account.gif)

See your matches. Like ❤ them and wait till they like you back.

![Homepage image](https://s8.gifyu.com/images/login6d0f32aef79c39f4.gif)

The one you've liked will see your profile first. If she likes you back, you've found your SoulMate❤ 

![Match image](https://s8.gifyu.com/images/match.gif)

Congratulations 🎉 It's a match 🎉

See what you share in common and chat 📭 to know each other better.

![Live chat image](https://s8.gifyu.com/images/live-chat.gif)

Come back again later to find more potential soulmates 🤗

![Login image](https://s8.gifyu.com/images/logine079d1dc3e9c8c2f.gif)






