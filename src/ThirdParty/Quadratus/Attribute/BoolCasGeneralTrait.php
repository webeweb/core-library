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

/**
 * Cas general trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCasGeneralTrait {

    /**
     * Cas general.
     *
     * @var bool
     */
    private $casGeneral;

    /**
     * Get the cas general.
     *
     * @return bool Returns the cas general.
     */
    public function getCasGeneral() {
        return $this->casGeneral;
    }

    /**
     * Set the cas general.
     *
     * @param bool $casGeneral The cas general.
     */
    public function setCasGeneral($casGeneral) {
        $this->casGeneral = $casGeneral;
        return $this;
    }
}
