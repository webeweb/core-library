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
 * Contenu2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringContenu2Trait {

    /**
     * Contenu2.
     *
     * @var string
     */
    private $contenu2;

    /**
     * Get the contenu2.
     *
     * @return string Returns the contenu2.
     */
    public function getContenu2() {
        return $this->contenu2;
    }

    /**
     * Set the contenu2.
     *
     * @param string $contenu2 The contenu2.
     */
    public function setContenu2($contenu2) {
        $this->contenu2 = $contenu2;
        return $this;
    }
}
