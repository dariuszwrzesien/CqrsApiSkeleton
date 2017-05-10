<?php

use Phinx\Migration\AbstractMigration;

class Init extends AbstractMigration
{
    public function change()
    {
        $this->createUserTable();
        $this->createProductTable();
        $this->createCategoryTable();
    }

    private function createUserTable()
    {

    }
}
