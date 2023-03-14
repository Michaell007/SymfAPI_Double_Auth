<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230314022831 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE commande_post_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE commande_post (id INT NOT NULL, commande_id INT DEFAULT NULL, post_id INT DEFAULT NULL, quantite INT NOT NULL, prix INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_31E66D6E82EA2E54 ON commande_post (commande_id)');
        $this->addSql('CREATE INDEX IDX_31E66D6E4B89032C ON commande_post (post_id)');
        $this->addSql('ALTER TABLE commande_post ADD CONSTRAINT FK_31E66D6E82EA2E54 FOREIGN KEY (commande_id) REFERENCES commande (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE commande_post ADD CONSTRAINT FK_31E66D6E4B89032C FOREIGN KEY (post_id) REFERENCES post (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE commande_post_id_seq CASCADE');
        $this->addSql('ALTER TABLE commande_post DROP CONSTRAINT FK_31E66D6E82EA2E54');
        $this->addSql('ALTER TABLE commande_post DROP CONSTRAINT FK_31E66D6E4B89032C');
        $this->addSql('DROP TABLE commande_post');
    }
}
