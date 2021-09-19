<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210901082404 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE client ADD name_client VARCHAR(255) NOT NULL, ADD mail_client VARCHAR(255) NOT NULL, ADD num_client VARCHAR(255) NOT NULL, ADD adress_client VARCHAR(255) NOT NULL, DROP nameClient, DROP mailClient, DROP numClient, DROP adressClient');
        $this->addSql('ALTER TABLE project ADD label_project VARCHAR(255) NOT NULL, ADD budget_project VARCHAR(255) NOT NULL, ADD deadline_project DATE NOT NULL, ADD responsible_project VARCHAR(255) NOT NULL, ADD created_at DATE NOT NULL, ADD updated DATE DEFAULT NULL, DROP labelProject, DROP budgetProject, DROP deadlineProject, DROP responsibleProject, DROP createdAt, DROP updateAt, CHANGE description description VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE user ADD name_user VARCHAR(255) NOT NULL, ADD mail_user VARCHAR(255) NOT NULL, ADD mdp_user VARCHAR(255) NOT NULL, ADD tel_user VARCHAR(255) NOT NULL, ADD role_user VARCHAR(255) NOT NULL, DROP nameUser, DROP mailUser, DROP mdpUser, DROP telUser, DROP roleUser');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE client ADD nameClient VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, ADD mailClient VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, ADD numClient VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, ADD adressClient VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, DROP name_client, DROP mail_client, DROP num_client, DROP adress_client');
        $this->addSql('ALTER TABLE project ADD labelProject VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, ADD budgetProject VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, ADD deadlineProject DATE NOT NULL, ADD responsibleProject VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, ADD createdAt DATE NOT NULL, ADD updateAt DATE NOT NULL, DROP label_project, DROP budget_project, DROP deadline_project, DROP responsible_project, DROP created_at, DROP updated, CHANGE description description VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`');
        $this->addSql('ALTER TABLE `user` ADD nameUser VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, ADD mailUser VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, ADD mdpUser VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, ADD telUser VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, ADD roleUser VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, DROP name_user, DROP mail_user, DROP mdp_user, DROP tel_user, DROP role_user');
    }
}
