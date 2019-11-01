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
 * Fg sur cde frn trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFgSurCdeFrnTrait {

    /**
     * Fg sur cde frn.
     *
     * @var bool
     */
    private $fgSurCdeFrn;

    /**
     * Get the fg sur cde frn.
     *
     * @return bool Returns the fg sur cde frn.
     */
    public function getFgSurCdeFrn() {
        return $this->fgSurCdeFrn;
    }

    /**
     * Set the fg sur cde frn.
     *
     * @param bool $fgSurCdeFrn The fg sur cde frn.
     */
    public function setFgSurCdeFrn($fgSurCdeFrn) {
        $this->fgSurCdeFrn = $fgSurCdeFrn;
        return $this;
    }
}
