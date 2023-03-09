<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230309190748 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE type DROP FOREIGN KEY FK_8CDE5729B6354598');
        $this->addSql('DROP INDEX IDX_8CDE5729B6354598 ON type');
        $this->addSql('ALTER TABLE type CHANGE recommendation_id_id recommendation_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE type ADD CONSTRAINT FK_8CDE5729D173940B FOREIGN KEY (recommendation_id) REFERENCES recommendation (id)');
        $this->addSql('CREATE INDEX IDX_8CDE5729D173940B ON type (recommendation_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE type DROP FOREIGN KEY FK_8CDE5729D173940B');
        $this->addSql('DROP INDEX IDX_8CDE5729D173940B ON type');
        $this->addSql('ALTER TABLE type CHANGE recommendation_id recommendation_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE type ADD CONSTRAINT FK_8CDE5729B6354598 FOREIGN KEY (recommendation_id_id) REFERENCES recommendation (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_8CDE5729B6354598 ON type (recommendation_id_id)');
    }
}
