<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191121080048 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE origine (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE passion (id INT AUTO_INCREMENT NOT NULL, mes_activites_sportives VARCHAR(255) NOT NULL, mes_activites_naturelles VARCHAR(255) NOT NULL, mes_activites_artistiques VARCHAR(255) NOT NULL, mes_activites_cerebrales VARCHAR(255) NOT NULL, mes_divertissements VARCHAR(255) NOT NULL, ses_activites_sportives VARCHAR(255) NOT NULL, ses_activites_naturelles VARCHAR(255) NOT NULL, ses_activites_artistiques VARCHAR(255) NOT NULL, ses_activites_cerebrales VARCHAR(255) NOT NULL, ses_divertissements VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE personnalite (id INT AUTO_INCREMENT NOT NULL, mon_niveau_etude VARCHAR(255) NOT NULL, mon_job VARCHAR(255) NOT NULL, mon_caractere VARCHAR(255) NOT NULL, son_niveau_etude VARCHAR(255) NOT NULL, son_caractere VARCHAR(255) NOT NULL, mes_convictions_spirituelles VARCHAR(255) NOT NULL, mes_petites_addictions VARCHAR(255) NOT NULL, ses_convictions_spirituelles VARCHAR(255) NOT NULL, ses_petites_addictions VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE physique (id INT AUTO_INCREMENT NOT NULL, ma_taille VARCHAR(255) NOT NULL, ma_silhouette VARCHAR(255) NOT NULL, mes_cheveux VARCHAR(255) NOT NULL, mes_yeux VARCHAR(255) NOT NULL, mes_signes_particuliers VARCHAR(255) NOT NULL, mon_style VARCHAR(255) NOT NULL, sa_taille VARCHAR(255) NOT NULL, sa_silhouette VARCHAR(255) NOT NULL, ses_cheveux VARCHAR(255) NOT NULL, ses_yeux VARCHAR(255) NOT NULL, ses_signes_particuliers VARCHAR(255) NOT NULL, ses_styles VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reglage (id INT AUTO_INCREMENT NOT NULL, perso INT NOT NULL, physique INT NOT NULL, personnalite INT NOT NULL, geographie INT NOT NULL, scolarite INT NOT NULL, passions INT NOT NULL, telephone TINYINT(1) DEFAULT NULL, email TINYINT(1) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE situation (id INT AUTO_INCREMENT NOT NULL, mon_sexe VARCHAR(255) NOT NULL, mon_age INT NOT NULL, mon_pays VARCHAR(255) NOT NULL, mon_departement VARCHAR(255) NOT NULL, ma_ville VARCHAR(255) NOT NULL, mon_telephone VARCHAR(255) NOT NULL, mes_enfants VARCHAR(255) NOT NULL, mes_origines VARCHAR(255) NOT NULL, son_sexe VARCHAR(255) NOT NULL, son_age INT NOT NULL, son_pays VARCHAR(255) NOT NULL, ses_departements VARCHAR(255) NOT NULL, ses_enfants VARCHAR(255) NOT NULL, ses_origines VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, situation_id INT DEFAULT NULL, physique_id INT DEFAULT NULL, personnalite_id INT DEFAULT NULL, passion_id INT DEFAULT NULL, reglage_id INT DEFAULT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, roles JSON NOT NULL, user_name VARCHAR(255) NOT NULL, is_active TINYINT(1) NOT NULL, INDEX IDX_8D93D6493408E8AF (situation_id), INDEX IDX_8D93D64953D0E798 (physique_id), INDEX IDX_8D93D6492E282BF5 (personnalite_id), INDEX IDX_8D93D649D7E406D0 (passion_id), INDEX IDX_8D93D649ECB81ABA (reglage_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6493408E8AF FOREIGN KEY (situation_id) REFERENCES situation (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D64953D0E798 FOREIGN KEY (physique_id) REFERENCES physique (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6492E282BF5 FOREIGN KEY (personnalite_id) REFERENCES personnalite (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649D7E406D0 FOREIGN KEY (passion_id) REFERENCES passion (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649ECB81ABA FOREIGN KEY (reglage_id) REFERENCES reglage (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649D7E406D0');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6492E282BF5');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D64953D0E798');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649ECB81ABA');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6493408E8AF');
        $this->addSql('DROP TABLE origine');
        $this->addSql('DROP TABLE passion');
        $this->addSql('DROP TABLE personnalite');
        $this->addSql('DROP TABLE physique');
        $this->addSql('DROP TABLE reglage');
        $this->addSql('DROP TABLE situation');
        $this->addSql('DROP TABLE user');
    }
}
