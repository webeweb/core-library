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
 * Valeur locative trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatValeurLocativeTrait {

    /**
     * Valeur locative.
     *
     * @var float
     */
    private $valeurLocative;

    /**
     * Get the valeur locative.
     *
     * @return float Returns the valeur locative.
     */
    public function getValeurLocative() {
        return $this->valeurLocative;
    }

    /**
     * Set the valeur locative.
     *
     * @param float $valeurLocative The valeur locative.
     */
    public function setValeurLocative($valeurLocative) {
        $this->valeurLocative = $valeurLocative;
        return $this;
    }
}
