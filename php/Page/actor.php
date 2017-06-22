<?php
  namespace php\Page;

  class Actor
  {
    $db = null;

    public function __construct() {
      $this->db = new Database(new MySQLConnection());
    }

    public function addActor($actor)
    {
      $query = 'INSERT INTO actors VALUES ($actor[0], $actor[1])';

      return $query;
    }

    public function removeActor($id)
    {
      $query = 'DELETE FROM actors WHERE id = $id';

      return $query;
    }

    public function updateActor($actor)
    {
      $query = 'UPDATE actors
                SET name = $actor[1], description = $actor[2]
                WHERE id = $actor[0]';

      return $query;
    }

    public function getActor($id)
    {
      $query = 'SELECT *
                FROM actors as A
                WHERE A.id = $id';

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
