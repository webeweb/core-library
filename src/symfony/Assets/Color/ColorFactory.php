<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Assets\Color;

use WBW\Library\Symfony\Assets\Color\MaterialDesignColorPalette\AmberColorProvider;
use WBW\Library\Symfony\Assets\Color\MaterialDesignColorPalette\BlackColorProvider;
use WBW\Library\Symfony\Assets\Color\MaterialDesignColorPalette\BlueColorProvider;
use WBW\Library\Symfony\Assets\Color\MaterialDesignColorPalette\BlueGreyColorProvider;
use WBW\Library\Symfony\Assets\Color\MaterialDesignColorPalette\BrownColorProvider;
use WBW\Library\Symfony\Assets\Color\MaterialDesignColorPalette\CyanColorProvider;
use WBW\Library\Symfony\Assets\Color\MaterialDesignColorPalette\DeepOrangeColorProvider;
use WBW\Library\Symfony\Assets\Color\MaterialDesignColorPalette\DeepPurpleColorProvider;
use WBW\Library\Symfony\Assets\Color\MaterialDesignColorPalette\GreenColorProvider;
use WBW\Library\Symfony\Assets\Color\MaterialDesignColorPalette\GreyColorProvider;
use WBW\Library\Symfony\Assets\Color\MaterialDesignColorPalette\IndigoColorProvider;
use WBW\Library\Symfony\Assets\Color\MaterialDesignColorPalette\LightBlueColorProvider;
use WBW\Library\Symfony\Assets\Color\MaterialDesignColorPalette\LightGreenColorProvider;
use WBW\Library\Symfony\Assets\Color\MaterialDesignColorPalette\LimeColorProvider;
use WBW\Library\Symfony\Assets\Color\MaterialDesignColorPalette\OrangeColorProvider;
use WBW\Library\Symfony\Assets\Color\MaterialDesignColorPalette\PinkColorProvider;
use WBW\Library\Symfony\Assets\Color\MaterialDesignColorPalette\PurpleColorProvider;
use WBW\Library\Symfony\Assets\Color\MaterialDesignColorPalette\RedColorProvider;
use WBW\Library\Symfony\Assets\Color\MaterialDesignColorPalette\TealColorProvider;
use WBW\Library\Symfony\Assets\Color\MaterialDesignColorPalette\WhiteColorProvider;
use WBW\Library\Symfony\Assets\Color\MaterialDesignColorPalette\YellowColorProvider;
use WBW\Library\Symfony\Provider\Assets\ColorProviderInterface;

/**
 * Color factory.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Assets\Color
 */
class ColorFactory {

    /**
     * Creates a Material Design Color Palette.
     *
     * @return ColorProviderInterface[] Returns the Material Design Color Palette.
     */
    public static function newMaterialDesignColorPalette(): array {
        return [
            new RedColorProvider(),
            new PinkColorProvider(),
            new PurpleColorProvider(),
            new DeepPurpleColorProvider(),
            new IndigoColorProvider(),
            new BlueColorProvider(),
            new LightBlueColorProvider(),
            new CyanColorProvider(),
            new TealColorProvider(),
            new GreenColorProvider(),
            new LightGreenColorProvider(),
            new LimeColorProvider(),
            new YellowColorProvider(),
            new AmberColorProvider(),
            new OrangeColorProvider(),
            new DeepOrangeColorProvider(),
            new BrownColorProvider(),
            new GreyColorProvider(),
            new BlueGreyColorProvider(),
            new BlackColorProvider(),
            new WhiteColorProvider(),
        ];
    }
}
