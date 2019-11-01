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
 * Mini facturable trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMiniFacturableTrait {

    /**
     * Mini facturable.
     *
     * @var float
     */
    private $miniFacturable;

    /**
     * Get the mini facturable.
     *
     * @return float Returns the mini facturable.
     */
    public function getMiniFacturable() {
        return $this->miniFacturable;
    }

    /**
     * Set the mini facturable.
     *
     * @param float $miniFacturable The mini facturable.
     */
    public function setMiniFacturable($miniFacturable) {
        $this->miniFacturable = $miniFacturable;
        return $this;
    }
}
