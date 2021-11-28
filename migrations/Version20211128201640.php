<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211128201640 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article ADD matriculeutilisateur_id INT DEFAULT NULL, ADD matriculemodele_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E6669A9B200 FOREIGN KEY (matriculeutilisateur_id) REFERENCES compteutilisateur (id)');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E6628F3986A FOREIGN KEY (matriculemodele_id) REFERENCES modele (id)');
        $this->addSql('CREATE INDEX IDX_23A0E6669A9B200 ON article (matriculeutilisateur_id)');
        $this->addSql('CREATE INDEX IDX_23A0E6628F3986A ON article (matriculemodele_id)');
        $this->addSql('ALTER TABLE avis ADD matriculemodele_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE avis ADD CONSTRAINT FK_8F91ABF028F3986A FOREIGN KEY (matriculemodele_id) REFERENCES modele (id)');
        $this->addSql('CREATE INDEX IDX_8F91ABF028F3986A ON avis (matriculemodele_id)');
        $this->addSql('ALTER TABLE choix ADD matriculequestion_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE choix ADD CONSTRAINT FK_4F488091D00B24A6 FOREIGN KEY (matriculequestion_id) REFERENCES question (id)');
        $this->addSql('CREATE INDEX IDX_4F488091D00B24A6 ON choix (matriculequestion_id)');
        $this->addSql('ALTER TABLE modele ADD matriculemarque_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE modele ADD CONSTRAINT FK_10028558CCC096D2 FOREIGN KEY (matriculemarque_id) REFERENCES marque (id)');
        $this->addSql('CREATE INDEX IDX_10028558CCC096D2 ON modele (matriculemarque_id)');
        $this->addSql('ALTER TABLE question ADD matriculeqcm_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE question ADD CONSTRAINT FK_B6F7494E711AF4C9 FOREIGN KEY (matriculeqcm_id) REFERENCES qcm (id)');
        $this->addSql('CREATE INDEX IDX_B6F7494E711AF4C9 ON question (matriculeqcm_id)');
        $this->addSql('ALTER TABLE reponsecorrecte ADD matriculequestion_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reponsecorrecte ADD CONSTRAINT FK_4EED9E71D00B24A6 FOREIGN KEY (matriculequestion_id) REFERENCES question (id)');
        $this->addSql('CREATE INDEX IDX_4EED9E71D00B24A6 ON reponsecorrecte (matriculequestion_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E6669A9B200');
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E6628F3986A');
        $this->addSql('DROP INDEX IDX_23A0E6669A9B200 ON article');
        $this->addSql('DROP INDEX IDX_23A0E6628F3986A ON article');
        $this->addSql('ALTER TABLE article DROP matriculeutilisateur_id, DROP matriculemodele_id');
        $this->addSql('ALTER TABLE avis DROP FOREIGN KEY FK_8F91ABF028F3986A');
        $this->addSql('DROP INDEX IDX_8F91ABF028F3986A ON avis');
        $this->addSql('ALTER TABLE avis DROP matriculemodele_id');
        $this->addSql('ALTER TABLE choix DROP FOREIGN KEY FK_4F488091D00B24A6');
        $this->addSql('DROP INDEX IDX_4F488091D00B24A6 ON choix');
        $this->addSql('ALTER TABLE choix DROP matriculequestion_id');
        $this->addSql('ALTER TABLE modele DROP FOREIGN KEY FK_10028558CCC096D2');
        $this->addSql('DROP INDEX IDX_10028558CCC096D2 ON modele');
        $this->addSql('ALTER TABLE modele DROP matriculemarque_id');
        $this->addSql('ALTER TABLE question DROP FOREIGN KEY FK_B6F7494E711AF4C9');
        $this->addSql('DROP INDEX IDX_B6F7494E711AF4C9 ON question');
        $this->addSql('ALTER TABLE question DROP matriculeqcm_id');
        $this->addSql('ALTER TABLE reponsecorrecte DROP FOREIGN KEY FK_4EED9E71D00B24A6');
        $this->addSql('DROP INDEX IDX_4EED9E71D00B24A6 ON reponsecorrecte');
        $this->addSql('ALTER TABLE reponsecorrecte DROP matriculequestion_id');
    }
}
