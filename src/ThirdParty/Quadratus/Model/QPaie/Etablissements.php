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
 * Etablissements.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class Etablissements {

    /**
     * Abattement max.
     *
     * @var float
     */
    private $abattementMax;

    /**
     * Alleg particulier.
     *
     * @var string
     */
    private $allegParticulier;

    /**
     * At bureau1.
     *
     * @var string
     */
    private $atBureau1;

    /**
     * At bureau2.
     *
     * @var string
     */
    private $atBureau2;

    /**
     * At bureau3.
     *
     * @var string
     */
    private $atBureau3;

    /**
     * At bureau4.
     *
     * @var string
     */
    private $atBureau4;

    /**
     * At bureau5.
     *
     * @var string
     */
    private $atBureau5;

    /**
     * At etab1.
     *
     * @var string
     */
    private $atEtab1;

    /**
     * At etab2.
     *
     * @var string
     */
    private $atEtab2;

    /**
     * At etab3.
     *
     * @var string
     */
    private $atEtab3;

    /**
     * At etab4.
     *
     * @var string
     */
    private $atEtab4;

    /**
     * At etab5.
     *
     * @var string
     */
    private $atEtab5;

    /**
     * At risque1.
     *
     * @var string
     */
    private $atRisque1;

    /**
     * At risque2.
     *
     * @var string
     */
    private $atRisque2;

    /**
     * At risque3.
     *
     * @var string
     */
    private $atRisque3;

    /**
     * At risque4.
     *
     * @var string
     */
    private $atRisque4;

    /**
     * At risque5.
     *
     * @var string
     */
    private $atRisque5;

    /**
     * At taux1.
     *
     * @var float
     */
    private $atTaux1;

    /**
     * At taux2.
     *
     * @var float
     */
    private $atTaux2;

    /**
     * At taux3.
     *
     * @var float
     */
    private $atTaux3;

    /**
     * At taux4.
     *
     * @var float
     */
    private $atTaux4;

    /**
     * At taux5.
     *
     * @var float
     */
    private $atTaux5;

    /**
     * At taux bul1.
     *
     * @var float
     */
    private $atTauxBul1;

    /**
     * At taux bul2.
     *
     * @var float
     */
    private $atTauxBul2;

    /**
     * At taux bul3.
     *
     * @var float
     */
    private $atTauxBul3;

    /**
     * At taux bul4.
     *
     * @var float
     */
    private $atTauxBul4;

    /**
     * At taux bul5.
     *
     * @var float
     */
    private $atTauxBul5;

    /**
     * Aubry1 modifie.
     *
     * @var bool
     */
    private $aubry1Modifie;

    /**
     * Autre alleg.
     *
     * @var string
     */
    private $autreAlleg;

    /**
     * Banque1.
     *
     * @var string
     */
    private $banque1;

    /**
     * Banque2.
     *
     * @var string
     */
    private $banque2;

    /**
     * Banque3.
     *
     * @var string
     */
    private $banque3;

    /**
     * Bic1.
     *
     * @var string
     */
    private $bic1;

    /**
     * Bonus cospar.
     *
     * @var bool
     */
    private $bonusCospar;

    /**
     * Btq.
     *
     * @var string
     */
    private $btq;

    /**
     * Bureau distributeur.
     *
     * @var string
     */
    private $bureauDistributeur;

    /**
     * C colect11.
     *
     * @var string
     */
    private $cColect11;

    /**
     * C colect12.
     *
     * @var string
     */
    private $cColect12;

    /**
     * C colect21.
     *
     * @var string
     */
    private $cColect21;

    /**
     * C colect22.
     *
     * @var string
     */
    private $cColect22;

    /**
     * C colect31.
     *
     * @var string
     */
    private $cColect31;

    /**
     * C colect32.
     *
     * @var string
     */
    private $cColect32;

    /**
     * C colect41.
     *
     * @var string
     */
    private $cColect41;

    /**
     * C colect42.
     *
     * @var string
     */
    private $cColect42;

    /**
     * C colect51.
     *
     * @var string
     */
    private $cColect51;

    /**
     * C colect52.
     *
     * @var string
     */
    private $cColect52;

    /**
     * C colect61.
     *
     * @var string
     */
    private $cColect61;

    /**
     * C colect62.
     *
     * @var string
     */
    private $cColect62;

    /**
     * Caisse cp.
     *
     * @var bool
     */
    private $caisseCp;

    /**
     * Centre analytique.
     *
     * @var string
     */
    private $centreAnalytique;

    /**
     * Civilite.
     *
     * @var string
     */
    private $civilite;

    /**
     * Code adherent.
     *
     * @var string
     */
    private $codeAdherent;

    /**
     * Code c colect1.
     *
     * @var string
     */
    private $codeCColect1;

    /**
     * Code c colect2.
     *
     * @var string
     */
    private $codeCColect2;

    /**
     * Code c colect3.
     *
     * @var string
     */
    private $codeCColect3;

    /**
     * Code c colect4.
     *
     * @var string
     */
    private $codeCColect4;

    /**
     * Code c colect5.
     *
     * @var string
     */
    private $codeCColect5;

    /**
     * Code c colect6.
     *
     * @var string
     */
    private $codeCColect6;

    /**
     * Code centre impot.
     *
     * @var string
     */
    private $codeCentreImpot;

    /**
     * Code ducs specif.
     *
     * @var string
     */
    private $codeDucsSpecif;

    /**
     * Code etablissement.
     *
     * @var int
     */
    private $codeEtablissement;

    /**
     * Code insee.
     *
     * @var string
     */
    private $codeInsee;

    /**
     * Code journal banque.
     *
     * @var string
     */
    private $codeJournalBanque;

    /**
     * Code journal paie.
     *
     * @var string
     */
    private $codeJournalPaie;

    /**
     * Code metier retraite.
     *
     * @var string
     */
    private $codeMetierRetraite;

    /**
     * Code naf.
     *
     * @var string
     */
    private $codeNaf;

    /**
     * Code naf2.
     *
     * @var string
     */
    private $codeNaf2;

    /**
     * Code naf2008.
     *
     * @var string
     */
    private $codeNaf2008;

    /**
     * Code naf22008.
     *
     * @var string
     */
    private $codeNaf22008;

    /**
     * Code naf3.
     *
     * @var string
     */
    private $codeNaf3;

    /**
     * Code naf32008.
     *
     * @var string
     */
    private $codeNaf32008;

    /**
     * Code officiel commune.
     *
     * @var string
     */
    private $codeOfficielCommune;

    /**
     * Code pays.
     *
     * @var string
     */
    private $codePays;

    /**
     * Code pays residence.
     *
     * @var string
     */
    private $codePaysResidence;

    /**
     * Code postal.
     *
     * @var string
     */
    private $codePostal;

    /**
     * Coeff aubry2.
     *
     * @var float
     */
    private $coeffAubry2;

    /**
     * Complement.
     *
     * @var string
     */
    private $complement;

    /**
     * Compte acompte employe.
     *
     * @var bool
     */
    private $compteAcompteEmploye;

    /**
     * Compte charge1.
     *
     * @var string
     */
    private $compteCharge1;

    /**
     * Compte charge10.
     *
     * @var string
     */
    private $compteCharge10;

    /**
     * Compte charge11.
     *
     * @var string
     */
    private $compteCharge11;

    /**
     * Compte charge2.
     *
     * @var string
     */
    private $compteCharge2;

    /**
     * Compte charge3.
     *
     * @var string
     */
    private $compteCharge3;

    /**
     * Compte charge4.
     *
     * @var string
     */
    private $compteCharge4;

    /**
     * Compte charge5.
     *
     * @var string
     */
    private $compteCharge5;

    /**
     * Compte charge6.
     *
     * @var string
     */
    private $compteCharge6;

    /**
     * Compte charge7.
     *
     * @var string
     */
    private $compteCharge7;

    /**
     * Compte charge8.
     *
     * @var string
     */
    private $compteCharge8;

    /**
     * Compte charge9.
     *
     * @var string
     */
    private $compteCharge9;

    /**
     * Compte charge aen.
     *
     * @var string
     */
    private $compteChargeAen;

    /**
     * Compte charge fc.
     *
     * @var string
     */
    private $compteChargeFc;

    /**
     * Compte charge ijss.
     *
     * @var string
     */
    private $compteChargeIjss;

    /**
     * Compte charge indem cp.
     *
     * @var string
     */
    private $compteChargeIndemCp;

    /**
     * Compte saisie arret.
     *
     * @var string
     */
    private $compteSaisieArret;

    /**
     * Compte tiers1.
     *
     * @var string
     */
    private $compteTiers1;

    /**
     * Compte tiers2.
     *
     * @var string
     */
    private $compteTiers2;

    /**
     * Dadsu code c colect1.
     *
     * @var string
     */
    private $dadsuCodeCColect1;

    /**
     * Dadsu code c colect2.
     *
     * @var string
     */
    private $dadsuCodeCColect2;

    /**
     * Dadsu code c colect3.
     *
     * @var string
     */
    private $dadsuCodeCColect3;

    /**
     * Dadsu code c colect4.
     *
     * @var string
     */
    private $dadsuCodeCColect4;

    /**
     * Dadsu code c colect5.
     *
     * @var string
     */
    private $dadsuCodeCColect5;

    /**
     * Dadsu code c colect6.
     *
     * @var string
     */
    private $dadsuCodeCColect6;

    /**
     * Date allegement.
     *
     * @var DateTime|null
     */
    private $dateAllegement;

    /**
     * Date ducs.
     *
     * @var DateTime|null
     */
    private $dateDucs;

    /**
     * Date fin cospar.
     *
     * @var DateTime|null
     */
    private $dateFinCospar;

    /**
     * Date fin cp.
     *
     * @var DateTime|null
     */
    private $dateFinCp;

    /**
     * Date modification.
     *
     * @var DateTime|null
     */
    private $dateModification;

    /**
     * Date publication.
     *
     * @var DateTime|null
     */
    private $datePublication;

    /**
     * Debut envoi.
     *
     * @var DateTime|null
     */
    private $debutEnvoi;

    /**
     * Detail salarie.
     *
     * @var bool
     */
    private $detailSalarie;

    /**
     * Domaine activite.
     *
     * @var string
     */
    private $domaineActivite;

    /**
     * Dossier comptable.
     *
     * @var string
     */
    private $dossierComptable;

    /**
     * Edition dif.
     *
     * @var bool
     */
    private $editionDif;

    /**
     * Edition dif bul.
     *
     * @var string
     */
    private $editionDifBul;

    /**
     * Emetteur1.
     *
     * @var int
     */
    private $emetteur1;

    /**
     * Emetteur2.
     *
     * @var int
     */
    private $emetteur2;

    /**
     * Emetteur3.
     *
     * @var int
     */
    private $emetteur3;

    /**
     * Enseigne.
     *
     * @var string
     */
    private $enseigne;

    /**
     * Etab decl dadsu.
     *
     * @var bool
     */
    private $etabDeclDadsu;

    /**
     * Exclure dadsu.
     *
     * @var bool
     */
    private $exclureDadsu;

    /**
     * Exo lodeom renforcee.
     *
     * @var bool
     */
    private $exoLodeomRenforcee;

    /**
     * Fax.
     *
     * @var string
     */
    private $fax;

    /**
     * Fin envoi.
     *
     * @var DateTime|null
     */
    private $finEnvoi;

    /**
     * Gere fraction etab.
     *
     * @var bool
     */
    private $gereFractionEtab;

    /**
     * Gestion contingent.
     *
     * @var bool
     */
    private $gestionContingent;

    /**
     * Gestion ducs1.
     *
     * @var string
     */
    private $gestionDucs1;

    /**
     * Gestion ducs2.
     *
     * @var string
     */
    private $gestionDucs2;

    /**
     * Gestion jour ferie etab.
     *
     * @var bool
     */
    private $gestionJourFerieEtab;

    /**
     * Gestion repos comp.
     *
     * @var bool
     */
    private $gestionReposComp;

    /**
     * Gestion repos recup.
     *
     * @var bool
     */
    private $gestionReposRecup;

    /**
     * Gestion repos remplace.
     *
     * @var bool
     */
    private $gestionReposRemplace;

    /**
     * Gestion rtt.
     *
     * @var bool
     */
    private $gestionRtt;

    /**
     * Gestion sem type.
     *
     * @var bool
     */
    private $gestionSemType;

    /**
     * Iban1.
     *
     * @var string
     */
    private $iban1;

    /**
     * Iban id client1.
     *
     * @var string
     */
    private $ibanIdClient1;

    /**
     * Inscrit rep metier.
     *
     * @var bool
     */
    private $inscritRepMetier;

    /**
     * Jour verse salaire.
     *
     * @var string
     */
    private $jourVerseSalaire;

    /**
     * Maintien intervient cp.
     *
     * @var bool
     */
    private $maintienIntervientCp;

    /**
     * Maintien salaire.
     *
     * @var bool
     */
    private $maintienSalaire;

    /**
     * Maintien specifique.
     *
     * @var bool
     */
    private $maintienSpecifique;

    /**
     * Masque service employe.
     *
     * @var bool
     */
    private $masqueServiceEmploye;

    /**
     * Methode cp.
     *
     * @var string
     */
    private $methodeCp;

    /**
     * Mois cloture cp.
     *
     * @var string
     */
    private $moisClotureCp;

    /**
     * Mois cloture dif.
     *
     * @var string
     */
    private $moisClotureDif;

    /**
     * Mois cloture rtt.
     *
     * @var string
     */
    private $moisClotureRtt;

    /**
     * Montant1.
     *
     * @var float
     */
    private $montant1;

    /**
     * Montant2.
     *
     * @var float
     */
    private $montant2;

    /**
     * Montant3.
     *
     * @var float
     */
    private $montant3;

    /**
     * Montant4.
     *
     * @var float
     */
    private $montant4;

    /**
     * Montant5.
     *
     * @var float
     */
    private $montant5;

    /**
     * Montant allegement.
     *
     * @var float
     */
    private $montantAllegement;

    /**
     * Nature analytique.
     *
     * @var string
     */
    private $natureAnalytique;

    /**
     * Nb h jour1.
     *
     * @var float
     */
    private $nbHJour1;

    /**
     * Nb h jour2.
     *
     * @var float
     */
    private $nbHJour2;

    /**
     * Nb h jour3.
     *
     * @var float
     */
    private $nbHJour3;

    /**
     * Nb h jour4.
     *
     * @var float
     */
    private $nbHJour4;

    /**
     * Nb h jour5.
     *
     * @var float
     */
    private $nbHJour5;

    /**
     * Nb h jour6.
     *
     * @var float
     */
    private $nbHJour6;

    /**
     * Nb h jour7.
     *
     * @var float
     */
    private $nbHJour7;

    /**
     * Nb hdif an.
     *
     * @var float
     */
    private $nbHdifAn;

    /**
     * Nb heure trav mois.
     *
     * @var float
     */
    private $nbHeureTravMois;

    /**
     * Nb jour base.
     *
     * @var float
     */
    private $nbJourBase;

    /**
     * Nb jour base cp.
     *
     * @var float
     */
    private $nbJourBaseCp;

    /**
     * Nb jour cp acquis.
     *
     * @var float
     */
    private $nbJourCpAcquis;

    /**
     * Nb m ajout per.
     *
     * @var string
     */
    private $nbMAjoutPer;

    /**
     * Nb mois aubry1.
     *
     * @var float
     */
    private $nbMoisAubry1;

    /**
     * Nbh jour rtt.
     *
     * @var float
     */
    private $nbhJourRtt;

    /**
     * Ne pas activer loi fillon2003.
     *
     * @var bool
     */
    private $nePasActiverLoiFillon2003;

    /**
     * Nom ville.
     *
     * @var string
     */
    private $nomVille;

    /**
     * Nom ville insee.
     *
     * @var string
     */
    private $nomVilleInsee;

    /**
     * Nom voie.
     *
     * @var string
     */
    private $nomVoie;

    /**
     * Num voie.
     *
     * @var string
     */
    private $numVoie;

    /**
     * Opca dif.
     *
     * @var string
     */
    private $opcaDif;

    /**
     * P lafond exo.
     *
     * @var float
     */
    private $pLafondExo;

    /**
     * Paie decalee.
     *
     * @var bool
     */
    private $paieDecalee;

    /**
     * Plafond1 caisse1.
     *
     * @var float
     */
    private $plafond1Caisse1;

    /**
     * Plafond1 caisse2.
     *
     * @var float
     */
    private $plafond1Caisse2;

    /**
     * Plafond1 caisse3.
     *
     * @var float
     */
    private $plafond1Caisse3;

    /**
     * Plafond2 caisse1.
     *
     * @var float
     */
    private $plafond2Caisse1;

    /**
     * Plafond2 caisse2.
     *
     * @var float
     */
    private $plafond2Caisse2;

    /**
     * Plafond2 caisse3.
     *
     * @var float
     */
    private $plafond2Caisse3;

    /**
     * Pourcent bonif.
     *
     * @var float
     */
    private $pourcentBonif;

    /**
     * Pourcent exo.
     *
     * @var float
     */
    private $pourcentExo;

    /**
     * Pourcent transport.
     *
     * @var float
     */
    private $pourcentTransport;

    /**
     * Pourcentage imp.
     *
     * @var float
     */
    private $pourcentageImp;

    /**
     * Prof spectacle.
     *
     * @var bool
     */
    private $profSpectacle;

    /**
     * Profession.
     *
     * @var string
     */
    private $profession;

    /**
     * Prud type.
     *
     * @var string
     */
    private $prudType;

    /**
     * Prud type dadsu.
     *
     * @var string
     */
    private $prudTypeDadsu;

    /**
     * Publication.
     *
     * @var bool
     */
    private $publication;

    /**
     * Qualite.
     *
     * @var string
     */
    private $qualite;

    /**
     * Raison sociale.
     *
     * @var string
     */
    private $raisonSociale;

    /**
     * Reduction fillon.
     *
     * @var bool
     */
    private $reductionFillon;

    /**
     * Responsable.
     *
     * @var string
     */
    private $responsable;

    /**
     * Rib1.
     *
     * @var string
     */
    private $rib1;

    /**
     * Rib2.
     *
     * @var string
     */
    private $rib2;

    /**
     * Rib3.
     *
     * @var string
     */
    private $rib3;

    /**
     * Rtt1.
     *
     * @var float
     */
    private $rtt1;

    /**
     * Rtt10.
     *
     * @var float
     */
    private $rtt10;

    /**
     * Rtt11.
     *
     * @var float
     */
    private $rtt11;

    /**
     * Rtt12.
     *
     * @var float
     */
    private $rtt12;

    /**
     * Rtt2.
     *
     * @var float
     */
    private $rtt2;

    /**
     * Rtt3.
     *
     * @var float
     */
    private $rtt3;

    /**
     * Rtt4.
     *
     * @var float
     */
    private $rtt4;

    /**
     * Rtt5.
     *
     * @var float
     */
    private $rtt5;

    /**
     * Rtt6.
     *
     * @var float
     */
    private $rtt6;

    /**
     * Rtt7.
     *
     * @var float
     */
    private $rtt7;

    /**
     * Rtt8.
     *
     * @var float
     */
    private $rtt8;

    /**
     * Rtt9.
     *
     * @var float
     */
    private $rtt9;

    /**
     * Siege dadsu.
     *
     * @var bool
     */
    private $siegeDadsu;

    /**
     * Siret.
     *
     * @var string
     */
    private $siret;

    /**
     * Situation geo.
     *
     * @var string
     */
    private $situationGeo;

    /**
     * Subrogation.
     *
     * @var bool
     */
    private $subrogation;

    /**
     * Suivi analytique.
     *
     * @var bool
     */
    private $suiviAnalytique;

    /**
     * Taux actionsociale.
     *
     * @var float
     */
    private $tauxActionsociale;

    /**
     * Taux construction.
     *
     * @var float
     */
    private $tauxConstruction;

    /**
     * Taux formation.
     *
     * @var float
     */
    private $tauxFormation;

    /**
     * Taux h sup1.
     *
     * @var float
     */
    private $tauxHSup1;

    /**
     * Taux h sup2.
     *
     * @var float
     */
    private $tauxHSup2;

    /**
     * Taux h sup3.
     *
     * @var float
     */
    private $tauxHSup3;

    /**
     * Taux h sup4.
     *
     * @var float
     */
    private $tauxHSup4;

    /**
     * Taux h sup5.
     *
     * @var float
     */
    private $tauxHSup5;

    /**
     * Taux ret tr2 pp.
     *
     * @var float
     */
    private $tauxRetTr2Pp;

    /**
     * Taux ret tr2 ps.
     *
     * @var float
     */
    private $tauxRetTr2Ps;

    /**
     * Taux ret tr app.
     *
     * @var float
     */
    private $tauxRetTrApp;

    /**
     * Taux ret tr aps.
     *
     * @var float
     */
    private $tauxRetTrAps;

    /**
     * Taux ret tr bpp.
     *
     * @var float
     */
    private $tauxRetTrBpp;

    /**
     * Taux ret tr bps.
     *
     * @var float
     */
    private $tauxRetTrBps;

    /**
     * Taux ret tr cpp.
     *
     * @var float
     */
    private $tauxRetTrCpp;

    /**
     * Taux ret tr cps.
     *
     * @var float
     */
    private $tauxRetTrCps;

    /**
     * Taux ret tr dpp.
     *
     * @var float
     */
    private $tauxRetTrDpp;

    /**
     * Taux ret tr dps.
     *
     * @var float
     */
    private $tauxRetTrDps;

    /**
     * Taux sup formation.
     *
     * @var float
     */
    private $tauxSupFormation;

    /**
     * Taux taxe apprenti.
     *
     * @var float
     */
    private $tauxTaxeApprenti;

    /**
     * Taux transport.
     *
     * @var float
     */
    private $tauxTransport;

    /**
     * Tds128.
     *
     * @var string
     */
    private $tds128;

    /**
     * Tds19.
     *
     * @var string
     */
    private $tds19;

    /**
     * Tds47.
     *
     * @var string
     */
    private $tds47;

    /**
     * Tel.
     *
     * @var string
     */
    private $tel;

    /**
     * Tx sal decote.
     *
     * @var float
     */
    private $txSalDecote;

    /**
     * Type base caisse1.
     *
     * @var string
     */
    private $typeBaseCaisse1;

    /**
     * Type base caisse2.
     *
     * @var string
     */
    private $typeBaseCaisse2;

    /**
     * Type base caisse3.
     *
     * @var string
     */
    private $typeBaseCaisse3;

    /**
     * Type bonif.
     *
     * @var string
     */
    private $typeBonif;

    /**
     * Type domiciliation banque1.
     *
     * @var string
     */
    private $typeDomiciliationBanque1;

    /**
     * Type domiciliation banque2.
     *
     * @var string
     */
    private $typeDomiciliationBanque2;

    /**
     * Type domiciliation banque3.
     *
     * @var string
     */
    private $typeDomiciliationBanque3;

    /**
     * Type effectif.
     *
     * @var string
     */
    private $typeEffectif;

    /**
     * Type maintien salaire.
     *
     * @var string
     */
    private $typeMaintienSalaire;

    /**
     * Type publication.
     *
     * @var string
     */
    private $typePublication;

    /**
     * Type saisie ab cp.
     *
     * @var string
     */
    private $typeSaisieAbCp;

    /**
     * Type smic.
     *
     * @var string
     */
    private $typeSmic;

    /**
     * Urssaf alsace.
     *
     * @var bool
     */
    private $urssafAlsace;

    /**
     * Zone specif.
     *
     * @var string
     */
    private $zoneSpecif;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the abattement max.
     *
     * @return float Returns the abattement max.
     */
    public function getAbattementMax() {
        return $this->abattementMax;
    }

    /**
     * Get the alleg particulier.
     *
     * @return string Returns the alleg particulier.
     */
    public function getAllegParticulier() {
        return $this->allegParticulier;
    }

    /**
     * Get the at bureau1.
     *
     * @return string Returns the at bureau1.
     */
    public function getAtBureau1() {
        return $this->atBureau1;
    }

    /**
     * Get the at bureau2.
     *
     * @return string Returns the at bureau2.
     */
    public function getAtBureau2() {
        return $this->atBureau2;
    }

    /**
     * Get the at bureau3.
     *
     * @return string Returns the at bureau3.
     */
    public function getAtBureau3() {
        return $this->atBureau3;
    }

    /**
     * Get the at bureau4.
     *
     * @return string Returns the at bureau4.
     */
    public function getAtBureau4() {
        return $this->atBureau4;
    }

    /**
     * Get the at bureau5.
     *
     * @return string Returns the at bureau5.
     */
    public function getAtBureau5() {
        return $this->atBureau5;
    }

    /**
     * Get the at etab1.
     *
     * @return string Returns the at etab1.
     */
    public function getAtEtab1() {
        return $this->atEtab1;
    }

    /**
     * Get the at etab2.
     *
     * @return string Returns the at etab2.
     */
    public function getAtEtab2() {
        return $this->atEtab2;
    }

    /**
     * Get the at etab3.
     *
     * @return string Returns the at etab3.
     */
    public function getAtEtab3() {
        return $this->atEtab3;
    }

    /**
     * Get the at etab4.
     *
     * @return string Returns the at etab4.
     */
    public function getAtEtab4() {
        return $this->atEtab4;
    }

    /**
     * Get the at etab5.
     *
     * @return string Returns the at etab5.
     */
    public function getAtEtab5() {
        return $this->atEtab5;
    }

    /**
     * Get the at risque1.
     *
     * @return string Returns the at risque1.
     */
    public function getAtRisque1() {
        return $this->atRisque1;
    }

    /**
     * Get the at risque2.
     *
     * @return string Returns the at risque2.
     */
    public function getAtRisque2() {
        return $this->atRisque2;
    }

    /**
     * Get the at risque3.
     *
     * @return string Returns the at risque3.
     */
    public function getAtRisque3() {
        return $this->atRisque3;
    }

    /**
     * Get the at risque4.
     *
     * @return string Returns the at risque4.
     */
    public function getAtRisque4() {
        return $this->atRisque4;
    }

    /**
     * Get the at risque5.
     *
     * @return string Returns the at risque5.
     */
    public function getAtRisque5() {
        return $this->atRisque5;
    }

    /**
     * Get the at taux1.
     *
     * @return float Returns the at taux1.
     */
    public function getAtTaux1() {
        return $this->atTaux1;
    }

    /**
     * Get the at taux2.
     *
     * @return float Returns the at taux2.
     */
    public function getAtTaux2() {
        return $this->atTaux2;
    }

    /**
     * Get the at taux3.
     *
     * @return float Returns the at taux3.
     */
    public function getAtTaux3() {
        return $this->atTaux3;
    }

    /**
     * Get the at taux4.
     *
     * @return float Returns the at taux4.
     */
    public function getAtTaux4() {
        return $this->atTaux4;
    }

    /**
     * Get the at taux5.
     *
     * @return float Returns the at taux5.
     */
    public function getAtTaux5() {
        return $this->atTaux5;
    }

    /**
     * Get the at taux bul1.
     *
     * @return float Returns the at taux bul1.
     */
    public function getAtTauxBul1() {
        return $this->atTauxBul1;
    }

    /**
     * Get the at taux bul2.
     *
     * @return float Returns the at taux bul2.
     */
    public function getAtTauxBul2() {
        return $this->atTauxBul2;
    }

    /**
     * Get the at taux bul3.
     *
     * @return float Returns the at taux bul3.
     */
    public function getAtTauxBul3() {
        return $this->atTauxBul3;
    }

    /**
     * Get the at taux bul4.
     *
     * @return float Returns the at taux bul4.
     */
    public function getAtTauxBul4() {
        return $this->atTauxBul4;
    }

    /**
     * Get the at taux bul5.
     *
     * @return float Returns the at taux bul5.
     */
    public function getAtTauxBul5() {
        return $this->atTauxBul5;
    }

    /**
     * Get the aubry1 modifie.
     *
     * @return bool Returns the aubry1 modifie.
     */
    public function getAubry1Modifie() {
        return $this->aubry1Modifie;
    }

    /**
     * Get the autre alleg.
     *
     * @return string Returns the autre alleg.
     */
    public function getAutreAlleg() {
        return $this->autreAlleg;
    }

    /**
     * Get the banque1.
     *
     * @return string Returns the banque1.
     */
    public function getBanque1() {
        return $this->banque1;
    }

    /**
     * Get the banque2.
     *
     * @return string Returns the banque2.
     */
    public function getBanque2() {
        return $this->banque2;
    }

    /**
     * Get the banque3.
     *
     * @return string Returns the banque3.
     */
    public function getBanque3() {
        return $this->banque3;
    }

    /**
     * Get the bic1.
     *
     * @return string Returns the bic1.
     */
    public function getBic1() {
        return $this->bic1;
    }

    /**
     * Get the bonus cospar.
     *
     * @return bool Returns the bonus cospar.
     */
    public function getBonusCospar() {
        return $this->bonusCospar;
    }

    /**
     * Get the btq.
     *
     * @return string Returns the btq.
     */
    public function getBtq() {
        return $this->btq;
    }

    /**
     * Get the bureau distributeur.
     *
     * @return string Returns the bureau distributeur.
     */
    public function getBureauDistributeur() {
        return $this->bureauDistributeur;
    }

    /**
     * Get the c colect11.
     *
     * @return string Returns the c colect11.
     */
    public function getCColect11() {
        return $this->cColect11;
    }

    /**
     * Get the c colect12.
     *
     * @return string Returns the c colect12.
     */
    public function getCColect12() {
        return $this->cColect12;
    }

    /**
     * Get the c colect21.
     *
     * @return string Returns the c colect21.
     */
    public function getCColect21() {
        return $this->cColect21;
    }

    /**
     * Get the c colect22.
     *
     * @return string Returns the c colect22.
     */
    public function getCColect22() {
        return $this->cColect22;
    }

    /**
     * Get the c colect31.
     *
     * @return string Returns the c colect31.
     */
    public function getCColect31() {
        return $this->cColect31;
    }

    /**
     * Get the c colect32.
     *
     * @return string Returns the c colect32.
     */
    public function getCColect32() {
        return $this->cColect32;
    }

    /**
     * Get the c colect41.
     *
     * @return string Returns the c colect41.
     */
    public function getCColect41() {
        return $this->cColect41;
    }

    /**
     * Get the c colect42.
     *
     * @return string Returns the c colect42.
     */
    public function getCColect42() {
        return $this->cColect42;
    }

    /**
     * Get the c colect51.
     *
     * @return string Returns the c colect51.
     */
    public function getCColect51() {
        return $this->cColect51;
    }

    /**
     * Get the c colect52.
     *
     * @return string Returns the c colect52.
     */
    public function getCColect52() {
        return $this->cColect52;
    }

    /**
     * Get the c colect61.
     *
     * @return string Returns the c colect61.
     */
    public function getCColect61() {
        return $this->cColect61;
    }

    /**
     * Get the c colect62.
     *
     * @return string Returns the c colect62.
     */
    public function getCColect62() {
        return $this->cColect62;
    }

    /**
     * Get the caisse cp.
     *
     * @return bool Returns the caisse cp.
     */
    public function getCaisseCp() {
        return $this->caisseCp;
    }

    /**
     * Get the centre analytique.
     *
     * @return string Returns the centre analytique.
     */
    public function getCentreAnalytique() {
        return $this->centreAnalytique;
    }

    /**
     * Get the civilite.
     *
     * @return string Returns the civilite.
     */
    public function getCivilite() {
        return $this->civilite;
    }

    /**
     * Get the code adherent.
     *
     * @return string Returns the code adherent.
     */
    public function getCodeAdherent() {
        return $this->codeAdherent;
    }

    /**
     * Get the code c colect1.
     *
     * @return string Returns the code c colect1.
     */
    public function getCodeCColect1() {
        return $this->codeCColect1;
    }

    /**
     * Get the code c colect2.
     *
     * @return string Returns the code c colect2.
     */
    public function getCodeCColect2() {
        return $this->codeCColect2;
    }

    /**
     * Get the code c colect3.
     *
     * @return string Returns the code c colect3.
     */
    public function getCodeCColect3() {
        return $this->codeCColect3;
    }

    /**
     * Get the code c colect4.
     *
     * @return string Returns the code c colect4.
     */
    public function getCodeCColect4() {
        return $this->codeCColect4;
    }

    /**
     * Get the code c colect5.
     *
     * @return string Returns the code c colect5.
     */
    public function getCodeCColect5() {
        return $this->codeCColect5;
    }

    /**
     * Get the code c colect6.
     *
     * @return string Returns the code c colect6.
     */
    public function getCodeCColect6() {
        return $this->codeCColect6;
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
     * Get the code ducs specif.
     *
     * @return string Returns the code ducs specif.
     */
    public function getCodeDucsSpecif() {
        return $this->codeDucsSpecif;
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
     * Get the code insee.
     *
     * @return string Returns the code insee.
     */
    public function getCodeInsee() {
        return $this->codeInsee;
    }

    /**
     * Get the code journal banque.
     *
     * @return string Returns the code journal banque.
     */
    public function getCodeJournalBanque() {
        return $this->codeJournalBanque;
    }

    /**
     * Get the code journal paie.
     *
     * @return string Returns the code journal paie.
     */
    public function getCodeJournalPaie() {
        return $this->codeJournalPaie;
    }

    /**
     * Get the code metier retraite.
     *
     * @return string Returns the code metier retraite.
     */
    public function getCodeMetierRetraite() {
        return $this->codeMetierRetraite;
    }

    /**
     * Get the code naf.
     *
     * @return string Returns the code naf.
     */
    public function getCodeNaf() {
        return $this->codeNaf;
    }

    /**
     * Get the code naf2.
     *
     * @return string Returns the code naf2.
     */
    public function getCodeNaf2() {
        return $this->codeNaf2;
    }

    /**
     * Get the code naf2008.
     *
     * @return string Returns the code naf2008.
     */
    public function getCodeNaf2008() {
        return $this->codeNaf2008;
    }

    /**
     * Get the code naf22008.
     *
     * @return string Returns the code naf22008.
     */
    public function getCodeNaf22008() {
        return $this->codeNaf22008;
    }

    /**
     * Get the code naf3.
     *
     * @return string Returns the code naf3.
     */
    public function getCodeNaf3() {
        return $this->codeNaf3;
    }

    /**
     * Get the code naf32008.
     *
     * @return string Returns the code naf32008.
     */
    public function getCodeNaf32008() {
        return $this->codeNaf32008;
    }

    /**
     * Get the code officiel commune.
     *
     * @return string Returns the code officiel commune.
     */
    public function getCodeOfficielCommune() {
        return $this->codeOfficielCommune;
    }

    /**
     * Get the code pays.
     *
     * @return string Returns the code pays.
     */
    public function getCodePays() {
        return $this->codePays;
    }

    /**
     * Get the code pays residence.
     *
     * @return string Returns the code pays residence.
     */
    public function getCodePaysResidence() {
        return $this->codePaysResidence;
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
     * Get the coeff aubry2.
     *
     * @return float Returns the coeff aubry2.
     */
    public function getCoeffAubry2() {
        return $this->coeffAubry2;
    }

    /**
     * Get the complement.
     *
     * @return string Returns the complement.
     */
    public function getComplement() {
        return $this->complement;
    }

    /**
     * Get the compte acompte employe.
     *
     * @return bool Returns the compte acompte employe.
     */
    public function getCompteAcompteEmploye() {
        return $this->compteAcompteEmploye;
    }

    /**
     * Get the compte charge1.
     *
     * @return string Returns the compte charge1.
     */
    public function getCompteCharge1() {
        return $this->compteCharge1;
    }

    /**
     * Get the compte charge10.
     *
     * @return string Returns the compte charge10.
     */
    public function getCompteCharge10() {
        return $this->compteCharge10;
    }

    /**
     * Get the compte charge11.
     *
     * @return string Returns the compte charge11.
     */
    public function getCompteCharge11() {
        return $this->compteCharge11;
    }

    /**
     * Get the compte charge2.
     *
     * @return string Returns the compte charge2.
     */
    public function getCompteCharge2() {
        return $this->compteCharge2;
    }

    /**
     * Get the compte charge3.
     *
     * @return string Returns the compte charge3.
     */
    public function getCompteCharge3() {
        return $this->compteCharge3;
    }

    /**
     * Get the compte charge4.
     *
     * @return string Returns the compte charge4.
     */
    public function getCompteCharge4() {
        return $this->compteCharge4;
    }

    /**
     * Get the compte charge5.
     *
     * @return string Returns the compte charge5.
     */
    public function getCompteCharge5() {
        return $this->compteCharge5;
    }

    /**
     * Get the compte charge6.
     *
     * @return string Returns the compte charge6.
     */
    public function getCompteCharge6() {
        return $this->compteCharge6;
    }

    /**
     * Get the compte charge7.
     *
     * @return string Returns the compte charge7.
     */
    public function getCompteCharge7() {
        return $this->compteCharge7;
    }

    /**
     * Get the compte charge8.
     *
     * @return string Returns the compte charge8.
     */
    public function getCompteCharge8() {
        return $this->compteCharge8;
    }

    /**
     * Get the compte charge9.
     *
     * @return string Returns the compte charge9.
     */
    public function getCompteCharge9() {
        return $this->compteCharge9;
    }

    /**
     * Get the compte charge aen.
     *
     * @return string Returns the compte charge aen.
     */
    public function getCompteChargeAen() {
        return $this->compteChargeAen;
    }

    /**
     * Get the compte charge fc.
     *
     * @return string Returns the compte charge fc.
     */
    public function getCompteChargeFc() {
        return $this->compteChargeFc;
    }

    /**
     * Get the compte charge ijss.
     *
     * @return string Returns the compte charge ijss.
     */
    public function getCompteChargeIjss() {
        return $this->compteChargeIjss;
    }

    /**
     * Get the compte charge indem cp.
     *
     * @return string Returns the compte charge indem cp.
     */
    public function getCompteChargeIndemCp() {
        return $this->compteChargeIndemCp;
    }

    /**
     * Get the compte saisie arret.
     *
     * @return string Returns the compte saisie arret.
     */
    public function getCompteSaisieArret() {
        return $this->compteSaisieArret;
    }

    /**
     * Get the compte tiers1.
     *
     * @return string Returns the compte tiers1.
     */
    public function getCompteTiers1() {
        return $this->compteTiers1;
    }

    /**
     * Get the compte tiers2.
     *
     * @return string Returns the compte tiers2.
     */
    public function getCompteTiers2() {
        return $this->compteTiers2;
    }

    /**
     * Get the dadsu code c colect1.
     *
     * @return string Returns the dadsu code c colect1.
     */
    public function getDadsuCodeCColect1() {
        return $this->dadsuCodeCColect1;
    }

    /**
     * Get the dadsu code c colect2.
     *
     * @return string Returns the dadsu code c colect2.
     */
    public function getDadsuCodeCColect2() {
        return $this->dadsuCodeCColect2;
    }

    /**
     * Get the dadsu code c colect3.
     *
     * @return string Returns the dadsu code c colect3.
     */
    public function getDadsuCodeCColect3() {
        return $this->dadsuCodeCColect3;
    }

    /**
     * Get the dadsu code c colect4.
     *
     * @return string Returns the dadsu code c colect4.
     */
    public function getDadsuCodeCColect4() {
        return $this->dadsuCodeCColect4;
    }

    /**
     * Get the dadsu code c colect5.
     *
     * @return string Returns the dadsu code c colect5.
     */
    public function getDadsuCodeCColect5() {
        return $this->dadsuCodeCColect5;
    }

    /**
     * Get the dadsu code c colect6.
     *
     * @return string Returns the dadsu code c colect6.
     */
    public function getDadsuCodeCColect6() {
        return $this->dadsuCodeCColect6;
    }

    /**
     * Get the date allegement.
     *
     * @return DateTime|null Returns the date allegement.
     */
    public function getDateAllegement() {
        return $this->dateAllegement;
    }

    /**
     * Get the date ducs.
     *
     * @return DateTime|null Returns the date ducs.
     */
    public function getDateDucs() {
        return $this->dateDucs;
    }

    /**
     * Get the date fin cospar.
     *
     * @return DateTime|null Returns the date fin cospar.
     */
    public function getDateFinCospar() {
        return $this->dateFinCospar;
    }

    /**
     * Get the date fin cp.
     *
     * @return DateTime|null Returns the date fin cp.
     */
    public function getDateFinCp() {
        return $this->dateFinCp;
    }

    /**
     * Get the date modification.
     *
     * @return DateTime|null Returns the date modification.
     */
    public function getDateModification() {
        return $this->dateModification;
    }

    /**
     * Get the date publication.
     *
     * @return DateTime|null Returns the date publication.
     */
    public function getDatePublication() {
        return $this->datePublication;
    }

    /**
     * Get the debut envoi.
     *
     * @return DateTime|null Returns the debut envoi.
     */
    public function getDebutEnvoi() {
        return $this->debutEnvoi;
    }

    /**
     * Get the detail salarie.
     *
     * @return bool Returns the detail salarie.
     */
    public function getDetailSalarie() {
        return $this->detailSalarie;
    }

    /**
     * Get the domaine activite.
     *
     * @return string Returns the domaine activite.
     */
    public function getDomaineActivite() {
        return $this->domaineActivite;
    }

    /**
     * Get the dossier comptable.
     *
     * @return string Returns the dossier comptable.
     */
    public function getDossierComptable() {
        return $this->dossierComptable;
    }

    /**
     * Get the edition dif.
     *
     * @return bool Returns the edition dif.
     */
    public function getEditionDif() {
        return $this->editionDif;
    }

    /**
     * Get the edition dif bul.
     *
     * @return string Returns the edition dif bul.
     */
    public function getEditionDifBul() {
        return $this->editionDifBul;
    }

    /**
     * Get the emetteur1.
     *
     * @return int Returns the emetteur1.
     */
    public function getEmetteur1() {
        return $this->emetteur1;
    }

    /**
     * Get the emetteur2.
     *
     * @return int Returns the emetteur2.
     */
    public function getEmetteur2() {
        return $this->emetteur2;
    }

    /**
     * Get the emetteur3.
     *
     * @return int Returns the emetteur3.
     */
    public function getEmetteur3() {
        return $this->emetteur3;
    }

    /**
     * Get the enseigne.
     *
     * @return string Returns the enseigne.
     */
    public function getEnseigne() {
        return $this->enseigne;
    }

    /**
     * Get the etab decl dadsu.
     *
     * @return bool Returns the etab decl dadsu.
     */
    public function getEtabDeclDadsu() {
        return $this->etabDeclDadsu;
    }

    /**
     * Get the exclure dadsu.
     *
     * @return bool Returns the exclure dadsu.
     */
    public function getExclureDadsu() {
        return $this->exclureDadsu;
    }

    /**
     * Get the exo lodeom renforcee.
     *
     * @return bool Returns the exo lodeom renforcee.
     */
    public function getExoLodeomRenforcee() {
        return $this->exoLodeomRenforcee;
    }

    /**
     * Get the fax.
     *
     * @return string Returns the fax.
     */
    public function getFax() {
        return $this->fax;
    }

    /**
     * Get the fin envoi.
     *
     * @return DateTime|null Returns the fin envoi.
     */
    public function getFinEnvoi() {
        return $this->finEnvoi;
    }

    /**
     * Get the gere fraction etab.
     *
     * @return bool Returns the gere fraction etab.
     */
    public function getGereFractionEtab() {
        return $this->gereFractionEtab;
    }

    /**
     * Get the gestion contingent.
     *
     * @return bool Returns the gestion contingent.
     */
    public function getGestionContingent() {
        return $this->gestionContingent;
    }

    /**
     * Get the gestion ducs1.
     *
     * @return string Returns the gestion ducs1.
     */
    public function getGestionDucs1() {
        return $this->gestionDucs1;
    }

    /**
     * Get the gestion ducs2.
     *
     * @return string Returns the gestion ducs2.
     */
    public function getGestionDucs2() {
        return $this->gestionDucs2;
    }

    /**
     * Get the gestion jour ferie etab.
     *
     * @return bool Returns the gestion jour ferie etab.
     */
    public function getGestionJourFerieEtab() {
        return $this->gestionJourFerieEtab;
    }

    /**
     * Get the gestion repos comp.
     *
     * @return bool Returns the gestion repos comp.
     */
    public function getGestionReposComp() {
        return $this->gestionReposComp;
    }

    /**
     * Get the gestion repos recup.
     *
     * @return bool Returns the gestion repos recup.
     */
    public function getGestionReposRecup() {
        return $this->gestionReposRecup;
    }

    /**
     * Get the gestion repos remplace.
     *
     * @return bool Returns the gestion repos remplace.
     */
    public function getGestionReposRemplace() {
        return $this->gestionReposRemplace;
    }

    /**
     * Get the gestion rtt.
     *
     * @return bool Returns the gestion rtt.
     */
    public function getGestionRtt() {
        return $this->gestionRtt;
    }

    /**
     * Get the gestion sem type.
     *
     * @return bool Returns the gestion sem type.
     */
    public function getGestionSemType() {
        return $this->gestionSemType;
    }

    /**
     * Get the iban1.
     *
     * @return string Returns the iban1.
     */
    public function getIban1() {
        return $this->iban1;
    }

    /**
     * Get the iban id client1.
     *
     * @return string Returns the iban id client1.
     */
    public function getIbanIdClient1() {
        return $this->ibanIdClient1;
    }

    /**
     * Get the inscrit rep metier.
     *
     * @return bool Returns the inscrit rep metier.
     */
    public function getInscritRepMetier() {
        return $this->inscritRepMetier;
    }

    /**
     * Get the jour verse salaire.
     *
     * @return string Returns the jour verse salaire.
     */
    public function getJourVerseSalaire() {
        return $this->jourVerseSalaire;
    }

    /**
     * Get the maintien intervient cp.
     *
     * @return bool Returns the maintien intervient cp.
     */
    public function getMaintienIntervientCp() {
        return $this->maintienIntervientCp;
    }

    /**
     * Get the maintien salaire.
     *
     * @return bool Returns the maintien salaire.
     */
    public function getMaintienSalaire() {
        return $this->maintienSalaire;
    }

    /**
     * Get the maintien specifique.
     *
     * @return bool Returns the maintien specifique.
     */
    public function getMaintienSpecifique() {
        return $this->maintienSpecifique;
    }

    /**
     * Get the masque service employe.
     *
     * @return bool Returns the masque service employe.
     */
    public function getMasqueServiceEmploye() {
        return $this->masqueServiceEmploye;
    }

    /**
     * Get the methode cp.
     *
     * @return string Returns the methode cp.
     */
    public function getMethodeCp() {
        return $this->methodeCp;
    }

    /**
     * Get the mois cloture cp.
     *
     * @return string Returns the mois cloture cp.
     */
    public function getMoisClotureCp() {
        return $this->moisClotureCp;
    }

    /**
     * Get the mois cloture dif.
     *
     * @return string Returns the mois cloture dif.
     */
    public function getMoisClotureDif() {
        return $this->moisClotureDif;
    }

    /**
     * Get the mois cloture rtt.
     *
     * @return string Returns the mois cloture rtt.
     */
    public function getMoisClotureRtt() {
        return $this->moisClotureRtt;
    }

    /**
     * Get the montant1.
     *
     * @return float Returns the montant1.
     */
    public function getMontant1() {
        return $this->montant1;
    }

    /**
     * Get the montant2.
     *
     * @return float Returns the montant2.
     */
    public function getMontant2() {
        return $this->montant2;
    }

    /**
     * Get the montant3.
     *
     * @return float Returns the montant3.
     */
    public function getMontant3() {
        return $this->montant3;
    }

    /**
     * Get the montant4.
     *
     * @return float Returns the montant4.
     */
    public function getMontant4() {
        return $this->montant4;
    }

    /**
     * Get the montant5.
     *
     * @return float Returns the montant5.
     */
    public function getMontant5() {
        return $this->montant5;
    }

    /**
     * Get the montant allegement.
     *
     * @return float Returns the montant allegement.
     */
    public function getMontantAllegement() {
        return $this->montantAllegement;
    }

    /**
     * Get the nature analytique.
     *
     * @return string Returns the nature analytique.
     */
    public function getNatureAnalytique() {
        return $this->natureAnalytique;
    }

    /**
     * Get the nb h jour1.
     *
     * @return float Returns the nb h jour1.
     */
    public function getNbHJour1() {
        return $this->nbHJour1;
    }

    /**
     * Get the nb h jour2.
     *
     * @return float Returns the nb h jour2.
     */
    public function getNbHJour2() {
        return $this->nbHJour2;
    }

    /**
     * Get the nb h jour3.
     *
     * @return float Returns the nb h jour3.
     */
    public function getNbHJour3() {
        return $this->nbHJour3;
    }

    /**
     * Get the nb h jour4.
     *
     * @return float Returns the nb h jour4.
     */
    public function getNbHJour4() {
        return $this->nbHJour4;
    }

    /**
     * Get the nb h jour5.
     *
     * @return float Returns the nb h jour5.
     */
    public function getNbHJour5() {
        return $this->nbHJour5;
    }

    /**
     * Get the nb h jour6.
     *
     * @return float Returns the nb h jour6.
     */
    public function getNbHJour6() {
        return $this->nbHJour6;
    }

    /**
     * Get the nb h jour7.
     *
     * @return float Returns the nb h jour7.
     */
    public function getNbHJour7() {
        return $this->nbHJour7;
    }

    /**
     * Get the nb hdif an.
     *
     * @return float Returns the nb hdif an.
     */
    public function getNbHdifAn() {
        return $this->nbHdifAn;
    }

    /**
     * Get the nb heure trav mois.
     *
     * @return float Returns the nb heure trav mois.
     */
    public function getNbHeureTravMois() {
        return $this->nbHeureTravMois;
    }

    /**
     * Get the nb jour base.
     *
     * @return float Returns the nb jour base.
     */
    public function getNbJourBase() {
        return $this->nbJourBase;
    }

    /**
     * Get the nb jour base cp.
     *
     * @return float Returns the nb jour base cp.
     */
    public function getNbJourBaseCp() {
        return $this->nbJourBaseCp;
    }

    /**
     * Get the nb jour cp acquis.
     *
     * @return float Returns the nb jour cp acquis.
     */
    public function getNbJourCpAcquis() {
        return $this->nbJourCpAcquis;
    }

    /**
     * Get the nb m ajout per.
     *
     * @return string Returns the nb m ajout per.
     */
    public function getNbMAjoutPer() {
        return $this->nbMAjoutPer;
    }

    /**
     * Get the nb mois aubry1.
     *
     * @return float Returns the nb mois aubry1.
     */
    public function getNbMoisAubry1() {
        return $this->nbMoisAubry1;
    }

    /**
     * Get the nbh jour rtt.
     *
     * @return float Returns the nbh jour rtt.
     */
    public function getNbhJourRtt() {
        return $this->nbhJourRtt;
    }

    /**
     * Get the ne pas activer loi fillon2003.
     *
     * @return bool Returns the ne pas activer loi fillon2003.
     */
    public function getNePasActiverLoiFillon2003() {
        return $this->nePasActiverLoiFillon2003;
    }

    /**
     * Get the nom ville.
     *
     * @return string Returns the nom ville.
     */
    public function getNomVille() {
        return $this->nomVille;
    }

    /**
     * Get the nom ville insee.
     *
     * @return string Returns the nom ville insee.
     */
    public function getNomVilleInsee() {
        return $this->nomVilleInsee;
    }

    /**
     * Get the nom voie.
     *
     * @return string Returns the nom voie.
     */
    public function getNomVoie() {
        return $this->nomVoie;
    }

    /**
     * Get the num voie.
     *
     * @return string Returns the num voie.
     */
    public function getNumVoie() {
        return $this->numVoie;
    }

    /**
     * Get the opca dif.
     *
     * @return string Returns the opca dif.
     */
    public function getOpcaDif() {
        return $this->opcaDif;
    }

    /**
     * Get the p lafond exo.
     *
     * @return float Returns the p lafond exo.
     */
    public function getPLafondExo() {
        return $this->pLafondExo;
    }

    /**
     * Get the paie decalee.
     *
     * @return bool Returns the paie decalee.
     */
    public function getPaieDecalee() {
        return $this->paieDecalee;
    }

    /**
     * Get the plafond1 caisse1.
     *
     * @return float Returns the plafond1 caisse1.
     */
    public function getPlafond1Caisse1() {
        return $this->plafond1Caisse1;
    }

    /**
     * Get the plafond1 caisse2.
     *
     * @return float Returns the plafond1 caisse2.
     */
    public function getPlafond1Caisse2() {
        return $this->plafond1Caisse2;
    }

    /**
     * Get the plafond1 caisse3.
     *
     * @return float Returns the plafond1 caisse3.
     */
    public function getPlafond1Caisse3() {
        return $this->plafond1Caisse3;
    }

    /**
     * Get the plafond2 caisse1.
     *
     * @return float Returns the plafond2 caisse1.
     */
    public function getPlafond2Caisse1() {
        return $this->plafond2Caisse1;
    }

    /**
     * Get the plafond2 caisse2.
     *
     * @return float Returns the plafond2 caisse2.
     */
    public function getPlafond2Caisse2() {
        return $this->plafond2Caisse2;
    }

    /**
     * Get the plafond2 caisse3.
     *
     * @return float Returns the plafond2 caisse3.
     */
    public function getPlafond2Caisse3() {
        return $this->plafond2Caisse3;
    }

    /**
     * Get the pourcent bonif.
     *
     * @return float Returns the pourcent bonif.
     */
    public function getPourcentBonif() {
        return $this->pourcentBonif;
    }

    /**
     * Get the pourcent exo.
     *
     * @return float Returns the pourcent exo.
     */
    public function getPourcentExo() {
        return $this->pourcentExo;
    }

    /**
     * Get the pourcent transport.
     *
     * @return float Returns the pourcent transport.
     */
    public function getPourcentTransport() {
        return $this->pourcentTransport;
    }

    /**
     * Get the pourcentage imp.
     *
     * @return float Returns the pourcentage imp.
     */
    public function getPourcentageImp() {
        return $this->pourcentageImp;
    }

    /**
     * Get the prof spectacle.
     *
     * @return bool Returns the prof spectacle.
     */
    public function getProfSpectacle() {
        return $this->profSpectacle;
    }

    /**
     * Get the profession.
     *
     * @return string Returns the profession.
     */
    public function getProfession() {
        return $this->profession;
    }

    /**
     * Get the prud type.
     *
     * @return string Returns the prud type.
     */
    public function getPrudType() {
        return $this->prudType;
    }

    /**
     * Get the prud type dadsu.
     *
     * @return string Returns the prud type dadsu.
     */
    public function getPrudTypeDadsu() {
        return $this->prudTypeDadsu;
    }

    /**
     * Get the publication.
     *
     * @return bool Returns the publication.
     */
    public function getPublication() {
        return $this->publication;
    }

    /**
     * Get the qualite.
     *
     * @return string Returns the qualite.
     */
    public function getQualite() {
        return $this->qualite;
    }

    /**
     * Get the raison sociale.
     *
     * @return string Returns the raison sociale.
     */
    public function getRaisonSociale() {
        return $this->raisonSociale;
    }

    /**
     * Get the reduction fillon.
     *
     * @return bool Returns the reduction fillon.
     */
    public function getReductionFillon() {
        return $this->reductionFillon;
    }

    /**
     * Get the responsable.
     *
     * @return string Returns the responsable.
     */
    public function getResponsable() {
        return $this->responsable;
    }

    /**
     * Get the rib1.
     *
     * @return string Returns the rib1.
     */
    public function getRib1() {
        return $this->rib1;
    }

    /**
     * Get the rib2.
     *
     * @return string Returns the rib2.
     */
    public function getRib2() {
        return $this->rib2;
    }

    /**
     * Get the rib3.
     *
     * @return string Returns the rib3.
     */
    public function getRib3() {
        return $this->rib3;
    }

    /**
     * Get the rtt1.
     *
     * @return float Returns the rtt1.
     */
    public function getRtt1() {
        return $this->rtt1;
    }

    /**
     * Get the rtt10.
     *
     * @return float Returns the rtt10.
     */
    public function getRtt10() {
        return $this->rtt10;
    }

    /**
     * Get the rtt11.
     *
     * @return float Returns the rtt11.
     */
    public function getRtt11() {
        return $this->rtt11;
    }

    /**
     * Get the rtt12.
     *
     * @return float Returns the rtt12.
     */
    public function getRtt12() {
        return $this->rtt12;
    }

    /**
     * Get the rtt2.
     *
     * @return float Returns the rtt2.
     */
    public function getRtt2() {
        return $this->rtt2;
    }

    /**
     * Get the rtt3.
     *
     * @return float Returns the rtt3.
     */
    public function getRtt3() {
        return $this->rtt3;
    }

    /**
     * Get the rtt4.
     *
     * @return float Returns the rtt4.
     */
    public function getRtt4() {
        return $this->rtt4;
    }

    /**
     * Get the rtt5.
     *
     * @return float Returns the rtt5.
     */
    public function getRtt5() {
        return $this->rtt5;
    }

    /**
     * Get the rtt6.
     *
     * @return float Returns the rtt6.
     */
    public function getRtt6() {
        return $this->rtt6;
    }

    /**
     * Get the rtt7.
     *
     * @return float Returns the rtt7.
     */
    public function getRtt7() {
        return $this->rtt7;
    }

    /**
     * Get the rtt8.
     *
     * @return float Returns the rtt8.
     */
    public function getRtt8() {
        return $this->rtt8;
    }

    /**
     * Get the rtt9.
     *
     * @return float Returns the rtt9.
     */
    public function getRtt9() {
        return $this->rtt9;
    }

    /**
     * Get the siege dadsu.
     *
     * @return bool Returns the siege dadsu.
     */
    public function getSiegeDadsu() {
        return $this->siegeDadsu;
    }

    /**
     * Get the siret.
     *
     * @return string Returns the siret.
     */
    public function getSiret() {
        return $this->siret;
    }

    /**
     * Get the situation geo.
     *
     * @return string Returns the situation geo.
     */
    public function getSituationGeo() {
        return $this->situationGeo;
    }

    /**
     * Get the subrogation.
     *
     * @return bool Returns the subrogation.
     */
    public function getSubrogation() {
        return $this->subrogation;
    }

    /**
     * Get the suivi analytique.
     *
     * @return bool Returns the suivi analytique.
     */
    public function getSuiviAnalytique() {
        return $this->suiviAnalytique;
    }

    /**
     * Get the taux actionsociale.
     *
     * @return float Returns the taux actionsociale.
     */
    public function getTauxActionsociale() {
        return $this->tauxActionsociale;
    }

    /**
     * Get the taux construction.
     *
     * @return float Returns the taux construction.
     */
    public function getTauxConstruction() {
        return $this->tauxConstruction;
    }

    /**
     * Get the taux formation.
     *
     * @return float Returns the taux formation.
     */
    public function getTauxFormation() {
        return $this->tauxFormation;
    }

    /**
     * Get the taux h sup1.
     *
     * @return float Returns the taux h sup1.
     */
    public function getTauxHSup1() {
        return $this->tauxHSup1;
    }

    /**
     * Get the taux h sup2.
     *
     * @return float Returns the taux h sup2.
     */
    public function getTauxHSup2() {
        return $this->tauxHSup2;
    }

    /**
     * Get the taux h sup3.
     *
     * @return float Returns the taux h sup3.
     */
    public function getTauxHSup3() {
        return $this->tauxHSup3;
    }

    /**
     * Get the taux h sup4.
     *
     * @return float Returns the taux h sup4.
     */
    public function getTauxHSup4() {
        return $this->tauxHSup4;
    }

    /**
     * Get the taux h sup5.
     *
     * @return float Returns the taux h sup5.
     */
    public function getTauxHSup5() {
        return $this->tauxHSup5;
    }

    /**
     * Get the taux ret tr2 pp.
     *
     * @return float Returns the taux ret tr2 pp.
     */
    public function getTauxRetTr2Pp() {
        return $this->tauxRetTr2Pp;
    }

    /**
     * Get the taux ret tr2 ps.
     *
     * @return float Returns the taux ret tr2 ps.
     */
    public function getTauxRetTr2Ps() {
        return $this->tauxRetTr2Ps;
    }

    /**
     * Get the taux ret tr app.
     *
     * @return float Returns the taux ret tr app.
     */
    public function getTauxRetTrApp() {
        return $this->tauxRetTrApp;
    }

    /**
     * Get the taux ret tr aps.
     *
     * @return float Returns the taux ret tr aps.
     */
    public function getTauxRetTrAps() {
        return $this->tauxRetTrAps;
    }

    /**
     * Get the taux ret tr bpp.
     *
     * @return float Returns the taux ret tr bpp.
     */
    public function getTauxRetTrBpp() {
        return $this->tauxRetTrBpp;
    }

    /**
     * Get the taux ret tr bps.
     *
     * @return float Returns the taux ret tr bps.
     */
    public function getTauxRetTrBps() {
        return $this->tauxRetTrBps;
    }

    /**
     * Get the taux ret tr cpp.
     *
     * @return float Returns the taux ret tr cpp.
     */
    public function getTauxRetTrCpp() {
        return $this->tauxRetTrCpp;
    }

    /**
     * Get the taux ret tr cps.
     *
     * @return float Returns the taux ret tr cps.
     */
    public function getTauxRetTrCps() {
        return $this->tauxRetTrCps;
    }

    /**
     * Get the taux ret tr dpp.
     *
     * @return float Returns the taux ret tr dpp.
     */
    public function getTauxRetTrDpp() {
        return $this->tauxRetTrDpp;
    }

    /**
     * Get the taux ret tr dps.
     *
     * @return float Returns the taux ret tr dps.
     */
    public function getTauxRetTrDps() {
        return $this->tauxRetTrDps;
    }

    /**
     * Get the taux sup formation.
     *
     * @return float Returns the taux sup formation.
     */
    public function getTauxSupFormation() {
        return $this->tauxSupFormation;
    }

    /**
     * Get the taux taxe apprenti.
     *
     * @return float Returns the taux taxe apprenti.
     */
    public function getTauxTaxeApprenti() {
        return $this->tauxTaxeApprenti;
    }

    /**
     * Get the taux transport.
     *
     * @return float Returns the taux transport.
     */
    public function getTauxTransport() {
        return $this->tauxTransport;
    }

    /**
     * Get the tds128.
     *
     * @return string Returns the tds128.
     */
    public function getTds128() {
        return $this->tds128;
    }

    /**
     * Get the tds19.
     *
     * @return string Returns the tds19.
     */
    public function getTds19() {
        return $this->tds19;
    }

    /**
     * Get the tds47.
     *
     * @return string Returns the tds47.
     */
    public function getTds47() {
        return $this->tds47;
    }

    /**
     * Get the tel.
     *
     * @return string Returns the tel.
     */
    public function getTel() {
        return $this->tel;
    }

    /**
     * Get the tx sal decote.
     *
     * @return float Returns the tx sal decote.
     */
    public function getTxSalDecote() {
        return $this->txSalDecote;
    }

    /**
     * Get the type base caisse1.
     *
     * @return string Returns the type base caisse1.
     */
    public function getTypeBaseCaisse1() {
        return $this->typeBaseCaisse1;
    }

    /**
     * Get the type base caisse2.
     *
     * @return string Returns the type base caisse2.
     */
    public function getTypeBaseCaisse2() {
        return $this->typeBaseCaisse2;
    }

    /**
     * Get the type base caisse3.
     *
     * @return string Returns the type base caisse3.
     */
    public function getTypeBaseCaisse3() {
        return $this->typeBaseCaisse3;
    }

    /**
     * Get the type bonif.
     *
     * @return string Returns the type bonif.
     */
    public function getTypeBonif() {
        return $this->typeBonif;
    }

    /**
     * Get the type domiciliation banque1.
     *
     * @return string Returns the type domiciliation banque1.
     */
    public function getTypeDomiciliationBanque1() {
        return $this->typeDomiciliationBanque1;
    }

    /**
     * Get the type domiciliation banque2.
     *
     * @return string Returns the type domiciliation banque2.
     */
    public function getTypeDomiciliationBanque2() {
        return $this->typeDomiciliationBanque2;
    }

    /**
     * Get the type domiciliation banque3.
     *
     * @return string Returns the type domiciliation banque3.
     */
    public function getTypeDomiciliationBanque3() {
        return $this->typeDomiciliationBanque3;
    }

    /**
     * Get the type effectif.
     *
     * @return string Returns the type effectif.
     */
    public function getTypeEffectif() {
        return $this->typeEffectif;
    }

    /**
     * Get the type maintien salaire.
     *
     * @return string Returns the type maintien salaire.
     */
    public function getTypeMaintienSalaire() {
        return $this->typeMaintienSalaire;
    }

    /**
     * Get the type publication.
     *
     * @return string Returns the type publication.
     */
    public function getTypePublication() {
        return $this->typePublication;
    }

    /**
     * Get the type saisie ab cp.
     *
     * @return string Returns the type saisie ab cp.
     */
    public function getTypeSaisieAbCp() {
        return $this->typeSaisieAbCp;
    }

    /**
     * Get the type smic.
     *
     * @return string Returns the type smic.
     */
    public function getTypeSmic() {
        return $this->typeSmic;
    }

    /**
     * Get the urssaf alsace.
     *
     * @return bool Returns the urssaf alsace.
     */
    public function getUrssafAlsace() {
        return $this->urssafAlsace;
    }

    /**
     * Get the zone specif.
     *
     * @return string Returns the zone specif.
     */
    public function getZoneSpecif() {
        return $this->zoneSpecif;
    }

    /**
     * Set the abattement max.
     *
     * @param float $abattementMax The abattement max.
     */
    public function setAbattementMax($abattementMax) {
        $this->abattementMax = $abattementMax;
        return $this;
    }

    /**
     * Set the alleg particulier.
     *
     * @param string $allegParticulier The alleg particulier.
     */
    public function setAllegParticulier($allegParticulier) {
        $this->allegParticulier = $allegParticulier;
        return $this;
    }

    /**
     * Set the at bureau1.
     *
     * @param string $atBureau1 The at bureau1.
     */
    public function setAtBureau1($atBureau1) {
        $this->atBureau1 = $atBureau1;
        return $this;
    }

    /**
     * Set the at bureau2.
     *
     * @param string $atBureau2 The at bureau2.
     */
    public function setAtBureau2($atBureau2) {
        $this->atBureau2 = $atBureau2;
        return $this;
    }

    /**
     * Set the at bureau3.
     *
     * @param string $atBureau3 The at bureau3.
     */
    public function setAtBureau3($atBureau3) {
        $this->atBureau3 = $atBureau3;
        return $this;
    }

    /**
     * Set the at bureau4.
     *
     * @param string $atBureau4 The at bureau4.
     */
    public function setAtBureau4($atBureau4) {
        $this->atBureau4 = $atBureau4;
        return $this;
    }

    /**
     * Set the at bureau5.
     *
     * @param string $atBureau5 The at bureau5.
     */
    public function setAtBureau5($atBureau5) {
        $this->atBureau5 = $atBureau5;
        return $this;
    }

    /**
     * Set the at etab1.
     *
     * @param string $atEtab1 The at etab1.
     */
    public function setAtEtab1($atEtab1) {
        $this->atEtab1 = $atEtab1;
        return $this;
    }

    /**
     * Set the at etab2.
     *
     * @param string $atEtab2 The at etab2.
     */
    public function setAtEtab2($atEtab2) {
        $this->atEtab2 = $atEtab2;
        return $this;
    }

    /**
     * Set the at etab3.
     *
     * @param string $atEtab3 The at etab3.
     */
    public function setAtEtab3($atEtab3) {
        $this->atEtab3 = $atEtab3;
        return $this;
    }

    /**
     * Set the at etab4.
     *
     * @param string $atEtab4 The at etab4.
     */
    public function setAtEtab4($atEtab4) {
        $this->atEtab4 = $atEtab4;
        return $this;
    }

    /**
     * Set the at etab5.
     *
     * @param string $atEtab5 The at etab5.
     */
    public function setAtEtab5($atEtab5) {
        $this->atEtab5 = $atEtab5;
        return $this;
    }

    /**
     * Set the at risque1.
     *
     * @param string $atRisque1 The at risque1.
     */
    public function setAtRisque1($atRisque1) {
        $this->atRisque1 = $atRisque1;
        return $this;
    }

    /**
     * Set the at risque2.
     *
     * @param string $atRisque2 The at risque2.
     */
    public function setAtRisque2($atRisque2) {
        $this->atRisque2 = $atRisque2;
        return $this;
    }

    /**
     * Set the at risque3.
     *
     * @param string $atRisque3 The at risque3.
     */
    public function setAtRisque3($atRisque3) {
        $this->atRisque3 = $atRisque3;
        return $this;
    }

    /**
     * Set the at risque4.
     *
     * @param string $atRisque4 The at risque4.
     */
    public function setAtRisque4($atRisque4) {
        $this->atRisque4 = $atRisque4;
        return $this;
    }

    /**
     * Set the at risque5.
     *
     * @param string $atRisque5 The at risque5.
     */
    public function setAtRisque5($atRisque5) {
        $this->atRisque5 = $atRisque5;
        return $this;
    }

    /**
     * Set the at taux1.
     *
     * @param float $atTaux1 The at taux1.
     */
    public function setAtTaux1($atTaux1) {
        $this->atTaux1 = $atTaux1;
        return $this;
    }

    /**
     * Set the at taux2.
     *
     * @param float $atTaux2 The at taux2.
     */
    public function setAtTaux2($atTaux2) {
        $this->atTaux2 = $atTaux2;
        return $this;
    }

    /**
     * Set the at taux3.
     *
     * @param float $atTaux3 The at taux3.
     */
    public function setAtTaux3($atTaux3) {
        $this->atTaux3 = $atTaux3;
        return $this;
    }

    /**
     * Set the at taux4.
     *
     * @param float $atTaux4 The at taux4.
     */
    public function setAtTaux4($atTaux4) {
        $this->atTaux4 = $atTaux4;
        return $this;
    }

    /**
     * Set the at taux5.
     *
     * @param float $atTaux5 The at taux5.
     */
    public function setAtTaux5($atTaux5) {
        $this->atTaux5 = $atTaux5;
        return $this;
    }

    /**
     * Set the at taux bul1.
     *
     * @param float $atTauxBul1 The at taux bul1.
     */
    public function setAtTauxBul1($atTauxBul1) {
        $this->atTauxBul1 = $atTauxBul1;
        return $this;
    }

    /**
     * Set the at taux bul2.
     *
     * @param float $atTauxBul2 The at taux bul2.
     */
    public function setAtTauxBul2($atTauxBul2) {
        $this->atTauxBul2 = $atTauxBul2;
        return $this;
    }

    /**
     * Set the at taux bul3.
     *
     * @param float $atTauxBul3 The at taux bul3.
     */
    public function setAtTauxBul3($atTauxBul3) {
        $this->atTauxBul3 = $atTauxBul3;
        return $this;
    }

    /**
     * Set the at taux bul4.
     *
     * @param float $atTauxBul4 The at taux bul4.
     */
    public function setAtTauxBul4($atTauxBul4) {
        $this->atTauxBul4 = $atTauxBul4;
        return $this;
    }

    /**
     * Set the at taux bul5.
     *
     * @param float $atTauxBul5 The at taux bul5.
     */
    public function setAtTauxBul5($atTauxBul5) {
        $this->atTauxBul5 = $atTauxBul5;
        return $this;
    }

    /**
     * Set the aubry1 modifie.
     *
     * @param bool $aubry1Modifie The aubry1 modifie.
     */
    public function setAubry1Modifie($aubry1Modifie) {
        $this->aubry1Modifie = $aubry1Modifie;
        return $this;
    }

    /**
     * Set the autre alleg.
     *
     * @param string $autreAlleg The autre alleg.
     */
    public function setAutreAlleg($autreAlleg) {
        $this->autreAlleg = $autreAlleg;
        return $this;
    }

    /**
     * Set the banque1.
     *
     * @param string $banque1 The banque1.
     */
    public function setBanque1($banque1) {
        $this->banque1 = $banque1;
        return $this;
    }

    /**
     * Set the banque2.
     *
     * @param string $banque2 The banque2.
     */
    public function setBanque2($banque2) {
        $this->banque2 = $banque2;
        return $this;
    }

    /**
     * Set the banque3.
     *
     * @param string $banque3 The banque3.
     */
    public function setBanque3($banque3) {
        $this->banque3 = $banque3;
        return $this;
    }

    /**
     * Set the bic1.
     *
     * @param string $bic1 The bic1.
     */
    public function setBic1($bic1) {
        $this->bic1 = $bic1;
        return $this;
    }

    /**
     * Set the bonus cospar.
     *
     * @param bool $bonusCospar The bonus cospar.
     */
    public function setBonusCospar($bonusCospar) {
        $this->bonusCospar = $bonusCospar;
        return $this;
    }

    /**
     * Set the btq.
     *
     * @param string $btq The btq.
     */
    public function setBtq($btq) {
        $this->btq = $btq;
        return $this;
    }

    /**
     * Set the bureau distributeur.
     *
     * @param string $bureauDistributeur The bureau distributeur.
     */
    public function setBureauDistributeur($bureauDistributeur) {
        $this->bureauDistributeur = $bureauDistributeur;
        return $this;
    }

    /**
     * Set the c colect11.
     *
     * @param string $cColect11 The c colect11.
     */
    public function setCColect11($cColect11) {
        $this->cColect11 = $cColect11;
        return $this;
    }

    /**
     * Set the c colect12.
     *
     * @param string $cColect12 The c colect12.
     */
    public function setCColect12($cColect12) {
        $this->cColect12 = $cColect12;
        return $this;
    }

    /**
     * Set the c colect21.
     *
     * @param string $cColect21 The c colect21.
     */
    public function setCColect21($cColect21) {
        $this->cColect21 = $cColect21;
        return $this;
    }

    /**
     * Set the c colect22.
     *
     * @param string $cColect22 The c colect22.
     */
    public function setCColect22($cColect22) {
        $this->cColect22 = $cColect22;
        return $this;
    }

    /**
     * Set the c colect31.
     *
     * @param string $cColect31 The c colect31.
     */
    public function setCColect31($cColect31) {
        $this->cColect31 = $cColect31;
        return $this;
    }

    /**
     * Set the c colect32.
     *
     * @param string $cColect32 The c colect32.
     */
    public function setCColect32($cColect32) {
        $this->cColect32 = $cColect32;
        return $this;
    }

    /**
     * Set the c colect41.
     *
     * @param string $cColect41 The c colect41.
     */
    public function setCColect41($cColect41) {
        $this->cColect41 = $cColect41;
        return $this;
    }

    /**
     * Set the c colect42.
     *
     * @param string $cColect42 The c colect42.
     */
    public function setCColect42($cColect42) {
        $this->cColect42 = $cColect42;
        return $this;
    }

    /**
     * Set the c colect51.
     *
     * @param string $cColect51 The c colect51.
     */
    public function setCColect51($cColect51) {
        $this->cColect51 = $cColect51;
        return $this;
    }

    /**
     * Set the c colect52.
     *
     * @param string $cColect52 The c colect52.
     */
    public function setCColect52($cColect52) {
        $this->cColect52 = $cColect52;
        return $this;
    }

    /**
     * Set the c colect61.
     *
     * @param string $cColect61 The c colect61.
     */
    public function setCColect61($cColect61) {
        $this->cColect61 = $cColect61;
        return $this;
    }

    /**
     * Set the c colect62.
     *
     * @param string $cColect62 The c colect62.
     */
    public function setCColect62($cColect62) {
        $this->cColect62 = $cColect62;
        return $this;
    }

    /**
     * Set the caisse cp.
     *
     * @param bool $caisseCp The caisse cp.
     */
    public function setCaisseCp($caisseCp) {
        $this->caisseCp = $caisseCp;
        return $this;
    }

    /**
     * Set the centre analytique.
     *
     * @param string $centreAnalytique The centre analytique.
     */
    public function setCentreAnalytique($centreAnalytique) {
        $this->centreAnalytique = $centreAnalytique;
        return $this;
    }

    /**
     * Set the civilite.
     *
     * @param string $civilite The civilite.
     */
    public function setCivilite($civilite) {
        $this->civilite = $civilite;
        return $this;
    }

    /**
     * Set the code adherent.
     *
     * @param string $codeAdherent The code adherent.
     */
    public function setCodeAdherent($codeAdherent) {
        $this->codeAdherent = $codeAdherent;
        return $this;
    }

    /**
     * Set the code c colect1.
     *
     * @param string $codeCColect1 The code c colect1.
     */
    public function setCodeCColect1($codeCColect1) {
        $this->codeCColect1 = $codeCColect1;
        return $this;
    }

    /**
     * Set the code c colect2.
     *
     * @param string $codeCColect2 The code c colect2.
     */
    public function setCodeCColect2($codeCColect2) {
        $this->codeCColect2 = $codeCColect2;
        return $this;
    }

    /**
     * Set the code c colect3.
     *
     * @param string $codeCColect3 The code c colect3.
     */
    public function setCodeCColect3($codeCColect3) {
        $this->codeCColect3 = $codeCColect3;
        return $this;
    }

    /**
     * Set the code c colect4.
     *
     * @param string $codeCColect4 The code c colect4.
     */
    public function setCodeCColect4($codeCColect4) {
        $this->codeCColect4 = $codeCColect4;
        return $this;
    }

    /**
     * Set the code c colect5.
     *
     * @param string $codeCColect5 The code c colect5.
     */
    public function setCodeCColect5($codeCColect5) {
        $this->codeCColect5 = $codeCColect5;
        return $this;
    }

    /**
     * Set the code c colect6.
     *
     * @param string $codeCColect6 The code c colect6.
     */
    public function setCodeCColect6($codeCColect6) {
        $this->codeCColect6 = $codeCColect6;
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
     * Set the code ducs specif.
     *
     * @param string $codeDucsSpecif The code ducs specif.
     */
    public function setCodeDucsSpecif($codeDucsSpecif) {
        $this->codeDucsSpecif = $codeDucsSpecif;
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
     * Set the code insee.
     *
     * @param string $codeInsee The code insee.
     */
    public function setCodeInsee($codeInsee) {
        $this->codeInsee = $codeInsee;
        return $this;
    }

    /**
     * Set the code journal banque.
     *
     * @param string $codeJournalBanque The code journal banque.
     */
    public function setCodeJournalBanque($codeJournalBanque) {
        $this->codeJournalBanque = $codeJournalBanque;
        return $this;
    }

    /**
     * Set the code journal paie.
     *
     * @param string $codeJournalPaie The code journal paie.
     */
    public function setCodeJournalPaie($codeJournalPaie) {
        $this->codeJournalPaie = $codeJournalPaie;
        return $this;
    }

    /**
     * Set the code metier retraite.
     *
     * @param string $codeMetierRetraite The code metier retraite.
     */
    public function setCodeMetierRetraite($codeMetierRetraite) {
        $this->codeMetierRetraite = $codeMetierRetraite;
        return $this;
    }

    /**
     * Set the code naf.
     *
     * @param string $codeNaf The code naf.
     */
    public function setCodeNaf($codeNaf) {
        $this->codeNaf = $codeNaf;
        return $this;
    }

    /**
     * Set the code naf2.
     *
     * @param string $codeNaf2 The code naf2.
     */
    public function setCodeNaf2($codeNaf2) {
        $this->codeNaf2 = $codeNaf2;
        return $this;
    }

    /**
     * Set the code naf2008.
     *
     * @param string $codeNaf2008 The code naf2008.
     */
    public function setCodeNaf2008($codeNaf2008) {
        $this->codeNaf2008 = $codeNaf2008;
        return $this;
    }

    /**
     * Set the code naf22008.
     *
     * @param string $codeNaf22008 The code naf22008.
     */
    public function setCodeNaf22008($codeNaf22008) {
        $this->codeNaf22008 = $codeNaf22008;
        return $this;
    }

    /**
     * Set the code naf3.
     *
     * @param string $codeNaf3 The code naf3.
     */
    public function setCodeNaf3($codeNaf3) {
        $this->codeNaf3 = $codeNaf3;
        return $this;
    }

    /**
     * Set the code naf32008.
     *
     * @param string $codeNaf32008 The code naf32008.
     */
    public function setCodeNaf32008($codeNaf32008) {
        $this->codeNaf32008 = $codeNaf32008;
        return $this;
    }

    /**
     * Set the code officiel commune.
     *
     * @param string $codeOfficielCommune The code officiel commune.
     */
    public function setCodeOfficielCommune($codeOfficielCommune) {
        $this->codeOfficielCommune = $codeOfficielCommune;
        return $this;
    }

    /**
     * Set the code pays.
     *
     * @param string $codePays The code pays.
     */
    public function setCodePays($codePays) {
        $this->codePays = $codePays;
        return $this;
    }

    /**
     * Set the code pays residence.
     *
     * @param string $codePaysResidence The code pays residence.
     */
    public function setCodePaysResidence($codePaysResidence) {
        $this->codePaysResidence = $codePaysResidence;
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
     * Set the coeff aubry2.
     *
     * @param float $coeffAubry2 The coeff aubry2.
     */
    public function setCoeffAubry2($coeffAubry2) {
        $this->coeffAubry2 = $coeffAubry2;
        return $this;
    }

    /**
     * Set the complement.
     *
     * @param string $complement The complement.
     */
    public function setComplement($complement) {
        $this->complement = $complement;
        return $this;
    }

    /**
     * Set the compte acompte employe.
     *
     * @param bool $compteAcompteEmploye The compte acompte employe.
     */
    public function setCompteAcompteEmploye($compteAcompteEmploye) {
        $this->compteAcompteEmploye = $compteAcompteEmploye;
        return $this;
    }

    /**
     * Set the compte charge1.
     *
     * @param string $compteCharge1 The compte charge1.
     */
    public function setCompteCharge1($compteCharge1) {
        $this->compteCharge1 = $compteCharge1;
        return $this;
    }

    /**
     * Set the compte charge10.
     *
     * @param string $compteCharge10 The compte charge10.
     */
    public function setCompteCharge10($compteCharge10) {
        $this->compteCharge10 = $compteCharge10;
        return $this;
    }

    /**
     * Set the compte charge11.
     *
     * @param string $compteCharge11 The compte charge11.
     */
    public function setCompteCharge11($compteCharge11) {
        $this->compteCharge11 = $compteCharge11;
        return $this;
    }

    /**
     * Set the compte charge2.
     *
     * @param string $compteCharge2 The compte charge2.
     */
    public function setCompteCharge2($compteCharge2) {
        $this->compteCharge2 = $compteCharge2;
        return $this;
    }

    /**
     * Set the compte charge3.
     *
     * @param string $compteCharge3 The compte charge3.
     */
    public function setCompteCharge3($compteCharge3) {
        $this->compteCharge3 = $compteCharge3;
        return $this;
    }

    /**
     * Set the compte charge4.
     *
     * @param string $compteCharge4 The compte charge4.
     */
    public function setCompteCharge4($compteCharge4) {
        $this->compteCharge4 = $compteCharge4;
        return $this;
    }

    /**
     * Set the compte charge5.
     *
     * @param string $compteCharge5 The compte charge5.
     */
    public function setCompteCharge5($compteCharge5) {
        $this->compteCharge5 = $compteCharge5;
        return $this;
    }

    /**
     * Set the compte charge6.
     *
     * @param string $compteCharge6 The compte charge6.
     */
    public function setCompteCharge6($compteCharge6) {
        $this->compteCharge6 = $compteCharge6;
        return $this;
    }

    /**
     * Set the compte charge7.
     *
     * @param string $compteCharge7 The compte charge7.
     */
    public function setCompteCharge7($compteCharge7) {
        $this->compteCharge7 = $compteCharge7;
        return $this;
    }

    /**
     * Set the compte charge8.
     *
     * @param string $compteCharge8 The compte charge8.
     */
    public function setCompteCharge8($compteCharge8) {
        $this->compteCharge8 = $compteCharge8;
        return $this;
    }

    /**
     * Set the compte charge9.
     *
     * @param string $compteCharge9 The compte charge9.
     */
    public function setCompteCharge9($compteCharge9) {
        $this->compteCharge9 = $compteCharge9;
        return $this;
    }

    /**
     * Set the compte charge aen.
     *
     * @param string $compteChargeAen The compte charge aen.
     */
    public function setCompteChargeAen($compteChargeAen) {
        $this->compteChargeAen = $compteChargeAen;
        return $this;
    }

    /**
     * Set the compte charge fc.
     *
     * @param string $compteChargeFc The compte charge fc.
     */
    public function setCompteChargeFc($compteChargeFc) {
        $this->compteChargeFc = $compteChargeFc;
        return $this;
    }

    /**
     * Set the compte charge ijss.
     *
     * @param string $compteChargeIjss The compte charge ijss.
     */
    public function setCompteChargeIjss($compteChargeIjss) {
        $this->compteChargeIjss = $compteChargeIjss;
        return $this;
    }

    /**
     * Set the compte charge indem cp.
     *
     * @param string $compteChargeIndemCp The compte charge indem cp.
     */
    public function setCompteChargeIndemCp($compteChargeIndemCp) {
        $this->compteChargeIndemCp = $compteChargeIndemCp;
        return $this;
    }

    /**
     * Set the compte saisie arret.
     *
     * @param string $compteSaisieArret The compte saisie arret.
     */
    public function setCompteSaisieArret($compteSaisieArret) {
        $this->compteSaisieArret = $compteSaisieArret;
        return $this;
    }

    /**
     * Set the compte tiers1.
     *
     * @param string $compteTiers1 The compte tiers1.
     */
    public function setCompteTiers1($compteTiers1) {
        $this->compteTiers1 = $compteTiers1;
        return $this;
    }

    /**
     * Set the compte tiers2.
     *
     * @param string $compteTiers2 The compte tiers2.
     */
    public function setCompteTiers2($compteTiers2) {
        $this->compteTiers2 = $compteTiers2;
        return $this;
    }

    /**
     * Set the dadsu code c colect1.
     *
     * @param string $dadsuCodeCColect1 The dadsu code c colect1.
     */
    public function setDadsuCodeCColect1($dadsuCodeCColect1) {
        $this->dadsuCodeCColect1 = $dadsuCodeCColect1;
        return $this;
    }

    /**
     * Set the dadsu code c colect2.
     *
     * @param string $dadsuCodeCColect2 The dadsu code c colect2.
     */
    public function setDadsuCodeCColect2($dadsuCodeCColect2) {
        $this->dadsuCodeCColect2 = $dadsuCodeCColect2;
        return $this;
    }

    /**
     * Set the dadsu code c colect3.
     *
     * @param string $dadsuCodeCColect3 The dadsu code c colect3.
     */
    public function setDadsuCodeCColect3($dadsuCodeCColect3) {
        $this->dadsuCodeCColect3 = $dadsuCodeCColect3;
        return $this;
    }

    /**
     * Set the dadsu code c colect4.
     *
     * @param string $dadsuCodeCColect4 The dadsu code c colect4.
     */
    public function setDadsuCodeCColect4($dadsuCodeCColect4) {
        $this->dadsuCodeCColect4 = $dadsuCodeCColect4;
        return $this;
    }

    /**
     * Set the dadsu code c colect5.
     *
     * @param string $dadsuCodeCColect5 The dadsu code c colect5.
     */
    public function setDadsuCodeCColect5($dadsuCodeCColect5) {
        $this->dadsuCodeCColect5 = $dadsuCodeCColect5;
        return $this;
    }

    /**
     * Set the dadsu code c colect6.
     *
     * @param string $dadsuCodeCColect6 The dadsu code c colect6.
     */
    public function setDadsuCodeCColect6($dadsuCodeCColect6) {
        $this->dadsuCodeCColect6 = $dadsuCodeCColect6;
        return $this;
    }

    /**
     * Set the date allegement.
     *
     * @param DateTime|null $dateAllegement The date allegement.
     */
    public function setDateAllegement(DateTime $dateAllegement = null) {
        $this->dateAllegement = $dateAllegement;
        return $this;
    }

    /**
     * Set the date ducs.
     *
     * @param DateTime|null $dateDucs The date ducs.
     */
    public function setDateDucs(DateTime $dateDucs = null) {
        $this->dateDucs = $dateDucs;
        return $this;
    }

    /**
     * Set the date fin cospar.
     *
     * @param DateTime|null $dateFinCospar The date fin cospar.
     */
    public function setDateFinCospar(DateTime $dateFinCospar = null) {
        $this->dateFinCospar = $dateFinCospar;
        return $this;
    }

    /**
     * Set the date fin cp.
     *
     * @param DateTime|null $dateFinCp The date fin cp.
     */
    public function setDateFinCp(DateTime $dateFinCp = null) {
        $this->dateFinCp = $dateFinCp;
        return $this;
    }

    /**
     * Set the date modification.
     *
     * @param DateTime|null $dateModification The date modification.
     */
    public function setDateModification(DateTime $dateModification = null) {
        $this->dateModification = $dateModification;
        return $this;
    }

    /**
     * Set the date publication.
     *
     * @param DateTime|null $datePublication The date publication.
     */
    public function setDatePublication(DateTime $datePublication = null) {
        $this->datePublication = $datePublication;
        return $this;
    }

    /**
     * Set the debut envoi.
     *
     * @param DateTime|null $debutEnvoi The debut envoi.
     */
    public function setDebutEnvoi(DateTime $debutEnvoi = null) {
        $this->debutEnvoi = $debutEnvoi;
        return $this;
    }

    /**
     * Set the detail salarie.
     *
     * @param bool $detailSalarie The detail salarie.
     */
    public function setDetailSalarie($detailSalarie) {
        $this->detailSalarie = $detailSalarie;
        return $this;
    }

    /**
     * Set the domaine activite.
     *
     * @param string $domaineActivite The domaine activite.
     */
    public function setDomaineActivite($domaineActivite) {
        $this->domaineActivite = $domaineActivite;
        return $this;
    }

    /**
     * Set the dossier comptable.
     *
     * @param string $dossierComptable The dossier comptable.
     */
    public function setDossierComptable($dossierComptable) {
        $this->dossierComptable = $dossierComptable;
        return $this;
    }

    /**
     * Set the edition dif.
     *
     * @param bool $editionDif The edition dif.
     */
    public function setEditionDif($editionDif) {
        $this->editionDif = $editionDif;
        return $this;
    }

    /**
     * Set the edition dif bul.
     *
     * @param string $editionDifBul The edition dif bul.
     */
    public function setEditionDifBul($editionDifBul) {
        $this->editionDifBul = $editionDifBul;
        return $this;
    }

    /**
     * Set the emetteur1.
     *
     * @param int $emetteur1 The emetteur1.
     */
    public function setEmetteur1($emetteur1) {
        $this->emetteur1 = $emetteur1;
        return $this;
    }

    /**
     * Set the emetteur2.
     *
     * @param int $emetteur2 The emetteur2.
     */
    public function setEmetteur2($emetteur2) {
        $this->emetteur2 = $emetteur2;
        return $this;
    }

    /**
     * Set the emetteur3.
     *
     * @param int $emetteur3 The emetteur3.
     */
    public function setEmetteur3($emetteur3) {
        $this->emetteur3 = $emetteur3;
        return $this;
    }

    /**
     * Set the enseigne.
     *
     * @param string $enseigne The enseigne.
     */
    public function setEnseigne($enseigne) {
        $this->enseigne = $enseigne;
        return $this;
    }

    /**
     * Set the etab decl dadsu.
     *
     * @param bool $etabDeclDadsu The etab decl dadsu.
     */
    public function setEtabDeclDadsu($etabDeclDadsu) {
        $this->etabDeclDadsu = $etabDeclDadsu;
        return $this;
    }

    /**
     * Set the exclure dadsu.
     *
     * @param bool $exclureDadsu The exclure dadsu.
     */
    public function setExclureDadsu($exclureDadsu) {
        $this->exclureDadsu = $exclureDadsu;
        return $this;
    }

    /**
     * Set the exo lodeom renforcee.
     *
     * @param bool $exoLodeomRenforcee The exo lodeom renforcee.
     */
    public function setExoLodeomRenforcee($exoLodeomRenforcee) {
        $this->exoLodeomRenforcee = $exoLodeomRenforcee;
        return $this;
    }

    /**
     * Set the fax.
     *
     * @param string $fax The fax.
     */
    public function setFax($fax) {
        $this->fax = $fax;
        return $this;
    }

    /**
     * Set the fin envoi.
     *
     * @param DateTime|null $finEnvoi The fin envoi.
     */
    public function setFinEnvoi(DateTime $finEnvoi = null) {
        $this->finEnvoi = $finEnvoi;
        return $this;
    }

    /**
     * Set the gere fraction etab.
     *
     * @param bool $gereFractionEtab The gere fraction etab.
     */
    public function setGereFractionEtab($gereFractionEtab) {
        $this->gereFractionEtab = $gereFractionEtab;
        return $this;
    }

    /**
     * Set the gestion contingent.
     *
     * @param bool $gestionContingent The gestion contingent.
     */
    public function setGestionContingent($gestionContingent) {
        $this->gestionContingent = $gestionContingent;
        return $this;
    }

    /**
     * Set the gestion ducs1.
     *
     * @param string $gestionDucs1 The gestion ducs1.
     */
    public function setGestionDucs1($gestionDucs1) {
        $this->gestionDucs1 = $gestionDucs1;
        return $this;
    }

    /**
     * Set the gestion ducs2.
     *
     * @param string $gestionDucs2 The gestion ducs2.
     */
    public function setGestionDucs2($gestionDucs2) {
        $this->gestionDucs2 = $gestionDucs2;
        return $this;
    }

    /**
     * Set the gestion jour ferie etab.
     *
     * @param bool $gestionJourFerieEtab The gestion jour ferie etab.
     */
    public function setGestionJourFerieEtab($gestionJourFerieEtab) {
        $this->gestionJourFerieEtab = $gestionJourFerieEtab;
        return $this;
    }

    /**
     * Set the gestion repos comp.
     *
     * @param bool $gestionReposComp The gestion repos comp.
     */
    public function setGestionReposComp($gestionReposComp) {
        $this->gestionReposComp = $gestionReposComp;
        return $this;
    }

    /**
     * Set the gestion repos recup.
     *
     * @param bool $gestionReposRecup The gestion repos recup.
     */
    public function setGestionReposRecup($gestionReposRecup) {
        $this->gestionReposRecup = $gestionReposRecup;
        return $this;
    }

    /**
     * Set the gestion repos remplace.
     *
     * @param bool $gestionReposRemplace The gestion repos remplace.
     */
    public function setGestionReposRemplace($gestionReposRemplace) {
        $this->gestionReposRemplace = $gestionReposRemplace;
        return $this;
    }

    /**
     * Set the gestion rtt.
     *
     * @param bool $gestionRtt The gestion rtt.
     */
    public function setGestionRtt($gestionRtt) {
        $this->gestionRtt = $gestionRtt;
        return $this;
    }

    /**
     * Set the gestion sem type.
     *
     * @param bool $gestionSemType The gestion sem type.
     */
    public function setGestionSemType($gestionSemType) {
        $this->gestionSemType = $gestionSemType;
        return $this;
    }

    /**
     * Set the iban1.
     *
     * @param string $iban1 The iban1.
     */
    public function setIban1($iban1) {
        $this->iban1 = $iban1;
        return $this;
    }

    /**
     * Set the iban id client1.
     *
     * @param string $ibanIdClient1 The iban id client1.
     */
    public function setIbanIdClient1($ibanIdClient1) {
        $this->ibanIdClient1 = $ibanIdClient1;
        return $this;
    }

    /**
     * Set the inscrit rep metier.
     *
     * @param bool $inscritRepMetier The inscrit rep metier.
     */
    public function setInscritRepMetier($inscritRepMetier) {
        $this->inscritRepMetier = $inscritRepMetier;
        return $this;
    }

    /**
     * Set the jour verse salaire.
     *
     * @param string $jourVerseSalaire The jour verse salaire.
     */
    public function setJourVerseSalaire($jourVerseSalaire) {
        $this->jourVerseSalaire = $jourVerseSalaire;
        return $this;
    }

    /**
     * Set the maintien intervient cp.
     *
     * @param bool $maintienIntervientCp The maintien intervient cp.
     */
    public function setMaintienIntervientCp($maintienIntervientCp) {
        $this->maintienIntervientCp = $maintienIntervientCp;
        return $this;
    }

    /**
     * Set the maintien salaire.
     *
     * @param bool $maintienSalaire The maintien salaire.
     */
    public function setMaintienSalaire($maintienSalaire) {
        $this->maintienSalaire = $maintienSalaire;
        return $this;
    }

    /**
     * Set the maintien specifique.
     *
     * @param bool $maintienSpecifique The maintien specifique.
     */
    public function setMaintienSpecifique($maintienSpecifique) {
        $this->maintienSpecifique = $maintienSpecifique;
        return $this;
    }

    /**
     * Set the masque service employe.
     *
     * @param bool $masqueServiceEmploye The masque service employe.
     */
    public function setMasqueServiceEmploye($masqueServiceEmploye) {
        $this->masqueServiceEmploye = $masqueServiceEmploye;
        return $this;
    }

    /**
     * Set the methode cp.
     *
     * @param string $methodeCp The methode cp.
     */
    public function setMethodeCp($methodeCp) {
        $this->methodeCp = $methodeCp;
        return $this;
    }

    /**
     * Set the mois cloture cp.
     *
     * @param string $moisClotureCp The mois cloture cp.
     */
    public function setMoisClotureCp($moisClotureCp) {
        $this->moisClotureCp = $moisClotureCp;
        return $this;
    }

    /**
     * Set the mois cloture dif.
     *
     * @param string $moisClotureDif The mois cloture dif.
     */
    public function setMoisClotureDif($moisClotureDif) {
        $this->moisClotureDif = $moisClotureDif;
        return $this;
    }

    /**
     * Set the mois cloture rtt.
     *
     * @param string $moisClotureRtt The mois cloture rtt.
     */
    public function setMoisClotureRtt($moisClotureRtt) {
        $this->moisClotureRtt = $moisClotureRtt;
        return $this;
    }

    /**
     * Set the montant1.
     *
     * @param float $montant1 The montant1.
     */
    public function setMontant1($montant1) {
        $this->montant1 = $montant1;
        return $this;
    }

    /**
     * Set the montant2.
     *
     * @param float $montant2 The montant2.
     */
    public function setMontant2($montant2) {
        $this->montant2 = $montant2;
        return $this;
    }

    /**
     * Set the montant3.
     *
     * @param float $montant3 The montant3.
     */
    public function setMontant3($montant3) {
        $this->montant3 = $montant3;
        return $this;
    }

    /**
     * Set the montant4.
     *
     * @param float $montant4 The montant4.
     */
    public function setMontant4($montant4) {
        $this->montant4 = $montant4;
        return $this;
    }

    /**
     * Set the montant5.
     *
     * @param float $montant5 The montant5.
     */
    public function setMontant5($montant5) {
        $this->montant5 = $montant5;
        return $this;
    }

    /**
     * Set the montant allegement.
     *
     * @param float $montantAllegement The montant allegement.
     */
    public function setMontantAllegement($montantAllegement) {
        $this->montantAllegement = $montantAllegement;
        return $this;
    }

    /**
     * Set the nature analytique.
     *
     * @param string $natureAnalytique The nature analytique.
     */
    public function setNatureAnalytique($natureAnalytique) {
        $this->natureAnalytique = $natureAnalytique;
        return $this;
    }

    /**
     * Set the nb h jour1.
     *
     * @param float $nbHJour1 The nb h jour1.
     */
    public function setNbHJour1($nbHJour1) {
        $this->nbHJour1 = $nbHJour1;
        return $this;
    }

    /**
     * Set the nb h jour2.
     *
     * @param float $nbHJour2 The nb h jour2.
     */
    public function setNbHJour2($nbHJour2) {
        $this->nbHJour2 = $nbHJour2;
        return $this;
    }

    /**
     * Set the nb h jour3.
     *
     * @param float $nbHJour3 The nb h jour3.
     */
    public function setNbHJour3($nbHJour3) {
        $this->nbHJour3 = $nbHJour3;
        return $this;
    }

    /**
     * Set the nb h jour4.
     *
     * @param float $nbHJour4 The nb h jour4.
     */
    public function setNbHJour4($nbHJour4) {
        $this->nbHJour4 = $nbHJour4;
        return $this;
    }

    /**
     * Set the nb h jour5.
     *
     * @param float $nbHJour5 The nb h jour5.
     */
    public function setNbHJour5($nbHJour5) {
        $this->nbHJour5 = $nbHJour5;
        return $this;
    }

    /**
     * Set the nb h jour6.
     *
     * @param float $nbHJour6 The nb h jour6.
     */
    public function setNbHJour6($nbHJour6) {
        $this->nbHJour6 = $nbHJour6;
        return $this;
    }

    /**
     * Set the nb h jour7.
     *
     * @param float $nbHJour7 The nb h jour7.
     */
    public function setNbHJour7($nbHJour7) {
        $this->nbHJour7 = $nbHJour7;
        return $this;
    }

    /**
     * Set the nb hdif an.
     *
     * @param float $nbHdifAn The nb hdif an.
     */
    public function setNbHdifAn($nbHdifAn) {
        $this->nbHdifAn = $nbHdifAn;
        return $this;
    }

    /**
     * Set the nb heure trav mois.
     *
     * @param float $nbHeureTravMois The nb heure trav mois.
     */
    public function setNbHeureTravMois($nbHeureTravMois) {
        $this->nbHeureTravMois = $nbHeureTravMois;
        return $this;
    }

    /**
     * Set the nb jour base.
     *
     * @param float $nbJourBase The nb jour base.
     */
    public function setNbJourBase($nbJourBase) {
        $this->nbJourBase = $nbJourBase;
        return $this;
    }

    /**
     * Set the nb jour base cp.
     *
     * @param float $nbJourBaseCp The nb jour base cp.
     */
    public function setNbJourBaseCp($nbJourBaseCp) {
        $this->nbJourBaseCp = $nbJourBaseCp;
        return $this;
    }

    /**
     * Set the nb jour cp acquis.
     *
     * @param float $nbJourCpAcquis The nb jour cp acquis.
     */
    public function setNbJourCpAcquis($nbJourCpAcquis) {
        $this->nbJourCpAcquis = $nbJourCpAcquis;
        return $this;
    }

    /**
     * Set the nb m ajout per.
     *
     * @param string $nbMAjoutPer The nb m ajout per.
     */
    public function setNbMAjoutPer($nbMAjoutPer) {
        $this->nbMAjoutPer = $nbMAjoutPer;
        return $this;
    }

    /**
     * Set the nb mois aubry1.
     *
     * @param float $nbMoisAubry1 The nb mois aubry1.
     */
    public function setNbMoisAubry1($nbMoisAubry1) {
        $this->nbMoisAubry1 = $nbMoisAubry1;
        return $this;
    }

    /**
     * Set the nbh jour rtt.
     *
     * @param float $nbhJourRtt The nbh jour rtt.
     */
    public function setNbhJourRtt($nbhJourRtt) {
        $this->nbhJourRtt = $nbhJourRtt;
        return $this;
    }

    /**
     * Set the ne pas activer loi fillon2003.
     *
     * @param bool $nePasActiverLoiFillon2003 The ne pas activer loi fillon2003.
     */
    public function setNePasActiverLoiFillon2003($nePasActiverLoiFillon2003) {
        $this->nePasActiverLoiFillon2003 = $nePasActiverLoiFillon2003;
        return $this;
    }

    /**
     * Set the nom ville.
     *
     * @param string $nomVille The nom ville.
     */
    public function setNomVille($nomVille) {
        $this->nomVille = $nomVille;
        return $this;
    }

    /**
     * Set the nom ville insee.
     *
     * @param string $nomVilleInsee The nom ville insee.
     */
    public function setNomVilleInsee($nomVilleInsee) {
        $this->nomVilleInsee = $nomVilleInsee;
        return $this;
    }

    /**
     * Set the nom voie.
     *
     * @param string $nomVoie The nom voie.
     */
    public function setNomVoie($nomVoie) {
        $this->nomVoie = $nomVoie;
        return $this;
    }

    /**
     * Set the num voie.
     *
     * @param string $numVoie The num voie.
     */
    public function setNumVoie($numVoie) {
        $this->numVoie = $numVoie;
        return $this;
    }

    /**
     * Set the opca dif.
     *
     * @param string $opcaDif The opca dif.
     */
    public function setOpcaDif($opcaDif) {
        $this->opcaDif = $opcaDif;
        return $this;
    }

    /**
     * Set the p lafond exo.
     *
     * @param float $pLafondExo The p lafond exo.
     */
    public function setPLafondExo($pLafondExo) {
        $this->pLafondExo = $pLafondExo;
        return $this;
    }

    /**
     * Set the paie decalee.
     *
     * @param bool $paieDecalee The paie decalee.
     */
    public function setPaieDecalee($paieDecalee) {
        $this->paieDecalee = $paieDecalee;
        return $this;
    }

    /**
     * Set the plafond1 caisse1.
     *
     * @param float $plafond1Caisse1 The plafond1 caisse1.
     */
    public function setPlafond1Caisse1($plafond1Caisse1) {
        $this->plafond1Caisse1 = $plafond1Caisse1;
        return $this;
    }

    /**
     * Set the plafond1 caisse2.
     *
     * @param float $plafond1Caisse2 The plafond1 caisse2.
     */
    public function setPlafond1Caisse2($plafond1Caisse2) {
        $this->plafond1Caisse2 = $plafond1Caisse2;
        return $this;
    }

    /**
     * Set the plafond1 caisse3.
     *
     * @param float $plafond1Caisse3 The plafond1 caisse3.
     */
    public function setPlafond1Caisse3($plafond1Caisse3) {
        $this->plafond1Caisse3 = $plafond1Caisse3;
        return $this;
    }

    /**
     * Set the plafond2 caisse1.
     *
     * @param float $plafond2Caisse1 The plafond2 caisse1.
     */
    public function setPlafond2Caisse1($plafond2Caisse1) {
        $this->plafond2Caisse1 = $plafond2Caisse1;
        return $this;
    }

    /**
     * Set the plafond2 caisse2.
     *
     * @param float $plafond2Caisse2 The plafond2 caisse2.
     */
    public function setPlafond2Caisse2($plafond2Caisse2) {
        $this->plafond2Caisse2 = $plafond2Caisse2;
        return $this;
    }

    /**
     * Set the plafond2 caisse3.
     *
     * @param float $plafond2Caisse3 The plafond2 caisse3.
     */
    public function setPlafond2Caisse3($plafond2Caisse3) {
        $this->plafond2Caisse3 = $plafond2Caisse3;
        return $this;
    }

    /**
     * Set the pourcent bonif.
     *
     * @param float $pourcentBonif The pourcent bonif.
     */
    public function setPourcentBonif($pourcentBonif) {
        $this->pourcentBonif = $pourcentBonif;
        return $this;
    }

    /**
     * Set the pourcent exo.
     *
     * @param float $pourcentExo The pourcent exo.
     */
    public function setPourcentExo($pourcentExo) {
        $this->pourcentExo = $pourcentExo;
        return $this;
    }

    /**
     * Set the pourcent transport.
     *
     * @param float $pourcentTransport The pourcent transport.
     */
    public function setPourcentTransport($pourcentTransport) {
        $this->pourcentTransport = $pourcentTransport;
        return $this;
    }

    /**
     * Set the pourcentage imp.
     *
     * @param float $pourcentageImp The pourcentage imp.
     */
    public function setPourcentageImp($pourcentageImp) {
        $this->pourcentageImp = $pourcentageImp;
        return $this;
    }

    /**
     * Set the prof spectacle.
     *
     * @param bool $profSpectacle The prof spectacle.
     */
    public function setProfSpectacle($profSpectacle) {
        $this->profSpectacle = $profSpectacle;
        return $this;
    }

    /**
     * Set the profession.
     *
     * @param string $profession The profession.
     */
    public function setProfession($profession) {
        $this->profession = $profession;
        return $this;
    }

    /**
     * Set the prud type.
     *
     * @param string $prudType The prud type.
     */
    public function setPrudType($prudType) {
        $this->prudType = $prudType;
        return $this;
    }

    /**
     * Set the prud type dadsu.
     *
     * @param string $prudTypeDadsu The prud type dadsu.
     */
    public function setPrudTypeDadsu($prudTypeDadsu) {
        $this->prudTypeDadsu = $prudTypeDadsu;
        return $this;
    }

    /**
     * Set the publication.
     *
     * @param bool $publication The publication.
     */
    public function setPublication($publication) {
        $this->publication = $publication;
        return $this;
    }

    /**
     * Set the qualite.
     *
     * @param string $qualite The qualite.
     */
    public function setQualite($qualite) {
        $this->qualite = $qualite;
        return $this;
    }

    /**
     * Set the raison sociale.
     *
     * @param string $raisonSociale The raison sociale.
     */
    public function setRaisonSociale($raisonSociale) {
        $this->raisonSociale = $raisonSociale;
        return $this;
    }

    /**
     * Set the reduction fillon.
     *
     * @param bool $reductionFillon The reduction fillon.
     */
    public function setReductionFillon($reductionFillon) {
        $this->reductionFillon = $reductionFillon;
        return $this;
    }

    /**
     * Set the responsable.
     *
     * @param string $responsable The responsable.
     */
    public function setResponsable($responsable) {
        $this->responsable = $responsable;
        return $this;
    }

    /**
     * Set the rib1.
     *
     * @param string $rib1 The rib1.
     */
    public function setRib1($rib1) {
        $this->rib1 = $rib1;
        return $this;
    }

    /**
     * Set the rib2.
     *
     * @param string $rib2 The rib2.
     */
    public function setRib2($rib2) {
        $this->rib2 = $rib2;
        return $this;
    }

    /**
     * Set the rib3.
     *
     * @param string $rib3 The rib3.
     */
    public function setRib3($rib3) {
        $this->rib3 = $rib3;
        return $this;
    }

    /**
     * Set the rtt1.
     *
     * @param float $rtt1 The rtt1.
     */
    public function setRtt1($rtt1) {
        $this->rtt1 = $rtt1;
        return $this;
    }

    /**
     * Set the rtt10.
     *
     * @param float $rtt10 The rtt10.
     */
    public function setRtt10($rtt10) {
        $this->rtt10 = $rtt10;
        return $this;
    }

    /**
     * Set the rtt11.
     *
     * @param float $rtt11 The rtt11.
     */
    public function setRtt11($rtt11) {
        $this->rtt11 = $rtt11;
        return $this;
    }

    /**
     * Set the rtt12.
     *
     * @param float $rtt12 The rtt12.
     */
    public function setRtt12($rtt12) {
        $this->rtt12 = $rtt12;
        return $this;
    }

    /**
     * Set the rtt2.
     *
     * @param float $rtt2 The rtt2.
     */
    public function setRtt2($rtt2) {
        $this->rtt2 = $rtt2;
        return $this;
    }

    /**
     * Set the rtt3.
     *
     * @param float $rtt3 The rtt3.
     */
    public function setRtt3($rtt3) {
        $this->rtt3 = $rtt3;
        return $this;
    }

    /**
     * Set the rtt4.
     *
     * @param float $rtt4 The rtt4.
     */
    public function setRtt4($rtt4) {
        $this->rtt4 = $rtt4;
        return $this;
    }

    /**
     * Set the rtt5.
     *
     * @param float $rtt5 The rtt5.
     */
    public function setRtt5($rtt5) {
        $this->rtt5 = $rtt5;
        return $this;
    }

    /**
     * Set the rtt6.
     *
     * @param float $rtt6 The rtt6.
     */
    public function setRtt6($rtt6) {
        $this->rtt6 = $rtt6;
        return $this;
    }

    /**
     * Set the rtt7.
     *
     * @param float $rtt7 The rtt7.
     */
    public function setRtt7($rtt7) {
        $this->rtt7 = $rtt7;
        return $this;
    }

    /**
     * Set the rtt8.
     *
     * @param float $rtt8 The rtt8.
     */
    public function setRtt8($rtt8) {
        $this->rtt8 = $rtt8;
        return $this;
    }

    /**
     * Set the rtt9.
     *
     * @param float $rtt9 The rtt9.
     */
    public function setRtt9($rtt9) {
        $this->rtt9 = $rtt9;
        return $this;
    }

    /**
     * Set the siege dadsu.
     *
     * @param bool $siegeDadsu The siege dadsu.
     */
    public function setSiegeDadsu($siegeDadsu) {
        $this->siegeDadsu = $siegeDadsu;
        return $this;
    }

    /**
     * Set the siret.
     *
     * @param string $siret The siret.
     */
    public function setSiret($siret) {
        $this->siret = $siret;
        return $this;
    }

    /**
     * Set the situation geo.
     *
     * @param string $situationGeo The situation geo.
     */
    public function setSituationGeo($situationGeo) {
        $this->situationGeo = $situationGeo;
        return $this;
    }

    /**
     * Set the subrogation.
     *
     * @param bool $subrogation The subrogation.
     */
    public function setSubrogation($subrogation) {
        $this->subrogation = $subrogation;
        return $this;
    }

    /**
     * Set the suivi analytique.
     *
     * @param bool $suiviAnalytique The suivi analytique.
     */
    public function setSuiviAnalytique($suiviAnalytique) {
        $this->suiviAnalytique = $suiviAnalytique;
        return $this;
    }

    /**
     * Set the taux actionsociale.
     *
     * @param float $tauxActionsociale The taux actionsociale.
     */
    public function setTauxActionsociale($tauxActionsociale) {
        $this->tauxActionsociale = $tauxActionsociale;
        return $this;
    }

    /**
     * Set the taux construction.
     *
     * @param float $tauxConstruction The taux construction.
     */
    public function setTauxConstruction($tauxConstruction) {
        $this->tauxConstruction = $tauxConstruction;
        return $this;
    }

    /**
     * Set the taux formation.
     *
     * @param float $tauxFormation The taux formation.
     */
    public function setTauxFormation($tauxFormation) {
        $this->tauxFormation = $tauxFormation;
        return $this;
    }

    /**
     * Set the taux h sup1.
     *
     * @param float $tauxHSup1 The taux h sup1.
     */
    public function setTauxHSup1($tauxHSup1) {
        $this->tauxHSup1 = $tauxHSup1;
        return $this;
    }

    /**
     * Set the taux h sup2.
     *
     * @param float $tauxHSup2 The taux h sup2.
     */
    public function setTauxHSup2($tauxHSup2) {
        $this->tauxHSup2 = $tauxHSup2;
        return $this;
    }

    /**
     * Set the taux h sup3.
     *
     * @param float $tauxHSup3 The taux h sup3.
     */
    public function setTauxHSup3($tauxHSup3) {
        $this->tauxHSup3 = $tauxHSup3;
        return $this;
    }

    /**
     * Set the taux h sup4.
     *
     * @param float $tauxHSup4 The taux h sup4.
     */
    public function setTauxHSup4($tauxHSup4) {
        $this->tauxHSup4 = $tauxHSup4;
        return $this;
    }

    /**
     * Set the taux h sup5.
     *
     * @param float $tauxHSup5 The taux h sup5.
     */
    public function setTauxHSup5($tauxHSup5) {
        $this->tauxHSup5 = $tauxHSup5;
        return $this;
    }

    /**
     * Set the taux ret tr2 pp.
     *
     * @param float $tauxRetTr2Pp The taux ret tr2 pp.
     */
    public function setTauxRetTr2Pp($tauxRetTr2Pp) {
        $this->tauxRetTr2Pp = $tauxRetTr2Pp;
        return $this;
    }

    /**
     * Set the taux ret tr2 ps.
     *
     * @param float $tauxRetTr2Ps The taux ret tr2 ps.
     */
    public function setTauxRetTr2Ps($tauxRetTr2Ps) {
        $this->tauxRetTr2Ps = $tauxRetTr2Ps;
        return $this;
    }

    /**
     * Set the taux ret tr app.
     *
     * @param float $tauxRetTrApp The taux ret tr app.
     */
    public function setTauxRetTrApp($tauxRetTrApp) {
        $this->tauxRetTrApp = $tauxRetTrApp;
        return $this;
    }

    /**
     * Set the taux ret tr aps.
     *
     * @param float $tauxRetTrAps The taux ret tr aps.
     */
    public function setTauxRetTrAps($tauxRetTrAps) {
        $this->tauxRetTrAps = $tauxRetTrAps;
        return $this;
    }

    /**
     * Set the taux ret tr bpp.
     *
     * @param float $tauxRetTrBpp The taux ret tr bpp.
     */
    public function setTauxRetTrBpp($tauxRetTrBpp) {
        $this->tauxRetTrBpp = $tauxRetTrBpp;
        return $this;
    }

    /**
     * Set the taux ret tr bps.
     *
     * @param float $tauxRetTrBps The taux ret tr bps.
     */
    public function setTauxRetTrBps($tauxRetTrBps) {
        $this->tauxRetTrBps = $tauxRetTrBps;
        return $this;
    }

    /**
     * Set the taux ret tr cpp.
     *
     * @param float $tauxRetTrCpp The taux ret tr cpp.
     */
    public function setTauxRetTrCpp($tauxRetTrCpp) {
        $this->tauxRetTrCpp = $tauxRetTrCpp;
        return $this;
    }

    /**
     * Set the taux ret tr cps.
     *
     * @param float $tauxRetTrCps The taux ret tr cps.
     */
    public function setTauxRetTrCps($tauxRetTrCps) {
        $this->tauxRetTrCps = $tauxRetTrCps;
        return $this;
    }

    /**
     * Set the taux ret tr dpp.
     *
     * @param float $tauxRetTrDpp The taux ret tr dpp.
     */
    public function setTauxRetTrDpp($tauxRetTrDpp) {
        $this->tauxRetTrDpp = $tauxRetTrDpp;
        return $this;
    }

    /**
     * Set the taux ret tr dps.
     *
     * @param float $tauxRetTrDps The taux ret tr dps.
     */
    public function setTauxRetTrDps($tauxRetTrDps) {
        $this->tauxRetTrDps = $tauxRetTrDps;
        return $this;
    }

    /**
     * Set the taux sup formation.
     *
     * @param float $tauxSupFormation The taux sup formation.
     */
    public function setTauxSupFormation($tauxSupFormation) {
        $this->tauxSupFormation = $tauxSupFormation;
        return $this;
    }

    /**
     * Set the taux taxe apprenti.
     *
     * @param float $tauxTaxeApprenti The taux taxe apprenti.
     */
    public function setTauxTaxeApprenti($tauxTaxeApprenti) {
        $this->tauxTaxeApprenti = $tauxTaxeApprenti;
        return $this;
    }

    /**
     * Set the taux transport.
     *
     * @param float $tauxTransport The taux transport.
     */
    public function setTauxTransport($tauxTransport) {
        $this->tauxTransport = $tauxTransport;
        return $this;
    }

    /**
     * Set the tds128.
     *
     * @param string $tds128 The tds128.
     */
    public function setTds128($tds128) {
        $this->tds128 = $tds128;
        return $this;
    }

    /**
     * Set the tds19.
     *
     * @param string $tds19 The tds19.
     */
    public function setTds19($tds19) {
        $this->tds19 = $tds19;
        return $this;
    }

    /**
     * Set the tds47.
     *
     * @param string $tds47 The tds47.
     */
    public function setTds47($tds47) {
        $this->tds47 = $tds47;
        return $this;
    }

    /**
     * Set the tel.
     *
     * @param string $tel The tel.
     */
    public function setTel($tel) {
        $this->tel = $tel;
        return $this;
    }

    /**
     * Set the tx sal decote.
     *
     * @param float $txSalDecote The tx sal decote.
     */
    public function setTxSalDecote($txSalDecote) {
        $this->txSalDecote = $txSalDecote;
        return $this;
    }

    /**
     * Set the type base caisse1.
     *
     * @param string $typeBaseCaisse1 The type base caisse1.
     */
    public function setTypeBaseCaisse1($typeBaseCaisse1) {
        $this->typeBaseCaisse1 = $typeBaseCaisse1;
        return $this;
    }

    /**
     * Set the type base caisse2.
     *
     * @param string $typeBaseCaisse2 The type base caisse2.
     */
    public function setTypeBaseCaisse2($typeBaseCaisse2) {
        $this->typeBaseCaisse2 = $typeBaseCaisse2;
        return $this;
    }

    /**
     * Set the type base caisse3.
     *
     * @param string $typeBaseCaisse3 The type base caisse3.
     */
    public function setTypeBaseCaisse3($typeBaseCaisse3) {
        $this->typeBaseCaisse3 = $typeBaseCaisse3;
        return $this;
    }

    /**
     * Set the type bonif.
     *
     * @param string $typeBonif The type bonif.
     */
    public function setTypeBonif($typeBonif) {
        $this->typeBonif = $typeBonif;
        return $this;
    }

    /**
     * Set the type domiciliation banque1.
     *
     * @param string $typeDomiciliationBanque1 The type domiciliation banque1.
     */
    public function setTypeDomiciliationBanque1($typeDomiciliationBanque1) {
        $this->typeDomiciliationBanque1 = $typeDomiciliationBanque1;
        return $this;
    }

    /**
     * Set the type domiciliation banque2.
     *
     * @param string $typeDomiciliationBanque2 The type domiciliation banque2.
     */
    public function setTypeDomiciliationBanque2($typeDomiciliationBanque2) {
        $this->typeDomiciliationBanque2 = $typeDomiciliationBanque2;
        return $this;
    }

    /**
     * Set the type domiciliation banque3.
     *
     * @param string $typeDomiciliationBanque3 The type domiciliation banque3.
     */
    public function setTypeDomiciliationBanque3($typeDomiciliationBanque3) {
        $this->typeDomiciliationBanque3 = $typeDomiciliationBanque3;
        return $this;
    }

    /**
     * Set the type effectif.
     *
     * @param string $typeEffectif The type effectif.
     */
    public function setTypeEffectif($typeEffectif) {
        $this->typeEffectif = $typeEffectif;
        return $this;
    }

    /**
     * Set the type maintien salaire.
     *
     * @param string $typeMaintienSalaire The type maintien salaire.
     */
    public function setTypeMaintienSalaire($typeMaintienSalaire) {
        $this->typeMaintienSalaire = $typeMaintienSalaire;
        return $this;
    }

    /**
     * Set the type publication.
     *
     * @param string $typePublication The type publication.
     */
    public function setTypePublication($typePublication) {
        $this->typePublication = $typePublication;
        return $this;
    }

    /**
     * Set the type saisie ab cp.
     *
     * @param string $typeSaisieAbCp The type saisie ab cp.
     */
    public function setTypeSaisieAbCp($typeSaisieAbCp) {
        $this->typeSaisieAbCp = $typeSaisieAbCp;
        return $this;
    }

    /**
     * Set the type smic.
     *
     * @param string $typeSmic The type smic.
     */
    public function setTypeSmic($typeSmic) {
        $this->typeSmic = $typeSmic;
        return $this;
    }

    /**
     * Set the urssaf alsace.
     *
     * @param bool $urssafAlsace The urssaf alsace.
     */
    public function setUrssafAlsace($urssafAlsace) {
        $this->urssafAlsace = $urssafAlsace;
        return $this;
    }

    /**
     * Set the zone specif.
     *
     * @param string $zoneSpecif The zone specif.
     */
    public function setZoneSpecif($zoneSpecif) {
        $this->zoneSpecif = $zoneSpecif;
        return $this;
    }
}
