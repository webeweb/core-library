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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolADeclarerDsnNeantTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAppliquerCpn220Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAssietteSpecifAgffTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolDetailArrcoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolRegroupementSiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSousTotalAgffTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSousTotalApecTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSousTotalCaisseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTraitementDadsuTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolUtiliseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAgrementMinisterielTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringArrondirBaseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringArrondirCotisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAssietteSit2AgffTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAssietteSit2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAssietteSitbagffTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAssietteSitbTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAssietteSitcTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCaisseMsaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeOrganismeAssuranceDadsuTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeOrganismeMutuelleDadsuTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringGroupeCrcTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIdInstitutionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIntitSousTotalAgffAgircTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIntitSousTotalAgffArrcoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIntitSousTotalApecTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIntituleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLienFicParamDsnTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeDeclarationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeOrganismeTrait;

/**
 * Orga generiques.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class OrgaGeneriques {

    use BoolADeclarerDsnNeantTrait;
    use StringAgrementMinisterielTrait;
    use BoolAppliquerCpn220Trait;
    use StringArrondirBaseTrait;
    use StringArrondirCotisTrait;
    use BoolAssietteSpecifAgffTrait;
    use StringCodeTrait;
    use StringCodeAssietteSit2Trait;
    use StringCodeAssietteSit2AgffTrait;
    use StringCodeAssietteSitbTrait;
    use StringCodeAssietteSitbagffTrait;
    use StringCodeAssietteSitcTrait;
    use StringCodeCaisseMsaTrait;
    use StringCodeOrganismeAssuranceDadsuTrait;
    use StringCodeOrganismeMutuelleDadsuTrait;
    use BoolDetailArrcoTrait;
    use StringGroupeCrcTrait;
    use StringIdInstitutionTrait;
    use StringIntitSousTotalAgffAgircTrait;
    use StringIntitSousTotalAgffArrcoTrait;
    use StringIntitSousTotalApecTrait;
    use StringIntituleTrait;
    use StringLienFicParamDsnTrait;
    use BoolRegroupementSiTrait;
    use BoolSousTotalAgffTrait;
    use BoolSousTotalApecTrait;
    use BoolSousTotalCaisseTrait;
    use BoolTraitementDadsuTrait;
    use StringTypeDeclarationTrait;
    use StringTypeOrganismeTrait;
    use BoolUtiliseTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
