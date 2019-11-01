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
 * Date bilan trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateBilanTrait {

    /**
     * Date bilan.
     *
     * @var DateTime|null
     */
    private $dateBilan;

    /**
     * Get the date bilan.
     *
     * @return DateTime|null Returns the date bilan.
     */
    public function getDateBilan() {
        return $this->dateBilan;
    }

    /**
     * Set the date bilan.
     *
     * @param DateTime|null $dateBilan The date bilan.
     */
    public function setDateBilan(DateTime $dateBilan = null) {
        $this->dateBilan = $dateBilan;
        return $this;
    }
}
