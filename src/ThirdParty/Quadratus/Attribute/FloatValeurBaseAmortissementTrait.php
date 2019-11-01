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
 * Valeur base amortissement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatValeurBaseAmortissementTrait {

    /**
     * Valeur base amortissement.
     *
     * @var float
     */
    private $valeurBaseAmortissement;

    /**
     * Get the valeur base amortissement.
     *
     * @return float Returns the valeur base amortissement.
     */
    public function getValeurBaseAmortissement() {
        return $this->valeurBaseAmortissement;
    }

    /**
     * Set the valeur base amortissement.
     *
     * @param float $valeurBaseAmortissement The valeur base amortissement.
     */
    public function setValeurBaseAmortissement($valeurBaseAmortissement) {
        $this->valeurBaseAmortissement = $valeurBaseAmortissement;
        return $this;
    }
}
