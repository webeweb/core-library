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
 * Op prise rdv trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolOpPriseRdvTrait {

    /**
     * Op prise rdv.
     *
     * @var bool
     */
    private $opPriseRdv;

    /**
     * Get the op prise rdv.
     *
     * @return bool Returns the op prise rdv.
     */
    public function getOpPriseRdv() {
        return $this->opPriseRdv;
    }

    /**
     * Set the op prise rdv.
     *
     * @param bool $opPriseRdv The op prise rdv.
     */
    public function setOpPriseRdv($opPriseRdv) {
        $this->opPriseRdv = $opPriseRdv;
        return $this;
    }
}
