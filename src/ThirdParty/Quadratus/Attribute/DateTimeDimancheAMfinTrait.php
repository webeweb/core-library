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
 * Dimanche a mfin trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDimancheAMfinTrait {

    /**
     * Dimanche a mfin.
     *
     * @var DateTime|null
     */
    private $dimancheAMfin;

    /**
     * Get the dimanche a mfin.
     *
     * @return DateTime|null Returns the dimanche a mfin.
     */
    public function getDimancheAMfin() {
        return $this->dimancheAMfin;
    }

    /**
     * Set the dimanche a mfin.
     *
     * @param DateTime|null $dimancheAMfin The dimanche a mfin.
     */
    public function setDimancheAMfin(DateTime $dimancheAMfin = null) {
        $this->dimancheAMfin = $dimancheAMfin;
        return $this;
    }
}
