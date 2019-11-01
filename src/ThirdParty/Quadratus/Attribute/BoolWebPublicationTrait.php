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
 * Web publication trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolWebPublicationTrait {

    /**
     * Web publication.
     *
     * @var bool
     */
    private $webPublication;

    /**
     * Get the web publication.
     *
     * @return bool Returns the web publication.
     */
    public function getWebPublication() {
        return $this->webPublication;
    }

    /**
     * Set the web publication.
     *
     * @param bool $webPublication The web publication.
     */
    public function setWebPublication($webPublication) {
        $this->webPublication = $webPublication;
        return $this;
    }
}
