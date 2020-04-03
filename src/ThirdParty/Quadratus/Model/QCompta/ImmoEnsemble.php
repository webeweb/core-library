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
 * Immo ensemble.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class ImmoEnsemble {

    /**
     * Libelle.
     *
     * @var string
     */
    private $libelle;

    /**
     * Numero compte.
     *
     * @var string
     */
    private $numeroCompte;

    /**
     * Numero ensemble.
     *
     * @var int
     */
    private $numeroEnsemble;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the libelle.
     *
     * @return string Returns the libelle.
     */
    public function getLibelle() {
        return $this->libelle;
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
     * Get the numero ensemble.
     *
     * @return int Returns the numero ensemble.
     */
    public function getNumeroEnsemble() {
        return $this->numeroEnsemble;
    }

    /**
     * Set the libelle.
     *
     * @param string $libelle The libelle.
     * @return ImmoEnsemble Returns this Immo ensemble.
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the numero compte.
     *
     * @param string $numeroCompte The numero compte.
     * @return ImmoEnsemble Returns this Immo ensemble.
     */
    public function setNumeroCompte($numeroCompte) {
        $this->numeroCompte = $numeroCompte;
        return $this;
    }

    /**
     * Set the numero ensemble.
     *
     * @param int $numeroEnsemble The numero ensemble.
     * @return ImmoEnsemble Returns this Immo ensemble.
     */
    public function setNumeroEnsemble($numeroEnsemble) {
        $this->numeroEnsemble = $numeroEnsemble;
        return $this;
    }
}
