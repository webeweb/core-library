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
 * Ech aff en mt trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEchAffEnMtTrait {

    /**
     * Ech aff en mt.
     *
     * @var bool
     */
    private $echAffEnMt;

    /**
     * Get the ech aff en mt.
     *
     * @return bool Returns the ech aff en mt.
     */
    public function getEchAffEnMt() {
        return $this->echAffEnMt;
    }

    /**
     * Set the ech aff en mt.
     *
     * @param bool $echAffEnMt The ech aff en mt.
     */
    public function setEchAffEnMt($echAffEnMt) {
        $this->echAffEnMt = $echAffEnMt;
        return $this;
    }
}
