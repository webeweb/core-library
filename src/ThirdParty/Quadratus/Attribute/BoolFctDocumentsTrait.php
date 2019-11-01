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
 * Fct documents trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFctDocumentsTrait {

    /**
     * Fct documents.
     *
     * @var bool
     */
    private $fctDocuments;

    /**
     * Get the fct documents.
     *
     * @return bool Returns the fct documents.
     */
    public function getFctDocuments() {
        return $this->fctDocuments;
    }

    /**
     * Set the fct documents.
     *
     * @param bool $fctDocuments The fct documents.
     */
    public function setFctDocuments($fctDocuments) {
        $this->fctDocuments = $fctDocuments;
        return $this;
    }
}
