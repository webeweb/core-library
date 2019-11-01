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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolEnvoiPostItTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateCreationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateModificationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateRappelTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCategorieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollaborateurModifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollaborateurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIntituleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumUniqTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTitreTrait;

/**
 * Notes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class Notes {

    use StringCodeCategorieTrait;
    use StringCodeCollaborateurTrait;
    use StringCodeCollaborateurModifTrait;
    use DateTimeDateCreationTrait;
    use DateTimeDateModificationTrait;
    use DateTimeDateRappelTrait;
    use BoolEnvoiPostItTrait;
    use StringIntituleTrait;
    use StringNumUniqTrait;
    use StringTitreTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
