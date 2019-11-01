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
 * Patrimoine trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPatrimoineTrait {

    /**
     * Patrimoine.
     *
     * @var string
     */
    private $patrimoine;

    /**
     * Get the patrimoine.
     *
     * @return string Returns the patrimoine.
     */
    public function getPatrimoine() {
        return $this->patrimoine;
    }

    /**
     * Set the patrimoine.
     *
     * @param string $patrimoine The patrimoine.
     */
    public function setPatrimoine($patrimoine) {
        $this->patrimoine = $patrimoine;
        return $this;
    }
}
