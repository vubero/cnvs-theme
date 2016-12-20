# Paper - Canvas Theme

This is the base theme of Canvas. Feel free to fork it and create your own.

[Canvas](http://canvas.toddaustin.io) is a simple, powerful blog publishing platform that lets you to share your stories with the world. Its beautifully designed interface and completely customizable framework allows you to create and publish your own blog, giving you tools that make it easy and even fun to do. 

## Installation

> NB. The "unthemed" canvas, out-the-box, looks exactly like this. Evidently you do not need to install this theme. 

However, you may install this theme via composer:

````
composer require cnvs/canvas-theme-paper
````

## Theme Development

You may use this as a base to create your very own Canvas theme. There are a few steps to note however:

- :smile_cat: Yarn: The theme uses yarn to pull node modules including Laravel's elixir which is used to "mix" assets.
  
  Ensure you have `yarn` installed:
  ````
  npm install yarn -g
  ````

  Run `yarn` in terminal from your theme directory.

- :beer: Gulp

  Once npm packages are downloaded you may *gulp* away.
  ````
  gulp
  ````

---
Cheers :beers: