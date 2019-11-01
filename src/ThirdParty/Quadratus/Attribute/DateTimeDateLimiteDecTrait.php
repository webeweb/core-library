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
 * Date limite dec trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateLimiteDecTrait {

    /**
     * Date limite dec.
     *
     * @var DateTime|null
     */
    private $dateLimiteDec;

    /**
     * Get the date limite dec.
     *
     * @return DateTime|null Returns the date limite dec.
     */
    public function getDateLimiteDec() {
        return $this->dateLimiteDec;
    }

    /**
     * Set the date limite dec.
     *
     * @param DateTime|null $dateLimiteDec The date limite dec.
     */
    public function setDateLimiteDec(DateTime $dateLimiteDec = null) {
        $this->dateLimiteDec = $dateLimiteDec;
        return $this;
    }
}
