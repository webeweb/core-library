<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta;

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolzAcompteDeduit1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolzAcompteDeduit2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolzAcompteDeduit3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolzAcompteDeduit4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolzYaDemandeRbtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateCessionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTxImpositionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Floatz0008Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Floatz0018Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Floatz0019Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Floatz0020Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Floatz0028Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Floatz0030bTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Floatz0058Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Floatz0704Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Floatz0709Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Floatz0970bTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Floatz0970Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Floatz0980bTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Floatz0980Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Floatz0981bTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Floatz0981Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Floatz0982Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Floatz0983Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Floatz3240Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Floatz32TaxeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Floatz35BTaxeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Floatz35TaxeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Floatz4202Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Floatz4213Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Floatz4216Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Floatz4217Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Floatz4218Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Floatz4220Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Floatz45Ca12Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Floatz47Ca12Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Floatz4Aca12Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Floatz4Bca12Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Floatz4Cca12Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Floatz5bHtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Floatz5bTaxeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Floatz7bHtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Floatz7bTaxeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Floatz8004Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatzCol1Acompte1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatzCol1Acompte2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatzCol1Acompte3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatzCol1Acompte4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatzCol2Acompte1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatzCol2Acompte2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatzCol2Acompte3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatzCol2Acompte4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatzExcedentVersementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatzRbtDemandeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatzSoldeAPayerTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatzTaxesFiscalesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntzAnneeAcompte1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntzAnneeAcompte2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntzAnneeAcompte3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntzAnneeAcompte4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntzSurfaceAgrTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeCa12Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Stringz32CodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Stringz32LibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Stringz35BCodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Stringz35BLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Stringz35CodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Stringz35LibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Stringz45Ca12CodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Stringz45Ca12LibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Stringz47Ca12CodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Stringz47Ca12LibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Stringz4Aca12CodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Stringz4Aca12LibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Stringz4Bca12CodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Stringz4Bca12LibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Stringz4Cca12CodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Stringz4Cca12LibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Stringz5bCodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Stringz5bLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Stringz7bCodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\Stringz7bLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringzNomDemandeurRbtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringzNumMsaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringzRbtbicTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringzRbtibanTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringzRbtQualiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringzRbtribTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringzRbtVilleTrait;

/**
 * Dec tva ca12.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class DecTvaCa12 {

    use DateTimeDateCessionTrait;
    use DateTimePeriodeTrait;
    use FloatTxImpositionTrait;
    use StringTypeCa12Trait;
    use Floatz0008Trait;
    use Floatz0018Trait;
    use Floatz0019Trait;
    use Floatz0020Trait;
    use Floatz0028Trait;
    use Floatz0030bTrait;
    use Floatz0058Trait;
    use Floatz0704Trait;
    use Floatz0709Trait;
    use Floatz0970Trait;
    use Floatz0970bTrait;
    use Floatz0980Trait;
    use Floatz0980bTrait;
    use Floatz0981Trait;
    use Floatz0981bTrait;
    use Floatz0982Trait;
    use Floatz0983Trait;
    use Floatz3240Trait;
    use Stringz32CodeTrait;
    use Stringz32LibelleTrait;
    use Floatz32TaxeTrait;
    use Stringz35BCodeTrait;
    use Stringz35BLibelleTrait;
    use Floatz35BTaxeTrait;
    use Stringz35CodeTrait;
    use Stringz35LibelleTrait;
    use Floatz35TaxeTrait;
    use Floatz4202Trait;
    use Floatz4213Trait;
    use Floatz4216Trait;
    use Floatz4217Trait;
    use Floatz4218Trait;
    use Floatz4220Trait;
    use Floatz45Ca12Trait;
    use Stringz45Ca12CodeTrait;
    use Stringz45Ca12LibelleTrait;
    use Floatz47Ca12Trait;
    use Stringz47Ca12CodeTrait;
    use Stringz47Ca12LibelleTrait;
    use Floatz4Aca12Trait;
    use Stringz4Aca12CodeTrait;
    use Stringz4Aca12LibelleTrait;
    use Floatz4Bca12Trait;
    use Stringz4Bca12CodeTrait;
    use Stringz4Bca12LibelleTrait;
    use Floatz4Cca12Trait;
    use Stringz4Cca12CodeTrait;
    use Stringz4Cca12LibelleTrait;
    use Stringz5bCodeTrait;
    use Floatz5bHtTrait;
    use Stringz5bLibelleTrait;
    use Floatz5bTaxeTrait;
    use Stringz7bCodeTrait;
    use Floatz7bHtTrait;
    use Stringz7bLibelleTrait;
    use Floatz7bTaxeTrait;
    use Floatz8004Trait;
    use BoolzAcompteDeduit1Trait;
    use BoolzAcompteDeduit2Trait;
    use BoolzAcompteDeduit3Trait;
    use BoolzAcompteDeduit4Trait;
    use IntzAnneeAcompte1Trait;
    use IntzAnneeAcompte2Trait;
    use IntzAnneeAcompte3Trait;
    use IntzAnneeAcompte4Trait;
    use FloatzCol1Acompte1Trait;
    use FloatzCol1Acompte2Trait;
    use FloatzCol1Acompte3Trait;
    use FloatzCol1Acompte4Trait;
    use FloatzCol2Acompte1Trait;
    use FloatzCol2Acompte2Trait;
    use FloatzCol2Acompte3Trait;
    use FloatzCol2Acompte4Trait;
    use FloatzExcedentVersementTrait;
    use StringzNomDemandeurRbtTrait;
    use StringzNumMsaTrait;
    use StringzRbtbicTrait;
    use StringzRbtibanTrait;
    use StringzRbtQualiteTrait;
    use StringzRbtribTrait;
    use StringzRbtVilleTrait;
    use FloatzRbtDemandeTrait;
    use FloatzSoldeAPayerTrait;
    use IntzSurfaceAgrTrait;
    use FloatzTaxesFiscalesTrait;
    use BoolzYaDemandeRbtTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
