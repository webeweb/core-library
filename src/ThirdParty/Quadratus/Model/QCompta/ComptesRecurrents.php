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

use DateTime;

/**
 * Comptes recurrents.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class ComptesRecurrents {

    /**
     * Compte.
     *
     * @var string
     */
    private $compte;

    /**
     * Compte recurrent.
     *
     * @var string
     */
    private $compteRecurrent;

    /**
     * Date dernier acces.
     *
     * @var DateTime|null
     */
    private $dateDernierAcces;

    /**
     * Nb acces.
     *
     * @var int
     */
    private $nbAcces;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the compte.
     *
     * @return string Returns the compte.
     */
    public function getCompte() {
        return $this->compte;
    }

    /**
     * Get the compte recurrent.
     *
     * @return string Returns the compte recurrent.
     */
    public function getCompteRecurrent() {
        return $this->compteRecurrent;
    }

    /**
     * Get the date dernier acces.
     *
     * @return DateTime|null Returns the date dernier acces.
     */
    public function getDateDernierAcces() {
        return $this->dateDernierAcces;
    }

    /**
     * Get the nb acces.
     *
     * @return int Returns the nb acces.
     */
    public function getNbAcces() {
        return $this->nbAcces;
    }

    /**
     * Set the compte.
     *
     * @param string $compte The compte.
     * @return ComptesRecurrents Returns this Comptes recurrents.
     */
    public function setCompte($compte) {
        $this->compte = $compte;
        return $this;
    }

    /**
     * Set the compte recurrent.
     *
     * @param string $compteRecurrent The compte recurrent.
     * @return ComptesRecurrents Returns this Comptes recurrents.
     */
    public function setCompteRecurrent($compteRecurrent) {
        $this->compteRecurrent = $compteRecurrent;
        return $this;
    }

    /**
     * Set the date dernier acces.
     *
     * @param DateTime|null $dateDernierAcces The date dernier acces.
     * @return ComptesRecurrents Returns this Comptes recurrents.
     */
    public function setDateDernierAcces(DateTime $dateDernierAcces = null) {
        $this->dateDernierAcces = $dateDernierAcces;
        return $this;
    }

    /**
     * Set the nb acces.
     *
     * @param int $nbAcces The nb acces.
     * @return ComptesRecurrents Returns this Comptes recurrents.
     */
    public function setNbAcces($nbAcces) {
        $this->nbAcces = $nbAcces;
        return $this;
    }
}
