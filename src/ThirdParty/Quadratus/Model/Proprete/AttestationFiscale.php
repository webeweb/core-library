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

/**
 * Attestation fiscale.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class AttestationFiscale {

    /**
     * Annee.
     *
     * @var int
     */
    private $annee;

    /**
     * Code article1.
     *
     * @var string
     */
    private $codeArticle1;

    /**
     * Code article10.
     *
     * @var string
     */
    private $codeArticle10;

    /**
     * Code article2.
     *
     * @var string
     */
    private $codeArticle2;

    /**
     * Code article3.
     *
     * @var string
     */
    private $codeArticle3;

    /**
     * Code article4.
     *
     * @var string
     */
    private $codeArticle4;

    /**
     * Code article5.
     *
     * @var string
     */
    private $codeArticle5;

    /**
     * Code article6.
     *
     * @var string
     */
    private $codeArticle6;

    /**
     * Code article7.
     *
     * @var string
     */
    private $codeArticle7;

    /**
     * Code article8.
     *
     * @var string
     */
    private $codeArticle8;

    /**
     * Code article9.
     *
     * @var string
     */
    private $codeArticle9;

    /**
     * Code client.
     *
     * @var string
     */
    private $codeClient;

    /**
     * Duree annuelle.
     *
     * @var float
     */
    private $dureeAnnuelle;

    /**
     * Etat.
     *
     * @var string
     */
    private $etat;

    /**
     * Famille1.
     *
     * @var string
     */
    private $famille1;

    /**
     * Famille10.
     *
     * @var string
     */
    private $famille10;

    /**
     * Famille2.
     *
     * @var string
     */
    private $famille2;

    /**
     * Famille3.
     *
     * @var string
     */
    private $famille3;

    /**
     * Famille4.
     *
     * @var string
     */
    private $famille4;

    /**
     * Famille5.
     *
     * @var string
     */
    private $famille5;

    /**
     * Famille6.
     *
     * @var string
     */
    private $famille6;

    /**
     * Famille7.
     *
     * @var string
     */
    private $famille7;

    /**
     * Famille8.
     *
     * @var string
     */
    private $famille8;

    /**
     * Famille9.
     *
     * @var string
     */
    private $famille9;

    /**
     * Lien document.
     *
     * @var string
     */
    private $lienDocument;

    /**
     * Mode reglement.
     *
     * @var string
     */
    private $modeReglement;

    /**
     * Montant tes.
     *
     * @var float
     */
    private $montantTes;

    /**
     * Montant ttc.
     *
     * @var float
     */
    private $montantTtc;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the annee.
     *
     * @return int Returns the annee.
     */
    public function getAnnee() {
        return $this->annee;
    }

    /**
     * Get the code article1.
     *
     * @return string Returns the code article1.
     */
    public function getCodeArticle1() {
        return $this->codeArticle1;
    }

    /**
     * Get the code article10.
     *
     * @return string Returns the code article10.
     */
    public function getCodeArticle10() {
        return $this->codeArticle10;
    }

    /**
     * Get the code article2.
     *
     * @return string Returns the code article2.
     */
    public function getCodeArticle2() {
        return $this->codeArticle2;
    }

    /**
     * Get the code article3.
     *
     * @return string Returns the code article3.
     */
    public function getCodeArticle3() {
        return $this->codeArticle3;
    }

    /**
     * Get the code article4.
     *
     * @return string Returns the code article4.
     */
    public function getCodeArticle4() {
        return $this->codeArticle4;
    }

    /**
     * Get the code article5.
     *
     * @return string Returns the code article5.
     */
    public function getCodeArticle5() {
        return $this->codeArticle5;
    }

    /**
     * Get the code article6.
     *
     * @return string Returns the code article6.
     */
    public function getCodeArticle6() {
        return $this->codeArticle6;
    }

    /**
     * Get the code article7.
     *
     * @return string Returns the code article7.
     */
    public function getCodeArticle7() {
        return $this->codeArticle7;
    }

    /**
     * Get the code article8.
     *
     * @return string Returns the code article8.
     */
    public function getCodeArticle8() {
        return $this->codeArticle8;
    }

    /**
     * Get the code article9.
     *
     * @return string Returns the code article9.
     */
    public function getCodeArticle9() {
        return $this->codeArticle9;
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
     * Get the duree annuelle.
     *
     * @return float Returns the duree annuelle.
     */
    public function getDureeAnnuelle() {
        return $this->dureeAnnuelle;
    }

    /**
     * Get the etat.
     *
     * @return string Returns the etat.
     */
    public function getEtat() {
        return $this->etat;
    }

    /**
     * Get the famille1.
     *
     * @return string Returns the famille1.
     */
    public function getFamille1() {
        return $this->famille1;
    }

    /**
     * Get the famille10.
     *
     * @return string Returns the famille10.
     */
    public function getFamille10() {
        return $this->famille10;
    }

    /**
     * Get the famille2.
     *
     * @return string Returns the famille2.
     */
    public function getFamille2() {
        return $this->famille2;
    }

    /**
     * Get the famille3.
     *
     * @return string Returns the famille3.
     */
    public function getFamille3() {
        return $this->famille3;
    }

    /**
     * Get the famille4.
     *
     * @return string Returns the famille4.
     */
    public function getFamille4() {
        return $this->famille4;
    }

    /**
     * Get the famille5.
     *
     * @return string Returns the famille5.
     */
    public function getFamille5() {
        return $this->famille5;
    }

    /**
     * Get the famille6.
     *
     * @return string Returns the famille6.
     */
    public function getFamille6() {
        return $this->famille6;
    }

    /**
     * Get the famille7.
     *
     * @return string Returns the famille7.
     */
    public function getFamille7() {
        return $this->famille7;
    }

    /**
     * Get the famille8.
     *
     * @return string Returns the famille8.
     */
    public function getFamille8() {
        return $this->famille8;
    }

    /**
     * Get the famille9.
     *
     * @return string Returns the famille9.
     */
    public function getFamille9() {
        return $this->famille9;
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
     * Get the mode reglement.
     *
     * @return string Returns the mode reglement.
     */
    public function getModeReglement() {
        return $this->modeReglement;
    }

    /**
     * Get the montant tes.
     *
     * @return float Returns the montant tes.
     */
    public function getMontantTes() {
        return $this->montantTes;
    }

    /**
     * Get the montant ttc.
     *
     * @return float Returns the montant ttc.
     */
    public function getMontantTtc() {
        return $this->montantTtc;
    }

    /**
     * Set the annee.
     *
     * @param int $annee The annee.
     */
    public function setAnnee($annee) {
        $this->annee = $annee;
        return $this;
    }

    /**
     * Set the code article1.
     *
     * @param string $codeArticle1 The code article1.
     */
    public function setCodeArticle1($codeArticle1) {
        $this->codeArticle1 = $codeArticle1;
        return $this;
    }

    /**
     * Set the code article10.
     *
     * @param string $codeArticle10 The code article10.
     */
    public function setCodeArticle10($codeArticle10) {
        $this->codeArticle10 = $codeArticle10;
        return $this;
    }

    /**
     * Set the code article2.
     *
     * @param string $codeArticle2 The code article2.
     */
    public function setCodeArticle2($codeArticle2) {
        $this->codeArticle2 = $codeArticle2;
        return $this;
    }

    /**
     * Set the code article3.
     *
     * @param string $codeArticle3 The code article3.
     */
    public function setCodeArticle3($codeArticle3) {
        $this->codeArticle3 = $codeArticle3;
        return $this;
    }

    /**
     * Set the code article4.
     *
     * @param string $codeArticle4 The code article4.
     */
    public function setCodeArticle4($codeArticle4) {
        $this->codeArticle4 = $codeArticle4;
        return $this;
    }

    /**
     * Set the code article5.
     *
     * @param string $codeArticle5 The code article5.
     */
    public function setCodeArticle5($codeArticle5) {
        $this->codeArticle5 = $codeArticle5;
        return $this;
    }

    /**
     * Set the code article6.
     *
     * @param string $codeArticle6 The code article6.
     */
    public function setCodeArticle6($codeArticle6) {
        $this->codeArticle6 = $codeArticle6;
        return $this;
    }

    /**
     * Set the code article7.
     *
     * @param string $codeArticle7 The code article7.
     */
    public function setCodeArticle7($codeArticle7) {
        $this->codeArticle7 = $codeArticle7;
        return $this;
    }

    /**
     * Set the code article8.
     *
     * @param string $codeArticle8 The code article8.
     */
    public function setCodeArticle8($codeArticle8) {
        $this->codeArticle8 = $codeArticle8;
        return $this;
    }

    /**
     * Set the code article9.
     *
     * @param string $codeArticle9 The code article9.
     */
    public function setCodeArticle9($codeArticle9) {
        $this->codeArticle9 = $codeArticle9;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the duree annuelle.
     *
     * @param float $dureeAnnuelle The duree annuelle.
     */
    public function setDureeAnnuelle($dureeAnnuelle) {
        $this->dureeAnnuelle = $dureeAnnuelle;
        return $this;
    }

    /**
     * Set the etat.
     *
     * @param string $etat The etat.
     */
    public function setEtat($etat) {
        $this->etat = $etat;
        return $this;
    }

    /**
     * Set the famille1.
     *
     * @param string $famille1 The famille1.
     */
    public function setFamille1($famille1) {
        $this->famille1 = $famille1;
        return $this;
    }

    /**
     * Set the famille10.
     *
     * @param string $famille10 The famille10.
     */
    public function setFamille10($famille10) {
        $this->famille10 = $famille10;
        return $this;
    }

    /**
     * Set the famille2.
     *
     * @param string $famille2 The famille2.
     */
    public function setFamille2($famille2) {
        $this->famille2 = $famille2;
        return $this;
    }

    /**
     * Set the famille3.
     *
     * @param string $famille3 The famille3.
     */
    public function setFamille3($famille3) {
        $this->famille3 = $famille3;
        return $this;
    }

    /**
     * Set the famille4.
     *
     * @param string $famille4 The famille4.
     */
    public function setFamille4($famille4) {
        $this->famille4 = $famille4;
        return $this;
    }

    /**
     * Set the famille5.
     *
     * @param string $famille5 The famille5.
     */
    public function setFamille5($famille5) {
        $this->famille5 = $famille5;
        return $this;
    }

    /**
     * Set the famille6.
     *
     * @param string $famille6 The famille6.
     */
    public function setFamille6($famille6) {
        $this->famille6 = $famille6;
        return $this;
    }

    /**
     * Set the famille7.
     *
     * @param string $famille7 The famille7.
     */
    public function setFamille7($famille7) {
        $this->famille7 = $famille7;
        return $this;
    }

    /**
     * Set the famille8.
     *
     * @param string $famille8 The famille8.
     */
    public function setFamille8($famille8) {
        $this->famille8 = $famille8;
        return $this;
    }

    /**
     * Set the famille9.
     *
     * @param string $famille9 The famille9.
     */
    public function setFamille9($famille9) {
        $this->famille9 = $famille9;
        return $this;
    }

    /**
     * Set the lien document.
     *
     * @param string $lienDocument The lien document.
     */
    public function setLienDocument($lienDocument) {
        $this->lienDocument = $lienDocument;
        return $this;
    }

    /**
     * Set the mode reglement.
     *
     * @param string $modeReglement The mode reglement.
     */
    public function setModeReglement($modeReglement) {
        $this->modeReglement = $modeReglement;
        return $this;
    }

    /**
     * Set the montant tes.
     *
     * @param float $montantTes The montant tes.
     */
    public function setMontantTes($montantTes) {
        $this->montantTes = $montantTes;
        return $this;
    }

    /**
     * Set the montant ttc.
     *
     * @param float $montantTtc The montant ttc.
     */
    public function setMontantTtc($montantTtc) {
        $this->montantTtc = $montantTtc;
        return $this;
    }
}
