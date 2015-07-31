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

  /**
   * @Column(name="last_name", type="string")
   */
  private $last_name;

  /**
  * @Column(name="login", type="string")
  **/
  private $login;

  /**
  * @Column(name="password", type="string")
  **/
  private $password;

  /**
  * @Column(name="facebook_id", type="integer")
  **/
  private $facebook_id;

  /**
  * @Column(name="date_birth", type="date_birth")
  **/
  private $date_birth;

  /**
  * @Column(name="active", type="tyint")
  **/
  private $active;

  public function getId() {
    return $this->id;
  }

  public function getName() {
    return $this->name;
  }

  public function setName($name) {
    $this->name = $name;
  }

  public function setLastName($last_name) {
    $this->last_name = $last_name;
  }

  public function setLogin($login) {
    $this->login = $login;
  }

  public function setPassword($password) {
    $this->password = $password;
  }

  public function setFacebookId($facebook_id) {
    $this->facebook_id = $facebook_id;
  }

  public function setDateBirth($date_birth) {
    $this->date_birth = $date_birth;
  }

  public function setActive($active) {
    $this->active = $active;
  }

}