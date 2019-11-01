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
 * Mini euros trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolMiniEurosTrait {

    /**
     * Mini euros.
     *
     * @var bool
     */
    private $miniEuros;

    /**
     * Get the mini euros.
     *
     * @return bool Returns the mini euros.
     */
    public function getMiniEuros() {
        return $this->miniEuros;
    }

    /**
     * Set the mini euros.
     *
     * @param bool $miniEuros The mini euros.
     */
    public function setMiniEuros($miniEuros) {
        $this->miniEuros = $miniEuros;
        return $this;
    }
}
