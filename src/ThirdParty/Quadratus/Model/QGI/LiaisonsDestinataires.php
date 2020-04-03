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

/**
 * Liaisons destinataires.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class LiaisonsDestinataires {

    /**
     * Agence.
     *
     * @var bool
     */
    private $agence;

    /**
     * Chemin.
     *
     * @var string
     */
    private $chemin;

    /**
     * Code.
     *
     * @var string
     */
    private $code;

    /**
     * Email.
     *
     * @var string
     */
    private $email;

    /**
     * Intitule.
     *
     * @var string
     */
    private $intitule;

    /**
     * Machine.
     *
     * @var string
     */
    private $machine;

    /**
     * Mot de passe.
     *
     * @var string
     */
    private $motDePasse;

    /**
     * Partage.
     *
     * @var string
     */
    private $partage;

    /**
     * Selection article.
     *
     * @var string
     */
    private $selectionArticle;

    /**
     * Selection client.
     *
     * @var string
     */
    private $selectionClient;

    /**
     * Selection fournisseur.
     *
     * @var string
     */
    private $selectionFournisseur;

    /**
     * Type liaison.
     *
     * @var string
     */
    private $typeLiaison;

    /**
     * Utilisateur.
     *
     * @var string
     */
    private $utilisateur;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the agence.
     *
     * @return bool Returns the agence.
     */
    public function getAgence() {
        return $this->agence;
    }

    /**
     * Get the chemin.
     *
     * @return string Returns the chemin.
     */
    public function getChemin() {
        return $this->chemin;
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
     * Get the email.
     *
     * @return string Returns the email.
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * Get the intitule.
     *
     * @return string Returns the intitule.
     */
    public function getIntitule() {
        return $this->intitule;
    }

    /**
     * Get the machine.
     *
     * @return string Returns the machine.
     */
    public function getMachine() {
        return $this->machine;
    }

    /**
     * Get the mot de passe.
     *
     * @return string Returns the mot de passe.
     */
    public function getMotDePasse() {
        return $this->motDePasse;
    }

    /**
     * Get the partage.
     *
     * @return string Returns the partage.
     */
    public function getPartage() {
        return $this->partage;
    }

    /**
     * Get the selection article.
     *
     * @return string Returns the selection article.
     */
    public function getSelectionArticle() {
        return $this->selectionArticle;
    }

    /**
     * Get the selection client.
     *
     * @return string Returns the selection client.
     */
    public function getSelectionClient() {
        return $this->selectionClient;
    }

    /**
     * Get the selection fournisseur.
     *
     * @return string Returns the selection fournisseur.
     */
    public function getSelectionFournisseur() {
        return $this->selectionFournisseur;
    }

    /**
     * Get the type liaison.
     *
     * @return string Returns the type liaison.
     */
    public function getTypeLiaison() {
        return $this->typeLiaison;
    }

    /**
     * Get the utilisateur.
     *
     * @return string Returns the utilisateur.
     */
    public function getUtilisateur() {
        return $this->utilisateur;
    }

    /**
     * Set the agence.
     *
     * @param bool $agence The agence.
     * @return LiaisonsDestinataires Returns this Liaisons destinataires.
     */
    public function setAgence($agence) {
        $this->agence = $agence;
        return $this;
    }

    /**
     * Set the chemin.
     *
     * @param string $chemin The chemin.
     * @return LiaisonsDestinataires Returns this Liaisons destinataires.
     */
    public function setChemin($chemin) {
        $this->chemin = $chemin;
        return $this;
    }

    /**
     * Set the code.
     *
     * @param string $code The code.
     * @return LiaisonsDestinataires Returns this Liaisons destinataires.
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the email.
     *
     * @param string $email The email.
     * @return LiaisonsDestinataires Returns this Liaisons destinataires.
     */
    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string $intitule The intitule.
     * @return LiaisonsDestinataires Returns this Liaisons destinataires.
     */
    public function setIntitule($intitule) {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the machine.
     *
     * @param string $machine The machine.
     * @return LiaisonsDestinataires Returns this Liaisons destinataires.
     */
    public function setMachine($machine) {
        $this->machine = $machine;
        return $this;
    }

    /**
     * Set the mot de passe.
     *
     * @param string $motDePasse The mot de passe.
     * @return LiaisonsDestinataires Returns this Liaisons destinataires.
     */
    public function setMotDePasse($motDePasse) {
        $this->motDePasse = $motDePasse;
        return $this;
    }

    /**
     * Set the partage.
     *
     * @param string $partage The partage.
     * @return LiaisonsDestinataires Returns this Liaisons destinataires.
     */
    public function setPartage($partage) {
        $this->partage = $partage;
        return $this;
    }

    /**
     * Set the selection article.
     *
     * @param string $selectionArticle The selection article.
     * @return LiaisonsDestinataires Returns this Liaisons destinataires.
     */
    public function setSelectionArticle($selectionArticle) {
        $this->selectionArticle = $selectionArticle;
        return $this;
    }

    /**
     * Set the selection client.
     *
     * @param string $selectionClient The selection client.
     * @return LiaisonsDestinataires Returns this Liaisons destinataires.
     */
    public function setSelectionClient($selectionClient) {
        $this->selectionClient = $selectionClient;
        return $this;
    }

    /**
     * Set the selection fournisseur.
     *
     * @param string $selectionFournisseur The selection fournisseur.
     * @return LiaisonsDestinataires Returns this Liaisons destinataires.
     */
    public function setSelectionFournisseur($selectionFournisseur) {
        $this->selectionFournisseur = $selectionFournisseur;
        return $this;
    }

    /**
     * Set the type liaison.
     *
     * @param string $typeLiaison The type liaison.
     * @return LiaisonsDestinataires Returns this Liaisons destinataires.
     */
    public function setTypeLiaison($typeLiaison) {
        $this->typeLiaison = $typeLiaison;
        return $this;
    }

    /**
     * Set the utilisateur.
     *
     * @param string $utilisateur The utilisateur.
     * @return LiaisonsDestinataires Returns this Liaisons destinataires.
     */
    public function setUtilisateur($utilisateur) {
        $this->utilisateur = $utilisateur;
        return $this;
    }
}
