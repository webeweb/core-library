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
 * i compta droits model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
 */
class iComptaDroits {

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
     * Date limite visu.
     *
     * @var DateTime
     */
    private $dateLimiteVisu;

    /**
     * Droit clients.
     *
     * @var string
     */
    private $droitClients;

    /**
     * Droit fournisseurs.
     *
     * @var string
     */
    private $droitFournisseurs;

    /**
     * Droit generaux.
     *
     * @var string
     */
    private $droitGeneraux;

    /**
     * Droit modif compte.
     *
     * @var string
     */
    private $droitModifCompte;

    /**
     * Espace client.
     *
     * @var boolean
     */
    private $espaceClient;

    /**
     * Fct balance client.
     *
     * @var boolean
     */
    private $fctBalanceClient;

    /**
     * Fct balance fournisseur.
     *
     * @var boolean
     */
    private $fctBalanceFournisseur;

    /**
     * Fct balance generale.
     *
     * @var boolean
     */
    private $fctBalanceGenerale;

    /**
     * Fct consult d a.
     *
     * @var boolean
     */
    private $fctConsultDA;

    /**
     * Fct consult d c.
     *
     * @var boolean
     */
    private $fctConsultDC;

    /**
     * Fct declare t v a.
     *
     * @var boolean
     */
    private $fctDeclareTVA;

    /**
     * Fct delettrage.
     *
     * @var boolean
     */
    private $fctDelettrage;

    /**
     * Fct edition journaux.
     *
     * @var boolean
     */
    private $fctEditionJournaux;

    /**
     * Fct interrogation cpt.
     *
     * @var boolean
     */
    private $fctInterrogationCpt;

    /**
     * Fct lettrage.
     *
     * @var boolean
     */
    private $fctLettrage;

    /**
     * Fct modif ecriture.
     *
     * @var boolean
     */
    private $fctModifEcriture;

    /**
     * Fct rapproch banq.
     *
     * @var boolean
     */
    private $fctRapprochBanq;

    /**
     * Fct saisie achats.
     *
     * @var boolean
     */
    private $fctSaisieAchats;

    /**
     * Fct saisie banques.
     *
     * @var boolean
     */
    private $fctSaisieBanques;

    /**
     * Fct saisie caisse orientee.
     *
     * @var int
     */
    private $fctSaisieCaisseOrientee;

    /**
     * Fct saisie e t e b a c.
     *
     * @var boolean
     */
    private $fctSaisieETEBAC;

    /**
     * Fct saisie standard.
     *
     * @var boolean
     */
    private $fctSaisieStandard;

    /**
     * Fct saisie trame.
     *
     * @var int
     */
    private $fctSaisieTrame;

    /**
     * Fct saisie ventes.
     *
     * @var boolean
     */
    private $fctSaisieVentes;

    /**
     * Fct suppr ecriture.
     *
     * @var boolean
     */
    private $fctSupprEcriture;

    /**
     * Fct table bord.
     *
     * @var boolean
     */
    private $fctTableBord;

    /**
     * Flag.
     *
     * @var string
     */
    private $flag;

    /**
     * Niveau droit clients.
     *
     * @var string
     */
    private $niveauDroitClients;

    /**
     * Niveau droit fournisseurs.
     *
     * @var string
     */
    private $niveauDroitFournisseurs;

    /**
     * Niveau droit generaux.
     *
     * @var string
     */
    private $niveauDroitGeneraux;

    /**
     * No doss cpta.
     *
     * @var string
     */
    private $noDossCpta;

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
     * Periode saisie deb.
     *
     * @var DateTime
     */
    private $periodeSaisieDeb;

    /**
     * Periode saisie fin.
     *
     * @var DateTime
     */
    private $periodeSaisieFin;

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
     * Get the date limite visu.
     *
     * @return DateTime Returns the date limite visu.
     */
    public function getDateLimiteVisu() {
        return $this->dateLimiteVisu;
    }

