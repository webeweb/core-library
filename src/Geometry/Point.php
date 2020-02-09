<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Geometry;

use WBW\Library\Core\Model\Attribute\FloatXTrait;
use WBW\Library\Core\Model\Attribute\FloatYTrait;

/**
 * Point.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\Geometry
 */
class Point {

    use FloatXTrait;
    use FloatYTrait;

    /**
     * Constructor.
     *
     * @param float $x The x.
     * @param float $y The y.
     */
    public function __construct($x = null, $y = null) {
        $this->setX($x);
        $this->setY($y);
    }

    /**
     * Distance d = sqrt(a² + b²).
     *
     * @param Point $p The point.
     * @return float Returns the distance.
     */
    public function d(Point $p) {

        $x = $this->getX() - $p->getY();
        $y = $this->getY() - $p->getY();

        $x2 = $x * $x;
        $y2 = $y * $y;

        return sqrt($x2 + $y2);
    }

    /**
     * Degree.
     *
     * @param Point $p The point.
     * @return float Returns the degree.
     */
    public function deg(Point $p) {
        return $this->rad($p) * 180 / pi();
    }

    /**
     * Slope m = (y2 - y1) / (x2 - x1).
     *
     * @param Point $p The point.
     * @return float Returns the slope.
     */
    public function m(Point $p) {

        $x = $this->getX() - $p->getX();
        $y = $this->getY() - $p->getY();

        if (0 === $x) {
            return INF;
        }

        return $y / $x;
    }

    /**
     * Radian.
     *
     * @param Point $p The point.
     * @return float Returns the radian.
     */
    public function rad(Point $p) {

        $m = $this->m($p);
        if (INF !== $m) {
            return atan($m);
        }

        $rad = pi() / 2;

        return $p->getY() < $this->getY() ? $rad : -$rad;
    }

    /**
     * Rotate.
     *
     * @param Point $o The point.
     * @param float $deg The degrees.
     * @return Point Returns the rotated point.
     */
    public function rotate(Point $o, $deg) {

        $rad = $deg * pi() / 180;

        $dX = $this->getX() - $o->getX();
        $dY = $this->getY() - $o->getY();

        $x = $dX * cos($rad) + $dY * sin($rad) + $o->getX();
        $y = -$dX * sin($rad) + $dY * cos($rad) + $o->getY();

        return new Point($x, $y);
    }
}
