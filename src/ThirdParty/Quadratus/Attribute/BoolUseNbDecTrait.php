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
 * Use nb dec trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolUseNbDecTrait {

    /**
     * Use nb dec.
     *
     * @var bool
     */
    private $useNbDec;

    /**
     * Get the use nb dec.
     *
     * @return bool Returns the use nb dec.
     */
    public function getUseNbDec() {
        return $this->useNbDec;
    }

    /**
     * Set the use nb dec.
     *
     * @param bool $useNbDec The use nb dec.
     */
    public function setUseNbDec($useNbDec) {
        $this->useNbDec = $useNbDec;
        return $this;
    }
}
