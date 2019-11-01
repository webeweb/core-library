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
 * Taux ret tr app trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxRetTrAppTrait {

    /**
     * Taux ret tr app.
     *
     * @var float
     */
    private $tauxRetTrApp;

    /**
     * Get the taux ret tr app.
     *
     * @return float Returns the taux ret tr app.
     */
    public function getTauxRetTrApp() {
        return $this->tauxRetTrApp;
    }

    /**
     * Set the taux ret tr app.
     *
     * @param float $tauxRetTrApp The taux ret tr app.
     */
    public function setTauxRetTrApp($tauxRetTrApp) {
        $this->tauxRetTrApp = $tauxRetTrApp;
        return $this;
    }
}
