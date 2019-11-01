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
 * N der document trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNDerDocumentTrait {

    /**
     * N der document.
     *
     * @var int
     */
    private $nDerDocument;

    /**
     * Get the n der document.
     *
     * @return int Returns the n der document.
     */
    public function getNDerDocument() {
        return $this->nDerDocument;
    }

    /**
     * Set the n der document.
     *
     * @param int $nDerDocument The n der document.
     */
    public function setNDerDocument($nDerDocument) {
        $this->nDerDocument = $nDerDocument;
        return $this;
    }
}
