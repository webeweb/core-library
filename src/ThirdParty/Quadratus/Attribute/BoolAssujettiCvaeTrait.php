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
 * Assujetti cvae trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAssujettiCvaeTrait {

    /**
     * Assujetti cvae.
     *
     * @var bool
     */
    private $assujettiCvae;

    /**
     * Get the assujetti cvae.
     *
     * @return bool Returns the assujetti cvae.
     */
    public function getAssujettiCvae() {
        return $this->assujettiCvae;
    }

    /**
     * Set the assujetti cvae.
     *
     * @param bool $assujettiCvae The assujetti cvae.
     */
    public function setAssujettiCvae($assujettiCvae) {
        $this->assujettiCvae = $assujettiCvae;
        return $this;
    }
}
