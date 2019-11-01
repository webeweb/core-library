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
 * Tel trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTelTrait {

    /**
     * Tel.
     *
     * @var string
     */
    private $tel;

    /**
     * Get the tel.
     *
     * @return string Returns the tel.
     */
    public function getTel() {
        return $this->tel;
    }

    /**
     * Set the tel.
     *
     * @param string $tel The tel.
     */
    public function setTel($tel) {
        $this->tel = $tel;
        return $this;
    }
}
