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
 * i paie droits.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
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
     * @var bool
     */
    private $espaceClient;

    /**
     * Fct absences cp.
     *
     * @var bool
     */
    private $fctAbsencesCp;

    /**
     * Fct acomptes.
     *
     * @var bool
     */
    private $fctAcomptes;

    /**
     * Fct archives.
     *
     * @var bool
     */
    private $fctArchives;

    /**
     * Fct bulletins.
     *
     * @var bool
     */
    private $fctBulletins;

    /**
     * Fct documents.
     *
     * @var bool
     */
    private $fctDocuments;

    /**
     * Fct donnees v.
     *
     * @var bool
     */
    private $fctDonneesV;

    /**
     * Fct etat civil.
     *
     * @var bool
     */
    private $fctEtatCivil;

    /**
     * Fct modif absences cp.
     *
     * @var bool
     */
    private $fctModifAbsencesCp;

    /**
     * Fct modif acomptes.
     *
     * @var bool
     */
    private $fctModifAcomptes;

    /**
     * Fct modif archives.
     *
     * @var bool
     */
    private $fctModifArchives;

    /**
     * Fct modif bulletins.
     *
     * @var bool
     */
    private $fctModifBulletins;

    /**
     * Fct modif documents.
     *
     * @var bool
     */
    private $fctModifDocuments;

    /**
     * Fct modif donnees v.
     *
     * @var bool
     */
    private $fctModifDonneesV;

    /**
     * Fct modif etat civil.
     *
     * @var bool
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
     * @var bool
     */
    private $userExpert;

    /**
     * Visu salaires.
     *
     * @var bool
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
     * @return bool Returns the espace client.
     */
    public function getEspaceClient() {
        return $this->espaceClient;
    }

    /**
     * Get the fct absences cp.
     *
     * @return bool Returns the fct absences cp.
     */
    public function getFctAbsencesCp() {
        return $this->fctAbsencesCp;
    }

    /**
     * Get the fct acomptes.
     *
     * @return bool Returns the fct acomptes.
     */
    public function getFctAcomptes() {
        return $this->fctAcomptes;
    }

    /**
     * Get the fct archives.
     *
     * @return bool Returns the fct archives.
     */
    public function getFctArchives() {
        return $this->fctArchives;
    }

    /**
     * Get the fct bulletins.
     *
     * @return bool Returns the fct bulletins.
     */
    public function getFctBulletins() {
        return $this->fctBulletins;
    }

    /**
     * Get the fct documents.
     *
     * @return bool Returns the fct documents.
     */
    public function getFctDocuments() {
        return $this->fctDocuments;
    }

    /**
     * Get the fct donnees v.
     *
     * @return bool Returns the fct donnees v.
     */
    public function getFctDonneesV() {
        return $this->fctDonneesV;
    }

    /**
     * Get the fct etat civil.
     *
     * @return bool Returns the fct etat civil.
     */
    public function getFctEtatCivil() {
        return $this->fctEtatCivil;
    }

    /**
     * Get the fct modif absences cp.
     *
     * @return bool Returns the fct modif absences cp.
     */
    public function getFctModifAbsencesCp() {
        return $this->fctModifAbsencesCp;
    }

    /**
     * Get the fct modif acomptes.
     *
     * @return bool Returns the fct modif acomptes.
     */
    public function getFctModifAcomptes() {
        return $this->fctModifAcomptes;
    }

    /**
     * Get the fct modif archives.
     *
     * @return bool Returns the fct modif archives.
     */
    public function getFctModifArchives() {
        return $this->fctModifArchives;
    }

    /**
     * Get the fct modif bulletins.
     *
     * @return bool Returns the fct modif bulletins.
     */
    public function getFctModifBulletins() {
        return $this->fctModifBulletins;
    }

    /**
     * Get the fct modif documents.
     *
     * @return bool Returns the fct modif documents.
     */
    public function getFctModifDocuments() {
        return $this->fctModifDocuments;
    }

    /**
     * Get the fct modif donnees v.
     *
     * @return bool Returns the fct modif donnees v.
     */
    public function getFctModifDonneesV() {
        return $this->fctModifDonneesV;
    }

    /**
     * Get the fct modif etat civil.
     *
     * @return bool Returns the fct modif etat civil.
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
     * @return bool Returns the user expert.
     */
    public function getUserExpert() {
        return $this->userExpert;
    }

    /**
     * Get the visu salaires.
     *
     * @return bool Returns the visu salaires.
     */
    public function getVisuSalaires() {
        return $this->visuSalaires;
    }

    /**
     * Set the code collab messages.
     *
     * @param string $codeCollabMessages The code collab messages.
     */
    public function setCodeCollabMessages($codeCollabMessages) {
        $this->codeCollabMessages = $codeCollabMessages;
        return $this;
    }

    /**
     * Set the code user.
     *
     * @param string $codeUser The code user.
     */
    public function setCodeUser($codeUser) {
        $this->codeUser = $codeUser;
        return $this;
    }

    /**
     * Set the espace client.
     *
     * @param bool $espaceClient The espace client.
     */
    public function setEspaceClient($espaceClient) {
        $this->espaceClient = $espaceClient;
        return $this;
    }

    /**
     * Set the fct absences cp.
     *
     * @param bool $fctAbsencesCp The fct absences cp.
     */
    public function setFctAbsencesCp($fctAbsencesCp) {
        $this->fctAbsencesCp = $fctAbsencesCp;
        return $this;
    }

    /**
     * Set the fct acomptes.
     *
     * @param bool $fctAcomptes The fct acomptes.
     */
    public function setFctAcomptes($fctAcomptes) {
        $this->fctAcomptes = $fctAcomptes;
        return $this;
    }

    /**
     * Set the fct archives.
     *
     * @param bool $fctArchives The fct archives.
     */
    public function setFctArchives($fctArchives) {
        $this->fctArchives = $fctArchives;
        return $this;
    }

    /**
     * Set the fct bulletins.
     *
     * @param bool $fctBulletins The fct bulletins.
     */
    public function setFctBulletins($fctBulletins) {
        $this->fctBulletins = $fctBulletins;
        return $this;
    }

    /**
     * Set the fct documents.
     *
     * @param bool $fctDocuments The fct documents.
     */
    public function setFctDocuments($fctDocuments) {
        $this->fctDocuments = $fctDocuments;
        return $this;
    }

    /**
     * Set the fct donnees v.
     *
     * @param bool $fctDonneesV The fct donnees v.
     */
    public function setFctDonneesV($fctDonneesV) {
        $this->fctDonneesV = $fctDonneesV;
        return $this;
    }

    /**
     * Set the fct etat civil.
     *
     * @param bool $fctEtatCivil The fct etat civil.
     */
    public function setFctEtatCivil($fctEtatCivil) {
        $this->fctEtatCivil = $fctEtatCivil;
        return $this;
    }

    /**
     * Set the fct modif absences cp.
     *
     * @param bool $fctModifAbsencesCp The fct modif absences cp.
     */
    public function setFctModifAbsencesCp($fctModifAbsencesCp) {
        $this->fctModifAbsencesCp = $fctModifAbsencesCp;
        return $this;
    }

    /**
     * Set the fct modif acomptes.
     *
     * @param bool $fctModifAcomptes The fct modif acomptes.
     */
    public function setFctModifAcomptes($fctModifAcomptes) {
        $this->fctModifAcomptes = $fctModifAcomptes;
        return $this;
    }

    /**
     * Set the fct modif archives.
     *
     * @param bool $fctModifArchives The fct modif archives.
     */
    public function setFctModifArchives($fctModifArchives) {
        $this->fctModifArchives = $fctModifArchives;
        return $this;
    }

    /**
     * Set the fct modif bulletins.
     *
     * @param bool $fctModifBulletins The fct modif bulletins.
     */
    public function setFctModifBulletins($fctModifBulletins) {
        $this->fctModifBulletins = $fctModifBulletins;
        return $this;
    }

    /**
     * Set the fct modif documents.
     *
     * @param bool $fctModifDocuments The fct modif documents.
     */
    public function setFctModifDocuments($fctModifDocuments) {
        $this->fctModifDocuments = $fctModifDocuments;
        return $this;
    }

    /**
     * Set the fct modif donnees v.
     *
     * @param bool $fctModifDonneesV The fct modif donnees v.
     */
    public function setFctModifDonneesV($fctModifDonneesV) {
        $this->fctModifDonneesV = $fctModifDonneesV;
        return $this;
    }

    /**
     * Set the fct modif etat civil.
     *
     * @param bool $fctModifEtatCivil The fct modif etat civil.
     */
    public function setFctModifEtatCivil($fctModifEtatCivil) {
        $this->fctModifEtatCivil = $fctModifEtatCivil;
        return $this;
    }

    /**
     * Set the flag.
     *
     * @param string $flag The flag.
     */
    public function setFlag($flag) {
        $this->flag = $flag;
        return $this;
    }

    /**
     * Set the niveau conf.
     *
     * @param string $niveauConf The niveau conf.
     */
    public function setNiveauConf($niveauConf) {
        $this->niveauConf = $niveauConf;
        return $this;
    }

    /**
     * Set the no doss paie.
     *
     * @param string $noDossPaie The no doss paie.
     */
    public function setNoDossPaie($noDossPaie) {
        $this->noDossPaie = $noDossPaie;
        return $this;
    }

    /**
     * Set the nom user.
     *
     * @param string $nomUser The nom user.
     */
    public function setNomUser($nomUser) {
        $this->nomUser = $nomUser;
        return $this;
    }

    /**
     * Set the numi key.
     *
     * @param string $numiKey The numi key.
     */
    public function setNumiKey($numiKey) {
        $this->numiKey = $numiKey;
        return $this;
    }

    /**
     * Set the password.
     *
     * @param string $password The password.
     */
    public function setPassword($password) {
        $this->password = $password;
        return $this;
    }

    /**
     * Set the user expert.
     *
     * @param bool $userExpert The user expert.
     */
    public function setUserExpert($userExpert) {
        $this->userExpert = $userExpert;
        return $this;
    }

    /**
     * Set the visu salaires.
     *
     * @param bool $visuSalaires The visu salaires.
     */
    public function setVisuSalaires($visuSalaires) {
        $this->visuSalaires = $visuSalaires;
        return $this;
    }
}
