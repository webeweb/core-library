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
 * Indice bul deb trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntIndiceBulDebTrait {

    /**
     * Indice bul deb.
     *
     * @var int
     */
    private $indiceBulDeb;

    /**
     * Get the indice bul deb.
     *
     * @return int Returns the indice bul deb.
     */
    public function getIndiceBulDeb() {
        return $this->indiceBulDeb;
    }

    /**
     * Set the indice bul deb.
     *
     * @param int $indiceBulDeb The indice bul deb.
     */
    public function setIndiceBulDeb($indiceBulDeb) {
        $this->indiceBulDeb = $indiceBulDeb;
        return $this;
    }
}
