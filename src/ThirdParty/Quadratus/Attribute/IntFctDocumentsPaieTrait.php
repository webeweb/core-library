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
 * Fct documents paie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntFctDocumentsPaieTrait {

    /**
     * Fct documents paie.
     *
     * @var int
     */
    private $fctDocumentsPaie;

    /**
     * Get the fct documents paie.
     *
     * @return int Returns the fct documents paie.
     */
    public function getFctDocumentsPaie() {
        return $this->fctDocumentsPaie;
    }

    /**
     * Set the fct documents paie.
     *
     * @param int $fctDocumentsPaie The fct documents paie.
     */
    public function setFctDocumentsPaie($fctDocumentsPaie) {
        $this->fctDocumentsPaie = $fctDocumentsPaie;
        return $this;
    }
}
