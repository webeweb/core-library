<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Quadratus\Model\QPaie;

use DateTime;

/**
 * Attestation assedic model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QPaie
 */
class AttestationAssedic {

    /**
     * Adhesion aides.
     *
     * @var boolean
     */
    private $adhesionAides;

    /**
     * Adhesion revocable.
     *
     * @var boolean
     */
    private $adhesionRevocable;

    /**
     * Adresse1.
     *
     * @var string
     */
    private $adresse1;

    /**
     * Adresse2.
     *
     * @var string
     */
    private $adresse2;

    /**
     * Adresse3.
     *
     * @var string
     */
    private $adresse3;

    /**
     * Alsace moselle.
     *
     * @var boolean
     */
    private $alsaceMoselle;

    /**
     * Auto assurance.
     *
     * @var boolean
     */
    private $autoAssurance;

    /**
     * Caisse indemcp.
     *
     * @var string
     */
    private $caisseIndemcp;

    /**
     * Categ emploi autre.
     *
     * @var string
     */
    private $categEmploiAutre;

    /**
     * Chomage total.
     *
     * @var boolean
     */
    private $chomageTotal;

    /**
     * Code ana.
     *
     * @var string
     */
    private $codeAna;

    /**
     * Code etablissement.
     *
     * @var int
     */
    private $codeEtablissement;

    /**
     * Code motif rupture.
     *
     * @var string
     */
    private $codeMotifRupture;

    /**
     * Code n a f2008.
     *
     * @var string
     */
    private $codeNAF2008;

    /**
     * Code p.
     *
     * @var string
     */
    private $codeP;

    /**
     * Code retraite a g i r c.
     *
     * @var string
     */
    private $codeRetraiteAGIRC;

    /**
     * Code retraite a r r c o.
     *
     * @var string
     */
    private $codeRetraiteARRCO;

    /**
     * Code retraite autre.
     *
     * @var string
     */
    private $codeRetraiteAutre;

    /**
     * Contrat part autre.
     *
     * @var string
     */
    private $contratPartAutre;

    /**
     * Contrat particulier.
     *
     * @var string
     */
    private $contratParticulier;

    /**
     * Convention f n e.
     *
     * @var boolean
     */
    private $conventionFNE;

    /**
     * Date adhesion.
     *
     * @var DateTime
     */
    private $dateAdhesion;

    /**
     * Date convention f n e.
     *
     * @var DateTime
     */
    private $dateConventionFNE;

    /**
     * Date naiss.
     *
     * @var DateTime
     */
    private $dateNaiss;

    /**
     * Date notification.
     *
     * @var DateTime
     */
    private $dateNotification;

    /**
     * Date paie.
     *
     * @var DateTime
     */
    private $datePaie;

    /**
     * Date paie2.
     *
     * @var DateTime
     */
    private $datePaie2;

    /**
     * Date plan.
     *
     * @var DateTime
     */
    private $datePlan;

    /**
     * Demande d d t e deb.
     *
     * @var DateTime
     */
    private $demandeDDTEDeb;

    /**
     * Demande d d t e fin.
     *
     * @var DateTime
     */
    private $demandeDDTEFin;

    /**
     * Demande d d t e reprise.
     *
     * @var DateTime
     */
    private $demandeDDTEReprise;

    /**
     * Dept.
     *
     * @var string
     */
    private $dept;

    /**
     * Dern jour trav.
     *
     * @var DateTime
     */
    private $dernJourTrav;

    /**
     * Dern lieu travail.
     *
     * @var string
     */
    private $dernLieuTravail;

    /**
     * Dernier emploi.
     *
     * @var string
     */
    private $dernierEmploi;

    /**
     * Duree emploi1 deb.
     *
     * @var DateTime
     */
    private $dureeEmploi1Deb;

    /**
     * Duree emploi1 fin.
     *
     * @var DateTime
     */
    private $dureeEmploi1Fin;

    /**
     * Duree emploi2 deb.
     *
     * @var DateTime
     */
    private $dureeEmploi2Deb;

    /**
     * Duree emploi2 fin.
     *
     * @var DateTime
     */
    private $dureeEmploi2Fin;

    /**
     * Effectif.
     *
     * @var string
     */
    private $effectif;

    /**
     * Effectif val.
     *
     * @var float
     */
    private $effectifVal;

    /**
     * Emploi collectivite.
     *
     * @var string
     */
    private $emploiCollectivite;

    /**
     * Etbl adresse1.
     *
     * @var string
     */
    private $etblAdresse1;

    /**
     * Etbl adresse2.
     *
     * @var string
     */
    private $etblAdresse2;

    /**
     * Etbl adresse3.
     *
     * @var string
     */
    private $etblAdresse3;

    /**
     * Etbl raison sociale.
     *
     * @var string
     */
    private $etblRaisonSociale;

    /**
     * Etbl tel.
     *
     * @var string
     */
    private $etblTel;

    /**
     * F n g s a percevoir.
     *
     * @var boolean
     */
    private $fNGSAPercevoir;

    /**
     * F n g s a percevoir creance.
     *
     * @var string
     */
    private $fNGSAPercevoirCreance;

    /**
     * F n g s non a percevoir motif.
     *
     * @var string
     */
    private $fNGSNonAPercevoirMotif;

    /**
     * F n g s non percue motif.
     *
     * @var string
     */
    private $fNGSNonPercueMotif;

    /**
     * F n g s percue.
     *
     * @var boolean
     */
    private $fNGSPercue;

    /**
     * F n g s percue creance.
     *
     * @var string
     */
    private $fNGSPercueCreance;

    /**
     * Heures trav.
     *
     * @var float
     */
    private $heuresTrav;

    /**
     * Heures trav2.
     *
     * @var float
     */
    private $heuresTrav2;

    /**
     * Horaire annuel etbl.
     *
     * @var float
     */
    private $horaireAnnuelEtbl;

    /**
     * Horaire annuel sal.
     *
     * @var float
     */
    private $horaireAnnuelSal;

    /**
     * Horaire hebdo etbl.
     *
     * @var float
     */
    private $horaireHebdoEtbl;

    /**
     * Horaire hebdo sal.
     *
     * @var float
     */
    private $horaireHebdoSal;

    /**
     * Indemn autres.
     *
     * @var float
     */
    private $indemnAutres;

    /**
     * Indemn clientele.
     *
     * @var float
     */
    private $indemnClientele;

    /**
     * Indemn compens c p.
     *
     * @var float
     */
    private $indemnCompensCP;

    /**
     * Indemn compens preavis.
     *
     * @var float
     */
    private $indemnCompensPreavis;

    /**
     * Indemn depart retraite.
     *
     * @var float
     */
    private $indemnDepartRetraite;

    /**
     * Indemn due sinistre.
     *
     * @var float
     */
    private $indemnDueSinistre;

    /**
     * Indemn fin c d d.
     *
     * @var float
     */
    private $indemnFinCDD;

    /**
     * Indemn fin c n e.
     *
     * @var float
     */
    private $indemnFinCNE;

    /**
     * Indemn fin mission.
     *
     * @var float
     */
    private $indemnFinMission;

    /**
     * Indemn journalistes.
     *
     * @var float
     */
    private $indemnJournalistes;

    /**
     * Indemn licens.
     *
     * @var float
     */
    private $indemnLicens;

    /**
     * Indemn navig.
     *
     * @var float
     */
    private $indemnNavig;

    /**
     * Indemn rupt conv.
     *
     * @var float
     */
    private $indemnRuptConv;

    /**
     * Indemn speci licens.
     *
     * @var float
     */
    private $indemnSpeciLicens;

    /**
     * Indemn specif licens.
     *
     * @var float
     */
    private $indemnSpecifLicens;

    /**
     * Indemn suppl licens.
     *
     * @var float
     */
    private $indemnSupplLicens;

    /**
     * Indemn versee apprenti.
     *
     * @var float
     */
    private $indemnVerseeApprenti;

    /**
     * Licencie55ans.
     *
     * @var boolean
     */
    private $licencie55ans;

    /**
     * Licencie plan social.
     *
     * @var boolean
     */
    private $licenciePlanSocial;

    /**
     * Lien document.
     *
     * @var string
     */
    private $lienDocument;

    /**
     * Lien parente.
     *
     * @var string
     */
    private $lienParente;

    /**
     * Motif difference.
     *
     * @var string
     */
    private $motifDifference;

    /**
     * Motif non paie i c c p.
     *
     * @var string
     */
    private $motifNonPaieICCP;

    /**
     * Motif non paiement.
     *
     * @var string
     */
    private $motifNonPaiement;

    /**
     * Motif rupture.
     *
     * @var string
     */
    private $motifRupture;

    /**
     * Mt idemn conv col.
     *
     * @var float
     */
    private $mtIdemnConvCol;

    /**
     * Mt idemn transac.
     *
     * @var float
     */
    private $mtIdemnTransac;

    /**
     * N a f.
     *
     * @var string
     */
    private $nAF;

    /**
     * N i r.
     *
     * @var string
     */
    private $nIR;

    /**
     * Nature contrat.
     *
     * @var string
     */
    private $natureContrat;

    /**
     * Nb jours ouvrables.
     *
     * @var float
     */
    private $nbJoursOuvrables;

    /**
     * Niveau qualif.
     *
     * @var string
     */
    private $niveauQualif;

    /**
     * Nom ass chom.
     *
     * @var string
     */
    private $nomAssChom;

    /**
     * Nom employe.
     *
     * @var string
     */
    private $nomEmploye;

    /**
     * Nom naissance.
     *
     * @var string
     */
    private $nomNaissance;

    /**
     * Nom special secu.
     *
     * @var string
     */
    private $nomSpecialSecu;

