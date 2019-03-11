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
 * Tranches h sup model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class TranchesHSup {

    /**
     * A comptabiliser r c.
     *
     * @var bool
     */
    private $aComptabiliserRC;

    /**
     * A comptabiliser r c i t.
     *
     * @var bool
     */
    private $aComptabiliserRCIT;

    /**
     * Appliquer h sup.
     *
     * @var bool
     */
    private $appliquerHSup;

    /**
     * Appliquer repos remplace.
     *
     * @var bool
     */
    private $appliquerReposRemplace;

    /**
     * Code lib h s.
     *
     * @var string
     */
    private $codeLibHS;

    /**
     * Date application.
     *
     * @var DateTime
     */
    private $dateApplication;

    /**
     * Declenche r c semaine.
     *
     * @var bool
     */
    private $declencheRCSemaine;

    /**
     * Horaire depassement.
     *
     * @var float
     */
    private $horaireDepassement;

    /**
     * Numero grille type.
     *
     * @var int
     */
    private $numeroGrilleType;

    /**
     * Pourcent h sup.
     *
     * @var float
     */
    private $pourcentHSup;

    /**
     * Pourcent r c.
     *
     * @var float
     */
    private $pourcentRC;

    /**
     * Pourcent repos remplace.
     *
     * @var float
     */
    private $pourcentReposRemplace;

    /**
     * Type paiement.
     *
     * @var string
     */
    private $typePaiement;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the a comptabiliser r c.
     *
     * @return bool Returns the a comptabiliser r c.
     */
    public function getAComptabiliserRC() {
        return $this->aComptabiliserRC;
    }

    /**
     * Get the a comptabiliser r c i t.
     *
     * @return bool Returns the a comptabiliser r c i t.
     */
    public function getAComptabiliserRCIT() {
        return $this->aComptabiliserRCIT;
    }

    /**
     * Get the appliquer h sup.
     *
     * @return bool Returns the appliquer h sup.
     */
    public function getAppliquerHSup() {
        return $this->appliquerHSup;
    }

    /**
     * Get the appliquer repos remplace.
     *
     * @return bool Returns the appliquer repos remplace.
     */
    public function getAppliquerReposRemplace() {
        return $this->appliquerReposRemplace;
    }

    /**
     * Get the code lib h s.
     *
     * @return string Returns the code lib h s.
     */
    public function getCodeLibHS() {
        return $this->codeLibHS;
    }

    /**
     * Get the date application.
     *
     * @return DateTime Returns the date application.
     */
    public function getDateApplication() {
        return $this->dateApplication;
    }

    /**
     * Get the declenche r c semaine.
     *
     * @return bool Returns the declenche r c semaine.
     */
    public function getDeclencheRCSemaine() {
        return $this->declencheRCSemaine;
    }

    /**
     * Get the horaire depassement.
     *
     * @return float Returns the horaire depassement.
     */
    public function getHoraireDepassement() {
        return $this->horaireDepassement;
    }

    /**
     * Get the numero grille type.
     *
     * @return int Returns the numero grille type.
     */
    public function getNumeroGrilleType() {
        return $this->numeroGrilleType;
    }

    /**
     * Get the pourcent h sup.
     *
     * @return float Returns the pourcent h sup.
     */
    public function getPourcentHSup() {
        return $this->pourcentHSup;
    }

    /**
     * Get the pourcent r c.
     *
     * @return float Returns the pourcent r c.
     */
    public function getPourcentRC() {
        return $this->pourcentRC;
    }

    /**
     * Get the pourcent repos remplace.
     *
     * @return float Returns the pourcent repos remplace.
     */
    public function getPourcentReposRemplace() {
        return $this->pourcentReposRemplace;
    }

    /**
     * Get the type paiement.
     *
     * @return string Returns the type paiement.
     */
    public function getTypePaiement() {
        return $this->typePaiement;
    }

    /**
     * Set the a comptabiliser r c.
     *
     * @param bool $aComptabiliserRC The a comptabiliser r c.
     * @return TranchesHSup Returns this tranches h sup.
     */
    public function setAComptabiliserRC($aComptabiliserRC) {
        $this->aComptabiliserRC = $aComptabiliserRC;
        return $this;
    }

    /**
     * Set the a comptabiliser r c i t.
     *
     * @param bool $aComptabiliserRCIT The a comptabiliser r c i t.
     * @return TranchesHSup Returns this tranches h sup.
     */
    public function setAComptabiliserRCIT($aComptabiliserRCIT) {
        $this->aComptabiliserRCIT = $aComptabiliserRCIT;
        return $this;
    }

    /**
     * Set the appliquer h sup.
     *
     * @param bool $appliquerHSup The appliquer h sup.
     * @return TranchesHSup Returns this tranches h sup.
     */
    public function setAppliquerHSup($appliquerHSup) {
        $this->appliquerHSup = $appliquerHSup;
        return $this;
    }

    /**
     * Set the appliquer repos remplace.
     *
     * @param bool $appliquerReposRemplace The appliquer repos remplace.
     * @return TranchesHSup Returns this tranches h sup.
     */
    public function setAppliquerReposRemplace($appliquerReposRemplace) {
        $this->appliquerReposRemplace = $appliquerReposRemplace;
        return $this;
    }

    /**
     * Set the code lib h s.
     *
     * @param string $codeLibHS The code lib h s.
     * @return TranchesHSup Returns this tranches h sup.
     */
    public function setCodeLibHS($codeLibHS) {
        $this->codeLibHS = $codeLibHS;
        return $this;
    }

    /**
     * Set the date application.
     *
     * @param DateTime $dateApplication The date application.
     * @return TranchesHSup Returns this tranches h sup.
     */
    public function setDateApplication(DateTime $dateApplication = null) {
        $this->dateApplication = $dateApplication;
        return $this;
    }

    /**
     * Set the declenche r c semaine.
     *
     * @param bool $declencheRCSemaine The declenche r c semaine.
     * @return TranchesHSup Returns this tranches h sup.
     */
    public function setDeclencheRCSemaine($declencheRCSemaine) {
        $this->declencheRCSemaine = $declencheRCSemaine;
        return $this;
    }

    /**
     * Set the horaire depassement.
     *
     * @param float $horaireDepassement The horaire depassement.
     * @return TranchesHSup Returns this tranches h sup.
     */
    public function setHoraireDepassement($horaireDepassement) {
        $this->horaireDepassement = $horaireDepassement;
        return $this;
    }

    /**
     * Set the numero grille type.
     *
     * @param int $numeroGrilleType The numero grille type.
     * @return TranchesHSup Returns this tranches h sup.
     */
    public function setNumeroGrilleType($numeroGrilleType) {
        $this->numeroGrilleType = $numeroGrilleType;
        return $this;
    }

    /**
     * Set the pourcent h sup.
     *
     * @param float $pourcentHSup The pourcent h sup.
     * @return TranchesHSup Returns this tranches h sup.
     */
    public function setPourcentHSup($pourcentHSup) {
        $this->pourcentHSup = $pourcentHSup;
        return $this;
    }

    /**
     * Set the pourcent r c.
     *
     * @param float $pourcentRC The pourcent r c.
     * @return TranchesHSup Returns this tranches h sup.
     */
    public function setPourcentRC($pourcentRC) {
        $this->pourcentRC = $pourcentRC;
        return $this;
    }

    /**
     * Set the pourcent repos remplace.
     *
     * @param float $pourcentReposRemplace The pourcent repos remplace.
     * @return TranchesHSup Returns this tranches h sup.
     */
    public function setPourcentReposRemplace($pourcentReposRemplace) {
        $this->pourcentReposRemplace = $pourcentReposRemplace;
        return $this;
    }

    /**
     * Set the type paiement.
     *
     * @param string $typePaiement The type paiement.
     * @return TranchesHSup Returns this tranches h sup.
     */
    public function setTypePaiement($typePaiement) {
        $this->typePaiement = $typePaiement;
        return $this;
    }
}
