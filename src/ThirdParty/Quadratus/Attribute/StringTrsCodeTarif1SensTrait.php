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
 * Trs code tarif1 sens trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTrsCodeTarif1SensTrait {

    /**
     * Trs code tarif1 sens.
     *
     * @var string
     */
    private $trsCodeTarif1Sens;

    /**
     * Get the trs code tarif1 sens.
     *
     * @return string Returns the trs code tarif1 sens.
     */
    public function getTrsCodeTarif1Sens() {
        return $this->trsCodeTarif1Sens;
    }

    /**
     * Set the trs code tarif1 sens.
     *
     * @param string $trsCodeTarif1Sens The trs code tarif1 sens.
     */
    public function setTrsCodeTarif1Sens($trsCodeTarif1Sens) {
        $this->trsCodeTarif1Sens = $trsCodeTarif1Sens;
        return $this;
    }
}
