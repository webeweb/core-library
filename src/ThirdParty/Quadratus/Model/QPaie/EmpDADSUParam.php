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
 * Emp d a d s u param model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class EmpDADSUParam {

    /**
     * Actions gratuites_ nbre.
     *
     * @var float
     */
    private $actionsGratuites_Nbre;

    /**
     * Actions gratuites_ valeur u.
     *
     * @var float
     */
    private $actionsGratuites_ValeurU;

    /**
     * Anciennete.
     *
     * @var float
     */
    private $anciennete;

    /**
     * Anciennete b t p.
     *
     * @var float
     */
    private $ancienneteBTP;

    /**
     * Annee prepa.
     *
     * @var int
     */
    private $anneePrepa;

    /**
     * At bureau.
     *
     * @var string
     */
    private $atBureau;

    /**
     * At etab.
     *
     * @var string
     */
    private $atEtab;

    /**
     * At risque.
     *
     * @var string
     */
    private $atRisque;

    /**
     * At taux.
     *
     * @var float
     */
    private $atTaux;

    /**
     * Autres sommes exo_ code1.
     *
     * @var string
     */
    private $autresSommesExo_Code1;

    /**
     * Autres sommes exo_ code2.
     *
     * @var string
     */
    private $autresSommesExo_Code2;

    /**
     * Autres sommes exo_ code3.
     *
     * @var string
     */
    private $autresSommesExo_Code3;

    /**
     * Autres sommes exo_ code4.
     *
     * @var string
     */
    private $autresSommesExo_Code4;

    /**
     * Autres sommes exo_ mnt1.
     *
     * @var float
     */
    private $autresSommesExo_Mnt1;

    /**
     * Autres sommes exo_ mnt2.
     *
     * @var float
     */
    private $autresSommesExo_Mnt2;

    /**
     * Autres sommes exo_ mnt3.
     *
     * @var float
     */
    private $autresSommesExo_Mnt3;

    /**
     * Autres sommes exo_ mnt4.
     *
     * @var float
     */
    private $autresSommesExo_Mnt4;

    /**
     * B t q lieu trav.
     *
     * @var string
     */
    private $bTQLieuTrav;

    /**
     * Base exo brut1.
     *
     * @var float
     */
    private $baseExoBrut1;

    /**
     * Base exo brut2.
     *
     * @var float
     */
    private $baseExoBrut2;

    /**
     * Base exo brut3.
     *
     * @var float
     */
    private $baseExoBrut3;

    /**
     * Base exo plaf1.
     *
     * @var float
     */
    private $baseExoPlaf1;

    /**
     * Base exo plaf2.
     *
     * @var float
     */
    private $baseExoPlaf2;

    /**
     * Base exo plaf3.
     *
     * @var float
     */
    private $baseExoPlaf3;

    /**
     * Bureau distributeur lieu trav.
     *
     * @var string
     */
    private $bureauDistributeurLieuTrav;

    /**
     * Categorie b t p.
     *
     * @var string
     */
    private $categorieBTP;

    /**
     * Code caract.
     *
     * @var string
     */
    private $codeCaract;

    /**
     * Code classe c n b f.
     *
     * @var string
     */
    private $codeClasseCNBF;

    /**
     * Code contrat trav.
     *
     * @var string
     */
    private $codeContratTrav;

    /**
     * Code convention col.
     *
     * @var string
     */
    private $codeConventionCol;

    /**
     * Code decalage paie.
     *
     * @var string
     */
    private $codeDecalagePaie;

    /**
     * Code deleg gest risque maladie.
     *
     * @var string
     */
    private $codeDelegGestRisqueMaladie;

    /**
     * Code droit contrat.
     *
     * @var string
     */
    private $codeDroitContrat;

    /**
     * Code empl mult.
     *
     * @var string
     */
    private $codeEmplMult;

    /**
     * Code emplois mult.
     *
     * @var string
     */
    private $codeEmploisMult;

    /**
     * Code etablissement.
     *
     * @var int
     */
    private $codeEtablissement;

    /**
     * Code etat contrat prud.
     *
     * @var string
     */
    private $codeEtatContratPrud;

    /**
     * Code extension alsace moselle.
     *
     * @var string
     */
    private $codeExtensionAlsaceMoselle;

    /**
     * Code insee lieu trav.
     *
     * @var string
     */
    private $codeInseeLieuTrav;

    /**
     * Code motif deb per.
     *
     * @var string
     */
    private $codeMotifDebPer;

    /**
     * Code motif deb per2.
     *
     * @var string
     */
    private $codeMotifDebPer2;

    /**
     * Code motif deb per3.
     *
     * @var string
     */
    private $codeMotifDebPer3;

    /**
     * Code motif deb per4.
     *
     * @var string
     */
    private $codeMotifDebPer4;

    /**
     * Code motif deb per5.
     *
     * @var string
     */
    private $codeMotifDebPer5;

    /**
     * Code motif fin per.
     *
     * @var string
     */
    private $codeMotifFinPer;

    /**
     * Code motif fin per2.
     *
     * @var string
     */
    private $codeMotifFinPer2;

    /**
     * Code motif fin per3.
     *
     * @var string
     */
    private $codeMotifFinPer3;

    /**
     * Code motif fin per4.
     *
     * @var string
     */
    private $codeMotifFinPer4;

    /**
     * Code motif fin per5.
     *
     * @var string
     */
    private $codeMotifFinPer5;

    /**
     * Code nature base cotisations.
     *
     * @var string
     */
    private $codeNatureBaseCotisations;

    /**
     * Code officiel commune lieu trav.
     *
     * @var string
     */
    private $codeOfficielCommuneLieuTrav;

    /**
     * Code postal lieu trav.
     *
     * @var string
     */
    private $codePostalLieuTrav;

    /**
     * Code regime1.
     *
     * @var string
     */
    private $codeRegime1;

    /**
     * Code regime2.
     *
     * @var string
     */
    private $codeRegime2;

    /**
     * Code regime3.
     *
     * @var string
     */
    private $codeRegime3;

    /**
     * Code regime b t p.
     *
     * @var string
     */
    private $codeRegimeBTP;

    /**
     * Code regime base obl.
     *
     * @var string
     */
    private $codeRegimeBaseObl;

    /**
     * Code regime base obl a t.
     *
     * @var string
     */
    private $codeRegimeBaseOblAT;

    /**
     * Code regime base obl maladie.
     *
     * @var string
     */
    private $codeRegimeBaseOblMaladie;

    /**
     * Code regime base obl vieil pat.
     *
     * @var string
     */
    private $codeRegimeBaseOblVieilPat;

    /**
     * Code regime base obl vieil sal.
     *
     * @var string
     */
    private $codeRegimeBaseOblVieilSal;

    /**
     * Code statut categ.
     *
     * @var string
     */
    private $codeStatutCateg;

    /**
     * Code statut categ conv.
     *
     * @var string
     */
    private $codeStatutCategConv;

    /**
     * Code statut categ irc.
     *
     * @var string
     */
    private $codeStatutCategIrc;

    /**
     * Code statut pro.
     *
     * @var string
     */
    private $codeStatutPro;

    /**
     * Code type exo1.
     *
     * @var string
     */
    private $codeTypeExo1;

    /**
     * Code type exo2.
     *
     * @var string
     */
    private $codeTypeExo2;

    /**
     * Code type exo3.
     *
     * @var string
     */
    private $codeTypeExo3;

    /**
     * Commentaire.
     *
     * @var string
     */
    private $commentaire;

    /**
     * Complement lieu trav.
     *
     * @var string
     */
    private $complementLieuTrav;

    /**
     * D a d s u conjoint salarie.
     *
     * @var string
     */
    private $dADSUConjointSalarie;

    /**
     * D a d s u_ nb options.
     *
     * @var float
     */
    private $dADSU_NbOptions;

    /**
     * D a d s u_ prix souscript opt.
     *
     * @var float
     */
    private $dADSU_PrixSouscriptOpt;

    /**
     * D a d s u_ valeur action.
     *
     * @var float
     */
    private $dADSU_ValeurAction;

    /**
     * Date ctrl norme.
     *
     * @var DateTime
     */
    private $dateCtrlNorme;

    /**
     * Date ctrl norme b t p.
     *
     * @var DateTime
     */
    private $dateCtrlNormeBTP;

    /**
     * Date ctrl norme prev.
     *
     * @var DateTime
     */
    private $dateCtrlNormePrev;

    /**
     * Date ctrl norme ret.
     *
     * @var DateTime
     */
    private $dateCtrlNormeRet;

    /**
     * Debut periode decl.
     *
     * @var DateTime
     */
    private $debutPeriodeDecl;

    /**
     * Echelon.
     *
     * @var string
     */
    private $echelon;

    /**
     * Emploi.
     *
     * @var string
     */
    private $emploi;

    /**
     * Epargne sal_ code1.
     *
     * @var string
     */
    private $epargneSal_Code1;

    /**
     * Epargne sal_ code2.
     *
     * @var string
     */
    private $epargneSal_Code2;

    /**
     * Epargne sal_ code3.
     *
     * @var string
     */
    private $epargneSal_Code3;

    /**
     * Epargne sal_ code4.
     *
     * @var string
     */
    private $epargneSal_Code4;

    /**
     * Epargne sal_ mnt1.
     *
     * @var float
     */
    private $epargneSal_Mnt1;

    /**
     * Epargne sal_ mnt2.
     *
     * @var float
     */
    private $epargneSal_Mnt2;

    /**
     * Epargne sal_ mnt3.
     *
     * @var float
     */
    private $epargneSal_Mnt3;

    /**
     * Epargne sal_ mnt4.
     *
     * @var float
     */
    private $epargneSal_Mnt4;

    /**
     * Etat ctrl norme.
     *
     * @var string
     */
    private $etatCtrlNorme;

    /**
     * Etat ctrl norme b t p.
     *
     * @var string
     */
    private $etatCtrlNormeBTP;

    /**
     * Etat ctrl norme prev.
     *
     * @var string
     */
    private $etatCtrlNormePrev;

    /**
     * Etat ctrl norme ret.
     *
     * @var string
     */
    private $etatCtrlNormeRet;

    /**
     * Exo a g f f.
     *
     * @var bool
     */
    private $exoAGFF;

    /**
     * Fin periode decl.
     *
     * @var DateTime
     */
    private $finPeriodeDecl;

    /**
     * G p e c_ mnt exo c s g c r d s.
     *
     * @var float
     */
    private $gPEC_MntExoCSGCRDS;

    /**
     * G p e c_ mnt exo cot secu.
     *
     * @var float
     */
    private $gPEC_MntExoCotSecu;

    /**
     * Indemn cp plaf.
     *
     * @var float
     */
    private $indemnCpPlaf;

    /**
     * Indemn rupture_ code1.
     *
     * @var string
     */
    private $indemnRupture_Code1;

    /**
     * Indemn rupture_ code2.
     *
     * @var string
     */
    private $indemnRupture_Code2;

    /**
     * Indemn rupture_ mnt1.
     *
     * @var float
     */
    private $indemnRupture_Mnt1;

    /**
     * Indemn rupture_ mnt2.
     *
     * @var float
     */
    private $indemnRupture_Mnt2;

    /**
     * Indice.
     *
     * @var string
     */
    private $indice;

    /**
     * Nb periodicite ircantec.
     *
     * @var float
     */
    private $nbPeriodiciteIrcantec;

    /**
     * Nbh etab b t p.
     *
     * @var float
     */
    private $nbhEtabBTP;

    /**
     * Nbh sal b t p.
     *
     * @var float
     */
    private $nbhSalBTP;

    /**
     * Nic etab affectation.
     *
     * @var string
     */
    private $nicEtabAffectation;

    /**
     * Niveau.
     *
     * @var string
     */
    private $niveau;

    /**
     * Nom ville insee lieu trav.
     *
     * @var string
     */
    private $nomVilleInseeLieuTrav;

    /**
     * Nom ville lieu trav.
     *
     * @var string
     */
    private $nomVilleLieuTrav;

    /**
     * Nom voie lieu trav.
     *
     * @var string
     */
    private $nomVoieLieuTrav;

    /**
     * Num voie lieu trav.
     *
     * @var string
     */
    private $numVoieLieuTrav;

    /**
     * Numero.
     *
     * @var string
     */
    private $numero;

    /**
     * Numero adhesion b t p.
     *
     * @var string
     */
    private $numeroAdhesionBTP;

    /**
     * Numero affil f n c.
     *
     * @var string
     */
    private $numeroAffilFNC;

    /**
     * Numero ordre.
     *
     * @var int
     */
    private $numeroOrdre;

    /**
     * Numero rattach1.
     *
     * @var string
     */
    private $numeroRattach1;

    /**
     * Numero rattach2.
     *
     * @var string
     */
    private $numeroRattach2;

    /**
     * Numero rattach3.
     *
     * @var string
     */
    private $numeroRattach3;

    /**
     * Numero rattach b t p.
     *
     * @var string
     */
    private $numeroRattachBTP;

    /**
     * Particip patron avtge_ code1.
     *
     * @var string
     */
    private $participPatronAvtge_Code1;

    /**
     * Particip patron avtge_ code2.
     *
     * @var string
     */
    private $participPatronAvtge_Code2;

    /**
     * Particip patron avtge_ mnt1.
     *
     * @var float
     */
    private $participPatronAvtge_Mnt1;

    /**
     * Particip patron avtge_ mnt2.
     *
     * @var float
     */
    private $participPatronAvtge_Mnt2;

    /**
     * Periodicite ircantec.
     *
     * @var string
     */
    private $periodiciteIrcantec;

    /**
     * Position.
     *
     * @var string
     */
    private $position;

    /**
     * Pourcent act.
     *
     * @var float
     */
    private $pourcentAct;

    /**
     * Remun medecins.
     *
     * @var float
     */
    private $remunMedecins;

    /**
     * Siret lieu trav.
     *
     * @var string
     */
    private $siretLieuTrav;

    /**
     * Statut cotisant b t p.
     *
     * @var string
     */
    private $statutCotisantBTP;

    /**
     * Suppl fam.
     *
     * @var float
     */
    private $supplFam;

    /**
     * T d s59.
     *
     * @var string
     */
    private $tDS59;

    /**
     * Type affil b t p.
     *
     * @var string
     */
    private $typeAffilBTP;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the actions gratuites_ nbre.
     *
     * @return float Returns the actions gratuites_ nbre.
     */
    public function getActionsGratuites_Nbre() {
        return $this->actionsGratuites_Nbre;
    }

    /**
     * Get the actions gratuites_ valeur u.
     *
     * @return float Returns the actions gratuites_ valeur u.
     */
    public function getActionsGratuites_ValeurU() {
        return $this->actionsGratuites_ValeurU;
    }

    /**
     * Get the anciennete.
     *
     * @return float Returns the anciennete.
     */
    public function getAnciennete() {
        return $this->anciennete;
    }

    /**
     * Get the anciennete b t p.
     *
     * @return float Returns the anciennete b t p.
     */
    public function getAncienneteBTP() {
        return $this->ancienneteBTP;
    }

    /**
     * Get the annee prepa.
     *
     * @return int Returns the annee prepa.
     */
    public function getAnneePrepa() {
        return $this->anneePrepa;
    }

    /**
     * Get the at bureau.
     *
     * @return string Returns the at bureau.
     */
    public function getAtBureau() {
        return $this->atBureau;
    }

    /**
     * Get the at etab.
     *
     * @return string Returns the at etab.
     */
    public function getAtEtab() {
        return $this->atEtab;
    }

    /**
     * Get the at risque.
     *
     * @return string Returns the at risque.
     */
    public function getAtRisque() {
        return $this->atRisque;
    }

    /**
     * Get the at taux.
     *
     * @return float Returns the at taux.
     */
    public function getAtTaux() {
        return $this->atTaux;
    }

    /**
     * Get the autres sommes exo_ code1.
     *
     * @return string Returns the autres sommes exo_ code1.
     */
    public function getAutresSommesExo_Code1() {
        return $this->autresSommesExo_Code1;
    }

    /**
     * Get the autres sommes exo_ code2.
     *
     * @return string Returns the autres sommes exo_ code2.
     */
    public function getAutresSommesExo_Code2() {
        return $this->autresSommesExo_Code2;
    }

    /**
     * Get the autres sommes exo_ code3.
     *
     * @return string Returns the autres sommes exo_ code3.
     */
    public function getAutresSommesExo_Code3() {
        return $this->autresSommesExo_Code3;
    }

    /**
     * Get the autres sommes exo_ code4.
     *
     * @return string Returns the autres sommes exo_ code4.
     */
    public function getAutresSommesExo_Code4() {
        return $this->autresSommesExo_Code4;
    }

    /**
     * Get the autres sommes exo_ mnt1.
     *
     * @return float Returns the autres sommes exo_ mnt1.
     */
    public function getAutresSommesExo_Mnt1() {
        return $this->autresSommesExo_Mnt1;
    }

    /**
     * Get the autres sommes exo_ mnt2.
     *
     * @return float Returns the autres sommes exo_ mnt2.
     */
    public function getAutresSommesExo_Mnt2() {
        return $this->autresSommesExo_Mnt2;
    }

    /**
     * Get the autres sommes exo_ mnt3.
     *
     * @return float Returns the autres sommes exo_ mnt3.
     */
    public function getAutresSommesExo_Mnt3() {
        return $this->autresSommesExo_Mnt3;
    }

    /**
     * Get the autres sommes exo_ mnt4.
     *
     * @return float Returns the autres sommes exo_ mnt4.
     */
    public function getAutresSommesExo_Mnt4() {
        return $this->autresSommesExo_Mnt4;
    }

    /**
     * Get the b t q lieu trav.
     *
     * @return string Returns the b t q lieu trav.
     */
    public function getBTQLieuTrav() {
        return $this->bTQLieuTrav;
    }

    /**
     * Get the base exo brut1.
     *
     * @return float Returns the base exo brut1.
     */
    public function getBaseExoBrut1() {
        return $this->baseExoBrut1;
    }

    /**
     * Get the base exo brut2.
     *
     * @return float Returns the base exo brut2.
     */
    public function getBaseExoBrut2() {
        return $this->baseExoBrut2;
    }

    /**
     * Get the base exo brut3.
     *
     * @return float Returns the base exo brut3.
     */
    public function getBaseExoBrut3() {
        return $this->baseExoBrut3;
    }

    /**
     * Get the base exo plaf1.
     *
     * @return float Returns the base exo plaf1.
     */
    public function getBaseExoPlaf1() {
        return $this->baseExoPlaf1;
    }

    /**
     * Get the base exo plaf2.
     *
     * @return float Returns the base exo plaf2.
     */
    public function getBaseExoPlaf2() {
        return $this->baseExoPlaf2;
    }

    /**
     * Get the base exo plaf3.
     *
     * @return float Returns the base exo plaf3.
     */
    public function getBaseExoPlaf3() {
        return $this->baseExoPlaf3;
    }

    /**
     * Get the bureau distributeur lieu trav.
     *
     * @return string Returns the bureau distributeur lieu trav.
     */
    public function getBureauDistributeurLieuTrav() {
        return $this->bureauDistributeurLieuTrav;
    }

    /**
     * Get the categorie b t p.
     *
     * @return string Returns the categorie b t p.
     */
    public function getCategorieBTP() {
        return $this->categorieBTP;
    }

    /**
     * Get the code caract.
     *
     * @return string Returns the code caract.
     */
    public function getCodeCaract() {
        return $this->codeCaract;
    }

    /**
     * Get the code classe c n b f.
     *
     * @return string Returns the code classe c n b f.
     */
    public function getCodeClasseCNBF() {
        return $this->codeClasseCNBF;
    }

    /**
     * Get the code contrat trav.
     *
     * @return string Returns the code contrat trav.
     */
    public function getCodeContratTrav() {
        return $this->codeContratTrav;
    }

    /**
     * Get the code convention col.
     *
     * @return string Returns the code convention col.
     */
    public function getCodeConventionCol() {
        return $this->codeConventionCol;
    }

    /**
     * Get the code decalage paie.
     *
     * @return string Returns the code decalage paie.
     */
    public function getCodeDecalagePaie() {
        return $this->codeDecalagePaie;
    }

    /**
     * Get the code deleg gest risque maladie.
     *
     * @return string Returns the code deleg gest risque maladie.
     */
    public function getCodeDelegGestRisqueMaladie() {
        return $this->codeDelegGestRisqueMaladie;
    }

    /**
     * Get the code droit contrat.
     *
     * @return string Returns the code droit contrat.
     */
    public function getCodeDroitContrat() {
        return $this->codeDroitContrat;
    }

    /**
     * Get the code empl mult.
     *
     * @return string Returns the code empl mult.
     */
    public function getCodeEmplMult() {
        return $this->codeEmplMult;
    }

    /**
     * Get the code emplois mult.
     *
     * @return string Returns the code emplois mult.
     */
    public function getCodeEmploisMult() {
        return $this->codeEmploisMult;
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
     * Get the code etat contrat prud.
     *
     * @return string Returns the code etat contrat prud.
     */
    public function getCodeEtatContratPrud() {
        return $this->codeEtatContratPrud;
    }

    /**
     * Get the code extension alsace moselle.
     *
     * @return string Returns the code extension alsace moselle.
     */
    public function getCodeExtensionAlsaceMoselle() {
        return $this->codeExtensionAlsaceMoselle;
    }

    /**
     * Get the code insee lieu trav.
     *
     * @return string Returns the code insee lieu trav.
     */
    public function getCodeInseeLieuTrav() {
        return $this->codeInseeLieuTrav;
    }

    /**
     * Get the code motif deb per.
     *
     * @return string Returns the code motif deb per.
     */
    public function getCodeMotifDebPer() {
        return $this->codeMotifDebPer;
    }

    /**
     * Get the code motif deb per2.
     *
     * @return string Returns the code motif deb per2.
     */
    public function getCodeMotifDebPer2() {
        return $this->codeMotifDebPer2;
    }

    /**
     * Get the code motif deb per3.
     *
     * @return string Returns the code motif deb per3.
     */
    public function getCodeMotifDebPer3() {
        return $this->codeMotifDebPer3;
    }

    /**
     * Get the code motif deb per4.
     *
     * @return string Returns the code motif deb per4.
     */
    public function getCodeMotifDebPer4() {
        return $this->codeMotifDebPer4;
    }

    /**
     * Get the code motif deb per5.
     *
     * @return string Returns the code motif deb per5.
     */
    public function getCodeMotifDebPer5() {
        return $this->codeMotifDebPer5;
    }

    /**
     * Get the code motif fin per.
     *
     * @return string Returns the code motif fin per.
     */
    public function getCodeMotifFinPer() {
        return $this->codeMotifFinPer;
    }

    /**
     * Get the code motif fin per2.
     *
     * @return string Returns the code motif fin per2.
     */
    public function getCodeMotifFinPer2() {
        return $this->codeMotifFinPer2;
    }

    /**
     * Get the code motif fin per3.
     *
     * @return string Returns the code motif fin per3.
     */
    public function getCodeMotifFinPer3() {
        return $this->codeMotifFinPer3;
    }

    /**
     * Get the code motif fin per4.
     *
     * @return string Returns the code motif fin per4.
     */
    public function getCodeMotifFinPer4() {
        return $this->codeMotifFinPer4;
    }

    /**
     * Get the code motif fin per5.
     *
     * @return string Returns the code motif fin per5.
     */
    public function getCodeMotifFinPer5() {
        return $this->codeMotifFinPer5;
    }

    /**
     * Get the code nature base cotisations.
     *
     * @return string Returns the code nature base cotisations.
     */
    public function getCodeNatureBaseCotisations() {
        return $this->codeNatureBaseCotisations;
    }

    /**
     * Get the code officiel commune lieu trav.
     *
     * @return string Returns the code officiel commune lieu trav.
     */
    public function getCodeOfficielCommuneLieuTrav() {
        return $this->codeOfficielCommuneLieuTrav;
    }

    /**
     * Get the code postal lieu trav.
     *
     * @return string Returns the code postal lieu trav.
     */
    public function getCodePostalLieuTrav() {
        return $this->codePostalLieuTrav;
    }

    /**
     * Get the code regime1.
     *
     * @return string Returns the code regime1.
     */
    public function getCodeRegime1() {
        return $this->codeRegime1;
    }

    /**
     * Get the code regime2.
     *
     * @return string Returns the code regime2.
     */
    public function getCodeRegime2() {
        return $this->codeRegime2;
    }

    /**
     * Get the code regime3.
     *
     * @return string Returns the code regime3.
     */
    public function getCodeRegime3() {
        return $this->codeRegime3;
    }

    /**
     * Get the code regime b t p.
     *
     * @return string Returns the code regime b t p.
     */
    public function getCodeRegimeBTP() {
        return $this->codeRegimeBTP;
    }

    /**
     * Get the code regime base obl.
     *
     * @return string Returns the code regime base obl.
     */
    public function getCodeRegimeBaseObl() {
        return $this->codeRegimeBaseObl;
    }

    /**
     * Get the code regime base obl a t.
     *
     * @return string Returns the code regime base obl a t.
     */
    public function getCodeRegimeBaseOblAT() {
        return $this->codeRegimeBaseOblAT;
    }

    /**
     * Get the code regime base obl maladie.
     *
     * @return string Returns the code regime base obl maladie.
     */
    public function getCodeRegimeBaseOblMaladie() {
        return $this->codeRegimeBaseOblMaladie;
    }

    /**
     * Get the code regime base obl vieil pat.
     *
     * @return string Returns the code regime base obl vieil pat.
     */
    public function getCodeRegimeBaseOblVieilPat() {
        return $this->codeRegimeBaseOblVieilPat;
    }

    /**
     * Get the code regime base obl vieil sal.
     *
     * @return string Returns the code regime base obl vieil sal.
     */
    public function getCodeRegimeBaseOblVieilSal() {
        return $this->codeRegimeBaseOblVieilSal;
    }

    /**
     * Get the code statut categ.
     *
     * @return string Returns the code statut categ.
     */
    public function getCodeStatutCateg() {
        return $this->codeStatutCateg;
    }

    /**
     * Get the code statut categ conv.
     *
     * @return string Returns the code statut categ conv.
     */
    public function getCodeStatutCategConv() {
        return $this->codeStatutCategConv;
    }

    /**
     * Get the code statut categ irc.
     *
     * @return string Returns the code statut categ irc.
     */
    public function getCodeStatutCategIrc() {
        return $this->codeStatutCategIrc;
    }

    /**
     * Get the code statut pro.
     *
     * @return string Returns the code statut pro.
     */
    public function getCodeStatutPro() {
        return $this->codeStatutPro;
    }

    /**
     * Get the code type exo1.
     *
     * @return string Returns the code type exo1.
     */
    public function getCodeTypeExo1() {
        return $this->codeTypeExo1;
    }

    /**
     * Get the code type exo2.
     *
     * @return string Returns the code type exo2.
     */
    public function getCodeTypeExo2() {
        return $this->codeTypeExo2;
    }

    /**
     * Get the code type exo3.
     *
     * @return string Returns the code type exo3.
     */
    public function getCodeTypeExo3() {
        return $this->codeTypeExo3;
    }

    /**
     * Get the commentaire.
     *
     * @return string Returns the commentaire.
     */
    public function getCommentaire() {
        return $this->commentaire;
    }

    /**
     * Get the complement lieu trav.
     *
     * @return string Returns the complement lieu trav.
     */
    public function getComplementLieuTrav() {
        return $this->complementLieuTrav;
    }

    /**
     * Get the d a d s u conjoint salarie.
     *
     * @return string Returns the d a d s u conjoint salarie.
     */
    public function getDADSUConjointSalarie() {
        return $this->dADSUConjointSalarie;
    }

    /**
     * Get the d a d s u_ nb options.
     *
     * @return float Returns the d a d s u_ nb options.
     */
    public function getDADSU_NbOptions() {
        return $this->dADSU_NbOptions;
    }

    /**
     * Get the d a d s u_ prix souscript opt.
     *
     * @return float Returns the d a d s u_ prix souscript opt.
     */
    public function getDADSU_PrixSouscriptOpt() {
        return $this->dADSU_PrixSouscriptOpt;
    }

    /**
     * Get the d a d s u_ valeur action.
     *
     * @return float Returns the d a d s u_ valeur action.
     */
    public function getDADSU_ValeurAction() {
        return $this->dADSU_ValeurAction;
    }

    /**
     * Get the date ctrl norme.
     *
     * @return DateTime Returns the date ctrl norme.
     */
    public function getDateCtrlNorme() {
        return $this->dateCtrlNorme;
    }

    /**
     * Get the date ctrl norme b t p.
     *
     * @return DateTime Returns the date ctrl norme b t p.
     */
    public function getDateCtrlNormeBTP() {
        return $this->dateCtrlNormeBTP;
    }

    /**
     * Get the date ctrl norme prev.
     *
     * @return DateTime Returns the date ctrl norme prev.
     */
    public function getDateCtrlNormePrev() {
        return $this->dateCtrlNormePrev;
    }

    /**
     * Get the date ctrl norme ret.
     *
     * @return DateTime Returns the date ctrl norme ret.
     */
    public function getDateCtrlNormeRet() {
        return $this->dateCtrlNormeRet;
    }

    /**
     * Get the debut periode decl.
     *
     * @return DateTime Returns the debut periode decl.
     */
    public function getDebutPeriodeDecl() {
        return $this->debutPeriodeDecl;
    }

    /**
     * Get the echelon.
     *
     * @return string Returns the echelon.
     */
    public function getEchelon() {
        return $this->echelon;
    }

    /**
     * Get the emploi.
     *
     * @return string Returns the emploi.
     */
    public function getEmploi() {
        return $this->emploi;
    }

    /**
     * Get the epargne sal_ code1.
     *
     * @return string Returns the epargne sal_ code1.
     */
    public function getEpargneSal_Code1() {
        return $this->epargneSal_Code1;
    }

    /**
     * Get the epargne sal_ code2.
     *
     * @return string Returns the epargne sal_ code2.
     */
    public function getEpargneSal_Code2() {
        return $this->epargneSal_Code2;
    }

    /**
     * Get the epargne sal_ code3.
     *
     * @return string Returns the epargne sal_ code3.
     */
    public function getEpargneSal_Code3() {
        return $this->epargneSal_Code3;
    }

    /**
     * Get the epargne sal_ code4.
     *
     * @return string Returns the epargne sal_ code4.
     */
    public function getEpargneSal_Code4() {
        return $this->epargneSal_Code4;
    }

    /**
     * Get the epargne sal_ mnt1.
     *
     * @return float Returns the epargne sal_ mnt1.
     */
    public function getEpargneSal_Mnt1() {
        return $this->epargneSal_Mnt1;
    }

    /**
     * Get the epargne sal_ mnt2.
     *
     * @return float Returns the epargne sal_ mnt2.
     */
    public function getEpargneSal_Mnt2() {
        return $this->epargneSal_Mnt2;
    }

    /**
     * Get the epargne sal_ mnt3.
     *
     * @return float Returns the epargne sal_ mnt3.
     */
    public function getEpargneSal_Mnt3() {
        return $this->epargneSal_Mnt3;
    }

    /**
     * Get the epargne sal_ mnt4.
     *
     * @return float Returns the epargne sal_ mnt4.
     */
    public function getEpargneSal_Mnt4() {
        return $this->epargneSal_Mnt4;
    }

    /**
     * Get the etat ctrl norme.
     *
     * @return string Returns the etat ctrl norme.
     */
    public function getEtatCtrlNorme() {
        return $this->etatCtrlNorme;
    }

    /**
     * Get the etat ctrl norme b t p.
     *
     * @return string Returns the etat ctrl norme b t p.
     */
    public function getEtatCtrlNormeBTP() {
        return $this->etatCtrlNormeBTP;
    }

    /**
     * Get the etat ctrl norme prev.
     *
     * @return string Returns the etat ctrl norme prev.
     */
    public function getEtatCtrlNormePrev() {
        return $this->etatCtrlNormePrev;
    }

    /**
     * Get the etat ctrl norme ret.
     *
     * @return string Returns the etat ctrl norme ret.
     */
    public function getEtatCtrlNormeRet() {
        return $this->etatCtrlNormeRet;
    }

    /**
     * Get the exo a g f f.
     *
     * @return bool Returns the exo a g f f.
     */
    public function getExoAGFF() {
        return $this->exoAGFF;
    }

    /**
     * Get the fin periode decl.
     *
     * @return DateTime Returns the fin periode decl.
     */
    public function getFinPeriodeDecl() {
        return $this->finPeriodeDecl;
    }

    /**
     * Get the g p e c_ mnt exo c s g c r d s.
     *
     * @return float Returns the g p e c_ mnt exo c s g c r d s.
     */
    public function getGPEC_MntExoCSGCRDS() {
        return $this->gPEC_MntExoCSGCRDS;
    }

    /**
     * Get the g p e c_ mnt exo cot secu.
     *
     * @return float Returns the g p e c_ mnt exo cot secu.
     */
    public function getGPEC_MntExoCotSecu() {
        return $this->gPEC_MntExoCotSecu;
    }

    /**
     * Get the indemn cp plaf.
     *
     * @return float Returns the indemn cp plaf.
     */
    public function getIndemnCpPlaf() {
        return $this->indemnCpPlaf;
    }

    /**
     * Get the indemn rupture_ code1.
     *
     * @return string Returns the indemn rupture_ code1.
     */
    public function getIndemnRupture_Code1() {
        return $this->indemnRupture_Code1;
    }

    /**
     * Get the indemn rupture_ code2.
     *
     * @return string Returns the indemn rupture_ code2.
     */
    public function getIndemnRupture_Code2() {
        return $this->indemnRupture_Code2;
    }

    /**
     * Get the indemn rupture_ mnt1.
     *
     * @return float Returns the indemn rupture_ mnt1.
     */
    public function getIndemnRupture_Mnt1() {
        return $this->indemnRupture_Mnt1;
    }

    /**
     * Get the indemn rupture_ mnt2.
     *
     * @return float Returns the indemn rupture_ mnt2.
     */
    public function getIndemnRupture_Mnt2() {
        return $this->indemnRupture_Mnt2;
    }

    /**
     * Get the indice.
     *
     * @return string Returns the indice.
     */
    public function getIndice() {
        return $this->indice;
    }

    /**
     * Get the nb periodicite ircantec.
     *
     * @return float Returns the nb periodicite ircantec.
     */
    public function getNbPeriodiciteIrcantec() {
        return $this->nbPeriodiciteIrcantec;
    }

    /**
     * Get the nbh etab b t p.
     *
     * @return float Returns the nbh etab b t p.
     */
    public function getNbhEtabBTP() {
        return $this->nbhEtabBTP;
    }

    /**
     * Get the nbh sal b t p.
     *
     * @return float Returns the nbh sal b t p.
     */
    public function getNbhSalBTP() {
        return $this->nbhSalBTP;
    }

    /**
     * Get the nic etab affectation.
     *
     * @return string Returns the nic etab affectation.
     */
    public function getNicEtabAffectation() {
        return $this->nicEtabAffectation;
    }

    /**
     * Get the niveau.
     *
     * @return string Returns the niveau.
     */
    public function getNiveau() {
        return $this->niveau;
    }

    /**
     * Get the nom ville insee lieu trav.
     *
     * @return string Returns the nom ville insee lieu trav.
     */
    public function getNomVilleInseeLieuTrav() {
        return $this->nomVilleInseeLieuTrav;
    }

    /**
     * Get the nom ville lieu trav.
     *
     * @return string Returns the nom ville lieu trav.
     */
    public function getNomVilleLieuTrav() {
        return $this->nomVilleLieuTrav;
    }

    /**
     * Get the nom voie lieu trav.
     *
     * @return string Returns the nom voie lieu trav.
     */
    public function getNomVoieLieuTrav() {
        return $this->nomVoieLieuTrav;
    }

    /**
     * Get the num voie lieu trav.
     *
     * @return string Returns the num voie lieu trav.
     */
    public function getNumVoieLieuTrav() {
        return $this->numVoieLieuTrav;
    }

    /**
     * Get the numero.
     *
     * @return string Returns the numero.
     */
    public function getNumero() {
        return $this->numero;
    }

    /**
     * Get the numero adhesion b t p.
     *
     * @return string Returns the numero adhesion b t p.
     */
    public function getNumeroAdhesionBTP() {
        return $this->numeroAdhesionBTP;
    }

    /**
     * Get the numero affil f n c.
     *
     * @return string Returns the numero affil f n c.
     */
    public function getNumeroAffilFNC() {
        return $this->numeroAffilFNC;
    }

    /**
     * Get the numero ordre.
     *
     * @return int Returns the numero ordre.
     */
    public function getNumeroOrdre() {
        return $this->numeroOrdre;
    }

    /**
     * Get the numero rattach1.
     *
     * @return string Returns the numero rattach1.
     */
    public function getNumeroRattach1() {
        return $this->numeroRattach1;
    }

    /**
     * Get the numero rattach2.
     *
     * @return string Returns the numero rattach2.
     */
    public function getNumeroRattach2() {
        return $this->numeroRattach2;
    }

    /**
     * Get the numero rattach3.
     *
     * @return string Returns the numero rattach3.
     */
    public function getNumeroRattach3() {
        return $this->numeroRattach3;
    }

    /**
     * Get the numero rattach b t p.
     *
     * @return string Returns the numero rattach b t p.
     */
    public function getNumeroRattachBTP() {
        return $this->numeroRattachBTP;
    }

    /**
     * Get the particip patron avtge_ code1.
     *
     * @return string Returns the particip patron avtge_ code1.
     */
    public function getParticipPatronAvtge_Code1() {
        return $this->participPatronAvtge_Code1;
    }

    /**
     * Get the particip patron avtge_ code2.
     *
     * @return string Returns the particip patron avtge_ code2.
     */
    public function getParticipPatronAvtge_Code2() {
        return $this->participPatronAvtge_Code2;
    }

    /**
     * Get the particip patron avtge_ mnt1.
     *
     * @return float Returns the particip patron avtge_ mnt1.
     */
    public function getParticipPatronAvtge_Mnt1() {
        return $this->participPatronAvtge_Mnt1;
    }

    /**
     * Get the particip patron avtge_ mnt2.
     *
     * @return float Returns the particip patron avtge_ mnt2.
     */
    public function getParticipPatronAvtge_Mnt2() {
        return $this->participPatronAvtge_Mnt2;
    }

    /**
     * Get the periodicite ircantec.
     *
     * @return string Returns the periodicite ircantec.
     */
    public function getPeriodiciteIrcantec() {
        return $this->periodiciteIrcantec;
    }

    /**
     * Get the position.
     *
     * @return string Returns the position.
     */
    public function getPosition() {
        return $this->position;
    }

    /**
     * Get the pourcent act.
     *
     * @return float Returns the pourcent act.
     */
    public function getPourcentAct() {
        return $this->pourcentAct;
    }

    /**
     * Get the remun medecins.
     *
     * @return float Returns the remun medecins.
     */
    public function getRemunMedecins() {
        return $this->remunMedecins;
    }

    /**
     * Get the siret lieu trav.
     *
     * @return string Returns the siret lieu trav.
     */
    public function getSiretLieuTrav() {
        return $this->siretLieuTrav;
    }

    /**
     * Get the statut cotisant b t p.
     *
     * @return string Returns the statut cotisant b t p.
     */
    public function getStatutCotisantBTP() {
        return $this->statutCotisantBTP;
    }

    /**
     * Get the suppl fam.
     *
     * @return float Returns the suppl fam.
     */
    public function getSupplFam() {
        return $this->supplFam;
    }

    /**
     * Get the t d s59.
     *
     * @return string Returns the t d s59.
     */
    public function getTDS59() {
        return $this->tDS59;
    }

    /**
     * Get the type affil b t p.
     *
     * @return string Returns the type affil b t p.
     */
    public function getTypeAffilBTP() {
        return $this->typeAffilBTP;
    }

    /**
     * Set the actions gratuites_ nbre.
     *
     * @param float $actionsGratuites_Nbre The actions gratuites_ nbre.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setActionsGratuites_Nbre($actionsGratuites_Nbre) {
        $this->actionsGratuites_Nbre = $actionsGratuites_Nbre;
        return $this;
    }

    /**
     * Set the actions gratuites_ valeur u.
     *
     * @param float $actionsGratuites_ValeurU The actions gratuites_ valeur u.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setActionsGratuites_ValeurU($actionsGratuites_ValeurU) {
        $this->actionsGratuites_ValeurU = $actionsGratuites_ValeurU;
        return $this;
    }

    /**
     * Set the anciennete.
     *
     * @param float $anciennete The anciennete.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setAnciennete($anciennete) {
        $this->anciennete = $anciennete;
        return $this;
    }

    /**
     * Set the anciennete b t p.
     *
     * @param float $ancienneteBTP The anciennete b t p.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setAncienneteBTP($ancienneteBTP) {
        $this->ancienneteBTP = $ancienneteBTP;
        return $this;
    }

    /**
     * Set the annee prepa.
     *
     * @param int $anneePrepa The annee prepa.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setAnneePrepa($anneePrepa) {
        $this->anneePrepa = $anneePrepa;
        return $this;
    }

    /**
     * Set the at bureau.
     *
     * @param string $atBureau The at bureau.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setAtBureau($atBureau) {
        $this->atBureau = $atBureau;
        return $this;
    }

    /**
     * Set the at etab.
     *
     * @param string $atEtab The at etab.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setAtEtab($atEtab) {
        $this->atEtab = $atEtab;
        return $this;
    }

    /**
     * Set the at risque.
     *
     * @param string $atRisque The at risque.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setAtRisque($atRisque) {
        $this->atRisque = $atRisque;
        return $this;
    }

    /**
     * Set the at taux.
     *
     * @param float $atTaux The at taux.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setAtTaux($atTaux) {
        $this->atTaux = $atTaux;
        return $this;
    }

    /**
     * Set the autres sommes exo_ code1.
     *
     * @param string $autresSommesExo_Code1 The autres sommes exo_ code1.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setAutresSommesExo_Code1($autresSommesExo_Code1) {
        $this->autresSommesExo_Code1 = $autresSommesExo_Code1;
        return $this;
    }

    /**
     * Set the autres sommes exo_ code2.
     *
     * @param string $autresSommesExo_Code2 The autres sommes exo_ code2.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setAutresSommesExo_Code2($autresSommesExo_Code2) {
        $this->autresSommesExo_Code2 = $autresSommesExo_Code2;
        return $this;
    }

    /**
     * Set the autres sommes exo_ code3.
     *
     * @param string $autresSommesExo_Code3 The autres sommes exo_ code3.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setAutresSommesExo_Code3($autresSommesExo_Code3) {
        $this->autresSommesExo_Code3 = $autresSommesExo_Code3;
        return $this;
    }

    /**
     * Set the autres sommes exo_ code4.
     *
     * @param string $autresSommesExo_Code4 The autres sommes exo_ code4.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setAutresSommesExo_Code4($autresSommesExo_Code4) {
        $this->autresSommesExo_Code4 = $autresSommesExo_Code4;
        return $this;
    }

    /**
     * Set the autres sommes exo_ mnt1.
     *
     * @param float $autresSommesExo_Mnt1 The autres sommes exo_ mnt1.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setAutresSommesExo_Mnt1($autresSommesExo_Mnt1) {
        $this->autresSommesExo_Mnt1 = $autresSommesExo_Mnt1;
        return $this;
    }

    /**
     * Set the autres sommes exo_ mnt2.
     *
     * @param float $autresSommesExo_Mnt2 The autres sommes exo_ mnt2.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setAutresSommesExo_Mnt2($autresSommesExo_Mnt2) {
        $this->autresSommesExo_Mnt2 = $autresSommesExo_Mnt2;
        return $this;
    }

    /**
     * Set the autres sommes exo_ mnt3.
     *
     * @param float $autresSommesExo_Mnt3 The autres sommes exo_ mnt3.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setAutresSommesExo_Mnt3($autresSommesExo_Mnt3) {
        $this->autresSommesExo_Mnt3 = $autresSommesExo_Mnt3;
        return $this;
    }

    /**
     * Set the autres sommes exo_ mnt4.
     *
     * @param float $autresSommesExo_Mnt4 The autres sommes exo_ mnt4.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setAutresSommesExo_Mnt4($autresSommesExo_Mnt4) {
        $this->autresSommesExo_Mnt4 = $autresSommesExo_Mnt4;
        return $this;
    }

    /**
     * Set the b t q lieu trav.
     *
     * @param string $bTQLieuTrav The b t q lieu trav.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setBTQLieuTrav($bTQLieuTrav) {
        $this->bTQLieuTrav = $bTQLieuTrav;
        return $this;
    }

    /**
     * Set the base exo brut1.
     *
     * @param float $baseExoBrut1 The base exo brut1.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setBaseExoBrut1($baseExoBrut1) {
        $this->baseExoBrut1 = $baseExoBrut1;
        return $this;
    }

    /**
     * Set the base exo brut2.
     *
     * @param float $baseExoBrut2 The base exo brut2.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setBaseExoBrut2($baseExoBrut2) {
        $this->baseExoBrut2 = $baseExoBrut2;
        return $this;
    }

    /**
     * Set the base exo brut3.
     *
     * @param float $baseExoBrut3 The base exo brut3.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setBaseExoBrut3($baseExoBrut3) {
        $this->baseExoBrut3 = $baseExoBrut3;
        return $this;
    }

    /**
     * Set the base exo plaf1.
     *
     * @param float $baseExoPlaf1 The base exo plaf1.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setBaseExoPlaf1($baseExoPlaf1) {
        $this->baseExoPlaf1 = $baseExoPlaf1;
        return $this;
    }

    /**
     * Set the base exo plaf2.
     *
     * @param float $baseExoPlaf2 The base exo plaf2.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setBaseExoPlaf2($baseExoPlaf2) {
        $this->baseExoPlaf2 = $baseExoPlaf2;
        return $this;
    }

    /**
     * Set the base exo plaf3.
     *
     * @param float $baseExoPlaf3 The base exo plaf3.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setBaseExoPlaf3($baseExoPlaf3) {
        $this->baseExoPlaf3 = $baseExoPlaf3;
        return $this;
    }

    /**
     * Set the bureau distributeur lieu trav.
     *
     * @param string $bureauDistributeurLieuTrav The bureau distributeur lieu trav.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setBureauDistributeurLieuTrav($bureauDistributeurLieuTrav) {
        $this->bureauDistributeurLieuTrav = $bureauDistributeurLieuTrav;
        return $this;
    }

    /**
     * Set the categorie b t p.
     *
     * @param string $categorieBTP The categorie b t p.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setCategorieBTP($categorieBTP) {
        $this->categorieBTP = $categorieBTP;
        return $this;
    }

    /**
     * Set the code caract.
     *
     * @param string $codeCaract The code caract.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setCodeCaract($codeCaract) {
        $this->codeCaract = $codeCaract;
        return $this;
    }

    /**
     * Set the code classe c n b f.
     *
     * @param string $codeClasseCNBF The code classe c n b f.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setCodeClasseCNBF($codeClasseCNBF) {
        $this->codeClasseCNBF = $codeClasseCNBF;
        return $this;
    }

    /**
     * Set the code contrat trav.
     *
     * @param string $codeContratTrav The code contrat trav.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setCodeContratTrav($codeContratTrav) {
        $this->codeContratTrav = $codeContratTrav;
        return $this;
    }

    /**
     * Set the code convention col.
     *
     * @param string $codeConventionCol The code convention col.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setCodeConventionCol($codeConventionCol) {
        $this->codeConventionCol = $codeConventionCol;
        return $this;
    }

    /**
     * Set the code decalage paie.
     *
     * @param string $codeDecalagePaie The code decalage paie.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setCodeDecalagePaie($codeDecalagePaie) {
        $this->codeDecalagePaie = $codeDecalagePaie;
        return $this;
    }

    /**
     * Set the code deleg gest risque maladie.
     *
     * @param string $codeDelegGestRisqueMaladie The code deleg gest risque maladie.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setCodeDelegGestRisqueMaladie($codeDelegGestRisqueMaladie) {
        $this->codeDelegGestRisqueMaladie = $codeDelegGestRisqueMaladie;
        return $this;
    }

    /**
     * Set the code droit contrat.
     *
     * @param string $codeDroitContrat The code droit contrat.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setCodeDroitContrat($codeDroitContrat) {
        $this->codeDroitContrat = $codeDroitContrat;
        return $this;
    }

    /**
     * Set the code empl mult.
     *
     * @param string $codeEmplMult The code empl mult.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setCodeEmplMult($codeEmplMult) {
        $this->codeEmplMult = $codeEmplMult;
        return $this;
    }

    /**
     * Set the code emplois mult.
     *
     * @param string $codeEmploisMult The code emplois mult.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setCodeEmploisMult($codeEmploisMult) {
        $this->codeEmploisMult = $codeEmploisMult;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int $codeEtablissement The code etablissement.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setCodeEtablissement($codeEtablissement) {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the code etat contrat prud.
     *
     * @param string $codeEtatContratPrud The code etat contrat prud.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setCodeEtatContratPrud($codeEtatContratPrud) {
        $this->codeEtatContratPrud = $codeEtatContratPrud;
        return $this;
    }

    /**
     * Set the code extension alsace moselle.
     *
     * @param string $codeExtensionAlsaceMoselle The code extension alsace moselle.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setCodeExtensionAlsaceMoselle($codeExtensionAlsaceMoselle) {
        $this->codeExtensionAlsaceMoselle = $codeExtensionAlsaceMoselle;
        return $this;
    }

    /**
     * Set the code insee lieu trav.
     *
     * @param string $codeInseeLieuTrav The code insee lieu trav.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setCodeInseeLieuTrav($codeInseeLieuTrav) {
        $this->codeInseeLieuTrav = $codeInseeLieuTrav;
        return $this;
    }

    /**
     * Set the code motif deb per.
     *
     * @param string $codeMotifDebPer The code motif deb per.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setCodeMotifDebPer($codeMotifDebPer) {
        $this->codeMotifDebPer = $codeMotifDebPer;
        return $this;
    }

    /**
     * Set the code motif deb per2.
     *
     * @param string $codeMotifDebPer2 The code motif deb per2.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setCodeMotifDebPer2($codeMotifDebPer2) {
        $this->codeMotifDebPer2 = $codeMotifDebPer2;
        return $this;
    }

    /**
     * Set the code motif deb per3.
     *
     * @param string $codeMotifDebPer3 The code motif deb per3.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setCodeMotifDebPer3($codeMotifDebPer3) {
        $this->codeMotifDebPer3 = $codeMotifDebPer3;
        return $this;
    }

    /**
     * Set the code motif deb per4.
     *
     * @param string $codeMotifDebPer4 The code motif deb per4.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setCodeMotifDebPer4($codeMotifDebPer4) {
        $this->codeMotifDebPer4 = $codeMotifDebPer4;
        return $this;
    }

    /**
     * Set the code motif deb per5.
     *
     * @param string $codeMotifDebPer5 The code motif deb per5.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setCodeMotifDebPer5($codeMotifDebPer5) {
        $this->codeMotifDebPer5 = $codeMotifDebPer5;
        return $this;
    }

    /**
     * Set the code motif fin per.
     *
     * @param string $codeMotifFinPer The code motif fin per.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setCodeMotifFinPer($codeMotifFinPer) {
        $this->codeMotifFinPer = $codeMotifFinPer;
        return $this;
    }

    /**
     * Set the code motif fin per2.
     *
     * @param string $codeMotifFinPer2 The code motif fin per2.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setCodeMotifFinPer2($codeMotifFinPer2) {
        $this->codeMotifFinPer2 = $codeMotifFinPer2;
        return $this;
    }

    /**
     * Set the code motif fin per3.
     *
     * @param string $codeMotifFinPer3 The code motif fin per3.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setCodeMotifFinPer3($codeMotifFinPer3) {
        $this->codeMotifFinPer3 = $codeMotifFinPer3;
        return $this;
    }

    /**
     * Set the code motif fin per4.
     *
     * @param string $codeMotifFinPer4 The code motif fin per4.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setCodeMotifFinPer4($codeMotifFinPer4) {
        $this->codeMotifFinPer4 = $codeMotifFinPer4;
        return $this;
    }

    /**
     * Set the code motif fin per5.
     *
     * @param string $codeMotifFinPer5 The code motif fin per5.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setCodeMotifFinPer5($codeMotifFinPer5) {
        $this->codeMotifFinPer5 = $codeMotifFinPer5;
        return $this;
    }

    /**
     * Set the code nature base cotisations.
     *
     * @param string $codeNatureBaseCotisations The code nature base cotisations.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setCodeNatureBaseCotisations($codeNatureBaseCotisations) {
        $this->codeNatureBaseCotisations = $codeNatureBaseCotisations;
        return $this;
    }

    /**
     * Set the code officiel commune lieu trav.
     *
     * @param string $codeOfficielCommuneLieuTrav The code officiel commune lieu trav.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setCodeOfficielCommuneLieuTrav($codeOfficielCommuneLieuTrav) {
        $this->codeOfficielCommuneLieuTrav = $codeOfficielCommuneLieuTrav;
        return $this;
    }

    /**
     * Set the code postal lieu trav.
     *
     * @param string $codePostalLieuTrav The code postal lieu trav.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setCodePostalLieuTrav($codePostalLieuTrav) {
        $this->codePostalLieuTrav = $codePostalLieuTrav;
        return $this;
    }

    /**
     * Set the code regime1.
     *
     * @param string $codeRegime1 The code regime1.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setCodeRegime1($codeRegime1) {
        $this->codeRegime1 = $codeRegime1;
        return $this;
    }

    /**
     * Set the code regime2.
     *
     * @param string $codeRegime2 The code regime2.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setCodeRegime2($codeRegime2) {
        $this->codeRegime2 = $codeRegime2;
        return $this;
    }

    /**
     * Set the code regime3.
     *
     * @param string $codeRegime3 The code regime3.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setCodeRegime3($codeRegime3) {
        $this->codeRegime3 = $codeRegime3;
        return $this;
    }

    /**
     * Set the code regime b t p.
     *
     * @param string $codeRegimeBTP The code regime b t p.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setCodeRegimeBTP($codeRegimeBTP) {
        $this->codeRegimeBTP = $codeRegimeBTP;
        return $this;
    }

    /**
     * Set the code regime base obl.
     *
     * @param string $codeRegimeBaseObl The code regime base obl.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setCodeRegimeBaseObl($codeRegimeBaseObl) {
        $this->codeRegimeBaseObl = $codeRegimeBaseObl;
        return $this;
    }

    /**
     * Set the code regime base obl a t.
     *
     * @param string $codeRegimeBaseOblAT The code regime base obl a t.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setCodeRegimeBaseOblAT($codeRegimeBaseOblAT) {
        $this->codeRegimeBaseOblAT = $codeRegimeBaseOblAT;
        return $this;
    }

    /**
     * Set the code regime base obl maladie.
     *
     * @param string $codeRegimeBaseOblMaladie The code regime base obl maladie.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setCodeRegimeBaseOblMaladie($codeRegimeBaseOblMaladie) {
        $this->codeRegimeBaseOblMaladie = $codeRegimeBaseOblMaladie;
        return $this;
    }

    /**
     * Set the code regime base obl vieil pat.
     *
     * @param string $codeRegimeBaseOblVieilPat The code regime base obl vieil pat.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setCodeRegimeBaseOblVieilPat($codeRegimeBaseOblVieilPat) {
        $this->codeRegimeBaseOblVieilPat = $codeRegimeBaseOblVieilPat;
        return $this;
    }

    /**
     * Set the code regime base obl vieil sal.
     *
     * @param string $codeRegimeBaseOblVieilSal The code regime base obl vieil sal.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setCodeRegimeBaseOblVieilSal($codeRegimeBaseOblVieilSal) {
        $this->codeRegimeBaseOblVieilSal = $codeRegimeBaseOblVieilSal;
        return $this;
    }

    /**
     * Set the code statut categ.
     *
     * @param string $codeStatutCateg The code statut categ.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setCodeStatutCateg($codeStatutCateg) {
        $this->codeStatutCateg = $codeStatutCateg;
        return $this;
    }

    /**
     * Set the code statut categ conv.
     *
     * @param string $codeStatutCategConv The code statut categ conv.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setCodeStatutCategConv($codeStatutCategConv) {
        $this->codeStatutCategConv = $codeStatutCategConv;
        return $this;
    }

    /**
     * Set the code statut categ irc.
     *
     * @param string $codeStatutCategIrc The code statut categ irc.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setCodeStatutCategIrc($codeStatutCategIrc) {
        $this->codeStatutCategIrc = $codeStatutCategIrc;
        return $this;
    }

    /**
     * Set the code statut pro.
     *
     * @param string $codeStatutPro The code statut pro.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setCodeStatutPro($codeStatutPro) {
        $this->codeStatutPro = $codeStatutPro;
        return $this;
    }

    /**
     * Set the code type exo1.
     *
     * @param string $codeTypeExo1 The code type exo1.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setCodeTypeExo1($codeTypeExo1) {
        $this->codeTypeExo1 = $codeTypeExo1;
        return $this;
    }

    /**
     * Set the code type exo2.
     *
     * @param string $codeTypeExo2 The code type exo2.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setCodeTypeExo2($codeTypeExo2) {
        $this->codeTypeExo2 = $codeTypeExo2;
        return $this;
    }

    /**
     * Set the code type exo3.
     *
     * @param string $codeTypeExo3 The code type exo3.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setCodeTypeExo3($codeTypeExo3) {
        $this->codeTypeExo3 = $codeTypeExo3;
        return $this;
    }

    /**
     * Set the commentaire.
     *
     * @param string $commentaire The commentaire.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setCommentaire($commentaire) {
        $this->commentaire = $commentaire;
        return $this;
    }

    /**
     * Set the complement lieu trav.
     *
     * @param string $complementLieuTrav The complement lieu trav.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setComplementLieuTrav($complementLieuTrav) {
        $this->complementLieuTrav = $complementLieuTrav;
        return $this;
    }

    /**
     * Set the d a d s u conjoint salarie.
     *
     * @param string $dADSUConjointSalarie The d a d s u conjoint salarie.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setDADSUConjointSalarie($dADSUConjointSalarie) {
        $this->dADSUConjointSalarie = $dADSUConjointSalarie;
        return $this;
    }

    /**
     * Set the d a d s u_ nb options.
     *
     * @param float $dADSU_NbOptions The d a d s u_ nb options.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setDADSU_NbOptions($dADSU_NbOptions) {
        $this->dADSU_NbOptions = $dADSU_NbOptions;
        return $this;
    }

    /**
     * Set the d a d s u_ prix souscript opt.
     *
     * @param float $dADSU_PrixSouscriptOpt The d a d s u_ prix souscript opt.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setDADSU_PrixSouscriptOpt($dADSU_PrixSouscriptOpt) {
        $this->dADSU_PrixSouscriptOpt = $dADSU_PrixSouscriptOpt;
        return $this;
    }

    /**
     * Set the d a d s u_ valeur action.
     *
     * @param float $dADSU_ValeurAction The d a d s u_ valeur action.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setDADSU_ValeurAction($dADSU_ValeurAction) {
        $this->dADSU_ValeurAction = $dADSU_ValeurAction;
        return $this;
    }

    /**
     * Set the date ctrl norme.
     *
     * @param DateTime $dateCtrlNorme The date ctrl norme.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setDateCtrlNorme(DateTime $dateCtrlNorme = null) {
        $this->dateCtrlNorme = $dateCtrlNorme;
        return $this;
    }

    /**
     * Set the date ctrl norme b t p.
     *
     * @param DateTime $dateCtrlNormeBTP The date ctrl norme b t p.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setDateCtrlNormeBTP(DateTime $dateCtrlNormeBTP = null) {
        $this->dateCtrlNormeBTP = $dateCtrlNormeBTP;
        return $this;
    }

    /**
     * Set the date ctrl norme prev.
     *
     * @param DateTime $dateCtrlNormePrev The date ctrl norme prev.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setDateCtrlNormePrev(DateTime $dateCtrlNormePrev = null) {
        $this->dateCtrlNormePrev = $dateCtrlNormePrev;
        return $this;
    }

    /**
     * Set the date ctrl norme ret.
     *
     * @param DateTime $dateCtrlNormeRet The date ctrl norme ret.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setDateCtrlNormeRet(DateTime $dateCtrlNormeRet = null) {
        $this->dateCtrlNormeRet = $dateCtrlNormeRet;
        return $this;
    }

    /**
     * Set the debut periode decl.
     *
     * @param DateTime $debutPeriodeDecl The debut periode decl.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setDebutPeriodeDecl(DateTime $debutPeriodeDecl = null) {
        $this->debutPeriodeDecl = $debutPeriodeDecl;
        return $this;
    }

    /**
     * Set the echelon.
     *
     * @param string $echelon The echelon.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setEchelon($echelon) {
        $this->echelon = $echelon;
        return $this;
    }

    /**
     * Set the emploi.
     *
     * @param string $emploi The emploi.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setEmploi($emploi) {
        $this->emploi = $emploi;
        return $this;
    }

    /**
     * Set the epargne sal_ code1.
     *
     * @param string $epargneSal_Code1 The epargne sal_ code1.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setEpargneSal_Code1($epargneSal_Code1) {
        $this->epargneSal_Code1 = $epargneSal_Code1;
        return $this;
    }

    /**
     * Set the epargne sal_ code2.
     *
     * @param string $epargneSal_Code2 The epargne sal_ code2.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setEpargneSal_Code2($epargneSal_Code2) {
        $this->epargneSal_Code2 = $epargneSal_Code2;
        return $this;
    }

    /**
     * Set the epargne sal_ code3.
     *
     * @param string $epargneSal_Code3 The epargne sal_ code3.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setEpargneSal_Code3($epargneSal_Code3) {
        $this->epargneSal_Code3 = $epargneSal_Code3;
        return $this;
    }

    /**
     * Set the epargne sal_ code4.
     *
     * @param string $epargneSal_Code4 The epargne sal_ code4.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setEpargneSal_Code4($epargneSal_Code4) {
        $this->epargneSal_Code4 = $epargneSal_Code4;
        return $this;
    }

    /**
     * Set the epargne sal_ mnt1.
     *
     * @param float $epargneSal_Mnt1 The epargne sal_ mnt1.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setEpargneSal_Mnt1($epargneSal_Mnt1) {
        $this->epargneSal_Mnt1 = $epargneSal_Mnt1;
        return $this;
    }

    /**
     * Set the epargne sal_ mnt2.
     *
     * @param float $epargneSal_Mnt2 The epargne sal_ mnt2.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setEpargneSal_Mnt2($epargneSal_Mnt2) {
        $this->epargneSal_Mnt2 = $epargneSal_Mnt2;
        return $this;
    }

    /**
     * Set the epargne sal_ mnt3.
     *
     * @param float $epargneSal_Mnt3 The epargne sal_ mnt3.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setEpargneSal_Mnt3($epargneSal_Mnt3) {
        $this->epargneSal_Mnt3 = $epargneSal_Mnt3;
        return $this;
    }

    /**
     * Set the epargne sal_ mnt4.
     *
     * @param float $epargneSal_Mnt4 The epargne sal_ mnt4.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setEpargneSal_Mnt4($epargneSal_Mnt4) {
        $this->epargneSal_Mnt4 = $epargneSal_Mnt4;
        return $this;
    }

    /**
     * Set the etat ctrl norme.
     *
     * @param string $etatCtrlNorme The etat ctrl norme.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setEtatCtrlNorme($etatCtrlNorme) {
        $this->etatCtrlNorme = $etatCtrlNorme;
        return $this;
    }

    /**
     * Set the etat ctrl norme b t p.
     *
     * @param string $etatCtrlNormeBTP The etat ctrl norme b t p.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setEtatCtrlNormeBTP($etatCtrlNormeBTP) {
        $this->etatCtrlNormeBTP = $etatCtrlNormeBTP;
        return $this;
    }

    /**
     * Set the etat ctrl norme prev.
     *
     * @param string $etatCtrlNormePrev The etat ctrl norme prev.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setEtatCtrlNormePrev($etatCtrlNormePrev) {
        $this->etatCtrlNormePrev = $etatCtrlNormePrev;
        return $this;
    }

    /**
     * Set the etat ctrl norme ret.
     *
     * @param string $etatCtrlNormeRet The etat ctrl norme ret.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setEtatCtrlNormeRet($etatCtrlNormeRet) {
        $this->etatCtrlNormeRet = $etatCtrlNormeRet;
        return $this;
    }

    /**
     * Set the exo a g f f.
     *
     * @param bool $exoAGFF The exo a g f f.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setExoAGFF($exoAGFF) {
        $this->exoAGFF = $exoAGFF;
        return $this;
    }

    /**
     * Set the fin periode decl.
     *
     * @param DateTime $finPeriodeDecl The fin periode decl.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setFinPeriodeDecl(DateTime $finPeriodeDecl = null) {
        $this->finPeriodeDecl = $finPeriodeDecl;
        return $this;
    }

    /**
     * Set the g p e c_ mnt exo c s g c r d s.
     *
     * @param float $gPEC_MntExoCSGCRDS The g p e c_ mnt exo c s g c r d s.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setGPEC_MntExoCSGCRDS($gPEC_MntExoCSGCRDS) {
        $this->gPEC_MntExoCSGCRDS = $gPEC_MntExoCSGCRDS;
        return $this;
    }

    /**
     * Set the g p e c_ mnt exo cot secu.
     *
     * @param float $gPEC_MntExoCotSecu The g p e c_ mnt exo cot secu.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setGPEC_MntExoCotSecu($gPEC_MntExoCotSecu) {
        $this->gPEC_MntExoCotSecu = $gPEC_MntExoCotSecu;
        return $this;
    }

    /**
     * Set the indemn cp plaf.
     *
     * @param float $indemnCpPlaf The indemn cp plaf.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setIndemnCpPlaf($indemnCpPlaf) {
        $this->indemnCpPlaf = $indemnCpPlaf;
        return $this;
    }

    /**
     * Set the indemn rupture_ code1.
     *
     * @param string $indemnRupture_Code1 The indemn rupture_ code1.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setIndemnRupture_Code1($indemnRupture_Code1) {
        $this->indemnRupture_Code1 = $indemnRupture_Code1;
        return $this;
    }

    /**
     * Set the indemn rupture_ code2.
     *
     * @param string $indemnRupture_Code2 The indemn rupture_ code2.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setIndemnRupture_Code2($indemnRupture_Code2) {
        $this->indemnRupture_Code2 = $indemnRupture_Code2;
        return $this;
    }

    /**
     * Set the indemn rupture_ mnt1.
     *
     * @param float $indemnRupture_Mnt1 The indemn rupture_ mnt1.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setIndemnRupture_Mnt1($indemnRupture_Mnt1) {
        $this->indemnRupture_Mnt1 = $indemnRupture_Mnt1;
        return $this;
    }

    /**
     * Set the indemn rupture_ mnt2.
     *
     * @param float $indemnRupture_Mnt2 The indemn rupture_ mnt2.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setIndemnRupture_Mnt2($indemnRupture_Mnt2) {
        $this->indemnRupture_Mnt2 = $indemnRupture_Mnt2;
        return $this;
    }

    /**
     * Set the indice.
     *
     * @param string $indice The indice.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setIndice($indice) {
        $this->indice = $indice;
        return $this;
    }

    /**
     * Set the nb periodicite ircantec.
     *
     * @param float $nbPeriodiciteIrcantec The nb periodicite ircantec.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setNbPeriodiciteIrcantec($nbPeriodiciteIrcantec) {
        $this->nbPeriodiciteIrcantec = $nbPeriodiciteIrcantec;
        return $this;
    }

    /**
     * Set the nbh etab b t p.
     *
     * @param float $nbhEtabBTP The nbh etab b t p.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setNbhEtabBTP($nbhEtabBTP) {
        $this->nbhEtabBTP = $nbhEtabBTP;
        return $this;
    }

    /**
     * Set the nbh sal b t p.
     *
     * @param float $nbhSalBTP The nbh sal b t p.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setNbhSalBTP($nbhSalBTP) {
        $this->nbhSalBTP = $nbhSalBTP;
        return $this;
    }

    /**
     * Set the nic etab affectation.
     *
     * @param string $nicEtabAffectation The nic etab affectation.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setNicEtabAffectation($nicEtabAffectation) {
        $this->nicEtabAffectation = $nicEtabAffectation;
        return $this;
    }

    /**
     * Set the niveau.
     *
     * @param string $niveau The niveau.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setNiveau($niveau) {
        $this->niveau = $niveau;
        return $this;
    }

    /**
     * Set the nom ville insee lieu trav.
     *
     * @param string $nomVilleInseeLieuTrav The nom ville insee lieu trav.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setNomVilleInseeLieuTrav($nomVilleInseeLieuTrav) {
        $this->nomVilleInseeLieuTrav = $nomVilleInseeLieuTrav;
        return $this;
    }

    /**
     * Set the nom ville lieu trav.
     *
     * @param string $nomVilleLieuTrav The nom ville lieu trav.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setNomVilleLieuTrav($nomVilleLieuTrav) {
        $this->nomVilleLieuTrav = $nomVilleLieuTrav;
        return $this;
    }

    /**
     * Set the nom voie lieu trav.
     *
     * @param string $nomVoieLieuTrav The nom voie lieu trav.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setNomVoieLieuTrav($nomVoieLieuTrav) {
        $this->nomVoieLieuTrav = $nomVoieLieuTrav;
        return $this;
    }

    /**
     * Set the num voie lieu trav.
     *
     * @param string $numVoieLieuTrav The num voie lieu trav.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setNumVoieLieuTrav($numVoieLieuTrav) {
        $this->numVoieLieuTrav = $numVoieLieuTrav;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param string $numero The numero.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setNumero($numero) {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the numero adhesion b t p.
     *
     * @param string $numeroAdhesionBTP The numero adhesion b t p.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setNumeroAdhesionBTP($numeroAdhesionBTP) {
        $this->numeroAdhesionBTP = $numeroAdhesionBTP;
        return $this;
    }

    /**
     * Set the numero affil f n c.
     *
     * @param string $numeroAffilFNC The numero affil f n c.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setNumeroAffilFNC($numeroAffilFNC) {
        $this->numeroAffilFNC = $numeroAffilFNC;
        return $this;
    }

    /**
     * Set the numero ordre.
     *
     * @param int $numeroOrdre The numero ordre.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setNumeroOrdre($numeroOrdre) {
        $this->numeroOrdre = $numeroOrdre;
        return $this;
    }

    /**
     * Set the numero rattach1.
     *
     * @param string $numeroRattach1 The numero rattach1.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setNumeroRattach1($numeroRattach1) {
        $this->numeroRattach1 = $numeroRattach1;
        return $this;
    }

    /**
     * Set the numero rattach2.
     *
     * @param string $numeroRattach2 The numero rattach2.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setNumeroRattach2($numeroRattach2) {
        $this->numeroRattach2 = $numeroRattach2;
        return $this;
    }

    /**
     * Set the numero rattach3.
     *
     * @param string $numeroRattach3 The numero rattach3.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setNumeroRattach3($numeroRattach3) {
        $this->numeroRattach3 = $numeroRattach3;
        return $this;
    }

    /**
     * Set the numero rattach b t p.
     *
     * @param string $numeroRattachBTP The numero rattach b t p.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setNumeroRattachBTP($numeroRattachBTP) {
        $this->numeroRattachBTP = $numeroRattachBTP;
        return $this;
    }

    /**
     * Set the particip patron avtge_ code1.
     *
     * @param string $participPatronAvtge_Code1 The particip patron avtge_ code1.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setParticipPatronAvtge_Code1($participPatronAvtge_Code1) {
        $this->participPatronAvtge_Code1 = $participPatronAvtge_Code1;
        return $this;
    }

    /**
     * Set the particip patron avtge_ code2.
     *
     * @param string $participPatronAvtge_Code2 The particip patron avtge_ code2.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setParticipPatronAvtge_Code2($participPatronAvtge_Code2) {
        $this->participPatronAvtge_Code2 = $participPatronAvtge_Code2;
        return $this;
    }

    /**
     * Set the particip patron avtge_ mnt1.
     *
     * @param float $participPatronAvtge_Mnt1 The particip patron avtge_ mnt1.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setParticipPatronAvtge_Mnt1($participPatronAvtge_Mnt1) {
        $this->participPatronAvtge_Mnt1 = $participPatronAvtge_Mnt1;
        return $this;
    }

    /**
     * Set the particip patron avtge_ mnt2.
     *
     * @param float $participPatronAvtge_Mnt2 The particip patron avtge_ mnt2.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setParticipPatronAvtge_Mnt2($participPatronAvtge_Mnt2) {
        $this->participPatronAvtge_Mnt2 = $participPatronAvtge_Mnt2;
        return $this;
    }

    /**
     * Set the periodicite ircantec.
     *
     * @param string $periodiciteIrcantec The periodicite ircantec.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setPeriodiciteIrcantec($periodiciteIrcantec) {
        $this->periodiciteIrcantec = $periodiciteIrcantec;
        return $this;
    }

    /**
     * Set the position.
     *
     * @param string $position The position.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setPosition($position) {
        $this->position = $position;
        return $this;
    }

    /**
     * Set the pourcent act.
     *
     * @param float $pourcentAct The pourcent act.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setPourcentAct($pourcentAct) {
        $this->pourcentAct = $pourcentAct;
        return $this;
    }

    /**
     * Set the remun medecins.
     *
     * @param float $remunMedecins The remun medecins.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setRemunMedecins($remunMedecins) {
        $this->remunMedecins = $remunMedecins;
        return $this;
    }

    /**
     * Set the siret lieu trav.
     *
     * @param string $siretLieuTrav The siret lieu trav.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setSiretLieuTrav($siretLieuTrav) {
        $this->siretLieuTrav = $siretLieuTrav;
        return $this;
    }

    /**
     * Set the statut cotisant b t p.
     *
     * @param string $statutCotisantBTP The statut cotisant b t p.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setStatutCotisantBTP($statutCotisantBTP) {
        $this->statutCotisantBTP = $statutCotisantBTP;
        return $this;
    }

    /**
     * Set the suppl fam.
     *
     * @param float $supplFam The suppl fam.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setSupplFam($supplFam) {
        $this->supplFam = $supplFam;
        return $this;
    }

    /**
     * Set the t d s59.
     *
     * @param string $tDS59 The t d s59.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setTDS59($tDS59) {
        $this->tDS59 = $tDS59;
        return $this;
    }

    /**
     * Set the type affil b t p.
     *
     * @param string $typeAffilBTP The type affil b t p.
     * @return EmpDADSUParam Returns this emp d a d s u param.
     */
    public function setTypeAffilBTP($typeAffilBTP) {
        $this->typeAffilBTP = $typeAffilBTP;
        return $this;
    }
}
