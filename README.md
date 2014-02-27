Freeradius Bundle
=================

[![Build Status](https://travis-ci.org/Spomky-Labs/SpomkyFreeradiusBundle.png?branch=master)](https://travis-ci.org/Spomky-Labs/SpomkyFreeradiusBundle)
[![Scrutinizer Quality Score](https://scrutinizer-ci.com/g/Spomky-Labs/SpomkyFreeradiusBundle/badges/quality-score.png?s=fe327405739dff5a1ff78b2d5ee87f0d8ab12250)](https://scrutinizer-ci.com/g/Spomky-Labs/SpomkyFreeradiusBundle/)
[![Code Coverage](https://scrutinizer-ci.com/g/Spomky-Labs/SpomkyFreeradiusBundle/badges/coverage.png?s=4b4da5d7fe0eaf28d9e009f86782be691d8e7638)](https://scrutinizer-ci.com/g/Spomky-Labs/SpomkyFreeradiusBundle/)

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/6bf3be17-dcf9-426a-be64-bbe47ebdc41d/big.png)](https://insight.sensiolabs.com/projects/6bf3be17-dcf9-426a-be64-bbe47ebdc41d)

[![Dependency Status](https://www.versioneye.com/user/projects/530b13dfec137596d2000006/badge.png)](https://www.versioneye.com/user/projects/530b13dfec137596d2000006)

[![Latest Stable Version](https://poser.pugx.org/spomky-labs/freeradius-bundle/v/stable.png)](https://packagist.org/packages/spomky-labs/freeradius-bundle) [![Total Downloads](https://poser.pugx.org/spomky-labs/freeradius-bundle/downloads.png)](https://packagist.org/packages/spomky-labs/freeradius-bundle) [![Latest Unstable Version](https://poser.pugx.org/spomky-labs/freeradius-bundle/v/unstable.png)](https://packagist.org/packages/spomky-labs/freeradius-bundle) [![License](https://poser.pugx.org/spomky-labs/freeradius-bundle/license.png)](https://packagist.org/packages/spomky-labs/freeradius-bundle)

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
	        "spomky-labs/freeradius-bundle": "dev-master"
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