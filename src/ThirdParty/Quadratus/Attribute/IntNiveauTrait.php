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
 * Niveau trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNiveauTrait {

    /**
     * Niveau.
     *
     * @var int
     */
    private $niveau;

    /**
     * Get the niveau.
     *
     * @return int Returns the niveau.
     */
    public function getNiveau() {
        return $this->niveau;
    }

    /**
     * Set the niveau.
     *
     * @param int $niveau The niveau.
     */
    public function setNiveau($niveau) {
        $this->niveau = $niveau;
        return $this;
    }
}
