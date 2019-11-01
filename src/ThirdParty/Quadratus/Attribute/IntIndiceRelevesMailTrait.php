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
 * Indice releves mail trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntIndiceRelevesMailTrait {

    /**
     * Indice releves mail.
     *
     * @var int
     */
    private $indiceRelevesMail;

    /**
     * Get the indice releves mail.
     *
     * @return int Returns the indice releves mail.
     */
    public function getIndiceRelevesMail() {
        return $this->indiceRelevesMail;
    }

    /**
     * Set the indice releves mail.
     *
     * @param int $indiceRelevesMail The indice releves mail.
     */
    public function setIndiceRelevesMail($indiceRelevesMail) {
        $this->indiceRelevesMail = $indiceRelevesMail;
        return $this;
    }
}
