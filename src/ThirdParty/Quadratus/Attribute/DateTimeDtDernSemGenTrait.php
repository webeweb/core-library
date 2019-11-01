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
 * Dt dern sem gen trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDtDernSemGenTrait {

    /**
     * Dt dern sem gen.
     *
     * @var DateTime|null
     */
    private $dtDernSemGen;

    /**
     * Get the dt dern sem gen.
     *
     * @return DateTime|null Returns the dt dern sem gen.
     */
    public function getDtDernSemGen() {
        return $this->dtDernSemGen;
    }

    /**
     * Set the dt dern sem gen.
     *
     * @param DateTime|null $dtDernSemGen The dt dern sem gen.
     */
    public function setDtDernSemGen(DateTime $dtDernSemGen = null) {
        $this->dtDernSemGen = $dtDernSemGen;
        return $this;
    }
}
