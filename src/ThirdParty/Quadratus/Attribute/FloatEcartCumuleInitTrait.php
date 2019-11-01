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
 * Ecart cumule init trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatEcartCumuleInitTrait {

    /**
     * Ecart cumule init.
     *
     * @var float
     */
    private $ecartCumuleInit;

    /**
     * Get the ecart cumule init.
     *
     * @return float Returns the ecart cumule init.
     */
    public function getEcartCumuleInit() {
        return $this->ecartCumuleInit;
    }

    /**
     * Set the ecart cumule init.
     *
     * @param float $ecartCumuleInit The ecart cumule init.
     */
    public function setEcartCumuleInit($ecartCumuleInit) {
        $this->ecartCumuleInit = $ecartCumuleInit;
        return $this;
    }
}
