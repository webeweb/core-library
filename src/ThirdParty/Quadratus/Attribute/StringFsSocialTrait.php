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
 * Fs social trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFsSocialTrait {

    /**
     * Fs social.
     *
     * @var string
     */
    private $fsSocial;

    /**
     * Get the fs social.
     *
     * @return string Returns the fs social.
     */
    public function getFsSocial() {
        return $this->fsSocial;
    }

    /**
     * Set the fs social.
     *
     * @param string $fsSocial The fs social.
     */
    public function setFsSocial($fsSocial) {
        $this->fsSocial = $fsSocial;
        return $this;
    }
}
