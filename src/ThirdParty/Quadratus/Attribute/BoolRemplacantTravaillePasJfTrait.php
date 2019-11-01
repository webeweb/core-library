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
 * Remplacant travaille pas jf trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRemplacantTravaillePasJfTrait {

    /**
     * Remplacant travaille pas jf.
     *
     * @var bool
     */
    private $remplacantTravaillePasJf;

    /**
     * Get the remplacant travaille pas jf.
     *
     * @return bool Returns the remplacant travaille pas jf.
     */
    public function getRemplacantTravaillePasJf() {
        return $this->remplacantTravaillePasJf;
    }

    /**
     * Set the remplacant travaille pas jf.
     *
     * @param bool $remplacantTravaillePasJf The remplacant travaille pas jf.
     */
    public function setRemplacantTravaillePasJf($remplacantTravaillePasJf) {
        $this->remplacantTravaillePasJf = $remplacantTravaillePasJf;
        return $this;
    }
}
