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
 * Actions co suivi.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class ActionsCoSuivi {

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
     * Prise rdv.
     *
     * @var int
     */
    private $priseRdv;

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
     * Get the prise rdv.
     *
     * @return int Returns the prise rdv.
     */
    public function getPriseRdv() {
        return $this->priseRdv;
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
     */
    public function setCodeAction($codeAction) {
        $this->codeAction = $codeAction;
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
     * Set the code manif.
     *
     * @param string $codeManif The code manif.
     */
    public function setCodeManif($codeManif) {
        $this->codeManif = $codeManif;
        return $this;
    }

    /**
     * Set the confirmes.
     *
     * @param int $confirmes The confirmes.
     */
    public function setConfirmes($confirmes) {
        $this->confirmes = $confirmes;
        return $this;
    }

    /**
     * Set the contrat.
     *
     * @param int $contrat The contrat.
     */
    public function setContrat($contrat) {
        $this->contrat = $contrat;
        return $this;
    }

    /**
     * Set the inscrits.
     *
     * @param int $inscrits The inscrits.
     */
    public function setInscrits($inscrits) {
        $this->inscrits = $inscrits;
        return $this;
    }

    /**
     * Set the num interlocuteur.
     *
     * @param int $numInterlocuteur The num interlocuteur.
     */
    public function setNumInterlocuteur($numInterlocuteur) {
        $this->numInterlocuteur = $numInterlocuteur;
        return $this;
    }

    /**
     * Set the num seance.
     *
     * @param int $numSeance The num seance.
     */
    public function setNumSeance($numSeance) {
        $this->numSeance = $numSeance;
        return $this;
    }

    /**
     * Set the presents.
     *
     * @param int $presents The presents.
     */
    public function setPresents($presents) {
        $this->presents = $presents;
        return $this;
    }

    /**
     * Set the prise rdv.
     *
     * @param int $priseRdv The prise rdv.
     */
    public function setPriseRdv($priseRdv) {
        $this->priseRdv = $priseRdv;
        return $this;
    }

    /**
     * Set the type invite.
     *
     * @param string $typeInvite The type invite.
     */
    public function setTypeInvite($typeInvite) {
        $this->typeInvite = $typeInvite;
        return $this;
    }
}
