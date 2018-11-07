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
 * Reglements model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
 */
class Reglements {

    /**
     * B i c.
     *
     * @var string
     */
    private $bIC;

    /**
     * Code.
     *
     * @var string
     */
    private $code;

    /**
     * Code banque.
     *
     * @var string
     */
    private $codeBanque;

    /**
     * Code comptable.
     *
     * @var string
     */
    private $codeComptable;

    /**
     * Compte caisse.
     *
     * @var string
     */
    private $compteCaisse;

    /**
     * Cpt portefeuille.
     *
     * @var string
     */
    private $cptPortefeuille;

    /**
     * Date echeance cpta.
     *
     * @var boolean
     */
    private $dateEcheanceCpta;

    /**
     * Definition paiement.
     *
     * @var boolean
     */
    private $definitionPaiement;

    /**
     * Definition remise.
     *
     * @var boolean
     */
    private $definitionRemise;

    /**
     * Detail echeance cpta.
     *
     * @var boolean
     */
    private $detailEcheanceCpta;

    /**
     * Detail effet cpta.
     *
     * @var boolean
     */
    private $detailEffetCpta;

    /**
     * Devise caisse.
     *
     * @var string
     */
    private $deviseCaisse;

    /**
     * Domiciliation bancaire1.
     *
     * @var string
     */
    private $domiciliationBancaire1;

    /**
     * Domiciliation bancaire2.
     *
     * @var string
     */
    private $domiciliationBancaire2;

    /**
     * Duree echeances.
     *
     * @var string
     */
    private $dureeEcheances;

    /**
     * Echeance fin decade.
     *
     * @var boolean
     */
    private $echeanceFinDecade;

    /**
     * Echeance fin quinzaine.
     *
     * @var boolean
     */
    private $echeanceFinQuinzaine;

    /**
     * Edit date echeance.
     *
     * @var boolean
     */
    private $editDateEcheance;

    /**
     * Editer cheque.
     *
     * @var boolean
     */
    private $editerCheque;

    /**
     * Especes caisse.
     *
     * @var boolean
     */
    private $especesCaisse;

    /**
     * Gestion paiements.
     *
     * @var boolean
     */
    private $gestionPaiements;

    /**
     * I b a n.
     *
     * @var string
     */
    private $iBAN;

    /**
     * Intitule.
     *
     * @var string
     */
    private $intitule;

    /**
     * Intitule2.
     *
     * @var string
     */
    private $intitule2;

    /**
     * Intitule3.
     *
     * @var string
     */
    private $intitule3;

    /**
     * L c r.
     *
     * @var boolean
     */
    private $lCR;

    /**
     * Lib ecr caisse.
     *
     * @var string
     */
    private $libEcrCaisse;

    /**
     * Nombre echeances.
     *
     * @var string
     */
    private $nombreEcheances;

    /**
     * Paiement depart le.
     *
     * @var string
     */
    private $paiementDepartLe;

    /**
     * Paiement le.
     *
     * @var string
     */
    private $paiementLe;

    /**
     * Paiement nombre de jours.
     *
     * @var int
     */
    private $paiementNombreDeJours;

    /**
     * Pas de tiroir caisse.
     *
     * @var boolean
     */
    private $pasDeTiroirCaisse;

    /**
     * Pas effet avoir.
     *
     * @var boolean
     */
    private $pasEffetAvoir;

    /**
     * R i b.
     *
     * @var string
     */
    private $rIB;

    /**
     * Remise pied.
     *
     * @var float
     */
    private $remisePied;

    /**
     * Traite editer.
     *
     * @var boolean
     */
    private $traiteEditer;

    /**
     * Type acceptation.
     *
     * @var string
     */
    private $typeAcceptation;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the b i c.
     *
     * @return string Returns the b i c.
     */
    public function getBIC() {
        return $this->bIC;
    }

    /**
     * Get the code.
     *
     * @return string Returns the code.
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * Get the code banque.
     *
     * @return string Returns the code banque.
     */
    public function getCodeBanque() {
        return $this->codeBanque;
    }

