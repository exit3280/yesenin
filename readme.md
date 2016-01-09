# A tribute to the amazing Russian poet – Sergey Yesenin

I loved reading Sergej Yesenin. Most of the time, I was reading technical books only. After reading *Letter to Mother*, *Sing, old man, to the bloody guitar*, and *You don’t love me and don’t feel compassion* I just had to read his every poem.

After a lot of *googling*, I found it interesting that most of the websites with poems are bad and full of ads. Also, I wanted to check out how to deploy AngularJS and Laravel application to the [Heroku](http://heroku.com/).

You can check out the website on [http://yesenin.herokuapp.com](http://yesenin.herokuapp.com).

Technical TODO:
  - languages are currently hard coded (English and Croatian) – load the list from the server
  - allow users to add poems
  - allow users to read poems with JavaScript turned-off

Non-Technical TODO:
  - add more poems


If you want some poem to get published, don’t be shy and feel free to contact me: davor[at]warriorkitty.com.

Blog post about this application is [here](http://warriorkitty.com/site/a-tribute-to-the-amazing-russian-poet-sergey-yesenin/).

## Under the hood
Files you need to look up if you want to contribute (relative to the root of the application):

```sh
app/Http/routes.php # for new routes
gulpfile.js # if you add a new JS file, make sure you add it here
resources/assets/sass/app.scss # feel free to redesign the whole app
app/Http/Controllers/PoemController.php # poem controller
resources/views/partials/dashboard/poems.php # main view
resources/views/layout.blade.php # main layout file
```

## Run the app locally
Run these commands:
```sh
# npm will install everything you need on the server-side
npm install
# bower will install everything you need on the client-side
bower install
# gulp will convert SASS to CSS and concat all JS files
gulp && gulp watch
```

You will probably want to open a new Terminal here:
```sh
# create a .env and put your db credentials inside
cp .env.example .env
# after creating your database, recreate tables
php artisan migrate:refresh --seed
# generated key will be used when encrypting data
php artisan key:generate
# serve the application
php artisan serve
```
