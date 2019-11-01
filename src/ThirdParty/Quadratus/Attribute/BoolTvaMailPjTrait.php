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
 * Tva mail pj trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTvaMailPjTrait {

    /**
     * Tva mail pj.
     *
     * @var bool
     */
    private $tvaMailPj;

    /**
     * Get the tva mail pj.
     *
     * @return bool Returns the tva mail pj.
     */
    public function getTvaMailPj() {
        return $this->tvaMailPj;
    }

    /**
     * Set the tva mail pj.
     *
     * @param bool $tvaMailPj The tva mail pj.
     */
    public function setTvaMailPj($tvaMailPj) {
        $this->tvaMailPj = $tvaMailPj;
        return $this;
    }
}
