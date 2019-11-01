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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateLiaisonTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateRetourPrevueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumUniqTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollabTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDestinataireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringModulesBloquesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringModulesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroDossierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSensTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeLiaisonTrait;

/**
 * Liaisons historique.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class LiaisonsHistorique {

    use StringCodeCollabTrait;
    use DateTimeDateLiaisonTrait;
    use DateTimeDateRetourPrevueTrait;
    use StringDestinataireTrait;
    use StringModulesTrait;
    use StringModulesBloquesTrait;
    use IntNumUniqTrait;
    use StringNumeroDossierTrait;
    use StringSensTrait;
    use StringTypeLiaisonTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
