<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie;

use DateTime;

/**
 * D a d s u assurance entete model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class DADSUAssuranceEntete {

    /**
     * Code etablissement.
     *
     * @var int
     */
    private $codeEtablissement;

    /**
     * Code organisme.
     *
     * @var string
     */
    private $codeOrganisme;

    /**
     * Code periodicite.
     *
     * @var string
     */
    private $codePeriodicite;

    /**
     * Date application.
     *
     * @var DateTime
     */
    private $dateApplication;

    /**
     * Date emission.
     *
     * @var DateTime
     */
    private $dateEmission;

    /**
     * Intitule.
     *
     * @var string
     */
    private $intitule;

    /**
     * Mail contact.
     *
     * @var string
     */
    private $mailContact;

    /**
     * Mois anniv.
     *
     * @var string
     */
    private $moisAnniv;

    /**
     * Nom contact.
     *
     * @var string
     */
    private $nomContact;

    /**
     * Tel contact.
     *
     * @var string
     */
    private $telContact;

    /**
     * Unite gestion.
     *
     * @var string
     */
    private $uniteGestion;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code etablissement.
     *
     * @return int Returns the code etablissement.
     */
    public function getCodeEtablissement() {
        return $this->codeEtablissement;
    }

    /**
     * Get the code organisme.
     *
     * @return string Returns the code organisme.
     */
    public function getCodeOrganisme() {
        return $this->codeOrganisme;
    }

    /**
     * Get the code periodicite.
     *
     * @return string Returns the code periodicite.
     */
    public function getCodePeriodicite() {
        return $this->codePeriodicite;
    }

    /**
     * Get the date application.
     *
     * @return DateTime Returns the date application.
     */
    public function getDateApplication() {
        return $this->dateApplication;
    }

    /**
     * Get the date emission.
     *
     * @return DateTime Returns the date emission.
     */
    public function getDateEmission() {
        return $this->dateEmission;
    }

    /**
     * Get the intitule.
     *
     * @return string Returns the intitule.
     */
    public function getIntitule() {
        return $this->intitule;
    }

    /**
     * Get the mail contact.
     *
     * @return string Returns the mail contact.
     */
    public function getMailContact() {
        return $this->mailContact;
    }

    /**
     * Get the mois anniv.
     *
     * @return string Returns the mois anniv.
     */
    public function getMoisAnniv() {
        return $this->moisAnniv;
    }

    /**
     * Get the nom contact.
     *
     * @return string Returns the nom contact.
     */
    public function getNomContact() {
        return $this->nomContact;
    }

    /**
     * Get the tel contact.
     *
     * @return string Returns the tel contact.
     */
    public function getTelContact() {
        return $this->telContact;
    }

    /**
     * Get the unite gestion.
     *
     * @return string Returns the unite gestion.
     */
    public function getUniteGestion() {
        return $this->uniteGestion;
    }

    /**
     * Set the code etablissement.
     *
     * @param int $codeEtablissement The code etablissement.
     * @return DADSUAssuranceEntete Returns this d a d s u assurance entete.
     */
    public function setCodeEtablissement($codeEtablissement) {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the code organisme.
     *
     * @param string $codeOrganisme The code organisme.
     * @return DADSUAssuranceEntete Returns this d a d s u assurance entete.
     */
    public function setCodeOrganisme($codeOrganisme) {
        $this->codeOrganisme = $codeOrganisme;
        return $this;
    }

    /**
     * Set the code periodicite.
     *
     * @param string $codePeriodicite The code periodicite.
     * @return DADSUAssuranceEntete Returns this d a d s u assurance entete.
     */
    public function setCodePeriodicite($codePeriodicite) {
        $this->codePeriodicite = $codePeriodicite;
        return $this;
    }

    /**
     * Set the date application.
     *
     * @param DateTime $dateApplication The date application.
     * @return DADSUAssuranceEntete Returns this d a d s u assurance entete.
     */
    public function setDateApplication(DateTime $dateApplication = null) {
        $this->dateApplication = $dateApplication;
        return $this;
    }

    /**
     * Set the date emission.
     *
     * @param DateTime $dateEmission The date emission.
     * @return DADSUAssuranceEntete Returns this d a d s u assurance entete.
     */
    public function setDateEmission(DateTime $dateEmission = null) {
        $this->dateEmission = $dateEmission;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string $intitule The intitule.
     * @return DADSUAssuranceEntete Returns this d a d s u assurance entete.
     */
    public function setIntitule($intitule) {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the mail contact.
     *
     * @param string $mailContact The mail contact.
     * @return DADSUAssuranceEntete Returns this d a d s u assurance entete.
     */
    public function setMailContact($mailContact) {
        $this->mailContact = $mailContact;
        return $this;
    }

    /**
     * Set the mois anniv.
     *
     * @param string $moisAnniv The mois anniv.
     * @return DADSUAssuranceEntete Returns this d a d s u assurance entete.
     */
    public function setMoisAnniv($moisAnniv) {
        $this->moisAnniv = $moisAnniv;
        return $this;
    }

    /**
     * Set the nom contact.
     *
     * @param string $nomContact The nom contact.
     * @return DADSUAssuranceEntete Returns this d a d s u assurance entete.
     */
    public function setNomContact($nomContact) {
        $this->nomContact = $nomContact;
        return $this;
    }

    /**
     * Set the tel contact.
     *
     * @param string $telContact The tel contact.
     * @return DADSUAssuranceEntete Returns this d a d s u assurance entete.
     */
    public function setTelContact($telContact) {
        $this->telContact = $telContact;
        return $this;
    }

    /**
     * Set the unite gestion.
     *
     * @param string $uniteGestion The unite gestion.
     * @return DADSUAssuranceEntete Returns this d a d s u assurance entete.
     */
    public function setUniteGestion($uniteGestion) {
        $this->uniteGestion = $uniteGestion;
        return $this;
    }
}
