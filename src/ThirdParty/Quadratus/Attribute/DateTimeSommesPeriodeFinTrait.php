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
 * Sommes periode fin trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeSommesPeriodeFinTrait {

    /**
     * Sommes periode fin.
     *
     * @var DateTime|null
     */
    private $sommesPeriodeFin;

    /**
     * Get the sommes periode fin.
     *
     * @return DateTime|null Returns the sommes periode fin.
     */
    public function getSommesPeriodeFin() {
        return $this->sommesPeriodeFin;
    }

    /**
     * Set the sommes periode fin.
     *
     * @param DateTime|null $sommesPeriodeFin The sommes periode fin.
     */
    public function setSommesPeriodeFin(DateTime $sommesPeriodeFin = null) {
        $this->sommesPeriodeFin = $sommesPeriodeFin;
        return $this;
    }
}
