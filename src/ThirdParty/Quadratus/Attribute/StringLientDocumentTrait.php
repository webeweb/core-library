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
 * Lient document trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLientDocumentTrait {

    /**
     * Lient document.
     *
     * @var string
     */
    private $lientDocument;

    /**
     * Get the lient document.
     *
     * @return string Returns the lient document.
     */
    public function getLientDocument() {
        return $this->lientDocument;
    }

    /**
     * Set the lient document.
     *
     * @param string $lientDocument The lient document.
     */
    public function setLientDocument($lientDocument) {
        $this->lientDocument = $lientDocument;
        return $this;
    }
}
