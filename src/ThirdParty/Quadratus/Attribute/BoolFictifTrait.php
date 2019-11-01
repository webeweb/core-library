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
 * Fictif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFictifTrait {

    /**
     * Fictif.
     *
     * @var bool
     */
    private $fictif;

    /**
     * Get the fictif.
     *
     * @return bool Returns the fictif.
     */
    public function getFictif() {
        return $this->fictif;
    }

    /**
     * Set the fictif.
     *
     * @param bool $fictif The fictif.
     */
    public function setFictif($fictif) {
        $this->fictif = $fictif;
        return $this;
    }
}
