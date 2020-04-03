<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QGI;

use DateTime;

/**
 * Actions co seances.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class ActionsCoSeances {

    /**
     * Code action.
     *
     * @var string
     */
    private $codeAction;

    /**
     * Code manif.
     *
     * @var string
     */
    private $codeManif;

    /**
     * Date seance.
     *
     * @var DateTime|null
     */
    private $dateSeance;

    /**
     * Heure deb.
     *
     * @var DateTime|null
     */
    private $heureDeb;

    /**
     * Heure fin.
     *
     * @var DateTime|null
     */
    private $heureFin;

    /**
     * Libelle seance.
     *
     * @var string
     */
    private $libelleSeance;

    /**
     * Num seance.
     *
     * @var int
     */
    private $numSeance;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code action.
     *
     * @return string Returns the code action.
     */
    public function getCodeAction() {
        return $this->codeAction;
    }

    /**
     * Get the code manif.
     *
     * @return string Returns the code manif.
     */
    public function getCodeManif() {
        return $this->codeManif;
    }

    /**
     * Get the date seance.
     *
     * @return DateTime|null Returns the date seance.
     */
    public function getDateSeance() {
        return $this->dateSeance;
    }

    /**
     * Get the heure deb.
     *
     * @return DateTime|null Returns the heure deb.
     */
    public function getHeureDeb() {
        return $this->heureDeb;
    }

    /**
     * Get the heure fin.
     *
     * @return DateTime|null Returns the heure fin.
     */
    public function getHeureFin() {
        return $this->heureFin;
    }

    /**
     * Get the libelle seance.
     *
     * @return string Returns the libelle seance.
     */
    public function getLibelleSeance() {
        return $this->libelleSeance;
    }

    /**
     * Get the num seance.
     *
     * @return int Returns the num seance.
     */
    public function getNumSeance() {
        return $this->numSeance;
    }

    /**
     * Set the code action.
     *
     * @param string $codeAction The code action.
     * @return ActionsCoSeances Returns this Actions co seances.
     */
    public function setCodeAction($codeAction) {
        $this->codeAction = $codeAction;
        return $this;
    }

    /**
     * Set the code manif.
     *
     * @param string $codeManif The code manif.
     * @return ActionsCoSeances Returns this Actions co seances.
     */
    public function setCodeManif($codeManif) {
        $this->codeManif = $codeManif;
        return $this;
    }

    /**
     * Set the date seance.
     *
     * @param DateTime|null $dateSeance The date seance.
     * @return ActionsCoSeances Returns this Actions co seances.
     */
    public function setDateSeance(DateTime $dateSeance = null) {
        $this->dateSeance = $dateSeance;
        return $this;
    }

    /**
     * Set the heure deb.
     *
     * @param DateTime|null $heureDeb The heure deb.
     * @return ActionsCoSeances Returns this Actions co seances.
     */
    public function setHeureDeb(DateTime $heureDeb = null) {
        $this->heureDeb = $heureDeb;
        return $this;
    }

    /**
     * Set the heure fin.
     *
     * @param DateTime|null $heureFin The heure fin.
     * @return ActionsCoSeances Returns this Actions co seances.
     */
    public function setHeureFin(DateTime $heureFin = null) {
        $this->heureFin = $heureFin;
        return $this;
    }

    /**
     * Set the libelle seance.
     *
     * @param string $libelleSeance The libelle seance.
     * @return ActionsCoSeances Returns this Actions co seances.
     */
    public function setLibelleSeance($libelleSeance) {
        $this->libelleSeance = $libelleSeance;
        return $this;
    }

    /**
     * Set the num seance.
     *
     * @param int $numSeance The num seance.
     * @return ActionsCoSeances Returns this Actions co seances.
     */
    public function setNumSeance($numSeance) {
        $this->numSeance = $numSeance;
        return $this;
    }
}
