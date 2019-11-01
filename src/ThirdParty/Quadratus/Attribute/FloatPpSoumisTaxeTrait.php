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
 * Pp soumis taxe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPpSoumisTaxeTrait {

    /**
     * Pp soumis taxe.
     *
     * @var float
     */
    private $ppSoumisTaxe;

    /**
     * Get the pp soumis taxe.
     *
     * @return float Returns the pp soumis taxe.
     */
    public function getPpSoumisTaxe() {
        return $this->ppSoumisTaxe;
    }

    /**
     * Set the pp soumis taxe.
     *
     * @param float $ppSoumisTaxe The pp soumis taxe.
     */
    public function setPpSoumisTaxe($ppSoumisTaxe) {
        $this->ppSoumisTaxe = $ppSoumisTaxe;
        return $this;
    }
}
