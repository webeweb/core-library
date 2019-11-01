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
 * Rep compta gen trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRepComptaGenTrait {

    /**
     * Rep compta gen.
     *
     * @var bool
     */
    private $repComptaGen;

    /**
     * Get the rep compta gen.
     *
     * @return bool Returns the rep compta gen.
     */
    public function getRepComptaGen() {
        return $this->repComptaGen;
    }

    /**
     * Set the rep compta gen.
     *
     * @param bool $repComptaGen The rep compta gen.
     */
    public function setRepComptaGen($repComptaGen) {
        $this->repComptaGen = $repComptaGen;
        return $this;
    }
}
