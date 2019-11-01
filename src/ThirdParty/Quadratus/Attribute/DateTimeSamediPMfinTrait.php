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
 * Samedi p mfin trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeSamediPMfinTrait {

    /**
     * Samedi p mfin.
     *
     * @var DateTime|null
     */
    private $samediPMfin;

    /**
     * Get the samedi p mfin.
     *
     * @return DateTime|null Returns the samedi p mfin.
     */
    public function getSamediPMfin() {
        return $this->samediPMfin;
    }

    /**
     * Set the samedi p mfin.
     *
     * @param DateTime|null $samediPMfin The samedi p mfin.
     */
    public function setSamediPMfin(DateTime $samediPMfin = null) {
        $this->samediPMfin = $samediPMfin;
        return $this;
    }
}
