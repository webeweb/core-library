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

/**
 * i paie droits model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
 */
class iPaieDroits {

    /**
     * Code collab messages.
     *
     * @var string
     */
    private $codeCollabMessages;

    /**
     * Code user.
     *
     * @var string
     */
    private $codeUser;

    /**
     * Espace client.
     *
     * @var boolean
     */
    private $espaceClient;

    /**
     * Fct absences c p.
     *
     * @var boolean
     */
    private $fctAbsencesCP;

    /**
     * Fct acomptes.
     *
     * @var boolean
     */
    private $fctAcomptes;

    /**
     * Fct archives.
     *
     * @var boolean
     */
    private $fctArchives;

    /**
     * Fct bulletins.
     *
     * @var boolean
     */
    private $fctBulletins;

    /**
     * Fct documents.
     *
     * @var boolean
     */
    private $fctDocuments;

    /**
     * Fct donnees v.
     *
     * @var boolean
     */
    private $fctDonneesV;

    /**
     * Fct etat civil.
     *
     * @var boolean
     */
    private $fctEtatCivil;

    /**
     * Fct modif absences c p.
     *
     * @var boolean
     */
    private $fctModifAbsencesCP;

    /**
     * Fct modif acomptes.
     *
     * @var boolean
     */
    private $fctModifAcomptes;

    /**
     * Fct modif archives.
     *
     * @var boolean
     */
    private $fctModifArchives;

    /**
     * Fct modif bulletins.
     *
     * @var boolean
     */
    private $fctModifBulletins;

    /**
     * Fct modif documents.
     *
     * @var boolean
     */
    private $fctModifDocuments;

    /**
     * Fct modif donnees v.
     *
     * @var boolean
     */
    private $fctModifDonneesV;

    /**
     * Fct modif etat civil.
     *
     * @var boolean
     */
    private $fctModifEtatCivil;

    /**
     * Flag.
     *
     * @var string
     */
    private $flag;

    /**
     * Niveau conf.
     *
     * @var string
     */
    private $niveauConf;

    /**
     * No doss paie.
     *
     * @var string
     */
    private $noDossPaie;

    /**
     * Nom user.
     *
     * @var string
     */
    private $nomUser;

    /**
     * Numi key.
     *
     * @var string
     */
    private $numiKey;

    /**
     * Password.
     *
     * @var string
     */
    private $password;

    /**
     * User expert.
     *
     * @var boolean
     */
    private $userExpert;

    /**
     * Visu salaires.
     *
     * @var boolean
     */
    private $visuSalaires;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code collab messages.
     *
     * @return string Returns the code collab messages.
     */
    public function getCodeCollabMessages() {
        return $this->codeCollabMessages;
    }

    /**
     * Get the code user.
     *
     * @return string Returns the code user.
     */
    public function getCodeUser() {
        return $this->codeUser;
    }

    /**
     * Get the espace client.
     *
     * @return boolean Returns the espace client.
     */
    public function getEspaceClient() {
        return $this->espaceClient;
    }

    /**
     * Get the fct absences c p.
     *
     * @return boolean Returns the fct absences c p.
     */
    public function getFctAbsencesCP() {
        return $this->fctAbsencesCP;
    }

    /**
     * Get the fct acomptes.
     *
     * @return boolean Returns the fct acomptes.
     */
    public function getFctAcomptes() {
        return $this->fctAcomptes;
    }

    /**
     * Get the fct archives.
     *
     * @return boolean Returns the fct archives.
     */
    public function getFctArchives() {
        return $this->fctArchives;
    }

    /**
     * Get the fct bulletins.
     *
     * @return boolean Returns the fct bulletins.
     */
    public function getFctBulletins() {
        return $this->fctBulletins;
    }

    /**
     * Get the fct documents.
     *
     * @return boolean Returns the fct documents.
     */
    public function getFctDocuments() {
        return $this->fctDocuments;
    }

    /**
     * Get the fct donnees v.
     *
     * @return boolean Returns the fct donnees v.
     */
    public function getFctDonneesV() {
        return $this->fctDonneesV;
    }

    /**
     * Get the fct etat civil.
     *
     * @return boolean Returns the fct etat civil.
     */
    public function getFctEtatCivil() {
        return $this->fctEtatCivil;
    }

    /**
     * Get the fct modif absences c p.
     *
     * @return boolean Returns the fct modif absences c p.
     */
    public function getFctModifAbsencesCP() {
        return $this->fctModifAbsencesCP;
    }

    /**
     * Get the fct modif acomptes.
     *
     * @return boolean Returns the fct modif acomptes.
     */
    public function getFctModifAcomptes() {
        return $this->fctModifAcomptes;
    }

