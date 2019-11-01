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
 * No piece cde cli trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNoPieceCdeCliTrait {

    /**
     * No piece cde cli.
     *
     * @var string
     */
    private $noPieceCdeCli;

    /**
     * Get the no piece cde cli.
     *
     * @return string Returns the no piece cde cli.
     */
    public function getNoPieceCdeCli() {
        return $this->noPieceCdeCli;
    }

    /**
     * Set the no piece cde cli.
     *
     * @param string $noPieceCdeCli The no piece cde cli.
     */
    public function setNoPieceCdeCli($noPieceCdeCli) {
        $this->noPieceCdeCli = $noPieceCdeCli;
        return $this;
    }
}
