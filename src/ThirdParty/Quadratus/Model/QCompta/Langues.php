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
 * Langues.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class Langues {

    /**
     * Code langue.
     *
     * @var string
     */
    private $codeLangue;

    /**
     * Intitule.
     *
     * @var string
     */
    private $intitule;

    /**
     * Numero compte.
     *
     * @var string
     */
    private $numeroCompte;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code langue.
     *
     * @return string Returns the code langue.
     */
    public function getCodeLangue() {
        return $this->codeLangue;
    }

    /**
     * Get the intitule.
     *
     * @return string Returns the intitule.
     */
    public function getIntitule() {
        return $this->intitule;
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
     * Set the code langue.
     *
     * @param string $codeLangue The code langue.
     */
    public function setCodeLangue($codeLangue) {
        $this->codeLangue = $codeLangue;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string $intitule The intitule.
     */
    public function setIntitule($intitule) {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the numero compte.
     *
     * @param string $numeroCompte The numero compte.
     */
    public function setNumeroCompte($numeroCompte) {
        $this->numeroCompte = $numeroCompte;
        return $this;
    }
}
