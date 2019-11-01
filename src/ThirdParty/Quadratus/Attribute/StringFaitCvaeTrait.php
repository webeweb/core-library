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
 * Fait cvae trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFaitCvaeTrait {

    /**
     * Fait cvae.
     *
     * @var string
     */
    private $faitCvae;

    /**
     * Get the fait cvae.
     *
     * @return string Returns the fait cvae.
     */
    public function getFaitCvae() {
        return $this->faitCvae;
    }

    /**
     * Set the fait cvae.
     *
     * @param string $faitCvae The fait cvae.
     */
    public function setFaitCvae($faitCvae) {
        $this->faitCvae = $faitCvae;
        return $this;
    }
}
