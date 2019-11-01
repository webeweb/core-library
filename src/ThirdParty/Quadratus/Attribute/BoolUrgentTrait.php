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
 * Urgent trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolUrgentTrait {

    /**
     * Urgent.
     *
     * @var bool
     */
    private $urgent;

    /**
     * Get the urgent.
     *
     * @return bool Returns the urgent.
     */
    public function getUrgent() {
        return $this->urgent;
    }

    /**
     * Set the urgent.
     *
     * @param bool $urgent The urgent.
     */
    public function setUrgent($urgent) {
        $this->urgent = $urgent;
        return $this;
    }
}
