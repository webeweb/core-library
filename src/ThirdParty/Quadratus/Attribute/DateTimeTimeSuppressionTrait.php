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
 * Time suppression trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeTimeSuppressionTrait {

    /**
     * Time suppression.
     *
     * @var DateTime|null
     */
    private $timeSuppression;

    /**
     * Get the time suppression.
     *
     * @return DateTime|null Returns the time suppression.
     */
    public function getTimeSuppression() {
        return $this->timeSuppression;
    }

    /**
     * Set the time suppression.
     *
     * @param DateTime|null $timeSuppression The time suppression.
     */
    public function setTimeSuppression(DateTime $timeSuppression = null) {
        $this->timeSuppression = $timeSuppression;
        return $this;
    }
}
