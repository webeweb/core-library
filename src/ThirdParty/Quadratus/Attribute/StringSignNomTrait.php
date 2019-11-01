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
 * Sign nom trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSignNomTrait {

    /**
     * Sign nom.
     *
     * @var string
     */
    private $signNom;

    /**
     * Get the sign nom.
     *
     * @return string Returns the sign nom.
     */
    public function getSignNom() {
        return $this->signNom;
    }

    /**
     * Set the sign nom.
     *
     * @param string $signNom The sign nom.
     */
    public function setSignNom($signNom) {
        $this->signNom = $signNom;
        return $this;
    }
}
