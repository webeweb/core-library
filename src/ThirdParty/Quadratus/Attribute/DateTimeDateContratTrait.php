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
 * Date contrat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateContratTrait {

    /**
     * Date contrat.
     *
     * @var DateTime|null
     */
    private $dateContrat;

    /**
     * Get the date contrat.
     *
     * @return DateTime|null Returns the date contrat.
     */
    public function getDateContrat() {
        return $this->dateContrat;
    }

    /**
     * Set the date contrat.
     *
     * @param DateTime|null $dateContrat The date contrat.
     */
    public function setDateContrat(DateTime $dateContrat = null) {
        $this->dateContrat = $dateContrat;
        return $this;
    }
}
