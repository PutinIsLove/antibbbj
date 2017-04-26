<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * antibioplus
 *
 * @ORM\Table(name="antibioplus")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\antibioplusRepository")
 */
class antibioplus
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;
    
    /**
     * One Cart has One Customer.
     * @ORM\OneToOne(targetEntity="test", inversedBy="antibioplus")
     * @ORM\JoinColumn(name="test_id", referencedColumnName="id")
     */
    private $test;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return antibioplus
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set test
     *
     * @param \AppBundle\Entity\test $test
     *
     * @return antibioplus
     */
    public function setTest(\AppBundle\Entity\test $test = null)
    {
        $this->test = $test;

        return $this;
    }

    /**
     * Get test
     *
     * @return \AppBundle\Entity\test
     */
    public function getTest()
    {
        return $this->test;
    }
}
