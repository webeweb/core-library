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
 * Date dernier acces trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateDernierAccesTrait {

    /**
     * Date dernier acces.
     *
     * @var DateTime|null
     */
    private $dateDernierAcces;

    /**
     * Get the date dernier acces.
     *
     * @return DateTime|null Returns the date dernier acces.
     */
    public function getDateDernierAcces() {
        return $this->dateDernierAcces;
    }

    /**
     * Set the date dernier acces.
     *
     * @param DateTime|null $dateDernierAcces The date dernier acces.
     */
    public function setDateDernierAcces(DateTime $dateDernierAcces = null) {
        $this->dateDernierAcces = $dateDernierAcces;
        return $this;
    }
}
