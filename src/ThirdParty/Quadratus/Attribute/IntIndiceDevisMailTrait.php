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
 * Indice devis mail trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntIndiceDevisMailTrait {

    /**
     * Indice devis mail.
     *
     * @var int
     */
    private $indiceDevisMail;

    /**
     * Get the indice devis mail.
     *
     * @return int Returns the indice devis mail.
     */
    public function getIndiceDevisMail() {
        return $this->indiceDevisMail;
    }

    /**
     * Set the indice devis mail.
     *
     * @param int $indiceDevisMail The indice devis mail.
     */
    public function setIndiceDevisMail($indiceDevisMail) {
        $this->indiceDevisMail = $indiceDevisMail;
        return $this;
    }
}
