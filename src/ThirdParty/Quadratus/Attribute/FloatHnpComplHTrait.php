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
 * Hnp compl h trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHnpComplHTrait {

    /**
     * Hnp compl h.
     *
     * @var float
     */
    private $hnpComplH;

    /**
     * Get the hnp compl h.
     *
     * @return float Returns the hnp compl h.
     */
    public function getHnpComplH() {
        return $this->hnpComplH;
    }

    /**
     * Set the hnp compl h.
     *
     * @param float $hnpComplH The hnp compl h.
     */
    public function setHnpComplH($hnpComplH) {
        $this->hnpComplH = $hnpComplH;
        return $this;
    }
}
