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
 * Confidentiel trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolConfidentielTrait {

    /**
     * Confidentiel.
     *
     * @var bool
     */
    private $confidentiel;

    /**
     * Get the confidentiel.
     *
     * @return bool Returns the confidentiel.
     */
    public function getConfidentiel() {
        return $this->confidentiel;
    }

    /**
     * Set the confidentiel.
     *
     * @param bool $confidentiel The confidentiel.
     */
    public function setConfidentiel($confidentiel) {
        $this->confidentiel = $confidentiel;
        return $this;
    }
}
