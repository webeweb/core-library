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
 * Indice dadsu trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntIndiceDadsuTrait {

    /**
     * Indice dadsu.
     *
     * @var int
     */
    private $indiceDadsu;

    /**
     * Get the indice dadsu.
     *
     * @return int Returns the indice dadsu.
     */
    public function getIndiceDadsu() {
        return $this->indiceDadsu;
    }

    /**
     * Set the indice dadsu.
     *
     * @param int $indiceDadsu The indice dadsu.
     */
    public function setIndiceDadsu($indiceDadsu) {
        $this->indiceDadsu = $indiceDadsu;
        return $this;
    }
}
