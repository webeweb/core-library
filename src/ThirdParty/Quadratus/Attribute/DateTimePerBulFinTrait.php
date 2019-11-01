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
 * Per bul fin trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimePerBulFinTrait {

    /**
     * Per bul fin.
     *
     * @var DateTime|null
     */
    private $perBulFin;

    /**
     * Get the per bul fin.
     *
     * @return DateTime|null Returns the per bul fin.
     */
    public function getPerBulFin() {
        return $this->perBulFin;
    }

    /**
     * Set the per bul fin.
     *
     * @param DateTime|null $perBulFin The per bul fin.
     */
    public function setPerBulFin(DateTime $perBulFin = null) {
        $this->perBulFin = $perBulFin;
        return $this;
    }
}
