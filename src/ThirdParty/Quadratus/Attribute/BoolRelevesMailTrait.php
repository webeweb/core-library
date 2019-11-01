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
 * Releves mail trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRelevesMailTrait {

    /**
     * Releves mail.
     *
     * @var bool
     */
    private $relevesMail;

    /**
     * Get the releves mail.
     *
     * @return bool Returns the releves mail.
     */
    public function getRelevesMail() {
        return $this->relevesMail;
    }

    /**
     * Set the releves mail.
     *
     * @param bool $relevesMail The releves mail.
     */
    public function setRelevesMail($relevesMail) {
        $this->relevesMail = $relevesMail;
        return $this;
    }
}
