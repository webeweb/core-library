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
 * Date validee trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateValideeTrait {

    /**
     * Date validee.
     *
     * @var DateTime|null
     */
    private $dateValidee;

    /**
     * Get the date validee.
     *
     * @return DateTime|null Returns the date validee.
     */
    public function getDateValidee() {
        return $this->dateValidee;
    }

    /**
     * Set the date validee.
     *
     * @param DateTime|null $dateValidee The date validee.
     */
    public function setDateValidee(DateTime $dateValidee = null) {
        $this->dateValidee = $dateValidee;
        return $this;
    }
}
