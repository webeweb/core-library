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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringBtqTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringBureauDistributeurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeDistributionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeInseeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeNafTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodePaysTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodePostalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringComplementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringComplementVoieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIdTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNatureJuridiqueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomVoieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumVoieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRaisonSocialeTrait;

/**
 * Dsn lieu travail.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class DsnLieuTravail {

    use StringBtqTrait;
    use StringBureauDistributeurTrait;
    use StringCodeDistributionTrait;
    use StringCodeInseeTrait;
    use StringCodeNafTrait;
    use StringCodePaysTrait;
    use StringCodePostalTrait;
    use StringComplementTrait;
    use StringComplementVoieTrait;
    use StringIdTrait;
    use StringNatureJuridiqueTrait;
    use StringNomVoieTrait;
    use StringNumVoieTrait;
    use StringRaisonSocialeTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
