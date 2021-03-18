<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210318190222 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE client RENAME COLUMN born_at TO dob');
        $this->addSql('ALTER TABLE employee RENAME COLUMN born_at TO dob');
        $this->addSql('ALTER TABLE employee RENAME COLUMN telephone_number TO phone_number');
        $this->addSql('ALTER TABLE ticket RENAME COLUMN sell_at TO sold_at');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE client RENAME COLUMN dob TO born_at');
        $this->addSql('ALTER TABLE employee RENAME COLUMN dob TO born_at');
        $this->addSql('ALTER TABLE employee RENAME COLUMN phone_number TO telephone_number');
        $this->addSql('ALTER TABLE ticket RENAME COLUMN sold_at TO sell_at');
    }
}
