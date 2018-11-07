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

use DateTime;

/**
 * Alertes en cours model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
 */
class AlertesEnCours {

    /**
     * A r demande.
     *
     * @var boolean
     */
    private $aRDemande;

    /**
     * Code client.
     *
     * @var string
     */
    private $codeClient;

    /**
     * Code collab d s t.
     *
     * @var string
     */
    private $codeCollabDST;

    /**
     * Code collab o r g.
     *
     * @var string
     */
    private $codeCollabORG;

    /**
     * Date creation.
     *
     * @var DateTime
     */
    private $dateCreation;

    /**
     * Date declenchement.
     *
     * @var DateTime
     */
    private $dateDeclenchement;

    /**
     * I d alerte.
     *
     * @var int
     */
    private $iDAlerte;

    /**
     * Texte alerte.
     *
     * @var string
     */
    private $texteAlerte;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the a r demande.
     *
     * @return boolean Returns the a r demande.
     */
    public function getARDemande() {
        return $this->aRDemande;
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
     * Get the code collab d s t.
     *
     * @return string Returns the code collab d s t.
     */
    public function getCodeCollabDST() {
        return $this->codeCollabDST;
    }

    /**
     * Get the code collab o r g.
     *
     * @return string Returns the code collab o r g.
     */
    public function getCodeCollabORG() {
        return $this->codeCollabORG;
    }

    /**
     * Get the date creation.
     *
     * @return DateTime Returns the date creation.
     */
    public function getDateCreation() {
        return $this->dateCreation;
    }

    /**
     * Get the date declenchement.
     *
     * @return DateTime Returns the date declenchement.
     */
    public function getDateDeclenchement() {
        return $this->dateDeclenchement;
    }

    /**
     * Get the i d alerte.
     *
     * @return int Returns the i d alerte.
     */
    public function getIDAlerte() {
        return $this->iDAlerte;
    }

    /**
     * Get the texte alerte.
     *
     * @return string Returns the texte alerte.
     */
    public function getTexteAlerte() {
        return $this->texteAlerte;
    }

    /**
     * Set the a r demande.
     *
     * @param boolean $aRDemande The a r demande.
     * @return AlertesEnCours Returns this alertes en cours.
     */
    public function setARDemande($aRDemande) {
        $this->aRDemande = $aRDemande;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return AlertesEnCours Returns this alertes en cours.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code collab d s t.
     *
     * @param string $codeCollabDST The code collab d s t.
     * @return AlertesEnCours Returns this alertes en cours.
     */
    public function setCodeCollabDST($codeCollabDST) {
        $this->codeCollabDST = $codeCollabDST;
        return $this;
    }

    /**
     * Set the code collab o r g.
     *
     * @param string $codeCollabORG The code collab o r g.
     * @return AlertesEnCours Returns this alertes en cours.
     */
    public function setCodeCollabORG($codeCollabORG) {
        $this->codeCollabORG = $codeCollabORG;
        return $this;
    }

    /**
     * Set the date creation.
     *
     * @param DateTime $dateCreation The date creation.
     * @return AlertesEnCours Returns this alertes en cours.
     */
    public function setDateCreation(DateTime $dateCreation = null) {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    /**
     * Set the date declenchement.
     *
     * @param DateTime $dateDeclenchement The date declenchement.
     * @return AlertesEnCours Returns this alertes en cours.
     */
    public function setDateDeclenchement(DateTime $dateDeclenchement = null) {
        $this->dateDeclenchement = $dateDeclenchement;
        return $this;
    }

    /**
     * Set the i d alerte.
     *
     * @param int $iDAlerte The i d alerte.
     * @return AlertesEnCours Returns this alertes en cours.
     */
    public function setIDAlerte($iDAlerte) {
        $this->iDAlerte = $iDAlerte;
        return $this;
    }

    /**
     * Set the texte alerte.
     *
     * @param string $texteAlerte The texte alerte.
     * @return AlertesEnCours Returns this alertes en cours.
     */
    public function setTexteAlerte($texteAlerte) {
        $this->texteAlerte = $texteAlerte;
        return $this;
    }

}
