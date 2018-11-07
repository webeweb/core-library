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
 * Avenants contrats chantiers model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\Proprete
 */
class AvenantsContratsChantiers {

    /**
     * Code absence.
     *
     * @var string
     */
    private $codeAbsence;

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
     * Code titulaire.
     *
     * @var string
     */
    private $codeTitulaire;

    /**
     * Numero avenant.
     *
     * @var int
     */
    private $numeroAvenant;

    /**
     * Numero ligne.
     *
     * @var int
     */
    private $numeroLigne;

    /**
     * Remplace au.
     *
     * @var DateTime
     */
    private $remplaceAu;

    /**
     * Remplace du.
     *
     * @var DateTime
     */
    private $remplaceDu;

    /**
     * Type document.
     *
     * @var string
     */
    private $typeDocument;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code absence.
     *
     * @return string Returns the code absence.
     */
    public function getCodeAbsence() {
        return $this->codeAbsence;
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
     * Get the code titulaire.
     *
     * @return string Returns the code titulaire.
     */
    public function getCodeTitulaire() {
        return $this->codeTitulaire;
    }

    /**
     * Get the numero avenant.
     *
     * @return int Returns the numero avenant.
     */
    public function getNumeroAvenant() {
        return $this->numeroAvenant;
    }

    /**
     * Get the numero ligne.
     *
     * @return int Returns the numero ligne.
     */
    public function getNumeroLigne() {
        return $this->numeroLigne;
    }

    /**
     * Get the remplace au.
     *
     * @return DateTime Returns the remplace au.
     */
    public function getRemplaceAu() {
        return $this->remplaceAu;
    }

    /**
     * Get the remplace du.
     *
     * @return DateTime Returns the remplace du.
     */
    public function getRemplaceDu() {
        return $this->remplaceDu;
    }

    /**
     * Get the type document.
     *
     * @return string Returns the type document.
     */
    public function getTypeDocument() {
        return $this->typeDocument;
    }

    /**
     * Set the code absence.
     *
     * @param string $codeAbsence The code absence.
     * @return AvenantsContratsChantiers Returns this avenants contrats chantiers.
     */
    public function setCodeAbsence($codeAbsence) {
        $this->codeAbsence = $codeAbsence;
        return $this;
    }

    /**
     * Set the code affaire.
     *
     * @param string $codeAffaire The code affaire.
     * @return AvenantsContratsChantiers Returns this avenants contrats chantiers.
     */
    public function setCodeAffaire($codeAffaire) {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string $codeChantier The code chantier.
     * @return AvenantsContratsChantiers Returns this avenants contrats chantiers.
     */
    public function setCodeChantier($codeChantier) {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return AvenantsContratsChantiers Returns this avenants contrats chantiers.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code employe.
     *
     * @param string $codeEmploye The code employe.
     * @return AvenantsContratsChantiers Returns this avenants contrats chantiers.
     */
    public function setCodeEmploye($codeEmploye) {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the code titulaire.
     *
     * @param string $codeTitulaire The code titulaire.
     * @return AvenantsContratsChantiers Returns this avenants contrats chantiers.
     */
    public function setCodeTitulaire($codeTitulaire) {
        $this->codeTitulaire = $codeTitulaire;
        return $this;
    }

    /**
     * Set the numero avenant.
     *
     * @param int $numeroAvenant The numero avenant.
     * @return AvenantsContratsChantiers Returns this avenants contrats chantiers.
     */
    public function setNumeroAvenant($numeroAvenant) {
        $this->numeroAvenant = $numeroAvenant;
        return $this;
    }

    /**
     * Set the numero ligne.
     *
     * @param int $numeroLigne The numero ligne.
     * @return AvenantsContratsChantiers Returns this avenants contrats chantiers.
     */
    public function setNumeroLigne($numeroLigne) {
        $this->numeroLigne = $numeroLigne;
        return $this;
    }

    /**
     * Set the remplace au.
     *
     * @param DateTime $remplaceAu The remplace au.
     * @return AvenantsContratsChantiers Returns this avenants contrats chantiers.
     */
    public function setRemplaceAu(DateTime $remplaceAu = null) {
        $this->remplaceAu = $remplaceAu;
        return $this;
    }

    /**
     * Set the remplace du.
     *
     * @param DateTime $remplaceDu The remplace du.
     * @return AvenantsContratsChantiers Returns this avenants contrats chantiers.
     */
    public function setRemplaceDu(DateTime $remplaceDu = null) {
        $this->remplaceDu = $remplaceDu;
        return $this;
    }

    /**
     * Set the type document.
     *
     * @param string $typeDocument The type document.
     * @return AvenantsContratsChantiers Returns this avenants contrats chantiers.
     */
    public function setTypeDocument($typeDocument) {
        $this->typeDocument = $typeDocument;
        return $this;
    }

}
