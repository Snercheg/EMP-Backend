<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230309104643 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX `primary` ON data');
        $this->addSql('CREATE UNIQUE INDEX composite_idx ON data (module_id, measurements_date)');
        $this->addSql('ALTER TABLE data ADD PRIMARY KEY (module_id, measurements_date)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX composite_idx ON data');
        $this->addSql('DROP INDEX `PRIMARY` ON data');
        $this->addSql('ALTER TABLE data ADD PRIMARY KEY (module_id)');
    }
}
