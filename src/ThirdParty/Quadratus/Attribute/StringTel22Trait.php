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
 * Tel22 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTel22Trait {

    /**
     * Tel22.
     *
     * @var string
     */
    private $tel22;

    /**
     * Get the tel22.
     *
     * @return string Returns the tel22.
     */
    public function getTel22() {
        return $this->tel22;
    }

    /**
     * Set the tel22.
     *
     * @param string $tel22 The tel22.
     */
    public function setTel22($tel22) {
        $this->tel22 = $tel22;
        return $this;
    }
}
