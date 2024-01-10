<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240110111331 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE armes (id INT AUTO_INCREMENT NOT NULL, categorie_id INT NOT NULL, nom VARCHAR(255) NOT NULL, INDEX IDX_32CF26E0BCF5E72D (categorie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE categories (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE composants (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE degats (id INT AUTO_INCREMENT NOT NULL, armes_id INT NOT NULL, partieducorps_id INT NOT NULL, INDEX IDX_1ECEE60B7A649A7 (armes_id), INDEX IDX_1ECEE60B333C8DCF (partieducorps_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE partiedu_corps (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, multiplicateur DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `rank` (id INT AUTO_INCREMENT NOT NULL, num INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ttk (id INT AUTO_INCREMENT NOT NULL, timetokill DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE armes ADD CONSTRAINT FK_32CF26E0BCF5E72D FOREIGN KEY (categorie_id) REFERENCES categories (id)');
        $this->addSql('ALTER TABLE degats ADD CONSTRAINT FK_1ECEE60B7A649A7 FOREIGN KEY (armes_id) REFERENCES armes (id)');
        $this->addSql('ALTER TABLE degats ADD CONSTRAINT FK_1ECEE60B333C8DCF FOREIGN KEY (partieducorps_id) REFERENCES partiedu_corps (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE armes DROP FOREIGN KEY FK_32CF26E0BCF5E72D');
        $this->addSql('ALTER TABLE degats DROP FOREIGN KEY FK_1ECEE60B7A649A7');
        $this->addSql('ALTER TABLE degats DROP FOREIGN KEY FK_1ECEE60B333C8DCF');
        $this->addSql('DROP TABLE armes');
        $this->addSql('DROP TABLE categories');
        $this->addSql('DROP TABLE composants');
        $this->addSql('DROP TABLE degats');
        $this->addSql('DROP TABLE partiedu_corps');
        $this->addSql('DROP TABLE `rank`');
        $this->addSql('DROP TABLE ttk');
    }
}
