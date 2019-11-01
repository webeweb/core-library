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
 * Methode tva trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMethodeTvaTrait {

    /**
     * Methode tva.
     *
     * @var string
     */
    private $methodeTva;

    /**
     * Get the methode tva.
     *
     * @return string Returns the methode tva.
     */
    public function getMethodeTva() {
        return $this->methodeTva;
    }

    /**
     * Set the methode tva.
     *
     * @param string $methodeTva The methode tva.
     */
    public function setMethodeTva($methodeTva) {
        $this->methodeTva = $methodeTva;
        return $this;
    }
}
