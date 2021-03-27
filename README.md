# Meetup Test Suite

[![Build Status](https://img.shields.io/travis/cakephp/app/master.svg?style=flat-square)](https://travis-ci.org/cakephp/app)
[![Total Downloads](https://img.shields.io/packagist/dt/cakephp/app.svg?style=flat-square)](https://packagist.org/packages/cakephp/app)

A skeleton for creating applications with [CakePHP](https://cakephp.org) 3.x.

The framework source code can be found here: [cakephp/cakephp](https://github.com/cakephp/cakephp).

## Installation

1. git clone https://github.com/mayank597/meetup_test.git
2. cd meetup_test
3. Run `composer update`.
4. Create tmp and logs folder and give permission
5. run mysql file in EXTRA/meetup_test.sql
6. Set databse credentials in config/app_local.php


You can now either use your machine's webserver to view the default home page, or start
up the built-in webserver with:

```bash
bin/cake server -p 8765
```

Then visit `http://localhost:8765` to see the welcome page.

Then visit `http://localhost:8765/admin/` to see the Admin List and Search Option With Edit participant.

If you are seeing some file writing error then stop bake server and make sure to give permisson to logs folder and tmp folder


## API URLS

1. /api/participants.json POST (Registration Api)
2. /api/participants.json GET (List Api)
3. /api/participants/{participant_id}.json PUT (Update Api)

## Update

Since this skeleton is a starting point for your application and various files
would have been modified as per your needs, there isn't a way to provide
automated upgrades, so you have to do any updates manually.

## Configuration

Read and edit `config/app.php` and setup the `'Datasources'` and any other
configuration relevant for your application.

## Layout

The app skeleton uses a subset of [Foundation](http://foundation.zurb.com/) (v5) CSS
framework by default. You can, however, replace it with any other library or
custom styles.
