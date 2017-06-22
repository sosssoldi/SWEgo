<?php
  namespace php\Page;

  class Requirements
  {
    $db = null;

    public function __construct() {
      $this->db = new Database(new MySQLConnection());
    }

    public function addRequirements($req)
    {
      $query = 'INSERT INTO requirements VALUES ($req[0], $req[1], $req[2], $req[3], $req[4], $req[5], $req[6])';

      return $query;
    }

    public function removeRequirements($id)
    {
      $query = 'DELETE FROM requirements WHERE  requirementid = $id';

      return $query;
    }

    public function updateRequirements($req)
    {
      $query = 'UPDATE requirements
                SET description = $req[1], type = $req[2], importance = $req[3], satisfied = $req[4], parent = $req[5], source = $req[6]
                WHERE requirementid = $req[0]';

      return $query;
    }

    public function getRequirements($id)
    {
      $query = 'SELECT *
                FROM requirements as R
                WHERE R.requirementid = $id';

      return $query;
    }

    public function getForm()
    {
      $form = [
        'Description' => 'textarea',
      	'Type' => 'radio',
      	'Importance' => 'radio',
      	'Satisfied' => 'radio',
      	'Parent' => 'select',
      	'Source' => 'select'
      ];

      return $form;
    }

    public function getTable($column)
    {
      $query = ''
    }

  }
?>
