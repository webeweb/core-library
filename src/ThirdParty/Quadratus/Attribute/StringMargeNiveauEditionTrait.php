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
 * Marge niveau edition trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMargeNiveauEditionTrait {

    /**
     * Marge niveau edition.
     *
     * @var string
     */
    private $margeNiveauEdition;

    /**
     * Get the marge niveau edition.
     *
     * @return string Returns the marge niveau edition.
     */
    public function getMargeNiveauEdition() {
        return $this->margeNiveauEdition;
    }

    /**
     * Set the marge niveau edition.
     *
     * @param string $margeNiveauEdition The marge niveau edition.
     */
    public function setMargeNiveauEdition($margeNiveauEdition) {
        $this->margeNiveauEdition = $margeNiveauEdition;
        return $this;
    }
}
