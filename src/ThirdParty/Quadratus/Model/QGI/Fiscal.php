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

use DateTime;

/**
 * Fiscal.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class Fiscal {

    /**
     * Abattement cga.
     *
     * @var bool
     */
    private $abattementCga;

    /**
     * Assurance controle.
     *
     * @var bool
     */
    private $assuranceControle;

    /**
     * Cd assiette.
     *
     * @var string
     */
    private $cdAssiette;

    /**
     * Cdi.
     *
     * @var string
     */
    private $cdi;

    /**
     * Cga.
     *
     * @var bool
     */
    private $cga;

    /**
     * Code centre impot.
     *
     * @var string
     */
    private $codeCentreImpot;

    /**
     * Code cga.
     *
     * @var string
     */
    private $codeCga;

    /**
     * Code client.
     *
     * @var string
     */
    private $codeClient;

    /**
     * Code impot direct.
     *
     * @var string
     */
    private $codeImpotDirect;

    /**
     * Code recette impots.
     *
     * @var string
     */
    private $codeRecetteImpots;

    /**
     * Code regime tva.
     *
     * @var string
     */
    private $codeRegimeTva;

    /**
     * Contact centre impots.
     *
     * @var string
     */
    private $contactCentreImpots;

    /**
     * Contact cga.
     *
     * @var string
     */
    private $contactCga;

    /**
     * Contact recette impots.
     *
     * @var string
     */
    private $contactRecetteImpots;

    /**
     * Date adhesion cga.
     *
     * @var DateTime|null
     */
    private $dateAdhesionCga;

    /**
     * Date effet adhesion cga.
     *
     * @var DateTime|null
     */
    private $dateEffetAdhesionCga;

    /**
     * Date effet radiation cga.
     *
     * @var DateTime|null
     */
    private $dateEffetRadiationCga;

    /**
     * Date radiation cga.
     *
     * @var DateTime|null
     */
    private $dateRadiationCga;

    /**
     * Declaration sur.
     *
     * @var string
     */
    private $declarationSur;

    /**
     * Duree exercice.
     *
     * @var string
     */
    private $dureeExercice;

    /**
     * Edi tdfc bd f.
     *
     * @var bool
     */
    private $ediTdfcBdF;

    /**
     * Frp cle.
     *
     * @var string
     */
    private $frpCle;

    /**
     * Frp dossier.
     *
     * @var string
     */
    private $frpDossier;

    /**
     * Frp recette.
     *
     * @var string
     */
    private $frpRecette;

    /**
     * Id impots gouv fr.
     *
     * @var string
     */
    private $idImpotsGouvFr;

    /**
     * Impot.
     *
     * @var string
     */
    private $impot;

    /**
     * Insp.
     *
     * @var string
     */
    private $insp;

    /**
     * Jour declaration.
     *
     * @var string
     */
    private $jourDeclaration;

    /**
     * Mandat date debut dads.
     *
     * @var DateTime|null
     */
    private $mandatDateDebutDads;

    /**
     * Mandat date debut ducsedi.
     *
     * @var DateTime|null
     */
    private $mandatDateDebutDucsedi;

    /**
     * Mandat date debut editva.
     *
     * @var DateTime|null
     */
    private $mandatDateDebutEditva;

    /**
     * Mandat date debut etebac.
     *
     * @var DateTime|null
     */
    private $mandatDateDebutEtebac;

    /**
     * Mandat date debut pedi.
     *
     * @var DateTime|null
     */
    private $mandatDateDebutPedi;

    /**
     * Mandat date debut req.
     *
     * @var DateTime|null
     */
    private $mandatDateDebutReq;

    /**
     * Mandat date debut tdfc.
     *
     * @var DateTime|null
     */
    private $mandatDateDebutTdfc;

    /**
     * Mandat duree dads.
     *
     * @var int
     */
    private $mandatDureeDads;

    /**
     * Mandat duree ducsedi.
     *
     * @var int
     */
    private $mandatDureeDucsedi;

    /**
     * Mandat duree editva.
     *
     * @var int
     */
    private $mandatDureeEditva;

    /**
     * Mandat duree etebac.
     *
     * @var int
     */
    private $mandatDureeEtebac;

    /**
     * Mandat duree pedi.
     *
     * @var int
     */
    private $mandatDureePedi;

    /**
     * Mandat duree req.
     *
     * @var int
     */
    private $mandatDureeReq;

    /**
     * Mandat duree tdfc.
     *
     * @var int
     */
    private $mandatDureeTdfc;

    /**
     * Mandat piece jointe dads.
     *
     * @var string
     */
    private $mandatPieceJointeDads;

    /**
     * Mandat piece jointe ducsedi.
     *
     * @var string
     */
    private $mandatPieceJointeDucsedi;

    /**
     * Mandat piece jointe editva.
     *
     * @var string
     */
    private $mandatPieceJointeEditva;

    /**
     * Mandat piece jointe etebac.
     *
     * @var string
     */
    private $mandatPieceJointeEtebac;

    /**
     * Mandat piece jointe pedi.
     *
     * @var string
     */
    private $mandatPieceJointePedi;

    /**
     * Mandat piece jointe req.
     *
     * @var string
     */
    private $mandatPieceJointeReq;

    /**
     * Mandat piece jointe tdfc.
     *
     * @var string
     */
    private $mandatPieceJointeTdfc;

    /**
     * Mandat suivi dads.
     *
     * @var bool
     */
    private $mandatSuiviDads;

    /**
     * Mandat suivi ducsedi.
     *
     * @var bool
     */
    private $mandatSuiviDucsedi;

    /**
     * Mandat suivi editva.
     *
     * @var bool
     */
    private $mandatSuiviEditva;

    /**
     * Mandat suivi etebac.
     *
     * @var bool
     */
    private $mandatSuiviEtebac;

    /**
     * Mandat suivi pedi.
     *
     * @var bool
     */
    private $mandatSuiviPedi;

    /**
     * Mandat suivi req.
     *
     * @var bool
     */
    private $mandatSuiviReq;

    /**
     * Mandat suivi tdfc.
     *
     * @var bool
     */
    private $mandatSuiviTdfc;

    /**
     * Mdp impots gouv fr.
     *
     * @var string
     */
    private $mdpImpotsGouvFr;

    /**
     * Methode calcul.
     *
     * @var string
     */
    private $methodeCalcul;

    /**
     * Motif radiation cga.
     *
     * @var string
     */
    private $motifRadiationCga;

    /**
     * Numero registre.
     *
     * @var string
     */
    private $numeroRegistre;

    /**
     * Periodicite tva.
     *
     * @var string
     */
    private $periodiciteTva;

    /**
     * Pme communautaire.
     *
     * @var bool
     */
    private $pmeCommunautaire;

    /**
     * Pole enregistrement.
     *
     * @var string
     */
    private $poleEnregistrement;

    /**
     * Ref oblig fisc.
     *
     * @var string
     */
    private $refObligFisc;

    /**
     * Ref paiement dgi.
     *
     * @var string
     */
    private $refPaiementDgi;

    /**
     * Regime.
     *
     * @var string
     */
    private $regime;

    /**
     * Regime agricole.
     *
     * @var bool
     */
    private $regimeAgricole;

    /**
     * Regime groupe.
     *
     * @var bool
     */
    private $regimeGroupe;

    /**
     * Rof cfe.
     *
     * @var string
     */
    private $rofCfe;

    /**
     * Rof cvae.
     *
     * @var string
     */
    private $rofCvae;

    /**
     * Rof cvaep.
     *
     * @var string
     */
    private $rofCvaep;

    /**
     * Rof is.
     *
     * @var string
     */
    private $rofIs;

    /**
     * Rof rcm.
     *
     * @var string
     */
    private $rofRcm;

    /**
     * Rof tdfc group.
     *
     * @var string
     */
    private $rofTdfcGroup;

    /**
     * Rof ts.
     *
     * @var string
     */
    private $rofTs;

    /**
     * Rof tva.
     *
     * @var string
     */
    private $rofTva;

    /**
     * Societe mere.
     *
     * @var bool
     */
    private $societeMere;

    /**
     * Tresorerie.
     *
     * @var string
     */
    private $tresorerie;

    /**
     * Tresorerie is.
     *
     * @var string
     */
    private $tresorerieIs;

    /**
     * Tva ca12 ae.
     *
     * @var string
     */
    private $tvaCa12Ae;

    /**
     * Tva decaissements.
     *
     * @var bool
     */
    private $tvaDecaissements;

    /**
     * Tva etab btq.
     *
     * @var string
     */
    private $tvaEtabBtq;

    /**
     * Tva etab bureau distributeur.
     *
     * @var string
     */
    private $tvaEtabBureauDistributeur;

    /**
     * Tva etab code postal.
     *
     * @var string
     */
    private $tvaEtabCodePostal;

    /**
     * Tva etab complement.
     *
     * @var string
     */
    private $tvaEtabComplement;

    /**
     * Tva etab nom rs.
     *
     * @var string
     */
    private $tvaEtabNomRs;

    /**
     * Tva etab nom voie.
     *
     * @var string
     */
    private $tvaEtabNomVoie;

    /**
     * Tva etab num voie.
     *
     * @var string
     */
    private $tvaEtabNumVoie;

    /**
     * Tva faite par client.
     *
     * @var bool
     */
    private $tvaFaiteParClient;

    /**
     * Tva nom vir.
     *
     * @var string
     */
    private $tvaNomVir;

    /**
     * Tvarib vir.
     *
     * @var string
     */
    private $tvaribVir;

    /**
     * Viseur conventionne.
     *
     * @var bool
     */
    private $viseurConventionne;

    /**
     * Viseur dt attest.
     *
     * @var DateTime|null
     */
    private $viseurDtAttest;

    /**
     * Viseur num attest.
     *
     * @var string
     */
    private $viseurNumAttest;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the abattement cga.
     *
     * @return bool Returns the abattement cga.
     */
    public function getAbattementCga() {
        return $this->abattementCga;
    }

    /**
     * Get the assurance controle.
     *
     * @return bool Returns the assurance controle.
     */
    public function getAssuranceControle() {
        return $this->assuranceControle;
    }

    /**
     * Get the cd assiette.
     *
     * @return string Returns the cd assiette.
     */
    public function getCdAssiette() {
        return $this->cdAssiette;
    }

    /**
     * Get the cdi.
     *
     * @return string Returns the cdi.
     */
    public function getCdi() {
        return $this->cdi;
    }

    /**
     * Get the cga.
     *
     * @return bool Returns the cga.
     */
    public function getCga() {
        return $this->cga;
    }

    /**
     * Get the code centre impot.
     *
     * @return string Returns the code centre impot.
     */
    public function getCodeCentreImpot() {
        return $this->codeCentreImpot;
    }

    /**
     * Get the code cga.
     *
     * @return string Returns the code cga.
     */
    public function getCodeCga() {
        return $this->codeCga;
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
     * Get the code impot direct.
     *
     * @return string Returns the code impot direct.
     */
    public function getCodeImpotDirect() {
        return $this->codeImpotDirect;
    }

    /**
     * Get the code recette impots.
     *
     * @return string Returns the code recette impots.
     */
    public function getCodeRecetteImpots() {
        return $this->codeRecetteImpots;
    }

    /**
     * Get the code regime tva.
     *
     * @return string Returns the code regime tva.
     */
    public function getCodeRegimeTva() {
        return $this->codeRegimeTva;
    }

    /**
     * Get the contact centre impots.
     *
     * @return string Returns the contact centre impots.
     */
    public function getContactCentreImpots() {
        return $this->contactCentreImpots;
    }

    /**
     * Get the contact cga.
     *
     * @return string Returns the contact cga.
     */
    public function getContactCga() {
        return $this->contactCga;
    }

    /**
     * Get the contact recette impots.
     *
     * @return string Returns the contact recette impots.
     */
    public function getContactRecetteImpots() {
        return $this->contactRecetteImpots;
    }

    /**
     * Get the date adhesion cga.
     *
     * @return DateTime|null Returns the date adhesion cga.
     */
    public function getDateAdhesionCga() {
        return $this->dateAdhesionCga;
    }

    /**
     * Get the date effet adhesion cga.
     *
     * @return DateTime|null Returns the date effet adhesion cga.
     */
    public function getDateEffetAdhesionCga() {
        return $this->dateEffetAdhesionCga;
    }

    /**
     * Get the date effet radiation cga.
     *
     * @return DateTime|null Returns the date effet radiation cga.
     */
    public function getDateEffetRadiationCga() {
        return $this->dateEffetRadiationCga;
    }

    /**
     * Get the date radiation cga.
     *
     * @return DateTime|null Returns the date radiation cga.
     */
    public function getDateRadiationCga() {
        return $this->dateRadiationCga;
    }

    /**
     * Get the declaration sur.
     *
     * @return string Returns the declaration sur.
     */
    public function getDeclarationSur() {
        return $this->declarationSur;
    }

    /**
     * Get the duree exercice.
     *
     * @return string Returns the duree exercice.
     */
    public function getDureeExercice() {
        return $this->dureeExercice;
    }

    /**
     * Get the edi tdfc bd f.
     *
     * @return bool Returns the edi tdfc bd f.
     */
    public function getEdiTdfcBdF() {
        return $this->ediTdfcBdF;
    }

    /**
     * Get the frp cle.
     *
     * @return string Returns the frp cle.
     */
    public function getFrpCle() {
        return $this->frpCle;
    }

    /**
     * Get the frp dossier.
     *
     * @return string Returns the frp dossier.
     */
    public function getFrpDossier() {
        return $this->frpDossier;
    }

    /**
     * Get the frp recette.
     *
     * @return string Returns the frp recette.
     */
    public function getFrpRecette() {
        return $this->frpRecette;
    }

    /**
     * Get the id impots gouv fr.
     *
     * @return string Returns the id impots gouv fr.
     */
    public function getIdImpotsGouvFr() {
        return $this->idImpotsGouvFr;
    }

    /**
     * Get the impot.
     *
     * @return string Returns the impot.
     */
    public function getImpot() {
        return $this->impot;
    }

    /**
     * Get the insp.
     *
     * @return string Returns the insp.
     */
    public function getInsp() {
        return $this->insp;
    }

    /**
     * Get the jour declaration.
     *
     * @return string Returns the jour declaration.
     */
    public function getJourDeclaration() {
        return $this->jourDeclaration;
    }

    /**
     * Get the mandat date debut dads.
     *
     * @return DateTime|null Returns the mandat date debut dads.
     */
    public function getMandatDateDebutDads() {
        return $this->mandatDateDebutDads;
    }

    /**
     * Get the mandat date debut ducsedi.
     *
     * @return DateTime|null Returns the mandat date debut ducsedi.
     */
    public function getMandatDateDebutDucsedi() {
        return $this->mandatDateDebutDucsedi;
    }

    /**
     * Get the mandat date debut editva.
     *
     * @return DateTime|null Returns the mandat date debut editva.
     */
    public function getMandatDateDebutEditva() {
        return $this->mandatDateDebutEditva;
    }

    /**
     * Get the mandat date debut etebac.
     *
     * @return DateTime|null Returns the mandat date debut etebac.
     */
    public function getMandatDateDebutEtebac() {
        return $this->mandatDateDebutEtebac;
    }

    /**
     * Get the mandat date debut pedi.
     *
     * @return DateTime|null Returns the mandat date debut pedi.
     */
    public function getMandatDateDebutPedi() {
        return $this->mandatDateDebutPedi;
    }

    /**
     * Get the mandat date debut req.
     *
     * @return DateTime|null Returns the mandat date debut req.
     */
    public function getMandatDateDebutReq() {
        return $this->mandatDateDebutReq;
    }

    /**
     * Get the mandat date debut tdfc.
     *
     * @return DateTime|null Returns the mandat date debut tdfc.
     */
    public function getMandatDateDebutTdfc() {
        return $this->mandatDateDebutTdfc;
    }

    /**
     * Get the mandat duree dads.
     *
     * @return int Returns the mandat duree dads.
     */
    public function getMandatDureeDads() {
        return $this->mandatDureeDads;
    }

    /**
     * Get the mandat duree ducsedi.
     *
     * @return int Returns the mandat duree ducsedi.
     */
    public function getMandatDureeDucsedi() {
        return $this->mandatDureeDucsedi;
    }

    /**
     * Get the mandat duree editva.
     *
     * @return int Returns the mandat duree editva.
     */
    public function getMandatDureeEditva() {
        return $this->mandatDureeEditva;
    }

    /**
     * Get the mandat duree etebac.
     *
     * @return int Returns the mandat duree etebac.
     */
    public function getMandatDureeEtebac() {
        return $this->mandatDureeEtebac;
    }

    /**
     * Get the mandat duree pedi.
     *
     * @return int Returns the mandat duree pedi.
     */
    public function getMandatDureePedi() {
        return $this->mandatDureePedi;
    }

    /**
     * Get the mandat duree req.
     *
     * @return int Returns the mandat duree req.
     */
    public function getMandatDureeReq() {
        return $this->mandatDureeReq;
    }

    /**
     * Get the mandat duree tdfc.
     *
     * @return int Returns the mandat duree tdfc.
     */
    public function getMandatDureeTdfc() {
        return $this->mandatDureeTdfc;
    }

    /**
     * Get the mandat piece jointe dads.
     *
     * @return string Returns the mandat piece jointe dads.
     */
    public function getMandatPieceJointeDads() {
        return $this->mandatPieceJointeDads;
    }

    /**
     * Get the mandat piece jointe ducsedi.
     *
     * @return string Returns the mandat piece jointe ducsedi.
     */
    public function getMandatPieceJointeDucsedi() {
        return $this->mandatPieceJointeDucsedi;
    }

    /**
     * Get the mandat piece jointe editva.
     *
     * @return string Returns the mandat piece jointe editva.
     */
    public function getMandatPieceJointeEditva() {
        return $this->mandatPieceJointeEditva;
    }

    /**
     * Get the mandat piece jointe etebac.
     *
     * @return string Returns the mandat piece jointe etebac.
     */
    public function getMandatPieceJointeEtebac() {
        return $this->mandatPieceJointeEtebac;
    }

    /**
     * Get the mandat piece jointe pedi.
     *
     * @return string Returns the mandat piece jointe pedi.
     */
    public function getMandatPieceJointePedi() {
        return $this->mandatPieceJointePedi;
    }

    /**
     * Get the mandat piece jointe req.
     *
     * @return string Returns the mandat piece jointe req.
     */
    public function getMandatPieceJointeReq() {
        return $this->mandatPieceJointeReq;
    }

    /**
     * Get the mandat piece jointe tdfc.
     *
     * @return string Returns the mandat piece jointe tdfc.
     */
    public function getMandatPieceJointeTdfc() {
        return $this->mandatPieceJointeTdfc;
    }

    /**
     * Get the mandat suivi dads.
     *
     * @return bool Returns the mandat suivi dads.
     */
    public function getMandatSuiviDads() {
        return $this->mandatSuiviDads;
    }

    /**
     * Get the mandat suivi ducsedi.
     *
     * @return bool Returns the mandat suivi ducsedi.
     */
    public function getMandatSuiviDucsedi() {
        return $this->mandatSuiviDucsedi;
    }

    /**
     * Get the mandat suivi editva.
     *
     * @return bool Returns the mandat suivi editva.
     */
    public function getMandatSuiviEditva() {
        return $this->mandatSuiviEditva;
    }

    /**
     * Get the mandat suivi etebac.
     *
     * @return bool Returns the mandat suivi etebac.
     */
    public function getMandatSuiviEtebac() {
        return $this->mandatSuiviEtebac;
    }

    /**
     * Get the mandat suivi pedi.
     *
     * @return bool Returns the mandat suivi pedi.
     */
    public function getMandatSuiviPedi() {
        return $this->mandatSuiviPedi;
    }

    /**
     * Get the mandat suivi req.
     *
     * @return bool Returns the mandat suivi req.
     */
    public function getMandatSuiviReq() {
        return $this->mandatSuiviReq;
    }

    /**
     * Get the mandat suivi tdfc.
     *
     * @return bool Returns the mandat suivi tdfc.
     */
    public function getMandatSuiviTdfc() {
        return $this->mandatSuiviTdfc;
    }

    /**
     * Get the mdp impots gouv fr.
     *
     * @return string Returns the mdp impots gouv fr.
     */
    public function getMdpImpotsGouvFr() {
        return $this->mdpImpotsGouvFr;
    }

    /**
     * Get the methode calcul.
     *
     * @return string Returns the methode calcul.
     */
    public function getMethodeCalcul() {
        return $this->methodeCalcul;
    }

    /**
     * Get the motif radiation cga.
     *
     * @return string Returns the motif radiation cga.
     */
    public function getMotifRadiationCga() {
        return $this->motifRadiationCga;
    }

    /**
     * Get the numero registre.
     *
     * @return string Returns the numero registre.
     */
    public function getNumeroRegistre() {
        return $this->numeroRegistre;
    }

    /**
     * Get the periodicite tva.
     *
     * @return string Returns the periodicite tva.
     */
    public function getPeriodiciteTva() {
        return $this->periodiciteTva;
    }

    /**
     * Get the pme communautaire.
     *
     * @return bool Returns the pme communautaire.
     */
    public function getPmeCommunautaire() {
        return $this->pmeCommunautaire;
    }

    /**
     * Get the pole enregistrement.
     *
     * @return string Returns the pole enregistrement.
     */
    public function getPoleEnregistrement() {
        return $this->poleEnregistrement;
    }

    /**
     * Get the ref oblig fisc.
     *
     * @return string Returns the ref oblig fisc.
     */
    public function getRefObligFisc() {
        return $this->refObligFisc;
    }

    /**
     * Get the ref paiement dgi.
     *
     * @return string Returns the ref paiement dgi.
     */
    public function getRefPaiementDgi() {
        return $this->refPaiementDgi;
    }

    /**
     * Get the regime.
     *
     * @return string Returns the regime.
     */
    public function getRegime() {
        return $this->regime;
    }

    /**
     * Get the regime agricole.
     *
     * @return bool Returns the regime agricole.
     */
    public function getRegimeAgricole() {
        return $this->regimeAgricole;
    }

    /**
     * Get the regime groupe.
     *
     * @return bool Returns the regime groupe.
     */
    public function getRegimeGroupe() {
        return $this->regimeGroupe;
    }

    /**
     * Get the rof cfe.
     *
     * @return string Returns the rof cfe.
     */
    public function getRofCfe() {
        return $this->rofCfe;
    }

    /**
     * Get the rof cvae.
     *
     * @return string Returns the rof cvae.
     */
    public function getRofCvae() {
        return $this->rofCvae;
    }

    /**
     * Get the rof cvaep.
     *
     * @return string Returns the rof cvaep.
     */
    public function getRofCvaep() {
        return $this->rofCvaep;
    }

    /**
     * Get the rof is.
     *
     * @return string Returns the rof is.
     */
    public function getRofIs() {
        return $this->rofIs;
    }

    /**
     * Get the rof rcm.
     *
     * @return string Returns the rof rcm.
     */
    public function getRofRcm() {
        return $this->rofRcm;
    }

    /**
     * Get the rof tdfc group.
     *
     * @return string Returns the rof tdfc group.
     */
    public function getRofTdfcGroup() {
        return $this->rofTdfcGroup;
    }

    /**
     * Get the rof ts.
     *
     * @return string Returns the rof ts.
     */
    public function getRofTs() {
        return $this->rofTs;
    }

    /**
     * Get the rof tva.
     *
     * @return string Returns the rof tva.
     */
    public function getRofTva() {
        return $this->rofTva;
    }

    /**
     * Get the societe mere.
     *
     * @return bool Returns the societe mere.
     */
    public function getSocieteMere() {
        return $this->societeMere;
    }

    /**
     * Get the tresorerie.
     *
     * @return string Returns the tresorerie.
     */
    public function getTresorerie() {
        return $this->tresorerie;
    }

    /**
     * Get the tresorerie is.
     *
     * @return string Returns the tresorerie is.
     */
    public function getTresorerieIs() {
        return $this->tresorerieIs;
    }

    /**
     * Get the tva ca12 ae.
     *
     * @return string Returns the tva ca12 ae.
     */
    public function getTvaCa12Ae() {
        return $this->tvaCa12Ae;
    }

    /**
     * Get the tva decaissements.
     *
     * @return bool Returns the tva decaissements.
     */
    public function getTvaDecaissements() {
        return $this->tvaDecaissements;
    }

    /**
     * Get the tva etab btq.
     *
     * @return string Returns the tva etab btq.
     */
    public function getTvaEtabBtq() {
        return $this->tvaEtabBtq;
    }

    /**
     * Get the tva etab bureau distributeur.
     *
     * @return string Returns the tva etab bureau distributeur.
     */
    public function getTvaEtabBureauDistributeur() {
        return $this->tvaEtabBureauDistributeur;
    }

    /**
     * Get the tva etab code postal.
     *
     * @return string Returns the tva etab code postal.
     */
    public function getTvaEtabCodePostal() {
        return $this->tvaEtabCodePostal;
    }

    /**
     * Get the tva etab complement.
     *
     * @return string Returns the tva etab complement.
     */
    public function getTvaEtabComplement() {
        return $this->tvaEtabComplement;
    }

    /**
     * Get the tva etab nom rs.
     *
     * @return string Returns the tva etab nom rs.
     */
    public function getTvaEtabNomRs() {
        return $this->tvaEtabNomRs;
    }

    /**
     * Get the tva etab nom voie.
     *
     * @return string Returns the tva etab nom voie.
     */
    public function getTvaEtabNomVoie() {
        return $this->tvaEtabNomVoie;
    }

    /**
     * Get the tva etab num voie.
     *
     * @return string Returns the tva etab num voie.
     */
    public function getTvaEtabNumVoie() {
        return $this->tvaEtabNumVoie;
    }

    /**
     * Get the tva faite par client.
     *
     * @return bool Returns the tva faite par client.
     */
    public function getTvaFaiteParClient() {
        return $this->tvaFaiteParClient;
    }

    /**
     * Get the tva nom vir.
     *
     * @return string Returns the tva nom vir.
     */
    public function getTvaNomVir() {
        return $this->tvaNomVir;
    }

    /**
     * Get the tvarib vir.
     *
     * @return string Returns the tvarib vir.
     */
    public function getTvaribVir() {
        return $this->tvaribVir;
    }

    /**
     * Get the viseur conventionne.
     *
     * @return bool Returns the viseur conventionne.
     */
    public function getViseurConventionne() {
        return $this->viseurConventionne;
    }

    /**
     * Get the viseur dt attest.
     *
     * @return DateTime|null Returns the viseur dt attest.
     */
    public function getViseurDtAttest() {
        return $this->viseurDtAttest;
    }

    /**
     * Get the viseur num attest.
     *
     * @return string Returns the viseur num attest.
     */
    public function getViseurNumAttest() {
        return $this->viseurNumAttest;
    }

    /**
     * Set the abattement cga.
     *
     * @param bool $abattementCga The abattement cga.
     */
    public function setAbattementCga($abattementCga) {
        $this->abattementCga = $abattementCga;
        return $this;
    }

    /**
     * Set the assurance controle.
     *
     * @param bool $assuranceControle The assurance controle.
     */
    public function setAssuranceControle($assuranceControle) {
        $this->assuranceControle = $assuranceControle;
        return $this;
    }

    /**
     * Set the cd assiette.
     *
     * @param string $cdAssiette The cd assiette.
     */
    public function setCdAssiette($cdAssiette) {
        $this->cdAssiette = $cdAssiette;
        return $this;
    }

    /**
     * Set the cdi.
     *
     * @param string $cdi The cdi.
     */
    public function setCdi($cdi) {
        $this->cdi = $cdi;
        return $this;
    }

    /**
     * Set the cga.
     *
     * @param bool $cga The cga.
     */
    public function setCga($cga) {
        $this->cga = $cga;
        return $this;
    }

    /**
     * Set the code centre impot.
     *
     * @param string $codeCentreImpot The code centre impot.
     */
    public function setCodeCentreImpot($codeCentreImpot) {
        $this->codeCentreImpot = $codeCentreImpot;
        return $this;
    }

    /**
     * Set the code cga.
     *
     * @param string $codeCga The code cga.
     */
    public function setCodeCga($codeCga) {
        $this->codeCga = $codeCga;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code impot direct.
     *
     * @param string $codeImpotDirect The code impot direct.
     */
    public function setCodeImpotDirect($codeImpotDirect) {
        $this->codeImpotDirect = $codeImpotDirect;
        return $this;
    }

    /**
     * Set the code recette impots.
     *
     * @param string $codeRecetteImpots The code recette impots.
     */
    public function setCodeRecetteImpots($codeRecetteImpots) {
        $this->codeRecetteImpots = $codeRecetteImpots;
        return $this;
    }

    /**
     * Set the code regime tva.
     *
     * @param string $codeRegimeTva The code regime tva.
     */
    public function setCodeRegimeTva($codeRegimeTva) {
        $this->codeRegimeTva = $codeRegimeTva;
        return $this;
    }

    /**
     * Set the contact centre impots.
     *
     * @param string $contactCentreImpots The contact centre impots.
     */
    public function setContactCentreImpots($contactCentreImpots) {
        $this->contactCentreImpots = $contactCentreImpots;
        return $this;
    }

    /**
     * Set the contact cga.
     *
     * @param string $contactCga The contact cga.
     */
    public function setContactCga($contactCga) {
        $this->contactCga = $contactCga;
        return $this;
    }

    /**
     * Set the contact recette impots.
     *
     * @param string $contactRecetteImpots The contact recette impots.
     */
    public function setContactRecetteImpots($contactRecetteImpots) {
        $this->contactRecetteImpots = $contactRecetteImpots;
        return $this;
    }

    /**
     * Set the date adhesion cga.
     *
     * @param DateTime|null $dateAdhesionCga The date adhesion cga.
     */
    public function setDateAdhesionCga(DateTime $dateAdhesionCga = null) {
        $this->dateAdhesionCga = $dateAdhesionCga;
        return $this;
    }

    /**
     * Set the date effet adhesion cga.
     *
     * @param DateTime|null $dateEffetAdhesionCga The date effet adhesion cga.
     */
    public function setDateEffetAdhesionCga(DateTime $dateEffetAdhesionCga = null) {
        $this->dateEffetAdhesionCga = $dateEffetAdhesionCga;
        return $this;
    }

    /**
     * Set the date effet radiation cga.
     *
     * @param DateTime|null $dateEffetRadiationCga The date effet radiation cga.
     */
    public function setDateEffetRadiationCga(DateTime $dateEffetRadiationCga = null) {
        $this->dateEffetRadiationCga = $dateEffetRadiationCga;
        return $this;
    }

    /**
     * Set the date radiation cga.
     *
     * @param DateTime|null $dateRadiationCga The date radiation cga.
     */
    public function setDateRadiationCga(DateTime $dateRadiationCga = null) {
        $this->dateRadiationCga = $dateRadiationCga;
        return $this;
    }

    /**
     * Set the declaration sur.
     *
     * @param string $declarationSur The declaration sur.
     */
    public function setDeclarationSur($declarationSur) {
        $this->declarationSur = $declarationSur;
        return $this;
    }

    /**
     * Set the duree exercice.
     *
     * @param string $dureeExercice The duree exercice.
     */
    public function setDureeExercice($dureeExercice) {
        $this->dureeExercice = $dureeExercice;
        return $this;
    }

    /**
     * Set the edi tdfc bd f.
     *
     * @param bool $ediTdfcBdF The edi tdfc bd f.
     */
    public function setEdiTdfcBdF($ediTdfcBdF) {
        $this->ediTdfcBdF = $ediTdfcBdF;
        return $this;
    }

    /**
     * Set the frp cle.
     *
     * @param string $frpCle The frp cle.
     */
    public function setFrpCle($frpCle) {
        $this->frpCle = $frpCle;
        return $this;
    }

    /**
     * Set the frp dossier.
     *
     * @param string $frpDossier The frp dossier.
     */
    public function setFrpDossier($frpDossier) {
        $this->frpDossier = $frpDossier;
        return $this;
    }

    /**
     * Set the frp recette.
     *
     * @param string $frpRecette The frp recette.
     */
    public function setFrpRecette($frpRecette) {
        $this->frpRecette = $frpRecette;
        return $this;
    }

    /**
     * Set the id impots gouv fr.
     *
     * @param string $idImpotsGouvFr The id impots gouv fr.
     */
    public function setIdImpotsGouvFr($idImpotsGouvFr) {
        $this->idImpotsGouvFr = $idImpotsGouvFr;
        return $this;
    }

    /**
     * Set the impot.
     *
     * @param string $impot The impot.
     */
    public function setImpot($impot) {
        $this->impot = $impot;
        return $this;
    }

    /**
     * Set the insp.
     *
     * @param string $insp The insp.
     */
    public function setInsp($insp) {
        $this->insp = $insp;
        return $this;
    }

    /**
     * Set the jour declaration.
     *
     * @param string $jourDeclaration The jour declaration.
     */
    public function setJourDeclaration($jourDeclaration) {
        $this->jourDeclaration = $jourDeclaration;
        return $this;
    }

    /**
     * Set the mandat date debut dads.
     *
     * @param DateTime|null $mandatDateDebutDads The mandat date debut dads.
     */
    public function setMandatDateDebutDads(DateTime $mandatDateDebutDads = null) {
        $this->mandatDateDebutDads = $mandatDateDebutDads;
        return $this;
    }

    /**
     * Set the mandat date debut ducsedi.
     *
     * @param DateTime|null $mandatDateDebutDucsedi The mandat date debut ducsedi.
     */
    public function setMandatDateDebutDucsedi(DateTime $mandatDateDebutDucsedi = null) {
        $this->mandatDateDebutDucsedi = $mandatDateDebutDucsedi;
        return $this;
    }

    /**
     * Set the mandat date debut editva.
     *
     * @param DateTime|null $mandatDateDebutEditva The mandat date debut editva.
     */
    public function setMandatDateDebutEditva(DateTime $mandatDateDebutEditva = null) {
        $this->mandatDateDebutEditva = $mandatDateDebutEditva;
        return $this;
    }

    /**
     * Set the mandat date debut etebac.
     *
     * @param DateTime|null $mandatDateDebutEtebac The mandat date debut etebac.
     */
    public function setMandatDateDebutEtebac(DateTime $mandatDateDebutEtebac = null) {
        $this->mandatDateDebutEtebac = $mandatDateDebutEtebac;
        return $this;
    }

    /**
     * Set the mandat date debut pedi.
     *
     * @param DateTime|null $mandatDateDebutPedi The mandat date debut pedi.
     */
    public function setMandatDateDebutPedi(DateTime $mandatDateDebutPedi = null) {
        $this->mandatDateDebutPedi = $mandatDateDebutPedi;
        return $this;
    }

    /**
     * Set the mandat date debut req.
     *
     * @param DateTime|null $mandatDateDebutReq The mandat date debut req.
     */
    public function setMandatDateDebutReq(DateTime $mandatDateDebutReq = null) {
        $this->mandatDateDebutReq = $mandatDateDebutReq;
        return $this;
    }

    /**
     * Set the mandat date debut tdfc.
     *
     * @param DateTime|null $mandatDateDebutTdfc The mandat date debut tdfc.
     */
    public function setMandatDateDebutTdfc(DateTime $mandatDateDebutTdfc = null) {
        $this->mandatDateDebutTdfc = $mandatDateDebutTdfc;
        return $this;
    }

    /**
     * Set the mandat duree dads.
     *
     * @param int $mandatDureeDads The mandat duree dads.
     */
    public function setMandatDureeDads($mandatDureeDads) {
        $this->mandatDureeDads = $mandatDureeDads;
        return $this;
    }

    /**
     * Set the mandat duree ducsedi.
     *
     * @param int $mandatDureeDucsedi The mandat duree ducsedi.
     */
    public function setMandatDureeDucsedi($mandatDureeDucsedi) {
        $this->mandatDureeDucsedi = $mandatDureeDucsedi;
        return $this;
    }

    /**
     * Set the mandat duree editva.
     *
     * @param int $mandatDureeEditva The mandat duree editva.
     */
    public function setMandatDureeEditva($mandatDureeEditva) {
        $this->mandatDureeEditva = $mandatDureeEditva;
        return $this;
    }

    /**
     * Set the mandat duree etebac.
     *
     * @param int $mandatDureeEtebac The mandat duree etebac.
     */
    public function setMandatDureeEtebac($mandatDureeEtebac) {
        $this->mandatDureeEtebac = $mandatDureeEtebac;
        return $this;
    }

    /**
     * Set the mandat duree pedi.
     *
     * @param int $mandatDureePedi The mandat duree pedi.
     */
    public function setMandatDureePedi($mandatDureePedi) {
        $this->mandatDureePedi = $mandatDureePedi;
        return $this;
    }

    /**
     * Set the mandat duree req.
     *
     * @param int $mandatDureeReq The mandat duree req.
     */
    public function setMandatDureeReq($mandatDureeReq) {
        $this->mandatDureeReq = $mandatDureeReq;
        return $this;
    }

    /**
     * Set the mandat duree tdfc.
     *
     * @param int $mandatDureeTdfc The mandat duree tdfc.
     */
    public function setMandatDureeTdfc($mandatDureeTdfc) {
        $this->mandatDureeTdfc = $mandatDureeTdfc;
        return $this;
    }

    /**
     * Set the mandat piece jointe dads.
     *
     * @param string $mandatPieceJointeDads The mandat piece jointe dads.
     */
    public function setMandatPieceJointeDads($mandatPieceJointeDads) {
        $this->mandatPieceJointeDads = $mandatPieceJointeDads;
        return $this;
    }

    /**
     * Set the mandat piece jointe ducsedi.
     *
     * @param string $mandatPieceJointeDucsedi The mandat piece jointe ducsedi.
     */
    public function setMandatPieceJointeDucsedi($mandatPieceJointeDucsedi) {
        $this->mandatPieceJointeDucsedi = $mandatPieceJointeDucsedi;
        return $this;
    }

    /**
     * Set the mandat piece jointe editva.
     *
     * @param string $mandatPieceJointeEditva The mandat piece jointe editva.
     */
    public function setMandatPieceJointeEditva($mandatPieceJointeEditva) {
        $this->mandatPieceJointeEditva = $mandatPieceJointeEditva;
        return $this;
    }

    /**
     * Set the mandat piece jointe etebac.
     *
     * @param string $mandatPieceJointeEtebac The mandat piece jointe etebac.
     */
    public function setMandatPieceJointeEtebac($mandatPieceJointeEtebac) {
        $this->mandatPieceJointeEtebac = $mandatPieceJointeEtebac;
        return $this;
    }

    /**
     * Set the mandat piece jointe pedi.
     *
     * @param string $mandatPieceJointePedi The mandat piece jointe pedi.
     */
    public function setMandatPieceJointePedi($mandatPieceJointePedi) {
        $this->mandatPieceJointePedi = $mandatPieceJointePedi;
        return $this;
    }

    /**
     * Set the mandat piece jointe req.
     *
     * @param string $mandatPieceJointeReq The mandat piece jointe req.
     */
    public function setMandatPieceJointeReq($mandatPieceJointeReq) {
        $this->mandatPieceJointeReq = $mandatPieceJointeReq;
        return $this;
    }

    /**
     * Set the mandat piece jointe tdfc.
     *
     * @param string $mandatPieceJointeTdfc The mandat piece jointe tdfc.
     */
    public function setMandatPieceJointeTdfc($mandatPieceJointeTdfc) {
        $this->mandatPieceJointeTdfc = $mandatPieceJointeTdfc;
        return $this;
    }

    /**
     * Set the mandat suivi dads.
     *
     * @param bool $mandatSuiviDads The mandat suivi dads.
     */
    public function setMandatSuiviDads($mandatSuiviDads) {
        $this->mandatSuiviDads = $mandatSuiviDads;
        return $this;
    }

    /**
     * Set the mandat suivi ducsedi.
     *
     * @param bool $mandatSuiviDucsedi The mandat suivi ducsedi.
     */
    public function setMandatSuiviDucsedi($mandatSuiviDucsedi) {
        $this->mandatSuiviDucsedi = $mandatSuiviDucsedi;
        return $this;
    }

    /**
     * Set the mandat suivi editva.
     *
     * @param bool $mandatSuiviEditva The mandat suivi editva.
     */
    public function setMandatSuiviEditva($mandatSuiviEditva) {
        $this->mandatSuiviEditva = $mandatSuiviEditva;
        return $this;
    }

    /**
     * Set the mandat suivi etebac.
     *
     * @param bool $mandatSuiviEtebac The mandat suivi etebac.
     */
    public function setMandatSuiviEtebac($mandatSuiviEtebac) {
        $this->mandatSuiviEtebac = $mandatSuiviEtebac;
        return $this;
    }

    /**
     * Set the mandat suivi pedi.
     *
     * @param bool $mandatSuiviPedi The mandat suivi pedi.
     */
    public function setMandatSuiviPedi($mandatSuiviPedi) {
        $this->mandatSuiviPedi = $mandatSuiviPedi;
        return $this;
    }

    /**
     * Set the mandat suivi req.
     *
     * @param bool $mandatSuiviReq The mandat suivi req.
     */
    public function setMandatSuiviReq($mandatSuiviReq) {
        $this->mandatSuiviReq = $mandatSuiviReq;
        return $this;
    }

    /**
     * Set the mandat suivi tdfc.
     *
     * @param bool $mandatSuiviTdfc The mandat suivi tdfc.
     */
    public function setMandatSuiviTdfc($mandatSuiviTdfc) {
        $this->mandatSuiviTdfc = $mandatSuiviTdfc;
        return $this;
    }

    /**
     * Set the mdp impots gouv fr.
     *
     * @param string $mdpImpotsGouvFr The mdp impots gouv fr.
     */
    public function setMdpImpotsGouvFr($mdpImpotsGouvFr) {
        $this->mdpImpotsGouvFr = $mdpImpotsGouvFr;
        return $this;
    }

    /**
     * Set the methode calcul.
     *
     * @param string $methodeCalcul The methode calcul.
     */
    public function setMethodeCalcul($methodeCalcul) {
        $this->methodeCalcul = $methodeCalcul;
        return $this;
    }

    /**
     * Set the motif radiation cga.
     *
     * @param string $motifRadiationCga The motif radiation cga.
     */
    public function setMotifRadiationCga($motifRadiationCga) {
        $this->motifRadiationCga = $motifRadiationCga;
        return $this;
    }

    /**
     * Set the numero registre.
     *
     * @param string $numeroRegistre The numero registre.
     */
    public function setNumeroRegistre($numeroRegistre) {
        $this->numeroRegistre = $numeroRegistre;
        return $this;
    }

    /**
     * Set the periodicite tva.
     *
     * @param string $periodiciteTva The periodicite tva.
     */
    public function setPeriodiciteTva($periodiciteTva) {
        $this->periodiciteTva = $periodiciteTva;
        return $this;
    }

    /**
     * Set the pme communautaire.
     *
     * @param bool $pmeCommunautaire The pme communautaire.
     */
    public function setPmeCommunautaire($pmeCommunautaire) {
        $this->pmeCommunautaire = $pmeCommunautaire;
        return $this;
    }

    /**
     * Set the pole enregistrement.
     *
     * @param string $poleEnregistrement The pole enregistrement.
     */
    public function setPoleEnregistrement($poleEnregistrement) {
        $this->poleEnregistrement = $poleEnregistrement;
        return $this;
    }

    /**
     * Set the ref oblig fisc.
     *
     * @param string $refObligFisc The ref oblig fisc.
     */
    public function setRefObligFisc($refObligFisc) {
        $this->refObligFisc = $refObligFisc;
        return $this;
    }

    /**
     * Set the ref paiement dgi.
     *
     * @param string $refPaiementDgi The ref paiement dgi.
     */
    public function setRefPaiementDgi($refPaiementDgi) {
        $this->refPaiementDgi = $refPaiementDgi;
        return $this;
    }

    /**
     * Set the regime.
     *
     * @param string $regime The regime.
     */
    public function setRegime($regime) {
        $this->regime = $regime;
        return $this;
    }

    /**
     * Set the regime agricole.
     *
     * @param bool $regimeAgricole The regime agricole.
     */
    public function setRegimeAgricole($regimeAgricole) {
        $this->regimeAgricole = $regimeAgricole;
        return $this;
    }

    /**
     * Set the regime groupe.
     *
     * @param bool $regimeGroupe The regime groupe.
     */
    public function setRegimeGroupe($regimeGroupe) {
        $this->regimeGroupe = $regimeGroupe;
        return $this;
    }

    /**
     * Set the rof cfe.
     *
     * @param string $rofCfe The rof cfe.
     */
    public function setRofCfe($rofCfe) {
        $this->rofCfe = $rofCfe;
        return $this;
    }

    /**
     * Set the rof cvae.
     *
     * @param string $rofCvae The rof cvae.
     */
    public function setRofCvae($rofCvae) {
        $this->rofCvae = $rofCvae;
        return $this;
    }

    /**
     * Set the rof cvaep.
     *
     * @param string $rofCvaep The rof cvaep.
     */
    public function setRofCvaep($rofCvaep) {
        $this->rofCvaep = $rofCvaep;
        return $this;
    }

    /**
     * Set the rof is.
     *
     * @param string $rofIs The rof is.
     */
    public function setRofIs($rofIs) {
        $this->rofIs = $rofIs;
        return $this;
    }

    /**
     * Set the rof rcm.
     *
     * @param string $rofRcm The rof rcm.
     */
    public function setRofRcm($rofRcm) {
        $this->rofRcm = $rofRcm;
        return $this;
    }

    /**
     * Set the rof tdfc group.
     *
     * @param string $rofTdfcGroup The rof tdfc group.
     */
    public function setRofTdfcGroup($rofTdfcGroup) {
        $this->rofTdfcGroup = $rofTdfcGroup;
        return $this;
    }

    /**
     * Set the rof ts.
     *
     * @param string $rofTs The rof ts.
     */
    public function setRofTs($rofTs) {
        $this->rofTs = $rofTs;
        return $this;
    }

    /**
     * Set the rof tva.
     *
     * @param string $rofTva The rof tva.
     */
    public function setRofTva($rofTva) {
        $this->rofTva = $rofTva;
        return $this;
    }

    /**
     * Set the societe mere.
     *
     * @param bool $societeMere The societe mere.
     */
    public function setSocieteMere($societeMere) {
        $this->societeMere = $societeMere;
        return $this;
    }

    /**
     * Set the tresorerie.
     *
     * @param string $tresorerie The tresorerie.
     */
    public function setTresorerie($tresorerie) {
        $this->tresorerie = $tresorerie;
        return $this;
    }

    /**
     * Set the tresorerie is.
     *
     * @param string $tresorerieIs The tresorerie is.
     */
    public function setTresorerieIs($tresorerieIs) {
        $this->tresorerieIs = $tresorerieIs;
        return $this;
    }

    /**
     * Set the tva ca12 ae.
     *
     * @param string $tvaCa12Ae The tva ca12 ae.
     */
    public function setTvaCa12Ae($tvaCa12Ae) {
        $this->tvaCa12Ae = $tvaCa12Ae;
        return $this;
    }

    /**
     * Set the tva decaissements.
     *
     * @param bool $tvaDecaissements The tva decaissements.
     */
    public function setTvaDecaissements($tvaDecaissements) {
        $this->tvaDecaissements = $tvaDecaissements;
        return $this;
    }

    /**
     * Set the tva etab btq.
     *
     * @param string $tvaEtabBtq The tva etab btq.
     */
    public function setTvaEtabBtq($tvaEtabBtq) {
        $this->tvaEtabBtq = $tvaEtabBtq;
        return $this;
    }

    /**
     * Set the tva etab bureau distributeur.
     *
     * @param string $tvaEtabBureauDistributeur The tva etab bureau distributeur.
     */
    public function setTvaEtabBureauDistributeur($tvaEtabBureauDistributeur) {
        $this->tvaEtabBureauDistributeur = $tvaEtabBureauDistributeur;
        return $this;
    }

    /**
     * Set the tva etab code postal.
     *
     * @param string $tvaEtabCodePostal The tva etab code postal.
     */
    public function setTvaEtabCodePostal($tvaEtabCodePostal) {
        $this->tvaEtabCodePostal = $tvaEtabCodePostal;
        return $this;
    }

    /**
     * Set the tva etab complement.
     *
     * @param string $tvaEtabComplement The tva etab complement.
     */
    public function setTvaEtabComplement($tvaEtabComplement) {
        $this->tvaEtabComplement = $tvaEtabComplement;
        return $this;
    }

    /**
     * Set the tva etab nom rs.
     *
     * @param string $tvaEtabNomRs The tva etab nom rs.
     */
    public function setTvaEtabNomRs($tvaEtabNomRs) {
        $this->tvaEtabNomRs = $tvaEtabNomRs;
        return $this;
    }

    /**
     * Set the tva etab nom voie.
     *
     * @param string $tvaEtabNomVoie The tva etab nom voie.
     */
    public function setTvaEtabNomVoie($tvaEtabNomVoie) {
        $this->tvaEtabNomVoie = $tvaEtabNomVoie;
        return $this;
    }

    /**
     * Set the tva etab num voie.
     *
     * @param string $tvaEtabNumVoie The tva etab num voie.
     */
    public function setTvaEtabNumVoie($tvaEtabNumVoie) {
        $this->tvaEtabNumVoie = $tvaEtabNumVoie;
        return $this;
    }

    /**
     * Set the tva faite par client.
     *
     * @param bool $tvaFaiteParClient The tva faite par client.
     */
    public function setTvaFaiteParClient($tvaFaiteParClient) {
        $this->tvaFaiteParClient = $tvaFaiteParClient;
        return $this;
    }

    /**
     * Set the tva nom vir.
     *
     * @param string $tvaNomVir The tva nom vir.
     */
    public function setTvaNomVir($tvaNomVir) {
        $this->tvaNomVir = $tvaNomVir;
        return $this;
    }

    /**
     * Set the tvarib vir.
     *
     * @param string $tvaribVir The tvarib vir.
     */
    public function setTvaribVir($tvaribVir) {
        $this->tvaribVir = $tvaribVir;
        return $this;
    }

    /**
     * Set the viseur conventionne.
     *
     * @param bool $viseurConventionne The viseur conventionne.
     */
    public function setViseurConventionne($viseurConventionne) {
        $this->viseurConventionne = $viseurConventionne;
        return $this;
    }

    /**
     * Set the viseur dt attest.
     *
     * @param DateTime|null $viseurDtAttest The viseur dt attest.
     */
    public function setViseurDtAttest(DateTime $viseurDtAttest = null) {
        $this->viseurDtAttest = $viseurDtAttest;
        return $this;
    }

    /**
     * Set the viseur num attest.
     *
     * @param string $viseurNumAttest The viseur num attest.
     */
    public function setViseurNumAttest($viseurNumAttest) {
        $this->viseurNumAttest = $viseurNumAttest;
        return $this;
    }
}
