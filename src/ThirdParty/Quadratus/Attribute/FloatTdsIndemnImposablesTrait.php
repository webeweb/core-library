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
 * Tds indemn imposables trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTdsIndemnImposablesTrait {

    /**
     * Tds indemn imposables.
     *
     * @var float
     */
    private $tdsIndemnImposables;

    /**
     * Get the tds indemn imposables.
     *
     * @return float Returns the tds indemn imposables.
     */
    public function getTdsIndemnImposables() {
        return $this->tdsIndemnImposables;
    }

    /**
     * Set the tds indemn imposables.
     *
     * @param float $tdsIndemnImposables The tds indemn imposables.
     */
    public function setTdsIndemnImposables($tdsIndemnImposables) {
        $this->tdsIndemnImposables = $tdsIndemnImposables;
        return $this;
    }
}
