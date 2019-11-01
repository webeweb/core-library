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

/**
 * Lettre licence trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLettreLicenceTrait {

    /**
     * Lettre licence.
     *
     * @var string
     */
    private $lettreLicence;

    /**
     * Get the lettre licence.
     *
     * @return string Returns the lettre licence.
     */
    public function getLettreLicence() {
        return $this->lettreLicence;
    }

    /**
     * Set the lettre licence.
     *
     * @param string $lettreLicence The lettre licence.
     */
    public function setLettreLicence($lettreLicence) {
        $this->lettreLicence = $lettreLicence;
        return $this;
    }
}
