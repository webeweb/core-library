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
 * Date debut cp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateDebutCpTrait {

    /**
     * Date debut cp.
     *
     * @var DateTime|null
     */
    private $dateDebutCp;

    /**
     * Get the date debut cp.
     *
     * @return DateTime|null Returns the date debut cp.
     */
    public function getDateDebutCp() {
        return $this->dateDebutCp;
    }

    /**
     * Set the date debut cp.
     *
     * @param DateTime|null $dateDebutCp The date debut cp.
     */
    public function setDateDebutCp(DateTime $dateDebutCp = null) {
        $this->dateDebutCp = $dateDebutCp;
        return $this;
    }
}
