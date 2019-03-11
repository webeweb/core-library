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
 * Actions co_ suivi model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class ActionsCo_Suivi {

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
     * Confirmes.
     *
     * @var int
     */
    private $confirmes;

    /**
     * Contrat.
     *
     * @var int
     */
    private $contrat;

    /**
     * Inscrits.
     *
     * @var int
     */
    private $inscrits;

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
     * Presents.
     *
     * @var int
     */
    private $presents;

    /**
     * Prise r d v.
     *
     * @var int
     */
    private $priseRDV;

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
     * Get the confirmes.
     *
     * @return int Returns the confirmes.
     */
    public function getConfirmes() {
        return $this->confirmes;
    }

    /**
     * Get the contrat.
     *
     * @return int Returns the contrat.
     */
    public function getContrat() {
        return $this->contrat;
    }

    /**
     * Get the inscrits.
     *
     * @return int Returns the inscrits.
     */
    public function getInscrits() {
        return $this->inscrits;
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
     * Get the presents.
     *
     * @return int Returns the presents.
     */
    public function getPresents() {
        return $this->presents;
    }

    /**
     * Get the prise r d v.
     *
     * @return int Returns the prise r d v.
     */
    public function getPriseRDV() {
        return $this->priseRDV;
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
     * @return ActionsCo_Suivi Returns this actions co_ suivi.
     */
    public function setCodeAction($codeAction) {
        $this->codeAction = $codeAction;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return ActionsCo_Suivi Returns this actions co_ suivi.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code manif.
     *
     * @param string $codeManif The code manif.
     * @return ActionsCo_Suivi Returns this actions co_ suivi.
     */
    public function setCodeManif($codeManif) {
        $this->codeManif = $codeManif;
        return $this;
    }

    /**
     * Set the confirmes.
     *
     * @param int $confirmes The confirmes.
     * @return ActionsCo_Suivi Returns this actions co_ suivi.
     */
    public function setConfirmes($confirmes) {
        $this->confirmes = $confirmes;
        return $this;
    }

    /**
     * Set the contrat.
     *
     * @param int $contrat The contrat.
     * @return ActionsCo_Suivi Returns this actions co_ suivi.
     */
    public function setContrat($contrat) {
        $this->contrat = $contrat;
        return $this;
    }

    /**
     * Set the inscrits.
     *
     * @param int $inscrits The inscrits.
     * @return ActionsCo_Suivi Returns this actions co_ suivi.
     */
    public function setInscrits($inscrits) {
        $this->inscrits = $inscrits;
        return $this;
    }

    /**
     * Set the num interlocuteur.
     *
     * @param int $numInterlocuteur The num interlocuteur.
     * @return ActionsCo_Suivi Returns this actions co_ suivi.
     */
    public function setNumInterlocuteur($numInterlocuteur) {
        $this->numInterlocuteur = $numInterlocuteur;
        return $this;
    }

    /**
     * Set the num seance.
     *
     * @param int $numSeance The num seance.
     * @return ActionsCo_Suivi Returns this actions co_ suivi.
     */
    public function setNumSeance($numSeance) {
        $this->numSeance = $numSeance;
        return $this;
    }

    /**
     * Set the presents.
     *
     * @param int $presents The presents.
     * @return ActionsCo_Suivi Returns this actions co_ suivi.
     */
    public function setPresents($presents) {
        $this->presents = $presents;
        return $this;
    }

    /**
     * Set the prise r d v.
     *
     * @param int $priseRDV The prise r d v.
     * @return ActionsCo_Suivi Returns this actions co_ suivi.
     */
    public function setPriseRDV($priseRDV) {
        $this->priseRDV = $priseRDV;
        return $this;
    }

    /**
     * Set the type invite.
     *
     * @param string $typeInvite The type invite.
     * @return ActionsCo_Suivi Returns this actions co_ suivi.
     */
    public function setTypeInvite($typeInvite) {
        $this->typeInvite = $typeInvite;
        return $this;
    }
}