    /**
     * Nouvelle attest.
     *
     * @var boolean
     */
    private $nouvelleAttest;

    /**
     * Num ass chom.
     *
     * @var string
     */
    private $numAssChom;

    /**
     * Num convention f n e.
     *
     * @var string
     */
    private $numConventionFNE;

    /**
     * Num convention gestion.
     *
     * @var string
     */
    private $numConventionGestion;

    /**
     * Num special secu.
     *
     * @var string
     */
    private $numSpecialSecu;

    /**
     * Numero attestation.
     *
     * @var string
     */
    private $numeroAttestation;

    /**
     * Numero employe.
     *
     * @var string
     */
    private $numeroEmploye;

    /**
     * Organisme ass chom.
     *
     * @var string
     */
    private $organismeAssChom;

    /**
     * Preavis effectue.
     *
     * @var boolean
     */
    private $preavisEffectue;

    /**
     * Preavis effectue deb.
     *
     * @var DateTime
     */
    private $preavisEffectueDeb;

    /**
     * Preavis effectue fin.
     *
     * @var DateTime
     */
    private $preavisEffectueFin;

    /**
     * Preavis effectue paye.
     *
     * @var boolean
     */
    private $preavisEffectuePaye;

    /**
     * Preavis non effectue.
     *
     * @var boolean
     */
    private $preavisNonEffectue;

    /**
     * Preavis non effectue deb.
     *
     * @var DateTime
     */
    private $preavisNonEffectueDeb;

    /**
     * Preavis non effectue fin.
     *
     * @var DateTime
     */
    private $preavisNonEffectueFin;

    /**
     * Preavis non effectue paye.
     *
     * @var boolean
     */
    private $preavisNonEffectuePaye;

    /**
     * Precompte stc.
     *
     * @var float
     */
    private $precompteStc;

    /**
     * Prenom.
     *
     * @var string
     */
    private $prenom;

    /**
     * Qualite emploi.
     *
     * @var string
     */
    private $qualiteEmploi;

    /**
     * Reclassement.
     *
     * @var boolean
     */
    private $reclassement;

    /**
     * Refus salarie.
     *
     * @var boolean
     */
    private $refusSalarie;

    /**
     * Retraite a g i r c.
     *
     * @var string
     */
    private $retraiteAGIRC;

    /**
     * Retraite a g i r c compl.
     *
     * @var string
     */
    private $retraiteAGIRCCompl;

    /**
     * Retraite a r r c o.
     *
     * @var string
     */
    private $retraiteARRCO;

    /**
     * Retraite a r r c o compl.
     *
     * @var string
     */
    private $retraiteARRCOCompl;

    /**
     * Retraite autre.
     *
     * @var string
     */
    private $retraiteAutre;

    /**
     * Retraite autre compl.
     *
     * @var string
     */
    private $retraiteAutreCompl;

    /**
     * S i r e t.
     *
     * @var string
     */
    private $sIRET;

    /**
     * Salairebrut.
     *
     * @var float
     */
    private $salairebrut;

    /**
     * Signature code qualite.
     *
     * @var string
     */
    private $signatureCodeQualite;

    /**
     * Signature contact.
     *
     * @var string
     */
    private $signatureContact;

    /**
     * Signature date.
     *
     * @var DateTime
     */
    private $signatureDate;

    /**
     * Signature nom.
     *
     * @var string
     */
    private $signatureNom;

    /**
     * Signature prenom.
     *
     * @var string
     */
    private $signaturePrenom;

    /**
     * Signature qualite.
     *
     * @var string
     */
    private $signatureQualite;

    /**
     * Signature tel.
     *
     * @var string
     */
    private $signatureTel;

    /**
     * Signature ville.
     *
     * @var string
     */
    private $signatureVille;

    /**
     * Solde tout compte.
     *
     * @var string
     */
    private $soldeToutCompte;

    /**
     * Sommes periode deb.
     *
     * @var DateTime
     */
    private $sommesPeriodeDeb;

    /**
     * Sommes periode deb2.
     *
     * @var DateTime
     */
    private $sommesPeriodeDeb2;

    /**
     * Sommes periode fin.
     *
     * @var DateTime
     */
    private $sommesPeriodeFin;

    /**
     * Sommes periode fin2.
     *
     * @var DateTime
     */
    private $sommesPeriodeFin2;

    /**
     * Special secu.
     *
     * @var string
     */
    private $specialSecu;

    /**
     * Statut.
     *
     * @var string
     */
    private $statut;

    /**
     * Statut cadre.
     *
     * @var boolean
     */
    private $statutCadre;

    /**
     * Statut part autre.
     *
     * @var string
     */
    private $statutPartAutre;

    /**
     * Titre.
     *
     * @var string
     */
    private $titre;

    /**
     * Total sommes.
     *
     * @var float
     */
    private $totalSommes;

    /**
     * Transaction en cours.
     *
     * @var boolean
     */
    private $transactionEnCours;

    /**
     * Type assedic.
     *
     * @var string
     */
    private $typeAssedic;

    /**
     * Type diff horaire.
     *
     * @var string
     */
    private $typeDiffHoraire;

    /**
     * Type societe.
     *
     * @var string
     */
    private $typeSociete;

    /**
     * U r s s a f.
     *
     * @var string
     */
    private $uRSSAF;

    /**
     * Validite convention f n e.
     *
     * @var DateTime
     */
    private $validiteConventionFNE;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the adhesion aides.
     *
     * @return boolean Returns the adhesion aides.
     */
    public function getAdhesionAides() {
        return $this->adhesionAides;
    }

    /**
     * Get the adhesion revocable.
     *
     * @return boolean Returns the adhesion revocable.
     */
    public function getAdhesionRevocable() {
        return $this->adhesionRevocable;
    }

    /**
     * Get the adresse1.
     *
     * @return string Returns the adresse1.
     */
    public function getAdresse1() {
        return $this->adresse1;
    }

    /**
     * Get the adresse2.
     *
     * @return string Returns the adresse2.
     */
    public function getAdresse2() {
        return $this->adresse2;
    }

    /**
     * Get the adresse3.
     *
     * @return string Returns the adresse3.
     */
    public function getAdresse3() {
        return $this->adresse3;
    }

    /**
     * Get the alsace moselle.
     *
     * @return boolean Returns the alsace moselle.
     */
    public function getAlsaceMoselle() {
        return $this->alsaceMoselle;
    }

    /**
     * Get the auto assurance.
     *
     * @return boolean Returns the auto assurance.
     */
    public function getAutoAssurance() {
        return $this->autoAssurance;
    }

    /**
     * Get the caisse indemcp.
     *
     * @return string Returns the caisse indemcp.
     */
    public function getCaisseIndemcp() {
        return $this->caisseIndemcp;
    }

    /**
     * Get the categ emploi autre.
     *
     * @return string Returns the categ emploi autre.
     */
    public function getCategEmploiAutre() {
        return $this->categEmploiAutre;
    }

    /**
     * Get the chomage total.
     *
     * @return boolean Returns the chomage total.
     */
    public function getChomageTotal() {
        return $this->chomageTotal;
    }

