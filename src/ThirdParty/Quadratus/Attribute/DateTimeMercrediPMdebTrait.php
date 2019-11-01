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
 * Mercredi p mdeb trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeMercrediPMdebTrait {

    /**
     * Mercredi p mdeb.
     *
     * @var DateTime|null
     */
    private $mercrediPMdeb;

    /**
     * Get the mercredi p mdeb.
     *
     * @return DateTime|null Returns the mercredi p mdeb.
     */
    public function getMercrediPMdeb() {
        return $this->mercrediPMdeb;
    }

    /**
     * Set the mercredi p mdeb.
     *
     * @param DateTime|null $mercrediPMdeb The mercredi p mdeb.
     */
    public function setMercrediPMdeb(DateTime $mercrediPMdeb = null) {
        $this->mercrediPMdeb = $mercrediPMdeb;
        return $this;
    }
}
