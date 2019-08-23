<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190822142041 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE galerie ADD administration_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE galerie ADD CONSTRAINT FK_9E7D159039B8E743 FOREIGN KEY (administration_id) REFERENCES administration (id)');
        $this->addSql('CREATE INDEX IDX_9E7D159039B8E743 ON galerie (administration_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE galerie DROP FOREIGN KEY FK_9E7D159039B8E743');
        $this->addSql('DROP INDEX IDX_9E7D159039B8E743 ON galerie');
        $this->addSql('ALTER TABLE galerie DROP administration_id');
    }
}
