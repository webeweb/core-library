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
 * Per deb trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimePerDebTrait {

    /**
     * Per deb.
     *
     * @var DateTime|null
     */
    private $perDeb;

    /**
     * Get the per deb.
     *
     * @return DateTime|null Returns the per deb.
     */
    public function getPerDeb() {
        return $this->perDeb;
    }

    /**
     * Set the per deb.
     *
     * @param DateTime|null $perDeb The per deb.
     */
    public function setPerDeb(DateTime $perDeb = null) {
        $this->perDeb = $perDeb;
        return $this;
    }
}
