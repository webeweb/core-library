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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeAnciennBtpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatBaseBruteCotCcpbtpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatBaseBruteCotOppbtpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatBaseBruteCpbtpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatBrutIrcantecTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatBtpSalMoyenTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCsgSpecifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDureeTravTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatExoHMnt1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatExoHMnt2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatExoHMnt3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatExoHMnt4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatExoHMnt5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatExoHMntDeducCotPat1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatExoHMntDeducCotPat2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatExoHMntDeducCotPat3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatExoHMntDeducCotPat4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatExoHMntDeducCotPat5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatExoHMntDeducCotPatTotTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatExoHMntReducCotSal1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatExoHMntReducCotSal2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatExoHMntReducCotSal3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatExoHMntReducCotSal4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatExoHMntReducCotSal5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatExoHMntReducCotSalTotTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatExoHNbHj1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatExoHNbHj2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatExoHNbHj3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatExoHNbHj4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatExoHNbHj5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatFormaProBaseCddTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatFormaProBaseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatIndCpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatIndIntempTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantBPlaf2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantBPlaf3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantBPlaf4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantBPlaf5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantBPlafTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantBrut2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantBrut3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantBrut4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantBrut5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantBrutTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantSommeIsolBrut2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantSommeIsolBrut3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantSommeIsolBrut4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantSommeIsolBrut5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantSommeIsolBrutTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantSommeIsolPlaf2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantSommeIsolPlaf3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantSommeIsolPlaf4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantSommeIsolPlaf5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantSommeIsolPlafTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMtJRtt2007Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbhChomPartielTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbhSemIrcantecTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbJRtt2007Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbPeriodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPlafIrcantecTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatSupplFamTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTaxeApprentissageBaseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTaxeSalaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTrAIrcantecTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTrBIrcantecTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntCodeEtablissementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroOrdreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAnneeSommeIsol2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAnneeSommeIsol3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAnneeSommeIsol4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAnneeSommeIsol5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAnneeSommeIsolTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringBenefAssedicTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClassBtpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeDureeTravTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeLibBPlaf2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeLibBPlaf3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeLibBPlaf4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeLibBPlaf5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeLibBPlafTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeLibBrut2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeLibBrut3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeLibBrut4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeLibBrut5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeLibBrutTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeLibCsgTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeLibIrc1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeLibIrc2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeLibIrc3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeLibSomme2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeLibSomme3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeLibSomme4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeLibSomme5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeLibSommeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeMetierBtpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTypeBPlaf2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTypeBPlaf3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTypeBPlaf4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTypeBPlaf5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTypeBPlafTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTypeBrut2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTypeBrut3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTypeBrut4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTypeBrut5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTypeBrutTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTypeSomme2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTypeSomme3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTypeSomme4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTypeSomme5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTypeSommeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringExoHCode1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringExoHCode2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringExoHCode3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringExoHCode4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringExoHCode5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringQualifUniteTempsTrait;

