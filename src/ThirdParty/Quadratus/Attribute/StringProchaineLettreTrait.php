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
 * Prochaine lettre trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringProchaineLettreTrait {

    /**
     * Prochaine lettre.
     *
     * @var string
     */
    private $prochaineLettre;

    /**
     * Get the prochaine lettre.
     *
     * @return string Returns the prochaine lettre.
     */
    public function getProchaineLettre() {
        return $this->prochaineLettre;
    }

    /**
     * Set the prochaine lettre.
     *
     * @param string $prochaineLettre The prochaine lettre.
     */
    public function setProchaineLettre($prochaineLettre) {
        $this->prochaineLettre = $prochaineLettre;
        return $this;
    }
}
