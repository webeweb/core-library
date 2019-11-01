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
 * Deduct forfait trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntDeductForfaitTrait {

    /**
     * Deduct forfait.
     *
     * @var int
     */
    private $deductForfait;

    /**
     * Get the deduct forfait.
     *
     * @return int Returns the deduct forfait.
     */
    public function getDeductForfait() {
        return $this->deductForfait;
    }

    /**
     * Set the deduct forfait.
     *
     * @param int $deductForfait The deduct forfait.
     */
    public function setDeductForfait($deductForfait) {
        $this->deductForfait = $deductForfait;
        return $this;
    }
}
