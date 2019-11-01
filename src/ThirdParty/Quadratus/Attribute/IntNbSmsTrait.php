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
 * Nb sms trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbSmsTrait {

    /**
     * Nb sms.
     *
     * @var int
     */
    private $nbSms;

    /**
     * Get the nb sms.
     *
     * @return int Returns the nb sms.
     */
    public function getNbSms() {
        return $this->nbSms;
    }

    /**
     * Set the nb sms.
     *
     * @param int $nbSms The nb sms.
     */
    public function setNbSms($nbSms) {
        $this->nbSms = $nbSms;
        return $this;
    }
}
