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
 * Fiscal model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
 */
class Fiscal {

    /**
     * Abattement c g a.
     *
     * @var boolean
     */
    private $abattementCGA;

    /**
     * Assurance controle.
     *
     * @var boolean
     */
    private $assuranceControle;

    /**
     * C d assiette.
     *
     * @var string
     */
    private $cDAssiette;

    /**
     * C d i.
     *
     * @var string
     */
    private $cDI;

    /**
     * C g a.
     *
     * @var boolean
     */
    private $cGA;

    /**
     * Code c g a.
     *
     * @var string
     */
    private $codeCGA;

    /**
     * Code centre impot.
     *
     * @var string
     */
    private $codeCentreImpot;

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
     * Code regime t v a.
     *
     * @var string
     */
    private $codeRegimeTVA;

    /**
     * Contact c g a.
     *
     * @var string
     */
    private $contactCGA;

    /**
     * Contact centre impots.
     *
     * @var string
     */
    private $contactCentreImpots;

    /**
     * Contact recette impots.
     *
     * @var string
     */
    private $contactRecetteImpots;

    /**
     * Date adhesion c g a.
     *
     * @var DateTime
     */
    private $dateAdhesionCGA;

    /**
     * Date effet adhesion c g a.
     *
     * @var DateTime
     */
    private $dateEffetAdhesionCGA;

    /**
     * Date effet radiation c g a.
     *
     * @var DateTime
     */
    private $dateEffetRadiationCGA;

    /**
     * Date radiation c g a.
     *
     * @var DateTime
     */
    private $dateRadiationCGA;

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
     * @var boolean
     */
    private $ediTdfcBdF;

    /**
     * F r p cle.
     *
     * @var string
     */
    private $fRPCle;

    /**
     * F r p dossier.
     *
     * @var string
     */
    private $fRPDossier;

    /**
     * F r p recette.
     *
     * @var string
     */
    private $fRPRecette;

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
     * Mandat date debut d a d s.
     *
     * @var DateTime
     */
    private $mandatDateDebutDADS;

    /**
     * Mandat date debut d u c s e d i.
     *
     * @var DateTime
     */
    private $mandatDateDebutDUCSEDI;

    /**
     * Mandat date debut e d i t v a.
     *
     * @var DateTime
     */
    private $mandatDateDebutEDITVA;

    /**
     * Mandat date debut e t e b a c.
     *
     * @var DateTime
     */
    private $mandatDateDebutETEBAC;

    /**
     * Mandat date debut p e d i.
     *
     * @var DateTime
     */
    private $mandatDateDebutPEDI;

    /**
     * Mandat date debut r e q.
     *
     * @var DateTime
     */
    private $mandatDateDebutREQ;

    /**
     * Mandat date debut t d f c.
     *
     * @var DateTime
     */
    private $mandatDateDebutTDFC;

    /**
     * Mandat duree d a d s.
     *
     * @var int
     */
    private $mandatDureeDADS;

    /**
     * Mandat duree d u c s e d i.
     *
     * @var int
     */
    private $mandatDureeDUCSEDI;

    /**
     * Mandat duree e d i t v a.
     *
     * @var int
     */
    private $mandatDureeEDITVA;

    /**
     * Mandat duree e t e b a c.
     *
     * @var int
     */
    private $mandatDureeETEBAC;

    /**
     * Mandat duree p e d i.
     *
     * @var int
     */
    private $mandatDureePEDI;

    /**
     * Mandat duree r e q.
     *
     * @var int
     */
    private $mandatDureeREQ;

    /**
     * Mandat duree t d f c.
     *
     * @var int
     */
    private $mandatDureeTDFC;

    /**
     * Mandat piece jointe d a d s.
     *
     * @var string
     */
    private $mandatPieceJointeDADS;

    /**
     * Mandat piece jointe d u c s e d i.
     *
     * @var string
     */
    private $mandatPieceJointeDUCSEDI;

    /**
     * Mandat piece jointe e d i t v a.
     *
     * @var string
     */
    private $mandatPieceJointeEDITVA;

    /**
     * Mandat piece jointe e t e b a c.
     *
     * @var string
     */
    private $mandatPieceJointeETEBAC;

    /**
     * Mandat piece jointe p e d i.
     *
     * @var string
     */
    private $mandatPieceJointePEDI;

    /**
     * Mandat piece jointe r e q.
     *
     * @var string
     */
    private $mandatPieceJointeREQ;

    /**
     * Mandat piece jointe t d f c.
     *
     * @var string
     */
    private $mandatPieceJointeTDFC;

    /**
     * Mandat suivi d a d s.
     *
     * @var boolean
     */
    private $mandatSuiviDADS;

    /**
     * Mandat suivi d u c s e d i.
     *
     * @var boolean
     */
    private $mandatSuiviDUCSEDI;

    /**
     * Mandat suivi e d i t v a.
     *
     * @var boolean
     */
    private $mandatSuiviEDITVA;

    /**
     * Mandat suivi e t e b a c.
     *
     * @var boolean
     */
    private $mandatSuiviETEBAC;

    /**
     * Mandat suivi p e d i.
     *
     * @var boolean
     */
    private $mandatSuiviPEDI;

    /**
     * Mandat suivi r e q.
     *
     * @var boolean
     */
    private $mandatSuiviREQ;

    /**
     * Mandat suivi t d f c.
     *
     * @var boolean
     */
    private $mandatSuiviTDFC;

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
     * Motif radiation c g a.
     *
     * @var string
     */
    private $motifRadiationCGA;

    /**
     * Numero registre.
     *
     * @var string
     */
    private $numeroRegistre;

    /**
     * P m e communautaire.
     *
     * @var boolean
     */
    private $pMECommunautaire;

    /**
     * Periodicite t v a.
     *
     * @var string
     */
    private $periodiciteTVA;

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
     * Ref paiement d g i.
     *
     * @var string
     */
    private $refPaiementDGI;

    /**
     * Regime.
     *
     * @var string
     */
    private $regime;

    /**
     * Regime agricole.
     *
     * @var boolean
     */
    private $regimeAgricole;

    /**
     * Regime groupe.
     *
     * @var boolean
     */
    private $regimeGroupe;

    /**
     * Rof c f e.
     *
     * @var string
     */
    private $rofCFE;

    /**
     * Rof c v a e.
     *
     * @var string
     */
    private $rofCVAE;

    /**
     * Rof c v a e p.
     *
     * @var string
     */
    private $rofCVAEP;

    /**
     * Rof i s.
     *
     * @var string
     */
    private $rofIS;

    /**
     * Rof r c m.
     *
     * @var string
     */
    private $rofRCM;

    /**
     * Rof t s.
     *
     * @var string
     */
    private $rofTS;

