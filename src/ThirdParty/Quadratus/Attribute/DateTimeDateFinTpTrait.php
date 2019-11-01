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
 * Date fin tp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateFinTpTrait {

    /**
     * Date fin tp.
     *
     * @var DateTime|null
     */
    private $dateFinTp;

    /**
     * Get the date fin tp.
     *
     * @return DateTime|null Returns the date fin tp.
     */
    public function getDateFinTp() {
        return $this->dateFinTp;
    }

    /**
     * Set the date fin tp.
     *
     * @param DateTime|null $dateFinTp The date fin tp.
     */
    public function setDateFinTp(DateTime $dateFinTp = null) {
        $this->dateFinTp = $dateFinTp;
        return $this;
    }
}