    /**
     * Get the code comptable.
     *
     * @return string Returns the code comptable.
     */
    public function getCodeComptable() {
        return $this->codeComptable;
    }

    /**
     * Get the compte caisse.
     *
     * @return string Returns the compte caisse.
     */
    public function getCompteCaisse() {
        return $this->compteCaisse;
    }

    /**
     * Get the cpt portefeuille.
     *
     * @return string Returns the cpt portefeuille.
     */
    public function getCptPortefeuille() {
        return $this->cptPortefeuille;
    }

    /**
     * Get the date echeance cpta.
     *
     * @return boolean Returns the date echeance cpta.
     */
    public function getDateEcheanceCpta() {
        return $this->dateEcheanceCpta;
    }

    /**
     * Get the definition paiement.
     *
     * @return boolean Returns the definition paiement.
     */
    public function getDefinitionPaiement() {
        return $this->definitionPaiement;
    }

    /**
     * Get the definition remise.
     *
     * @return boolean Returns the definition remise.
     */
    public function getDefinitionRemise() {
        return $this->definitionRemise;
    }

    /**
     * Get the detail echeance cpta.
     *
     * @return boolean Returns the detail echeance cpta.
     */
    public function getDetailEcheanceCpta() {
        return $this->detailEcheanceCpta;
    }

    /**
     * Get the detail effet cpta.
     *
     * @return boolean Returns the detail effet cpta.
     */
    public function getDetailEffetCpta() {
        return $this->detailEffetCpta;
    }

    /**
     * Get the devise caisse.
     *
     * @return string Returns the devise caisse.
     */
    public function getDeviseCaisse() {
        return $this->deviseCaisse;
    }

    /**
     * Get the domiciliation bancaire1.
     *
     * @return string Returns the domiciliation bancaire1.
     */
    public function getDomiciliationBancaire1() {
        return $this->domiciliationBancaire1;
    }

    /**
     * Get the domiciliation bancaire2.
     *
     * @return string Returns the domiciliation bancaire2.
     */
    public function getDomiciliationBancaire2() {
        return $this->domiciliationBancaire2;
    }

    /**
     * Get the duree echeances.
     *
     * @return string Returns the duree echeances.
     */
    public function getDureeEcheances() {
        return $this->dureeEcheances;
    }

    /**
     * Get the echeance fin decade.
     *
     * @return boolean Returns the echeance fin decade.
     */
    public function getEcheanceFinDecade() {
        return $this->echeanceFinDecade;
    }

    /**
     * Get the echeance fin quinzaine.
     *
     * @return boolean Returns the echeance fin quinzaine.
     */
    public function getEcheanceFinQuinzaine() {
        return $this->echeanceFinQuinzaine;
    }

    /**
     * Get the edit date echeance.
     *
     * @return boolean Returns the edit date echeance.
     */
    public function getEditDateEcheance() {
        return $this->editDateEcheance;
    }

    /**
     * Get the editer cheque.
     *
     * @return boolean Returns the editer cheque.
     */
    public function getEditerCheque() {
        return $this->editerCheque;
    }

    /**
     * Get the especes caisse.
     *
     * @return boolean Returns the especes caisse.
     */
    public function getEspecesCaisse() {
        return $this->especesCaisse;
    }

    /**
     * Get the gestion paiements.
     *
     * @return boolean Returns the gestion paiements.
     */
    public function getGestionPaiements() {
        return $this->gestionPaiements;
    }

