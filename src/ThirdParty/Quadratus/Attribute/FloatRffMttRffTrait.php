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
 * Rff mtt rff trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatRffMttRffTrait {

    /**
     * Rff mtt rff.
     *
     * @var float
     */
    private $rffMttRff;

    /**
     * Get the rff mtt rff.
     *
     * @return float Returns the rff mtt rff.
     */
    public function getRffMttRff() {
        return $this->rffMttRff;
    }

    /**
     * Set the rff mtt rff.
     *
     * @param float $rffMttRff The rff mtt rff.
     */
    public function setRffMttRff($rffMttRff) {
        $this->rffMttRff = $rffMttRff;
        return $this;
    }
}
