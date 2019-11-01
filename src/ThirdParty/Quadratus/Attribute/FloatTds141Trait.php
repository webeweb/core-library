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
 * Tds141 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTds141Trait {

    /**
     * Tds141.
     *
     * @var float
     */
    private $tds141;

    /**
     * Get the tds141.
     *
     * @return float Returns the tds141.
     */
    public function getTds141() {
        return $this->tds141;
    }

    /**
     * Set the tds141.
     *
     * @param float $tds141 The tds141.
     */
    public function setTds141($tds141) {
        $this->tds141 = $tds141;
        return $this;
    }
}
