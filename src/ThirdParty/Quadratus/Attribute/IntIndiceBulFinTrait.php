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
 * Indice bul fin trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntIndiceBulFinTrait {

    /**
     * Indice bul fin.
     *
     * @var int
     */
    private $indiceBulFin;

    /**
     * Get the indice bul fin.
     *
     * @return int Returns the indice bul fin.
     */
    public function getIndiceBulFin() {
        return $this->indiceBulFin;
    }

    /**
     * Set the indice bul fin.
     *
     * @param int $indiceBulFin The indice bul fin.
     */
    public function setIndiceBulFin($indiceBulFin) {
        $this->indiceBulFin = $indiceBulFin;
        return $this;
    }
}
