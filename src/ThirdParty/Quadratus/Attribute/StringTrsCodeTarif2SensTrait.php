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
 * Trs code tarif2 sens trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTrsCodeTarif2SensTrait {

    /**
     * Trs code tarif2 sens.
     *
     * @var string
     */
    private $trsCodeTarif2Sens;

    /**
     * Get the trs code tarif2 sens.
     *
     * @return string Returns the trs code tarif2 sens.
     */
    public function getTrsCodeTarif2Sens() {
        return $this->trsCodeTarif2Sens;
    }

    /**
     * Set the trs code tarif2 sens.
     *
     * @param string $trsCodeTarif2Sens The trs code tarif2 sens.
     */
    public function setTrsCodeTarif2Sens($trsCodeTarif2Sens) {
        $this->trsCodeTarif2Sens = $trsCodeTarif2Sens;
        return $this;
    }
}
