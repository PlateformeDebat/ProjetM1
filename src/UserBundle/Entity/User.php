<?php

namespace UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**

 * User
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Diane\UserBundle\Entity\UserRepository")
 */
class User extends BaseUser
{
    /**

     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     * @ORM\Column(name="username", type="string", length=10)
     */
    protected $age;

}