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
 * No piece cde trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNoPieceCdeTrait {

    /**
     * No piece cde.
     *
     * @var string
     */
    private $noPieceCde;

    /**
     * Get the no piece cde.
     *
     * @return string Returns the no piece cde.
     */
    public function getNoPieceCde() {
        return $this->noPieceCde;
    }

    /**
     * Set the no piece cde.
     *
     * @param string $noPieceCde The no piece cde.
     */
    public function setNoPieceCde($noPieceCde) {
        $this->noPieceCde = $noPieceCde;
        return $this;
    }
}
