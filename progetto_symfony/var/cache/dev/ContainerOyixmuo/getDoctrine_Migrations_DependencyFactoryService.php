<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'doctrine.migrations.dependency_factory' shared service.

include_once $this->targetDirs[3].'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\DependencyFactory.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Configuration\\Migration\\ConfigurationLoader.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Configuration\\Migration\\ExistingConfiguration.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Configuration\\Configuration.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Configuration\\EntityManager\\EntityManagerLoader.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Configuration\\EntityManager\\ExistingEntityManager.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Metadata\\Storage\\MetadataStorageConfiguration.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Metadata\\Storage\\TableMetadataStorageConfiguration.php';

$a = new \Doctrine\Migrations\Configuration\Configuration();
$a->addMigrationsDirectory('DoctrineMigrations', ($this->targetDirs[3].'/migrations'));
$a->setAllOrNothing(false);
$a->setCheckDatabasePlatform(true);
$a->setMetadataStorageConfiguration(${($_ = isset($this->services['doctrine.migrations.storage.table_storage']) ? $this->services['doctrine.migrations.storage.table_storage'] : ($this->services['doctrine.migrations.storage.table_storage'] = new \Doctrine\Migrations\Metadata\Storage\TableMetadataStorageConfiguration())) && false ?: '_'});

return $this->services['doctrine.migrations.dependency_factory'] = \Doctrine\Migrations\DependencyFactory::fromEntityManager(new \Doctrine\Migrations\Configuration\Migration\ExistingConfiguration($a), new \Doctrine\Migrations\Configuration\EntityManager\ExistingEntityManager(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->load('getDoctrine_Orm_DefaultEntityManagerService.php')) && false ?: '_'}), ${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->getLoggerService()) && false ?: '_'});
