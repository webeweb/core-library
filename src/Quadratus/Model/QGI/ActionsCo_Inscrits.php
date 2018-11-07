<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Quadratus\Model\QGI;

/**
 * Actions co_ inscrits model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
 */
class ActionsCo_Inscrits {

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
     * @var boolean
     */
    private $confirme;

    /**
     * E mail.
     *
     * @var string
     */
    private $eMail;

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
     * @var boolean
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
     * @return boolean Returns the confirme.
     */
    public function getConfirme() {
        return $this->confirme;
    }

    /**
     * Get the e mail.
     *
     * @return string Returns the e mail.
     */
    public function getEMail() {
        return $this->eMail;
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
     * @return boolean Returns the present.
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
     * @return ActionsCo_Inscrits Returns this actions co_ inscrits.
     */
    public function setCodeAction($codeAction) {
        $this->codeAction = $codeAction;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return ActionsCo_Inscrits Returns this actions co_ inscrits.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code manif.
     *
     * @param string $codeManif The code manif.
     * @return ActionsCo_Inscrits Returns this actions co_ inscrits.
     */
    public function setCodeManif($codeManif) {
        $this->codeManif = $codeManif;
        return $this;
    }

    /**
     * Set the confirme.
     *
     * @param boolean $confirme The confirme.
     * @return ActionsCo_Inscrits Returns this actions co_ inscrits.
     */
    public function setConfirme($confirme) {
        $this->confirme = $confirme;
        return $this;
    }

    /**
     * Set the e mail.
     *
     * @param string $eMail The e mail.
     * @return ActionsCo_Inscrits Returns this actions co_ inscrits.
     */
    public function setEMail($eMail) {
        $this->eMail = $eMail;
        return $this;
    }

    /**
     * Set the fax.
     *
     * @param string $fax The fax.
     * @return ActionsCo_Inscrits Returns this actions co_ inscrits.
     */
    public function setFax($fax) {
        $this->fax = $fax;
        return $this;
    }

    /**
     * Set the nom.
     *
     * @param string $nom The nom.
     * @return ActionsCo_Inscrits Returns this actions co_ inscrits.
     */
    public function setNom($nom) {
        $this->nom = $nom;
        return $this;
    }

    /**
     * Set the num interlocuteur.
     *
     * @param int $numInterlocuteur The num interlocuteur.
     * @return ActionsCo_Inscrits Returns this actions co_ inscrits.
     */
    public function setNumInterlocuteur($numInterlocuteur) {
        $this->numInterlocuteur = $numInterlocuteur;
        return $this;
    }

    /**
     * Set the num seance.
     *
     * @param int $numSeance The num seance.
     * @return ActionsCo_Inscrits Returns this actions co_ inscrits.
     */
    public function setNumSeance($numSeance) {
        $this->numSeance = $numSeance;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param int $numero The numero.
     * @return ActionsCo_Inscrits Returns this actions co_ inscrits.
     */
    public function setNumero($numero) {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the prenom.
     *
     * @param string $prenom The prenom.
     * @return ActionsCo_Inscrits Returns this actions co_ inscrits.
     */
    public function setPrenom($prenom) {
        $this->prenom = $prenom;
        return $this;
    }

    /**
     * Set the present.
     *
     * @param boolean $present The present.
     * @return ActionsCo_Inscrits Returns this actions co_ inscrits.
     */
    public function setPresent($present) {
        $this->present = $present;
        return $this;
    }

    /**
     * Set the telephone.
     *
     * @param string $telephone The telephone.
     * @return ActionsCo_Inscrits Returns this actions co_ inscrits.
     */
    public function setTelephone($telephone) {
        $this->telephone = $telephone;
        return $this;
    }

    /**
     * Set the type invite.
     *
     * @param string $typeInvite The type invite.
     * @return ActionsCo_Inscrits Returns this actions co_ inscrits.
     */
    public function setTypeInvite($typeInvite) {
        $this->typeInvite = $typeInvite;
        return $this;
    }

}
