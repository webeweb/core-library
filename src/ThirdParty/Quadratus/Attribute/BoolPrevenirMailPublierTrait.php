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
 * Prevenir mail publier trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPrevenirMailPublierTrait {

    /**
     * Prevenir mail publier.
     *
     * @var bool
     */
    private $prevenirMailPublier;

    /**
     * Get the prevenir mail publier.
     *
     * @return bool Returns the prevenir mail publier.
     */
    public function getPrevenirMailPublier() {
        return $this->prevenirMailPublier;
    }

    /**
     * Set the prevenir mail publier.
     *
     * @param bool $prevenirMailPublier The prevenir mail publier.
     */
    public function setPrevenirMailPublier($prevenirMailPublier) {
        $this->prevenirMailPublier = $prevenirMailPublier;
        return $this;
    }
}
