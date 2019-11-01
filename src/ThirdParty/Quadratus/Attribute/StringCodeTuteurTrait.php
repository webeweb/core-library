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
 * Code tuteur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeTuteurTrait {

    /**
     * Code tuteur.
     *
     * @var string
     */
    private $codeTuteur;

    /**
     * Get the code tuteur.
     *
     * @return string Returns the code tuteur.
     */
    public function getCodeTuteur() {
        return $this->codeTuteur;
    }

    /**
     * Set the code tuteur.
     *
     * @param string $codeTuteur The code tuteur.
     */
    public function setCodeTuteur($codeTuteur) {
        $this->codeTuteur = $codeTuteur;
        return $this;
    }
}
