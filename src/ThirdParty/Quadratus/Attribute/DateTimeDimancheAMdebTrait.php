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
 * Dimanche a mdeb trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDimancheAMdebTrait {

    /**
     * Dimanche a mdeb.
     *
     * @var DateTime|null
     */
    private $dimancheAMdeb;

    /**
     * Get the dimanche a mdeb.
     *
     * @return DateTime|null Returns the dimanche a mdeb.
     */
    public function getDimancheAMdeb() {
        return $this->dimancheAMdeb;
    }

    /**
     * Set the dimanche a mdeb.
     *
     * @param DateTime|null $dimancheAMdeb The dimanche a mdeb.
     */
    public function setDimancheAMdeb(DateTime $dimancheAMdeb = null) {
        $this->dimancheAMdeb = $dimancheAMdeb;
        return $this;
    }
}
