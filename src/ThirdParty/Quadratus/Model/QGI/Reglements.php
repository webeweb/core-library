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
 * Reglements.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class Reglements {

    /**
     * Bic.
     *
     * @var string
     */
    private $bic;

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
     * @var bool
     */
    private $dateEcheanceCpta;

    /**
     * Definition paiement.
     *
     * @var bool
     */
    private $definitionPaiement;

    /**
     * Definition remise.
     *
     * @var bool
     */
    private $definitionRemise;

    /**
     * Detail echeance cpta.
     *
     * @var bool
     */
    private $detailEcheanceCpta;

    /**
     * Detail effet cpta.
     *
     * @var bool
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
     * @var bool
     */
    private $echeanceFinDecade;

    /**
     * Echeance fin quinzaine.
     *
     * @var bool
     */
    private $echeanceFinQuinzaine;

    /**
     * Edit date echeance.
     *
     * @var bool
     */
    private $editDateEcheance;

    /**
     * Editer cheque.
     *
     * @var bool
     */
    private $editerCheque;

    /**
     * Especes caisse.
     *
     * @var bool
     */
    private $especesCaisse;

    /**
     * Gestion paiements.
     *
     * @var bool
     */
    private $gestionPaiements;

    /**
     * Iban.
     *
     * @var string
     */
    private $iban;

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
     * Lcr.
     *
     * @var bool
     */
    private $lcr;

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
     * @var bool
     */
    private $pasDeTiroirCaisse;

    /**
     * Pas effet avoir.
     *
     * @var bool
     */
    private $pasEffetAvoir;

    /**
     * Remise pied.
     *
     * @var float
     */
    private $remisePied;

    /**
     * Rib.
     *
     * @var string
     */
    private $rib;

    /**
     * Traite editer.
     *
     * @var bool
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
     * Get the bic.
     *
     * @return string Returns the bic.
     */
    public function getBic() {
        return $this->bic;
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
     * @return bool Returns the date echeance cpta.
     */
    public function getDateEcheanceCpta() {
        return $this->dateEcheanceCpta;
    }

    /**
     * Get the definition paiement.
     *
     * @return bool Returns the definition paiement.
     */
    public function getDefinitionPaiement() {
        return $this->definitionPaiement;
    }

    /**
     * Get the definition remise.
     *
     * @return bool Returns the definition remise.
     */
    public function getDefinitionRemise() {
        return $this->definitionRemise;
    }

    /**
     * Get the detail echeance cpta.
     *
     * @return bool Returns the detail echeance cpta.
     */
    public function getDetailEcheanceCpta() {
        return $this->detailEcheanceCpta;
    }

    /**
     * Get the detail effet cpta.
     *
     * @return bool Returns the detail effet cpta.
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
     * @return bool Returns the echeance fin decade.
     */
    public function getEcheanceFinDecade() {
        return $this->echeanceFinDecade;
    }

    /**
     * Get the echeance fin quinzaine.
     *
     * @return bool Returns the echeance fin quinzaine.
     */
    public function getEcheanceFinQuinzaine() {
        return $this->echeanceFinQuinzaine;
    }

    /**
     * Get the edit date echeance.
     *
     * @return bool Returns the edit date echeance.
     */
    public function getEditDateEcheance() {
        return $this->editDateEcheance;
    }

    /**
     * Get the editer cheque.
     *
     * @return bool Returns the editer cheque.
     */
    public function getEditerCheque() {
        return $this->editerCheque;
    }

    /**
     * Get the especes caisse.
     *
     * @return bool Returns the especes caisse.
     */
    public function getEspecesCaisse() {
        return $this->especesCaisse;
    }

    /**
     * Get the gestion paiements.
     *
     * @return bool Returns the gestion paiements.
     */
    public function getGestionPaiements() {
        return $this->gestionPaiements;
    }

    /**
     * Get the iban.
     *
     * @return string Returns the iban.
     */
    public function getIban() {
        return $this->iban;
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
     * Get the lcr.
     *
     * @return bool Returns the lcr.
     */
    public function getLcr() {
        return $this->lcr;
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
     * @return bool Returns the pas de tiroir caisse.
     */
    public function getPasDeTiroirCaisse() {
        return $this->pasDeTiroirCaisse;
    }

    /**
     * Get the pas effet avoir.
     *
     * @return bool Returns the pas effet avoir.
     */
    public function getPasEffetAvoir() {
        return $this->pasEffetAvoir;
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
     * Get the rib.
     *
     * @return string Returns the rib.
     */
    public function getRib() {
        return $this->rib;
    }

    /**
     * Get the traite editer.
     *
     * @return bool Returns the traite editer.
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
     * Set the bic.
     *
     * @param string $bic The bic.
     */
    public function setBic($bic) {
        $this->bic = $bic;
        return $this;
    }

    /**
     * Set the code.
     *
     * @param string $code The code.
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the code banque.
     *
     * @param string $codeBanque The code banque.
     */
    public function setCodeBanque($codeBanque) {
        $this->codeBanque = $codeBanque;
        return $this;
    }

    /**
     * Set the code comptable.
     *
     * @param string $codeComptable The code comptable.
     */
    public function setCodeComptable($codeComptable) {
        $this->codeComptable = $codeComptable;
        return $this;
    }

    /**
     * Set the compte caisse.
     *
     * @param string $compteCaisse The compte caisse.
     */
    public function setCompteCaisse($compteCaisse) {
        $this->compteCaisse = $compteCaisse;
        return $this;
    }

    /**
     * Set the cpt portefeuille.
     *
     * @param string $cptPortefeuille The cpt portefeuille.
     */
    public function setCptPortefeuille($cptPortefeuille) {
        $this->cptPortefeuille = $cptPortefeuille;
        return $this;
    }

    /**
     * Set the date echeance cpta.
     *
     * @param bool $dateEcheanceCpta The date echeance cpta.
     */
    public function setDateEcheanceCpta($dateEcheanceCpta) {
        $this->dateEcheanceCpta = $dateEcheanceCpta;
        return $this;
    }

    /**
     * Set the definition paiement.
     *
     * @param bool $definitionPaiement The definition paiement.
     */
    public function setDefinitionPaiement($definitionPaiement) {
        $this->definitionPaiement = $definitionPaiement;
        return $this;
    }

    /**
     * Set the definition remise.
     *
     * @param bool $definitionRemise The definition remise.
     */
    public function setDefinitionRemise($definitionRemise) {
        $this->definitionRemise = $definitionRemise;
        return $this;
    }

    /**
     * Set the detail echeance cpta.
     *
     * @param bool $detailEcheanceCpta The detail echeance cpta.
     */
    public function setDetailEcheanceCpta($detailEcheanceCpta) {
        $this->detailEcheanceCpta = $detailEcheanceCpta;
        return $this;
    }

    /**
     * Set the detail effet cpta.
     *
     * @param bool $detailEffetCpta The detail effet cpta.
     */
    public function setDetailEffetCpta($detailEffetCpta) {
        $this->detailEffetCpta = $detailEffetCpta;
        return $this;
    }

    /**
     * Set the devise caisse.
     *
     * @param string $deviseCaisse The devise caisse.
     */
    public function setDeviseCaisse($deviseCaisse) {
        $this->deviseCaisse = $deviseCaisse;
        return $this;
    }

    /**
     * Set the domiciliation bancaire1.
     *
     * @param string $domiciliationBancaire1 The domiciliation bancaire1.
     */
    public function setDomiciliationBancaire1($domiciliationBancaire1) {
        $this->domiciliationBancaire1 = $domiciliationBancaire1;
        return $this;
    }

    /**
     * Set the domiciliation bancaire2.
     *
     * @param string $domiciliationBancaire2 The domiciliation bancaire2.
     */
    public function setDomiciliationBancaire2($domiciliationBancaire2) {
        $this->domiciliationBancaire2 = $domiciliationBancaire2;
        return $this;
    }

    /**
     * Set the duree echeances.
     *
     * @param string $dureeEcheances The duree echeances.
     */
    public function setDureeEcheances($dureeEcheances) {
        $this->dureeEcheances = $dureeEcheances;
        return $this;
    }

    /**
     * Set the echeance fin decade.
     *
     * @param bool $echeanceFinDecade The echeance fin decade.
     */
    public function setEcheanceFinDecade($echeanceFinDecade) {
        $this->echeanceFinDecade = $echeanceFinDecade;
        return $this;
    }

    /**
     * Set the echeance fin quinzaine.
     *
     * @param bool $echeanceFinQuinzaine The echeance fin quinzaine.
     */
    public function setEcheanceFinQuinzaine($echeanceFinQuinzaine) {
        $this->echeanceFinQuinzaine = $echeanceFinQuinzaine;
        return $this;
    }

    /**
     * Set the edit date echeance.
     *
     * @param bool $editDateEcheance The edit date echeance.
     */
    public function setEditDateEcheance($editDateEcheance) {
        $this->editDateEcheance = $editDateEcheance;
        return $this;
    }

    /**
     * Set the editer cheque.
     *
     * @param bool $editerCheque The editer cheque.
     */
    public function setEditerCheque($editerCheque) {
        $this->editerCheque = $editerCheque;
        return $this;
    }

    /**
     * Set the especes caisse.
     *
     * @param bool $especesCaisse The especes caisse.
     */
    public function setEspecesCaisse($especesCaisse) {
        $this->especesCaisse = $especesCaisse;
        return $this;
    }

    /**
     * Set the gestion paiements.
     *
     * @param bool $gestionPaiements The gestion paiements.
     */
    public function setGestionPaiements($gestionPaiements) {
        $this->gestionPaiements = $gestionPaiements;
        return $this;
    }

    /**
     * Set the iban.
     *
     * @param string $iban The iban.
     */
    public function setIban($iban) {
        $this->iban = $iban;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string $intitule The intitule.
     */
    public function setIntitule($intitule) {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the intitule2.
     *
     * @param string $intitule2 The intitule2.
     */
    public function setIntitule2($intitule2) {
        $this->intitule2 = $intitule2;
        return $this;
    }

    /**
     * Set the intitule3.
     *
     * @param string $intitule3 The intitule3.
     */
    public function setIntitule3($intitule3) {
        $this->intitule3 = $intitule3;
        return $this;
    }

    /**
     * Set the lcr.
     *
     * @param bool $lcr The lcr.
     */
    public function setLcr($lcr) {
        $this->lcr = $lcr;
        return $this;
    }

    /**
     * Set the lib ecr caisse.
     *
     * @param string $libEcrCaisse The lib ecr caisse.
     */
    public function setLibEcrCaisse($libEcrCaisse) {
        $this->libEcrCaisse = $libEcrCaisse;
        return $this;
    }

    /**
     * Set the nombre echeances.
     *
     * @param string $nombreEcheances The nombre echeances.
     */
    public function setNombreEcheances($nombreEcheances) {
        $this->nombreEcheances = $nombreEcheances;
        return $this;
    }

    /**
     * Set the paiement depart le.
     *
     * @param string $paiementDepartLe The paiement depart le.
     */
    public function setPaiementDepartLe($paiementDepartLe) {
        $this->paiementDepartLe = $paiementDepartLe;
        return $this;
    }

    /**
     * Set the paiement le.
     *
     * @param string $paiementLe The paiement le.
     */
    public function setPaiementLe($paiementLe) {
        $this->paiementLe = $paiementLe;
        return $this;
    }

    /**
     * Set the paiement nombre de jours.
     *
     * @param int $paiementNombreDeJours The paiement nombre de jours.
     */
    public function setPaiementNombreDeJours($paiementNombreDeJours) {
        $this->paiementNombreDeJours = $paiementNombreDeJours;
        return $this;
    }

    /**
     * Set the pas de tiroir caisse.
     *
     * @param bool $pasDeTiroirCaisse The pas de tiroir caisse.
     */
    public function setPasDeTiroirCaisse($pasDeTiroirCaisse) {
        $this->pasDeTiroirCaisse = $pasDeTiroirCaisse;
        return $this;
    }

    /**
     * Set the pas effet avoir.
     *
     * @param bool $pasEffetAvoir The pas effet avoir.
     */
    public function setPasEffetAvoir($pasEffetAvoir) {
        $this->pasEffetAvoir = $pasEffetAvoir;
        return $this;
    }

    /**
     * Set the remise pied.
     *
     * @param float $remisePied The remise pied.
     */
    public function setRemisePied($remisePied) {
        $this->remisePied = $remisePied;
        return $this;
    }

    /**
     * Set the rib.
     *
     * @param string $rib The rib.
     */
    public function setRib($rib) {
        $this->rib = $rib;
        return $this;
    }

    /**
     * Set the traite editer.
     *
     * @param bool $traiteEditer The traite editer.
     */
    public function setTraiteEditer($traiteEditer) {
        $this->traiteEditer = $traiteEditer;
        return $this;
    }

    /**
     * Set the type acceptation.
     *
     * @param string $typeAcceptation The type acceptation.
     */
    public function setTypeAcceptation($typeAcceptation) {
        $this->typeAcceptation = $typeAcceptation;
        return $this;
    }
}
