<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Attribute;

/**
 * Trs code tarif def trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntTrsCodeTarifDefTrait {

    /**
     * Trs code tarif def.
     *
     * @var int
     */
    private $trsCodeTarifDef;

    /**
     * Get the trs code tarif def.
     *
     * @return int Returns the trs code tarif def.
     */
    public function getTrsCodeTarifDef() {
        return $this->trsCodeTarifDef;
    }

    /**
     * Set the trs code tarif def.
     *
     * @param int $trsCodeTarifDef The trs code tarif def.
     */
    public function setTrsCodeTarifDef($trsCodeTarifDef) {
        $this->trsCodeTarifDef = $trsCodeTarifDef;
        return $this;
    }
}
