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
 * Ews publication trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEwsPublicationTrait {

    /**
     * Ews publication.
     *
     * @var bool
     */
    private $ewsPublication;

    /**
     * Get the ews publication.
     *
     * @return bool Returns the ews publication.
     */
    public function getEwsPublication() {
        return $this->ewsPublication;
    }

    /**
     * Set the ews publication.
     *
     * @param bool $ewsPublication The ews publication.
     */
    public function setEwsPublication($ewsPublication) {
        $this->ewsPublication = $ewsPublication;
        return $this;
    }
}
