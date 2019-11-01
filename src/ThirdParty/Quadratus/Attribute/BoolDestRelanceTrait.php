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
 * Dest relance trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolDestRelanceTrait {

    /**
     * Dest relance.
     *
     * @var bool
     */
    private $destRelance;

    /**
     * Get the dest relance.
     *
     * @return bool Returns the dest relance.
     */
    public function getDestRelance() {
        return $this->destRelance;
    }

    /**
     * Set the dest relance.
     *
     * @param bool $destRelance The dest relance.
     */
    public function setDestRelance($destRelance) {
        $this->destRelance = $destRelance;
        return $this;
    }
}
