<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta;

use DateTime;

/**
 * Interets model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class Interets {

    /**
     * Date debut.
     *
     * @var DateTime
     */
    private $dateDebut;

    /**
     * Numero compte.
     *
     * @var string
     */
    private $numeroCompte;

    /**
     * Taux.
     *
     * @var float
     */
    private $taux;

    /**
     * Type cpt.
     *
     * @var string
     */
    private $typeCpt;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the date debut.
     *
     * @return DateTime Returns the date debut.
     */
    public function getDateDebut() {
        return $this->dateDebut;
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
     * Get the taux.
     *
     * @return float Returns the taux.
     */
    public function getTaux() {
        return $this->taux;
    }

    /**
     * Get the type cpt.
     *
     * @return string Returns the type cpt.
     */
    public function getTypeCpt() {
        return $this->typeCpt;
    }

    /**
     * Set the date debut.
     *
     * @param DateTime $dateDebut The date debut.
     * @return Interets Returns this interets.
     */
    public function setDateDebut(DateTime $dateDebut = null) {
        $this->dateDebut = $dateDebut;
        return $this;
    }

    /**
     * Set the numero compte.
     *
     * @param string $numeroCompte The numero compte.
     * @return Interets Returns this interets.
     */
    public function setNumeroCompte($numeroCompte) {
        $this->numeroCompte = $numeroCompte;
        return $this;
    }

    /**
     * Set the taux.
     *
     * @param float $taux The taux.
     * @return Interets Returns this interets.
     */
    public function setTaux($taux) {
        $this->taux = $taux;
        return $this;
    }

    /**
     * Set the type cpt.
     *
     * @param string $typeCpt The type cpt.
     * @return Interets Returns this interets.
     */
    public function setTypeCpt($typeCpt) {
        $this->typeCpt = $typeCpt;
        return $this;
    }
}
