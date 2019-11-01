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
 * Cpt transf immo communs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCptTransfImmoCommunsTrait {

    /**
     * Cpt transf immo communs.
     *
     * @var bool
     */
    private $cptTransfImmoCommuns;

    /**
     * Get the cpt transf immo communs.
     *
     * @return bool Returns the cpt transf immo communs.
     */
    public function getCptTransfImmoCommuns() {
        return $this->cptTransfImmoCommuns;
    }

    /**
     * Set the cpt transf immo communs.
     *
     * @param bool $cptTransfImmoCommuns The cpt transf immo communs.
     */
    public function setCptTransfImmoCommuns($cptTransfImmoCommuns) {
        $this->cptTransfImmoCommuns = $cptTransfImmoCommuns;
        return $this;
    }
}
