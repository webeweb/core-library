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
 * Code rupture trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeRuptureTrait {

    /**
     * Code rupture.
     *
     * @var string
     */
    private $codeRupture;

    /**
     * Get the code rupture.
     *
     * @return string Returns the code rupture.
     */
    public function getCodeRupture() {
        return $this->codeRupture;
    }

    /**
     * Set the code rupture.
     *
     * @param string $codeRupture The code rupture.
     */
    public function setCodeRupture($codeRupture) {
        $this->codeRupture = $codeRupture;
        return $this;
    }
}
