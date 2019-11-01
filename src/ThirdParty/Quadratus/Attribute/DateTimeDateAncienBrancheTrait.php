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
 * Date ancien branche trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateAncienBrancheTrait {

    /**
     * Date ancien branche.
     *
     * @var DateTime|null
     */
    private $dateAncienBranche;

    /**
     * Get the date ancien branche.
     *
     * @return DateTime|null Returns the date ancien branche.
     */
    public function getDateAncienBranche() {
        return $this->dateAncienBranche;
    }

    /**
     * Set the date ancien branche.
     *
     * @param DateTime|null $dateAncienBranche The date ancien branche.
     */
    public function setDateAncienBranche(DateTime $dateAncienBranche = null) {
        $this->dateAncienBranche = $dateAncienBranche;
        return $this;
    }
}
