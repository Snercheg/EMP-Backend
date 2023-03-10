<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230309102126 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE data ADD measurements_date DATETIME NOT NULL, DROP humidity_date, DROP temperature_date, DROP illumination_date');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE data ADD temperature_date DATETIME NOT NULL, ADD illumination_date DATETIME NOT NULL, CHANGE measurements_date humidity_date DATETIME NOT NULL');
    }
}
