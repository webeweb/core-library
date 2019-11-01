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
 * Indice bul trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringIndiceBulTrait {

    /**
     * Indice bul.
     *
     * @var string
     */
    private $indiceBul;

    /**
     * Get the indice bul.
     *
     * @return string Returns the indice bul.
     */
    public function getIndiceBul() {
        return $this->indiceBul;
    }

    /**
     * Set the indice bul.
     *
     * @param string $indiceBul The indice bul.
     */
    public function setIndiceBul($indiceBul) {
        $this->indiceBul = $indiceBul;
        return $this;
    }
}