    /**
     * Rof t v a.
     *
     * @var string
     */
    private $rofTVA;

    /**
     * Rof tdfc group.
     *
     * @var string
     */
    private $rofTdfcGroup;

    /**
     * Societe mere.
     *
     * @var boolean
     */
    private $societeMere;

    /**
     * T v a etab_ b t q.
     *
     * @var string
     */
    private $tVAEtab_BTQ;

    /**
     * T v a etab_ bureau distributeur.
     *
     * @var string
     */
    private $tVAEtab_BureauDistributeur;

    /**
     * T v a etab_ code postal.
     *
     * @var string
     */
    private $tVAEtab_CodePostal;

    /**
     * T v a etab_ complement.
     *
     * @var string
     */
    private $tVAEtab_Complement;

    /**
     * T v a etab_ nom r s.
     *
     * @var string
     */
    private $tVAEtab_NomRS;

    /**
     * T v a etab_ nom voie.
     *
     * @var string
     */
    private $tVAEtab_NomVoie;

    /**
     * T v a etab_ num voie.
     *
     * @var string
     */
    private $tVAEtab_NumVoie;

    /**
     * T v a nom vir.
     *
     * @var string
     */
    private $tVANomVir;

    /**
     * T v a r i b vir.
     *
     * @var string
     */
    private $tVARIBVir;

    /**
     * Tresorerie.
     *
     * @var string
     */
    private $tresorerie;

    /**
     * Tresorerie i s.
     *
     * @var string
     */
    private $tresorerieIS;

    /**
     * Tva c a12 a e.
     *
     * @var string
     */
    private $tvaCA12AE;

    /**
     * Tva decaissements.
     *
     * @var boolean
     */
    private $tvaDecaissements;

    /**
     * Tva faite par client.
     *
     * @var boolean
     */
    private $tvaFaiteParClient;

    /**
     * Viseur conventionne.
     *
     * @var boolean
     */
    private $viseurConventionne;

    /**
     * Viseur dt attest.
     *
     * @var DateTime
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
     * Get the abattement c g a.
     *
     * @return boolean Returns the abattement c g a.
     */
    public function getAbattementCGA() {
        return $this->abattementCGA;
    }

    /**
     * Get the assurance controle.
     *
     * @return boolean Returns the assurance controle.
     */
    public function getAssuranceControle() {
        return $this->assuranceControle;
    }

    /**
     * Get the c d assiette.
     *
     * @return string Returns the c d assiette.
     */
    public function getCDAssiette() {
        return $this->cDAssiette;
    }

    /**
     * Get the c d i.
     *
     * @return string Returns the c d i.
     */
    public function getCDI() {
        return $this->cDI;
    }

    /**
     * Get the c g a.
     *
     * @return boolean Returns the c g a.
     */
    public function getCGA() {
        return $this->cGA;
    }

