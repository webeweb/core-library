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
 * Trs code tarif5 sens trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTrsCodeTarif5SensTrait {

    /**
     * Trs code tarif5 sens.
     *
     * @var string
     */
    private $trsCodeTarif5Sens;

    /**
     * Get the trs code tarif5 sens.
     *
     * @return string Returns the trs code tarif5 sens.
     */
    public function getTrsCodeTarif5Sens() {
        return $this->trsCodeTarif5Sens;
    }

    /**
     * Set the trs code tarif5 sens.
     *
     * @param string $trsCodeTarif5Sens The trs code tarif5 sens.
     */
    public function setTrsCodeTarif5Sens($trsCodeTarif5Sens) {
        $this->trsCodeTarif5Sens = $trsCodeTarif5Sens;
        return $this;
    }
}
