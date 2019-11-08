<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie;

use DateTime;

/**
 * Bulletins navigo.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class BulletinsNavigo {

    /**
     * Indice periode.
     *
     * @var int
     */
    private $indicePeriode;

    /**
     * Nb semaine.
     *
     * @var string
     */
    private $nbSemaine;

    /**
     * Numero employe.
     *
     * @var string
     */
    private $numeroEmploye;

    /**
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * Rbt non proratise.
     *
     * @var bool
     */
    private $rbtNonProratise;

    /**
     * Type abonnement.
     *
     * @var string
     */
    private $typeAbonnement;

    /**
     * Zone.
     *
     * @var string
     */
    private $zone;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the indice periode.
     *
     * @return int Returns the indice periode.
     */
    public function getIndicePeriode() {
        return $this->indicePeriode;
    }

    /**
     * Get the nb semaine.
     *
     * @return string Returns the nb semaine.
     */
    public function getNbSemaine() {
        return $this->nbSemaine;
    }

    /**
     * Get the numero employe.
     *
     * @return string Returns the numero employe.
     */
    public function getNumeroEmploye() {
        return $this->numeroEmploye;
    }

    /**
     * Get the periode.
     *
     * @return DateTime|null Returns the periode.
     */
    public function getPeriode() {
        return $this->periode;
    }

    /**
     * Get the rbt non proratise.
     *
     * @return bool Returns the rbt non proratise.
     */
    public function getRbtNonProratise() {
        return $this->rbtNonProratise;
    }

    /**
     * Get the type abonnement.
     *
     * @return string Returns the type abonnement.
     */
    public function getTypeAbonnement() {
        return $this->typeAbonnement;
    }

    /**
     * Get the zone.
     *
     * @return string Returns the zone.
     */
    public function getZone() {
        return $this->zone;
    }

    /**
     * Set the indice periode.
     *
     * @param int $indicePeriode The indice periode.
     */
    public function setIndicePeriode($indicePeriode) {
        $this->indicePeriode = $indicePeriode;
        return $this;
    }

    /**
     * Set the nb semaine.
     *
     * @param string $nbSemaine The nb semaine.
     */
    public function setNbSemaine($nbSemaine) {
        $this->nbSemaine = $nbSemaine;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string $numeroEmploye The numero employe.
     */
    public function setNumeroEmploye($numeroEmploye) {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     */
    public function setPeriode(DateTime $periode = null) {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the rbt non proratise.
     *
     * @param bool $rbtNonProratise The rbt non proratise.
     */
    public function setRbtNonProratise($rbtNonProratise) {
        $this->rbtNonProratise = $rbtNonProratise;
        return $this;
    }

    /**
     * Set the type abonnement.
     *
     * @param string $typeAbonnement The type abonnement.
     */
    public function setTypeAbonnement($typeAbonnement) {
        $this->typeAbonnement = $typeAbonnement;
        return $this;
    }

    /**
     * Set the zone.
     *
     * @param string $zone The zone.
     */
    public function setZone($zone) {
        $this->zone = $zone;
        return $this;
    }
}
