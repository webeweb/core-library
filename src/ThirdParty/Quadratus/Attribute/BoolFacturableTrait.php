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
 * Facturable trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFacturableTrait {

    /**
     * Facturable.
     *
     * @var bool
     */
    private $facturable;

    /**
     * Get the facturable.
     *
     * @return bool Returns the facturable.
     */
    public function getFacturable() {
        return $this->facturable;
    }

    /**
     * Set the facturable.
     *
     * @param bool $facturable The facturable.
     */
    public function setFacturable($facturable) {
        $this->facturable = $facturable;
        return $this;
    }
}
