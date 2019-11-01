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
 * H soldees trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolHSoldeesTrait {

    /**
     * H soldees.
     *
     * @var bool
     */
    private $hSoldees;

    /**
     * Get the h soldees.
     *
     * @return bool Returns the h soldees.
     */
    public function getHSoldees() {
        return $this->hSoldees;
    }

    /**
     * Set the h soldees.
     *
     * @param bool $hSoldees The h soldees.
     */
    public function setHSoldees($hSoldees) {
        $this->hSoldees = $hSoldees;
        return $this;
    }
}
