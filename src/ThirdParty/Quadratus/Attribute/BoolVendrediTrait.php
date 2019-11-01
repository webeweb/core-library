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
 * Vendredi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolVendrediTrait {

    /**
     * Vendredi.
     *
     * @var bool
     */
    private $vendredi;

    /**
     * Get the vendredi.
     *
     * @return bool Returns the vendredi.
     */
    public function getVendredi() {
        return $this->vendredi;
    }

    /**
     * Set the vendredi.
     *
     * @param bool $vendredi The vendredi.
     */
    public function setVendredi($vendredi) {
        $this->vendredi = $vendredi;
        return $this;
    }
}
