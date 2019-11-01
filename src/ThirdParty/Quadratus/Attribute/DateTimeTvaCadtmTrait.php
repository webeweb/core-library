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
 * Tva cadtm trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeTvaCadtmTrait {

    /**
     * Tva cadtm.
     *
     * @var DateTime|null
     */
    private $tvaCadtm;

    /**
     * Get the tva cadtm.
     *
     * @return DateTime|null Returns the tva cadtm.
     */
    public function getTvaCadtm() {
        return $this->tvaCadtm;
    }

    /**
     * Set the tva cadtm.
     *
     * @param DateTime|null $tvaCadtm The tva cadtm.
     */
    public function setTvaCadtm(DateTime $tvaCadtm = null) {
        $this->tvaCadtm = $tvaCadtm;
        return $this;
    }
}
