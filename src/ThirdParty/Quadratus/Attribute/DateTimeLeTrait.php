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
 * Le trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeLeTrait {

    /**
     * Le.
     *
     * @var DateTime|null
     */
    private $le;

    /**
     * Get the le.
     *
     * @return DateTime|null Returns the le.
     */
    public function getLe() {
        return $this->le;
    }

    /**
     * Set the le.
     *
     * @param DateTime|null $le The le.
     */
    public function setLe(DateTime $le = null) {
        $this->le = $le;
        return $this;
    }
}
