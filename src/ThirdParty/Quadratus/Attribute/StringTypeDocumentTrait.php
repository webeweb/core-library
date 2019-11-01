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
 * Type document trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeDocumentTrait {

    /**
     * Type document.
     *
     * @var string
     */
    private $typeDocument;

    /**
     * Get the type document.
     *
     * @return string Returns the type document.
     */
    public function getTypeDocument() {
        return $this->typeDocument;
    }

    /**
     * Set the type document.
     *
     * @param string $typeDocument The type document.
     */
    public function setTypeDocument($typeDocument) {
        $this->typeDocument = $typeDocument;
        return $this;
    }
}
