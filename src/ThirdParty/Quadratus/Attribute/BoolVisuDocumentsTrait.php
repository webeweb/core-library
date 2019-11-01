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
 * Visu documents trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolVisuDocumentsTrait {

    /**
     * Visu documents.
     *
     * @var bool
     */
    private $visuDocuments;

    /**
     * Get the visu documents.
     *
     * @return bool Returns the visu documents.
     */
    public function getVisuDocuments() {
        return $this->visuDocuments;
    }

    /**
     * Set the visu documents.
     *
     * @param bool $visuDocuments The visu documents.
     */
    public function setVisuDocuments($visuDocuments) {
        $this->visuDocuments = $visuDocuments;
        return $this;
    }
}
