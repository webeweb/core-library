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
 * In bul trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolInBulTrait {

    /**
     * In bul.
     *
     * @var bool
     */
    private $inBul;

    /**
     * Get the in bul.
     *
     * @return bool Returns the in bul.
     */
    public function getInBul() {
        return $this->inBul;
    }

    /**
     * Set the in bul.
     *
     * @param bool $inBul The in bul.
     */
    public function setInBul($inBul) {
        $this->inBul = $inBul;
        return $this;
    }
}
