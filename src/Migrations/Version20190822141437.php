<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190822141437 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE etudiant DROP FOREIGN KEY FK_717E22E3F2410A1E');
        $this->addSql('DROP INDEX IDX_717E22E3F2410A1E ON etudiant');
        $this->addSql('ALTER TABLE etudiant DROP temoignage_id');
        $this->addSql('ALTER TABLE galerie ADD theme_id INT NOT NULL');
        $this->addSql('ALTER TABLE galerie ADD CONSTRAINT FK_9E7D159059027487 FOREIGN KEY (theme_id) REFERENCES theme (id)');
        $this->addSql('CREATE INDEX IDX_9E7D159059027487 ON galerie (theme_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE etudiant ADD temoignage_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE etudiant ADD CONSTRAINT FK_717E22E3F2410A1E FOREIGN KEY (temoignage_id) REFERENCES temoignage (id)');
        $this->addSql('CREATE INDEX IDX_717E22E3F2410A1E ON etudiant (temoignage_id)');
        $this->addSql('ALTER TABLE galerie DROP FOREIGN KEY FK_9E7D159059027487');
        $this->addSql('DROP INDEX IDX_9E7D159059027487 ON galerie');
        $this->addSql('ALTER TABLE galerie DROP theme_id');
    }
}
