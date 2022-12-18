# EChat - Chating Application
![Logo](https://i.ibb.co/hHSpZGQ/EChat.png)

Chating Website with Social Login System.

## Installation

#### Step One

Clone This Repository Using This Command

```bash
git clone https://github.com/rixetbd/echat
```
Open Project Folder and /application. Then run commands.. (If you face any problem, then try to use PowerShall Terminal / Windows Terminal)

```bash
copy .env.example .env
```
```bash
composer update
```
```bash
php artisan key:generate
```

Edit .env file and Run Migrate (First make a Database)

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=database_name
DB_USERNAME=root
DB_PASSWORD=
```
```bash
php artisan migrate
```

#### Step Two
Role ( Permission ) Data insert for Admin

```bash
php artisan db:seed --class=UserRoleSeeder
php artisan db:seed --class=AdminUserSeeder
```
Or, Run All Seeder

```bash
php artisan db:seed
```

### Step Three
Login using this email and password

##### Email:
```bash
admin@mail.com
```

##### Password:
```bash
admin
```

After login with this Email & Password, make another User with Admin Permission and logout current account. Login with new User account and delete first Admin account for security purpose.

## Features

Each module performs a separate function within the Application that helps with information gathering or tracking. Application modules can assist with:
1. Users Management

## Requirement

1. [PHP](https://www.php.net/) version 8.1+
2. [Node.js](https://nodejs.org/) version 18.1+
3. [Composer](https://getcomposer.org/) version 2.4+


### 👨‍💻 Skills & Experiance:

![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![SASS](https://img.shields.io/badge/SASS-hotpink.svg?style=for-the-badge&logo=SASS&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)
![JQuery](https://img.shields.io/badge/jQuery-0769AD?style=for-the-badge&logo=jquery&logoColor=white)
![PHP7](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![LARAVEL](https://img.shields.io/badge/LARAVEL-F05340?style=for-the-badge&logo=laravel&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-00000F?style=for-the-badge&logo=mysql&logoColor=white)

### Favorite IDEs/Editors 

![vs-code](https://img.shields.io/badge/-VS%20Code-007ACC?style=for-the-badge&logo=visual-studio-code)
![Atom](https://img.shields.io/badge/Atom-%2366595C.svg?style=for-the-badge&logo=atom&logoColor=white)

###  Connect with me ☕

[<img src="https://camo.githubusercontent.com/2d1ffa69dd491ebeca01b2098cf8233dd09950ff5895abccd5b455ca442abc59/68747470733a2f2f696d672e736869656c64732e696f2f62616467652f46616365626f6f6b2d3138373746323f7374796c653d666f722d7468652d6261646765266c6f676f3d66616365626f6f6b266c6f676f436f6c6f723d7768697465" alt="facebook" height="30" style="max-width: 100%;">](https://www.facebook.com/rixet.rabiul)  [<img src="https://camo.githubusercontent.com/b3d4671768bd0f9b6c8f410a25a96e0c5a4d135208d8910461e986f97e7985ab/68747470733a2f2f696d672e736869656c64732e696f2f62616467652f496e7374616772616d2d4534343035463f7374796c653d666f722d7468652d6261646765266c6f676f3d696e7374616772616d266c6f676f436f6c6f723d7768697465" alt="instagram" height="30" style="max-width: 100%;">](https://www.instagram.com/rixetbd/)  [<img src="https://camo.githubusercontent.com/5d03c86f6a75f7cbe80d135d9162fbf6dc46a31253cf30a8e9bb8279b4d574d3/68747470733a2f2f696d672e736869656c64732e696f2f62616467652f547769747465722d3144413146323f7374796c653d666f722d7468652d6261646765266c6f676f3d74776974746572266c6f676f436f6c6f723d7768697465" alt="twitter" height="30" style="max-width: 100%;">](https://twitter.com/rixetbd)  [<img src="https://camo.githubusercontent.com/a80d00f23720d0bc9f55481cfcd77ab79e141606829cf16ec43f8cacc7741e46/68747470733a2f2f696d672e736869656c64732e696f2f62616467652f4c696e6b6564496e2d3030373742353f7374796c653d666f722d7468652d6261646765266c6f676f3d6c696e6b6564696e266c6f676f436f6c6f723d7768697465" alt="linkedin" height="30" style="max-width: 100%;">](https://www.linkedin.com/in/rixetbd/)  


### Feedback

If you have any feedback, please reach out to us [here](https://www.facebook.com/rixetbd/reviews/). For any support, [Email me](mailto:rixetbd@gmail.com) or follow [RixetBD Coders](https://facebook.com/rixetbd).

### License

The DigiClock is open-sourced application licensed under the [MIT license](https://choosealicense.com/licenses/mit/)

