<?php  
/*

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `login` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `facebook_id` int(11) NOT NULL,
  `date_birth` date NOT NULL,
  `active` tinyint(1) NOT NULL,
  `img` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

ALTER TABLE `users`
ADD PRIMARY KEY (`id`);

ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1;

*/

namespace Entities;

/**
 * @Entity @Table(name="user")
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
  * @Column(name="date_birth", type="date")
  **/
  private $date_birth;

  /**
  * @Column(name="active", type="integer")
  **/
  private $active;

  /**
  * @Column(name="img", type="string")
  **/
  private $img;


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

  public function getLogin() {
    return $this->login;
  }

  public function setLogin($login)
  {
    $this->login = $login;
  }

  public function getPassword()
  {
    return $this->password;
  }

  public function setPassword($password)
  {
    $this->password = $password;
  }

  public function getFacebookId()
  {
    return $this->facebook_id;
  }

  public function setFacebookId($facebook_id)
  {
    $this->facebook_id = $facebook_id;
  }

  public function getDateBirth()
  {
    return $this->date_birth;
  }

  public function setDateBirth($date_birth)
  {
    $this->date_birth = $date_birth;
  }

  public function getActive()
  {
    return $this->active;
  }

  public function setActive($active)
  {
    $this->active = $active;
  }

}