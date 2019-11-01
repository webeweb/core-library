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
 * Pret trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPretTrait {

    /**
     * Pret.
     *
     * @var bool
     */
    private $pret;

    /**
     * Get the pret.
     *
     * @return bool Returns the pret.
     */
    public function getPret() {
        return $this->pret;
    }

    /**
     * Set the pret.
     *
     * @param bool $pret The pret.
     */
    public function setPret($pret) {
        $this->pret = $pret;
        return $this;
    }
}
