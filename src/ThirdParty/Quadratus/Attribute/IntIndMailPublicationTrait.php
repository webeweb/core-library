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
 * Ind mail publication trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntIndMailPublicationTrait {

    /**
     * Ind mail publication.
     *
     * @var int
     */
    private $indMailPublication;

    /**
     * Get the ind mail publication.
     *
     * @return int Returns the ind mail publication.
     */
    public function getIndMailPublication() {
        return $this->indMailPublication;
    }

    /**
     * Set the ind mail publication.
     *
     * @param int $indMailPublication The ind mail publication.
     */
    public function setIndMailPublication($indMailPublication) {
        $this->indMailPublication = $indMailPublication;
        return $this;
    }
}
