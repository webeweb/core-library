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
 * Demande ddte fin trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDemandeDdteFinTrait {

    /**
     * Demande ddte fin.
     *
     * @var DateTime|null
     */
    private $demandeDdteFin;

    /**
     * Get the demande ddte fin.
     *
     * @return DateTime|null Returns the demande ddte fin.
     */
    public function getDemandeDdteFin() {
        return $this->demandeDdteFin;
    }

    /**
     * Set the demande ddte fin.
     *
     * @param DateTime|null $demandeDdteFin The demande ddte fin.
     */
    public function setDemandeDdteFin(DateTime $demandeDdteFin = null) {
        $this->demandeDdteFin = $demandeDdteFin;
        return $this;
    }
}
