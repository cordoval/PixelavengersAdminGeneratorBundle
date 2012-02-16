PixelavengersAdminGeneratorBundle
=================================

Welcome to Pixelavengers Admin Generator Bundle.
This bundle attempts to provide an easy and full-working solution to create administration areas with a few steps.

Installation
---------------

### Download via git submodule

    git submodule add git://github.com/ricardclau/PixelavengersAdminGeneratorBundle.git vendor/bundles/Pixelavengers/Bundle/AdminGeneratorBundle

### Download by editing deps file

    [PixelavengersAdminGeneratorBundle]
        git=http://github.com/ricardclau/PixelavengersAdminGeneratorBundle.git
        target=/bundles/Pixelavengers/Bundle/AdminGeneratorBundle
        version=origin/master

### Modify autoload.php and instantiate bundle in AppKernel.php


    // app/autoload.php
    $loader->registerNamespaces(array(
        // ...
        'Pixelavengers'                       => __DIR__.'/../vendor/bundles',
    ));

    public function registerBundles()
    {
        $bundles = array(
            // ...
            new Pixelavengers\Bundle\AdminGeneratorBundle\PixelavengersAdminGeneratorBundle(),
        );
    }

Special Thanks and credits
--------------------------

Albert Casademont @acasademont for all his work in Ulabox