<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190910173011 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE Gearlocs (Id INT AUTO_INCREMENT NOT NULL, Name VARCHAR(255) NOT NULL, Health INT NOT NULL, Dexterity INT NOT NULL, Attack INT NOT NULL, Defense INT NOT NULL, Ability1 VARCHAR(255) DEFAULT NULL, Ability2 VARCHAR(255) DEFAULT NULL, Ability3 VARCHAR(255) DEFAULT NULL, Ability4 VARCHAR(255) DEFAULT NULL, Ability5 VARCHAR(255) DEFAULT NULL, Ability6 VARCHAR(255) DEFAULT NULL, Ability7 VARCHAR(255) DEFAULT NULL, Ability8 VARCHAR(255) DEFAULT NULL, Ability9 VARCHAR(255) DEFAULT NULL, Ability10 VARCHAR(255) DEFAULT NULL, Ability11 VARCHAR(255) DEFAULT NULL, Ability12 VARCHAR(255) DEFAULT NULL, Ability13 VARCHAR(255) DEFAULT NULL, Ability14 VARCHAR(255) DEFAULT NULL, Ability15 VARCHAR(255) DEFAULT NULL, Ability16 VARCHAR(255) DEFAULT NULL, Loot1 VARCHAR(255) DEFAULT NULL, Loot2 VARCHAR(255) DEFAULT NULL, Loot3 VARCHAR(255) DEFAULT NULL, Loot4 VARCHAR(255) DEFAULT NULL, PRIMARY KEY(Id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE MonthlyChallenges (Id INT AUTO_INCREMENT NOT NULL, Name VARCHAR(255) NOT NULL, Description VARCHAR(255) NOT NULL, ChallengeSet VARCHAR(255) NOT NULL, ChallengeType VARCHAR(255) NOT NULL, MonthlyDate DATE NOT NULL, EncounterListId INT DEFAULT NULL, INDEX fk_encounters (EncounterListId), PRIMARY KEY(Id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE Cards (Id INT AUTO_INCREMENT NOT NULL, Name VARCHAR(255) NOT NULL, CardSet VARCHAR(255) NOT NULL, CardNum INT NOT NULL, CardType VARCHAR(255) NOT NULL, PRIMARY KEY(Id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE EncounterLists (Id INT AUTO_INCREMENT NOT NULL, Name VARCHAR(255) NOT NULL, Day10Id INT DEFAULT NULL, Day11Id INT DEFAULT NULL, Day12Id INT DEFAULT NULL, Day13Id INT DEFAULT NULL, Day1Id INT DEFAULT NULL, Day2Id INT DEFAULT NULL, Day3Id INT DEFAULT NULL, Day4Id INT DEFAULT NULL, Day5Id INT DEFAULT NULL, Day6Id INT DEFAULT NULL, Day7Id INT DEFAULT NULL, Day8Id INT DEFAULT NULL, Day9Id INT DEFAULT NULL, TyrantId INT DEFAULT NULL, INDEX fk_day5Id (Day5Id), INDEX fk_day7Id (Day7Id), INDEX fk_day10Id (Day10Id), INDEX fk_day12Id (Day12Id), INDEX fk_day1Id (Day1Id), INDEX fk_day8Id (Day8Id), INDEX fk_day3Id (Day3Id), INDEX fk_day4Id (Day4Id), INDEX fk_day6Id (Day6Id), INDEX fk_day9Id (Day9Id), INDEX fk_day11Id (Day11Id), INDEX fk_tyrantId (TyrantId), INDEX fk_day13Id (Day13Id), INDEX fk_day2Id (Day2Id), PRIMARY KEY(Id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE BATs (Id INT AUTO_INCREMENT NOT NULL, Name VARCHAR(255) NOT NULL, Days INT NOT NULL, Progress INT NOT NULL, Health INT NOT NULL, Initiative INT NOT NULL, Attack INT NOT NULL, Defense INT NOT NULL, TyrantDie1 VARCHAR(255) DEFAULT NULL, TyrantDie2 VARCHAR(255) DEFAULT NULL, TyrantDie3 VARCHAR(255) DEFAULT NULL, `Range` INT NOT NULL, Target INT NOT NULL, Skull INT NOT NULL, Skills1 VARCHAR(255) DEFAULT NULL, Skills2 VARCHAR(255) DEFAULT NULL, Skills3 VARCHAR(255) DEFAULT NULL, Baddie1 VARCHAR(255) DEFAULT NULL, Baddie2 VARCHAR(255) DEFAULT NULL, Baddie3 VARCHAR(255) DEFAULT NULL, PRIMARY KEY(Id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE card (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, cardset VARCHAR(255) NOT NULL, cardnum INT NOT NULL, cardtype VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE Tyrants (Id INT AUTO_INCREMENT NOT NULL, Name VARCHAR(255) NOT NULL, Days INT NOT NULL, Progress INT NOT NULL, PRIMARY KEY(Id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE MonthlyChallenges ADD CONSTRAINT FK_3A9734A423502FFF FOREIGN KEY (EncounterListId) REFERENCES EncounterLists (Id)');
        $this->addSql('ALTER TABLE EncounterLists ADD CONSTRAINT FK_402EE9071DDAFB0C FOREIGN KEY (Day10Id) REFERENCES Cards (Id)');
        $this->addSql('ALTER TABLE EncounterLists ADD CONSTRAINT FK_402EE9071C18913B FOREIGN KEY (Day11Id) REFERENCES Cards (Id)');
        $this->addSql('ALTER TABLE EncounterLists ADD CONSTRAINT FK_402EE9071E5E2F62 FOREIGN KEY (Day12Id) REFERENCES Cards (Id)');
        $this->addSql('ALTER TABLE EncounterLists ADD CONSTRAINT FK_402EE9071F9C4555 FOREIGN KEY (Day13Id) REFERENCES Cards (Id)');
        $this->addSql('ALTER TABLE EncounterLists ADD CONSTRAINT FK_402EE907D9A38698 FOREIGN KEY (Day1Id) REFERENCES Cards (Id)');
        $this->addSql('ALTER TABLE EncounterLists ADD CONSTRAINT FK_402EE907DBE538C1 FOREIGN KEY (Day2Id) REFERENCES Cards (Id)');
        $this->addSql('ALTER TABLE EncounterLists ADD CONSTRAINT FK_402EE907DA2752F6 FOREIGN KEY (Day3Id) REFERENCES Cards (Id)');
        $this->addSql('ALTER TABLE EncounterLists ADD CONSTRAINT FK_402EE907DF684473 FOREIGN KEY (Day4Id) REFERENCES Cards (Id)');
        $this->addSql('ALTER TABLE EncounterLists ADD CONSTRAINT FK_402EE907DEAA2E44 FOREIGN KEY (Day5Id) REFERENCES Cards (Id)');
        $this->addSql('ALTER TABLE EncounterLists ADD CONSTRAINT FK_402EE907DCEC901D FOREIGN KEY (Day6Id) REFERENCES Cards (Id)');
        $this->addSql('ALTER TABLE EncounterLists ADD CONSTRAINT FK_402EE907DD2EFA2A FOREIGN KEY (Day7Id) REFERENCES Cards (Id)');
        $this->addSql('ALTER TABLE EncounterLists ADD CONSTRAINT FK_402EE907D672BD17 FOREIGN KEY (Day8Id) REFERENCES Cards (Id)');
        $this->addSql('ALTER TABLE EncounterLists ADD CONSTRAINT FK_402EE907D7B0D720 FOREIGN KEY (Day9Id) REFERENCES Cards (Id)');
        $this->addSql('ALTER TABLE EncounterLists ADD CONSTRAINT FK_402EE907CC63542B FOREIGN KEY (TyrantId) REFERENCES Tyrants (Id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE EncounterLists DROP FOREIGN KEY FK_402EE9071DDAFB0C');
        $this->addSql('ALTER TABLE EncounterLists DROP FOREIGN KEY FK_402EE9071C18913B');
        $this->addSql('ALTER TABLE EncounterLists DROP FOREIGN KEY FK_402EE9071E5E2F62');
        $this->addSql('ALTER TABLE EncounterLists DROP FOREIGN KEY FK_402EE9071F9C4555');
        $this->addSql('ALTER TABLE EncounterLists DROP FOREIGN KEY FK_402EE907D9A38698');
        $this->addSql('ALTER TABLE EncounterLists DROP FOREIGN KEY FK_402EE907DBE538C1');
        $this->addSql('ALTER TABLE EncounterLists DROP FOREIGN KEY FK_402EE907DA2752F6');
        $this->addSql('ALTER TABLE EncounterLists DROP FOREIGN KEY FK_402EE907DF684473');
        $this->addSql('ALTER TABLE EncounterLists DROP FOREIGN KEY FK_402EE907DEAA2E44');
        $this->addSql('ALTER TABLE EncounterLists DROP FOREIGN KEY FK_402EE907DCEC901D');
        $this->addSql('ALTER TABLE EncounterLists DROP FOREIGN KEY FK_402EE907DD2EFA2A');
        $this->addSql('ALTER TABLE EncounterLists DROP FOREIGN KEY FK_402EE907D672BD17');
        $this->addSql('ALTER TABLE EncounterLists DROP FOREIGN KEY FK_402EE907D7B0D720');
        $this->addSql('ALTER TABLE MonthlyChallenges DROP FOREIGN KEY FK_3A9734A423502FFF');
        $this->addSql('ALTER TABLE EncounterLists DROP FOREIGN KEY FK_402EE907CC63542B');
        $this->addSql('DROP TABLE Gearlocs');
        $this->addSql('DROP TABLE MonthlyChallenges');
        $this->addSql('DROP TABLE Cards');
        $this->addSql('DROP TABLE EncounterLists');
        $this->addSql('DROP TABLE BATs');
        $this->addSql('DROP TABLE card');
        $this->addSql('DROP TABLE Tyrants');
    }
}
