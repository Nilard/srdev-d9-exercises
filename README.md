# Sr. Drupal Developer Code Exercises
These exercises are designed to assess your Drupal knowledge and see how you solve problems. Please don't spend more than three hours on it, and if you have trouble completing it in that time don't stress about it - we don't expect it all to be completed. Work in progress code is totally fine, as long as the direction can be explained during the interview. If you'd prefer to spend all the time on only one of the exercises and flesh it out more, that is also fine.

_Note: The exercises are designed in the form of client requests, but in reality we would never expect requests of these types to be completed in the allotted three hours for this exercise :-)_

## Instructions

- Read the exercises below
- Clone the repository locally and perform the exercises.
  -  Use the setup instructions below to run the site. Or, if you prefer you can use your own infrastructure.
- Push your work up in a new, _private_ repository in your own GitHub account.
- Give the user [`lastcall-automation`](https://github.com/lastcall-automation) read access to your repository

## Setup instructions
1. If you don't have it already, install [Lando](https://lando.dev/)
2. Navigate to the project on the command line and run `lando start`
    - This will make a Drupal 9 site available at [`https://code.lndo.site`](https://code.lndo.site)
3. Import the database, so sample users and content are available
    - Run `lando db-import exercise.sql.gz` from the project root
4. You can interact with the site using the `lando` cli tool.
    - ex: `lando drush uli`

_note: A sample administrative user has been added to the database already:_
- username: `root`
- password: `root`

## Exercises

This project contains two custom modules, each housing a README that contains the instructions for each exercise.

- [Exercise 1: Display a list of users from an API on the homepage](./web/modules/custom/exercise1/README.md)
- [Exercise 2: Create a paywall effect for the `article` content type](./web/modules/custom/exercise2/README.md)
