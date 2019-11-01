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
 * Code ana trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeAnaTrait {

    /**
     * Code ana.
     *
     * @var string
     */
    private $codeAna;

    /**
     * Get the code ana.
     *
     * @return string Returns the code ana.
     */
    public function getCodeAna() {
        return $this->codeAna;
    }

    /**
     * Set the code ana.
     *
     * @param string $codeAna The code ana.
     */
    public function setCodeAna($codeAna) {
        $this->codeAna = $codeAna;
        return $this;
    }
}
