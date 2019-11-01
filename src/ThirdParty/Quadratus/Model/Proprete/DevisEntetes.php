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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolClientProspectTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateCreationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateDevisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateModificationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantHtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxTvaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroPjTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringBtqTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCiviliteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCommercialTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodePaysTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodePostalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringComplementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLienDocumentTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomAdresseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomSuite2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomSuite3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomSuiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomVilleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomVoieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumDevisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumVoieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringReference1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringReference2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringReference3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringReference4Trait;

/**
 * Devis entetes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class DevisEntetes {

    use StringBtqTrait;
    use StringCiviliteTrait;
    use BoolClientProspectTrait;
    use StringCodeClientTrait;
    use StringCodeCommercialTrait;
    use StringCodePaysTrait;
    use StringCodePostalTrait;
    use StringComplementTrait;
    use DateTimeDateCreationTrait;
    use DateTimeDateDevisTrait;
    use DateTimeDateModificationTrait;
    use StringEtatTrait;
    use StringLibelleTrait;
    use StringLienDocumentTrait;
    use FloatMontantHtTrait;
    use StringNomAdresseTrait;
    use StringNomSuiteTrait;
    use StringNomSuite2Trait;
    use StringNomSuite3Trait;
    use StringNomVilleTrait;
    use StringNomVoieTrait;
    use StringNumDevisTrait;
    use StringNumVoieTrait;
    use IntNumeroPjTrait;
    use StringReference1Trait;
    use StringReference2Trait;
    use StringReference3Trait;
    use StringReference4Trait;
    use FloatTauxTvaTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