    /**
     * Get the code c g a.
     *
     * @return string Returns the code c g a.
     */
    public function getCodeCGA() {
        return $this->codeCGA;
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
     * Get the code regime t v a.
     *
     * @return string Returns the code regime t v a.
     */
    public function getCodeRegimeTVA() {
        return $this->codeRegimeTVA;
    }

    /**
     * Get the contact c g a.
     *
     * @return string Returns the contact c g a.
     */
    public function getContactCGA() {
        return $this->contactCGA;
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
     * Get the contact recette impots.
     *
     * @return string Returns the contact recette impots.
     */
    public function getContactRecetteImpots() {
        return $this->contactRecetteImpots;
    }

    /**
     * Get the date adhesion c g a.
     *
     * @return DateTime Returns the date adhesion c g a.
     */
    public function getDateAdhesionCGA() {
        return $this->dateAdhesionCGA;
    }

    /**
     * Get the date effet adhesion c g a.
     *
     * @return DateTime Returns the date effet adhesion c g a.
     */
    public function getDateEffetAdhesionCGA() {
        return $this->dateEffetAdhesionCGA;
    }

    /**
     * Get the date effet radiation c g a.
     *
     * @return DateTime Returns the date effet radiation c g a.
     */
    public function getDateEffetRadiationCGA() {
        return $this->dateEffetRadiationCGA;
    }

    /**
     * Get the date radiation c g a.
     *
     * @return DateTime Returns the date radiation c g a.
     */
    public function getDateRadiationCGA() {
        return $this->dateRadiationCGA;
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
     * @return boolean Returns the edi tdfc bd f.
     */
    public function getEdiTdfcBdF() {
        return $this->ediTdfcBdF;
    }

    /**
     * Get the f r p cle.
     *
     * @return string Returns the f r p cle.
     */
    public function getFRPCle() {
        return $this->fRPCle;
    }

    /**
     * Get the f r p dossier.
     *
     * @return string Returns the f r p dossier.
     */
    public function getFRPDossier() {
        return $this->fRPDossier;
    }

    /**
     * Get the f r p recette.
     *
     * @return string Returns the f r p recette.
     */
    public function getFRPRecette() {
        return $this->fRPRecette;
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
     * Get the mandat date debut d a d s.
     *
     * @return DateTime Returns the mandat date debut d a d s.
     */
    public function getMandatDateDebutDADS() {
        return $this->mandatDateDebutDADS;
    }

    /**
     * Get the mandat date debut d u c s e d i.
     *
     * @return DateTime Returns the mandat date debut d u c s e d i.
     */
    public function getMandatDateDebutDUCSEDI() {
        return $this->mandatDateDebutDUCSEDI;
    }

    /**
     * Get the mandat date debut e d i t v a.
     *
     * @return DateTime Returns the mandat date debut e d i t v a.
     */
    public function getMandatDateDebutEDITVA() {
        return $this->mandatDateDebutEDITVA;
    }

    /**
     * Get the mandat date debut e t e b a c.
     *
     * @return DateTime Returns the mandat date debut e t e b a c.
     */
    public function getMandatDateDebutETEBAC() {
        return $this->mandatDateDebutETEBAC;
    }

    /**
     * Get the mandat date debut p e d i.
     *
     * @return DateTime Returns the mandat date debut p e d i.
     */
    public function getMandatDateDebutPEDI() {
        return $this->mandatDateDebutPEDI;
    }

    /**
     * Get the mandat date debut r e q.
     *
     * @return DateTime Returns the mandat date debut r e q.
     */
    public function getMandatDateDebutREQ() {
        return $this->mandatDateDebutREQ;
    }

    /**
     * Get the mandat date debut t d f c.
     *
     * @return DateTime Returns the mandat date debut t d f c.
     */
    public function getMandatDateDebutTDFC() {
        return $this->mandatDateDebutTDFC;
    }

    /**
     * Get the mandat duree d a d s.
     *
     * @return int Returns the mandat duree d a d s.
     */
    public function getMandatDureeDADS() {
        return $this->mandatDureeDADS;
    }

    /**
     * Get the mandat duree d u c s e d i.
     *
     * @return int Returns the mandat duree d u c s e d i.
     */
    public function getMandatDureeDUCSEDI() {
        return $this->mandatDureeDUCSEDI;
    }

    /**
     * Get the mandat duree e d i t v a.
     *
     * @return int Returns the mandat duree e d i t v a.
     */
    public function getMandatDureeEDITVA() {
        return $this->mandatDureeEDITVA;
    }

    /**
     * Get the mandat duree e t e b a c.
     *
     * @return int Returns the mandat duree e t e b a c.
     */
    public function getMandatDureeETEBAC() {
        return $this->mandatDureeETEBAC;
    }

    /**
     * Get the mandat duree p e d i.
     *
     * @return int Returns the mandat duree p e d i.
     */
    public function getMandatDureePEDI() {
        return $this->mandatDureePEDI;
    }

    /**
     * Get the mandat duree r e q.
     *
     * @return int Returns the mandat duree r e q.
     */
    public function getMandatDureeREQ() {
        return $this->mandatDureeREQ;
    }

    /**
     * Get the mandat duree t d f c.
     *
     * @return int Returns the mandat duree t d f c.
     */
    public function getMandatDureeTDFC() {
        return $this->mandatDureeTDFC;
    }

    /**
     * Get the mandat piece jointe d a d s.
     *
     * @return string Returns the mandat piece jointe d a d s.
     */
    public function getMandatPieceJointeDADS() {
        return $this->mandatPieceJointeDADS;
    }

    /**
     * Get the mandat piece jointe d u c s e d i.
     *
     * @return string Returns the mandat piece jointe d u c s e d i.
     */
    public function getMandatPieceJointeDUCSEDI() {
        return $this->mandatPieceJointeDUCSEDI;
    }

    /**
     * Get the mandat piece jointe e d i t v a.
     *
     * @return string Returns the mandat piece jointe e d i t v a.
     */
    public function getMandatPieceJointeEDITVA() {
        return $this->mandatPieceJointeEDITVA;
    }

    /**
     * Get the mandat piece jointe e t e b a c.
     *
     * @return string Returns the mandat piece jointe e t e b a c.
     */
    public function getMandatPieceJointeETEBAC() {
        return $this->mandatPieceJointeETEBAC;
    }

    /**
     * Get the mandat piece jointe p e d i.
     *
     * @return string Returns the mandat piece jointe p e d i.
     */
    public function getMandatPieceJointePEDI() {
        return $this->mandatPieceJointePEDI;
    }

    /**
     * Get the mandat piece jointe r e q.
     *
     * @return string Returns the mandat piece jointe r e q.
     */
    public function getMandatPieceJointeREQ() {
        return $this->mandatPieceJointeREQ;
    }

    /**
     * Get the mandat piece jointe t d f c.
     *
     * @return string Returns the mandat piece jointe t d f c.
     */
    public function getMandatPieceJointeTDFC() {
        return $this->mandatPieceJointeTDFC;
    }

    /**
     * Get the mandat suivi d a d s.
     *
     * @return boolean Returns the mandat suivi d a d s.
     */
    public function getMandatSuiviDADS() {
        return $this->mandatSuiviDADS;
    }

    /**
     * Get the mandat suivi d u c s e d i.
     *
     * @return boolean Returns the mandat suivi d u c s e d i.
     */
    public function getMandatSuiviDUCSEDI() {
        return $this->mandatSuiviDUCSEDI;
    }

    /**
     * Get the mandat suivi e d i t v a.
     *
     * @return boolean Returns the mandat suivi e d i t v a.
     */
    public function getMandatSuiviEDITVA() {
        return $this->mandatSuiviEDITVA;
    }

    /**
     * Get the mandat suivi e t e b a c.
     *
     * @return boolean Returns the mandat suivi e t e b a c.
     */
    public function getMandatSuiviETEBAC() {
        return $this->mandatSuiviETEBAC;
    }

    /**
     * Get the mandat suivi p e d i.
     *
     * @return boolean Returns the mandat suivi p e d i.
     */
    public function getMandatSuiviPEDI() {
        return $this->mandatSuiviPEDI;
    }

    /**
     * Get the mandat suivi r e q.
     *
     * @return boolean Returns the mandat suivi r e q.
     */
    public function getMandatSuiviREQ() {
        return $this->mandatSuiviREQ;
    }

    /**
     * Get the mandat suivi t d f c.
     *
     * @return boolean Returns the mandat suivi t d f c.
     */
    public function getMandatSuiviTDFC() {
        return $this->mandatSuiviTDFC;
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
     * Get the motif radiation c g a.
     *
     * @return string Returns the motif radiation c g a.
     */
    public function getMotifRadiationCGA() {
        return $this->motifRadiationCGA;
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
     * Get the p m e communautaire.
     *
     * @return boolean Returns the p m e communautaire.
     */
    public function getPMECommunautaire() {
        return $this->pMECommunautaire;
    }

    /**
     * Get the periodicite t v a.
     *
     * @return string Returns the periodicite t v a.
     */
    public function getPeriodiciteTVA() {
        return $this->periodiciteTVA;
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
     * Get the ref paiement d g i.
     *
     * @return string Returns the ref paiement d g i.
     */
    public function getRefPaiementDGI() {
        return $this->refPaiementDGI;
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
     * @return boolean Returns the regime agricole.
     */
    public function getRegimeAgricole() {
        return $this->regimeAgricole;
    }

    /**
     * Get the regime groupe.
     *
     * @return boolean Returns the regime groupe.
     */
    public function getRegimeGroupe() {
        return $this->regimeGroupe;
    }

    /**
     * Get the rof c f e.
     *
     * @return string Returns the rof c f e.
     */
    public function getRofCFE() {
        return $this->rofCFE;
    }

    /**
     * Get the rof c v a e.
     *
     * @return string Returns the rof c v a e.
     */
    public function getRofCVAE() {
        return $this->rofCVAE;
    }

    /**
     * Get the rof c v a e p.
     *
     * @return string Returns the rof c v a e p.
     */
    public function getRofCVAEP() {
        return $this->rofCVAEP;
    }

    /**
     * Get the rof i s.
     *
     * @return string Returns the rof i s.
     */
    public function getRofIS() {
        return $this->rofIS;
    }

    /**
     * Get the rof r c m.
     *
     * @return string Returns the rof r c m.
     */
    public function getRofRCM() {
        return $this->rofRCM;
    }

    /**
     * Get the rof t s.
     *
     * @return string Returns the rof t s.
     */
    public function getRofTS() {
        return $this->rofTS;
    }

    /**
     * Get the rof t v a.
     *
     * @return string Returns the rof t v a.
     */
    public function getRofTVA() {
        return $this->rofTVA;
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
     * Get the societe mere.
     *
     * @return boolean Returns the societe mere.
     */
    public function getSocieteMere() {
        return $this->societeMere;
    }

    /**
     * Get the t v a etab_ b t q.
     *
     * @return string Returns the t v a etab_ b t q.
     */
    public function getTVAEtab_BTQ() {
        return $this->tVAEtab_BTQ;
    }

    /**
     * Get the t v a etab_ bureau distributeur.
     *
     * @return string Returns the t v a etab_ bureau distributeur.
     */
    public function getTVAEtab_BureauDistributeur() {
        return $this->tVAEtab_BureauDistributeur;
    }

    /**
     * Get the t v a etab_ code postal.
     *
     * @return string Returns the t v a etab_ code postal.
     */
    public function getTVAEtab_CodePostal() {
        return $this->tVAEtab_CodePostal;
    }

    /**
     * Get the t v a etab_ complement.
     *
     * @return string Returns the t v a etab_ complement.
     */
    public function getTVAEtab_Complement() {
        return $this->tVAEtab_Complement;
    }

    /**
     * Get the t v a etab_ nom r s.
     *
     * @return string Returns the t v a etab_ nom r s.
     */
    public function getTVAEtab_NomRS() {
        return $this->tVAEtab_NomRS;
    }

    /**
     * Get the t v a etab_ nom voie.
     *
     * @return string Returns the t v a etab_ nom voie.
     */
    public function getTVAEtab_NomVoie() {
        return $this->tVAEtab_NomVoie;
    }

    /**
     * Get the t v a etab_ num voie.
     *
     * @return string Returns the t v a etab_ num voie.
     */
    public function getTVAEtab_NumVoie() {
        return $this->tVAEtab_NumVoie;
    }

    /**
     * Get the t v a nom vir.
     *
     * @return string Returns the t v a nom vir.
     */
    public function getTVANomVir() {
        return $this->tVANomVir;
    }

    /**
     * Get the t v a r i b vir.
     *
     * @return string Returns the t v a r i b vir.
     */
    public function getTVARIBVir() {
        return $this->tVARIBVir;
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
     * Get the tresorerie i s.
     *
     * @return string Returns the tresorerie i s.
     */
    public function getTresorerieIS() {
        return $this->tresorerieIS;
    }

    /**
     * Get the tva c a12 a e.
     *
     * @return string Returns the tva c a12 a e.
     */
    public function getTvaCA12AE() {
        return $this->tvaCA12AE;
    }

    /**
     * Get the tva decaissements.
     *
     * @return boolean Returns the tva decaissements.
     */
    public function getTvaDecaissements() {
        return $this->tvaDecaissements;
    }

    /**
     * Get the tva faite par client.
     *
     * @return boolean Returns the tva faite par client.
     */
    public function getTvaFaiteParClient() {
        return $this->tvaFaiteParClient;
    }

    /**
     * Get the viseur conventionne.
     *
     * @return boolean Returns the viseur conventionne.
     */
    public function getViseurConventionne() {
        return $this->viseurConventionne;
    }

    /**
     * Get the viseur dt attest.
     *
     * @return DateTime Returns the viseur dt attest.
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
     * Set the abattement c g a.
     *
     * @param boolean $abattementCGA The abattement c g a.
     * @return Fiscal Returns this fiscal.
     */
    public function setAbattementCGA($abattementCGA) {
        $this->abattementCGA = $abattementCGA;
        return $this;
    }

    /**
     * Set the assurance controle.
     *
     * @param boolean $assuranceControle The assurance controle.
     * @return Fiscal Returns this fiscal.
     */
    public function setAssuranceControle($assuranceControle) {
        $this->assuranceControle = $assuranceControle;
        return $this;
    }

    /**
     * Set the c d assiette.
     *
     * @param string $cDAssiette The c d assiette.
     * @return Fiscal Returns this fiscal.
     */
    public function setCDAssiette($cDAssiette) {
        $this->cDAssiette = $cDAssiette;
        return $this;
    }

    /**
     * Set the c d i.
     *
     * @param string $cDI The c d i.
     * @return Fiscal Returns this fiscal.
     */
    public function setCDI($cDI) {
        $this->cDI = $cDI;
        return $this;
    }

    /**
     * Set the c g a.
     *
     * @param boolean $cGA The c g a.
     * @return Fiscal Returns this fiscal.
     */
    public function setCGA($cGA) {
        $this->cGA = $cGA;
        return $this;
    }

    /**
     * Set the code c g a.
     *
     * @param string $codeCGA The code c g a.
     * @return Fiscal Returns this fiscal.
     */
    public function setCodeCGA($codeCGA) {
        $this->codeCGA = $codeCGA;
        return $this;
    }

    /**
     * Set the code centre impot.
     *
     * @param string $codeCentreImpot The code centre impot.
     * @return Fiscal Returns this fiscal.
     */
    public function setCodeCentreImpot($codeCentreImpot) {
        $this->codeCentreImpot = $codeCentreImpot;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return Fiscal Returns this fiscal.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code impot direct.
     *
     * @param string $codeImpotDirect The code impot direct.
     * @return Fiscal Returns this fiscal.
     */
    public function setCodeImpotDirect($codeImpotDirect) {
        $this->codeImpotDirect = $codeImpotDirect;
        return $this;
    }

    /**
     * Set the code recette impots.
     *
     * @param string $codeRecetteImpots The code recette impots.
     * @return Fiscal Returns this fiscal.
     */
    public function setCodeRecetteImpots($codeRecetteImpots) {
        $this->codeRecetteImpots = $codeRecetteImpots;
        return $this;
    }

    /**
     * Set the code regime t v a.
     *
     * @param string $codeRegimeTVA The code regime t v a.
     * @return Fiscal Returns this fiscal.
     */
    public function setCodeRegimeTVA($codeRegimeTVA) {
        $this->codeRegimeTVA = $codeRegimeTVA;
        return $this;
    }

    /**
     * Set the contact c g a.
     *
     * @param string $contactCGA The contact c g a.
     * @return Fiscal Returns this fiscal.
     */
    public function setContactCGA($contactCGA) {
        $this->contactCGA = $contactCGA;
        return $this;
    }

    /**
     * Set the contact centre impots.
     *
     * @param string $contactCentreImpots The contact centre impots.
     * @return Fiscal Returns this fiscal.
     */
    public function setContactCentreImpots($contactCentreImpots) {
        $this->contactCentreImpots = $contactCentreImpots;
        return $this;
    }

    /**
     * Set the contact recette impots.
     *
     * @param string $contactRecetteImpots The contact recette impots.
     * @return Fiscal Returns this fiscal.
     */
    public function setContactRecetteImpots($contactRecetteImpots) {
        $this->contactRecetteImpots = $contactRecetteImpots;
        return $this;
    }

    /**
     * Set the date adhesion c g a.
     *
     * @param DateTime $dateAdhesionCGA The date adhesion c g a.
     * @return Fiscal Returns this fiscal.
     */
    public function setDateAdhesionCGA(DateTime $dateAdhesionCGA = null) {
        $this->dateAdhesionCGA = $dateAdhesionCGA;
        return $this;
    }

    /**
     * Set the date effet adhesion c g a.
     *
     * @param DateTime $dateEffetAdhesionCGA The date effet adhesion c g a.
     * @return Fiscal Returns this fiscal.
     */
    public function setDateEffetAdhesionCGA(DateTime $dateEffetAdhesionCGA = null) {
        $this->dateEffetAdhesionCGA = $dateEffetAdhesionCGA;
        return $this;
    }

    /**
     * Set the date effet radiation c g a.
     *
     * @param DateTime $dateEffetRadiationCGA The date effet radiation c g a.
     * @return Fiscal Returns this fiscal.
     */
    public function setDateEffetRadiationCGA(DateTime $dateEffetRadiationCGA = null) {
        $this->dateEffetRadiationCGA = $dateEffetRadiationCGA;
        return $this;
    }

    /**
     * Set the date radiation c g a.
     *
     * @param DateTime $dateRadiationCGA The date radiation c g a.
     * @return Fiscal Returns this fiscal.
     */
    public function setDateRadiationCGA(DateTime $dateRadiationCGA = null) {
        $this->dateRadiationCGA = $dateRadiationCGA;
        return $this;
    }

    /**
     * Set the declaration sur.
     *
     * @param string $declarationSur The declaration sur.
     * @return Fiscal Returns this fiscal.
     */
    public function setDeclarationSur($declarationSur) {
        $this->declarationSur = $declarationSur;
        return $this;
    }

    /**
     * Set the duree exercice.
     *
     * @param string $dureeExercice The duree exercice.
     * @return Fiscal Returns this fiscal.
     */
    public function setDureeExercice($dureeExercice) {
        $this->dureeExercice = $dureeExercice;
        return $this;
    }

    /**
     * Set the edi tdfc bd f.
     *
     * @param boolean $ediTdfcBdF The edi tdfc bd f.
     * @return Fiscal Returns this fiscal.
     */
    public function setEdiTdfcBdF($ediTdfcBdF) {
        $this->ediTdfcBdF = $ediTdfcBdF;
        return $this;
    }

    /**
     * Set the f r p cle.
     *
     * @param string $fRPCle The f r p cle.
     * @return Fiscal Returns this fiscal.
     */
    public function setFRPCle($fRPCle) {
        $this->fRPCle = $fRPCle;
        return $this;
    }

    /**
     * Set the f r p dossier.
     *
     * @param string $fRPDossier The f r p dossier.
     * @return Fiscal Returns this fiscal.
     */
    public function setFRPDossier($fRPDossier) {
        $this->fRPDossier = $fRPDossier;
        return $this;
    }

    /**
     * Set the f r p recette.
     *
     * @param string $fRPRecette The f r p recette.
     * @return Fiscal Returns this fiscal.
     */
    public function setFRPRecette($fRPRecette) {
        $this->fRPRecette = $fRPRecette;
        return $this;
    }

    /**
     * Set the id impots gouv fr.
     *
     * @param string $idImpotsGouvFr The id impots gouv fr.
     * @return Fiscal Returns this fiscal.
     */
    public function setIdImpotsGouvFr($idImpotsGouvFr) {
        $this->idImpotsGouvFr = $idImpotsGouvFr;
        return $this;
    }

    /**
     * Set the impot.
     *
     * @param string $impot The impot.
     * @return Fiscal Returns this fiscal.
     */
    public function setImpot($impot) {
        $this->impot = $impot;
        return $this;
    }

    /**
     * Set the insp.
     *
     * @param string $insp The insp.
     * @return Fiscal Returns this fiscal.
     */
    public function setInsp($insp) {
        $this->insp = $insp;
        return $this;
    }

    /**
     * Set the jour declaration.
     *
     * @param string $jourDeclaration The jour declaration.
     * @return Fiscal Returns this fiscal.
     */
    public function setJourDeclaration($jourDeclaration) {
        $this->jourDeclaration = $jourDeclaration;
        return $this;
    }

    /**
     * Set the mandat date debut d a d s.
     *
     * @param DateTime $mandatDateDebutDADS The mandat date debut d a d s.
     * @return Fiscal Returns this fiscal.
     */
    public function setMandatDateDebutDADS(DateTime $mandatDateDebutDADS = null) {
        $this->mandatDateDebutDADS = $mandatDateDebutDADS;
        return $this;
    }

    /**
     * Set the mandat date debut d u c s e d i.
     *
     * @param DateTime $mandatDateDebutDUCSEDI The mandat date debut d u c s e d i.
     * @return Fiscal Returns this fiscal.
     */
    public function setMandatDateDebutDUCSEDI(DateTime $mandatDateDebutDUCSEDI = null) {
        $this->mandatDateDebutDUCSEDI = $mandatDateDebutDUCSEDI;
        return $this;
    }

    /**
     * Set the mandat date debut e d i t v a.
     *
     * @param DateTime $mandatDateDebutEDITVA The mandat date debut e d i t v a.
     * @return Fiscal Returns this fiscal.
     */
    public function setMandatDateDebutEDITVA(DateTime $mandatDateDebutEDITVA = null) {
        $this->mandatDateDebutEDITVA = $mandatDateDebutEDITVA;
        return $this;
    }

    /**
     * Set the mandat date debut e t e b a c.
     *
     * @param DateTime $mandatDateDebutETEBAC The mandat date debut e t e b a c.
     * @return Fiscal Returns this fiscal.
     */
    public function setMandatDateDebutETEBAC(DateTime $mandatDateDebutETEBAC = null) {
        $this->mandatDateDebutETEBAC = $mandatDateDebutETEBAC;
        return $this;
    }

    /**
     * Set the mandat date debut p e d i.
     *
     * @param DateTime $mandatDateDebutPEDI The mandat date debut p e d i.
     * @return Fiscal Returns this fiscal.
     */
    public function setMandatDateDebutPEDI(DateTime $mandatDateDebutPEDI = null) {
        $this->mandatDateDebutPEDI = $mandatDateDebutPEDI;
        return $this;
    }

    /**
     * Set the mandat date debut r e q.
     *
     * @param DateTime $mandatDateDebutREQ The mandat date debut r e q.
     * @return Fiscal Returns this fiscal.
     */
    public function setMandatDateDebutREQ(DateTime $mandatDateDebutREQ = null) {
        $this->mandatDateDebutREQ = $mandatDateDebutREQ;
        return $this;
    }

    /**
     * Set the mandat date debut t d f c.
     *
     * @param DateTime $mandatDateDebutTDFC The mandat date debut t d f c.
     * @return Fiscal Returns this fiscal.
     */
    public function setMandatDateDebutTDFC(DateTime $mandatDateDebutTDFC = null) {
        $this->mandatDateDebutTDFC = $mandatDateDebutTDFC;
        return $this;
    }

    /**
     * Set the mandat duree d a d s.
     *
     * @param int $mandatDureeDADS The mandat duree d a d s.
     * @return Fiscal Returns this fiscal.
     */
    public function setMandatDureeDADS($mandatDureeDADS) {
        $this->mandatDureeDADS = $mandatDureeDADS;
        return $this;
    }

    /**
     * Set the mandat duree d u c s e d i.
     *
     * @param int $mandatDureeDUCSEDI The mandat duree d u c s e d i.
     * @return Fiscal Returns this fiscal.
     */
    public function setMandatDureeDUCSEDI($mandatDureeDUCSEDI) {
        $this->mandatDureeDUCSEDI = $mandatDureeDUCSEDI;
        return $this;
    }

    /**
     * Set the mandat duree e d i t v a.
     *
     * @param int $mandatDureeEDITVA The mandat duree e d i t v a.
     * @return Fiscal Returns this fiscal.
     */
    public function setMandatDureeEDITVA($mandatDureeEDITVA) {
        $this->mandatDureeEDITVA = $mandatDureeEDITVA;
        return $this;
    }

    /**
     * Set the mandat duree e t e b a c.
     *
     * @param int $mandatDureeETEBAC The mandat duree e t e b a c.
     * @return Fiscal Returns this fiscal.
     */
    public function setMandatDureeETEBAC($mandatDureeETEBAC) {
        $this->mandatDureeETEBAC = $mandatDureeETEBAC;
        return $this;
    }

    /**
     * Set the mandat duree p e d i.
     *
     * @param int $mandatDureePEDI The mandat duree p e d i.
     * @return Fiscal Returns this fiscal.
     */
    public function setMandatDureePEDI($mandatDureePEDI) {
        $this->mandatDureePEDI = $mandatDureePEDI;
        return $this;
    }

    /**
     * Set the mandat duree r e q.
     *
     * @param int $mandatDureeREQ The mandat duree r e q.
     * @return Fiscal Returns this fiscal.
     */
    public function setMandatDureeREQ($mandatDureeREQ) {
        $this->mandatDureeREQ = $mandatDureeREQ;
        return $this;
    }

    /**
     * Set the mandat duree t d f c.
     *
     * @param int $mandatDureeTDFC The mandat duree t d f c.
     * @return Fiscal Returns this fiscal.
     */
    public function setMandatDureeTDFC($mandatDureeTDFC) {
        $this->mandatDureeTDFC = $mandatDureeTDFC;
        return $this;
    }

    /**
     * Set the mandat piece jointe d a d s.
     *
     * @param string $mandatPieceJointeDADS The mandat piece jointe d a d s.
     * @return Fiscal Returns this fiscal.
     */
    public function setMandatPieceJointeDADS($mandatPieceJointeDADS) {
        $this->mandatPieceJointeDADS = $mandatPieceJointeDADS;
        return $this;
    }

    /**
     * Set the mandat piece jointe d u c s e d i.
     *
     * @param string $mandatPieceJointeDUCSEDI The mandat piece jointe d u c s e d i.
     * @return Fiscal Returns this fiscal.
     */
    public function setMandatPieceJointeDUCSEDI($mandatPieceJointeDUCSEDI) {
        $this->mandatPieceJointeDUCSEDI = $mandatPieceJointeDUCSEDI;
        return $this;
    }

    /**
     * Set the mandat piece jointe e d i t v a.
     *
     * @param string $mandatPieceJointeEDITVA The mandat piece jointe e d i t v a.
     * @return Fiscal Returns this fiscal.
     */
    public function setMandatPieceJointeEDITVA($mandatPieceJointeEDITVA) {
        $this->mandatPieceJointeEDITVA = $mandatPieceJointeEDITVA;
        return $this;
    }

    /**
     * Set the mandat piece jointe e t e b a c.
     *
     * @param string $mandatPieceJointeETEBAC The mandat piece jointe e t e b a c.
     * @return Fiscal Returns this fiscal.
     */
    public function setMandatPieceJointeETEBAC($mandatPieceJointeETEBAC) {
        $this->mandatPieceJointeETEBAC = $mandatPieceJointeETEBAC;
        return $this;
    }

    /**
     * Set the mandat piece jointe p e d i.
     *
     * @param string $mandatPieceJointePEDI The mandat piece jointe p e d i.
     * @return Fiscal Returns this fiscal.
     */
    public function setMandatPieceJointePEDI($mandatPieceJointePEDI) {
        $this->mandatPieceJointePEDI = $mandatPieceJointePEDI;
        return $this;
    }

    /**
     * Set the mandat piece jointe r e q.
     *
     * @param string $mandatPieceJointeREQ The mandat piece jointe r e q.
     * @return Fiscal Returns this fiscal.
     */
    public function setMandatPieceJointeREQ($mandatPieceJointeREQ) {
        $this->mandatPieceJointeREQ = $mandatPieceJointeREQ;
        return $this;
    }

    /**
     * Set the mandat piece jointe t d f c.
     *
     * @param string $mandatPieceJointeTDFC The mandat piece jointe t d f c.
     * @return Fiscal Returns this fiscal.
     */
    public function setMandatPieceJointeTDFC($mandatPieceJointeTDFC) {
        $this->mandatPieceJointeTDFC = $mandatPieceJointeTDFC;
        return $this;
    }

    /**
     * Set the mandat suivi d a d s.
     *
     * @param boolean $mandatSuiviDADS The mandat suivi d a d s.
     * @return Fiscal Returns this fiscal.
     */
    public function setMandatSuiviDADS($mandatSuiviDADS) {
        $this->mandatSuiviDADS = $mandatSuiviDADS;
        return $this;
    }

    /**
     * Set the mandat suivi d u c s e d i.
     *
     * @param boolean $mandatSuiviDUCSEDI The mandat suivi d u c s e d i.
     * @return Fiscal Returns this fiscal.
     */
    public function setMandatSuiviDUCSEDI($mandatSuiviDUCSEDI) {
        $this->mandatSuiviDUCSEDI = $mandatSuiviDUCSEDI;
        return $this;
    }

    /**
     * Set the mandat suivi e d i t v a.
     *
     * @param boolean $mandatSuiviEDITVA The mandat suivi e d i t v a.
     * @return Fiscal Returns this fiscal.
     */
    public function setMandatSuiviEDITVA($mandatSuiviEDITVA) {
        $this->mandatSuiviEDITVA = $mandatSuiviEDITVA;
        return $this;
    }

    /**
     * Set the mandat suivi e t e b a c.
     *
     * @param boolean $mandatSuiviETEBAC The mandat suivi e t e b a c.
     * @return Fiscal Returns this fiscal.
     */
    public function setMandatSuiviETEBAC($mandatSuiviETEBAC) {
        $this->mandatSuiviETEBAC = $mandatSuiviETEBAC;
        return $this;
    }

    /**
     * Set the mandat suivi p e d i.
     *
     * @param boolean $mandatSuiviPEDI The mandat suivi p e d i.
     * @return Fiscal Returns this fiscal.
     */
    public function setMandatSuiviPEDI($mandatSuiviPEDI) {
        $this->mandatSuiviPEDI = $mandatSuiviPEDI;
        return $this;
    }

    /**
     * Set the mandat suivi r e q.
     *
     * @param boolean $mandatSuiviREQ The mandat suivi r e q.
     * @return Fiscal Returns this fiscal.
     */
    public function setMandatSuiviREQ($mandatSuiviREQ) {
        $this->mandatSuiviREQ = $mandatSuiviREQ;
        return $this;
    }

    /**
     * Set the mandat suivi t d f c.
     *
     * @param boolean $mandatSuiviTDFC The mandat suivi t d f c.
     * @return Fiscal Returns this fiscal.
     */
    public function setMandatSuiviTDFC($mandatSuiviTDFC) {
        $this->mandatSuiviTDFC = $mandatSuiviTDFC;
        return $this;
    }

    /**
     * Set the mdp impots gouv fr.
     *
     * @param string $mdpImpotsGouvFr The mdp impots gouv fr.
     * @return Fiscal Returns this fiscal.
     */
    public function setMdpImpotsGouvFr($mdpImpotsGouvFr) {
        $this->mdpImpotsGouvFr = $mdpImpotsGouvFr;
        return $this;
    }

    /**
     * Set the methode calcul.
     *
     * @param string $methodeCalcul The methode calcul.
     * @return Fiscal Returns this fiscal.
     */
    public function setMethodeCalcul($methodeCalcul) {
        $this->methodeCalcul = $methodeCalcul;
        return $this;
    }

    /**
     * Set the motif radiation c g a.
     *
     * @param string $motifRadiationCGA The motif radiation c g a.
     * @return Fiscal Returns this fiscal.
     */
    public function setMotifRadiationCGA($motifRadiationCGA) {
        $this->motifRadiationCGA = $motifRadiationCGA;
        return $this;
    }

    /**
     * Set the numero registre.
     *
     * @param string $numeroRegistre The numero registre.
     * @return Fiscal Returns this fiscal.
     */
    public function setNumeroRegistre($numeroRegistre) {
        $this->numeroRegistre = $numeroRegistre;
        return $this;
    }

    /**
     * Set the p m e communautaire.
     *
     * @param boolean $pMECommunautaire The p m e communautaire.
     * @return Fiscal Returns this fiscal.
     */
    public function setPMECommunautaire($pMECommunautaire) {
        $this->pMECommunautaire = $pMECommunautaire;
        return $this;
    }

    /**
     * Set the periodicite t v a.
     *
     * @param string $periodiciteTVA The periodicite t v a.
     * @return Fiscal Returns this fiscal.
     */
    public function setPeriodiciteTVA($periodiciteTVA) {
        $this->periodiciteTVA = $periodiciteTVA;
        return $this;
    }

    /**
     * Set the pole enregistrement.
     *
     * @param string $poleEnregistrement The pole enregistrement.
     * @return Fiscal Returns this fiscal.
     */
    public function setPoleEnregistrement($poleEnregistrement) {
        $this->poleEnregistrement = $poleEnregistrement;
        return $this;
    }

    /**
     * Set the ref oblig fisc.
     *
     * @param string $refObligFisc The ref oblig fisc.
     * @return Fiscal Returns this fiscal.
     */
    public function setRefObligFisc($refObligFisc) {
        $this->refObligFisc = $refObligFisc;
        return $this;
    }

    /**
     * Set the ref paiement d g i.
     *
     * @param string $refPaiementDGI The ref paiement d g i.
     * @return Fiscal Returns this fiscal.
     */
    public function setRefPaiementDGI($refPaiementDGI) {
        $this->refPaiementDGI = $refPaiementDGI;
        return $this;
    }

    /**
     * Set the regime.
     *
     * @param string $regime The regime.
     * @return Fiscal Returns this fiscal.
     */
    public function setRegime($regime) {
        $this->regime = $regime;
        return $this;
    }

    /**
     * Set the regime agricole.
     *
     * @param boolean $regimeAgricole The regime agricole.
     * @return Fiscal Returns this fiscal.
     */
    public function setRegimeAgricole($regimeAgricole) {
        $this->regimeAgricole = $regimeAgricole;
        return $this;
    }

    /**
     * Set the regime groupe.
     *
     * @param boolean $regimeGroupe The regime groupe.
     * @return Fiscal Returns this fiscal.
     */
    public function setRegimeGroupe($regimeGroupe) {
        $this->regimeGroupe = $regimeGroupe;
        return $this;
    }

    /**
     * Set the rof c f e.
     *
     * @param string $rofCFE The rof c f e.
     * @return Fiscal Returns this fiscal.
     */
    public function setRofCFE($rofCFE) {
        $this->rofCFE = $rofCFE;
        return $this;
    }

    /**
     * Set the rof c v a e.
     *
     * @param string $rofCVAE The rof c v a e.
     * @return Fiscal Returns this fiscal.
     */
    public function setRofCVAE($rofCVAE) {
        $this->rofCVAE = $rofCVAE;
        return $this;
    }

    /**
     * Set the rof c v a e p.
     *
     * @param string $rofCVAEP The rof c v a e p.
     * @return Fiscal Returns this fiscal.
     */
    public function setRofCVAEP($rofCVAEP) {
        $this->rofCVAEP = $rofCVAEP;
        return $this;
    }

    /**
     * Set the rof i s.
     *
     * @param string $rofIS The rof i s.
     * @return Fiscal Returns this fiscal.
     */
    public function setRofIS($rofIS) {
        $this->rofIS = $rofIS;
        return $this;
    }

    /**
     * Set the rof r c m.
     *
     * @param string $rofRCM The rof r c m.
     * @return Fiscal Returns this fiscal.
     */
    public function setRofRCM($rofRCM) {
        $this->rofRCM = $rofRCM;
        return $this;
    }

    /**
     * Set the rof t s.
     *
     * @param string $rofTS The rof t s.
     * @return Fiscal Returns this fiscal.
     */
    public function setRofTS($rofTS) {
        $this->rofTS = $rofTS;
        return $this;
    }

    /**
     * Set the rof t v a.
     *
     * @param string $rofTVA The rof t v a.
     * @return Fiscal Returns this fiscal.
     */
    public function setRofTVA($rofTVA) {
        $this->rofTVA = $rofTVA;
        return $this;
    }

    /**
     * Set the rof tdfc group.
     *
     * @param string $rofTdfcGroup The rof tdfc group.
     * @return Fiscal Returns this fiscal.
     */
    public function setRofTdfcGroup($rofTdfcGroup) {
        $this->rofTdfcGroup = $rofTdfcGroup;
        return $this;
    }

    /**
     * Set the societe mere.
     *
     * @param boolean $societeMere The societe mere.
     * @return Fiscal Returns this fiscal.
     */
    public function setSocieteMere($societeMere) {
        $this->societeMere = $societeMere;
        return $this;
    }

    /**
     * Set the t v a etab_ b t q.
     *
     * @param string $tVAEtab_BTQ The t v a etab_ b t q.
     * @return Fiscal Returns this fiscal.
     */
    public function setTVAEtab_BTQ($tVAEtab_BTQ) {
        $this->tVAEtab_BTQ = $tVAEtab_BTQ;
        return $this;
    }

    /**
     * Set the t v a etab_ bureau distributeur.
     *
     * @param string $tVAEtab_BureauDistributeur The t v a etab_ bureau distributeur.
     * @return Fiscal Returns this fiscal.
     */
    public function setTVAEtab_BureauDistributeur($tVAEtab_BureauDistributeur) {
        $this->tVAEtab_BureauDistributeur = $tVAEtab_BureauDistributeur;
        return $this;
    }

    /**
     * Set the t v a etab_ code postal.
     *
     * @param string $tVAEtab_CodePostal The t v a etab_ code postal.
     * @return Fiscal Returns this fiscal.
     */
    public function setTVAEtab_CodePostal($tVAEtab_CodePostal) {
        $this->tVAEtab_CodePostal = $tVAEtab_CodePostal;
        return $this;
    }

    /**
     * Set the t v a etab_ complement.
     *
     * @param string $tVAEtab_Complement The t v a etab_ complement.
     * @return Fiscal Returns this fiscal.
     */
    public function setTVAEtab_Complement($tVAEtab_Complement) {
        $this->tVAEtab_Complement = $tVAEtab_Complement;
        return $this;
    }

    /**
     * Set the t v a etab_ nom r s.
     *
     * @param string $tVAEtab_NomRS The t v a etab_ nom r s.
     * @return Fiscal Returns this fiscal.
     */
    public function setTVAEtab_NomRS($tVAEtab_NomRS) {
        $this->tVAEtab_NomRS = $tVAEtab_NomRS;
        return $this;
    }

    /**
     * Set the t v a etab_ nom voie.
     *
     * @param string $tVAEtab_NomVoie The t v a etab_ nom voie.
     * @return Fiscal Returns this fiscal.
     */
    public function setTVAEtab_NomVoie($tVAEtab_NomVoie) {
        $this->tVAEtab_NomVoie = $tVAEtab_NomVoie;
        return $this;
    }

    /**
     * Set the t v a etab_ num voie.
     *
     * @param string $tVAEtab_NumVoie The t v a etab_ num voie.
     * @return Fiscal Returns this fiscal.
     */
    public function setTVAEtab_NumVoie($tVAEtab_NumVoie) {
        $this->tVAEtab_NumVoie = $tVAEtab_NumVoie;
        return $this;
    }

    /**
     * Set the t v a nom vir.
     *
     * @param string $tVANomVir The t v a nom vir.
     * @return Fiscal Returns this fiscal.
     */
    public function setTVANomVir($tVANomVir) {
        $this->tVANomVir = $tVANomVir;
        return $this;
    }

    /**
     * Set the t v a r i b vir.
     *
     * @param string $tVARIBVir The t v a r i b vir.
     * @return Fiscal Returns this fiscal.
     */
    public function setTVARIBVir($tVARIBVir) {
        $this->tVARIBVir = $tVARIBVir;
        return $this;
    }

    /**
     * Set the tresorerie.
     *
     * @param string $tresorerie The tresorerie.
     * @return Fiscal Returns this fiscal.
     */
    public function setTresorerie($tresorerie) {
        $this->tresorerie = $tresorerie;
        return $this;
    }

    /**
     * Set the tresorerie i s.
     *
     * @param string $tresorerieIS The tresorerie i s.
     * @return Fiscal Returns this fiscal.
     */
    public function setTresorerieIS($tresorerieIS) {
        $this->tresorerieIS = $tresorerieIS;
        return $this;
    }

    /**
     * Set the tva c a12 a e.
     *
     * @param string $tvaCA12AE The tva c a12 a e.
     * @return Fiscal Returns this fiscal.
     */
    public function setTvaCA12AE($tvaCA12AE) {
        $this->tvaCA12AE = $tvaCA12AE;
        return $this;
    }

    /**
     * Set the tva decaissements.
     *
     * @param boolean $tvaDecaissements The tva decaissements.
     * @return Fiscal Returns this fiscal.
     */
    public function setTvaDecaissements($tvaDecaissements) {
        $this->tvaDecaissements = $tvaDecaissements;
        return $this;
    }

    /**
     * Set the tva faite par client.
     *
     * @param boolean $tvaFaiteParClient The tva faite par client.
     * @return Fiscal Returns this fiscal.
     */
    public function setTvaFaiteParClient($tvaFaiteParClient) {
        $this->tvaFaiteParClient = $tvaFaiteParClient;
        return $this;
    }

    /**
     * Set the viseur conventionne.
     *
     * @param boolean $viseurConventionne The viseur conventionne.
     * @return Fiscal Returns this fiscal.
     */
    public function setViseurConventionne($viseurConventionne) {
        $this->viseurConventionne = $viseurConventionne;
        return $this;
    }

    /**
     * Set the viseur dt attest.
     *
     * @param DateTime $viseurDtAttest The viseur dt attest.
     * @return Fiscal Returns this fiscal.
     */
    public function setViseurDtAttest(DateTime $viseurDtAttest = null) {
        $this->viseurDtAttest = $viseurDtAttest;
        return $this;
    }

    /**
     * Set the viseur num attest.
     *
     * @param string $viseurNumAttest The viseur num attest.
     * @return Fiscal Returns this fiscal.
     */
    public function setViseurNumAttest($viseurNumAttest) {
        $this->viseurNumAttest = $viseurNumAttest;
        return $this;
    }

}
