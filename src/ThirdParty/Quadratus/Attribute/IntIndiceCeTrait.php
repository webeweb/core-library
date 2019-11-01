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
 * Indice ce trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntIndiceCeTrait {

    /**
     * Indice ce.
     *
     * @var int
     */
    private $indiceCe;

    /**
     * Get the indice ce.
     *
     * @return int Returns the indice ce.
     */
    public function getIndiceCe() {
        return $this->indiceCe;
    }

    /**
     * Set the indice ce.
     *
     * @param int $indiceCe The indice ce.
     */
    public function setIndiceCe($indiceCe) {
        $this->indiceCe = $indiceCe;
        return $this;
    }
}
