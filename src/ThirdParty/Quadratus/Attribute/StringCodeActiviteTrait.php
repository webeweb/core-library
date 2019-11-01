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
 * Code activite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeActiviteTrait {

    /**
     * Code activite.
     *
     * @var string
     */
    private $codeActivite;

    /**
     * Get the code activite.
     *
     * @return string Returns the code activite.
     */
    public function getCodeActivite() {
        return $this->codeActivite;
    }

    /**
     * Set the code activite.
     *
     * @param string $codeActivite The code activite.
     */
    public function setCodeActivite($codeActivite) {
        $this->codeActivite = $codeActivite;
        return $this;
    }
}
