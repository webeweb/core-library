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
 * Chantiers histo rev.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class ChantiersHistoRev {

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
     * Code formule.
     *
     * @var string
     */
    private $codeFormule;

    /**
     * Code regroupement.
     *
     * @var string
     */
    private $codeRegroupement;

    /**
     * Commentaire.
     *
     * @var string
     */
    private $commentaire;

    /**
     * Date revision.
     *
     * @var DateTime|null
     */
    private $dateRevision;

    /**
     * Formule.
     *
     * @var string
     */
    private $formule;

    /**
     * Lien document.
     *
     * @var string
     */
    private $lienDocument;

    /**
     * Num bt.
     *
     * @var int
     */
    private $numBt;

    /**
     * Num ligne rev.
     *
     * @var int
     */
    private $numLigneRev;

    /**
     * Periode revisee.
     *
     * @var DateTime|null
     */
    private $periodeRevisee;

    /**
     * Pourcentage.
     *
     * @var float
     */
    private $pourcentage;

    /**
     * Refus client.
     *
     * @var bool
     */
    private $refusClient;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
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
     * Get the code formule.
     *
     * @return string Returns the code formule.
     */
    public function getCodeFormule() {
        return $this->codeFormule;
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
     * Get the commentaire.
     *
     * @return string Returns the commentaire.
     */
    public function getCommentaire() {
        return $this->commentaire;
    }

    /**
     * Get the date revision.
     *
     * @return DateTime|null Returns the date revision.
     */
    public function getDateRevision() {
        return $this->dateRevision;
    }

    /**
     * Get the formule.
     *
     * @return string Returns the formule.
     */
    public function getFormule() {
        return $this->formule;
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
     * Get the num bt.
     *
     * @return int Returns the num bt.
     */
    public function getNumBt() {
        return $this->numBt;
    }

    /**
     * Get the num ligne rev.
     *
     * @return int Returns the num ligne rev.
     */
    public function getNumLigneRev() {
        return $this->numLigneRev;
    }

    /**
     * Get the periode revisee.
     *
     * @return DateTime|null Returns the periode revisee.
     */
    public function getPeriodeRevisee() {
        return $this->periodeRevisee;
    }

    /**
     * Get the pourcentage.
     *
     * @return float Returns the pourcentage.
     */
    public function getPourcentage() {
        return $this->pourcentage;
    }

    /**
     * Get the refus client.
     *
     * @return bool Returns the refus client.
     */
    public function getRefusClient() {
        return $this->refusClient;
    }

    /**
     * Set the code affaire.
     *
     * @param string $codeAffaire The code affaire.
     */
    public function setCodeAffaire($codeAffaire) {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string $codeChantier The code chantier.
     */
    public function setCodeChantier($codeChantier) {
        $this->codeChantier = $codeChantier;
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
     * Set the code formule.
     *
     * @param string $codeFormule The code formule.
     */
    public function setCodeFormule($codeFormule) {
        $this->codeFormule = $codeFormule;
        return $this;
    }

    /**
     * Set the code regroupement.
     *
     * @param string $codeRegroupement The code regroupement.
     */
    public function setCodeRegroupement($codeRegroupement) {
        $this->codeRegroupement = $codeRegroupement;
        return $this;
    }

    /**
     * Set the commentaire.
     *
     * @param string $commentaire The commentaire.
     */
    public function setCommentaire($commentaire) {
        $this->commentaire = $commentaire;
        return $this;
    }

    /**
     * Set the date revision.
     *
     * @param DateTime|null $dateRevision The date revision.
     */
    public function setDateRevision(DateTime $dateRevision = null) {
        $this->dateRevision = $dateRevision;
        return $this;
    }

    /**
     * Set the formule.
     *
     * @param string $formule The formule.
     */
    public function setFormule($formule) {
        $this->formule = $formule;
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
     * Set the num bt.
     *
     * @param int $numBt The num bt.
     */
    public function setNumBt($numBt) {
        $this->numBt = $numBt;
        return $this;
    }

    /**
     * Set the num ligne rev.
     *
     * @param int $numLigneRev The num ligne rev.
     */
    public function setNumLigneRev($numLigneRev) {
        $this->numLigneRev = $numLigneRev;
        return $this;
    }

    /**
     * Set the periode revisee.
     *
     * @param DateTime|null $periodeRevisee The periode revisee.
     */
    public function setPeriodeRevisee(DateTime $periodeRevisee = null) {
        $this->periodeRevisee = $periodeRevisee;
        return $this;
    }

    /**
     * Set the pourcentage.
     *
     * @param float $pourcentage The pourcentage.
     */
    public function setPourcentage($pourcentage) {
        $this->pourcentage = $pourcentage;
        return $this;
    }

    /**
     * Set the refus client.
     *
     * @param bool $refusClient The refus client.
     */
    public function setRefusClient($refusClient) {
        $this->refusClient = $refusClient;
        return $this;
    }
}
