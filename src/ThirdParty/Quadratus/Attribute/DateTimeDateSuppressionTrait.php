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
 * Date suppression trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateSuppressionTrait {

    /**
     * Date suppression.
     *
     * @var DateTime|null
     */
    private $dateSuppression;

    /**
     * Get the date suppression.
     *
     * @return DateTime|null Returns the date suppression.
     */
    public function getDateSuppression() {
        return $this->dateSuppression;
    }

    /**
     * Set the date suppression.
     *
     * @param DateTime|null $dateSuppression The date suppression.
     */
    public function setDateSuppression(DateTime $dateSuppression = null) {
        $this->dateSuppression = $dateSuppression;
        return $this;
    }
}
