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
 * Trs code tarif6 sens trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTrsCodeTarif6SensTrait {

    /**
     * Trs code tarif6 sens.
     *
     * @var string
     */
    private $trsCodeTarif6Sens;

    /**
     * Get the trs code tarif6 sens.
     *
     * @return string Returns the trs code tarif6 sens.
     */
    public function getTrsCodeTarif6Sens() {
        return $this->trsCodeTarif6Sens;
    }

    /**
     * Set the trs code tarif6 sens.
     *
     * @param string $trsCodeTarif6Sens The trs code tarif6 sens.
     */
    public function setTrsCodeTarif6Sens($trsCodeTarif6Sens) {
        $this->trsCodeTarif6Sens = $trsCodeTarif6Sens;
        return $this;
    }
}
