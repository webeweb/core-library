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
 * Date doute trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateDouteTrait {

    /**
     * Date doute.
     *
     * @var DateTime|null
     */
    private $dateDoute;

    /**
     * Get the date doute.
     *
     * @return DateTime|null Returns the date doute.
     */
    public function getDateDoute() {
        return $this->dateDoute;
    }

    /**
     * Set the date doute.
     *
     * @param DateTime|null $dateDoute The date doute.
     */
    public function setDateDoute(DateTime $dateDoute = null) {
        $this->dateDoute = $dateDoute;
        return $this;
    }
}
