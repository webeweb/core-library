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
 * Sol mur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSolMurTrait {

    /**
     * Sol mur.
     *
     * @var string
     */
    private $solMur;

    /**
     * Get the sol mur.
     *
     * @return string Returns the sol mur.
     */
    public function getSolMur() {
        return $this->solMur;
    }

    /**
     * Set the sol mur.
     *
     * @param string $solMur The sol mur.
     */
    public function setSolMur($solMur) {
        $this->solMur = $solMur;
        return $this;
    }
}
