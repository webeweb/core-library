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
 * Trans rupture trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTransRuptureTrait {

    /**
     * Trans rupture.
     *
     * @var string
     */
    private $transRupture;

    /**
     * Get the trans rupture.
     *
     * @return string Returns the trans rupture.
     */
    public function getTransRupture() {
        return $this->transRupture;
    }

    /**
     * Set the trans rupture.
     *
     * @param string $transRupture The trans rupture.
     */
    public function setTransRupture($transRupture) {
        $this->transRupture = $transRupture;
        return $this;
    }
}
