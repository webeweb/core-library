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
 * Trs code tarif4 sens trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTrsCodeTarif4SensTrait {

    /**
     * Trs code tarif4 sens.
     *
     * @var string
     */
    private $trsCodeTarif4Sens;

    /**
     * Get the trs code tarif4 sens.
     *
     * @return string Returns the trs code tarif4 sens.
     */
    public function getTrsCodeTarif4Sens() {
        return $this->trsCodeTarif4Sens;
    }

    /**
     * Set the trs code tarif4 sens.
     *
     * @param string $trsCodeTarif4Sens The trs code tarif4 sens.
     */
    public function setTrsCodeTarif4Sens($trsCodeTarif4Sens) {
        $this->trsCodeTarif4Sens = $trsCodeTarif4Sens;
        return $this;
    }
}
