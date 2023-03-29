<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230311080147 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE data (module_id INT NOT NULL, measurements_date DATETIME NOT NULL, humidity DOUBLE PRECISION NOT NULL, temperature DOUBLE PRECISION NOT NULL, illumination INT NOT NULL, INDEX IDX_ADF3F363AFC2B591 (module_id), UNIQUE INDEX composite_idx (module_id, measurements_date), PRIMARY KEY(module_id, measurements_date)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE module (id INT AUTO_INCREMENT NOT NULL, api_key INT NOT NULL, settings_id INT NOT NULL, type_id INT NOT NULL, module_type_id INT NOT NULL, status LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE recommendation (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, temperature_range DOUBLE PRECISION NOT NULL, humidity_range DOUBLE PRECISION NOT NULL, illumination_range DOUBLE PRECISION NOT NULL, description_care LONGTEXT NOT NULL, created_at DATETIME NOT NULL, modified_at DATETIME NOT NULL, created_by INT NOT NULL, modified_by INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE setting (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, temperature_range DOUBLE PRECISION NOT NULL, humidity_range DOUBLE PRECISION NOT NULL, illumination_range DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type (id INT AUTO_INCREMENT NOT NULL, recommendation_id INT DEFAULT NULL, description LONGTEXT NOT NULL, created_by INT NOT NULL, modified_at DATETIME NOT NULL, modified_by INT NOT NULL, INDEX IDX_8CDE5729D173940B (recommendation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(16) NOT NULL, created_at DATETIME NOT NULL, modified_at DATETIME NOT NULL, modified_by INT NOT NULL, status LONGTEXT NOT NULL, role_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_module (id INT AUTO_INCREMENT NOT NULL, user_id_id INT DEFAULT NULL, module_id INT NOT NULL, name VARCHAR(255) NOT NULL, linked_at DATETIME NOT NULL, INDEX IDX_69763D159D86650F (user_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE data ADD CONSTRAINT FK_ADF3F363AFC2B591 FOREIGN KEY (module_id) REFERENCES module (id)');
        $this->addSql('ALTER TABLE type ADD CONSTRAINT FK_8CDE5729D173940B FOREIGN KEY (recommendation_id) REFERENCES recommendation (id)');
        $this->addSql('ALTER TABLE user_module ADD CONSTRAINT FK_69763D159D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE data DROP FOREIGN KEY FK_ADF3F363AFC2B591');
        $this->addSql('ALTER TABLE type DROP FOREIGN KEY FK_8CDE5729D173940B');
        $this->addSql('ALTER TABLE user_module DROP FOREIGN KEY FK_69763D159D86650F');
        $this->addSql('DROP TABLE data');
        $this->addSql('DROP TABLE module');
        $this->addSql('DROP TABLE recommendation');
        $this->addSql('DROP TABLE setting');
        $this->addSql('DROP TABLE type');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE user_module');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
