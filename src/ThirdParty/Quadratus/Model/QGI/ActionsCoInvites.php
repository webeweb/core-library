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
 * Actions co invites.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class ActionsCoInvites {

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
     * Code coll.
     *
     * @var string
     */
    private $codeColl;

    /**
     * Date ajout.
     *
     * @var DateTime|null
     */
    private $dateAjout;

    /**
     * Nom interlocuteur.
     *
     * @var string
     */
    private $nomInterlocuteur;

    /**
     * Num interlocuteur.
     *
     * @var int
     */
    private $numInterlocuteur;

    /**
     * Retour neg.
     *
     * @var bool
     */
    private $retourNeg;

    /**
     * Type invitation.
     *
     * @var int
     */
    private $typeInvitation;

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
     * Get the code coll.
     *
     * @return string Returns the code coll.
     */
    public function getCodeColl() {
        return $this->codeColl;
    }

    /**
     * Get the date ajout.
     *
     * @return DateTime|null Returns the date ajout.
     */
    public function getDateAjout() {
        return $this->dateAjout;
    }

    /**
     * Get the nom interlocuteur.
     *
     * @return string Returns the nom interlocuteur.
     */
    public function getNomInterlocuteur() {
        return $this->nomInterlocuteur;
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
     * Get the retour neg.
     *
     * @return bool Returns the retour neg.
     */
    public function getRetourNeg() {
        return $this->retourNeg;
    }

    /**
     * Get the type invitation.
     *
     * @return int Returns the type invitation.
     */
    public function getTypeInvitation() {
        return $this->typeInvitation;
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
     * @return ActionsCoInvites Returns this Actions co invites.
     */
    public function setCodeAction($codeAction) {
        $this->codeAction = $codeAction;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return ActionsCoInvites Returns this Actions co invites.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code coll.
     *
     * @param string $codeColl The code coll.
     * @return ActionsCoInvites Returns this Actions co invites.
     */
    public function setCodeColl($codeColl) {
        $this->codeColl = $codeColl;
        return $this;
    }

    /**
     * Set the date ajout.
     *
     * @param DateTime|null $dateAjout The date ajout.
     * @return ActionsCoInvites Returns this Actions co invites.
     */
    public function setDateAjout(DateTime $dateAjout = null) {
        $this->dateAjout = $dateAjout;
        return $this;
    }

    /**
     * Set the nom interlocuteur.
     *
     * @param string $nomInterlocuteur The nom interlocuteur.
     * @return ActionsCoInvites Returns this Actions co invites.
     */
    public function setNomInterlocuteur($nomInterlocuteur) {
        $this->nomInterlocuteur = $nomInterlocuteur;
        return $this;
    }

    /**
     * Set the num interlocuteur.
     *
     * @param int $numInterlocuteur The num interlocuteur.
     * @return ActionsCoInvites Returns this Actions co invites.
     */
    public function setNumInterlocuteur($numInterlocuteur) {
        $this->numInterlocuteur = $numInterlocuteur;
        return $this;
    }

    /**
     * Set the retour neg.
     *
     * @param bool $retourNeg The retour neg.
     * @return ActionsCoInvites Returns this Actions co invites.
     */
    public function setRetourNeg($retourNeg) {
        $this->retourNeg = $retourNeg;
        return $this;
    }

    /**
     * Set the type invitation.
     *
     * @param int $typeInvitation The type invitation.
     * @return ActionsCoInvites Returns this Actions co invites.
     */
    public function setTypeInvitation($typeInvitation) {
        $this->typeInvitation = $typeInvitation;
        return $this;
    }

    /**
     * Set the type invite.
     *
     * @param string $typeInvite The type invite.
     * @return ActionsCoInvites Returns this Actions co invites.
     */
    public function setTypeInvite($typeInvite) {
        $this->typeInvite = $typeInvite;
        return $this;
    }
}
