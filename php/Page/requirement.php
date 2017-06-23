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
      $query = 'SELECT ';

      if (in_array('requirementid', $column))
        $query .= 'requirementid';

      if (in_array('description', $column))
        $query .= 'description';

      if (in_array('type', $column))
        $query .= ', type';

      if (in_array('importance', $column))
        $query .= ', importance';

      if (in_array('satisfied', $column))
        $query .= ', satisfied';

      if (in_array('parent', $column))
        $query .= ', parent';

      if (in_array('source', $column))
        $query .= ', source';

      $query .= ' FROM requirements';

      return $query;
    }

  }
?>
