# symfony-landing-page

This project is meant as a showcase project. The main purpose is to build a simple website with certain stack, proper folder structure and build settings.

## Getting started

These instruction will get you copy of the project up and running on your local machine for developing and testing purposes.

### Symfony framework

This project is based on Sympony, PHP full-stack framework.

### Prerequisites

Make sure you have the following packages installed locally:

-   [NPM](https://nodejs.org/)
-   [Git](https://git-scm.com/)
-   [PHP](https://www.php.net) (>= 8.1)
-   [Composer](https://getcomposer.org/) (>= 2.0)

### Installation

Install composer dependencies

```sh
composer install
```

Install node modules

```sh
npm install
```

Build assets for deployment

```sh
composer run build
```

Build assets and start a local server in production environment

```sh
composer run prod
```

Start server for development

```sh
composer run dev
```

The server will be running at `http://localhost:8000`.

## Running the test

There are no tests.

## Deployment

There is no deployment set.

## Versioning

The application is not versioned.

## Tech stack

-   [PHP](https://www.php.net)
-   [Symfony](https://symfony.com/)
    -   PHP framework
-   [SASS](https://sass-lang.com/)
    -   CSS preprocessor
    -   [SCSS syntax](https://sass-lang.com/documentation/syntax)
    -   [BEM naming system](https://getbem.com/)
    -   usage of utility classes
-   [Parcel](https://parceljs.org/)

## Folder Structure

### `/ (root)`

-   `/.editorconfig` - [EditorConfig](https://editorconfig.org/) helps maintain consistent coding styles for multiple developers working on the same project across various editors and IDEs
-   `/.gitignore` - [Gitignore](https://git-scm.com/docs/gitignore) file specifies files and folder that should be ignored by Git in this project
-   `/composer.json` - [Composer](https://getcomposer.org/) configuration file describing this project dependencies for Composer
-   `/composer.lock` - [Composer](https://getcomposer.org/doc/01-basic-usage.md#installing-dependencies) configuration file for specifying exact dependencies versions to be installed by Composer
-   `/package-lock.json` - [NPM](https://docs.npmjs.com/cli/v9/configuring-npm/package-lock-json) configuration file for specifying exact dependencies versions to by installed by NPM
-   `/package.json` - [NPM](https://docs.npmjs.com/cli/v9/configuring-npm/package-json) configuration file describing this project dependencies for NPM
-   `/README.md` - this file
-   `/symfony.lock` - [Symfony](https://symfony.com/) configuration file for specifying exact dependencies versions to by installed by Symfony

### `/assets`

Files in this folder are built and copied to the `/public` folder by parcel.

-   `/assets/images/` - Project images
-   `/assets/scss/` - Source SCSS

### `/bin`

Symfony executable files (e.g. bin/console).

### `/config`

Symfony configuration files.

### `/node_modules`

NPM third-party dependencies.

### `/public`

Web root directory, contains app entry point (index.php) and all public static files (images, stylesheets).

### `/src`

The project's PHP code.

### `/templates`

Actual HTML content of the application.

-   `/bundles` files overriding third-party bundles
-   `/components` components displayed as pages content
-   `/pages` pages entry point
-   `/partials` parts of page layout
-   `.base.html.twig` common elements of all application templates. Creates page layout.

### `/tests`

Symfony automatic tests (e.g. Unit tests). No tests created.

### `/var`

Symfony generated files (cache, logs, etc.).

### `/vendor`

Symfony third-party dependencies.
