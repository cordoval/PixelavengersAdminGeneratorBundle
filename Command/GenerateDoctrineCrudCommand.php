<?php

namespace Pixelavengers\Bundle\AdminGeneratorBundle\Command;

use Sensio\Bundle\GeneratorBundle\Command\GenerateDoctrineCrudCommand as SensioGenerateDoctrineCrudCommand;
use Sensio\Bundle\GeneratorBundle\Generator\DoctrineCrudGenerator;
use Sensio\Bundle\GeneratorBundle\Generator\DoctrineFormGenerator;

class GenerateDoctrineCrudCommand extends SensioGenerateDoctrineCrudCommand
{
    private $generator;
    private $formGenerator;

    /**
     * Console Command configuration
     *
     * {@inheritDoc}
     */
    protected function configure()
    {
        parent::configure();
        $this->setName('generate:pixelavengers:crud')
             ->setAliases(array('pixelavengers:generate:crud'))
             ->setDescription('Extends Sensio Crud Generator. Also generates a CRUD based on a Doctrine Entity')
                ;
    }

    /**
     * @return DoctrineCrudGenerator
     */
    protected function getGenerator()
    {
        if (null === $this->generator) {
            $this->generator = new DoctrineCrudGenerator($this->getContainer()->get('filesystem'), __DIR__.'/../Resources/skeleton/crud');
        }

        return $this->generator;
    }

    /**
     * @return DoctrineFormGenerator
     */
    protected function getFormGenerator()
    {
        if (null === $this->formGenerator) {
            $this->formGenerator = new DoctrineFormGenerator($this->getContainer()->get('filesystem'),  __DIR__.'/../Resources/skeleton/form');;
        }

        return $this->formGenerator;
    }

}