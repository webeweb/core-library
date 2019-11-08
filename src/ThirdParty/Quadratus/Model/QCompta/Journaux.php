<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta;

/**
 * Journaux.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class Journaux {

    /**
     * Bic.
     *
     * @var string
     */
    private $bic;

    /**
     * Centralise gd livre.
     *
     * @var bool
     */
    private $centraliseGdLivre;

    /**
     * Cle acces.
     *
     * @var string
     */
    private $cleAcces;

    /**
     * Code.
     *
     * @var string
     */
    private $code;

    /**
     * Code centre.
     *
     * @var string
     */
    private $codeCentre;

    /**
     * Code entree.
     *
     * @var string
     */
    private $codeEntree;

    /**
     * Compte contrepartie.
     *
     * @var string
     */
    private $compteContrepartie;

    /**
     * Compte contrepartie aamm.
     *
     * @var string
     */
    private $compteContrepartieAamm;

    /**
     * Contrepartie.
     *
     * @var bool
     */
    private $contrepartie;

    /**
     * Dom banque.
     *
     * @var string
     */
    private $domBanque;

    /**
     * Equilibre auto.
     *
     * @var string
     */
    private $equilibreAuto;

    /**
     * Etebac skip tva.
     *
     * @var bool
     */
    private $etebacSkipTva;

    /**
     * Etebac x fer detailler bq.
     *
     * @var bool
     */
    private $etebacXFerDetaillerBq;

    /**
     * Etebac x fer do prefix code op.
     *
     * @var bool
     */
    private $etebacXFerDoPrefixCodeOp;

    /**
     * Etebac x fer ind libelle.
     *
     * @var string
     */
    private $etebacXFerIndLibelle;

    /**
     * Etebac x fer lignes comp.
     *
     * @var bool
     */
    private $etebacXFerLignesComp;

    /**
     * Famille.
     *
     * @var string
     */
    private $famille;

    /**
     * Gest num piece jrn.
     *
     * @var bool
     */
    private $gestNumPieceJrn;

    /**
     * Gestion folio.
     *
     * @var bool
     */
    private $gestionFolio;

    /**
     * Gestion num piece.
     *
     * @var string
     */
    private $gestionNumPiece;

    /**
     * Iban.
     *
     * @var string
     */
    private $iban;

    /**
     * Iban id client.
     *
     * @var string
     */
    private $ibanIdClient;

    /**
     * Libelle.
     *
     * @var string
     */
    private $libelle;

    /**
     * Montant negatif.
     *
     * @var bool
     */
    private $montantNegatif;

    /**
     * Niveau droit.
     *
     * @var string
     */
    private $niveauDroit;

    /**
     * Num emetteur.
     *
     * @var string
     */
    private $numEmetteur;

    /**
     * Prochain num piece.
     *
     * @var int
     */
    private $prochainNumPiece;

    /**
     * Propo libelle.
     *
     * @var string
     */
    private $propoLibelle;

    /**
     * Rib.
     *
     * @var string
     */
    private $rib;

    /**
     * Saisie bordereau.
     *
     * @var bool
     */
    private $saisieBordereau;

    /**
     * Type journal.
     *
     * @var string
     */
    private $typeJournal;

    /**
     * Type piece global.
     *
     * @var bool
     */
    private $typePieceGlobal;

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
     * Get the centralise gd livre.
     *
     * @return bool Returns the centralise gd livre.
     */
    public function getCentraliseGdLivre() {
        return $this->centraliseGdLivre;
    }

    /**
     * Get the cle acces.
     *
     * @return string Returns the cle acces.
     */
    public function getCleAcces() {
        return $this->cleAcces;
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
     * Get the code centre.
     *
     * @return string Returns the code centre.
     */
    public function getCodeCentre() {
        return $this->codeCentre;
    }

    /**
     * Get the code entree.
     *
     * @return string Returns the code entree.
     */
    public function getCodeEntree() {
        return $this->codeEntree;
    }

    /**
     * Get the compte contrepartie.
     *
     * @return string Returns the compte contrepartie.
     */
    public function getCompteContrepartie() {
        return $this->compteContrepartie;
    }

    /**
     * Get the compte contrepartie aamm.
     *
     * @return string Returns the compte contrepartie aamm.
     */
    public function getCompteContrepartieAamm() {
        return $this->compteContrepartieAamm;
    }

    /**
     * Get the contrepartie.
     *
     * @return bool Returns the contrepartie.
     */
    public function getContrepartie() {
        return $this->contrepartie;
    }

    /**
     * Get the dom banque.
     *
     * @return string Returns the dom banque.
     */
    public function getDomBanque() {
        return $this->domBanque;
    }

    /**
     * Get the equilibre auto.
     *
     * @return string Returns the equilibre auto.
     */
    public function getEquilibreAuto() {
        return $this->equilibreAuto;
    }

    /**
     * Get the etebac skip tva.
     *
     * @return bool Returns the etebac skip tva.
     */
    public function getEtebacSkipTva() {
        return $this->etebacSkipTva;
    }

    /**
     * Get the etebac x fer detailler bq.
     *
     * @return bool Returns the etebac x fer detailler bq.
     */
    public function getEtebacXFerDetaillerBq() {
        return $this->etebacXFerDetaillerBq;
    }

    /**
     * Get the etebac x fer do prefix code op.
     *
     * @return bool Returns the etebac x fer do prefix code op.
     */
    public function getEtebacXFerDoPrefixCodeOp() {
        return $this->etebacXFerDoPrefixCodeOp;
    }

    /**
     * Get the etebac x fer ind libelle.
     *
     * @return string Returns the etebac x fer ind libelle.
     */
    public function getEtebacXFerIndLibelle() {
        return $this->etebacXFerIndLibelle;
    }

    /**
     * Get the etebac x fer lignes comp.
     *
     * @return bool Returns the etebac x fer lignes comp.
     */
    public function getEtebacXFerLignesComp() {
        return $this->etebacXFerLignesComp;
    }

    /**
     * Get the famille.
     *
     * @return string Returns the famille.
     */
    public function getFamille() {
        return $this->famille;
    }

    /**
     * Get the gest num piece jrn.
     *
     * @return bool Returns the gest num piece jrn.
     */
    public function getGestNumPieceJrn() {
        return $this->gestNumPieceJrn;
    }

    /**
     * Get the gestion folio.
     *
     * @return bool Returns the gestion folio.
     */
    public function getGestionFolio() {
        return $this->gestionFolio;
    }

    /**
     * Get the gestion num piece.
     *
     * @return string Returns the gestion num piece.
     */
    public function getGestionNumPiece() {
        return $this->gestionNumPiece;
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
     * Get the iban id client.
     *
     * @return string Returns the iban id client.
     */
    public function getIbanIdClient() {
        return $this->ibanIdClient;
    }

    /**
     * Get the libelle.
     *
     * @return string Returns the libelle.
     */
    public function getLibelle() {
        return $this->libelle;
    }

    /**
     * Get the montant negatif.
     *
     * @return bool Returns the montant negatif.
     */
    public function getMontantNegatif() {
        return $this->montantNegatif;
    }

    /**
     * Get the niveau droit.
     *
     * @return string Returns the niveau droit.
     */
    public function getNiveauDroit() {
        return $this->niveauDroit;
    }

    /**
     * Get the num emetteur.
     *
     * @return string Returns the num emetteur.
     */
    public function getNumEmetteur() {
        return $this->numEmetteur;
    }

    /**
     * Get the prochain num piece.
     *
     * @return int Returns the prochain num piece.
     */
    public function getProchainNumPiece() {
        return $this->prochainNumPiece;
    }

    /**
     * Get the propo libelle.
     *
     * @return string Returns the propo libelle.
     */
    public function getPropoLibelle() {
        return $this->propoLibelle;
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
     * Get the saisie bordereau.
     *
     * @return bool Returns the saisie bordereau.
     */
    public function getSaisieBordereau() {
        return $this->saisieBordereau;
    }

    /**
     * Get the type journal.
     *
     * @return string Returns the type journal.
     */
    public function getTypeJournal() {
        return $this->typeJournal;
    }

    /**
     * Get the type piece global.
     *
     * @return bool Returns the type piece global.
     */
    public function getTypePieceGlobal() {
        return $this->typePieceGlobal;
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
     * Set the centralise gd livre.
     *
     * @param bool $centraliseGdLivre The centralise gd livre.
     */
    public function setCentraliseGdLivre($centraliseGdLivre) {
        $this->centraliseGdLivre = $centraliseGdLivre;
        return $this;
    }

    /**
     * Set the cle acces.
     *
     * @param string $cleAcces The cle acces.
     */
    public function setCleAcces($cleAcces) {
        $this->cleAcces = $cleAcces;
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
     * Set the code centre.
     *
     * @param string $codeCentre The code centre.
     */
    public function setCodeCentre($codeCentre) {
        $this->codeCentre = $codeCentre;
        return $this;
    }

    /**
     * Set the code entree.
     *
     * @param string $codeEntree The code entree.
     */
    public function setCodeEntree($codeEntree) {
        $this->codeEntree = $codeEntree;
        return $this;
    }

    /**
     * Set the compte contrepartie.
     *
     * @param string $compteContrepartie The compte contrepartie.
     */
    public function setCompteContrepartie($compteContrepartie) {
        $this->compteContrepartie = $compteContrepartie;
        return $this;
    }

    /**
     * Set the compte contrepartie aamm.
     *
     * @param string $compteContrepartieAamm The compte contrepartie aamm.
     */
    public function setCompteContrepartieAamm($compteContrepartieAamm) {
        $this->compteContrepartieAamm = $compteContrepartieAamm;
        return $this;
    }

    /**
     * Set the contrepartie.
     *
     * @param bool $contrepartie The contrepartie.
     */
    public function setContrepartie($contrepartie) {
        $this->contrepartie = $contrepartie;
        return $this;
    }

    /**
     * Set the dom banque.
     *
     * @param string $domBanque The dom banque.
     */
    public function setDomBanque($domBanque) {
        $this->domBanque = $domBanque;
        return $this;
    }

    /**
     * Set the equilibre auto.
     *
     * @param string $equilibreAuto The equilibre auto.
     */
    public function setEquilibreAuto($equilibreAuto) {
        $this->equilibreAuto = $equilibreAuto;
        return $this;
    }

    /**
     * Set the etebac skip tva.
     *
     * @param bool $etebacSkipTva The etebac skip tva.
     */
    public function setEtebacSkipTva($etebacSkipTva) {
        $this->etebacSkipTva = $etebacSkipTva;
        return $this;
    }

    /**
     * Set the etebac x fer detailler bq.
     *
     * @param bool $etebacXFerDetaillerBq The etebac x fer detailler bq.
     */
    public function setEtebacXFerDetaillerBq($etebacXFerDetaillerBq) {
        $this->etebacXFerDetaillerBq = $etebacXFerDetaillerBq;
        return $this;
    }

    /**
     * Set the etebac x fer do prefix code op.
     *
     * @param bool $etebacXFerDoPrefixCodeOp The etebac x fer do prefix code op.
     */
    public function setEtebacXFerDoPrefixCodeOp($etebacXFerDoPrefixCodeOp) {
        $this->etebacXFerDoPrefixCodeOp = $etebacXFerDoPrefixCodeOp;
        return $this;
    }

    /**
     * Set the etebac x fer ind libelle.
     *
     * @param string $etebacXFerIndLibelle The etebac x fer ind libelle.
     */
    public function setEtebacXFerIndLibelle($etebacXFerIndLibelle) {
        $this->etebacXFerIndLibelle = $etebacXFerIndLibelle;
        return $this;
    }

    /**
     * Set the etebac x fer lignes comp.
     *
     * @param bool $etebacXFerLignesComp The etebac x fer lignes comp.
     */
    public function setEtebacXFerLignesComp($etebacXFerLignesComp) {
        $this->etebacXFerLignesComp = $etebacXFerLignesComp;
        return $this;
    }

    /**
     * Set the famille.
     *
     * @param string $famille The famille.
     */
    public function setFamille($famille) {
        $this->famille = $famille;
        return $this;
    }

    /**
     * Set the gest num piece jrn.
     *
     * @param bool $gestNumPieceJrn The gest num piece jrn.
     */
    public function setGestNumPieceJrn($gestNumPieceJrn) {
        $this->gestNumPieceJrn = $gestNumPieceJrn;
        return $this;
    }

    /**
     * Set the gestion folio.
     *
     * @param bool $gestionFolio The gestion folio.
     */
    public function setGestionFolio($gestionFolio) {
        $this->gestionFolio = $gestionFolio;
        return $this;
    }

    /**
     * Set the gestion num piece.
     *
     * @param string $gestionNumPiece The gestion num piece.
     */
    public function setGestionNumPiece($gestionNumPiece) {
        $this->gestionNumPiece = $gestionNumPiece;
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
     * Set the iban id client.
     *
     * @param string $ibanIdClient The iban id client.
     */
    public function setIbanIdClient($ibanIdClient) {
        $this->ibanIdClient = $ibanIdClient;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string $libelle The libelle.
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the montant negatif.
     *
     * @param bool $montantNegatif The montant negatif.
     */
    public function setMontantNegatif($montantNegatif) {
        $this->montantNegatif = $montantNegatif;
        return $this;
    }

    /**
     * Set the niveau droit.
     *
     * @param string $niveauDroit The niveau droit.
     */
    public function setNiveauDroit($niveauDroit) {
        $this->niveauDroit = $niveauDroit;
        return $this;
    }

    /**
     * Set the num emetteur.
     *
     * @param string $numEmetteur The num emetteur.
     */
    public function setNumEmetteur($numEmetteur) {
        $this->numEmetteur = $numEmetteur;
        return $this;
    }

    /**
     * Set the prochain num piece.
     *
     * @param int $prochainNumPiece The prochain num piece.
     */
    public function setProchainNumPiece($prochainNumPiece) {
        $this->prochainNumPiece = $prochainNumPiece;
        return $this;
    }

    /**
     * Set the propo libelle.
     *
     * @param string $propoLibelle The propo libelle.
     */
    public function setPropoLibelle($propoLibelle) {
        $this->propoLibelle = $propoLibelle;
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
     * Set the saisie bordereau.
     *
     * @param bool $saisieBordereau The saisie bordereau.
     */
    public function setSaisieBordereau($saisieBordereau) {
        $this->saisieBordereau = $saisieBordereau;
        return $this;
    }

    /**
     * Set the type journal.
     *
     * @param string $typeJournal The type journal.
     */
    public function setTypeJournal($typeJournal) {
        $this->typeJournal = $typeJournal;
        return $this;
    }

    /**
     * Set the type piece global.
     *
     * @param bool $typePieceGlobal The type piece global.
     */
    public function setTypePieceGlobal($typePieceGlobal) {
        $this->typePieceGlobal = $typePieceGlobal;
        return $this;
    }
}
