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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateCreationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomFichierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumNoteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringOrigineFichierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTitreTrait;

/**
 * Notes fichiers.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class NotesFichiers {

    use DateTimeDateCreationTrait;
    use StringNomFichierTrait;
    use StringNumNoteTrait;
    use StringOrigineFichierTrait;
    use StringTitreTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
