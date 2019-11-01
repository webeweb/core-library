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
 * Edi tdfc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEdiTdfcTrait {

    /**
     * Edi tdfc.
     *
     * @var bool
     */
    private $ediTdfc;

    /**
     * Get the edi tdfc.
     *
     * @return bool Returns the edi tdfc.
     */
    public function getEdiTdfc() {
        return $this->ediTdfc;
    }

    /**
     * Set the edi tdfc.
     *
     * @param bool $ediTdfc The edi tdfc.
     */
    public function setEdiTdfc($ediTdfc) {
        $this->ediTdfc = $ediTdfc;
        return $this;
    }
}
