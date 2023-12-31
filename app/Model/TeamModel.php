<?php

namespace App\Model;

use PDO;
use PDOException;

class TeamModel extends Crud
{
    public function readTeams()
    {
        return $this->read('team');
    }
    public function addTeam($data)
    {
        $tableName = 'team';
        
        $this->create($tableName, $data);
    }
}
