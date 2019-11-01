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
 * Reduc bul trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatReducBulTrait {

    /**
     * Reduc bul.
     *
     * @var float
     */
    private $reducBul;

    /**
     * Get the reduc bul.
     *
     * @return float Returns the reduc bul.
     */
    public function getReducBul() {
        return $this->reducBul;
    }

    /**
     * Set the reduc bul.
     *
     * @param float $reducBul The reduc bul.
     */
    public function setReducBul($reducBul) {
        $this->reducBul = $reducBul;
        return $this;
    }
}