    /**
     * Get the fct modif archives.
     *
     * @return boolean Returns the fct modif archives.
     */
    public function getFctModifArchives() {
        return $this->fctModifArchives;
    }

    /**
     * Get the fct modif bulletins.
     *
     * @return boolean Returns the fct modif bulletins.
     */
    public function getFctModifBulletins() {
        return $this->fctModifBulletins;
    }

    /**
     * Get the fct modif documents.
     *
     * @return boolean Returns the fct modif documents.
     */
    public function getFctModifDocuments() {
        return $this->fctModifDocuments;
    }

    /**
     * Get the fct modif donnees v.
     *
     * @return boolean Returns the fct modif donnees v.
     */
    public function getFctModifDonneesV() {
        return $this->fctModifDonneesV;
    }

    /**
     * Get the fct modif etat civil.
     *
     * @return boolean Returns the fct modif etat civil.
     */
    public function getFctModifEtatCivil() {
        return $this->fctModifEtatCivil;
    }

    /**
     * Get the flag.
     *
     * @return string Returns the flag.
     */
    public function getFlag() {
        return $this->flag;
    }

    /**
     * Get the niveau conf.
     *
     * @return string Returns the niveau conf.
     */
    public function getNiveauConf() {
        return $this->niveauConf;
    }

    /**
     * Get the no doss paie.
     *
     * @return string Returns the no doss paie.
     */
    public function getNoDossPaie() {
        return $this->noDossPaie;
    }

    /**
     * Get the nom user.
     *
     * @return string Returns the nom user.
     */
    public function getNomUser() {
        return $this->nomUser;
    }

    /**
     * Get the numi key.
     *
     * @return string Returns the numi key.
     */
    public function getNumiKey() {
        return $this->numiKey;
    }

    /**
     * Get the password.
     *
     * @return string Returns the password.
     */
    public function getPassword() {
        return $this->password;
    }

    /**
     * Get the user expert.
     *
     * @return boolean Returns the user expert.
     */
    public function getUserExpert() {
        return $this->userExpert;
    }

    /**
     * Get the visu salaires.
     *
     * @return boolean Returns the visu salaires.
     */
    public function getVisuSalaires() {
        return $this->visuSalaires;
    }

    /**
     * Set the code collab messages.
     *
     * @param string $codeCollabMessages The code collab messages.
     * @return iPaieDroits Returns this i paie droits.
     */
    public function setCodeCollabMessages($codeCollabMessages) {
        $this->codeCollabMessages = $codeCollabMessages;
        return $this;
    }

    /**
     * Set the code user.
     *
     * @param string $codeUser The code user.
     * @return iPaieDroits Returns this i paie droits.
     */
    public function setCodeUser($codeUser) {
        $this->codeUser = $codeUser;
        return $this;
    }

    /**
     * Set the espace client.
     *
     * @param boolean $espaceClient The espace client.
     * @return iPaieDroits Returns this i paie droits.
     */
    public function setEspaceClient($espaceClient) {
        $this->espaceClient = $espaceClient;
        return $this;
    }

    /**
     * Set the fct absences c p.
     *
     * @param boolean $fctAbsencesCP The fct absences c p.
     * @return iPaieDroits Returns this i paie droits.
     */
    public function setFctAbsencesCP($fctAbsencesCP) {
        $this->fctAbsencesCP = $fctAbsencesCP;
        return $this;
    }

    /**
     * Set the fct acomptes.
     *
     * @param boolean $fctAcomptes The fct acomptes.
     * @return iPaieDroits Returns this i paie droits.
     */
    public function setFctAcomptes($fctAcomptes) {
        $this->fctAcomptes = $fctAcomptes;
        return $this;
    }

    /**
     * Set the fct archives.
     *
     * @param boolean $fctArchives The fct archives.
     * @return iPaieDroits Returns this i paie droits.
     */
    public function setFctArchives($fctArchives) {
        $this->fctArchives = $fctArchives;
        return $this;
    }

    /**
     * Set the fct bulletins.
     *
     * @param boolean $fctBulletins The fct bulletins.
     * @return iPaieDroits Returns this i paie droits.
     */
    public function setFctBulletins($fctBulletins) {
        $this->fctBulletins = $fctBulletins;
        return $this;
    }

    /**
     * Set the fct documents.
     *
     * @param boolean $fctDocuments The fct documents.
     * @return iPaieDroits Returns this i paie droits.
     */
    public function setFctDocuments($fctDocuments) {
        $this->fctDocuments = $fctDocuments;
        return $this;
    }

    /**
     * Set the fct donnees v.
     *
     * @param boolean $fctDonneesV The fct donnees v.
     * @return iPaieDroits Returns this i paie droits.
     */
    public function setFctDonneesV($fctDonneesV) {
        $this->fctDonneesV = $fctDonneesV;
        return $this;
    }

