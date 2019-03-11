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
 * Logiciels model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class Logiciels {

    /**
     * Categorie.
     *
     * @var string
     */
    private $categorie;

    /**
     * Code client.
     *
     * @var string
     */
    private $codeClient;

    /**
     * Code intervenant.
     *
     * @var string
     */
    private $codeIntervenant;

    /**
     * Commentaire.
     *
     * @var string
     */
    private $commentaire;

    /**
     * Date achat.
     *
     * @var DateTime
     */
    private $dateAchat;

    /**
     * Date fin maint.
     *
     * @var DateTime
     */
    private $dateFinMaint;

    /**
     * Indice aff.
     *
     * @var int
     */
    private $indiceAff;

    /**
     * Maintenance.
     *
     * @var bool
     */
    private $maintenance;

    /**
     * Montant maint.
     *
     * @var float
     */
    private $montantMaint;

    /**
     * Nom logiciel.
     *
     * @var string
     */
    private $nomLogiciel;

    /**
     * Num licence.
     *
     * @var string
     */
    private $numLicence;

    /**
     * Ref image.
     *
     * @var string
     */
    private $refImage;

    /**
     * Sous categorie.
     *
     * @var string
     */
    private $sousCategorie;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the categorie.
     *
     * @return string Returns the categorie.
     */
    public function getCategorie() {
        return $this->categorie;
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
     * Get the code intervenant.
     *
     * @return string Returns the code intervenant.
     */
    public function getCodeIntervenant() {
        return $this->codeIntervenant;
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
     * Get the date achat.
     *
     * @return DateTime Returns the date achat.
     */
    public function getDateAchat() {
        return $this->dateAchat;
    }

    /**
     * Get the date fin maint.
     *
     * @return DateTime Returns the date fin maint.
     */
    public function getDateFinMaint() {
        return $this->dateFinMaint;
    }

    /**
     * Get the indice aff.
     *
     * @return int Returns the indice aff.
     */
    public function getIndiceAff() {
        return $this->indiceAff;
    }

    /**
     * Get the maintenance.
     *
     * @return bool Returns the maintenance.
     */
    public function getMaintenance() {
        return $this->maintenance;
    }

    /**
     * Get the montant maint.
     *
     * @return float Returns the montant maint.
     */
    public function getMontantMaint() {
        return $this->montantMaint;
    }

    /**
     * Get the nom logiciel.
     *
     * @return string Returns the nom logiciel.
     */
    public function getNomLogiciel() {
        return $this->nomLogiciel;
    }

    /**
     * Get the num licence.
     *
     * @return string Returns the num licence.
     */
    public function getNumLicence() {
        return $this->numLicence;
    }

    /**
     * Get the ref image.
     *
     * @return string Returns the ref image.
     */
    public function getRefImage() {
        return $this->refImage;
    }

    /**
     * Get the sous categorie.
     *
     * @return string Returns the sous categorie.
     */
    public function getSousCategorie() {
        return $this->sousCategorie;
    }

    /**
     * Set the categorie.
     *
     * @param string $categorie The categorie.
     * @return Logiciels Returns this logiciels.
     */
    public function setCategorie($categorie) {
        $this->categorie = $categorie;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return Logiciels Returns this logiciels.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code intervenant.
     *
     * @param string $codeIntervenant The code intervenant.
     * @return Logiciels Returns this logiciels.
     */
    public function setCodeIntervenant($codeIntervenant) {
        $this->codeIntervenant = $codeIntervenant;
        return $this;
    }

    /**
     * Set the commentaire.
     *
     * @param string $commentaire The commentaire.
     * @return Logiciels Returns this logiciels.
     */
    public function setCommentaire($commentaire) {
        $this->commentaire = $commentaire;
        return $this;
    }

    /**
     * Set the date achat.
     *
     * @param DateTime $dateAchat The date achat.
     * @return Logiciels Returns this logiciels.
     */
    public function setDateAchat(DateTime $dateAchat = null) {
        $this->dateAchat = $dateAchat;
        return $this;
    }

    /**
     * Set the date fin maint.
     *
     * @param DateTime $dateFinMaint The date fin maint.
     * @return Logiciels Returns this logiciels.
     */
    public function setDateFinMaint(DateTime $dateFinMaint = null) {
        $this->dateFinMaint = $dateFinMaint;
        return $this;
    }

    /**
     * Set the indice aff.
     *
     * @param int $indiceAff The indice aff.
     * @return Logiciels Returns this logiciels.
     */
    public function setIndiceAff($indiceAff) {
        $this->indiceAff = $indiceAff;
        return $this;
    }

    /**
     * Set the maintenance.
     *
     * @param bool $maintenance The maintenance.
     * @return Logiciels Returns this logiciels.
     */
    public function setMaintenance($maintenance) {
        $this->maintenance = $maintenance;
        return $this;
    }

    /**
     * Set the montant maint.
     *
     * @param float $montantMaint The montant maint.
     * @return Logiciels Returns this logiciels.
     */
    public function setMontantMaint($montantMaint) {
        $this->montantMaint = $montantMaint;
        return $this;
    }

    /**
     * Set the nom logiciel.
     *
     * @param string $nomLogiciel The nom logiciel.
     * @return Logiciels Returns this logiciels.
     */
    public function setNomLogiciel($nomLogiciel) {
        $this->nomLogiciel = $nomLogiciel;
        return $this;
    }

    /**
     * Set the num licence.
     *
     * @param string $numLicence The num licence.
     * @return Logiciels Returns this logiciels.
     */
    public function setNumLicence($numLicence) {
        $this->numLicence = $numLicence;
        return $this;
    }

    /**
     * Set the ref image.
     *
     * @param string $refImage The ref image.
     * @return Logiciels Returns this logiciels.
     */
    public function setRefImage($refImage) {
        $this->refImage = $refImage;
        return $this;
    }

    /**
     * Set the sous categorie.
     *
     * @param string $sousCategorie The sous categorie.
     * @return Logiciels Returns this logiciels.
     */
    public function setSousCategorie($sousCategorie) {
        $this->sousCategorie = $sousCategorie;
        return $this;
    }
}
