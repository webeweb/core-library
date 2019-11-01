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
 * Prise rdv trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntPriseRdvTrait {

    /**
     * Prise rdv.
     *
     * @var int
     */
    private $priseRdv;

    /**
     * Get the prise rdv.
     *
     * @return int Returns the prise rdv.
     */
    public function getPriseRdv() {
        return $this->priseRdv;
    }

    /**
     * Set the prise rdv.
     *
     * @param int $priseRdv The prise rdv.
     */
    public function setPriseRdv($priseRdv) {
        $this->priseRdv = $priseRdv;
        return $this;
    }
}
