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
 * Indice factures mail trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntIndiceFacturesMailTrait {

    /**
     * Indice factures mail.
     *
     * @var int
     */
    private $indiceFacturesMail;

    /**
     * Get the indice factures mail.
     *
     * @return int Returns the indice factures mail.
     */
    public function getIndiceFacturesMail() {
        return $this->indiceFacturesMail;
    }

    /**
     * Set the indice factures mail.
     *
     * @param int $indiceFacturesMail The indice factures mail.
     */
    public function setIndiceFacturesMail($indiceFacturesMail) {
        $this->indiceFacturesMail = $indiceFacturesMail;
        return $this;
    }
}
