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
 * Ancienn btp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeAnciennBtpTrait {

    /**
     * Ancienn btp.
     *
     * @var DateTime|null
     */
    private $anciennBtp;

    /**
     * Get the ancienn btp.
     *
     * @return DateTime|null Returns the ancienn btp.
     */
    public function getAnciennBtp() {
        return $this->anciennBtp;
    }

    /**
     * Set the ancienn btp.
     *
     * @param DateTime|null $anciennBtp The ancienn btp.
     */
    public function setAnciennBtp(DateTime $anciennBtp = null) {
        $this->anciennBtp = $anciennBtp;
        return $this;
    }
}
