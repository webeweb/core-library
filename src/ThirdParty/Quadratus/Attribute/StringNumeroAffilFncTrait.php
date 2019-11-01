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
 * Numero affil fnc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumeroAffilFncTrait {

    /**
     * Numero affil fnc.
     *
     * @var string
     */
    private $numeroAffilFnc;

    /**
     * Get the numero affil fnc.
     *
     * @return string Returns the numero affil fnc.
     */
    public function getNumeroAffilFnc() {
        return $this->numeroAffilFnc;
    }

    /**
     * Set the numero affil fnc.
     *
     * @param string $numeroAffilFnc The numero affil fnc.
     */
    public function setNumeroAffilFnc($numeroAffilFnc) {
        $this->numeroAffilFnc = $numeroAffilFnc;
        return $this;
    }
}
