# Social Share Preview
The social share preview is a library designed to pass in certain content such as title, description, image url & a web url then request a preview will be generated based upon certain social media sites.

## Install

### Composer *Recommend*
```
composer require elistone/social-share-preview
```

### Manually

Download this package manually and add it to your projected

## Usage

```php
// init preview library.
$preview = new Preview();

// set the common content.
$preview->setTitle("This is my example title");
$preview->setDescription("This is my example description");
$preview->setImageUrl("https://source.unsplash.com/random");
$preview->setUrl("https://example.com");

// set the type of preview.
$preview->setType("facebook"); // Facebook, LinkedIn or Twitter.

// generate and display the preview.
echo $preview->generate();
```

## Styling

This library contains some basic styling for the generated output this can be found at `css/social-share-preview.css`.

## Example

There is an example file found in this project which can be launched with php serve.
```
php -S localhost:8001
```
Then visiting http://localhost:8001/example.php will load the example.