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
 * Mtt treso trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMttTresoTrait {

    /**
     * Mtt treso.
     *
     * @var float
     */
    private $mttTreso;

    /**
     * Get the mtt treso.
     *
     * @return float Returns the mtt treso.
     */
    public function getMttTreso() {
        return $this->mttTreso;
    }

    /**
     * Set the mtt treso.
     *
     * @param float $mttTreso The mtt treso.
     */
    public function setMttTreso($mttTreso) {
        $this->mttTreso = $mttTreso;
        return $this;
    }
}
