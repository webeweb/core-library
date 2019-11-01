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
 * Nb dec trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNbDecTrait {

    /**
     * Nb dec.
     *
     * @var string
     */
    private $nbDec;

    /**
     * Get the nb dec.
     *
     * @return string Returns the nb dec.
     */
    public function getNbDec() {
        return $this->nbDec;
    }

    /**
     * Set the nb dec.
     *
     * @param string $nbDec The nb dec.
     */
    public function setNbDec($nbDec) {
        $this->nbDec = $nbDec;
        return $this;
    }
}
