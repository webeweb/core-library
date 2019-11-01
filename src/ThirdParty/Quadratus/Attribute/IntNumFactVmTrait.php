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
 * Num fact vm trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumFactVmTrait {

    /**
     * Num fact vm.
     *
     * @var int
     */
    private $numFactVm;

    /**
     * Get the num fact vm.
     *
     * @return int Returns the num fact vm.
     */
    public function getNumFactVm() {
        return $this->numFactVm;
    }

    /**
     * Set the num fact vm.
     *
     * @param int $numFactVm The num fact vm.
     */
    public function setNumFactVm($numFactVm) {
        $this->numFactVm = $numFactVm;
        return $this;
    }
}
