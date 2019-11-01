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
 * Date ancien trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateAncienTrait {

    /**
     * Date ancien.
     *
     * @var DateTime|null
     */
    private $dateAncien;

    /**
     * Get the date ancien.
     *
     * @return DateTime|null Returns the date ancien.
     */
    public function getDateAncien() {
        return $this->dateAncien;
    }

    /**
     * Set the date ancien.
     *
     * @param DateTime|null $dateAncien The date ancien.
     */
    public function setDateAncien(DateTime $dateAncien = null) {
        $this->dateAncien = $dateAncien;
        return $this;
    }
}
