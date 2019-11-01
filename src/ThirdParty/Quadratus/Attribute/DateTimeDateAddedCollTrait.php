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
 * Date added coll trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateAddedCollTrait {

    /**
     * Date added coll.
     *
     * @var DateTime|null
     */
    private $dateAddedColl;

    /**
     * Get the date added coll.
     *
     * @return DateTime|null Returns the date added coll.
     */
    public function getDateAddedColl() {
        return $this->dateAddedColl;
    }

    /**
     * Set the date added coll.
     *
     * @param DateTime|null $dateAddedColl The date added coll.
     */
    public function setDateAddedColl(DateTime $dateAddedColl = null) {
        $this->dateAddedColl = $dateAddedColl;
        return $this;
    }
}
