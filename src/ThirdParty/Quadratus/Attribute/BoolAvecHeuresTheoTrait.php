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
 * Avec heures theo trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAvecHeuresTheoTrait {

    /**
     * Avec heures theo.
     *
     * @var bool
     */
    private $avecHeuresTheo;

    /**
     * Get the avec heures theo.
     *
     * @return bool Returns the avec heures theo.
     */
    public function getAvecHeuresTheo() {
        return $this->avecHeuresTheo;
    }

    /**
     * Set the avec heures theo.
     *
     * @param bool $avecHeuresTheo The avec heures theo.
     */
    public function setAvecHeuresTheo($avecHeuresTheo) {
        $this->avecHeuresTheo = $avecHeuresTheo;
        return $this;
    }
}
