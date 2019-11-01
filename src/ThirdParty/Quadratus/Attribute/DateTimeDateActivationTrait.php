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
 * Date activation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateActivationTrait {

    /**
     * Date activation.
     *
     * @var DateTime|null
     */
    private $dateActivation;

    /**
     * Get the date activation.
     *
     * @return DateTime|null Returns the date activation.
     */
    public function getDateActivation() {
        return $this->dateActivation;
    }

    /**
     * Set the date activation.
     *
     * @param DateTime|null $dateActivation The date activation.
     */
    public function setDateActivation(DateTime $dateActivation = null) {
        $this->dateActivation = $dateActivation;
        return $this;
    }
}
