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
 * Emp tds calcul.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class EmpTdsCalcul {

    /**
     * Base calc tds142.
     *
     * @var float
     */
    private $baseCalcTds142;

    /**
     * Code at per.
     *
     * @var int
     */
    private $codeAtPer;

    /**
     * Code etablissement.
     *
     * @var int
     */
    private $codeEtablissement;

    /**
     * Cum net impos.
     *
     * @var float
     */
    private $cumNetImpos;

    /**
     * Debut periode decl.
     *
     * @var DateTime|null
     */
    private $debutPeriodeDecl;

    /**
     * Derniere periode annee.
     *
     * @var bool
     */
    private $dernierePeriodeAnnee;

    /**
     * Fin periode decl.
     *
     * @var DateTime|null
     */
    private $finPeriodeDecl;

    /**
     * Indemn impat.
     *
     * @var float
     */
    private $indemnImpat;

    /**
     * Montant h sup compl exo.
     *
     * @var float
     */
    private $montantHSupComplExo;

    /**
     * Nb heure sal.
     *
     * @var float
     */
    private $nbHeureSal;

    /**
     * Nb heure trav.
     *
     * @var float
     */
    private $nbHeureTrav;

    /**
     * Nb per paie.
     *
     * @var int
     */
    private $nbPerPaie;

    /**
     * Numero.
     *
     * @var string
     */
    private $numero;

    /**
     * Numero ordre.
     *
     * @var int
     */
    private $numeroOrdre;

    /**
     * Particip serv pers.
     *
     * @var float
     */
    private $participServPers;

    /**
     * Premiere periode annee.
     *
     * @var bool
     */
    private $premierePeriodeAnnee;

    /**
     * Tds100.
     *
     * @var float
     */
    private $tds100;

    /**
     * Tds102.
     *
     * @var float
     */
    private $tds102;

    /**
     * Tds103.
     *
     * @var float
     */
    private $tds103;

    /**
     * Tds105.
     *
     * @var float
     */
    private $tds105;

    /**
     * Tds107.
     *
     * @var bool
     */
    private $tds107;

    /**
     * Tds108.
     *
     * @var bool
     */
    private $tds108;

    /**
     * Tds109.
     *
     * @var bool
     */
    private $tds109;

    /**
     * Tds110.
     *
     * @var bool
     */
    private $tds110;

    /**
     * Tds111.
     *
     * @var bool
     */
    private $tds111;

    /**
     * Tds112.
     *
     * @var float
     */
    private $tds112;

    /**
     * Tds113.
     *
     * @var bool
     */
    private $tds113;

    /**
     * Tds117.
     *
     * @var float
     */
    private $tds117;

    /**
     * Tds119.
     *
     * @var bool
     */
    private $tds119;

    /**
     * Tds120.
     *
     * @var bool
     */
    private $tds120;

    /**
     * Tds121.
     *
     * @var bool
     */
    private $tds121;

    /**
     * Tds122.
     *
     * @var bool
     */
    private $tds122;

    /**
     * Tds125.
     *
     * @var float
     */
    private $tds125;

    /**
     * Tds127.
     *
     * @var float
     */
    private $tds127;

    /**
     * Tds128.
     *
     * @var string
     */
    private $tds128;

    /**
     * Tds132.
     *
     * @var float
     */
    private $tds132;

    /**
     * Tds133.
     *
     * @var string
     */
    private $tds133;

    /**
     * Tds134.
     *
     * @var float
     */
    private $tds134;

    /**
     * Tds135.
     *
     * @var float
     */
    private $tds135;

    /**
     * Tds136.
     *
     * @var float
     */
    private $tds136;

    /**
     * Tds137.
     *
     * @var float
     */
    private $tds137;

    /**
     * Tds139.
     *
     * @var string
     */
    private $tds139;

    /**
     * Tds141.
     *
     * @var float
     */
    private $tds141;

    /**
     * Tds142.
     *
     * @var float
     */
    private $tds142;

    /**
     * Tds142 deja calcule.
     *
     * @var bool
     */
    private $tds142DejaCalcule;

    /**
     * Tds75.
     *
     * @var int
     */
    private $tds75;

    /**
     * Tds77.
     *
     * @var string
     */
    private $tds77;

    /**
     * Tds78.
     *
     * @var bool
     */
    private $tds78;

    /**
     * Tds81.
     *
     * @var float
     */
    private $tds81;

    /**
     * Tds82.
     *
     * @var float
     */
    private $tds82;

    /**
     * Tds84.
     *
     * @var float
     */
    private $tds84;

    /**
     * Tds85.
     *
     * @var float
     */
    private $tds85;

    /**
     * Tds86.
     *
     * @var float
     */
    private $tds86;

    /**
     * Tds87.
     *
     * @var float
     */
    private $tds87;

    /**
     * Tds88.
     *
     * @var float
     */
    private $tds88;

    /**
     * Tds89.
     *
     * @var float
     */
    private $tds89;

    /**
     * Tds90.
     *
     * @var float
     */
    private $tds90;

    /**
     * Tds91.
     *
     * @var float
     */
    private $tds91;

    /**
     * Tds92.
     *
     * @var float
     */
    private $tds92;

    /**
     * Tds93.
     *
     * @var float
     */
    private $tds93;

    /**
     * Tds94.
     *
     * @var float
     */
    private $tds94;

    /**
     * Tds95.
     *
     * @var float
     */
    private $tds95;

    /**
     * Tds abatt frais pro.
     *
     * @var float
     */
    private $tdsAbattFraisPro;

    /**
     * Tds alloc chom.
     *
     * @var float
     */
    private $tdsAllocChom;

    /**
     * Tds alloc compl ijss.
     *
     * @var float
     */
    private $tdsAllocComplIjss;

    /**
     * Tds alloc retraite.
     *
     * @var float
     */
    private $tdsAllocRetraite;

    /**
     * Tds contrib ce cheques vac.
     *
     * @var float
     */
    private $tdsContribCeChequesVac;

    /**
     * Tds cumul n.
     *
     * @var float
     */
    private $tdsCumulN;

    /**
     * Tds flag raz.
     *
     * @var int
     */
    private $tdsFlagRaz;

    /**
     * Tds indemn depart retraite.
     *
     * @var float
     */
    private $tdsIndemnDepartRetraite;

    /**
     * Tds indemn imposables.
     *
     * @var float
     */
    private $tdsIndemnImposables;

    /**
     * Tds remb frais pro.
     *
     * @var float
     */
    private $tdsRembFraisPro;

    /**
     * Tds somme exo taxe sal.
     *
     * @var float
     */
    private $tdsSommeExoTaxeSal;

    /**
     * Tds sup120.
     *
     * @var string
     */
    private $tdsSup120;

    /**
     * Tds sup1200.
     *
     * @var string
     */
    private $tdsSup1200;

    /**
     * Total plaf.
     *
     * @var float
     */
    private $totalPlaf;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the base calc tds142.
     *
     * @return float Returns the base calc tds142.
     */
    public function getBaseCalcTds142() {
        return $this->baseCalcTds142;
    }

    /**
     * Get the code at per.
     *
     * @return int Returns the code at per.
     */
    public function getCodeAtPer() {
        return $this->codeAtPer;
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
     * Get the cum net impos.
     *
     * @return float Returns the cum net impos.
     */
    public function getCumNetImpos() {
        return $this->cumNetImpos;
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
     * Get the derniere periode annee.
     *
     * @return bool Returns the derniere periode annee.
     */
    public function getDernierePeriodeAnnee() {
        return $this->dernierePeriodeAnnee;
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
     * Get the indemn impat.
     *
     * @return float Returns the indemn impat.
     */
    public function getIndemnImpat() {
        return $this->indemnImpat;
    }

    /**
     * Get the montant h sup compl exo.
     *
     * @return float Returns the montant h sup compl exo.
     */
    public function getMontantHSupComplExo() {
        return $this->montantHSupComplExo;
    }

    /**
     * Get the nb heure sal.
     *
     * @return float Returns the nb heure sal.
     */
    public function getNbHeureSal() {
        return $this->nbHeureSal;
    }

    /**
     * Get the nb heure trav.
     *
     * @return float Returns the nb heure trav.
     */
    public function getNbHeureTrav() {
        return $this->nbHeureTrav;
    }

    /**
     * Get the nb per paie.
     *
     * @return int Returns the nb per paie.
     */
    public function getNbPerPaie() {
        return $this->nbPerPaie;
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
     * Get the numero ordre.
     *
     * @return int Returns the numero ordre.
     */
    public function getNumeroOrdre() {
        return $this->numeroOrdre;
    }

    /**
     * Get the particip serv pers.
     *
     * @return float Returns the particip serv pers.
     */
    public function getParticipServPers() {
        return $this->participServPers;
    }

    /**
     * Get the premiere periode annee.
     *
     * @return bool Returns the premiere periode annee.
     */
    public function getPremierePeriodeAnnee() {
        return $this->premierePeriodeAnnee;
    }

    /**
     * Get the tds100.
     *
     * @return float Returns the tds100.
     */
    public function getTds100() {
        return $this->tds100;
    }

    /**
     * Get the tds102.
     *
     * @return float Returns the tds102.
     */
    public function getTds102() {
        return $this->tds102;
    }

    /**
     * Get the tds103.
     *
     * @return float Returns the tds103.
     */
    public function getTds103() {
        return $this->tds103;
    }

    /**
     * Get the tds105.
     *
     * @return float Returns the tds105.
     */
    public function getTds105() {
        return $this->tds105;
    }

    /**
     * Get the tds107.
     *
     * @return bool Returns the tds107.
     */
    public function getTds107() {
        return $this->tds107;
    }

    /**
     * Get the tds108.
     *
     * @return bool Returns the tds108.
     */
    public function getTds108() {
        return $this->tds108;
    }

    /**
     * Get the tds109.
     *
     * @return bool Returns the tds109.
     */
    public function getTds109() {
        return $this->tds109;
    }

    /**
     * Get the tds110.
     *
     * @return bool Returns the tds110.
     */
    public function getTds110() {
        return $this->tds110;
    }

    /**
     * Get the tds111.
     *
     * @return bool Returns the tds111.
     */
    public function getTds111() {
        return $this->tds111;
    }

    /**
     * Get the tds112.
     *
     * @return float Returns the tds112.
     */
    public function getTds112() {
        return $this->tds112;
    }

    /**
     * Get the tds113.
     *
     * @return bool Returns the tds113.
     */
    public function getTds113() {
        return $this->tds113;
    }

    /**
     * Get the tds117.
     *
     * @return float Returns the tds117.
     */
    public function getTds117() {
        return $this->tds117;
    }

    /**
     * Get the tds119.
     *
     * @return bool Returns the tds119.
     */
    public function getTds119() {
        return $this->tds119;
    }

    /**
     * Get the tds120.
     *
     * @return bool Returns the tds120.
     */
    public function getTds120() {
        return $this->tds120;
    }

    /**
     * Get the tds121.
     *
     * @return bool Returns the tds121.
     */
    public function getTds121() {
        return $this->tds121;
    }

    /**
     * Get the tds122.
     *
     * @return bool Returns the tds122.
     */
    public function getTds122() {
        return $this->tds122;
    }

    /**
     * Get the tds125.
     *
     * @return float Returns the tds125.
     */
    public function getTds125() {
        return $this->tds125;
    }

    /**
     * Get the tds127.
     *
     * @return float Returns the tds127.
     */
    public function getTds127() {
        return $this->tds127;
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
     * Get the tds132.
     *
     * @return float Returns the tds132.
     */
    public function getTds132() {
        return $this->tds132;
    }

    /**
     * Get the tds133.
     *
     * @return string Returns the tds133.
     */
    public function getTds133() {
        return $this->tds133;
    }

    /**
     * Get the tds134.
     *
     * @return float Returns the tds134.
     */
    public function getTds134() {
        return $this->tds134;
    }

    /**
     * Get the tds135.
     *
     * @return float Returns the tds135.
     */
    public function getTds135() {
        return $this->tds135;
    }

    /**
     * Get the tds136.
     *
     * @return float Returns the tds136.
     */
    public function getTds136() {
        return $this->tds136;
    }

    /**
     * Get the tds137.
     *
     * @return float Returns the tds137.
     */
    public function getTds137() {
        return $this->tds137;
    }

    /**
     * Get the tds139.
     *
     * @return string Returns the tds139.
     */
    public function getTds139() {
        return $this->tds139;
    }

    /**
     * Get the tds141.
     *
     * @return float Returns the tds141.
     */
    public function getTds141() {
        return $this->tds141;
    }

    /**
     * Get the tds142.
     *
     * @return float Returns the tds142.
     */
    public function getTds142() {
        return $this->tds142;
    }

    /**
     * Get the tds142 deja calcule.
     *
     * @return bool Returns the tds142 deja calcule.
     */
    public function getTds142DejaCalcule() {
        return $this->tds142DejaCalcule;
    }

    /**
     * Get the tds75.
     *
     * @return int Returns the tds75.
     */
    public function getTds75() {
        return $this->tds75;
    }

    /**
     * Get the tds77.
     *
     * @return string Returns the tds77.
     */
    public function getTds77() {
        return $this->tds77;
    }

    /**
     * Get the tds78.
     *
     * @return bool Returns the tds78.
     */
    public function getTds78() {
        return $this->tds78;
    }

    /**
     * Get the tds81.
     *
     * @return float Returns the tds81.
     */
    public function getTds81() {
        return $this->tds81;
    }

    /**
     * Get the tds82.
     *
     * @return float Returns the tds82.
     */
    public function getTds82() {
        return $this->tds82;
    }

    /**
     * Get the tds84.
     *
     * @return float Returns the tds84.
     */
    public function getTds84() {
        return $this->tds84;
    }

    /**
     * Get the tds85.
     *
     * @return float Returns the tds85.
     */
    public function getTds85() {
        return $this->tds85;
    }

    /**
     * Get the tds86.
     *
     * @return float Returns the tds86.
     */
    public function getTds86() {
        return $this->tds86;
    }

    /**
     * Get the tds87.
     *
     * @return float Returns the tds87.
     */
    public function getTds87() {
        return $this->tds87;
    }

    /**
     * Get the tds88.
     *
     * @return float Returns the tds88.
     */
    public function getTds88() {
        return $this->tds88;
    }

    /**
     * Get the tds89.
     *
     * @return float Returns the tds89.
     */
    public function getTds89() {
        return $this->tds89;
    }

    /**
     * Get the tds90.
     *
     * @return float Returns the tds90.
     */
    public function getTds90() {
        return $this->tds90;
    }

    /**
     * Get the tds91.
     *
     * @return float Returns the tds91.
     */
    public function getTds91() {
        return $this->tds91;
    }

    /**
     * Get the tds92.
     *
     * @return float Returns the tds92.
     */
    public function getTds92() {
        return $this->tds92;
    }

    /**
     * Get the tds93.
     *
     * @return float Returns the tds93.
     */
    public function getTds93() {
        return $this->tds93;
    }

    /**
     * Get the tds94.
     *
     * @return float Returns the tds94.
     */
    public function getTds94() {
        return $this->tds94;
    }

    /**
     * Get the tds95.
     *
     * @return float Returns the tds95.
     */
    public function getTds95() {
        return $this->tds95;
    }

    /**
     * Get the tds abatt frais pro.
     *
     * @return float Returns the tds abatt frais pro.
     */
    public function getTdsAbattFraisPro() {
        return $this->tdsAbattFraisPro;
    }

    /**
     * Get the tds alloc chom.
     *
     * @return float Returns the tds alloc chom.
     */
    public function getTdsAllocChom() {
        return $this->tdsAllocChom;
    }

    /**
     * Get the tds alloc compl ijss.
     *
     * @return float Returns the tds alloc compl ijss.
     */
    public function getTdsAllocComplIjss() {
        return $this->tdsAllocComplIjss;
    }

    /**
     * Get the tds alloc retraite.
     *
     * @return float Returns the tds alloc retraite.
     */
    public function getTdsAllocRetraite() {
        return $this->tdsAllocRetraite;
    }

    /**
     * Get the tds contrib ce cheques vac.
     *
     * @return float Returns the tds contrib ce cheques vac.
     */
    public function getTdsContribCeChequesVac() {
        return $this->tdsContribCeChequesVac;
    }

    /**
     * Get the tds cumul n.
     *
     * @return float Returns the tds cumul n.
     */
    public function getTdsCumulN() {
        return $this->tdsCumulN;
    }

    /**
     * Get the tds flag raz.
     *
     * @return int Returns the tds flag raz.
     */
    public function getTdsFlagRaz() {
        return $this->tdsFlagRaz;
    }

    /**
     * Get the tds indemn depart retraite.
     *
     * @return float Returns the tds indemn depart retraite.
     */
    public function getTdsIndemnDepartRetraite() {
        return $this->tdsIndemnDepartRetraite;
    }

    /**
     * Get the tds indemn imposables.
     *
     * @return float Returns the tds indemn imposables.
     */
    public function getTdsIndemnImposables() {
        return $this->tdsIndemnImposables;
    }

    /**
     * Get the tds remb frais pro.
     *
     * @return float Returns the tds remb frais pro.
     */
    public function getTdsRembFraisPro() {
        return $this->tdsRembFraisPro;
    }

    /**
     * Get the tds somme exo taxe sal.
     *
     * @return float Returns the tds somme exo taxe sal.
     */
    public function getTdsSommeExoTaxeSal() {
        return $this->tdsSommeExoTaxeSal;
    }

    /**
     * Get the tds sup120.
     *
     * @return string Returns the tds sup120.
     */
    public function getTdsSup120() {
        return $this->tdsSup120;
    }

    /**
     * Get the tds sup1200.
     *
     * @return string Returns the tds sup1200.
     */
    public function getTdsSup1200() {
        return $this->tdsSup1200;
    }

    /**
     * Get the total plaf.
     *
     * @return float Returns the total plaf.
     */
    public function getTotalPlaf() {
        return $this->totalPlaf;
    }

    /**
     * Set the base calc tds142.
     *
     * @param float $baseCalcTds142 The base calc tds142.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setBaseCalcTds142($baseCalcTds142) {
        $this->baseCalcTds142 = $baseCalcTds142;
        return $this;
    }

    /**
     * Set the code at per.
     *
     * @param int $codeAtPer The code at per.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setCodeAtPer($codeAtPer) {
        $this->codeAtPer = $codeAtPer;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int $codeEtablissement The code etablissement.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setCodeEtablissement($codeEtablissement) {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the cum net impos.
     *
     * @param float $cumNetImpos The cum net impos.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setCumNetImpos($cumNetImpos) {
        $this->cumNetImpos = $cumNetImpos;
        return $this;
    }

    /**
     * Set the debut periode decl.
     *
     * @param DateTime|null $debutPeriodeDecl The debut periode decl.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setDebutPeriodeDecl(DateTime $debutPeriodeDecl = null) {
        $this->debutPeriodeDecl = $debutPeriodeDecl;
        return $this;
    }

    /**
     * Set the derniere periode annee.
     *
     * @param bool $dernierePeriodeAnnee The derniere periode annee.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setDernierePeriodeAnnee($dernierePeriodeAnnee) {
        $this->dernierePeriodeAnnee = $dernierePeriodeAnnee;
        return $this;
    }

    /**
     * Set the fin periode decl.
     *
     * @param DateTime|null $finPeriodeDecl The fin periode decl.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setFinPeriodeDecl(DateTime $finPeriodeDecl = null) {
        $this->finPeriodeDecl = $finPeriodeDecl;
        return $this;
    }

    /**
     * Set the indemn impat.
     *
     * @param float $indemnImpat The indemn impat.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setIndemnImpat($indemnImpat) {
        $this->indemnImpat = $indemnImpat;
        return $this;
    }

    /**
     * Set the montant h sup compl exo.
     *
     * @param float $montantHSupComplExo The montant h sup compl exo.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setMontantHSupComplExo($montantHSupComplExo) {
        $this->montantHSupComplExo = $montantHSupComplExo;
        return $this;
    }

    /**
     * Set the nb heure sal.
     *
     * @param float $nbHeureSal The nb heure sal.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setNbHeureSal($nbHeureSal) {
        $this->nbHeureSal = $nbHeureSal;
        return $this;
    }

    /**
     * Set the nb heure trav.
     *
     * @param float $nbHeureTrav The nb heure trav.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setNbHeureTrav($nbHeureTrav) {
        $this->nbHeureTrav = $nbHeureTrav;
        return $this;
    }

    /**
     * Set the nb per paie.
     *
     * @param int $nbPerPaie The nb per paie.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setNbPerPaie($nbPerPaie) {
        $this->nbPerPaie = $nbPerPaie;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param string $numero The numero.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setNumero($numero) {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the numero ordre.
     *
     * @param int $numeroOrdre The numero ordre.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setNumeroOrdre($numeroOrdre) {
        $this->numeroOrdre = $numeroOrdre;
        return $this;
    }

    /**
     * Set the particip serv pers.
     *
     * @param float $participServPers The particip serv pers.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setParticipServPers($participServPers) {
        $this->participServPers = $participServPers;
        return $this;
    }

    /**
     * Set the premiere periode annee.
     *
     * @param bool $premierePeriodeAnnee The premiere periode annee.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setPremierePeriodeAnnee($premierePeriodeAnnee) {
        $this->premierePeriodeAnnee = $premierePeriodeAnnee;
        return $this;
    }

    /**
     * Set the tds100.
     *
     * @param float $tds100 The tds100.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds100($tds100) {
        $this->tds100 = $tds100;
        return $this;
    }

    /**
     * Set the tds102.
     *
     * @param float $tds102 The tds102.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds102($tds102) {
        $this->tds102 = $tds102;
        return $this;
    }

    /**
     * Set the tds103.
     *
     * @param float $tds103 The tds103.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds103($tds103) {
        $this->tds103 = $tds103;
        return $this;
    }

    /**
     * Set the tds105.
     *
     * @param float $tds105 The tds105.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds105($tds105) {
        $this->tds105 = $tds105;
        return $this;
    }

    /**
     * Set the tds107.
     *
     * @param bool $tds107 The tds107.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds107($tds107) {
        $this->tds107 = $tds107;
        return $this;
    }

    /**
     * Set the tds108.
     *
     * @param bool $tds108 The tds108.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds108($tds108) {
        $this->tds108 = $tds108;
        return $this;
    }

    /**
     * Set the tds109.
     *
     * @param bool $tds109 The tds109.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds109($tds109) {
        $this->tds109 = $tds109;
        return $this;
    }

    /**
     * Set the tds110.
     *
     * @param bool $tds110 The tds110.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds110($tds110) {
        $this->tds110 = $tds110;
        return $this;
    }

    /**
     * Set the tds111.
     *
     * @param bool $tds111 The tds111.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds111($tds111) {
        $this->tds111 = $tds111;
        return $this;
    }

    /**
     * Set the tds112.
     *
     * @param float $tds112 The tds112.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds112($tds112) {
        $this->tds112 = $tds112;
        return $this;
    }

    /**
     * Set the tds113.
     *
     * @param bool $tds113 The tds113.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds113($tds113) {
        $this->tds113 = $tds113;
        return $this;
    }

    /**
     * Set the tds117.
     *
     * @param float $tds117 The tds117.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds117($tds117) {
        $this->tds117 = $tds117;
        return $this;
    }

    /**
     * Set the tds119.
     *
     * @param bool $tds119 The tds119.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds119($tds119) {
        $this->tds119 = $tds119;
        return $this;
    }

    /**
     * Set the tds120.
     *
     * @param bool $tds120 The tds120.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds120($tds120) {
        $this->tds120 = $tds120;
        return $this;
    }

    /**
     * Set the tds121.
     *
     * @param bool $tds121 The tds121.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds121($tds121) {
        $this->tds121 = $tds121;
        return $this;
    }

    /**
     * Set the tds122.
     *
     * @param bool $tds122 The tds122.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds122($tds122) {
        $this->tds122 = $tds122;
        return $this;
    }

    /**
     * Set the tds125.
     *
     * @param float $tds125 The tds125.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds125($tds125) {
        $this->tds125 = $tds125;
        return $this;
    }

    /**
     * Set the tds127.
     *
     * @param float $tds127 The tds127.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds127($tds127) {
        $this->tds127 = $tds127;
        return $this;
    }

    /**
     * Set the tds128.
     *
     * @param string $tds128 The tds128.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds128($tds128) {
        $this->tds128 = $tds128;
        return $this;
    }

    /**
     * Set the tds132.
     *
     * @param float $tds132 The tds132.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds132($tds132) {
        $this->tds132 = $tds132;
        return $this;
    }

    /**
     * Set the tds133.
     *
     * @param string $tds133 The tds133.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds133($tds133) {
        $this->tds133 = $tds133;
        return $this;
    }

    /**
     * Set the tds134.
     *
     * @param float $tds134 The tds134.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds134($tds134) {
        $this->tds134 = $tds134;
        return $this;
    }

    /**
     * Set the tds135.
     *
     * @param float $tds135 The tds135.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds135($tds135) {
        $this->tds135 = $tds135;
        return $this;
    }

    /**
     * Set the tds136.
     *
     * @param float $tds136 The tds136.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds136($tds136) {
        $this->tds136 = $tds136;
        return $this;
    }

    /**
     * Set the tds137.
     *
     * @param float $tds137 The tds137.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds137($tds137) {
        $this->tds137 = $tds137;
        return $this;
    }

    /**
     * Set the tds139.
     *
     * @param string $tds139 The tds139.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds139($tds139) {
        $this->tds139 = $tds139;
        return $this;
    }

    /**
     * Set the tds141.
     *
     * @param float $tds141 The tds141.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds141($tds141) {
        $this->tds141 = $tds141;
        return $this;
    }

    /**
     * Set the tds142.
     *
     * @param float $tds142 The tds142.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds142($tds142) {
        $this->tds142 = $tds142;
        return $this;
    }

    /**
     * Set the tds142 deja calcule.
     *
     * @param bool $tds142DejaCalcule The tds142 deja calcule.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds142DejaCalcule($tds142DejaCalcule) {
        $this->tds142DejaCalcule = $tds142DejaCalcule;
        return $this;
    }

    /**
     * Set the tds75.
     *
     * @param int $tds75 The tds75.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds75($tds75) {
        $this->tds75 = $tds75;
        return $this;
    }

    /**
     * Set the tds77.
     *
     * @param string $tds77 The tds77.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds77($tds77) {
        $this->tds77 = $tds77;
        return $this;
    }

    /**
     * Set the tds78.
     *
     * @param bool $tds78 The tds78.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds78($tds78) {
        $this->tds78 = $tds78;
        return $this;
    }

    /**
     * Set the tds81.
     *
     * @param float $tds81 The tds81.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds81($tds81) {
        $this->tds81 = $tds81;
        return $this;
    }

    /**
     * Set the tds82.
     *
     * @param float $tds82 The tds82.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds82($tds82) {
        $this->tds82 = $tds82;
        return $this;
    }

    /**
     * Set the tds84.
     *
     * @param float $tds84 The tds84.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds84($tds84) {
        $this->tds84 = $tds84;
        return $this;
    }

    /**
     * Set the tds85.
     *
     * @param float $tds85 The tds85.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds85($tds85) {
        $this->tds85 = $tds85;
        return $this;
    }

    /**
     * Set the tds86.
     *
     * @param float $tds86 The tds86.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds86($tds86) {
        $this->tds86 = $tds86;
        return $this;
    }

    /**
     * Set the tds87.
     *
     * @param float $tds87 The tds87.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds87($tds87) {
        $this->tds87 = $tds87;
        return $this;
    }

    /**
     * Set the tds88.
     *
     * @param float $tds88 The tds88.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds88($tds88) {
        $this->tds88 = $tds88;
        return $this;
    }

    /**
     * Set the tds89.
     *
     * @param float $tds89 The tds89.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds89($tds89) {
        $this->tds89 = $tds89;
        return $this;
    }

    /**
     * Set the tds90.
     *
     * @param float $tds90 The tds90.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds90($tds90) {
        $this->tds90 = $tds90;
        return $this;
    }

    /**
     * Set the tds91.
     *
     * @param float $tds91 The tds91.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds91($tds91) {
        $this->tds91 = $tds91;
        return $this;
    }

    /**
     * Set the tds92.
     *
     * @param float $tds92 The tds92.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds92($tds92) {
        $this->tds92 = $tds92;
        return $this;
    }

    /**
     * Set the tds93.
     *
     * @param float $tds93 The tds93.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds93($tds93) {
        $this->tds93 = $tds93;
        return $this;
    }

    /**
     * Set the tds94.
     *
     * @param float $tds94 The tds94.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds94($tds94) {
        $this->tds94 = $tds94;
        return $this;
    }

    /**
     * Set the tds95.
     *
     * @param float $tds95 The tds95.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTds95($tds95) {
        $this->tds95 = $tds95;
        return $this;
    }

    /**
     * Set the tds abatt frais pro.
     *
     * @param float $tdsAbattFraisPro The tds abatt frais pro.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTdsAbattFraisPro($tdsAbattFraisPro) {
        $this->tdsAbattFraisPro = $tdsAbattFraisPro;
        return $this;
    }

    /**
     * Set the tds alloc chom.
     *
     * @param float $tdsAllocChom The tds alloc chom.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTdsAllocChom($tdsAllocChom) {
        $this->tdsAllocChom = $tdsAllocChom;
        return $this;
    }

    /**
     * Set the tds alloc compl ijss.
     *
     * @param float $tdsAllocComplIjss The tds alloc compl ijss.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTdsAllocComplIjss($tdsAllocComplIjss) {
        $this->tdsAllocComplIjss = $tdsAllocComplIjss;
        return $this;
    }

    /**
     * Set the tds alloc retraite.
     *
     * @param float $tdsAllocRetraite The tds alloc retraite.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTdsAllocRetraite($tdsAllocRetraite) {
        $this->tdsAllocRetraite = $tdsAllocRetraite;
        return $this;
    }

    /**
     * Set the tds contrib ce cheques vac.
     *
     * @param float $tdsContribCeChequesVac The tds contrib ce cheques vac.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTdsContribCeChequesVac($tdsContribCeChequesVac) {
        $this->tdsContribCeChequesVac = $tdsContribCeChequesVac;
        return $this;
    }

    /**
     * Set the tds cumul n.
     *
     * @param float $tdsCumulN The tds cumul n.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTdsCumulN($tdsCumulN) {
        $this->tdsCumulN = $tdsCumulN;
        return $this;
    }

    /**
     * Set the tds flag raz.
     *
     * @param int $tdsFlagRaz The tds flag raz.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTdsFlagRaz($tdsFlagRaz) {
        $this->tdsFlagRaz = $tdsFlagRaz;
        return $this;
    }

    /**
     * Set the tds indemn depart retraite.
     *
     * @param float $tdsIndemnDepartRetraite The tds indemn depart retraite.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTdsIndemnDepartRetraite($tdsIndemnDepartRetraite) {
        $this->tdsIndemnDepartRetraite = $tdsIndemnDepartRetraite;
        return $this;
    }

    /**
     * Set the tds indemn imposables.
     *
     * @param float $tdsIndemnImposables The tds indemn imposables.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTdsIndemnImposables($tdsIndemnImposables) {
        $this->tdsIndemnImposables = $tdsIndemnImposables;
        return $this;
    }

    /**
     * Set the tds remb frais pro.
     *
     * @param float $tdsRembFraisPro The tds remb frais pro.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTdsRembFraisPro($tdsRembFraisPro) {
        $this->tdsRembFraisPro = $tdsRembFraisPro;
        return $this;
    }

    /**
     * Set the tds somme exo taxe sal.
     *
     * @param float $tdsSommeExoTaxeSal The tds somme exo taxe sal.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTdsSommeExoTaxeSal($tdsSommeExoTaxeSal) {
        $this->tdsSommeExoTaxeSal = $tdsSommeExoTaxeSal;
        return $this;
    }

    /**
     * Set the tds sup120.
     *
     * @param string $tdsSup120 The tds sup120.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTdsSup120($tdsSup120) {
        $this->tdsSup120 = $tdsSup120;
        return $this;
    }

    /**
     * Set the tds sup1200.
     *
     * @param string $tdsSup1200 The tds sup1200.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTdsSup1200($tdsSup1200) {
        $this->tdsSup1200 = $tdsSup1200;
        return $this;
    }

    /**
     * Set the total plaf.
     *
     * @param float $totalPlaf The total plaf.
     * @return EmpTdsCalcul Returns this Emp tds calcul.
     */
    public function setTotalPlaf($totalPlaf) {
        $this->totalPlaf = $totalPlaf;
        return $this;
    }
}
