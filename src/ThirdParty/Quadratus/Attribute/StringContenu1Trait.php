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
 * Contenu1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringContenu1Trait {

    /**
     * Contenu1.
     *
     * @var string
     */
    private $contenu1;

    /**
     * Get the contenu1.
     *
     * @return string Returns the contenu1.
     */
    public function getContenu1() {
        return $this->contenu1;
    }

    /**
     * Set the contenu1.
     *
     * @param string $contenu1 The contenu1.
     */
    public function setContenu1($contenu1) {
        $this->contenu1 = $contenu1;
        return $this;
    }
}
