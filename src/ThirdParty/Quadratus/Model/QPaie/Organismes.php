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

/**
 * Organismes model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class Organismes {

    /**
     * Centre payeur.
     *
     * @var string
     */
    private $centrePayeur;

    /**
     * Code cat cadre.
     *
     * @var string
     */
    private $codeCatCadre;

    /**
     * Code centre.
     *
     * @var string
     */
    private $codeCentre;

    /**
     * Code etablissement.
     *
     * @var int
     */
    private $codeEtablissement;

    /**
     * Code non cadre.
     *
     * @var string
     */
    private $codeNonCadre;

    /**
     * Code organisme.
     *
     * @var string
     */
    private $codeOrganisme;

    /**
     * Compte charge.
     *
     * @var string
     */
    private $compteCharge;

    /**
     * Compte tiers.
     *
     * @var string
     */
    private $compteTiers;

    /**
     * Cot assedic par urssaf.
     *
     * @var bool
     */
    private $cotAssedicParUrssaf;

    /**
     * Cotitel.
     *
     * @var bool
     */
    private $cotitel;

    /**
     * Doss cadre.
     *
     * @var string
     */
    private $dossCadre;

    /**
     * Doss non cadre.
     *
     * @var string
     */
    private $dossNonCadre;

    /**
     * Edition ducs.
     *
     * @var bool
     */
    private $editionDucs;

    /**
     * Gestion paie decalee o c.
     *
     * @var bool
     */
    private $gestionPaieDecaleeOC;

    /**
     * Groupe interne.
     *
     * @var string
     */
    private $groupeInterne;

    /**
     * Id intervenant.
     *
     * @var string
     */
    private $idIntervenant;

    /**
     * Jour exigible.
     *
     * @var string
     */
    private $jourExigible;

    /**
     * Jour limite depot.
     *
     * @var string
     */
    private $jourLimiteDepot;

    /**
     * Jour reglement.
     *
     * @var string
     */
    private $jourReglement;

    /**
     * Mens trim.
     *
     * @var string
     */
    private $mensTrim;

    /**
     * No affiliation.
     *
     * @var string
     */
    private $noAffiliation;

    /**
     * Optique ducs.
     *
     * @var string
     */
    private $optiqueDucs;

    /**
     * Paiement edi v l u.
     *
     * @var bool
     */
    private $paiementEdiVLU;

    /**
     * Pas traiter edi.
     *
     * @var bool
     */
    private $pasTraiterEdi;

    /**
     * Rib.
     *
     * @var string
     */
    private $rib;

    /**
     * Telepaiement.
     *
     * @var bool
     */
    private $telepaiement;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the centre payeur.
     *
     * @return string Returns the centre payeur.
     */
    public function getCentrePayeur() {
        return $this->centrePayeur;
    }

    /**
     * Get the code cat cadre.
     *
     * @return string Returns the code cat cadre.
     */
    public function getCodeCatCadre() {
        return $this->codeCatCadre;
    }

    /**
     * Get the code centre.
     *
     * @return string Returns the code centre.
     */
    public function getCodeCentre() {
        return $this->codeCentre;
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
     * Get the code non cadre.
     *
     * @return string Returns the code non cadre.
     */
    public function getCodeNonCadre() {
        return $this->codeNonCadre;
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
     * Get the compte charge.
     *
     * @return string Returns the compte charge.
     */
    public function getCompteCharge() {
        return $this->compteCharge;
    }

    /**
     * Get the compte tiers.
     *
     * @return string Returns the compte tiers.
     */
    public function getCompteTiers() {
        return $this->compteTiers;
    }

    /**
     * Get the cot assedic par urssaf.
     *
     * @return bool Returns the cot assedic par urssaf.
     */
    public function getCotAssedicParUrssaf() {
        return $this->cotAssedicParUrssaf;
    }

    /**
     * Get the cotitel.
     *
     * @return bool Returns the cotitel.
     */
    public function getCotitel() {
        return $this->cotitel;
    }

    /**
     * Get the doss cadre.
     *
     * @return string Returns the doss cadre.
     */
    public function getDossCadre() {
        return $this->dossCadre;
    }

    /**
     * Get the doss non cadre.
     *
     * @return string Returns the doss non cadre.
     */
    public function getDossNonCadre() {
        return $this->dossNonCadre;
    }

    /**
     * Get the edition ducs.
     *
     * @return bool Returns the edition ducs.
     */
    public function getEditionDucs() {
        return $this->editionDucs;
    }

    /**
     * Get the gestion paie decalee o c.
     *
     * @return bool Returns the gestion paie decalee o c.
     */
    public function getGestionPaieDecaleeOC() {
        return $this->gestionPaieDecaleeOC;
    }

    /**
     * Get the groupe interne.
     *
     * @return string Returns the groupe interne.
     */
    public function getGroupeInterne() {
        return $this->groupeInterne;
    }

    /**
     * Get the id intervenant.
     *
     * @return string Returns the id intervenant.
     */
    public function getIdIntervenant() {
        return $this->idIntervenant;
    }

    /**
     * Get the jour exigible.
     *
     * @return string Returns the jour exigible.
     */
    public function getJourExigible() {
        return $this->jourExigible;
    }

    /**
     * Get the jour limite depot.
     *
     * @return string Returns the jour limite depot.
     */
    public function getJourLimiteDepot() {
        return $this->jourLimiteDepot;
    }

    /**
     * Get the jour reglement.
     *
     * @return string Returns the jour reglement.
     */
    public function getJourReglement() {
        return $this->jourReglement;
    }

    /**
     * Get the mens trim.
     *
     * @return string Returns the mens trim.
     */
    public function getMensTrim() {
        return $this->mensTrim;
    }

    /**
     * Get the no affiliation.
     *
     * @return string Returns the no affiliation.
     */
    public function getNoAffiliation() {
        return $this->noAffiliation;
    }

    /**
     * Get the optique ducs.
     *
     * @return string Returns the optique ducs.
     */
    public function getOptiqueDucs() {
        return $this->optiqueDucs;
    }

    /**
     * Get the paiement edi v l u.
     *
     * @return bool Returns the paiement edi v l u.
     */
    public function getPaiementEdiVLU() {
        return $this->paiementEdiVLU;
    }

    /**
     * Get the pas traiter edi.
     *
     * @return bool Returns the pas traiter edi.
     */
    public function getPasTraiterEdi() {
        return $this->pasTraiterEdi;
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
     * Get the telepaiement.
     *
     * @return bool Returns the telepaiement.
     */
    public function getTelepaiement() {
        return $this->telepaiement;
    }

    /**
     * Set the centre payeur.
     *
     * @param string $centrePayeur The centre payeur.
     * @return Organismes Returns this organismes.
     */
    public function setCentrePayeur($centrePayeur) {
        $this->centrePayeur = $centrePayeur;
        return $this;
    }

    /**
     * Set the code cat cadre.
     *
     * @param string $codeCatCadre The code cat cadre.
     * @return Organismes Returns this organismes.
     */
    public function setCodeCatCadre($codeCatCadre) {
        $this->codeCatCadre = $codeCatCadre;
        return $this;
    }

    /**
     * Set the code centre.
     *
     * @param string $codeCentre The code centre.
     * @return Organismes Returns this organismes.
     */
    public function setCodeCentre($codeCentre) {
        $this->codeCentre = $codeCentre;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int $codeEtablissement The code etablissement.
     * @return Organismes Returns this organismes.
     */
    public function setCodeEtablissement($codeEtablissement) {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the code non cadre.
     *
     * @param string $codeNonCadre The code non cadre.
     * @return Organismes Returns this organismes.
     */
    public function setCodeNonCadre($codeNonCadre) {
        $this->codeNonCadre = $codeNonCadre;
        return $this;
    }

    /**
     * Set the code organisme.
     *
     * @param string $codeOrganisme The code organisme.
     * @return Organismes Returns this organismes.
     */
    public function setCodeOrganisme($codeOrganisme) {
        $this->codeOrganisme = $codeOrganisme;
        return $this;
    }

    /**
     * Set the compte charge.
     *
     * @param string $compteCharge The compte charge.
     * @return Organismes Returns this organismes.
     */
    public function setCompteCharge($compteCharge) {
        $this->compteCharge = $compteCharge;
        return $this;
    }

    /**
     * Set the compte tiers.
     *
     * @param string $compteTiers The compte tiers.
     * @return Organismes Returns this organismes.
     */
    public function setCompteTiers($compteTiers) {
        $this->compteTiers = $compteTiers;
        return $this;
    }

    /**
     * Set the cot assedic par urssaf.
     *
     * @param bool $cotAssedicParUrssaf The cot assedic par urssaf.
     * @return Organismes Returns this organismes.
     */
    public function setCotAssedicParUrssaf($cotAssedicParUrssaf) {
        $this->cotAssedicParUrssaf = $cotAssedicParUrssaf;
        return $this;
    }

    /**
     * Set the cotitel.
     *
     * @param bool $cotitel The cotitel.
     * @return Organismes Returns this organismes.
     */
    public function setCotitel($cotitel) {
        $this->cotitel = $cotitel;
        return $this;
    }

    /**
     * Set the doss cadre.
     *
     * @param string $dossCadre The doss cadre.
     * @return Organismes Returns this organismes.
     */
    public function setDossCadre($dossCadre) {
        $this->dossCadre = $dossCadre;
        return $this;
    }

    /**
     * Set the doss non cadre.
     *
     * @param string $dossNonCadre The doss non cadre.
     * @return Organismes Returns this organismes.
     */
    public function setDossNonCadre($dossNonCadre) {
        $this->dossNonCadre = $dossNonCadre;
        return $this;
    }

    /**
     * Set the edition ducs.
     *
     * @param bool $editionDucs The edition ducs.
     * @return Organismes Returns this organismes.
     */
    public function setEditionDucs($editionDucs) {
        $this->editionDucs = $editionDucs;
        return $this;
    }

    /**
     * Set the gestion paie decalee o c.
     *
     * @param bool $gestionPaieDecaleeOC The gestion paie decalee o c.
     * @return Organismes Returns this organismes.
     */
    public function setGestionPaieDecaleeOC($gestionPaieDecaleeOC) {
        $this->gestionPaieDecaleeOC = $gestionPaieDecaleeOC;
        return $this;
    }

    /**
     * Set the groupe interne.
     *
     * @param string $groupeInterne The groupe interne.
     * @return Organismes Returns this organismes.
     */
    public function setGroupeInterne($groupeInterne) {
        $this->groupeInterne = $groupeInterne;
        return $this;
    }

    /**
     * Set the id intervenant.
     *
     * @param string $idIntervenant The id intervenant.
     * @return Organismes Returns this organismes.
     */
    public function setIdIntervenant($idIntervenant) {
        $this->idIntervenant = $idIntervenant;
        return $this;
    }

    /**
     * Set the jour exigible.
     *
     * @param string $jourExigible The jour exigible.
     * @return Organismes Returns this organismes.
     */
    public function setJourExigible($jourExigible) {
        $this->jourExigible = $jourExigible;
        return $this;
    }

    /**
     * Set the jour limite depot.
     *
     * @param string $jourLimiteDepot The jour limite depot.
     * @return Organismes Returns this organismes.
     */
    public function setJourLimiteDepot($jourLimiteDepot) {
        $this->jourLimiteDepot = $jourLimiteDepot;
        return $this;
    }

    /**
     * Set the jour reglement.
     *
     * @param string $jourReglement The jour reglement.
     * @return Organismes Returns this organismes.
     */
    public function setJourReglement($jourReglement) {
        $this->jourReglement = $jourReglement;
        return $this;
    }

    /**
     * Set the mens trim.
     *
     * @param string $mensTrim The mens trim.
     * @return Organismes Returns this organismes.
     */
    public function setMensTrim($mensTrim) {
        $this->mensTrim = $mensTrim;
        return $this;
    }

    /**
     * Set the no affiliation.
     *
     * @param string $noAffiliation The no affiliation.
     * @return Organismes Returns this organismes.
     */
    public function setNoAffiliation($noAffiliation) {
        $this->noAffiliation = $noAffiliation;
        return $this;
    }

    /**
     * Set the optique ducs.
     *
     * @param string $optiqueDucs The optique ducs.
     * @return Organismes Returns this organismes.
     */
    public function setOptiqueDucs($optiqueDucs) {
        $this->optiqueDucs = $optiqueDucs;
        return $this;
    }

    /**
     * Set the paiement edi v l u.
     *
     * @param bool $paiementEdiVLU The paiement edi v l u.
     * @return Organismes Returns this organismes.
     */
    public function setPaiementEdiVLU($paiementEdiVLU) {
        $this->paiementEdiVLU = $paiementEdiVLU;
        return $this;
    }

    /**
     * Set the pas traiter edi.
     *
     * @param bool $pasTraiterEdi The pas traiter edi.
     * @return Organismes Returns this organismes.
     */
    public function setPasTraiterEdi($pasTraiterEdi) {
        $this->pasTraiterEdi = $pasTraiterEdi;
        return $this;
    }

    /**
     * Set the rib.
     *
     * @param string $rib The rib.
     * @return Organismes Returns this organismes.
     */
    public function setRib($rib) {
        $this->rib = $rib;
        return $this;
    }

    /**
     * Set the telepaiement.
     *
     * @param bool $telepaiement The telepaiement.
     * @return Organismes Returns this organismes.
     */
    public function setTelepaiement($telepaiement) {
        $this->telepaiement = $telepaiement;
        return $this;
    }
}
