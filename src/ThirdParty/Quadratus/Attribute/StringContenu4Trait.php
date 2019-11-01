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
 * Contenu4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringContenu4Trait {

    /**
     * Contenu4.
     *
     * @var string
     */
    private $contenu4;

    /**
     * Get the contenu4.
     *
     * @return string Returns the contenu4.
     */
    public function getContenu4() {
        return $this->contenu4;
    }

    /**
     * Set the contenu4.
     *
     * @param string $contenu4 The contenu4.
     */
    public function setContenu4($contenu4) {
        $this->contenu4 = $contenu4;
        return $this;
    }
}
