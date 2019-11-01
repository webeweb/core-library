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
 * Taux actionsociale trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxActionsocialeTrait {

    /**
     * Taux actionsociale.
     *
     * @var float
     */
    private $tauxActionsociale;

    /**
     * Get the taux actionsociale.
     *
     * @return float Returns the taux actionsociale.
     */
    public function getTauxActionsociale() {
        return $this->tauxActionsociale;
    }

    /**
     * Set the taux actionsociale.
     *
     * @param float $tauxActionsociale The taux actionsociale.
     */
    public function setTauxActionsociale($tauxActionsociale) {
        $this->tauxActionsociale = $tauxActionsociale;
        return $this;
    }
}
