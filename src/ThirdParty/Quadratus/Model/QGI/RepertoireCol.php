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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateModifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumSousRepTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumUniqTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdresse1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdresse2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdresse3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollaborateurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCompTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCollModifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCommentaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEmail2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEmailTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFlagTel2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFlagTel3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFlagTel4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFlagTelTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLdapAdsPathTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPrenomTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTel2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTel3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTel4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTelTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringUniqIdTrait;

/**
 * Repertoire col.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class RepertoireCol {

    use StringAdresse1Trait;
    use StringAdresse2Trait;
    use StringAdresse3Trait;
    use StringCodeTrait;
    use StringCodeCollaborateurTrait;
    use StringCodeCompTrait;
    use StringCollModifTrait;
    use StringCommentaireTrait;
    use DateTimeDateModifTrait;
    use StringEmailTrait;
    use StringEmail2Trait;
    use StringFlagTelTrait;
    use StringFlagTel2Trait;
    use StringFlagTel3Trait;
    use StringFlagTel4Trait;
    use StringLdapAdsPathTrait;
    use StringNomTrait;
    use IntNumSousRepTrait;
    use IntNumUniqTrait;
    use StringPrenomTrait;
    use StringTelTrait;
    use StringTel2Trait;
    use StringTel3Trait;
    use StringTel4Trait;
    use StringUniqIdTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
