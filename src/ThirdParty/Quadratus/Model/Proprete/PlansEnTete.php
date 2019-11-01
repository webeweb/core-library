<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete;

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolRevisionAnnuelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateRevisionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDtAvantDernPrepaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDtDernPrepaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDtValiditeFactDebDebMoisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDtValiditeFactDebTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDtValiditeFactFinFinMoisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDtValiditeFactFinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantHtpxTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantHtvmTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumBtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringBtqTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringBureauDistributeurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCiviliteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAffaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeChantierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodePaysTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodePostalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeRegroupementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringComplementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringJourFactTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomSuite2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomSuite3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomSuiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomVoieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroCommandeWebFtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroDevisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumVoieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringReferenceFacture2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringReferenceFactureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeAdresseTrait;

/**
 * Plans en tete.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class PlansEnTete {

    use StringBtqTrait;
    use StringBureauDistributeurTrait;
    use StringCiviliteTrait;
    use StringCodeAffaireTrait;
    use StringCodeChantierTrait;
    use StringCodeClientTrait;
    use StringCodePaysTrait;
    use StringCodePostalTrait;
    use StringCodeRegroupementTrait;
    use StringComplementTrait;
    use DateTimeDateRevisionTrait;
    use DateTimeDtAvantDernPrepaTrait;
    use DateTimeDtDernPrepaTrait;
    use DateTimeDtValiditeFactDebTrait;
    use DateTimeDtValiditeFactDebDebMoisTrait;
    use DateTimeDtValiditeFactFinTrait;
    use DateTimeDtValiditeFactFinFinMoisTrait;
    use StringJourFactTrait;
    use FloatMontantHtpxTrait;
    use FloatMontantHtvmTrait;
    use StringNomClientTrait;
    use StringNomSuiteTrait;
    use StringNomSuite2Trait;
    use StringNomSuite3Trait;
    use StringNomVoieTrait;
    use IntNumBtTrait;
    use StringNumVoieTrait;
    use StringNumeroCommandeWebFtTrait;
    use StringNumeroDevisTrait;
    use StringReferenceFactureTrait;
    use StringReferenceFacture2Trait;
    use BoolRevisionAnnuelleTrait;
    use StringTypeAdresseTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
