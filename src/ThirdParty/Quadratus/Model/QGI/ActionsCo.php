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
 * Actions co.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class ActionsCo {

    /**
     * Code.
     *
     * @var string
     */
    private $code;

    /**
     * Date creation.
     *
     * @var DateTime|null
     */
    private $dateCreation;

    /**
     * Date fin vie.
     *
     * @var DateTime|null
     */
    private $dateFinVie;

    /**
     * Date modification.
     *
     * @var DateTime|null
     */
    private $dateModification;

    /**
     * Libelle.
     *
     * @var string
     */
    private $libelle;

    /**
     * Libelle memo.
     *
     * @var string
     */
    private $libelleMemo;

    /**
     * Op confirmation.
     *
     * @var bool
     */
    private $opConfirmation;

    /**
     * Op contrat signe.
     *
     * @var bool
     */
    private $opContratSigne;

    /**
     * Op explication.
     *
     * @var bool
     */
    private $opExplication;

    /**
     * Op invitation indiv.
     *
     * @var bool
     */
    private $opInvitationIndiv;

    /**
     * Op invitation masse.
     *
     * @var bool
     */
    private $opInvitationMasse;

    /**
     * Op presence.
     *
     * @var bool
     */
    private $opPresence;

    /**
     * Op prise rdv.
     *
     * @var bool
     */
    private $opPriseRdv;

    /**
     * Op relance.
     *
     * @var bool
     */
    private $opRelance;

    /**
     * Op reponse inscrip.
     *
     * @var bool
     */
    private $opReponseInscrip;

    /**
     * Op reponse negative.
     *
     * @var bool
     */
    private $opReponseNegative;

    /**
     * Op reservation.
     *
     * @var bool
     */
    private $opReservation;

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
     * Get the date creation.
     *
     * @return DateTime|null Returns the date creation.
     */
    public function getDateCreation() {
        return $this->dateCreation;
    }

    /**
     * Get the date fin vie.
     *
     * @return DateTime|null Returns the date fin vie.
     */
    public function getDateFinVie() {
        return $this->dateFinVie;
    }

    /**
     * Get the date modification.
     *
     * @return DateTime|null Returns the date modification.
     */
    public function getDateModification() {
        return $this->dateModification;
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
     * Get the libelle memo.
     *
     * @return string Returns the libelle memo.
     */
    public function getLibelleMemo() {
        return $this->libelleMemo;
    }

    /**
     * Get the op confirmation.
     *
     * @return bool Returns the op confirmation.
     */
    public function getOpConfirmation() {
        return $this->opConfirmation;
    }

    /**
     * Get the op contrat signe.
     *
     * @return bool Returns the op contrat signe.
     */
    public function getOpContratSigne() {
        return $this->opContratSigne;
    }

    /**
     * Get the op explication.
     *
     * @return bool Returns the op explication.
     */
    public function getOpExplication() {
        return $this->opExplication;
    }

    /**
     * Get the op invitation indiv.
     *
     * @return bool Returns the op invitation indiv.
     */
    public function getOpInvitationIndiv() {
        return $this->opInvitationIndiv;
    }

    /**
     * Get the op invitation masse.
     *
     * @return bool Returns the op invitation masse.
     */
    public function getOpInvitationMasse() {
        return $this->opInvitationMasse;
    }

    /**
     * Get the op presence.
     *
     * @return bool Returns the op presence.
     */
    public function getOpPresence() {
        return $this->opPresence;
    }

    /**
     * Get the op prise rdv.
     *
     * @return bool Returns the op prise rdv.
     */
    public function getOpPriseRdv() {
        return $this->opPriseRdv;
    }

    /**
     * Get the op relance.
     *
     * @return bool Returns the op relance.
     */
    public function getOpRelance() {
        return $this->opRelance;
    }

    /**
     * Get the op reponse inscrip.
     *
     * @return bool Returns the op reponse inscrip.
     */
    public function getOpReponseInscrip() {
        return $this->opReponseInscrip;
    }

    /**
     * Get the op reponse negative.
     *
     * @return bool Returns the op reponse negative.
     */
    public function getOpReponseNegative() {
        return $this->opReponseNegative;
    }

    /**
     * Get the op reservation.
     *
     * @return bool Returns the op reservation.
     */
    public function getOpReservation() {
        return $this->opReservation;
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
     * Set the date creation.
     *
     * @param DateTime|null $dateCreation The date creation.
     */
    public function setDateCreation(DateTime $dateCreation = null) {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    /**
     * Set the date fin vie.
     *
     * @param DateTime|null $dateFinVie The date fin vie.
     */
    public function setDateFinVie(DateTime $dateFinVie = null) {
        $this->dateFinVie = $dateFinVie;
        return $this;
    }

    /**
     * Set the date modification.
     *
     * @param DateTime|null $dateModification The date modification.
     */
    public function setDateModification(DateTime $dateModification = null) {
        $this->dateModification = $dateModification;
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
     * Set the libelle memo.
     *
     * @param string $libelleMemo The libelle memo.
     */
    public function setLibelleMemo($libelleMemo) {
        $this->libelleMemo = $libelleMemo;
        return $this;
    }

    /**
     * Set the op confirmation.
     *
     * @param bool $opConfirmation The op confirmation.
     */
    public function setOpConfirmation($opConfirmation) {
        $this->opConfirmation = $opConfirmation;
        return $this;
    }

    /**
     * Set the op contrat signe.
     *
     * @param bool $opContratSigne The op contrat signe.
     */
    public function setOpContratSigne($opContratSigne) {
        $this->opContratSigne = $opContratSigne;
        return $this;
    }

    /**
     * Set the op explication.
     *
     * @param bool $opExplication The op explication.
     */
    public function setOpExplication($opExplication) {
        $this->opExplication = $opExplication;
        return $this;
    }

    /**
     * Set the op invitation indiv.
     *
     * @param bool $opInvitationIndiv The op invitation indiv.
     */
    public function setOpInvitationIndiv($opInvitationIndiv) {
        $this->opInvitationIndiv = $opInvitationIndiv;
        return $this;
    }

    /**
     * Set the op invitation masse.
     *
     * @param bool $opInvitationMasse The op invitation masse.
     */
    public function setOpInvitationMasse($opInvitationMasse) {
        $this->opInvitationMasse = $opInvitationMasse;
        return $this;
    }

    /**
     * Set the op presence.
     *
     * @param bool $opPresence The op presence.
     */
    public function setOpPresence($opPresence) {
        $this->opPresence = $opPresence;
        return $this;
    }

    /**
     * Set the op prise rdv.
     *
     * @param bool $opPriseRdv The op prise rdv.
     */
    public function setOpPriseRdv($opPriseRdv) {
        $this->opPriseRdv = $opPriseRdv;
        return $this;
    }

    /**
     * Set the op relance.
     *
     * @param bool $opRelance The op relance.
     */
    public function setOpRelance($opRelance) {
        $this->opRelance = $opRelance;
        return $this;
    }

    /**
     * Set the op reponse inscrip.
     *
     * @param bool $opReponseInscrip The op reponse inscrip.
     */
    public function setOpReponseInscrip($opReponseInscrip) {
        $this->opReponseInscrip = $opReponseInscrip;
        return $this;
    }

    /**
     * Set the op reponse negative.
     *
     * @param bool $opReponseNegative The op reponse negative.
     */
    public function setOpReponseNegative($opReponseNegative) {
        $this->opReponseNegative = $opReponseNegative;
        return $this;
    }

    /**
     * Set the op reservation.
     *
     * @param bool $opReservation The op reservation.
     */
    public function setOpReservation($opReservation) {
        $this->opReservation = $opReservation;
        return $this;
    }
}
