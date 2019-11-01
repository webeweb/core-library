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
 * Ech en mt trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEchEnMtTrait {

    /**
     * Ech en mt.
     *
     * @var bool
     */
    private $echEnMt;

    /**
     * Get the ech en mt.
     *
     * @return bool Returns the ech en mt.
     */
    public function getEchEnMt() {
        return $this->echEnMt;
    }

    /**
     * Set the ech en mt.
     *
     * @param bool $echEnMt The ech en mt.
     */
    public function setEchEnMt($echEnMt) {
        $this->echEnMt = $echEnMt;
        return $this;
    }
}
