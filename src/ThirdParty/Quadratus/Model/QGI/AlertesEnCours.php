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
 * Alertes en cours.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class AlertesEnCours {

    /**
     * Ar demande.
     *
     * @var bool
     */
    private $arDemande;

    /**
     * Code client.
     *
     * @var string
     */
    private $codeClient;

    /**
     * Code collab dst.
     *
     * @var string
     */
    private $codeCollabDst;

    /**
     * Code collab org.
     *
     * @var string
     */
    private $codeCollabOrg;

    /**
     * Date creation.
     *
     * @var DateTime|null
     */
    private $dateCreation;

    /**
     * Date declenchement.
     *
     * @var DateTime|null
     */
    private $dateDeclenchement;

    /**
     * Id alerte.
     *
     * @var int
     */
    private $idAlerte;

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
     * Get the ar demande.
     *
     * @return bool Returns the ar demande.
     */
    public function getArDemande() {
        return $this->arDemande;
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
     * Get the code collab dst.
     *
     * @return string Returns the code collab dst.
     */
    public function getCodeCollabDst() {
        return $this->codeCollabDst;
    }

    /**
     * Get the code collab org.
     *
     * @return string Returns the code collab org.
     */
    public function getCodeCollabOrg() {
        return $this->codeCollabOrg;
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
     * Get the date declenchement.
     *
     * @return DateTime|null Returns the date declenchement.
     */
    public function getDateDeclenchement() {
        return $this->dateDeclenchement;
    }

    /**
     * Get the id alerte.
     *
     * @return int Returns the id alerte.
     */
    public function getIdAlerte() {
        return $this->idAlerte;
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
     * Set the ar demande.
     *
     * @param bool $arDemande The ar demande.
     * @return AlertesEnCours Returns this Alertes en cours.
     */
    public function setArDemande($arDemande) {
        $this->arDemande = $arDemande;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return AlertesEnCours Returns this Alertes en cours.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code collab dst.
     *
     * @param string $codeCollabDst The code collab dst.
     * @return AlertesEnCours Returns this Alertes en cours.
     */
    public function setCodeCollabDst($codeCollabDst) {
        $this->codeCollabDst = $codeCollabDst;
        return $this;
    }

    /**
     * Set the code collab org.
     *
     * @param string $codeCollabOrg The code collab org.
     * @return AlertesEnCours Returns this Alertes en cours.
     */
    public function setCodeCollabOrg($codeCollabOrg) {
        $this->codeCollabOrg = $codeCollabOrg;
        return $this;
    }

    /**
     * Set the date creation.
     *
     * @param DateTime|null $dateCreation The date creation.
     * @return AlertesEnCours Returns this Alertes en cours.
     */
    public function setDateCreation(DateTime $dateCreation = null) {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    /**
     * Set the date declenchement.
     *
     * @param DateTime|null $dateDeclenchement The date declenchement.
     * @return AlertesEnCours Returns this Alertes en cours.
     */
    public function setDateDeclenchement(DateTime $dateDeclenchement = null) {
        $this->dateDeclenchement = $dateDeclenchement;
        return $this;
    }

    /**
     * Set the id alerte.
     *
     * @param int $idAlerte The id alerte.
     * @return AlertesEnCours Returns this Alertes en cours.
     */
    public function setIdAlerte($idAlerte) {
        $this->idAlerte = $idAlerte;
        return $this;
    }

    /**
     * Set the texte alerte.
     *
     * @param string $texteAlerte The texte alerte.
     * @return AlertesEnCours Returns this Alertes en cours.
     */
    public function setTexteAlerte($texteAlerte) {
        $this->texteAlerte = $texteAlerte;
        return $this;
    }
}
