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
 * Contenu3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringContenu3Trait {

    /**
     * Contenu3.
     *
     * @var string
     */
    private $contenu3;

    /**
     * Get the contenu3.
     *
     * @return string Returns the contenu3.
     */
    public function getContenu3() {
        return $this->contenu3;
    }

    /**
     * Set the contenu3.
     *
     * @param string $contenu3 The contenu3.
     */
    public function setContenu3($contenu3) {
        $this->contenu3 = $contenu3;
        return $this;
    }
}
