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
 * Samedi a mdeb trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeSamediAMdebTrait {

    /**
     * Samedi a mdeb.
     *
     * @var DateTime|null
     */
    private $samediAMdeb;

    /**
     * Get the samedi a mdeb.
     *
     * @return DateTime|null Returns the samedi a mdeb.
     */
    public function getSamediAMdeb() {
        return $this->samediAMdeb;
    }

    /**
     * Set the samedi a mdeb.
     *
     * @param DateTime|null $samediAMdeb The samedi a mdeb.
     */
    public function setSamediAMdeb(DateTime $samediAMdeb = null) {
        $this->samediAMdeb = $samediAMdeb;
        return $this;
    }
}
