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
 * Dernier indice bul trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntDernierIndiceBulTrait {

    /**
     * Dernier indice bul.
     *
     * @var int
     */
    private $dernierIndiceBul;

    /**
     * Get the dernier indice bul.
     *
     * @return int Returns the dernier indice bul.
     */
    public function getDernierIndiceBul() {
        return $this->dernierIndiceBul;
    }

    /**
     * Set the dernier indice bul.
     *
     * @param int $dernierIndiceBul The dernier indice bul.
     */
    public function setDernierIndiceBul($dernierIndiceBul) {
        $this->dernierIndiceBul = $dernierIndiceBul;
        return $this;
    }
}
