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
 * Publication trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPublicationTrait {

    /**
     * Publication.
     *
     * @var bool
     */
    private $publication;

    /**
     * Get the publication.
     *
     * @return bool Returns the publication.
     */
    public function getPublication() {
        return $this->publication;
    }

    /**
     * Set the publication.
     *
     * @param bool $publication The publication.
     */
    public function setPublication($publication) {
        $this->publication = $publication;
        return $this;
    }
}
