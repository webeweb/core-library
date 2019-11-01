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
 * Mercredi a mdeb trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeMercrediAMdebTrait {

    /**
     * Mercredi a mdeb.
     *
     * @var DateTime|null
     */
    private $mercrediAMdeb;

    /**
     * Get the mercredi a mdeb.
     *
     * @return DateTime|null Returns the mercredi a mdeb.
     */
    public function getMercrediAMdeb() {
        return $this->mercrediAMdeb;
    }

    /**
     * Set the mercredi a mdeb.
     *
     * @param DateTime|null $mercrediAMdeb The mercredi a mdeb.
     */
    public function setMercrediAMdeb(DateTime $mercrediAMdeb = null) {
        $this->mercrediAMdeb = $mercrediAMdeb;
        return $this;
    }
}
