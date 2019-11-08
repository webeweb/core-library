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
 * Dec tva.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class DecTva {

    /**
     * A corres1.
     *
     * @var string
     */
    private $aCorres1;

    /**
     * A corres2.
     *
     * @var string
     */
    private $aCorres2;

    /**
     * A corres3.
     *
     * @var string
     */
    private $aCorres3;

    /**
     * A corres4.
     *
     * @var string
     */
    private $aCorres4;

    /**
     * A corres5.
     *
     * @var string
     */
    private $aCorres5;

    /**
     * A corres6.
     *
     * @var string
     */
    private $aCorres6;

    /**
     * A corres7.
     *
     * @var string
     */
    private $aCorres7;

    /**
     * A corres8.
     *
     * @var string
     */
    private $aCorres8;

    /**
     * Az0990.
     *
     * @var float
     */
    private $az0990;

    /**
     * Az0990b.
     *
     * @var float
     */
    private $az0990b;

    /**
     * Az1010.
     *
     * @var float
     */
    private $az1010;

    /**
     * Az1010b.
     *
     * @var float
     */
    private $az1010b;

    /**
     * Az1020.
     *
     * @var float
     */
    private $az1020;

    /**
     * Az1020b.
     *
     * @var float
     */
    private $az1020b;

    /**
     * Az1030.
     *
     * @var float
     */
    private $az1030;

    /**
     * Az1030b.
     *
     * @var float
     */
    private $az1030b;

    /**
     * Az1040.
     *
     * @var float
     */
    private $az1040;

    /**
     * Az1040b.
     *
     * @var float
     */
    private $az1040b;

    /**
     * Az1050.
     *
     * @var float
     */
    private $az1050;

    /**
     * Az1050b.
     *
     * @var float
     */
    private $az1050b;

    /**
     * Az1080.
     *
     * @var float
     */
    private $az1080;

    /**
     * Az1080b.
     *
     * @var float
     */
    private $az1080b;

    /**
     * Az1081.
     *
     * @var float
     */
    private $az1081;

    /**
     * Az1081b.
     *
     * @var float
     */
    private $az1081b;

    /**
     * Az1090.
     *
     * @var float
     */
    private $az1090;

    /**
     * Az1090b.
     *
     * @var float
     */
    private $az1090b;

    /**
     * Az1100.
     *
     * @var float
     */
    private $az1100;

    /**
     * Az1100b.
     *
     * @var float
     */
    private $az1100b;

    /**
     * Az1110.
     *
     * @var float
     */
    private $az1110;

    /**
     * Az1110b.
     *
     * @var float
     */
    private $az1110b;

    /**
     * Az1120.
     *
     * @var float
     */
    private $az1120;

    /**
     * Az1120b.
     *
     * @var float
     */
    private $az1120b;

    /**
     * Az3240.
     *
     * @var float
     */
    private $az3240;

    /**
     * Az3260.
     *
     * @var float
     */
    private $az3260;

    /**
     * Az3510.
     *
     * @var float
     */
    private $az3510;

    /**
     * Az3520.
     *
     * @var float
     */
    private $az3520;

    /**
     * Az38 code.
     *
     * @var string
     */
    private $az38Code;

    /**
     * Az38 lib.
     *
     * @var string
     */
    private $az38Lib;

    /**
     * Az38b.
     *
     * @var float
     */
    private $az38b;

    /**
     * Az38ht.
     *
     * @var float
     */
    private $az38ht;

    /**
     * Az3910.
     *
     * @var float
     */
    private $az3910;

    /**
     * Az4200.
     *
     * @var float
     */
    private $az4200;

    /**
     * Az4201.
     *
     * @var float
     */
    private $az4201;

    /**
     * Az4204.
     *
     * @var float
     */
    private $az4204;

    /**
     * Az4206.
     *
     * @var float
     */
    private $az4206;

    /**
     * Az4207.
     *
     * @var float
     */
    private $az4207;

    /**
     * Az4208.
     *
     * @var float
     */
    private $az4208;

    /**
     * Az4209.
     *
     * @var float
     */
    private $az4209;

    /**
     * Az4210.
     *
     * @var float
     */
    private $az4210;

    /**
     * Az4211.
     *
     * @var float
     */
    private $az4211;

    /**
     * Az4212.
     *
     * @var float
     */
    private $az4212;

    /**
     * Az4213.
     *
     * @var float
     */
    private $az4213;

    /**
     * Az4215.
     *
     * @var float
     */
    private $az4215;

    /**
     * Az4220.
     *
     * @var float
     */
    private $az4220;

    /**
     * Az4222.
     *
     * @var float
     */
    private $az4222;

    /**
     * Az4223.
     *
     * @var float
     */
    private $az4223;

    /**
     * Az4224.
     *
     * @var float
     */
    private $az4224;

    /**
     * Az4228 mtt.
     *
     * @var float
     */
    private $az4228Mtt;

    /**
     * Az4230.
     *
     * @var float
     */
    private $az4230;

    /**
     * Az4231.
     *
     * @var float
     */
    private $az4231;

    /**
     * Az4232.
     *
     * @var float
     */
    private $az4232;

    /**
     * Az4233.
     *
     * @var float
     */
    private $az4233;

    /**
     * Az4234.
     *
     * @var float
     */
    private $az4234;

    /**
     * Az4235.
     *
     * @var float
     */
    private $az4235;

    /**
     * Az4236.
     *
     * @var float
     */
    private $az4236;

    /**
     * Az4237.
     *
     * @var float
     */
    private $az4237;

    /**
     * Az4238.
     *
     * @var float
     */
    private $az4238;

    /**
     * Az4239.
     *
     * @var float
     */
    private $az4239;

    /**
     * Az4240.
     *
     * @var float
     */
    private $az4240;

    /**
     * Az4241.
     *
     * @var float
     */
    private $az4241;

    /**
     * Az4242.
     *
     * @var float
     */
    private $az4242;

    /**
     * Az4243.
     *
     * @var float
     */
    private $az4243;

    /**
     * Az4244.
     *
     * @var float
     */
    private $az4244;

    /**
     * Az4245.
     *
     * @var float
     */
    private $az4245;

    /**
     * Az4246.
     *
     * @var float
     */
    private $az4246;

    /**
     * Az4247.
     *
     * @var float
     */
    private $az4247;

    /**
     * Az4248.
     *
     * @var float
     */
    private $az4248;

    /**
     * Az4249.
     *
     * @var float
     */
    private $az4249;

    /**
     * Az4250.
     *
     * @var float
     */
    private $az4250;

    /**
     * Az4251.
     *
     * @var float
     */
    private $az4251;

    /**
     * Az4252.
     *
     * @var float
     */
    private $az4252;

    /**
     * Az4254.
     *
     * @var float
     */
    private $az4254;

    /**
     * Az4255.
     *
     * @var float
     */
    private $az4255;

    /**
     * Az4256.
     *
     * @var float
     */
    private $az4256;

    /**
     * Az4257.
     *
     * @var float
     */
    private $az4257;

    /**
     * Az4258.
     *
     * @var float
     */
    private $az4258;

    /**
     * Az4259.
     *
     * @var float
     */
    private $az4259;

    /**
     * Az4260.
     *
     * @var float
     */
    private $az4260;

    /**
     * Az4261.
     *
     * @var float
     */
    private $az4261;

    /**
     * Az4262.
     *
     * @var float
     */
    private $az4262;

    /**
     * Az4263.
     *
     * @var float
     */
    private $az4263;

    /**
     * Az4264.
     *
     * @var float
     */
    private $az4264;

    /**
     * Az4265.
     *
     * @var float
     */
    private $az4265;

    /**
     * Az4266.
     *
     * @var float
     */
    private $az4266;

    /**
     * Az4267.
     *
     * @var float
     */
    private $az4267;

    /**
     * Az4268.
     *
     * @var float
     */
    private $az4268;

    /**
     * Az4268 base.
     *
     * @var float
     */
    private $az4268Base;

    /**
     * Az4269.
     *
     * @var float
     */
    private $az4269;

    /**
     * Az4269 base.
     *
     * @var float
     */
    private $az4269Base;

    /**
     * Az4270.
     *
     * @var float
     */
    private $az4270;

    /**
     * Az4270 base.
     *
     * @var float
     */
    private $az4270Base;

    /**
     * Az4271.
     *
     * @var float
     */
    private $az4271;

    /**
     * Az4271 base.
     *
     * @var float
     */
    private $az4271Base;

    /**
     * Az4272.
     *
     * @var float
     */
    private $az4272;

    /**
     * Az4274.
     *
     * @var float
     */
    private $az4274;

    /**
     * Az4276.
     *
     * @var float
     */
    private $az4276;

    /**
     * Az4276 base.
     *
     * @var float
     */
    private $az4276Base;

    /**
     * Az4277.
     *
     * @var float
     */
    private $az4277;

    /**
     * Az4277 base.
     *
     * @var float
     */
    private $az4277Base;

    /**
     * Az50 code.
     *
     * @var string
     */
    private $az50Code;

    /**
     * Az50 lib.
     *
     * @var string
     */
    private $az50Lib;

    /**
     * Az50 mtt.
     *
     * @var float
     */
    private $az50Mtt;

    /**
     * Az59 code.
     *
     * @var string
     */
    private $az59Code;

    /**
     * Az59 lib.
     *
     * @var string
     */
    private $az59Lib;

    /**
     * Az59 mtt.
     *
     * @var float
     */
    private $az59Mtt;

    /**
     * Az en code.
     *
     * @var string
     */
    private $azEnCode;

    /**
     * Az en lib.
     *
     * @var string
     */
    private $azEnLib;

    /**
     * Az es code.
     *
     * @var string
     */
    private $azEsCode;

    /**
     * Az es lib.
     *
     * @var string
     */
    private $azEsLib;

    /**
     * Az es mtt.
     *
     * @var float
     */
    private $azEsMtt;

    /**
     * Az eu code.
     *
     * @var string
     */
    private $azEuCode;

    /**
     * Az eu lib.
     *
     * @var string
     */
    private $azEuLib;

    /**
     * Az eu mtt.
     *
     * @var float
     */
    private $azEuMtt;

    /**
     * Az ex code.
     *
     * @var string
     */
    private $azExCode;

    /**
     * Az ex lib.
     *
     * @var string
     */
    private $azExLib;

    /**
     * Az ex mtt.
     *
     * @var float
     */
    private $azExMtt;

    /**
     * Az ey code.
     *
     * @var string
     */
    private $azEyCode;

    /**
     * Az ey lib.
     *
     * @var string
     */
    private $azEyLib;

    /**
     * Az ey mtt.
     *
     * @var float
     */
    private $azEyMtt;

    /**
     * Az ez code.
     *
     * @var string
     */
    private $azEzCode;

    /**
     * Az ez lib.
     *
     * @var string
     */
    private $azEzLib;

    /**
     * Az ez mtt.
     *
     * @var float
     */
    private $azEzMtt;

    /**
     * Az ga code.
     *
     * @var string
     */
    private $azGaCode;

    /**
     * Az ga lib.
     *
     * @var string
     */
    private $azGaLib;

    /**
     * Az ga mtt.
     *
     * @var float
     */
    private $azGaMtt;

    /**
     * Az gc code.
     *
     * @var string
     */
    private $azGcCode;

    /**
     * Az gc lib.
     *
     * @var string
     */
    private $azGcLib;

    /**
     * Az gc mtt.
     *
     * @var float
     */
    private $azGcMtt;

    /**
     * Az hi.
     *
     * @var float
     */
    private $azHi;

    /**
     * Az hl.
     *
     * @var float
     */
    private $azHl;

    /**
     * Az jb.
     *
     * @var float
     */
    private $azJb;

    /**
     * Az jc.
     *
     * @var float
     */
    private $azJc;

    /**
     * Az ligne4 mtt.
     *
     * @var float
     */
    private $azLigne4Mtt;

    /**
     * Az ligne5 mtt.
     *
     * @var float
     */
    private $azLigne5Mtt;

    /**
     * b groupe.
     *
     * @var bool
     */
    private $bGroupe;

    /**
     * Ca12 mois cloture.
     *
     * @var int
     */
    private $ca12MoisCloture;

    /**
     * Corres1.
     *
     * @var string
     */
    private $corres1;

    /**
     * Corres2.
     *
     * @var string
     */
    private $corres2;

    /**
     * Corres3.
     *
     * @var string
     */
    private $corres3;

    /**
     * Corres4.
     *
     * @var string
     */
    private $corres4;

    /**
     * Corres5.
     *
     * @var string
     */
    private $corres5;

    /**
     * Corres6.
     *
     * @var string
     */
    private $corres6;

    /**
     * Corres7.
     *
     * @var string
     */
    private $corres7;

    /**
     * Corres8.
     *
     * @var string
     */
    private $corres8;

    /**
     * Credit compte.
     *
     * @var bool
     */
    private $creditCompte;

    /**
     * Credit imputer.
     *
     * @var bool
     */
    private $creditImputer;

    /**
     * Date dec.
     *
     * @var string
     */
    private $dateDec;

    /**
     * Flg ac.
     *
     * @var bool
     */
    private $flgAc;

    /**
     * Gen auto.
     *
     * @var bool
     */
    private $genAuto;

    /**
     * Ht taux196.
     *
     * @var float
     */
    private $htTaux196;

    /**
     * Ht taux7.
     *
     * @var float
     */
    private $htTaux7;

    /**
     * Liqui taxes1.
     *
     * @var string
     */
    private $liquiTaxes1;

    /**
     * Liqui taxes2.
     *
     * @var string
     */
    private $liquiTaxes2;

    /**
     * Liqui taxes3.
     *
     * @var string
     */
    private $liquiTaxes3;

    /**
     * Liqui taxes4.
     *
     * @var string
     */
    private $liquiTaxes4;

    /**
     * Liqui taxes5.
     *
     * @var string
     */
    private $liquiTaxes5;

    /**
     * Mention expresse.
     *
     * @var bool
     */
    private $mentionExpresse;

    /**
     * Monnaie.
     *
     * @var string
     */
    private $monnaie;

    /**
     * Monnaie tenue.
     *
     * @var string
     */
    private $monnaieTenue;

    /**
     * No lot ecritures.
     *
     * @var int
     */
    private $noLotEcritures;

    /**
     * P cent.
     *
     * @var float
     */
    private $pCent;

    /**
     * Paiement imputation.
     *
     * @var bool
     */
    private $paiementImputation;

    /**
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * Report acp.
     *
     * @var float
     */
    private $reportAcp;

    /**
     * Rib titulaire1.
     *
     * @var string
     */
    private $ribTitulaire1;

    /**
     * Rib titulaire2.
     *
     * @var string
     */
    private $ribTitulaire2;

    /**
     * Sel adresse dest.
     *
     * @var string
     */
    private $selAdresseDest;

    /**
     * Total.
     *
     * @var float
     */
    private $total;

    /**
     * Type reglement.
     *
     * @var int
     */
    private $typeReglement;

    /**
     * Ville.
     *
     * @var string
     */
    private $ville;

    /**
     * z0029.
     *
     * @var float
     */
    private $z0029;

    /**
     * z0030.
     *
     * @var float
     */
    private $z0030;

    /**
     * Z0031.
     *
     * @var float
     */
    private $z0031;

    /**
     * Z0031b.
     *
     * @var float
     */
    private $z0031b;

    /**
     * Z0032.
     *
     * @var float
     */
    private $z0032;

    /**
     * Z0033.
     *
     * @var float
     */
    private $z0033;

    /**
     * Z0034.
     *
     * @var float
     */
    private $z0034;

    /**
     * Z0035.
     *
     * @var float
     */
    private $z0035;

    /**
     * z0036.
     *
     * @var float
     */
    private $z0036;

    /**
     * Z0037.
     *
     * @var float
     */
    private $z0037;

    /**
     * Z0038.
     *
     * @var float
     */
    private $z0038;

    /**
     * z0039.
     *
     * @var float
     */
    private $z0039;

    /**
     * Z0040.
     *
     * @var float
     */
    private $z0040;

    /**
     * Z0040b.
     *
     * @var float
     */
    private $z0040b;

    /**
     * Z0041.
     *
     * @var float
     */
    private $z0041;

    /**
     * z0044.
     *
     * @var float
     */
    private $z0044;

    /**
     * z0044b.
     *
     * @var float
     */
    private $z0044b;

    /**
     * z0045.
     *
     * @var float
     */
    private $z0045;

    /**
     * z0046.
     *
     * @var float
     */
    private $z0046;

    /**
     * z0059b.
     *
     * @var float
     */
    private $z0059b;

    /**
     * Z01.
     *
     * @var float
     */
    private $z01;

    /**
     * Z0100.
     *
     * @var float
     */
    private $z0100;

    /**
     * Z0100b.
     *
     * @var float
     */
    private $z0100b;

    /**
     * z0121.
     *
     * @var float
     */
    private $z0121;

    /**
     * Z0121b.
     *
     * @var float
     */
    private $z0121b;

    /**
     * z0151.
     *
     * @var float
     */
    private $z0151;

    /**
     * z0151b.
     *
     * @var float
     */
    private $z0151b;

    /**
     * Z02.
     *
     * @var float
     */
    private $z02;

    /**
     * Z0200.
     *
     * @var float
     */
    private $z0200;

    /**
     * Z0200b.
     *
     * @var float
     */
    private $z0200b;

    /**
     * Z0205.
     *
     * @var float
     */
    private $z0205;

    /**
     * Z0205b.
     *
     * @var float
     */
    private $z0205b;

    /**
     * z0207.
     *
     * @var float
     */
    private $z0207;

    /**
     * z0207b.
     *
     * @var float
     */
    private $z0207b;

    /**
     * Z0600.
     *
     * @var float
     */
    private $z0600;

    /**
     * Z0701.
     *
     * @var float
     */
    private $z0701;

    /**
     * Z0702.
     *
     * @var float
     */
    private $z0702;

    /**
     * Z0702b.
     *
     * @var float
     */
    private $z0702b;

    /**
     * Z0703.
     *
     * @var float
     */
    private $z0703;

    /**
     * Z0703b.
     *
     * @var float
     */
    private $z0703b;

    /**
     * Z0705.
     *
     * @var float
     */
    private $z0705;

    /**
     * z0709.
     *
     * @var float
     */
    private $z0709;

    /**
     * Z0900.
     *
     * @var float
     */
    private $z0900;

    /**
     * Z0900b.
     *
     * @var float
     */
    private $z0900b;

    /**
     * Z0920.
     *
     * @var float
     */
    private $z0920;

    /**
     * Z0920b.
     *
     * @var float
     */
    private $z0920b;

    /**
     * Z0950.
     *
     * @var float
     */
    private $z0950;

    /**
     * Z0950b.
     *
     * @var float
     */
    private $z0950b;

    /**
     * Z12 code.
     *
     * @var string
     */
    private $z12Code;

    /**
     * z12 ht.
     *
     * @var float
     */
    private $z12Ht;

    /**
     * Z12 lib.
     *
     * @var string
     */
    private $z12Lib;

    /**
     * Z12 taxe.
     *
     * @var float
     */
    private $z12Taxe;

    /**
     * Z14.
     *
     * @var float
     */
    private $z14;

    /**
     * Z18.
     *
     * @var float
     */
    private $z18;

    /**
     * Z196.
     *
     * @var float
     */
    private $z196;

    /**
     * Z196b.
     *
     * @var float
     */
    private $z196b;

    /**
     * Z21.
     *
     * @var float
     */
    private $z21;

    /**
     * Z25.
     *
     * @var float
     */
    private $z25;

    /**
     * Z4227.
     *
     * @var float
     */
    private $z4227;

    /**
     * Z8001.
     *
     * @var float
     */
    private $z8001;

    /**
     * Z8002.
     *
     * @var float
     */
    private $z8002;

    /**
     * Z8003.
     *
     * @var float
     */
    private $z8003;

    /**
     * Z8003c.
     *
     * @var float
     */
    private $z8003c;

    /**
     * Z8005.
     *
     * @var float
     */
    private $z8005;

    /**
     * Z9979.
     *
     * @var float
     */
    private $z9979;

    /**
     * Z9989.
     *
     * @var float
     */
    private $z9989;

    /**
     * Z9991.
     *
     * @var float
     */
    private $z9991;

    /**
     * Z9999.
     *
     * @var float
     */
    private $z9999;

    /**
     * Z9 b taxe.
     *
     * @var float
     */
    private $z9BTaxe;

    /**
     * z9b code.
     *
     * @var string
     */
    private $z9bCode;

    /**
     * z9b ht.
     *
     * @var float
     */
    private $z9bHt;

    /**
     * z9b lib.
     *
     * @var string
     */
    private $z9bLib;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the a corres1.
     *
     * @return string Returns the a corres1.
     */
    public function getACorres1() {
        return $this->aCorres1;
    }

    /**
     * Get the a corres2.
     *
     * @return string Returns the a corres2.
     */
    public function getACorres2() {
        return $this->aCorres2;
    }

    /**
     * Get the a corres3.
     *
     * @return string Returns the a corres3.
     */
    public function getACorres3() {
        return $this->aCorres3;
    }

    /**
     * Get the a corres4.
     *
     * @return string Returns the a corres4.
     */
    public function getACorres4() {
        return $this->aCorres4;
    }

    /**
     * Get the a corres5.
     *
     * @return string Returns the a corres5.
     */
    public function getACorres5() {
        return $this->aCorres5;
    }

    /**
     * Get the a corres6.
     *
     * @return string Returns the a corres6.
     */
    public function getACorres6() {
        return $this->aCorres6;
    }

    /**
     * Get the a corres7.
     *
     * @return string Returns the a corres7.
     */
    public function getACorres7() {
        return $this->aCorres7;
    }

    /**
     * Get the a corres8.
     *
     * @return string Returns the a corres8.
     */
    public function getACorres8() {
        return $this->aCorres8;
    }

    /**
     * Get the az0990.
     *
     * @return float Returns the az0990.
     */
    public function getAz0990() {
        return $this->az0990;
    }

    /**
     * Get the az0990b.
     *
     * @return float Returns the az0990b.
     */
    public function getAz0990b() {
        return $this->az0990b;
    }

    /**
     * Get the az1010.
     *
     * @return float Returns the az1010.
     */
    public function getAz1010() {
        return $this->az1010;
    }

    /**
     * Get the az1010b.
     *
     * @return float Returns the az1010b.
     */
    public function getAz1010b() {
        return $this->az1010b;
    }

    /**
     * Get the az1020.
     *
     * @return float Returns the az1020.
     */
    public function getAz1020() {
        return $this->az1020;
    }

    /**
     * Get the az1020b.
     *
     * @return float Returns the az1020b.
     */
    public function getAz1020b() {
        return $this->az1020b;
    }

    /**
     * Get the az1030.
     *
     * @return float Returns the az1030.
     */
    public function getAz1030() {
        return $this->az1030;
    }

    /**
     * Get the az1030b.
     *
     * @return float Returns the az1030b.
     */
    public function getAz1030b() {
        return $this->az1030b;
    }

    /**
     * Get the az1040.
     *
     * @return float Returns the az1040.
     */
    public function getAz1040() {
        return $this->az1040;
    }

    /**
     * Get the az1040b.
     *
     * @return float Returns the az1040b.
     */
    public function getAz1040b() {
        return $this->az1040b;
    }

    /**
     * Get the az1050.
     *
     * @return float Returns the az1050.
     */
    public function getAz1050() {
        return $this->az1050;
    }

    /**
     * Get the az1050b.
     *
     * @return float Returns the az1050b.
     */
    public function getAz1050b() {
        return $this->az1050b;
    }

    /**
     * Get the az1080.
     *
     * @return float Returns the az1080.
     */
    public function getAz1080() {
        return $this->az1080;
    }

    /**
     * Get the az1080b.
     *
     * @return float Returns the az1080b.
     */
    public function getAz1080b() {
        return $this->az1080b;
    }

    /**
     * Get the az1081.
     *
     * @return float Returns the az1081.
     */
    public function getAz1081() {
        return $this->az1081;
    }

    /**
     * Get the az1081b.
     *
     * @return float Returns the az1081b.
     */
    public function getAz1081b() {
        return $this->az1081b;
    }

    /**
     * Get the az1090.
     *
     * @return float Returns the az1090.
     */
    public function getAz1090() {
        return $this->az1090;
    }

    /**
     * Get the az1090b.
     *
     * @return float Returns the az1090b.
     */
    public function getAz1090b() {
        return $this->az1090b;
    }

    /**
     * Get the az1100.
     *
     * @return float Returns the az1100.
     */
    public function getAz1100() {
        return $this->az1100;
    }

    /**
     * Get the az1100b.
     *
     * @return float Returns the az1100b.
     */
    public function getAz1100b() {
        return $this->az1100b;
    }

    /**
     * Get the az1110.
     *
     * @return float Returns the az1110.
     */
    public function getAz1110() {
        return $this->az1110;
    }

    /**
     * Get the az1110b.
     *
     * @return float Returns the az1110b.
     */
    public function getAz1110b() {
        return $this->az1110b;
    }

    /**
     * Get the az1120.
     *
     * @return float Returns the az1120.
     */
    public function getAz1120() {
        return $this->az1120;
    }

    /**
     * Get the az1120b.
     *
     * @return float Returns the az1120b.
     */
    public function getAz1120b() {
        return $this->az1120b;
    }

    /**
     * Get the az3240.
     *
     * @return float Returns the az3240.
     */
    public function getAz3240() {
        return $this->az3240;
    }

    /**
     * Get the az3260.
     *
     * @return float Returns the az3260.
     */
    public function getAz3260() {
        return $this->az3260;
    }

    /**
     * Get the az3510.
     *
     * @return float Returns the az3510.
     */
    public function getAz3510() {
        return $this->az3510;
    }

    /**
     * Get the az3520.
     *
     * @return float Returns the az3520.
     */
    public function getAz3520() {
        return $this->az3520;
    }

    /**
     * Get the az38 code.
     *
     * @return string Returns the az38 code.
     */
    public function getAz38Code() {
        return $this->az38Code;
    }

    /**
     * Get the az38 lib.
     *
     * @return string Returns the az38 lib.
     */
    public function getAz38Lib() {
        return $this->az38Lib;
    }

    /**
     * Get the az38b.
     *
     * @return float Returns the az38b.
     */
    public function getAz38b() {
        return $this->az38b;
    }

    /**
     * Get the az38ht.
     *
     * @return float Returns the az38ht.
     */
    public function getAz38ht() {
        return $this->az38ht;
    }

    /**
     * Get the az3910.
     *
     * @return float Returns the az3910.
     */
    public function getAz3910() {
        return $this->az3910;
    }

    /**
     * Get the az4200.
     *
     * @return float Returns the az4200.
     */
    public function getAz4200() {
        return $this->az4200;
    }

    /**
     * Get the az4201.
     *
     * @return float Returns the az4201.
     */
    public function getAz4201() {
        return $this->az4201;
    }

    /**
     * Get the az4204.
     *
     * @return float Returns the az4204.
     */
    public function getAz4204() {
        return $this->az4204;
    }

    /**
     * Get the az4206.
     *
     * @return float Returns the az4206.
     */
    public function getAz4206() {
        return $this->az4206;
    }

    /**
     * Get the az4207.
     *
     * @return float Returns the az4207.
     */
    public function getAz4207() {
        return $this->az4207;
    }

    /**
     * Get the az4208.
     *
     * @return float Returns the az4208.
     */
    public function getAz4208() {
        return $this->az4208;
    }

    /**
     * Get the az4209.
     *
     * @return float Returns the az4209.
     */
    public function getAz4209() {
        return $this->az4209;
    }

    /**
     * Get the az4210.
     *
     * @return float Returns the az4210.
     */
    public function getAz4210() {
        return $this->az4210;
    }

    /**
     * Get the az4211.
     *
     * @return float Returns the az4211.
     */
    public function getAz4211() {
        return $this->az4211;
    }

    /**
     * Get the az4212.
     *
     * @return float Returns the az4212.
     */
    public function getAz4212() {
        return $this->az4212;
    }

    /**
     * Get the az4213.
     *
     * @return float Returns the az4213.
     */
    public function getAz4213() {
        return $this->az4213;
    }

    /**
     * Get the az4215.
     *
     * @return float Returns the az4215.
     */
    public function getAz4215() {
        return $this->az4215;
    }

    /**
     * Get the az4220.
     *
     * @return float Returns the az4220.
     */
    public function getAz4220() {
        return $this->az4220;
    }

    /**
     * Get the az4222.
     *
     * @return float Returns the az4222.
     */
    public function getAz4222() {
        return $this->az4222;
    }

    /**
     * Get the az4223.
     *
     * @return float Returns the az4223.
     */
    public function getAz4223() {
        return $this->az4223;
    }

    /**
     * Get the az4224.
     *
     * @return float Returns the az4224.
     */
    public function getAz4224() {
        return $this->az4224;
    }

    /**
     * Get the az4228 mtt.
     *
     * @return float Returns the az4228 mtt.
     */
    public function getAz4228Mtt() {
        return $this->az4228Mtt;
    }

    /**
     * Get the az4230.
     *
     * @return float Returns the az4230.
     */
    public function getAz4230() {
        return $this->az4230;
    }

    /**
     * Get the az4231.
     *
     * @return float Returns the az4231.
     */
    public function getAz4231() {
        return $this->az4231;
    }

    /**
     * Get the az4232.
     *
     * @return float Returns the az4232.
     */
    public function getAz4232() {
        return $this->az4232;
    }

    /**
     * Get the az4233.
     *
     * @return float Returns the az4233.
     */
    public function getAz4233() {
        return $this->az4233;
    }

    /**
     * Get the az4234.
     *
     * @return float Returns the az4234.
     */
    public function getAz4234() {
        return $this->az4234;
    }

    /**
     * Get the az4235.
     *
     * @return float Returns the az4235.
     */
    public function getAz4235() {
        return $this->az4235;
    }

    /**
     * Get the az4236.
     *
     * @return float Returns the az4236.
     */
    public function getAz4236() {
        return $this->az4236;
    }

    /**
     * Get the az4237.
     *
     * @return float Returns the az4237.
     */
    public function getAz4237() {
        return $this->az4237;
    }

    /**
     * Get the az4238.
     *
     * @return float Returns the az4238.
     */
    public function getAz4238() {
        return $this->az4238;
    }

    /**
     * Get the az4239.
     *
     * @return float Returns the az4239.
     */
    public function getAz4239() {
        return $this->az4239;
    }

    /**
     * Get the az4240.
     *
     * @return float Returns the az4240.
     */
    public function getAz4240() {
        return $this->az4240;
    }

    /**
     * Get the az4241.
     *
     * @return float Returns the az4241.
     */
    public function getAz4241() {
        return $this->az4241;
    }

    /**
     * Get the az4242.
     *
     * @return float Returns the az4242.
     */
    public function getAz4242() {
        return $this->az4242;
    }

    /**
     * Get the az4243.
     *
     * @return float Returns the az4243.
     */
    public function getAz4243() {
        return $this->az4243;
    }

    /**
     * Get the az4244.
     *
     * @return float Returns the az4244.
     */
    public function getAz4244() {
        return $this->az4244;
    }

    /**
     * Get the az4245.
     *
     * @return float Returns the az4245.
     */
    public function getAz4245() {
        return $this->az4245;
    }

    /**
     * Get the az4246.
     *
     * @return float Returns the az4246.
     */
    public function getAz4246() {
        return $this->az4246;
    }

    /**
     * Get the az4247.
     *
     * @return float Returns the az4247.
     */
    public function getAz4247() {
        return $this->az4247;
    }

    /**
     * Get the az4248.
     *
     * @return float Returns the az4248.
     */
    public function getAz4248() {
        return $this->az4248;
    }

    /**
     * Get the az4249.
     *
     * @return float Returns the az4249.
     */
    public function getAz4249() {
        return $this->az4249;
    }

    /**
     * Get the az4250.
     *
     * @return float Returns the az4250.
     */
    public function getAz4250() {
        return $this->az4250;
    }

    /**
     * Get the az4251.
     *
     * @return float Returns the az4251.
     */
    public function getAz4251() {
        return $this->az4251;
    }

    /**
     * Get the az4252.
     *
     * @return float Returns the az4252.
     */
    public function getAz4252() {
        return $this->az4252;
    }

    /**
     * Get the az4254.
     *
     * @return float Returns the az4254.
     */
    public function getAz4254() {
        return $this->az4254;
    }

    /**
     * Get the az4255.
     *
     * @return float Returns the az4255.
     */
    public function getAz4255() {
        return $this->az4255;
    }

    /**
     * Get the az4256.
     *
     * @return float Returns the az4256.
     */
    public function getAz4256() {
        return $this->az4256;
    }

    /**
     * Get the az4257.
     *
     * @return float Returns the az4257.
     */
    public function getAz4257() {
        return $this->az4257;
    }

    /**
     * Get the az4258.
     *
     * @return float Returns the az4258.
     */
    public function getAz4258() {
        return $this->az4258;
    }

    /**
     * Get the az4259.
     *
     * @return float Returns the az4259.
     */
    public function getAz4259() {
        return $this->az4259;
    }

    /**
     * Get the az4260.
     *
     * @return float Returns the az4260.
     */
    public function getAz4260() {
        return $this->az4260;
    }

    /**
     * Get the az4261.
     *
     * @return float Returns the az4261.
     */
    public function getAz4261() {
        return $this->az4261;
    }

    /**
     * Get the az4262.
     *
     * @return float Returns the az4262.
     */
    public function getAz4262() {
        return $this->az4262;
    }

    /**
     * Get the az4263.
     *
     * @return float Returns the az4263.
     */
    public function getAz4263() {
        return $this->az4263;
    }

    /**
     * Get the az4264.
     *
     * @return float Returns the az4264.
     */
    public function getAz4264() {
        return $this->az4264;
    }

    /**
     * Get the az4265.
     *
     * @return float Returns the az4265.
     */
    public function getAz4265() {
        return $this->az4265;
    }

    /**
     * Get the az4266.
     *
     * @return float Returns the az4266.
     */
    public function getAz4266() {
        return $this->az4266;
    }

    /**
     * Get the az4267.
     *
     * @return float Returns the az4267.
     */
    public function getAz4267() {
        return $this->az4267;
    }

    /**
     * Get the az4268.
     *
     * @return float Returns the az4268.
     */
    public function getAz4268() {
        return $this->az4268;
    }

    /**
     * Get the az4268 base.
     *
     * @return float Returns the az4268 base.
     */
    public function getAz4268Base() {
        return $this->az4268Base;
    }

    /**
     * Get the az4269.
     *
     * @return float Returns the az4269.
     */
    public function getAz4269() {
        return $this->az4269;
    }

    /**
     * Get the az4269 base.
     *
     * @return float Returns the az4269 base.
     */
    public function getAz4269Base() {
        return $this->az4269Base;
    }

    /**
     * Get the az4270.
     *
     * @return float Returns the az4270.
     */
    public function getAz4270() {
        return $this->az4270;
    }

    /**
     * Get the az4270 base.
     *
     * @return float Returns the az4270 base.
     */
    public function getAz4270Base() {
        return $this->az4270Base;
    }

    /**
     * Get the az4271.
     *
     * @return float Returns the az4271.
     */
    public function getAz4271() {
        return $this->az4271;
    }

    /**
     * Get the az4271 base.
     *
     * @return float Returns the az4271 base.
     */
    public function getAz4271Base() {
        return $this->az4271Base;
    }

    /**
     * Get the az4272.
     *
     * @return float Returns the az4272.
     */
    public function getAz4272() {
        return $this->az4272;
    }

    /**
     * Get the az4274.
     *
     * @return float Returns the az4274.
     */
    public function getAz4274() {
        return $this->az4274;
    }

    /**
     * Get the az4276.
     *
     * @return float Returns the az4276.
     */
    public function getAz4276() {
        return $this->az4276;
    }

    /**
     * Get the az4276 base.
     *
     * @return float Returns the az4276 base.
     */
    public function getAz4276Base() {
        return $this->az4276Base;
    }

    /**
     * Get the az4277.
     *
     * @return float Returns the az4277.
     */
    public function getAz4277() {
        return $this->az4277;
    }

    /**
     * Get the az4277 base.
     *
     * @return float Returns the az4277 base.
     */
    public function getAz4277Base() {
        return $this->az4277Base;
    }

    /**
     * Get the az50 code.
     *
     * @return string Returns the az50 code.
     */
    public function getAz50Code() {
        return $this->az50Code;
    }

    /**
     * Get the az50 lib.
     *
     * @return string Returns the az50 lib.
     */
    public function getAz50Lib() {
        return $this->az50Lib;
    }

    /**
     * Get the az50 mtt.
     *
     * @return float Returns the az50 mtt.
     */
    public function getAz50Mtt() {
        return $this->az50Mtt;
    }

    /**
     * Get the az59 code.
     *
     * @return string Returns the az59 code.
     */
    public function getAz59Code() {
        return $this->az59Code;
    }

    /**
     * Get the az59 lib.
     *
     * @return string Returns the az59 lib.
     */
    public function getAz59Lib() {
        return $this->az59Lib;
    }

    /**
     * Get the az59 mtt.
     *
     * @return float Returns the az59 mtt.
     */
    public function getAz59Mtt() {
        return $this->az59Mtt;
    }

    /**
     * Get the az en code.
     *
     * @return string Returns the az en code.
     */
    public function getAzEnCode() {
        return $this->azEnCode;
    }

    /**
     * Get the az en lib.
     *
     * @return string Returns the az en lib.
     */
    public function getAzEnLib() {
        return $this->azEnLib;
    }

    /**
     * Get the az es code.
     *
     * @return string Returns the az es code.
     */
    public function getAzEsCode() {
        return $this->azEsCode;
    }

    /**
     * Get the az es lib.
     *
     * @return string Returns the az es lib.
     */
    public function getAzEsLib() {
        return $this->azEsLib;
    }

    /**
     * Get the az es mtt.
     *
     * @return float Returns the az es mtt.
     */
    public function getAzEsMtt() {
        return $this->azEsMtt;
    }

    /**
     * Get the az eu code.
     *
     * @return string Returns the az eu code.
     */
    public function getAzEuCode() {
        return $this->azEuCode;
    }

    /**
     * Get the az eu lib.
     *
     * @return string Returns the az eu lib.
     */
    public function getAzEuLib() {
        return $this->azEuLib;
    }

    /**
     * Get the az eu mtt.
     *
     * @return float Returns the az eu mtt.
     */
    public function getAzEuMtt() {
        return $this->azEuMtt;
    }

    /**
     * Get the az ex code.
     *
     * @return string Returns the az ex code.
     */
    public function getAzExCode() {
        return $this->azExCode;
    }

    /**
     * Get the az ex lib.
     *
     * @return string Returns the az ex lib.
     */
    public function getAzExLib() {
        return $this->azExLib;
    }

    /**
     * Get the az ex mtt.
     *
     * @return float Returns the az ex mtt.
     */
    public function getAzExMtt() {
        return $this->azExMtt;
    }

    /**
     * Get the az ey code.
     *
     * @return string Returns the az ey code.
     */
    public function getAzEyCode() {
        return $this->azEyCode;
    }

    /**
     * Get the az ey lib.
     *
     * @return string Returns the az ey lib.
     */
    public function getAzEyLib() {
        return $this->azEyLib;
    }

    /**
     * Get the az ey mtt.
     *
     * @return float Returns the az ey mtt.
     */
    public function getAzEyMtt() {
        return $this->azEyMtt;
    }

    /**
     * Get the az ez code.
     *
     * @return string Returns the az ez code.
     */
    public function getAzEzCode() {
        return $this->azEzCode;
    }

    /**
     * Get the az ez lib.
     *
     * @return string Returns the az ez lib.
     */
    public function getAzEzLib() {
        return $this->azEzLib;
    }

    /**
     * Get the az ez mtt.
     *
     * @return float Returns the az ez mtt.
     */
    public function getAzEzMtt() {
        return $this->azEzMtt;
    }

    /**
     * Get the az ga code.
     *
     * @return string Returns the az ga code.
     */
    public function getAzGaCode() {
        return $this->azGaCode;
    }

    /**
     * Get the az ga lib.
     *
     * @return string Returns the az ga lib.
     */
    public function getAzGaLib() {
        return $this->azGaLib;
    }

    /**
     * Get the az ga mtt.
     *
     * @return float Returns the az ga mtt.
     */
    public function getAzGaMtt() {
        return $this->azGaMtt;
    }

    /**
     * Get the az gc code.
     *
     * @return string Returns the az gc code.
     */
    public function getAzGcCode() {
        return $this->azGcCode;
    }

    /**
     * Get the az gc lib.
     *
     * @return string Returns the az gc lib.
     */
    public function getAzGcLib() {
        return $this->azGcLib;
    }

    /**
     * Get the az gc mtt.
     *
     * @return float Returns the az gc mtt.
     */
    public function getAzGcMtt() {
        return $this->azGcMtt;
    }

    /**
     * Get the az hi.
     *
     * @return float Returns the az hi.
     */
    public function getAzHi() {
        return $this->azHi;
    }

    /**
     * Get the az hl.
     *
     * @return float Returns the az hl.
     */
    public function getAzHl() {
        return $this->azHl;
    }

    /**
     * Get the az jb.
     *
     * @return float Returns the az jb.
     */
    public function getAzJb() {
        return $this->azJb;
    }

    /**
     * Get the az jc.
     *
     * @return float Returns the az jc.
     */
    public function getAzJc() {
        return $this->azJc;
    }

    /**
     * Get the az ligne4 mtt.
     *
     * @return float Returns the az ligne4 mtt.
     */
    public function getAzLigne4Mtt() {
        return $this->azLigne4Mtt;
    }

    /**
     * Get the az ligne5 mtt.
     *
     * @return float Returns the az ligne5 mtt.
     */
    public function getAzLigne5Mtt() {
        return $this->azLigne5Mtt;
    }

    /**
     * Get the ca12 mois cloture.
     *
     * @return int Returns the ca12 mois cloture.
     */
    public function getCa12MoisCloture() {
        return $this->ca12MoisCloture;
    }

    /**
     * Get the corres1.
     *
     * @return string Returns the corres1.
     */
    public function getCorres1() {
        return $this->corres1;
    }

    /**
     * Get the corres2.
     *
     * @return string Returns the corres2.
     */
    public function getCorres2() {
        return $this->corres2;
    }

    /**
     * Get the corres3.
     *
     * @return string Returns the corres3.
     */
    public function getCorres3() {
        return $this->corres3;
    }

    /**
     * Get the corres4.
     *
     * @return string Returns the corres4.
     */
    public function getCorres4() {
        return $this->corres4;
    }

    /**
     * Get the corres5.
     *
     * @return string Returns the corres5.
     */
    public function getCorres5() {
        return $this->corres5;
    }

    /**
     * Get the corres6.
     *
     * @return string Returns the corres6.
     */
    public function getCorres6() {
        return $this->corres6;
    }

    /**
     * Get the corres7.
     *
     * @return string Returns the corres7.
     */
    public function getCorres7() {
        return $this->corres7;
    }

    /**
     * Get the corres8.
     *
     * @return string Returns the corres8.
     */
    public function getCorres8() {
        return $this->corres8;
    }

    /**
     * Get the credit compte.
     *
     * @return bool Returns the credit compte.
     */
    public function getCreditCompte() {
        return $this->creditCompte;
    }

    /**
     * Get the credit imputer.
     *
     * @return bool Returns the credit imputer.
     */
    public function getCreditImputer() {
        return $this->creditImputer;
    }

    /**
     * Get the date dec.
     *
     * @return string Returns the date dec.
     */
    public function getDateDec() {
        return $this->dateDec;
    }

    /**
     * Get the flg ac.
     *
     * @return bool Returns the flg ac.
     */
    public function getFlgAc() {
        return $this->flgAc;
    }

    /**
     * Get the gen auto.
     *
     * @return bool Returns the gen auto.
     */
    public function getGenAuto() {
        return $this->genAuto;
    }

    /**
     * Get the ht taux196.
     *
     * @return float Returns the ht taux196.
     */
    public function getHtTaux196() {
        return $this->htTaux196;
    }

    /**
     * Get the ht taux7.
     *
     * @return float Returns the ht taux7.
     */
    public function getHtTaux7() {
        return $this->htTaux7;
    }

    /**
     * Get the liqui taxes1.
     *
     * @return string Returns the liqui taxes1.
     */
    public function getLiquiTaxes1() {
        return $this->liquiTaxes1;
    }

    /**
     * Get the liqui taxes2.
     *
     * @return string Returns the liqui taxes2.
     */
    public function getLiquiTaxes2() {
        return $this->liquiTaxes2;
    }

    /**
     * Get the liqui taxes3.
     *
     * @return string Returns the liqui taxes3.
     */
    public function getLiquiTaxes3() {
        return $this->liquiTaxes3;
    }

    /**
     * Get the liqui taxes4.
     *
     * @return string Returns the liqui taxes4.
     */
    public function getLiquiTaxes4() {
        return $this->liquiTaxes4;
    }

    /**
     * Get the liqui taxes5.
     *
     * @return string Returns the liqui taxes5.
     */
    public function getLiquiTaxes5() {
        return $this->liquiTaxes5;
    }

    /**
     * Get the mention expresse.
     *
     * @return bool Returns the mention expresse.
     */
    public function getMentionExpresse() {
        return $this->mentionExpresse;
    }

    /**
     * Get the monnaie.
     *
     * @return string Returns the monnaie.
     */
    public function getMonnaie() {
        return $this->monnaie;
    }

    /**
     * Get the monnaie tenue.
     *
     * @return string Returns the monnaie tenue.
     */
    public function getMonnaieTenue() {
        return $this->monnaieTenue;
    }

    /**
     * Get the no lot ecritures.
     *
     * @return int Returns the no lot ecritures.
     */
    public function getNoLotEcritures() {
        return $this->noLotEcritures;
    }

    /**
     * Get the p cent.
     *
     * @return float Returns the p cent.
     */
    public function getPCent() {
        return $this->pCent;
    }

    /**
     * Get the paiement imputation.
     *
     * @return bool Returns the paiement imputation.
     */
    public function getPaiementImputation() {
        return $this->paiementImputation;
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
     * Get the report acp.
     *
     * @return float Returns the report acp.
     */
    public function getReportAcp() {
        return $this->reportAcp;
    }

    /**
     * Get the rib titulaire1.
     *
     * @return string Returns the rib titulaire1.
     */
    public function getRibTitulaire1() {
        return $this->ribTitulaire1;
    }

    /**
     * Get the rib titulaire2.
     *
     * @return string Returns the rib titulaire2.
     */
    public function getRibTitulaire2() {
        return $this->ribTitulaire2;
    }

    /**
     * Get the sel adresse dest.
     *
     * @return string Returns the sel adresse dest.
     */
    public function getSelAdresseDest() {
        return $this->selAdresseDest;
    }

    /**
     * Get the total.
     *
     * @return float Returns the total.
     */
    public function getTotal() {
        return $this->total;
    }

    /**
     * Get the type reglement.
     *
     * @return int Returns the type reglement.
     */
    public function getTypeReglement() {
        return $this->typeReglement;
    }

    /**
     * Get the ville.
     *
     * @return string Returns the ville.
     */
    public function getVille() {
        return $this->ville;
    }

    /**
     * Get the z0031.
     *
     * @return float Returns the z0031.
     */
    public function getZ0031() {
        return $this->z0031;
    }

    /**
     * Get the z0031b.
     *
     * @return float Returns the z0031b.
     */
    public function getZ0031b() {
        return $this->z0031b;
    }

    /**
     * Get the z0032.
     *
     * @return float Returns the z0032.
     */
    public function getZ0032() {
        return $this->z0032;
    }

    /**
     * Get the z0033.
     *
     * @return float Returns the z0033.
     */
    public function getZ0033() {
        return $this->z0033;
    }

    /**
     * Get the z0034.
     *
     * @return float Returns the z0034.
     */
    public function getZ0034() {
        return $this->z0034;
    }

    /**
     * Get the z0035.
     *
     * @return float Returns the z0035.
     */
    public function getZ0035() {
        return $this->z0035;
    }

    /**
     * Get the z0037.
     *
     * @return float Returns the z0037.
     */
    public function getZ0037() {
        return $this->z0037;
    }

    /**
     * Get the z0038.
     *
     * @return float Returns the z0038.
     */
    public function getZ0038() {
        return $this->z0038;
    }

    /**
     * Get the z0040.
     *
     * @return float Returns the z0040.
     */
    public function getZ0040() {
        return $this->z0040;
    }

    /**
     * Get the z0040b.
     *
     * @return float Returns the z0040b.
     */
    public function getZ0040b() {
        return $this->z0040b;
    }

    /**
     * Get the z0041.
     *
     * @return float Returns the z0041.
     */
    public function getZ0041() {
        return $this->z0041;
    }

    /**
     * Get the z01.
     *
     * @return float Returns the z01.
     */
    public function getZ01() {
        return $this->z01;
    }

    /**
     * Get the z0100.
     *
     * @return float Returns the z0100.
     */
    public function getZ0100() {
        return $this->z0100;
    }

    /**
     * Get the z0100b.
     *
     * @return float Returns the z0100b.
     */
    public function getZ0100b() {
        return $this->z0100b;
    }

    /**
     * Get the z0121b.
     *
     * @return float Returns the z0121b.
     */
    public function getZ0121b() {
        return $this->z0121b;
    }

    /**
     * Get the z02.
     *
     * @return float Returns the z02.
     */
    public function getZ02() {
        return $this->z02;
    }

    /**
     * Get the z0200.
     *
     * @return float Returns the z0200.
     */
    public function getZ0200() {
        return $this->z0200;
    }

    /**
     * Get the z0200b.
     *
     * @return float Returns the z0200b.
     */
    public function getZ0200b() {
        return $this->z0200b;
    }

    /**
     * Get the z0205.
     *
     * @return float Returns the z0205.
     */
    public function getZ0205() {
        return $this->z0205;
    }

    /**
     * Get the z0205b.
     *
     * @return float Returns the z0205b.
     */
    public function getZ0205b() {
        return $this->z0205b;
    }

    /**
     * Get the z0600.
     *
     * @return float Returns the z0600.
     */
    public function getZ0600() {
        return $this->z0600;
    }

    /**
     * Get the z0701.
     *
     * @return float Returns the z0701.
     */
    public function getZ0701() {
        return $this->z0701;
    }

    /**
     * Get the z0702.
     *
     * @return float Returns the z0702.
     */
    public function getZ0702() {
        return $this->z0702;
    }

    /**
     * Get the z0702b.
     *
     * @return float Returns the z0702b.
     */
    public function getZ0702b() {
        return $this->z0702b;
    }

    /**
     * Get the z0703.
     *
     * @return float Returns the z0703.
     */
    public function getZ0703() {
        return $this->z0703;
    }

    /**
     * Get the z0703b.
     *
     * @return float Returns the z0703b.
     */
    public function getZ0703b() {
        return $this->z0703b;
    }

    /**
     * Get the z0705.
     *
     * @return float Returns the z0705.
     */
    public function getZ0705() {
        return $this->z0705;
    }

    /**
     * Get the z0900.
     *
     * @return float Returns the z0900.
     */
    public function getZ0900() {
        return $this->z0900;
    }

    /**
     * Get the z0900b.
     *
     * @return float Returns the z0900b.
     */
    public function getZ0900b() {
        return $this->z0900b;
    }

    /**
     * Get the z0920.
     *
     * @return float Returns the z0920.
     */
    public function getZ0920() {
        return $this->z0920;
    }

    /**
     * Get the z0920b.
     *
     * @return float Returns the z0920b.
     */
    public function getZ0920b() {
        return $this->z0920b;
    }

    /**
     * Get the z0950.
     *
     * @return float Returns the z0950.
     */
    public function getZ0950() {
        return $this->z0950;
    }

    /**
     * Get the z0950b.
     *
     * @return float Returns the z0950b.
     */
    public function getZ0950b() {
        return $this->z0950b;
    }

    /**
     * Get the z12 code.
     *
     * @return string Returns the z12 code.
     */
    public function getZ12Code() {
        return $this->z12Code;
    }

    /**
     * Get the z12 lib.
     *
     * @return string Returns the z12 lib.
     */
    public function getZ12Lib() {
        return $this->z12Lib;
    }

    /**
     * Get the z12 taxe.
     *
     * @return float Returns the z12 taxe.
     */
    public function getZ12Taxe() {
        return $this->z12Taxe;
    }

    /**
     * Get the z14.
     *
     * @return float Returns the z14.
     */
    public function getZ14() {
        return $this->z14;
    }

    /**
     * Get the z18.
     *
     * @return float Returns the z18.
     */
    public function getZ18() {
        return $this->z18;
    }

    /**
     * Get the z196.
     *
     * @return float Returns the z196.
     */
    public function getZ196() {
        return $this->z196;
    }

    /**
     * Get the z196b.
     *
     * @return float Returns the z196b.
     */
    public function getZ196b() {
        return $this->z196b;
    }

    /**
     * Get the z21.
     *
     * @return float Returns the z21.
     */
    public function getZ21() {
        return $this->z21;
    }

    /**
     * Get the z25.
     *
     * @return float Returns the z25.
     */
    public function getZ25() {
        return $this->z25;
    }

    /**
     * Get the z4227.
     *
     * @return float Returns the z4227.
     */
    public function getZ4227() {
        return $this->z4227;
    }

    /**
     * Get the z8001.
     *
     * @return float Returns the z8001.
     */
    public function getZ8001() {
        return $this->z8001;
    }

    /**
     * Get the z8002.
     *
     * @return float Returns the z8002.
     */
    public function getZ8002() {
        return $this->z8002;
    }

    /**
     * Get the z8003.
     *
     * @return float Returns the z8003.
     */
    public function getZ8003() {
        return $this->z8003;
    }

    /**
     * Get the z8003c.
     *
     * @return float Returns the z8003c.
     */
    public function getZ8003c() {
        return $this->z8003c;
    }

    /**
     * Get the z8005.
     *
     * @return float Returns the z8005.
     */
    public function getZ8005() {
        return $this->z8005;
    }

    /**
     * Get the z9979.
     *
     * @return float Returns the z9979.
     */
    public function getZ9979() {
        return $this->z9979;
    }

    /**
     * Get the z9989.
     *
     * @return float Returns the z9989.
     */
    public function getZ9989() {
        return $this->z9989;
    }

    /**
     * Get the z9991.
     *
     * @return float Returns the z9991.
     */
    public function getZ9991() {
        return $this->z9991;
    }

    /**
     * Get the z9999.
     *
     * @return float Returns the z9999.
     */
    public function getZ9999() {
        return $this->z9999;
    }

    /**
     * Get the z9 b taxe.
     *
     * @return float Returns the z9 b taxe.
     */
    public function getZ9BTaxe() {
        return $this->z9BTaxe;
    }

    /**
     * Get the b groupe.
     *
     * @return bool Returns the b groupe.
     */
    public function getbGroupe() {
        return $this->bGroupe;
    }

    /**
     * Get the z0029.
     *
     * @return float Returns the z0029.
     */
    public function getz0029() {
        return $this->z0029;
    }

    /**
     * Get the z0030.
     *
     * @return float Returns the z0030.
     */
    public function getz0030() {
        return $this->z0030;
    }

    /**
     * Get the z0036.
     *
     * @return float Returns the z0036.
     */
    public function getz0036() {
        return $this->z0036;
    }

    /**
     * Get the z0039.
     *
     * @return float Returns the z0039.
     */
    public function getz0039() {
        return $this->z0039;
    }

    /**
     * Get the z0044.
     *
     * @return float Returns the z0044.
     */
    public function getz0044() {
        return $this->z0044;
    }

    /**
     * Get the z0044b.
     *
     * @return float Returns the z0044b.
     */
    public function getz0044b() {
        return $this->z0044b;
    }

    /**
     * Get the z0045.
     *
     * @return float Returns the z0045.
     */
    public function getz0045() {
        return $this->z0045;
    }

    /**
     * Get the z0046.
     *
     * @return float Returns the z0046.
     */
    public function getz0046() {
        return $this->z0046;
    }

    /**
     * Get the z0059b.
     *
     * @return float Returns the z0059b.
     */
    public function getz0059b() {
        return $this->z0059b;
    }

    /**
     * Get the z0121.
     *
     * @return float Returns the z0121.
     */
    public function getz0121() {
        return $this->z0121;
    }

    /**
     * Get the z0151.
     *
     * @return float Returns the z0151.
     */
    public function getz0151() {
        return $this->z0151;
    }

    /**
     * Get the z0151b.
     *
     * @return float Returns the z0151b.
     */
    public function getz0151b() {
        return $this->z0151b;
    }

    /**
     * Get the z0207.
     *
     * @return float Returns the z0207.
     */
    public function getz0207() {
        return $this->z0207;
    }

    /**
     * Get the z0207b.
     *
     * @return float Returns the z0207b.
     */
    public function getz0207b() {
        return $this->z0207b;
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
     * Get the z12 ht.
     *
     * @return float Returns the z12 ht.
     */
    public function getz12Ht() {
        return $this->z12Ht;
    }

    /**
     * Get the z9b code.
     *
     * @return string Returns the z9b code.
     */
    public function getz9bCode() {
        return $this->z9bCode;
    }

    /**
     * Get the z9b ht.
     *
     * @return float Returns the z9b ht.
     */
    public function getz9bHt() {
        return $this->z9bHt;
    }

    /**
     * Get the z9b lib.
     *
     * @return string Returns the z9b lib.
     */
    public function getz9bLib() {
        return $this->z9bLib;
    }

    /**
     * Set the a corres1.
     *
     * @param string $aCorres1 The a corres1.
     */
    public function setACorres1($aCorres1) {
        $this->aCorres1 = $aCorres1;
        return $this;
    }

    /**
     * Set the a corres2.
     *
     * @param string $aCorres2 The a corres2.
     */
    public function setACorres2($aCorres2) {
        $this->aCorres2 = $aCorres2;
        return $this;
    }

    /**
     * Set the a corres3.
     *
     * @param string $aCorres3 The a corres3.
     */
    public function setACorres3($aCorres3) {
        $this->aCorres3 = $aCorres3;
        return $this;
    }

    /**
     * Set the a corres4.
     *
     * @param string $aCorres4 The a corres4.
     */
    public function setACorres4($aCorres4) {
        $this->aCorres4 = $aCorres4;
        return $this;
    }

    /**
     * Set the a corres5.
     *
     * @param string $aCorres5 The a corres5.
     */
    public function setACorres5($aCorres5) {
        $this->aCorres5 = $aCorres5;
        return $this;
    }

    /**
     * Set the a corres6.
     *
     * @param string $aCorres6 The a corres6.
     */
    public function setACorres6($aCorres6) {
        $this->aCorres6 = $aCorres6;
        return $this;
    }

    /**
     * Set the a corres7.
     *
     * @param string $aCorres7 The a corres7.
     */
    public function setACorres7($aCorres7) {
        $this->aCorres7 = $aCorres7;
        return $this;
    }

    /**
     * Set the a corres8.
     *
     * @param string $aCorres8 The a corres8.
     */
    public function setACorres8($aCorres8) {
        $this->aCorres8 = $aCorres8;
        return $this;
    }

    /**
     * Set the az0990.
     *
     * @param float $az0990 The az0990.
     */
    public function setAz0990($az0990) {
        $this->az0990 = $az0990;
        return $this;
    }

    /**
     * Set the az0990b.
     *
     * @param float $az0990b The az0990b.
     */
    public function setAz0990b($az0990b) {
        $this->az0990b = $az0990b;
        return $this;
    }

    /**
     * Set the az1010.
     *
     * @param float $az1010 The az1010.
     */
    public function setAz1010($az1010) {
        $this->az1010 = $az1010;
        return $this;
    }

    /**
     * Set the az1010b.
     *
     * @param float $az1010b The az1010b.
     */
    public function setAz1010b($az1010b) {
        $this->az1010b = $az1010b;
        return $this;
    }

    /**
     * Set the az1020.
     *
     * @param float $az1020 The az1020.
     */
    public function setAz1020($az1020) {
        $this->az1020 = $az1020;
        return $this;
    }

    /**
     * Set the az1020b.
     *
     * @param float $az1020b The az1020b.
     */
    public function setAz1020b($az1020b) {
        $this->az1020b = $az1020b;
        return $this;
    }

    /**
     * Set the az1030.
     *
     * @param float $az1030 The az1030.
     */
    public function setAz1030($az1030) {
        $this->az1030 = $az1030;
        return $this;
    }

    /**
     * Set the az1030b.
     *
     * @param float $az1030b The az1030b.
     */
    public function setAz1030b($az1030b) {
        $this->az1030b = $az1030b;
        return $this;
    }

    /**
     * Set the az1040.
     *
     * @param float $az1040 The az1040.
     */
    public function setAz1040($az1040) {
        $this->az1040 = $az1040;
        return $this;
    }

    /**
     * Set the az1040b.
     *
     * @param float $az1040b The az1040b.
     */
    public function setAz1040b($az1040b) {
        $this->az1040b = $az1040b;
        return $this;
    }

    /**
     * Set the az1050.
     *
     * @param float $az1050 The az1050.
     */
    public function setAz1050($az1050) {
        $this->az1050 = $az1050;
        return $this;
    }

    /**
     * Set the az1050b.
     *
     * @param float $az1050b The az1050b.
     */
    public function setAz1050b($az1050b) {
        $this->az1050b = $az1050b;
        return $this;
    }

    /**
     * Set the az1080.
     *
     * @param float $az1080 The az1080.
     */
    public function setAz1080($az1080) {
        $this->az1080 = $az1080;
        return $this;
    }

    /**
     * Set the az1080b.
     *
     * @param float $az1080b The az1080b.
     */
    public function setAz1080b($az1080b) {
        $this->az1080b = $az1080b;
        return $this;
    }

    /**
     * Set the az1081.
     *
     * @param float $az1081 The az1081.
     */
    public function setAz1081($az1081) {
        $this->az1081 = $az1081;
        return $this;
    }

    /**
     * Set the az1081b.
     *
     * @param float $az1081b The az1081b.
     */
    public function setAz1081b($az1081b) {
        $this->az1081b = $az1081b;
        return $this;
    }

    /**
     * Set the az1090.
     *
     * @param float $az1090 The az1090.
     */
    public function setAz1090($az1090) {
        $this->az1090 = $az1090;
        return $this;
    }

    /**
     * Set the az1090b.
     *
     * @param float $az1090b The az1090b.
     */
    public function setAz1090b($az1090b) {
        $this->az1090b = $az1090b;
        return $this;
    }

    /**
     * Set the az1100.
     *
     * @param float $az1100 The az1100.
     */
    public function setAz1100($az1100) {
        $this->az1100 = $az1100;
        return $this;
    }

    /**
     * Set the az1100b.
     *
     * @param float $az1100b The az1100b.
     */
    public function setAz1100b($az1100b) {
        $this->az1100b = $az1100b;
        return $this;
    }

    /**
     * Set the az1110.
     *
     * @param float $az1110 The az1110.
     */
    public function setAz1110($az1110) {
        $this->az1110 = $az1110;
        return $this;
    }

    /**
     * Set the az1110b.
     *
     * @param float $az1110b The az1110b.
     */
    public function setAz1110b($az1110b) {
        $this->az1110b = $az1110b;
        return $this;
    }

    /**
     * Set the az1120.
     *
     * @param float $az1120 The az1120.
     */
    public function setAz1120($az1120) {
        $this->az1120 = $az1120;
        return $this;
    }

    /**
     * Set the az1120b.
     *
     * @param float $az1120b The az1120b.
     */
    public function setAz1120b($az1120b) {
        $this->az1120b = $az1120b;
        return $this;
    }

    /**
     * Set the az3240.
     *
     * @param float $az3240 The az3240.
     */
    public function setAz3240($az3240) {
        $this->az3240 = $az3240;
        return $this;
    }

    /**
     * Set the az3260.
     *
     * @param float $az3260 The az3260.
     */
    public function setAz3260($az3260) {
        $this->az3260 = $az3260;
        return $this;
    }

    /**
     * Set the az3510.
     *
     * @param float $az3510 The az3510.
     */
    public function setAz3510($az3510) {
        $this->az3510 = $az3510;
        return $this;
    }

    /**
     * Set the az3520.
     *
     * @param float $az3520 The az3520.
     */
    public function setAz3520($az3520) {
        $this->az3520 = $az3520;
        return $this;
    }

    /**
     * Set the az38 code.
     *
     * @param string $az38Code The az38 code.
     */
    public function setAz38Code($az38Code) {
        $this->az38Code = $az38Code;
        return $this;
    }

    /**
     * Set the az38 lib.
     *
     * @param string $az38Lib The az38 lib.
     */
    public function setAz38Lib($az38Lib) {
        $this->az38Lib = $az38Lib;
        return $this;
    }

    /**
     * Set the az38b.
     *
     * @param float $az38b The az38b.
     */
    public function setAz38b($az38b) {
        $this->az38b = $az38b;
        return $this;
    }

    /**
     * Set the az38ht.
     *
     * @param float $az38ht The az38ht.
     */
    public function setAz38ht($az38ht) {
        $this->az38ht = $az38ht;
        return $this;
    }

    /**
     * Set the az3910.
     *
     * @param float $az3910 The az3910.
     */
    public function setAz3910($az3910) {
        $this->az3910 = $az3910;
        return $this;
    }

    /**
     * Set the az4200.
     *
     * @param float $az4200 The az4200.
     */
    public function setAz4200($az4200) {
        $this->az4200 = $az4200;
        return $this;
    }

    /**
     * Set the az4201.
     *
     * @param float $az4201 The az4201.
     */
    public function setAz4201($az4201) {
        $this->az4201 = $az4201;
        return $this;
    }

    /**
     * Set the az4204.
     *
     * @param float $az4204 The az4204.
     */
    public function setAz4204($az4204) {
        $this->az4204 = $az4204;
        return $this;
    }

    /**
     * Set the az4206.
     *
     * @param float $az4206 The az4206.
     */
    public function setAz4206($az4206) {
        $this->az4206 = $az4206;
        return $this;
    }

    /**
     * Set the az4207.
     *
     * @param float $az4207 The az4207.
     */
    public function setAz4207($az4207) {
        $this->az4207 = $az4207;
        return $this;
    }

    /**
     * Set the az4208.
     *
     * @param float $az4208 The az4208.
     */
    public function setAz4208($az4208) {
        $this->az4208 = $az4208;
        return $this;
    }

    /**
     * Set the az4209.
     *
     * @param float $az4209 The az4209.
     */
    public function setAz4209($az4209) {
        $this->az4209 = $az4209;
        return $this;
    }

    /**
     * Set the az4210.
     *
     * @param float $az4210 The az4210.
     */
    public function setAz4210($az4210) {
        $this->az4210 = $az4210;
        return $this;
    }

    /**
     * Set the az4211.
     *
     * @param float $az4211 The az4211.
     */
    public function setAz4211($az4211) {
        $this->az4211 = $az4211;
        return $this;
    }

    /**
     * Set the az4212.
     *
     * @param float $az4212 The az4212.
     */
    public function setAz4212($az4212) {
        $this->az4212 = $az4212;
        return $this;
    }

    /**
     * Set the az4213.
     *
     * @param float $az4213 The az4213.
     */
    public function setAz4213($az4213) {
        $this->az4213 = $az4213;
        return $this;
    }

    /**
     * Set the az4215.
     *
     * @param float $az4215 The az4215.
     */
    public function setAz4215($az4215) {
        $this->az4215 = $az4215;
        return $this;
    }

    /**
     * Set the az4220.
     *
     * @param float $az4220 The az4220.
     */
    public function setAz4220($az4220) {
        $this->az4220 = $az4220;
        return $this;
    }

    /**
     * Set the az4222.
     *
     * @param float $az4222 The az4222.
     */
    public function setAz4222($az4222) {
        $this->az4222 = $az4222;
        return $this;
    }

    /**
     * Set the az4223.
     *
     * @param float $az4223 The az4223.
     */
    public function setAz4223($az4223) {
        $this->az4223 = $az4223;
        return $this;
    }

    /**
     * Set the az4224.
     *
     * @param float $az4224 The az4224.
     */
    public function setAz4224($az4224) {
        $this->az4224 = $az4224;
        return $this;
    }

    /**
     * Set the az4228 mtt.
     *
     * @param float $az4228Mtt The az4228 mtt.
     */
    public function setAz4228Mtt($az4228Mtt) {
        $this->az4228Mtt = $az4228Mtt;
        return $this;
    }

    /**
     * Set the az4230.
     *
     * @param float $az4230 The az4230.
     */
    public function setAz4230($az4230) {
        $this->az4230 = $az4230;
        return $this;
    }

    /**
     * Set the az4231.
     *
     * @param float $az4231 The az4231.
     */
    public function setAz4231($az4231) {
        $this->az4231 = $az4231;
        return $this;
    }

    /**
     * Set the az4232.
     *
     * @param float $az4232 The az4232.
     */
    public function setAz4232($az4232) {
        $this->az4232 = $az4232;
        return $this;
    }

    /**
     * Set the az4233.
     *
     * @param float $az4233 The az4233.
     */
    public function setAz4233($az4233) {
        $this->az4233 = $az4233;
        return $this;
    }

    /**
     * Set the az4234.
     *
     * @param float $az4234 The az4234.
     */
    public function setAz4234($az4234) {
        $this->az4234 = $az4234;
        return $this;
    }

    /**
     * Set the az4235.
     *
     * @param float $az4235 The az4235.
     */
    public function setAz4235($az4235) {
        $this->az4235 = $az4235;
        return $this;
    }

    /**
     * Set the az4236.
     *
     * @param float $az4236 The az4236.
     */
    public function setAz4236($az4236) {
        $this->az4236 = $az4236;
        return $this;
    }

    /**
     * Set the az4237.
     *
     * @param float $az4237 The az4237.
     */
    public function setAz4237($az4237) {
        $this->az4237 = $az4237;
        return $this;
    }

    /**
     * Set the az4238.
     *
     * @param float $az4238 The az4238.
     */
    public function setAz4238($az4238) {
        $this->az4238 = $az4238;
        return $this;
    }

    /**
     * Set the az4239.
     *
     * @param float $az4239 The az4239.
     */
    public function setAz4239($az4239) {
        $this->az4239 = $az4239;
        return $this;
    }

    /**
     * Set the az4240.
     *
     * @param float $az4240 The az4240.
     */
    public function setAz4240($az4240) {
        $this->az4240 = $az4240;
        return $this;
    }

    /**
     * Set the az4241.
     *
     * @param float $az4241 The az4241.
     */
    public function setAz4241($az4241) {
        $this->az4241 = $az4241;
        return $this;
    }

    /**
     * Set the az4242.
     *
     * @param float $az4242 The az4242.
     */
    public function setAz4242($az4242) {
        $this->az4242 = $az4242;
        return $this;
    }

    /**
     * Set the az4243.
     *
     * @param float $az4243 The az4243.
     */
    public function setAz4243($az4243) {
        $this->az4243 = $az4243;
        return $this;
    }

    /**
     * Set the az4244.
     *
     * @param float $az4244 The az4244.
     */
    public function setAz4244($az4244) {
        $this->az4244 = $az4244;
        return $this;
    }

    /**
     * Set the az4245.
     *
     * @param float $az4245 The az4245.
     */
    public function setAz4245($az4245) {
        $this->az4245 = $az4245;
        return $this;
    }

    /**
     * Set the az4246.
     *
     * @param float $az4246 The az4246.
     */
    public function setAz4246($az4246) {
        $this->az4246 = $az4246;
        return $this;
    }

    /**
     * Set the az4247.
     *
     * @param float $az4247 The az4247.
     */
    public function setAz4247($az4247) {
        $this->az4247 = $az4247;
        return $this;
    }

    /**
     * Set the az4248.
     *
     * @param float $az4248 The az4248.
     */
    public function setAz4248($az4248) {
        $this->az4248 = $az4248;
        return $this;
    }

    /**
     * Set the az4249.
     *
     * @param float $az4249 The az4249.
     */
    public function setAz4249($az4249) {
        $this->az4249 = $az4249;
        return $this;
    }

    /**
     * Set the az4250.
     *
     * @param float $az4250 The az4250.
     */
    public function setAz4250($az4250) {
        $this->az4250 = $az4250;
        return $this;
    }

    /**
     * Set the az4251.
     *
     * @param float $az4251 The az4251.
     */
    public function setAz4251($az4251) {
        $this->az4251 = $az4251;
        return $this;
    }

    /**
     * Set the az4252.
     *
     * @param float $az4252 The az4252.
     */
    public function setAz4252($az4252) {
        $this->az4252 = $az4252;
        return $this;
    }

    /**
     * Set the az4254.
     *
     * @param float $az4254 The az4254.
     */
    public function setAz4254($az4254) {
        $this->az4254 = $az4254;
        return $this;
    }

    /**
     * Set the az4255.
     *
     * @param float $az4255 The az4255.
     */
    public function setAz4255($az4255) {
        $this->az4255 = $az4255;
        return $this;
    }

    /**
     * Set the az4256.
     *
     * @param float $az4256 The az4256.
     */
    public function setAz4256($az4256) {
        $this->az4256 = $az4256;
        return $this;
    }

    /**
     * Set the az4257.
     *
     * @param float $az4257 The az4257.
     */
    public function setAz4257($az4257) {
        $this->az4257 = $az4257;
        return $this;
    }

    /**
     * Set the az4258.
     *
     * @param float $az4258 The az4258.
     */
    public function setAz4258($az4258) {
        $this->az4258 = $az4258;
        return $this;
    }

    /**
     * Set the az4259.
     *
     * @param float $az4259 The az4259.
     */
    public function setAz4259($az4259) {
        $this->az4259 = $az4259;
        return $this;
    }

    /**
     * Set the az4260.
     *
     * @param float $az4260 The az4260.
     */
    public function setAz4260($az4260) {
        $this->az4260 = $az4260;
        return $this;
    }

    /**
     * Set the az4261.
     *
     * @param float $az4261 The az4261.
     */
    public function setAz4261($az4261) {
        $this->az4261 = $az4261;
        return $this;
    }

    /**
     * Set the az4262.
     *
     * @param float $az4262 The az4262.
     */
    public function setAz4262($az4262) {
        $this->az4262 = $az4262;
        return $this;
    }

    /**
     * Set the az4263.
     *
     * @param float $az4263 The az4263.
     */
    public function setAz4263($az4263) {
        $this->az4263 = $az4263;
        return $this;
    }

    /**
     * Set the az4264.
     *
     * @param float $az4264 The az4264.
     */
    public function setAz4264($az4264) {
        $this->az4264 = $az4264;
        return $this;
    }

    /**
     * Set the az4265.
     *
     * @param float $az4265 The az4265.
     */
    public function setAz4265($az4265) {
        $this->az4265 = $az4265;
        return $this;
    }

    /**
     * Set the az4266.
     *
     * @param float $az4266 The az4266.
     */
    public function setAz4266($az4266) {
        $this->az4266 = $az4266;
        return $this;
    }

    /**
     * Set the az4267.
     *
     * @param float $az4267 The az4267.
     */
    public function setAz4267($az4267) {
        $this->az4267 = $az4267;
        return $this;
    }

    /**
     * Set the az4268.
     *
     * @param float $az4268 The az4268.
     */
    public function setAz4268($az4268) {
        $this->az4268 = $az4268;
        return $this;
    }

    /**
     * Set the az4268 base.
     *
     * @param float $az4268Base The az4268 base.
     */
    public function setAz4268Base($az4268Base) {
        $this->az4268Base = $az4268Base;
        return $this;
    }

    /**
     * Set the az4269.
     *
     * @param float $az4269 The az4269.
     */
    public function setAz4269($az4269) {
        $this->az4269 = $az4269;
        return $this;
    }

    /**
     * Set the az4269 base.
     *
     * @param float $az4269Base The az4269 base.
     */
    public function setAz4269Base($az4269Base) {
        $this->az4269Base = $az4269Base;
        return $this;
    }

    /**
     * Set the az4270.
     *
     * @param float $az4270 The az4270.
     */
    public function setAz4270($az4270) {
        $this->az4270 = $az4270;
        return $this;
    }

    /**
     * Set the az4270 base.
     *
     * @param float $az4270Base The az4270 base.
     */
    public function setAz4270Base($az4270Base) {
        $this->az4270Base = $az4270Base;
        return $this;
    }

    /**
     * Set the az4271.
     *
     * @param float $az4271 The az4271.
     */
    public function setAz4271($az4271) {
        $this->az4271 = $az4271;
        return $this;
    }

    /**
     * Set the az4271 base.
     *
     * @param float $az4271Base The az4271 base.
     */
    public function setAz4271Base($az4271Base) {
        $this->az4271Base = $az4271Base;
        return $this;
    }

    /**
     * Set the az4272.
     *
     * @param float $az4272 The az4272.
     */
    public function setAz4272($az4272) {
        $this->az4272 = $az4272;
        return $this;
    }

    /**
     * Set the az4274.
     *
     * @param float $az4274 The az4274.
     */
    public function setAz4274($az4274) {
        $this->az4274 = $az4274;
        return $this;
    }

    /**
     * Set the az4276.
     *
     * @param float $az4276 The az4276.
     */
    public function setAz4276($az4276) {
        $this->az4276 = $az4276;
        return $this;
    }

    /**
     * Set the az4276 base.
     *
     * @param float $az4276Base The az4276 base.
     */
    public function setAz4276Base($az4276Base) {
        $this->az4276Base = $az4276Base;
        return $this;
    }

    /**
     * Set the az4277.
     *
     * @param float $az4277 The az4277.
     */
    public function setAz4277($az4277) {
        $this->az4277 = $az4277;
        return $this;
    }

    /**
     * Set the az4277 base.
     *
     * @param float $az4277Base The az4277 base.
     */
    public function setAz4277Base($az4277Base) {
        $this->az4277Base = $az4277Base;
        return $this;
    }

    /**
     * Set the az50 code.
     *
     * @param string $az50Code The az50 code.
     */
    public function setAz50Code($az50Code) {
        $this->az50Code = $az50Code;
        return $this;
    }

    /**
     * Set the az50 lib.
     *
     * @param string $az50Lib The az50 lib.
     */
    public function setAz50Lib($az50Lib) {
        $this->az50Lib = $az50Lib;
        return $this;
    }

    /**
     * Set the az50 mtt.
     *
     * @param float $az50Mtt The az50 mtt.
     */
    public function setAz50Mtt($az50Mtt) {
        $this->az50Mtt = $az50Mtt;
        return $this;
    }

    /**
     * Set the az59 code.
     *
     * @param string $az59Code The az59 code.
     */
    public function setAz59Code($az59Code) {
        $this->az59Code = $az59Code;
        return $this;
    }

    /**
     * Set the az59 lib.
     *
     * @param string $az59Lib The az59 lib.
     */
    public function setAz59Lib($az59Lib) {
        $this->az59Lib = $az59Lib;
        return $this;
    }

    /**
     * Set the az59 mtt.
     *
     * @param float $az59Mtt The az59 mtt.
     */
    public function setAz59Mtt($az59Mtt) {
        $this->az59Mtt = $az59Mtt;
        return $this;
    }

    /**
     * Set the az en code.
     *
     * @param string $azEnCode The az en code.
     */
    public function setAzEnCode($azEnCode) {
        $this->azEnCode = $azEnCode;
        return $this;
    }

    /**
     * Set the az en lib.
     *
     * @param string $azEnLib The az en lib.
     */
    public function setAzEnLib($azEnLib) {
        $this->azEnLib = $azEnLib;
        return $this;
    }

    /**
     * Set the az es code.
     *
     * @param string $azEsCode The az es code.
     */
    public function setAzEsCode($azEsCode) {
        $this->azEsCode = $azEsCode;
        return $this;
    }

    /**
     * Set the az es lib.
     *
     * @param string $azEsLib The az es lib.
     */
    public function setAzEsLib($azEsLib) {
        $this->azEsLib = $azEsLib;
        return $this;
    }

    /**
     * Set the az es mtt.
     *
     * @param float $azEsMtt The az es mtt.
     */
    public function setAzEsMtt($azEsMtt) {
        $this->azEsMtt = $azEsMtt;
        return $this;
    }

    /**
     * Set the az eu code.
     *
     * @param string $azEuCode The az eu code.
     */
    public function setAzEuCode($azEuCode) {
        $this->azEuCode = $azEuCode;
        return $this;
    }

    /**
     * Set the az eu lib.
     *
     * @param string $azEuLib The az eu lib.
     */
    public function setAzEuLib($azEuLib) {
        $this->azEuLib = $azEuLib;
        return $this;
    }

    /**
     * Set the az eu mtt.
     *
     * @param float $azEuMtt The az eu mtt.
     */
    public function setAzEuMtt($azEuMtt) {
        $this->azEuMtt = $azEuMtt;
        return $this;
    }

    /**
     * Set the az ex code.
     *
     * @param string $azExCode The az ex code.
     */
    public function setAzExCode($azExCode) {
        $this->azExCode = $azExCode;
        return $this;
    }

    /**
     * Set the az ex lib.
     *
     * @param string $azExLib The az ex lib.
     */
    public function setAzExLib($azExLib) {
        $this->azExLib = $azExLib;
        return $this;
    }

    /**
     * Set the az ex mtt.
     *
     * @param float $azExMtt The az ex mtt.
     */
    public function setAzExMtt($azExMtt) {
        $this->azExMtt = $azExMtt;
        return $this;
    }

    /**
     * Set the az ey code.
     *
     * @param string $azEyCode The az ey code.
     */
    public function setAzEyCode($azEyCode) {
        $this->azEyCode = $azEyCode;
        return $this;
    }

    /**
     * Set the az ey lib.
     *
     * @param string $azEyLib The az ey lib.
     */
    public function setAzEyLib($azEyLib) {
        $this->azEyLib = $azEyLib;
        return $this;
    }

    /**
     * Set the az ey mtt.
     *
     * @param float $azEyMtt The az ey mtt.
     */
    public function setAzEyMtt($azEyMtt) {
        $this->azEyMtt = $azEyMtt;
        return $this;
    }

    /**
     * Set the az ez code.
     *
     * @param string $azEzCode The az ez code.
     */
    public function setAzEzCode($azEzCode) {
        $this->azEzCode = $azEzCode;
        return $this;
    }

    /**
     * Set the az ez lib.
     *
     * @param string $azEzLib The az ez lib.
     */
    public function setAzEzLib($azEzLib) {
        $this->azEzLib = $azEzLib;
        return $this;
    }

    /**
     * Set the az ez mtt.
     *
     * @param float $azEzMtt The az ez mtt.
     */
    public function setAzEzMtt($azEzMtt) {
        $this->azEzMtt = $azEzMtt;
        return $this;
    }

    /**
     * Set the az ga code.
     *
     * @param string $azGaCode The az ga code.
     */
    public function setAzGaCode($azGaCode) {
        $this->azGaCode = $azGaCode;
        return $this;
    }

    /**
     * Set the az ga lib.
     *
     * @param string $azGaLib The az ga lib.
     */
    public function setAzGaLib($azGaLib) {
        $this->azGaLib = $azGaLib;
        return $this;
    }

    /**
     * Set the az ga mtt.
     *
     * @param float $azGaMtt The az ga mtt.
     */
    public function setAzGaMtt($azGaMtt) {
        $this->azGaMtt = $azGaMtt;
        return $this;
    }

    /**
     * Set the az gc code.
     *
     * @param string $azGcCode The az gc code.
     */
    public function setAzGcCode($azGcCode) {
        $this->azGcCode = $azGcCode;
        return $this;
    }

    /**
     * Set the az gc lib.
     *
     * @param string $azGcLib The az gc lib.
     */
    public function setAzGcLib($azGcLib) {
        $this->azGcLib = $azGcLib;
        return $this;
    }

    /**
     * Set the az gc mtt.
     *
     * @param float $azGcMtt The az gc mtt.
     */
    public function setAzGcMtt($azGcMtt) {
        $this->azGcMtt = $azGcMtt;
        return $this;
    }

    /**
     * Set the az hi.
     *
     * @param float $azHi The az hi.
     */
    public function setAzHi($azHi) {
        $this->azHi = $azHi;
        return $this;
    }

    /**
     * Set the az hl.
     *
     * @param float $azHl The az hl.
     */
    public function setAzHl($azHl) {
        $this->azHl = $azHl;
        return $this;
    }

    /**
     * Set the az jb.
     *
     * @param float $azJb The az jb.
     */
    public function setAzJb($azJb) {
        $this->azJb = $azJb;
        return $this;
    }

    /**
     * Set the az jc.
     *
     * @param float $azJc The az jc.
     */
    public function setAzJc($azJc) {
        $this->azJc = $azJc;
        return $this;
    }

    /**
     * Set the az ligne4 mtt.
     *
     * @param float $azLigne4Mtt The az ligne4 mtt.
     */
    public function setAzLigne4Mtt($azLigne4Mtt) {
        $this->azLigne4Mtt = $azLigne4Mtt;
        return $this;
    }

    /**
     * Set the az ligne5 mtt.
     *
     * @param float $azLigne5Mtt The az ligne5 mtt.
     */
    public function setAzLigne5Mtt($azLigne5Mtt) {
        $this->azLigne5Mtt = $azLigne5Mtt;
        return $this;
    }

    /**
     * Set the ca12 mois cloture.
     *
     * @param int $ca12MoisCloture The ca12 mois cloture.
     */
    public function setCa12MoisCloture($ca12MoisCloture) {
        $this->ca12MoisCloture = $ca12MoisCloture;
        return $this;
    }

    /**
     * Set the corres1.
     *
     * @param string $corres1 The corres1.
     */
    public function setCorres1($corres1) {
        $this->corres1 = $corres1;
        return $this;
    }

    /**
     * Set the corres2.
     *
     * @param string $corres2 The corres2.
     */
    public function setCorres2($corres2) {
        $this->corres2 = $corres2;
        return $this;
    }

    /**
     * Set the corres3.
     *
     * @param string $corres3 The corres3.
     */
    public function setCorres3($corres3) {
        $this->corres3 = $corres3;
        return $this;
    }

    /**
     * Set the corres4.
     *
     * @param string $corres4 The corres4.
     */
    public function setCorres4($corres4) {
        $this->corres4 = $corres4;
        return $this;
    }

    /**
     * Set the corres5.
     *
     * @param string $corres5 The corres5.
     */
    public function setCorres5($corres5) {
        $this->corres5 = $corres5;
        return $this;
    }

    /**
     * Set the corres6.
     *
     * @param string $corres6 The corres6.
     */
    public function setCorres6($corres6) {
        $this->corres6 = $corres6;
        return $this;
    }

    /**
     * Set the corres7.
     *
     * @param string $corres7 The corres7.
     */
    public function setCorres7($corres7) {
        $this->corres7 = $corres7;
        return $this;
    }

    /**
     * Set the corres8.
     *
     * @param string $corres8 The corres8.
     */
    public function setCorres8($corres8) {
        $this->corres8 = $corres8;
        return $this;
    }

    /**
     * Set the credit compte.
     *
     * @param bool $creditCompte The credit compte.
     */
    public function setCreditCompte($creditCompte) {
        $this->creditCompte = $creditCompte;
        return $this;
    }

    /**
     * Set the credit imputer.
     *
     * @param bool $creditImputer The credit imputer.
     */
    public function setCreditImputer($creditImputer) {
        $this->creditImputer = $creditImputer;
        return $this;
    }

    /**
     * Set the date dec.
     *
     * @param string $dateDec The date dec.
     */
    public function setDateDec($dateDec) {
        $this->dateDec = $dateDec;
        return $this;
    }

    /**
     * Set the flg ac.
     *
     * @param bool $flgAc The flg ac.
     */
    public function setFlgAc($flgAc) {
        $this->flgAc = $flgAc;
        return $this;
    }

    /**
     * Set the gen auto.
     *
     * @param bool $genAuto The gen auto.
     */
    public function setGenAuto($genAuto) {
        $this->genAuto = $genAuto;
        return $this;
    }

    /**
     * Set the ht taux196.
     *
     * @param float $htTaux196 The ht taux196.
     */
    public function setHtTaux196($htTaux196) {
        $this->htTaux196 = $htTaux196;
        return $this;
    }

    /**
     * Set the ht taux7.
     *
     * @param float $htTaux7 The ht taux7.
     */
    public function setHtTaux7($htTaux7) {
        $this->htTaux7 = $htTaux7;
        return $this;
    }

    /**
     * Set the liqui taxes1.
     *
     * @param string $liquiTaxes1 The liqui taxes1.
     */
    public function setLiquiTaxes1($liquiTaxes1) {
        $this->liquiTaxes1 = $liquiTaxes1;
        return $this;
    }

    /**
     * Set the liqui taxes2.
     *
     * @param string $liquiTaxes2 The liqui taxes2.
     */
    public function setLiquiTaxes2($liquiTaxes2) {
        $this->liquiTaxes2 = $liquiTaxes2;
        return $this;
    }

    /**
     * Set the liqui taxes3.
     *
     * @param string $liquiTaxes3 The liqui taxes3.
     */
    public function setLiquiTaxes3($liquiTaxes3) {
        $this->liquiTaxes3 = $liquiTaxes3;
        return $this;
    }

    /**
     * Set the liqui taxes4.
     *
     * @param string $liquiTaxes4 The liqui taxes4.
     */
    public function setLiquiTaxes4($liquiTaxes4) {
        $this->liquiTaxes4 = $liquiTaxes4;
        return $this;
    }

    /**
     * Set the liqui taxes5.
     *
     * @param string $liquiTaxes5 The liqui taxes5.
     */
    public function setLiquiTaxes5($liquiTaxes5) {
        $this->liquiTaxes5 = $liquiTaxes5;
        return $this;
    }

    /**
     * Set the mention expresse.
     *
     * @param bool $mentionExpresse The mention expresse.
     */
    public function setMentionExpresse($mentionExpresse) {
        $this->mentionExpresse = $mentionExpresse;
        return $this;
    }

    /**
     * Set the monnaie.
     *
     * @param string $monnaie The monnaie.
     */
    public function setMonnaie($monnaie) {
        $this->monnaie = $monnaie;
        return $this;
    }

    /**
     * Set the monnaie tenue.
     *
     * @param string $monnaieTenue The monnaie tenue.
     */
    public function setMonnaieTenue($monnaieTenue) {
        $this->monnaieTenue = $monnaieTenue;
        return $this;
    }

    /**
     * Set the no lot ecritures.
     *
     * @param int $noLotEcritures The no lot ecritures.
     */
    public function setNoLotEcritures($noLotEcritures) {
        $this->noLotEcritures = $noLotEcritures;
        return $this;
    }

    /**
     * Set the p cent.
     *
     * @param float $pCent The p cent.
     */
    public function setPCent($pCent) {
        $this->pCent = $pCent;
        return $this;
    }

    /**
     * Set the paiement imputation.
     *
     * @param bool $paiementImputation The paiement imputation.
     */
    public function setPaiementImputation($paiementImputation) {
        $this->paiementImputation = $paiementImputation;
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
     * Set the report acp.
     *
     * @param float $reportAcp The report acp.
     */
    public function setReportAcp($reportAcp) {
        $this->reportAcp = $reportAcp;
        return $this;
    }

    /**
     * Set the rib titulaire1.
     *
     * @param string $ribTitulaire1 The rib titulaire1.
     */
    public function setRibTitulaire1($ribTitulaire1) {
        $this->ribTitulaire1 = $ribTitulaire1;
        return $this;
    }

    /**
     * Set the rib titulaire2.
     *
     * @param string $ribTitulaire2 The rib titulaire2.
     */
    public function setRibTitulaire2($ribTitulaire2) {
        $this->ribTitulaire2 = $ribTitulaire2;
        return $this;
    }

    /**
     * Set the sel adresse dest.
     *
     * @param string $selAdresseDest The sel adresse dest.
     */
    public function setSelAdresseDest($selAdresseDest) {
        $this->selAdresseDest = $selAdresseDest;
        return $this;
    }

    /**
     * Set the total.
     *
     * @param float $total The total.
     */
    public function setTotal($total) {
        $this->total = $total;
        return $this;
    }

    /**
     * Set the type reglement.
     *
     * @param int $typeReglement The type reglement.
     */
    public function setTypeReglement($typeReglement) {
        $this->typeReglement = $typeReglement;
        return $this;
    }

    /**
     * Set the ville.
     *
     * @param string $ville The ville.
     */
    public function setVille($ville) {
        $this->ville = $ville;
        return $this;
    }

    /**
     * Set the z0031.
     *
     * @param float $z0031 The z0031.
     */
    public function setZ0031($z0031) {
        $this->z0031 = $z0031;
        return $this;
    }

    /**
     * Set the z0031b.
     *
     * @param float $z0031b The z0031b.
     */
    public function setZ0031b($z0031b) {
        $this->z0031b = $z0031b;
        return $this;
    }

    /**
     * Set the z0032.
     *
     * @param float $z0032 The z0032.
     */
    public function setZ0032($z0032) {
        $this->z0032 = $z0032;
        return $this;
    }

    /**
     * Set the z0033.
     *
     * @param float $z0033 The z0033.
     */
    public function setZ0033($z0033) {
        $this->z0033 = $z0033;
        return $this;
    }

    /**
     * Set the z0034.
     *
     * @param float $z0034 The z0034.
     */
    public function setZ0034($z0034) {
        $this->z0034 = $z0034;
        return $this;
    }

    /**
     * Set the z0035.
     *
     * @param float $z0035 The z0035.
     */
    public function setZ0035($z0035) {
        $this->z0035 = $z0035;
        return $this;
    }

    /**
     * Set the z0037.
     *
     * @param float $z0037 The z0037.
     */
    public function setZ0037($z0037) {
        $this->z0037 = $z0037;
        return $this;
    }

    /**
     * Set the z0038.
     *
     * @param float $z0038 The z0038.
     */
    public function setZ0038($z0038) {
        $this->z0038 = $z0038;
        return $this;
    }

    /**
     * Set the z0040.
     *
     * @param float $z0040 The z0040.
     */
    public function setZ0040($z0040) {
        $this->z0040 = $z0040;
        return $this;
    }

    /**
     * Set the z0040b.
     *
     * @param float $z0040b The z0040b.
     */
    public function setZ0040b($z0040b) {
        $this->z0040b = $z0040b;
        return $this;
    }

    /**
     * Set the z0041.
     *
     * @param float $z0041 The z0041.
     */
    public function setZ0041($z0041) {
        $this->z0041 = $z0041;
        return $this;
    }

    /**
     * Set the z01.
     *
     * @param float $z01 The z01.
     */
    public function setZ01($z01) {
        $this->z01 = $z01;
        return $this;
    }

    /**
     * Set the z0100.
     *
     * @param float $z0100 The z0100.
     */
    public function setZ0100($z0100) {
        $this->z0100 = $z0100;
        return $this;
    }

    /**
     * Set the z0100b.
     *
     * @param float $z0100b The z0100b.
     */
    public function setZ0100b($z0100b) {
        $this->z0100b = $z0100b;
        return $this;
    }

    /**
     * Set the z0121b.
     *
     * @param float $z0121b The z0121b.
     */
    public function setZ0121b($z0121b) {
        $this->z0121b = $z0121b;
        return $this;
    }

    /**
     * Set the z02.
     *
     * @param float $z02 The z02.
     */
    public function setZ02($z02) {
        $this->z02 = $z02;
        return $this;
    }

    /**
     * Set the z0200.
     *
     * @param float $z0200 The z0200.
     */
    public function setZ0200($z0200) {
        $this->z0200 = $z0200;
        return $this;
    }

    /**
     * Set the z0200b.
     *
     * @param float $z0200b The z0200b.
     */
    public function setZ0200b($z0200b) {
        $this->z0200b = $z0200b;
        return $this;
    }

    /**
     * Set the z0205.
     *
     * @param float $z0205 The z0205.
     */
    public function setZ0205($z0205) {
        $this->z0205 = $z0205;
        return $this;
    }

    /**
     * Set the z0205b.
     *
     * @param float $z0205b The z0205b.
     */
    public function setZ0205b($z0205b) {
        $this->z0205b = $z0205b;
        return $this;
    }

    /**
     * Set the z0600.
     *
     * @param float $z0600 The z0600.
     */
    public function setZ0600($z0600) {
        $this->z0600 = $z0600;
        return $this;
    }

    /**
     * Set the z0701.
     *
     * @param float $z0701 The z0701.
     */
    public function setZ0701($z0701) {
        $this->z0701 = $z0701;
        return $this;
    }

    /**
     * Set the z0702.
     *
     * @param float $z0702 The z0702.
     */
    public function setZ0702($z0702) {
        $this->z0702 = $z0702;
        return $this;
    }

    /**
     * Set the z0702b.
     *
     * @param float $z0702b The z0702b.
     */
    public function setZ0702b($z0702b) {
        $this->z0702b = $z0702b;
        return $this;
    }

    /**
     * Set the z0703.
     *
     * @param float $z0703 The z0703.
     */
    public function setZ0703($z0703) {
        $this->z0703 = $z0703;
        return $this;
    }

    /**
     * Set the z0703b.
     *
     * @param float $z0703b The z0703b.
     */
    public function setZ0703b($z0703b) {
        $this->z0703b = $z0703b;
        return $this;
    }

    /**
     * Set the z0705.
     *
     * @param float $z0705 The z0705.
     */
    public function setZ0705($z0705) {
        $this->z0705 = $z0705;
        return $this;
    }

    /**
     * Set the z0900.
     *
     * @param float $z0900 The z0900.
     */
    public function setZ0900($z0900) {
        $this->z0900 = $z0900;
        return $this;
    }

    /**
     * Set the z0900b.
     *
     * @param float $z0900b The z0900b.
     */
    public function setZ0900b($z0900b) {
        $this->z0900b = $z0900b;
        return $this;
    }

    /**
     * Set the z0920.
     *
     * @param float $z0920 The z0920.
     */
    public function setZ0920($z0920) {
        $this->z0920 = $z0920;
        return $this;
    }

    /**
     * Set the z0920b.
     *
     * @param float $z0920b The z0920b.
     */
    public function setZ0920b($z0920b) {
        $this->z0920b = $z0920b;
        return $this;
    }

    /**
     * Set the z0950.
     *
     * @param float $z0950 The z0950.
     */
    public function setZ0950($z0950) {
        $this->z0950 = $z0950;
        return $this;
    }

    /**
     * Set the z0950b.
     *
     * @param float $z0950b The z0950b.
     */
    public function setZ0950b($z0950b) {
        $this->z0950b = $z0950b;
        return $this;
    }

    /**
     * Set the z12 code.
     *
     * @param string $z12Code The z12 code.
     */
    public function setZ12Code($z12Code) {
        $this->z12Code = $z12Code;
        return $this;
    }

    /**
     * Set the z12 lib.
     *
     * @param string $z12Lib The z12 lib.
     */
    public function setZ12Lib($z12Lib) {
        $this->z12Lib = $z12Lib;
        return $this;
    }

    /**
     * Set the z12 taxe.
     *
     * @param float $z12Taxe The z12 taxe.
     */
    public function setZ12Taxe($z12Taxe) {
        $this->z12Taxe = $z12Taxe;
        return $this;
    }

    /**
     * Set the z14.
     *
     * @param float $z14 The z14.
     */
    public function setZ14($z14) {
        $this->z14 = $z14;
        return $this;
    }

    /**
     * Set the z18.
     *
     * @param float $z18 The z18.
     */
    public function setZ18($z18) {
        $this->z18 = $z18;
        return $this;
    }

    /**
     * Set the z196.
     *
     * @param float $z196 The z196.
     */
    public function setZ196($z196) {
        $this->z196 = $z196;
        return $this;
    }

    /**
     * Set the z196b.
     *
     * @param float $z196b The z196b.
     */
    public function setZ196b($z196b) {
        $this->z196b = $z196b;
        return $this;
    }

    /**
     * Set the z21.
     *
     * @param float $z21 The z21.
     */
    public function setZ21($z21) {
        $this->z21 = $z21;
        return $this;
    }

    /**
     * Set the z25.
     *
     * @param float $z25 The z25.
     */
    public function setZ25($z25) {
        $this->z25 = $z25;
        return $this;
    }

    /**
     * Set the z4227.
     *
     * @param float $z4227 The z4227.
     */
    public function setZ4227($z4227) {
        $this->z4227 = $z4227;
        return $this;
    }

    /**
     * Set the z8001.
     *
     * @param float $z8001 The z8001.
     */
    public function setZ8001($z8001) {
        $this->z8001 = $z8001;
        return $this;
    }

    /**
     * Set the z8002.
     *
     * @param float $z8002 The z8002.
     */
    public function setZ8002($z8002) {
        $this->z8002 = $z8002;
        return $this;
    }

    /**
     * Set the z8003.
     *
     * @param float $z8003 The z8003.
     */
    public function setZ8003($z8003) {
        $this->z8003 = $z8003;
        return $this;
    }

    /**
     * Set the z8003c.
     *
     * @param float $z8003c The z8003c.
     */
    public function setZ8003c($z8003c) {
        $this->z8003c = $z8003c;
        return $this;
    }

    /**
     * Set the z8005.
     *
     * @param float $z8005 The z8005.
     */
    public function setZ8005($z8005) {
        $this->z8005 = $z8005;
        return $this;
    }

    /**
     * Set the z9979.
     *
     * @param float $z9979 The z9979.
     */
    public function setZ9979($z9979) {
        $this->z9979 = $z9979;
        return $this;
    }

    /**
     * Set the z9989.
     *
     * @param float $z9989 The z9989.
     */
    public function setZ9989($z9989) {
        $this->z9989 = $z9989;
        return $this;
    }

    /**
     * Set the z9991.
     *
     * @param float $z9991 The z9991.
     */
    public function setZ9991($z9991) {
        $this->z9991 = $z9991;
        return $this;
    }

    /**
     * Set the z9999.
     *
     * @param float $z9999 The z9999.
     */
    public function setZ9999($z9999) {
        $this->z9999 = $z9999;
        return $this;
    }

    /**
     * Set the z9 b taxe.
     *
     * @param float $z9BTaxe The z9 b taxe.
     */
    public function setZ9BTaxe($z9BTaxe) {
        $this->z9BTaxe = $z9BTaxe;
        return $this;
    }

    /**
     * Set the b groupe.
     *
     * @param bool $bGroupe The b groupe.
     */
    public function setbGroupe($bGroupe) {
        $this->bGroupe = $bGroupe;
        return $this;
    }

    /**
     * Set the z0029.
     *
     * @param float $z0029 The z0029.
     */
    public function setz0029($z0029) {
        $this->z0029 = $z0029;
        return $this;
    }

    /**
     * Set the z0030.
     *
     * @param float $z0030 The z0030.
     */
    public function setz0030($z0030) {
        $this->z0030 = $z0030;
        return $this;
    }

    /**
     * Set the z0036.
     *
     * @param float $z0036 The z0036.
     */
    public function setz0036($z0036) {
        $this->z0036 = $z0036;
        return $this;
    }

    /**
     * Set the z0039.
     *
     * @param float $z0039 The z0039.
     */
    public function setz0039($z0039) {
        $this->z0039 = $z0039;
        return $this;
    }

    /**
     * Set the z0044.
     *
     * @param float $z0044 The z0044.
     */
    public function setz0044($z0044) {
        $this->z0044 = $z0044;
        return $this;
    }

    /**
     * Set the z0044b.
     *
     * @param float $z0044b The z0044b.
     */
    public function setz0044b($z0044b) {
        $this->z0044b = $z0044b;
        return $this;
    }

    /**
     * Set the z0045.
     *
     * @param float $z0045 The z0045.
     */
    public function setz0045($z0045) {
        $this->z0045 = $z0045;
        return $this;
    }

    /**
     * Set the z0046.
     *
     * @param float $z0046 The z0046.
     */
    public function setz0046($z0046) {
        $this->z0046 = $z0046;
        return $this;
    }

    /**
     * Set the z0059b.
     *
     * @param float $z0059b The z0059b.
     */
    public function setz0059b($z0059b) {
        $this->z0059b = $z0059b;
        return $this;
    }

    /**
     * Set the z0121.
     *
     * @param float $z0121 The z0121.
     */
    public function setz0121($z0121) {
        $this->z0121 = $z0121;
        return $this;
    }

    /**
     * Set the z0151.
     *
     * @param float $z0151 The z0151.
     */
    public function setz0151($z0151) {
        $this->z0151 = $z0151;
        return $this;
    }

    /**
     * Set the z0151b.
     *
     * @param float $z0151b The z0151b.
     */
    public function setz0151b($z0151b) {
        $this->z0151b = $z0151b;
        return $this;
    }

    /**
     * Set the z0207.
     *
     * @param float $z0207 The z0207.
     */
    public function setz0207($z0207) {
        $this->z0207 = $z0207;
        return $this;
    }

    /**
     * Set the z0207b.
     *
     * @param float $z0207b The z0207b.
     */
    public function setz0207b($z0207b) {
        $this->z0207b = $z0207b;
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
     * Set the z12 ht.
     *
     * @param float $z12Ht The z12 ht.
     */
    public function setz12Ht($z12Ht) {
        $this->z12Ht = $z12Ht;
        return $this;
    }

    /**
     * Set the z9b code.
     *
     * @param string $z9bCode The z9b code.
     */
    public function setz9bCode($z9bCode) {
        $this->z9bCode = $z9bCode;
        return $this;
    }

    /**
     * Set the z9b ht.
     *
     * @param float $z9bHt The z9b ht.
     */
    public function setz9bHt($z9bHt) {
        $this->z9bHt = $z9bHt;
        return $this;
    }

    /**
     * Set the z9b lib.
     *
     * @param string $z9bLib The z9b lib.
     */
    public function setz9bLib($z9bLib) {
        $this->z9bLib = $z9bLib;
        return $this;
    }
}
