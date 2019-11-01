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
 * Abat theo trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAbatTheoTrait {

    /**
     * Abat theo.
     *
     * @var float
     */
    private $abatTheo;

    /**
     * Get the abat theo.
     *
     * @return float Returns the abat theo.
     */
    public function getAbatTheo() {
        return $this->abatTheo;
    }

    /**
     * Set the abat theo.
     *
     * @param float $abatTheo The abat theo.
     */
    public function setAbatTheo($abatTheo) {
        $this->abatTheo = $abatTheo;
        return $this;
    }
}
