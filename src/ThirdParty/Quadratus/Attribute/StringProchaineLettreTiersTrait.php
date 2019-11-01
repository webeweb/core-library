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
 * Prochaine lettre tiers trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringProchaineLettreTiersTrait {

    /**
     * Prochaine lettre tiers.
     *
     * @var string
     */
    private $prochaineLettreTiers;

    /**
     * Get the prochaine lettre tiers.
     *
     * @return string Returns the prochaine lettre tiers.
     */
    public function getProchaineLettreTiers() {
        return $this->prochaineLettreTiers;
    }

    /**
     * Set the prochaine lettre tiers.
     *
     * @param string $prochaineLettreTiers The prochaine lettre tiers.
     */
    public function setProchaineLettreTiers($prochaineLettreTiers) {
        $this->prochaineLettreTiers = $prochaineLettreTiers;
        return $this;
    }
}
