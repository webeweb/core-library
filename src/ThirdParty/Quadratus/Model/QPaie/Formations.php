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
 * Formations model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class Formations {

    /**
     * Active.
     *
     * @var bool
     */
    private $active;

    /**
     * Description.
     *
     * @var string
     */
    private $description;

    /**
     * I d.
     *
     * @var string
     */
    private $iD;

    /**
     * Lien document.
     *
     * @var string
     */
    private $lienDocument;

    /**
     * Lieu.
     *
     * @var string
     */
    private $lieu;

    /**
     * Nb h formation.
     *
     * @var float
     */
    private $nbHFormation;

    /**
     * Nbh d i f pris hors w.
     *
     * @var float
     */
    private $nbhDIFPrisHorsW;

    /**
     * Nbh di f pris w.
     *
     * @var float
     */
    private $nbhDiFPrisW;

    /**
     * Numero employe.
     *
     * @var string
     */
    private $numeroEmploye;

    /**
     * Organisme.
     *
     * @var string
     */
    private $organisme;

    /**
     * Periode deb.
     *
     * @var DateTime
     */
    private $periodeDeb;

    /**
     * Periode fin.
     *
     * @var DateTime
     */
    private $periodeFin;

    /**
     * Type formation.
     *
     * @var int
     */
    private $typeFormation;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the active.
     *
     * @return bool Returns the active.
     */
    public function getActive() {
        return $this->active;
    }

    /**
     * Get the description.
     *
     * @return string Returns the description.
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Get the i d.
     *
     * @return string Returns the i d.
     */
    public function getID() {
        return $this->iD;
    }

    /**
     * Get the lien document.
     *
     * @return string Returns the lien document.
     */
    public function getLienDocument() {
        return $this->lienDocument;
    }

    /**
     * Get the lieu.
     *
     * @return string Returns the lieu.
     */
    public function getLieu() {
        return $this->lieu;
    }

    /**
     * Get the nb h formation.
     *
     * @return float Returns the nb h formation.
     */
    public function getNbHFormation() {
        return $this->nbHFormation;
    }

    /**
     * Get the nbh d i f pris hors w.
     *
     * @return float Returns the nbh d i f pris hors w.
     */
    public function getNbhDIFPrisHorsW() {
        return $this->nbhDIFPrisHorsW;
    }

    /**
     * Get the nbh di f pris w.
     *
     * @return float Returns the nbh di f pris w.
     */
    public function getNbhDiFPrisW() {
        return $this->nbhDiFPrisW;
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
     * Get the organisme.
     *
     * @return string Returns the organisme.
     */
    public function getOrganisme() {
        return $this->organisme;
    }

    /**
     * Get the periode deb.
     *
     * @return DateTime Returns the periode deb.
     */
    public function getPeriodeDeb() {
        return $this->periodeDeb;
    }

    /**
     * Get the periode fin.
     *
     * @return DateTime Returns the periode fin.
     */
    public function getPeriodeFin() {
        return $this->periodeFin;
    }

    /**
     * Get the type formation.
     *
     * @return int Returns the type formation.
     */
    public function getTypeFormation() {
        return $this->typeFormation;
    }

    /**
     * Set the active.
     *
     * @param bool $active The active.
     * @return Formations Returns this formations.
     */
    public function setActive($active) {
        $this->active = $active;
        return $this;
    }

    /**
     * Set the description.
     *
     * @param string $description The description.
     * @return Formations Returns this formations.
     */
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    /**
     * Set the i d.
     *
     * @param string $iD The i d.
     * @return Formations Returns this formations.
     */
    public function setID($iD) {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Set the lien document.
     *
     * @param string $lienDocument The lien document.
     * @return Formations Returns this formations.
     */
    public function setLienDocument($lienDocument) {
        $this->lienDocument = $lienDocument;
        return $this;
    }

    /**
     * Set the lieu.
     *
     * @param string $lieu The lieu.
     * @return Formations Returns this formations.
     */
    public function setLieu($lieu) {
        $this->lieu = $lieu;
        return $this;
    }

    /**
     * Set the nb h formation.
     *
     * @param float $nbHFormation The nb h formation.
     * @return Formations Returns this formations.
     */
    public function setNbHFormation($nbHFormation) {
        $this->nbHFormation = $nbHFormation;
        return $this;
    }

    /**
     * Set the nbh d i f pris hors w.
     *
     * @param float $nbhDIFPrisHorsW The nbh d i f pris hors w.
     * @return Formations Returns this formations.
     */
    public function setNbhDIFPrisHorsW($nbhDIFPrisHorsW) {
        $this->nbhDIFPrisHorsW = $nbhDIFPrisHorsW;
        return $this;
    }

    /**
     * Set the nbh di f pris w.
     *
     * @param float $nbhDiFPrisW The nbh di f pris w.
     * @return Formations Returns this formations.
     */
    public function setNbhDiFPrisW($nbhDiFPrisW) {
        $this->nbhDiFPrisW = $nbhDiFPrisW;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string $numeroEmploye The numero employe.
     * @return Formations Returns this formations.
     */
    public function setNumeroEmploye($numeroEmploye) {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the organisme.
     *
     * @param string $organisme The organisme.
     * @return Formations Returns this formations.
     */
    public function setOrganisme($organisme) {
        $this->organisme = $organisme;
        return $this;
    }

    /**
     * Set the periode deb.
     *
     * @param DateTime $periodeDeb The periode deb.
     * @return Formations Returns this formations.
     */
    public function setPeriodeDeb(DateTime $periodeDeb = null) {
        $this->periodeDeb = $periodeDeb;
        return $this;
    }

    /**
     * Set the periode fin.
     *
     * @param DateTime $periodeFin The periode fin.
     * @return Formations Returns this formations.
     */
    public function setPeriodeFin(DateTime $periodeFin = null) {
        $this->periodeFin = $periodeFin;
        return $this;
    }

    /**
     * Set the type formation.
     *
     * @param int $typeFormation The type formation.
     * @return Formations Returns this formations.
     */
    public function setTypeFormation($typeFormation) {
        $this->typeFormation = $typeFormation;
        return $this;
    }
}
