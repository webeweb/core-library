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
 * Tds103 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTds103Trait {

    /**
     * Tds103.
     *
     * @var float
     */
    private $tds103;

    /**
     * Get the tds103.
     *
     * @return float Returns the tds103.
     */
    public function getTds103() {
        return $this->tds103;
    }

    /**
     * Set the tds103.
     *
     * @param float $tds103 The tds103.
     */
    public function setTds103($tds103) {
        $this->tds103 = $tds103;
        return $this;
    }
}
