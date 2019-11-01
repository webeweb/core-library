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
 * Permis delivre le trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimePermisDelivreLeTrait {

    /**
     * Permis delivre le.
     *
     * @var DateTime|null
     */
    private $permisDelivreLe;

    /**
     * Get the permis delivre le.
     *
     * @return DateTime|null Returns the permis delivre le.
     */
    public function getPermisDelivreLe() {
        return $this->permisDelivreLe;
    }

    /**
     * Set the permis delivre le.
     *
     * @param DateTime|null $permisDelivreLe The permis delivre le.
     */
    public function setPermisDelivreLe(DateTime $permisDelivreLe = null) {
        $this->permisDelivreLe = $permisDelivreLe;
        return $this;
    }
}