/**
 * Emp dadsu calcul.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class EmpDadsuCalcul {

    use DateTimeAnciennBtpTrait;
    use StringAnneeSommeIsolTrait;
    use StringAnneeSommeIsol2Trait;
    use StringAnneeSommeIsol3Trait;
    use StringAnneeSommeIsol4Trait;
    use StringAnneeSommeIsol5Trait;
    use FloatBtpSalMoyenTrait;
    use FloatBaseBruteCpbtpTrait;
    use FloatBaseBruteCotCcpbtpTrait;
    use FloatBaseBruteCotOppbtpTrait;
    use StringBenefAssedicTrait;
    use FloatBrutIrcantecTrait;
    use StringCodeClassBtpTrait;
    use StringCodeDureeTravTrait;
    use IntCodeEtablissementTrait;
    use StringCodeLibBPlafTrait;
    use StringCodeLibBPlaf2Trait;
    use StringCodeLibBPlaf3Trait;
    use StringCodeLibBPlaf4Trait;
    use StringCodeLibBPlaf5Trait;
    use StringCodeLibBrutTrait;
    use StringCodeLibBrut2Trait;
    use StringCodeLibBrut3Trait;
    use StringCodeLibBrut4Trait;
    use StringCodeLibBrut5Trait;
    use StringCodeLibCsgTrait;
    use StringCodeLibIrc1Trait;
    use StringCodeLibIrc2Trait;
    use StringCodeLibIrc3Trait;
    use StringCodeLibSommeTrait;
    use StringCodeLibSomme2Trait;
    use StringCodeLibSomme3Trait;
    use StringCodeLibSomme4Trait;
    use StringCodeLibSomme5Trait;
    use StringCodeMetierBtpTrait;
    use StringCodeTypeBPlafTrait;
    use StringCodeTypeBPlaf2Trait;
    use StringCodeTypeBPlaf3Trait;
    use StringCodeTypeBPlaf4Trait;
    use StringCodeTypeBPlaf5Trait;
    use StringCodeTypeBrutTrait;
    use StringCodeTypeBrut2Trait;
    use StringCodeTypeBrut3Trait;
    use StringCodeTypeBrut4Trait;
    use StringCodeTypeBrut5Trait;
    use StringCodeTypeSommeTrait;
    use StringCodeTypeSomme2Trait;
    use StringCodeTypeSomme3Trait;
    use StringCodeTypeSomme4Trait;
    use StringCodeTypeSomme5Trait;
    use FloatCsgSpecifTrait;
    use FloatDureeTravTrait;
    use StringExoHCode1Trait;
    use StringExoHCode2Trait;
    use StringExoHCode3Trait;
    use StringExoHCode4Trait;
    use StringExoHCode5Trait;
    use FloatExoHMnt1Trait;
    use FloatExoHMnt2Trait;
    use FloatExoHMnt3Trait;
    use FloatExoHMnt4Trait;
    use FloatExoHMnt5Trait;
    use FloatExoHMntDeducCotPat1Trait;
    use FloatExoHMntDeducCotPat2Trait;
    use FloatExoHMntDeducCotPat3Trait;
    use FloatExoHMntDeducCotPat4Trait;
    use FloatExoHMntDeducCotPat5Trait;
    use FloatExoHMntDeducCotPatTotTrait;
    use FloatExoHMntReducCotSal1Trait;
    use FloatExoHMntReducCotSal2Trait;
    use FloatExoHMntReducCotSal3Trait;
    use FloatExoHMntReducCotSal4Trait;
    use FloatExoHMntReducCotSal5Trait;
    use FloatExoHMntReducCotSalTotTrait;
    use FloatExoHNbHj1Trait;
    use FloatExoHNbHj2Trait;
    use FloatExoHNbHj3Trait;
    use FloatExoHNbHj4Trait;
    use FloatExoHNbHj5Trait;
    use FloatFormaProBaseTrait;
    use FloatFormaProBaseCddTrait;
    use FloatIndCpTrait;
    use FloatIndIntempTrait;
    use FloatMontantBPlafTrait;
    use FloatMontantBPlaf2Trait;
    use FloatMontantBPlaf3Trait;
    use FloatMontantBPlaf4Trait;
    use FloatMontantBPlaf5Trait;
    use FloatMontantBrutTrait;
    use FloatMontantBrut2Trait;
    use FloatMontantBrut3Trait;
    use FloatMontantBrut4Trait;
    use FloatMontantBrut5Trait;
    use FloatMontantSommeIsolBrutTrait;
    use FloatMontantSommeIsolBrut2Trait;
    use FloatMontantSommeIsolBrut3Trait;
    use FloatMontantSommeIsolBrut4Trait;
    use FloatMontantSommeIsolBrut5Trait;
    use FloatMontantSommeIsolPlafTrait;
    use FloatMontantSommeIsolPlaf2Trait;
    use FloatMontantSommeIsolPlaf3Trait;
    use FloatMontantSommeIsolPlaf4Trait;
    use FloatMontantSommeIsolPlaf5Trait;
    use FloatMtJRtt2007Trait;
    use FloatNbJRtt2007Trait;
    use FloatNbPeriodeTrait;
    use FloatNbhChomPartielTrait;
    use FloatNbhSemIrcantecTrait;
    use StringNumeroTrait;
    use IntNumeroOrdreTrait;
    use FloatPlafIrcantecTrait;
    use StringQualifUniteTempsTrait;
    use FloatSupplFamTrait;
    use FloatTaxeApprentissageBaseTrait;
    use FloatTaxeSalaireTrait;
    use FloatTrAIrcantecTrait;
    use FloatTrBIrcantecTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
