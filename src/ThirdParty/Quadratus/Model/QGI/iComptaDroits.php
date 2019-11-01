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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolEspaceClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFctBalanceClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFctBalanceFournisseurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFctBalanceGeneraleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFctConsultDaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFctConsultDcTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFctDeclareTvaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFctDelettrageTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFctEditionJournauxTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFctInterrogationCptTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFctLettrageTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFctModifEcritureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFctRapprochBanqTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFctSaisieAchatsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFctSaisieBanquesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFctSaisieEtebacTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFctSaisieStandardTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFctSaisieVentesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFctSupprEcritureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFctTableBordTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateLimiteVisuTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeSaisieDebTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeSaisieFinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntFctSaisieCaisseOrienteeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntFctSaisieTrameTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCollabMessagesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeUserTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDroitClientsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDroitFournisseursTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDroitGenerauxTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDroitModifCompteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFlagTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNiveauDroitClientsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNiveauDroitFournisseursTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNiveauDroitGenerauxTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNoDossCptaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomUserTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumiKeyTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPasswordTrait;

/**
 * i compta droits.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class iComptaDroits {

    use StringCodeCollabMessagesTrait;
    use StringCodeUserTrait;
    use DateTimeDateLimiteVisuTrait;
    use StringDroitClientsTrait;
    use StringDroitFournisseursTrait;
    use StringDroitGenerauxTrait;
    use StringDroitModifCompteTrait;
    use BoolEspaceClientTrait;
    use BoolFctBalanceClientTrait;
    use BoolFctBalanceFournisseurTrait;
    use BoolFctBalanceGeneraleTrait;
    use BoolFctConsultDaTrait;
    use BoolFctConsultDcTrait;
    use BoolFctDeclareTvaTrait;
    use BoolFctDelettrageTrait;
    use BoolFctEditionJournauxTrait;
    use BoolFctInterrogationCptTrait;
    use BoolFctLettrageTrait;
    use BoolFctModifEcritureTrait;
    use BoolFctRapprochBanqTrait;
    use BoolFctSaisieAchatsTrait;
    use BoolFctSaisieBanquesTrait;
    use IntFctSaisieCaisseOrienteeTrait;
    use BoolFctSaisieEtebacTrait;
    use BoolFctSaisieStandardTrait;
    use IntFctSaisieTrameTrait;
    use BoolFctSaisieVentesTrait;
    use BoolFctSupprEcritureTrait;
    use BoolFctTableBordTrait;
    use StringFlagTrait;
    use StringNiveauDroitClientsTrait;
    use StringNiveauDroitFournisseursTrait;
    use StringNiveauDroitGenerauxTrait;
    use StringNoDossCptaTrait;
    use StringNomUserTrait;
    use StringNumiKeyTrait;
    use StringPasswordTrait;
    use DateTimePeriodeSaisieDebTrait;
    use DateTimePeriodeSaisieFinTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
