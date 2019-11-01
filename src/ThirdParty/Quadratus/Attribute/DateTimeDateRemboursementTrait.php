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
 * Date remboursement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateRemboursementTrait {

    /**
     * Date remboursement.
     *
     * @var DateTime|null
     */
    private $dateRemboursement;

    /**
     * Get the date remboursement.
     *
     * @return DateTime|null Returns the date remboursement.
     */
    public function getDateRemboursement() {
        return $this->dateRemboursement;
    }

    /**
     * Set the date remboursement.
     *
     * @param DateTime|null $dateRemboursement The date remboursement.
     */
    public function setDateRemboursement(DateTime $dateRemboursement = null) {
        $this->dateRemboursement = $dateRemboursement;
        return $this;
    }
}
