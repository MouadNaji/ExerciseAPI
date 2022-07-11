
### Exercises table
<img width="538" alt="Screenshot 2022-07-11 at 21 21 49" src="https://user-images.githubusercontent.com/44157184/178342135-0d672b2c-ead0-4713-a700-df26065d6a80.png">

### Setup project 
### Configuring the .env to match your databse then type
php artisan migrate
### run project 
php artisan serve
### Add new exercise by typing 
php artisan tinker
### followed by
DB::table('exercises')->insert(['title'=>'xxx','type'=>'xxx','img'=>'xxx'])
