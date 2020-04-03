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
 * Tranches h sup.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class TranchesHSup {

    /**
     * A comptabiliser rc.
     *
     * @var bool
     */
    private $aComptabiliserRc;

    /**
     * A comptabiliser rcit.
     *
     * @var bool
     */
    private $aComptabiliserRcit;

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
     * Code lib hs.
     *
     * @var string
     */
    private $codeLibHs;

    /**
     * Date application.
     *
     * @var DateTime|null
     */
    private $dateApplication;

    /**
     * Declenche rc semaine.
     *
     * @var bool
     */
    private $declencheRcSemaine;

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
     * Pourcent rc.
     *
     * @var float
     */
    private $pourcentRc;

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
     * Get the a comptabiliser rc.
     *
     * @return bool Returns the a comptabiliser rc.
     */
    public function getAComptabiliserRc() {
        return $this->aComptabiliserRc;
    }

    /**
     * Get the a comptabiliser rcit.
     *
     * @return bool Returns the a comptabiliser rcit.
     */
    public function getAComptabiliserRcit() {
        return $this->aComptabiliserRcit;
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
     * Get the code lib hs.
     *
     * @return string Returns the code lib hs.
     */
    public function getCodeLibHs() {
        return $this->codeLibHs;
    }

    /**
     * Get the date application.
     *
     * @return DateTime|null Returns the date application.
     */
    public function getDateApplication() {
        return $this->dateApplication;
    }

    /**
     * Get the declenche rc semaine.
     *
     * @return bool Returns the declenche rc semaine.
     */
    public function getDeclencheRcSemaine() {
        return $this->declencheRcSemaine;
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
     * Get the pourcent rc.
     *
     * @return float Returns the pourcent rc.
     */
    public function getPourcentRc() {
        return $this->pourcentRc;
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
     * Set the a comptabiliser rc.
     *
     * @param bool $aComptabiliserRc The a comptabiliser rc.
     * @return TranchesHSup Returns this Tranches h sup.
     */
    public function setAComptabiliserRc($aComptabiliserRc) {
        $this->aComptabiliserRc = $aComptabiliserRc;
        return $this;
    }

    /**
     * Set the a comptabiliser rcit.
     *
     * @param bool $aComptabiliserRcit The a comptabiliser rcit.
     * @return TranchesHSup Returns this Tranches h sup.
     */
    public function setAComptabiliserRcit($aComptabiliserRcit) {
        $this->aComptabiliserRcit = $aComptabiliserRcit;
        return $this;
    }

    /**
     * Set the appliquer h sup.
     *
     * @param bool $appliquerHSup The appliquer h sup.
     * @return TranchesHSup Returns this Tranches h sup.
     */
    public function setAppliquerHSup($appliquerHSup) {
        $this->appliquerHSup = $appliquerHSup;
        return $this;
    }

    /**
     * Set the appliquer repos remplace.
     *
     * @param bool $appliquerReposRemplace The appliquer repos remplace.
     * @return TranchesHSup Returns this Tranches h sup.
     */
    public function setAppliquerReposRemplace($appliquerReposRemplace) {
        $this->appliquerReposRemplace = $appliquerReposRemplace;
        return $this;
    }

    /**
     * Set the code lib hs.
     *
     * @param string $codeLibHs The code lib hs.
     * @return TranchesHSup Returns this Tranches h sup.
     */
    public function setCodeLibHs($codeLibHs) {
        $this->codeLibHs = $codeLibHs;
        return $this;
    }

    /**
     * Set the date application.
     *
     * @param DateTime|null $dateApplication The date application.
     * @return TranchesHSup Returns this Tranches h sup.
     */
    public function setDateApplication(DateTime $dateApplication = null) {
        $this->dateApplication = $dateApplication;
        return $this;
    }

    /**
     * Set the declenche rc semaine.
     *
     * @param bool $declencheRcSemaine The declenche rc semaine.
     * @return TranchesHSup Returns this Tranches h sup.
     */
    public function setDeclencheRcSemaine($declencheRcSemaine) {
        $this->declencheRcSemaine = $declencheRcSemaine;
        return $this;
    }

    /**
     * Set the horaire depassement.
     *
     * @param float $horaireDepassement The horaire depassement.
     * @return TranchesHSup Returns this Tranches h sup.
     */
    public function setHoraireDepassement($horaireDepassement) {
        $this->horaireDepassement = $horaireDepassement;
        return $this;
    }

    /**
     * Set the numero grille type.
     *
     * @param int $numeroGrilleType The numero grille type.
     * @return TranchesHSup Returns this Tranches h sup.
     */
    public function setNumeroGrilleType($numeroGrilleType) {
        $this->numeroGrilleType = $numeroGrilleType;
        return $this;
    }

    /**
     * Set the pourcent h sup.
     *
     * @param float $pourcentHSup The pourcent h sup.
     * @return TranchesHSup Returns this Tranches h sup.
     */
    public function setPourcentHSup($pourcentHSup) {
        $this->pourcentHSup = $pourcentHSup;
        return $this;
    }

    /**
     * Set the pourcent rc.
     *
     * @param float $pourcentRc The pourcent rc.
     * @return TranchesHSup Returns this Tranches h sup.
     */
    public function setPourcentRc($pourcentRc) {
        $this->pourcentRc = $pourcentRc;
        return $this;
    }

    /**
     * Set the pourcent repos remplace.
     *
     * @param float $pourcentReposRemplace The pourcent repos remplace.
     * @return TranchesHSup Returns this Tranches h sup.
     */
    public function setPourcentReposRemplace($pourcentReposRemplace) {
        $this->pourcentReposRemplace = $pourcentReposRemplace;
        return $this;
    }

    /**
     * Set the type paiement.
     *
     * @param string $typePaiement The type paiement.
     * @return TranchesHSup Returns this Tranches h sup.
     */
    public function setTypePaiement($typePaiement) {
        $this->typePaiement = $typePaiement;
        return $this;
    }
}
