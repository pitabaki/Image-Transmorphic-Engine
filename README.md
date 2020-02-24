# Image Transmorphic Engine
Module for converting png, jpg, and gif images into Google's WebP format.

## Dependencies
In order to run the Image Transmorphic Engine, you must have Homebrew and PHP 7.2+ installed and running.

## Homebrew Installation Instructions
To install Homebrew, run this bash command in Terminal:

```bash
/usr/bin/ruby -e "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install)"
```

## Homebrew Update
If Homebrew is already installed on your machine, run the following bash command to update Homebrew:

```bash
brew update
brew upgrade
```

## PHP 7.2 Installation Instructions
Now that you've installed and updated Homebrew, now it's time to install PHP 7.2. In terminal, run:

```bash
brew install php@7.2
```

To test you installation, check your version of PHP. 

```bash
php -v
```

With that command, you should see PHP version 7.2.

## Now What?
Within the _images_ folder, you'll see there's an _original_ and _webp_ folder. Drop any jpg, png, or gif in _original_.

In terminal, run:

```bash
php index.php
```