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
 * Date fin cp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateFinCpTrait {

    /**
     * Date fin cp.
     *
     * @var DateTime|null
     */
    private $dateFinCp;

    /**
     * Get the date fin cp.
     *
     * @return DateTime|null Returns the date fin cp.
     */
    public function getDateFinCp() {
        return $this->dateFinCp;
    }

    /**
     * Set the date fin cp.
     *
     * @param DateTime|null $dateFinCp The date fin cp.
     */
    public function setDateFinCp(DateTime $dateFinCp = null) {
        $this->dateFinCp = $dateFinCp;
        return $this;
    }
}
