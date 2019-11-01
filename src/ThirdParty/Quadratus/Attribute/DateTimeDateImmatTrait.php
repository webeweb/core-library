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
 * Date immat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateImmatTrait {

    /**
     * Date immat.
     *
     * @var DateTime|null
     */
    private $dateImmat;

    /**
     * Get the date immat.
     *
     * @return DateTime|null Returns the date immat.
     */
    public function getDateImmat() {
        return $this->dateImmat;
    }

    /**
     * Set the date immat.
     *
     * @param DateTime|null $dateImmat The date immat.
     */
    public function setDateImmat(DateTime $dateImmat = null) {
        $this->dateImmat = $dateImmat;
        return $this;
    }
}
