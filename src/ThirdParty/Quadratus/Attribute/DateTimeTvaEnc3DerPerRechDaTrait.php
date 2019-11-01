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
 * Tva enc3 der per rech da trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeTvaEnc3DerPerRechDaTrait {

    /**
     * Tva enc3 der per rech da.
     *
     * @var DateTime|null
     */
    private $tvaEnc3DerPerRechDa;

    /**
     * Get the tva enc3 der per rech da.
     *
     * @return DateTime|null Returns the tva enc3 der per rech da.
     */
    public function getTvaEnc3DerPerRechDa() {
        return $this->tvaEnc3DerPerRechDa;
    }

    /**
     * Set the tva enc3 der per rech da.
     *
     * @param DateTime|null $tvaEnc3DerPerRechDa The tva enc3 der per rech da.
     */
    public function setTvaEnc3DerPerRechDa(DateTime $tvaEnc3DerPerRechDa = null) {
        $this->tvaEnc3DerPerRechDa = $tvaEnc3DerPerRechDa;
        return $this;
    }
}
