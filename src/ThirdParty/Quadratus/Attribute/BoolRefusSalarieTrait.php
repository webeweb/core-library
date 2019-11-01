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
 * Refus salarie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRefusSalarieTrait {

    /**
     * Refus salarie.
     *
     * @var bool
     */
    private $refusSalarie;

    /**
     * Get the refus salarie.
     *
     * @return bool Returns the refus salarie.
     */
    public function getRefusSalarie() {
        return $this->refusSalarie;
    }

    /**
     * Set the refus salarie.
     *
     * @param bool $refusSalarie The refus salarie.
     */
    public function setRefusSalarie($refusSalarie) {
        $this->refusSalarie = $refusSalarie;
        return $this;
    }
}
