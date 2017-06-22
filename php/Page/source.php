<?php
  namespace php\Page;

  class Source
  {
    $db = null;

    public function __construct() {
      $this->db = new Database(new MySQLConnection());
    }

    public function addActor($source)
    {
      $query = 'INSERT INTO sources VALUES ($source[0], $source[1])';

      return $query;
    }

    public function removeActor($id)
    {
      $query = 'DELETE FROM sources WHERE  id = $id';

      return $query;
    }

    public function updateActor($source)
    {
      $query = 'UPDATE sources
                SET name = $source[1], description = $source[2]
                WHERE id = $source[0]';

      return $query;
    }

    public function getActor($id)
    {
      $query = 'SELECT *
                FROM sources as S
                WHERE S.id = $id';

      return $query;
    }

    public function getForm()
    {
      $form = [
        'Name' => 'text',
      	'Description' => 'textarea',
      ];

      return $form;
    }

  }
?>
