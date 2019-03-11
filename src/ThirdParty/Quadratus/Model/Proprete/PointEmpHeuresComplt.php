<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete;

use DateTime;

/**
 * Point emp heures complt model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class PointEmpHeuresComplt {

    /**
     * A facturer.
     *
     * @var bool
     */
    private $aFacturer;

    /**
     * Code affaire.
     *
     * @var string
     */
    private $codeAffaire;

    /**
     * Code chantier.
     *
     * @var string
     */
    private $codeChantier;

    /**
     * Code client.
     *
     * @var string
     */
    private $codeClient;

    /**
     * Code employe.
     *
     * @var string
     */
    private $codeEmploye;

    /**
     * Code tache.
     *
     * @var string
     */
    private $codeTache;

    /**
     * Date.
     *
     * @var DateTime
     */
    private $date;

    /**
     * Heure compl.
     *
     * @var DateTime
     */
    private $heureCompl;

    /**
     * Heure compl nuit.
     *
     * @var DateTime
     */
    private $heureComplNuit;

    /**
     * Num b t.
     *
     * @var int
     */
    private $numBT;

    /**
     * Type heure.
     *
     * @var string
     */
    private $typeHeure;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the a facturer.
     *
     * @return bool Returns the a facturer.
     */
    public function getAFacturer() {
        return $this->aFacturer;
    }

    /**
     * Get the code affaire.
     *
     * @return string Returns the code affaire.
     */
    public function getCodeAffaire() {
        return $this->codeAffaire;
    }

    /**
     * Get the code chantier.
     *
     * @return string Returns the code chantier.
     */
    public function getCodeChantier() {
        return $this->codeChantier;
    }

    /**
     * Get the code client.
     *
     * @return string Returns the code client.
     */
    public function getCodeClient() {
        return $this->codeClient;
    }

    /**
     * Get the code employe.
     *
     * @return string Returns the code employe.
     */
    public function getCodeEmploye() {
        return $this->codeEmploye;
    }

    /**
     * Get the code tache.
     *
     * @return string Returns the code tache.
     */
    public function getCodeTache() {
        return $this->codeTache;
    }

    /**
     * Get the date.
     *
     * @return DateTime Returns the date.
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * Get the heure compl.
     *
     * @return DateTime Returns the heure compl.
     */
    public function getHeureCompl() {
        return $this->heureCompl;
    }

    /**
     * Get the heure compl nuit.
     *
     * @return DateTime Returns the heure compl nuit.
     */
    public function getHeureComplNuit() {
        return $this->heureComplNuit;
    }

    /**
     * Get the num b t.
     *
     * @return int Returns the num b t.
     */
    public function getNumBT() {
        return $this->numBT;
    }

    /**
     * Get the type heure.
     *
     * @return string Returns the type heure.
     */
    public function getTypeHeure() {
        return $this->typeHeure;
    }

    /**
     * Set the a facturer.
     *
     * @param bool $aFacturer The a facturer.
     * @return PointEmpHeuresComplt Returns this point emp heures complt.
     */
    public function setAFacturer($aFacturer) {
        $this->aFacturer = $aFacturer;
        return $this;
    }

    /**
     * Set the code affaire.
     *
     * @param string $codeAffaire The code affaire.
     * @return PointEmpHeuresComplt Returns this point emp heures complt.
     */
    public function setCodeAffaire($codeAffaire) {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string $codeChantier The code chantier.
     * @return PointEmpHeuresComplt Returns this point emp heures complt.
     */
    public function setCodeChantier($codeChantier) {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return PointEmpHeuresComplt Returns this point emp heures complt.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code employe.
     *
     * @param string $codeEmploye The code employe.
     * @return PointEmpHeuresComplt Returns this point emp heures complt.
     */
    public function setCodeEmploye($codeEmploye) {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the code tache.
     *
     * @param string $codeTache The code tache.
     * @return PointEmpHeuresComplt Returns this point emp heures complt.
     */
    public function setCodeTache($codeTache) {
        $this->codeTache = $codeTache;
        return $this;
    }

    /**
     * Set the date.
     *
     * @param DateTime $date The date.
     * @return PointEmpHeuresComplt Returns this point emp heures complt.
     */
    public function setDate(DateTime $date = null) {
        $this->date = $date;
        return $this;
    }

    /**
     * Set the heure compl.
     *
     * @param DateTime $heureCompl The heure compl.
     * @return PointEmpHeuresComplt Returns this point emp heures complt.
     */
    public function setHeureCompl(DateTime $heureCompl = null) {
        $this->heureCompl = $heureCompl;
        return $this;
    }

    /**
     * Set the heure compl nuit.
     *
     * @param DateTime $heureComplNuit The heure compl nuit.
     * @return PointEmpHeuresComplt Returns this point emp heures complt.
     */
    public function setHeureComplNuit(DateTime $heureComplNuit = null) {
        $this->heureComplNuit = $heureComplNuit;
        return $this;
    }

    /**
     * Set the num b t.
     *
     * @param int $numBT The num b t.
     * @return PointEmpHeuresComplt Returns this point emp heures complt.
     */
    public function setNumBT($numBT) {
        $this->numBT = $numBT;
        return $this;
    }

    /**
     * Set the type heure.
     *
     * @param string $typeHeure The type heure.
     * @return PointEmpHeuresComplt Returns this point emp heures complt.
     */
    public function setTypeHeure($typeHeure) {
        $this->typeHeure = $typeHeure;
        return $this;
    }
}
