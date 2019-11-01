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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolActifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTds107Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTds108Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTds109Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTds110Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTds111Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTds113Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTds119Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTds120Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTds121Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTds122Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatActionsGratuitesNbreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatActionsGratuitesValeurUTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAutresSommesExoMnt1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAutresSommesExoMnt2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAutresSommesExoMnt3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAutresSommesExoMnt4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatBaseExoBrut1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatBaseExoBrut2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatBaseExoBrut3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatBaseExoPlaf1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatBaseExoPlaf2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatBaseExoPlaf3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCsgSpecifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatEpargneSalMnt1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatEpargneSalMnt2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatEpargneSalMnt3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatEpargneSalMnt4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatGpecMntExoCotSecuTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatGpecMntExoCsgcrdsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatIndCpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatIndemnCpPlafTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatIndemnImpatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatIndemnRuptureMnt1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatIndemnRuptureMnt2Trait;
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
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatParticipPatronAvtgeMnt1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatParticipPatronAvtgeMnt2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatParticipServPersTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTaxeSalaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTds100Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTds103Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTds105Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTds112Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTds117Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTds125Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTds132Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTds134Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTds135Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTds136Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTds137Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTds141Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTds142Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTds81Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTds82Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTdsAllocRetraiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTotalPlafTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntCodeEtablissementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntIndiceRectifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroOrdreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroTrait;

/**
 * Emp dadsu rectif.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class EmpDadsuRectif {

    use BoolActifTrait;
    use FloatActionsGratuitesNbreTrait;
    use FloatActionsGratuitesValeurUTrait;
    use FloatAutresSommesExoMnt1Trait;
    use FloatAutresSommesExoMnt2Trait;
    use FloatAutresSommesExoMnt3Trait;
    use FloatAutresSommesExoMnt4Trait;
    use FloatBaseExoBrut1Trait;
    use FloatBaseExoBrut2Trait;
    use FloatBaseExoBrut3Trait;
    use FloatBaseExoPlaf1Trait;
    use FloatBaseExoPlaf2Trait;
    use FloatBaseExoPlaf3Trait;
    use IntCodeEtablissementTrait;
    use FloatCsgSpecifTrait;
    use FloatEpargneSalMnt1Trait;
    use FloatEpargneSalMnt2Trait;
    use FloatEpargneSalMnt3Trait;
    use FloatEpargneSalMnt4Trait;
    use FloatGpecMntExoCsgcrdsTrait;
    use FloatGpecMntExoCotSecuTrait;
    use FloatIndCpTrait;
    use FloatIndemnCpPlafTrait;
    use FloatIndemnImpatTrait;
    use FloatIndemnRuptureMnt1Trait;
    use FloatIndemnRuptureMnt2Trait;
    use IntIndiceRectifTrait;
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
    use StringNumeroTrait;
    use IntNumeroOrdreTrait;
    use FloatParticipPatronAvtgeMnt1Trait;
    use FloatParticipPatronAvtgeMnt2Trait;
    use FloatParticipServPersTrait;
    use FloatTds100Trait;
    use FloatTds103Trait;
    use FloatTds105Trait;
    use BoolTds107Trait;
    use BoolTds108Trait;
    use BoolTds109Trait;
    use BoolTds110Trait;
    use BoolTds111Trait;
    use FloatTds112Trait;
    use BoolTds113Trait;
    use FloatTds117Trait;
    use BoolTds119Trait;
    use BoolTds120Trait;
    use BoolTds121Trait;
    use BoolTds122Trait;
    use FloatTds125Trait;
    use FloatTds132Trait;
    use FloatTds134Trait;
    use FloatTds135Trait;
    use FloatTds136Trait;
    use FloatTds141Trait;
    use FloatTds81Trait;
    use FloatTds82Trait;
    use FloatTaxeSalaireTrait;
    use FloatTds137Trait;
    use FloatTds142Trait;
    use FloatTdsAllocRetraiteTrait;
    use FloatTotalPlafTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
