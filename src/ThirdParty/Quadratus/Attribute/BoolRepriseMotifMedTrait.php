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
 * Reprise motif med trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRepriseMotifMedTrait {

    /**
     * Reprise motif med.
     *
     * @var bool
     */
    private $repriseMotifMed;

    /**
     * Get the reprise motif med.
     *
     * @return bool Returns the reprise motif med.
     */
    public function getRepriseMotifMed() {
        return $this->repriseMotifMed;
    }

    /**
     * Set the reprise motif med.
     *
     * @param bool $repriseMotifMed The reprise motif med.
     */
    public function setRepriseMotifMed($repriseMotifMed) {
        $this->repriseMotifMed = $repriseMotifMed;
        return $this;
    }
}
