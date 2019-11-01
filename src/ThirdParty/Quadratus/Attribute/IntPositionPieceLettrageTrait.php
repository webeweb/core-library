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
 * Position piece lettrage trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntPositionPieceLettrageTrait {

    /**
     * Position piece lettrage.
     *
     * @var int
     */
    private $positionPieceLettrage;

    /**
     * Get the position piece lettrage.
     *
     * @return int Returns the position piece lettrage.
     */
    public function getPositionPieceLettrage() {
        return $this->positionPieceLettrage;
    }

    /**
     * Set the position piece lettrage.
     *
     * @param int $positionPieceLettrage The position piece lettrage.
     */
    public function setPositionPieceLettrage($positionPieceLettrage) {
        $this->positionPieceLettrage = $positionPieceLettrage;
        return $this;
    }
}
