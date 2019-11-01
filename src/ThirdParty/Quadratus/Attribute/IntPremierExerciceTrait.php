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
 * Premier exercice trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntPremierExerciceTrait {

    /**
     * Premier exercice.
     *
     * @var int
     */
    private $premierExercice;

    /**
     * Get the premier exercice.
     *
     * @return int Returns the premier exercice.
     */
    public function getPremierExercice() {
        return $this->premierExercice;
    }

    /**
     * Set the premier exercice.
     *
     * @param int $premierExercice The premier exercice.
     */
    public function setPremierExercice($premierExercice) {
        $this->premierExercice = $premierExercice;
        return $this;
    }
}
