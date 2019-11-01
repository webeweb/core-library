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
 * Fs fiscal trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFsFiscalTrait {

    /**
     * Fs fiscal.
     *
     * @var string
     */
    private $fsFiscal;

    /**
     * Get the fs fiscal.
     *
     * @return string Returns the fs fiscal.
     */
    public function getFsFiscal() {
        return $this->fsFiscal;
    }

    /**
     * Set the fs fiscal.
     *
     * @param string $fsFiscal The fs fiscal.
     */
    public function setFsFiscal($fsFiscal) {
        $this->fsFiscal = $fsFiscal;
        return $this;
    }
}
