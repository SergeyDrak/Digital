# Task for the PHP Developer(Symfony 5)
### Create news subscription form

#### 1. Form requirements:
##### 1.1. User chooses categories of his interest and fills Name, E-mail inputs. HTML template can be chosen freely.
##### 1.2. All fields must be required. (Name, E-mail, and at least one category).
##### 1.3. News categories list is fixed but it can be changed and expanded in the future.
##### 1.4. Data must be saved to a file, not to the database.
#### 2. Subscribers list page requirements:
##### 2.1. should be secured by login authorisation (Username and Password)
##### 2.2.List should show subscriber name, e-mail, subscription date and selected categories.
##### 2.3.List must have the option to be sorted by registration/subscription date, e-mail, name.
##### 2.4.Must be possible to edit selected subscriber’s name and e-mail.
##### 2.5.Must be possible to delete the subscriber.

#### 3. Code requirements:
##### 3.1.PHP version >= 7.4
##### 3.2.Must be used Symfony 5 framework.

#### Additional points gained, if:
##### ● Best software development and PHP standards recommendations are used.
##### ● Code is maintainable, flexible understandable, clean and clear.
##### ● The Docker for dev. Environment is used.
##### ● Tests for the application is written.

✨ Magic ✨

## Features

- Decorated as a bundle. Code here(./bundles)

## Installation

```sh
git clone https://github.com/SergeyDrak/Digital.git

cd your project dir

docker-compose up -d

docker-compose exec php bash

composer install

php bin/console doctrine:migrations:migrate

php bin/console doctrine:fixtures:load

go to http://metinvest.digital.test/ and use

```


## Access to the admin panel:
user - user@edigital.com

password - pass

- Until I manage to run the test in my environment, I'll figure it out later.

**P.S. Thank you for an interesting and developing task.**
