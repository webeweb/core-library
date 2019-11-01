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
 * Date facture trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateFactureTrait {

    /**
     * Date facture.
     *
     * @var DateTime|null
     */
    private $dateFacture;

    /**
     * Get the date facture.
     *
     * @return DateTime|null Returns the date facture.
     */
    public function getDateFacture() {
        return $this->dateFacture;
    }

    /**
     * Set the date facture.
     *
     * @param DateTime|null $dateFacture The date facture.
     */
    public function setDateFacture(DateTime $dateFacture = null) {
        $this->dateFacture = $dateFacture;
        return $this;
    }
}
