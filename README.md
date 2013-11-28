Freeradius Bundle
=================

[![Build Status](https://travis-ci.org/Spomky/SpomkyFreeradiusBundle.png?branch=master)](https://travis-ci.org/Spomky/SpomkyFreeradiusBundle)
[![Scrutinizer Quality Score](https://scrutinizer-ci.com/g/Spomky/SpomkyFreeradiusBundle/badges/quality-score.png?s=cccff948dcd464bb4cad9c41de533b0aa5c46b17)](https://scrutinizer-ci.com/g/Spomky/SpomkyFreeradiusBundle/)
[![Code Coverage](https://scrutinizer-ci.com/g/Spomky/SpomkyFreeradiusBundle/badges/coverage.png?s=be8ef949515673510864371328ee1b9c69f8b17f)](https://scrutinizer-ci.com/g/Spomky/SpomkyFreeradiusBundle/)

This bundle will help you to interact with your Freeradius Server SQL storage.

For example, you can manage your users, groups and get accountings (input/output, sessions duration…).

# Prerequisites #

This version of the bundle requires `Symfony 2.1`.
You must have configured a Freeradius Server using SQL storage.

It only supports `Doctrine ORM`.

# Installation #

Installation is a quick 4 steps process:

* Download `SpomkyFreeradiusBundle`
* Enable the Bundle
* Create your model class
* Configure the `SpomkyFreeradiusBundle`

##Step 1: Install SpomkyFreeradiusBundle##

The preferred way to install this bundle is to rely on Composer. Just check on Packagist the version you want to install (in the following example, we used "dev-master") and add it to your `composer.json`:

	{
	    "require": {
	        // ...
	        "spomky/freeradius-bundle": "dev-master"
	    }
	}

##Step 2: Enable the bundle##

Finally, enable the bundle in the kernel:

	<?php
	// app/AppKernel.php
	
	public function registerBundles()
	{
	    $bundles = array(
	        // ...
	        new Spomky\FreeradiusBundle\SpomkyFreeradiusBundle(),
	    );
	}

##Step 3: Create classes##

… To Do …