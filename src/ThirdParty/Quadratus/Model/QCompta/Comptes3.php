<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta;

/**
 * Comptes3.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class Comptes3 {

    /**
     * Code section.
     *
     * @var string
     */
    private $codeSection;

    /**
     * Numero compte.
     *
     * @var string
     */
    private $numeroCompte;

    /**
     * Pourcent repart.
     *
     * @var float
     */
    private $pourcentRepart;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code section.
     *
     * @return string Returns the code section.
     */
    public function getCodeSection() {
        return $this->codeSection;
    }

    /**
     * Get the numero compte.
     *
     * @return string Returns the numero compte.
     */
    public function getNumeroCompte() {
        return $this->numeroCompte;
    }

    /**
     * Get the pourcent repart.
     *
     * @return float Returns the pourcent repart.
     */
    public function getPourcentRepart() {
        return $this->pourcentRepart;
    }

    /**
     * Set the code section.
     *
     * @param string $codeSection The code section.
     * @return Comptes3 Returns this Comptes3.
     */
    public function setCodeSection($codeSection) {
        $this->codeSection = $codeSection;
        return $this;
    }

    /**
     * Set the numero compte.
     *
     * @param string $numeroCompte The numero compte.
     * @return Comptes3 Returns this Comptes3.
     */
    public function setNumeroCompte($numeroCompte) {
        $this->numeroCompte = $numeroCompte;
        return $this;
    }

    /**
     * Set the pourcent repart.
     *
     * @param float $pourcentRepart The pourcent repart.
     * @return Comptes3 Returns this Comptes3.
     */
    public function setPourcentRepart($pourcentRepart) {
        $this->pourcentRepart = $pourcentRepart;
        return $this;
    }
}
