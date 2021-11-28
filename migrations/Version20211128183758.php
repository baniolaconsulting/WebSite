<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211128183758 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE compteutilisateur_qcm (compteutilisateur_id INT NOT NULL, qcm_id INT NOT NULL, INDEX IDX_46FDC97B87627F1E (compteutilisateur_id), INDEX IDX_46FDC97BFF6241A6 (qcm_id), PRIMARY KEY(compteutilisateur_id, qcm_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE compteutilisateur_qcm ADD CONSTRAINT FK_46FDC97B87627F1E FOREIGN KEY (compteutilisateur_id) REFERENCES compteutilisateur (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE compteutilisateur_qcm ADD CONSTRAINT FK_46FDC97BFF6241A6 FOREIGN KEY (qcm_id) REFERENCES qcm (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE compteutilisateur_qcm');
    }
}