    /**
     * Set the fct etat civil.
     *
     * @param boolean $fctEtatCivil The fct etat civil.
     * @return iPaieDroits Returns this i paie droits.
     */
    public function setFctEtatCivil($fctEtatCivil) {
        $this->fctEtatCivil = $fctEtatCivil;
        return $this;
    }

    /**
     * Set the fct modif absences c p.
     *
     * @param boolean $fctModifAbsencesCP The fct modif absences c p.
     * @return iPaieDroits Returns this i paie droits.
     */
    public function setFctModifAbsencesCP($fctModifAbsencesCP) {
        $this->fctModifAbsencesCP = $fctModifAbsencesCP;
        return $this;
    }

    /**
     * Set the fct modif acomptes.
     *
     * @param boolean $fctModifAcomptes The fct modif acomptes.
     * @return iPaieDroits Returns this i paie droits.
     */
    public function setFctModifAcomptes($fctModifAcomptes) {
        $this->fctModifAcomptes = $fctModifAcomptes;
        return $this;
    }

    /**
     * Set the fct modif archives.
     *
     * @param boolean $fctModifArchives The fct modif archives.
     * @return iPaieDroits Returns this i paie droits.
     */
    public function setFctModifArchives($fctModifArchives) {
        $this->fctModifArchives = $fctModifArchives;
        return $this;
    }

    /**
     * Set the fct modif bulletins.
     *
     * @param boolean $fctModifBulletins The fct modif bulletins.
     * @return iPaieDroits Returns this i paie droits.
     */
    public function setFctModifBulletins($fctModifBulletins) {
        $this->fctModifBulletins = $fctModifBulletins;
        return $this;
    }

    /**
     * Set the fct modif documents.
     *
     * @param boolean $fctModifDocuments The fct modif documents.
     * @return iPaieDroits Returns this i paie droits.
     */
    public function setFctModifDocuments($fctModifDocuments) {
        $this->fctModifDocuments = $fctModifDocuments;
        return $this;
    }

    /**
     * Set the fct modif donnees v.
     *
     * @param boolean $fctModifDonneesV The fct modif donnees v.
     * @return iPaieDroits Returns this i paie droits.
     */
    public function setFctModifDonneesV($fctModifDonneesV) {
        $this->fctModifDonneesV = $fctModifDonneesV;
        return $this;
    }

    /**
     * Set the fct modif etat civil.
     *
     * @param boolean $fctModifEtatCivil The fct modif etat civil.
     * @return iPaieDroits Returns this i paie droits.
     */
    public function setFctModifEtatCivil($fctModifEtatCivil) {
        $this->fctModifEtatCivil = $fctModifEtatCivil;
        return $this;
    }

    /**
     * Set the flag.
     *
     * @param string $flag The flag.
     * @return iPaieDroits Returns this i paie droits.
     */
    public function setFlag($flag) {
        $this->flag = $flag;
        return $this;
    }

    /**
     * Set the niveau conf.
     *
     * @param string $niveauConf The niveau conf.
     * @return iPaieDroits Returns this i paie droits.
     */
    public function setNiveauConf($niveauConf) {
        $this->niveauConf = $niveauConf;
        return $this;
    }

    /**
     * Set the no doss paie.
     *
     * @param string $noDossPaie The no doss paie.
     * @return iPaieDroits Returns this i paie droits.
     */
    public function setNoDossPaie($noDossPaie) {
        $this->noDossPaie = $noDossPaie;
        return $this;
    }

    /**
     * Set the nom user.
     *
     * @param string $nomUser The nom user.
     * @return iPaieDroits Returns this i paie droits.
     */
    public function setNomUser($nomUser) {
        $this->nomUser = $nomUser;
        return $this;
    }

    /**
     * Set the numi key.
     *
     * @param string $numiKey The numi key.
     * @return iPaieDroits Returns this i paie droits.
     */
    public function setNumiKey($numiKey) {
        $this->numiKey = $numiKey;
        return $this;
    }

    /**
     * Set the password.
     *
     * @param string $password The password.
     * @return iPaieDroits Returns this i paie droits.
     */
    public function setPassword($password) {
        $this->password = $password;
        return $this;
    }

    /**
     * Set the user expert.
     *
     * @param boolean $userExpert The user expert.
     * @return iPaieDroits Returns this i paie droits.
     */
    public function setUserExpert($userExpert) {
        $this->userExpert = $userExpert;
        return $this;
    }

    /**
     * Set the visu salaires.
     *
     * @param boolean $visuSalaires The visu salaires.
     * @return iPaieDroits Returns this i paie droits.
     */
    public function setVisuSalaires($visuSalaires) {
        $this->visuSalaires = $visuSalaires;
        return $this;
    }

}
