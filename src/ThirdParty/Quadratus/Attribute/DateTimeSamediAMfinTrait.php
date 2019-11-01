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
 * Samedi a mfin trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeSamediAMfinTrait {

    /**
     * Samedi a mfin.
     *
     * @var DateTime|null
     */
    private $samediAMfin;

    /**
     * Get the samedi a mfin.
     *
     * @return DateTime|null Returns the samedi a mfin.
     */
    public function getSamediAMfin() {
        return $this->samediAMfin;
    }

    /**
     * Set the samedi a mfin.
     *
     * @param DateTime|null $samediAMfin The samedi a mfin.
     */
    public function setSamediAMfin(DateTime $samediAMfin = null) {
        $this->samediAMfin = $samediAMfin;
        return $this;
    }
}
