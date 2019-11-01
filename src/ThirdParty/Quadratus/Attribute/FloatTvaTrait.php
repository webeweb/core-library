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
 * Tva trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTvaTrait {

    /**
     * Tva.
     *
     * @var float
     */
    private $tva;

    /**
     * Get the tva.
     *
     * @return float Returns the tva.
     */
    public function getTva() {
        return $this->tva;
    }

    /**
     * Set the tva.
     *
     * @param float $tva The tva.
     */
    public function setTva($tva) {
        $this->tva = $tva;
        return $this;
    }
}
