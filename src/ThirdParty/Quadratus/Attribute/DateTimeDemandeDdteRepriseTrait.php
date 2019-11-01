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

use DateTime;

/**
 * Demande ddte reprise trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDemandeDdteRepriseTrait {

    /**
     * Demande ddte reprise.
     *
     * @var DateTime|null
     */
    private $demandeDdteReprise;

    /**
     * Get the demande ddte reprise.
     *
     * @return DateTime|null Returns the demande ddte reprise.
     */
    public function getDemandeDdteReprise() {
        return $this->demandeDdteReprise;
    }

    /**
     * Set the demande ddte reprise.
     *
     * @param DateTime|null $demandeDdteReprise The demande ddte reprise.
     */
    public function setDemandeDdteReprise(DateTime $demandeDdteReprise = null) {
        $this->demandeDdteReprise = $demandeDdteReprise;
        return $this;
    }
}
