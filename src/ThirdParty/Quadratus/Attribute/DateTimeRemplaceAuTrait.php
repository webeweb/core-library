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
 * Remplace au trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeRemplaceAuTrait {

    /**
     * Remplace au.
     *
     * @var DateTime|null
     */
    private $remplaceAu;

    /**
     * Get the remplace au.
     *
     * @return DateTime|null Returns the remplace au.
     */
    public function getRemplaceAu() {
        return $this->remplaceAu;
    }

    /**
     * Set the remplace au.
     *
     * @param DateTime|null $remplaceAu The remplace au.
     */
    public function setRemplaceAu(DateTime $remplaceAu = null) {
        $this->remplaceAu = $remplaceAu;
        return $this;
    }
}
