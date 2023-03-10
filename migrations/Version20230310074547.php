<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230310074547 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE recommendation (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, temperature_range DOUBLE PRECISION NOT NULL, humidity_range DOUBLE PRECISION NOT NULL, illumination_range DOUBLE PRECISION NOT NULL, description_care LONGTEXT NOT NULL, created_at DATETIME NOT NULL, modified_at DATETIME NOT NULL, created_by INT NOT NULL, modified_by INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type (id INT AUTO_INCREMENT NOT NULL, recommendation_id INT DEFAULT NULL, description LONGTEXT NOT NULL, created_by INT NOT NULL, modified_by INT NOT NULL, INDEX IDX_8CDE5729D173940B (recommendation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE type ADD CONSTRAINT FK_8CDE5729D173940B FOREIGN KEY (recommendation_id) REFERENCES recommendation (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE type DROP FOREIGN KEY FK_8CDE5729D173940B');
        $this->addSql('DROP TABLE recommendation');
        $this->addSql('DROP TABLE type');
    }
}