    /**
     * Get the droit clients.
     *
     * @return string Returns the droit clients.
     */
    public function getDroitClients() {
        return $this->droitClients;
    }

    /**
     * Get the droit fournisseurs.
     *
     * @return string Returns the droit fournisseurs.
     */
    public function getDroitFournisseurs() {
        return $this->droitFournisseurs;
    }

    /**
     * Get the droit generaux.
     *
     * @return string Returns the droit generaux.
     */
    public function getDroitGeneraux() {
        return $this->droitGeneraux;
    }

    /**
     * Get the droit modif compte.
     *
     * @return string Returns the droit modif compte.
     */
    public function getDroitModifCompte() {
        return $this->droitModifCompte;
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
     * Get the fct balance client.
     *
     * @return boolean Returns the fct balance client.
     */
    public function getFctBalanceClient() {
        return $this->fctBalanceClient;
    }

    /**
     * Get the fct balance fournisseur.
     *
     * @return boolean Returns the fct balance fournisseur.
     */
    public function getFctBalanceFournisseur() {
        return $this->fctBalanceFournisseur;
    }

    /**
     * Get the fct balance generale.
     *
     * @return boolean Returns the fct balance generale.
     */
    public function getFctBalanceGenerale() {
        return $this->fctBalanceGenerale;
    }

    /**
     * Get the fct consult d a.
     *
     * @return boolean Returns the fct consult d a.
     */
    public function getFctConsultDA() {
        return $this->fctConsultDA;
    }

    /**
     * Get the fct consult d c.
     *
     * @return boolean Returns the fct consult d c.
     */
    public function getFctConsultDC() {
        return $this->fctConsultDC;
    }

    /**
     * Get the fct declare t v a.
     *
     * @return boolean Returns the fct declare t v a.
     */
    public function getFctDeclareTVA() {
        return $this->fctDeclareTVA;
    }

    /**
     * Get the fct delettrage.
     *
     * @return boolean Returns the fct delettrage.
     */
    public function getFctDelettrage() {
        return $this->fctDelettrage;
    }

    /**
     * Get the fct edition journaux.
     *
     * @return boolean Returns the fct edition journaux.
     */
    public function getFctEditionJournaux() {
        return $this->fctEditionJournaux;
    }

    /**
     * Get the fct interrogation cpt.
     *
     * @return boolean Returns the fct interrogation cpt.
     */
    public function getFctInterrogationCpt() {
        return $this->fctInterrogationCpt;
    }

    /**
     * Get the fct lettrage.
     *
     * @return boolean Returns the fct lettrage.
     */
    public function getFctLettrage() {
        return $this->fctLettrage;
    }

    /**
     * Get the fct modif ecriture.
     *
     * @return boolean Returns the fct modif ecriture.
     */
    public function getFctModifEcriture() {
        return $this->fctModifEcriture;
    }

    /**
     * Get the fct rapproch banq.
     *
     * @return boolean Returns the fct rapproch banq.
     */
    public function getFctRapprochBanq() {
        return $this->fctRapprochBanq;
    }

    /**
     * Get the fct saisie achats.
     *
     * @return boolean Returns the fct saisie achats.
     */
    public function getFctSaisieAchats() {
        return $this->fctSaisieAchats;
    }

    /**
     * Get the fct saisie banques.
     *
     * @return boolean Returns the fct saisie banques.
     */
    public function getFctSaisieBanques() {
        return $this->fctSaisieBanques;
    }

    /**
     * Get the fct saisie caisse orientee.
     *
     * @return int Returns the fct saisie caisse orientee.
     */
    public function getFctSaisieCaisseOrientee() {
        return $this->fctSaisieCaisseOrientee;
    }

    /**
     * Get the fct saisie e t e b a c.
     *
     * @return boolean Returns the fct saisie e t e b a c.
     */
    public function getFctSaisieETEBAC() {
        return $this->fctSaisieETEBAC;
    }

    /**
     * Get the fct saisie standard.
     *
     * @return boolean Returns the fct saisie standard.
     */
    public function getFctSaisieStandard() {
        return $this->fctSaisieStandard;
    }

    /**
     * Get the fct saisie trame.
     *
     * @return int Returns the fct saisie trame.
     */
    public function getFctSaisieTrame() {
        return $this->fctSaisieTrame;
    }

    /**
     * Get the fct saisie ventes.
     *
     * @return boolean Returns the fct saisie ventes.
     */
    public function getFctSaisieVentes() {
        return $this->fctSaisieVentes;
    }

    /**
     * Get the fct suppr ecriture.
     *
     * @return boolean Returns the fct suppr ecriture.
     */
    public function getFctSupprEcriture() {
        return $this->fctSupprEcriture;
    }

    /**
     * Get the fct table bord.
     *
     * @return boolean Returns the fct table bord.
     */
    public function getFctTableBord() {
        return $this->fctTableBord;
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
     * Get the niveau droit clients.
     *
     * @return string Returns the niveau droit clients.
     */
    public function getNiveauDroitClients() {
        return $this->niveauDroitClients;
    }

    /**
     * Get the niveau droit fournisseurs.
     *
     * @return string Returns the niveau droit fournisseurs.
     */
    public function getNiveauDroitFournisseurs() {
        return $this->niveauDroitFournisseurs;
    }

    /**
     * Get the niveau droit generaux.
     *
     * @return string Returns the niveau droit generaux.
     */
    public function getNiveauDroitGeneraux() {
        return $this->niveauDroitGeneraux;
    }

    /**
     * Get the no doss cpta.
     *
     * @return string Returns the no doss cpta.
     */
    public function getNoDossCpta() {
        return $this->noDossCpta;
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
     * Get the periode saisie deb.
     *
     * @return DateTime Returns the periode saisie deb.
     */
    public function getPeriodeSaisieDeb() {
        return $this->periodeSaisieDeb;
    }

    /**
     * Get the periode saisie fin.
     *
     * @return DateTime Returns the periode saisie fin.
     */
    public function getPeriodeSaisieFin() {
        return $this->periodeSaisieFin;
    }

    /**
     * Set the code collab messages.
     *
     * @param string $codeCollabMessages The code collab messages.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setCodeCollabMessages($codeCollabMessages) {
        $this->codeCollabMessages = $codeCollabMessages;
        return $this;
    }

    /**
     * Set the code user.
     *
     * @param string $codeUser The code user.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setCodeUser($codeUser) {
        $this->codeUser = $codeUser;
        return $this;
    }

    /**
     * Set the date limite visu.
     *
     * @param DateTime $dateLimiteVisu The date limite visu.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setDateLimiteVisu(DateTime $dateLimiteVisu = null) {
        $this->dateLimiteVisu = $dateLimiteVisu;
        return $this;
    }

    /**
     * Set the droit clients.
     *
     * @param string $droitClients The droit clients.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setDroitClients($droitClients) {
        $this->droitClients = $droitClients;
        return $this;
    }

    /**
     * Set the droit fournisseurs.
     *
     * @param string $droitFournisseurs The droit fournisseurs.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setDroitFournisseurs($droitFournisseurs) {
        $this->droitFournisseurs = $droitFournisseurs;
        return $this;
    }

    /**
     * Set the droit generaux.
     *
     * @param string $droitGeneraux The droit generaux.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setDroitGeneraux($droitGeneraux) {
        $this->droitGeneraux = $droitGeneraux;
        return $this;
    }

    /**
     * Set the droit modif compte.
     *
     * @param string $droitModifCompte The droit modif compte.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setDroitModifCompte($droitModifCompte) {
        $this->droitModifCompte = $droitModifCompte;
        return $this;
    }

    /**
     * Set the espace client.
     *
     * @param boolean $espaceClient The espace client.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setEspaceClient($espaceClient) {
        $this->espaceClient = $espaceClient;
        return $this;
    }

    /**
     * Set the fct balance client.
     *
     * @param boolean $fctBalanceClient The fct balance client.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setFctBalanceClient($fctBalanceClient) {
        $this->fctBalanceClient = $fctBalanceClient;
        return $this;
    }

    /**
     * Set the fct balance fournisseur.
     *
     * @param boolean $fctBalanceFournisseur The fct balance fournisseur.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setFctBalanceFournisseur($fctBalanceFournisseur) {
        $this->fctBalanceFournisseur = $fctBalanceFournisseur;
        return $this;
    }

    /**
     * Set the fct balance generale.
     *
     * @param boolean $fctBalanceGenerale The fct balance generale.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setFctBalanceGenerale($fctBalanceGenerale) {
        $this->fctBalanceGenerale = $fctBalanceGenerale;
        return $this;
    }

    /**
     * Set the fct consult d a.
     *
     * @param boolean $fctConsultDA The fct consult d a.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setFctConsultDA($fctConsultDA) {
        $this->fctConsultDA = $fctConsultDA;
        return $this;
    }

    /**
     * Set the fct consult d c.
     *
     * @param boolean $fctConsultDC The fct consult d c.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setFctConsultDC($fctConsultDC) {
        $this->fctConsultDC = $fctConsultDC;
        return $this;
    }

    /**
     * Set the fct declare t v a.
     *
     * @param boolean $fctDeclareTVA The fct declare t v a.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setFctDeclareTVA($fctDeclareTVA) {
        $this->fctDeclareTVA = $fctDeclareTVA;
        return $this;
    }

    /**
     * Set the fct delettrage.
     *
     * @param boolean $fctDelettrage The fct delettrage.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setFctDelettrage($fctDelettrage) {
        $this->fctDelettrage = $fctDelettrage;
        return $this;
    }

    /**
     * Set the fct edition journaux.
     *
     * @param boolean $fctEditionJournaux The fct edition journaux.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setFctEditionJournaux($fctEditionJournaux) {
        $this->fctEditionJournaux = $fctEditionJournaux;
        return $this;
    }

    /**
     * Set the fct interrogation cpt.
     *
     * @param boolean $fctInterrogationCpt The fct interrogation cpt.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setFctInterrogationCpt($fctInterrogationCpt) {
        $this->fctInterrogationCpt = $fctInterrogationCpt;
        return $this;
    }

    /**
     * Set the fct lettrage.
     *
     * @param boolean $fctLettrage The fct lettrage.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setFctLettrage($fctLettrage) {
        $this->fctLettrage = $fctLettrage;
        return $this;
    }

    /**
     * Set the fct modif ecriture.
     *
     * @param boolean $fctModifEcriture The fct modif ecriture.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setFctModifEcriture($fctModifEcriture) {
        $this->fctModifEcriture = $fctModifEcriture;
        return $this;
    }

    /**
     * Set the fct rapproch banq.
     *
     * @param boolean $fctRapprochBanq The fct rapproch banq.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setFctRapprochBanq($fctRapprochBanq) {
        $this->fctRapprochBanq = $fctRapprochBanq;
        return $this;
    }

    /**
     * Set the fct saisie achats.
     *
     * @param boolean $fctSaisieAchats The fct saisie achats.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setFctSaisieAchats($fctSaisieAchats) {
        $this->fctSaisieAchats = $fctSaisieAchats;
        return $this;
    }

    /**
     * Set the fct saisie banques.
     *
     * @param boolean $fctSaisieBanques The fct saisie banques.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setFctSaisieBanques($fctSaisieBanques) {
        $this->fctSaisieBanques = $fctSaisieBanques;
        return $this;
    }

    /**
     * Set the fct saisie caisse orientee.
     *
     * @param int $fctSaisieCaisseOrientee The fct saisie caisse orientee.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setFctSaisieCaisseOrientee($fctSaisieCaisseOrientee) {
        $this->fctSaisieCaisseOrientee = $fctSaisieCaisseOrientee;
        return $this;
    }

    /**
     * Set the fct saisie e t e b a c.
     *
     * @param boolean $fctSaisieETEBAC The fct saisie e t e b a c.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setFctSaisieETEBAC($fctSaisieETEBAC) {
        $this->fctSaisieETEBAC = $fctSaisieETEBAC;
        return $this;
    }

    /**
     * Set the fct saisie standard.
     *
     * @param boolean $fctSaisieStandard The fct saisie standard.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setFctSaisieStandard($fctSaisieStandard) {
        $this->fctSaisieStandard = $fctSaisieStandard;
        return $this;
    }

    /**
     * Set the fct saisie trame.
     *
     * @param int $fctSaisieTrame The fct saisie trame.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setFctSaisieTrame($fctSaisieTrame) {
        $this->fctSaisieTrame = $fctSaisieTrame;
        return $this;
    }

    /**
     * Set the fct saisie ventes.
     *
     * @param boolean $fctSaisieVentes The fct saisie ventes.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setFctSaisieVentes($fctSaisieVentes) {
        $this->fctSaisieVentes = $fctSaisieVentes;
        return $this;
    }

    /**
     * Set the fct suppr ecriture.
     *
     * @param boolean $fctSupprEcriture The fct suppr ecriture.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setFctSupprEcriture($fctSupprEcriture) {
        $this->fctSupprEcriture = $fctSupprEcriture;
        return $this;
    }

    /**
     * Set the fct table bord.
     *
     * @param boolean $fctTableBord The fct table bord.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setFctTableBord($fctTableBord) {
        $this->fctTableBord = $fctTableBord;
        return $this;
    }

    /**
     * Set the flag.
     *
     * @param string $flag The flag.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setFlag($flag) {
        $this->flag = $flag;
        return $this;
    }

    /**
     * Set the niveau droit clients.
     *
     * @param string $niveauDroitClients The niveau droit clients.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setNiveauDroitClients($niveauDroitClients) {
        $this->niveauDroitClients = $niveauDroitClients;
        return $this;
    }

    /**
     * Set the niveau droit fournisseurs.
     *
     * @param string $niveauDroitFournisseurs The niveau droit fournisseurs.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setNiveauDroitFournisseurs($niveauDroitFournisseurs) {
        $this->niveauDroitFournisseurs = $niveauDroitFournisseurs;
        return $this;
    }

    /**
     * Set the niveau droit generaux.
     *
     * @param string $niveauDroitGeneraux The niveau droit generaux.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setNiveauDroitGeneraux($niveauDroitGeneraux) {
        $this->niveauDroitGeneraux = $niveauDroitGeneraux;
        return $this;
    }

    /**
     * Set the no doss cpta.
     *
     * @param string $noDossCpta The no doss cpta.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setNoDossCpta($noDossCpta) {
        $this->noDossCpta = $noDossCpta;
        return $this;
    }

    /**
     * Set the nom user.
     *
     * @param string $nomUser The nom user.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setNomUser($nomUser) {
        $this->nomUser = $nomUser;
        return $this;
    }

    /**
     * Set the numi key.
     *
     * @param string $numiKey The numi key.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setNumiKey($numiKey) {
        $this->numiKey = $numiKey;
        return $this;
    }

    /**
     * Set the password.
     *
     * @param string $password The password.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setPassword($password) {
        $this->password = $password;
        return $this;
    }

    /**
     * Set the periode saisie deb.
     *
     * @param DateTime $periodeSaisieDeb The periode saisie deb.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setPeriodeSaisieDeb(DateTime $periodeSaisieDeb = null) {
        $this->periodeSaisieDeb = $periodeSaisieDeb;
        return $this;
    }

    /**
     * Set the periode saisie fin.
     *
     * @param DateTime $periodeSaisieFin The periode saisie fin.
     * @return iComptaDroits Returns this i compta droits.
     */
    public function setPeriodeSaisieFin(DateTime $periodeSaisieFin = null) {
        $this->periodeSaisieFin = $periodeSaisieFin;
        return $this;
    }

}
