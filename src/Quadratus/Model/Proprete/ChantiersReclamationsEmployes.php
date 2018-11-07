<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Quadratus\Model\Proprete;

use DateTime;

/**
 * Chantiers reclamations employes model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\Proprete
 */
class ChantiersReclamationsEmployes {

    /**
     * Alerte.
     *
     * @var boolean
     */
    private $alerte;

    /**
     * Code affaire.
     *
     * @var string
     */
    private $codeAffaire;

    /**
     * Code chantier.
     *
     * @var string
     */
    private $codeChantier;

    /**
     * Code client.
     *
     * @var string
     */
    private $codeClient;

    /**
     * Code employe.
     *
     * @var string
     */
    private $codeEmploye;

    /**
     * Date alerte paie.
     *
     * @var DateTime
     */
    private $dateAlertePaie;

    /**
     * Lien document.
     *
     * @var string
     */
    private $lienDocument;

    /**
     * Niveau.
     *
     * @var string
     */
    private $niveau;

    /**
     * Numero reclam.
     *
     * @var int
     */
    private $numeroReclam;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the alerte.
     *
     * @return boolean Returns the alerte.
     */
    public function getAlerte() {
        return $this->alerte;
    }

    /**
     * Get the code affaire.
     *
     * @return string Returns the code affaire.
     */
    public function getCodeAffaire() {
        return $this->codeAffaire;
    }

    /**
     * Get the code chantier.
     *
     * @return string Returns the code chantier.
     */
    public function getCodeChantier() {
        return $this->codeChantier;
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
     * Get the code employe.
     *
     * @return string Returns the code employe.
     */
    public function getCodeEmploye() {
        return $this->codeEmploye;
    }

    /**
     * Get the date alerte paie.
     *
     * @return DateTime Returns the date alerte paie.
     */
    public function getDateAlertePaie() {
        return $this->dateAlertePaie;
    }

    /**
     * Get the lien document.
     *
     * @return string Returns the lien document.
     */
    public function getLienDocument() {
        return $this->lienDocument;
    }

    /**
     * Get the niveau.
     *
     * @return string Returns the niveau.
     */
    public function getNiveau() {
        return $this->niveau;
    }

    /**
     * Get the numero reclam.
     *
     * @return int Returns the numero reclam.
     */
    public function getNumeroReclam() {
        return $this->numeroReclam;
    }

    /**
     * Set the alerte.
     *
     * @param boolean $alerte The alerte.
     * @return ChantiersReclamationsEmployes Returns this chantiers reclamations employes.
     */
    public function setAlerte($alerte) {
        $this->alerte = $alerte;
        return $this;
    }

    /**
     * Set the code affaire.
     *
     * @param string $codeAffaire The code affaire.
     * @return ChantiersReclamationsEmployes Returns this chantiers reclamations employes.
     */
    public function setCodeAffaire($codeAffaire) {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string $codeChantier The code chantier.
     * @return ChantiersReclamationsEmployes Returns this chantiers reclamations employes.
     */
    public function setCodeChantier($codeChantier) {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return ChantiersReclamationsEmployes Returns this chantiers reclamations employes.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code employe.
     *
     * @param string $codeEmploye The code employe.
     * @return ChantiersReclamationsEmployes Returns this chantiers reclamations employes.
     */
    public function setCodeEmploye($codeEmploye) {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the date alerte paie.
     *
     * @param DateTime $dateAlertePaie The date alerte paie.
     * @return ChantiersReclamationsEmployes Returns this chantiers reclamations employes.
     */
    public function setDateAlertePaie(DateTime $dateAlertePaie = null) {
        $this->dateAlertePaie = $dateAlertePaie;
        return $this;
    }

    /**
     * Set the lien document.
     *
     * @param string $lienDocument The lien document.
     * @return ChantiersReclamationsEmployes Returns this chantiers reclamations employes.
     */
    public function setLienDocument($lienDocument) {
        $this->lienDocument = $lienDocument;
        return $this;
    }

    /**
     * Set the niveau.
     *
     * @param string $niveau The niveau.
     * @return ChantiersReclamationsEmployes Returns this chantiers reclamations employes.
     */
    public function setNiveau($niveau) {
        $this->niveau = $niveau;
        return $this;
    }

    /**
     * Set the numero reclam.
     *
     * @param int $numeroReclam The numero reclam.
     * @return ChantiersReclamationsEmployes Returns this chantiers reclamations employes.
     */
    public function setNumeroReclam($numeroReclam) {
        $this->numeroReclam = $numeroReclam;
        return $this;
    }

}
