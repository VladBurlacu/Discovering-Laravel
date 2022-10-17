# Discovering-Laravel

## TO DO: 
- [x] 🌱 Use the [Laravel routing system](https://laracasts.com/series/laravel-8-from-scratch/episodes/5) to show a simple `hello world` on the screen.
- [x] Apply (part of) the MVC structure: the route will go to a controller, which will then load the view.
- [x] I don't see a thing! Laravel has a public folder, which is supposed to become the root for serving your website once it lives online. For now, just add /public to your url to run it from that folder.

## Nice-to-have features
- [x] 🌼 Find out about named routes. Add two more pages who link to each other using that name.
- [x] 🌳 Figure out how you can access any `$_GET` parameters in your controller *without* using any superglobals.
- [x] During our dive into Laravel, there be must haves (🌱), doable extra's (🌼) and slightly more difficult ones (🌳). That should everyone to get the basics and allow you to go deeper if you can.

## Installing Laravel 

```bash
# Installation Via Composer
composer create-project laravel/laravel:^8.0 example-app
 
cd example-app
 
php artisan serve
```
