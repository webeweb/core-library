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
 * Alertes historique.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class AlertesHistorique {

    /**
     * Ar envoye.
     *
     * @var bool
     */
    private $arEnvoye;

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
     * Date reponse.
     *
     * @var DateTime|null
     */
    private $dateReponse;

    /**
     * Id alerte histo.
     *
     * @var int
     */
    private $idAlerteHisto;

    /**
     * Texte alerte.
     *
     * @var string
     */
    private $texteAlerte;

    /**
     * Texte reponse.
     *
     * @var string
     */
    private $texteReponse;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the ar envoye.
     *
     * @return bool Returns the ar envoye.
     */
    public function getArEnvoye() {
        return $this->arEnvoye;
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
     * Get the date reponse.
     *
     * @return DateTime|null Returns the date reponse.
     */
    public function getDateReponse() {
        return $this->dateReponse;
    }

    /**
     * Get the id alerte histo.
     *
     * @return int Returns the id alerte histo.
     */
    public function getIdAlerteHisto() {
        return $this->idAlerteHisto;
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
     * Get the texte reponse.
     *
     * @return string Returns the texte reponse.
     */
    public function getTexteReponse() {
        return $this->texteReponse;
    }

    /**
     * Set the ar envoye.
     *
     * @param bool $arEnvoye The ar envoye.
     */
    public function setArEnvoye($arEnvoye) {
        $this->arEnvoye = $arEnvoye;
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
     * Set the code collab dst.
     *
     * @param string $codeCollabDst The code collab dst.
     */
    public function setCodeCollabDst($codeCollabDst) {
        $this->codeCollabDst = $codeCollabDst;
        return $this;
    }

    /**
     * Set the code collab org.
     *
     * @param string $codeCollabOrg The code collab org.
     */
    public function setCodeCollabOrg($codeCollabOrg) {
        $this->codeCollabOrg = $codeCollabOrg;
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
     * Set the date declenchement.
     *
     * @param DateTime|null $dateDeclenchement The date declenchement.
     */
    public function setDateDeclenchement(DateTime $dateDeclenchement = null) {
        $this->dateDeclenchement = $dateDeclenchement;
        return $this;
    }

    /**
     * Set the date reponse.
     *
     * @param DateTime|null $dateReponse The date reponse.
     */
    public function setDateReponse(DateTime $dateReponse = null) {
        $this->dateReponse = $dateReponse;
        return $this;
    }

    /**
     * Set the id alerte histo.
     *
     * @param int $idAlerteHisto The id alerte histo.
     */
    public function setIdAlerteHisto($idAlerteHisto) {
        $this->idAlerteHisto = $idAlerteHisto;
        return $this;
    }

    /**
     * Set the texte alerte.
     *
     * @param string $texteAlerte The texte alerte.
     */
    public function setTexteAlerte($texteAlerte) {
        $this->texteAlerte = $texteAlerte;
        return $this;
    }

    /**
     * Set the texte reponse.
     *
     * @param string $texteReponse The texte reponse.
     */
    public function setTexteReponse($texteReponse) {
        $this->texteReponse = $texteReponse;
        return $this;
    }
}
