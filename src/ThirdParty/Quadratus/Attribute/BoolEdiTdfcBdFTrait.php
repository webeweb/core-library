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
 * Edi tdfc bd f trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEdiTdfcBdFTrait {

    /**
     * Edi tdfc bd f.
     *
     * @var bool
     */
    private $ediTdfcBdF;

    /**
     * Get the edi tdfc bd f.
     *
     * @return bool Returns the edi tdfc bd f.
     */
    public function getEdiTdfcBdF() {
        return $this->ediTdfcBdF;
    }

    /**
     * Set the edi tdfc bd f.
     *
     * @param bool $ediTdfcBdF The edi tdfc bd f.
     */
    public function setEdiTdfcBdF($ediTdfcBdF) {
        $this->ediTdfcBdF = $ediTdfcBdF;
        return $this;
    }
}
