<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta;

/**
 * Vmp.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class Vmp {

    /**
     * Code.
     *
     * @var string
     */
    private $code;

    /**
     * Code journal.
     *
     * @var string
     */
    private $codeJournal;

    /**
     * Commentaire.
     *
     * @var string
     */
    private $commentaire;

    /**
     * Compte comm.
     *
     * @var string
     */
    private $compteComm;

    /**
     * Compte coupons.
     *
     * @var string
     */
    private $compteCoupons;

    /**
     * Compte frais.
     *
     * @var string
     */
    private $compteFrais;

    /**
     * Identifiant.
     *
     * @var string
     */
    private $identifiant;

    /**
     * Libelle.
     *
     * @var string
     */
    private $libelle;

    /**
     * Nb lignes mvt.
     *
     * @var int
     */
    private $nbLignesMvt;

    /**
     * Num compte.
     *
     * @var string
     */
    private $numCompte;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code.
     *
     * @return string Returns the code.
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * Get the code journal.
     *
     * @return string Returns the code journal.
     */
    public function getCodeJournal() {
        return $this->codeJournal;
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
     * Get the compte comm.
     *
     * @return string Returns the compte comm.
     */
    public function getCompteComm() {
        return $this->compteComm;
    }

    /**
     * Get the compte coupons.
     *
     * @return string Returns the compte coupons.
     */
    public function getCompteCoupons() {
        return $this->compteCoupons;
    }

    /**
     * Get the compte frais.
     *
     * @return string Returns the compte frais.
     */
    public function getCompteFrais() {
        return $this->compteFrais;
    }

    /**
     * Get the identifiant.
     *
     * @return string Returns the identifiant.
     */
    public function getIdentifiant() {
        return $this->identifiant;
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
     * Get the nb lignes mvt.
     *
     * @return int Returns the nb lignes mvt.
     */
    public function getNbLignesMvt() {
        return $this->nbLignesMvt;
    }

    /**
     * Get the num compte.
     *
     * @return string Returns the num compte.
     */
    public function getNumCompte() {
        return $this->numCompte;
    }

    /**
     * Set the code.
     *
     * @param string $code The code.
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the code journal.
     *
     * @param string $codeJournal The code journal.
     */
    public function setCodeJournal($codeJournal) {
        $this->codeJournal = $codeJournal;
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
     * Set the compte comm.
     *
     * @param string $compteComm The compte comm.
     */
    public function setCompteComm($compteComm) {
        $this->compteComm = $compteComm;
        return $this;
    }

    /**
     * Set the compte coupons.
     *
     * @param string $compteCoupons The compte coupons.
     */
    public function setCompteCoupons($compteCoupons) {
        $this->compteCoupons = $compteCoupons;
        return $this;
    }

    /**
     * Set the compte frais.
     *
     * @param string $compteFrais The compte frais.
     */
    public function setCompteFrais($compteFrais) {
        $this->compteFrais = $compteFrais;
        return $this;
    }

    /**
     * Set the identifiant.
     *
     * @param string $identifiant The identifiant.
     */
    public function setIdentifiant($identifiant) {
        $this->identifiant = $identifiant;
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
     * Set the nb lignes mvt.
     *
     * @param int $nbLignesMvt The nb lignes mvt.
     */
    public function setNbLignesMvt($nbLignesMvt) {
        $this->nbLignesMvt = $nbLignesMvt;
        return $this;
    }

    /**
     * Set the num compte.
     *
     * @param string $numCompte The num compte.
     */
    public function setNumCompte($numCompte) {
        $this->numCompte = $numCompte;
        return $this;
    }
}
