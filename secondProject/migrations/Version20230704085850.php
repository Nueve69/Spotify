<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230704085850 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE music_music (music_source INT NOT NULL, music_target INT NOT NULL, INDEX IDX_AADB5982CA52BC8A (music_source), INDEX IDX_AADB5982D3B7EC05 (music_target), PRIMARY KEY(music_source, music_target)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE music_music ADD CONSTRAINT FK_AADB5982CA52BC8A FOREIGN KEY (music_source) REFERENCES music (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE music_music ADD CONSTRAINT FK_AADB5982D3B7EC05 FOREIGN KEY (music_target) REFERENCES music (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE music_music DROP FOREIGN KEY FK_AADB5982CA52BC8A');
        $this->addSql('ALTER TABLE music_music DROP FOREIGN KEY FK_AADB5982D3B7EC05');
        $this->addSql('DROP TABLE music_music');
    }
}
