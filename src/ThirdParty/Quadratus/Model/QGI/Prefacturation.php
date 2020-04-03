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
 * Prefacturation.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class Prefacturation {

    /**
     * Code article.
     *
     * @var string
     */
    private $codeArticle;

    /**
     * Code client.
     *
     * @var string
     */
    private $codeClient;

    /**
     * Code collaborateur.
     *
     * @var string
     */
    private $codeCollaborateur;

    /**
     * Code mission.
     *
     * @var string
     */
    private $codeMission;

    /**
     * Code phase.
     *
     * @var string
     */
    private $codePhase;

    /**
     * Code regroupement.
     *
     * @var string
     */
    private $codeRegroupement;

    /**
     * Date saisie.
     *
     * @var DateTime|null
     */
    private $dateSaisie;

    /**
     * Date sys saisie.
     *
     * @var DateTime|null
     */
    private $dateSysSaisie;

    /**
     * Facturable.
     *
     * @var bool
     */
    private $facturable;

    /**
     * Id prefacturation.
     *
     * @var int
     */
    private $idPrefacturation;

    /**
     * Is transf.
     *
     * @var bool
     */
    private $isTransf;

    /**
     * Libelle.
     *
     * @var string
     */
    private $libelle;

    /**
     * Monnaie.
     *
     * @var string
     */
    private $monnaie;

    /**
     * Pu.
     *
     * @var float
     */
    private $pu;

    /**
     * Qte.
     *
     * @var float
     */
    private $qte;

    /**
     * Uniq id facture.
     *
     * @var string
     */
    private $uniqIdFacture;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code article.
     *
     * @return string Returns the code article.
     */
    public function getCodeArticle() {
        return $this->codeArticle;
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
     * Get the code collaborateur.
     *
     * @return string Returns the code collaborateur.
     */
    public function getCodeCollaborateur() {
        return $this->codeCollaborateur;
    }

    /**
     * Get the code mission.
     *
     * @return string Returns the code mission.
     */
    public function getCodeMission() {
        return $this->codeMission;
    }

    /**
     * Get the code phase.
     *
     * @return string Returns the code phase.
     */
    public function getCodePhase() {
        return $this->codePhase;
    }

    /**
     * Get the code regroupement.
     *
     * @return string Returns the code regroupement.
     */
    public function getCodeRegroupement() {
        return $this->codeRegroupement;
    }

    /**
     * Get the date saisie.
     *
     * @return DateTime|null Returns the date saisie.
     */
    public function getDateSaisie() {
        return $this->dateSaisie;
    }

    /**
     * Get the date sys saisie.
     *
     * @return DateTime|null Returns the date sys saisie.
     */
    public function getDateSysSaisie() {
        return $this->dateSysSaisie;
    }

    /**
     * Get the facturable.
     *
     * @return bool Returns the facturable.
     */
    public function getFacturable() {
        return $this->facturable;
    }

    /**
     * Get the id prefacturation.
     *
     * @return int Returns the id prefacturation.
     */
    public function getIdPrefacturation() {
        return $this->idPrefacturation;
    }

    /**
     * Get the is transf.
     *
     * @return bool Returns the is transf.
     */
    public function getIsTransf() {
        return $this->isTransf;
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
     * Get the monnaie.
     *
     * @return string Returns the monnaie.
     */
    public function getMonnaie() {
        return $this->monnaie;
    }

    /**
     * Get the pu.
     *
     * @return float Returns the pu.
     */
    public function getPu() {
        return $this->pu;
    }

    /**
     * Get the qte.
     *
     * @return float Returns the qte.
     */
    public function getQte() {
        return $this->qte;
    }

    /**
     * Get the uniq id facture.
     *
     * @return string Returns the uniq id facture.
     */
    public function getUniqIdFacture() {
        return $this->uniqIdFacture;
    }

    /**
     * Set the code article.
     *
     * @param string $codeArticle The code article.
     * @return Prefacturation Returns this Prefacturation.
     */
    public function setCodeArticle($codeArticle) {
        $this->codeArticle = $codeArticle;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return Prefacturation Returns this Prefacturation.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string $codeCollaborateur The code collaborateur.
     * @return Prefacturation Returns this Prefacturation.
     */
    public function setCodeCollaborateur($codeCollaborateur) {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code mission.
     *
     * @param string $codeMission The code mission.
     * @return Prefacturation Returns this Prefacturation.
     */
    public function setCodeMission($codeMission) {
        $this->codeMission = $codeMission;
        return $this;
    }

    /**
     * Set the code phase.
     *
     * @param string $codePhase The code phase.
     * @return Prefacturation Returns this Prefacturation.
     */
    public function setCodePhase($codePhase) {
        $this->codePhase = $codePhase;
        return $this;
    }

    /**
     * Set the code regroupement.
     *
     * @param string $codeRegroupement The code regroupement.
     * @return Prefacturation Returns this Prefacturation.
     */
    public function setCodeRegroupement($codeRegroupement) {
        $this->codeRegroupement = $codeRegroupement;
        return $this;
    }

    /**
     * Set the date saisie.
     *
     * @param DateTime|null $dateSaisie The date saisie.
     * @return Prefacturation Returns this Prefacturation.
     */
    public function setDateSaisie(DateTime $dateSaisie = null) {
        $this->dateSaisie = $dateSaisie;
        return $this;
    }

    /**
     * Set the date sys saisie.
     *
     * @param DateTime|null $dateSysSaisie The date sys saisie.
     * @return Prefacturation Returns this Prefacturation.
     */
    public function setDateSysSaisie(DateTime $dateSysSaisie = null) {
        $this->dateSysSaisie = $dateSysSaisie;
        return $this;
    }

    /**
     * Set the facturable.
     *
     * @param bool $facturable The facturable.
     * @return Prefacturation Returns this Prefacturation.
     */
    public function setFacturable($facturable) {
        $this->facturable = $facturable;
        return $this;
    }

    /**
     * Set the id prefacturation.
     *
     * @param int $idPrefacturation The id prefacturation.
     * @return Prefacturation Returns this Prefacturation.
     */
    public function setIdPrefacturation($idPrefacturation) {
        $this->idPrefacturation = $idPrefacturation;
        return $this;
    }

    /**
     * Set the is transf.
     *
     * @param bool $isTransf The is transf.
     * @return Prefacturation Returns this Prefacturation.
     */
    public function setIsTransf($isTransf) {
        $this->isTransf = $isTransf;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string $libelle The libelle.
     * @return Prefacturation Returns this Prefacturation.
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the monnaie.
     *
     * @param string $monnaie The monnaie.
     * @return Prefacturation Returns this Prefacturation.
     */
    public function setMonnaie($monnaie) {
        $this->monnaie = $monnaie;
        return $this;
    }

    /**
     * Set the pu.
     *
     * @param float $pu The pu.
     * @return Prefacturation Returns this Prefacturation.
     */
    public function setPu($pu) {
        $this->pu = $pu;
        return $this;
    }

    /**
     * Set the qte.
     *
     * @param float $qte The qte.
     * @return Prefacturation Returns this Prefacturation.
     */
    public function setQte($qte) {
        $this->qte = $qte;
        return $this;
    }

    /**
     * Set the uniq id facture.
     *
     * @param string $uniqIdFacture The uniq id facture.
     * @return Prefacturation Returns this Prefacturation.
     */
    public function setUniqIdFacture($uniqIdFacture) {
        $this->uniqIdFacture = $uniqIdFacture;
        return $this;
    }
}
