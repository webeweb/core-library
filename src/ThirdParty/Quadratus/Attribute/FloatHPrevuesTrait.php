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
 * H prevues trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHPrevuesTrait {

    /**
     * H prevues.
     *
     * @var float
     */
    private $hPrevues;

    /**
     * Get the h prevues.
     *
     * @return float Returns the h prevues.
     */
    public function getHPrevues() {
        return $this->hPrevues;
    }

    /**
     * Set the h prevues.
     *
     * @param float $hPrevues The h prevues.
     */
    public function setHPrevues($hPrevues) {
        $this->hPrevues = $hPrevues;
        return $this;
    }
}
