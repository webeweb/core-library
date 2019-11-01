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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFactureIsoleeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateCreatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateDebAffaireDebMoisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateDebAffaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateFinAffaireFinMoisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateFinAffaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateModifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateVenteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCaStatAnnuelTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringBtqTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringBureauDistributeurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAffaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAnalytiqueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCommercialTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeFactorTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodePaysTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodePostalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeRegMargeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTvaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeVentilComptaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringComplementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringGroupeSousTraiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomAdresseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomAffaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomSuiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomVoieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumVoieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringReferenceFacture2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringReferenceFactureTrait;

/**
 * Affaires.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class Affaires {

    use StringBtqTrait;
    use StringBureauDistributeurTrait;
    use FloatCaStatAnnuelTrait;
    use StringCodeAffaireTrait;
    use StringCodeAnalytiqueTrait;
    use StringCodeClientTrait;
    use StringCodeCommercialTrait;
    use StringCodeFactorTrait;
    use StringCodePaysTrait;
    use StringCodePostalTrait;
    use StringCodeRegMargeTrait;
    use StringCodeTvaTrait;
    use StringCodeVentilComptaTrait;
    use StringComplementTrait;
    use DateTimeDateCreatTrait;
    use DateTimeDateDebAffaireTrait;
    use DateTimeDateDebAffaireDebMoisTrait;
    use DateTimeDateFinAffaireTrait;
    use DateTimeDateFinAffaireFinMoisTrait;
    use DateTimeDateModifTrait;
    use DateTimeDateVenteTrait;
    use BoolFactureIsoleeTrait;
    use StringGroupeSousTraiteTrait;
    use StringNomAdresseTrait;
    use StringNomAffaireTrait;
    use StringNomSuiteTrait;
    use StringNomVoieTrait;
    use StringNumVoieTrait;
    use StringReferenceFactureTrait;
    use StringReferenceFacture2Trait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
