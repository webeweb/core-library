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
 * Fct documents compta trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntFctDocumentsComptaTrait {

    /**
     * Fct documents compta.
     *
     * @var int
     */
    private $fctDocumentsCompta;

    /**
     * Get the fct documents compta.
     *
     * @return int Returns the fct documents compta.
     */
    public function getFctDocumentsCompta() {
        return $this->fctDocumentsCompta;
    }

    /**
     * Set the fct documents compta.
     *
     * @param int $fctDocumentsCompta The fct documents compta.
     */
    public function setFctDocumentsCompta($fctDocumentsCompta) {
        $this->fctDocumentsCompta = $fctDocumentsCompta;
        return $this;
    }
}
