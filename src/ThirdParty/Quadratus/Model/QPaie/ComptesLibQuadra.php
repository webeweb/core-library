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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeDucsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeEditionHistoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeOrganismeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTypeBSpecPrevTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCompteChargeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringConditionSpecTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEditionForceeDsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringExclureLoiTepaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFraisSanteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPrevoyanceCompTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringQualifiantCotisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRetraiteObligatoireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRetraiteSuppTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSansReintegrationSocialeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSoumisCrds100Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSoumisCsg100Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTauxForfaitSocial20Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTauxForfaitSocial8Trait;

/**
 * Comptes lib quadra.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class ComptesLibQuadra {

    use StringCodeDucsTrait;
    use StringCodeEditionHistoTrait;
    use StringCodeLibelleTrait;
    use StringCodeOrganismeTrait;
    use StringCodeTypeBSpecPrevTrait;
    use StringCompteChargeTrait;
    use StringConditionSpecTrait;
    use StringEditionForceeDsTrait;
    use StringExclureLoiTepaTrait;
    use StringFraisSanteTrait;
    use StringPrevoyanceCompTrait;
    use StringQualifiantCotisTrait;
    use StringRetraiteObligatoireTrait;
    use StringRetraiteSuppTrait;
    use StringSansReintegrationSocialeTrait;
    use StringSoumisCrds100Trait;
    use StringSoumisCsg100Trait;
    use StringTauxForfaitSocial20Trait;
    use StringTauxForfaitSocial8Trait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