    /**
     * Get the code ana.
     *
     * @return string Returns the code ana.
     */
    public function getCodeAna() {
        return $this->codeAna;
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
     * Get the code motif rupture.
     *
     * @return string Returns the code motif rupture.
     */
    public function getCodeMotifRupture() {
        return $this->codeMotifRupture;
    }

    /**
     * Get the code n a f2008.
     *
     * @return string Returns the code n a f2008.
     */
    public function getCodeNAF2008() {
        return $this->codeNAF2008;
    }

    /**
     * Get the code p.
     *
     * @return string Returns the code p.
     */
    public function getCodeP() {
        return $this->codeP;
    }

    /**
     * Get the code retraite a g i r c.
     *
     * @return string Returns the code retraite a g i r c.
     */
    public function getCodeRetraiteAGIRC() {
        return $this->codeRetraiteAGIRC;
    }

    /**
     * Get the code retraite a r r c o.
     *
     * @return string Returns the code retraite a r r c o.
     */
    public function getCodeRetraiteARRCO() {
        return $this->codeRetraiteARRCO;
    }

    /**
     * Get the code retraite autre.
     *
     * @return string Returns the code retraite autre.
     */
    public function getCodeRetraiteAutre() {
        return $this->codeRetraiteAutre;
    }

    /**
     * Get the contrat part autre.
     *
     * @return string Returns the contrat part autre.
     */
    public function getContratPartAutre() {
        return $this->contratPartAutre;
    }

    /**
     * Get the contrat particulier.
     *
     * @return string Returns the contrat particulier.
     */
    public function getContratParticulier() {
        return $this->contratParticulier;
    }

    /**
     * Get the convention f n e.
     *
     * @return boolean Returns the convention f n e.
     */
    public function getConventionFNE() {
        return $this->conventionFNE;
    }

    /**
     * Get the date adhesion.
     *
     * @return DateTime Returns the date adhesion.
     */
    public function getDateAdhesion() {
        return $this->dateAdhesion;
    }

    /**
     * Get the date convention f n e.
     *
     * @return DateTime Returns the date convention f n e.
     */
    public function getDateConventionFNE() {
        return $this->dateConventionFNE;
    }

    /**
     * Get the date naiss.
     *
     * @return DateTime Returns the date naiss.
     */
    public function getDateNaiss() {
        return $this->dateNaiss;
    }

    /**
     * Get the date notification.
     *
     * @return DateTime Returns the date notification.
     */
    public function getDateNotification() {
        return $this->dateNotification;
    }

    /**
     * Get the date paie.
     *
     * @return DateTime Returns the date paie.
     */
    public function getDatePaie() {
        return $this->datePaie;
    }

    /**
     * Get the date paie2.
     *
     * @return DateTime Returns the date paie2.
     */
    public function getDatePaie2() {
        return $this->datePaie2;
    }

    /**
     * Get the date plan.
     *
     * @return DateTime Returns the date plan.
     */
    public function getDatePlan() {
        return $this->datePlan;
    }

    /**
     * Get the demande d d t e deb.
     *
     * @return DateTime Returns the demande d d t e deb.
     */
    public function getDemandeDDTEDeb() {
        return $this->demandeDDTEDeb;
    }

    /**
     * Get the demande d d t e fin.
     *
     * @return DateTime Returns the demande d d t e fin.
     */
    public function getDemandeDDTEFin() {
        return $this->demandeDDTEFin;
    }

    /**
     * Get the demande d d t e reprise.
     *
     * @return DateTime Returns the demande d d t e reprise.
     */
    public function getDemandeDDTEReprise() {
        return $this->demandeDDTEReprise;
    }

    /**
     * Get the dept.
     *
     * @return string Returns the dept.
     */
    public function getDept() {
        return $this->dept;
    }

    /**
     * Get the dern jour trav.
     *
     * @return DateTime Returns the dern jour trav.
     */
    public function getDernJourTrav() {
        return $this->dernJourTrav;
    }

    /**
     * Get the dern lieu travail.
     *
     * @return string Returns the dern lieu travail.
     */
    public function getDernLieuTravail() {
        return $this->dernLieuTravail;
    }

    /**
     * Get the dernier emploi.
     *
     * @return string Returns the dernier emploi.
     */
    public function getDernierEmploi() {
        return $this->dernierEmploi;
    }

    /**
     * Get the duree emploi1 deb.
     *
     * @return DateTime Returns the duree emploi1 deb.
     */
    public function getDureeEmploi1Deb() {
        return $this->dureeEmploi1Deb;
    }

    /**
     * Get the duree emploi1 fin.
     *
     * @return DateTime Returns the duree emploi1 fin.
     */
    public function getDureeEmploi1Fin() {
        return $this->dureeEmploi1Fin;
    }

    /**
     * Get the duree emploi2 deb.
     *
     * @return DateTime Returns the duree emploi2 deb.
     */
    public function getDureeEmploi2Deb() {
        return $this->dureeEmploi2Deb;
    }

    /**
     * Get the duree emploi2 fin.
     *
     * @return DateTime Returns the duree emploi2 fin.
     */
    public function getDureeEmploi2Fin() {
        return $this->dureeEmploi2Fin;
    }

    /**
     * Get the effectif.
     *
     * @return string Returns the effectif.
     */
    public function getEffectif() {
        return $this->effectif;
    }

    /**
     * Get the effectif val.
     *
     * @return float Returns the effectif val.
     */
    public function getEffectifVal() {
        return $this->effectifVal;
    }

    /**
     * Get the emploi collectivite.
     *
     * @return string Returns the emploi collectivite.
     */
    public function getEmploiCollectivite() {
        return $this->emploiCollectivite;
    }

    /**
     * Get the etbl adresse1.
     *
     * @return string Returns the etbl adresse1.
     */
    public function getEtblAdresse1() {
        return $this->etblAdresse1;
    }

    /**
     * Get the etbl adresse2.
     *
     * @return string Returns the etbl adresse2.
     */
    public function getEtblAdresse2() {
        return $this->etblAdresse2;
    }

    /**
     * Get the etbl adresse3.
     *
     * @return string Returns the etbl adresse3.
     */
    public function getEtblAdresse3() {
        return $this->etblAdresse3;
    }

    /**
     * Get the etbl raison sociale.
     *
     * @return string Returns the etbl raison sociale.
     */
    public function getEtblRaisonSociale() {
        return $this->etblRaisonSociale;
    }

    /**
     * Get the etbl tel.
     *
     * @return string Returns the etbl tel.
     */
    public function getEtblTel() {
        return $this->etblTel;
    }

    /**
     * Get the f n g s a percevoir.
     *
     * @return boolean Returns the f n g s a percevoir.
     */
    public function getFNGSAPercevoir() {
        return $this->fNGSAPercevoir;
    }

    /**
     * Get the f n g s a percevoir creance.
     *
     * @return string Returns the f n g s a percevoir creance.
     */
    public function getFNGSAPercevoirCreance() {
        return $this->fNGSAPercevoirCreance;
    }

    /**
     * Get the f n g s non a percevoir motif.
     *
     * @return string Returns the f n g s non a percevoir motif.
     */
    public function getFNGSNonAPercevoirMotif() {
        return $this->fNGSNonAPercevoirMotif;
    }

    /**
     * Get the f n g s non percue motif.
     *
     * @return string Returns the f n g s non percue motif.
     */
    public function getFNGSNonPercueMotif() {
        return $this->fNGSNonPercueMotif;
    }

    /**
     * Get the f n g s percue.
     *
     * @return boolean Returns the f n g s percue.
     */
    public function getFNGSPercue() {
        return $this->fNGSPercue;
    }

    /**
     * Get the f n g s percue creance.
     *
     * @return string Returns the f n g s percue creance.
     */
    public function getFNGSPercueCreance() {
        return $this->fNGSPercueCreance;
    }

    /**
     * Get the heures trav.
     *
     * @return float Returns the heures trav.
     */
    public function getHeuresTrav() {
        return $this->heuresTrav;
    }

    /**
     * Get the heures trav2.
     *
     * @return float Returns the heures trav2.
     */
    public function getHeuresTrav2() {
        return $this->heuresTrav2;
    }

    /**
     * Get the horaire annuel etbl.
     *
     * @return float Returns the horaire annuel etbl.
     */
    public function getHoraireAnnuelEtbl() {
        return $this->horaireAnnuelEtbl;
    }

    /**
     * Get the horaire annuel sal.
     *
     * @return float Returns the horaire annuel sal.
     */
    public function getHoraireAnnuelSal() {
        return $this->horaireAnnuelSal;
    }

    /**
     * Get the horaire hebdo etbl.
     *
     * @return float Returns the horaire hebdo etbl.
     */
    public function getHoraireHebdoEtbl() {
        return $this->horaireHebdoEtbl;
    }

    /**
     * Get the horaire hebdo sal.
     *
     * @return float Returns the horaire hebdo sal.
     */
    public function getHoraireHebdoSal() {
        return $this->horaireHebdoSal;
    }

    /**
     * Get the indemn autres.
     *
     * @return float Returns the indemn autres.
     */
    public function getIndemnAutres() {
        return $this->indemnAutres;
    }

    /**
     * Get the indemn clientele.
     *
     * @return float Returns the indemn clientele.
     */
    public function getIndemnClientele() {
        return $this->indemnClientele;
    }

    /**
     * Get the indemn compens c p.
     *
     * @return float Returns the indemn compens c p.
     */
    public function getIndemnCompensCP() {
        return $this->indemnCompensCP;
    }

    /**
     * Get the indemn compens preavis.
     *
     * @return float Returns the indemn compens preavis.
     */
    public function getIndemnCompensPreavis() {
        return $this->indemnCompensPreavis;
    }

    /**
     * Get the indemn depart retraite.
     *
     * @return float Returns the indemn depart retraite.
     */
    public function getIndemnDepartRetraite() {
        return $this->indemnDepartRetraite;
    }

    /**
     * Get the indemn due sinistre.
     *
     * @return float Returns the indemn due sinistre.
     */
    public function getIndemnDueSinistre() {
        return $this->indemnDueSinistre;
    }

    /**
     * Get the indemn fin c d d.
     *
     * @return float Returns the indemn fin c d d.
     */
    public function getIndemnFinCDD() {
        return $this->indemnFinCDD;
    }

    /**
     * Get the indemn fin c n e.
     *
     * @return float Returns the indemn fin c n e.
     */
    public function getIndemnFinCNE() {
        return $this->indemnFinCNE;
    }

    /**
     * Get the indemn fin mission.
     *
     * @return float Returns the indemn fin mission.
     */
    public function getIndemnFinMission() {
        return $this->indemnFinMission;
    }

    /**
     * Get the indemn journalistes.
     *
     * @return float Returns the indemn journalistes.
     */
    public function getIndemnJournalistes() {
        return $this->indemnJournalistes;
    }

    /**
     * Get the indemn licens.
     *
     * @return float Returns the indemn licens.
     */
    public function getIndemnLicens() {
        return $this->indemnLicens;
    }

    /**
     * Get the indemn navig.
     *
     * @return float Returns the indemn navig.
     */
    public function getIndemnNavig() {
        return $this->indemnNavig;
    }

    /**
     * Get the indemn rupt conv.
     *
     * @return float Returns the indemn rupt conv.
     */
    public function getIndemnRuptConv() {
        return $this->indemnRuptConv;
    }

    /**
     * Get the indemn speci licens.
     *
     * @return float Returns the indemn speci licens.
     */
    public function getIndemnSpeciLicens() {
        return $this->indemnSpeciLicens;
    }

    /**
     * Get the indemn specif licens.
     *
     * @return float Returns the indemn specif licens.
     */
    public function getIndemnSpecifLicens() {
        return $this->indemnSpecifLicens;
    }

    /**
     * Get the indemn suppl licens.
     *
     * @return float Returns the indemn suppl licens.
     */
    public function getIndemnSupplLicens() {
        return $this->indemnSupplLicens;
    }

    /**
     * Get the indemn versee apprenti.
     *
     * @return float Returns the indemn versee apprenti.
     */
    public function getIndemnVerseeApprenti() {
        return $this->indemnVerseeApprenti;
    }

    /**
     * Get the licencie55ans.
     *
     * @return boolean Returns the licencie55ans.
     */
    public function getLicencie55ans() {
        return $this->licencie55ans;
    }

    /**
     * Get the licencie plan social.
     *
     * @return boolean Returns the licencie plan social.
     */
    public function getLicenciePlanSocial() {
        return $this->licenciePlanSocial;
    }

    /**
     * Get the lien document.
     *
     * @return string Returns the lien document.
     */
    public function getLienDocument() {
        return $this->lienDocument;
    }

    /**
     * Get the lien parente.
     *
     * @return string Returns the lien parente.
     */
    public function getLienParente() {
        return $this->lienParente;
    }

    /**
     * Get the motif difference.
     *
     * @return string Returns the motif difference.
     */
    public function getMotifDifference() {
        return $this->motifDifference;
    }

    /**
     * Get the motif non paie i c c p.
     *
     * @return string Returns the motif non paie i c c p.
     */
    public function getMotifNonPaieICCP() {
        return $this->motifNonPaieICCP;
    }

    /**
     * Get the motif non paiement.
     *
     * @return string Returns the motif non paiement.
     */
    public function getMotifNonPaiement() {
        return $this->motifNonPaiement;
    }

    /**
     * Get the motif rupture.
     *
     * @return string Returns the motif rupture.
     */
    public function getMotifRupture() {
        return $this->motifRupture;
    }

    /**
     * Get the mt idemn conv col.
     *
     * @return float Returns the mt idemn conv col.
     */
    public function getMtIdemnConvCol() {
        return $this->mtIdemnConvCol;
    }

    /**
     * Get the mt idemn transac.
     *
     * @return float Returns the mt idemn transac.
     */
    public function getMtIdemnTransac() {
        return $this->mtIdemnTransac;
    }

    /**
     * Get the n a f.
     *
     * @return string Returns the n a f.
     */
    public function getNAF() {
        return $this->nAF;
    }

    /**
     * Get the n i r.
     *
     * @return string Returns the n i r.
     */
    public function getNIR() {
        return $this->nIR;
    }

    /**
     * Get the nature contrat.
     *
     * @return string Returns the nature contrat.
     */
    public function getNatureContrat() {
        return $this->natureContrat;
    }

    /**
     * Get the nb jours ouvrables.
     *
     * @return float Returns the nb jours ouvrables.
     */
    public function getNbJoursOuvrables() {
        return $this->nbJoursOuvrables;
    }

    /**
     * Get the niveau qualif.
     *
     * @return string Returns the niveau qualif.
     */
    public function getNiveauQualif() {
        return $this->niveauQualif;
    }

    /**
     * Get the nom ass chom.
     *
     * @return string Returns the nom ass chom.
     */
    public function getNomAssChom() {
        return $this->nomAssChom;
    }

    /**
     * Get the nom employe.
     *
     * @return string Returns the nom employe.
     */
    public function getNomEmploye() {
        return $this->nomEmploye;
    }

    /**
     * Get the nom naissance.
     *
     * @return string Returns the nom naissance.
     */
    public function getNomNaissance() {
        return $this->nomNaissance;
    }

    /**
     * Get the nom special secu.
     *
     * @return string Returns the nom special secu.
     */
    public function getNomSpecialSecu() {
        return $this->nomSpecialSecu;
    }

    /**
     * Get the nouvelle attest.
     *
     * @return boolean Returns the nouvelle attest.
     */
    public function getNouvelleAttest() {
        return $this->nouvelleAttest;
    }

    /**
     * Get the num ass chom.
     *
     * @return string Returns the num ass chom.
     */
    public function getNumAssChom() {
        return $this->numAssChom;
    }

    /**
     * Get the num convention f n e.
     *
     * @return string Returns the num convention f n e.
     */
    public function getNumConventionFNE() {
        return $this->numConventionFNE;
    }

    /**
     * Get the num convention gestion.
     *
     * @return string Returns the num convention gestion.
     */
    public function getNumConventionGestion() {
        return $this->numConventionGestion;
    }

    /**
     * Get the num special secu.
     *
     * @return string Returns the num special secu.
     */
    public function getNumSpecialSecu() {
        return $this->numSpecialSecu;
    }

    /**
     * Get the numero attestation.
     *
     * @return string Returns the numero attestation.
     */
    public function getNumeroAttestation() {
        return $this->numeroAttestation;
    }

    /**
     * Get the numero employe.
     *
     * @return string Returns the numero employe.
     */
    public function getNumeroEmploye() {
        return $this->numeroEmploye;
    }

    /**
     * Get the organisme ass chom.
     *
     * @return string Returns the organisme ass chom.
     */
    public function getOrganismeAssChom() {
        return $this->organismeAssChom;
    }

    /**
     * Get the preavis effectue.
     *
     * @return boolean Returns the preavis effectue.
     */
    public function getPreavisEffectue() {
        return $this->preavisEffectue;
    }

    /**
     * Get the preavis effectue deb.
     *
     * @return DateTime Returns the preavis effectue deb.
     */
    public function getPreavisEffectueDeb() {
        return $this->preavisEffectueDeb;
    }

    /**
     * Get the preavis effectue fin.
     *
     * @return DateTime Returns the preavis effectue fin.
     */
    public function getPreavisEffectueFin() {
        return $this->preavisEffectueFin;
    }

    /**
     * Get the preavis effectue paye.
     *
     * @return boolean Returns the preavis effectue paye.
     */
    public function getPreavisEffectuePaye() {
        return $this->preavisEffectuePaye;
    }

    /**
     * Get the preavis non effectue.
     *
     * @return boolean Returns the preavis non effectue.
     */
    public function getPreavisNonEffectue() {
        return $this->preavisNonEffectue;
    }

    /**
     * Get the preavis non effectue deb.
     *
     * @return DateTime Returns the preavis non effectue deb.
     */
    public function getPreavisNonEffectueDeb() {
        return $this->preavisNonEffectueDeb;
    }

    /**
     * Get the preavis non effectue fin.
     *
     * @return DateTime Returns the preavis non effectue fin.
     */
    public function getPreavisNonEffectueFin() {
        return $this->preavisNonEffectueFin;
    }

    /**
     * Get the preavis non effectue paye.
     *
     * @return boolean Returns the preavis non effectue paye.
     */
    public function getPreavisNonEffectuePaye() {
        return $this->preavisNonEffectuePaye;
    }

    /**
     * Get the precompte stc.
     *
     * @return float Returns the precompte stc.
     */
    public function getPrecompteStc() {
        return $this->precompteStc;
    }

    /**
     * Get the prenom.
     *
     * @return string Returns the prenom.
     */
    public function getPrenom() {
        return $this->prenom;
    }

    /**
     * Get the qualite emploi.
     *
     * @return string Returns the qualite emploi.
     */
    public function getQualiteEmploi() {
        return $this->qualiteEmploi;
    }

    /**
     * Get the reclassement.
     *
     * @return boolean Returns the reclassement.
     */
    public function getReclassement() {
        return $this->reclassement;
    }

    /**
     * Get the refus salarie.
     *
     * @return boolean Returns the refus salarie.
     */
    public function getRefusSalarie() {
        return $this->refusSalarie;
    }

    /**
     * Get the retraite a g i r c.
     *
     * @return string Returns the retraite a g i r c.
     */
    public function getRetraiteAGIRC() {
        return $this->retraiteAGIRC;
    }

    /**
     * Get the retraite a g i r c compl.
     *
     * @return string Returns the retraite a g i r c compl.
     */
    public function getRetraiteAGIRCCompl() {
        return $this->retraiteAGIRCCompl;
    }

    /**
     * Get the retraite a r r c o.
     *
     * @return string Returns the retraite a r r c o.
     */
    public function getRetraiteARRCO() {
        return $this->retraiteARRCO;
    }

    /**
     * Get the retraite a r r c o compl.
     *
     * @return string Returns the retraite a r r c o compl.
     */
    public function getRetraiteARRCOCompl() {
        return $this->retraiteARRCOCompl;
    }

    /**
     * Get the retraite autre.
     *
     * @return string Returns the retraite autre.
     */
    public function getRetraiteAutre() {
        return $this->retraiteAutre;
    }

    /**
     * Get the retraite autre compl.
     *
     * @return string Returns the retraite autre compl.
     */
    public function getRetraiteAutreCompl() {
        return $this->retraiteAutreCompl;
    }

    /**
     * Get the s i r e t.
     *
     * @return string Returns the s i r e t.
     */
    public function getSIRET() {
        return $this->sIRET;
    }

    /**
     * Get the salairebrut.
     *
     * @return float Returns the salairebrut.
     */
    public function getSalairebrut() {
        return $this->salairebrut;
    }

    /**
     * Get the signature code qualite.
     *
     * @return string Returns the signature code qualite.
     */
    public function getSignatureCodeQualite() {
        return $this->signatureCodeQualite;
    }

    /**
     * Get the signature contact.
     *
     * @return string Returns the signature contact.
     */
    public function getSignatureContact() {
        return $this->signatureContact;
    }

    /**
     * Get the signature date.
     *
     * @return DateTime Returns the signature date.
     */
    public function getSignatureDate() {
        return $this->signatureDate;
    }

    /**
     * Get the signature nom.
     *
     * @return string Returns the signature nom.
     */
    public function getSignatureNom() {
        return $this->signatureNom;
    }

    /**
     * Get the signature prenom.
     *
     * @return string Returns the signature prenom.
     */
    public function getSignaturePrenom() {
        return $this->signaturePrenom;
    }

    /**
     * Get the signature qualite.
     *
     * @return string Returns the signature qualite.
     */
    public function getSignatureQualite() {
        return $this->signatureQualite;
    }

    /**
     * Get the signature tel.
     *
     * @return string Returns the signature tel.
     */
    public function getSignatureTel() {
        return $this->signatureTel;
    }

    /**
     * Get the signature ville.
     *
     * @return string Returns the signature ville.
     */
    public function getSignatureVille() {
        return $this->signatureVille;
    }

    /**
     * Get the solde tout compte.
     *
     * @return string Returns the solde tout compte.
     */
    public function getSoldeToutCompte() {
        return $this->soldeToutCompte;
    }

    /**
     * Get the sommes periode deb.
     *
     * @return DateTime Returns the sommes periode deb.
     */
    public function getSommesPeriodeDeb() {
        return $this->sommesPeriodeDeb;
    }

    /**
     * Get the sommes periode deb2.
     *
     * @return DateTime Returns the sommes periode deb2.
     */
    public function getSommesPeriodeDeb2() {
        return $this->sommesPeriodeDeb2;
    }

    /**
     * Get the sommes periode fin.
     *
     * @return DateTime Returns the sommes periode fin.
     */
    public function getSommesPeriodeFin() {
        return $this->sommesPeriodeFin;
    }

    /**
     * Get the sommes periode fin2.
     *
     * @return DateTime Returns the sommes periode fin2.
     */
    public function getSommesPeriodeFin2() {
        return $this->sommesPeriodeFin2;
    }

    /**
     * Get the special secu.
     *
     * @return string Returns the special secu.
     */
    public function getSpecialSecu() {
        return $this->specialSecu;
    }

    /**
     * Get the statut.
     *
     * @return string Returns the statut.
     */
    public function getStatut() {
        return $this->statut;
    }

    /**
     * Get the statut cadre.
     *
     * @return boolean Returns the statut cadre.
     */
    public function getStatutCadre() {
        return $this->statutCadre;
    }

    /**
     * Get the statut part autre.
     *
     * @return string Returns the statut part autre.
     */
    public function getStatutPartAutre() {
        return $this->statutPartAutre;
    }

    /**
     * Get the titre.
     *
     * @return string Returns the titre.
     */
    public function getTitre() {
        return $this->titre;
    }

    /**
     * Get the total sommes.
     *
     * @return float Returns the total sommes.
     */
    public function getTotalSommes() {
        return $this->totalSommes;
    }

    /**
     * Get the transaction en cours.
     *
     * @return boolean Returns the transaction en cours.
     */
    public function getTransactionEnCours() {
        return $this->transactionEnCours;
    }

    /**
     * Get the type assedic.
     *
     * @return string Returns the type assedic.
     */
    public function getTypeAssedic() {
        return $this->typeAssedic;
    }

    /**
     * Get the type diff horaire.
     *
     * @return string Returns the type diff horaire.
     */
    public function getTypeDiffHoraire() {
        return $this->typeDiffHoraire;
    }

    /**
     * Get the type societe.
     *
     * @return string Returns the type societe.
     */
    public function getTypeSociete() {
        return $this->typeSociete;
    }

    /**
     * Get the u r s s a f.
     *
     * @return string Returns the u r s s a f.
     */
    public function getURSSAF() {
        return $this->uRSSAF;
    }

    /**
     * Get the validite convention f n e.
     *
     * @return DateTime Returns the validite convention f n e.
     */
    public function getValiditeConventionFNE() {
        return $this->validiteConventionFNE;
    }

    /**
     * Set the adhesion aides.
     *
     * @param boolean $adhesionAides The adhesion aides.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setAdhesionAides($adhesionAides) {
        $this->adhesionAides = $adhesionAides;
        return $this;
    }

    /**
     * Set the adhesion revocable.
     *
     * @param boolean $adhesionRevocable The adhesion revocable.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setAdhesionRevocable($adhesionRevocable) {
        $this->adhesionRevocable = $adhesionRevocable;
        return $this;
    }

    /**
     * Set the adresse1.
     *
     * @param string $adresse1 The adresse1.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setAdresse1($adresse1) {
        $this->adresse1 = $adresse1;
        return $this;
    }

    /**
     * Set the adresse2.
     *
     * @param string $adresse2 The adresse2.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setAdresse2($adresse2) {
        $this->adresse2 = $adresse2;
        return $this;
    }

    /**
     * Set the adresse3.
     *
     * @param string $adresse3 The adresse3.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setAdresse3($adresse3) {
        $this->adresse3 = $adresse3;
        return $this;
    }

    /**
     * Set the alsace moselle.
     *
     * @param boolean $alsaceMoselle The alsace moselle.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setAlsaceMoselle($alsaceMoselle) {
        $this->alsaceMoselle = $alsaceMoselle;
        return $this;
    }

    /**
     * Set the auto assurance.
     *
     * @param boolean $autoAssurance The auto assurance.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setAutoAssurance($autoAssurance) {
        $this->autoAssurance = $autoAssurance;
        return $this;
    }

    /**
     * Set the caisse indemcp.
     *
     * @param string $caisseIndemcp The caisse indemcp.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setCaisseIndemcp($caisseIndemcp) {
        $this->caisseIndemcp = $caisseIndemcp;
        return $this;
    }

    /**
     * Set the categ emploi autre.
     *
     * @param string $categEmploiAutre The categ emploi autre.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setCategEmploiAutre($categEmploiAutre) {
        $this->categEmploiAutre = $categEmploiAutre;
        return $this;
    }

    /**
     * Set the chomage total.
     *
     * @param boolean $chomageTotal The chomage total.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setChomageTotal($chomageTotal) {
        $this->chomageTotal = $chomageTotal;
        return $this;
    }

    /**
     * Set the code ana.
     *
     * @param string $codeAna The code ana.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setCodeAna($codeAna) {
        $this->codeAna = $codeAna;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int $codeEtablissement The code etablissement.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setCodeEtablissement($codeEtablissement) {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the code motif rupture.
     *
     * @param string $codeMotifRupture The code motif rupture.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setCodeMotifRupture($codeMotifRupture) {
        $this->codeMotifRupture = $codeMotifRupture;
        return $this;
    }

    /**
     * Set the code n a f2008.
     *
     * @param string $codeNAF2008 The code n a f2008.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setCodeNAF2008($codeNAF2008) {
        $this->codeNAF2008 = $codeNAF2008;
        return $this;
    }

    /**
     * Set the code p.
     *
     * @param string $codeP The code p.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setCodeP($codeP) {
        $this->codeP = $codeP;
        return $this;
    }

    /**
     * Set the code retraite a g i r c.
     *
     * @param string $codeRetraiteAGIRC The code retraite a g i r c.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setCodeRetraiteAGIRC($codeRetraiteAGIRC) {
        $this->codeRetraiteAGIRC = $codeRetraiteAGIRC;
        return $this;
    }

    /**
     * Set the code retraite a r r c o.
     *
     * @param string $codeRetraiteARRCO The code retraite a r r c o.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setCodeRetraiteARRCO($codeRetraiteARRCO) {
        $this->codeRetraiteARRCO = $codeRetraiteARRCO;
        return $this;
    }

    /**
     * Set the code retraite autre.
     *
     * @param string $codeRetraiteAutre The code retraite autre.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setCodeRetraiteAutre($codeRetraiteAutre) {
        $this->codeRetraiteAutre = $codeRetraiteAutre;
        return $this;
    }

    /**
     * Set the contrat part autre.
     *
     * @param string $contratPartAutre The contrat part autre.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setContratPartAutre($contratPartAutre) {
        $this->contratPartAutre = $contratPartAutre;
        return $this;
    }

    /**
     * Set the contrat particulier.
     *
     * @param string $contratParticulier The contrat particulier.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setContratParticulier($contratParticulier) {
        $this->contratParticulier = $contratParticulier;
        return $this;
    }

    /**
     * Set the convention f n e.
     *
     * @param boolean $conventionFNE The convention f n e.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setConventionFNE($conventionFNE) {
        $this->conventionFNE = $conventionFNE;
        return $this;
    }

    /**
     * Set the date adhesion.
     *
     * @param DateTime $dateAdhesion The date adhesion.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setDateAdhesion(DateTime $dateAdhesion = null) {
        $this->dateAdhesion = $dateAdhesion;
        return $this;
    }

    /**
     * Set the date convention f n e.
     *
     * @param DateTime $dateConventionFNE The date convention f n e.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setDateConventionFNE(DateTime $dateConventionFNE = null) {
        $this->dateConventionFNE = $dateConventionFNE;
        return $this;
    }

    /**
     * Set the date naiss.
     *
     * @param DateTime $dateNaiss The date naiss.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setDateNaiss(DateTime $dateNaiss = null) {
        $this->dateNaiss = $dateNaiss;
        return $this;
    }

    /**
     * Set the date notification.
     *
     * @param DateTime $dateNotification The date notification.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setDateNotification(DateTime $dateNotification = null) {
        $this->dateNotification = $dateNotification;
        return $this;
    }

    /**
     * Set the date paie.
     *
     * @param DateTime $datePaie The date paie.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setDatePaie(DateTime $datePaie = null) {
        $this->datePaie = $datePaie;
        return $this;
    }

    /**
     * Set the date paie2.
     *
     * @param DateTime $datePaie2 The date paie2.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setDatePaie2(DateTime $datePaie2 = null) {
        $this->datePaie2 = $datePaie2;
        return $this;
    }

    /**
     * Set the date plan.
     *
     * @param DateTime $datePlan The date plan.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setDatePlan(DateTime $datePlan = null) {
        $this->datePlan = $datePlan;
        return $this;
    }

    /**
     * Set the demande d d t e deb.
     *
     * @param DateTime $demandeDDTEDeb The demande d d t e deb.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setDemandeDDTEDeb(DateTime $demandeDDTEDeb = null) {
        $this->demandeDDTEDeb = $demandeDDTEDeb;
        return $this;
    }

    /**
     * Set the demande d d t e fin.
     *
     * @param DateTime $demandeDDTEFin The demande d d t e fin.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setDemandeDDTEFin(DateTime $demandeDDTEFin = null) {
        $this->demandeDDTEFin = $demandeDDTEFin;
        return $this;
    }

    /**
     * Set the demande d d t e reprise.
     *
     * @param DateTime $demandeDDTEReprise The demande d d t e reprise.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setDemandeDDTEReprise(DateTime $demandeDDTEReprise = null) {
        $this->demandeDDTEReprise = $demandeDDTEReprise;
        return $this;
    }

    /**
     * Set the dept.
     *
     * @param string $dept The dept.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setDept($dept) {
        $this->dept = $dept;
        return $this;
    }

    /**
     * Set the dern jour trav.
     *
     * @param DateTime $dernJourTrav The dern jour trav.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setDernJourTrav(DateTime $dernJourTrav = null) {
        $this->dernJourTrav = $dernJourTrav;
        return $this;
    }

    /**
     * Set the dern lieu travail.
     *
     * @param string $dernLieuTravail The dern lieu travail.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setDernLieuTravail($dernLieuTravail) {
        $this->dernLieuTravail = $dernLieuTravail;
        return $this;
    }

    /**
     * Set the dernier emploi.
     *
     * @param string $dernierEmploi The dernier emploi.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setDernierEmploi($dernierEmploi) {
        $this->dernierEmploi = $dernierEmploi;
        return $this;
    }

    /**
     * Set the duree emploi1 deb.
     *
     * @param DateTime $dureeEmploi1Deb The duree emploi1 deb.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setDureeEmploi1Deb(DateTime $dureeEmploi1Deb = null) {
        $this->dureeEmploi1Deb = $dureeEmploi1Deb;
        return $this;
    }

    /**
     * Set the duree emploi1 fin.
     *
     * @param DateTime $dureeEmploi1Fin The duree emploi1 fin.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setDureeEmploi1Fin(DateTime $dureeEmploi1Fin = null) {
        $this->dureeEmploi1Fin = $dureeEmploi1Fin;
        return $this;
    }

    /**
     * Set the duree emploi2 deb.
     *
     * @param DateTime $dureeEmploi2Deb The duree emploi2 deb.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setDureeEmploi2Deb(DateTime $dureeEmploi2Deb = null) {
        $this->dureeEmploi2Deb = $dureeEmploi2Deb;
        return $this;
    }

    /**
     * Set the duree emploi2 fin.
     *
     * @param DateTime $dureeEmploi2Fin The duree emploi2 fin.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setDureeEmploi2Fin(DateTime $dureeEmploi2Fin = null) {
        $this->dureeEmploi2Fin = $dureeEmploi2Fin;
        return $this;
    }

    /**
     * Set the effectif.
     *
     * @param string $effectif The effectif.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setEffectif($effectif) {
        $this->effectif = $effectif;
        return $this;
    }

    /**
     * Set the effectif val.
     *
     * @param float $effectifVal The effectif val.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setEffectifVal($effectifVal) {
        $this->effectifVal = $effectifVal;
        return $this;
    }

    /**
     * Set the emploi collectivite.
     *
     * @param string $emploiCollectivite The emploi collectivite.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setEmploiCollectivite($emploiCollectivite) {
        $this->emploiCollectivite = $emploiCollectivite;
        return $this;
    }

    /**
     * Set the etbl adresse1.
     *
     * @param string $etblAdresse1 The etbl adresse1.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setEtblAdresse1($etblAdresse1) {
        $this->etblAdresse1 = $etblAdresse1;
        return $this;
    }

    /**
     * Set the etbl adresse2.
     *
     * @param string $etblAdresse2 The etbl adresse2.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setEtblAdresse2($etblAdresse2) {
        $this->etblAdresse2 = $etblAdresse2;
        return $this;
    }

    /**
     * Set the etbl adresse3.
     *
     * @param string $etblAdresse3 The etbl adresse3.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setEtblAdresse3($etblAdresse3) {
        $this->etblAdresse3 = $etblAdresse3;
        return $this;
    }

    /**
     * Set the etbl raison sociale.
     *
     * @param string $etblRaisonSociale The etbl raison sociale.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setEtblRaisonSociale($etblRaisonSociale) {
        $this->etblRaisonSociale = $etblRaisonSociale;
        return $this;
    }

    /**
     * Set the etbl tel.
     *
     * @param string $etblTel The etbl tel.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setEtblTel($etblTel) {
        $this->etblTel = $etblTel;
        return $this;
    }

    /**
     * Set the f n g s a percevoir.
     *
     * @param boolean $fNGSAPercevoir The f n g s a percevoir.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setFNGSAPercevoir($fNGSAPercevoir) {
        $this->fNGSAPercevoir = $fNGSAPercevoir;
        return $this;
    }

    /**
     * Set the f n g s a percevoir creance.
     *
     * @param string $fNGSAPercevoirCreance The f n g s a percevoir creance.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setFNGSAPercevoirCreance($fNGSAPercevoirCreance) {
        $this->fNGSAPercevoirCreance = $fNGSAPercevoirCreance;
        return $this;
    }

    /**
     * Set the f n g s non a percevoir motif.
     *
     * @param string $fNGSNonAPercevoirMotif The f n g s non a percevoir motif.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setFNGSNonAPercevoirMotif($fNGSNonAPercevoirMotif) {
        $this->fNGSNonAPercevoirMotif = $fNGSNonAPercevoirMotif;
        return $this;
    }

    /**
     * Set the f n g s non percue motif.
     *
     * @param string $fNGSNonPercueMotif The f n g s non percue motif.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setFNGSNonPercueMotif($fNGSNonPercueMotif) {
        $this->fNGSNonPercueMotif = $fNGSNonPercueMotif;
        return $this;
    }

    /**
     * Set the f n g s percue.
     *
     * @param boolean $fNGSPercue The f n g s percue.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setFNGSPercue($fNGSPercue) {
        $this->fNGSPercue = $fNGSPercue;
        return $this;
    }

    /**
     * Set the f n g s percue creance.
     *
     * @param string $fNGSPercueCreance The f n g s percue creance.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setFNGSPercueCreance($fNGSPercueCreance) {
        $this->fNGSPercueCreance = $fNGSPercueCreance;
        return $this;
    }

    /**
     * Set the heures trav.
     *
     * @param float $heuresTrav The heures trav.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setHeuresTrav($heuresTrav) {
        $this->heuresTrav = $heuresTrav;
        return $this;
    }

    /**
     * Set the heures trav2.
     *
     * @param float $heuresTrav2 The heures trav2.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setHeuresTrav2($heuresTrav2) {
        $this->heuresTrav2 = $heuresTrav2;
        return $this;
    }

    /**
     * Set the horaire annuel etbl.
     *
     * @param float $horaireAnnuelEtbl The horaire annuel etbl.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setHoraireAnnuelEtbl($horaireAnnuelEtbl) {
        $this->horaireAnnuelEtbl = $horaireAnnuelEtbl;
        return $this;
    }

    /**
     * Set the horaire annuel sal.
     *
     * @param float $horaireAnnuelSal The horaire annuel sal.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setHoraireAnnuelSal($horaireAnnuelSal) {
        $this->horaireAnnuelSal = $horaireAnnuelSal;
        return $this;
    }

    /**
     * Set the horaire hebdo etbl.
     *
     * @param float $horaireHebdoEtbl The horaire hebdo etbl.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setHoraireHebdoEtbl($horaireHebdoEtbl) {
        $this->horaireHebdoEtbl = $horaireHebdoEtbl;
        return $this;
    }

    /**
     * Set the horaire hebdo sal.
     *
     * @param float $horaireHebdoSal The horaire hebdo sal.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setHoraireHebdoSal($horaireHebdoSal) {
        $this->horaireHebdoSal = $horaireHebdoSal;
        return $this;
    }

    /**
     * Set the indemn autres.
     *
     * @param float $indemnAutres The indemn autres.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setIndemnAutres($indemnAutres) {
        $this->indemnAutres = $indemnAutres;
        return $this;
    }

    /**
     * Set the indemn clientele.
     *
     * @param float $indemnClientele The indemn clientele.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setIndemnClientele($indemnClientele) {
        $this->indemnClientele = $indemnClientele;
        return $this;
    }

    /**
     * Set the indemn compens c p.
     *
     * @param float $indemnCompensCP The indemn compens c p.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setIndemnCompensCP($indemnCompensCP) {
        $this->indemnCompensCP = $indemnCompensCP;
        return $this;
    }

    /**
     * Set the indemn compens preavis.
     *
     * @param float $indemnCompensPreavis The indemn compens preavis.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setIndemnCompensPreavis($indemnCompensPreavis) {
        $this->indemnCompensPreavis = $indemnCompensPreavis;
        return $this;
    }

    /**
     * Set the indemn depart retraite.
     *
     * @param float $indemnDepartRetraite The indemn depart retraite.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setIndemnDepartRetraite($indemnDepartRetraite) {
        $this->indemnDepartRetraite = $indemnDepartRetraite;
        return $this;
    }

    /**
     * Set the indemn due sinistre.
     *
     * @param float $indemnDueSinistre The indemn due sinistre.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setIndemnDueSinistre($indemnDueSinistre) {
        $this->indemnDueSinistre = $indemnDueSinistre;
        return $this;
    }

    /**
     * Set the indemn fin c d d.
     *
     * @param float $indemnFinCDD The indemn fin c d d.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setIndemnFinCDD($indemnFinCDD) {
        $this->indemnFinCDD = $indemnFinCDD;
        return $this;
    }

    /**
     * Set the indemn fin c n e.
     *
     * @param float $indemnFinCNE The indemn fin c n e.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setIndemnFinCNE($indemnFinCNE) {
        $this->indemnFinCNE = $indemnFinCNE;
        return $this;
    }

    /**
     * Set the indemn fin mission.
     *
     * @param float $indemnFinMission The indemn fin mission.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setIndemnFinMission($indemnFinMission) {
        $this->indemnFinMission = $indemnFinMission;
        return $this;
    }

    /**
     * Set the indemn journalistes.
     *
     * @param float $indemnJournalistes The indemn journalistes.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setIndemnJournalistes($indemnJournalistes) {
        $this->indemnJournalistes = $indemnJournalistes;
        return $this;
    }

    /**
     * Set the indemn licens.
     *
     * @param float $indemnLicens The indemn licens.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setIndemnLicens($indemnLicens) {
        $this->indemnLicens = $indemnLicens;
        return $this;
    }

    /**
     * Set the indemn navig.
     *
     * @param float $indemnNavig The indemn navig.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setIndemnNavig($indemnNavig) {
        $this->indemnNavig = $indemnNavig;
        return $this;
    }

    /**
     * Set the indemn rupt conv.
     *
     * @param float $indemnRuptConv The indemn rupt conv.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setIndemnRuptConv($indemnRuptConv) {
        $this->indemnRuptConv = $indemnRuptConv;
        return $this;
    }

    /**
     * Set the indemn speci licens.
     *
     * @param float $indemnSpeciLicens The indemn speci licens.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setIndemnSpeciLicens($indemnSpeciLicens) {
        $this->indemnSpeciLicens = $indemnSpeciLicens;
        return $this;
    }

    /**
     * Set the indemn specif licens.
     *
     * @param float $indemnSpecifLicens The indemn specif licens.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setIndemnSpecifLicens($indemnSpecifLicens) {
        $this->indemnSpecifLicens = $indemnSpecifLicens;
        return $this;
    }

    /**
     * Set the indemn suppl licens.
     *
     * @param float $indemnSupplLicens The indemn suppl licens.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setIndemnSupplLicens($indemnSupplLicens) {
        $this->indemnSupplLicens = $indemnSupplLicens;
        return $this;
    }

    /**
     * Set the indemn versee apprenti.
     *
     * @param float $indemnVerseeApprenti The indemn versee apprenti.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setIndemnVerseeApprenti($indemnVerseeApprenti) {
        $this->indemnVerseeApprenti = $indemnVerseeApprenti;
        return $this;
    }

    /**
     * Set the licencie55ans.
     *
     * @param boolean $licencie55ans The licencie55ans.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setLicencie55ans($licencie55ans) {
        $this->licencie55ans = $licencie55ans;
        return $this;
    }

    /**
     * Set the licencie plan social.
     *
     * @param boolean $licenciePlanSocial The licencie plan social.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setLicenciePlanSocial($licenciePlanSocial) {
        $this->licenciePlanSocial = $licenciePlanSocial;
        return $this;
    }

    /**
     * Set the lien document.
     *
     * @param string $lienDocument The lien document.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setLienDocument($lienDocument) {
        $this->lienDocument = $lienDocument;
        return $this;
    }

    /**
     * Set the lien parente.
     *
     * @param string $lienParente The lien parente.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setLienParente($lienParente) {
        $this->lienParente = $lienParente;
        return $this;
    }

    /**
     * Set the motif difference.
     *
     * @param string $motifDifference The motif difference.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setMotifDifference($motifDifference) {
        $this->motifDifference = $motifDifference;
        return $this;
    }

    /**
     * Set the motif non paie i c c p.
     *
     * @param string $motifNonPaieICCP The motif non paie i c c p.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setMotifNonPaieICCP($motifNonPaieICCP) {
        $this->motifNonPaieICCP = $motifNonPaieICCP;
        return $this;
    }

    /**
     * Set the motif non paiement.
     *
     * @param string $motifNonPaiement The motif non paiement.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setMotifNonPaiement($motifNonPaiement) {
        $this->motifNonPaiement = $motifNonPaiement;
        return $this;
    }

    /**
     * Set the motif rupture.
     *
     * @param string $motifRupture The motif rupture.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setMotifRupture($motifRupture) {
        $this->motifRupture = $motifRupture;
        return $this;
    }

    /**
     * Set the mt idemn conv col.
     *
     * @param float $mtIdemnConvCol The mt idemn conv col.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setMtIdemnConvCol($mtIdemnConvCol) {
        $this->mtIdemnConvCol = $mtIdemnConvCol;
        return $this;
    }

    /**
     * Set the mt idemn transac.
     *
     * @param float $mtIdemnTransac The mt idemn transac.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setMtIdemnTransac($mtIdemnTransac) {
        $this->mtIdemnTransac = $mtIdemnTransac;
        return $this;
    }

    /**
     * Set the n a f.
     *
     * @param string $nAF The n a f.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setNAF($nAF) {
        $this->nAF = $nAF;
        return $this;
    }

    /**
     * Set the n i r.
     *
     * @param string $nIR The n i r.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setNIR($nIR) {
        $this->nIR = $nIR;
        return $this;
    }

    /**
     * Set the nature contrat.
     *
     * @param string $natureContrat The nature contrat.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setNatureContrat($natureContrat) {
        $this->natureContrat = $natureContrat;
        return $this;
    }

    /**
     * Set the nb jours ouvrables.
     *
     * @param float $nbJoursOuvrables The nb jours ouvrables.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setNbJoursOuvrables($nbJoursOuvrables) {
        $this->nbJoursOuvrables = $nbJoursOuvrables;
        return $this;
    }

    /**
     * Set the niveau qualif.
     *
     * @param string $niveauQualif The niveau qualif.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setNiveauQualif($niveauQualif) {
        $this->niveauQualif = $niveauQualif;
        return $this;
    }

    /**
     * Set the nom ass chom.
     *
     * @param string $nomAssChom The nom ass chom.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setNomAssChom($nomAssChom) {
        $this->nomAssChom = $nomAssChom;
        return $this;
    }

    /**
     * Set the nom employe.
     *
     * @param string $nomEmploye The nom employe.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setNomEmploye($nomEmploye) {
        $this->nomEmploye = $nomEmploye;
        return $this;
    }

    /**
     * Set the nom naissance.
     *
     * @param string $nomNaissance The nom naissance.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setNomNaissance($nomNaissance) {
        $this->nomNaissance = $nomNaissance;
        return $this;
    }

    /**
     * Set the nom special secu.
     *
     * @param string $nomSpecialSecu The nom special secu.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setNomSpecialSecu($nomSpecialSecu) {
        $this->nomSpecialSecu = $nomSpecialSecu;
        return $this;
    }

    /**
     * Set the nouvelle attest.
     *
     * @param boolean $nouvelleAttest The nouvelle attest.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setNouvelleAttest($nouvelleAttest) {
        $this->nouvelleAttest = $nouvelleAttest;
        return $this;
    }

    /**
     * Set the num ass chom.
     *
     * @param string $numAssChom The num ass chom.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setNumAssChom($numAssChom) {
        $this->numAssChom = $numAssChom;
        return $this;
    }

    /**
     * Set the num convention f n e.
     *
     * @param string $numConventionFNE The num convention f n e.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setNumConventionFNE($numConventionFNE) {
        $this->numConventionFNE = $numConventionFNE;
        return $this;
    }

    /**
     * Set the num convention gestion.
     *
     * @param string $numConventionGestion The num convention gestion.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setNumConventionGestion($numConventionGestion) {
        $this->numConventionGestion = $numConventionGestion;
        return $this;
    }

    /**
     * Set the num special secu.
     *
     * @param string $numSpecialSecu The num special secu.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setNumSpecialSecu($numSpecialSecu) {
        $this->numSpecialSecu = $numSpecialSecu;
        return $this;
    }

    /**
     * Set the numero attestation.
     *
     * @param string $numeroAttestation The numero attestation.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setNumeroAttestation($numeroAttestation) {
        $this->numeroAttestation = $numeroAttestation;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string $numeroEmploye The numero employe.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setNumeroEmploye($numeroEmploye) {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the organisme ass chom.
     *
     * @param string $organismeAssChom The organisme ass chom.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setOrganismeAssChom($organismeAssChom) {
        $this->organismeAssChom = $organismeAssChom;
        return $this;
    }

    /**
     * Set the preavis effectue.
     *
     * @param boolean $preavisEffectue The preavis effectue.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setPreavisEffectue($preavisEffectue) {
        $this->preavisEffectue = $preavisEffectue;
        return $this;
    }

    /**
     * Set the preavis effectue deb.
     *
     * @param DateTime $preavisEffectueDeb The preavis effectue deb.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setPreavisEffectueDeb(DateTime $preavisEffectueDeb = null) {
        $this->preavisEffectueDeb = $preavisEffectueDeb;
        return $this;
    }

    /**
     * Set the preavis effectue fin.
     *
     * @param DateTime $preavisEffectueFin The preavis effectue fin.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setPreavisEffectueFin(DateTime $preavisEffectueFin = null) {
        $this->preavisEffectueFin = $preavisEffectueFin;
        return $this;
    }

    /**
     * Set the preavis effectue paye.
     *
     * @param boolean $preavisEffectuePaye The preavis effectue paye.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setPreavisEffectuePaye($preavisEffectuePaye) {
        $this->preavisEffectuePaye = $preavisEffectuePaye;
        return $this;
    }

    /**
     * Set the preavis non effectue.
     *
     * @param boolean $preavisNonEffectue The preavis non effectue.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setPreavisNonEffectue($preavisNonEffectue) {
        $this->preavisNonEffectue = $preavisNonEffectue;
        return $this;
    }

    /**
     * Set the preavis non effectue deb.
     *
     * @param DateTime $preavisNonEffectueDeb The preavis non effectue deb.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setPreavisNonEffectueDeb(DateTime $preavisNonEffectueDeb = null) {
        $this->preavisNonEffectueDeb = $preavisNonEffectueDeb;
        return $this;
    }

    /**
     * Set the preavis non effectue fin.
     *
     * @param DateTime $preavisNonEffectueFin The preavis non effectue fin.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setPreavisNonEffectueFin(DateTime $preavisNonEffectueFin = null) {
        $this->preavisNonEffectueFin = $preavisNonEffectueFin;
        return $this;
    }

    /**
     * Set the preavis non effectue paye.
     *
     * @param boolean $preavisNonEffectuePaye The preavis non effectue paye.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setPreavisNonEffectuePaye($preavisNonEffectuePaye) {
        $this->preavisNonEffectuePaye = $preavisNonEffectuePaye;
        return $this;
    }

    /**
     * Set the precompte stc.
     *
     * @param float $precompteStc The precompte stc.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setPrecompteStc($precompteStc) {
        $this->precompteStc = $precompteStc;
        return $this;
    }

    /**
     * Set the prenom.
     *
     * @param string $prenom The prenom.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setPrenom($prenom) {
        $this->prenom = $prenom;
        return $this;
    }

    /**
     * Set the qualite emploi.
     *
     * @param string $qualiteEmploi The qualite emploi.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setQualiteEmploi($qualiteEmploi) {
        $this->qualiteEmploi = $qualiteEmploi;
        return $this;
    }

    /**
     * Set the reclassement.
     *
     * @param boolean $reclassement The reclassement.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setReclassement($reclassement) {
        $this->reclassement = $reclassement;
        return $this;
    }

    /**
     * Set the refus salarie.
     *
     * @param boolean $refusSalarie The refus salarie.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setRefusSalarie($refusSalarie) {
        $this->refusSalarie = $refusSalarie;
        return $this;
    }

    /**
     * Set the retraite a g i r c.
     *
     * @param string $retraiteAGIRC The retraite a g i r c.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setRetraiteAGIRC($retraiteAGIRC) {
        $this->retraiteAGIRC = $retraiteAGIRC;
        return $this;
    }

    /**
     * Set the retraite a g i r c compl.
     *
     * @param string $retraiteAGIRCCompl The retraite a g i r c compl.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setRetraiteAGIRCCompl($retraiteAGIRCCompl) {
        $this->retraiteAGIRCCompl = $retraiteAGIRCCompl;
        return $this;
    }

    /**
     * Set the retraite a r r c o.
     *
     * @param string $retraiteARRCO The retraite a r r c o.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setRetraiteARRCO($retraiteARRCO) {
        $this->retraiteARRCO = $retraiteARRCO;
        return $this;
    }

    /**
     * Set the retraite a r r c o compl.
     *
     * @param string $retraiteARRCOCompl The retraite a r r c o compl.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setRetraiteARRCOCompl($retraiteARRCOCompl) {
        $this->retraiteARRCOCompl = $retraiteARRCOCompl;
        return $this;
    }

    /**
     * Set the retraite autre.
     *
     * @param string $retraiteAutre The retraite autre.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setRetraiteAutre($retraiteAutre) {
        $this->retraiteAutre = $retraiteAutre;
        return $this;
    }

    /**
     * Set the retraite autre compl.
     *
     * @param string $retraiteAutreCompl The retraite autre compl.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setRetraiteAutreCompl($retraiteAutreCompl) {
        $this->retraiteAutreCompl = $retraiteAutreCompl;
        return $this;
    }

    /**
     * Set the s i r e t.
     *
     * @param string $sIRET The s i r e t.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setSIRET($sIRET) {
        $this->sIRET = $sIRET;
        return $this;
    }

    /**
     * Set the salairebrut.
     *
     * @param float $salairebrut The salairebrut.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setSalairebrut($salairebrut) {
        $this->salairebrut = $salairebrut;
        return $this;
    }

    /**
     * Set the signature code qualite.
     *
     * @param string $signatureCodeQualite The signature code qualite.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setSignatureCodeQualite($signatureCodeQualite) {
        $this->signatureCodeQualite = $signatureCodeQualite;
        return $this;
    }

    /**
     * Set the signature contact.
     *
     * @param string $signatureContact The signature contact.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setSignatureContact($signatureContact) {
        $this->signatureContact = $signatureContact;
        return $this;
    }

    /**
     * Set the signature date.
     *
     * @param DateTime $signatureDate The signature date.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setSignatureDate(DateTime $signatureDate = null) {
        $this->signatureDate = $signatureDate;
        return $this;
    }

    /**
     * Set the signature nom.
     *
     * @param string $signatureNom The signature nom.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setSignatureNom($signatureNom) {
        $this->signatureNom = $signatureNom;
        return $this;
    }

    /**
     * Set the signature prenom.
     *
     * @param string $signaturePrenom The signature prenom.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setSignaturePrenom($signaturePrenom) {
        $this->signaturePrenom = $signaturePrenom;
        return $this;
    }

    /**
     * Set the signature qualite.
     *
     * @param string $signatureQualite The signature qualite.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setSignatureQualite($signatureQualite) {
        $this->signatureQualite = $signatureQualite;
        return $this;
    }

    /**
     * Set the signature tel.
     *
     * @param string $signatureTel The signature tel.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setSignatureTel($signatureTel) {
        $this->signatureTel = $signatureTel;
        return $this;
    }

    /**
     * Set the signature ville.
     *
     * @param string $signatureVille The signature ville.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setSignatureVille($signatureVille) {
        $this->signatureVille = $signatureVille;
        return $this;
    }

    /**
     * Set the solde tout compte.
     *
     * @param string $soldeToutCompte The solde tout compte.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setSoldeToutCompte($soldeToutCompte) {
        $this->soldeToutCompte = $soldeToutCompte;
        return $this;
    }

    /**
     * Set the sommes periode deb.
     *
     * @param DateTime $sommesPeriodeDeb The sommes periode deb.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setSommesPeriodeDeb(DateTime $sommesPeriodeDeb = null) {
        $this->sommesPeriodeDeb = $sommesPeriodeDeb;
        return $this;
    }

    /**
     * Set the sommes periode deb2.
     *
     * @param DateTime $sommesPeriodeDeb2 The sommes periode deb2.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setSommesPeriodeDeb2(DateTime $sommesPeriodeDeb2 = null) {
        $this->sommesPeriodeDeb2 = $sommesPeriodeDeb2;
        return $this;
    }

    /**
     * Set the sommes periode fin.
     *
     * @param DateTime $sommesPeriodeFin The sommes periode fin.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setSommesPeriodeFin(DateTime $sommesPeriodeFin = null) {
        $this->sommesPeriodeFin = $sommesPeriodeFin;
        return $this;
    }

    /**
     * Set the sommes periode fin2.
     *
     * @param DateTime $sommesPeriodeFin2 The sommes periode fin2.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setSommesPeriodeFin2(DateTime $sommesPeriodeFin2 = null) {
        $this->sommesPeriodeFin2 = $sommesPeriodeFin2;
        return $this;
    }

    /**
     * Set the special secu.
     *
     * @param string $specialSecu The special secu.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setSpecialSecu($specialSecu) {
        $this->specialSecu = $specialSecu;
        return $this;
    }

    /**
     * Set the statut.
     *
     * @param string $statut The statut.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setStatut($statut) {
        $this->statut = $statut;
        return $this;
    }

    /**
     * Set the statut cadre.
     *
     * @param boolean $statutCadre The statut cadre.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setStatutCadre($statutCadre) {
        $this->statutCadre = $statutCadre;
        return $this;
    }

    /**
     * Set the statut part autre.
     *
     * @param string $statutPartAutre The statut part autre.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setStatutPartAutre($statutPartAutre) {
        $this->statutPartAutre = $statutPartAutre;
        return $this;
    }

    /**
     * Set the titre.
     *
     * @param string $titre The titre.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setTitre($titre) {
        $this->titre = $titre;
        return $this;
    }

    /**
     * Set the total sommes.
     *
     * @param float $totalSommes The total sommes.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setTotalSommes($totalSommes) {
        $this->totalSommes = $totalSommes;
        return $this;
    }

    /**
     * Set the transaction en cours.
     *
     * @param boolean $transactionEnCours The transaction en cours.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setTransactionEnCours($transactionEnCours) {
        $this->transactionEnCours = $transactionEnCours;
        return $this;
    }

    /**
     * Set the type assedic.
     *
     * @param string $typeAssedic The type assedic.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setTypeAssedic($typeAssedic) {
        $this->typeAssedic = $typeAssedic;
        return $this;
    }

    /**
     * Set the type diff horaire.
     *
     * @param string $typeDiffHoraire The type diff horaire.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setTypeDiffHoraire($typeDiffHoraire) {
        $this->typeDiffHoraire = $typeDiffHoraire;
        return $this;
    }

    /**
     * Set the type societe.
     *
     * @param string $typeSociete The type societe.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setTypeSociete($typeSociete) {
        $this->typeSociete = $typeSociete;
        return $this;
    }

    /**
     * Set the u r s s a f.
     *
     * @param string $uRSSAF The u r s s a f.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setURSSAF($uRSSAF) {
        $this->uRSSAF = $uRSSAF;
        return $this;
    }

    /**
     * Set the validite convention f n e.
     *
     * @param DateTime $validiteConventionFNE The validite convention f n e.
     * @return AttestationAssedic Returns this attestation assedic.
     */
    public function setValiditeConventionFNE(DateTime $validiteConventionFNE = null) {
        $this->validiteConventionFNE = $validiteConventionFNE;
        return $this;
    }

}
