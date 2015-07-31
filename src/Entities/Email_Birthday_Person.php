<?php  
namespace Entities;

/**
 * @Entity @Table(name="users")
 */
class Email_Birthday_Person {  
  /**
   * @Id @GeneratedValue
   * @Column(name="id", type="integer")
   */
  private $id;

  /**
   * @Column(name="id_birthday_person", type="integer")
   */
  private $id_birthday_person;

  /**
  * @Column(name="email", type="string")
  **/
  private $email;

  public function getId() 
  {
    return $this->id;
  }

  public function getIdBirthdayPerson() 
  {
    return $this->name;
  }

  public function getEmail() 
  {
    return $this->email;
  }

  public function setEmail($email) 
  {
    $this->email = $email;
  }
}