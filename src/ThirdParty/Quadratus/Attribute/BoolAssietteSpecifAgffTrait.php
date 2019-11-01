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
 * Assiette specif agff trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAssietteSpecifAgffTrait {

    /**
     * Assiette specif agff.
     *
     * @var bool
     */
    private $assietteSpecifAgff;

    /**
     * Get the assiette specif agff.
     *
     * @return bool Returns the assiette specif agff.
     */
    public function getAssietteSpecifAgff() {
        return $this->assietteSpecifAgff;
    }

    /**
     * Set the assiette specif agff.
     *
     * @param bool $assietteSpecifAgff The assiette specif agff.
     */
    public function setAssietteSpecifAgff($assietteSpecifAgff) {
        $this->assietteSpecifAgff = $assietteSpecifAgff;
        return $this;
    }
}
