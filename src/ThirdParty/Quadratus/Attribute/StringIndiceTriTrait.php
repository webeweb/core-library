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
 * Indice tri trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringIndiceTriTrait {

    /**
     * Indice tri.
     *
     * @var string
     */
    private $indiceTri;

    /**
     * Get the indice tri.
     *
     * @return string Returns the indice tri.
     */
    public function getIndiceTri() {
        return $this->indiceTri;
    }

    /**
     * Set the indice tri.
     *
     * @param string $indiceTri The indice tri.
     */
    public function setIndiceTri($indiceTri) {
        $this->indiceTri = $indiceTri;
        return $this;
    }
}
