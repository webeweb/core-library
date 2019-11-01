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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateEntreeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateSortieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDetentionDirecteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDetentionIndirecteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumUniqTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringBtqTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodePostalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringComplementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCptFilialeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFormeJuridiqueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibDossTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNoDossTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomVoieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumVoieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSirenTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringVilleTrait;

/**
 * Dec tva filiales.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class DecTvaFiliales {

    use StringBtqTrait;
    use StringCodePostalTrait;
    use StringComplementTrait;
    use StringCptFilialeTrait;
    use DateTimeDateEntreeTrait;
    use DateTimeDateSortieTrait;
    use FloatDetentionDirecteTrait;
    use FloatDetentionIndirecteTrait;
    use StringFormeJuridiqueTrait;
    use StringLibDossTrait;
    use StringNoDossTrait;
    use StringNomVoieTrait;
    use IntNumUniqTrait;
    use StringNumVoieTrait;
    use StringSirenTrait;
    use StringVilleTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
