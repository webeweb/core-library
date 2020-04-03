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
 * Actions co inscrits.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class ActionsCoInscrits {

    /**
     * Code action.
     *
     * @var string
     */
    private $codeAction;

    /**
     * Code client.
     *
     * @var string
     */
    private $codeClient;

    /**
     * Code manif.
     *
     * @var string
     */
    private $codeManif;

    /**
     * Confirme.
     *
     * @var bool
     */
    private $confirme;

    /**
     * Email.
     *
     * @var string
     */
    private $email;

    /**
     * Fax.
     *
     * @var string
     */
    private $fax;

    /**
     * Nom.
     *
     * @var string
     */
    private $nom;

    /**
     * Num interlocuteur.
     *
     * @var int
     */
    private $numInterlocuteur;

    /**
     * Num seance.
     *
     * @var int
     */
    private $numSeance;

    /**
     * Numero.
     *
     * @var int
     */
    private $numero;

    /**
     * Prenom.
     *
     * @var string
     */
    private $prenom;

    /**
     * Present.
     *
     * @var bool
     */
    private $present;

    /**
     * Telephone.
     *
     * @var string
     */
    private $telephone;

    /**
     * Type invite.
     *
     * @var string
     */
    private $typeInvite;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code action.
     *
     * @return string Returns the code action.
     */
    public function getCodeAction() {
        return $this->codeAction;
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
     * Get the code manif.
     *
     * @return string Returns the code manif.
     */
    public function getCodeManif() {
        return $this->codeManif;
    }

    /**
     * Get the confirme.
     *
     * @return bool Returns the confirme.
     */
    public function getConfirme() {
        return $this->confirme;
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
     * Get the fax.
     *
     * @return string Returns the fax.
     */
    public function getFax() {
        return $this->fax;
    }

    /**
     * Get the nom.
     *
     * @return string Returns the nom.
     */
    public function getNom() {
        return $this->nom;
    }

    /**
     * Get the num interlocuteur.
     *
     * @return int Returns the num interlocuteur.
     */
    public function getNumInterlocuteur() {
        return $this->numInterlocuteur;
    }

    /**
     * Get the num seance.
     *
     * @return int Returns the num seance.
     */
    public function getNumSeance() {
        return $this->numSeance;
    }

    /**
     * Get the numero.
     *
     * @return int Returns the numero.
     */
    public function getNumero() {
        return $this->numero;
    }

    /**
     * Get the prenom.
     *
     * @return string Returns the prenom.
     */
    public function getPrenom() {
        return $this->prenom;
    }

    /**
     * Get the present.
     *
     * @return bool Returns the present.
     */
    public function getPresent() {
        return $this->present;
    }

    /**
     * Get the telephone.
     *
     * @return string Returns the telephone.
     */
    public function getTelephone() {
        return $this->telephone;
    }

    /**
     * Get the type invite.
     *
     * @return string Returns the type invite.
     */
    public function getTypeInvite() {
        return $this->typeInvite;
    }

    /**
     * Set the code action.
     *
     * @param string $codeAction The code action.
     * @return ActionsCoInscrits Returns this Actions co inscrits.
     */
    public function setCodeAction($codeAction) {
        $this->codeAction = $codeAction;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return ActionsCoInscrits Returns this Actions co inscrits.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code manif.
     *
     * @param string $codeManif The code manif.
     * @return ActionsCoInscrits Returns this Actions co inscrits.
     */
    public function setCodeManif($codeManif) {
        $this->codeManif = $codeManif;
        return $this;
    }

    /**
     * Set the confirme.
     *
     * @param bool $confirme The confirme.
     * @return ActionsCoInscrits Returns this Actions co inscrits.
     */
    public function setConfirme($confirme) {
        $this->confirme = $confirme;
        return $this;
    }

    /**
     * Set the email.
     *
     * @param string $email The email.
     * @return ActionsCoInscrits Returns this Actions co inscrits.
     */
    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    /**
     * Set the fax.
     *
     * @param string $fax The fax.
     * @return ActionsCoInscrits Returns this Actions co inscrits.
     */
    public function setFax($fax) {
        $this->fax = $fax;
        return $this;
    }

    /**
     * Set the nom.
     *
     * @param string $nom The nom.
     * @return ActionsCoInscrits Returns this Actions co inscrits.
     */
    public function setNom($nom) {
        $this->nom = $nom;
        return $this;
    }

    /**
     * Set the num interlocuteur.
     *
     * @param int $numInterlocuteur The num interlocuteur.
     * @return ActionsCoInscrits Returns this Actions co inscrits.
     */
    public function setNumInterlocuteur($numInterlocuteur) {
        $this->numInterlocuteur = $numInterlocuteur;
        return $this;
    }

    /**
     * Set the num seance.
     *
     * @param int $numSeance The num seance.
     * @return ActionsCoInscrits Returns this Actions co inscrits.
     */
    public function setNumSeance($numSeance) {
        $this->numSeance = $numSeance;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param int $numero The numero.
     * @return ActionsCoInscrits Returns this Actions co inscrits.
     */
    public function setNumero($numero) {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the prenom.
     *
     * @param string $prenom The prenom.
     * @return ActionsCoInscrits Returns this Actions co inscrits.
     */
    public function setPrenom($prenom) {
        $this->prenom = $prenom;
        return $this;
    }

    /**
     * Set the present.
     *
     * @param bool $present The present.
     * @return ActionsCoInscrits Returns this Actions co inscrits.
     */
    public function setPresent($present) {
        $this->present = $present;
        return $this;
    }

    /**
     * Set the telephone.
     *
     * @param string $telephone The telephone.
     * @return ActionsCoInscrits Returns this Actions co inscrits.
     */
    public function setTelephone($telephone) {
        $this->telephone = $telephone;
        return $this;
    }

    /**
     * Set the type invite.
     *
     * @param string $typeInvite The type invite.
     * @return ActionsCoInscrits Returns this Actions co inscrits.
     */
    public function setTypeInvite($typeInvite) {
        $this->typeInvite = $typeInvite;
        return $this;
    }
}
