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
 * Fmt dec trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntFmtDecTrait {

    /**
     * Fmt dec.
     *
     * @var int
     */
    private $fmtDec;

    /**
     * Get the fmt dec.
     *
     * @return int Returns the fmt dec.
     */
    public function getFmtDec() {
        return $this->fmtDec;
    }

    /**
     * Set the fmt dec.
     *
     * @param int $fmtDec The fmt dec.
     */
    public function setFmtDec($fmtDec) {
        $this->fmtDec = $fmtDec;
        return $this;
    }
}
