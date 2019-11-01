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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAccesAgendaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAccesArticlesConsommesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAccesArticlesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAccesClientsFavorisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAccesClientsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAccesConsultationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAccesDossierCabinetTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAccesFactureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAccesIBureauTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAccesInterventionsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAccesListeCollabTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAccesMessagesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAccesNoteFraisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAccesRepertoireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAccesSaisieCommandeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAccesSaisieTpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAccesSoldeCptaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAccesTableauxBordTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolDupliqueInterventionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolMemeMdpQueIBureauTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateActivationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateFinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDernTentativeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollaborateurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDossCptaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDossPaieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDossPropTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringiKeyTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMotDePasseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRestrCliAssist1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRestrCliAssist2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRestrCliAutre1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRestrCliAutre2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRestrCliCollabTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRestrCliDebutTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRestrCliExpertTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRestrCliFinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRestrCliPortefTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTentativesTrait;

/**
 * Acces web.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class AccesWeb {

    use BoolAccesAgendaTrait;
    use BoolAccesArticlesTrait;
    use BoolAccesArticlesConsommesTrait;
    use BoolAccesClientsTrait;
    use BoolAccesClientsFavorisTrait;
    use BoolAccesConsultationTrait;
    use BoolAccesDossierCabinetTrait;
    use BoolAccesFactureTrait;
    use BoolAccesIBureauTrait;
    use BoolAccesInterventionsTrait;
    use BoolAccesListeCollabTrait;
    use BoolAccesMessagesTrait;
    use BoolAccesNoteFraisTrait;
    use BoolAccesRepertoireTrait;
    use BoolAccesSaisieCommandeTrait;
    use BoolAccesSaisieTpTrait;
    use BoolAccesSoldeCptaTrait;
    use BoolAccesTableauxBordTrait;
    use StringCodeCollaborateurTrait;
    use DateTimeDateActivationTrait;
    use DateTimeDateFinTrait;
    use DateTimeDernTentativeTrait;
    use StringDossCptaTrait;
    use StringDossPaieTrait;
    use StringDossPropTrait;
    use BoolDupliqueInterventionTrait;
    use BoolMemeMdpQueIBureauTrait;
    use StringMotDePasseTrait;
    use StringRestrCliAssist1Trait;
    use StringRestrCliAssist2Trait;
    use StringRestrCliAutre1Trait;
    use StringRestrCliAutre2Trait;
    use StringRestrCliCollabTrait;
    use StringRestrCliDebutTrait;
    use StringRestrCliExpertTrait;
    use StringRestrCliFinTrait;
    use StringRestrCliPortefTrait;
    use StringTentativesTrait;
    use StringiKeyTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
