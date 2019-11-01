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
 * Date debauchage trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateDebauchageTrait {

    /**
     * Date debauchage.
     *
     * @var DateTime|null
     */
    private $dateDebauchage;

    /**
     * Get the date debauchage.
     *
     * @return DateTime|null Returns the date debauchage.
     */
    public function getDateDebauchage() {
        return $this->dateDebauchage;
    }

    /**
     * Set the date debauchage.
     *
     * @param DateTime|null $dateDebauchage The date debauchage.
     */
    public function setDateDebauchage(DateTime $dateDebauchage = null) {
        $this->dateDebauchage = $dateDebauchage;
        return $this;
    }
}
