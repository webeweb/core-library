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
 * Samedi p mdeb trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeSamediPMdebTrait {

    /**
     * Samedi p mdeb.
     *
     * @var DateTime|null
     */
    private $samediPMdeb;

    /**
     * Get the samedi p mdeb.
     *
     * @return DateTime|null Returns the samedi p mdeb.
     */
    public function getSamediPMdeb() {
        return $this->samediPMdeb;
    }

    /**
     * Set the samedi p mdeb.
     *
     * @param DateTime|null $samediPMdeb The samedi p mdeb.
     */
    public function setSamediPMdeb(DateTime $samediPMdeb = null) {
        $this->samediPMdeb = $samediPMdeb;
        return $this;
    }
}
