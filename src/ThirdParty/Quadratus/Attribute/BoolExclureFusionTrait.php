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
 * Exclure fusion trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolExclureFusionTrait {

    /**
     * Exclure fusion.
     *
     * @var bool
     */
    private $exclureFusion;

    /**
     * Get the exclure fusion.
     *
     * @return bool Returns the exclure fusion.
     */
    public function getExclureFusion() {
        return $this->exclureFusion;
    }

    /**
     * Set the exclure fusion.
     *
     * @param bool $exclureFusion The exclure fusion.
     */
    public function setExclureFusion($exclureFusion) {
        $this->exclureFusion = $exclureFusion;
        return $this;
    }
}
