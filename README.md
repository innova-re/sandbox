Innovare
=======================

What's inside?
--------------

Innovarecomes pre-configured with the following bundles:

* Bundles from Symfony Standard distribution
* Sonata Admin Bundles: Admin and Doctrine ORM Admin
* Sonata Ecommerce Bundles: Payment, Customer, Invoice, Order and Product
* Sonata Foundation Bundles: Core, Notification, Formatter, Intl, Cache, Seo and Easy Extends
* Sonata Feature Bundles: Page, Media, News, User, Block, Timeline
* Api Bundles: FOSRestBundle, BazingaHateoasBundle, NelmioApiDocBundle and JMSSerializerBundle

Installation
------------
Check the intl extensions of your PHP, if the result is an empty string please install it:
    php -m | grep intl
    intl

Configure your database:

    CREATE DATABASE innovare_DB;
    CREATE USER 'innovare_user'@'localhost' IDENTIFIED BY 'innovare_psw';
    GRANT ALL ON innovare_DB.* TO 'innovare_user'@'localhost';

Get source code:

    git clone git@github.com:innova-re/sandbox.git

Get composer:

    curl -s http://getcomposer.org/installer | php

Run the following command:

    php composer.phar update

Update your database:

    php app/console doctrine:schema:update --force

Load the fixtures:

    php app/console doctrine:fixtures:load

Install assets:

    php app/console assets:install web --symlink

Update the routes and create a snapshot:

    php app/console sonata:page:update-core-routes --site=all
    php app/console sonata:page:create-snapshots --site=all

Create a new administration service for an existing entity.
---

In order to list the existing administration service you can run the following command:

    php app/console sonata:admin:list

If you want to add a new administration service for an existing "innovare" entity, the recommended way is the following:

    > php app/console sonata:admin:generate

    The fully qualified model class: Application\Innovare\ModelBundle\Entity\<existing-entity>
    The bundle name: ApplicationInnovareCoreBundle
    The admin class basename: [default]
    Do you want to generate a controller: [yes]
    The controller class basename: [default]
    Do you want to update the services YAML configuration file: [yes]
    The services YAML configuration file: [admin.yml]
    The admin service ID: [innovare.admin.[entity_name]]

Check if the new administration service has been added by running:

    php app/console sonata:admin:list

Get the router information just by running the following command

    php app/console sonata:admin:explain [the item from sonata:admin:list]

And then you need to get the router just by running

Run
---

If you are running PHP5.4, you can use the built in server to start the demo:

    php app/console server:run

Now open your browser and go to http://localhost:8000/

Translation
-----
When maintaining a bundle, you may inspect the usage of a translation message.
To inspect all messages in the it locale for the ApplicationInnovareCoreBundle, run:

    php app/console translation:debug it ApplicationInnovareCoreBundle

Tests
-----

### Functional testing

To run the Behat tests, copy the default configuration file and adjust the base_url to your needs

    # behat.yml
    imports:
        - behat.yml.dist

    # Overwrite only the config you want to change here

You can now run the tests suite using the following command

    php bin/behat

To get more informations about Behat, feel free to check `the official documentation
<http://docs.behat.org/>`_.


### Unit testing

To run the Sonata test suites, you can run the command:

    bin/qa_client_ci.sh

Enjoy!
