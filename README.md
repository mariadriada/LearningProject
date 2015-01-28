# LearningProject
Test ...












////////////////////////////////////////////////////
		TEST 1: SLIM FRAMEWORK - Configuration 
/////////////////////////////////////////////////

/*Composer is required for Slim Framework*/


** Install composer (Windows 8) - PHP required

1. Download file in project directory:

	php -r "readfile('https://getcomposer.org/installer');" | php

2. Create a composer.json file in your project root:
	
	{
	    "require": {
	        "slim/slim": "2.*"
	    }
	}

3. Install Slim Framework via composer:
	
	php composer.phar install

4. To user Slim Framework 