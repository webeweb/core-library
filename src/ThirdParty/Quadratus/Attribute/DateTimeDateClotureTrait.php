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
 * Date cloture trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateClotureTrait {

    /**
     * Date cloture.
     *
     * @var DateTime|null
     */
    private $dateCloture;

    /**
     * Get the date cloture.
     *
     * @return DateTime|null Returns the date cloture.
     */
    public function getDateCloture() {
        return $this->dateCloture;
    }

    /**
     * Set the date cloture.
     *
     * @param DateTime|null $dateCloture The date cloture.
     */
    public function setDateCloture(DateTime $dateCloture = null) {
        $this->dateCloture = $dateCloture;
        return $this;
    }
}
