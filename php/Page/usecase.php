<?php
  namespace php\Page;

  class UseCase
  {
    $db = null;

    public function __construct() {
      $this->db = new Database(new MySQLConnection());
    }

    public function addUseCase($uc)
    {
      $query = 'INSERT INTO usecase VALUES ($uc[0], $uc[1], $uc[2], $uc[3], $uc[4], $uc[5], $uc[6], $uc[7], $uc[8])';

      return $query;
    }

    public function removeUseCase($id)
    {
      $query = 'DELETE FROM usecase WHERE  usecaseid = $id';

      return $query;
    }

    public function updateUseCase($uc)
    {
      $query = 'UPDATE usecase
                SET name = $uc[1], description = $uc[2], precondition = $uc[3], postcondition = $uc[4],
                  mainscenario = $uc[5], alternativescenario = $uc[6], generalization = $uc[7], parent = $uc[8]
                WHERE usecaseid = $uc[0]';

      return $query;
    }

    public function getUseCase($id)
    {
      $query = 'SELECT *
                FROM usecase as UC
                WHERE UC.usecaseid = $id';

      return $query;
    }

    public function getForm()
    {
      $form = [
        'Name' => 'text',
      	'Description' => 'textarea',
      	'Precondition' => 'textarea',
      	'Postcondition' => 'textarea',
      	'Mainscenario' => 'textarea',
      	'Alternativescenario' => 'textarea'
        'Generalization' => 'textarea'
        'Parent' => 'select'
      ];

      return $form;
    }

    public function getTable($column)
    {
      $query = 'SELECT ';

      if (in_array('usecaseid', $column))
        $query .= 'usecaseid';

      if (in_array('name', $column))
        $query .= ', name';

      if (in_array('description', $column))
        $query .= 'description';

      if (in_array('precondiction', $column))
        $query .= ', precondition';

      if (in_array('postcondiction', $column))
        $query .= ', postcondition';

      if (in_array('mainscenario', $column))
        $query .= ', mainscenario';

      if (in_array('alternativescenario', $column))
        $query .= 'alternativescenario';

      if (in_array('generalization', $column))
        $query .= ', precondition';

      if (in_array('parent', $column))
        $query .= ', parent';

      $query .= ' FROM usecase';

      return $query;
    }

  }
?>
