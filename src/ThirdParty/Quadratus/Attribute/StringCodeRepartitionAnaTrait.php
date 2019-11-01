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
 * Code repartition ana trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeRepartitionAnaTrait {

    /**
     * Code repartition ana.
     *
     * @var string
     */
    private $codeRepartitionAna;

    /**
     * Get the code repartition ana.
     *
     * @return string Returns the code repartition ana.
     */
    public function getCodeRepartitionAna() {
        return $this->codeRepartitionAna;
    }

    /**
     * Set the code repartition ana.
     *
     * @param string $codeRepartitionAna The code repartition ana.
     */
    public function setCodeRepartitionAna($codeRepartitionAna) {
        $this->codeRepartitionAna = $codeRepartitionAna;
        return $this;
    }
}
