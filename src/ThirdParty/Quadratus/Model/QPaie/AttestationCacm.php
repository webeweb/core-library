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

use DateTime;

/**
 * Attestation cacm.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class AttestationCacm {

    /**
     * Adresse employe.
     *
     * @var string
     */
    private $adresseEmploye;

    /**
     * Autre contrat.
     *
     * @var string
     */
    private $autreContrat;

    /**
     * Autre statut.
     *
     * @var string
     */
    private $autreStatut;

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
     * Code postal.
     *
     * @var string
     */
    private $codePostal;

    /**
     * Date naissance.
     *
     * @var DateTime|null
     */
    private $dateNaissance;

    /**
     * Date notification.
     *
     * @var DateTime|null
     */
    private $dateNotification;

    /**
     * Date paiement.
     *
     * @var DateTime|null
     */
    private $datePaiement;

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
     * Dt deb preavis effectue.
     *
     * @var DateTime|null
     */
    private $dtDebPreavisEffectue;

    /**
     * Dt deb preavis non effectue.
     *
     * @var DateTime|null
     */
    private $dtDebPreavisNonEffectue;

    /**
     * Dt debut emploi.
     *
     * @var DateTime|null
     */
    private $dtDebutEmploi;

    /**
     * Dt dern jour trav.
     *
     * @var DateTime|null
     */
    private $dtDernJourTrav;

    /**
     * Dt fin emploi.
     *
     * @var DateTime|null
     */
    private $dtFinEmploi;

    /**
     * Dt fin preavis effectue.
     *
     * @var DateTime|null
     */
    private $dtFinPreavisEffectue;

    /**
     * Dt fin preavis non effectue.
     *
     * @var DateTime|null
     */
    private $dtFinPreavisNonEffectue;

    /**
     * Etbl adr.
     *
     * @var string
     */
    private $etblAdr;

    /**
     * Etbl cacm.
     *
     * @var string
     */
    private $etblCacm;

    /**
     * Etbl effectif.
     *
     * @var int
     */
    private $etblEffectif;

    /**
     * Etbl fax.
     *
     * @var string
     */
    private $etblFax;

    /**
     * Etbl mail.
     *
     * @var string
     */
    private $etblMail;

    /**
     * Etbl naf.
     *
     * @var string
     */
    private $etblNaf;

    /**
     * Etbl siret.
     *
     * @var string
     */
    private $etblSiret;

    /**
     * Etbl tel.
     *
     * @var string
     */
    private $etblTel;

    /**
     * Indemn autre.
     *
     * @var bool
     */
    private $indemnAutre;

    /**
     * Indemn legale.
     *
     * @var bool
     */
    private $indemnLegale;

    /**
     * Indemn lic.
     *
     * @var bool
     */
    private $indemnLic;

    /**
     * Indemn supp.
     *
     * @var bool
     */
    private $indemnSupp;

    /**
     * Lien document.
     *
     * @var string
     */
    private $lienDocument;

    /**
     * Lien parente.
     *
     * @var bool
     */
    private $lienParente;

    /**
     * Motif preavis non paye.
     *
     * @var string
     */
    private $motifPreavisNonPaye;

    /**
     * Motif rupture.
     *
     * @var string
     */
    private $motifRupture;

    /**
     * Mt indemn autre.
     *
     * @var float
     */
    private $mtIndemnAutre;

    /**
     * Mt indemn legale.
     *
     * @var float
     */
    private $mtIndemnLegale;

    /**
     * Mt indemn lic.
     *
     * @var float
     */
    private $mtIndemnLic;

    /**
     * Mt indemn supp.
     *
     * @var float
     */
    private $mtIndemnSupp;

    /**
     * Mt salaire brut.
     *
     * @var float
     */
    private $mtSalaireBrut;

    /**
     * Nb heure mens.
     *
     * @var float
     */
    private $nbHeureMens;

    /**
     * Niveau qualif.
     *
     * @var string
     */
    private $niveauQualif;

    /**
     * No cacm.
     *
     * @var string
     */
    private $noCacm;

    /**
     * No cssm.
     *
     * @var string
     */
    private $noCssm;

    /**
     * Nom marital.
     *
     * @var string
     */
    private $nomMarital;

    /**
     * Nom naissance.
     *
     * @var string
     */
    private $nomNaissance;

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
     * Organisme cacm.
     *
     * @var string
     */
    private $organismeCacm;

    /**
     * Periode emploi deb.
     *
     * @var DateTime|null
     */
    private $periodeEmploiDeb;

    /**
     * Periode emploi fin.
     *
     * @var DateTime|null
     */
    private $periodeEmploiFin;

    /**
     * Preavis non effectue paye.
     *
     * @var bool
     */
    private $preavisNonEffectuePaye;

    /**
     * Prenom.
     *
     * @var string
     */
    private $prenom;

    /**
     * Sign autre.
     *
     * @var string
     */
    private $signAutre;

    /**
     * Sign date.
     *
     * @var DateTime|null
     */
    private $signDate;

    /**
     * Sign form juridique.
     *
     * @var string
     */
    private $signFormJuridique;

    /**
     * Sign motif rupture.
     *
     * @var string
     */
    private $signMotifRupture;

    /**
     * Sign nom.
     *
     * @var string
     */
    private $signNom;

    /**
     * Sign prenom.
     *
     * @var string
     */
    private $signPrenom;

    /**
     * Sign qualite.
     *
     * @var int
     */
    private $signQualite;

    /**
     * Sign raison sociale.
     *
     * @var string
     */
    private $signRaisonSociale;

    /**
     * Statut cadre.
     *
     * @var bool
     */
    private $statutCadre;

    /**
     * Statut juridique.
     *
     * @var string
     */
    private $statutJuridique;

    /**
     * Statut particulier.
     *
     * @var int
     */
    private $statutParticulier;

    /**
     * Titre.
     *
     * @var string
     */
    private $titre;

    /**
     * Titre lien parente.
     *
     * @var string
     */
    private $titreLienParente;

    /**
     * Type contrat.
     *
     * @var int
     */
    private $typeContrat;

    /**
     * Type horaire.
     *
     * @var int
     */
    private $typeHoraire;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the adresse employe.
     *
     * @return string Returns the adresse employe.
     */
    public function getAdresseEmploye() {
        return $this->adresseEmploye;
    }

    /**
     * Get the autre contrat.
     *
     * @return string Returns the autre contrat.
     */
    public function getAutreContrat() {
        return $this->autreContrat;
    }

    /**
     * Get the autre statut.
     *
     * @return string Returns the autre statut.
     */
    public function getAutreStatut() {
        return $this->autreStatut;
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
     * Get the code postal.
     *
     * @return string Returns the code postal.
     */
    public function getCodePostal() {
        return $this->codePostal;
    }

    /**
     * Get the date naissance.
     *
     * @return DateTime|null Returns the date naissance.
     */
    public function getDateNaissance() {
        return $this->dateNaissance;
    }

    /**
     * Get the date notification.
     *
     * @return DateTime|null Returns the date notification.
     */
    public function getDateNotification() {
        return $this->dateNotification;
    }

    /**
     * Get the date paiement.
     *
     * @return DateTime|null Returns the date paiement.
     */
    public function getDatePaiement() {
        return $this->datePaiement;
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
     * Get the dt deb preavis effectue.
     *
     * @return DateTime|null Returns the dt deb preavis effectue.
     */
    public function getDtDebPreavisEffectue() {
        return $this->dtDebPreavisEffectue;
    }

    /**
     * Get the dt deb preavis non effectue.
     *
     * @return DateTime|null Returns the dt deb preavis non effectue.
     */
    public function getDtDebPreavisNonEffectue() {
        return $this->dtDebPreavisNonEffectue;
    }

    /**
     * Get the dt debut emploi.
     *
     * @return DateTime|null Returns the dt debut emploi.
     */
    public function getDtDebutEmploi() {
        return $this->dtDebutEmploi;
    }

    /**
     * Get the dt dern jour trav.
     *
     * @return DateTime|null Returns the dt dern jour trav.
     */
    public function getDtDernJourTrav() {
        return $this->dtDernJourTrav;
    }

    /**
     * Get the dt fin emploi.
     *
     * @return DateTime|null Returns the dt fin emploi.
     */
    public function getDtFinEmploi() {
        return $this->dtFinEmploi;
    }

    /**
     * Get the dt fin preavis effectue.
     *
     * @return DateTime|null Returns the dt fin preavis effectue.
     */
    public function getDtFinPreavisEffectue() {
        return $this->dtFinPreavisEffectue;
    }

    /**
     * Get the dt fin preavis non effectue.
     *
     * @return DateTime|null Returns the dt fin preavis non effectue.
     */
    public function getDtFinPreavisNonEffectue() {
        return $this->dtFinPreavisNonEffectue;
    }

    /**
     * Get the etbl adr.
     *
     * @return string Returns the etbl adr.
     */
    public function getEtblAdr() {
        return $this->etblAdr;
    }

    /**
     * Get the etbl cacm.
     *
     * @return string Returns the etbl cacm.
     */
    public function getEtblCacm() {
        return $this->etblCacm;
    }

    /**
     * Get the etbl effectif.
     *
     * @return int Returns the etbl effectif.
     */
    public function getEtblEffectif() {
        return $this->etblEffectif;
    }

    /**
     * Get the etbl fax.
     *
     * @return string Returns the etbl fax.
     */
    public function getEtblFax() {
        return $this->etblFax;
    }

    /**
     * Get the etbl mail.
     *
     * @return string Returns the etbl mail.
     */
    public function getEtblMail() {
        return $this->etblMail;
    }

    /**
     * Get the etbl naf.
     *
     * @return string Returns the etbl naf.
     */
    public function getEtblNaf() {
        return $this->etblNaf;
    }

    /**
     * Get the etbl siret.
     *
     * @return string Returns the etbl siret.
     */
    public function getEtblSiret() {
        return $this->etblSiret;
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
     * Get the indemn autre.
     *
     * @return bool Returns the indemn autre.
     */
    public function getIndemnAutre() {
        return $this->indemnAutre;
    }

    /**
     * Get the indemn legale.
     *
     * @return bool Returns the indemn legale.
     */
    public function getIndemnLegale() {
        return $this->indemnLegale;
    }

    /**
     * Get the indemn lic.
     *
     * @return bool Returns the indemn lic.
     */
    public function getIndemnLic() {
        return $this->indemnLic;
    }

    /**
     * Get the indemn supp.
     *
     * @return bool Returns the indemn supp.
     */
    public function getIndemnSupp() {
        return $this->indemnSupp;
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
     * @return bool Returns the lien parente.
     */
    public function getLienParente() {
        return $this->lienParente;
    }

    /**
     * Get the motif preavis non paye.
     *
     * @return string Returns the motif preavis non paye.
     */
    public function getMotifPreavisNonPaye() {
        return $this->motifPreavisNonPaye;
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
     * Get the mt indemn autre.
     *
     * @return float Returns the mt indemn autre.
     */
    public function getMtIndemnAutre() {
        return $this->mtIndemnAutre;
    }

    /**
     * Get the mt indemn legale.
     *
     * @return float Returns the mt indemn legale.
     */
    public function getMtIndemnLegale() {
        return $this->mtIndemnLegale;
    }

    /**
     * Get the mt indemn lic.
     *
     * @return float Returns the mt indemn lic.
     */
    public function getMtIndemnLic() {
        return $this->mtIndemnLic;
    }

    /**
     * Get the mt indemn supp.
     *
     * @return float Returns the mt indemn supp.
     */
    public function getMtIndemnSupp() {
        return $this->mtIndemnSupp;
    }

    /**
     * Get the mt salaire brut.
     *
     * @return float Returns the mt salaire brut.
     */
    public function getMtSalaireBrut() {
        return $this->mtSalaireBrut;
    }

    /**
     * Get the nb heure mens.
     *
     * @return float Returns the nb heure mens.
     */
    public function getNbHeureMens() {
        return $this->nbHeureMens;
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
     * Get the no cacm.
     *
     * @return string Returns the no cacm.
     */
    public function getNoCacm() {
        return $this->noCacm;
    }

    /**
     * Get the no cssm.
     *
     * @return string Returns the no cssm.
     */
    public function getNoCssm() {
        return $this->noCssm;
    }

    /**
     * Get the nom marital.
     *
     * @return string Returns the nom marital.
     */
    public function getNomMarital() {
        return $this->nomMarital;
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
     * Get the organisme cacm.
     *
     * @return string Returns the organisme cacm.
     */
    public function getOrganismeCacm() {
        return $this->organismeCacm;
    }

    /**
     * Get the periode emploi deb.
     *
     * @return DateTime|null Returns the periode emploi deb.
     */
    public function getPeriodeEmploiDeb() {
        return $this->periodeEmploiDeb;
    }

    /**
     * Get the periode emploi fin.
     *
     * @return DateTime|null Returns the periode emploi fin.
     */
    public function getPeriodeEmploiFin() {
        return $this->periodeEmploiFin;
    }

    /**
     * Get the preavis non effectue paye.
     *
     * @return bool Returns the preavis non effectue paye.
     */
    public function getPreavisNonEffectuePaye() {
        return $this->preavisNonEffectuePaye;
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
     * Get the sign autre.
     *
     * @return string Returns the sign autre.
     */
    public function getSignAutre() {
        return $this->signAutre;
    }

    /**
     * Get the sign date.
     *
     * @return DateTime|null Returns the sign date.
     */
    public function getSignDate() {
        return $this->signDate;
    }

    /**
     * Get the sign form juridique.
     *
     * @return string Returns the sign form juridique.
     */
    public function getSignFormJuridique() {
        return $this->signFormJuridique;
    }

    /**
     * Get the sign motif rupture.
     *
     * @return string Returns the sign motif rupture.
     */
    public function getSignMotifRupture() {
        return $this->signMotifRupture;
    }

    /**
     * Get the sign nom.
     *
     * @return string Returns the sign nom.
     */
    public function getSignNom() {
        return $this->signNom;
    }

    /**
     * Get the sign prenom.
     *
     * @return string Returns the sign prenom.
     */
    public function getSignPrenom() {
        return $this->signPrenom;
    }

    /**
     * Get the sign qualite.
     *
     * @return int Returns the sign qualite.
     */
    public function getSignQualite() {
        return $this->signQualite;
    }

    /**
     * Get the sign raison sociale.
     *
     * @return string Returns the sign raison sociale.
     */
    public function getSignRaisonSociale() {
        return $this->signRaisonSociale;
    }

    /**
     * Get the statut cadre.
     *
     * @return bool Returns the statut cadre.
     */
    public function getStatutCadre() {
        return $this->statutCadre;
    }

    /**
     * Get the statut juridique.
     *
     * @return string Returns the statut juridique.
     */
    public function getStatutJuridique() {
        return $this->statutJuridique;
    }

    /**
     * Get the statut particulier.
     *
     * @return int Returns the statut particulier.
     */
    public function getStatutParticulier() {
        return $this->statutParticulier;
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
     * Get the titre lien parente.
     *
     * @return string Returns the titre lien parente.
     */
    public function getTitreLienParente() {
        return $this->titreLienParente;
    }

    /**
     * Get the type contrat.
     *
     * @return int Returns the type contrat.
     */
    public function getTypeContrat() {
        return $this->typeContrat;
    }

    /**
     * Get the type horaire.
     *
     * @return int Returns the type horaire.
     */
    public function getTypeHoraire() {
        return $this->typeHoraire;
    }

    /**
     * Set the adresse employe.
     *
     * @param string $adresseEmploye The adresse employe.
     */
    public function setAdresseEmploye($adresseEmploye) {
        $this->adresseEmploye = $adresseEmploye;
        return $this;
    }

    /**
     * Set the autre contrat.
     *
     * @param string $autreContrat The autre contrat.
     */
    public function setAutreContrat($autreContrat) {
        $this->autreContrat = $autreContrat;
        return $this;
    }

    /**
     * Set the autre statut.
     *
     * @param string $autreStatut The autre statut.
     */
    public function setAutreStatut($autreStatut) {
        $this->autreStatut = $autreStatut;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int $codeEtablissement The code etablissement.
     */
    public function setCodeEtablissement($codeEtablissement) {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the code motif rupture.
     *
     * @param string $codeMotifRupture The code motif rupture.
     */
    public function setCodeMotifRupture($codeMotifRupture) {
        $this->codeMotifRupture = $codeMotifRupture;
        return $this;
    }

    /**
     * Set the code postal.
     *
     * @param string $codePostal The code postal.
     */
    public function setCodePostal($codePostal) {
        $this->codePostal = $codePostal;
        return $this;
    }

    /**
     * Set the date naissance.
     *
     * @param DateTime|null $dateNaissance The date naissance.
     */
    public function setDateNaissance(DateTime $dateNaissance = null) {
        $this->dateNaissance = $dateNaissance;
        return $this;
    }

    /**
     * Set the date notification.
     *
     * @param DateTime|null $dateNotification The date notification.
     */
    public function setDateNotification(DateTime $dateNotification = null) {
        $this->dateNotification = $dateNotification;
        return $this;
    }

    /**
     * Set the date paiement.
     *
     * @param DateTime|null $datePaiement The date paiement.
     */
    public function setDatePaiement(DateTime $datePaiement = null) {
        $this->datePaiement = $datePaiement;
        return $this;
    }

    /**
     * Set the dern lieu travail.
     *
     * @param string $dernLieuTravail The dern lieu travail.
     */
    public function setDernLieuTravail($dernLieuTravail) {
        $this->dernLieuTravail = $dernLieuTravail;
        return $this;
    }

    /**
     * Set the dernier emploi.
     *
     * @param string $dernierEmploi The dernier emploi.
     */
    public function setDernierEmploi($dernierEmploi) {
        $this->dernierEmploi = $dernierEmploi;
        return $this;
    }

    /**
     * Set the dt deb preavis effectue.
     *
     * @param DateTime|null $dtDebPreavisEffectue The dt deb preavis effectue.
     */
    public function setDtDebPreavisEffectue(DateTime $dtDebPreavisEffectue = null) {
        $this->dtDebPreavisEffectue = $dtDebPreavisEffectue;
        return $this;
    }

    /**
     * Set the dt deb preavis non effectue.
     *
     * @param DateTime|null $dtDebPreavisNonEffectue The dt deb preavis non effectue.
     */
    public function setDtDebPreavisNonEffectue(DateTime $dtDebPreavisNonEffectue = null) {
        $this->dtDebPreavisNonEffectue = $dtDebPreavisNonEffectue;
        return $this;
    }

    /**
     * Set the dt debut emploi.
     *
     * @param DateTime|null $dtDebutEmploi The dt debut emploi.
     */
    public function setDtDebutEmploi(DateTime $dtDebutEmploi = null) {
        $this->dtDebutEmploi = $dtDebutEmploi;
        return $this;
    }

    /**
     * Set the dt dern jour trav.
     *
     * @param DateTime|null $dtDernJourTrav The dt dern jour trav.
     */
    public function setDtDernJourTrav(DateTime $dtDernJourTrav = null) {
        $this->dtDernJourTrav = $dtDernJourTrav;
        return $this;
    }

    /**
     * Set the dt fin emploi.
     *
     * @param DateTime|null $dtFinEmploi The dt fin emploi.
     */
    public function setDtFinEmploi(DateTime $dtFinEmploi = null) {
        $this->dtFinEmploi = $dtFinEmploi;
        return $this;
    }

    /**
     * Set the dt fin preavis effectue.
     *
     * @param DateTime|null $dtFinPreavisEffectue The dt fin preavis effectue.
     */
    public function setDtFinPreavisEffectue(DateTime $dtFinPreavisEffectue = null) {
        $this->dtFinPreavisEffectue = $dtFinPreavisEffectue;
        return $this;
    }

    /**
     * Set the dt fin preavis non effectue.
     *
     * @param DateTime|null $dtFinPreavisNonEffectue The dt fin preavis non effectue.
     */
    public function setDtFinPreavisNonEffectue(DateTime $dtFinPreavisNonEffectue = null) {
        $this->dtFinPreavisNonEffectue = $dtFinPreavisNonEffectue;
        return $this;
    }

    /**
     * Set the etbl adr.
     *
     * @param string $etblAdr The etbl adr.
     */
    public function setEtblAdr($etblAdr) {
        $this->etblAdr = $etblAdr;
        return $this;
    }

    /**
     * Set the etbl cacm.
     *
     * @param string $etblCacm The etbl cacm.
     */
    public function setEtblCacm($etblCacm) {
        $this->etblCacm = $etblCacm;
        return $this;
    }

    /**
     * Set the etbl effectif.
     *
     * @param int $etblEffectif The etbl effectif.
     */
    public function setEtblEffectif($etblEffectif) {
        $this->etblEffectif = $etblEffectif;
        return $this;
    }

    /**
     * Set the etbl fax.
     *
     * @param string $etblFax The etbl fax.
     */
    public function setEtblFax($etblFax) {
        $this->etblFax = $etblFax;
        return $this;
    }

    /**
     * Set the etbl mail.
     *
     * @param string $etblMail The etbl mail.
     */
    public function setEtblMail($etblMail) {
        $this->etblMail = $etblMail;
        return $this;
    }

    /**
     * Set the etbl naf.
     *
     * @param string $etblNaf The etbl naf.
     */
    public function setEtblNaf($etblNaf) {
        $this->etblNaf = $etblNaf;
        return $this;
    }

    /**
     * Set the etbl siret.
     *
     * @param string $etblSiret The etbl siret.
     */
    public function setEtblSiret($etblSiret) {
        $this->etblSiret = $etblSiret;
        return $this;
    }

    /**
     * Set the etbl tel.
     *
     * @param string $etblTel The etbl tel.
     */
    public function setEtblTel($etblTel) {
        $this->etblTel = $etblTel;
        return $this;
    }

    /**
     * Set the indemn autre.
     *
     * @param bool $indemnAutre The indemn autre.
     */
    public function setIndemnAutre($indemnAutre) {
        $this->indemnAutre = $indemnAutre;
        return $this;
    }

    /**
     * Set the indemn legale.
     *
     * @param bool $indemnLegale The indemn legale.
     */
    public function setIndemnLegale($indemnLegale) {
        $this->indemnLegale = $indemnLegale;
        return $this;
    }

    /**
     * Set the indemn lic.
     *
     * @param bool $indemnLic The indemn lic.
     */
    public function setIndemnLic($indemnLic) {
        $this->indemnLic = $indemnLic;
        return $this;
    }

    /**
     * Set the indemn supp.
     *
     * @param bool $indemnSupp The indemn supp.
     */
    public function setIndemnSupp($indemnSupp) {
        $this->indemnSupp = $indemnSupp;
        return $this;
    }

    /**
     * Set the lien document.
     *
     * @param string $lienDocument The lien document.
     */
    public function setLienDocument($lienDocument) {
        $this->lienDocument = $lienDocument;
        return $this;
    }

    /**
     * Set the lien parente.
     *
     * @param bool $lienParente The lien parente.
     */
    public function setLienParente($lienParente) {
        $this->lienParente = $lienParente;
        return $this;
    }

    /**
     * Set the motif preavis non paye.
     *
     * @param string $motifPreavisNonPaye The motif preavis non paye.
     */
    public function setMotifPreavisNonPaye($motifPreavisNonPaye) {
        $this->motifPreavisNonPaye = $motifPreavisNonPaye;
        return $this;
    }

    /**
     * Set the motif rupture.
     *
     * @param string $motifRupture The motif rupture.
     */
    public function setMotifRupture($motifRupture) {
        $this->motifRupture = $motifRupture;
        return $this;
    }

    /**
     * Set the mt indemn autre.
     *
     * @param float $mtIndemnAutre The mt indemn autre.
     */
    public function setMtIndemnAutre($mtIndemnAutre) {
        $this->mtIndemnAutre = $mtIndemnAutre;
        return $this;
    }

    /**
     * Set the mt indemn legale.
     *
     * @param float $mtIndemnLegale The mt indemn legale.
     */
    public function setMtIndemnLegale($mtIndemnLegale) {
        $this->mtIndemnLegale = $mtIndemnLegale;
        return $this;
    }

    /**
     * Set the mt indemn lic.
     *
     * @param float $mtIndemnLic The mt indemn lic.
     */
    public function setMtIndemnLic($mtIndemnLic) {
        $this->mtIndemnLic = $mtIndemnLic;
        return $this;
    }

    /**
     * Set the mt indemn supp.
     *
     * @param float $mtIndemnSupp The mt indemn supp.
     */
    public function setMtIndemnSupp($mtIndemnSupp) {
        $this->mtIndemnSupp = $mtIndemnSupp;
        return $this;
    }

    /**
     * Set the mt salaire brut.
     *
     * @param float $mtSalaireBrut The mt salaire brut.
     */
    public function setMtSalaireBrut($mtSalaireBrut) {
        $this->mtSalaireBrut = $mtSalaireBrut;
        return $this;
    }

    /**
     * Set the nb heure mens.
     *
     * @param float $nbHeureMens The nb heure mens.
     */
    public function setNbHeureMens($nbHeureMens) {
        $this->nbHeureMens = $nbHeureMens;
        return $this;
    }

    /**
     * Set the niveau qualif.
     *
     * @param string $niveauQualif The niveau qualif.
     */
    public function setNiveauQualif($niveauQualif) {
        $this->niveauQualif = $niveauQualif;
        return $this;
    }

    /**
     * Set the no cacm.
     *
     * @param string $noCacm The no cacm.
     */
    public function setNoCacm($noCacm) {
        $this->noCacm = $noCacm;
        return $this;
    }

    /**
     * Set the no cssm.
     *
     * @param string $noCssm The no cssm.
     */
    public function setNoCssm($noCssm) {
        $this->noCssm = $noCssm;
        return $this;
    }

    /**
     * Set the nom marital.
     *
     * @param string $nomMarital The nom marital.
     */
    public function setNomMarital($nomMarital) {
        $this->nomMarital = $nomMarital;
        return $this;
    }

    /**
     * Set the nom naissance.
     *
     * @param string $nomNaissance The nom naissance.
     */
    public function setNomNaissance($nomNaissance) {
        $this->nomNaissance = $nomNaissance;
        return $this;
    }

    /**
     * Set the numero attestation.
     *
     * @param string $numeroAttestation The numero attestation.
     */
    public function setNumeroAttestation($numeroAttestation) {
        $this->numeroAttestation = $numeroAttestation;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string $numeroEmploye The numero employe.
     */
    public function setNumeroEmploye($numeroEmploye) {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the organisme cacm.
     *
     * @param string $organismeCacm The organisme cacm.
     */
    public function setOrganismeCacm($organismeCacm) {
        $this->organismeCacm = $organismeCacm;
        return $this;
    }

    /**
     * Set the periode emploi deb.
     *
     * @param DateTime|null $periodeEmploiDeb The periode emploi deb.
     */
    public function setPeriodeEmploiDeb(DateTime $periodeEmploiDeb = null) {
        $this->periodeEmploiDeb = $periodeEmploiDeb;
        return $this;
    }

    /**
     * Set the periode emploi fin.
     *
     * @param DateTime|null $periodeEmploiFin The periode emploi fin.
     */
    public function setPeriodeEmploiFin(DateTime $periodeEmploiFin = null) {
        $this->periodeEmploiFin = $periodeEmploiFin;
        return $this;
    }

    /**
     * Set the preavis non effectue paye.
     *
     * @param bool $preavisNonEffectuePaye The preavis non effectue paye.
     */
    public function setPreavisNonEffectuePaye($preavisNonEffectuePaye) {
        $this->preavisNonEffectuePaye = $preavisNonEffectuePaye;
        return $this;
    }

    /**
     * Set the prenom.
     *
     * @param string $prenom The prenom.
     */
    public function setPrenom($prenom) {
        $this->prenom = $prenom;
        return $this;
    }

    /**
     * Set the sign autre.
     *
     * @param string $signAutre The sign autre.
     */
    public function setSignAutre($signAutre) {
        $this->signAutre = $signAutre;
        return $this;
    }

    /**
     * Set the sign date.
     *
     * @param DateTime|null $signDate The sign date.
     */
    public function setSignDate(DateTime $signDate = null) {
        $this->signDate = $signDate;
        return $this;
    }

    /**
     * Set the sign form juridique.
     *
     * @param string $signFormJuridique The sign form juridique.
     */
    public function setSignFormJuridique($signFormJuridique) {
        $this->signFormJuridique = $signFormJuridique;
        return $this;
    }

    /**
     * Set the sign motif rupture.
     *
     * @param string $signMotifRupture The sign motif rupture.
     */
    public function setSignMotifRupture($signMotifRupture) {
        $this->signMotifRupture = $signMotifRupture;
        return $this;
    }

    /**
     * Set the sign nom.
     *
     * @param string $signNom The sign nom.
     */
    public function setSignNom($signNom) {
        $this->signNom = $signNom;
        return $this;
    }

    /**
     * Set the sign prenom.
     *
     * @param string $signPrenom The sign prenom.
     */
    public function setSignPrenom($signPrenom) {
        $this->signPrenom = $signPrenom;
        return $this;
    }

    /**
     * Set the sign qualite.
     *
     * @param int $signQualite The sign qualite.
     */
    public function setSignQualite($signQualite) {
        $this->signQualite = $signQualite;
        return $this;
    }

    /**
     * Set the sign raison sociale.
     *
     * @param string $signRaisonSociale The sign raison sociale.
     */
    public function setSignRaisonSociale($signRaisonSociale) {
        $this->signRaisonSociale = $signRaisonSociale;
        return $this;
    }

    /**
     * Set the statut cadre.
     *
     * @param bool $statutCadre The statut cadre.
     */
    public function setStatutCadre($statutCadre) {
        $this->statutCadre = $statutCadre;
        return $this;
    }

    /**
     * Set the statut juridique.
     *
     * @param string $statutJuridique The statut juridique.
     */
    public function setStatutJuridique($statutJuridique) {
        $this->statutJuridique = $statutJuridique;
        return $this;
    }

    /**
     * Set the statut particulier.
     *
     * @param int $statutParticulier The statut particulier.
     */
    public function setStatutParticulier($statutParticulier) {
        $this->statutParticulier = $statutParticulier;
        return $this;
    }

    /**
     * Set the titre.
     *
     * @param string $titre The titre.
     */
    public function setTitre($titre) {
        $this->titre = $titre;
        return $this;
    }

    /**
     * Set the titre lien parente.
     *
     * @param string $titreLienParente The titre lien parente.
     */
    public function setTitreLienParente($titreLienParente) {
        $this->titreLienParente = $titreLienParente;
        return $this;
    }

    /**
     * Set the type contrat.
     *
     * @param int $typeContrat The type contrat.
     */
    public function setTypeContrat($typeContrat) {
        $this->typeContrat = $typeContrat;
        return $this;
    }

    /**
     * Set the type horaire.
     *
     * @param int $typeHoraire The type horaire.
     */
    public function setTypeHoraire($typeHoraire) {
        $this->typeHoraire = $typeHoraire;
        return $this;
    }
}
