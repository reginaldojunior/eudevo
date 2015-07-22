<?php  
namespace Entities;

/**
 * @Entity @Table(name="users")
 */
class User {  
  /**
   * @Id @GeneratedValue
   * @Column(name="id", type="integer")
   */
  private $id;

  /**
   * @Column(name="name", type="string")
   */
  private $name;

  public function getId() {
    return $this->id;
  }

  public function getName() {
    return $this->name;
  }

  public function setName($name) {
    $this->name = $name;
  }

}