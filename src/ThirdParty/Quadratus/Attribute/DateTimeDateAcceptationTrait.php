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
 * Date acceptation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateAcceptationTrait {

    /**
     * Date acceptation.
     *
     * @var DateTime|null
     */
    private $dateAcceptation;

    /**
     * Get the date acceptation.
     *
     * @return DateTime|null Returns the date acceptation.
     */
    public function getDateAcceptation() {
        return $this->dateAcceptation;
    }

    /**
     * Set the date acceptation.
     *
     * @param DateTime|null $dateAcceptation The date acceptation.
     */
    public function setDateAcceptation(DateTime $dateAcceptation = null) {
        $this->dateAcceptation = $dateAcceptation;
        return $this;
    }
}
