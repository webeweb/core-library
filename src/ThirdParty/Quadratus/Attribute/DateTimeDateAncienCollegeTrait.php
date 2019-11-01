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
 * Date ancien college trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateAncienCollegeTrait {

    /**
     * Date ancien college.
     *
     * @var DateTime|null
     */
    private $dateAncienCollege;

    /**
     * Get the date ancien college.
     *
     * @return DateTime|null Returns the date ancien college.
     */
    public function getDateAncienCollege() {
        return $this->dateAncienCollege;
    }

    /**
     * Set the date ancien college.
     *
     * @param DateTime|null $dateAncienCollege The date ancien college.
     */
    public function setDateAncienCollege(DateTime $dateAncienCollege = null) {
        $this->dateAncienCollege = $dateAncienCollege;
        return $this;
    }
}
