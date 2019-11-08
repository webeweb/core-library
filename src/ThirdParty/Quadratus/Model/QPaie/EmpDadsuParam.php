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
 * Emp dadsu param.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class EmpDadsuParam {

    /**
     * Actions gratuites nbre.
     *
     * @var float
     */
    private $actionsGratuitesNbre;

    /**
     * Actions gratuites valeur u.
     *
     * @var float
     */
    private $actionsGratuitesValeurU;

    /**
     * Anciennete.
     *
     * @var float
     */
    private $anciennete;

    /**
     * Anciennete btp.
     *
     * @var float
     */
    private $ancienneteBtp;

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
     * Autres sommes exo code1.
     *
     * @var string
     */
    private $autresSommesExoCode1;

    /**
     * Autres sommes exo code2.
     *
     * @var string
     */
    private $autresSommesExoCode2;

    /**
     * Autres sommes exo code3.
     *
     * @var string
     */
    private $autresSommesExoCode3;

    /**
     * Autres sommes exo code4.
     *
     * @var string
     */
    private $autresSommesExoCode4;

    /**
     * Autres sommes exo mnt1.
     *
     * @var float
     */
    private $autresSommesExoMnt1;

    /**
     * Autres sommes exo mnt2.
     *
     * @var float
     */
    private $autresSommesExoMnt2;

    /**
     * Autres sommes exo mnt3.
     *
     * @var float
     */
    private $autresSommesExoMnt3;

    /**
     * Autres sommes exo mnt4.
     *
     * @var float
     */
    private $autresSommesExoMnt4;

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
     * Btq lieu trav.
     *
     * @var string
     */
    private $btqLieuTrav;

    /**
     * Bureau distributeur lieu trav.
     *
     * @var string
     */
    private $bureauDistributeurLieuTrav;

    /**
     * Categorie btp.
     *
     * @var string
     */
    private $categorieBtp;

    /**
     * Code caract.
     *
     * @var string
     */
    private $codeCaract;

    /**
     * Code classe cnbf.
     *
     * @var string
     */
    private $codeClasseCnbf;

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
     * Code regime base obl.
     *
     * @var string
     */
    private $codeRegimeBaseObl;

    /**
     * Code regime base obl at.
     *
     * @var string
     */
    private $codeRegimeBaseOblAt;

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
     * Code regime btp.
     *
     * @var string
     */
    private $codeRegimeBtp;

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
     * Dadsu conjoint salarie.
     *
     * @var string
     */
    private $dadsuConjointSalarie;

    /**
     * Dadsu nb options.
     *
     * @var float
     */
    private $dadsuNbOptions;

    /**
     * Dadsu prix souscript opt.
     *
     * @var float
     */
    private $dadsuPrixSouscriptOpt;

    /**
     * Dadsu valeur action.
     *
     * @var float
     */
    private $dadsuValeurAction;

    /**
     * Date ctrl norme.
     *
     * @var DateTime|null
     */
    private $dateCtrlNorme;

    /**
     * Date ctrl norme btp.
     *
     * @var DateTime|null
     */
    private $dateCtrlNormeBtp;

    /**
     * Date ctrl norme prev.
     *
     * @var DateTime|null
     */
    private $dateCtrlNormePrev;

    /**
     * Date ctrl norme ret.
     *
     * @var DateTime|null
     */
    private $dateCtrlNormeRet;

    /**
     * Debut periode decl.
     *
     * @var DateTime|null
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
     * Epargne sal code1.
     *
     * @var string
     */
    private $epargneSalCode1;

    /**
     * Epargne sal code2.
     *
     * @var string
     */
    private $epargneSalCode2;

    /**
     * Epargne sal code3.
     *
     * @var string
     */
    private $epargneSalCode3;

    /**
     * Epargne sal code4.
     *
     * @var string
     */
    private $epargneSalCode4;

    /**
     * Epargne sal mnt1.
     *
     * @var float
     */
    private $epargneSalMnt1;

    /**
     * Epargne sal mnt2.
     *
     * @var float
     */
    private $epargneSalMnt2;

    /**
     * Epargne sal mnt3.
     *
     * @var float
     */
    private $epargneSalMnt3;

    /**
     * Epargne sal mnt4.
     *
     * @var float
     */
    private $epargneSalMnt4;

    /**
     * Etat ctrl norme.
     *
     * @var string
     */
    private $etatCtrlNorme;

    /**
     * Etat ctrl norme btp.
     *
     * @var string
     */
    private $etatCtrlNormeBtp;

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
     * Exo agff.
     *
     * @var bool
     */
    private $exoAgff;

    /**
     * Fin periode decl.
     *
     * @var DateTime|null
     */
    private $finPeriodeDecl;

    /**
     * Gpec mnt exo cot secu.
     *
     * @var float
     */
    private $gpecMntExoCotSecu;

    /**
     * Gpec mnt exo csgcrds.
     *
     * @var float
     */
    private $gpecMntExoCsgcrds;

    /**
     * Indemn cp plaf.
     *
     * @var float
     */
    private $indemnCpPlaf;

    /**
     * Indemn rupture code1.
     *
     * @var string
     */
    private $indemnRuptureCode1;

    /**
     * Indemn rupture code2.
     *
     * @var string
     */
    private $indemnRuptureCode2;

    /**
     * Indemn rupture mnt1.
     *
     * @var float
     */
    private $indemnRuptureMnt1;

    /**
     * Indemn rupture mnt2.
     *
     * @var float
     */
    private $indemnRuptureMnt2;

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
     * Nbh etab btp.
     *
     * @var float
     */
    private $nbhEtabBtp;

    /**
     * Nbh sal btp.
     *
     * @var float
     */
    private $nbhSalBtp;

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
     * Numero adhesion btp.
     *
     * @var string
     */
    private $numeroAdhesionBtp;

    /**
     * Numero affil fnc.
     *
     * @var string
     */
    private $numeroAffilFnc;

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
     * Numero rattach btp.
     *
     * @var string
     */
    private $numeroRattachBtp;

    /**
     * Particip patron avtge code1.
     *
     * @var string
     */
    private $participPatronAvtgeCode1;

    /**
     * Particip patron avtge code2.
     *
     * @var string
     */
    private $participPatronAvtgeCode2;

    /**
     * Particip patron avtge mnt1.
     *
     * @var float
     */
    private $participPatronAvtgeMnt1;

    /**
     * Particip patron avtge mnt2.
     *
     * @var float
     */
    private $participPatronAvtgeMnt2;

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
     * Statut cotisant btp.
     *
     * @var string
     */
    private $statutCotisantBtp;

    /**
     * Suppl fam.
     *
     * @var float
     */
    private $supplFam;

    /**
     * Tds59.
     *
     * @var string
     */
    private $tds59;

    /**
     * Type affil btp.
     *
     * @var string
     */
    private $typeAffilBtp;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the actions gratuites nbre.
     *
     * @return float Returns the actions gratuites nbre.
     */
    public function getActionsGratuitesNbre() {
        return $this->actionsGratuitesNbre;
    }

    /**
     * Get the actions gratuites valeur u.
     *
     * @return float Returns the actions gratuites valeur u.
     */
    public function getActionsGratuitesValeurU() {
        return $this->actionsGratuitesValeurU;
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
     * Get the anciennete btp.
     *
     * @return float Returns the anciennete btp.
     */
    public function getAncienneteBtp() {
        return $this->ancienneteBtp;
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
     * Get the autres sommes exo code1.
     *
     * @return string Returns the autres sommes exo code1.
     */
    public function getAutresSommesExoCode1() {
        return $this->autresSommesExoCode1;
    }

    /**
     * Get the autres sommes exo code2.
     *
     * @return string Returns the autres sommes exo code2.
     */
    public function getAutresSommesExoCode2() {
        return $this->autresSommesExoCode2;
    }

    /**
     * Get the autres sommes exo code3.
     *
     * @return string Returns the autres sommes exo code3.
     */
    public function getAutresSommesExoCode3() {
        return $this->autresSommesExoCode3;
    }

    /**
     * Get the autres sommes exo code4.
     *
     * @return string Returns the autres sommes exo code4.
     */
    public function getAutresSommesExoCode4() {
        return $this->autresSommesExoCode4;
    }

    /**
     * Get the autres sommes exo mnt1.
     *
     * @return float Returns the autres sommes exo mnt1.
     */
    public function getAutresSommesExoMnt1() {
        return $this->autresSommesExoMnt1;
    }

    /**
     * Get the autres sommes exo mnt2.
     *
     * @return float Returns the autres sommes exo mnt2.
     */
    public function getAutresSommesExoMnt2() {
        return $this->autresSommesExoMnt2;
    }

    /**
     * Get the autres sommes exo mnt3.
     *
     * @return float Returns the autres sommes exo mnt3.
     */
    public function getAutresSommesExoMnt3() {
        return $this->autresSommesExoMnt3;
    }

    /**
     * Get the autres sommes exo mnt4.
     *
     * @return float Returns the autres sommes exo mnt4.
     */
    public function getAutresSommesExoMnt4() {
        return $this->autresSommesExoMnt4;
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
     * Get the btq lieu trav.
     *
     * @return string Returns the btq lieu trav.
     */
    public function getBtqLieuTrav() {
        return $this->btqLieuTrav;
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
     * Get the categorie btp.
     *
     * @return string Returns the categorie btp.
     */
    public function getCategorieBtp() {
        return $this->categorieBtp;
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
     * Get the code classe cnbf.
     *
     * @return string Returns the code classe cnbf.
     */
    public function getCodeClasseCnbf() {
        return $this->codeClasseCnbf;
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
     * Get the code regime base obl.
     *
     * @return string Returns the code regime base obl.
     */
    public function getCodeRegimeBaseObl() {
        return $this->codeRegimeBaseObl;
    }

    /**
     * Get the code regime base obl at.
     *
     * @return string Returns the code regime base obl at.
     */
    public function getCodeRegimeBaseOblAt() {
        return $this->codeRegimeBaseOblAt;
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
     * Get the code regime btp.
     *
     * @return string Returns the code regime btp.
     */
    public function getCodeRegimeBtp() {
        return $this->codeRegimeBtp;
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
     * Get the dadsu conjoint salarie.
     *
     * @return string Returns the dadsu conjoint salarie.
     */
    public function getDadsuConjointSalarie() {
        return $this->dadsuConjointSalarie;
    }

    /**
     * Get the dadsu nb options.
     *
     * @return float Returns the dadsu nb options.
     */
    public function getDadsuNbOptions() {
        return $this->dadsuNbOptions;
    }

    /**
     * Get the dadsu prix souscript opt.
     *
     * @return float Returns the dadsu prix souscript opt.
     */
    public function getDadsuPrixSouscriptOpt() {
        return $this->dadsuPrixSouscriptOpt;
    }

    /**
     * Get the dadsu valeur action.
     *
     * @return float Returns the dadsu valeur action.
     */
    public function getDadsuValeurAction() {
        return $this->dadsuValeurAction;
    }

    /**
     * Get the date ctrl norme.
     *
     * @return DateTime|null Returns the date ctrl norme.
     */
    public function getDateCtrlNorme() {
        return $this->dateCtrlNorme;
    }

    /**
     * Get the date ctrl norme btp.
     *
     * @return DateTime|null Returns the date ctrl norme btp.
     */
    public function getDateCtrlNormeBtp() {
        return $this->dateCtrlNormeBtp;
    }

    /**
     * Get the date ctrl norme prev.
     *
     * @return DateTime|null Returns the date ctrl norme prev.
     */
    public function getDateCtrlNormePrev() {
        return $this->dateCtrlNormePrev;
    }

    /**
     * Get the date ctrl norme ret.
     *
     * @return DateTime|null Returns the date ctrl norme ret.
     */
    public function getDateCtrlNormeRet() {
        return $this->dateCtrlNormeRet;
    }

    /**
     * Get the debut periode decl.
     *
     * @return DateTime|null Returns the debut periode decl.
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
     * Get the epargne sal code1.
     *
     * @return string Returns the epargne sal code1.
     */
    public function getEpargneSalCode1() {
        return $this->epargneSalCode1;
    }

    /**
     * Get the epargne sal code2.
     *
     * @return string Returns the epargne sal code2.
     */
    public function getEpargneSalCode2() {
        return $this->epargneSalCode2;
    }

    /**
     * Get the epargne sal code3.
     *
     * @return string Returns the epargne sal code3.
     */
    public function getEpargneSalCode3() {
        return $this->epargneSalCode3;
    }

    /**
     * Get the epargne sal code4.
     *
     * @return string Returns the epargne sal code4.
     */
    public function getEpargneSalCode4() {
        return $this->epargneSalCode4;
    }

    /**
     * Get the epargne sal mnt1.
     *
     * @return float Returns the epargne sal mnt1.
     */
    public function getEpargneSalMnt1() {
        return $this->epargneSalMnt1;
    }

    /**
     * Get the epargne sal mnt2.
     *
     * @return float Returns the epargne sal mnt2.
     */
    public function getEpargneSalMnt2() {
        return $this->epargneSalMnt2;
    }

    /**
     * Get the epargne sal mnt3.
     *
     * @return float Returns the epargne sal mnt3.
     */
    public function getEpargneSalMnt3() {
        return $this->epargneSalMnt3;
    }

    /**
     * Get the epargne sal mnt4.
     *
     * @return float Returns the epargne sal mnt4.
     */
    public function getEpargneSalMnt4() {
        return $this->epargneSalMnt4;
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
     * Get the etat ctrl norme btp.
     *
     * @return string Returns the etat ctrl norme btp.
     */
    public function getEtatCtrlNormeBtp() {
        return $this->etatCtrlNormeBtp;
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
     * Get the exo agff.
     *
     * @return bool Returns the exo agff.
     */
    public function getExoAgff() {
        return $this->exoAgff;
    }

    /**
     * Get the fin periode decl.
     *
     * @return DateTime|null Returns the fin periode decl.
     */
    public function getFinPeriodeDecl() {
        return $this->finPeriodeDecl;
    }

    /**
     * Get the gpec mnt exo cot secu.
     *
     * @return float Returns the gpec mnt exo cot secu.
     */
    public function getGpecMntExoCotSecu() {
        return $this->gpecMntExoCotSecu;
    }

    /**
     * Get the gpec mnt exo csgcrds.
     *
     * @return float Returns the gpec mnt exo csgcrds.
     */
    public function getGpecMntExoCsgcrds() {
        return $this->gpecMntExoCsgcrds;
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
     * Get the indemn rupture code1.
     *
     * @return string Returns the indemn rupture code1.
     */
    public function getIndemnRuptureCode1() {
        return $this->indemnRuptureCode1;
    }

    /**
     * Get the indemn rupture code2.
     *
     * @return string Returns the indemn rupture code2.
     */
    public function getIndemnRuptureCode2() {
        return $this->indemnRuptureCode2;
    }

    /**
     * Get the indemn rupture mnt1.
     *
     * @return float Returns the indemn rupture mnt1.
     */
    public function getIndemnRuptureMnt1() {
        return $this->indemnRuptureMnt1;
    }

    /**
     * Get the indemn rupture mnt2.
     *
     * @return float Returns the indemn rupture mnt2.
     */
    public function getIndemnRuptureMnt2() {
        return $this->indemnRuptureMnt2;
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
     * Get the nbh etab btp.
     *
     * @return float Returns the nbh etab btp.
     */
    public function getNbhEtabBtp() {
        return $this->nbhEtabBtp;
    }

    /**
     * Get the nbh sal btp.
     *
     * @return float Returns the nbh sal btp.
     */
    public function getNbhSalBtp() {
        return $this->nbhSalBtp;
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
     * Get the numero adhesion btp.
     *
     * @return string Returns the numero adhesion btp.
     */
    public function getNumeroAdhesionBtp() {
        return $this->numeroAdhesionBtp;
    }

    /**
     * Get the numero affil fnc.
     *
     * @return string Returns the numero affil fnc.
     */
    public function getNumeroAffilFnc() {
        return $this->numeroAffilFnc;
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
     * Get the numero rattach btp.
     *
     * @return string Returns the numero rattach btp.
     */
    public function getNumeroRattachBtp() {
        return $this->numeroRattachBtp;
    }

    /**
     * Get the particip patron avtge code1.
     *
     * @return string Returns the particip patron avtge code1.
     */
    public function getParticipPatronAvtgeCode1() {
        return $this->participPatronAvtgeCode1;
    }

    /**
     * Get the particip patron avtge code2.
     *
     * @return string Returns the particip patron avtge code2.
     */
    public function getParticipPatronAvtgeCode2() {
        return $this->participPatronAvtgeCode2;
    }

    /**
     * Get the particip patron avtge mnt1.
     *
     * @return float Returns the particip patron avtge mnt1.
     */
    public function getParticipPatronAvtgeMnt1() {
        return $this->participPatronAvtgeMnt1;
    }

    /**
     * Get the particip patron avtge mnt2.
     *
     * @return float Returns the particip patron avtge mnt2.
     */
    public function getParticipPatronAvtgeMnt2() {
        return $this->participPatronAvtgeMnt2;
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
     * Get the statut cotisant btp.
     *
     * @return string Returns the statut cotisant btp.
     */
    public function getStatutCotisantBtp() {
        return $this->statutCotisantBtp;
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
     * Get the tds59.
     *
     * @return string Returns the tds59.
     */
    public function getTds59() {
        return $this->tds59;
    }

    /**
     * Get the type affil btp.
     *
     * @return string Returns the type affil btp.
     */
    public function getTypeAffilBtp() {
        return $this->typeAffilBtp;
    }

    /**
     * Set the actions gratuites nbre.
     *
     * @param float $actionsGratuitesNbre The actions gratuites nbre.
     */
    public function setActionsGratuitesNbre($actionsGratuitesNbre) {
        $this->actionsGratuitesNbre = $actionsGratuitesNbre;
        return $this;
    }

    /**
     * Set the actions gratuites valeur u.
     *
     * @param float $actionsGratuitesValeurU The actions gratuites valeur u.
     */
    public function setActionsGratuitesValeurU($actionsGratuitesValeurU) {
        $this->actionsGratuitesValeurU = $actionsGratuitesValeurU;
        return $this;
    }

    /**
     * Set the anciennete.
     *
     * @param float $anciennete The anciennete.
     */
    public function setAnciennete($anciennete) {
        $this->anciennete = $anciennete;
        return $this;
    }

    /**
     * Set the anciennete btp.
     *
     * @param float $ancienneteBtp The anciennete btp.
     */
    public function setAncienneteBtp($ancienneteBtp) {
        $this->ancienneteBtp = $ancienneteBtp;
        return $this;
    }

    /**
     * Set the annee prepa.
     *
     * @param int $anneePrepa The annee prepa.
     */
    public function setAnneePrepa($anneePrepa) {
        $this->anneePrepa = $anneePrepa;
        return $this;
    }

    /**
     * Set the at bureau.
     *
     * @param string $atBureau The at bureau.
     */
    public function setAtBureau($atBureau) {
        $this->atBureau = $atBureau;
        return $this;
    }

    /**
     * Set the at etab.
     *
     * @param string $atEtab The at etab.
     */
    public function setAtEtab($atEtab) {
        $this->atEtab = $atEtab;
        return $this;
    }

    /**
     * Set the at risque.
     *
     * @param string $atRisque The at risque.
     */
    public function setAtRisque($atRisque) {
        $this->atRisque = $atRisque;
        return $this;
    }

    /**
     * Set the at taux.
     *
     * @param float $atTaux The at taux.
     */
    public function setAtTaux($atTaux) {
        $this->atTaux = $atTaux;
        return $this;
    }

    /**
     * Set the autres sommes exo code1.
     *
     * @param string $autresSommesExoCode1 The autres sommes exo code1.
     */
    public function setAutresSommesExoCode1($autresSommesExoCode1) {
        $this->autresSommesExoCode1 = $autresSommesExoCode1;
        return $this;
    }

    /**
     * Set the autres sommes exo code2.
     *
     * @param string $autresSommesExoCode2 The autres sommes exo code2.
     */
    public function setAutresSommesExoCode2($autresSommesExoCode2) {
        $this->autresSommesExoCode2 = $autresSommesExoCode2;
        return $this;
    }

    /**
     * Set the autres sommes exo code3.
     *
     * @param string $autresSommesExoCode3 The autres sommes exo code3.
     */
    public function setAutresSommesExoCode3($autresSommesExoCode3) {
        $this->autresSommesExoCode3 = $autresSommesExoCode3;
        return $this;
    }

    /**
     * Set the autres sommes exo code4.
     *
     * @param string $autresSommesExoCode4 The autres sommes exo code4.
     */
    public function setAutresSommesExoCode4($autresSommesExoCode4) {
        $this->autresSommesExoCode4 = $autresSommesExoCode4;
        return $this;
    }

    /**
     * Set the autres sommes exo mnt1.
     *
     * @param float $autresSommesExoMnt1 The autres sommes exo mnt1.
     */
    public function setAutresSommesExoMnt1($autresSommesExoMnt1) {
        $this->autresSommesExoMnt1 = $autresSommesExoMnt1;
        return $this;
    }

    /**
     * Set the autres sommes exo mnt2.
     *
     * @param float $autresSommesExoMnt2 The autres sommes exo mnt2.
     */
    public function setAutresSommesExoMnt2($autresSommesExoMnt2) {
        $this->autresSommesExoMnt2 = $autresSommesExoMnt2;
        return $this;
    }

    /**
     * Set the autres sommes exo mnt3.
     *
     * @param float $autresSommesExoMnt3 The autres sommes exo mnt3.
     */
    public function setAutresSommesExoMnt3($autresSommesExoMnt3) {
        $this->autresSommesExoMnt3 = $autresSommesExoMnt3;
        return $this;
    }

    /**
     * Set the autres sommes exo mnt4.
     *
     * @param float $autresSommesExoMnt4 The autres sommes exo mnt4.
     */
    public function setAutresSommesExoMnt4($autresSommesExoMnt4) {
        $this->autresSommesExoMnt4 = $autresSommesExoMnt4;
        return $this;
    }

    /**
     * Set the base exo brut1.
     *
     * @param float $baseExoBrut1 The base exo brut1.
     */
    public function setBaseExoBrut1($baseExoBrut1) {
        $this->baseExoBrut1 = $baseExoBrut1;
        return $this;
    }

    /**
     * Set the base exo brut2.
     *
     * @param float $baseExoBrut2 The base exo brut2.
     */
    public function setBaseExoBrut2($baseExoBrut2) {
        $this->baseExoBrut2 = $baseExoBrut2;
        return $this;
    }

    /**
     * Set the base exo brut3.
     *
     * @param float $baseExoBrut3 The base exo brut3.
     */
    public function setBaseExoBrut3($baseExoBrut3) {
        $this->baseExoBrut3 = $baseExoBrut3;
        return $this;
    }

    /**
     * Set the base exo plaf1.
     *
     * @param float $baseExoPlaf1 The base exo plaf1.
     */
    public function setBaseExoPlaf1($baseExoPlaf1) {
        $this->baseExoPlaf1 = $baseExoPlaf1;
        return $this;
    }

    /**
     * Set the base exo plaf2.
     *
     * @param float $baseExoPlaf2 The base exo plaf2.
     */
    public function setBaseExoPlaf2($baseExoPlaf2) {
        $this->baseExoPlaf2 = $baseExoPlaf2;
        return $this;
    }

    /**
     * Set the base exo plaf3.
     *
     * @param float $baseExoPlaf3 The base exo plaf3.
     */
    public function setBaseExoPlaf3($baseExoPlaf3) {
        $this->baseExoPlaf3 = $baseExoPlaf3;
        return $this;
    }

    /**
     * Set the btq lieu trav.
     *
     * @param string $btqLieuTrav The btq lieu trav.
     */
    public function setBtqLieuTrav($btqLieuTrav) {
        $this->btqLieuTrav = $btqLieuTrav;
        return $this;
    }

    /**
     * Set the bureau distributeur lieu trav.
     *
     * @param string $bureauDistributeurLieuTrav The bureau distributeur lieu trav.
     */
    public function setBureauDistributeurLieuTrav($bureauDistributeurLieuTrav) {
        $this->bureauDistributeurLieuTrav = $bureauDistributeurLieuTrav;
        return $this;
    }

    /**
     * Set the categorie btp.
     *
     * @param string $categorieBtp The categorie btp.
     */
    public function setCategorieBtp($categorieBtp) {
        $this->categorieBtp = $categorieBtp;
        return $this;
    }

    /**
     * Set the code caract.
     *
     * @param string $codeCaract The code caract.
     */
    public function setCodeCaract($codeCaract) {
        $this->codeCaract = $codeCaract;
        return $this;
    }

    /**
     * Set the code classe cnbf.
     *
     * @param string $codeClasseCnbf The code classe cnbf.
     */
    public function setCodeClasseCnbf($codeClasseCnbf) {
        $this->codeClasseCnbf = $codeClasseCnbf;
        return $this;
    }

    /**
     * Set the code contrat trav.
     *
     * @param string $codeContratTrav The code contrat trav.
     */
    public function setCodeContratTrav($codeContratTrav) {
        $this->codeContratTrav = $codeContratTrav;
        return $this;
    }

    /**
     * Set the code convention col.
     *
     * @param string $codeConventionCol The code convention col.
     */
    public function setCodeConventionCol($codeConventionCol) {
        $this->codeConventionCol = $codeConventionCol;
        return $this;
    }

    /**
     * Set the code decalage paie.
     *
     * @param string $codeDecalagePaie The code decalage paie.
     */
    public function setCodeDecalagePaie($codeDecalagePaie) {
        $this->codeDecalagePaie = $codeDecalagePaie;
        return $this;
    }

    /**
     * Set the code deleg gest risque maladie.
     *
     * @param string $codeDelegGestRisqueMaladie The code deleg gest risque maladie.
     */
    public function setCodeDelegGestRisqueMaladie($codeDelegGestRisqueMaladie) {
        $this->codeDelegGestRisqueMaladie = $codeDelegGestRisqueMaladie;
        return $this;
    }

    /**
     * Set the code droit contrat.
     *
     * @param string $codeDroitContrat The code droit contrat.
     */
    public function setCodeDroitContrat($codeDroitContrat) {
        $this->codeDroitContrat = $codeDroitContrat;
        return $this;
    }

    /**
     * Set the code empl mult.
     *
     * @param string $codeEmplMult The code empl mult.
     */
    public function setCodeEmplMult($codeEmplMult) {
        $this->codeEmplMult = $codeEmplMult;
        return $this;
    }

    /**
     * Set the code emplois mult.
     *
     * @param string $codeEmploisMult The code emplois mult.
     */
    public function setCodeEmploisMult($codeEmploisMult) {
        $this->codeEmploisMult = $codeEmploisMult;
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
     * Set the code etat contrat prud.
     *
     * @param string $codeEtatContratPrud The code etat contrat prud.
     */
    public function setCodeEtatContratPrud($codeEtatContratPrud) {
        $this->codeEtatContratPrud = $codeEtatContratPrud;
        return $this;
    }

    /**
     * Set the code extension alsace moselle.
     *
     * @param string $codeExtensionAlsaceMoselle The code extension alsace moselle.
     */
    public function setCodeExtensionAlsaceMoselle($codeExtensionAlsaceMoselle) {
        $this->codeExtensionAlsaceMoselle = $codeExtensionAlsaceMoselle;
        return $this;
    }

    /**
     * Set the code insee lieu trav.
     *
     * @param string $codeInseeLieuTrav The code insee lieu trav.
     */
    public function setCodeInseeLieuTrav($codeInseeLieuTrav) {
        $this->codeInseeLieuTrav = $codeInseeLieuTrav;
        return $this;
    }

    /**
     * Set the code motif deb per.
     *
     * @param string $codeMotifDebPer The code motif deb per.
     */
    public function setCodeMotifDebPer($codeMotifDebPer) {
        $this->codeMotifDebPer = $codeMotifDebPer;
        return $this;
    }

    /**
     * Set the code motif deb per2.
     *
     * @param string $codeMotifDebPer2 The code motif deb per2.
     */
    public function setCodeMotifDebPer2($codeMotifDebPer2) {
        $this->codeMotifDebPer2 = $codeMotifDebPer2;
        return $this;
    }

    /**
     * Set the code motif deb per3.
     *
     * @param string $codeMotifDebPer3 The code motif deb per3.
     */
    public function setCodeMotifDebPer3($codeMotifDebPer3) {
        $this->codeMotifDebPer3 = $codeMotifDebPer3;
        return $this;
    }

    /**
     * Set the code motif deb per4.
     *
     * @param string $codeMotifDebPer4 The code motif deb per4.
     */
    public function setCodeMotifDebPer4($codeMotifDebPer4) {
        $this->codeMotifDebPer4 = $codeMotifDebPer4;
        return $this;
    }

    /**
     * Set the code motif deb per5.
     *
     * @param string $codeMotifDebPer5 The code motif deb per5.
     */
    public function setCodeMotifDebPer5($codeMotifDebPer5) {
        $this->codeMotifDebPer5 = $codeMotifDebPer5;
        return $this;
    }

    /**
     * Set the code motif fin per.
     *
     * @param string $codeMotifFinPer The code motif fin per.
     */
    public function setCodeMotifFinPer($codeMotifFinPer) {
        $this->codeMotifFinPer = $codeMotifFinPer;
        return $this;
    }

    /**
     * Set the code motif fin per2.
     *
     * @param string $codeMotifFinPer2 The code motif fin per2.
     */
    public function setCodeMotifFinPer2($codeMotifFinPer2) {
        $this->codeMotifFinPer2 = $codeMotifFinPer2;
        return $this;
    }

    /**
     * Set the code motif fin per3.
     *
     * @param string $codeMotifFinPer3 The code motif fin per3.
     */
    public function setCodeMotifFinPer3($codeMotifFinPer3) {
        $this->codeMotifFinPer3 = $codeMotifFinPer3;
        return $this;
    }

    /**
     * Set the code motif fin per4.
     *
     * @param string $codeMotifFinPer4 The code motif fin per4.
     */
    public function setCodeMotifFinPer4($codeMotifFinPer4) {
        $this->codeMotifFinPer4 = $codeMotifFinPer4;
        return $this;
    }

    /**
     * Set the code motif fin per5.
     *
     * @param string $codeMotifFinPer5 The code motif fin per5.
     */
    public function setCodeMotifFinPer5($codeMotifFinPer5) {
        $this->codeMotifFinPer5 = $codeMotifFinPer5;
        return $this;
    }

    /**
     * Set the code nature base cotisations.
     *
     * @param string $codeNatureBaseCotisations The code nature base cotisations.
     */
    public function setCodeNatureBaseCotisations($codeNatureBaseCotisations) {
        $this->codeNatureBaseCotisations = $codeNatureBaseCotisations;
        return $this;
    }

    /**
     * Set the code officiel commune lieu trav.
     *
     * @param string $codeOfficielCommuneLieuTrav The code officiel commune lieu trav.
     */
    public function setCodeOfficielCommuneLieuTrav($codeOfficielCommuneLieuTrav) {
        $this->codeOfficielCommuneLieuTrav = $codeOfficielCommuneLieuTrav;
        return $this;
    }

    /**
     * Set the code postal lieu trav.
     *
     * @param string $codePostalLieuTrav The code postal lieu trav.
     */
    public function setCodePostalLieuTrav($codePostalLieuTrav) {
        $this->codePostalLieuTrav = $codePostalLieuTrav;
        return $this;
    }

    /**
     * Set the code regime1.
     *
     * @param string $codeRegime1 The code regime1.
     */
    public function setCodeRegime1($codeRegime1) {
        $this->codeRegime1 = $codeRegime1;
        return $this;
    }

    /**
     * Set the code regime2.
     *
     * @param string $codeRegime2 The code regime2.
     */
    public function setCodeRegime2($codeRegime2) {
        $this->codeRegime2 = $codeRegime2;
        return $this;
    }

    /**
     * Set the code regime3.
     *
     * @param string $codeRegime3 The code regime3.
     */
    public function setCodeRegime3($codeRegime3) {
        $this->codeRegime3 = $codeRegime3;
        return $this;
    }

    /**
     * Set the code regime base obl.
     *
     * @param string $codeRegimeBaseObl The code regime base obl.
     */
    public function setCodeRegimeBaseObl($codeRegimeBaseObl) {
        $this->codeRegimeBaseObl = $codeRegimeBaseObl;
        return $this;
    }

    /**
     * Set the code regime base obl at.
     *
     * @param string $codeRegimeBaseOblAt The code regime base obl at.
     */
    public function setCodeRegimeBaseOblAt($codeRegimeBaseOblAt) {
        $this->codeRegimeBaseOblAt = $codeRegimeBaseOblAt;
        return $this;
    }

    /**
     * Set the code regime base obl maladie.
     *
     * @param string $codeRegimeBaseOblMaladie The code regime base obl maladie.
     */
    public function setCodeRegimeBaseOblMaladie($codeRegimeBaseOblMaladie) {
        $this->codeRegimeBaseOblMaladie = $codeRegimeBaseOblMaladie;
        return $this;
    }

    /**
     * Set the code regime base obl vieil pat.
     *
     * @param string $codeRegimeBaseOblVieilPat The code regime base obl vieil pat.
     */
    public function setCodeRegimeBaseOblVieilPat($codeRegimeBaseOblVieilPat) {
        $this->codeRegimeBaseOblVieilPat = $codeRegimeBaseOblVieilPat;
        return $this;
    }

    /**
     * Set the code regime base obl vieil sal.
     *
     * @param string $codeRegimeBaseOblVieilSal The code regime base obl vieil sal.
     */
    public function setCodeRegimeBaseOblVieilSal($codeRegimeBaseOblVieilSal) {
        $this->codeRegimeBaseOblVieilSal = $codeRegimeBaseOblVieilSal;
        return $this;
    }

    /**
     * Set the code regime btp.
     *
     * @param string $codeRegimeBtp The code regime btp.
     */
    public function setCodeRegimeBtp($codeRegimeBtp) {
        $this->codeRegimeBtp = $codeRegimeBtp;
        return $this;
    }

    /**
     * Set the code statut categ.
     *
     * @param string $codeStatutCateg The code statut categ.
     */
    public function setCodeStatutCateg($codeStatutCateg) {
        $this->codeStatutCateg = $codeStatutCateg;
        return $this;
    }

    /**
     * Set the code statut categ conv.
     *
     * @param string $codeStatutCategConv The code statut categ conv.
     */
    public function setCodeStatutCategConv($codeStatutCategConv) {
        $this->codeStatutCategConv = $codeStatutCategConv;
        return $this;
    }

    /**
     * Set the code statut categ irc.
     *
     * @param string $codeStatutCategIrc The code statut categ irc.
     */
    public function setCodeStatutCategIrc($codeStatutCategIrc) {
        $this->codeStatutCategIrc = $codeStatutCategIrc;
        return $this;
    }

    /**
     * Set the code statut pro.
     *
     * @param string $codeStatutPro The code statut pro.
     */
    public function setCodeStatutPro($codeStatutPro) {
        $this->codeStatutPro = $codeStatutPro;
        return $this;
    }

    /**
     * Set the code type exo1.
     *
     * @param string $codeTypeExo1 The code type exo1.
     */
    public function setCodeTypeExo1($codeTypeExo1) {
        $this->codeTypeExo1 = $codeTypeExo1;
        return $this;
    }

    /**
     * Set the code type exo2.
     *
     * @param string $codeTypeExo2 The code type exo2.
     */
    public function setCodeTypeExo2($codeTypeExo2) {
        $this->codeTypeExo2 = $codeTypeExo2;
        return $this;
    }

    /**
     * Set the code type exo3.
     *
     * @param string $codeTypeExo3 The code type exo3.
     */
    public function setCodeTypeExo3($codeTypeExo3) {
        $this->codeTypeExo3 = $codeTypeExo3;
        return $this;
    }

    /**
     * Set the commentaire.
     *
     * @param string $commentaire The commentaire.
     */
    public function setCommentaire($commentaire) {
        $this->commentaire = $commentaire;
        return $this;
    }

    /**
     * Set the complement lieu trav.
     *
     * @param string $complementLieuTrav The complement lieu trav.
     */
    public function setComplementLieuTrav($complementLieuTrav) {
        $this->complementLieuTrav = $complementLieuTrav;
        return $this;
    }

    /**
     * Set the dadsu conjoint salarie.
     *
     * @param string $dadsuConjointSalarie The dadsu conjoint salarie.
     */
    public function setDadsuConjointSalarie($dadsuConjointSalarie) {
        $this->dadsuConjointSalarie = $dadsuConjointSalarie;
        return $this;
    }

    /**
     * Set the dadsu nb options.
     *
     * @param float $dadsuNbOptions The dadsu nb options.
     */
    public function setDadsuNbOptions($dadsuNbOptions) {
        $this->dadsuNbOptions = $dadsuNbOptions;
        return $this;
    }

    /**
     * Set the dadsu prix souscript opt.
     *
     * @param float $dadsuPrixSouscriptOpt The dadsu prix souscript opt.
     */
    public function setDadsuPrixSouscriptOpt($dadsuPrixSouscriptOpt) {
        $this->dadsuPrixSouscriptOpt = $dadsuPrixSouscriptOpt;
        return $this;
    }

    /**
     * Set the dadsu valeur action.
     *
     * @param float $dadsuValeurAction The dadsu valeur action.
     */
    public function setDadsuValeurAction($dadsuValeurAction) {
        $this->dadsuValeurAction = $dadsuValeurAction;
        return $this;
    }

    /**
     * Set the date ctrl norme.
     *
     * @param DateTime|null $dateCtrlNorme The date ctrl norme.
     */
    public function setDateCtrlNorme(DateTime $dateCtrlNorme = null) {
        $this->dateCtrlNorme = $dateCtrlNorme;
        return $this;
    }

    /**
     * Set the date ctrl norme btp.
     *
     * @param DateTime|null $dateCtrlNormeBtp The date ctrl norme btp.
     */
    public function setDateCtrlNormeBtp(DateTime $dateCtrlNormeBtp = null) {
        $this->dateCtrlNormeBtp = $dateCtrlNormeBtp;
        return $this;
    }

    /**
     * Set the date ctrl norme prev.
     *
     * @param DateTime|null $dateCtrlNormePrev The date ctrl norme prev.
     */
    public function setDateCtrlNormePrev(DateTime $dateCtrlNormePrev = null) {
        $this->dateCtrlNormePrev = $dateCtrlNormePrev;
        return $this;
    }

    /**
     * Set the date ctrl norme ret.
     *
     * @param DateTime|null $dateCtrlNormeRet The date ctrl norme ret.
     */
    public function setDateCtrlNormeRet(DateTime $dateCtrlNormeRet = null) {
        $this->dateCtrlNormeRet = $dateCtrlNormeRet;
        return $this;
    }

    /**
     * Set the debut periode decl.
     *
     * @param DateTime|null $debutPeriodeDecl The debut periode decl.
     */
    public function setDebutPeriodeDecl(DateTime $debutPeriodeDecl = null) {
        $this->debutPeriodeDecl = $debutPeriodeDecl;
        return $this;
    }

    /**
     * Set the echelon.
     *
     * @param string $echelon The echelon.
     */
    public function setEchelon($echelon) {
        $this->echelon = $echelon;
        return $this;
    }

    /**
     * Set the emploi.
     *
     * @param string $emploi The emploi.
     */
    public function setEmploi($emploi) {
        $this->emploi = $emploi;
        return $this;
    }

    /**
     * Set the epargne sal code1.
     *
     * @param string $epargneSalCode1 The epargne sal code1.
     */
    public function setEpargneSalCode1($epargneSalCode1) {
        $this->epargneSalCode1 = $epargneSalCode1;
        return $this;
    }

    /**
     * Set the epargne sal code2.
     *
     * @param string $epargneSalCode2 The epargne sal code2.
     */
    public function setEpargneSalCode2($epargneSalCode2) {
        $this->epargneSalCode2 = $epargneSalCode2;
        return $this;
    }

    /**
     * Set the epargne sal code3.
     *
     * @param string $epargneSalCode3 The epargne sal code3.
     */
    public function setEpargneSalCode3($epargneSalCode3) {
        $this->epargneSalCode3 = $epargneSalCode3;
        return $this;
    }

    /**
     * Set the epargne sal code4.
     *
     * @param string $epargneSalCode4 The epargne sal code4.
     */
    public function setEpargneSalCode4($epargneSalCode4) {
        $this->epargneSalCode4 = $epargneSalCode4;
        return $this;
    }

    /**
     * Set the epargne sal mnt1.
     *
     * @param float $epargneSalMnt1 The epargne sal mnt1.
     */
    public function setEpargneSalMnt1($epargneSalMnt1) {
        $this->epargneSalMnt1 = $epargneSalMnt1;
        return $this;
    }

    /**
     * Set the epargne sal mnt2.
     *
     * @param float $epargneSalMnt2 The epargne sal mnt2.
     */
    public function setEpargneSalMnt2($epargneSalMnt2) {
        $this->epargneSalMnt2 = $epargneSalMnt2;
        return $this;
    }

    /**
     * Set the epargne sal mnt3.
     *
     * @param float $epargneSalMnt3 The epargne sal mnt3.
     */
    public function setEpargneSalMnt3($epargneSalMnt3) {
        $this->epargneSalMnt3 = $epargneSalMnt3;
        return $this;
    }

    /**
     * Set the epargne sal mnt4.
     *
     * @param float $epargneSalMnt4 The epargne sal mnt4.
     */
    public function setEpargneSalMnt4($epargneSalMnt4) {
        $this->epargneSalMnt4 = $epargneSalMnt4;
        return $this;
    }

    /**
     * Set the etat ctrl norme.
     *
     * @param string $etatCtrlNorme The etat ctrl norme.
     */
    public function setEtatCtrlNorme($etatCtrlNorme) {
        $this->etatCtrlNorme = $etatCtrlNorme;
        return $this;
    }

    /**
     * Set the etat ctrl norme btp.
     *
     * @param string $etatCtrlNormeBtp The etat ctrl norme btp.
     */
    public function setEtatCtrlNormeBtp($etatCtrlNormeBtp) {
        $this->etatCtrlNormeBtp = $etatCtrlNormeBtp;
        return $this;
    }

    /**
     * Set the etat ctrl norme prev.
     *
     * @param string $etatCtrlNormePrev The etat ctrl norme prev.
     */
    public function setEtatCtrlNormePrev($etatCtrlNormePrev) {
        $this->etatCtrlNormePrev = $etatCtrlNormePrev;
        return $this;
    }

    /**
     * Set the etat ctrl norme ret.
     *
     * @param string $etatCtrlNormeRet The etat ctrl norme ret.
     */
    public function setEtatCtrlNormeRet($etatCtrlNormeRet) {
        $this->etatCtrlNormeRet = $etatCtrlNormeRet;
        return $this;
    }

    /**
     * Set the exo agff.
     *
     * @param bool $exoAgff The exo agff.
     */
    public function setExoAgff($exoAgff) {
        $this->exoAgff = $exoAgff;
        return $this;
    }

    /**
     * Set the fin periode decl.
     *
     * @param DateTime|null $finPeriodeDecl The fin periode decl.
     */
    public function setFinPeriodeDecl(DateTime $finPeriodeDecl = null) {
        $this->finPeriodeDecl = $finPeriodeDecl;
        return $this;
    }

    /**
     * Set the gpec mnt exo cot secu.
     *
     * @param float $gpecMntExoCotSecu The gpec mnt exo cot secu.
     */
    public function setGpecMntExoCotSecu($gpecMntExoCotSecu) {
        $this->gpecMntExoCotSecu = $gpecMntExoCotSecu;
        return $this;
    }

    /**
     * Set the gpec mnt exo csgcrds.
     *
     * @param float $gpecMntExoCsgcrds The gpec mnt exo csgcrds.
     */
    public function setGpecMntExoCsgcrds($gpecMntExoCsgcrds) {
        $this->gpecMntExoCsgcrds = $gpecMntExoCsgcrds;
        return $this;
    }

    /**
     * Set the indemn cp plaf.
     *
     * @param float $indemnCpPlaf The indemn cp plaf.
     */
    public function setIndemnCpPlaf($indemnCpPlaf) {
        $this->indemnCpPlaf = $indemnCpPlaf;
        return $this;
    }

    /**
     * Set the indemn rupture code1.
     *
     * @param string $indemnRuptureCode1 The indemn rupture code1.
     */
    public function setIndemnRuptureCode1($indemnRuptureCode1) {
        $this->indemnRuptureCode1 = $indemnRuptureCode1;
        return $this;
    }

    /**
     * Set the indemn rupture code2.
     *
     * @param string $indemnRuptureCode2 The indemn rupture code2.
     */
    public function setIndemnRuptureCode2($indemnRuptureCode2) {
        $this->indemnRuptureCode2 = $indemnRuptureCode2;
        return $this;
    }

    /**
     * Set the indemn rupture mnt1.
     *
     * @param float $indemnRuptureMnt1 The indemn rupture mnt1.
     */
    public function setIndemnRuptureMnt1($indemnRuptureMnt1) {
        $this->indemnRuptureMnt1 = $indemnRuptureMnt1;
        return $this;
    }

    /**
     * Set the indemn rupture mnt2.
     *
     * @param float $indemnRuptureMnt2 The indemn rupture mnt2.
     */
    public function setIndemnRuptureMnt2($indemnRuptureMnt2) {
        $this->indemnRuptureMnt2 = $indemnRuptureMnt2;
        return $this;
    }

    /**
     * Set the indice.
     *
     * @param string $indice The indice.
     */
    public function setIndice($indice) {
        $this->indice = $indice;
        return $this;
    }

    /**
     * Set the nb periodicite ircantec.
     *
     * @param float $nbPeriodiciteIrcantec The nb periodicite ircantec.
     */
    public function setNbPeriodiciteIrcantec($nbPeriodiciteIrcantec) {
        $this->nbPeriodiciteIrcantec = $nbPeriodiciteIrcantec;
        return $this;
    }

    /**
     * Set the nbh etab btp.
     *
     * @param float $nbhEtabBtp The nbh etab btp.
     */
    public function setNbhEtabBtp($nbhEtabBtp) {
        $this->nbhEtabBtp = $nbhEtabBtp;
        return $this;
    }

    /**
     * Set the nbh sal btp.
     *
     * @param float $nbhSalBtp The nbh sal btp.
     */
    public function setNbhSalBtp($nbhSalBtp) {
        $this->nbhSalBtp = $nbhSalBtp;
        return $this;
    }

    /**
     * Set the nic etab affectation.
     *
     * @param string $nicEtabAffectation The nic etab affectation.
     */
    public function setNicEtabAffectation($nicEtabAffectation) {
        $this->nicEtabAffectation = $nicEtabAffectation;
        return $this;
    }

    /**
     * Set the niveau.
     *
     * @param string $niveau The niveau.
     */
    public function setNiveau($niveau) {
        $this->niveau = $niveau;
        return $this;
    }

    /**
     * Set the nom ville insee lieu trav.
     *
     * @param string $nomVilleInseeLieuTrav The nom ville insee lieu trav.
     */
    public function setNomVilleInseeLieuTrav($nomVilleInseeLieuTrav) {
        $this->nomVilleInseeLieuTrav = $nomVilleInseeLieuTrav;
        return $this;
    }

    /**
     * Set the nom ville lieu trav.
     *
     * @param string $nomVilleLieuTrav The nom ville lieu trav.
     */
    public function setNomVilleLieuTrav($nomVilleLieuTrav) {
        $this->nomVilleLieuTrav = $nomVilleLieuTrav;
        return $this;
    }

    /**
     * Set the nom voie lieu trav.
     *
     * @param string $nomVoieLieuTrav The nom voie lieu trav.
     */
    public function setNomVoieLieuTrav($nomVoieLieuTrav) {
        $this->nomVoieLieuTrav = $nomVoieLieuTrav;
        return $this;
    }

    /**
     * Set the num voie lieu trav.
     *
     * @param string $numVoieLieuTrav The num voie lieu trav.
     */
    public function setNumVoieLieuTrav($numVoieLieuTrav) {
        $this->numVoieLieuTrav = $numVoieLieuTrav;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param string $numero The numero.
     */
    public function setNumero($numero) {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the numero adhesion btp.
     *
     * @param string $numeroAdhesionBtp The numero adhesion btp.
     */
    public function setNumeroAdhesionBtp($numeroAdhesionBtp) {
        $this->numeroAdhesionBtp = $numeroAdhesionBtp;
        return $this;
    }

    /**
     * Set the numero affil fnc.
     *
     * @param string $numeroAffilFnc The numero affil fnc.
     */
    public function setNumeroAffilFnc($numeroAffilFnc) {
        $this->numeroAffilFnc = $numeroAffilFnc;
        return $this;
    }

    /**
     * Set the numero ordre.
     *
     * @param int $numeroOrdre The numero ordre.
     */
    public function setNumeroOrdre($numeroOrdre) {
        $this->numeroOrdre = $numeroOrdre;
        return $this;
    }

    /**
     * Set the numero rattach1.
     *
     * @param string $numeroRattach1 The numero rattach1.
     */
    public function setNumeroRattach1($numeroRattach1) {
        $this->numeroRattach1 = $numeroRattach1;
        return $this;
    }

    /**
     * Set the numero rattach2.
     *
     * @param string $numeroRattach2 The numero rattach2.
     */
    public function setNumeroRattach2($numeroRattach2) {
        $this->numeroRattach2 = $numeroRattach2;
        return $this;
    }

    /**
     * Set the numero rattach3.
     *
     * @param string $numeroRattach3 The numero rattach3.
     */
    public function setNumeroRattach3($numeroRattach3) {
        $this->numeroRattach3 = $numeroRattach3;
        return $this;
    }

    /**
     * Set the numero rattach btp.
     *
     * @param string $numeroRattachBtp The numero rattach btp.
     */
    public function setNumeroRattachBtp($numeroRattachBtp) {
        $this->numeroRattachBtp = $numeroRattachBtp;
        return $this;
    }

    /**
     * Set the particip patron avtge code1.
     *
     * @param string $participPatronAvtgeCode1 The particip patron avtge code1.
     */
    public function setParticipPatronAvtgeCode1($participPatronAvtgeCode1) {
        $this->participPatronAvtgeCode1 = $participPatronAvtgeCode1;
        return $this;
    }

    /**
     * Set the particip patron avtge code2.
     *
     * @param string $participPatronAvtgeCode2 The particip patron avtge code2.
     */
    public function setParticipPatronAvtgeCode2($participPatronAvtgeCode2) {
        $this->participPatronAvtgeCode2 = $participPatronAvtgeCode2;
        return $this;
    }

    /**
     * Set the particip patron avtge mnt1.
     *
     * @param float $participPatronAvtgeMnt1 The particip patron avtge mnt1.
     */
    public function setParticipPatronAvtgeMnt1($participPatronAvtgeMnt1) {
        $this->participPatronAvtgeMnt1 = $participPatronAvtgeMnt1;
        return $this;
    }

    /**
     * Set the particip patron avtge mnt2.
     *
     * @param float $participPatronAvtgeMnt2 The particip patron avtge mnt2.
     */
    public function setParticipPatronAvtgeMnt2($participPatronAvtgeMnt2) {
        $this->participPatronAvtgeMnt2 = $participPatronAvtgeMnt2;
        return $this;
    }

    /**
     * Set the periodicite ircantec.
     *
     * @param string $periodiciteIrcantec The periodicite ircantec.
     */
    public function setPeriodiciteIrcantec($periodiciteIrcantec) {
        $this->periodiciteIrcantec = $periodiciteIrcantec;
        return $this;
    }

    /**
     * Set the position.
     *
     * @param string $position The position.
     */
    public function setPosition($position) {
        $this->position = $position;
        return $this;
    }

    /**
     * Set the pourcent act.
     *
     * @param float $pourcentAct The pourcent act.
     */
    public function setPourcentAct($pourcentAct) {
        $this->pourcentAct = $pourcentAct;
        return $this;
    }

    /**
     * Set the remun medecins.
     *
     * @param float $remunMedecins The remun medecins.
     */
    public function setRemunMedecins($remunMedecins) {
        $this->remunMedecins = $remunMedecins;
        return $this;
    }

    /**
     * Set the siret lieu trav.
     *
     * @param string $siretLieuTrav The siret lieu trav.
     */
    public function setSiretLieuTrav($siretLieuTrav) {
        $this->siretLieuTrav = $siretLieuTrav;
        return $this;
    }

    /**
     * Set the statut cotisant btp.
     *
     * @param string $statutCotisantBtp The statut cotisant btp.
     */
    public function setStatutCotisantBtp($statutCotisantBtp) {
        $this->statutCotisantBtp = $statutCotisantBtp;
        return $this;
    }

    /**
     * Set the suppl fam.
     *
     * @param float $supplFam The suppl fam.
     */
    public function setSupplFam($supplFam) {
        $this->supplFam = $supplFam;
        return $this;
    }

    /**
     * Set the tds59.
     *
     * @param string $tds59 The tds59.
     */
    public function setTds59($tds59) {
        $this->tds59 = $tds59;
        return $this;
    }

    /**
     * Set the type affil btp.
     *
     * @param string $typeAffilBtp The type affil btp.
     */
    public function setTypeAffilBtp($typeAffilBtp) {
        $this->typeAffilBtp = $typeAffilBtp;
        return $this;
    }
}
