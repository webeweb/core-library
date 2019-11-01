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
 * Date debut tp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateDebutTpTrait {

    /**
     * Date debut tp.
     *
     * @var DateTime|null
     */
    private $dateDebutTp;

    /**
     * Get the date debut tp.
     *
     * @return DateTime|null Returns the date debut tp.
     */
    public function getDateDebutTp() {
        return $this->dateDebutTp;
    }

    /**
     * Set the date debut tp.
     *
     * @param DateTime|null $dateDebutTp The date debut tp.
     */
    public function setDateDebutTp(DateTime $dateDebutTp = null) {
        $this->dateDebutTp = $dateDebutTp;
        return $this;
    }
}
