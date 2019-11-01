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
 * Trs code tarif3 sens trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTrsCodeTarif3SensTrait {

    /**
     * Trs code tarif3 sens.
     *
     * @var string
     */
    private $trsCodeTarif3Sens;

    /**
     * Get the trs code tarif3 sens.
     *
     * @return string Returns the trs code tarif3 sens.
     */
    public function getTrsCodeTarif3Sens() {
        return $this->trsCodeTarif3Sens;
    }

    /**
     * Set the trs code tarif3 sens.
     *
     * @param string $trsCodeTarif3Sens The trs code tarif3 sens.
     */
    public function setTrsCodeTarif3Sens($trsCodeTarif3Sens) {
        $this->trsCodeTarif3Sens = $trsCodeTarif3Sens;
        return $this;
    }
}
