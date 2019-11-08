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
 * Materiels.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class Materiels {

    /**
     * Car tec.
     *
     * @var string
     */
    private $carTec;

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
     * @var DateTime|null
     */
    private $dateAchat;

    /**
     * Date fin util.
     *
     * @var DateTime|null
     */
    private $dateFinUtil;

    /**
     * Indice aff.
     *
     * @var int
     */
    private $indiceAff;

    /**
     * Libelle.
     *
     * @var string
     */
    private $libelle;

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
     * Get the car tec.
     *
     * @return string Returns the car tec.
     */
    public function getCarTec() {
        return $this->carTec;
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
     * @return DateTime|null Returns the date achat.
     */
    public function getDateAchat() {
        return $this->dateAchat;
    }

    /**
     * Get the date fin util.
     *
     * @return DateTime|null Returns the date fin util.
     */
    public function getDateFinUtil() {
        return $this->dateFinUtil;
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
     * Get the libelle.
     *
     * @return string Returns the libelle.
     */
    public function getLibelle() {
        return $this->libelle;
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
     * Set the car tec.
     *
     * @param string $carTec The car tec.
     */
    public function setCarTec($carTec) {
        $this->carTec = $carTec;
        return $this;
    }

    /**
     * Set the categorie.
     *
     * @param string $categorie The categorie.
     */
    public function setCategorie($categorie) {
        $this->categorie = $categorie;
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
     * Set the code intervenant.
     *
     * @param string $codeIntervenant The code intervenant.
     */
    public function setCodeIntervenant($codeIntervenant) {
        $this->codeIntervenant = $codeIntervenant;
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
     * Set the date achat.
     *
     * @param DateTime|null $dateAchat The date achat.
     */
    public function setDateAchat(DateTime $dateAchat = null) {
        $this->dateAchat = $dateAchat;
        return $this;
    }

    /**
     * Set the date fin util.
     *
     * @param DateTime|null $dateFinUtil The date fin util.
     */
    public function setDateFinUtil(DateTime $dateFinUtil = null) {
        $this->dateFinUtil = $dateFinUtil;
        return $this;
    }

    /**
     * Set the indice aff.
     *
     * @param int $indiceAff The indice aff.
     */
    public function setIndiceAff($indiceAff) {
        $this->indiceAff = $indiceAff;
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
     * Set the ref image.
     *
     * @param string $refImage The ref image.
     */
    public function setRefImage($refImage) {
        $this->refImage = $refImage;
        return $this;
    }

    /**
     * Set the sous categorie.
     *
     * @param string $sousCategorie The sous categorie.
     */
    public function setSousCategorie($sousCategorie) {
        $this->sousCategorie = $sousCategorie;
        return $this;
    }
}
