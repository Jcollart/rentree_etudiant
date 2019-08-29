<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190826085517 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE equipe_formulaire (equipe_id INT NOT NULL, formulaire_id INT NOT NULL, INDEX IDX_71EE5B596D861B89 (equipe_id), INDEX IDX_71EE5B595053569B (formulaire_id), PRIMARY KEY(equipe_id, formulaire_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE etudiant_formulaire (etudiant_id INT NOT NULL, formulaire_id INT NOT NULL, INDEX IDX_95726ED2DDEAB1A3 (etudiant_id), INDEX IDX_95726ED25053569B (formulaire_id), PRIMARY KEY(etudiant_id, formulaire_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE formulaire_etudiant (formulaire_id INT NOT NULL, etudiant_id INT NOT NULL, INDEX IDX_6035DD585053569B (formulaire_id), INDEX IDX_6035DD58DDEAB1A3 (etudiant_id), PRIMARY KEY(formulaire_id, etudiant_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE equipe_formulaire ADD CONSTRAINT FK_71EE5B596D861B89 FOREIGN KEY (equipe_id) REFERENCES equipe (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE equipe_formulaire ADD CONSTRAINT FK_71EE5B595053569B FOREIGN KEY (formulaire_id) REFERENCES formulaire (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE etudiant_formulaire ADD CONSTRAINT FK_95726ED2DDEAB1A3 FOREIGN KEY (etudiant_id) REFERENCES etudiant (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE etudiant_formulaire ADD CONSTRAINT FK_95726ED25053569B FOREIGN KEY (formulaire_id) REFERENCES formulaire (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE formulaire_etudiant ADD CONSTRAINT FK_6035DD585053569B FOREIGN KEY (formulaire_id) REFERENCES formulaire (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE formulaire_etudiant ADD CONSTRAINT FK_6035DD58DDEAB1A3 FOREIGN KEY (etudiant_id) REFERENCES etudiant (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE equipe_formulaire');
        $this->addSql('DROP TABLE etudiant_formulaire');
        $this->addSql('DROP TABLE formulaire_etudiant');
    }
}
