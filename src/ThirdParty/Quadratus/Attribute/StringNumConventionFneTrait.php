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
 * Num convention fne trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumConventionFneTrait {

    /**
     * Num convention fne.
     *
     * @var string
     */
    private $numConventionFne;

    /**
     * Get the num convention fne.
     *
     * @return string Returns the num convention fne.
     */
    public function getNumConventionFne() {
        return $this->numConventionFne;
    }

    /**
     * Set the num convention fne.
     *
     * @param string $numConventionFne The num convention fne.
     */
    public function setNumConventionFne($numConventionFne) {
        $this->numConventionFne = $numConventionFne;
        return $this;
    }
}
