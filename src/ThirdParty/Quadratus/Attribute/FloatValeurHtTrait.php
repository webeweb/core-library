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
 * Valeur ht trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatValeurHtTrait {

    /**
     * Valeur ht.
     *
     * @var float
     */
    private $valeurHt;

    /**
     * Get the valeur ht.
     *
     * @return float Returns the valeur ht.
     */
    public function getValeurHt() {
        return $this->valeurHt;
    }

    /**
     * Set the valeur ht.
     *
     * @param float $valeurHt The valeur ht.
     */
    public function setValeurHt($valeurHt) {
        $this->valeurHt = $valeurHt;
        return $this;
    }
}
