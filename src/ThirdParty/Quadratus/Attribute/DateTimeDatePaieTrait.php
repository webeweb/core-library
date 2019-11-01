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
 * Date paie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDatePaieTrait {

    /**
     * Date paie.
     *
     * @var DateTime|null
     */
    private $datePaie;

    /**
     * Get the date paie.
     *
     * @return DateTime|null Returns the date paie.
     */
    public function getDatePaie() {
        return $this->datePaie;
    }

    /**
     * Set the date paie.
     *
     * @param DateTime|null $datePaie The date paie.
     */
    public function setDatePaie(DateTime $datePaie = null) {
        $this->datePaie = $datePaie;
        return $this;
    }
}
