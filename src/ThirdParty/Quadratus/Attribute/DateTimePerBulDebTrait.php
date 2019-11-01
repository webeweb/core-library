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
 * Per bul deb trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimePerBulDebTrait {

    /**
     * Per bul deb.
     *
     * @var DateTime|null
     */
    private $perBulDeb;

    /**
     * Get the per bul deb.
     *
     * @return DateTime|null Returns the per bul deb.
     */
    public function getPerBulDeb() {
        return $this->perBulDeb;
    }

    /**
     * Set the per bul deb.
     *
     * @param DateTime|null $perBulDeb The per bul deb.
     */
    public function setPerBulDeb(DateTime $perBulDeb = null) {
        $this->perBulDeb = $perBulDeb;
        return $this;
    }
}
