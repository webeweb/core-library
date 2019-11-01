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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCreditCompteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCreditImputerTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateCessionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateCreationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateDemandeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAutresOpe1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAutresOpe2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAutresOpe3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAutresOpe4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatAutresOpeTotalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCreditNonRembTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatExpBiens1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatExpBiens2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatExpBiens3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatExpBiens4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatExpBiensTotalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatIntracom1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatIntracom2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatIntracom3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatIntracom4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatIntracomTotalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontant1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontant2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontant3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantRbtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPlafondRbtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRbtDemandeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatReportCreditTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxTva1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxTva2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxTva3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxTva4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTotalColonne1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTotalColonne2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTotalColonne3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTotalColonne4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTotalColonne5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTvaFictive1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTvaFictive2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTvaFictive3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTvaFictive4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTvaFictive5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTvaFictivePrecTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTvaFictivePresTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntMois1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntMois2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntMois3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNationaliteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntTypeDemandeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringBicTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCommentaires1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCommentaires2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCommentaires3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCommentaires4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCommentaires5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringExpPeriodesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIbanTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomPrenomTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringQualiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRibTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringVilleTrait;

/**
 * Dec tva3519.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class DecTva3519 {

    use FloatAutresOpe1Trait;
    use FloatAutresOpe2Trait;
    use FloatAutresOpe3Trait;
    use FloatAutresOpe4Trait;
    use FloatAutresOpeTotalTrait;
    use StringBicTrait;
    use StringCommentaires1Trait;
    use StringCommentaires2Trait;
    use StringCommentaires3Trait;
    use StringCommentaires4Trait;
    use StringCommentaires5Trait;
    use BoolCreditCompteTrait;
    use BoolCreditImputerTrait;
    use FloatCreditNonRembTrait;
    use DateTimeDateCessionTrait;
    use DateTimeDateCreationTrait;
    use DateTimeDateDemandeTrait;
    use FloatExpBiens1Trait;
    use FloatExpBiens2Trait;
    use FloatExpBiens3Trait;
    use FloatExpBiens4Trait;
    use FloatExpBiensTotalTrait;
    use StringExpPeriodesTrait;
    use StringIbanTrait;
    use FloatIntracom1Trait;
    use FloatIntracom2Trait;
    use FloatIntracom3Trait;
    use FloatIntracom4Trait;
    use FloatIntracomTotalTrait;
    use IntMois1Trait;
    use IntMois2Trait;
    use IntMois3Trait;
    use FloatMontant1Trait;
    use FloatMontant2Trait;
    use FloatMontant3Trait;
    use FloatMontantRbtTrait;
    use IntNationaliteTrait;
    use StringNomPrenomTrait;
    use DateTimePeriodeTrait;
    use FloatPlafondRbtTrait;
    use StringQualiteTrait;
    use StringRibTrait;
    use FloatRbtDemandeTrait;
    use FloatReportCreditTrait;
    use FloatTvaFictive1Trait;
    use FloatTvaFictive2Trait;
    use FloatTvaFictive3Trait;
    use FloatTvaFictive4Trait;
    use FloatTvaFictive5Trait;
    use FloatTvaFictivePrecTrait;
    use FloatTvaFictivePresTrait;
    use FloatTauxTva1Trait;
    use FloatTauxTva2Trait;
    use FloatTauxTva3Trait;
    use FloatTauxTva4Trait;
    use FloatTotalColonne1Trait;
    use FloatTotalColonne2Trait;
    use FloatTotalColonne3Trait;
    use FloatTotalColonne4Trait;
    use FloatTotalColonne5Trait;
    use IntTypeDemandeTrait;
    use StringVilleTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
