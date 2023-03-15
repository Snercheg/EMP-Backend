<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230315164336 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE recommendation ADD temperature_min DOUBLE PRECISION NOT NULL, ADD temperature_max DOUBLE PRECISION NOT NULL, ADD humidity_min DOUBLE PRECISION NOT NULL, ADD humidity_max DOUBLE PRECISION NOT NULL, ADD illumination_min DOUBLE PRECISION NOT NULL, ADD illumination_max DOUBLE PRECISION NOT NULL, DROP temperature_range, DROP humidity_range, DROP illumination_range');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE recommendation ADD temperature_range DOUBLE PRECISION NOT NULL, ADD humidity_range DOUBLE PRECISION NOT NULL, ADD illumination_range DOUBLE PRECISION NOT NULL, DROP temperature_min, DROP temperature_max, DROP humidity_min, DROP humidity_max, DROP illumination_min, DROP illumination_max');
    }
}
