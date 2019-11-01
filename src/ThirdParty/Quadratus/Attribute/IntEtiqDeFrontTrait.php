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
 * Etiq de front trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntEtiqDeFrontTrait {

    /**
     * Etiq de front.
     *
     * @var int
     */
    private $etiqDeFront;

    /**
     * Get the etiq de front.
     *
     * @return int Returns the etiq de front.
     */
    public function getEtiqDeFront() {
        return $this->etiqDeFront;
    }

    /**
     * Set the etiq de front.
     *
     * @param int $etiqDeFront The etiq de front.
     */
    public function setEtiqDeFront($etiqDeFront) {
        $this->etiqDeFront = $etiqDeFront;
        return $this;
    }
}