    /**
     * Get the i b a n.
     *
     * @return string Returns the i b a n.
     */
    public function getIBAN() {
        return $this->iBAN;
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
     * Get the intitule2.
     *
     * @return string Returns the intitule2.
     */
    public function getIntitule2() {
        return $this->intitule2;
    }

    /**
     * Get the intitule3.
     *
     * @return string Returns the intitule3.
     */
    public function getIntitule3() {
        return $this->intitule3;
    }

    /**
     * Get the l c r.
     *
     * @return boolean Returns the l c r.
     */
    public function getLCR() {
        return $this->lCR;
    }

    /**
     * Get the lib ecr caisse.
     *
     * @return string Returns the lib ecr caisse.
     */
    public function getLibEcrCaisse() {
        return $this->libEcrCaisse;
    }

    /**
     * Get the nombre echeances.
     *
     * @return string Returns the nombre echeances.
     */
    public function getNombreEcheances() {
        return $this->nombreEcheances;
    }

    /**
     * Get the paiement depart le.
     *
     * @return string Returns the paiement depart le.
     */
    public function getPaiementDepartLe() {
        return $this->paiementDepartLe;
    }

    /**
     * Get the paiement le.
     *
     * @return string Returns the paiement le.
     */
    public function getPaiementLe() {
        return $this->paiementLe;
    }

    /**
     * Get the paiement nombre de jours.
     *
     * @return int Returns the paiement nombre de jours.
     */
    public function getPaiementNombreDeJours() {
        return $this->paiementNombreDeJours;
    }

    /**
     * Get the pas de tiroir caisse.
     *
     * @return boolean Returns the pas de tiroir caisse.
     */
    public function getPasDeTiroirCaisse() {
        return $this->pasDeTiroirCaisse;
    }

    /**
     * Get the pas effet avoir.
     *
     * @return boolean Returns the pas effet avoir.
     */
    public function getPasEffetAvoir() {
        return $this->pasEffetAvoir;
    }

    /**
     * Get the r i b.
     *
     * @return string Returns the r i b.
     */
    public function getRIB() {
        return $this->rIB;
    }

    /**
     * Get the remise pied.
     *
     * @return float Returns the remise pied.
     */
    public function getRemisePied() {
        return $this->remisePied;
    }

    /**
     * Get the traite editer.
     *
     * @return boolean Returns the traite editer.
     */
    public function getTraiteEditer() {
        return $this->traiteEditer;
    }

    /**
     * Get the type acceptation.
     *
     * @return string Returns the type acceptation.
     */
    public function getTypeAcceptation() {
        return $this->typeAcceptation;
    }

    /**
     * Set the b i c.
     *
     * @param string $bIC The b i c.
     * @return Reglements Returns this reglements.
     */
    public function setBIC($bIC) {
        $this->bIC = $bIC;
        return $this;
    }

    /**
     * Set the code.
     *
     * @param string $code The code.
     * @return Reglements Returns this reglements.
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the code banque.
     *
     * @param string $codeBanque The code banque.
     * @return Reglements Returns this reglements.
     */
    public function setCodeBanque($codeBanque) {
        $this->codeBanque = $codeBanque;
        return $this;
    }

    /**
     * Set the code comptable.
     *
     * @param string $codeComptable The code comptable.
     * @return Reglements Returns this reglements.
     */
    public function setCodeComptable($codeComptable) {
        $this->codeComptable = $codeComptable;
        return $this;
    }

    /**
     * Set the compte caisse.
     *
     * @param string $compteCaisse The compte caisse.
     * @return Reglements Returns this reglements.
     */
    public function setCompteCaisse($compteCaisse) {
        $this->compteCaisse = $compteCaisse;
        return $this;
    }

    /**
     * Set the cpt portefeuille.
     *
     * @param string $cptPortefeuille The cpt portefeuille.
     * @return Reglements Returns this reglements.
     */
    public function setCptPortefeuille($cptPortefeuille) {
        $this->cptPortefeuille = $cptPortefeuille;
        return $this;
    }

    /**
     * Set the date echeance cpta.
     *
     * @param boolean $dateEcheanceCpta The date echeance cpta.
     * @return Reglements Returns this reglements.
     */
    public function setDateEcheanceCpta($dateEcheanceCpta) {
        $this->dateEcheanceCpta = $dateEcheanceCpta;
        return $this;
    }

    /**
     * Set the definition paiement.
     *
     * @param boolean $definitionPaiement The definition paiement.
     * @return Reglements Returns this reglements.
     */
    public function setDefinitionPaiement($definitionPaiement) {
        $this->definitionPaiement = $definitionPaiement;
        return $this;
    }

    /**
     * Set the definition remise.
     *
     * @param boolean $definitionRemise The definition remise.
     * @return Reglements Returns this reglements.
     */
    public function setDefinitionRemise($definitionRemise) {
        $this->definitionRemise = $definitionRemise;
        return $this;
    }

    /**
     * Set the detail echeance cpta.
     *
     * @param boolean $detailEcheanceCpta The detail echeance cpta.
     * @return Reglements Returns this reglements.
     */
    public function setDetailEcheanceCpta($detailEcheanceCpta) {
        $this->detailEcheanceCpta = $detailEcheanceCpta;
        return $this;
    }

    /**
     * Set the detail effet cpta.
     *
     * @param boolean $detailEffetCpta The detail effet cpta.
     * @return Reglements Returns this reglements.
     */
    public function setDetailEffetCpta($detailEffetCpta) {
        $this->detailEffetCpta = $detailEffetCpta;
        return $this;
    }

    /**
     * Set the devise caisse.
     *
     * @param string $deviseCaisse The devise caisse.
     * @return Reglements Returns this reglements.
     */
    public function setDeviseCaisse($deviseCaisse) {
        $this->deviseCaisse = $deviseCaisse;
        return $this;
    }

    /**
     * Set the domiciliation bancaire1.
     *
     * @param string $domiciliationBancaire1 The domiciliation bancaire1.
     * @return Reglements Returns this reglements.
     */
    public function setDomiciliationBancaire1($domiciliationBancaire1) {
        $this->domiciliationBancaire1 = $domiciliationBancaire1;
        return $this;
    }

    /**
     * Set the domiciliation bancaire2.
     *
     * @param string $domiciliationBancaire2 The domiciliation bancaire2.
     * @return Reglements Returns this reglements.
     */
    public function setDomiciliationBancaire2($domiciliationBancaire2) {
        $this->domiciliationBancaire2 = $domiciliationBancaire2;
        return $this;
    }

    /**
     * Set the duree echeances.
     *
     * @param string $dureeEcheances The duree echeances.
     * @return Reglements Returns this reglements.
     */
    public function setDureeEcheances($dureeEcheances) {
        $this->dureeEcheances = $dureeEcheances;
        return $this;
    }

    /**
     * Set the echeance fin decade.
     *
     * @param boolean $echeanceFinDecade The echeance fin decade.
     * @return Reglements Returns this reglements.
     */
    public function setEcheanceFinDecade($echeanceFinDecade) {
        $this->echeanceFinDecade = $echeanceFinDecade;
        return $this;
    }

    /**
     * Set the echeance fin quinzaine.
     *
     * @param boolean $echeanceFinQuinzaine The echeance fin quinzaine.
     * @return Reglements Returns this reglements.
     */
    public function setEcheanceFinQuinzaine($echeanceFinQuinzaine) {
        $this->echeanceFinQuinzaine = $echeanceFinQuinzaine;
        return $this;
    }

    /**
     * Set the edit date echeance.
     *
     * @param boolean $editDateEcheance The edit date echeance.
     * @return Reglements Returns this reglements.
     */
    public function setEditDateEcheance($editDateEcheance) {
        $this->editDateEcheance = $editDateEcheance;
        return $this;
    }

    /**
     * Set the editer cheque.
     *
     * @param boolean $editerCheque The editer cheque.
     * @return Reglements Returns this reglements.
     */
    public function setEditerCheque($editerCheque) {
        $this->editerCheque = $editerCheque;
        return $this;
    }

    /**
     * Set the especes caisse.
     *
     * @param boolean $especesCaisse The especes caisse.
     * @return Reglements Returns this reglements.
     */
    public function setEspecesCaisse($especesCaisse) {
        $this->especesCaisse = $especesCaisse;
        return $this;
    }

    /**
     * Set the gestion paiements.
     *
     * @param boolean $gestionPaiements The gestion paiements.
     * @return Reglements Returns this reglements.
     */
    public function setGestionPaiements($gestionPaiements) {
        $this->gestionPaiements = $gestionPaiements;
        return $this;
    }

    /**
     * Set the i b a n.
     *
     * @param string $iBAN The i b a n.
     * @return Reglements Returns this reglements.
     */
    public function setIBAN($iBAN) {
        $this->iBAN = $iBAN;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string $intitule The intitule.
     * @return Reglements Returns this reglements.
     */
    public function setIntitule($intitule) {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the intitule2.
     *
     * @param string $intitule2 The intitule2.
     * @return Reglements Returns this reglements.
     */
    public function setIntitule2($intitule2) {
        $this->intitule2 = $intitule2;
        return $this;
    }

    /**
     * Set the intitule3.
     *
     * @param string $intitule3 The intitule3.
     * @return Reglements Returns this reglements.
     */
    public function setIntitule3($intitule3) {
        $this->intitule3 = $intitule3;
        return $this;
    }

    /**
     * Set the l c r.
     *
     * @param boolean $lCR The l c r.
     * @return Reglements Returns this reglements.
     */
    public function setLCR($lCR) {
        $this->lCR = $lCR;
        return $this;
    }

    /**
     * Set the lib ecr caisse.
     *
     * @param string $libEcrCaisse The lib ecr caisse.
     * @return Reglements Returns this reglements.
     */
    public function setLibEcrCaisse($libEcrCaisse) {
        $this->libEcrCaisse = $libEcrCaisse;
        return $this;
    }

    /**
     * Set the nombre echeances.
     *
     * @param string $nombreEcheances The nombre echeances.
     * @return Reglements Returns this reglements.
     */
    public function setNombreEcheances($nombreEcheances) {
        $this->nombreEcheances = $nombreEcheances;
        return $this;
    }

    /**
     * Set the paiement depart le.
     *
     * @param string $paiementDepartLe The paiement depart le.
     * @return Reglements Returns this reglements.
     */
    public function setPaiementDepartLe($paiementDepartLe) {
        $this->paiementDepartLe = $paiementDepartLe;
        return $this;
    }

    /**
     * Set the paiement le.
     *
     * @param string $paiementLe The paiement le.
     * @return Reglements Returns this reglements.
     */
    public function setPaiementLe($paiementLe) {
        $this->paiementLe = $paiementLe;
        return $this;
    }

    /**
     * Set the paiement nombre de jours.
     *
     * @param int $paiementNombreDeJours The paiement nombre de jours.
     * @return Reglements Returns this reglements.
     */
    public function setPaiementNombreDeJours($paiementNombreDeJours) {
        $this->paiementNombreDeJours = $paiementNombreDeJours;
        return $this;
    }

    /**
     * Set the pas de tiroir caisse.
     *
     * @param boolean $pasDeTiroirCaisse The pas de tiroir caisse.
     * @return Reglements Returns this reglements.
     */
    public function setPasDeTiroirCaisse($pasDeTiroirCaisse) {
        $this->pasDeTiroirCaisse = $pasDeTiroirCaisse;
        return $this;
    }

    /**
     * Set the pas effet avoir.
     *
     * @param boolean $pasEffetAvoir The pas effet avoir.
     * @return Reglements Returns this reglements.
     */
    public function setPasEffetAvoir($pasEffetAvoir) {
        $this->pasEffetAvoir = $pasEffetAvoir;
        return $this;
    }

    /**
     * Set the r i b.
     *
     * @param string $rIB The r i b.
     * @return Reglements Returns this reglements.
     */
    public function setRIB($rIB) {
        $this->rIB = $rIB;
        return $this;
    }

    /**
     * Set the remise pied.
     *
     * @param float $remisePied The remise pied.
     * @return Reglements Returns this reglements.
     */
    public function setRemisePied($remisePied) {
        $this->remisePied = $remisePied;
        return $this;
    }

    /**
     * Set the traite editer.
     *
     * @param boolean $traiteEditer The traite editer.
     * @return Reglements Returns this reglements.
     */
    public function setTraiteEditer($traiteEditer) {
        $this->traiteEditer = $traiteEditer;
        return $this;
    }

    /**
     * Set the type acceptation.
     *
     * @param string $typeAcceptation The type acceptation.
     * @return Reglements Returns this reglements.
     */
    public function setTypeAcceptation($typeAcceptation) {
        $this->typeAcceptation = $typeAcceptation;
        return $this;
    }

}
