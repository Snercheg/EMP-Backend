<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230308150753 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE data (
                            module_id INT NOT NULL, 
                            humidity DOUBLE PRECISION NOT NULL, 
                            temperature DOUBLE PRECISION NOT NULL, 
                            illumination INT NOT NULL, 
                            humidity_date DATETIME NOT NULL, 
                            temperature_date DATETIME NOT NULL, 
                            illumination_date DATETIME NOT NULL, 
                            PRIMARY KEY(module_id)) DEFAULT CHARACTER SET utf8mb4 
                     COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE module (
                            id INT AUTO_INCREMENT NOT NULL, 
                            api_key INT NOT NULL, 
                            settings_id INT NOT NULL, 
                            type_id INT NOT NULL, 
                            module_type_id INT NOT NULL, 
                            status LONGTEXT NOT NULL, 
                            PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 
                     COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE data');
        $this->addSql('DROP TABLE module');
    }
}
