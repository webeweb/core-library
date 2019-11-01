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
 * Sel av lst perso champs modif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSelAvLstPersoChampsModifTrait {

    /**
     * Sel av lst perso champs modif.
     *
     * @var bool
     */
    private $selAvLstPersoChampsModif;

    /**
     * Get the sel av lst perso champs modif.
     *
     * @return bool Returns the sel av lst perso champs modif.
     */
    public function getSelAvLstPersoChampsModif() {
        return $this->selAvLstPersoChampsModif;
    }

    /**
     * Set the sel av lst perso champs modif.
     *
     * @param bool $selAvLstPersoChampsModif The sel av lst perso champs modif.
     */
    public function setSelAvLstPersoChampsModif($selAvLstPersoChampsModif) {
        $this->selAvLstPersoChampsModif = $selAvLstPersoChampsModif;
        return $this;
    }
}
