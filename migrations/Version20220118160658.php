<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220118160658 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
       // $this->addSql('ALTER TABLE image DROP FOREIGN KEY FK_C53D045F7294869C');
        $this->addSql('CREATE TABLE annonce (id INT AUTO_INCREMENT NOT NULL, modele_id INT DEFAULT NULL, users_id INT DEFAULT NULL, matriculeannonce VARCHAR(255) NOT NULL, titre VARCHAR(255) DEFAULT NULL, prix DOUBLE PRECISION DEFAULT NULL, date DATE DEFAULT NULL, contenu VARCHAR(255) NOT NULL, INDEX IDX_F65593E5AC14B70A (modele_id), INDEX IDX_F65593E567B3B43D (users_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE annonce ADD CONSTRAINT FK_F65593E5AC14B70A FOREIGN KEY (modele_id) REFERENCES modele (id)');
        $this->addSql('ALTER TABLE annonce ADD CONSTRAINT FK_F65593E567B3B43D FOREIGN KEY (users_id) REFERENCES compteutilisateur (id)');
        $this->addSql('DROP TABLE article');
       // $this->addSql('DROP INDEX IDX_C53D045F7294869C ON image');
        $this->addSql('ALTER TABLE image CHANGE article_id annonce_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE image ADD CONSTRAINT FK_C53D045F8805AB2F FOREIGN KEY (annonce_id) REFERENCES annonce (id)');
        $this->addSql('CREATE INDEX IDX_C53D045F8805AB2F ON image (annonce_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE image DROP FOREIGN KEY FK_C53D045F8805AB2F');
        $this->addSql('CREATE TABLE article (id INT AUTO_INCREMENT NOT NULL, matriculeutilisateur_id INT DEFAULT NULL, matriculemodele_id INT DEFAULT NULL, matriculearticle VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, prix DOUBLE PRECISION NOT NULL, date DATE NOT NULL, titre VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, contenu VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_23A0E6669A9B200 (matriculeutilisateur_id), INDEX IDX_23A0E6628F3986A (matriculemodele_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E6628F3986A FOREIGN KEY (matriculemodele_id) REFERENCES modele (id)');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E6669A9B200 FOREIGN KEY (matriculeutilisateur_id) REFERENCES compteutilisateur (id)');
        $this->addSql('DROP TABLE annonce');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP INDEX IDX_C53D045F8805AB2F ON image');
        $this->addSql('ALTER TABLE image CHANGE annonce_id article_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE image ADD CONSTRAINT FK_C53D045F7294869C FOREIGN KEY (article_id) REFERENCES article (id)');
        $this->addSql('CREATE INDEX IDX_C53D045F7294869C ON image (article_id)');
    }
}
