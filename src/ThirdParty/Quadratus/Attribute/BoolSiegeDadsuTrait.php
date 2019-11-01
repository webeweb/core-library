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
 * Siege dadsu trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSiegeDadsuTrait {

    /**
     * Siege dadsu.
     *
     * @var bool
     */
    private $siegeDadsu;

    /**
     * Get the siege dadsu.
     *
     * @return bool Returns the siege dadsu.
     */
    public function getSiegeDadsu() {
        return $this->siegeDadsu;
    }

    /**
     * Set the siege dadsu.
     *
     * @param bool $siegeDadsu The siege dadsu.
     */
    public function setSiegeDadsu($siegeDadsu) {
        $this->siegeDadsu = $siegeDadsu;
        return $this;
    }
}
