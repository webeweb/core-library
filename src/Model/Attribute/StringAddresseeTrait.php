<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Model\Attribute;

/**
 * String addressee trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Attribute
 */
trait StringAddresseeTrait {

    /**
     * Addressee.
     *
     * @var string
     */
    protected $addressee;

    /**
     * Get the addressee.
     *
     * @return string Returns the addressee.
     */
    public function getAddressee() {
        return $this->addressee;
    }

    /**
     * Set the addressee.
     *
     * @param string $addressee The addressee.
     */
    public function setAddressee($addressee) {
        $this->addressee = $addressee;
        return $this;
    }
}
