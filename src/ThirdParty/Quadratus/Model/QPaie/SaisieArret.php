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
 * Saisie arret.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class SaisieArret {

    /**
     * Dt courrier.
     *
     * @var DateTime|null
     */
    private $dtCourrier;

    /**
     * Dt debut saisie.
     *
     * @var DateTime|null
     */
    private $dtDebutSaisie;

    /**
     * Dt fin saisie.
     *
     * @var DateTime|null
     */
    private $dtFinSaisie;

    /**
     * Libelle.
     *
     * @var string
     */
    private $libelle;

    /**
     * Mt creance.
     *
     * @var float
     */
    private $mtCreance;

    /**
     * Mt deja paye.
     *
     * @var float
     */
    private $mtDejaPaye;

    /**
     * Nb a charge.
     *
     * @var string
     */
    private $nbACharge;

    /**
     * Nom tribunal.
     *
     * @var string
     */
    private $nomTribunal;

    /**
     * Numero employe.
     *
     * @var string
     */
    private $numeroEmploye;

    /**
     * Type saisie.
     *
     * @var string
     */
    private $typeSaisie;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the dt courrier.
     *
     * @return DateTime|null Returns the dt courrier.
     */
    public function getDtCourrier() {
        return $this->dtCourrier;
    }

    /**
     * Get the dt debut saisie.
     *
     * @return DateTime|null Returns the dt debut saisie.
     */
    public function getDtDebutSaisie() {
        return $this->dtDebutSaisie;
    }

    /**
     * Get the dt fin saisie.
     *
     * @return DateTime|null Returns the dt fin saisie.
     */
    public function getDtFinSaisie() {
        return $this->dtFinSaisie;
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
     * Get the mt creance.
     *
     * @return float Returns the mt creance.
     */
    public function getMtCreance() {
        return $this->mtCreance;
    }

    /**
     * Get the mt deja paye.
     *
     * @return float Returns the mt deja paye.
     */
    public function getMtDejaPaye() {
        return $this->mtDejaPaye;
    }

    /**
     * Get the nb a charge.
     *
     * @return string Returns the nb a charge.
     */
    public function getNbACharge() {
        return $this->nbACharge;
    }

    /**
     * Get the nom tribunal.
     *
     * @return string Returns the nom tribunal.
     */
    public function getNomTribunal() {
        return $this->nomTribunal;
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
     * Get the type saisie.
     *
     * @return string Returns the type saisie.
     */
    public function getTypeSaisie() {
        return $this->typeSaisie;
    }

    /**
     * Set the dt courrier.
     *
     * @param DateTime|null $dtCourrier The dt courrier.
     */
    public function setDtCourrier(DateTime $dtCourrier = null) {
        $this->dtCourrier = $dtCourrier;
        return $this;
    }

    /**
     * Set the dt debut saisie.
     *
     * @param DateTime|null $dtDebutSaisie The dt debut saisie.
     */
    public function setDtDebutSaisie(DateTime $dtDebutSaisie = null) {
        $this->dtDebutSaisie = $dtDebutSaisie;
        return $this;
    }

    /**
     * Set the dt fin saisie.
     *
     * @param DateTime|null $dtFinSaisie The dt fin saisie.
     */
    public function setDtFinSaisie(DateTime $dtFinSaisie = null) {
        $this->dtFinSaisie = $dtFinSaisie;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string $libelle The libelle.
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the mt creance.
     *
     * @param float $mtCreance The mt creance.
     */
    public function setMtCreance($mtCreance) {
        $this->mtCreance = $mtCreance;
        return $this;
    }

    /**
     * Set the mt deja paye.
     *
     * @param float $mtDejaPaye The mt deja paye.
     */
    public function setMtDejaPaye($mtDejaPaye) {
        $this->mtDejaPaye = $mtDejaPaye;
        return $this;
    }

    /**
     * Set the nb a charge.
     *
     * @param string $nbACharge The nb a charge.
     */
    public function setNbACharge($nbACharge) {
        $this->nbACharge = $nbACharge;
        return $this;
    }

    /**
     * Set the nom tribunal.
     *
     * @param string $nomTribunal The nom tribunal.
     */
    public function setNomTribunal($nomTribunal) {
        $this->nomTribunal = $nomTribunal;
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
     * Set the type saisie.
     *
     * @param string $typeSaisie The type saisie.
     */
    public function setTypeSaisie($typeSaisie) {
        $this->typeSaisie = $typeSaisie;
        return $this;
    }
}
