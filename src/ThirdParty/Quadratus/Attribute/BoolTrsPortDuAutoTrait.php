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
 * Trs port du auto trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTrsPortDuAutoTrait {

    /**
     * Trs port du auto.
     *
     * @var bool
     */
    private $trsPortDuAuto;

    /**
     * Get the trs port du auto.
     *
     * @return bool Returns the trs port du auto.
     */
    public function getTrsPortDuAuto() {
        return $this->trsPortDuAuto;
    }

    /**
     * Set the trs port du auto.
     *
     * @param bool $trsPortDuAuto The trs port du auto.
     */
    public function setTrsPortDuAuto($trsPortDuAuto) {
        $this->trsPortDuAuto = $trsPortDuAuto;
        return $this;
    }
}
