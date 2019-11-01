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
 * Dt fin contrat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDtFinContratTrait {

    /**
     * Dt fin contrat.
     *
     * @var DateTime|null
     */
    private $dtFinContrat;

    /**
     * Get the dt fin contrat.
     *
     * @return DateTime|null Returns the dt fin contrat.
     */
    public function getDtFinContrat() {
        return $this->dtFinContrat;
    }

    /**
     * Set the dt fin contrat.
     *
     * @param DateTime|null $dtFinContrat The dt fin contrat.
     */
    public function setDtFinContrat(DateTime $dtFinContrat = null) {
        $this->dtFinContrat = $dtFinContrat;
        return $this;
    }
}
