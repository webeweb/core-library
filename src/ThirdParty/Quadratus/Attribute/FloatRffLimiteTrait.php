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
 * Rff limite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatRffLimiteTrait {

    /**
     * Rff limite.
     *
     * @var float
     */
    private $rffLimite;

    /**
     * Get the rff limite.
     *
     * @return float Returns the rff limite.
     */
    public function getRffLimite() {
        return $this->rffLimite;
    }

    /**
     * Set the rff limite.
     *
     * @param float $rffLimite The rff limite.
     */
    public function setRffLimite($rffLimite) {
        $this->rffLimite = $rffLimite;
        return $this;
    }
}
