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
 * Chomage total trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolChomageTotalTrait {

    /**
     * Chomage total.
     *
     * @var bool
     */
    private $chomageTotal;

    /**
     * Get the chomage total.
     *
     * @return bool Returns the chomage total.
     */
    public function getChomageTotal() {
        return $this->chomageTotal;
    }

    /**
     * Set the chomage total.
     *
     * @param bool $chomageTotal The chomage total.
     */
    public function setChomageTotal($chomageTotal) {
        $this->chomageTotal = $chomageTotal;
        return $this;
    }
}
