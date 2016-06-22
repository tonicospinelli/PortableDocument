<?php

/*
 * Portable Document - Element Interfaces
 *
 * 2016 - Code @lpj145
 *
 * This library is free software; you can redistribute it and/or
 *  modify it under the terms of the GNU Lesser General Public
 *  License as published by the Free Software Foundation; either
 *  version 2.1 of the License, or (at your option) any later version.
 *
 *  This library is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 *  Lesser General Public License for more details.
 *
 *  You should have received a copy of the GNU Lesser General Public
 *  License along with this library; if not, write to the Free Software
 *  Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 */

namespace Element;


class Element implements ElementInterface
{
    public $positionX;
    public $positionY;
    //For drawBox
    public $height;
    public $width;
    public $radius;

    public $id;

    /*****************************************************************/
    /***************** Not Touch area ********************************/
    /*****************************************************************/

    /*
     * @return $positionX
     * @return $positionY
     */
    public function getPosition( )
    {
        return [ $this->positionX, $this->positionY ];
    }

}