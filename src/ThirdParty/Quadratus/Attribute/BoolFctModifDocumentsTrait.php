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
 * Fct modif documents trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFctModifDocumentsTrait {

    /**
     * Fct modif documents.
     *
     * @var bool
     */
    private $fctModifDocuments;

    /**
     * Get the fct modif documents.
     *
     * @return bool Returns the fct modif documents.
     */
    public function getFctModifDocuments() {
        return $this->fctModifDocuments;
    }

    /**
     * Set the fct modif documents.
     *
     * @param bool $fctModifDocuments The fct modif documents.
     */
    public function setFctModifDocuments($fctModifDocuments) {
        $this->fctModifDocuments = $fctModifDocuments;
        return $this;
    }
}
