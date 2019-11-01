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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateDebauchageTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateEmbauchageTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeDeclaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHTravTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatSalaireBrutTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxAtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntCodeEtablissementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumLigneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCommuneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNoEtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomEmployeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroAssureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroEmployeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringOrganismeTrait;

/**
 * Lignes cafat.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class LignesCafat {

    use StringCodeCommuneTrait;
    use IntCodeEtablissementTrait;
    use DateTimeDateDebauchageTrait;
    use DateTimeDateEmbauchageTrait;
    use FloatNbHTravTrait;
    use StringNoEtTrait;
    use StringNomEmployeTrait;
    use IntNumLigneTrait;
    use StringNumeroAssureTrait;
    use StringNumeroEmployeTrait;
    use StringOrganismeTrait;
    use DateTimePeriodeDeclaTrait;
    use FloatSalaireBrutTrait;
    use FloatTauxAtTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
