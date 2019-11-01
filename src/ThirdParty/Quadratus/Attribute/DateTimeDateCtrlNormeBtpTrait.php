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
 * Date ctrl norme btp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateCtrlNormeBtpTrait {

    /**
     * Date ctrl norme btp.
     *
     * @var DateTime|null
     */
    private $dateCtrlNormeBtp;

    /**
     * Get the date ctrl norme btp.
     *
     * @return DateTime|null Returns the date ctrl norme btp.
     */
    public function getDateCtrlNormeBtp() {
        return $this->dateCtrlNormeBtp;
    }

    /**
     * Set the date ctrl norme btp.
     *
     * @param DateTime|null $dateCtrlNormeBtp The date ctrl norme btp.
     */
    public function setDateCtrlNormeBtp(DateTime $dateCtrlNormeBtp = null) {
        $this->dateCtrlNormeBtp = $dateCtrlNormeBtp;
        return $this;
    }
}
