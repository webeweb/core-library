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
 * P cent trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPCentTrait {

    /**
     * P cent.
     *
     * @var float
     */
    private $pCent;

    /**
     * Get the p cent.
     *
     * @return float Returns the p cent.
     */
    public function getPCent() {
        return $this->pCent;
    }

    /**
     * Set the p cent.
     *
     * @param float $pCent The p cent.
     */
    public function setPCent($pCent) {
        $this->pCent = $pCent;
        return $this;
    }
}
