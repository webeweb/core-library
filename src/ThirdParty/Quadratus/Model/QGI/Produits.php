<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QGI;

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolGammeWindowsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntCompteurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntCptMajTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntDernierNumeroTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFichierLicenceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIntituleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLettreLicenceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomProdLicenceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomTrait;

/**
 * Produits.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class Produits {

    use StringCodeTrait;
    use IntCompteurTrait;
    use IntCptMajTrait;
    use IntDernierNumeroTrait;
    use StringFichierLicenceTrait;
    use BoolGammeWindowsTrait;
    use StringIntituleTrait;
    use StringLettreLicenceTrait;
    use StringNomTrait;
    use StringNomProdLicenceTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
