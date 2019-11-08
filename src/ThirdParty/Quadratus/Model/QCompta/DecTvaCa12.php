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

use DateTime;

/**
 * Dec tva ca12.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class DecTvaCa12 {

    /**
     * Date cession.
     *
     * @var DateTime|null
     */
    private $dateCession;

    /**
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * Tx imposition.
     *
     * @var float
     */
    private $txImposition;

    /**
     * Type ca12.
     *
     * @var string
     */
    private $typeCa12;

    /**
     * z0008.
     *
     * @var float
     */
    private $z0008;

    /**
     * z0018.
     *
     * @var float
     */
    private $z0018;

    /**
     * z0019.
     *
     * @var float
     */
    private $z0019;

    /**
     * z0020.
     *
     * @var float
     */
    private $z0020;

    /**
     * z0028.
     *
     * @var float
     */
    private $z0028;

    /**
     * z0030b.
     *
     * @var float
     */
    private $z0030b;

    /**
     * z0058.
     *
     * @var float
     */
    private $z0058;

    /**
     * z0704.
     *
     * @var float
     */
    private $z0704;

    /**
     * z0709.
     *
     * @var float
     */
    private $z0709;

    /**
     * z0970.
     *
     * @var float
     */
    private $z0970;

    /**
     * z0970b.
     *
     * @var float
     */
    private $z0970b;

    /**
     * z0980.
     *
     * @var float
     */
    private $z0980;

    /**
     * z0980b.
     *
     * @var float
     */
    private $z0980b;

    /**
     * z0981.
     *
     * @var float
     */
    private $z0981;

    /**
     * z0981b.
     *
     * @var float
     */
    private $z0981b;

    /**
     * z0982.
     *
     * @var float
     */
    private $z0982;

    /**
     * z0983.
     *
     * @var float
     */
    private $z0983;

    /**
     * z3240.
     *
     * @var float
     */
    private $z3240;

    /**
     * z32 code.
     *
     * @var string
     */
    private $z32Code;

    /**
     * z32 libelle.
     *
     * @var string
     */
    private $z32Libelle;

    /**
     * z32 taxe.
     *
     * @var float
     */
    private $z32Taxe;

    /**
     * z35 b code.
     *
     * @var string
     */
    private $z35BCode;

    /**
     * z35 b libelle.
     *
     * @var string
     */
    private $z35BLibelle;

    /**
     * z35 b taxe.
     *
     * @var float
     */
    private $z35BTaxe;

    /**
     * z35 code.
     *
     * @var string
     */
    private $z35Code;

    /**
     * z35 libelle.
     *
     * @var string
     */
    private $z35Libelle;

    /**
     * z35 taxe.
     *
     * @var float
     */
    private $z35Taxe;

    /**
     * z4202.
     *
     * @var float
     */
    private $z4202;

    /**
     * z4213.
     *
     * @var float
     */
    private $z4213;

    /**
     * z4216.
     *
     * @var float
     */
    private $z4216;

    /**
     * z4217.
     *
     * @var float
     */
    private $z4217;

    /**
     * z4218.
     *
     * @var float
     */
    private $z4218;

    /**
     * z4220.
     *
     * @var float
     */
    private $z4220;

    /**
     * z45 ca12.
     *
     * @var float
     */
    private $z45Ca12;

    /**
     * z45 ca12 code.
     *
     * @var string
     */
    private $z45Ca12Code;

    /**
     * z45 ca12 libelle.
     *
     * @var string
     */
    private $z45Ca12Libelle;

    /**
     * z47 ca12.
     *
     * @var float
     */
    private $z47Ca12;

    /**
     * z47 ca12 code.
     *
     * @var string
     */
    private $z47Ca12Code;

    /**
     * z47 ca12 libelle.
     *
     * @var string
     */
    private $z47Ca12Libelle;

    /**
     * z4 aca12.
     *
     * @var float
     */
    private $z4Aca12;

    /**
     * z4 aca12 code.
     *
     * @var string
     */
    private $z4Aca12Code;

    /**
     * z4 aca12 libelle.
     *
     * @var string
     */
    private $z4Aca12Libelle;

    /**
     * z4 bca12.
     *
     * @var float
     */
    private $z4Bca12;

    /**
     * z4 bca12 code.
     *
     * @var string
     */
    private $z4Bca12Code;

    /**
     * z4 bca12 libelle.
     *
     * @var string
     */
    private $z4Bca12Libelle;

    /**
     * z4 cca12.
     *
     * @var float
     */
    private $z4Cca12;

    /**
     * z4 cca12 code.
     *
     * @var string
     */
    private $z4Cca12Code;

    /**
     * z4 cca12 libelle.
     *
     * @var string
     */
    private $z4Cca12Libelle;

    /**
     * z5b code.
     *
     * @var string
     */
    private $z5bCode;

    /**
     * z5b ht.
     *
     * @var float
     */
    private $z5bHt;

    /**
     * z5b libelle.
     *
     * @var string
     */
    private $z5bLibelle;

    /**
     * z5b taxe.
     *
     * @var float
     */
    private $z5bTaxe;

    /**
     * z7b code.
     *
     * @var string
     */
    private $z7bCode;

    /**
     * z7b ht.
     *
     * @var float
     */
    private $z7bHt;

    /**
     * z7b libelle.
     *
     * @var string
     */
    private $z7bLibelle;

    /**
     * z7b taxe.
     *
     * @var float
     */
    private $z7bTaxe;

    /**
     * z8004.
     *
     * @var float
     */
    private $z8004;

    /**
     * z acompte deduit1.
     *
     * @var bool
     */
    private $zAcompteDeduit1;

    /**
     * z acompte deduit2.
     *
     * @var bool
     */
    private $zAcompteDeduit2;

    /**
     * z acompte deduit3.
     *
     * @var bool
     */
    private $zAcompteDeduit3;

    /**
     * z acompte deduit4.
     *
     * @var bool
     */
    private $zAcompteDeduit4;

    /**
     * z annee acompte1.
     *
     * @var int
     */
    private $zAnneeAcompte1;

    /**
     * z annee acompte2.
     *
     * @var int
     */
    private $zAnneeAcompte2;

    /**
     * z annee acompte3.
     *
     * @var int
     */
    private $zAnneeAcompte3;

    /**
     * z annee acompte4.
     *
     * @var int
     */
    private $zAnneeAcompte4;

    /**
     * z col1 acompte1.
     *
     * @var float
     */
    private $zCol1Acompte1;

    /**
     * z col1 acompte2.
     *
     * @var float
     */
    private $zCol1Acompte2;

    /**
     * z col1 acompte3.
     *
     * @var float
     */
    private $zCol1Acompte3;

    /**
     * z col1 acompte4.
     *
     * @var float
     */
    private $zCol1Acompte4;

    /**
     * z col2 acompte1.
     *
     * @var float
     */
    private $zCol2Acompte1;

    /**
     * z col2 acompte2.
     *
     * @var float
     */
    private $zCol2Acompte2;

    /**
     * z col2 acompte3.
     *
     * @var float
     */
    private $zCol2Acompte3;

    /**
     * z col2 acompte4.
     *
     * @var float
     */
    private $zCol2Acompte4;

    /**
     * z excedent versement.
     *
     * @var float
     */
    private $zExcedentVersement;

    /**
     * z nom demandeur rbt.
     *
     * @var string
     */
    private $zNomDemandeurRbt;

    /**
     * z num msa.
     *
     * @var string
     */
    private $zNumMsa;

    /**
     * z rbt demande.
     *
     * @var float
     */
    private $zRbtDemande;

    /**
     * z rbt qualite.
     *
     * @var string
     */
    private $zRbtQualite;

    /**
     * z rbt ville.
     *
     * @var string
     */
    private $zRbtVille;

    /**
     * z rbtbic.
     *
     * @var string
     */
    private $zRbtbic;

    /**
     * z rbtiban.
     *
     * @var string
     */
    private $zRbtiban;

    /**
     * z rbtrib.
     *
     * @var string
     */
    private $zRbtrib;

    /**
     * z solde a payer.
     *
     * @var float
     */
    private $zSoldeAPayer;

    /**
     * z surface agr.
     *
     * @var int
     */
    private $zSurfaceAgr;

    /**
     * z taxes fiscales.
     *
     * @var float
     */
    private $zTaxesFiscales;

    /**
     * z ya demande rbt.
     *
     * @var bool
     */
    private $zYaDemandeRbt;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the date cession.
     *
     * @return DateTime|null Returns the date cession.
     */
    public function getDateCession() {
        return $this->dateCession;
    }

    /**
     * Get the periode.
     *
     * @return DateTime|null Returns the periode.
     */
    public function getPeriode() {
        return $this->periode;
    }

    /**
     * Get the tx imposition.
     *
     * @return float Returns the tx imposition.
     */
    public function getTxImposition() {
        return $this->txImposition;
    }

    /**
     * Get the type ca12.
     *
     * @return string Returns the type ca12.
     */
    public function getTypeCa12() {
        return $this->typeCa12;
    }

    /**
     * Get the z0008.
     *
     * @return float Returns the z0008.
     */
    public function getz0008() {
        return $this->z0008;
    }

    /**
     * Get the z0018.
     *
     * @return float Returns the z0018.
     */
    public function getz0018() {
        return $this->z0018;
    }

    /**
     * Get the z0019.
     *
     * @return float Returns the z0019.
     */
    public function getz0019() {
        return $this->z0019;
    }

    /**
     * Get the z0020.
     *
     * @return float Returns the z0020.
     */
    public function getz0020() {
        return $this->z0020;
    }

    /**
     * Get the z0028.
     *
     * @return float Returns the z0028.
     */
    public function getz0028() {
        return $this->z0028;
    }

    /**
     * Get the z0030b.
     *
     * @return float Returns the z0030b.
     */
    public function getz0030b() {
        return $this->z0030b;
    }

    /**
     * Get the z0058.
     *
     * @return float Returns the z0058.
     */
    public function getz0058() {
        return $this->z0058;
    }

    /**
     * Get the z0704.
     *
     * @return float Returns the z0704.
     */
    public function getz0704() {
        return $this->z0704;
    }

    /**
     * Get the z0709.
     *
     * @return float Returns the z0709.
     */
    public function getz0709() {
        return $this->z0709;
    }

    /**
     * Get the z0970.
     *
     * @return float Returns the z0970.
     */
    public function getz0970() {
        return $this->z0970;
    }

    /**
     * Get the z0970b.
     *
     * @return float Returns the z0970b.
     */
    public function getz0970b() {
        return $this->z0970b;
    }

    /**
     * Get the z0980.
     *
     * @return float Returns the z0980.
     */
    public function getz0980() {
        return $this->z0980;
    }

    /**
     * Get the z0980b.
     *
     * @return float Returns the z0980b.
     */
    public function getz0980b() {
        return $this->z0980b;
    }

    /**
     * Get the z0981.
     *
     * @return float Returns the z0981.
     */
    public function getz0981() {
        return $this->z0981;
    }

    /**
     * Get the z0981b.
     *
     * @return float Returns the z0981b.
     */
    public function getz0981b() {
        return $this->z0981b;
    }

    /**
     * Get the z0982.
     *
     * @return float Returns the z0982.
     */
    public function getz0982() {
        return $this->z0982;
    }

    /**
     * Get the z0983.
     *
     * @return float Returns the z0983.
     */
    public function getz0983() {
        return $this->z0983;
    }

    /**
     * Get the z3240.
     *
     * @return float Returns the z3240.
     */
    public function getz3240() {
        return $this->z3240;
    }

    /**
     * Get the z32 code.
     *
     * @return string Returns the z32 code.
     */
    public function getz32Code() {
        return $this->z32Code;
    }

    /**
     * Get the z32 libelle.
     *
     * @return string Returns the z32 libelle.
     */
    public function getz32Libelle() {
        return $this->z32Libelle;
    }

    /**
     * Get the z32 taxe.
     *
     * @return float Returns the z32 taxe.
     */
    public function getz32Taxe() {
        return $this->z32Taxe;
    }

    /**
     * Get the z35 b code.
     *
     * @return string Returns the z35 b code.
     */
    public function getz35BCode() {
        return $this->z35BCode;
    }

    /**
     * Get the z35 b libelle.
     *
     * @return string Returns the z35 b libelle.
     */
    public function getz35BLibelle() {
        return $this->z35BLibelle;
    }

    /**
     * Get the z35 b taxe.
     *
     * @return float Returns the z35 b taxe.
     */
    public function getz35BTaxe() {
        return $this->z35BTaxe;
    }

    /**
     * Get the z35 code.
     *
     * @return string Returns the z35 code.
     */
    public function getz35Code() {
        return $this->z35Code;
    }

    /**
     * Get the z35 libelle.
     *
     * @return string Returns the z35 libelle.
     */
    public function getz35Libelle() {
        return $this->z35Libelle;
    }

    /**
     * Get the z35 taxe.
     *
     * @return float Returns the z35 taxe.
     */
    public function getz35Taxe() {
        return $this->z35Taxe;
    }

    /**
     * Get the z4202.
     *
     * @return float Returns the z4202.
     */
    public function getz4202() {
        return $this->z4202;
    }

    /**
     * Get the z4213.
     *
     * @return float Returns the z4213.
     */
    public function getz4213() {
        return $this->z4213;
    }

    /**
     * Get the z4216.
     *
     * @return float Returns the z4216.
     */
    public function getz4216() {
        return $this->z4216;
    }

    /**
     * Get the z4217.
     *
     * @return float Returns the z4217.
     */
    public function getz4217() {
        return $this->z4217;
    }

    /**
     * Get the z4218.
     *
     * @return float Returns the z4218.
     */
    public function getz4218() {
        return $this->z4218;
    }

    /**
     * Get the z4220.
     *
     * @return float Returns the z4220.
     */
    public function getz4220() {
        return $this->z4220;
    }

    /**
     * Get the z45 ca12.
     *
     * @return float Returns the z45 ca12.
     */
    public function getz45Ca12() {
        return $this->z45Ca12;
    }

    /**
     * Get the z45 ca12 code.
     *
     * @return string Returns the z45 ca12 code.
     */
    public function getz45Ca12Code() {
        return $this->z45Ca12Code;
    }

    /**
     * Get the z45 ca12 libelle.
     *
     * @return string Returns the z45 ca12 libelle.
     */
    public function getz45Ca12Libelle() {
        return $this->z45Ca12Libelle;
    }

    /**
     * Get the z47 ca12.
     *
     * @return float Returns the z47 ca12.
     */
    public function getz47Ca12() {
        return $this->z47Ca12;
    }

    /**
     * Get the z47 ca12 code.
     *
     * @return string Returns the z47 ca12 code.
     */
    public function getz47Ca12Code() {
        return $this->z47Ca12Code;
    }

    /**
     * Get the z47 ca12 libelle.
     *
     * @return string Returns the z47 ca12 libelle.
     */
    public function getz47Ca12Libelle() {
        return $this->z47Ca12Libelle;
    }

    /**
     * Get the z4 aca12.
     *
     * @return float Returns the z4 aca12.
     */
    public function getz4Aca12() {
        return $this->z4Aca12;
    }

    /**
     * Get the z4 aca12 code.
     *
     * @return string Returns the z4 aca12 code.
     */
    public function getz4Aca12Code() {
        return $this->z4Aca12Code;
    }

    /**
     * Get the z4 aca12 libelle.
     *
     * @return string Returns the z4 aca12 libelle.
     */
    public function getz4Aca12Libelle() {
        return $this->z4Aca12Libelle;
    }

    /**
     * Get the z4 bca12.
     *
     * @return float Returns the z4 bca12.
     */
    public function getz4Bca12() {
        return $this->z4Bca12;
    }

    /**
     * Get the z4 bca12 code.
     *
     * @return string Returns the z4 bca12 code.
     */
    public function getz4Bca12Code() {
        return $this->z4Bca12Code;
    }

    /**
     * Get the z4 bca12 libelle.
     *
     * @return string Returns the z4 bca12 libelle.
     */
    public function getz4Bca12Libelle() {
        return $this->z4Bca12Libelle;
    }

    /**
     * Get the z4 cca12.
     *
     * @return float Returns the z4 cca12.
     */
    public function getz4Cca12() {
        return $this->z4Cca12;
    }

    /**
     * Get the z4 cca12 code.
     *
     * @return string Returns the z4 cca12 code.
     */
    public function getz4Cca12Code() {
        return $this->z4Cca12Code;
    }

    /**
     * Get the z4 cca12 libelle.
     *
     * @return string Returns the z4 cca12 libelle.
     */
    public function getz4Cca12Libelle() {
        return $this->z4Cca12Libelle;
    }

    /**
     * Get the z5b code.
     *
     * @return string Returns the z5b code.
     */
    public function getz5bCode() {
        return $this->z5bCode;
    }

    /**
     * Get the z5b ht.
     *
     * @return float Returns the z5b ht.
     */
    public function getz5bHt() {
        return $this->z5bHt;
    }

    /**
     * Get the z5b libelle.
     *
     * @return string Returns the z5b libelle.
     */
    public function getz5bLibelle() {
        return $this->z5bLibelle;
    }

    /**
     * Get the z5b taxe.
     *
     * @return float Returns the z5b taxe.
     */
    public function getz5bTaxe() {
        return $this->z5bTaxe;
    }

    /**
     * Get the z7b code.
     *
     * @return string Returns the z7b code.
     */
    public function getz7bCode() {
        return $this->z7bCode;
    }

    /**
     * Get the z7b ht.
     *
     * @return float Returns the z7b ht.
     */
    public function getz7bHt() {
        return $this->z7bHt;
    }

    /**
     * Get the z7b libelle.
     *
     * @return string Returns the z7b libelle.
     */
    public function getz7bLibelle() {
        return $this->z7bLibelle;
    }

    /**
     * Get the z7b taxe.
     *
     * @return float Returns the z7b taxe.
     */
    public function getz7bTaxe() {
        return $this->z7bTaxe;
    }

    /**
     * Get the z8004.
     *
     * @return float Returns the z8004.
     */
    public function getz8004() {
        return $this->z8004;
    }

    /**
     * Get the z acompte deduit1.
     *
     * @return bool Returns the z acompte deduit1.
     */
    public function getzAcompteDeduit1() {
        return $this->zAcompteDeduit1;
    }

    /**
     * Get the z acompte deduit2.
     *
     * @return bool Returns the z acompte deduit2.
     */
    public function getzAcompteDeduit2() {
        return $this->zAcompteDeduit2;
    }

    /**
     * Get the z acompte deduit3.
     *
     * @return bool Returns the z acompte deduit3.
     */
    public function getzAcompteDeduit3() {
        return $this->zAcompteDeduit3;
    }

    /**
     * Get the z acompte deduit4.
     *
     * @return bool Returns the z acompte deduit4.
     */
    public function getzAcompteDeduit4() {
        return $this->zAcompteDeduit4;
    }

    /**
     * Get the z annee acompte1.
     *
     * @return int Returns the z annee acompte1.
     */
    public function getzAnneeAcompte1() {
        return $this->zAnneeAcompte1;
    }

    /**
     * Get the z annee acompte2.
     *
     * @return int Returns the z annee acompte2.
     */
    public function getzAnneeAcompte2() {
        return $this->zAnneeAcompte2;
    }

    /**
     * Get the z annee acompte3.
     *
     * @return int Returns the z annee acompte3.
     */
    public function getzAnneeAcompte3() {
        return $this->zAnneeAcompte3;
    }

    /**
     * Get the z annee acompte4.
     *
     * @return int Returns the z annee acompte4.
     */
    public function getzAnneeAcompte4() {
        return $this->zAnneeAcompte4;
    }

    /**
     * Get the z col1 acompte1.
     *
     * @return float Returns the z col1 acompte1.
     */
    public function getzCol1Acompte1() {
        return $this->zCol1Acompte1;
    }

    /**
     * Get the z col1 acompte2.
     *
     * @return float Returns the z col1 acompte2.
     */
    public function getzCol1Acompte2() {
        return $this->zCol1Acompte2;
    }

    /**
     * Get the z col1 acompte3.
     *
     * @return float Returns the z col1 acompte3.
     */
    public function getzCol1Acompte3() {
        return $this->zCol1Acompte3;
    }

    /**
     * Get the z col1 acompte4.
     *
     * @return float Returns the z col1 acompte4.
     */
    public function getzCol1Acompte4() {
        return $this->zCol1Acompte4;
    }

    /**
     * Get the z col2 acompte1.
     *
     * @return float Returns the z col2 acompte1.
     */
    public function getzCol2Acompte1() {
        return $this->zCol2Acompte1;
    }

    /**
     * Get the z col2 acompte2.
     *
     * @return float Returns the z col2 acompte2.
     */
    public function getzCol2Acompte2() {
        return $this->zCol2Acompte2;
    }

    /**
     * Get the z col2 acompte3.
     *
     * @return float Returns the z col2 acompte3.
     */
    public function getzCol2Acompte3() {
        return $this->zCol2Acompte3;
    }

    /**
     * Get the z col2 acompte4.
     *
     * @return float Returns the z col2 acompte4.
     */
    public function getzCol2Acompte4() {
        return $this->zCol2Acompte4;
    }

    /**
     * Get the z excedent versement.
     *
     * @return float Returns the z excedent versement.
     */
    public function getzExcedentVersement() {
        return $this->zExcedentVersement;
    }

    /**
     * Get the z nom demandeur rbt.
     *
     * @return string Returns the z nom demandeur rbt.
     */
    public function getzNomDemandeurRbt() {
        return $this->zNomDemandeurRbt;
    }

    /**
     * Get the z num msa.
     *
     * @return string Returns the z num msa.
     */
    public function getzNumMsa() {
        return $this->zNumMsa;
    }

    /**
     * Get the z rbt demande.
     *
     * @return float Returns the z rbt demande.
     */
    public function getzRbtDemande() {
        return $this->zRbtDemande;
    }

    /**
     * Get the z rbt qualite.
     *
     * @return string Returns the z rbt qualite.
     */
    public function getzRbtQualite() {
        return $this->zRbtQualite;
    }

    /**
     * Get the z rbt ville.
     *
     * @return string Returns the z rbt ville.
     */
    public function getzRbtVille() {
        return $this->zRbtVille;
    }

    /**
     * Get the z rbtbic.
     *
     * @return string Returns the z rbtbic.
     */
    public function getzRbtbic() {
        return $this->zRbtbic;
    }

    /**
     * Get the z rbtiban.
     *
     * @return string Returns the z rbtiban.
     */
    public function getzRbtiban() {
        return $this->zRbtiban;
    }

    /**
     * Get the z rbtrib.
     *
     * @return string Returns the z rbtrib.
     */
    public function getzRbtrib() {
        return $this->zRbtrib;
    }

    /**
     * Get the z solde a payer.
     *
     * @return float Returns the z solde a payer.
     */
    public function getzSoldeAPayer() {
        return $this->zSoldeAPayer;
    }

    /**
     * Get the z surface agr.
     *
     * @return int Returns the z surface agr.
     */
    public function getzSurfaceAgr() {
        return $this->zSurfaceAgr;
    }

    /**
     * Get the z taxes fiscales.
     *
     * @return float Returns the z taxes fiscales.
     */
    public function getzTaxesFiscales() {
        return $this->zTaxesFiscales;
    }

    /**
     * Get the z ya demande rbt.
     *
     * @return bool Returns the z ya demande rbt.
     */
    public function getzYaDemandeRbt() {
        return $this->zYaDemandeRbt;
    }

    /**
     * Set the date cession.
     *
     * @param DateTime|null $dateCession The date cession.
     */
    public function setDateCession(DateTime $dateCession = null) {
        $this->dateCession = $dateCession;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     */
    public function setPeriode(DateTime $periode = null) {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the tx imposition.
     *
     * @param float $txImposition The tx imposition.
     */
    public function setTxImposition($txImposition) {
        $this->txImposition = $txImposition;
        return $this;
    }

    /**
     * Set the type ca12.
     *
     * @param string $typeCa12 The type ca12.
     */
    public function setTypeCa12($typeCa12) {
        $this->typeCa12 = $typeCa12;
        return $this;
    }

    /**
     * Set the z0008.
     *
     * @param float $z0008 The z0008.
     */
    public function setz0008($z0008) {
        $this->z0008 = $z0008;
        return $this;
    }

    /**
     * Set the z0018.
     *
     * @param float $z0018 The z0018.
     */
    public function setz0018($z0018) {
        $this->z0018 = $z0018;
        return $this;
    }

    /**
     * Set the z0019.
     *
     * @param float $z0019 The z0019.
     */
    public function setz0019($z0019) {
        $this->z0019 = $z0019;
        return $this;
    }

    /**
     * Set the z0020.
     *
     * @param float $z0020 The z0020.
     */
    public function setz0020($z0020) {
        $this->z0020 = $z0020;
        return $this;
    }

    /**
     * Set the z0028.
     *
     * @param float $z0028 The z0028.
     */
    public function setz0028($z0028) {
        $this->z0028 = $z0028;
        return $this;
    }

    /**
     * Set the z0030b.
     *
     * @param float $z0030b The z0030b.
     */
    public function setz0030b($z0030b) {
        $this->z0030b = $z0030b;
        return $this;
    }

    /**
     * Set the z0058.
     *
     * @param float $z0058 The z0058.
     */
    public function setz0058($z0058) {
        $this->z0058 = $z0058;
        return $this;
    }

    /**
     * Set the z0704.
     *
     * @param float $z0704 The z0704.
     */
    public function setz0704($z0704) {
        $this->z0704 = $z0704;
        return $this;
    }

    /**
     * Set the z0709.
     *
     * @param float $z0709 The z0709.
     */
    public function setz0709($z0709) {
        $this->z0709 = $z0709;
        return $this;
    }

    /**
     * Set the z0970.
     *
     * @param float $z0970 The z0970.
     */
    public function setz0970($z0970) {
        $this->z0970 = $z0970;
        return $this;
    }

    /**
     * Set the z0970b.
     *
     * @param float $z0970b The z0970b.
     */
    public function setz0970b($z0970b) {
        $this->z0970b = $z0970b;
        return $this;
    }

    /**
     * Set the z0980.
     *
     * @param float $z0980 The z0980.
     */
    public function setz0980($z0980) {
        $this->z0980 = $z0980;
        return $this;
    }

    /**
     * Set the z0980b.
     *
     * @param float $z0980b The z0980b.
     */
    public function setz0980b($z0980b) {
        $this->z0980b = $z0980b;
        return $this;
    }

    /**
     * Set the z0981.
     *
     * @param float $z0981 The z0981.
     */
    public function setz0981($z0981) {
        $this->z0981 = $z0981;
        return $this;
    }

    /**
     * Set the z0981b.
     *
     * @param float $z0981b The z0981b.
     */
    public function setz0981b($z0981b) {
        $this->z0981b = $z0981b;
        return $this;
    }

    /**
     * Set the z0982.
     *
     * @param float $z0982 The z0982.
     */
    public function setz0982($z0982) {
        $this->z0982 = $z0982;
        return $this;
    }

    /**
     * Set the z0983.
     *
     * @param float $z0983 The z0983.
     */
    public function setz0983($z0983) {
        $this->z0983 = $z0983;
        return $this;
    }

    /**
     * Set the z3240.
     *
     * @param float $z3240 The z3240.
     */
    public function setz3240($z3240) {
        $this->z3240 = $z3240;
        return $this;
    }

    /**
     * Set the z32 code.
     *
     * @param string $z32Code The z32 code.
     */
    public function setz32Code($z32Code) {
        $this->z32Code = $z32Code;
        return $this;
    }

    /**
     * Set the z32 libelle.
     *
     * @param string $z32Libelle The z32 libelle.
     */
    public function setz32Libelle($z32Libelle) {
        $this->z32Libelle = $z32Libelle;
        return $this;
    }

    /**
     * Set the z32 taxe.
     *
     * @param float $z32Taxe The z32 taxe.
     */
    public function setz32Taxe($z32Taxe) {
        $this->z32Taxe = $z32Taxe;
        return $this;
    }

    /**
     * Set the z35 b code.
     *
     * @param string $z35BCode The z35 b code.
     */
    public function setz35BCode($z35BCode) {
        $this->z35BCode = $z35BCode;
        return $this;
    }

    /**
     * Set the z35 b libelle.
     *
     * @param string $z35BLibelle The z35 b libelle.
     */
    public function setz35BLibelle($z35BLibelle) {
        $this->z35BLibelle = $z35BLibelle;
        return $this;
    }

    /**
     * Set the z35 b taxe.
     *
     * @param float $z35BTaxe The z35 b taxe.
     */
    public function setz35BTaxe($z35BTaxe) {
        $this->z35BTaxe = $z35BTaxe;
        return $this;
    }

    /**
     * Set the z35 code.
     *
     * @param string $z35Code The z35 code.
     */
    public function setz35Code($z35Code) {
        $this->z35Code = $z35Code;
        return $this;
    }

    /**
     * Set the z35 libelle.
     *
     * @param string $z35Libelle The z35 libelle.
     */
    public function setz35Libelle($z35Libelle) {
        $this->z35Libelle = $z35Libelle;
        return $this;
    }

    /**
     * Set the z35 taxe.
     *
     * @param float $z35Taxe The z35 taxe.
     */
    public function setz35Taxe($z35Taxe) {
        $this->z35Taxe = $z35Taxe;
        return $this;
    }

    /**
     * Set the z4202.
     *
     * @param float $z4202 The z4202.
     */
    public function setz4202($z4202) {
        $this->z4202 = $z4202;
        return $this;
    }

    /**
     * Set the z4213.
     *
     * @param float $z4213 The z4213.
     */
    public function setz4213($z4213) {
        $this->z4213 = $z4213;
        return $this;
    }

    /**
     * Set the z4216.
     *
     * @param float $z4216 The z4216.
     */
    public function setz4216($z4216) {
        $this->z4216 = $z4216;
        return $this;
    }

    /**
     * Set the z4217.
     *
     * @param float $z4217 The z4217.
     */
    public function setz4217($z4217) {
        $this->z4217 = $z4217;
        return $this;
    }

    /**
     * Set the z4218.
     *
     * @param float $z4218 The z4218.
     */
    public function setz4218($z4218) {
        $this->z4218 = $z4218;
        return $this;
    }

    /**
     * Set the z4220.
     *
     * @param float $z4220 The z4220.
     */
    public function setz4220($z4220) {
        $this->z4220 = $z4220;
        return $this;
    }

    /**
     * Set the z45 ca12.
     *
     * @param float $z45Ca12 The z45 ca12.
     */
    public function setz45Ca12($z45Ca12) {
        $this->z45Ca12 = $z45Ca12;
        return $this;
    }

    /**
     * Set the z45 ca12 code.
     *
     * @param string $z45Ca12Code The z45 ca12 code.
     */
    public function setz45Ca12Code($z45Ca12Code) {
        $this->z45Ca12Code = $z45Ca12Code;
        return $this;
    }

    /**
     * Set the z45 ca12 libelle.
     *
     * @param string $z45Ca12Libelle The z45 ca12 libelle.
     */
    public function setz45Ca12Libelle($z45Ca12Libelle) {
        $this->z45Ca12Libelle = $z45Ca12Libelle;
        return $this;
    }

    /**
     * Set the z47 ca12.
     *
     * @param float $z47Ca12 The z47 ca12.
     */
    public function setz47Ca12($z47Ca12) {
        $this->z47Ca12 = $z47Ca12;
        return $this;
    }

    /**
     * Set the z47 ca12 code.
     *
     * @param string $z47Ca12Code The z47 ca12 code.
     */
    public function setz47Ca12Code($z47Ca12Code) {
        $this->z47Ca12Code = $z47Ca12Code;
        return $this;
    }

    /**
     * Set the z47 ca12 libelle.
     *
     * @param string $z47Ca12Libelle The z47 ca12 libelle.
     */
    public function setz47Ca12Libelle($z47Ca12Libelle) {
        $this->z47Ca12Libelle = $z47Ca12Libelle;
        return $this;
    }

    /**
     * Set the z4 aca12.
     *
     * @param float $z4Aca12 The z4 aca12.
     */
    public function setz4Aca12($z4Aca12) {
        $this->z4Aca12 = $z4Aca12;
        return $this;
    }

    /**
     * Set the z4 aca12 code.
     *
     * @param string $z4Aca12Code The z4 aca12 code.
     */
    public function setz4Aca12Code($z4Aca12Code) {
        $this->z4Aca12Code = $z4Aca12Code;
        return $this;
    }

    /**
     * Set the z4 aca12 libelle.
     *
     * @param string $z4Aca12Libelle The z4 aca12 libelle.
     */
    public function setz4Aca12Libelle($z4Aca12Libelle) {
        $this->z4Aca12Libelle = $z4Aca12Libelle;
        return $this;
    }

    /**
     * Set the z4 bca12.
     *
     * @param float $z4Bca12 The z4 bca12.
     */
    public function setz4Bca12($z4Bca12) {
        $this->z4Bca12 = $z4Bca12;
        return $this;
    }

    /**
     * Set the z4 bca12 code.
     *
     * @param string $z4Bca12Code The z4 bca12 code.
     */
    public function setz4Bca12Code($z4Bca12Code) {
        $this->z4Bca12Code = $z4Bca12Code;
        return $this;
    }

    /**
     * Set the z4 bca12 libelle.
     *
     * @param string $z4Bca12Libelle The z4 bca12 libelle.
     */
    public function setz4Bca12Libelle($z4Bca12Libelle) {
        $this->z4Bca12Libelle = $z4Bca12Libelle;
        return $this;
    }

    /**
     * Set the z4 cca12.
     *
     * @param float $z4Cca12 The z4 cca12.
     */
    public function setz4Cca12($z4Cca12) {
        $this->z4Cca12 = $z4Cca12;
        return $this;
    }

    /**
     * Set the z4 cca12 code.
     *
     * @param string $z4Cca12Code The z4 cca12 code.
     */
    public function setz4Cca12Code($z4Cca12Code) {
        $this->z4Cca12Code = $z4Cca12Code;
        return $this;
    }

    /**
     * Set the z4 cca12 libelle.
     *
     * @param string $z4Cca12Libelle The z4 cca12 libelle.
     */
    public function setz4Cca12Libelle($z4Cca12Libelle) {
        $this->z4Cca12Libelle = $z4Cca12Libelle;
        return $this;
    }

    /**
     * Set the z5b code.
     *
     * @param string $z5bCode The z5b code.
     */
    public function setz5bCode($z5bCode) {
        $this->z5bCode = $z5bCode;
        return $this;
    }

    /**
     * Set the z5b ht.
     *
     * @param float $z5bHt The z5b ht.
     */
    public function setz5bHt($z5bHt) {
        $this->z5bHt = $z5bHt;
        return $this;
    }

    /**
     * Set the z5b libelle.
     *
     * @param string $z5bLibelle The z5b libelle.
     */
    public function setz5bLibelle($z5bLibelle) {
        $this->z5bLibelle = $z5bLibelle;
        return $this;
    }

    /**
     * Set the z5b taxe.
     *
     * @param float $z5bTaxe The z5b taxe.
     */
    public function setz5bTaxe($z5bTaxe) {
        $this->z5bTaxe = $z5bTaxe;
        return $this;
    }

    /**
     * Set the z7b code.
     *
     * @param string $z7bCode The z7b code.
     */
    public function setz7bCode($z7bCode) {
        $this->z7bCode = $z7bCode;
        return $this;
    }

    /**
     * Set the z7b ht.
     *
     * @param float $z7bHt The z7b ht.
     */
    public function setz7bHt($z7bHt) {
        $this->z7bHt = $z7bHt;
        return $this;
    }

    /**
     * Set the z7b libelle.
     *
     * @param string $z7bLibelle The z7b libelle.
     */
    public function setz7bLibelle($z7bLibelle) {
        $this->z7bLibelle = $z7bLibelle;
        return $this;
    }

    /**
     * Set the z7b taxe.
     *
     * @param float $z7bTaxe The z7b taxe.
     */
    public function setz7bTaxe($z7bTaxe) {
        $this->z7bTaxe = $z7bTaxe;
        return $this;
    }

    /**
     * Set the z8004.
     *
     * @param float $z8004 The z8004.
     */
    public function setz8004($z8004) {
        $this->z8004 = $z8004;
        return $this;
    }

    /**
     * Set the z acompte deduit1.
     *
     * @param bool $zAcompteDeduit1 The z acompte deduit1.
     */
    public function setzAcompteDeduit1($zAcompteDeduit1) {
        $this->zAcompteDeduit1 = $zAcompteDeduit1;
        return $this;
    }

    /**
     * Set the z acompte deduit2.
     *
     * @param bool $zAcompteDeduit2 The z acompte deduit2.
     */
    public function setzAcompteDeduit2($zAcompteDeduit2) {
        $this->zAcompteDeduit2 = $zAcompteDeduit2;
        return $this;
    }

    /**
     * Set the z acompte deduit3.
     *
     * @param bool $zAcompteDeduit3 The z acompte deduit3.
     */
    public function setzAcompteDeduit3($zAcompteDeduit3) {
        $this->zAcompteDeduit3 = $zAcompteDeduit3;
        return $this;
    }

    /**
     * Set the z acompte deduit4.
     *
     * @param bool $zAcompteDeduit4 The z acompte deduit4.
     */
    public function setzAcompteDeduit4($zAcompteDeduit4) {
        $this->zAcompteDeduit4 = $zAcompteDeduit4;
        return $this;
    }

    /**
     * Set the z annee acompte1.
     *
     * @param int $zAnneeAcompte1 The z annee acompte1.
     */
    public function setzAnneeAcompte1($zAnneeAcompte1) {
        $this->zAnneeAcompte1 = $zAnneeAcompte1;
        return $this;
    }

    /**
     * Set the z annee acompte2.
     *
     * @param int $zAnneeAcompte2 The z annee acompte2.
     */
    public function setzAnneeAcompte2($zAnneeAcompte2) {
        $this->zAnneeAcompte2 = $zAnneeAcompte2;
        return $this;
    }

    /**
     * Set the z annee acompte3.
     *
     * @param int $zAnneeAcompte3 The z annee acompte3.
     */
    public function setzAnneeAcompte3($zAnneeAcompte3) {
        $this->zAnneeAcompte3 = $zAnneeAcompte3;
        return $this;
    }

    /**
     * Set the z annee acompte4.
     *
     * @param int $zAnneeAcompte4 The z annee acompte4.
     */
    public function setzAnneeAcompte4($zAnneeAcompte4) {
        $this->zAnneeAcompte4 = $zAnneeAcompte4;
        return $this;
    }

    /**
     * Set the z col1 acompte1.
     *
     * @param float $zCol1Acompte1 The z col1 acompte1.
     */
    public function setzCol1Acompte1($zCol1Acompte1) {
        $this->zCol1Acompte1 = $zCol1Acompte1;
        return $this;
    }

    /**
     * Set the z col1 acompte2.
     *
     * @param float $zCol1Acompte2 The z col1 acompte2.
     */
    public function setzCol1Acompte2($zCol1Acompte2) {
        $this->zCol1Acompte2 = $zCol1Acompte2;
        return $this;
    }

    /**
     * Set the z col1 acompte3.
     *
     * @param float $zCol1Acompte3 The z col1 acompte3.
     */
    public function setzCol1Acompte3($zCol1Acompte3) {
        $this->zCol1Acompte3 = $zCol1Acompte3;
        return $this;
    }

    /**
     * Set the z col1 acompte4.
     *
     * @param float $zCol1Acompte4 The z col1 acompte4.
     */
    public function setzCol1Acompte4($zCol1Acompte4) {
        $this->zCol1Acompte4 = $zCol1Acompte4;
        return $this;
    }

    /**
     * Set the z col2 acompte1.
     *
     * @param float $zCol2Acompte1 The z col2 acompte1.
     */
    public function setzCol2Acompte1($zCol2Acompte1) {
        $this->zCol2Acompte1 = $zCol2Acompte1;
        return $this;
    }

    /**
     * Set the z col2 acompte2.
     *
     * @param float $zCol2Acompte2 The z col2 acompte2.
     */
    public function setzCol2Acompte2($zCol2Acompte2) {
        $this->zCol2Acompte2 = $zCol2Acompte2;
        return $this;
    }

    /**
     * Set the z col2 acompte3.
     *
     * @param float $zCol2Acompte3 The z col2 acompte3.
     */
    public function setzCol2Acompte3($zCol2Acompte3) {
        $this->zCol2Acompte3 = $zCol2Acompte3;
        return $this;
    }

    /**
     * Set the z col2 acompte4.
     *
     * @param float $zCol2Acompte4 The z col2 acompte4.
     */
    public function setzCol2Acompte4($zCol2Acompte4) {
        $this->zCol2Acompte4 = $zCol2Acompte4;
        return $this;
    }

    /**
     * Set the z excedent versement.
     *
     * @param float $zExcedentVersement The z excedent versement.
     */
    public function setzExcedentVersement($zExcedentVersement) {
        $this->zExcedentVersement = $zExcedentVersement;
        return $this;
    }

    /**
     * Set the z nom demandeur rbt.
     *
     * @param string $zNomDemandeurRbt The z nom demandeur rbt.
     */
    public function setzNomDemandeurRbt($zNomDemandeurRbt) {
        $this->zNomDemandeurRbt = $zNomDemandeurRbt;
        return $this;
    }

    /**
     * Set the z num msa.
     *
     * @param string $zNumMsa The z num msa.
     */
    public function setzNumMsa($zNumMsa) {
        $this->zNumMsa = $zNumMsa;
        return $this;
    }

    /**
     * Set the z rbt demande.
     *
     * @param float $zRbtDemande The z rbt demande.
     */
    public function setzRbtDemande($zRbtDemande) {
        $this->zRbtDemande = $zRbtDemande;
        return $this;
    }

    /**
     * Set the z rbt qualite.
     *
     * @param string $zRbtQualite The z rbt qualite.
     */
    public function setzRbtQualite($zRbtQualite) {
        $this->zRbtQualite = $zRbtQualite;
        return $this;
    }

    /**
     * Set the z rbt ville.
     *
     * @param string $zRbtVille The z rbt ville.
     */
    public function setzRbtVille($zRbtVille) {
        $this->zRbtVille = $zRbtVille;
        return $this;
    }

    /**
     * Set the z rbtbic.
     *
     * @param string $zRbtbic The z rbtbic.
     */
    public function setzRbtbic($zRbtbic) {
        $this->zRbtbic = $zRbtbic;
        return $this;
    }

    /**
     * Set the z rbtiban.
     *
     * @param string $zRbtiban The z rbtiban.
     */
    public function setzRbtiban($zRbtiban) {
        $this->zRbtiban = $zRbtiban;
        return $this;
    }

    /**
     * Set the z rbtrib.
     *
     * @param string $zRbtrib The z rbtrib.
     */
    public function setzRbtrib($zRbtrib) {
        $this->zRbtrib = $zRbtrib;
        return $this;
    }

    /**
     * Set the z solde a payer.
     *
     * @param float $zSoldeAPayer The z solde a payer.
     */
    public function setzSoldeAPayer($zSoldeAPayer) {
        $this->zSoldeAPayer = $zSoldeAPayer;
        return $this;
    }

    /**
     * Set the z surface agr.
     *
     * @param int $zSurfaceAgr The z surface agr.
     */
    public function setzSurfaceAgr($zSurfaceAgr) {
        $this->zSurfaceAgr = $zSurfaceAgr;
        return $this;
    }

    /**
     * Set the z taxes fiscales.
     *
     * @param float $zTaxesFiscales The z taxes fiscales.
     */
    public function setzTaxesFiscales($zTaxesFiscales) {
        $this->zTaxesFiscales = $zTaxesFiscales;
        return $this;
    }

    /**
     * Set the z ya demande rbt.
     *
     * @param bool $zYaDemandeRbt The z ya demande rbt.
     */
    public function setzYaDemandeRbt($zYaDemandeRbt) {
        $this->zYaDemandeRbt = $zYaDemandeRbt;
        return $this;
    }
}
