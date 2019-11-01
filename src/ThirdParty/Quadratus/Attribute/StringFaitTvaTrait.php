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
 * Fait tva trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFaitTvaTrait {

    /**
     * Fait tva.
     *
     * @var string
     */
    private $faitTva;

    /**
     * Get the fait tva.
     *
     * @return string Returns the fait tva.
     */
    public function getFaitTva() {
        return $this->faitTva;
    }

    /**
     * Set the fait tva.
     *
     * @param string $faitTva The fait tva.
     */
    public function setFaitTva($faitTva) {
        $this->faitTva = $faitTva;
        return $this;
    }
}
