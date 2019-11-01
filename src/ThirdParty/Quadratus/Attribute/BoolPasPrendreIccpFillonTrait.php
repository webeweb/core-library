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
 * Pas prendre iccp fillon trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPasPrendreIccpFillonTrait {

    /**
     * Pas prendre iccp fillon.
     *
     * @var bool
     */
    private $pasPrendreIccpFillon;

    /**
     * Get the pas prendre iccp fillon.
     *
     * @return bool Returns the pas prendre iccp fillon.
     */
    public function getPasPrendreIccpFillon() {
        return $this->pasPrendreIccpFillon;
    }

    /**
     * Set the pas prendre iccp fillon.
     *
     * @param bool $pasPrendreIccpFillon The pas prendre iccp fillon.
     */
    public function setPasPrendreIccpFillon($pasPrendreIccpFillon) {
        $this->pasPrendreIccpFillon = $pasPrendreIccpFillon;
        return $this;
    }
}
