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
 * Fct documents autre trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntFctDocumentsAutreTrait {

    /**
     * Fct documents autre.
     *
     * @var int
     */
    private $fctDocumentsAutre;

    /**
     * Get the fct documents autre.
     *
     * @return int Returns the fct documents autre.
     */
    public function getFctDocumentsAutre() {
        return $this->fctDocumentsAutre;
    }

    /**
     * Set the fct documents autre.
     *
     * @param int $fctDocumentsAutre The fct documents autre.
     */
    public function setFctDocumentsAutre($fctDocumentsAutre) {
        $this->fctDocumentsAutre = $fctDocumentsAutre;
        return $this;
    }
}
