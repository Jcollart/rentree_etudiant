<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190822133415 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE formulaire_equipe (formulaire_id INT NOT NULL, equipe_id INT NOT NULL, INDEX IDX_F0B20715053569B (formulaire_id), INDEX IDX_F0B20716D861B89 (equipe_id), PRIMARY KEY(formulaire_id, equipe_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE formulaire_equipe ADD CONSTRAINT FK_F0B20715053569B FOREIGN KEY (formulaire_id) REFERENCES formulaire (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE formulaire_equipe ADD CONSTRAINT FK_F0B20716D861B89 FOREIGN KEY (equipe_id) REFERENCES equipe (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE formulaire_equipe');
    }
}
