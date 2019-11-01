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
 * Fct documents juridique trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntFctDocumentsJuridiqueTrait {

    /**
     * Fct documents juridique.
     *
     * @var int
     */
    private $fctDocumentsJuridique;

    /**
     * Get the fct documents juridique.
     *
     * @return int Returns the fct documents juridique.
     */
    public function getFctDocumentsJuridique() {
        return $this->fctDocumentsJuridique;
    }

    /**
     * Set the fct documents juridique.
     *
     * @param int $fctDocumentsJuridique The fct documents juridique.
     */
    public function setFctDocumentsJuridique($fctDocumentsJuridique) {
        $this->fctDocumentsJuridique = $fctDocumentsJuridique;
        return $this;
    }
}
