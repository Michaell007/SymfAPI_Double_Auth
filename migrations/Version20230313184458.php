<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230313184458 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP SEQUENCE vendeur_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE marchand_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE categories_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE products_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE produits_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE bon_de_commande_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE detail_products_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE stock_list_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE user_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE vente_id_seq CASCADE');
        $this->addSql('ALTER TABLE detail_products_products DROP CONSTRAINT fk_9441295b381ecf8');
        $this->addSql('ALTER TABLE detail_products_products DROP CONSTRAINT fk_9441295b6c8a81a9');
        $this->addSql('ALTER TABLE products_marchand DROP CONSTRAINT fk_885201256c8a81a9');
        $this->addSql('ALTER TABLE products_marchand DROP CONSTRAINT fk_885201253e6422b1');
        $this->addSql('ALTER TABLE detail_products_bon_de_commande DROP CONSTRAINT fk_5f880f4381ecf8');
        $this->addSql('ALTER TABLE detail_products_bon_de_commande DROP CONSTRAINT fk_5f880f4d29e677c');
        $this->addSql('ALTER TABLE vente_products DROP CONSTRAINT fk_13efb2be7dc7170a');
        $this->addSql('ALTER TABLE vente_products DROP CONSTRAINT fk_13efb2be6c8a81a9');
        $this->addSql('ALTER TABLE bon_de_commande DROP CONSTRAINT fk_2c3802e43e6422b1');
        $this->addSql('ALTER TABLE products DROP CONSTRAINT fk_b3ba5a5aa21214b7');
        $this->addSql('ALTER TABLE products DROP CONSTRAINT fk_b3ba5a5a4584665a');
        $this->addSql('ALTER TABLE produits DROP CONSTRAINT fk_be2ddf8ca21214b7');
        $this->addSql('DROP TABLE vendeur');
        $this->addSql('DROP TABLE marchand');
        $this->addSql('DROP TABLE detail_products_products');
        $this->addSql('DROP TABLE vente');
        $this->addSql('DROP TABLE categories');
        $this->addSql('DROP TABLE stock_list');
        $this->addSql('DROP TABLE products_marchand');
        $this->addSql('DROP TABLE detail_products_bon_de_commande');
        $this->addSql('DROP TABLE vente_products');
        $this->addSql('DROP TABLE bon_de_commande');
        $this->addSql('DROP TABLE detail_products');
        $this->addSql('DROP TABLE products');
        $this->addSql('DROP TABLE "user"');
        $this->addSql('DROP TABLE produits');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('CREATE SEQUENCE vendeur_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE marchand_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE categories_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE products_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE produits_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE bon_de_commande_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE detail_products_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE stock_list_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE user_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE vente_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE vendeur (id INT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, contact VARCHAR(20) NOT NULL, localisation VARCHAR(255) NOT NULL, photo VARCHAR(255) NOT NULL, status BOOLEAN NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE marchand (id INT NOT NULL, nom VARCHAR(255) NOT NULL, prenoms VARCHAR(255) NOT NULL, tel VARCHAR(255) NOT NULL, mot_de_passe VARCHAR(255) NOT NULL, localisation VARCHAR(255) NOT NULL, photo VARCHAR(255) NOT NULL, status BOOLEAN NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE detail_products_products (detail_products_id INT NOT NULL, products_id INT NOT NULL, PRIMARY KEY(detail_products_id, products_id))');
        $this->addSql('CREATE INDEX idx_9441295b6c8a81a9 ON detail_products_products (products_id)');
        $this->addSql('CREATE INDEX idx_9441295b381ecf8 ON detail_products_products (detail_products_id)');
        $this->addSql('CREATE TABLE vente (id INT NOT NULL, code_vente VARCHAR(255) NOT NULL, montant INT NOT NULL, commentaire VARCHAR(255) NOT NULL, creat_date TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, update_date TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE categories (id INT NOT NULL, nom VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE stock_list (id INT NOT NULL, quantite INT NOT NULL, unite INT NOT NULL, prix INT NOT NULL, total INT NOT NULL, type BOOLEAN NOT NULL, creat_date TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, update_date TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE products_marchand (products_id INT NOT NULL, marchand_id INT NOT NULL, PRIMARY KEY(products_id, marchand_id))');
        $this->addSql('CREATE INDEX idx_885201253e6422b1 ON products_marchand (marchand_id)');
        $this->addSql('CREATE INDEX idx_885201256c8a81a9 ON products_marchand (products_id)');
        $this->addSql('CREATE TABLE detail_products_bon_de_commande (detail_products_id INT NOT NULL, bon_de_commande_id INT NOT NULL, PRIMARY KEY(detail_products_id, bon_de_commande_id))');
        $this->addSql('CREATE INDEX idx_5f880f4d29e677c ON detail_products_bon_de_commande (bon_de_commande_id)');
        $this->addSql('CREATE INDEX idx_5f880f4381ecf8 ON detail_products_bon_de_commande (detail_products_id)');
        $this->addSql('CREATE TABLE vente_products (vente_id INT NOT NULL, products_id INT NOT NULL, PRIMARY KEY(vente_id, products_id))');
        $this->addSql('CREATE INDEX idx_13efb2be6c8a81a9 ON vente_products (products_id)');
        $this->addSql('CREATE INDEX idx_13efb2be7dc7170a ON vente_products (vente_id)');
        $this->addSql('CREATE TABLE bon_de_commande (id INT NOT NULL, marchand_id INT NOT NULL, reference_bdc VARCHAR(255) NOT NULL, montant INT NOT NULL, pourcentage INT NOT NULL, rabais INT DEFAULT NULL, creat_date TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, update_date INT NOT NULL, status BOOLEAN NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX idx_2c3802e43e6422b1 ON bon_de_commande (marchand_id)');
        $this->addSql('CREATE TABLE detail_products (id INT NOT NULL, quantite INT NOT NULL, prix INT NOT NULL, unite INT NOT NULL, total INT NOT NULL, creat_date TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, update_date TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE products (id INT NOT NULL, categories_id INT NOT NULL, product_id INT NOT NULL, nom VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, prix_min VARCHAR(20) NOT NULL, prix_max VARCHAR(20) NOT NULL, creat_date TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, update_date TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, status BOOLEAN NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX idx_b3ba5a5a4584665a ON products (product_id)');
        $this->addSql('CREATE INDEX idx_b3ba5a5aa21214b7 ON products (categories_id)');
        $this->addSql('CREATE TABLE "user" (id INT NOT NULL, username VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, prenoms VARCHAR(255) NOT NULL, tel VARCHAR(255) NOT NULL, pseudo VARCHAR(255) NOT NULL, avatar VARCHAR(255) DEFAULT NULL, localisation VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX uniq_8d93d649f85e0677 ON "user" (username)');
        $this->addSql('CREATE TABLE produits (id INT NOT NULL, categories_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, prix_minimum VARCHAR(255) DEFAULT NULL, prix_maximum INT NOT NULL, prix INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX idx_be2ddf8ca21214b7 ON produits (categories_id)');
        $this->addSql('ALTER TABLE detail_products_products ADD CONSTRAINT fk_9441295b381ecf8 FOREIGN KEY (detail_products_id) REFERENCES detail_products (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE detail_products_products ADD CONSTRAINT fk_9441295b6c8a81a9 FOREIGN KEY (products_id) REFERENCES products (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE products_marchand ADD CONSTRAINT fk_885201256c8a81a9 FOREIGN KEY (products_id) REFERENCES products (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE products_marchand ADD CONSTRAINT fk_885201253e6422b1 FOREIGN KEY (marchand_id) REFERENCES marchand (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE detail_products_bon_de_commande ADD CONSTRAINT fk_5f880f4381ecf8 FOREIGN KEY (detail_products_id) REFERENCES detail_products (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE detail_products_bon_de_commande ADD CONSTRAINT fk_5f880f4d29e677c FOREIGN KEY (bon_de_commande_id) REFERENCES bon_de_commande (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE vente_products ADD CONSTRAINT fk_13efb2be7dc7170a FOREIGN KEY (vente_id) REFERENCES vente (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE vente_products ADD CONSTRAINT fk_13efb2be6c8a81a9 FOREIGN KEY (products_id) REFERENCES products (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE bon_de_commande ADD CONSTRAINT fk_2c3802e43e6422b1 FOREIGN KEY (marchand_id) REFERENCES marchand (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE products ADD CONSTRAINT fk_b3ba5a5aa21214b7 FOREIGN KEY (categories_id) REFERENCES categories (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE products ADD CONSTRAINT fk_b3ba5a5a4584665a FOREIGN KEY (product_id) REFERENCES stock_list (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE produits ADD CONSTRAINT fk_be2ddf8ca21214b7 FOREIGN KEY (categories_id) REFERENCES categories (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }
}
