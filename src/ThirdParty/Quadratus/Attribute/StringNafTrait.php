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
 * Naf trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNafTrait {

    /**
     * Naf.
     *
     * @var string
     */
    private $naf;

    /**
     * Get the naf.
     *
     * @return string Returns the naf.
     */
    public function getNaf() {
        return $this->naf;
    }

    /**
     * Set the naf.
     *
     * @param string $naf The naf.
     */
    public function setNaf($naf) {
        $this->naf = $naf;
        return $this;
    }
}
