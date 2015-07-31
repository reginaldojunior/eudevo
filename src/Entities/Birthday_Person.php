<?php  
namespace Entities;

/**
 * @Entity @Table(name="users")
 */
class Birthday_Person {  
  /**
   * @Id @GeneratedValue
   * @Column(name="id", type="integer")
   */
  private $id;

  /**
   * @Column(name="name", type="string")
   */
  private $name;

  /**
   * @Column(name="last_name", type="string")
   */
  private $last_name;

  /**
  * @Column(name="date_birth", type="datetime")
  **/
  private $date_birth;

  /**
  * @Column(name="photo", type="string")
  **/
  private $photo;

  public function getId() 
  {
    return $this->id;
  }

  public function getName() 
  {
    return $this->name;
  }

  public function setName($name) 
  {
    $this->name = $name;
  }

  public function getLastName() 
  {
    return $this->last_name;
  }

  public function setLastName($last_name) 
  {
    $this->last_name = $last_name;
  }

  public function getDateBirth() 
  {
    return $this->date_birth;
  }

  public function setDateBirth($date_birth) 
  {
    $this->date_birth = $date_birth;
  }

  public function getPhoto() 
  {
    return $this->photo;
  }

  public function setPhoto($photo) 
  {
    $this->photo = $photo;
  }
}