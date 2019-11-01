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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdresseIpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollabTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDossierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRestrCliAssist1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRestrCliAssist2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRestrCliAutre1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRestrCliAutre2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRestrCliCollabTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRestrCliExpertTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRestrCliPortefTrait;

/**
 * i collaborateurs sites.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class iCollaborateursSites {

    use StringAdresseIpTrait;
    use StringCodeCollabTrait;
    use StringDossierTrait;
    use StringRestrCliAssist1Trait;
    use StringRestrCliAssist2Trait;
    use StringRestrCliAutre1Trait;
    use StringRestrCliAutre2Trait;
    use StringRestrCliCollabTrait;
    use StringRestrCliExpertTrait;
    use StringRestrCliPortefTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
